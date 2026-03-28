<?php
// ── Page-specific SEO & config ────────────────────────────────────────────
$page_title      = "About | Omuto Foundation";
$page_desc       = "Started in 2019 with no office and no money. Just young people tired of waiting. Youth-led community development across Mpigi and Butambala, Uganda.";
$page_canonical  = "https://omuto.org/about";
$page_active_nav = "about";                      // highlights "About" in nav

// Page-specific CSS (Leaflet + all about-page styles)
$footer_show_leaflet = true;                     // tells footer.php to load Leaflet
$page_extra_css = '<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
<style>
/* ====== ABOUT PAGE STYLES ====== */

/* 1. HERO */
#about-hero{min-height:78svh;background:var(--navy);display:flex;align-items:flex-end;position:relative;overflow:hidden;border-bottom:var(--b)}
.ah-halftone{position:absolute;inset:0;background-image:radial-gradient(circle,rgba(255,255,255,.04) 1px,transparent 1px);background-size:22px 22px;pointer-events:none}
.ah-glow-r{position:absolute;top:-80px;right:-80px;width:500px;height:500px;border-radius:50%;background:radial-gradient(circle,rgba(238,39,38,.13),transparent 70%);pointer-events:none}
.ah-glow-l{position:absolute;bottom:-60px;left:-60px;width:400px;height:400px;border-radius:50%;background:radial-gradient(circle,rgba(64,210,175,.09),transparent 70%);pointer-events:none}
.ah-inner{position:relative;z-index:2;width:100%}
.ah-rule{width:100%;height:4px;background:var(--red)}
.ah-text{padding:52px 0 0}
.ah-eyebrow{font-family:var(--font-ui);font-size:10px;font-weight:700;text-transform:uppercase;letter-spacing:.28em;color:rgba(255,255,255,.35);display:block;margin-bottom:18px}
.ah-h1{font-family:var(--font-head);font-size:clamp(60px,10.5vw,128px);font-weight:900;line-height:.88;letter-spacing:-.04em;text-transform:uppercase;color:#fff}
.ah-h1 em{font-style:italic;color:var(--red)}
.ah-strip{display:grid;grid-template-columns:1fr 1fr 1fr 1fr;border-top:1px solid rgba(255,255,255,.1);margin-top:52px}
.ah-cell{padding:22px 0;border-right:1px solid rgba(255,255,255,.08)}
.ah-cell:last-child{border-right:none}
.ah-num{font-family:var(--font-head);font-size:clamp(24px,3.5vw,38px);font-weight:900;line-height:1;display:block;color:var(--yellow)}
.ah-lbl{font-family:var(--font-ui);font-size:9px;font-weight:700;text-transform:uppercase;letter-spacing:.18em;display:block;margin-top:5px;color:rgba(255,255,255,.35)}
@media(max-width:700px){
  .ah-strip{grid-template-columns:1fr 1fr}
  .ah-cell:nth-child(2){border-right:none}
  .ah-cell:nth-child(3){border-top:1px solid rgba(255,255,255,.08)}
  .ah-cell:nth-child(4){border-right:none;border-top:1px solid rgba(255,255,255,.08)}
}

/* 2. ORIGIN */
#origin{background:var(--cream);padding:88px 0;border-bottom:var(--b);position:relative;overflow:hidden}
.origin-wm{position:absolute;top:20px;right:-20px;font-family:var(--font-head);font-size:clamp(120px,18vw,200px);font-weight:900;line-height:1;color:rgba(29,38,49,.04);letter-spacing:-.05em;pointer-events:none;user-select:none;white-space:nowrap}
.origin-grid{display:grid;grid-template-columns:1fr 1fr;gap:72px;align-items:start;position:relative;z-index:2}
.origin-pull{font-family:var(--font-head);font-size:clamp(20px,2.8vw,32px);font-weight:900;line-height:1.2;font-style:italic;color:var(--navy);margin-bottom:26px}
.origin-pull .red{color:var(--red)}
.origin-body{font-size:16px;line-height:1.85;font-weight:500;color:rgba(29,38,49,.75)}
.origin-body p+p{margin-top:16px}
.collage{position:relative;height:460px}
.c-main{position:absolute;top:0;left:0;width:78%;aspect-ratio:4/3;border:var(--b);border-radius:var(--radius);overflow:hidden;box-shadow:var(--shadow);background:var(--navy)}
.c-main img{width:100%;height:100%;object-fit:cover}
.c-over{position:absolute;bottom:0;right:0;width:52%;aspect-ratio:3/4;border:var(--b);border-radius:var(--radius);overflow:hidden;box-shadow:var(--shadow-lg);background:var(--navy)}
.c-over img{width:100%;height:100%;object-fit:cover}
.c-sticker{position:absolute;top:44%;left:52%;transform:translate(-50%,-50%) rotate(-5deg);font-family:var(--font-sketch);font-size:22px;color:var(--navy);background:var(--yellow);border:3px solid var(--navy);border-radius:10px;padding:8px 18px;box-shadow:4px 4px 0 var(--navy);z-index:5;white-space:nowrap}
@media(max-width:900px){.origin-grid{grid-template-columns:1fr;gap:40px}.collage{height:320px}}

/* 3. PHILOSOPHY */
#philosophy{background:var(--navy);padding:88px 0;border-bottom:var(--b);position:relative;overflow:hidden}
.phil-grid{display:grid;grid-template-columns:1fr 1fr;gap:72px;align-items:center;position:relative;z-index:2}
.phil-big{font-family:var(--font-head);font-size:clamp(26px,3.8vw,46px);font-weight:900;line-height:1.1;font-style:italic;color:#fff}
.phil-big .red{color:var(--red)}.phil-big .yellow{color:var(--yellow)}
.phil-body-text{font-size:15px;line-height:1.85;font-weight:500;color:rgba(255,255,255,.62);margin-top:22px}
.phil-body-text p+p{margin-top:14px}
.phil-list{display:flex;flex-direction:column;gap:0;border:var(--b-thin);border-color:rgba(255,255,255,.12);border-radius:var(--radius);overflow:hidden}
.pp{padding:20px 24px;border-bottom:1px solid rgba(255,255,255,.08);display:flex;align-items:flex-start;gap:16px;transition:background .15s}
.pp:last-child{border-bottom:none}
.pp:hover{background:rgba(255,255,255,.04)}
.pp-num{font-family:var(--font-head);font-size:11px;font-weight:900;color:var(--red);width:28px;flex-shrink:0;padding-top:2px;letter-spacing:.08em}
.pp-text{font-size:14px;font-weight:600;color:rgba(255,255,255,.78);line-height:1.55}
.pp-text strong{display:block;font-family:var(--font-head);font-size:12px;font-weight:800;text-transform:uppercase;letter-spacing:.06em;color:#fff;margin-bottom:3px}
@media(max-width:900px){.phil-grid{grid-template-columns:1fr;gap:40px}}

/* 4. FOUNDER */
#founder{background:var(--cream);padding:88px 0;border-bottom:var(--b);position:relative;overflow:hidden}
.founder-grid{display:grid;grid-template-columns:320px 1fr;gap:64px;align-items:start;position:relative;z-index:2}
.founder-card{border:var(--b);border-radius:var(--radius);overflow:hidden;box-shadow:var(--shadow-lg);background:var(--navy)}
.founder-photo{aspect-ratio:3/4;overflow:hidden;background:#0e1a26}
.founder-photo img{width:100%;height:100%;object-fit:cover;object-position:top center}
.founder-card-bottom{padding:18px 20px;background:var(--navy);border-top:2px solid rgba(255,255,255,.12)}
.fc-name{font-family:var(--font-head);font-size:18px;font-weight:900;text-transform:uppercase;font-style:italic;color:#fff;line-height:1;margin-bottom:4px}
.fc-role{font-family:var(--font-ui);font-size:9px;font-weight:700;text-transform:uppercase;letter-spacing:.18em;color:rgba(255,255,255,.38)}
.fc-badge{display:inline-flex;align-items:center;gap:6px;background:var(--yellow);color:var(--navy);font-family:var(--font-ui);font-size:9px;font-weight:700;text-transform:uppercase;letter-spacing:.12em;padding:4px 12px;border-radius:20px;margin-top:12px}
.forbes-strip{display:inline-flex;align-items:center;gap:12px;background:var(--navy);border:var(--b);border-radius:var(--radius-sm);padding:10px 18px;box-shadow:var(--shadow-sm);margin-bottom:28px}
.fs-word{font-family:var(--font-head);font-size:22px;font-weight:900;color:#fff;letter-spacing:-.03em;font-style:italic;text-transform:uppercase;line-height:1}
.fs-detail{border-left:2px solid var(--red);padding-left:10px}
.fs-edition{font-family:var(--font-ui);font-size:9px;font-weight:700;text-transform:uppercase;letter-spacing:.16em;color:rgba(255,255,255,.45);display:block}
.founder-quote{font-family:var(--font-head);font-size:clamp(17px,2.2vw,24px);font-weight:800;font-style:italic;line-height:1.4;color:var(--navy);margin-bottom:20px;padding-left:20px;border-left:4px solid var(--red)}
.founder-bio{font-size:16px;line-height:1.8;font-weight:500;color:rgba(29,38,49,.7)}
.founder-bio p+p{margin-top:14px}
@media(max-width:900px){.founder-grid{grid-template-columns:1fr;gap:40px}.founder-card{max-width:260px}}

/* 5. MAP */
#map-section{background:#fff;padding:88px 0;border-bottom:var(--b)}
.map-layout{display:grid;grid-template-columns:1fr 320px;gap:28px;align-items:start;margin-top:48px}
#omuto-map{height:480px;border:var(--b);border-radius:var(--radius);box-shadow:var(--shadow);overflow:hidden}
.leaflet-popup-content-wrapper{border:3px solid var(--navy)!important;border-radius:10px!important;box-shadow:4px 4px 0 var(--navy)!important;font-family:"Space Grotesk",sans-serif!important}
.leaflet-popup-tip{background:var(--navy)!important}
.map-side{display:flex;flex-direction:column;gap:12px}
.map-key{background:var(--cream);border:var(--b);border-radius:var(--radius-sm);padding:16px 18px;box-shadow:var(--shadow-sm)}
.map-key h4{font-family:var(--font-ui);font-size:10px;font-weight:700;text-transform:uppercase;letter-spacing:.2em;color:rgba(29,38,49,.45);margin-bottom:12px;padding-bottom:8px;border-bottom:2px solid rgba(29,38,49,.08)}
.mk-row{display:flex;align-items:center;gap:10px;margin-bottom:8px}
.mk-row:last-child{margin-bottom:0}
.mk-dot{width:12px;height:12px;border-radius:50%;border:2px solid var(--navy);flex-shrink:0}
.mk-lbl{font-family:var(--font-ui);font-size:10px;font-weight:700;text-transform:uppercase;letter-spacing:.1em;color:rgba(29,38,49,.62)}
.map-locs{display:flex;flex-direction:column;gap:7px}
.mloc{background:#fff;border:var(--b-thin);border-radius:var(--radius-sm);padding:11px 14px;cursor:pointer;transition:all .15s}
.mloc:hover{background:var(--cream);border-color:var(--navy);transform:translate(-2px,-2px);box-shadow:var(--shadow-sm)}
.mloc-name{font-family:var(--font-head);font-size:13px;font-weight:800;text-transform:uppercase;margin-bottom:2px}
.mloc-type{font-family:var(--font-ui);font-size:9px;font-weight:700;text-transform:uppercase;letter-spacing:.12em;color:rgba(29,38,49,.38)}
@media(max-width:900px){.map-layout{grid-template-columns:1fr}#omuto-map{height:340px}}

/* 6. TIMELINE */
#timeline{background:var(--cream);padding:88px 0;border-bottom:var(--b)}
.tl-track{display:grid;grid-template-columns:repeat(4,1fr);gap:0;border:var(--b);border-radius:var(--radius);overflow:hidden;box-shadow:var(--shadow);margin-top:48px}
.tl-cell{padding:32px 26px;border-right:var(--b);display:flex;flex-direction:column;gap:14px;transition:background .18s}
.tl-cell:last-child{border-right:none}
.tl-cell:nth-child(1):hover{background:#fff}
.tl-cell:nth-child(2):hover{background:#fff8e0}
.tl-cell:nth-child(3):hover{background:#e8faf5}
.tl-cell:nth-child(4):hover{background:#fde8e8}
.tl-bar{width:100%;height:4px;border-radius:2px;margin-bottom:4px}
.tl-cell:nth-child(1) .tl-bar{background:var(--navy)}
.tl-cell:nth-child(2) .tl-bar{background:var(--gold)}
.tl-cell:nth-child(3) .tl-bar{background:var(--teal)}
.tl-cell:nth-child(4) .tl-bar{background:var(--red)}
.tl-year{font-family:var(--font-head);font-size:clamp(24px,3vw,36px);font-weight:900;font-style:italic;line-height:1;display:block}
.tl-cell:nth-child(1) .tl-year{color:var(--navy)}
.tl-cell:nth-child(2) .tl-year{color:var(--gold)}
.tl-cell:nth-child(3) .tl-year{color:var(--teal)}
.tl-cell:nth-child(4) .tl-year{color:var(--red)}
.tl-items{display:flex;flex-direction:column;gap:7px;margin-top:4px}
.tl-item{font-size:13px;font-weight:600;color:rgba(29,38,49,.62);line-height:1.45;display:flex;align-items:flex-start;gap:8px}
.tl-item::before{content:"—";color:rgba(29,38,49,.22);flex-shrink:0;font-weight:900;font-size:10px;margin-top:3px}
@media(max-width:768px){
  .tl-track{grid-template-columns:1fr 1fr}
  .tl-cell:nth-child(2){border-right:none}
  .tl-cell:nth-child(3){border-right:var(--b);border-top:var(--b)}
  .tl-cell:nth-child(4){border-right:none;border-top:var(--b)}
}
@media(max-width:480px){
  .tl-track{grid-template-columns:1fr}
  .tl-cell{border-right:none!important;border-top:var(--b)}
  .tl-cell:first-child{border-top:none}
}

/* 7. TEAM */
#team{background:#fff;padding:88px 0;border-bottom:var(--b)}
.team-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:18px;margin-top:48px}
.team-card{border:var(--b);border-radius:var(--radius);overflow:hidden;box-shadow:var(--shadow-sm);background:var(--cream);transition:transform .22s,box-shadow .22s}
.team-card:hover{transform:translate(-4px,-6px);box-shadow:var(--shadow)}
.team-photo{aspect-ratio:1;overflow:hidden;background:var(--navy)}
.team-photo img{width:100%;height:100%;object-fit:cover;transition:transform .5s ease}
.team-card:hover .team-photo img{transform:scale(1.05)}
.team-body{padding:14px 16px 18px;border-top:var(--b);background:#fff}
.team-name{font-family:var(--font-head);font-size:15px;font-weight:900;text-transform:uppercase;font-style:italic;margin-bottom:3px}
.team-role{font-family:var(--font-ui);font-size:9px;font-weight:700;text-transform:uppercase;letter-spacing:.16em;color:rgba(29,38,49,.38)}
@media(max-width:900px){.team-grid{grid-template-columns:repeat(2,1fr)}}

/* 8. RECOGNITION */
#recognition{background:var(--navy);padding:64px 0;border-bottom:var(--b);position:relative;overflow:hidden}
.rec-inner{position:relative;z-index:2;text-align:center}
.rec-lbl{font-family:var(--font-ui);font-size:10px;font-weight:700;text-transform:uppercase;letter-spacing:.22em;color:rgba(255,255,255,.35);margin-bottom:24px;display:block}
.rec-pills{display:flex;flex-wrap:wrap;justify-content:center;gap:10px;margin-bottom:32px}
.rec-pill{font-family:var(--font-ui);font-size:10px;font-weight:700;text-transform:uppercase;letter-spacing:.12em;padding:8px 18px;border-radius:30px;background:rgba(255,255,255,.06);border:1.5px solid rgba(255,255,255,.18);color:rgba(255,255,255,.75);transition:all .15s}
.rec-pill:hover{background:rgba(255,255,255,.12);border-color:rgba(255,255,255,.4);color:#fff}
.rec-pill.hl{background:var(--yellow);border-color:var(--yellow);color:var(--navy)}
.p-lbl{font-family:var(--font-ui);font-size:10px;font-weight:700;text-transform:uppercase;letter-spacing:.22em;color:rgba(255,255,255,.22);margin-bottom:14px;display:block}
.p-pills{display:flex;flex-wrap:wrap;justify-content:center;gap:8px}
.p-pill{font-family:var(--font-ui);font-size:10px;font-weight:700;text-transform:uppercase;letter-spacing:.08em;padding:6px 14px;border-radius:30px;background:rgba(255,255,255,.04);border:1px solid rgba(255,255,255,.1);color:rgba(255,255,255,.42);transition:all .15s}
.p-pill:hover{background:rgba(255,255,255,.08);color:rgba(255,255,255,.65)}

/* FINAL CTA */
#finalcta{background:var(--red);color:#fff;padding:80px 0;position:relative;overflow:hidden;border-top:var(--b)}
#finalcta .halftone{opacity:.06}
.fcta-inner{text-align:center;position:relative;z-index:2;max-width:540px;margin:0 auto}
.fcta-h{font-family:var(--font-head);font-size:clamp(28px,4.5vw,52px);font-weight:900;line-height:1;text-transform:uppercase;font-style:italic;margin-bottom:14px;letter-spacing:-.02em}
.fcta-p{font-size:17px;font-weight:500;opacity:.9;margin-bottom:28px;line-height:1.6}
.fcta-btns{display:flex;flex-wrap:wrap;gap:12px;justify-content:center}
</style>';

// Page-specific JS (Leaflet map init + flyTo helper)
$footer_extra_js = '<script>
// MAP — runs after Leaflet is loaded by footer.php
let map;
document.addEventListener("DOMContentLoaded", () => {
  map = L.map("omuto-map", { scrollWheelZoom: false }).setView([0.15, 32.25], 9);
  L.tileLayer("https://{s}.basemaps.cartocdn.com/rastertiles/voyager/{z}/{x}/{y}{r}.png", {
    attribution: "© OpenStreetMap contributors © CARTO",
    subdomains: "abcd", maxZoom: 20
  }).addTo(map);

  const mkIcon = (color) => L.divIcon({
    className: "",
    html: `<div style="width:16px;height:16px;border-radius:50%;background:${color};border:3px solid #1D2631;box-shadow:3px 3px 0 #1D2631;"></div>`,
    iconSize:[20,20], iconAnchor:[10,10], popupAnchor:[0,-10]
  });
  const red  = mkIcon("#EE2726");
  const teal = mkIcon("#40D2AF");

  const popup = (title, detail) =>
    `<strong style="font-family:Space Grotesk;font-size:12px;text-transform:uppercase;display:block;margin-bottom:4px">${title}</strong><span style="font-size:11px;opacity:.7">${detail}</span>`;

  L.marker([0.168,32.235],{icon:red}).addTo(map).bindPopup(popup("Omuto HQ","Kammengo, Nabbuzi — Next to Moka Petro Station"));
  L.marker([0.358,32.575],{icon:red}).addTo(map).bindPopup(popup("Kampala Office","Kyebando, Kanakulya Road"));
  L.marker([0.224,32.331],{icon:teal}).addTo(map).bindPopup(popup("Mpigi Town","School Programmes"));
  L.marker([-0.046,32.109],{icon:teal}).addTo(map).bindPopup(popup("Buwama","YAP Community Chapter"));
  L.marker([0.005,32.056],{icon:teal}).addTo(map).bindPopup(popup("Kayabwe","YAP Community Chapter"));
  L.marker([0.233,32.150],{icon:teal}).addTo(map).bindPopup(popup("Kibibi","School Partners"));
  L.marker([0.198,32.112],{icon:teal}).addTo(map).bindPopup(popup("Gombe","District Partners"));
  setTimeout(() => map.invalidateSize(), 400);
});

function flyTo(lat, lng, zoom) {
  if(map) map.flyTo([lat, lng], zoom, { duration: 1.2 });
}
</script>';

include 'header.php';
?>

<main style="padding-top:calc(var(--ticker-h) + 70px)">

<!-- 1. HERO -->
<section id="about-hero">
  <div class="ah-halftone"></div>
  <div class="ah-glow-r"></div>
  <div class="ah-glow-l"></div>
  <div class="ah-inner">
    <div class="ah-rule"></div>
    <div class="container">
      <div class="ah-text reveal">
        <span class="ah-eyebrow">Omuto Foundation · Est. 2019 · Kammengo, Mpigi, Uganda</span>
        <h1 class="ah-h1">Built From<br/><em>Within.</em></h1>
      </div>
      <div class="ah-strip reveal">
        <div class="ah-cell"><span class="ah-num">7,000+</span><span class="ah-lbl">Youth Engaged</span></div>
        <div class="ah-cell" style="padding-left:24px"><span class="ah-num">47</span><span class="ah-lbl">Completed Projects</span></div>
        <div class="ah-cell" style="padding-left:24px"><span class="ah-num">3,200+</span><span class="ah-lbl">Safer Water Access</span></div>
        <div class="ah-cell" style="padding-left:24px"><span class="ah-num">2019</span><span class="ah-lbl">Year We Started</span></div>
      </div>
    </div>
  </div>
</section>

<!-- 2. ORIGIN -->
<section id="origin">
  <span class="origin-wm" aria-hidden="true">KAMMENGO</span>
  <div class="container">
    <div class="origin-grid">
      <div class="reveal">
        <span class="eyebrow ew-red" style="margin-bottom:24px">Where We Started</span>
        <p class="origin-pull">2019. Kammengo, Mpigi District.<br/><span class="red">No office. No money.</span><br/>Just young people tired of waiting.</p>
        <div class="origin-body">
          <p>We asked ourselves: if we are the majority in this country, why do we act like visitors in our own communities? So we started working with whatever we had.</p>
          <p>In February 2020, we registered as One 4 Another CBO. In 2021 we rebranded to Omuto Foundation — Omuto means seed in Luganda. In 2023 we became a nationally registered NGO.</p>
          <p>Today we have completed 47 projects across Mpigi and Butambala. More than 3,200 people have cleaner water. Over 700 girls received reusable pads and health education. We planted 2,300 trees. We reached 7,000 young people.</p>
        </div>
        <div style="display:flex;gap:10px;flex-wrap:wrap;margin-top:32px">
          <a href="impact.php" class="btn btn-red btn-sm">See Our Impact →</a>
          <a href="report2025.php" class="btn btn-white btn-sm">Annual Report 2025</a>
        </div>
      </div>
      <div class="reveal rd2">
        <div class="collage">
          <div class="c-main"><img src="https://scontent.ftlv19-1.fna.fbcdn.net/v/t1.6435-9/89290681_145273116954937_1152826096203333632_n.jpg?stp=c38.0.864.864a_dst-jpg_s552x414_tt6&_nc_cat=100&ccb=1-7&_nc_sid=5df8b4&_nc_ohc=jnhlxqAGMuMQ7kNvwFODWNT&_nc_oc=AdljXtkGnkcJw5l4crm7ornSrKKdmcLOAzXlc0_j32Q9TQCUdnBYl2NgpcLm51WHl0xbu8pQlPbzqQm9kFxfriAI&_nc_zt=23&_nc_ht=scontent.ftlv19-1.fna&_nc_gid=kdp5EbJ0mCkUmxmwpK7O3A&_nc_ss=8&oh=00_Afxwl9fK9YFUTZCetbmb_WFzcXJFKPICy1bRYaKg4Q73_A&oe=69D298C1" alt="Omuto youth in community action" loading="lazy"/></div>
          <div class="c-over"><img src="https://scontent.ftlv19-1.fna.fbcdn.net/v/t39.30808-6/476350936_1174394120709493_263728285609836928_n.jpg?stp=c202.0.676.676a_dst-jpg_s552x414_tt6&_nc_cat=100&ccb=1-7&_nc_sid=a934a8&_nc_ohc=bdXNQJV7iAYQ7kNvwGSgkHT&_nc_oc=Adnau4Yt78pmb6zveNmW6FFBONyFJYeQKRY7PYQ-b3fxDTAvvSY9qLxAEoWdKmdRxomoMGTgwswmdvJN2D3zJEHG&_nc_zt=23&_nc_ht=scontent.ftlv19-1.fna&_nc_gid=d5LyzcCkHO2-QWRoEmjd8w&_nc_ss=8&oh=00_AfxEkS4_NIY73iwAvxgKym3Y_YqD5Z_kjhjPoD303jeDrQ&oe=69B0D32C" alt="Youth-led project work" loading="lazy"/></div>
          <div class="c-sticker">Seeds of change.</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 3. PHILOSOPHY -->
<section id="philosophy">
  <div class="halftone halftone-light"></div>
  <div class="container">
    <div class="phil-grid">
      <div class="reveal">
        <span class="eyebrow ew-white" style="margin-bottom:24px">What We Believe</span>
        <p class="phil-big"><span class="yellow">Charity feeds a day.</span><br/>Structure feeds<br/><span class="red">a generation.</span></p>
        <div class="phil-body-text">
          <p>Young people are not waiting to be saved. They are waiting to be trusted. When you give them real responsibility, they rise.</p>
          <p>We do not do visits, take photos, and leave. We build things that continue. When we install a water filter, we train students to maintain it. When we give out pads, we train peer educators to lead sessions. When someone finishes training, they teach the next group.</p>
          <p>If the work stops when one person leaves, it was not strong enough.</p>
        </div>
      </div>
      <div class="reveal rd2">
        <div class="phil-list">
          <div class="pp"><span class="pp-num">01</span><div class="pp-text"><strong>Youth Own It</strong>Young people design, run, and evaluate every project. Adults advise. Youth decide.</div></div>
          <div class="pp"><span class="pp-num">02</span><div class="pp-text"><strong>Systems Not Handouts</strong>Every intervention builds something that outlasts it — a trained team, a maintained system, a new chapter.</div></div>
          <div class="pp"><span class="pp-num">03</span><div class="pp-text"><strong>Real Problems Only</strong>We work on issues the community itself identifies. Not what funders assume is needed.</div></div>
          <div class="pp"><span class="pp-num">04</span><div class="pp-text"><strong>Graduates Become Mentors</strong>Alumni launch new chapters. The cycle continues with no external dependency.</div></div>
          <div class="pp"><span class="pp-num">05</span><div class="pp-text"><strong>Built to Outlive Us</strong>If the work stops when one person leaves, it was not strong enough.</div></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 4. FOUNDER -->
<section id="founder">
  <div class="container">
    <div class="founder-grid">
      <div class="reveal">
        <div class="founder-card">
          <div class="founder-photo"><img src="https://i.ibb.co/QtQpJRz/10.png" alt="Mark Mike Mutumba — Founder, Omuto Foundation" loading="lazy"/></div>
          <div class="founder-card-bottom">
            <p class="fc-name">Mark Mike Mutumba</p>
            <p class="fc-role">Founder &amp; Executive Director</p>
            <span class="fc-badge">
              <svg width="10" height="10" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
              Forbes Africa · Jun/Jul 2024
            </span>
          </div>
        </div>
      </div>
      <div class="reveal rd2">
        <span class="eyebrow ew-red" style="margin-bottom:24px">The Founder</span>
        <div class="forbes-strip">
          <span class="fs-word">Forbes</span>
          <div class="fs-detail"><span class="fs-edition">Africa Edition</span><span class="fs-edition">June / July 2024</span></div>
        </div>
        <blockquote class="founder-quote">"Young people, when given the right tools, are the key to achieving the 2030 Sustainable Development Goals — not just in Uganda but across Africa."</blockquote>
        <div class="founder-bio">
          <p>Mark Mike founded Omuto in 2019 with no office, no funding, and a simple conviction: that the young people around him were not the problem — they were the answer.</p>
          <p>From community meetups in Kammengo to being featured in Forbes Africa, the mission has stayed exactly the same. He is a YALI alumni and a Theirworld Ambassador.</p>
          <p>With Africa's booming youth population, every young person is either a challenge or an asset. Omuto chooses to make them assets — leaders, activists, entrepreneurs, innovators.</p>
        </div>
        <div style="display:flex;gap:10px;flex-wrap:wrap;margin-top:28px">
          <a href="https://wa.me/256750028703" target="_blank" rel="noopener" class="btn btn-navy btn-sm">Contact McMike →</a>
          <a href="about.php" class="btn btn-white btn-sm">Full Team →</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 5. MAP -->
<section id="map-section">
  <div class="container">
    <div class="reveal" style="text-align:center">
      <span class="eyebrow ew-teal">Where We Work</span>
      <h2 class="t-section">Our <em class="line-red">Footprint</em></h2>
      <p class="t-body" style="opacity:.65;max-width:480px;margin:12px auto 0">Offices in Kammengo and Kampala. Active programmes across Mpigi and Butambala districts. Click any location to zoom in.</p>
    </div>
    <div class="map-layout reveal">
      <div id="omuto-map" aria-label="Map of Omuto Foundation locations"></div>
      <div class="map-side">
        <div class="map-key">
          <h4>Map Key</h4>
          <div class="mk-row"><div class="mk-dot" style="background:var(--red)"></div><span class="mk-lbl">Offices &amp; HQ</span></div>
          <div class="mk-row"><div class="mk-dot" style="background:var(--teal)"></div><span class="mk-lbl">Active Programme Areas</span></div>
        </div>
        <div class="map-locs">
          <div class="mloc" onclick="flyTo(0.168,32.235,14)"><p class="mloc-name">Omuto HQ</p><p class="mloc-type" style="color:var(--red)">● Kammengo, Nabbuzi · Mpigi</p></div>
          <div class="mloc" onclick="flyTo(0.358,32.575,14)"><p class="mloc-name">Kampala Office</p><p class="mloc-type" style="color:var(--red)">● Kyebando, Kanakulya Road</p></div>
          <div class="mloc" onclick="flyTo(0.224,32.331,13)"><p class="mloc-name">Mpigi Town</p><p class="mloc-type" style="color:var(--teal)">● School Programmes</p></div>
          <div class="mloc" onclick="flyTo(-0.046,32.109,13)"><p class="mloc-name">Buwama</p><p class="mloc-type" style="color:var(--teal)">● YAP Community Chapter</p></div>
          <div class="mloc" onclick="flyTo(0.005,32.056,13)"><p class="mloc-name">Kayabwe</p><p class="mloc-type" style="color:var(--teal)">● YAP Community Chapter</p></div>
          <div class="mloc" onclick="flyTo(0.198,32.112,13)"><p class="mloc-name">Gombe</p><p class="mloc-type" style="color:var(--teal)">● District Partners</p></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 6. TIMELINE -->
<section id="timeline">
  <div class="container">
    <div class="reveal" style="text-align:center">
      <span class="eyebrow ew-navy">Our Journey</span>
      <h2 class="t-section">From an Idea<br/>to <em class="line-red">47 Projects</em></h2>
    </div>
    <div class="tl-track reveal">
      <div class="tl-cell"><div class="tl-bar"></div><span class="tl-year">2019–2020</span><div class="tl-items"><div class="tl-item">Idea born in Kammengo</div><div class="tl-item">No office, no budget</div><div class="tl-item">Registered as One 4 Another CBO</div><div class="tl-item">First community meetups</div></div></div>
      <div class="tl-cell"><div class="tl-bar"></div><span class="tl-year">2021–2022</span><div class="tl-items"><div class="tl-item">Rebranded to Omuto Foundation</div><div class="tl-item">YAP Chapters launched</div><div class="tl-item">YoSkills entrepreneurship pilots</div><div class="tl-item">First inter-school forums</div></div></div>
      <div class="tl-cell"><div class="tl-bar"></div><span class="tl-year">2023–2024</span><div class="tl-items"><div class="tl-item">National NGO registration</div><div class="tl-item">RED Campaign launched</div><div class="tl-item">GreenSchools programme</div><div class="tl-item">Forbes Africa feature</div><div class="tl-item">OFA Football Alliance expands</div></div></div>
      <div class="tl-cell"><div class="tl-bar"></div><span class="tl-year">2025–2026</span><div class="tl-items"><div class="tl-item">PureWater Initiative</div><div class="tl-item">Omuto Essentials store</div><div class="tl-item">Youth Center opens in Nabbuzi</div><div class="tl-item">47 completed projects</div></div></div>
    </div>
  </div>
</section>

<!-- 7. TEAM -->
<section id="team">
  <div class="container">
    <div class="reveal" style="text-align:center">
      <span class="eyebrow ew-navy">The People</span>
      <h2 class="t-section">Core <em class="line-red">Team</em></h2>
      <p class="t-body" style="opacity:.65;max-width:380px;margin:12px auto 0">Young leaders driving the movement.</p>
    </div>
    <div class="team-grid">
      <div class="team-card reveal rd1"><div class="team-photo"><img src="https://i.ibb.co/QtQpJRz/10.png" alt="McMike Mutumba" loading="lazy"/></div><div class="team-body"><p class="team-name">McMike Mutumba</p><p class="team-role">Founder &amp; Team Lead</p></div></div>
      <div class="team-card reveal rd2"><div class="team-photo"><img src="https://i.ibb.co/9R3Y8NP/7.png" alt="Dianah Nansikombi" loading="lazy"/></div><div class="team-body"><p class="team-name">Dianah Nansikombi</p><p class="team-role">Programs</p></div></div>
      <div class="team-card reveal rd3"><div class="team-photo"><img src="https://i.ibb.co/Vp3yBqkv/9.png" alt="Costantine Kasirye" loading="lazy"/></div><div class="team-body"><p class="team-name">Costantine Kasirye</p><p class="team-role">Operations</p></div></div>
      <div class="team-card reveal rd4"><div class="team-photo"><img src="https://i.ibb.co/t7H6pYj/8.png" alt="Alex Nsereko" loading="lazy"/></div><div class="team-body"><p class="team-name">Alex Nsereko</p><p class="team-role">Communications</p></div></div>
    </div>
  </div>
</section>

<!-- 8. RECOGNITION -->
<section id="recognition">
  <div class="halftone halftone-light"></div>
  <div class="container">
    <div class="rec-inner reveal">
      <span class="rec-lbl">Recognised &amp; Verified By</span>
      <div class="rec-pills">
        <span class="rec-pill hl">Forbes Africa · Jun/Jul 2024</span>
        <span class="rec-pill">GlobalGiving · Vetted Partner</span>
        <span class="rec-pill">YALI Alumni Network</span>
        <span class="rec-pill">Theirworld Ambassador</span>
        <span class="rec-pill">End Child Violence Network</span>
      </div>
      <span class="p-lbl">Mission-Aligned Partners</span>
      <div class="p-pills">
        <span class="p-pill">Mpigi District Local Government</span>
        <span class="p-pill">Spouts of Water International</span>
        <span class="p-pill">Reach A Hand Uganda</span>
        <span class="p-pill">Miss Uganda</span>
        <span class="p-pill">Theirworld</span>
        <span class="p-pill">YALI</span>
        <span class="p-pill">Red Cross Mpigi</span>
      </div>
    </div>
  </div>
</section>

<!-- FINAL CTA -->
<section id="finalcta">
  <div class="halftone"></div>
  <div class="container">
    <div class="fcta-inner reveal">
      <h2 class="fcta-h">Ready to build with us?</h2>
      <p class="fcta-p">Whether you fund, partner, or start a chapter — there is a place for you in the Omuto story.</p>
      <div class="fcta-btns">
        <a href="campaign.php" class="btn btn-white">Fund a Chapter →</a>
        <a href="contact.php" class="btn btn-navy">Partner With Us</a>
        <a href="index.php" class="btn btn-outline-white">Back to Home</a>
      </div>
    </div>
  </div>
</section>

</main>

<?php include 'footer.php'; ?>