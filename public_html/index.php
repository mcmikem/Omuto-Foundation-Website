<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <!-- TASK 27: Updated OG description to include manifesto line -->
  <meta name="description" content="Young people in Mpigi and Butambala, Uganda are building water systems, leading health campaigns, and launching enterprises. Charity feeds a day. Structure feeds a generation." />
  <title>Omuto Foundation | Youth-Led Community Development in Uganda</title>
  <meta name="theme-color" content="#1D2631" />
  <link rel="canonical" href="https://omuto.org/" />
  <link rel="icon" type="image/png" href="https://i.imgur.com/onkikq1.png" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="Omuto Foundation | Young People Building Their Own Future" />
  <!-- TASK 27: Manifesto line in OG description -->
  <meta property="og:description" content="Charity feeds a day. Structure feeds a generation. 47 projects. 7,000+ youth. Water. Health. Leadership. Enterprise. All built from within." />
  <meta property="og:image" content="https://i.imgur.com/onkikq1.png" />
  <meta property="og:url" content="https://omuto.org" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="robots" content="index, follow" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Inter:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,700;1,800;1,900&family=Space+Grotesk:wght@500;600;700&family=Gochi+Hand&display=swap" rel="stylesheet" />
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "NGO",
      "name": "Omuto Foundation",
      "url": "https://omuto.org",
      "logo": "https://i.imgur.com/onkikq1.png",
      "description": "Youth-led community development system in Mpigi and Butambala, Uganda.",
      "foundingDate": "2019",
      "areaServed": {
        "@type": "Place",
        "name": "Mpigi and Butambala, Uganda"
      },
      "sameAs": ["https://www.youtube.com/@omutopulse", "https://www.instagram.com/omuto_foundation/"]
    }
  </script>
  <style>
    /* ============================
   RESET & BASE
============================ */
    :root {
      --red: #EE2726;
      --navy: #1D2631;
      --cream: #F9F6EE;
      --yellow: #FFCF5D;
      --teal: #40D2AF;
      --blue: #96D9F2;
      --gold: #D69100;
      --white: #fff;
      --ticker-h: 32px;
      --font-head: 'Inter', system-ui, sans-serif;
      --font-ui: 'Space Grotesk', sans-serif;
      --font-sketch: 'Gochi Hand', cursive;
      --b: 4px solid #1D2631;
      --b-thin: 2px solid #1D2631;
      --shadow: 8px 8px 0 #1D2631;
      --shadow-sm: 4px 4px 0 #1D2631;
      --shadow-lg: 12px 12px 0 #1D2631;
      --radius: 16px;
      --radius-sm: 10px;
    }

    *,
    *::before,
    *::after {
      box-sizing: border-box;
      margin: 0;
      padding: 0
    }

    html {
      scroll-behavior: smooth;
      scroll-padding-top: 100px
    }

    body {
      font-family: 'Inter', system-ui, sans-serif;
      font-size: 16px;
      line-height: 1.6;
      color: var(--navy);
      background: var(--cream);
      overflow-x: hidden
    }

    img {
      display: block;
      max-width: 100%;
      height: auto
    }

    a {
      text-decoration: none;
      color: inherit
    }

    button {
      border: none;
      background: none;
      cursor: pointer;
      font-family: inherit
    }

    ul {
      list-style: none
    }

    /* ============================
    ACCESSIBILITY
    ============================ */
    .skip-link {
      position: absolute;
      top: -100px;
      left: 50%;
      transform: translateX(-50%);
      background: var(--navy);
      color: #fff;
      padding: 12px 24px;
      border-radius: 8px;
      font-family: var(--font-ui);
      font-size: 12px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: .1em;
      z-index: 9999;
      transition: top .2s;
    }
    .skip-link:focus {
      top: 10px;
    }
    :focus-visible {
      outline: 3px solid var(--red);
      outline-offset: 2px;
    }
    .btn:focus-visible,
    .nav-link:focus-visible,
    .vid-card:focus-visible {
      outline: 3px solid var(--red);
      outline-offset: 3px;
    }
    @media (prefers-reduced-motion: reduce) {
      *,
      *::before,
      *::after {
        animation-duration: 0.01ms !important;
        animation-iteration-count: 1 !important;
        transition-duration: 0.01ms !important;
      }
      .reveal { opacity: 1; transform: none; }
      html { scroll-behavior: auto; }
    }

    /* ============================
    UTILITY
    ============================ */
    .container {
      max-width: 1160px;
      margin: 0 auto;
      padding: 0 24px
    }

    /* TASK 26: increased section padding for mid-page breathing room */
    .section {
      padding: 88px 0
    }

    .section-lg {
      padding: 104px 0
    }

    .section-sm {
      padding: 48px 0
    }

    .t-hero {
      font-family: var(--font-head);
      font-size: clamp(54px, 8.5vw, 100px);
      font-weight: 900;
      line-height: .9;
      letter-spacing: -.03em;
      text-transform: uppercase
    }

    .t-section {
      font-family: var(--font-head);
      font-size: clamp(32px, 4.5vw, 52px);
      font-weight: 900;
      line-height: 1;
      letter-spacing: -.02em;
      text-transform: uppercase
    }

    .t-ui {
      font-family: var(--font-ui);
      font-size: 11px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: .18em
    }

    .t-body {
      font-size: 17px;
      line-height: 1.75;
      font-weight: 500
    }

    .t-pullquote {
      font-family: var(--font-head);
      font-size: clamp(18px, 2.2vw, 24px);
      font-weight: 800;
      line-height: 1.4;
      font-style: italic
    }

    .line-red {
      color: var(--red)
    }

    .line-yellow {
      color: var(--yellow)
    }

    .eyebrow {
      font-family: var(--font-ui);
      font-size: 10px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: .22em;
      display: inline-block;
      padding: 5px 14px;
      border-radius: 30px;
      margin-bottom: 16px
    }

    .ew-red {
      background: rgba(238, 39, 38, .1);
      border: 1.5px solid rgba(238, 39, 38, .3);
      color: var(--red)
    }

    .ew-teal {
      background: rgba(64, 210, 175, .12);
      border: 1.5px solid rgba(64, 210, 175, .35);
      color: #1a7a64
    }

    .ew-navy {
      background: rgba(29, 38, 49, .07);
      border: 1.5px solid rgba(29, 38, 49, .2);
      color: var(--navy)
    }

    .ew-yellow {
      background: rgba(255, 207, 93, .25);
      border: 1.5px solid rgba(255, 207, 93, .6);
      color: #7a5d00
    }

    .ew-white {
      background: rgba(255, 255, 255, .15);
      border: 1.5px solid rgba(255, 255, 255, .35);
      color: rgba(255, 255, 255, .9)
    }

    .btn {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      font-family: var(--font-ui);
      font-size: 12px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: .1em;
      padding: 14px 28px;
      border-radius: var(--radius-sm);
      border: var(--b);
      cursor: pointer;
      transition: all .18s ease;
      white-space: nowrap
    }

    .btn-red {
      background: var(--red);
      color: #fff;
      box-shadow: var(--shadow-sm)
    }

    .btn-red:hover {
      transform: translate(-3px, -3px);
      box-shadow: var(--shadow)
    }

    .btn-white {
      background: #fff;
      color: var(--navy);
      box-shadow: var(--shadow-sm)
    }

    .btn-white:hover {
      transform: translate(-2px, -2px);
      box-shadow: var(--shadow);
      background: var(--yellow)
    }

    .btn-navy {
      background: var(--navy);
      color: #fff
    }

    .btn-navy:hover {
      background: #2a3847
    }

    .btn-outline-white {
      background: transparent;
      color: #fff;
      border-color: rgba(255, 255, 255, .4)
    }

    .btn-outline-white:hover {
      background: rgba(255, 255, 255, .12)
    }

    .btn-sm {
      padding: 10px 20px;
      font-size: 11px
    }

    .btn-full {
      width: 100%;
      justify-content: center
    }

    .halftone {
      position: absolute;
      inset: 0;
      background-image: radial-gradient(circle, rgba(29, 38, 49, .07) 1px, transparent 1px);
      background-size: 22px 22px;
      pointer-events: none
    }

    .halftone-light {
      background-image: radial-gradient(circle, rgba(255, 255, 255, .06) 1px, transparent 1px)
    }

    .reveal {
      opacity: 0;
      transform: translateY(28px);
      transition: opacity .55s ease, transform .55s ease
    }

    .reveal.visible {
      opacity: 1;
      transform: none
    }

    .rd1 {
      transition-delay: .08s
    }

    .rd2 {
      transition-delay: .16s
    }

    .rd3 {
      transition-delay: .24s
    }

    .rd4 {
      transition-delay: .32s
    }

    .rd5 {
      transition-delay: .4s
    }

/* ============================
   TICKER
============================ */
#ticker{
  position:fixed;
  top:0;
  left:0;
  width:100%;
  height:var(--ticker-h);
  background:var(--navy);
  border-bottom:3px solid var(--red);
  color:#fff;
  display:flex;
  justify-content:center;   /* <-- semicolon here */
  align-items:center;
  overflow:hidden;
  z-index:710;
}

.ticker-item{
  display:flex;
  align-items:center;
  gap:10px;
  white-space:nowrap;
  padding:0 16px;
  font-family:var(--font-ui);
  font-size:11px;
  font-weight:700;
  text-transform:uppercase;
  letter-spacing:.12em;
}

.ticker-dot{
  color:var(--red);
  opacity:.7;
}

.ticker-new{
  background:var(--red);
  color:#fff;
  font-family:var(--font-ui);
  font-size:8px;
  font-weight:700;
  text-transform:uppercase;
  letter-spacing:.1em;
  padding:2px 6px;
  border-radius:3px;
}

/* hide with nav on scroll */
#ticker{
  transition:transform .22s ease-out;
}
#ticker.nav-hidden{
  transform:translateY(-110%);
}

/* MOBILE: allow horizontal scroll so text doesn't wrap/break */
@media (max-width:600px){
  #ticker{
    justify-content:flex-start;
    white-space:nowrap;
    overflow-x:auto;
    overflow-y:hidden;
    -webkit-overflow-scrolling:touch;
  }

  .ticker-item{
    width:max-content;
    padding:4px 16px;
  }

  .ticker-text{
    display:inline-block;
    padding-right:40px;
  }
}

    /* ============================
   NAV
   TASK 6: removed first duplicate .nav-dd/.nav-dd-panel block entirely
   TASK 9: removed second duplicate .nav-dd-panel a hover
============================ */
    #nav{
      position: fixed;
      top: var(--ticker-h);
      left: 0;
      width: 100%;
      z-index: 700;
      padding: 6px 16px;
      transition: transform .22s ease-out;
    }
#nav.nav-hidden{
  transform: translateY(-110%);
}
    .nav-wrap {
      max-width: 1200px;
      margin: 0 auto;
      background: #fff;
      border: var(--b);
      border-radius: var(--radius);
      box-shadow: var(--shadow-sm);
      display: grid;
      grid-template-columns: 1fr auto 1fr;
      align-items: center;
      padding: 8px 20px;
      gap: 8px
    }

    .nav-left {
      display: flex;
      align-items: center;
      justify-content: flex-end;
      gap: 18px
    }

    .nav-center {
      padding: 0 24px
    }

    .nav-center a {
      display: flex;
      align-items: center
    }

    .nav-center img {
      height: 64px;
      display: block;
      transition: transform .2s
    }

    .nav-center a:hover img {
      transform: scale(1.06)
    }

    .nav-right {
      display: flex;
      align-items: center;
      justify-content: flex-start;
      gap: 18px
    }

    .nav-link {
      font-family: var(--font-ui);
      font-size: 11px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: .1em;
      padding: 10px 14px;
      border-radius: 8px;
      color: var(--navy);
      transition: all .15s;
      border: none;
      background: none;
      cursor: pointer;
      white-space: nowrap
    }

    .nav-link:hover,
    .nav-link.active {
      background: var(--cream);
      color: var(--red)
    }

    .nav-dd {
      position: relative
    }

    .nav-dd-panel {
      position: absolute;
      top: 100%;
      left: 0;
      background: #fff;
      border: 2px solid #1D2631;
      border-radius: 12px;
      padding: 8px 0;
      min-width: 210px;
      box-shadow: 4px 4px 0 #1D2631;
      opacity: 0;
      visibility: hidden;
      transform: translateY(6px);
      transition: opacity .18s ease, transform .18s ease, visibility .18s;
      z-index: 50
    }

    .nav-dd:hover .nav-dd-panel,
    .nav-dd:focus-within .nav-dd-panel {
      opacity: 1;
      visibility: visible;
      transform: translateY(0)
    }

    .nav-dd-panel a {
      display: block;
      padding: 8px 16px;
      font-family: var(--font-ui);
      font-size: 11px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: .08em;
      color: var(--navy)
    }

    .nav-dd-panel a:hover {
      background: var(--cream);
      color: var(--red)
    }

    .nav-cta-btn {
      font-family: var(--font-ui) !important;
      background: var(--red) !important;
      color: #fff !important;
      border: var(--b) !important;
      border-radius: 8px !important;
      padding: 8px 16px !important;
      font-size: 11px !important;
      font-weight: 700 !important;
      transition: all .15s !important
    }

    .nav-cta-btn:hover {
      background: var(--navy) !important;
      transform: translateY(-1px)
    }

    .hbg {
      display: none;
      flex-direction: column;
      gap: 5px;
      padding: 10px;
      cursor: pointer;
      border-radius: 8px;
      min-width: 48px;
      min-height: 48px;
      align-items: center;
      justify-content: center;
      transition: background .15s
    }

    .hbg:hover {
      background: var(--cream)
    }

    .hbg:focus-visible {
      outline: 3px solid var(--red);
      outline-offset: 2px
    }

    .hbg span {
      display: block;
      width: 24px;
      height: 2.5px;
      background: var(--navy);
      border-radius: 2px;
      transition: all .2s
    }

    #mob-nav{
  position:fixed;
  top:calc(var(--ticker-h) + 70px);
  left:12px;
  right:12px;
  background:#fff;
  border:var(--b);
  border-radius:var(--radius);
  box-shadow:var(--shadow-lg);
  z-index:690;
  max-height:0;
  overflow:hidden;
  opacity:0;
  pointer-events:none;
  padding:0 24px 0;             /* no top/bottom when closed */
  transition:
  max-height .24s cubic-bezier(0.16,1,0.3,1),
  opacity .24s cubic-bezier(0.16,1,0.3,1),
  padding-top .24s cubic-bezier(0.16,1,0.3,1),
  padding-bottom .24s cubic-bezier(0.16,1,0.3,1);
}

#mob-nav.open{
  max-height:80vh;
  opacity:1;
  pointer-events:auto;
  padding-top:24px;
  padding-bottom:24px;
}

    .mob-links a {
      display: block;
      font-family: var(--font-ui);
      font-size: 15px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: .08em;
      padding: 14px 18px;
      border-radius: 8px;
      color: var(--navy);
      min-height: 48px
    }

    .mob-links a:hover {
      background: var(--cream);
      color: var(--red)
    }

    .mob-group-lbl {
      font-family: var(--font-ui);
      font-size: 9px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: .22em;
      color: rgba(29, 38, 49, .4);
      padding: 10px 14px 4px;
      display: block
    }

    .mob-group-links a {
      padding: 8px 14px 8px 24px;
      font-size: 12px
    }

    .mob-ctas {
      display: flex;
      flex-direction: column;
      gap: 8px;
      padding-top: 16px;
      border-top: 2px solid rgba(29, 38, 49, .08)
    }

    .mob-ctas a {
      font-family: var(--font-ui);
      font-size: 14px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: .08em;
      padding: 14px 20px;
      border-radius: 10px;
      text-align: center;
      border: var(--b);
      min-height: 52px;
      display: flex;
      align-items: center;
      justify-content: center
    }

    .mob-ctas a.primary {
      background: var(--red);
      color: #fff
    }

    .mob-ctas a.secondary {
      background: #fff;
      color: var(--navy)
    }

    @media(max-width:960px) {

      .nav-left,
      .nav-right {
        display: none
      }

      .nav-wrap {
        display: flex;
        justify-content: space-between
      }

      .hbg {
        display: flex
      }
    }
.hbg.active span:nth-child(1){
  transform:translateY(7px) rotate(45deg);
}
.hbg.active span:nth-child(2){
  opacity:0;
}
.hbg.active span:nth-child(3){
  transform:translateY(-7px) rotate(-45deg);
}

   /* ============================
   HERO
============================ */
#hero{
  min-height:80svh;
  background:var(--cream);
  display:flex;
  align-items:center;
  padding:20px 0 24px;
  position:relative;
  overflow:hidden;
}
#hero::before{
  content:'';
  position:absolute;
  inset:0;
  background-image:url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='1'/%3E%3C/svg%3E");
  opacity:0.032;
  pointer-events:none;
  z-index:1;
}
.hero-halftone{
  position:absolute;
  inset:0;
  background-image:radial-gradient(circle,rgba(29,38,49,.06) 1px,transparent 1px);
  background-size:22px 22px;
  pointer-events:none;
}
.hero-glow-r{
  position:absolute;
  top:-80px;
  right:-120px;
  width:480px;
  height:480px;
  border-radius:50%;
  background:radial-gradient(circle,rgba(238,39,38,.13),transparent 70%);
  pointer-events:none;
}
.hero-glow-l{
  position:absolute;
  bottom:-80px;
  left:-80px;
  width:400px;
  height:400px;
  border-radius:50%;
  background:radial-gradient(circle,rgba(64,210,175,.09),transparent 70%);
  pointer-events:none;
}

.hero-grid{
  display:grid;
  grid-template-columns:0.9fr 1.1fr; /* image column bigger */
  gap:48px;
  align-items:center;
  position:relative;
  z-index:2;
}

/* text / image layering */
.hero-text-col{
  position:relative;
  z-index:2;
}
.hero-vis{
  position:relative;
  z-index:1;
  margin-right:-60px; /* makes hero image feel bigger */
}

/* fade between text + image */
.hero-text-fade{
  position:absolute;
  inset:0;
  pointer-events:none;
  background:linear-gradient(
    to right,
    rgba(249,246,238,0.96) 0%,
    rgba(249,246,238,0.90) 32%,
    rgba(249,246,238,0.0) 70%
  );
  z-index:1;
}

/* badges, headings, body as before */
.hero-badges{
  display:flex;
  flex-wrap:wrap;
  gap:10px;
  align-items:center;
  margin-bottom:18px;
}
.hero-h1{
  margin-bottom:16px;
  font-family:var(--font-head);
  font-weight:900;
  letter-spacing:-0.035em;
  line-height:0.88;
  text-shadow:3px 3px 0 rgba(29,38,49,.18),7px 7px 0 rgba(29,38,49,.08);
}
.hero-h1 .line1{
  display:block;
  font-size:clamp(52px,7.5vw,88px);
  font-style:normal;
  text-transform:uppercase;
  color:var(--navy);
  white-space:nowrap;
}
.hero-h1 .line2{
  display:block;
  font-size:clamp(52px,7.5vw,88px);
  text-transform:uppercase;
  color:var(--red);
}
.hero-tagline{
  font-family:var(--font-head);
  font-size:clamp(13px,1.4vw,15px);
  font-weight:800;
  text-transform:uppercase;
  color:#2ea88a;
  letter-spacing:-.01em;
  margin-bottom:14px;
  line-height:1.35;
  opacity:.85;
}

/* proof strip, but no shadow */
.hero-proof-strip{
  display:flex;
  flex-wrap:wrap;
  align-items:center;
  gap:0;
  margin-bottom:20px;
  background:#fff;
  border:var(--b-thin);
  border-radius:var(--radius-sm);
  padding:10px 16px;
  width:fit-content;
  box-shadow:none;
}
.hps-item{
  display:flex;
  align-items:center;
  gap:6px;
  font-family:var(--font-ui);
  font-size:10px;
  font-weight:700;
  text-transform:uppercase;
  letter-spacing:.1em;
  color:rgba(29,38,49,.65);
  padding:0 14px;
}
.hps-item:first-child{padding-left:0;}
.hps-item:last-child{padding-right:0;}
.hps-item strong{
  color:var(--navy);
  font-size:12px;
}
.hps-divider{
  width:1px;
  height:18px;
  background:rgba(29,38,49,.12);
}
.hps-dot{
  width:8px;
  height:8px;
  border-radius:50%;
  flex-shrink:0;
}

.hero-body{
  font-size:17px;
  line-height:1.75;
  font-weight:500;
  color:rgba(29,38,49,.8);
  margin-bottom:28px;
  max-width:520px;
}
.hero-ctas{
  display:flex;
  flex-wrap:wrap;
  gap:10px;
  margin-bottom:24px;
}

/* slideshow */
.hero-ss{
  position:relative;
  width:100%;
  max-width:520px;    /* smaller again */
  margin:0 auto;
}

.slide-holder{
  position:relative;
  min-height:420px;   /* frame height */
  width:100%;
}

.hero-slide{
  position:absolute;
  top:0;
  left:0;
  width:100%;
  height:100%;
  object-fit:contain;
  opacity:0;
  transition:opacity .6s ease;
  pointer-events:none;
  filter:drop-shadow(8px 12px 20px rgba(29,38,49,.28));
}
.hero-slide.skeleton{
  background: linear-gradient(90deg, #1D2631 25%, #2a3645 50%, #1D2631 75%);
  background-size: 200% 100%;
  animation: shimmer 1.5s ease-in-out infinite;
}
@keyframes shimmer {
  0% { background-position: 200% 0; }
  100% { background-position: -200% 0; }
}
.hero-slide.loaded{
  animation: fadeIn .4s ease-out;
}
@keyframes fadeIn {
  from { opacity: 0; }
  to { opacity: 1; }
}
.hero-slide.active{
  opacity:1;
}


.slide-dots{
  display:flex;
  gap:7px;
  justify-content:center;
  margin-top:16px;
}
.sdot{
  width:9px;
  height:9px;
  border-radius:50%;
  background:rgba(29,38,49,.2);
  border:2px solid rgba(29,38,49,.25);
  cursor:pointer;
  transition:all .15s;
}
.sdot.active{
  background:var(--red);
  border-color:var(--red);
  transform:scale(1.25);
}

/* pause button */
.ss-pause{
  position:absolute;
  bottom:0;
  right:0;
  width:36px;
  height:36px;
  border-radius:50%;
  background:rgba(255,255,255,.9);
  border:var(--b-thin);
  display:flex;
  align-items:center;
  justify-content:center;
  cursor:pointer;
  z-index:5;
  box-shadow:2px 2px 0 var(--navy);
}
.ss-pause svg{
  width:13px;
  height:13px;
  fill:var(--navy);
}

/* watch button bottom-left of image */


/* bottom watermark, big but subtle */
.hero-watermark{
  position:absolute;
  bottom:8px;               /* very bottom */
  right:24px;               /* hugs container’s right padding */
  transform:none;
  font-family:var(--font-head);
  font-size:72px;
  font-weight:900;
  text-transform:uppercase;
  letter-spacing:0.3em;
  color:rgba(29,38,49,0.07); /* subtle watermark */
  pointer-events:none;
  z-index:1;                /* behind main content */
  white-space:nowrap;
}
@media(max-width:900px){
  .hero-watermark{
    font-size:46px;
    letter-spacing:0.2em;
    right:16px;
    bottom:6px;
  }
}
@media(max-width:900px){
  .hero-grid{
    grid-template-columns:1fr;
    gap:32px;
  }
  .hero-vis{
    order:-1;       /* image first */
    margin-right:0;
  }
  .slide-holder{
    min-height:300px; /* smaller frame on mobile */
  }
.hero-text-col{
    text-align:center;
    align-items:center;
  }

  .hero-badges,
  .hero-ctas,
  .hero-proof-strip{
    margin-left:auto;
    margin-right:auto;
    justify-content:center;
  }
.hero-proof-strip{
    flex-wrap:nowrap;
    padding:8px 10px;
  }
  .hps-item{
    padding:0 8px;
    font-size:9px;
    letter-spacing:.08em;
  }
  .hps-item strong{
    font-size:11px;
  }
  .hps-divider{
    height:14px;
  }
  .hero-body{
    margin-left:auto;
    margin-right:auto;
  }
  .hero-text-fade{
    display:none;
  }
  .hero-watermark{
    display:none;
  }
}

.badge{
  display:inline-flex;
  align-items:center;
  padding:6px 14px;
  border-radius:999px;
  border:var(--b-thin);
  font-family:var(--font-ui);
  font-size:10px;
  font-weight:800;
  text-transform:uppercase;
  letter-spacing:.18em;
}

.badge-cream{
  background:#fff;
  color:var(--navy);
  transform:rotate(-2deg);
}

.badge-yellow{
  background:var(--yellow);
  color:var(--navy);
  transform:rotate(2deg);
}

.badge-red{
  background:var(--red);
  color:#fff;
  transform:rotate(-1.5deg);
}


    /* ============================
   STATS BAR
============================ */
    #stats {
      background: var(--navy);
      padding: 0;
      border-bottom: 4px solid var(--red)
    }

    .stats-row {
      display: grid;
      grid-template-columns: repeat(5, 1fr);
      gap: 0
    }

    .stat-box {
      padding: 28px 16px;
      text-align: center;
      border-right: 1px solid rgba(255, 255, 255, .08)
    }

    .stat-box:last-child {
      border-right: none
    }

    .stat-num {
      font-family: var(--font-head);
      font-size: clamp(30px, 4vw, 46px);
      font-weight: 900;
      display: block;
      line-height: 1
    }

    /* TASK 25: pulse animation that fires after stat counter completes */
    @keyframes stat-pop {
      0% {
        transform: scale(1)
      }

      50% {
        transform: scale(1.08)
      }

      100% {
        transform: scale(1)
      }
    }

    .stat-num.popped {
      animation: stat-pop .4s ease-out
    }

    .stat-lbl {
      font-family: var(--font-ui);
      font-size: 9px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: .15em;
      display: block;
      margin-top: 6px;
      opacity: .85;
      color: rgba(255, 255, 255, .85)
    }

    .sb-red .stat-num {
      color: var(--red)
    }

    .sb-teal .stat-num {
      color: var(--teal)
    }

    .sb-yellow .stat-num {
      color: var(--yellow)
    }

    .sb-blue .stat-num {
      color: var(--blue)
    }

    .sb-white .stat-num {
      color: #fff
    }

    @media(max-width:700px) {
      .stats-row {
        grid-template-columns: repeat(2, 1fr)
      }

      .stat-box {
        border-bottom: 1px solid rgba(255, 255, 255, .08);
        border-right: none
      }

      .stat-box:nth-child(odd) {
        border-right: 1px solid rgba(255, 255, 255, .08)
      }

      .stat-box:last-child {
        grid-column: span 2
      }
    }

    /* ============================
   MANIFESTO
   TASK 1: fixed selector — was #manifesto.visible (never fires) → .manifesto-inner.visible
============================ */
    #manifesto {
      background: var(--cream);
      padding: 64px 0;
      position: relative;
      overflow: hidden;
      border-bottom: var(--b)
    }

    .manifesto-inner {
      max-width: 720px;
      margin: 0 auto;
      text-align: center;
      position: relative;
      z-index: 2
    }

    .manifesto-rule {
      width: 48px;
      height: 4px;
      background: var(--red);
      margin: 0 auto 24px;
      border-radius: 2px
    }

    .manifesto-quote {
      font-family: var(--font-head);
      font-size: clamp(17px, 2vw, 22px);
      font-weight: 800;
      line-height: 1.55;
      color: var(--navy);
      font-style: italic;
      margin-bottom: 20px
    }

    .manifesto-attr {
      font-family: var(--font-ui);
      font-size: 11px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: .18em;
      color: rgba(29, 38, 49, .4)
    }

    .highlight-text {
      position: relative;
      color: var(--navy);
      z-index: 1;
      white-space: nowrap
    }

    .highlight-text::after {
      content: '';
      position: absolute;
      bottom: 2px;
      left: 0;
      width: 0;
      height: 35%;
      background: var(--yellow);
      z-index: -1;
      transition: width 0.8s cubic-bezier(0.25, 1, 0.5, 1)
    }

    /* TASK 1: corrected — triggers when .manifesto-inner (the reveal element) gets .visible */
    .manifesto-inner.visible .highlight-text::after {
      width: 100%
    }

    /* ============================
   PHOTO STRIP
============================ */
    .photo-strip {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      border-top: var(--b);
      border-bottom: var(--b)
    }

    .ps-item {
      position: relative;
      overflow: hidden;
      aspect-ratio: 3/4;
      background: var(--navy)
    }

    .ps-item:not(:last-child) {
      border-right: var(--b)
    }

    .ps-item img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform .5s ease;
      display: block
    }

    .ps-item:hover img {
      transform: scale(1.08)
    }

    .ps-cap {
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      background: linear-gradient(to top, rgba(29, 38, 49, .92) 60%, transparent);
      padding: 28px 16px 16px
    }

    .ps-cap-lbl {
      font-family: var(--font-ui);
      font-size: 9px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: .2em;
      margin-bottom: 4px
    }

    .ps-cap-title {
      font-family: var(--font-head);
      font-size: 12px;
      font-weight: 800;
      line-height: 1.3;
      color: #fff
    }

    .ps-water .ps-cap-lbl {
      color: var(--blue)
    }

    .ps-girls .ps-cap-lbl {
      color: var(--red)
    }

    .ps-lead .ps-cap-lbl {
      color: var(--yellow)
    }

    .ps-sports .ps-cap-lbl {
      color: var(--teal)
    }

    .ps-item.ps-water {
      background: #0e2233
    }

    .ps-item.ps-girls {
      background: #2b0e0e
    }

    .ps-item.ps-lead {
      background: #1a1600
    }

    .ps-item.ps-sports {
      background: #0e2318
    }

    @media(max-width:760px) {
      .photo-strip {
        grid-template-columns: repeat(2, 1fr)
      }

      .ps-item {
        aspect-ratio: 4/3
      }
    }

    @media(max-width:460px) {
      .photo-strip {
        grid-template-columns: 1fr
      }
    }

    /* ============================
   REALITY
   TASK 16: removed class="section" from the section element — .reality-hook controls padding
============================ */
    #reality {
      background: var(--navy);
      color: #fff;
      position: relative;
      overflow: hidden
    }

    .reality-hook {
      padding: 88px 0;
      position: relative;
      z-index: 2
    }

    .hook-inner {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 48px;
      align-items: center;
      margin-bottom: 64px
    }

    .hook-stat-block {
      position: relative
    }

    .hook-pct {
      font-family: var(--font-head);
      font-size: clamp(100px, 16vw, 180px);
      font-weight: 900;
      line-height: .85;
      color: var(--red);
      letter-spacing: -.04em;
      display: block;
      position: relative
    }

    .hook-pct::after {
      content: 'NEET';
      position: absolute;
      bottom: 8px;
      right: -4px;
      font-family: var(--font-ui);
      font-size: 10px;
      font-weight: 700;
      letter-spacing: .3em;
      background: var(--yellow);
      color: var(--navy);
      padding: 4px 8px;
      border-radius: 4px;
      border: 2px solid var(--navy)
    }

    .hook-label {
      font-family: var(--font-head);
      font-size: clamp(18px, 2.5vw, 28px);
      font-weight: 900;
      text-transform: uppercase;
      line-height: 1.2;
      color: #fff;
      margin-top: 8px
    }

    .hook-sub {
      font-family: var(--font-ui);
      font-size: 11px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: .14em;
      color: rgba(255, 255, 255, .4);
      margin-top: 8px
    }

    .hook-explain {
      font-size: 16px;
      font-weight: 500;
      line-height: 1.75;
      color: rgba(255, 255, 255, .72);
      max-width: 440px
    }

    .hook-explain strong {
      color: var(--yellow);
      font-weight: 700
    }

    .hook-source {
      font-family: var(--font-ui);
      font-size: 9px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: .14em;
      color: rgba(255, 255, 255, .25);
      margin-top: 16px
    }

    .prob-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 12px;
      padding-bottom: 88px;
      position: relative;
      z-index: 2
    }

    .prob-card {
      position: relative;
      border-radius: var(--radius);
      overflow: hidden;
      border: 2px solid rgba(255, 255, 255, .1);
      transition: transform .2s, border-color .2s;
      cursor: default
    }

    .prob-card:hover {
      transform: translateY(-6px);
      border-color: rgba(255, 255, 255, .3)
    }

    .prob-thumb {
      aspect-ratio: 3/4;
      overflow: hidden;
      background: rgba(255, 255, 255, .05)
    }

    .prob-thumb img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      display: block;
      transition: transform .5s
    }

    .prob-card:hover .prob-thumb img {
      transform: scale(1.06)
    }

    .prob-overlay {
      position: absolute;
      inset: 0;
      background: linear-gradient(to top, rgba(29, 38, 49, .96) 45%, rgba(29, 38, 49, .2))
    }

    .prob-body {
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      padding: 18px
    }

    .prob-stat {
      font-family: var(--font-head);
      font-size: clamp(26px, 4vw, 38px);
      font-weight: 900;
      line-height: 1;
      display: block;
      margin-bottom: 4px
    }

    .prob-title {
      font-family: var(--font-head);
      font-size: 13px;
      font-weight: 800;
      text-transform: uppercase;
      margin-bottom: 6px;
      line-height: 1.2
    }

    .prob-desc {
      font-size: 12px;
      font-weight: 500;
      color: rgba(255, 255, 255, .62);
      line-height: 1.5
    }

    .prob-hint {
      font-family: var(--font-ui);
      font-size: 9px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: .15em;
      margin-top: 10px;
      padding: 4px 10px;
      border-radius: 20px;
      border: 1.5px solid;
      display: inline-block;
      width: fit-content
    }

    .pc-water .prob-stat {
      color: var(--blue)
    }

    .pc-water .prob-hint {
      color: var(--blue);
      border-color: rgba(150, 217, 242, .4)
    }

    .pc-girls .prob-stat {
      color: var(--red)
    }

    .pc-girls .prob-hint {
      color: var(--red);
      border-color: rgba(238, 39, 38, .5)
    }

    .pc-youth .prob-stat {
      color: var(--yellow)
    }

    .pc-youth .prob-hint {
      color: var(--yellow);
      border-color: rgba(255, 207, 93, .4)
    }

    .pc-env .prob-stat {
      color: var(--teal)
    }

    .pc-env .prob-hint {
      color: var(--teal);
      border-color: rgba(64, 210, 175, .4)
    }

    @media(max-width:900px) {
      .hook-inner {
        grid-template-columns: 1fr
      }

      .prob-grid {
        grid-template-columns: repeat(2, 1fr)
      }
    }

    @media(max-width:500px) {
      .prob-grid {
        grid-template-columns: 1fr 1fr
      }
    }

/* ============================
   OMUTO MODEL (NAMESPACED)
============================ */
.om-model-box{
  margin-top:28px;
  border:var(--b);
  border-radius:18px;
  background:#fff;
  box-shadow:var(--shadow-sm);
  overflow:hidden;
}

/* Tabs row */
.om-model-tabs{
  display:flex;
  flex-wrap:nowrap;
  overflow-x:auto;
  border-bottom:1px solid rgba(29,38,49,.06);
}

.om-mtab{
  flex:1 1 0;
  display:flex;
  align-items:center;
  gap:6px;
  padding:10px 12px;
  border:none;
  background:none;
  cursor:pointer;
  font-family:var(--font-ui);
  font-size:11px;
  font-weight:700;
  text-transform:uppercase;
  letter-spacing:.12em;
  color:rgba(29,38,49,.6);
  white-space:nowrap;
  transition:background .18s ease,color .18s ease, box-shadow .18s ease;
}

.om-mtab span{
  display:inline-block;
}

.om-mtab.active{
  background:var(--cream);
  color:var(--navy);
  box-shadow:inset 0 -2px 0 var(--navy);
}

.om-mtab-dot{
  width:22px;
  height:22px;
  border-radius:999px;
  background:#fff;
  border:1px solid currentColor;
  display:flex;
  align-items:center;
  justify-content:center;
  font-family:var(--font-head);
  font-weight:800;
  font-size:11px;
}

.om-mtab.active .om-mtab-dot{
  background:currentColor;
  color:#fff;
}

/* Progress bar: track + sliding liquid segment */
.om-model-progress-wrap{
  position:relative;
  height:4px;
  background:var(--cream);
  overflow:hidden;
  border-bottom:var(--b-thin);
}

#om-model-progress{
  position:absolute;
  inset:0;
  --om-model-x: 0%;
  --om-model-width: 20%;
}

#om-model-progress::before{
  content:'';
  position:absolute;
  top:0;
  left:0;
  height:100%;
  width:var(--om-model-width);
  background:linear-gradient(90deg,var(--red),var(--teal));
  border-right:2px solid var(--navy);
  transform:translateX(var(--om-model-x));
  transition:
    transform .6s cubic-bezier(0.16,1,0.3,1),
    width .6s cubic-bezier(0.16,1,0.3,1);
}


/* Panels */
.om-model-panel{
  display:none;
  padding:18px 20px 20px;
}

.om-model-panel.active{
  display:grid;
  grid-template-columns:minmax(0,1.4fr) minmax(0,1fr);
  gap:24px;
}

/* Text + watermark */
.om-model-content{
  position:relative;
  display:flex;
  flex-direction:column;
  gap:10px;
}

.om-model-wm{
  position:absolute;
  bottom:-16px;
  left:-6px;
  font-family:var(--font-head);
  font-size:120px;
  font-weight:900;
  text-transform:uppercase;
  letter-spacing:.18em;
  color:rgba(29,38,49,0.04);
  pointer-events:none;
  user-select:none;
  z-index:0;
}

.om-model-content > *:not(.om-model-wm){
  position:relative;
  z-index:1;
}

.om-model-title{
  font-family:var(--font-head);
  font-size:clamp(22px, 3vw, 28px);
  font-weight:900;
  text-transform:uppercase;
  letter-spacing:.08em;
}

.om-model-body{
  font-size:14px;
  line-height:1.7;
  color:rgba(29,38,49,.8);
}

.om-model-metric{
  display:flex;
  align-items:center;
  gap:8px;
  font-family:var(--font-ui);
  font-size:11px;
  font-weight:700;
  text-transform:uppercase;
  letter-spacing:.12em;
  color:rgba(29,38,49,.7);
}

.om-model-metric svg{
  width:14px;
  height:14px;
}

.om-model-nav{
  display:flex;
  gap:8px;
  margin-top:6px;
}

.om-model-img img{
  width:100%;
  border-radius:12px;
  box-shadow:0 10px 30px rgba(0,0,0,.12);
  object-fit:cover;
}

/* Responsive */
@media(max-width:900px){
  .om-model-panel.active{
    grid-template-columns:1fr;
  }
  .om-model-box{
    margin-top:22px;
  }
  .om-model-wm{
    font-size:48px;
    top:-4px;
    right:2px;
  }
}


    /* ============================
   ECOSYSTEM
   TASK 28: downgraded .pillar to --shadow-sm
   TASK 8: removed duplicate .pillar block with conflicting transition
   TASK 4: removed JS magnetic tilt — using clean CSS-only hover
============================ */
    #ecosystem {
      background: var(--cream)
    }

    .pillar-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 24px;
      margin-top: 80px
    }

    .pillar {
      background: #fff;
      border: var(--b);
      border-radius: 20px;
      box-shadow: var(--shadow-sm);
      overflow: visible;
      display: flex;
      flex-direction: column;
      transition: transform .25s ease, box-shadow .25s ease;
      position: relative;
      margin-top: 64px
    }

    .pillar:hover {
      transform: translate(-4px, -6px);
      box-shadow: var(--shadow)
    }

    .pillar-float-img {
      position: absolute;
      top: -72px;
      left: 0;
      right: 0;
      display: flex;
      justify-content: center;
      pointer-events: none
    }

    .pillar-float-img img {
      height: 140px;
      width: auto;
      object-fit: contain;
      filter: drop-shadow(4px 8px 16px rgba(29, 38, 49, .25));
      transition: transform .35s ease
    }

    .pillar:hover .pillar-float-img img {
      transform: scale(1.08) translateY(-4px)
    }

    .pillar-body {
      padding: 16px 22px 26px;
      flex: 1;
      display: flex;
      flex-direction: column;
      gap: 10px;
      padding-top: 76px
    }

    .pillar-tag {
      font-family: var(--font-ui);
      font-size: 9px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: .15em;
      padding: 4px 12px;
      border-radius: 20px;
      border: 2px solid var(--navy);
      display: inline-block;
      width: fit-content;
      margin-bottom: 4px
    }

    .pillar-name {
      font-family: var(--font-head);
      font-size: 19px;
      font-weight: 900;
      text-transform: uppercase;
      font-style: italic
    }

    .pillar-sub {
      font-family: var(--font-ui);
      font-size: 9px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: .15em;
      color: rgba(29, 38, 49, .45)
    }

    .pillar-body p {
      font-size: 13px;
      font-weight: 500;
      line-height: 1.65;
      color: rgba(29, 38, 49, .75)
    }

    .pillar-tagline {
      font-family: var(--font-head);
      font-size: 13px;
      font-weight: 700;
      font-style: italic;
      color: rgba(29, 38, 49, .5);
      border-top: 1.5px solid rgba(29, 38, 49, .08);
      padding-top: 10px;
      margin-top: auto
    }

    @media(max-width:900px) {
      .pillar-grid {
        grid-template-columns: 1fr
      }

      .pillar {
        margin-top: 80px
      }
    }

    /* ============================
   YOUTH CENTER
============================ */
    #youthcenter {
      background: var(--navy);
      color: #fff;
      position: relative;
      overflow: hidden
    }

    .yc-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 60px;
      align-items: center;
      position: relative;
      z-index: 2
    }

    .yc-new-badge {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      font-family: var(--font-ui);
      font-size: 9px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: .2em;
      background: var(--yellow);
      color: var(--navy);
      border: 2px solid rgba(255, 255, 255, .3);
      border-radius: 20px;
      padding: 5px 14px;
      margin-bottom: 16px
    }

    .yc-title {
      font-family: var(--font-head);
      font-size: clamp(28px, 4vw, 44px);
      font-weight: 900;
      text-transform: uppercase;
      font-style: italic;
      line-height: 1.05;
      margin-bottom: 12px
    }

    .yc-body {
      font-size: 15px;
      font-weight: 500;
      line-height: 1.7;
      color: rgba(255, 255, 255, .78);
      margin-bottom: 20px
    }

    .yc-features {
      display: flex;
      flex-direction: column;
      gap: 9px;
      margin-bottom: 24px
    }

    .yc-feat {
      display: flex;
      align-items: flex-start;
      gap: 12px;
      background: rgba(255, 255, 255, .05);
      border: 1px solid rgba(255, 255, 255, .1);
      border-radius: 10px;
      padding: 11px 14px
    }

    .yc-feat-icon {
      width: 32px;
      height: 32px;
      border-radius: 8px;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0
    }

    .yc-feat-icon svg {
      width: 15px;
      height: 15px
    }

    .yc-feat h3 {
      font-family: var(--font-head);
      font-size: 12px;
      font-weight: 800;
      text-transform: uppercase;
      margin-bottom: 1px
    }

    .yc-feat p {
      font-size: 12px;
      font-weight: 500;
      opacity: .6;
      line-height: 1.4
    }

    .yc-loc {
      font-family: var(--font-ui);
      font-size: 11px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: .14em;
      color: rgba(255, 255, 255, .4);
      margin-top: 10px;
      line-height: 1.7
    }

    .yc-loc strong {
      color: var(--yellow)
    }

    .yc-photos {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 10px
    }

    .yc-photo {
      border: var(--b);
      border-radius: var(--radius);
      overflow: hidden;
      background: rgba(255, 255, 255, .05)
    }

    .yc-photo img {
      width: 100%;
      height: 100%;
      object-fit: cover
    }

    .yc-photo-tall {
      grid-row: span 2;
      aspect-ratio: 3/4
    }

    .yc-photo:not(.yc-photo-tall) {
      aspect-ratio: 4/3
    }

    @media(max-width:900px) {
      .yc-grid {
        grid-template-columns: 1fr;
        gap: 36px
      }
    }

    /* ============================
   PROOF STRIP
   TASK 28: downgraded .proof-grid to --shadow-sm
============================ */
    #proof {
      background: var(--cream)
    }

    .proof-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 0;
      border: var(--b);
      border-radius: var(--radius);
      overflow: hidden;
      box-shadow: var(--shadow-sm);
      margin-top: 44px
    }

    .proof-cell {
      padding: 36px 30px;
      border-right: var(--b);
      display: flex;
      flex-direction: column;
      gap: 12px;
      position: relative;
      transition: background .2s
    }

    .proof-cell:last-child {
      border-right: none
    }

    .proof-cell:hover {
      background: #fff
    }

    .proof-num {
      font-family: var(--font-head);
      font-size: clamp(44px, 6vw, 72px);
      font-weight: 900;
      line-height: .9;
      display: block
    }

    .proof-label {
      font-family: var(--font-head);
      font-size: 16px;
      font-weight: 800;
      text-transform: uppercase;
      line-height: 1.15
    }

    .proof-story {
      font-size: 13px;
      font-weight: 500;
      line-height: 1.65;
      color: rgba(29, 38, 49, .65)
    }

    .proof-tag {
      font-family: var(--font-ui);
      font-size: 9px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: .18em;
      padding: 4px 12px;
      border-radius: 20px;
      display: inline-block;
      width: fit-content;
      border: 1.5px solid
    }

    .pc-r {
      border-top: 5px solid var(--red)
    }

    .pc-r .proof-num {
      color: var(--red)
    }

    .pc-r .proof-tag {
      color: var(--red);
      border-color: rgba(238, 39, 38, .3);
      background: rgba(238, 39, 38, .06)
    }

    .pc-b {
      border-top: 5px solid var(--blue)
    }

    .pc-b .proof-num {
      color: var(--blue)
    }

    .pc-b .proof-tag {
      color: #2a7a9a;
      border-color: rgba(150, 217, 242, .5);
      background: rgba(150, 217, 242, .1)
    }

    .pc-y {
      border-top: 5px solid var(--gold)
    }

    .pc-y .proof-num {
      color: var(--gold)
    }

    .pc-y .proof-tag {
      color: var(--gold);
      border-color: rgba(214, 145, 0, .3);
      background: rgba(214, 145, 0, .07)
    }

    .proof-cta {
      text-align: center;
      margin-top: 36px
    }

    @media(max-width:700px) {
      .proof-grid {
        grid-template-columns: 1fr
      }

      .proof-cell {
        border-right: none;
        border-bottom: var(--b)
      }

      .proof-cell:last-child {
        border-bottom: none
      }
    }

    /* ============================
   VIDEOS
============================ */
    #videos {
      background: var(--navy);
      position: relative;
      overflow: hidden
    }

    .vid-grid {
      display: grid;
      grid-template-columns: 2fr 1fr;
      grid-template-rows: auto auto;
      gap: 12px;
      margin-top: 36px;
      position: relative;
      z-index: 2
    }

    .vid-card {
      border: var(--b);
      border-radius: var(--radius);
      overflow: hidden;
      background: rgba(255, 255, 255, .05);
      cursor: pointer;
      transition: all .2s
    }

    .vid-card:hover {
      transform: translateY(-4px);
      background: rgba(255, 255, 255, .09)
    }

    .vid-card.featured {
      grid-row: span 2
    }

    .vid-thumb {
      position: relative;
      overflow: hidden;
      background: #111;
      aspect-ratio: 16/9
    }

    .vid-card.featured .vid-thumb {
      aspect-ratio: 16/10
    }

    .vid-thumb img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform .4s
    }

    .vid-card:hover .vid-thumb img {
      transform: scale(1.04)
    }

    .vplay {
      position: absolute;
      inset: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      background: rgba(0, 0, 0, .22)
    }

    .vplay-circle {
      width: 52px;
      height: 52px;
      border-radius: 50%;
      background: rgba(255, 255, 255, .9);
      display: flex;
      align-items: center;
      justify-content: center;
      border: 3px solid var(--navy);
      transition: transform .15s
    }

    .vid-card:hover .vplay-circle {
      transform: scale(1.1)
    }

    .vplay-circle svg {
      width: 20px;
      height: 20px;
      fill: var(--navy);
      margin-left: 3px
    }

    .vid-card.featured .vplay-circle {
      width: 64px;
      height: 64px
    }

    .vid-card.featured .vplay-circle svg {
      width: 26px;
      height: 26px
    }

    .vid-info {
      padding: 14px 16px
    }

    .v-tag {
      font-family: var(--font-ui);
      font-size: 9px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: .18em;
      color: var(--yellow);
      margin-bottom: 4px
    }

    .v-title {
      font-family: var(--font-head);
      font-size: 14px;
      font-weight: 800;
      color: #fff;
      margin-bottom: 3px;
      line-height: 1.3;
      text-transform: uppercase
    }

    .vid-card.featured .v-title {
      font-size: 17px
    }

    .v-desc {
      font-size: 12px;
      font-weight: 500;
      color: rgba(255, 255, 255, .5);
      line-height: 1.5
    }

    @media(max-width:768px) {
      .vid-grid {
        grid-template-columns: 1fr
      }

      .vid-card.featured {
        grid-row: span 1
      }
    }

    /* ============================
   COMPARISON TABLE
   TASK 28: downgraded to --shadow-sm
============================ */
    #whyworks {
      background: #fff
    }

    .compare-wrap {
      overflow-x: auto;
      -webkit-overflow-scrolling: touch;
      border: var(--b);
      border-radius: var(--radius);
      box-shadow: var(--shadow-sm);
      margin-top: 40px
    }

    .compare-table {
      width: 100%;
      border-collapse: separate;
      border-spacing: 0;
      min-width: 560px
    }

    .compare-table th {
      font-family: var(--font-ui);
      font-size: 11px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: .12em;
      padding: 16px 20px;
      border-bottom: var(--b);
      text-align: left
    }

    .compare-table th:first-child {
      background: var(--cream);
      color: rgba(29, 38, 49, .5);
      width: 26%
    }

    .compare-table th:nth-child(2) {
      background: #e9e9e9;
      color: rgba(29, 38, 49, .55)
    }

    .compare-table th:nth-child(3) {
      background: var(--navy);
      color: var(--yellow)
    }

    .compare-table th:not(:last-child) {
      border-right: var(--b)
    }

    .compare-table td {
      padding: 13px 20px;
      font-size: 13px;
      font-weight: 500;
      line-height: 1.5;
      border-bottom: 2px solid rgba(29, 38, 49, .07);
      vertical-align: top
    }

    .compare-table td:first-child {
      font-family: var(--font-head);
      font-weight: 800;
      font-size: 11px;
      text-transform: uppercase;
      background: rgba(29, 38, 49, .03)
    }

    .compare-table td:nth-child(2) {
      color: rgba(29, 38, 49, .52);
      background: #fafafa
    }

    .compare-table td:nth-child(3) {
      color: var(--navy);
      background: rgba(64, 210, 175, .06);
      font-weight: 600
    }

    .compare-table td:not(:last-child) {
      border-right: var(--b)
    }

    .compare-table tr:last-child td {
      border-bottom: none
    }

    .compare-table tr:hover td {
      background: rgba(29, 38, 49, .02)
    }

    .compare-table tr:hover td:nth-child(2) {
      background: #f5f5f5
    }

    .compare-table tr:hover td:nth-child(3) {
      background: rgba(64, 210, 175, .1)
    }

    .ck {
      color: var(--teal);
      font-weight: 900;
      margin-right: 4px
    }

    .cx {
      color: #bbb;
      margin-right: 4px
    }

    /* ============================
   FORBES
   TASK 13: upgraded to real image treatment — photo card + editorial badge
============================ */
    #forbes {
      background: var(--cream);
      border-top: var(--b);
      border-bottom: var(--b)
    }

    .forbes-inner {
      display: grid;
      grid-template-columns: 360px 1fr;
      gap: 48px;
      align-items: center
    }

    .forbes-cover {
      border: var(--b);
      border-radius: var(--radius);
      overflow: hidden;
      box-shadow: var(--shadow-lg);
      aspect-ratio: 3/4;
      display: flex;
      flex-direction: column;
      background: var(--navy);
      position: relative
    }

    .forbes-cover-top {
      background: var(--red);
      padding: 16px 20px;
      border-bottom: var(--b)
    }

    .forbes-wordmark {
      font-family: var(--font-head);
      font-size: 42px;
      font-weight: 900;
      color: #fff;
      letter-spacing: -.04em;
      text-transform: uppercase;
      font-style: italic;
      line-height: 1
    }

    .forbes-edition {
      font-family: var(--font-ui);
      font-size: 9px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: .25em;
      color: rgba(255, 255, 255, .7);
      margin-top: 4px
    }

    .forbes-cover-body {
      flex: 1;
      padding: 24px 20px;
      display: flex;
      flex-direction: column;
      justify-content: space-between
    }

    .forbes-cover-headline {
      font-family: var(--font-head);
      font-size: clamp(16px, 2vw, 20px);
      font-weight: 900;
      color: #fff;
      line-height: 1.25;
      font-style: italic;
      margin-bottom: 16px
    }

    .forbes-cover-name {
      font-family: var(--font-head);
      font-size: 28px;
      font-weight: 900;
      color: var(--yellow);
      text-transform: uppercase;
      line-height: 1
    }

    .forbes-cover-role {
      font-family: var(--font-ui);
      font-size: 10px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: .18em;
      color: rgba(255, 255, 255, .4);
      margin-top: 6px
    }

    .forbes-cover-badge {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      background: var(--yellow);
      color: var(--navy);
      font-family: var(--font-ui);
      font-size: 9px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: .14em;
      padding: 5px 12px;
      border-radius: 20px;
      margin-top: auto
    }

    /* Real photo overlay — when image is available */
    .forbes-cover-img {
      position: absolute;
      inset: 0;
      width: 100%;
      height: 100%;
      object-fit: cover;
      object-position: top center;
      opacity: .22
    }

    .forbes-lbl {
      font-family: var(--font-ui);
      font-size: 10px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: .2em;
      color: rgba(29, 38, 49, .4);
      margin-bottom: 12px;
      display: block
    }

    .forbes-quote {
      font-family: var(--font-head);
      font-size: clamp(17px, 1.9vw, 23px);
      font-weight: 800;
      font-style: italic;
      line-height: 1.5;
      color: var(--navy);
      margin-bottom: 16px
    }

    .forbes-attr {
      font-family: var(--font-ui);
      font-size: 11px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: .15em;
      color: rgba(29, 38, 49, .4);
      line-height: 1.7
    }

    @media(max-width:768px) {
      .forbes-inner {
        grid-template-columns: 1fr
      }

      .forbes-cover {
        max-width: 300px
      }
    }

    /* ============================
   JOIN
============================ */
    #join {
      background: var(--navy);
      position: relative;
      overflow: hidden
    }

    .join-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 18px;
      position: relative;
      z-index: 2
    }

    .jcard {
      border: 3px solid rgba(255, 255, 255, .15);
      border-radius: 20px;
      padding: 28px;
      display: flex;
      flex-direction: column;
      gap: 12px;
      transition: transform .2s, box-shadow .2s
    }

    .jcard:hover {
      transform: translateY(-5px);
      box-shadow: 0 20px 40px rgba(0, 0, 0, .2)
    }

    .jc-red {
      background: var(--red);
      border-color: rgba(255, 255, 255, .25)
    }

    .jc-teal {
      background: rgba(64, 210, 175, .1);
      border-color: rgba(64, 210, 175, .2)
    }

    .jc-white {
      background: rgba(255, 255, 255, .04);
      border-color: rgba(255, 255, 255, .1)
    }

    .jcard-icon {
      width: 50px;
      height: 50px;
      border-radius: 12px;
      display: flex;
      align-items: center;
      justify-content: center
    }

    .jcard h3 {
      font-family: var(--font-head);
      font-size: 22px;
      font-weight: 900;
      text-transform: uppercase;
      font-style: italic;
      color: #fff
    }

    .jcard p {
      font-size: 14px;
      font-weight: 500;
      line-height: 1.6;
      color: rgba(255, 255, 255, .82)
    }

    .jcard-note {
      font-size: 12px;
      font-style: italic;
      font-weight: 500;
      color: rgba(255, 255, 255, .5);
      line-height: 1.5
    }

    .donate-widget {
      background: rgba(255, 255, 255, .1);
      border: 1.5px solid rgba(255, 255, 255, .2);
      border-radius: 12px;
      padding: 14px;
      margin-top: 4px
    }

    .d-toggle {
      display: flex;
      align-items: center;
      gap: 12px;
      margin-bottom: 12px;
      cursor: pointer;
      padding: 8px 0
    }

    .d-sw {
      width: 48px;
      height: 28px;
      border-radius: 14px;
      background: rgba(255, 255, 255, .22);
      border: 1.5px solid rgba(255, 255, 255, .3);
      position: relative;
      transition: background .2s;
      flex-shrink: 0
    }

    .d-sw.on {
      background: var(--teal)
    }

    .d-sw-k {
      position: absolute;
      top: 3px;
      left: 3px;
      width: 20px;
      height: 20px;
      border-radius: 50%;
      background: #fff;
      transition: left .2s;
      box-shadow: 0 1px 3px rgba(0, 0, 0, .2)
    }

    .d-sw.on .d-sw-k {
      left: 23px
    }

    .d-toggle-lbl {
      font-family: var(--font-ui);
      font-size: 11px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: .1em;
      color: rgba(255, 255, 255, .8)
    }

    .d-section-lbl {
      font-family: var(--font-ui);
      font-size: 10px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: .12em;
      color: rgba(255, 255, 255, .5);
      display: block;
      margin-bottom: 7px
    }

    .d-amts {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 5px;
      margin-bottom: 4px
    }

    .d-amt {
      background: rgba(255, 255, 255, .1);
      border: 1.5px solid rgba(255, 255, 255, .18);
      border-radius: 7px;
      padding: 12px 8px;
      text-align: center;
      font-family: var(--font-ui);
      font-size: 12px;
      font-weight: 700;
      color: #fff;
      cursor: pointer;
      transition: all .15s;
      min-height: 48px
    }

    .d-amt:hover,
    .d-amt.sel {
      background: rgba(255, 255, 255, .22);
      border-color: rgba(255, 255, 255, .5)
    }

    .d-amt:focus-visible {
      outline: 3px solid var(--red);
      outline-offset: 2px
    }

    /* TASK 22: impact equivalency line under donate amounts */
    .d-impact {
      font-family: var(--font-sketch);
      font-size: 15px;
      color: var(--yellow);
      text-align: center;
      margin-bottom: 8px;
      min-height: 22px;
      transition: opacity .2s;
      line-height: 1.3
    }

    .d-custom-wrap {
      display: none;
      margin-bottom: 8px
    }

    .d-custom-wrap.show {
      display: block
    }

    .d-custom-input {
      width: 100%;
      background: rgba(255, 255, 255, .12);
      border: 1.5px solid rgba(255, 255, 255, .35);
      border-radius: 7px;
      padding: 8px 12px;
      font-family: var(--font-ui);
      font-size: 13px;
      font-weight: 700;
      color: #fff;
      text-align: center;
      outline: none
    }

    .d-custom-input::placeholder {
      color: rgba(255, 255, 255, .4)
    }

    .d-custom-input:focus {
      border-color: rgba(255, 255, 255, .7)
    }

    .d-go {
      width: 100%;
      background: #fff;
      color: var(--red);
      border: 2px solid var(--navy);
      border-radius: 8px;
      padding: 11px;
      font-family: var(--font-ui);
      font-size: 12px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: .1em;
      cursor: pointer;
      transition: all .15s
    }

    .d-go:hover {
      background: var(--yellow);
      color: var(--navy)
    }

    /* TASK 23: soft conversion link */
    .d-soft-cta {
      display: block;
      text-align: center;
      font-family: var(--font-ui);
      font-size: 10px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: .1em;
      color: rgba(255, 255, 255, .45);
      margin-top: 10px;
      transition: color .15s
    }

    .d-soft-cta:hover {
      color: rgba(255, 255, 255, .8)
    }

    .steps-list {
      background: rgba(255, 255, 255, .05);
      border: 1px solid rgba(255, 255, 255, .1);
      border-radius: 10px;
      padding: 12px 14px;
      display: flex;
      flex-direction: column;
      gap: 7px
    }

    .step-item {
      font-family: var(--font-ui);
      font-size: 11px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: .07em;
      color: rgba(255, 255, 255, .68);
      display: flex;
      align-items: center;
      gap: 8px
    }

    .step-n {
      width: 18px;
      height: 18px;
      border-radius: 50%;
      background: var(--yellow);
      color: var(--navy);
      font-size: 10px;
      font-weight: 900;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0
    }

    @media(max-width:900px) {
      .join-grid {
        grid-template-columns: 1fr
      }
    }

    /* ============================
   PARTNERS
============================ */
    #partners {
      background: #fff;
      border-top: var(--b);
      border-bottom: var(--b)
    }

    .partner-section-lbl {
      font-family: var(--font-ui);
      font-weight: 700;
      font-size: 10px;
      text-transform: uppercase;
      letter-spacing: .22em;
      color: #4a5568;
      text-align: center;
      margin-bottom: 12px
    }

    .partner-pills {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 8px;
      margin-bottom: 20px
    }

    .p-pill {
      font-family: var(--font-ui);
      font-size: 10px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: .1em;
      padding: 6px 14px;
      border: var(--b-thin);
      border-radius: 30px;
      color: rgba(29, 38, 49, .65);
      background: var(--cream);
      transition: all .15s
    }

    .p-pill:hover {
      background: var(--navy);
      color: #fff;
      border-color: var(--navy)
    }

    .cred-pills {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 8px;
      margin-bottom: 32px
    }

    .cred-pill {
      font-family: var(--font-ui);
      font-size: 10px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: .1em;
      padding: 6px 14px;
      border-radius: 30px;
      background: var(--navy);
      color: var(--yellow);
      border: var(--b-thin);
      transition: all .15s
    }

    .founder-block {
      display: grid;
      grid-template-columns: auto 1fr;
      gap: 24px;
      align-items: center;
      background: var(--navy);
      border: var(--b);
      border-radius: var(--radius);
      padding: 26px 30px;
      margin-top: 36px;
      box-shadow: var(--shadow)
    }

    .founder-avatar {
      width: 76px;
      height: 76px;
      border-radius: 50%;
      object-fit: cover;
      object-position: top center;
      border: 4px solid var(--yellow);
      flex-shrink: 0;
      background: rgba(255, 255, 255, .1)
    }

    .founder-quote {
      font-family: var(--font-head);
      font-size: clamp(15px, 1.8vw, 19px);
      font-weight: 800;
      font-style: italic;
      color: rgba(255, 255, 255, .88);
      line-height: 1.5;
      margin-bottom: 10px
    }

    .founder-attr {
      font-family: var(--font-ui);
      font-size: 10px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: .18em;
      color: rgba(255, 255, 255, .35)
    }

    .newsletter {
      background: var(--cream);
      border: var(--b);
      border-radius: var(--radius);
      padding: 32px;
      text-align: center;
      margin-top: 32px
    }

    .newsletter h3 {
      font-family: var(--font-head);
      font-size: 22px;
      font-weight: 900;
      text-transform: uppercase;
      margin-bottom: 6px
    }

    .newsletter p {
      font-size: 15px;
      font-weight: 500;
      color: rgba(29, 38, 49, .62);
      margin-bottom: 18px
    }

    .nl-form {
      display: flex;
      gap: 10px;
      max-width: 400px;
      margin: 0 auto
    }

    .nl-form input {
      flex: 1;
      padding: 14px 18px;
      border: var(--b);
      border-radius: var(--radius-sm);
      font-family: 'Inter', sans-serif;
      font-size: 15px;
      background: #fff;
      min-height: 52px
    }

    .nl-form input:focus {
      outline: none;
      border-color: var(--red);
      box-shadow: 0 0 0 3px rgba(238, 39, 38, .15)
    }

    .nl-form button {
      font-family: var(--font-ui);
      font-size: 11px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: .1em;
      padding: 14px 24px;
      background: var(--navy);
      color: #fff;
      border: var(--b);
      border-radius: var(--radius-sm);
      cursor: pointer;
      min-height: 52px;
      transition: all .15s
    }

    .nl-form button:hover {
      background: var(--red)
    }

    .nl-form button:focus-visible {
      outline: 3px solid var(--red);
      outline-offset: 2px
    }

    /* ============================
   FINAL CTA
============================ */
    #finalcta {
      background: var(--red);
      color: #fff;
      position: relative;
      overflow: hidden;
      border-top: var(--b);
      border-bottom: var(--b)
    }

    #finalcta .halftone {
      opacity: .08
    }

    .fcta-inner {
      text-align: center;
      position: relative;
      z-index: 2;
      max-width: 580px;
      margin: 0 auto
    }

    .fcta-h {
      font-family: var(--font-head);
      font-size: clamp(28px, 4.5vw, 56px);
      font-weight: 900;
      line-height: 1;
      text-transform: uppercase;
      font-style: italic;
      margin-bottom: 14px;
      letter-spacing: -.02em
    }

    .fcta-p {
      font-size: 17px;
      font-weight: 500;
      opacity: .92;
      margin-bottom: 28px;
      line-height: 1.55
    }

    /* TASK 19: CTA discipline — primary button prominent, secondaries demoted to outline */
    .fcta-btns {
      display: flex;
      flex-wrap: wrap;
      gap: 12px;
      justify-content: center
    }

    /* ============================
   FOOTER
============================ */
    footer {
      background: var(--navy);
      color: #fff;
      border-top: var(--b)
    }

    .footer-grid {
      display: grid;
      grid-template-columns: 1.7fr 1fr 1fr;
      gap: 48px;
      padding: 56px 0 32px
    }

    .f-logo {
      height: 44px;
      filter: brightness(0) invert(1);
      opacity: .75;
      margin-bottom: 14px
    }

    .f-desc {
      font-size: 13px;
      font-weight: 500;
      opacity: .52;
      line-height: 1.7;
      max-width: 240px;
      margin-bottom: 18px
    }

    .f-socials {
      display: flex;
      gap: 9px
    }

    .f-soc {
      width: 36px;
      height: 36px;
      border-radius: 50%;
      border: 1.5px solid rgba(255, 255, 255, .18);
      display: flex;
      align-items: center;
      justify-content: center;
      transition: all .15s
    }

    .f-soc:hover {
      background: var(--red);
      border-color: var(--red)
    }

    .f-soc svg {
      width: 14px;
      height: 14px;
      fill: #fff
    }

    footer nav h3 {
      font-family: var(--font-ui);
      font-size: 10px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: .22em;
      opacity: .45;
      margin-bottom: 14px
    }

    footer nav ul li {
      margin-bottom: 8px
    }

    footer nav ul a {
      font-size: 13px;
      font-weight: 500;
      opacity: .58;
      transition: opacity .15s;
      display: inline-block
    }

    footer nav ul a:hover {
      opacity: 1;
      color: var(--yellow)
    }

    .safeguarding-block {
      background: rgba(255, 255, 255, .04);
      border: 1px solid rgba(255, 255, 255, .1);
      border-left: 3px solid var(--yellow);
      border-radius: 8px;
      padding: 14px 16px;
      margin-top: 24px
    }

    .sg-lbl {
      font-family: var(--font-ui);
      font-size: 9px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: .2em;
      color: var(--yellow);
      margin-bottom: 5px
    }

    .sg-text {
      font-size: 12px;
      font-weight: 500;
      opacity: .6;
      line-height: 1.55
    }

    .sg-link {
      font-family: var(--font-ui);
      font-size: 10px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: .12em;
      color: var(--yellow);
      opacity: .8;
      display: inline-block;
      margin-top: 5px;
      transition: opacity .15s
    }

    .sg-link:hover {
      opacity: 1
    }

    .footer-bottom {
      border-top: 1px solid rgba(255, 255, 255, .07);
      padding: 16px 0;
      display: flex;
      justify-content: space-between;
      align-items: center;
      gap: 12px;
      font-family: var(--font-ui);
      font-size: 10px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: .1em;
      opacity: .3;
      flex-wrap: wrap
    }

    @media(max-width:768px) {
      .footer-grid {
        grid-template-columns: 1fr;
        gap: 24px
      }
    }

    /* ============================
   MODAL + STICKY
============================ */
    #modal {
      display: none;
      position: fixed;
      inset: 0;
      z-index: 950;
      background: rgba(29, 38, 49, .82);
      backdrop-filter: blur(8px);
      align-items: center;
      justify-content: center;
      padding: 20px
    }

    #modal.open {
      display: flex
    }

    .modal-inner {
      width: 100%;
      max-width: 840px;
      background: #000;
      border: var(--b);
      border-radius: var(--radius);
      overflow: hidden;
      box-shadow: var(--shadow-lg);
      position: relative
    }

    .modal-close {
      position: absolute;
      top: -52px;
      right: 0;
      color: #fff;
      font-family: var(--font-ui);
      font-size: 13px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: .1em;
      cursor: pointer;
      padding: 10px 18px;
      border: 2px solid rgba(255, 255, 255, .3);
      border-radius: 8px;
      background: rgba(255, 255, 255, .08);
      min-height: 44px;
      transition: background .15s
    }

    .modal-close:hover {
      background: rgba(255, 255, 255, .15)
    }

    .modal-close:focus-visible {
      outline: 3px solid var(--red);
      outline-offset: 3px
    }

    .modal-inner iframe {
      width: 100%;
      aspect-ratio: 16/9;
      border: none;
      display: block
    }

    #sticky {
      position: fixed;
      bottom: 0;
      left: 0;
      width: 100%;
      background: rgba(29, 38, 49, .96);
      backdrop-filter: blur(12px);
      border-top: 3px solid var(--red);
      padding: 12px 0;
      z-index: 500;
      transform: translateY(100%);
      transition: transform .35s cubic-bezier(0.16, 1, 0.3, 1)
    }

    #sticky.show {
      transform: none
    }

    .sticky-inner {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 14px;
      max-width: 1160px;
      margin: 0 auto;
      padding: 0 16px
    }

    .sticky-msg {
      font-family: var(--font-ui);
      font-size: 11px;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: .12em;
      color: #fff
    }

    .sticky-btns {
      display: flex;
      gap: 8px;
      align-items: center
    }

    .sticky-btns .btn {
      min-height: 40px
    }

    .sticky-x {
      color: rgba(255, 255, 255, .4);
      font-size: 18px;
      padding: 8px;
      cursor: pointer;
      transition: color .15s;
      min-width: 40px;
      min-height: 40px;
      display: flex;
      align-items: center;
      justify-content: center
      background: none;
      border: none
    }

    .sticky-x:hover {
      color: #fff
    }

    @media(max-width:580px) {
      #sticky {
        padding: 10px 0
      }
      .sticky-inner {
        gap: 8px
      }
      .sticky-msg {
        display: none
      }
      .sticky-btns .btn {
        padding: 10px 16px;
        font-size: 11px
      }
    }
  </style>
</head>

<body>
  <a href="#main" class="skip-link">Skip to main content</a>

  <!-- ======== TICKER ======== -->
  <div id="ticker">
    <div class="ticker-item" id="ticker-item">
      <span class="ticker-dot">●</span>
      <span class="ticker-new">New</span>
      <span class="ticker-text">Omuto Youth Center now open in Nabbuzi, Mpigi.</span>
    </div>
  </div>

  <!-- ======== NAV ======== -->
<nav id="nav" aria-label="Main navigation">
  <div class="nav-wrap">
    <div class="nav-left">
      <a href="index.php" class="nav-link active">Home</a>

      <div class="nav-dd">
        <button class="nav-link" aria-haspopup="true" aria-expanded="false">
          Our Work ▾
        </button>
        <div class="nav-dd-panel" role="menu">
          <a href="osx.php" role="menuitem">School Xperience</a>
          <a href="yap.php" role="menuitem">YAP Chapters</a>
          <a href="ofa.php" role="menuitem">Football Alliance</a>
          <a href="https://www.youtube.com/@omutopulse" target="_blank" rel="noopener" role="menuitem">Omuto Pulse ↗</a>
          <a href="essentials.php" role="menuitem">Omuto Essentials</a>
        </div>
      </div>

      <a href="about.php" class="nav-link">About</a>
    </div>

    <div class="nav-center">
      <a href="index.php" aria-label="Omuto Foundation — home">
        <img src="https://i.imgur.com/onkikq1.png" alt="Omuto Foundation" />
      </a>
    </div>

    <div class="nav-right">
      <div class="nav-dd">
        <button class="nav-link" aria-haspopup="true" aria-expanded="false">
          Impact ▾
        </button>
        <div class="nav-dd-panel" role="menu">
          <a href="report2025.php" role="menuitem">Annual Report 2025</a>
          <a href="impact.php" role="menuitem">Impact Data</a>
          <a href="docs.php" role="menuitem">Financials</a>
        </div>
      </div>

      <a href="essentials.php" class="nav-link">Store</a>

      <a href="https://wa.me/256750028703" target="_blank" rel="noopener"
         class="nav-link" style="padding:7px 9px" aria-label="WhatsApp">
        <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24">
          <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
        </svg>
      </a>

      <a href="campaign.php" class="nav-link nav-cta-btn">Fund a Chapter</a>
    </div>

    <!-- MOBILE HAMBURGER (single) -->
    <button class="hbg" id="hbg" type="button"
            aria-label="Toggle menu"
            aria-expanded="false"
            aria-controls="mob-nav">
      <span></span>
      <span></span>
      <span></span>
    </button>
  </div>
</nav>

<!-- Mobile nav (keep as you already have) -->
<div id="mob-nav" role="dialog" aria-label="Mobile navigation">
  <div class="mob-links">
    <a href="index.php">Home</a>
    <span class="mob-group-lbl">Our Work</span>
    <div class="mob-group-links">
      <a href="osx.php">School Xperience</a>
      <a href="yap.php">YAP Chapters</a>
      <a href="ofa.php">Football Alliance</a>
      <a href="https://www.youtube.com/@omutopulse" target="_blank">Omuto Pulse ↗</a>
      <a href="essentials.php">Essentials</a>
    </div>
    <a href="about.php">About</a>
    <span class="mob-group-lbl">Impact</span>
    <div class="mob-group-links">
      <a href="report2025.php">Annual Report 2025</a>
      <a href="impact.php">Impact Data</a>
      <a href="docs.php">Financials</a>
    </div>
    <a href="essentials.php">Store</a>
  </div>
  <div class="mob-ctas">
    <a href="campaign.php" class="primary">Fund a Chapter</a>
    <a href="contact.php" class="secondary">Partner With Us</a>
  </div>
</div>
<main id="main" style="padding-top:calc(var(--ticker-h) + 70px)">

    <!-- ======== HERO ======== -->
<section id="hero">
  <div class="hero-halftone"></div>
  <div class="hero-glow-r"></div>
  <div class="hero-glow-l"></div>

  <div class="container">
    <div class="hero-grid">
      <!-- Copy left -->
      <div class="hero-text-col">
        <div class="hero-badges reveal rd1">
          <span class="badge badge-cream">
            <svg width="10" height="10" fill="var(--red)" viewBox="0 0 24 24" style="display:inline;vertical-align:middle;margin-right:4px">
              <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7z" />
            </svg>
            RURAL, Uganda
          </span>
          <span class="badge badge-yellow">SINCE 2019</span>
        </div>

        <h1 class="hero-h1 reveal">
          <span class="line1">YOUTH-LED</span>
          <span class="line2">ACTION.</span>
        </h1>

        <p class="hero-tagline reveal rd2">
          We build youth-run systems that outlast us.
        </p>

        <div class="hero-proof-strip reveal rd2">
          <div class="hps-item">
            <span class="hps-dot" style="background:var(--red)"></span>
            <strong>15</strong>&nbsp;chapters
          </div>
          <div class="hps-divider"></div>
          <div class="hps-item">
            <span class="hps-dot" style="background:var(--teal)"></span>
            <strong>7,000+</strong>&nbsp;youth engaged
          </div>
          <div class="hps-divider"></div>
          <div class="hps-item">
            <span class="hps-dot" style="background:var(--gold)"></span>
            2 Districts
          </div>
        </div>

        <p class="hero-body reveal rd3">
          Young people in our network are designing and running their own solutions; clean water, menstrual health, trees, talents and enterprise. Built from within, by the people who live here.
        </p>

        <div class="hero-ctas reveal rd4">
          <a href="campaign.php" class="btn btn-red">
            <svg width="14" height="14" fill="currentColor" viewBox="0 0 24 24">
              <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
            </svg>
            Fund a Chapter
          </a>
          <a href="contact.php" class="btn btn-outline-white" style="border-color:rgba(29,38,49,.25);color:rgba(29,38,49,.7)">
            Start a Chapter
          </a>
        </div>
      </div>

      <!-- Slideshow right -->
      <div class="hero-vis reveal rd2">
        <div class="hero-ss">
          <div class="slide-holder" id="ss-holder">
            <img
              class="hero-slide active skeleton"
              id="hs0"
              src="https://i.ibb.co/wZ9cf7Ny/31.png"
              alt="Youth-led community water project, Mpigi Uganda"
              data-watermark="SDGs"
              onload="this.classList.remove('skeleton');this.classList.add('loaded')"
            />
            <img
              class="hero-slide skeleton"
              id="hs1"
              src="https://i.ibb.co/m5TL3gFq/23.png"
              alt="Students presenting their community action plan"
              loading="lazy"
              data-watermark="LEADERSHIP"
              onload="this.classList.remove('skeleton');this.classList.add('loaded')"
            />
            <img
              class="hero-slide skeleton"
              id="hs2"
              src="https://i.ibb.co/TBrW6BPh/28.png"
              alt="Omuto School Xperience training session"
              loading="lazy"
              data-watermark="SCHOOLS"
              onload="this.classList.remove('skeleton');this.classList.add('loaded')"
            />
            <img
              class="hero-slide skeleton"
              id="hs3"
              src="https://i.ibb.co/mVPm5DzK/18.png"
              alt="Omuto Football Alliance match day"
              loading="lazy"
              data-watermark="SPORTS"
              onload="this.classList.remove('skeleton');this.classList.add('loaded')"
            />
            <img
              class="hero-slide skeleton"
              id="hs4"
              src="https://i.ibb.co/whj2bMb6/22.png"
              alt="RED Campaign menstrual health distribution"
              loading="lazy"
              data-watermark="GENDER"
              onload="this.classList.remove('skeleton');this.classList.add('loaded')"
            />

            <button class="ss-pause" id="ss-pause" aria-label="Pause slideshow" type="button">
              <svg id="ss-pause-icon" viewBox="0 0 24 24">
                <path d="M6 19h4V5H6v14zm8-14v14h4V5h-4z" />
              </svg>
            </button>

            


          </div>

          <div class="slide-dots" id="sdots" role="group" aria-label="Slideshow navigation"></div>
        </div>
      </div>

            <div class="hero-text-fade"></div>
    </div>
  </div>

  <!-- watermark word in bottom padding, separate from grid -->
  <div class="hero-watermark"></div>
</section>


<script>
document.addEventListener('DOMContentLoaded', function(){
  const slides = document.querySelectorAll('.hero-slide');
  const wm = document.querySelector('.hero-watermark');
  const holder = document.getElementById('ss-holder');
  const dotsContainer = document.getElementById('sdots');
  const pauseBtn = document.getElementById('ss-pause');
  const pauseIcon = document.getElementById('ss-pause-icon');

  if(!slides.length || !holder) return;

  let currentIndex = 0;
  let isPaused = false;
  let timer = null;

  function updateWatermark(){
    if(!wm) return;
    const word = slides[currentIndex].dataset.watermark || '';
    wm.textContent = word;
  }

  // build dots
  if(dotsContainer){
    dotsContainer.innerHTML = '';
    slides.forEach((_, i)=>{
      const dot = document.createElement('button');
      dot.type = 'button';
      dot.className = 'sdot' + (i === 0 ? ' active' : '');
      dot.setAttribute('data-index', i);
      dot.setAttribute('aria-label', 'Go to slide ' + (i+1));
      dotsContainer.appendChild(dot);
    });
  }

  const dots = dotsContainer ? dotsContainer.querySelectorAll('.sdot') : [];

  function showSlide(index){
    currentIndex = (index + slides.length) % slides.length;

    slides.forEach((s,i)=>{
      s.classList.toggle('active', i === currentIndex);
    });
    dots.forEach((d,i)=>{
      d.classList.toggle('active', i === currentIndex);
    });

    updateWatermark();
  }

  function nextSlide(){
    showSlide(currentIndex + 1);
  }

  function startAuto(){
    if(timer) clearInterval(timer);
    if(!isPaused){
      timer = setInterval(nextSlide, 7000);
    }
  }

  if(dotsContainer){
    dotsContainer.addEventListener('click', function(e){
      const target = e.target.closest('.sdot');
      if(!target) return;
      const idx = parseInt(target.getAttribute('data-index'), 10) || 0;
      showSlide(idx);
      startAuto();
    });
  }

  if(pauseBtn && pauseIcon){
    pauseBtn.addEventListener('click', function(){
      isPaused = !isPaused;
      if(isPaused){
        if(timer) clearInterval(timer);
        pauseIcon.innerHTML = '<path d="M8 5v14l11-7z" />';
      }else{
        pauseIcon.innerHTML = '<path d="M6 19h4V5H6v14zm8-14v14h4V5h-4z" />';
        startAuto();
      }
    });
  }

  // init
  showSlide(0);
  startAuto();
});
</script>


    <!-- ======== STATS ======== -->
    <div id="stats" aria-label="Omuto Foundation impact figures">
      <div class="stats-row">
        <div class="stat-box sb-red">
          <span class="stat-num stat-counter" data-target="7000" data-suffix="+" data-delay="0">7,000+</span>
          <span class="stat-num stat-counter" data-target="3200" data-suffix="+" data-delay="150">3,200+</span>
          <span class="stat-num stat-counter" data-target="700" data-suffix="+" data-delay="300">700+</span>
          <span class="stat-num stat-counter" data-target="2300" data-suffix="+" data-delay="450">2,300+</span>
          <span class="stat-num stat-counter" data-target="47" data-suffix="" data-delay="600">47</span>
          <span class="stat-lbl">Completed Projects</span>
        </div>
      </div>
    </div>

    <!-- ======== MANIFESTO ======== -->
    <section id="manifesto">
      <div class="container">
        <!-- TASK 1: reveal class on .manifesto-inner — this is what the fixed CSS selector targets -->
        <div class="manifesto-inner reveal">
          <span class="eyebrow ew-red" style="margin-bottom:20px">Omuto Manifesto 2026</span>
          <div class="manifesto-rule"></div>
          <p class="manifesto-quote">"Omuto was formed, not to maintain poverty, but to build structures that will outlive us and change lives forever. <br> Charity feeds a day. <span class="highlight-text">Structure feeds a generation.</span>"</p>
          <p class="manifesto-attr">— McMike Mutumba, Founder, Omuto Foundation</p>
        </div>
      </div>
    </section>

    <!-- ======== PHOTO STRIP ======== -->
    <div class="photo-strip" role="region" aria-label="Omuto Foundation programmes">
      <div class="ps-item ps-water">
        <img src="https://img.youtube.com/vi/1oZI4jqyjYc/maxresdefault.jpg" onerror="this.src='https://img.youtube.com/vi/1oZI4jqyjYc/hqdefault.jpg'" alt="PureWater Initiative — Purifaaya filter installation" loading="lazy" />
        <div class="ps-cap">
          <p class="ps-cap-lbl">Water Access</p>
        </div>
      </div>
      <div class="ps-item ps-girls">
        <img src="https://img.youtube.com/vi/JZ76qdSHM2Q/maxresdefault.jpg" onerror="this.src='https://img.youtube.com/vi/JZ76qdSHM2Q/hqdefault.jpg'" alt="RED Campaign — girls menstrual health programme" loading="lazy" />
        <div class="ps-cap">
          <p class="ps-cap-lbl">Girls & Menstrual Health</p>
        </div>
      </div>
      <div class="ps-item ps-lead">
        <img src="https://img.youtube.com/vi/qhKgGPs_Gy8/maxresdefault.jpg" onerror="this.src='https://img.youtube.com/vi/1oZI4jqyjYc/hqdefault.jpg'" alt="Youth leadership — debates, forums, community action" loading="lazy" />
        <div class="ps-cap">
          <p class="ps-cap-lbl">Youth Leadership</p>
        </div>
      </div>
      <div class="ps-item ps-sports">
        <img src="https://img.youtube.com/vi/Pmcf5-HD1Z8/maxresdefault.jpg" onerror="this.src='https://img.youtube.com/vi/Pmcf5-HD1Z8/hqdefault.jpg'" alt="Omuto Football Alliance — sports for development" loading="lazy" />
        <div class="ps-cap">
          <p class="ps-cap-lbl">Talents & Voice</p>
        </div>
      </div>
    </div>

    <!-- ======== REALITY
     TASK 16: removed class="section" — .reality-hook controls its own padding
     TASK 15: removed redundant inline style="background:..." (already in CSS)
============================ -->
    <section id="reality">
      <div class="halftone halftone-light"></div>
      <div class="container reality-hook">
        <div class="hook-inner reveal">
          <div class="hook-stat-block">
            <span class="hook-pct">57%</span>
            <p class="hook-label">of Uganda's youth<br />not in school,<br />work, or training.</p>
            <p class="hook-source">Source: Uganda National Planning Authority · NEET = Not in Education, Employment or Training</p>
          </div>
          <div>
            <span class="eyebrow ew-white">The Challenge We Face</span>
            <p class="hook-explain">Rural Uganda's young people have the energy, but lack support structures. <strong>Without a clear path, talent is wasted and potential turns into frustration.</strong></p>
            <p class="hook-explain" style="margin-top:14px">Omuto exists to turn that energy into organized community power.</p>
            <a href="impact.php" class="btn btn-outline-white btn-sm" style="margin-top:22px">See Our Impact Data →</a>
          </div>
        </div>
        <h2 class="visually-hidden">The Problems We Address</h2>
        <div class="prob-grid">
          <div class="prob-card pc-water reveal rd1">
            <div class="prob-thumb"><img src="https://pplx-res.cloudinary.com/image/upload/t_thumbnail_512/pplx_search_images/a2da555753b4b3a13bebfa4619e4bb44c969c3e4.jpg" alt="Unsafe water access in rural Uganda" loading="lazy" style="object-position:center" /></div>
            <div class="prob-overlay"></div>
            <div class="prob-body">
              <span class="prob-stat">1in3</span>
              <h3 class="prob-title">No Safe Water</h3>
              <p class="prob-desc">Waterborne illness keeps kids out of school, drains households income and time</p>
              <span class="prob-hint">→ PureWater Initiative</span>
            </div>
          </div>
          <div class="prob-card pc-girls reveal rd2">
            <div class="prob-thumb"><img src="https://d2u1z1lopyfwlx.cloudfront.net/thumbnails/655a8405-cb60-520e-9668-dc30b49d4a98/0af98422-8d5d-5204-9f00-361f34eddb23.jpg" alt="Girls missing school due to menstrual health barriers" loading="lazy" /></div>
            <div class="prob-overlay"></div>
            <div class="prob-body">
              <span class="prob-stat">5days/mo</span>
              <h3 class="prob-title">Girls Missing School</h3>
              <p class="prob-desc">No pads, no safe toilets, no health conversations. The gap compounds over years</p>
              <span class="prob-hint">→ RED Campaign</span>
            </div>
          </div>
          <div class="prob-card pc-youth reveal rd3">
            <div class="prob-thumb"><img src="https://d2u1z1lopyfwlx.cloudfront.net/thumbnails/3cd104c4-31de-5aa7-9b30-279160e974b6/5bc4b7a2-8b8f-5391-a0d7-85a6f628625a.jpg" alt="Youth without pathways or mentors" loading="lazy" /></div>
            <div class="prob-overlay"></div>
            <div class="prob-body">
              <span class="prob-stat">57%</span>
              <h3 class="prob-title">Youth Without a Path</h3>
              <p class="prob-desc">Talented, energised — but no structure, no mentors, no route forward</p>
              <span class="prob-hint">→ YAP Chapters</span>
            </div>
          </div>
          <div class="prob-card pc-env reveal rd4">
            <div class="prob-thumb"><img src="https://d2u1z1lopyfwlx.cloudfront.net/thumbnails/2391dd6a-e42f-51ad-b7b5-1a218707a4e4/fab81a65-2c50-5a4f-a0f6-a4279f631876.jpg" alt="Deforestation and environmental damage" loading="lazy" /></div>
            <div class="prob-overlay"></div>
            <div class="prob-body">
              <span class="prob-stat">↓30%</span>
              <h3 class="prob-title">Forest Loss</h3>
              <p class="prob-desc">Deforestation strips the land. The next generation inherits the damage</p>
              <span class="prob-hint">→ GreenSchools</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ======== OMUTO MODEL (ISOLATED) ======== -->
<section id="model" class="section">
  <div class="container">
    <div class="reveal" style="text-align:center">
      <span class="eyebrow ew-teal">Our Methodology</span>
      <h2 class="t-section">The <em class="line-red">OMUTO</em> Model</h2>
      <p class="t-body" style="opacity:.72;max-width:520px;margin:12px auto 0">
        <strong>Every chapter moves through five stages</strong> — from organising around real community problems to owning independent, youth‑run initiatives.
      </p>
    </div>

    <div class="om-model-box reveal">
      <!-- Tabs -->
      <div class="om-model-tabs" role="tablist">
        <button class="om-mtab active" role="tab" aria-selected="true" aria-controls="om-mp-O" id="om-mt-O" type="button">
          <div class="om-mtab-dot" style="color:var(--red)">O</div>
          <span>Organize</span>
        </button>
        <button class="om-mtab" role="tab" aria-selected="false" aria-controls="om-mp-M" id="om-mt-M" type="button">
          <div class="om-mtab-dot" style="color:var(--teal)">M</div>
          <span>Mentor</span>
        </button>
        <button class="om-mtab" role="tab" aria-selected="false" aria-controls="om-mp-U" id="om-mt-U" type="button">
          <div class="om-mtab-dot" style="color:var(--gold)">U</div>
          <span>Unite</span>
        </button>
        <button class="om-mtab" role="tab" aria-selected="false" aria-controls="om-mp-T" id="om-mt-T" type="button">
          <div class="om-mtab-dot" style="color:var(--blue)">T</div>
          <span>Transform</span>
        </button>
        <button class="om-mtab" role="tab" aria-selected="false" aria-controls="om-mp-O2" id="om-mt-O2" type="button">
          <div class="om-mtab-dot" style="color:var(--navy)">O</div>
          <span>Own</span>
        </button>
      </div>

      <!-- Progress rail -->
      <div class="om-model-progress-wrap">
        <div id="om-model-progress"></div>
      </div>

      <!-- Panels -->
      <div id="om-mp-O" class="om-model-panel active" role="tabpanel" aria-labelledby="om-mt-O">
        <div class="om-model-content">
          <div class="om-model-wm">O</div>
          <h3 class="om-model-title" style="color:var(--red)">Organize</h3>
          <p class="om-model-body">
            Youth identify the real problems in their communities. Through Student Leaders Forums, they speak, commit, and take ownership. Problems become starting points.
          </p>
          <div class="om-model-metric">
            <svg fill="var(--red)" viewBox="0 0 24 24">
              <path d="M16 6l2.29 2.29-4.88 4.88-4-4L2 16.59 3.41 18l6-6 4 4 6.3-6.29L22 12V6z" />
            </svg>
            <span>Chapters formed · needs mapped</span>
          </div>
          <div class="om-model-nav">
            <button class="btn btn-white btn-sm" data-om-model-prev type="button">← Prev</button>
            <button class="btn btn-navy btn-sm" data-om-model-next type="button">Next →</button>
          </div>
        </div>
        <div class="om-model-img">
          <img src="https://scontent.ftlv19-3.fna.fbcdn.net/v/t39.30808-6/621459398_933342342348862_9193991941212982030_n.jpg?stp=c200.0.1600.1600a_dst-jpg_s552x414_tt6&_nc_cat=108&ccb=1-7&_nc_sid=5df8b4&_nc_ohc=OY4WcToKE9gQ7kNvwEdSN4N&_nc_oc=AdnI-nwkf1xD4O618Jbwx6j_cU2dgRMBGjpYrNfDn8Ykv5_7Uml_Gh3Y1ShEXvJ3TYlVqF1Y0oqXtnLw_WEBmrjo&_nc_zt=23&_nc_ht=scontent.ftlv19-3.fna&_nc_gid=krHrjj5WvmfhDsmOkTxMzg&_nc_ss=8&oh=00_AfwyeAB6cCpp30LcVRCp7itM-xvDd7rtpIeUnB6clxL6UA&oe=69B0EB47" alt="Students presenting community plans" loading="lazy" />
        </div>
      </div>

      <div id="om-mp-M" class="om-model-panel" role="tabpanel" aria-labelledby="om-mt-M">
        <div class="om-model-content">
          <div class="om-model-wm">M</div>
          <h3 class="om-model-title" style="color:var(--teal)">Mentor</h3>
          <p class="om-model-body">
            Leadership training, debate, financial literacy, entrepreneurship circles. We strengthen what already exists — youth energy, school networks, creativity — and turn it into real capacity.
          </p>
          <div class="om-model-metric">
            <svg fill="var(--teal)" viewBox="0 0 24 24">
              <path d="M16 6l2.29 2.29-4.88 4.88-4-4L2 16.59 3.41 18l6-6 4 4 6.3-6.29L22 12V6z" />
            </svg>
            <span>Youth trained · chapters activated</span>
          </div>
          <div class="om-model-nav">
            <button class="btn btn-white btn-sm" data-om-model-prev type="button">← Prev</button>
            <button class="btn btn-navy btn-sm" data-om-model-next type="button">Next →</button>
          </div>
        </div>
        <div class="om-model-img">
          <img src="https://scontent.ftlv19-1.fna.fbcdn.net/v/t39.30808-6/478785679_671916755158090_6709550366111186237_n.jpg?stp=c342.0.1365.1365a_dst-jpg_s552x414_tt6&_nc_cat=100&ccb=1-7&_nc_sid=a934a8&_nc_ohc=Aqx2lXc305IQ7kNvwEwCB2U&_nc_oc=AdkJKhlyZfQCg2lTgvuzwSUpi5AOp_Rb0oBV_rVEG8DpOiZFvIF2-TaNMl0Xuf0tNKd-jRSqGU5715GuTX00Sy9n&_nc_zt=23&_nc_ht=scontent.ftlv19-1.fna&_nc_gid=t-9c0xW7awEyZ8WtEaiMHw&_nc_ss=8&oh=00_AfxTgwR20fEeFUscF9bFocg_sZT4QtEy1TMMgGRUtrx8dA&oe=69B0F37D" alt="Inter-school debate competition" loading="lazy" />
        </div>
      </div>

      <div id="om-mp-U" class="om-model-panel" role="tabpanel" aria-labelledby="om-mt-U">
        <div class="om-model-content">
          <div class="om-model-wm">U</div>
          <h3 class="om-model-title" style="color:var(--gold)">Unite</h3>
          <p class="om-model-body">
            Resources meet action. They build. GreenSchools. PureWater. RED Campaign. Real projects with real results and real community ownership.
          </p>
          <div class="om-model-metric">
            <svg fill="var(--gold)" viewBox="0 0 24 24">
              <path d="M16 6l2.29 2.29-4.88 4.88-4-4L2 16.59 3.41 18l6-6 4 4 6.3-6.29L22 12V6z" />
            </svg>
            <span>Water points · girls reached · trees planted</span>
          </div>
          <div class="om-model-nav">
            <button class="btn btn-white btn-sm" data-om-model-prev type="button">← Prev</button>
            <button class="btn btn-navy btn-sm" data-om-model-next type="button">Next →</button>
          </div>
        </div>
        <div class="om-model-img">
          <img src="https://scontent.ftlv19-2.fna.fbcdn.net/v/t39.30808-6/479742098_671916538491445_7227618715717209181_n.jpg?stp=c342.0.1365.1365a_dst-jpg_s552x414_tt6&_nc_cat=111&ccb=1-7&_nc_sid=a934a8&_nc_ohc=CNm15aF8Ux0Q7kNvwFYOx_P&_nc_oc=Admu4DXtlF4gEODPTx4hOPU-YyRCHynVnsPmyWNmam39eta9v1lxLijBC-Z4lIWGTWlgTYHZAy-Z1D7Ru0CAss0s&_nc_zt=23&_nc_ht=scontent.ftlv19-2.fna&_nc_gid=ckDtdeBTwbb6QkgZ-QfLHA&_nc_ss=8&oh=00_AfyDgFLtecXfrq2VpFRsrGKhvYv2HxlyjCewoJx-fMP9sw&oe=69B0F798" alt="Omuto School Xperience campaign" loading="lazy" />
        </div>
      </div>

      <div id="om-mp-T" class="om-model-panel" role="tabpanel" aria-labelledby="om-mt-T">
        <div class="om-model-content">
          <div class="om-model-wm">T</div>
          <h3 class="om-model-title" style="color:var(--blue)">Transform</h3>
          <p class="om-model-body">
            Communities shift. Schools get greener. Girls stay in class. Youth enterprises generate revenue. The change isn't a project output — it's a new normal the community maintains itself.
          </p>
          <div class="om-model-metric">
            <svg fill="var(--blue)" viewBox="0 0 24 24">
              <path d="M16 6l2.29 2.29-4.88 4.88-4-4L2 16.59 3.41 18l6-6 4 4 6.3-6.29L22 12V6z" />
            </svg>
            <span>Businesses launched · participation rates</span>
          </div>
          <div class="om-model-nav">
            <button class="btn btn-white btn-sm" data-om-model-prev type="button">← Prev</button>
            <button class="btn btn-navy btn-sm" data-om-model-next type="button">Next →</button>
          </div>
        </div>
        <div class="om-model-img">
          <img src="https://scontent.ftlv19-1.fna.fbcdn.net/v/t39.30808-6/479997445_671916648491434_5662441148373890207_n.jpg?stp=c342.0.1365.1365a_dst-jpg_s552x414_tt6&_nc_cat=103&ccb=1-7&_nc_sid=a934a8&_nc_ohc=nB6TkE7cr0cQ7kNvwHYAfpb&_nc_oc=Adm77tCtpRsla-dcPhVOhoa5ZvijrE7vnAAdzcCQx5s_VIKh2sRySqCEi94rqFdPUa6bt66J-cAbpIRY41CisWq7&_nc_zt=23&_nc_ht=scontent.ftlv19-1.fna&_nc_gid=79UYzfS-7_qhe7TSQ_yw6g&_nc_ss=8&oh=00_AfzuxDE1AcWD1N92avokjg9fg6TW3nsa56rIB6UmvJhTKA&oe=69B0F270" alt="Football — discipline and teamwork" loading="lazy" />
        </div>
      </div>

      <div id="om-mp-O2" class="om-model-panel" role="tabpanel" aria-labelledby="om-mt-O2">
        <div class="om-model-content">
          <div class="om-model-wm">Ø</div>
          <h3 class="om-model-title" style="color:var(--navy)">Own</h3>
          <p class="om-model-body">
            Graduates become mentors. Alumni launch new chapters. The cycle continues. Youth training youth, communities building communities — no external dependency required.
          </p>
          <div class="om-model-metric">
            <svg fill="var(--navy)" viewBox="0 0 24 24">
              <path d="M16 6l2.29 2.29-4.88 4.88-4-4L2 16.59 3.41 18l6-6 4 4 6.3-6.29L22 12V6z" />
            </svg>
            <span>Alumni leading · mentors trained</span>
          </div>
          <div class="om-model-nav">
            <button class="btn btn-white btn-sm" data-om-model-prev type="button">← Prev</button>
            <button class="btn btn-navy btn-sm" data-om-model-next type="button">Restart →</button>
          </div>
        </div>
        <div class="om-model-img">
          <img src="https://scontent.ftlv19-3.fna.fbcdn.net/v/t39.30808-6/598496554_901468482202915_6328486669376465907_n.jpg?stp=c160.0.960.960a_dst-jpg_s552x414_tt6&_nc_cat=108&ccb=1-7&_nc_sid=5df8b4&_nc_ohc=-kB5oO1kQx8Q7kNvwEcUp2T&_nc_oc=AdlbLY24IzS6N1f6I_vJl-tTwjrOhgOyTyfJmp_29PJtqity1dz_NqGEQGh3XCk5EWA4XazmsdB0AQ-HbxmZcwxS&_nc_zt=23&_nc_ht=scontent.ftlv19-3.fna&_nc_gid=krHrjj5WvmfhDsmOkTxMzg&_nc_ss=8&oh=00_AfwGImQQqnu7L8iMWj3lv3T56PV7mVqy1M9fqFySL1wkpQ&oe=69B0F6B2" alt="Youth celebrating success" loading="lazy" />
        </div>
      </div>
    </div>

    <div class="reveal" style="text-align:center;margin-top:20px">
      <a href="about.php" class="btn btn-white btn-sm">Read the Full Methodology →</a>
    </div>
  </div>
</section>


    <!-- ======== ECOSYSTEM
     TASK 15: removed redundant inline style="background:var(--cream)"
============================ -->
    <section id="ecosystem" class="section">
      <div class="container">
        <div style="text-align:center" class="reveal">
          <span class="eyebrow ew-navy">Connected System</span>
          <h2 class="t-section">Three Programmes.<br /><em class="line-red">One System.</em></h2>
          <p class="t-body" style="opacity:.65;max-width:480px;margin:12px auto 0">Youth, talent, and enterprise — reinforcing each other.</p>
        </div>
        <div class="pillar-grid">
          <div class="pillar reveal rd1">
            <div class="pillar-float-img"><img src="https://i.ibb.co/wrPnfcKG/21.png" alt="Omuto Youth Project" loading="lazy" /></div>
            <div class="pillar-body">
              <span class="pillar-tag" style="background:var(--teal);color:var(--navy)">Core Program</span>
              <h3 class="pillar-name">Youth Action</h3>
              <p class="pillar-sub">School Xperience · RED · GreenSchools · PureWater</p>
              <p>Student Forums anchor schools. Campaigns turn youth-identified problems into community-owned solutions.</p>
              <p class="pillar-tagline">"Youth run it. Communities own it."</p>
              <a href="osx.php" class="btn btn-navy btn-full btn-sm" style="margin-top:10px">Explore →</a>
            </div>
          </div>
          <div class="pillar reveal rd2">
            <div class="pillar-float-img"><img src="https://i.ibb.co/mVPm5DzK/18.png" alt="Omuto Talents Project" loading="lazy" /></div>
            <div class="pillar-body">
              <span class="pillar-tag" style="background:var(--yellow);color:var(--navy)">Expression</span>
              <h3 class="pillar-name">Talents & Voice</h3>
              <p class="pillar-sub">Football Alliance · Omuto Cup · Omuto Pulse</p>
              <p>Football builds discipline and teamwork. Our media team captures real stories from the ground. Every captain learns public speaking. Every match is a leadership lab.</p>
              <p class="pillar-tagline">"Leaders are made on the pitch and in the community."</p>
              <a href="ofa.php" class="btn btn-navy btn-full btn-sm" style="margin-top:10px">See the Alliance →</a>
            </div>
          </div>
          <div class="pillar reveal rd3">
            <div class="pillar-float-img"><img src="https://i.ibb.co/wZ9cf7Ny/31.png" alt="Omuto Essentials" loading="lazy" /></div>
            <div class="pillar-body">
              <span class="pillar-tag" style="background:var(--red);color:#fff">Sustainability</span>
              <h3 class="pillar-name">Omuto Essentials</h3>
              <p class="pillar-sub">Youth-Run Social Enterprise</p>
              <p>A youth-run social enterprise producing soap and Dignity Reusable Pads at the Youth Center. Revenue funds community campaigns and training.</p>
              <p class="pillar-tagline">"Youth learn business by running one."</p>
              <a href="essentials.php" class="btn btn-navy btn-full btn-sm" style="margin-top:10px">Shop Products →</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ======== YOUTH CENTER ======== -->
    <section id="youthcenter" class="section-lg">
      <div class="halftone halftone-light"></div>
      <div class="container">
        <div class="yc-grid">
          <div class="reveal">
            <span class="yc-new-badge">
              <svg width="10" height="10" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
              </svg>
              Now Open · February 2026
            </span>
            <h2 class="yc-title">The Omuto<br /><span style="color:var(--yellow)">Youth Center</span></h2>
            <p class="yc-body">A permanent home in Mpigi District — counselling, digital skills, entrepreneurship training, and enterprise production. All under one roof.</p>
              <div class="yc-features">
              <div class="yc-feat">
                <div class="yc-feat-icon" style="background:rgba(255,207,93,.15)"><svg width="15" height="15" fill="var(--yellow)" viewBox="0 0 24 24">
                    <path d="M12 3L1 9l11 6 9-4.91V17h2V9L12 3zM5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82z" />
                  </svg></div>
                <div>
                  <h3>Free Skills &amp; Counselling</h3>
                  <p>Career guidance, mentorship — at no cost</p>
                </div>
              </div>
              <div class="yc-feat">
                <div class="yc-feat-icon" style="background:rgba(64,210,175,.12)"><svg width="15" height="15" fill="var(--teal)" viewBox="0 0 24 24">
                    <path d="M20 18c1.1 0 1.99-.9 1.99-2L22 6c0-1.1-.9-2-2-2H4c-1.1 0-2 .9-2 2v10c0 1.1.9 2 2 2H0v2h24v-2h-4zM4 6h16v10H4V6z" />
                  </svg></div>
                <div>
                  <h3>Digital Literacy</h3>
                  <p>Weekend cohorts · 10–15 learners per intake</p>
                </div>
              </div>
              <div class="yc-feat">
                <div class="yc-feat-icon" style="background:rgba(238,39,38,.1)"><svg width="15" height="15" fill="var(--red)" viewBox="0 0 24 24">
                    <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7 14l-5-5 1.41-1.41L12 14.17l7.59-7.59L21 8l-9 9z" />
                  </svg></div>
                <div>
                  <h3>YoSkills Entrepreneurship</h3>
                  <p>15 trained · 10 graduated in 2024–2025 pilot</p>
                </div>
              </div>
              <div class="yc-feat">
                <div class="yc-feat-icon" style="background:rgba(150,217,242,.1)"><svg width="15" height="15" fill="var(--blue)" viewBox="0 0 24 24">
                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z" />
                  </svg></div>
                <div>
                  <h3>Essentials Production Hub</h3>
                  <p>Soap &amp; Dignity Pads produced here — revenue funds programmes</p>
                </div>
              </div>
            </div>
            <p class="yc-loc"><strong>📍 Nabbuzi, Kammengo — Mpigi District</strong><br />Along Masaka Road · Next to Moka Petro Station</p>
            <div style="display:flex;gap:10px;flex-wrap:wrap;margin-top:20px">
              <a href="contact.php" class="btn btn-white btn-sm">Visit the Center</a>
              <!-- TASK 19: secondary CTA demoted to outline -->
              <a href="campaign.php" class="btn btn-outline-white btn-sm">Support Us</a>
            </div>
          </div>
          <div class="yc-photos reveal rd2">
            <div class="yc-photo yc-photo-tall" style="background:#0e1a26">
              <img src="https://i.ibb.co/67tFM1Rr/PHOTO-2026-02-16-19-38-55.jpg" alt="Omuto Youth Center" loading="lazy" style="width:100%;height:100%;object-fit:cover;display:block" />
            </div>
            <div class="yc-photo" style="background:#162030">
              <img src="https://scontent.ftlv19-2.fna.fbcdn.net/v/t39.30808-6/645946434_966439385705824_578161353788283643_n.jpg?stp=c0.169.1024.1024a_dst-jpg_s552x414_tt6&_nc_cat=109&ccb=1-7&_nc_sid=5df8b4&_nc_ohc=GJx1JQ1qiPUQ7kNvwFBIq8a&_nc_oc=AdnNKthzO8r7sxcXhpf5Qi0Rj9avpQ21B3NA3gZzigmOnncy_B6XdFrMx_omGADFUZtBEhMhZZrtacs0qh36bIbm&_nc_zt=23&_nc_ht=scontent.ftlv19-2.fna&_nc_gid=r9J46BndTCym9YpbshxP4w&_nc_ss=8&oh=00_AfxvjlQv0oLPS5aDfWN2SuhcWA5Y4vY8Xi3C4W3ye0bdMQ&oe=69B0C16A" alt="Youth at the center" loading="lazy" style="object-fit:contain;padding:8px" />
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ======== PROOF
     TASK 12: fixed missing closing </div> for .container — was causing broken DOM from this section onward
     TASK 15: removed redundant inline style="background:var(--cream)"
============================ -->
    <section id="proof" class="section">
      <div class="container">
        <div style="text-align:center" class="reveal">
          <span class="eyebrow ew-navy">The Movement</span>
          <h2 class="t-section">We Don't Just Do Projects.<br /><em class="line-red">We Build Teams.</em></h2>
        </div>
        <div class="proof-grid reveal">
          <div class="proof-cell pc-env">
            <span class="proof-num">2,300+</span>
            <span class="proof-label">Trees Planted &amp;<br />Counting</span>
            <p class="proof-story">The <strong>Green Teams</strong> don't just plant trees — they map deforestation, manage nurseries, and guard saplings. Students in Mpigi are literally regrowing their own future.</p>
            <span class="proof-tag">GreenSchools Initiative</span>
          </div>
          <div class="proof-cell pc-r">
            <span class="proof-num">700+</span>
            <span class="proof-label">Girls Retained in<br />School</span>
            <p class="proof-story">The <strong>RED Brigades</strong> are student-led health squads. They distribute Dignity Pads, run safe-space talks, and fight period stigma so their peers never miss a day of class.</p>
            <span class="proof-tag">RED Campaign</span>
          </div>
          <div class="proof-cell pc-y">
            <span class="proof-num">11</span>
            <span class="proof-label">Teams. Captains.<br />Coaches. Medics.</span>
            <p class="proof-story">The <strong>Football Alliance</strong> is a leadership lab. Every captain is trained in public speaking. Every team has a safeguarding officer. It's not just a league; it's a youth government.</p>
            <span class="proof-tag">Omuto Football Alliance</span>
          </div>
        </div>
      </div><!-- TASK 12: this closing </div> was missing in original, breaking DOM structure -->
    </section>

    <!-- ======== VIDEOS ======== -->
    <section id="videos" class="section">
      <div class="halftone halftone-light"></div>
      <div class="container" style="position:relative;z-index:2">
        <div style="text-align:center" class="reveal">
          <span class="eyebrow ew-yellow">Omuto Pulse · YouTube</span>
          <h2 class="t-section" style="color:#fff">Hear It From <em style="color:var(--yellow)">Them</em></h2>
          <p style="font-size:15px;font-weight:500;opacity:.55;max-width:380px;margin:10px auto 0;color:#fff">In their own words, on their own ground.</p>
        </div>
        <div class="vid-grid reveal">
          <div class="vid-card featured" onclick="openModal('1oZI4jqyjYc')" role="button" tabindex="0" aria-label="Play featured Omuto video" onkeydown="if(event.key==='Enter')openModal('1oZI4jqyjYc')">
            <div class="vid-thumb">
              <img src="https://img.youtube.com/vi/1oZI4jqyjYc/maxresdefault.jpg" alt="Omuto Pulse — featured video" loading="lazy" onerror="this.src='https://img.youtube.com/vi/1oZI4jqyjYc/hqdefault.jpg'" />
              <div class="vplay">
                <div class="vplay-circle"><svg viewBox="0 0 24 24">
                    <path d="M8 5v14l11-7z" />
                  </svg></div>
              </div>
            </div>
            <div class="vid-info">
              <p class="v-tag">Featured · Documentary</p>
              <h3 class="v-title">Menstruation - The Story of Poor Rural Girls</h3>
              <p class="v-desc">A short documentary about how period poverty affects rural poor families and girls.</p>
            </div>
          </div>
          <div class="vid-card" onclick="openModal('qhKgGPs_Gy8')" role="button" tabindex="0" aria-label="Play video 2" onkeydown="if(event.key==='Enter')openModal('qhKgGPs_Gy8')">
            <div class="vid-thumb">
              <img src="https://img.youtube.com/vi/qhKgGPs_Gy8/hqdefault.jpg" alt="Omuto Pulse video" loading="lazy" />
              <div class="vplay">
                <div class="vplay-circle"><svg viewBox="0 0 24 24">
                    <path d="M8 5v14l11-7z" />
                  </svg></div>
              </div>
            </div>
            <div class="vid-info">
              <p class="v-tag">Young Leaders Camp</p>
              <h3 class="v-title">Highlights from the Young Leaders Camp, 2023</h3>
            </div>
          </div>
          <div class="vid-card" onclick="openModal('JZ76qdSHM2Q')" role="button" tabindex="0" aria-label="Play video 3" onkeydown="if(event.key==='Enter')openModal('JZ76qdSHM2Q')">
            <div class="vid-thumb">
              <img src="https://img.youtube.com/vi/JZ76qdSHM2Q/hqdefault.jpg" alt="Omuto Pulse video" loading="lazy" />
              <div class="vplay">
                <div class="vplay-circle"><svg viewBox="0 0 24 24">
                    <path d="M8 5v14l11-7z" />
                  </svg></div>
              </div>
            </div>
            <div class="vid-info">
              <p class="v-tag">Omuto Pulse</p>
              <h3 class="v-title">RED Campaign · Girls Voices</h3>
            </div>
          </div>
          <div class="vid-card" onclick="openModal('CdMBDRVExaA')" role="button" tabindex="0" aria-label="Play video 4" onkeydown="if(event.key==='Enter')openModal('CdMBDRVExaA')">
            <div class="vid-thumb">
              <img src="https://img.youtube.com/vi/CdMBDRVExaA/hqdefault.jpg" alt="Omuto Football Alliance · Match Day" loading="lazy" />
              <div class="vplay">
                <div class="vplay-circle"><svg viewBox="0 0 24 24">
                    <path d="M8 5v14l11-7z" />
                  </svg></div>
              </div>
            </div>
            <div class="vid-info">
              <p class="v-tag">Omuto Football Alliance</p>
              <h3 class="v-title">OFA Launch Match Day - Jan 2026</h3>
            </div>
          </div>
        </div>
        <div style="text-align:center;margin-top:20px" class="reveal">
          <a href="https://www.youtube.com/@omutopulse" target="_blank" rel="noopener" class="btn btn-outline-white btn-sm">
            <svg width="14" height="14" fill="currentColor" viewBox="0 0 24 24">
              <path d="M21.582 6.186a2.506 2.506 0 0 0-1.768-1.768C18.254 4 12 4 12 4s-6.254 0-7.814.418a2.506 2.506 0 0 0-1.768 1.768C2 7.746 2 12 2 12s0 4.254.418 5.814a2.506 2.506 0 0 0 1.768 1.768C5.746 20 12 20 12 20s6.254 0 7.814-.418a2.506 2.506 0 0 0 1.768-1.768C22 16.254 22 12 22 12s0-4.254-.418-5.814zM10 15.464V8.536L16 12l-6 3.464z" />
            </svg>
            All Videos on Omuto Pulse
          </a>
        </div>
      </div>
    </section>

    <!-- ======== WHY IT WORKS
     TASK 24: renamed columns from "The Old Way / The OMUTO Way" → "Temporary Fixes / Youth-Owned Systems"
============================ -->
    <section id="whyworks" class="section">
      <div class="container">
        <div style="text-align:center" class="reveal">
          <span class="eyebrow ew-navy">Our Approach</span>
          <h2 class="t-section">Why This <em class="line-red">Endures</em></h2>
          <p class="t-body" style="opacity:.65;max-width:500px;margin:12px auto 0">Structure beats charity. Ownership beats handouts. Here's the difference.</p>
        </div>
        <div class="compare-wrap reveal">
          <table class="compare-table">
            <thead>
              <tr>
                <th>Area</th>
                <!-- TASK 24: renamed — outcome-framed, not critical of others -->
                <th>Temporary Fixes</th>
                <th>Youth-Owned Systems</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Water Access</td>
                <td><span class="cx">×</span>Infrastructure installed, no maintenance plan</td>
                <td><span class="ck">✓</span>Non-electric water filters + student team trained to maintain it</td>
              </tr>
              <tr>
                <td>Girls &amp; Health</td>
                <td><span class="cx">×</span>Disposable pads distributed once, supply runs out</td>
                <td><span class="ck">✓</span>Reusable Dignity Pads + safe toilets + peer educators trained</td>
              </tr>
              <tr>
                <td>Environment</td>
                <td><span class="cx">×</span>Trees planted by outsiders, community uninvested</td>
                <td><span class="ck">✓</span>Students plant, name, and tend their own — GreenSchools</td>
              </tr>
              <tr>
                <td>Youth Skills</td>
                <td><span class="cx">×</span>Workshops end, skills unused</td>
                <td><span class="ck">✓</span>Skills applied immediately to a real community project</td>
              </tr>
              <tr>
                <td>Who Leads</td>
                <td><span class="cx">×</span>External solutions or adult-led committee</td>
                <td><span class="ck">✓</span>Young people design, run, and evaluate every project</td>
              </tr>
              <tr>
                <td>What's Next</td>
                <td><span class="cx">×</span>Funding ends, activity stops</td>
                <td><span class="ck">✓</span>Graduates become mentors. Alumni launch new chapters.</td>
              </tr>
            </tbody>
          </table>
        </div>
        <div style="text-align:center;margin-top:32px" class="reveal">
          <p class="t-pullquote" style="color:rgba(29,38,49,.52);max-width:500px;margin:0 auto">"If we build a system that creates wealth and opportunity in a community — then even when we are gone, that system keeps working."</p>
          <p style="margin-top:10px;font-family:var(--font-ui);font-size:10px;font-weight:700;text-transform:uppercase;letter-spacing:.2em;opacity:.38">— Mark Mike Mutumba</p>
        </div>
      </div>
    </section>

    <!-- ======== FORBES
     TASK 13: upgraded — real photo overlaid on designed cover for combined credibility
============================ -->
    <section id="forbes" class="section">
      <div class="container">
        <div class="forbes-inner reveal">
          <div class="forbes-cover">
            <!-- TASK 13: real Forbes magazine photo overlaid at low opacity for texture and credibility -->
            <img class="forbes-cover-img" src="https://scontent.ftlv19-1.fna.fbcdn.net/v/t39.30808-6/481358055_681242387558860_9015998618836394289_n.jpg?stp=c0.198.1448.1448a_dst-jpg_s552x414_tt6&_nc_cat=102&ccb=1-7&_nc_sid=a934a8&_nc_ohc=5H605KJQk4MQ7kNvwE128mi&_nc_oc=AdnwbsT3R_qzUPRL9k-9Znw-cTMsuYzw_ICgcesqfyLHZm2DuylggiVGJiDGYzAB5UprsNeI8XMOZ28UKXtuBTFD&_nc_zt=23&_nc_ht=scontent.ftlv19-1.fna&_nc_gid=6JsjhLM4QZaYzKzz5FS_hQ&_nc_ss=8&oh=00_AfwLDUJff9_nhuyvWPr9edvaqQ1tM2MUXvwCOCsdeK0XCA&oe=69B0F3F2" alt="" aria-hidden="true" onerror="this.style.display='none'" />
            <div class="forbes-cover-top">
              <div class="forbes-wordmark">Forbes</div>
              <div class="forbes-edition">Africa Edition · June / July 2024</div>
            </div>
            <div class="forbes-cover-body">
              <div>
                <p class="forbes-cover-headline">"Young people, when given the right tools, are the key to achieving the 2030 SDGs"</p>
                <div class="forbes-cover-name">Mark Mike<br />Mutumba</div>
                <div class="forbes-cover-role">Founder &amp; Executive Director<br />Omuto Foundation · Uganda</div>
              </div>
              <span class="forbes-cover-badge">
                <svg width="12" height="12" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" />
                </svg>
                As Featured · Page 20
              </span>
            </div>
          </div>
          <div>
            <span class="forbes-lbl">Forbes Africa · June / July 2024</span>
            <p class="forbes-quote">"Young people, when given the right tools, are the key to achieving the 2030 Sustainable Development Goals — not just in Uganda but across Africa."</p>
            <p class="forbes-attr">— Mark Mike Mutumba<br />Founder &amp; Executive Director, Omuto Foundation</p>
            <p style="font-size:15px;font-weight:500;color:rgba(29,38,49,.65);line-height:1.7;margin-top:18px">From founding Omuto in 2019 on a shoestring to being featured in Forbes Africa, the mission has stayed the same — young people leading their own development.</p>
            <div style="display:flex;flex-wrap:wrap;gap:10px;margin-top:22px">
              <a href="about.php" class="btn btn-navy btn-sm">Our Story →</a>
              <a href="report2025.php" class="btn btn-white btn-sm">Annual Report 2025</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ======== JOIN
     TASK 22: donation impact equivalencies
     TASK 23: soft conversion link
     TASK 19: CTA discipline throughout
============================ -->
    <section id="join" class="section-lg">
      <div class="halftone halftone-light"></div>
      <div class="container">
        <div style="text-align:center;margin-bottom:40px" class="reveal">
          <h2 class="t-section" style="color:#fff">Three Ways To <em class="line-yellow">Join In</em></h2>
        </div>
        <div class="join-grid">
          <!-- DONATE -->
          <div class="jcard jc-red reveal rd1">
            <div class="jcard-icon" style="background:rgba(255,255,255,.2)">
              <svg width="26" height="26" fill="#fff" viewBox="0 0 24 24">
                <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z" />
              </svg>
            </div>
            <h3>Fund a Chapter</h3>
            <p>Your contribution supports water systems, Dignity Pads, training, and youth-led initiatives.</p>
            <div class="donate-widget">
              <div class="d-toggle" onclick="toggleMonthly()" aria-label="Toggle monthly giving">
                <div class="d-sw" id="d-sw">
                  <div class="d-sw-k"></div>
                </div>
                <span class="d-toggle-lbl">Make it monthly</span>
              </div>
              <span class="d-section-lbl" id="d-lbl">Select amount — one-time:</span>
              <div class="d-amts">
                <div class="d-amt sel" onclick="selectAmt(this,'10')">$10</div>
                <div class="d-amt" onclick="selectAmt(this,'25')">$25</div>
                <div class="d-amt" onclick="selectAmt(this,'50')">$50</div>
                <div class="d-amt" onclick="selectAmt(this,'100')">$100</div>
              </div>
              <!-- TASK 22: impact equivalency line — updates per amount selected -->
              <div class="d-impact" id="d-impact">contributes to Dignity Pad materials</div>
              <button class="d-go" id="d-go" type="button" onclick="window.location.href='campaign.php'">Donate $10 Now</button>
            </div>
            <!-- TASK 23: soft conversion for those not ready to donate -->
            <a href="report2025.php" class="d-soft-cta">Not ready yet? Download our 2025 Impact Report →</a>
            <a href="campaign.php" class="btn btn-outline-white btn-full btn-sm" style="margin-top:4px">All Giving Options →</a>
          </div>

          <!-- PARTNER -->
          <div class="jcard jc-teal reveal rd2">
            <div class="jcard-icon" style="background:rgba(29,38,49,.12)">
              <svg width="26" height="26" fill="var(--navy)" viewBox="0 0 24 24">
                <path d="M9 12l-4.463 4.969-4.537-4.969h3c0-4.97 4.03-9 9-9 2.395 0 4.575.921 6.205 2.42l-1.42 1.567c-1.241-1.124-2.899-1.82-4.785-1.82-3.418 0-6.162 2.797-6.162 6.232H9zm13.463-4.969l-4.463-4.031-4.537 4.031h3c0 4.97-4.03 9-9 9-2.395 0-4.575-.921-6.205-2.42l1.42-1.567c1.241 1.124 2.899 1.82 4.785 1.82 3.418 0 6.162-2.797 6.162-6.232h3z" />
              </svg>
            </div>
            <h3>Partner With Us</h3>
            <p>Schools, NGOs, churches, and institutions can scale a chapter or co-create programmes.</p>
            <p class="jcard-note">Part of a growing network including Spouts of Water International, Theirworld, Reach A Hand Uganda, and Mpigi District Local Government.</p>
            <a href="contact.php" class="btn btn-navy btn-full" style="margin-top:auto">Start a Conversation →</a>
          </div>

          <!-- START A CHAPTER -->
          <div class="jcard jc-white reveal rd3">
            <div class="jcard-icon" style="background:rgba(255,207,93,.18)">
              <svg width="26" height="26" fill="var(--yellow)" viewBox="0 0 24 24">
                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm5 11h-4v4h-2v-4H7v-2h4V7h2v4h4v2z" />
              </svg>
            </div>
            <h3>Start a Chapter</h3>
            <p>Schools, football teams, or community groups in Mpigi and Butambala can plug into the OMUTO model and begin.</p>
            <p class="jcard-note">We provide tools, training, and mentorship. You bring the people.</p>
            <div class="steps-list">
              <div class="step-item"><span class="step-n">1</span>Fill the interest form</div>
              <div class="step-item"><span class="step-n">2</span>Schedule onboarding</div>
              <div class="step-item"><span class="step-n">3</span>Launch within 30 days</div>
            </div>
            <a href="contact.php" class="btn btn-navy btn-full" style="margin-top:16px">Get Started →</a>
          </div>
        </div>
      </div>
    </section>

    <!-- ======== PARTNERS ======== -->
    <section id="partners" class="section-sm">
      <div class="container">
        <p class="partner-section-lbl">Mission-Aligned Partners</p>
        <div class="partner-pills">
          <span class="p-pill">Mpigi District Local Government</span>
          <span class="p-pill">Spouts of Water International</span>
          <span class="p-pill">Reach A Hand Uganda</span>
          <span class="p-pill">Miss Uganda</span>
          <span class="p-pill">Theirworld</span>
          <span class="p-pill">YALI</span>
          <span class="p-pill">Red Cross Mpigi</span>
        </div>
        <p class="partner-section-lbl" style="margin-top:4px">Recognised &amp; Verified By</p>
        <div class="cred-pills reveal">
          <span class="cred-pill">Forbes Africa · Jun/Jul 2024</span>
          <span class="cred-pill">GlobalGiving · Vetted Partner</span>
          <span class="cred-pill">YALI Alumni</span>
          <span class="cred-pill">Theirworld Ambassador</span>
          <span class="cred-pill">End Child Violence Network</span>
        </div>
        <div class="founder-block reveal">
          <img id="fi-founder" class="founder-avatar" src="https://i.ibb.co/wZ9cf7Ny/31.png" alt="Mark Mike Mutumba — Founder, Omuto Foundation" loading="lazy" style="object-fit:contain;background:#0e1a26;padding:6px" />
          <div>
            <p class="founder-quote">"With Africa's booming youth population, every young person is either a challenge or an asset. We choose to make them assets — leaders, activists, entrepreneurs, innovators."</p>
            <p class="founder-attr">Mark Mike Mutumba · Founder &amp; Executive Director, Omuto Foundation</p>
          </div>
        </div>
        <div class="newsletter reveal">
          <h3>Stay in the Loop</h3>
          <p>Project updates, impact stories, ways to get involved — straight to your inbox.</p>
          <form class="nl-form" onsubmit="handleNL(event)">
            <label for="nl-email" class="visually-hidden">Email address</label>
            <input type="email" id="nl-email" placeholder="your@email.com" required />
            <button type="submit" id="nl-btn">Get Updates</button>
          </form>
        </div>
      </div>
    </section>

    <!-- ======== FINAL CTA
     TASK 19: primary btn prominent, secondaries demoted to outline/navy
============================ -->
    <section id="finalcta" class="section-lg">
      <div class="halftone"></div>
      <div class="container">
        <div class="fcta-inner reveal">
          <h2 class="fcta-h">Fund the next youth-led chapter.</h2>
          <p class="fcta-p">When young people are trusted with tools — they don't wait. They build.</p>
          <div class="fcta-btns">
            <!-- TASK 19: Fund a Chapter is the only full red btn; others are outline/navy -->
            <a href="campaign.php" class="btn btn-white">Fund a Chapter →</a>
            <a href="contact.php" class="btn btn-navy">Partner With Us</a>
            <a href="about.php" class="btn btn-outline-white">Our Story</a>
          </div>
        </div>
      </div>
    </section>

  </main>

  <!-- ======== FOOTER ======== -->
  <footer>
    <div class="container">
      <div class="footer-grid">
        <div>
          <img src="https://i.imgur.com/onkikq1.png" alt="Omuto Foundation" class="f-logo" />
          <p class="f-desc">Youth-led community development in Mpigi and Butambala, Uganda. For Youth &amp; Sustainable Change. Since 2019.</p>
          <div class="f-socials">
            <a href="https://www.youtube.com/@omutopulse" target="_blank" rel="noopener" class="f-soc" aria-label="YouTube"><svg viewBox="0 0 24 24">
                <path d="M21.582 6.186a2.506 2.506 0 0 0-1.768-1.768C18.254 4 12 4 12 4s-6.254 0-7.814.418a2.506 2.506 0 0 0-1.768 1.768C2 7.746 2 12 2 12s0 4.254.418 5.814a2.506 2.506 0 0 0 1.768 1.768C5.746 20 12 20 12 20s6.254 0 7.814-.418a2.506 2.506 0 0 0 1.768-1.768C22 16.254 22 12 22 12s0-4.254-.418-5.814zM10 15.464V8.536L16 12l-6 3.464z" />
              </svg></a>
            <a href="https://wa.me/256750028703" target="_blank" rel="noopener" class="f-soc" aria-label="WhatsApp"><svg viewBox="0 0 24 24">
                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
              </svg></a>
            <a href="https://www.instagram.com/omuto_foundation/" target="_blank" rel="noopener" class="f-soc" aria-label="Instagram"><svg viewBox="0 0 24 24">
                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
              </svg></a>
            <a href="mailto:info@omuto.org" class="f-soc" aria-label="Email"><svg viewBox="0 0 24 24">
                <path d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z" />
              </svg></a>
          </div>
          <div class="safeguarding-block">
            <p class="sg-lbl">Safeguarding Commitment</p>
            <p class="sg-text">Zero tolerance toward all forms of harm, abuse, and exploitation in our programmes.</p>
            <a href="safeguarding.php" class="sg-link">Read our Safeguarding Policy →</a>
          </div>
        </div>
        <nav aria-label="Footer Programs">
          <h3>Programs</h3>
          <ul>
            <li><a href="osx.php">School Xperience</a></li>
            <li><a href="yap.php">YAP Chapters</a></li>
            <li><a href="ofa.php">Football Alliance</a></li>
            <li><a href="essentials.php">Omuto Essentials</a></li>
            <li><a href="https://www.youtube.com/@omutopulse" target="_blank" rel="noopener">Omuto Pulse ↗</a></li>
          </ul>
        </nav>
        <nav aria-label="Footer Organisation">
          <h3>Organisation</h3>
          <ul>
            <li><a href="about.php">About Omuto</a></li>
            <li><a href="impact.php">Impact Data</a></li>
            <li><a href="report2025.php">Annual Report 2025</a></li>
            <li><a href="docs.php">Financials</a></li>
            <li><a href="contact.php">Contact &amp; Partner</a></li>
            <li><a href="safeguarding.php">Safeguarding</a></li>
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

  <!-- VIDEO MODAL -->
  <div id="modal" role="dialog" aria-modal="true" aria-label="Video player" onclick="if(event.target===this)closeModal()">
    <div class="modal-inner">
      <button class="modal-close" onclick="closeModal()" aria-label="Close video" type="button">✕ Close</button>
      <iframe id="modal-iframe" src="" title="Video" frameborder="0" allow="accelerometer;autoplay;clipboard-write;encrypted-media;gyroscope;picture-in-picture" allowfullscreen></iframe>
    </div>
  </div>

  <!-- STICKY CTA -->
  <div id="sticky" role="complementary" aria-label="Support prompt">
    <div class="container sticky-inner">
      <p class="sticky-msg">Ready to support youth-led change?</p>
      <div class="sticky-btns">
        <!-- TASK 19: only primary action in sticky -->
        <a href="campaign.php" class="btn btn-red btn-sm">Fund a Chapter</a>
        <a href="contact.php" class="btn btn-outline-white btn-sm">Partner</a>
        <button class="sticky-x" onclick="document.getElementById('sticky').style.display='none'" aria-label="Dismiss" type="button">✕</button>
      </div>
    </div>
  </div>

  <script>
document.addEventListener('DOMContentLoaded', function(){
  // ===== YEAR =====
  const yrEl = document.getElementById('yr');
  if(yrEl){ yrEl.textContent = new Date().getFullYear(); }

  // ===== MOBILE NAV =====
  const hbg    = document.getElementById('hbg');
  const mobNav = document.getElementById('mob-nav');

  if(hbg && mobNav){
    hbg.addEventListener('click', function(e){
      e.stopPropagation(); // don't trigger document click
      const open = mobNav.classList.toggle('open');
      hbg.classList.toggle('active', open);
      hbg.setAttribute('aria-expanded', String(open));
      document.body.style.overflow = open ? 'hidden' : '';
    });

    // click outside to close
    document.addEventListener('click', function(e){
      if(!mobNav.classList.contains('open')) return;
      if(mobNav.contains(e.target) || hbg.contains(e.target)) return;

      mobNav.classList.remove('open');
      hbg.classList.remove('active');
      hbg.setAttribute('aria-expanded', 'false');
      document.body.style.overflow = '';
    });
  }
});



    // ===== HERO SLIDESHOW =====
    const slides = document.querySelectorAll('.hero-slide');
    const dotsWrap = document.getElementById('sdots');
    const pauseBtn = document.getElementById('ss-pause');
    const pauseIcon = document.getElementById('ss-pause-icon');
    let cur = 0,
      isPaused = false;
    const PLAY_SVG = '<path d="M8 5v14l11-7z"/>';
    const PAUSE_SVG = '<path d="M6 19h4V5H6v14zm8-14v14h4V5h-4z"/>';
    slides.forEach((_, i) => {
      const d = document.createElement('button');
      d.className = 'sdot' + (i === 0 ? ' active' : '');
      d.setAttribute('aria-label', 'Slide ' + (i + 1));
      d.setAttribute('type', 'button');
      d.onclick = () => goSlide(i);
      dotsWrap.appendChild(d);
    });

    function goSlide(n) {
      slides[cur].classList.remove('active');
      document.querySelectorAll('.sdot')[cur].classList.remove('active');
      cur = (n + slides.length) % slides.length;
      slides[cur].classList.add('active');
      document.querySelectorAll('.sdot')[cur].classList.add('active');
    }
    setInterval(() => {
      if (!isPaused) goSlide(cur + 1);
    }, 4500);
    pauseBtn.addEventListener('click', () => {
      isPaused = !isPaused;
      pauseIcon.innerHTML = isPaused ? PLAY_SVG : PAUSE_SVG;
      pauseBtn.setAttribute('aria-label', isPaused ? 'Resume' : 'Pause');
    });
    // ===== STAT COUNTERS + TASK 25: pulse pop after counter completes =====
    const counters = document.querySelectorAll('.stat-counter');
    let counted = false;
    new IntersectionObserver(entries => {
      if (entries[0].isIntersecting && !counted) {
        counted = true;
        counters.forEach(el => {
          const delay = parseInt(el.dataset.delay) || 0;
          const target = +el.dataset.target;
          const suffix = el.dataset.suffix || '';
          setTimeout(() => {
            let step = 0,
              steps = 60;
            const tick = () => {
              step++;
              const val = Math.min(step * target / steps, target);
              el.textContent = (val >= 1000 ? (Math.round(val / 100) * 100).toLocaleString() : Math.round(val)) + suffix;
              if (step < steps) requestAnimationFrame(tick);
              else {
                // TASK 25: counter finished — add pop animation
                el.textContent = (target >= 1000 ? target.toLocaleString() : target) + suffix;
                el.classList.add('popped');
                el.addEventListener('animationend', () => el.classList.remove('popped'), {
                  once: true
                });
              }
            };
            requestAnimationFrame(tick);
          }, delay);
        });
      }
    }, {
      threshold: 0.4
    }).observe(document.getElementById('stats'));
    // ===== MODEL TABS =====
 document.addEventListener('DOMContentLoaded', function(){
  const order = [
    { key:'O',  idx:0 },
    { key:'M',  idx:1 },
    { key:'U',  idx:2 },
    { key:'T',  idx:3 },
    { key:'O2', idx:4 }
  ];

  const tabs   = document.querySelectorAll('.om-mtab');
  const panels = document.querySelectorAll('.om-model-panel');
  const prog   = document.getElementById('om-model-progress');
  const box    = document.querySelector('.om-model-box');

  if(!tabs.length || !panels.length || !prog || !box) return;

  let step = 0;
  let timer = null;
  const ROTATE_MS = 7000;

  function setStep(next){
    step = (next + order.length) % order.length;
    const { key, idx } = order[step];

    // Tabs
    tabs.forEach(t => {
      t.classList.remove('active');
      t.setAttribute('aria-selected','false');
    });
    const at = document.getElementById('om-mt-' + key);
    if(at){
      at.classList.add('active');
      at.setAttribute('aria-selected','true');
    }

    // Panels
    panels.forEach(p => p.classList.remove('active'));
    const ap = document.getElementById('om-mp-' + key);
    if(ap){
      ap.classList.add('active');
    }

    // Progress liquid segment
    const seg = 100 / order.length;      // 20
    const offset = seg * idx;

    // brief stretch for liquid effect
    prog.style.setProperty('--om-model-width', '26%'); // a bit wider than 20
    requestAnimationFrame(() => {
      prog.style.setProperty('--om-model-x', offset + '%');
      // after motion, shrink back to segment width
      setTimeout(() => {
        prog.style.setProperty('--om-model-width', '20%');
      }, 200);
    });
  } // <-- this closing brace was missing

  function startAuto(){
    if(timer) clearInterval(timer);
    timer = setInterval(() => setStep(step + 1), ROTATE_MS);
  }

  // Tab clicks
  tabs.forEach((tab, i) => {
    tab.addEventListener('click', () => {
      setStep(i);
      startAuto();
    });
  });

  // Prev/Next clicks
  box.addEventListener('click', e => {
    const next = e.target.closest('[data-om-model-next]');
    const prev = e.target.closest('[data-om-model-prev]');
    if(next){
      setStep(step + 1);
      startAuto();
    }else if(prev){
      setStep(step - 1);
      startAuto();
    }
  });

  // Init
  setStep(0);
  startAuto();
});



    // ===== VIDEO MODAL =====
    function openModal(vid) {
      const m = document.getElementById('modal');
      document.getElementById('modal-iframe').src = 'https://www.youtube.com/embed/' + vid + '?autoplay=1';
      m.classList.add('open');
      document.body.style.overflow = 'hidden';
      document.getElementById('main').inert = true;
    }

    function closeModal() {
      document.getElementById('modal').classList.remove('open');
      document.getElementById('modal-iframe').src = '';
      document.body.style.overflow = '';
      document.getElementById('main').inert = false;
    }
    document.addEventListener('keydown', e => {
      if (e.key === 'Escape') closeModal();
    });
    // ===== SCROLL REVEALS =====
    (function() {
      const obs = new IntersectionObserver(entries => {
        entries.forEach(e => {
          if (e.isIntersecting) e.target.classList.add('visible');
        });
      }, {
        threshold: 0.08,
        rootMargin: '0px 0px -20px 0px'
      });
      document.querySelectorAll('.reveal').forEach(el => obs.observe(el));
    })();
    // ===== STICKY =====
    let stickyShown = false;
    window.addEventListener('scroll', () => {
      if (!stickyShown && window.scrollY > 600) {
        stickyShown = true;
        document.getElementById('sticky').classList.add('show');
      }
    }, {
      passive: true
    });
    // ===== DONATE WIDGET
    // TASK 22: impact equivalencies per amount =====
    const impactMap = {
      '10': 'contributes to Dignity Pad materials',
      '25': 'keeps a girl in school for a month',
      '50': 'maintains a water filter for one term',
      '100': 'equips a full youth action team'
    };
    let isMonthly = false,
      selAmt = '10';

    function toggleMonthly() {
      isMonthly = !isMonthly;
      document.getElementById('d-sw').classList.toggle('on', isMonthly);
      document.getElementById('d-lbl').textContent = 'Select amount — ' + (isMonthly ? 'monthly:' : 'one-time:');
      updateGoBtn();
    }

    function selectAmt(el, amt) {
      document.querySelectorAll('.d-amt').forEach(a => a.classList.remove('sel'));
      el.classList.add('sel');
      selAmt = amt;
      // TASK 22: update impact line
      const imp = document.getElementById('d-impact');
      if (imp) imp.textContent = '$' + amt + ' ' + (impactMap[amt] || 'makes a real difference');
      updateGoBtn();
    }

    function updateGoBtn() {
      const btn = document.getElementById('d-go');
      if (!btn) return;
      btn.textContent = 'Donate $' + selAmt + (isMonthly ? '/month' : ' Now');
      let url = 'campaign.php?amount=' + selAmt;
      if (isMonthly) url += '&freq=monthly';
      btn.onclick = () => {
        window.location.href = url;
      };
    }
    // init impact line on load
    selectAmt(document.querySelector('.d-amt.sel'), '10');
    // ===== NEWSLETTER =====
    function handleNL(e) {
      e.preventDefault();
      const btn = document.getElementById('nl-btn');
      btn.textContent = 'Thanks! ✓';
      btn.style.background = 'var(--teal)';
      btn.style.color = 'var(--navy)';
      btn.disabled = true;
    }
    
document.addEventListener('DOMContentLoaded', function(){
  // ===== TICKER ROTATION =====
  const tickerMessages = [
    "Omuto Youth Center now open in Nabbuzi, Mpigi.",
    "100 Girls to Receive Reusable Sanitary Packs this Month.",
    "Computer class intake registration ongoing",
    "3,200+ residents with safer water access."
  ];
  const tickerTextEl  = document.querySelector('#ticker-item .ticker-text');
  const tickerItemEl  = document.getElementById('ticker-item');
  let tickerIndex = 0;

  if(tickerTextEl && tickerItemEl){
    function showNextTickerMessage(){
      tickerItemEl.style.opacity = 0;
      setTimeout(() => {
        tickerIndex = (tickerIndex + 1) % tickerMessages.length;
        tickerTextEl.textContent = tickerMessages[tickerIndex];
        tickerItemEl.style.opacity = 1;
      }, 400);
    }
    setInterval(showNextTickerMessage, 5000);
  }

  // ===== NAV + TICKER HIDE ON SCROLL =====
  const nav    = document.getElementById('nav');
  const ticker = document.getElementById('ticker');
  if(!nav || !ticker) return;

  let lastScrollY = window.scrollY;
  let ticking = false;
  const threshold = 40;

  function onScroll(){
    const currentY = window.scrollY;
    const diff = currentY - lastScrollY;

    if(Math.abs(diff) < threshold){
      ticking = false;
      return;
    }

    if(currentY > lastScrollY && currentY > 120){
      // scrolling down
      nav.classList.add('nav-hidden');
      ticker.classList.add('nav-hidden');
    }else{
      // scrolling up
      nav.classList.remove('nav-hidden');
      ticker.classList.remove('nav-hidden');
    }

    lastScrollY = currentY;
    ticking = false;
  }

  window.addEventListener('scroll', function(){
    if(!ticking){
      window.requestAnimationFrame(onScroll);
      ticking = true;
    }
  }, { passive:true });
});


</script>

</body>

</html>