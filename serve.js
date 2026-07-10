const http = require('http');
const fs = require('fs');
const path = require('path');

const ROOT = '/Users/me/Omuto-Foundation-Website/public_html';

// Pre-parse PHP files to extract variables
const phpVars = {};

function parsePHP(filePath) {
  const content = fs.readFileSync(filePath, 'utf8');
  // Extract variable assignments
  content.replace(/\$(\w+)\s*=\s*\$(\w+)\s*\?\?\s*'([^']*)'/g, (_, varName, srcName, defaultVal) => {
    phpVars[varName] = defaultVal;
    return '';
  });
  content.replace(/\$(\w+)\s*=\s*\$(\w+)\s*\?\?\s*"([^"]*)"/g, (_, varName, srcName, defaultVal) => {
    phpVars[varName] = defaultVal;
    return '';
  });
  content.replace(/\$(\w+)\s*=\s*(true|false)/g, (_, varName, val) => {
    phpVars[varName] = val === 'true';
    return '';
  });
  content.replace(/\$(\w+)\s*=\s*\[/g, (_, varName) => {
    phpVars[varName] = [];
    return '';
  });
  content.replace(/\$ticker_messages\s*=\s*\$ticker_messages\s*\?\?\s*\[([^\]]+)\]/g, (_, arrContent) => {
    phpVars['ticker_messages'] = arrContent.split(',').map(s => s.trim().replace(/^['"]|['"]$/g, ''));
    return '';
  });
}

function resolveIncludes(content, filePath, depth = 0) {
  if (depth > 10) return content;
  // Strip PHP open/close tags that wrap variable setup
  content = content.replace(/^<\?php[\s\S]*?\?>/, '');
  
  content = content.replace(/<\?php\s+include\s+['"]([^'"]+)['"];\s*\?>/g, (_, inc) => {
    const incPath = path.resolve(path.dirname(filePath), inc);
    try {
      const incContent = fs.readFileSync(incPath, 'utf8');
      parsePHP(incPath);
      return resolveIncludes(incContent, incPath, depth + 1);
    } catch { return ''; }
  });
  content = content.replace(/<\?=\s*\$(\w+)\s*\?>/g, (_, varName) => {
    return phpVars[varName] !== undefined ? String(phpVars[varName]) : '';
  });
  content = content.replace(/<\?php\s+if\s*\([^)]+\)\s*:\s*\?>/g, '');
  content = content.replace(/<\?php\s+endif;\s*\?>/g, '');
  content = content.replace(/<\?php\s+end(if|foreach|while|for);\s*\?>/g, '');
  content = content.replace(/<\?php\s+(foreach|while|for)\s*\([^)]+\)\s*:\s*\?>/g, '');
  content = content.replace(/<\?php\s+else\s*:\s*\?>/g, '');
  content = content.replace(/<\?php\s+else\s*\?>/g, '');
  content = content.replace(/<\?php\s+if\s*\([^)]+\)\s*\{\s*\?>/g, '');
  content = content.replace(/<\?php\s+else\s*\{\s*\?>/g, '');
  content = content.replace(/<\?php\s*\}\s*\?>/g, '');
  content = content.replace(/<\?php\s+endforeach;\s*\?>/g, '');
  content = content.replace(/<\?php\s+echo\s+htmlspecialchars\(\$(\w+)\)\s*;\s*\?>/g, (_, varName) => {
    return phpVars[varName] !== undefined ? String(phpVars[varName]) : '';
  });
  content = content.replace(/<\?php\s+\$(\w+)\s*=\s*json_encode\([^)]+\)\s*;\s*\?>/g, '');
  content = content.replace(/<\?php\s+\$(\w+)\s*=\s*htmlspecialchars\([^)]+\)\s*;\s*\?>/g, '');
  return content;
}

http.createServer((req, res) => {
  let url = req.url.split('?')[0];
  if (url === '/') url = '/index.php';
  const filePath = path.join(ROOT, url);

  if (!filePath.startsWith(ROOT)) { res.writeHead(403); res.end('Forbidden'); return; }

  const ext = path.extname(filePath);
  const mime = {
    '.php': 'text/html', '.css': 'text/css', '.js': 'application/javascript',
    '.png': 'image/png', '.jpg': 'image/jpeg', '.jpeg': 'image/jpeg',
    '.svg': 'image/svg+xml', '.webp': 'image/webp', '.ico': 'image/x-icon',
    '.woff2': 'font/woff2', '.woff': 'font/woff', '.ttf': 'font/ttf',
  }[ext] || 'application/octet-stream';

  if (!fs.existsSync(filePath)) {
    const htmlPath = filePath.replace(/\.\w+$/, '.html');
    if (fs.existsSync(htmlPath)) {
      fs.readFile(htmlPath, (err, data) => {
        if (err) { res.writeHead(500); res.end('Error'); return; }
        res.writeHead(200, { 'Content-Type': mime });
        res.end(data);
      });
      return;
    }
    res.writeHead(404); res.end('Not Found'); return;
  }

  if (ext === '.php') {
    const content = fs.readFileSync(filePath, 'utf8');
    const processed = resolveIncludes(content, filePath);
    res.writeHead(200, { 'Content-Type': 'text/html; charset=utf-8' });
    res.end(processed);
  } else {
    res.writeHead(200, { 'Content-Type': mime });
    fs.createReadStream(filePath).pipe(res);
  }
}).listen(8080, () => {
  console.log('Serving http://localhost:8080');
});
