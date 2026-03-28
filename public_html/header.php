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
 *   $page_no_ticker   bool    (optional) Hide the ticker
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
    "47 community-led projects completed since 2019.",
    "700+ girls back in class every month.",
    "3,200+ residents with safer water access.",
    "15 chapters across Mpigi and Butambala.",
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

<!-- JSON-LD Structured Data -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "NGO",
  "name": "Omuto Foundation",
  "url": "https://omuto.org",
  "logo": "https://i.imgur.com/onkikq1.png",
  "description": "Youth-led community development in Mpigi and Butambala, Uganda. 47 completed projects. 7,000+ youth engaged.",
  "foundingDate": "2019",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Mpigi",
    "addressCountry": "UG"
  },
  "areaServed": {
    "@type": "Place",
    "name": "Mpigi and Butambala, Uganda"
  },
  "sameAs": [
    "https://www.youtube.com/@omutopulse",
    "https://www.instagram.com/omuto_foundation/"
  ],
  "contactPoint": {
    "@type": "ContactPoint",
    "email": "info@omuto.org",
    "contactType": "general"
  },
  "potentialAction": {
    "@type": "DonateAction",
    "name": "Fund a Chapter",
    "target": "https://omuto.org/campaign.php"
  }
}
</script>

<?= $page_extra_head ?>

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com"/>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
<link href="https://fonts.googleapis.com/css2?family=Inter:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,700;1,800;1,900&family=Space+Grotesk:wght@500;600;700&family=Gochi+Hand&display=swap" rel="stylesheet"/>

<!-- Global CSS -->
<link rel="stylesheet" href="global.css"/>

<?= $page_extra_css ?>
</head>
<body>

<?php if (!$page_no_ticker): ?>
<!-- TICKER -->
<div id="ticker">
  <div class="ticker-item" id="ticker-item">
    <span class="ticker-dot">●</span>
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
          <a href="essentials.php">Omuto Essentials</a>
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
      <a href="essentials.php">Essentials</a>
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