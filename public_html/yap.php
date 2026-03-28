<?php
$page_title      = "Youth Action Pathway | Omuto Foundation";
$page_desc       = "YAP Chapters turn informal youth groups into structured community action hubs — building enterprise, financial literacy, and access to real opportunity across Mpigi and Butambala.";
$page_canonical  = "https://omuto.org/yap";
$page_active_nav = "work";

$page_extra_css = '<style>

/* ═══════════════════════════════════════════════════
   YAP.PHP — Youth Action Pathway
   FIXES vs previous version:
   · No border-radius on grid components
   · No btn-teal (not in global CSS)
   · No emojis used as icons
   · No dead CSS sections
   · Section rhythm: navy / cream / white / navy / white / cream / navy
   · #yap-now uses .yn-h .yn-body classes, not bare h2/p
   · CTA on navy bg, eyebrow uses ew-white
   · Copy rewritten — no rhetorical AI fragments
   ═══════════════════════════════════════════════════ */

/* ─── 1. HERO ─── */
#yap-hero {
  min-height: 88svh;
  background: var(--navy);
  position: relative; overflow: hidden;
  border-bottom: var(--b);
}
.yh-dots {
  position: absolute; inset: 0; z-index: 0;
  background-image: radial-gradient(circle, rgba(255,255,255,.04) 1px, transparent 1px);
  background-size: 22px 22px; pointer-events: none;
}
/* split layout */
.yh-split {
  display: grid; grid-template-columns: 1fr 420px;
  min-height: 88svh; position: relative; z-index: 1;
}
.yh-left {
  display: flex; flex-direction: column; justify-content: flex-end;
  padding: 52px 48px 0; border-right: var(--b);
}
.yh-right { display: flex; flex-direction: column; overflow: hidden; }
.yh-photo {
  flex: 1; overflow: hidden; position: relative; border-bottom: var(--b);
}
.yh-photo:last-child { border-bottom: none; }
.yh-photo img {
  width: 100%; height: 100%; object-fit: cover; display: block;
  filter: grayscale(20%) brightness(.78); transition: filter .5s;
}
.yh-photo:hover img { filter: grayscale(0%) brightness(.92); }
.yh-photo-lbl {
  position: absolute; bottom: 0; left: 0; right: 0;
  background: linear-gradient(transparent, rgba(29,38,49,.88));
  padding: 28px 16px 12px;
  font-family: var(--font-ui); font-size: 8px; font-weight: 700;
  text-transform: uppercase; letter-spacing: .18em; color: rgba(255,255,255,.65);
}
.yh-tag {
  font-family: var(--font-ui); font-size: 10px; font-weight: 700;
  text-transform: uppercase; letter-spacing: .28em;
  color: rgba(255,255,255,.35); display: block; margin-bottom: 18px;
}
.yh-h1 {
  font-family: var(--font-head); font-size: clamp(48px, 8vw, 104px);
  font-weight: 900; line-height: .88;
  letter-spacing: -.04em; text-transform: uppercase; color: #fff;
}
.yh-h1 em { font-style: italic; color: var(--teal); }
.yh-sub {
  font-size: clamp(14px, 1.5vw, 18px); font-weight: 500;
  color: rgba(255,255,255,.55); line-height: 1.75;
  max-width: 480px; margin: 18px 0 28px;
}
.yh-btns { display: flex; gap: 12px; flex-wrap: wrap; padding-bottom: 48px; }
.yh-strip {
  display: grid; grid-template-columns: repeat(4, 1fr);
  border-top: 1px solid rgba(255,255,255,.1);
}
.yh-cell { padding: 20px 0; border-right: 1px solid rgba(255,255,255,.06); }
.yh-cell:last-child { border-right: none; }
.yh-cell + .yh-cell { padding-left: 20px; }
.yh-num {
  font-family: var(--font-head); font-size: clamp(18px,2.4vw,30px);
  font-weight: 900; line-height: 1; display: block; color: var(--yellow);
}
.yh-lbl {
  font-family: var(--font-ui); font-size: 8px; font-weight: 700;
  text-transform: uppercase; letter-spacing: .16em;
  display: block; margin-top: 4px; color: rgba(255,255,255,.28);
}
@media(max-width:900px){
  .yh-split { grid-template-columns: 1fr; min-height: auto; }
  .yh-left  { border-right: none; border-bottom: var(--b); padding: 40px 20px; }
  .yh-right { flex-direction: row; height: 280px; }
  .yh-photo { border-bottom: none; border-right: var(--b); }
  .yh-photo:last-child { border-right: none; }
}
/* ─── PHOTO BREAK (between pillars and different) ─── */
#yap-photobreak {
  display: grid; grid-template-columns: 2fr 1fr 1fr;
  height: 320px; border-top: var(--b); border-bottom: var(--b); overflow: hidden;
}
.ypb {
  overflow: hidden; border-right: var(--b); position: relative;
}
.ypb:last-child { border-right: none; }
.ypb img {
  width: 100%; height: 100%; object-fit: cover; display: block;
  transition: transform .5s ease, filter .4s; filter: grayscale(15%);
}
.ypb:hover img { transform: scale(1.05); filter: grayscale(0%); }
.ypb-lbl {
  position: absolute; bottom: 0; left: 0; right: 0;
  background: linear-gradient(transparent, rgba(29,38,49,.88));
  padding: 28px 14px 12px;
  font-family: var(--font-ui); font-size: 8px; font-weight: 700;
  text-transform: uppercase; letter-spacing: .16em; color: rgba(255,255,255,.72);
  transform: translateY(100%); transition: transform .28s ease;
}
.ypb:hover .ypb-lbl { transform: translateY(0); }
@media(max-width:700px){
  #yap-photobreak { grid-template-columns: 1fr 1fr; height: auto; }
  .ypb { height: 180px; }
  .ypb:nth-child(3){ border-right: none; border-top: var(--b); }
  .ypb-lbl { transform: translateY(0); }
}

/* ─── 2. WHAT IS YAP  (cream) ─── */
#yap-what {
  background: var(--cream);
  padding: 88px 0; border-bottom: var(--b);
  position: relative; overflow: hidden;
}
.yw-wm {
  position: absolute; top: 10px; right: -20px;
  font-family: var(--font-head); font-size: clamp(90px,14vw,170px);
  font-weight: 900; color: rgba(29,38,49,.04); letter-spacing: -.05em;
  pointer-events: none; user-select: none; white-space: nowrap;
}
.yw-grid {
  display: grid; grid-template-columns: 1fr 1fr;
  gap: 72px; align-items: start; position: relative; z-index: 2;
}
.yw-pull {
  font-family: var(--font-head); font-size: clamp(20px,2.8vw,32px);
  font-weight: 900; line-height: 1.2; font-style: italic;
  color: var(--navy); margin-bottom: 24px;
}
.yw-pull .red { color: var(--red); }
.yw-body {
  font-size: 16px; line-height: 1.85; font-weight: 500;
  color: rgba(29,38,49,.72);
}
.yw-body p + p { margin-top: 16px; }
.group-list {
  display: flex; flex-direction: column;
  border: var(--b); overflow: hidden; box-shadow: var(--shadow);
  margin-top: 32px;
}
.group-row {
  display: flex; align-items: flex-start; gap: 18px;
  padding: 16px 20px; border-bottom: var(--b);
  background: #fff; transition: background .15s;
}
.group-row:last-child { border-bottom: none; }
.group-row:hover { background: var(--cream); }
.group-tag {
  font-family: var(--font-ui); font-size: 8px; font-weight: 700;
  text-transform: uppercase; letter-spacing: .14em;
  padding: 3px 10px; border: var(--b-thin); flex-shrink: 0;
  margin-top: 2px; white-space: nowrap; color: var(--navy);
}
.group-text { font-size: 14px; font-weight: 600; color: var(--navy); line-height: 1.4; }
.group-text span { display: block; font-size: 11px; font-weight: 500; opacity: .5; margin-top: 2px; }
/* right: before / after */
.yw-right { display: flex; flex-direction: column; }
.yw-problem {
  background: var(--navy); border: var(--b);
  padding: 28px 28px 0; box-shadow: var(--shadow);
}
.yw-problem-h {
  font-family: var(--font-head); font-size: 12px; font-weight: 900;
  text-transform: uppercase; letter-spacing: .1em;
  color: rgba(255,255,255,.38); margin-bottom: 18px;
}
.yw-prob-row {
  padding: 14px 0; border-bottom: 1px solid rgba(255,255,255,.08);
  display: flex; align-items: flex-start; gap: 12px;
}
.yw-prob-row:last-child { border-bottom: none; padding-bottom: 24px; }
.yw-prob-x { font-family: var(--font-head); font-size: 13px; font-weight: 900; color: var(--red); flex-shrink: 0; }
.yw-prob-text { font-size: 13px; font-weight: 600; color: rgba(255,255,255,.62); line-height: 1.45; }
.yw-arrow {
  background: var(--teal); border: var(--b); border-top: none;
  padding: 14px 28px; display: flex; align-items: center; gap: 12px;
}
.yw-arrow-text {
  font-family: var(--font-head); font-size: 13px; font-weight: 900;
  text-transform: uppercase; font-style: italic; color: var(--navy);
}
.yw-after {
  background: var(--cream); border: var(--b); border-top: none; overflow: hidden;
}
.yw-after-row {
  padding: 13px 20px; border-bottom: var(--b);
  display: flex; align-items: center; gap: 12px;
  background: var(--cream); transition: background .15s;
}
.yw-after-row:last-child { border-bottom: none; }
.yw-after-row:hover { background: #fff; }
.yw-tick {
  font-family: var(--font-head); font-size: 13px; font-weight: 900;
  color: var(--teal); flex-shrink: 0;
}
.yw-after-text { font-size: 13px; font-weight: 700; color: var(--navy); }
@media(max-width:900px){ .yw-grid { grid-template-columns: 1fr; gap: 40px; } }

/* ─── 3. PILLARS  (white) ─── */
#yap-pillars {
  background: #fff;
  padding: 88px 0; border-bottom: var(--b);
}
.pillar-track {
  display: grid; grid-template-columns: repeat(4, 1fr);
  border: var(--b); overflow: hidden; box-shadow: var(--shadow);
  margin-top: 48px;
}
.pillar {
  padding: 36px 26px; border-right: var(--b);
  display: flex; flex-direction: column;
  transition: background .18s;
}
.pillar:last-child { border-right: none; }
.pillar:hover { background: var(--cream); }
.pillar-bar { width: 100%; height: 4px; margin-bottom: 20px; }
.pillar:nth-child(1) .pillar-bar { background: var(--navy); }
.pillar:nth-child(2) .pillar-bar { background: var(--teal); }
.pillar:nth-child(3) .pillar-bar { background: var(--gold); }
.pillar:nth-child(4) .pillar-bar { background: var(--red); }
.pillar-num {
  font-family: var(--font-head); font-size: clamp(22px,2.5vw,30px);
  font-weight: 900; font-style: italic; line-height: 1; margin-bottom: 12px;
}
.pillar:nth-child(1) .pillar-num { color: var(--navy); }
.pillar:nth-child(2) .pillar-num { color: var(--teal); }
.pillar:nth-child(3) .pillar-num { color: var(--gold); }
.pillar:nth-child(4) .pillar-num { color: var(--red); }
.pillar-name {
  font-family: var(--font-head); font-size: 13px; font-weight: 800;
  text-transform: uppercase; letter-spacing: .06em; margin-bottom: 10px;
}
.pillar-desc {
  font-size: 13px; font-weight: 500; color: rgba(29,38,49,.62);
  line-height: 1.65; margin-bottom: 20px; flex: 1;
}
.pillar-items { display: flex; flex-direction: column; gap: 6px; }
.pillar-item {
  font-size: 11px; font-weight: 600; color: rgba(29,38,49,.58);
  display: flex; align-items: flex-start; gap: 7px; line-height: 1.4;
}
.pillar-item::before { content: "—"; flex-shrink: 0; opacity: .4; font-size: 9px; margin-top: 2px; }
@media(max-width:900px){
  .pillar-track { grid-template-columns: 1fr 1fr; }
  .pillar:nth-child(2n){ border-right: none; }
  .pillar:nth-child(n+3){ border-top: var(--b); }
}
@media(max-width:480px){
  .pillar-track { grid-template-columns: 1fr; }
  .pillar { border-right: none !important; border-top: var(--b) !important; }
  .pillar:first-child { border-top: none !important; }
}

/* ─── 4. WHAT MAKES YAP DIFFERENT  (navy) ─── */
#yap-different {
  background: var(--navy);
  padding: 88px 0; border-bottom: var(--b);
  position: relative; overflow: hidden;
}
.yd-grid {
  display: grid; grid-template-columns: 1fr 1fr;
  gap: 72px; align-items: center; position: relative; z-index: 2;
}
.yd-big {
  font-family: var(--font-head); font-size: clamp(26px,3.8vw,46px);
  font-weight: 900; line-height: 1.1; font-style: italic; color: #fff;
}
.yd-big .teal   { color: var(--teal); }
.yd-big .yellow { color: var(--yellow); }
.yd-body {
  font-size: 15px; line-height: 1.85; font-weight: 500;
  color: rgba(255,255,255,.55); margin-top: 22px;
}
.yd-body p + p { margin-top: 14px; }
.diff-list {
  display: flex; flex-direction: column;
  border: var(--b-thin); border-color: rgba(255,255,255,.12); overflow: hidden;
}
.diff-row {
  padding: 18px 22px; border-bottom: 1px solid rgba(255,255,255,.08);
  display: flex; align-items: flex-start; gap: 16px;
  transition: background .15s;
}
.diff-row:last-child { border-bottom: none; }
.diff-row:hover { background: rgba(255,255,255,.04); }
.diff-vs { display: flex; flex-direction: column; gap: 4px; flex: 1; }
.diff-bad {
  font-size: 11px; font-weight: 600; color: rgba(255,255,255,.28);
  text-decoration: line-through; line-height: 1.4;
}
.diff-good { font-size: 14px; font-weight: 700; color: #fff; line-height: 1.4; }
.diff-good .teal { color: var(--teal); }
@media(max-width:900px){ .yd-grid { grid-template-columns: 1fr; gap: 40px; } }

/* ─── 5. IMPACT AREAS  (cream) ─── */
#yap-impact {
  background: var(--cream);
  padding: 88px 0; border-bottom: var(--b);
  position: relative; overflow: hidden;
}
.impact-wm-yap {
  position: absolute; bottom: -10px; left: -20px;
  font-family: var(--font-head); font-size: clamp(90px,14vw,170px);
  font-weight: 900; color: rgba(29,38,49,.04); letter-spacing: -.05em;
  pointer-events: none; user-select: none; white-space: nowrap;
}
.impact-hex {
  display: grid; grid-template-columns: repeat(3, 1fr);
  border: var(--b); overflow: hidden; box-shadow: var(--shadow);
  margin-top: 48px; position: relative; z-index: 2;
}
.ihex {
  padding: 32px 28px; border-right: var(--b); border-bottom: var(--b);
  display: flex; flex-direction: column; gap: 10px;
  background: #fff; transition: background .18s;
}
.ihex:nth-child(3n){ border-right: none; }
.ihex:nth-last-child(-n+3){ border-bottom: none; }
.ihex:hover { background: var(--cream); }
.ihex-num {
  font-family: var(--font-head); font-size: 10px; font-weight: 900;
  text-transform: uppercase; letter-spacing: .12em;
  color: rgba(29,38,49,.25);
}
.ihex-name {
  font-family: var(--font-head); font-size: 15px; font-weight: 900;
  text-transform: uppercase; font-style: italic; line-height: 1;
}
.ihex-desc {
  font-size: 13px; font-weight: 500; color: rgba(29,38,49,.6); line-height: 1.6;
}
@media(max-width:760px){
  .impact-hex { grid-template-columns: 1fr 1fr; }
  .ihex:nth-child(3n){ border-right: var(--b); }
  .ihex:nth-child(2n){ border-right: none; }
  .ihex:nth-last-child(-n+3){ border-bottom: var(--b); }
  .ihex:last-child{ border-bottom: none !important; border-right: none !important; }
}
@media(max-width:480px){
  .impact-hex { grid-template-columns: 1fr; }
  .ihex { border-right: none !important; }
  .ihex:last-child{ border-bottom: none; }
}

/* ─── 6. WHERE WE ARE NOW  (white — replaces yellow bg) ─── */
#yap-now {
  background: #fff;
  padding: 88px 0; border-bottom: var(--b);
}
.yn-grid {
  display: grid; grid-template-columns: 1fr 1fr;
  gap: 72px; align-items: start;
}
.yn-h {
  font-family: var(--font-head); font-size: clamp(30px,4.5vw,54px);
  font-weight: 900; line-height: .92; text-transform: uppercase;
  font-style: italic; color: var(--navy); margin: 16px 0 20px;
}
.yn-h span { color: var(--red); }
.yn-body {
  font-size: 15px; font-weight: 500; line-height: 1.8;
  color: rgba(29,38,49,.7); margin-bottom: 24px;
}
.yn-status {
  display: flex; flex-direction: column;
  border: var(--b); overflow: hidden; box-shadow: var(--shadow);
}
.yn-row {
  padding: 15px 20px; border-bottom: var(--b);
  display: flex; align-items: center; gap: 14px;
  background: #fff; transition: background .15s;
}
.yn-row:last-child { border-bottom: none; }
.yn-row:hover { background: var(--cream); }
.yn-dot {
  width: 10px; height: 10px; border-radius: 50%; flex-shrink: 0;
  background: var(--teal); border: 2px solid var(--navy);
}
.yn-dot.pending { background: var(--gold); }
.yn-row-text { font-size: 13px; font-weight: 700; color: var(--navy); }
.yn-legend { font-size: 11px; font-style: italic; opacity: .38; margin-top: 12px; }
/* right: vision box */
.yn-vision {
  background: var(--navy); border: var(--b); padding: 36px; box-shadow: var(--shadow);
}
.yn-vision-eyebrow {
  font-family: var(--font-ui); font-size: 9px; font-weight: 700;
  text-transform: uppercase; letter-spacing: .22em;
  color: rgba(255,255,255,.35); display: block; margin-bottom: 16px;
}
.yn-vision-h {
  font-family: var(--font-head); font-size: clamp(18px,2.2vw,26px);
  font-weight: 900; font-style: italic; line-height: 1.1; color: #fff; margin-bottom: 20px;
}
.yn-vision-h .yellow { color: var(--yellow); }
.yn-v-list { display: flex; flex-direction: column; gap: 10px; }
.yn-v-row {
  display: flex; align-items: flex-start; gap: 14px;
  padding: 14px 16px; background: rgba(255,255,255,.05);
  border: 1px solid rgba(255,255,255,.08);
}
.yn-v-label {
  font-family: var(--font-head); font-size: 11px; font-weight: 900;
  text-transform: uppercase; letter-spacing: .06em;
  color: var(--teal); flex-shrink: 0; min-width: 88px; padding-top: 2px;
}
.yn-v-text { font-size: 13px; font-weight: 500; color: rgba(255,255,255,.62); line-height: 1.55; }
.yn-closing {
  font-family: var(--font-head); font-size: 11px; font-weight: 900;
  text-transform: uppercase; font-style: italic;
  color: rgba(255,255,255,.25); margin-top: 18px; letter-spacing: .06em;
}
@media(max-width:900px){ .yn-grid { grid-template-columns: 1fr; gap: 40px; } }

/* ─── 7. GET INVOLVED  (cream) ─── */
#yap-join {
  background: var(--cream);
  padding: 88px 0; border-bottom: var(--b);
}
.join-grid {
  display: grid; grid-template-columns: repeat(3, 1fr);
  border: var(--b); overflow: hidden; box-shadow: var(--shadow);
  margin-top: 48px;
}
.jcard {
  padding: 36px 28px; border-right: var(--b);
  display: flex; flex-direction: column; transition: filter .2s;
}
.jcard:last-child { border-right: none; }
.jcard:hover { filter: brightness(.97); }
.jcard.jc-navy   { background: var(--navy); }
.jcard.jc-teal   { background: var(--teal); }
.jcard.jc-yellow { background: var(--yellow); }
.jc-tag {
  font-family: var(--font-head); font-size: 10px; font-weight: 900;
  text-transform: uppercase; letter-spacing: .1em; opacity: .32;
  display: block; margin-bottom: 14px;
}
.jcard.jc-navy .jc-tag { color: #fff; opacity: .45; }
.jc-h {
  font-family: var(--font-head); font-size: clamp(18px,2vw,24px);
  font-weight: 900; text-transform: uppercase; font-style: italic;
  line-height: 1; margin-bottom: 12px;
}
.jcard.jc-navy .jc-h { color: #fff; }
.jc-body {
  font-size: 14px; line-height: 1.8; font-weight: 500;
  color: rgba(29,38,49,.7); flex: 1; margin-bottom: 24px;
}
.jcard.jc-navy .jc-body { color: rgba(255,255,255,.72); }
.jc-list { display: flex; flex-direction: column; gap: 7px; margin-bottom: 22px; }
.jc-li {
  font-size: 12px; font-weight: 600; color: rgba(29,38,49,.65);
  display: flex; align-items: flex-start; gap: 8px; line-height: 1.4;
}
.jcard.jc-navy .jc-li { color: rgba(255,255,255,.65); }
.jc-li::before { content: "—"; flex-shrink: 0; opacity: .4; font-size: 9px; margin-top: 2px; }
@media(max-width:760px){
  .join-grid { grid-template-columns: 1fr; }
  .jcard { border-right: none; border-bottom: var(--b); }
  .jcard:last-child { border-bottom: none; }
}

/* ─── 8. FINAL CTA  (navy — replaces broken teal bg) ─── */
#yap-cta {
  background: var(--navy);
  padding: 88px 0; border-top: var(--b);
  position: relative; overflow: hidden;
}
#yap-cta .halftone { opacity: .05; }
.yap-cta-inner {
  text-align: center; position: relative; z-index: 2;
  max-width: 540px; margin: 0 auto;
}
.yap-cta-h {
  font-family: var(--font-head);
  font-size: clamp(32px,5vw,64px);
  font-weight: 900; line-height: .92; text-transform: uppercase;
  font-style: italic; color: #fff; margin: 16px 0 16px; letter-spacing: -.02em;
}
.yap-cta-h em { color: var(--teal); font-style: italic; }
.yap-cta-p {
  font-size: 17px; font-weight: 500;
  color: rgba(255,255,255,.62); margin-bottom: 32px; line-height: 1.65;
}
.yap-cta-btns { display: flex; flex-wrap: wrap; gap: 12px; justify-content: center; }
.yap-cta-note {
  font-size: 11px; font-weight: 600; font-style: italic;
  color: rgba(255,255,255,.28); margin-top: 20px;
}

</style>';

include 'header.php';
?>

<main style="padding-top:calc(var(--ticker-h) + 70px)">

<!-- ① HERO -->
<section id="yap-hero">
  <div class="yh-dots"></div>
  <div class="yh-split">

    <!-- LEFT — text -->
    <div class="yh-left reveal">
      <span class="yh-tag">Omuto Foundation · Youth Action Pathway · Mpigi &amp; Butambala</span>
      <h1 class="yh-h1">From Circles<br/>to <em>Action.</em></h1>
      <p class="yh-sub">YAP Chapters give existing youth groups the structure, skills, and financial linkages to become self-sustaining community enterprises — not dependent on Omuto, but built by it.</p>
      <div class="yh-btns">
        <a href="#yap-join" class="btn btn-white">Start or Join a Chapter →</a>
        <a href="campaign.php" class="btn btn-outline-white">Fund a Chapter</a>
      </div>
      <div class="yh-strip">
        <div class="yh-cell">
          <span class="yh-num">2</span>
          <span class="yh-lbl">Active Chapters</span>
        </div>
        <div class="yh-cell">
          <span class="yh-num">Buwama</span>
          <span class="yh-lbl">&amp; Kayabwe</span>
        </div>
        <div class="yh-cell">
          <span class="yh-num">2021</span>
          <span class="yh-lbl">Since</span>
        </div>
        <div class="yh-cell">
          <span class="yh-num">Mpigi</span>
          <span class="yh-lbl">→ Butambala</span>
        </div>
      </div>
    </div>

    <!-- RIGHT — stacked photos -->
    <div class="yh-right">
      <div class="yh-photo">
        <img src="https://scontent.ftlv19-2.fna.fbcdn.net/v/t39.30808-6/477940217_671916558491443_7957135059882538200_n.jpg?stp=c342.0.1365.1365a_dst-jpg_s552x414_tt6&_nc_cat=111&ccb=1-7&_nc_sid=a934a8&_nc_ohc=wSDH5J_SOb4Q7kNvwFCEAUK&_nc_oc=AdmzmRG34iH4b-cJlh7aWw3xej4AiV0dKA-DtyAsgLGhpp1kO3_2cjKrJg22T0p2wuzklWnLJRLpz_ZWCAQMAd-d&_nc_zt=23&_nc_ht=scontent.ftlv19-2.fna&_nc_gid=RiBdIZtRux0NN770X89YRg&_nc_ss=8&oh=00_Afy6tYCg54AA1eI6BpmGLpYzPZ5XedGLu4vs78IPIEscNw&oe=69B0EB65" alt="Omuto youth community action" loading="eager"/>
        <span class="yh-photo-lbl">Buwama Chapter · Community session</span>
      </div>
      <div class="yh-photo">
        <img src="https://scontent.ftlv19-3.fna.fbcdn.net/v/t39.30808-6/477706515_671916935158072_8058576344640873414_n.jpg?stp=c342.0.1365.1365a_dst-jpg_s552x414_tt6&_nc_cat=107&ccb=1-7&_nc_sid=a934a8&_nc_ohc=h1dWoGxWzLUQ7kNvwFFU0j4&_nc_oc=AdkuIAhDLgOpDXnUrIQ9WKmPWcSdW0hJ_uMYvWe0gcTZwEnRcefy5ADoSAWvow0CZSF8yAk5BSWnKJNvSG2mGOcY&_nc_zt=23&_nc_ht=scontent.ftlv19-3.fna&_nc_gid=0xXfcMYurO6zGwkMUC_0OA&_nc_ss=8&oh=00_AfxeIGFOzLGf-Rzk6ISuX7EmSASUV0R90JxKomiigel8eQ&oe=69B0F1DF" alt="Youth-led project work" loading="eager"/>
        <span class="yh-photo-lbl">Kayabwe Chapter · Project work</span>
      </div>
    </div>

  </div>
</section>

<!-- ② WHAT IS YAP  (cream) -->
<section id="yap-what">
  <span class="yw-wm" aria-hidden="true">YAP</span>
  <div class="container">
    <div class="yw-grid">

      <!-- LEFT -->
      <div class="reveal">
        <span class="eyebrow ew-red" style="margin-bottom:24px">The Gap We Fill</span>
        <p class="yw-pull">The groups already exist.<br/>Most just stay <span class="red">small.</span></p>
        <div class="yw-body">
          <p>Savings circles, church groups, football teams, informal youth meetups — the social fabric is already there across Mpigi and Butambala. Young people are gathering. They are committed. They already meet regularly.</p>
          <p>But without structure, most of these groups save money they never invest, meet without producing anything, and miss government programmes they have never heard of. YAP changes that — by giving existing groups a framework that actually works.</p>
        </div>
        <div class="group-list">
          <div class="group-row">
            <span class="group-tag">Savings</span>
            <div class="group-text">Village savings circles <span>Strong discipline — but no path to investment or enterprise</span></div>
          </div>
          <div class="group-row">
            <span class="group-tag">Faith</span>
            <div class="group-text">Church and faith groups <span>High trust and attendance — but limited action focus</span></div>
          </div>
          <div class="group-row">
            <span class="group-tag">Sports</span>
            <div class="group-text">Football and sports teams <span>Built-in structure and cohesion — rarely connected to opportunity</span></div>
          </div>
          <div class="group-row">
            <span class="group-tag">Informal</span>
            <div class="group-text">General youth meetups <span>Regular gatherings — no accountability or growth plan</span></div>
          </div>
          <div class="group-row">
            <span class="group-tag">Graduates</span>
            <div class="group-text">YoSkills programme graduates <span>Trained and ready — need a structured home to apply skills</span></div>
          </div>
        </div>
      </div>

      <!-- RIGHT — before / after -->
      <div class="yw-right reveal rd2">
        <div class="yw-problem">
          <p class="yw-problem-h">Without YAP, groups stay stuck:</p>
          <div>
            <div class="yw-prob-row">
              <span class="yw-prob-x">✗</span>
              <p class="yw-prob-text">Save money but never build a project together</p>
            </div>
            <div class="yw-prob-row">
              <span class="yw-prob-x">✗</span>
              <p class="yw-prob-text">Miss Emyooga, YLP, and national programmes they qualify for</p>
            </div>
            <div class="yw-prob-row">
              <span class="yw-prob-x">✗</span>
              <p class="yw-prob-text">No records, no accountability, no access to formal banking</p>
            </div>
            <div class="yw-prob-row">
              <span class="yw-prob-x">✗</span>
              <p class="yw-prob-text">Each member working alone rather than building collective income</p>
            </div>
          </div>
        </div>
        <div class="yw-arrow">
          <span style="font-family:var(--font-head);font-size:18px;font-weight:900;color:var(--navy)">↓</span>
          <span class="yw-arrow-text">Register as a YAP Chapter. Everything shifts.</span>
        </div>
        <div class="yw-after">
          <div class="yw-after-row"><span class="yw-tick">✓</span><p class="yw-after-text">Structured meetings with documented outcomes every term</p></div>
          <div class="yw-after-row"><span class="yw-tick">✓</span><p class="yw-after-text">Collective and individual income projects running in parallel</p></div>
          <div class="yw-after-row"><span class="yw-tick">✓</span><p class="yw-after-text">Group bank account, transparent records, formal financial standing</p></div>
          <div class="yw-after-row"><span class="yw-tick">✓</span><p class="yw-after-text">Eligible and prepared for Emyooga and Youth Livelihood Programme</p></div>
          <div class="yw-after-row"><span class="yw-tick">✓</span><p class="yw-after-text">Connected to the Innovation Summit — mentors, partners, peers</p></div>
          <div class="yw-after-row"><span class="yw-tick">✓</span><p class="yw-after-text">A chapter that runs itself — not dependent on Omuto to function</p></div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ③ HOW OMUTO SUPPORTS  (white) -->
<section id="yap-pillars">
  <div class="container">
    <div class="reveal" style="text-align:center">
      <span class="eyebrow ew-navy">How Omuto Supports Chapters</span>
      <h2 class="t-section">Four Pillars of<br/><em class="line-red">Support</em></h2>
      <p class="t-body" style="opacity:.62;max-width:460px;margin:12px auto 0">YAP is not self-declared. Omuto walks alongside every chapter with four structured pillars of support.</p>
    </div>
    <div class="pillar-track reveal">

      <div class="pillar">
        <div class="pillar-bar"></div>
        <span class="pillar-num">01</span>
        <p class="pillar-name">Skills Training</p>
        <p class="pillar-desc">Through YoSkills Entrepreneurship Circles, members gain practical training in running a business, managing money, and planning projects — before any enterprise is launched.</p>
        <div class="pillar-items">
          <div class="pillar-item">Entrepreneurship and problem-solving</div>
          <div class="pillar-item">Financial literacy and record-keeping</div>
          <div class="pillar-item">Business planning and project execution</div>
        </div>
      </div>

      <div class="pillar">
        <div class="pillar-bar"></div>
        <span class="pillar-num">02</span>
        <p class="pillar-name">Financial Linkages</p>
        <p class="pillar-desc">We connect chapters to financial institutions and guide them through opening group accounts, keeping clean records, and preparing the documentation that unlocks formal access to capital.</p>
        <div class="pillar-items">
          <div class="pillar-item">Stanbic Bank financial literacy sessions</div>
          <div class="pillar-item">Group account opening — step by step</div>
          <div class="pillar-item">Record-keeping systems that satisfy funders</div>
        </div>
      </div>

      <div class="pillar">
        <div class="pillar-bar"></div>
        <span class="pillar-num">03</span>
        <p class="pillar-name">Government Access</p>
        <p class="pillar-desc">Most youth groups hear about national programmes but are never ready when they apply. YAP makes chapters eligible — not just aware — by preparing the documentation and group structure each programme requires.</p>
        <div class="pillar-items">
          <div class="pillar-item">Emyooga application readiness</div>
          <div class="pillar-item">Youth Livelihood Programme (YLP) guidance</div>
          <div class="pillar-item">Compliance documentation support</div>
        </div>
      </div>

      <div class="pillar">
        <div class="pillar-bar"></div>
        <span class="pillar-num">04</span>
        <p class="pillar-name">Innovation Summit</p>
        <p class="pillar-desc">Once a year, YAP Chapters present their work at the Youth Innovation &amp; Entrepreneurship Summit. Projects get refined through peer feedback, mentors engage directly, and partners identify what they want to support.</p>
        <div class="pillar-items">
          <div class="pillar-item">Present projects to mentors and partners</div>
          <div class="pillar-item">Peer learning across all active chapters</div>
          <div class="pillar-item">Visibility for investment and co-funding</div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- PHOTO BREAK -->
<!-- PHOTO BREAK — between pillars and different -->
<div id="yap-photobreak">
  <div class="ypb">
    <img src="https://media.licdn.com/dms/image/v2/D4D22AQHxoQhFFaUZDw/feedshare-shrink_800/B4DZsEjQEYH4Ag-/0/1765307908777?e=1774483200&v=beta&t=y42fz8_Zyk40rZskKRTKeP4Jrxfmk5rfD0Xfi43NtYI" alt="Omuto community session" loading="lazy"/>
    <span class="ypb-lbl">Buwama Chapter · Community action project</span>
  </div>
  <div class="ypb">
    <img src="https://www.globalgiving.org/pfil/63544/1000489620_8b13c01f37af547e882be9dea4f4e37a20_09_2025_17_58_03_Large.jpg" alt="YoSkills training session" loading="lazy"/>
    <span class="ypb-lbl">YoSkills · Enterprise training</span>
  </div>
  <div class="ypb">
    <img src="https://media.licdn.com/dms/image/v2/D4D22AQE6SEGAKJ4zjQ/feedshare-shrink_800/B4DZwEAEIJHgAg-/0/1769593652058?e=1774483200&v=beta&t=xm6zpZ9Nm4hsRV-_OTQ1ev5v3CGBUqlNh0BPj_s4w7o" alt="Financial literacy session" loading="lazy"/>
    <span class="ypb-lbl">Financial literacy · Stanbic partnership</span>
  </div>
</div>

<!-- ④ WHAT MAKES YAP DIFFERENT  (navy) -->
<section id="yap-different">
  <div class="halftone halftone-light"></div>
  <div class="container">
    <div class="yd-grid">

      <div class="reveal">
        <span class="eyebrow ew-white" style="margin-bottom:24px">What Sets YAP Apart</span>
        <p class="yd-big">Building enterprises,<br/>not <span class="teal">dependency groups.</span><br/>Job creators, not<br/><span class="yellow">job seekers.</span></p>
        <div class="yd-body">
          <p>Every element of YAP is designed to make itself unnecessary over time. We train chapters until they run their own sessions. We help them build financial systems that work without us. The exit is built into the design.</p>
          <p>The goal is poverty reduction through organised youth enterprise — not NGO programming that ends when the funding does.</p>
        </div>
      </div>

      <div class="reveal rd2">
        <div class="diff-list">
          <div class="diff-row">
            <div class="diff-vs">
              <p class="diff-bad">Youth waiting for jobs to appear</p>
              <p class="diff-good"><span class="teal">→</span> Youth building enterprises that create jobs</p>
            </div>
          </div>
          <div class="diff-row">
            <div class="diff-vs">
              <p class="diff-bad">Saving circles with no growth trajectory</p>
              <p class="diff-good"><span class="teal">→</span> Structured collective income projects</p>
            </div>
          </div>
          <div class="diff-row">
            <div class="diff-vs">
              <p class="diff-bad">Groups that collapse when the NGO leaves</p>
              <p class="diff-good"><span class="teal">→</span> Self-sustaining chapters with their own systems</p>
            </div>
          </div>
          <div class="diff-row">
            <div class="diff-vs">
              <p class="diff-bad">Missing government programmes through ignorance</p>
              <p class="diff-good"><span class="teal">→</span> Prepared, eligible, and actively applying</p>
            </div>
          </div>
          <div class="diff-row">
            <div class="diff-vs">
              <p class="diff-bad">Allowances paid for attendance</p>
              <p class="diff-good"><span class="teal">→</span> Skills built that outlast any programme</p>
            </div>
          </div>
          <div class="diff-row">
            <div class="diff-vs">
              <p class="diff-bad">External organisations solving problems for youth</p>
              <p class="diff-good"><span class="teal">→</span> Youth identifying and solving their own</p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ⑤ IMPACT AREAS  (cream) -->
<section id="yap-impact">
  <span class="impact-wm-yap" aria-hidden="true">IMPACT</span>
  <div class="container">
    <div class="reveal" style="text-align:center">
      <span class="eyebrow ew-teal">What Changes on the Ground</span>
      <h2 class="t-section">Six Areas of <em class="line-red">Impact</em></h2>
      <p class="t-body" style="opacity:.62;max-width:460px;margin:12px auto 0">Not targets written into a proposal. What actually shifts when a community has an organised, skilled youth group working inside it.</p>
    </div>
    <div class="impact-hex reveal">
      <div class="ihex">
        <span class="ihex-num">01</span>
        <p class="ihex-name">Poverty Reduction</p>
        <p class="ihex-desc">Collective enterprises and shared income projects build financial resilience for members and their households — moving from subsistence to surplus.</p>
      </div>
      <div class="ihex">
        <span class="ihex-num">02</span>
        <p class="ihex-name">Financial Inclusion</p>
        <p class="ihex-desc">Group accounts, savings systems, and direct banking linkages bring members into the formal financial system — often for the first time.</p>
      </div>
      <div class="ihex">
        <span class="ihex-num">03</span>
        <p class="ihex-name">Youth Employment</p>
        <p class="ihex-desc">Enterprises started by chapters generate real, paying work — for members first, then for peers in the wider community as the business grows.</p>
      </div>
      <div class="ihex">
        <span class="ihex-num">04</span>
        <p class="ihex-name">Gender Inclusion</p>
        <p class="ihex-desc">YAP actively ensures women and girls hold leadership positions and equal access to enterprise support, financial linkages, and skills training.</p>
      </div>
      <div class="ihex">
        <span class="ihex-num">05</span>
        <p class="ihex-name">Climate Action</p>
        <p class="ihex-desc">Chapters run environmental projects — tree planting, composting, clean water stewardship — that improve local conditions and build the GreenSchools pipeline.</p>
      </div>
      <div class="ihex">
        <span class="ihex-num">06</span>
        <p class="ihex-name">Community Health</p>
        <p class="ihex-desc">Health education, peer support, and hygiene campaigns run by trained chapter members reach households that formal health systems miss.</p>
      </div>
    </div>
  </div>
</section>

<!-- ⑥ WHERE WE ARE NOW  (white) -->
<section id="yap-now">
  <div class="container">
    <div class="yn-grid">
      <div class="reveal">
        <span class="eyebrow ew-navy" style="margin-bottom:20px">Current Status</span>
        <h2 class="yn-h">Still<br/><span>Early.</span><br/>Building<br/>Right.</h2>
        <p class="yn-body">YAP launched in 2021. We have two active chapters in Mpigi District — Buwama and Kayabwe. Both are operational, monitored, and producing documented outcomes. Expansion into Butambala is underway. We are not claiming scale we have not reached.</p>
        <p class="yn-body">Sustainability matters more than speed. Every new chapter gets the full support pathway before the next one starts.</p>
        <div class="yn-status">
          <div class="yn-row">
            <div class="yn-dot"></div>
            <p class="yn-row-text">Chapter active — Buwama, Mpigi District</p>
          </div>
          <div class="yn-row">
            <div class="yn-dot"></div>
            <p class="yn-row-text">Chapter active — Kayabwe, Mpigi District</p>
          </div>
          <div class="yn-row">
            <div class="yn-dot"></div>
            <p class="yn-row-text">YoSkills graduates integrated into both chapters</p>
          </div>
          <div class="yn-row">
            <div class="yn-dot pending"></div>
            <p class="yn-row-text">Butambala expansion — in progress</p>
          </div>
          <div class="yn-row">
            <div class="yn-dot pending"></div>
            <p class="yn-row-text">Stanbic Bank financial literacy partnership — being formalised</p>
          </div>
          <div class="yn-row">
            <div class="yn-dot pending"></div>
            <p class="yn-row-text">Impact monitoring and tracking systems — being built</p>
          </div>
        </div>
        <p class="yn-legend">Teal = Active &nbsp; Gold = In progress</p>
      </div>
      <div class="reveal rd2">
        <div class="yn-vision">
          <span class="yn-vision-eyebrow">The Long Game</span>
          <p class="yn-vision-h">What a mature YAP chapter<br/><span class="yellow">looks like.</span></p>
          <div class="yn-v-list">
            <div class="yn-v-row">
              <span class="yn-v-label">Finance</span>
              <p class="yn-v-text">Group account active, clean records, accessing formal capital independently</p>
            </div>
            <div class="yn-v-row">
              <span class="yn-v-label">Enterprise</span>
              <p class="yn-v-text">At least one collective income project running, employing members</p>
            </div>
            <div class="yn-v-row">
              <span class="yn-v-label">Government</span>
              <p class="yn-v-text">Applied for and received Emyooga or YLP funding without external help</p>
            </div>
            <div class="yn-v-row">
              <span class="yn-v-label">Leadership</span>
              <p class="yn-v-text">Chapter runs its own sessions — Omuto visits to monitor, not to facilitate</p>
            </div>
            <div class="yn-v-row">
              <span class="yn-v-label">Community</span>
              <p class="yn-v-text">Recognised by local leaders as a credible, productive force in the area</p>
            </div>
          </div>
          <p class="yn-closing">That is the Youth Action Pathway.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ⑦ GET INVOLVED  (cream) -->
<section id="yap-join">
  <div class="container">
    <div class="reveal" style="text-align:center">
      <span class="eyebrow ew-teal">Three Ways In</span>
      <h2 class="t-section">How to Get <em class="line-red">Involved</em></h2>
      <p class="t-body" style="opacity:.62;max-width:440px;margin:12px auto 0">Whether you are a youth group, a donor, or an organisation — there is a specific entry point for you.</p>
    </div>
    <div class="join-grid reveal">

      <div class="jcard jc-navy">
        <span class="jc-tag">01 — Youth Groups</span>
        <h3 class="jc-h">Register a<br/>Chapter</h3>
        <p class="jc-body">If your group is in Mpigi or Butambala and meets regularly — savings circle, sports team, faith group, or informal meetup — you can register as a YAP Chapter and access the full support pathway.</p>
        <div class="jc-list">
          <div class="jc-li">At least 10 active, committed members</div>
          <div class="jc-li">Appoint a chapter lead and a secretary</div>
          <div class="jc-li">Agree to structured meetings and documentation</div>
          <div class="jc-li">Complete YoSkills foundation training as a group</div>
        </div>
        <a href="contact.php" class="btn btn-white btn-sm">Register Your Group →</a>
      </div>

      <div class="jcard jc-teal">
        <span class="jc-tag">02 — Donors</span>
        <h3 class="jc-h">Fund a<br/>Chapter</h3>
        <p class="jc-body">Sponsoring a YAP Chapter covers training, toolkits, financial linkage sessions, and monitoring support across a full year. You can name the chapter and receive quarterly reports on how it is developing.</p>
        <div class="jc-list">
          <div class="jc-li">From UGX 500,000 / $135 to launch one chapter</div>
          <div class="jc-li">Named chapter sponsorship available</div>
          <div class="jc-li">Quarterly progress reports, documented outcomes</div>
          <div class="jc-li">Invitation to the annual Innovation Summit</div>
        </div>
        <a href="campaign.php" class="btn btn-navy btn-sm">Fund a Chapter →</a>
      </div>

      <div class="jcard jc-yellow">
        <span class="jc-tag">03 — Organisations</span>
        <h3 class="jc-h">Partner<br/>With Us</h3>
        <p class="jc-body">Banks, government bodies, NGOs, and businesses can enter a formal partnership — delivering financial literacy sessions, providing mentorship, opening market access, or co-funding the Innovation Summit.</p>
        <div class="jc-list">
          <div class="jc-li">Co-deliver skills or financial literacy training</div>
          <div class="jc-li">Offer mentorship or market access to chapter enterprises</div>
          <div class="jc-li">Co-fund or co-brand the Innovation Summit</div>
          <div class="jc-li">Commission research or impact evaluation</div>
        </div>
        <a href="contact.php" class="btn btn-navy btn-sm">Become a Partner →</a>
      </div>

    </div>
  </div>
</section>

<!-- ⑧ FINAL CTA  (navy) -->
<section id="yap-cta">
  <div class="halftone halftone-light"></div>
  <div class="container">
    <div class="yap-cta-inner reveal">
      <span class="eyebrow ew-white">The Pathway Starts Here</span>
      <h2 class="yap-cta-h">Structure is what<br/>turns a group into<br/>an <em>enterprise.</em></h2>
      <p class="yap-cta-p">Two chapters are active. More are in the pipeline. If your group is ready to move from informal to organised — or if you want to fund that shift — get in touch.</p>
      <div class="yap-cta-btns">
        <a href="contact.php" class="btn btn-white" style="padding:16px 36px;font-size:13px">Register a Chapter →</a>
        <a href="campaign.php" class="btn btn-red" style="padding:16px 36px;font-size:13px">Fund a Chapter</a>
        <a href="osx.php" class="btn btn-outline-white" style="padding:16px 36px;font-size:13px">School Xperience →</a>
      </div>
      <p class="yap-cta-note">YAP Chapters · Mpigi &amp; Butambala · Est. 2021 · info@omuto.org</p>
    </div>
  </div>
</section>

</main>

<?php include 'footer.php'; ?>