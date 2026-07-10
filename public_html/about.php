<?php
// ── Page-specific SEO & config ────────────────────────────────────────────
$page_title      = "About | Omuto Foundation";
$page_desc       = "Started in 2019 with no office and no money. Just young people tired of waiting. Youth-led community development across Mpigi and Butambala, Uganda.";
$page_canonical  = "https://omuto.org/about";
$page_active_nav = "about";                      // highlights "About" in nav

// Page-specific CSS (Leaflet + all about-page styles)
$footer_show_leaflet = true;                     // tells footer.php to load Leaflet
$page_extra_css = '<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
<link rel="stylesheet" href="about.css"/>';

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
    `<strong style="font-weight:bold;display:block;margin-bottom:4px;font-size:12px;opacity:.9">${title}</strong><span style="font-size:11px;opacity:.7">${detail}</span>`;

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
<section id="about-hero" class="section-navy">
  <div class="hero-dots ah-halftone"></div>
  <div class="glow-red ah-glow-r"></div>
  <div class="glow-teal ah-glow-l"></div>
  <div class="ah-inner">
    <div class="ah-rule"></div>
    <div class="container">
      <div class="ah-text reveal">
        <span class="ah-eyebrow">Omuto Foundation · Est. 2019 · Kammengo, Mpigi, Uganda</span>
        <h1 class="ah-h1">Built From<br/><em>Within.</em></h1>
      </div>
      <div class="stat-strip ah-strip reveal">
        <div class="stat-strip-cell"><span class="stat-strip-num">7,000+</span><span class="stat-strip-lbl">Youth Engaged</span></div>
        <div class="stat-strip-cell" style="padding-left:24px"><span class="stat-strip-num">47</span><span class="stat-strip-lbl">Completed Projects</span></div>
        <div class="stat-strip-cell" style="padding-left:24px"><span class="stat-strip-num">3,200+</span><span class="stat-strip-lbl">Safer Water Access</span></div>
        <div class="stat-strip-cell" style="padding-left:24px"><span class="stat-strip-num">2019</span><span class="stat-strip-lbl">Year We Started</span></div>
      </div>
    </div>
  </div>
</section>

<!-- 2. ORIGIN -->
<section id="origin" class="section-cream">
  <span class="watermark origin-wm" aria-hidden="true">KAMMENGO</span>
  <div class="container">
    <div class="grid-2 origin-grid">
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
<section id="philosophy" class="section-navy">
  <div class="halftone halftone-light"></div>
  <div class="container">
    <div class="grid-2-center phil-grid">
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
        <div class="bordered-list-dark phil-list">
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
<section id="founder" class="section-cream">
  <div class="container">
    <div class="founder-grid" style="display:grid;grid-template-columns:320px 1fr;gap:64px;align-items:start;position:relative;z-index:2">
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
          <p>Mark Mike (known as "McMike") founded Omuto in 2019 with no office, no funding, and a simple conviction: that the young people around him were not the problem — they were the answer.</p>
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
<section id="map-section" class="section-white">
  <div class="container">
    <div class="reveal" style="text-align:center">
      <span class="eyebrow ew-teal">Where We Work</span>
      <h2 class="t-section">Our <em class="line-red">Footprint</em></h2>
      <p class="t-body" style="opacity:.65;max-width:480px;margin:12px auto 0">Offices in Kammengo and Kampala. Active programmes across Mpigi and Butambala districts. Click any location to zoom in.</p>
    </div>
    <div class="map-layout reveal" style="display:grid;grid-template-columns:1fr 320px;gap:28px;align-items:start;margin-top:48px">
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
<section id="timeline" class="section-cream">
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
<section id="team" class="section-white">
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
<section id="recognition" class="section-navy" style="padding:64px 0">
  <div class="halftone halftone-light"></div>
  <div class="container">
    <div class="rec-inner reveal" style="position:relative;z-index:2;text-align:center">
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
<section id="finalcta" class="section-red">
  <div class="halftone"></div>
  <div class="container">
    <div class="fcta-inner reveal" style="text-align:center;position:relative;z-index:2;max-width:540px;margin:0 auto">
      <h2 class="fcta-h">Ready to build with us?</h2>
      <p class="fcta-p">Whether you fund, partner, or start a chapter — there is a place for you in the Omuto story.</p>
      <div class="fcta-btns" style="display:flex;flex-wrap:wrap;gap:12px;justify-content:center">
        <a href="campaign.php" class="btn btn-white">Fund a Chapter →</a>
        <a href="contact.php" class="btn btn-navy">Partner With Us</a>
        <a href="index.php" class="btn btn-outline-white">Back to Home</a>
      </div>
    </div>
  </div>
</section>

</main>

<?php include 'footer.php'; ?>