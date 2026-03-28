<?php
/**
 * Omuto Foundation — footer.php
 * ──────────────────────────────
 * Include at the very end of every page, just before </body>.
 *
 * Optional variables (set before including):
 *
 *   $footer_show_sticky    bool    Show the sticky bottom bar (default: true)
 *   $footer_sticky_msg     string  Custom sticky message
 *   $footer_show_leaflet   bool    Load Leaflet map library (default: false)
 *                                  Set to true on pages that use a Leaflet map
 *   $footer_extra_js       string  Any extra <script> blocks for this page
 *   $ticker_messages       array   Same array used in header.php — pass it
 *                                  again here so the JS ticker can cycle msgs.
 *                                  (If not set, falls back to the 4 defaults.)
 */

$footer_show_sticky  = $footer_show_sticky  ?? true;
$footer_sticky_msg   = $footer_sticky_msg   ?? 'Ready to support youth-led change?';
$footer_show_leaflet = $footer_show_leaflet ?? false;
$footer_extra_js     = $footer_extra_js     ?? '';

// Re-use ticker messages set in header.php or fall back to defaults
$ticker_messages = $ticker_messages ?? [
    "Omuto Youth Center now open in Nabbuzi, Mpigi.",
    "47 community-led projects completed since 2019.",
    "700+ girls back in class every month.",
    "3,200+ residents with safer water access.",
];
$ticker_js = json_encode(array_values($ticker_messages), JSON_HEX_TAG | JSON_HEX_APOS);
?>

<?php if ($footer_show_leaflet): ?>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
<?php endif; ?>

<!-- FOOTER -->
<footer>
  <div class="container">
    <div class="footer-grid">
      <!-- Brand -->
      <div class="footer-brand">
        <img src="https://i.imgur.com/onkikq1.png" alt="Omuto Foundation"/>
        <p class="footer-desc">
          Youth-led community development in Mpigi and Butambala, Uganda.<br/>For Youth &amp; Sustainable Change. Since 2019.
        </p>
        <div class="footer-socials">
          <a href="https://www.youtube.com/@omutopulse" target="_blank" rel="noopener" aria-label="YouTube">
            <svg width="14" height="14" fill="#fff" viewBox="0 0 24 24"><path d="M21.582 6.186a2.506 2.506 0 0 0-1.768-1.768C18.254 4 12 4 12 4s-6.254 0-7.814.418a2.506 2.506 0 0 0-1.768 1.768C2 7.746 2 12 2 12s0 4.254.418 5.814a2.506 2.506 0 0 0 1.768 1.768C5.746 20 12 20 12 20s6.254 0 7.814-.418a2.506 2.506 0 0 0 1.768-1.768C22 16.254 22 12 22 12s0-4.254-.418-5.814zM10 15.464V8.536L16 12l-6 3.464z"/></svg>
          </a>
          <a href="https://wa.me/256750028703" target="_blank" rel="noopener" aria-label="WhatsApp">
            <svg width="14" height="14" fill="#fff" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
          </a>
          <a href="https://www.instagram.com/omuto_foundation/" target="_blank" rel="noopener" aria-label="Instagram">
            <svg width="14" height="14" fill="#fff" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
          </a>
          <a href="mailto:info@omuto.org" aria-label="Email">
            <svg width="14" height="14" fill="#fff" viewBox="0 0 24 24"><path d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg>
          </a>
        </div>
      </div>

      <!-- Programs nav -->
      <nav aria-label="Footer Programs">
        <h4>Programs</h4>
        <ul>
          <li><a href="osx.php">School Xperience</a></li>
          <li><a href="yap.php">YAP Chapters</a></li>
          <li><a href="ofa.php">Football Alliance</a></li>
          <li><a href="essentials.php">Omuto Essentials</a></li>
          <li><a href="https://www.youtube.com/@omutopulse" target="_blank" rel="noopener">Omuto Pulse ↗</a></li>
        </ul>
      </nav>

      <!-- Org nav -->
      <nav aria-label="Footer Organisation">
        <h4>Organisation</h4>
        <ul>
          <li><a href="about.php">About Omuto</a></li>
          <li><a href="impact.php">Impact Data</a></li>
          <li><a href="report2025.php">Annual Report 2025</a></li>
          <li><a href="contact.php">Contact &amp; Partner</a></li>
          <li><a href="privacy.php">Privacy Policy</a></li>
        </ul>
      </nav>
    </div>

    <div class="footer-bottom">
      <span>© <span id="yr"></span> Omuto Foundation. All rights reserved.</span>
      <span>Registered Non-Profit · Mpigi, Uganda · info@omuto.org</span>
    </div>
  </div>
</footer>

<?php if ($footer_show_sticky): ?>
<!-- STICKY BAR -->
<div id="sticky" role="complementary">
  <div class="container sticky-inner">
    <p class="sticky-msg"><?= htmlspecialchars($footer_sticky_msg) ?></p>
    <div class="sticky-btns">
      <a href="campaign.php" class="btn btn-red btn-sm">Fund a Chapter</a>
      <a href="contact.php"  class="btn btn-outline-white btn-sm">Partner</a>
      <button class="sticky-x" onclick="document.getElementById('sticky').style.display='none'" aria-label="Dismiss">✕</button>
    </div>
  </div>
</div>
<?php endif; ?>

<?php if ($footer_show_leaflet): ?>
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
<?php endif; ?>

<!-- GLOBAL JS -->
<script>
// Year
document.getElementById('yr').textContent = new Date().getFullYear();

// Mobile nav toggle
(function(){
  const hbg = document.getElementById('hbg');
  const mob = document.getElementById('mob-nav');
  if(!hbg || !mob) return;
  hbg.addEventListener('click', () => {
    const open = mob.classList.toggle('open');
    hbg.setAttribute('aria-expanded', String(open));
    document.body.style.overflow = open ? 'hidden' : '';
  });
  document.addEventListener('click', e => {
    if(mob.classList.contains('open') && !mob.contains(e.target) && !hbg.contains(e.target)){
      mob.classList.remove('open');
      hbg.setAttribute('aria-expanded','false');
      document.body.style.overflow = '';
    }
  });
})();

// Scroll-reveal
(function(){
  const obs = new IntersectionObserver(entries => {
    entries.forEach(e => { if(e.isIntersecting) e.target.classList.add('visible'); });
  },{threshold:0.08,rootMargin:'0px 0px -20px 0px'});
  document.querySelectorAll('.reveal').forEach(el => obs.observe(el));
})();

// Sticky bar
<?php if ($footer_show_sticky): ?>
(function(){
  let shown = false;
  window.addEventListener('scroll', () => {
    if(!shown && window.scrollY > 500){
      shown = true;
      const s = document.getElementById('sticky');
      if(s) s.classList.add('show');
    }
  },{passive:true});
})();
<?php endif; ?>

// Ticker cycling
(function(){
  const msgs = <?= $ticker_js ?>;
  const tEl  = document.querySelector('#ticker-item .ticker-text');
  const tItem = document.getElementById('ticker-item');
  if(!tEl || !tItem || msgs.length < 2) return;
  let idx = 0;
  setInterval(() => {
    tItem.style.opacity = 0;
    setTimeout(() => {
      idx = (idx + 1) % msgs.length;
      tEl.textContent = msgs[idx];
      tItem.style.opacity = 1;
    }, 400);
  }, 5000);
})();
</script>

<!-- Back to Top -->
<button id="back-to-top" aria-label="Back to top" title="Back to top">
  <svg viewBox="0 0 24 24"><path d="M7.41 15.41L12 10.83l4.59 4.58L18 14l-6-6-6 6z"/></svg>
</button>

<script>
(function(){
  const btn = document.getElementById('back-to-top');
  if(!btn) return;
  
  window.addEventListener('scroll', () => {
    if(window.scrollY > 600) {
      btn.classList.add('visible');
    } else {
      btn.classList.remove('visible');
    }
  }, {passive: true});
  
  btn.addEventListener('click', () => {
    window.scrollTo({top: 0, behavior: 'smooth'});
  });
})();
</script>

<?= $footer_extra_js ?>

</body>
</html>