<?php
$page_title      = "2025 Annual Report | Omuto Foundation";
$page_desc       = "Omuto Foundation Annual Report 2025 — From Experimentation to Conviction. 10,000+ youth trained, $150K Zayed Prize, 8 partner schools.";
$page_canonical  = "https://omuto.org/report2025";
$page_active_nav = "impact";
$footer_show_sticky = false;

$page_extra_css = '<style>';
include 'header.php';
?>
</head>
<body>
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@700;900&family=Inter:wght@400;500;600;700&family=Gochi+Hand&display=swap" rel="stylesheet">
<style>
*,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
:root{
  --red:#EE2726;--navy:#1D2631;--cream:#F9F8F3;
  --yellow:#FFCF5D;--teal:#40D2AF;--blue:#96D9F2;
  --gold:#D69100;--grey:#6B7280;--light:#E5E7EB;--white:#FFFFFF;
  --s:6px 6px 0 var(--navy);--ssm:4px 4px 0 var(--navy);--slg:12px 12px 0 var(--navy);
}
body{font-family:'Inter',sans-serif;background:var(--cream);color:var(--navy);font-size:15px;line-height:1.75}
p{margin-bottom:14px;color:#2D3748}
ul{padding-left:20px;margin-bottom:14px}
li{margin-bottom:8px;font-size:.9rem;color:#2D3748}
strong{color:var(--navy)}
h1,h2,h3,h4{font-family:'Space Grotesk',sans-serif;font-weight:900}
.sketch{font-family:'Gochi Hand',cursive}

/* ── IMAGES ── */
.photo{width:100%;height:100%;object-fit:cover;display:block}
.pw{border:3px solid var(--navy);overflow:hidden;box-shadow:var(--s)}
.vw{border:3px solid var(--navy);overflow:hidden;box-shadow:var(--s);position:relative;padding-top:56.25%}
.vw iframe{position:absolute;inset:0;width:100%;height:100%;border:none}
.ph{background:var(--light);border:3px dashed #9CA3AF;display:flex;flex-direction:column;align-items:center;justify-content:center;color:#9CA3AF;font-size:.68rem;font-weight:700;letter-spacing:2px;text-transform:uppercase;text-align:center;padding:24px;gap:8px;min-height:200px}
.ph::before{content:'PHOTO';font-family:'Space Grotesk',sans-serif;font-size:1.4rem;font-weight:900;color:#D1D5DB}
.cap{font-size:.72rem;color:var(--grey);font-style:italic;margin-top:8px;text-align:center}

/* ── COVER ── */
.cover{background:var(--navy);min-height:100vh;display:grid;grid-template-columns:55% 45%}
.cl{background:var(--red);padding:64px 52px;display:flex;flex-direction:column;justify-content:space-between}
.cr{display:flex;flex-direction:column;padding:0;overflow:hidden}
.cr-img{flex:1;min-height:0;position:relative;overflow:hidden}
.cr-img img{width:100%;height:100%;object-fit:cover;display:block;filter:grayscale(20%) brightness(.85)}
.cr-bottom{padding:32px 40px;background:var(--navy)}
.cover-badge{background:var(--yellow);color:var(--navy);font-family:'Space Grotesk',sans-serif;font-weight:900;font-size:.65rem;letter-spacing:3px;text-transform:uppercase;padding:6px 14px;border:2px solid rgba(0,0,0,.2);display:inline-block;box-shadow:var(--ssm);margin-bottom:28px}
.cover h1{font-size:clamp(2.6rem,5vw,4.8rem);line-height:.88;text-transform:uppercase;font-style:italic;color:var(--white);margin-bottom:18px}
.cover h1 span{color:var(--yellow)}
.cover-sub{font-size:.95rem;font-weight:600;color:rgba(255,255,255,.65);font-style:italic;max-width:320px;margin-bottom:36px}
.cmeta{display:flex;flex-direction:column;gap:12px}
.cmeta-item label{display:block;font-size:.6rem;font-weight:700;letter-spacing:2.5px;text-transform:uppercase;color:rgba(255,255,255,.45);margin-bottom:2px}
.cmeta-item span{font-size:.88rem;font-weight:700;color:var(--white)}
.cover-quote{border-left:4px solid var(--yellow);padding:14px 20px;color:rgba(255,255,255,.82);font-style:italic;font-size:.9rem;font-weight:600;line-height:1.55}
@media(max-width:680px){.cover{grid-template-columns:1fr}.cr{display:none}}

/* ── PAGE LAYOUT ── */
.page{max-width:980px;margin:0 auto;padding:72px 52px}
@media(max-width:600px){.page{padding:48px 22px}}
.page-dark{background:var(--navy);color:var(--white)}
.page-dark p,.page-dark li{color:rgba(255,255,255,.82)}
.page-dark strong{color:var(--white)}
.page-white{background:var(--white)}
.page-cream{background:var(--cream)}

/* section separators */
.page+.page,.page-dark+.page,.page+.page-dark,.page-white+.page,.page+.page-white{border-top:3px solid var(--navy)}

/* ── TYPE ── */
.stag{font-family:'Space Grotesk',sans-serif;font-weight:900;font-size:.62rem;letter-spacing:3px;text-transform:uppercase;color:var(--red);margin-bottom:10px;display:flex;align-items:center;gap:10px}
.stag::after{content:'';flex:0 0 28px;height:3px;background:var(--red)}
.stag-light{color:var(--yellow)}.stag-light::after{background:var(--yellow)}
h2.ttl{font-size:clamp(1.9rem,3.5vw,2.9rem);text-transform:uppercase;font-style:italic;line-height:.95;margin-bottom:28px}
h3.sub{font-size:.92rem;font-weight:700;text-transform:uppercase;letter-spacing:.5px;margin:32px 0 10px;padding-left:14px;border-left:4px solid var(--red)}
.sub-light{border-color:var(--yellow);color:var(--white)}

/* ── TWO-COL ── */
.two{display:grid;grid-template-columns:1fr 1fr;gap:44px;align-items:start}
.two-img{display:grid;grid-template-columns:1.2fr 1fr;gap:44px;align-items:center}
.two-img-r{display:grid;grid-template-columns:1fr 1.2fr;gap:44px;align-items:center}
@media(max-width:640px){.two,.two-img,.two-img-r{grid-template-columns:1fr}}

/* ── PULLQUOTE ── */
.pq{border-left:5px solid var(--red);padding:18px 24px;background:rgba(238,39,38,.06);margin:28px 0;font-size:1rem;font-family:'Space Grotesk',sans-serif;font-weight:700;color:var(--navy);line-height:1.55;font-style:italic}
.pq cite{display:block;font-size:.78rem;font-weight:400;color:var(--grey);margin-top:8px;font-style:normal;font-family:'Inter',sans-serif}
.pq-light{border-color:var(--yellow);background:rgba(255,207,93,.1);color:var(--white)}
.pq-light cite{color:rgba(255,255,255,.5)}

/* ── LETTER ── */
.letter{background:var(--white);border:3px solid var(--navy);box-shadow:var(--slg);overflow:hidden}
.letter-top{display:grid;grid-template-columns:220px 1fr;gap:0}
@media(max-width:600px){.letter-top{grid-template-columns:1fr}}
.letter-photo{position:relative;overflow:hidden;border-right:3px solid var(--navy)}
.letter-photo img{width:100%;height:100%;object-fit:cover;display:block;filter:grayscale(100%);transition:filter .5s}
.letter-photo img:hover{filter:grayscale(0%)}
.letter-photo-tag{position:absolute;bottom:0;left:0;right:0;background:var(--navy);padding:12px 16px}
.letter-photo-tag strong{display:block;color:var(--white);font-size:.9rem;font-family:'Space Grotesk',sans-serif}
.letter-photo-tag span{font-size:.68rem;color:rgba(255,255,255,.5);text-transform:uppercase;letter-spacing:1px}
.letter-body{padding:40px 44px}
.letter-body p{color:#374151}
.sig{margin-top:24px;padding-top:20px;border-top:2px solid var(--light);font-family:'Space Grotesk',sans-serif;font-weight:900;font-size:.95rem;color:var(--navy)}
.sig span{display:block;font-weight:400;font-size:.8rem;color:var(--grey);font-family:'Inter',sans-serif}

/* ── STATS ── */
.stats{display:grid;grid-template-columns:repeat(6,1fr);gap:3px;margin:32px 0;background:var(--navy)}
@media(max-width:700px){.stats{grid-template-columns:repeat(3,1fr)}}
@media(max-width:400px){.stats{grid-template-columns:repeat(2,1fr)}}
.stat{padding:26px 16px;text-align:center}
.s-r{background:var(--red)}.s-n{background:var(--navy)}.s-y{background:var(--yellow)}
.s-t{background:var(--teal)}.s-b{background:var(--blue)}.s-w{background:var(--white)}
.stat .num{font-family:'Space Grotesk',sans-serif;font-weight:900;font-size:1.9rem;line-height:1}
.s-r .num,.s-n .num{color:var(--white)}
.s-y .num,.s-t .num,.s-b .num,.s-w .num{color:var(--navy)}
.stat .lbl{font-size:.62rem;font-weight:700;text-transform:uppercase;letter-spacing:.4px;margin-top:7px}
.s-r .lbl,.s-n .lbl{color:rgba(255,255,255,.75)}
.s-y .lbl,.s-t .lbl,.s-b .lbl,.s-w .lbl{color:rgba(29,38,49,.65)}

/* ── TABLE ── */
table{width:100%;border-collapse:collapse;margin:20px 0;font-size:.86rem;border:3px solid var(--navy)}
thead tr{background:var(--red);color:var(--white)}
thead th{padding:11px 14px;text-align:left;font-family:'Space Grotesk',sans-serif;font-weight:900;font-size:.72rem;letter-spacing:.5px;text-transform:uppercase}
tbody tr{border-bottom:2px solid rgba(255,255,255,.08)}
tbody tr:nth-child(odd){background:rgba(255,255,255,.04)}
tbody tr:nth-child(even){background:rgba(255,255,255,.08)}
tbody td{padding:10px 14px;color:rgba(255,255,255,.82)}
tbody td:first-child{font-weight:700;font-size:.75rem;color:rgba(255,255,255,.45);text-transform:uppercase;letter-spacing:.3px}
tbody td:last-child{font-weight:900;color:var(--yellow);font-family:'Space Grotesk',sans-serif}

/* ── PILLARS ── */
.pillars{display:grid;grid-template-columns:repeat(3,1fr);border:3px solid var(--navy);margin:28px 0;box-shadow:var(--s);background:var(--navy);gap:3px}
.pillar{padding:26px 22px;background:var(--white)}
.pillar:nth-child(2){background:var(--navy);border:2px solid var(--yellow)}
.pillar:nth-child(2) h4,.pillar:nth-child(2) p{color:rgba(255,255,255,.85)}
.pillar:nth-child(2) .n{color:var(--yellow)}
.pillar .n{font-family:'Space Grotesk',sans-serif;font-size:2.2rem;font-weight:900;color:var(--red);line-height:1}
.pillar h4{font-size:.85rem;margin:8px 0 6px;text-transform:uppercase;letter-spacing:.5px}
.pillar p{font-size:.8rem;color:var(--grey);margin:0}
@media(max-width:520px){.pillars{grid-template-columns:1fr}}

/* ── PROG BLOCK ── */
.prog{border:3px solid var(--navy);padding:32px;margin-bottom:24px;position:relative;background:var(--white);box-shadow:var(--ssm)}
.prog-tag{position:absolute;top:-15px;left:18px;background:var(--navy);color:var(--white);font-family:'Space Grotesk',sans-serif;font-weight:900;font-size:.6rem;letter-spacing:2px;text-transform:uppercase;padding:5px 13px;border:2px solid var(--navy)}
.prog h4{font-size:1.05rem;text-transform:uppercase;font-style:italic;margin-bottom:12px;color:var(--navy)}
.sdg-row{display:flex;flex-wrap:wrap;gap:6px;margin-top:14px}
.sdg{font-size:.65rem;font-weight:700;padding:4px 10px;border:2px solid var(--navy);text-transform:uppercase;letter-spacing:.5px;font-family:'Space Grotesk',sans-serif}
.sdg-t{background:var(--teal);color:var(--navy)}
.sdg-y{background:var(--yellow);color:var(--navy)}
.sdg-b{background:var(--blue);color:var(--navy)}

/* ── DEBATE ── */
.debate-grid{display:grid;grid-template-columns:1fr 1fr;gap:18px;margin:18px 0}
.dcard{border:3px solid var(--navy);padding:22px;background:var(--white);box-shadow:var(--ssm)}
.dcard .rnd{font-size:.62rem;font-weight:700;letter-spacing:2px;text-transform:uppercase;color:var(--grey);margin-bottom:8px}
.dcard .win{font-family:'Space Grotesk',sans-serif;font-size:1rem;font-weight:900;text-transform:uppercase;margin-bottom:8px;color:var(--navy)}
.dcard.y-top{border-top:6px solid var(--yellow)}
.dcard.r-top{border-top:6px solid var(--red)}
.dcard p{font-size:.82rem;margin-bottom:0;color:#4A5568}
@media(max-width:500px){.debate-grid{grid-template-columns:1fr}}

/* ── GREEN FEATURE ── */
.gf{border:3px solid var(--navy);box-shadow:var(--slg);margin:32px 0;overflow:hidden}
.gf-head{background:var(--navy);padding:18px 28px;display:flex;align-items:center;gap:14px;flex-wrap:wrap;border-bottom:3px solid var(--teal)}
.gbadge{background:var(--teal);color:var(--navy);font-family:'Space Grotesk',sans-serif;font-weight:900;font-size:.62rem;letter-spacing:2px;text-transform:uppercase;padding:5px 12px;border:2px solid rgba(255,255,255,.2)}
.gf-head h4{font-size:1.1rem;color:var(--white);text-transform:uppercase;font-style:italic}
.gf-body{padding:32px;background:var(--cream)}
.gf-body p{color:#2D3748}
.gm-row{display:grid;grid-template-columns:repeat(3,1fr);gap:3px;margin-top:24px;background:var(--navy)}
.gm{background:var(--teal);padding:20px;text-align:center}
.gm:nth-child(2){background:var(--navy);border:2px solid var(--teal)}
.gm:nth-child(2) .gl{color:rgba(255,255,255,.6)}
.gm .gn{font-family:'Space Grotesk',sans-serif;font-size:1.8rem;font-weight:900;color:var(--navy);line-height:1}
.gm:nth-child(2) .gn{color:var(--teal)}
.gm .gl{font-size:.65rem;font-weight:700;text-transform:uppercase;letter-spacing:.5px;color:rgba(29,38,49,.65);margin-top:6px}
@media(max-width:480px){.gm-row{grid-template-columns:1fr 1fr}}

/* ── CAPACITY ── */
.cap-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:3px;border:3px solid var(--navy);box-shadow:var(--s);margin:28px 0;background:var(--navy)}
@media(max-width:600px){.cap-grid{grid-template-columns:repeat(2,1fr)}}
.cap{background:var(--white);padding:26px 20px}
.cap:nth-child(even){background:var(--cream)}
.cap .big{font-family:'Space Grotesk',sans-serif;font-size:2.8rem;font-weight:900;color:var(--red);line-height:1}
.cap p{font-size:.8rem;color:var(--grey);margin-top:10px;margin-bottom:0}

/* ── CASE STUDY ── */
.cs{background:var(--navy);border:3px solid var(--navy);box-shadow:var(--slg);margin:36px 0;overflow:hidden}
.cs-inner{padding:44px 48px}
.cs-badge{background:var(--gold);color:var(--navy);font-family:'Space Grotesk',sans-serif;font-weight:900;font-size:.62rem;letter-spacing:2px;text-transform:uppercase;padding:5px 14px;border:2px solid rgba(255,255,255,.15);display:inline-block;margin-bottom:18px}
.cs h3{font-size:2rem;text-transform:uppercase;font-style:italic;color:var(--white);margin-bottom:16px;line-height:.95}
.cs p{color:rgba(255,255,255,.8);font-size:.9rem;margin-bottom:12px}
.prize{background:rgba(214,145,0,.12);border:2px solid rgba(214,145,0,.35);padding:22px 26px;margin-top:24px}
.prize strong{color:var(--yellow);font-family:'Space Grotesk',sans-serif;font-size:1.1rem;display:block;margin-bottom:8px;text-transform:uppercase}
.prize p{color:rgba(255,255,255,.72);font-size:.86rem;margin-bottom:0}

/* ── OFFICE ── */
.office{display:grid;grid-template-columns:1fr 1fr;border:3px solid var(--navy);box-shadow:var(--slg);margin:28px 0;overflow:hidden}
.office-text{padding:36px 38px;background:var(--navy);color:var(--white)}
.office-text .loc{font-size:.62rem;font-weight:700;letter-spacing:2px;text-transform:uppercase;color:var(--red);margin-bottom:12px;font-family:'Space Grotesk',sans-serif}
.office-text h4{font-family:'Space Grotesk',sans-serif;font-size:1.2rem;text-transform:uppercase;font-style:italic;color:var(--white);margin-bottom:14px;line-height:1.1}
.office-text p{font-size:.86rem;color:rgba(255,255,255,.75);margin-bottom:10px}
@media(max-width:580px){.office{grid-template-columns:1fr}}

/* ── PIE ── */
.pie-section{display:flex;align-items:center;gap:48px;flex-wrap:wrap;margin:28px 0}
svg.pie{width:190px;height:190px;flex-shrink:0}
.leg{flex:1;min-width:200px}
.leg-item{display:flex;align-items:flex-start;gap:12px;margin-bottom:16px}
.leg-dot{width:14px;height:14px;border-radius:50%;flex-shrink:0;margin-top:4px;border:2px solid var(--navy)}
.leg-label strong{display:block;font-size:.88rem;font-family:'Space Grotesk',sans-serif;font-weight:900;text-transform:uppercase;color:var(--navy)}
.leg-label span{font-size:.78rem;color:var(--grey)}

/* ── TARGETS ── */
.targets{display:grid;grid-template-columns:repeat(5,1fr);gap:3px;border:3px solid var(--navy);box-shadow:var(--s);margin:28px 0;background:var(--navy)}
@media(max-width:700px){.targets{grid-template-columns:repeat(3,1fr)}}
@media(max-width:440px){.targets{grid-template-columns:repeat(2,1fr)}}
.tgt{background:var(--cream);padding:22px 18px}
.tgt:nth-child(even){background:var(--white)}
.tgt .tn{font-family:'Space Grotesk',sans-serif;font-size:2rem;font-weight:900;color:var(--red);line-height:1}
.tgt p{font-size:.78rem;color:var(--grey);margin-top:8px;margin-bottom:0}

/* ── COMM TAG ── */
.comm-tag{display:inline-block;background:var(--blue);color:var(--navy);font-family:'Space Grotesk',sans-serif;font-weight:900;font-size:.62rem;letter-spacing:2px;text-transform:uppercase;padding:5px 13px;border:2px solid var(--navy);box-shadow:3px 3px 0 var(--navy);margin-bottom:18px}

/* ── BACK COVER ── */
.back{background:var(--navy);padding:72px 8%;display:grid;grid-template-columns:1.4fr 1fr 1fr;gap:52px}
@media(max-width:680px){.back{grid-template-columns:1fr;padding:48px 6%}}
.back h3{font-size:.62rem;font-weight:700;letter-spacing:3px;text-transform:uppercase;color:var(--yellow);margin-bottom:16px;font-family:'Space Grotesk',sans-serif;padding-bottom:8px;border-bottom:1px solid rgba(255,255,255,.1)}
.back p,.back a{font-size:.86rem;color:rgba(255,255,255,.65);display:block;margin-bottom:8px;text-decoration:none;font-family:'Inter',sans-serif}
.back a:hover{color:var(--yellow)}
.bc-div{grid-column:1/-1;height:2px;background:rgba(255,255,255,.08);margin:8px 0}
.bc-foot{grid-column:1/-1;display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap;gap:14px;font-size:.68rem;color:rgba(255,255,255,.28);font-family:'Space Grotesk',sans-serif;font-weight:700;text-transform:uppercase;letter-spacing:1px}
.red-bar{height:7px;background:var(--red);border-top:3px solid var(--navy)}

/* ── CLOSING ── */
.closing{text-align:center;padding:88px 52px;background:var(--navy)}
.closing .stag{justify-content:center;color:var(--yellow)}.closing .stag::after{background:var(--yellow)}
.closing h2{font-size:clamp(2.4rem,6vw,4.5rem);text-transform:uppercase;font-style:italic;line-height:.9;margin-bottom:28px;color:var(--white)}
.closing h2 span{color:var(--red)}
.closing > p{max-width:580px;margin:0 auto 12px;color:rgba(255,255,255,.75);font-size:.95rem}
</style>
</head>
<body>

<!-- ══ COVER ══ -->
<div class="cover">
  <div class="cl">
    <div>
      <img src="https://i.imgur.com/onkikq1.png" alt="Omuto Foundation" style="height:52px;margin-bottom:24px;filter:brightness(0) invert(1)">
      <div class="cover-badge">Annual Report 2025</div>
    </div>
    <div>
      <h1>The Power<br><span>of YOUth.</span></h1>
      <p class="cover-sub">Schools. Leadership. Action. — Building Systems, Not Moments.</p>
      <div class="cmeta">
        <div class="cmeta-item"><label>Reporting Period</label><span>January – December 2025</span></div>
        <div class="cmeta-item"><label>Focus Districts</label><span>Mpigi &amp; Butambala</span></div>
        <div class="cmeta-item"><label>Partner Schools</label><span>8 Active Schools</span></div>
      </div>
    </div>
  </div>
  <div class="cr">
    <div class="cr-img">
      <img src="https://i.ibb.co/JRQ0kN1L/Youth-Can-Change-the-World-When-in-Action.png" alt="Youth leaders in action">
    </div>
    <div class="cr-bottom">
      <div class="cover-quote">"When you provide the platform, the training, and the trust — youth do not wait for permission to create change."</div>
    </div>
  </div>
</div>

<!-- ══ STRATEGIC OVERVIEW ══ -->
<div class="page page-cream">
  <div class="stag">Strategic Overview</div>
  <h2 class="ttl">From Experimentation<br>to Conviction</h2>
  <div class="two-img">
    <div>
      <p>Between 2020 and 2024, Omuto Foundation acted as an incubator for youth empowerment — testing a diverse portfolio of entry points across sport, water, vocational skills, and menstrual health. Each initiative demonstrated real promise. But these efforts, while successful in isolation, lacked the cohesive architecture required for systemic, long-term change.</p>
      <p>2025 is the moment of synthesis. Through rigorous monitoring and deep community engagement, Omuto confirmed its most powerful institutional insight:</p>
      <div class="pq">The school is the foundational institution for sustained youth leadership and the most effective catalyst for long-term rural transformation.</div>
      <p>All school-embedded programming now operates under one integrated framework — the <strong>Omuto School Xperience (OSX)</strong>. Cross-cutting programmes including Youth Action Pathways, Omuto Football Alliance, and Omuto Pulse operate across the broader school-and-community ecosystem.</p>
    </div>
    <div>
      <div class="pw">
        <img src="https://i.ibb.co/m5TL3gFq/23.png" alt="Omuto programme activity" class="photo" style="min-height:320px">
      </div>
    </div>
  </div>
</div>

<!-- ══ LETTER ══ -->
<div class="page page-white">
  <div class="stag">Letter from Leadership</div>
  <h2 class="ttl">From the Executive Director</h2>
  <div class="letter">
    <div class="letter-top">
      <div class="letter-photo">
        <img src="https://i.ibb.co/QtQpJRz/10.png" alt="McMike Mutumba, Executive Director" style="min-height:360px">
        <div class="letter-photo-tag">
          <strong>McMike Mutumba</strong>
          <span>Founder &amp; Executive Director</span>
        </div>
      </div>
      <div class="letter-body">
        <p><strong>To our partners, schools, and the young leaders we serve,</strong></p>
        <p>When we began in 2020, our vision was clear: unlock the boundless potential of rural Ugandan youth. The path required discovery — listening, testing, and learning what form of support would create the most lasting impact.</p>
        <p>2025 gave us the answer. We have moved from inquiry to conviction. <strong>Youth leadership is not a program to be delivered; it is a capacity to be cultivated, and it is most sustainable when rooted within the institutional stability of school systems.</strong></p>
        <p>2025 also affirmed something equally important: the strength of Omuto lies not only in our model, but in our people. The <strong>21 interns</strong> who have moved through our organisation since 2020 — including the eight central to our 2025 work — represent the living proof of our approach. They joined as young talent, contributed to expansion into Butambala, and many have built professional careers from it. Three are now full-time staff. Others return as alumni. This pipeline points toward what we intend to formalise as the <strong>Omuto Changemakers Academy</strong>.</p>
        <p>We see impact in the 63% female SLF representation. In 1,100 trees adopted under our partnership with <strong>His Grace Demo Farm</strong>. In the Kyanja High School Ecoloop Project winning the <strong>$150,000 Zayed Sustainability Prize</strong>. And in the voices of students who competed in our first-ever interschool debate series.</p>
        <p>In 2026, our task is disciplined expansion — scaling the School Xperience, deepening data systems, and growing local sustainability through Omuto Essentials.</p>
        <div class="sig">McMike Mutumba<span>Founder &amp; Executive Director — December 2025</span></div>
      </div>
    </div>
  </div>
</div>

<!-- ══ ORG OVERVIEW ══ -->
<div class="page page-cream">
  <div class="stag">Who We Are</div>
  <h2 class="ttl">Our Mission &amp; Approach</h2>
  <div class="two">
    <div>
      <h3 class="sub">Mission</h3>
      <p>To activate and amplify youth leadership in rural Uganda through structured, measurable systems embedded within educational environments and communities — creating a sustainable pipeline of changemakers.</p>
      <h3 class="sub">Vision</h3>
      <p>A future where every young person in rural Uganda is a recognised leader, equipped with the skills, agency, and platform to drive transformative change in their own communities.</p>
      <h3 class="sub">Geographic Focus</h3>
      <p><strong>Mpigi District</strong> — 5 Partner Schools<br><strong>Butambala District</strong> — 3 Partner Schools</p>
      <p>Butambala was opened as a programme district in 2025, driven largely by the field presence and local knowledge of our intern cohort.</p>
    </div>
    <div>
      <div class="pw">
        <img src="https://i.ibb.co/wrPnfcKG/21.png" alt="Omuto team in the field" class="photo" style="min-height:320px">
      </div>
      <p class="cap">Omuto team in the field — Mpigi &amp; Butambala</p>
    </div>
  </div>
  <h3 class="sub">Three Pillars of Our Approach</h3>
  <div class="pillars">
    <div class="pillar"><div class="n">01</div><h4>Youth as Co-Creators</h4><p>Young people are the primary operators of their own development — our role is to provide the platform, resources, and mentorship.</p></div>
    <div class="pillar"><div class="n">02</div><h4>Schools as Anchors</h4><p>Schools provide the permanence, infrastructure, and community trust necessary to embed lasting, systemic change.</p></div>
    <div class="pillar"><div class="n">03</div><h4>Integration Over Fragmentation</h4><p>Health, education, economic opportunity, and environmental stability are interconnected — our model addresses them as one.</p></div>
  </div>
</div>

<!-- ══ AT A GLANCE ══ -->
<div class="page page-dark" style="background:var(--navy)">
  <div class="stag stag-light">2025 at a Glance</div>
  <div style="display:flex;align-items:baseline;gap:18px;margin-bottom:8px;flex-wrap:wrap">
    <h2 class="ttl" style="color:var(--white);margin-bottom:0">Impact by the Numbers.</h2>
    <span class="sketch" style="font-size:1.2rem;color:rgba(255,255,255,.4)">4 years. 2 districts. 1 proven model.</span>
  </div>
  <div class="stats">
    <div class="stat s-r"><div class="num">10,000+</div><div class="lbl">Youth Trained Since 2020</div></div>
    <div class="stat s-n"><div class="num" style="color:var(--teal)">3,200</div><div class="lbl">Students with Clean Water</div></div>
    <div class="stat s-y"><div class="num">2,300</div><div class="lbl">Trees Planted (Cumulative)</div></div>
    <div class="stat s-t"><div class="num">175</div><div class="lbl">Student Leaders Trained</div></div>
    <div class="stat s-b"><div class="num">700+</div><div class="lbl">Dignity Kits Distributed</div></div>
    <div class="stat s-w"><div class="num" style="color:var(--red)">$150K</div><div class="lbl">Zayed Prize Won</div></div>
  </div>
  <h3 class="sub sub-light">2025 Key Performance Indicators</h3>
  <table>
    <thead><tr><th>Thematic Area</th><th>Indicator</th><th>2025 Achievement</th></tr></thead>
    <tbody>
      <tr><td>Leadership &amp; Governance</td><td>Student Leaders Trained (SLF)</td><td>175 — 63% Female</td></tr>
      <tr><td>Debate &amp; Public Speaking</td><td>Interschool Debates</td><td>2 Rounds, 4 Schools</td></tr>
      <tr><td>Health &amp; Dignity</td><td>Dignity Kits Distributed</td><td>700+</td></tr>
      <tr><td>Climate Action</td><td>Trees Planted &amp; Adopted</td><td>1,100 (2,300 cumulative)</td></tr>
      <tr><td>Water &amp; Sanitation</td><td>Students with Clean Water Access</td><td>3,200</td></tr>
      <tr><td>Water &amp; Sanitation</td><td>Household Filters Installed</td><td>65</td></tr>
      <tr><td>Vocational Pathways</td><td>YoSkills Graduates Certified</td><td>24</td></tr>
      <tr><td>OFA — Football Teams</td><td>Active Teams Across Both Districts</td><td>18</td></tr>
      <tr><td>OFA — Partnerships</td><td>Team Captains Trained in Leadership</td><td>5</td></tr>
      <tr><td>OFA — Partnerships</td><td>Coaches Trained in Mobile Promotion</td><td>5</td></tr>
      <tr><td>Communications</td><td>Omuto Pulse Subscribers (YouTube)</td><td>4,750+</td></tr>
      <tr><td>Social Enterprise</td><td>Operational Costs Covered by Essentials</td><td>10%</td></tr>
      <tr><td>Local Capacity</td><td>2025 Intern Cohort</td><td>8</td></tr>
      <tr><td>Local Capacity</td><td>Total Interns Since 2020</td><td>21</td></tr>
    </tbody>
  </table>
</div>

<!-- ══ CAPACITY ══ -->
<div class="page page-white">
  <div class="stag">Our Team &amp; Local Capacity</div>
  <h2 class="ttl">Building from Within:<br>The Intern Pipeline</h2>
  <div class="two-img">
    <div>
      <p>From the very beginning, Omuto made a commitment not only to serve communities but to build professional talent within them — young people who understand the context, speak the languages, and carry the mission from the inside.</p>
      <p>Since 2020, <strong>21 interns</strong> have moved through Omuto, contributing at every level of programme delivery. The <strong>2025 cohort of 8</strong> was particularly significant — their energy and local knowledge were central to our expansion into Butambala District and the decentralisation of projects previously concentrated in Mpigi. They did not just support programmes; they helped design and drive them.</p>
      <p>What began as a structured internship is evolving into something larger. We envision the <strong>Omuto Changemakers Academy</strong> — a formal pipeline to recruit, train, and place young professionals in community development roles across Uganda.</p>
    </div>
    <div>
      <div class="pw">
        <img src="https://i.ibb.co/JWHrCkcp/26.png" alt="Omuto interns and youth leaders" class="photo" style="min-height:300px">
      </div>
      <p class="cap">2025 intern cohort photo</p>
    </div>
  </div>
  <div class="cap-grid">
    <div class="cap"><div class="big">21</div><p>Total interns enrolled through the Omuto pipeline since 2020</p></div>
    <div class="cap"><div class="big">8</div><p>Interns in 2025 cohort — instrumental in opening Butambala District</p></div>
    <div class="cap"><div class="big">3</div><p>Former interns who became full-time Omuto staff members</p></div>
    <div class="cap"><div class="big" style="font-size:1.5rem">Alumni</div><p>Many return regularly as volunteers, supporting events and mentoring new cohorts</p></div>
  </div>
  <div class="pq">The Omuto internship is not a support role — it is a formation experience. Our interns go on to become practitioners, advocates, and leaders in their own right.</div>
</div>

<!-- ══ KAMPALA OFFICE ══ -->
<div class="page page-cream">
  <div class="stag">Organisational Growth</div>
  <h2 class="ttl">A New Home in Kampala</h2>
  <div class="office">
    <div class="ph" style="min-height:280px;border:none;border-right:3px solid var(--navy)">Replace with office photo — Kanakulya Road</div>
    <div class="office-text">
      <div class="loc">Kanakulya Road, Kampala</div>
      <h4>Closer to Resources.<br>Closer to Partners.</h4>
      <p>In 2025, Omuto opened a Kampala office on Kanakulya Road — a deliberate move to position the organisation closer to Uganda's capital resource mobilisation landscape.</p>
      <p>The office is home to the <strong>Executive Director</strong> and <strong>Programmes Manager</strong>, providing a formal base for donor engagement, institutional partnerships, and representation in national conversations on youth development and education.</p>
      <p>The Kampala presence complements field operations in Mpigi and Butambala, creating a two-node structure that strengthens both delivery and sustainability.</p>
    </div>
  </div>
</div>

<!-- ══ OSX PROGRAMMES ══ -->
<div class="page page-white">
  <div class="stag">Programme Report — Schools</div>
  <h2 class="ttl">The Omuto School<br><span style="color:var(--red)">Xperience (OSX)</span></h2>
  <p>OSX is our school-embedded programmatic framework — structured interventions designed to reinforce one another and build a self-sustaining culture of youth leadership, health, and environmental responsibility across 8 partner schools in Mpigi and Butambala.</p>

  <div class="pw" style="margin:28px 0">
    <img src="https://i.ibb.co/JWHrCkcp/26.png" alt="OSX school session" class="photo" style="min-height:320px">
  </div>

  <!-- SLF -->
  <div class="prog" style="margin-top:36px">
    <div class="prog-tag">OSX — Layer 01 — Leadership</div>
    <div class="two-img">
      <div>
        <h4>Student Leaders Forum (SLF)</h4>
        <p>In many rural schools, traditional prefect systems prioritise hierarchy over collaborative problem-solving. The SLF restructures this dynamic — a democratically-influenced body training students in needs identification, solution mapping, and structured dialogue with school administration.</p>
        <p>In 2025, <strong>175 leaders were trained across 8 schools</strong>, with <strong>63% female participation</strong> — a deliberate result of inclusive outreach and a curriculum that actively challenges historically male-dominated leadership norms.</p>
        <div class="sdg-row"><span class="sdg sdg-y">SDG 4 — Quality Education</span><span class="sdg sdg-y">SDG 5 — Gender Equality</span></div>
      </div>
      <div>
        <div class="pw">
          <img src="https://i.ibb.co/JWHrCkcp/26.png" alt="Student Leaders Forum session" class="photo" style="min-height:240px">
        </div>
      </div>
    </div>
  </div>

  <!-- DEBATES -->
  <h3 class="sub">Interschool Debates — Inaugural Series 2025</h3>
  <p>Omuto launched its first-ever interschool debate series across four secondary schools — giving student leaders a competitive, structured forum to develop public speaking, critical thinking, and civic argumentation skills.</p>
  <div class="debate-grid">
    <div class="dcard y-top">
      <div class="rnd">First Round Winner</div>
      <div class="win">Mitala Maria Hill Secondary School</div>
      <p>Won the inaugural first round, demonstrating exceptional preparation and argumentation in front of a cross-school audience.</p>
    </div>
    <div class="dcard r-top">
      <div class="rnd">Second Round Winner</div>
      <div class="win">Christian School Kayabwe</div>
      <p>Won the second round with strong command of contemporary community and social issues.</p>
    </div>
  </div>

  <!-- RED -->
  <div class="prog" style="margin-top:28px">
    <div class="prog-tag">OSX — Layer 02 — Menstrual Health</div>
    <div class="two-img-r">
      <div>
        <div class="pw">
          <img src="https://i.ibb.co/whj2bMb6/22.png" alt="RED Campaign peer education session" class="photo" style="min-height:260px">
        </div>
      </div>
      <div>
        <h4>The RED Campaign — Minds. Toilets. Pads.</h4>
        <p>Menstrual health remains a primary driver of absenteeism, with some girls missing up to <strong>20% of the school year</strong>. The RED Campaign addresses this through a three-pronged framework. Peer brigades lead <strong>Minds</strong> sessions destigmatising menstruation for both girls and boys. <strong>Toilets</strong> work advocates for private, secure sanitation infrastructure. <strong>Pads</strong> are produced and distributed through Omuto Essentials as reusable dignity kits.</p>
        <p>In 2025, over <strong>700 dignity kits</strong> were distributed. Menstruation is now treated as a matter of health and dignity — not charity.</p>
        <div class="sdg-row"><span class="sdg sdg-t">SDG 3 — Good Health</span><span class="sdg sdg-t">SDG 5 — Gender Equality</span></div>
      </div>
    </div>
  </div>

  <!-- GREENSCHOOLS -->
  <div class="gf" style="margin-top:28px">
    <div class="gf-head">
      <div class="gbadge">Major Initiative 2025</div>
      <h4>OSX Layer 03 — GreenSchools Initiative</h4>
    </div>
    <div class="gf-body">
      <div class="two-img">
        <div>
          <p>Environmental degradation — deforestation and soil erosion — directly threatens the agricultural livelihoods underpinning rural communities. In 2025, GreenSchools emerged as one of Omuto's most significant programmatic milestones.</p>
          <p>Central to this year's success was the <strong>Adopt a Tree</strong> model — moving beyond planting as a ceremonial event to a system of personal student ownership. Each student formally adopts a tree, nurturing it to maturity and monitoring its growth. This produced <strong>markedly higher retention and growth rates</strong> compared to prior approaches.</p>
          <p>A defining development was the formalised partnership with <strong>His Grace Demo Farm</strong>, which now provides expert agronomic guidance, practical training, and on-site monitoring. Student Green Teams also lead plastic reduction campaigns and peer climate education forums, building a culture of environmental accountability from the ground up.</p>
          <div class="sdg-row"><span class="sdg sdg-b">SDG 13 — Climate Action</span><span class="sdg sdg-b">SDG 15 — Life on Land</span></div>
        </div>
        <div>
          <div class="pw">
            <img src="https://i.ibb.co/m5TL3gFq/23.png" alt="GreenSchools tree adoption" class="photo" style="min-height:260px">
          </div>
          <p class="cap">Adopt a Tree event with His Grace Demo Farm</p>
        </div>
      </div>
      <div class="gm-row">
        <div class="gm"><div class="gn">1,100</div><div class="gl">Trees Planted &amp; Adopted in 2025</div></div>
        <div class="gm"><div class="gn">2,300</div><div class="gl">Cumulative Since 2024</div></div>
        <div class="gm"><div class="gn" style="font-size:1.1rem">High Retention</div><div class="gl">Via Adopt-a-Tree Model + His Grace Demo Farm</div></div>
      </div>
    </div>
  </div>

  <!-- PUREWATER -->
  <div class="prog" style="margin-top:20px">
    <div class="prog-tag">OSX — Layer 04 — Water &amp; Health</div>
    <div class="two-img-r">
      <div>
        <div class="pw">
          <img src="https://i.ibb.co/m5TL3gFq/23.png" alt="PureWater filter installation" class="photo" style="min-height:240px;filter:grayscale(50%) contrast(1.1)">
        </div>
        <p class="cap">Student planting a tree at school premises</p>
      </div>
      <div>
        <h4>PureWater Initiative</h4>
        <p>Locally manufactured ceramic water filters — removing 99.9% of pathogens — are installed in schools and the homes of the most vulnerable students.</p>
        <p>The impact pathway is clear: <strong>reduced waterborne illness → improved school attendance → enhanced academic stability.</strong></p>
        <ul>
          <li><strong>3,200 students</strong> with consistent access to safe drinking water at school</li>
          <li><strong>65 households</strong> of vulnerable students received filters for home use</li>
          <li><strong>10 schools</strong> fully equipped with filtration systems</li>
        </ul>
        <div class="sdg-row"><span class="sdg sdg-b">SDG 6 — Clean Water</span><span class="sdg sdg-b">SDG 3 — Good Health</span></div>
      </div>
    </div>
  </div>
</div>

<!-- ══ CASE STUDY ══ -->
<div class="page page-dark" style="background:var(--navy)">
  <div class="stag stag-light">Case Study</div>
  <h2 class="ttl" style="color:var(--white)">From Local Leadership<br>to Global Innovation</h2>
  <div class="cs">
    <div class="vw">
      <iframe src="https://www.youtube.com/embed/0Ud29LtmDKk" title="Kyanja High School — Zayed Prize Story" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <div class="cs-inner">
      <div class="cs-badge">Feature Story — Kyanja High School</div>
      <h3>The Ecoloop Project</h3>
      <p>A partner since 2021, Kyanja High School's SLF and Green Team were early adopters of the integrated School Xperience model. Through GreenSchools, students were encouraged to identify local problems and design solutions.</p>
      <p>They observed two critical issues: significant food waste from the school cafeteria, and the high cost of protein-rich feed for student-run livestock. Their answer was the <strong>Ecoloop Project</strong> — a student-designed circular economy system converting organic food waste into high-protein feed for ducks and fish, which supplements the school nutrition programme and generates a small income stream.</p>
      <p>This was not an external idea imposed on the school. It was an organic outcome of an empowered student ecosystem — one ready to see problems differently and act on what it found.</p>
      <div class="prize">
        <strong>Zayed Sustainability Prize — $150,000 — 2025</strong>
        <p>Awarded to Kyanja's student leaders on a global competitive stage. When you provide young people with a leadership platform, environmental awareness, and problem-solving tools, you unlock innovation that can compete with the world.</p>
      </div>
    </div>
  </div>
</div>

<!-- ══ COMMUNITY PROGRAMMES ══ -->
<div class="page page-cream">
  <div class="stag">Programme Report — Community</div>
  <h2 class="ttl">Cross-Cutting<br>Community Programmes</h2>
  <div class="comm-tag">These programmes run across schools and communities — not school-specific</div>
  <p>While OSX is our school-embedded model, a set of cross-cutting programmes operate at both school and community level — reaching young people beyond the school gates and supporting the broader mission of youth leadership and community resilience.</p>

  <h3 class="sub">YoSkills &amp; Youth Action Pathways (YAP)</h3>
  <div class="two">
    <div>
      <p>YoSkills provides certified vocational training in tailoring, hairdressing, and ICT. In 2025, <strong>24 graduates were certified</strong>. Upon graduation they join the <strong>Youth Action Pathways (YAP)</strong> network — young alumni who mentor current students, lead community skills workshops, and support Omuto school programmes as relatable role models.</p>
      <p>In 2025, a priority was placed on building <strong>community core teams</strong> within YAP chapters — small, trained groups embedded in specific communities who coordinate local action, manage relationships with families and local leaders, and serve as on-the-ground anchors between formal programme cycles. This decentralised structure deepens community ownership of our work.</p>
      <div class="sdg-row"><span class="sdg sdg-y">SDG 8 — Decent Work</span><span class="sdg sdg-y">SDG 10 — Reduced Inequalities</span></div>
    </div>
    <div>
      <div class="pw">
        <img src="https://i.ibb.co/wrPnfcKG/21.png" alt="YoSkills graduates" class="photo" style="min-height:260px">
      </div>
      <p class="cap">YoSkills graduation or YAP community core team</p>
    </div>
  </div>

  <h3 class="sub">Sport for Development — Omuto Football Alliance (OFA)</h3>
  <div class="two-img-r" style="margin-top:16px">
    <div>
      <div class="pw">
        <img src="https://i.ibb.co/whj2bMb6/22.png" alt="OFA football" class="photo" style="min-height:260px">
      </div>
      <p class="cap">OFA match day or Red Cross first aid training</p>
    </div>
    <div>
      <p>With <strong>18 active teams</strong> across Mpigi and Butambala, the OFA uses football to create structured, positive peer networks. Matches and training provide platforms for discipline, identity, community belonging, and health messaging.</p>
      <p>A major 2025 development was a formal collaboration with <strong>Red Cross Mpigi</strong>, delivering health training — focused on <strong>first aid</strong> — to team doctors across partner schools. In parallel, Omuto trained <strong>5 team captains in leadership skills</strong> and <strong>5 coaches in mobile phone use</strong> to help them promote their teams and connect with peers across districts.</p>
    </div>
  </div>

  <h3 class="sub">Youth Media — Omuto Pulse</h3>
  <div class="two-img" style="margin-top:16px">
    <div>
      <p>Omuto Pulse is our digital youth media platform, extending leadership development and community voice beyond physical boundaries. With <strong>4,750+ subscribers</strong> on YouTube, it provides a space for youth-led debate on community issues, creative storytelling, journalism, and peer-to-peer health advocacy.</p>
      <p>Pulse serves all programme areas and cohorts — it is the connective tissue that amplifies voices across the full Omuto ecosystem.</p>
      <a href="https://www.youtube.com/@omutopulse" target="_blank" style="display:inline-block;background:var(--red);color:white;border:2px solid var(--navy);padding:10px 20px;font-family:'Space Grotesk',sans-serif;font-weight:900;font-size:.72rem;letter-spacing:1.5px;text-transform:uppercase;text-decoration:none;box-shadow:var(--ssm)">Watch on YouTube</a>
    </div>
    <div>
      <div class="vw">
        <iframe src="https://www.youtube.com/embed/CdMBDRVExaA" title="Omuto Pulse" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</div>

<!-- ══ FINANCIALS ══ -->
<div class="page page-white">
  <div class="stag">Financial Report</div>
  <h2 class="ttl">Stewardship &amp;<br>Accountability</h2>
  <p>Omuto Foundation is committed to the highest standards of financial transparency, ensuring every dollar maximises impact for the youth we serve.</p>
  <div class="pie-section">
    <svg class="pie" viewBox="0 0 200 200">
      <circle cx="100" cy="100" r="70" fill="none" stroke="#EE2726" stroke-width="40" stroke-dasharray="197.92 282.74" transform="rotate(-90 100 100)"/>
      <circle cx="100" cy="100" r="70" fill="none" stroke="#FFCF5D" stroke-width="40" stroke-dasharray="56.55 282.74" stroke-dashoffset="-197.92" transform="rotate(-90 100 100)"/>
      <circle cx="100" cy="100" r="70" fill="none" stroke="#1D2631" stroke-width="40" stroke-dasharray="28.27 282.74" stroke-dashoffset="-254.47" transform="rotate(-90 100 100)"/>
      <circle cx="100" cy="100" r="62" fill="none" stroke="#1D2631" stroke-width="4"/>
      <text x="100" y="94" text-anchor="middle" font-family="Space Grotesk,sans-serif" font-size="20" fill="#1D2631" font-weight="900">2025</text>
      <text x="100" y="112" text-anchor="middle" font-family="Inter,sans-serif" font-size="9" fill="#6B7280">Expenditure</text>
    </svg>
    <div class="leg">
      <div class="leg-item"><div class="leg-dot" style="background:#EE2726"></div><div class="leg-label"><strong>70% — Programme Delivery</strong><span>Direct investment in training, materials, and school support</span></div></div>
      <div class="leg-item"><div class="leg-dot" style="background:#FFCF5D;border-color:#1D2631"></div><div class="leg-label"><strong>20% — Operations &amp; Staff</strong><span>A lean, effective team managing and scaling programmes</span></div></div>
      <div class="leg-item"><div class="leg-dot" style="background:#1D2631"></div><div class="leg-label"><strong>10% — Enterprise Reinvestment</strong><span>Capital reinvested into Omuto Essentials production capacity</span></div></div>
    </div>
  </div>
  <h3 class="sub">Omuto Essentials — Social Enterprise</h3>
  <p>Our mission-driven social enterprise produces reusable menstrual pads, ceramic water filters, and community hygiene products. In 2025, Essentials covered <strong>10% of total operational costs</strong>, with all profits reinvested into Foundation programmes. This enterprise model is central to our long-term strategy of reducing donor dependency.</p>
  <h3 class="sub">Governance &amp; Compliance</h3>
  <ul>
    <li><strong>Registered National NGO</strong> in Uganda, in full compliance with national regulations</li>
    <li><strong>Data Protection certified</strong> — compliant with Uganda's Personal Data Protection Office (PDPO)</li>
    <li><strong>Active MOUs</strong> with all 8 partner schools and district local government offices in Mpigi and Butambala</li>
    <li>Governed by an <strong>active Board of Directors</strong> providing strategic and fiduciary oversight</li>
    <li>Subject to <strong>annual independent financial audits</strong>, available to partners upon request</li>
  </ul>
</div>

<!-- ══ 2026 STRATEGY ══ -->
<div class="page page-cream">
  <div class="stag">Looking Ahead</div>
  <h2 class="ttl">2026: Disciplined<br><span style="color:var(--red)">Expansion</span></h2>
  <p>If 2025 was the year of consolidation and model refinement, 2026 is the year of disciplined, data-driven expansion. Growth will prioritise depth of impact in new schools and communities over the sheer speed of scaling.</p>
  <div class="targets">
    <div class="tgt"><div class="tn">20</div><p><strong>Partner Schools</strong> — expanding from 8 across Mpigi and Butambala</p></div>
    <div class="tgt"><div class="tn">15–20%</div><p><strong>Operational self-funding</strong> — growing Omuto Essentials revenue contribution</p></div>
    <div class="tgt"><div class="tn">MEL</div><p><strong>Deeper Evidence</strong> — strengthening monitoring &amp; evaluation for long-term outcomes</p></div>
    <div class="tgt"><div class="tn">Gov</div><p><strong>Systems Integration</strong> — co-creating frameworks with district education offices</p></div>
    <div class="tgt"><div class="tn">CMA</div><p><strong>Changemakers Academy</strong> — beginning formalisation of the intern-to-professional pipeline</p></div>
  </div>
  <div class="pq">We are building a model that is not just effective, but enduring — one that outlasts any single donor relationship, any single programme cycle, and any single year.<cite>— McMike Mutumba, Founder &amp; Executive Director</cite></div>
</div>

<!-- ══ CLOSING ══ -->
<div class="closing">
  <div class="stag stag-light" style="justify-content:center">Closing Reflection</div>
  <h2><span>Action</span> Is Power.</h2>
  <p>Five years ago, Omuto Foundation was an idea — a belief in the dormant power of rural youth. Today it is a functioning, data-informed, and scalable institutional model.</p>
  <p>When you provide the platform, the training, and the trust, young people do not wait for permission to create change. They build it — inside their classrooms, on their football fields, through their community enterprises, and on global stages.</p>
  <p class="sketch" style="font-size:1.3rem;color:rgba(255,255,255,.45);margin-bottom:36px">In rural Uganda, its youth are acting.</p>
  <div class="pw" style="max-width:700px;margin:0 auto;box-shadow:var(--slg)">
    <img src="https://i.ibb.co/5Ds8wWH/youth.png" alt="Omuto youth community" class="photo" style="min-height:340px">
  </div>
  <p class="cap" style="max-width:700px;margin:12px auto 0;color:rgba(255,255,255,.4)">students, staff, interns &amp; community members</p>
</div>

<!-- ══ BACK COVER ══ -->
<div class="red-bar"></div>
<div class="back">
  <div>
    <img src="https://i.imgur.com/onkikq1.png" alt="Omuto Foundation" style="height:52px;margin-bottom:20px;filter:brightness(0) invert(1)">
    <p>Activating and amplifying youth leadership in rural Uganda through structured, measurable systems embedded within educational environments and communities.</p>
    <p style="font-family:'Gochi Hand',cursive;font-size:1.2rem;color:var(--yellow);margin-top:8px;margin-bottom:20px">Action is Power.</p>
    <h3>Contact Us</h3>
    <a href="https://www.omuto.org">www.omuto.org</a>
    <a href="mailto:info@omuto.org">info@omuto.org</a>
    <a href="https://wa.me/256750028703">WhatsApp: +256 750 028 703</a>
    <a href="https://www.youtube.com/@omutopulse">YouTube: @omutopulse</a>
    <a href="https://www.globalgiving.org/donate/82476/omuto-foundation/">Support via GlobalGiving</a>
    <p style="margin-top:8px">Kanakulya Road, Kampala</p>
    <p>Mpigi District | Butambala District, Uganda</p>
  </div>
  <div>
    <h3>Our Programmes</h3>
    <p>Omuto School Xperience (OSX)</p>
    <p>Student Leaders Forum (SLF)</p>
    <p>RED Campaign</p>
    <p>GreenSchools Initiative</p>
    <p>PureWater Initiative</p>
    <p>Youth Action Pathways (YAP)</p>
    <p>Omuto Football Alliance (OFA)</p>
    <p>Omuto Pulse</p>
    <p>YoSkills</p>
    <p>Omuto Essentials</p>
  </div>
  <div>
    <h3>Support Our Work</h3>
    <p>To partner with or support Omuto Foundation, contact us via email or visit our website for bank details and partnership opportunities.</p>
    <h3 style="margin-top:24px">Safeguarding</h3>
    <p>Omuto Foundation is committed to the safeguarding and protection of all children and young people with whom we work. Our policies ensure their safety and well-being are always paramount.</p>
    <h3 style="margin-top:24px">Accountability</h3>
    <p>Registered National NGO — Uganda. PDPO Data Protection Certified. Annual independent audits.</p>
  </div>
  <div class="bc-div"></div>
  <div class="bc-foot">
    <span>© Omuto Foundation 2025. All rights reserved.</span>
    <span>Registered National NGO — Uganda</span>
    <span>PDPO Certified</span>
  </div>
</div>

</body>
</html>