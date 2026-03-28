<?php
/**
 * Omuto Foundation — header.php
 * ─────────────────────────────
 * Include at the top of every page AFTER setting these variables:
 *
 *   $page_title       string  Full <title> tag text
 *   $page_desc        string  Meta description (max ~155 chars)
 *   $page_canonical   string  Canonical URL  e.g. "https://omuto.org/about"
 *   $page_og_image    string  OG image URL (defaults to logo)
 *   $page_active_nav  string  Which nav link gets .active class:
 *                             'home' | 'work' | 'about' | 'impact' | 'store'
 *   $page_extra_css   string  (optional) Any extra <style> or <link> tags
 *   $page_extra_head  string  (optional) Extra <script> or <meta> tags for <head>
 *   $ticker_messages  array   (optional) Override default ticker messages
 *   $nav_show_map_link bool   (optional) Show/hide map link in nav
 *
 * Example (about.php):
 *   <?php
 *   $page_title      = "About | Omuto Foundation";
 *   $page_desc       = "Started in 2019 with no office and no money. Just young people tired of waiting.";
 *   $page_canonical  = "https://omuto.org/about";
 *   $page_active_nav = "about";
 *   include 'header.php';
 *   ?>
 */

// ── Defaults ────────────────────────────────────────────────────────────────
$page_title      = $page_title      ?? 'Omuto Foundation | Youth-Led Community Development, Uganda';
$page_desc       = $page_desc       ?? 'Youth-led community development across Mpigi and Butambala, Uganda. 47 completed projects. 7,000+ youth engaged.';
$page_canonical  = $page_canonical  ?? 'https://omuto.org';
$page_og_image   = $page_og_image   ?? 'https://i.imgur.com/onkikq1.png';
$page_active_nav = $page_active_nav ?? 'home';
$page_extra_css  = $page_extra_css  ?? '';
$page_extra_head = $page_extra_head ?? '';
$page_no_ticker  = $page_no_ticker  ?? false;

$ticker_messages = $ticker_messages ?? [
    "Omuto Youth Center now open in Nabbuzi, Mpigi.",
    "47 community-led projects completed since 2019.",
    "700+ girls back in class every month.",
    "3,200+ residents with safer water access.",
];

// Helper — returns ' active' if $key matches $page_active_nav
function nav_active(string $key, string $current): string {
    return $key === $current ? ' active' : '';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta name="description" content="<?= htmlspecialchars($page_desc) ?>"/>
<title><?= htmlspecialchars($page_title) ?></title>
<meta name="theme-color" content="#1D2631"/>
<link rel="canonical" href="<?= htmlspecialchars($page_canonical) ?>"/>
<link rel="icon" type="image/png" href="https://i.imgur.com/onkikq1.png"/>

<!-- Open Graph -->
<meta property="og:type"        content="website"/>
<meta property="og:title"       content="<?= htmlspecialchars($page_title) ?>"/>
<meta property="og:description" content="<?= htmlspecialchars($page_desc) ?>"/>
<meta property="og:image"       content="<?= htmlspecialchars($page_og_image) ?>"/>
<meta property="og:url"         content="<?= htmlspecialchars($page_canonical) ?>"/>

<!-- Twitter / X -->
<meta name="twitter:card"        content="summary_large_image"/>
<meta name="twitter:title"       content="<?= htmlspecialchars($page_title) ?>"/>
<meta name="twitter:description" content="<?= htmlspecialchars($page_desc) ?>"/>
<meta name="twitter:image"       content="<?= htmlspecialchars($page_og_image) ?>"/>

<?= $page_extra_head ?>

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com"/>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
<link href="https://fonts.googleapis.com/css2?family=Inter:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,700;1,800;1,900&family=Space+Grotesk:wght@500;600;700&family=Gochi+Hand&display=swap" rel="stylesheet"/>

<!-- Global CSS -->
<style>
:root{
  --red:#EE2726;--navy:#1D2631;--cream:#F9F6EE;--yellow:#FFCF5D;
  --teal:#40D2AF;--blue:#96D9F2;--gold:#D69100;--white:#fff;
  --ticker-h:32px;
  --font-head:'Inter',system-ui,sans-serif;
  --font-ui:'Space Grotesk',sans-serif;
  --font-sketch:'Gochi Hand',cursive;
  --b:4px solid #1D2631;--b-thin:2px solid #1D2631;
  --shadow:8px 8px 0 #1D2631;--shadow-sm:4px 4px 0 #1D2631;--shadow-lg:12px 12px 0 #1D2631;
  --radius:16px;--radius-sm:10px;
}
*,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
html{scroll-behavior:smooth}
body{font-family:'Inter',system-ui,sans-serif;font-size:16px;line-height:1.6;color:var(--navy);background:var(--cream);overflow-x:hidden}
img{display:block;max-width:100%;height:auto}
a{text-decoration:none;color:inherit}
button{border:none;background:none;cursor:pointer;font-family:inherit}
ul{list-style:none}
.container{max-width:1160px;margin:0 auto;padding:0 24px}
.t-section{font-family:var(--font-head);font-size:clamp(32px,4.5vw,52px);font-weight:900;line-height:1;letter-spacing:-.02em;text-transform:uppercase}
.t-body{font-size:17px;line-height:1.75;font-weight:500}
.line-red{color:var(--red)}
.eyebrow{font-family:var(--font-ui);font-size:10px;font-weight:700;text-transform:uppercase;letter-spacing:.22em;display:inline-block;padding:5px 14px;border-radius:30px;margin-bottom:16px}
.ew-red{background:rgba(238,39,38,.1);border:1.5px solid rgba(238,39,38,.3);color:var(--red)}
.ew-teal{background:rgba(64,210,175,.12);border:1.5px solid rgba(64,210,175,.35);color:#1a7a64}
.ew-navy{background:rgba(29,38,49,.07);border:1.5px solid rgba(29,38,49,.2);color:var(--navy)}
.ew-white{background:rgba(255,255,255,.15);border:1.5px solid rgba(255,255,255,.35);color:rgba(255,255,255,.9)}
.btn{display:inline-flex;align-items:center;gap:8px;font-family:var(--font-ui);font-size:12px;font-weight:700;text-transform:uppercase;letter-spacing:.1em;padding:14px 28px;border-radius:var(--radius-sm);border:var(--b);cursor:pointer;transition:all .18s ease;white-space:nowrap}
.btn-red{background:var(--red);color:#fff;box-shadow:var(--shadow-sm)}.btn-red:hover{transform:translate(-3px,-3px);box-shadow:var(--shadow)}
.btn-white{background:#fff;color:var(--navy);box-shadow:var(--shadow-sm)}.btn-white:hover{transform:translate(-2px,-2px);box-shadow:var(--shadow);background:var(--yellow)}
.btn-navy{background:var(--navy);color:#fff;box-shadow:var(--shadow-sm)}.btn-navy:hover{transform:translate(-2px,-2px);box-shadow:var(--shadow)}
.btn-outline-white{background:transparent;color:#fff;border-color:rgba(255,255,255,.4)}.btn-outline-white:hover{background:rgba(255,255,255,.12)}
.btn-sm{padding:10px 20px;font-size:11px}
.halftone{position:absolute;inset:0;background-image:radial-gradient(circle,rgba(29,38,49,.07) 1px,transparent 1px);background-size:22px 22px;pointer-events:none}
.halftone-light{background-image:radial-gradient(circle,rgba(255,255,255,.06) 1px,transparent 1px)}
.reveal{opacity:0;transform:translateY(28px);transition:opacity .55s ease,transform .55s ease}
.reveal.visible{opacity:1;transform:none}
.rd1{transition-delay:.08s}.rd2{transition-delay:.16s}.rd3{transition-delay:.24s}.rd4{transition-delay:.32s}

/* ── TICKER ── */
#ticker{position:fixed;top:0;left:0;width:100%;height:var(--ticker-h);background:var(--navy);color:#fff;border-bottom:3px solid var(--red);z-index:800;display:flex;align-items:center;justify-content:center}
.ticker-item{font-family:var(--font-ui);font-size:10px;font-weight:700;text-transform:uppercase;letter-spacing:.18em;padding:0 32px;display:flex;align-items:center;gap:8px}
.ticker-dot{color:var(--red);opacity:.7}
.ticker-new{background:var(--red);color:#fff;font-family:var(--font-ui);font-size:8px;font-weight:700;text-transform:uppercase;letter-spacing:.1em;padding:2px 6px;border-radius:3px}

/* ── NAV ── */
#nav{position:fixed;top:var(--ticker-h);left:0;width:100%;z-index:700;padding:6px 16px}
.nav-wrap{max-width:1200px;margin:0 auto;background:#fff;border:var(--b);border-radius:var(--radius);box-shadow:var(--shadow-sm);display:grid;grid-template-columns:1fr auto 1fr;align-items:center;padding:8px 20px;gap:8px}
.nav-left{display:flex;align-items:center;justify-content:flex-end;gap:18px}
.nav-center{padding:0 24px}
.nav-center a{display:flex;align-items:center}
.nav-center img{height:64px;display:block;transition:transform .2s}
.nav-center a:hover img{transform:scale(1.06)}
.nav-right{display:flex;align-items:center;justify-content:flex-start;gap:18px}
.nav-link{font-family:var(--font-ui);font-size:11px;font-weight:700;text-transform:uppercase;letter-spacing:.1em;padding:7px 11px;border-radius:8px;color:var(--navy);transition:all .15s;border:none;background:none;cursor:pointer;white-space:nowrap}
.nav-link:hover,.nav-link.active{background:var(--cream);color:var(--red)}
.nav-dd{position:relative}
.nav-dd-panel{position:absolute;top:100%;left:0;background:#fff;border:2px solid #1D2631;border-radius:12px;padding:8px 0;min-width:210px;box-shadow:4px 4px 0 #1D2631;opacity:0;visibility:hidden;transform:translateY(6px);transition:opacity .18s ease,transform .18s ease,visibility .18s;z-index:50}
.nav-dd:hover .nav-dd-panel,.nav-dd:focus-within .nav-dd-panel{opacity:1;visibility:visible;transform:translateY(0)}
.nav-dd-panel a{display:block;padding:8px 16px;font-family:var(--font-ui);font-size:11px;font-weight:700;text-transform:uppercase;letter-spacing:.08em;color:var(--navy);white-space:nowrap}
.nav-dd-panel a:hover{background:var(--cream);color:var(--red)}
.nav-cta-btn{font-family:var(--font-ui)!important;background:var(--red)!important;color:#fff!important;border:var(--b)!important;border-radius:8px!important;padding:8px 16px!important;font-size:11px!important;font-weight:700!important;transition:all .15s!important}
.nav-cta-btn:hover{background:var(--navy)!important;transform:translateY(-1px)}
.hbg{display:none;flex-direction:column;gap:5px;padding:8px;cursor:pointer}
.hbg span{display:block;width:22px;height:2.5px;background:var(--navy);border-radius:2px;transition:all .2s}
#mob-nav{display:none;position:fixed;top:calc(var(--ticker-h) + 70px);left:12px;right:12px;background:#fff;border:var(--b);border-radius:var(--radius);box-shadow:var(--shadow-lg);padding:24px;z-index:690;max-height:80vh;overflow-y:auto}
#mob-nav.open{display:block}
/* Inside your <style> tag, add: */
.hbg.active span:nth-child(1) {
  transform: rotate(45deg) translate(5px, 5px);
}
.hbg.active span:nth-child(2) {
  opacity: 0;
}
.hbg.active span:nth-child(3) {
  transform: rotate(-45deg) translate(7px, -6px);
}/* Initial state for dropdown links */
.nav-dd-panel a {
  opacity: 0;
  transform: translateX(-10px) scale(0.95);
  transition: opacity 0.2s ease, transform 0.25s cubic-bezier(0.34, 1.56, 0.64, 1);
}

/* Active state triggered by parent hover */
.nav-dd:hover .nav-dd-panel a,
.nav-dd:focus-within .nav-dd-panel a {
  opacity: 1;
  transform: translateX(0) scale(1);
}

/* The Stagger: Delays the animation for each subsequent item */
.nav-dd:hover .nav-dd-panel a:nth-child(1) { transition-delay: 0.05s; }
.nav-dd:hover .nav-dd-panel a:nth-child(2) { transition-delay: 0.1s; }
.nav-dd:hover .nav-dd-panel a:nth-child(3) { transition-delay: 0.15s; }
.nav-dd:hover .nav-dd-panel a:nth-child(4) { transition-delay: 0.2s; }
.nav-dd:hover .nav-dd-panel a:nth-child(5) { transition-delay: 0.25s; }
.mob-links a{display:block;font-family:var(--font-ui);font-size:13px;font-weight:700;text-transform:uppercase;letter-spacing:.08em;padding:10px 14px;border-radius:8px;color:var(--navy)}
.mob-links a:hover{background:var(--cream);color:var(--red)}
.mob-group-lbl{font-family:var(--font-ui);font-size:9px;font-weight:700;text-transform:uppercase;letter-spacing:.22em;color:rgba(29,38,49,.4);padding:10px 14px 4px;display:block}
.mob-group-links a{padding:8px 14px 8px 24px;font-size:12px}
.mob-ctas{display:flex;flex-direction:column;gap:8px;padding-top:16px;border-top:2px solid rgba(29,38,49,.08)}
.mob-ctas a{font-family:var(--font-ui);font-size:13px;font-weight:700;text-transform:uppercase;letter-spacing:.08em;padding:12px;border-radius:10px;text-align:center;border:var(--b)}
.mob-ctas a.primary{background:var(--red);color:#fff}
.mob-ctas a.secondary{background:#fff;color:var(--navy)}
@media(max-width:960px){.nav-left,.nav-right{display:none}.nav-wrap{display:flex;justify-content:space-between}.hbg{display:flex}}

/* ── STICKY BAR ── */
#sticky{position:fixed;bottom:0;left:0;width:100%;background:rgba(29,38,49,.96);backdrop-filter:blur(8px);border-top:3px solid var(--red);padding:11px 0;z-index:500;transform:translateY(100%);transition:transform .3s ease}
#sticky.show{transform:none}
.sticky-inner{display:flex;align-items:center;justify-content:space-between;gap:14px}
.sticky-msg{font-family:var(--font-ui);font-size:11px;font-weight:700;text-transform:uppercase;letter-spacing:.12em;color:#fff}
.sticky-btns{display:flex;gap:8px;align-items:center}
.sticky-x{color:rgba(255,255,255,.4);font-size:18px;padding:4px 8px;cursor:pointer;transition:color .15s;background:none;border:none}
.sticky-x:hover{color:#fff}
@media(max-width:580px){.sticky-msg{display:none}}
</style>

<?= $page_extra_css ?>
</head>
<body>

<?php if (!$page_no_ticker): ?>
<!-- TICKER -->
<div id="ticker">
  <div class="ticker-item" id="ticker-item">
    <span class="ticker-dot">●</span>
    <span class="ticker-new">New</span>
    <span class="ticker-text"><?= htmlspecialchars($ticker_messages[0]) ?></span>
  </div>
</div>
<?php endif; ?>

<!-- NAV -->
<nav id="nav" aria-label="Main navigation">
  <div class="nav-wrap">
    <div class="nav-left">
      <a href="index.php" class="nav-link<?= nav_active('home', $page_active_nav) ?>">Home</a>
      <div class="nav-dd">
        <button class="nav-link<?= nav_active('work', $page_active_nav) ?>" aria-haspopup="true">Our Work ▾</button>
        <div class="nav-dd-panel" role="menu">
          <a href="osx.php">School Xperience</a>
          <a href="yap.php">YAP Chapters</a>
          <a href="ofa.php">Football Alliance</a>
          <a href="https://www.youtube.com/@omutopulse" target="_blank" rel="noopener">Omuto Pulse ↗</a>
          <a href="shop.php">Omuto Essentials</a>
        </div>
      </div>
      <a href="about.php" class="nav-link<?= nav_active('about', $page_active_nav) ?>">About</a>
    </div>
    <div class="nav-center">
      <a href="index.php" aria-label="Omuto Foundation home">
        <img src="https://i.imgur.com/onkikq1.png" alt="Omuto Foundation"/>
      </a>
    </div>
    <div class="nav-right">
      <div class="nav-dd">
        <button class="nav-link<?= nav_active('impact', $page_active_nav) ?>" aria-haspopup="true">Impact ▾</button>
        <div class="nav-dd-panel" role="menu">
          <a href="report2025.php">Annual Report 2025</a>
          <a href="impact.php">Impact Data</a>
          <a href="docs.php">Financials</a>
        </div>
      </div>
      <a href="essentials.php" class="nav-link<?= nav_active('store', $page_active_nav) ?>">Store</a>
      <a href="https://wa.me/256750028703" target="_blank" rel="noopener" class="nav-link" style="padding:7px 9px" aria-label="WhatsApp">
        <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
      </a>
      <a href="campaign.php" class="nav-link nav-cta-btn">Fund a Chapter</a>
    </div>
    <button class="hbg" id="hbg" aria-label="Open menu" aria-expanded="false">
      <span></span><span></span><span></span>
    </button>
  </div>
</nav>

<!-- MOBILE NAV -->
<div id="mob-nav" role="dialog" aria-label="Mobile navigation">
  <div class="mob-links">
    <a href="index.php"<?= $page_active_nav === 'home' ? ' style="color:var(--red)"' : '' ?>>Home</a>
    <span class="mob-group-lbl">Our Work</span>
    <div class="mob-group-links">
      <a href="osx.php">School Xperience</a>
      <a href="yap.php">YAP Chapters</a>
      <a href="ofa.php">Football Alliance</a>
      <a href="https://www.youtube.com/@omutopulse" target="_blank">Omuto Pulse ↗</a>
      <a href="shop.php">Essentials</a>
    </div>
    <a href="about.php"<?= $page_active_nav === 'about' ? ' style="color:var(--red)"' : '' ?>>About</a>
    <span class="mob-group-lbl">Impact</span>
    <div class="mob-group-links">
      <a href="report2025.php">Annual Report 2025</a>
      <a href="impact.php">Impact Data</a>
    </div>
    <a href="essentials.php"<?= $page_active_nav === 'store' ? ' style="color:var(--red)"' : '' ?>>Store</a>
  </div>
  <div class="mob-ctas">
    <a href="campaign.php" class="primary">Fund a Chapter</a>
    <a href="contact.php" class="secondary">Partner With Us</a>
  </div>
</div>

<!-- PAGE CONTENT STARTS — wrap in: <main style="padding-top:calc(var(--ticker-h) + 70px)"> -->