<?php
$page_title      = "Impact | Omuto Foundation";
$page_desc       = "Real numbers, real outcomes. Omuto Foundation impact data — 574 leaders trained, 700+ girls supported, 3,200+ students with safer water, and the $150,000 Kyanja story.";
$page_canonical  = "https://omuto.org/impact";
$page_active_nav = "impact";

$page_extra_css = '<style>

/* ═══════════════════════════════════════════════════
   IMPACT.PHP
   Page-unique styles only. All global classes from global.css.
   ═══════════════════════════════════════════════════ */

/* ─── 1. HERO ─── */
#imp-hero {
  min-height: 78svh;
  display: flex; align-items: flex-end;
}
.imph-bg {
  position: absolute; inset: 0;
  background-image: url(\'https://i.ibb.co/m5TL3gFq/23.png\');
  background-size: cover; background-position: center 20%;
  opacity: .14; pointer-events: none;
}

/* kyanja full photo */
.kc-photo {
  width: 100%; aspect-ratio: 21/8; overflow: hidden;
  border-bottom: var(--b); position: relative;
}
.kc-photo img {
  width: 100%; height: 100%; object-fit: cover; display: block;
}
.kc-photo-cap {
  position: absolute; bottom: 0; left: 0; right: 0;
  background: linear-gradient(transparent, rgba(29,38,49,.9));
  padding: 48px 40px 22px;
  font-family: var(--font-ui); font-size: 9px; font-weight: 700;
  text-transform: uppercase; letter-spacing: .2em; color: rgba(255,255,255,.65);
}

/* programme card images */
.pc-img {
  width: 100%; aspect-ratio: 16/8; overflow: hidden; margin-bottom: 20px;
  position: relative;
}
.pc-img img {
  width: 100%; height: 100%; object-fit: cover; display: block;
  filter: grayscale(15%); transition: transform .5s ease, filter .4s ease;
}
.pc:hover .pc-img img { transform: scale(1.04); filter: grayscale(0%); }

/* photo strip between secondary and pulse */
#imp-strip {
  display: grid; grid-template-columns: 1fr 1fr 1fr;
  height: 280px; border-top: var(--b); border-bottom: var(--b); overflow: hidden;
}
.is-cell {
  overflow: hidden; border-right: var(--b); position: relative;
}
.is-cell:last-child { border-right: none; }
.is-cell img {
  width: 100%; height: 100%; object-fit: cover; display: block;
  transition: transform .5s ease;
}
.is-cell:hover img { transform: scale(1.05); }
.is-cell-lbl {
  position: absolute; bottom: 0; left: 0; right: 0;
  background: rgba(29,38,49,.78); padding: 10px 14px;
  font-family: var(--font-ui); font-size: 8px; font-weight: 700;
  text-transform: uppercase; letter-spacing: .16em; color: rgba(255,255,255,.75);
  transform: translateY(100%); transition: transform .28s ease;
}
.is-cell:hover .is-cell-lbl { transform: translateY(0); }
@media(max-width:700px){
  #imp-strip { grid-template-columns: 1fr; height: auto; }
  .is-cell { height: 200px; border-right: none; border-bottom: var(--b); }
  .is-cell:last-child { border-bottom: none; }
  .is-cell-lbl { transform: translateY(0); }
}

.ih-inner { position: relative; z-index: 2; width: 100%; }
.ih-rule  { width: 100%; height: 4px; background: var(--red); }
.ih-body  { padding: 52px 0 0; }
.ih-tag {
  font-family: var(--font-ui); font-size: 10px; font-weight: 700;
  text-transform: uppercase; letter-spacing: .28em;
  color: rgba(255,255,255,.35); display: block; margin-bottom: 18px;
}
.ih-h1 {
  font-family: var(--font-head);
  font-size: clamp(52px, 9.5vw, 118px);
  font-weight: 900; line-height: .88;
  letter-spacing: -.04em; text-transform: uppercase; color: #fff;
}
.ih-h1 em { font-style: italic; color: var(--red); }
.ih-sub {
  font-size: clamp(15px, 1.6vw, 19px); font-weight: 500;
  color: rgba(255,255,255,.58); line-height: 1.75;
  max-width: 560px; margin: 22px 0 0; padding-bottom: 52px;
}
/* stat strip — 6 column variant (global is 4-col) */
.ih-strip {
  display: grid; grid-template-columns: repeat(6, 1fr);
  border-top: 1px solid rgba(255,255,255,.08);
}
.ih-cell { padding: 22px 0; border-right: 1px solid rgba(255,255,255,.06); }
.ih-cell:last-child { border-right: none; }
.ih-cell + .ih-cell { padding-left: 16px; }
.ih-num {
  font-family: var(--font-head); font-size: clamp(17px,2.4vw,30px);
  font-weight: 900; line-height: 1; display: block; color: var(--yellow);
}
.ih-lbl {
  font-family: var(--font-ui); font-size: 9px; font-weight: 700;
  text-transform: uppercase; letter-spacing: .14em;
  display: block; margin-top: 5px; color: rgba(255,255,255,.3);
}
@media(max-width:900px){
  .ih-strip { grid-template-columns: repeat(3, 1fr); }
  .ih-cell:nth-child(3n){ border-right: none; }
  .ih-cell:nth-child(n+4){ border-top: 1px solid rgba(255,255,255,.06); }
}
@media(max-width:580px){
  .ih-strip { grid-template-columns: 1fr 1fr; }
  .ih-cell:nth-child(2n){ border-right: none; }
  .ih-cell:nth-child(n+3){ border-top: 1px solid rgba(255,255,255,.06); }
}

/* ─── 2. KYANJA CASE STUDY  (yellow) ─── */
#kyanja {
  background: var(--yellow);
  border-bottom: var(--b);
}
.kc-wrap {
  display: grid; grid-template-columns: 1fr 1fr;
}
.kc-left {
  padding: 64px 48px; border-right: var(--b);
  position: relative; z-index: 2;
}
.kc-right {
  padding: 64px 48px;
  background: var(--navy); position: relative; overflow: hidden;
}
.kc-tag {
  font-family: var(--font-ui); font-size: 9px; font-weight: 700;
  text-transform: uppercase; letter-spacing: .25em;
  color: rgba(29,38,49,.42); display: block; margin-bottom: 14px;
}
.kc-prize {
  font-family: var(--font-head); font-size: clamp(34px,5vw,66px);
  font-weight: 900; line-height: .9; letter-spacing: -.03em;
  text-transform: uppercase; font-style: italic;
  color: var(--navy); margin-bottom: 18px;
}
.kc-prize span { color: var(--red); }
.kc-body {
  font-size: 15px; font-weight: 500; line-height: 1.8;
  color: rgba(29,38,49,.72); max-width: 420px; margin-bottom: 22px;
}
.kc-body strong { color: var(--navy); font-weight: 700; }
.kc-what {
  display: flex; flex-direction: column; gap: 0;
  border: var(--b); overflow: hidden; margin-top: 28px;
}
.kc-what-row {
  padding: 14px 18px; border-bottom: var(--b);
  display: flex; align-items: flex-start; gap: 12px;
  background: #fff; transition: background .15s;
}
.kc-what-row:last-child { border-bottom: none; }
.kc-what-row:hover { background: var(--cream); }
.kc-what-label {
  font-family: var(--font-head); font-size: 10px; font-weight: 900;
  text-transform: uppercase; letter-spacing: .08em;
  color: var(--red); flex-shrink: 0; min-width: 64px; padding-top: 2px;
}
.kc-what-text { font-size: 13px; font-weight: 600; color: var(--navy); line-height: 1.5; }
/* right side */
.kc-r-eyebrow {
  font-family: var(--font-ui); font-size: 9px; font-weight: 700;
  text-transform: uppercase; letter-spacing: .22em;
  color: rgba(255,255,255,.35); display: block; margin-bottom: 16px;
}
.kc-r-h {
  font-family: var(--font-head); font-size: clamp(20px,2.5vw,32px);
  font-weight: 900; font-style: italic; line-height: 1.05;
  color: #fff; margin-bottom: 22px;
}
.kc-r-h .yellow { color: var(--yellow); }
.kc-quote {
  font-family: var(--font-head); font-size: clamp(15px,1.8vw,20px);
  font-weight: 700; font-style: italic; line-height: 1.5;
  color: rgba(255,255,255,.82); padding: 22px;
  background: rgba(255,255,255,.06); border: 1px solid rgba(255,255,255,.1);
  margin-bottom: 22px;
}
.kc-quote-attr {
  font-family: var(--font-ui); font-size: 9px; font-weight: 700;
  text-transform: uppercase; letter-spacing: .16em;
  color: rgba(255,255,255,.3); margin-top: 12px; display: block;
}
.kc-facts {
  display: flex; flex-direction: column; gap: 10px;
}
.kf {
  display: flex; align-items: center; gap: 14px;
  padding: 14px 16px; background: rgba(255,255,255,.05);
  border: 1px solid rgba(255,255,255,.08);
}
.kf-n {
  font-family: var(--font-head); font-size: 20px; font-weight: 900;
  color: var(--yellow); flex-shrink: 0; min-width: 52px; line-height: 1;
}
.kf-t { font-size: 13px; font-weight: 600; color: rgba(255,255,255,.62); line-height: 1.4; }
@media(max-width:900px){
  .kc-wrap { grid-template-columns: 1fr; }
  .kc-left { border-right: none; border-bottom: var(--b); padding: 40px 24px; }
  .kc-right { padding: 40px 24px; }
}

/* ─── 3. PROGRAMME METRICS  (cream) ─── */
#prog-metrics {
  background: var(--cream);
  padding: 88px 0; border-bottom: var(--b);
}
.prog-grid {
  display: grid; grid-template-columns: 1fr 1fr; gap: 0;
  border: var(--b); overflow: hidden; box-shadow: var(--shadow);
  margin-top: 48px; position: relative; z-index: 2;
}
.pc {
  padding: 40px 36px; border-right: var(--b); border-bottom: var(--b);
  display: flex; flex-direction: column;
}
.pc:nth-child(2n){ border-right: none; }
.pc:nth-last-child(-n+2){ border-bottom: none; }
.pc.c-navy { background: var(--navy); }
.pc.c-red  { background: var(--red); }
.pc.c-teal { background: var(--teal); }
.pc.c-blue { background: var(--blue); }
.pc-tag {
  font-family: var(--font-head); font-size: 10px; font-weight: 900;
  text-transform: uppercase; letter-spacing: .12em; opacity: .32;
  display: block; margin-bottom: 12px;
}
.pc.c-navy .pc-tag, .pc.c-red .pc-tag { color: #fff; opacity: .5; }
.pc-h {
  font-family: var(--font-head); font-size: clamp(20px,2.4vw,28px);
  font-weight: 900; text-transform: uppercase; font-style: italic;
  line-height: 1; margin-bottom: 12px;
}
.pc.c-navy .pc-h, .pc.c-red .pc-h { color: #fff; }
.pc-body {
  font-size: 14px; line-height: 1.8; font-weight: 500;
  opacity: .7; margin-bottom: 24px; flex: 1;
}
.pc.c-navy .pc-body, .pc.c-red .pc-body { color: #fff; opacity: .78; }
/* stat bar */
.pc-stats {
  display: flex; border: var(--b-thin); overflow: hidden; margin-bottom: 20px;
}
.pc.c-navy .pc-stats, .pc.c-red .pc-stats { border-color: rgba(255,255,255,.2); }
.pc.c-teal .pc-stats, .pc.c-blue .pc-stats { border-color: rgba(29,38,49,.15); }
.pc-s {
  flex: 1; padding: 12px 8px; text-align: center; border-right: var(--b-thin);
}
.pc-s:last-child { border-right: none; }
.pc.c-navy .pc-s, .pc.c-red .pc-s { border-right-color: rgba(255,255,255,.15); }
.pc.c-teal .pc-s, .pc.c-blue .pc-s { border-right-color: rgba(29,38,49,.12); }
.pc-s b {
  display: block; font-family: var(--font-head);
  font-size: 18px; font-weight: 900; line-height: 1; margin-bottom: 3px;
}
.pc.c-navy .pc-s b, .pc.c-red .pc-s b { color: var(--yellow); }
.pc-s small {
  font-family: var(--font-ui); font-size: 8px; font-weight: 700;
  text-transform: uppercase; letter-spacing: .1em; opacity: .45;
}
.pc.c-navy .pc-s small, .pc.c-red .pc-s small { color: #fff; opacity: .5; }
/* items */
.pc-list { display: flex; flex-direction: column; gap: 7px; }
.pc-li {
  font-size: 12px; font-weight: 600; opacity: .65; line-height: 1.45;
  display: flex; align-items: flex-start; gap: 8px;
}
.pc.c-navy .pc-li, .pc.c-red .pc-li { color: #fff; opacity: .72; }
.pc-li::before { content: "—"; flex-shrink: 0; opacity: .4; font-size: 10px; margin-top: 2px; }
@media(max-width:760px){
  .prog-grid { grid-template-columns: 1fr; }
  .pc { border-right: none; }
  .pc:nth-last-child(-n+2){ border-bottom: var(--b); }
  .pc:last-child { border-bottom: none; }
}

/* ─── 4. YOSKILLS + OFA  (white) ─── */
#secondary-progs {
  background: #fff;
  padding: 88px 0; border-bottom: var(--b);
}
.sp-grid {
  display: grid; grid-template-columns: 1fr 1fr; gap: 0;
  border: var(--b); overflow: hidden; box-shadow: var(--shadow);
  margin-top: 48px;
}
.sp-card {
  padding: 40px 36px; border-right: var(--b);
  display: flex; flex-direction: column;
}
.sp-card:last-child { border-right: none; }
.sp-card.c-gold { background: var(--gold); }
.sp-card.c-cream { background: var(--cream); }
.sp-tag {
  font-family: var(--font-head); font-size: 10px; font-weight: 900;
  text-transform: uppercase; letter-spacing: .1em; opacity: .32;
  display: block; margin-bottom: 12px;
}
.sp-card.c-gold .sp-tag { color: #fff; opacity: .6; }
.sp-h {
  font-family: var(--font-head); font-size: clamp(20px,2.4vw,28px);
  font-weight: 900; text-transform: uppercase; font-style: italic;
  line-height: 1; margin-bottom: 12px;
}
.sp-card.c-gold .sp-h { color: #fff; }
.sp-stat-big {
  font-family: var(--font-head); font-size: clamp(32px,4vw,52px);
  font-weight: 900; line-height: 1; margin-bottom: 6px;
}
.sp-card.c-gold .sp-stat-big { color: #fff; }
.sp-stat-lbl {
  font-family: var(--font-ui); font-size: 9px; font-weight: 700;
  text-transform: uppercase; letter-spacing: .18em; opacity: .45;
  display: block; margin-bottom: 18px;
}
.sp-card.c-gold .sp-stat-lbl { color: #fff; opacity: .6; }
.sp-body {
  font-size: 14px; line-height: 1.8; font-weight: 500;
  color: rgba(29,38,49,.7); margin-bottom: 22px; flex: 1;
}
.sp-card.c-gold .sp-body { color: rgba(255,255,255,.82); }
.sp-items { display: flex; flex-direction: column; gap: 7px; }
.sp-item {
  font-size: 12px; font-weight: 600; color: rgba(29,38,49,.62);
  display: flex; align-items: flex-start; gap: 8px; line-height: 1.4;
}
.sp-card.c-gold .sp-item { color: rgba(255,255,255,.7); }
.sp-item::before { content: "—"; flex-shrink: 0; opacity: .4; font-size: 9px; margin-top: 2px; }
@media(max-width:760px){
  .sp-grid { grid-template-columns: 1fr; }
  .sp-card { border-right: none; border-bottom: var(--b); }
  .sp-card:last-child { border-bottom: none; }
}

/* ─── 5. PULSE + ESSENTIALS  (cream) ─── */
#pulse-essentials {
  background: var(--cream);
  padding: 88px 0; border-bottom: var(--b);
}
.pe-grid {
  display: grid; grid-template-columns: 1fr 1fr; gap: 0;
  border: var(--b); overflow: hidden; box-shadow: var(--shadow);
  margin-top: 48px;
}
.pe-card {
  padding: 40px 36px; border-right: var(--b);
  display: flex; flex-direction: column;
}
.pe-card:last-child { border-right: none; }
.pe-card.c-navy { background: var(--navy); }
.pe-card.c-white { background: #fff; }
.pe-tag {
  font-family: var(--font-head); font-size: 10px; font-weight: 900;
  text-transform: uppercase; letter-spacing: .1em; opacity: .32;
  display: block; margin-bottom: 12px;
}
.pe-card.c-navy .pe-tag { color: #fff; opacity: .45; }
.pe-h {
  font-family: var(--font-head); font-size: clamp(20px,2.4vw,28px);
  font-weight: 900; text-transform: uppercase; font-style: italic;
  line-height: 1; margin-bottom: 12px;
}
.pe-card.c-navy .pe-h { color: #fff; }
.pe-stat-big {
  font-family: var(--font-head); font-size: clamp(32px,4vw,52px);
  font-weight: 900; line-height: 1; margin-bottom: 5px;
}
.pe-card.c-navy .pe-stat-big { color: var(--yellow); }
.pe-stat-lbl {
  font-family: var(--font-ui); font-size: 9px; font-weight: 700;
  text-transform: uppercase; letter-spacing: .18em; opacity: .45;
  display: block; margin-bottom: 18px;
}
.pe-card.c-navy .pe-stat-lbl { color: #fff; opacity: .5; }
.pe-body {
  font-size: 14px; line-height: 1.8; font-weight: 500;
  color: rgba(29,38,49,.7); margin-bottom: 22px; flex: 1;
}
.pe-card.c-navy .pe-body { color: rgba(255,255,255,.72); }
.pe-items { display: flex; flex-direction: column; gap: 7px; }
.pe-item {
  font-size: 12px; font-weight: 600; color: rgba(29,38,49,.62);
  display: flex; align-items: flex-start; gap: 8px; line-height: 1.4;
}
.pe-card.c-navy .pe-item { color: rgba(255,255,255,.65); }
.pe-item::before { content: "—"; flex-shrink: 0; opacity: .4; font-size: 9px; margin-top: 2px; }
@media(max-width:760px){
  .pe-grid { grid-template-columns: 1fr; }
  .pe-card { border-right: none; border-bottom: var(--b); }
  .pe-card:last-child { border-bottom: none; }
}

/* ─── 6. HOW WE MEASURE  (navy) ─── */
#how-we-measure {
  background: var(--navy);
  padding: 88px 0; border-bottom: var(--b);
}
.hwm-grid {
  display: grid; grid-template-columns: 1fr 1fr;
  gap: 72px; align-items: center; position: relative; z-index: 2;
}
.hwm-big {
  font-family: var(--font-head); font-size: clamp(26px,3.8vw,46px);
  font-weight: 900; line-height: 1.1; font-style: italic; color: #fff;
}
.hwm-big .red  { color: var(--red); }
.hwm-big .teal { color: var(--teal); }
.hwm-body {
  font-size: 15px; line-height: 1.85; font-weight: 500;
  color: rgba(255,255,255,.55); margin-top: 22px;
}
.hwm-body p + p { margin-top: 14px; }
.measure-list {
  display: flex; flex-direction: column;
  border: var(--b-thin); border-color: rgba(255,255,255,.12); overflow: hidden;
}
.ml-row {
  padding: 20px 22px; border-bottom: 1px solid rgba(255,255,255,.08);
  display: flex; align-items: flex-start; gap: 16px;
  transition: background .15s;
}
.ml-row:last-child { border-bottom: none; }
.ml-row:hover { background: rgba(255,255,255,.04); }
.ml-num {
  font-family: var(--font-head); font-size: 11px; font-weight: 900;
  color: var(--teal); flex-shrink: 0; width: 26px; padding-top: 2px;
}
.ml-t strong {
  display: block; font-family: var(--font-head); font-size: 12px;
  font-weight: 800; text-transform: uppercase; letter-spacing: .06em;
  color: #fff; margin-bottom: 3px;
}
.ml-t span { font-size: 13px; font-weight: 500; color: rgba(255,255,255,.5); line-height: 1.55; }
@media(max-width:900px){ .hwm-grid { grid-template-columns: 1fr; gap: 40px; } }

/* ─── 7. RECOGNITION  (cream) ─── */
#recognition {
  background: var(--cream);
  padding: 88px 0; border-bottom: var(--b);
}
.rec-grid {
  display: grid; grid-template-columns: 1fr 1fr; gap: 72px;
  align-items: start; margin-top: 48px;
}
.rec-block-h {
  font-family: var(--font-ui); font-size: 10px; font-weight: 700;
  text-transform: uppercase; letter-spacing: .22em;
  color: rgba(29,38,49,.38); display: block; margin-bottom: 18px;
  padding-bottom: 10px; border-bottom: var(--b-thin);
}
.rec-pills {
  display: flex; flex-wrap: wrap; gap: 8px; margin-bottom: 32px;
}
.rec-pill {
  font-family: var(--font-ui); font-size: 10px; font-weight: 700;
  text-transform: uppercase; letter-spacing: .1em;
  padding: 8px 16px; border: var(--b-thin); background: #fff;
  color: var(--navy); transition: all .15s;
}
.rec-pill:hover { background: var(--navy); color: #fff; }
.rec-pill.hl { background: var(--yellow); border-color: var(--navy); }
.rec-pill.hl:hover { background: var(--navy); color: #fff; }
/* partners */
.partner-list {
  display: flex; flex-direction: column;
  border: var(--b); overflow: hidden; box-shadow: var(--shadow-sm);
}
.partner-row {
  padding: 15px 20px; border-bottom: var(--b);
  display: flex; align-items: center; justify-content: space-between;
  background: #fff; transition: background .15s;
}
.partner-row:last-child { border-bottom: none; }
.partner-row:hover { background: var(--cream); }
.partner-name {
  font-family: var(--font-head); font-size: 13px; font-weight: 800;
  text-transform: uppercase; font-style: italic;
}
.partner-type {
  font-family: var(--font-ui); font-size: 9px; font-weight: 700;
  text-transform: uppercase; letter-spacing: .14em;
  color: rgba(29,38,49,.35);
}
@media(max-width:900px){ .rec-grid { grid-template-columns: 1fr; gap: 40px; } }

/* ─── 8. FINAL CTA  (red) ─── */
#imp-cta {
  background: var(--red);
  padding: 88px 0; border-top: var(--b);
}
#imp-cta .halftone { opacity: .06; }
.imp-cta-inner {
  text-align: center; position: relative; z-index: 2;
  max-width: 520px; margin: 0 auto;
}
.imp-cta-h {
  font-family: var(--font-head);
  font-size: clamp(32px,5vw,60px);
  font-weight: 900; line-height: .92; text-transform: uppercase;
  font-style: italic; color: #fff; margin: 16px 0 16px; letter-spacing: -.02em;
}
.imp-cta-p {
  font-size: 17px; font-weight: 500;
  color: rgba(255,255,255,.88); margin-bottom: 30px; line-height: 1.65;
}
.imp-cta-btns { display: flex; flex-wrap: wrap; gap: 12px; justify-content: center; }
.imp-cta-note {
  font-size: 11px; font-weight: 500; font-style: italic;
  color: rgba(255,255,255,.42); margin-top: 18px;
}

</style>';

include 'header.php';
?>

<main>

<!-- ① HERO -->
<section id="imp-hero" class="section-navy">
  <div class="imph-bg"></div>
  <div class="ih-dots hero-dots"></div>
  <div class="ih-glow-r glow-red"></div>
  <div class="ih-glow-l glow-teal"></div>
  <div class="ih-inner">
    <div class="ih-rule"></div>
    <div class="container">
      <div class="ih-body reveal">
        <span class="ih-tag">Omuto Foundation · Accountable Action · Since 2019</span>
        <h1 class="ih-h1">Proof of<br/><em>Work.</em></h1>
        <p class="ih-sub">We track what we do, publish what we find, and improve what is not working. Every number on this page is documented. Nothing is rounded up to sound impressive.</p>
      </div>
      <div class="ih-strip reveal">
        <div class="ih-cell">
          <span class="ih-num stat-strip-num">574</span>
          <span class="ih-lbl stat-strip-lbl">Leaders Trained</span>
        </div>
        <div class="ih-cell">
          <span class="ih-num stat-strip-num">700+</span>
          <span class="ih-lbl stat-strip-lbl">Girls Supported</span>
        </div>
        <div class="ih-cell">
          <span class="ih-num stat-strip-num">2,300+</span>
          <span class="ih-lbl stat-strip-lbl">Trees Planted</span>
        </div>
        <div class="ih-cell">
          <span class="ih-num stat-strip-num">3,200+</span>
          <span class="ih-lbl stat-strip-lbl">Safer Water Access</span>
        </div>
        <div class="ih-cell">
          <span class="ih-num stat-strip-num">47</span>
          <span class="ih-lbl stat-strip-lbl">Projects Completed</span>
        </div>
        <div class="ih-cell">
          <span class="ih-num stat-strip-num">$150K</span>
          <span class="ih-lbl stat-strip-lbl">Kyanja Prize Won</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ② KYANJA CASE STUDY  (yellow) -->
<section id="kyanja" class="section-yellow">
  <div class="kc-photo">
    <img src="https://i.ibb.co/wZ9cf7Ny/31.png" alt="Kyanja High School — Zayed Sustainability Prize 2025" loading="lazy"/>
    <span class="kc-photo-cap">Kyanja High School · Ecoloop Project · Zayed Sustainability Prize 2025 · $150,000 USD Global Winner</span>
  </div>
  <div class="kc-wrap">
    <div class="kc-left reveal">
      <span class="kc-tag">Case Study · Zayed Sustainability Prize 2025</span>
      <h2 class="kc-prize">Kyanja High<br/>Won <span>$150,000.</span></h2>
      <p class="kc-body">After Omuto installed the SLF and GreenSchools system at Kyanja High School, the student leadership team launched <strong>Ecoloop</strong> — an environmental innovation project that won the Zayed Sustainability Prize, one of the world's most prestigious awards in sustainable development. The prize money goes to the school.</p>
      <p class="kc-body" style="margin-top:14px">Omuto's role was not to build Ecoloop. Our role was to train the leadership system that made it possible — the planning skills, the accountability tools, the confidence to act.</p>
      <div class="kc-what">
        <div class="kc-what-row">
          <span class="kc-what-label">Programme</span>
          <p class="kc-what-text">GreenSchools environmental action team + Student Leaders Forum</p>
        </div>
        <div class="kc-what-row">
          <span class="kc-what-label">Project</span>
          <p class="kc-what-text">Ecoloop — student-designed circular waste and environmental innovation system</p>
        </div>
        <div class="kc-what-row">
          <span class="kc-what-label">Prize</span>
          <p class="kc-what-text">Zayed Sustainability Prize 2025 · $150,000 USD · Global winner</p>
        </div>
        <div class="kc-what-row">
          <span class="kc-what-label">Lesson</span>
          <p class="kc-what-text">Train the system. The students do the rest.</p>
        </div>
      </div>
    </div>
    <div class="kc-right reveal rd2">
      <span class="kc-r-eyebrow">What this means for partnered schools</span>
      <p class="kc-r-h">When students are trained to lead, they build things <span class="yellow">no one expected.</span></p>
      <div class="kc-quote">
        "Omuto didn't win the prize. The students did. Our role was training the leadership system that allowed their Ecoloop project to flourish."
        <span class="kc-quote-attr">— McMike Mutumba, Omuto Foundation</span>
      </div>
      <div class="kc-facts">
        <div class="kf">
          <span class="kf-n">2020</span>
          <p class="kf-t">Year Omuto first began working with schools in Mpigi and Butambala</p>
        </div>
        <div class="kf">
          <span class="kf-n">40</span>
          <p class="kf-t">Schools that have participated in the chapter system since launch</p>
        </div>
        <div class="kf">
          <span class="kf-n">1</span>
          <p class="kf-t">Of those schools won a $150,000 global sustainability prize in 2025</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ③ PROGRAMME METRICS  (cream) -->
<section id="prog-metrics" class="section-cream">
  <span class="pm-wm watermark" aria-hidden="true">METRICS</span>
  <div class="container">
    <div class="reveal" style="text-align:center">
      <span class="eyebrow ew-red">By Programme</span>
      <h2 class="t-section">What Each<br/><em class="line-red">Programme Has Done</em></h2>
      <p class="t-body" style="opacity:.62;max-width:460px;margin:12px auto 0">Broken down by the four active programmes inside the School Xperience system.</p>
    </div>
    <div class="prog-grid reveal">

      <!-- SLF -->
      <div class="pc c-navy">
        <div class="pc-img"><img src="https://i.ibb.co/m5TL3gFq/23.png" alt="Student Leaders Forum session" loading="lazy"/></div>
        <span class="pc-tag">01 — Student Leaders Forum</span>
        <h3 class="pc-h">Leadership<br/>&amp; Debate</h3>
        <p class="pc-body">Prefects across 40 schools trained in ethics, public speaking, project management, and conflict resolution. Termly interschool debate championships run across Mpigi and Butambala.</p>
        <div class="pc-stats">
          <div class="pc-s"><b>574</b><small>Leaders total</small></div>
          <div class="pc-s"><b>174</b><small>In 2025</small></div>
          <div class="pc-s"><b>40</b><small>Schools</small></div>
        </div>
        <div class="pc-list">
          <div class="pc-li">Ethics, planning, facilitation, public speaking</div>
          <div class="pc-li">Interschool debate championships — termly</div>
          <div class="pc-li">Student-led projects documented each term</div>
          <div class="pc-li">Kyanja Ecoloop — built on SLF planning skills</div>
        </div>
      </div>

      <!-- RED -->
      <div class="pc c-red">
        <div class="pc-img"><img src="https://i.ibb.co/m5TL3gFq/23.png" alt="RED Campaign — menstrual dignity" loading="lazy"/></div>
        <span class="pc-tag">02 — RED Campaign</span>
        <h3 class="pc-h">Menstrual<br/>Dignity</h3>
        <p class="pc-body">Reusable pad distribution, hygiene education, peer support, and school assembly sessions ensuring no girl loses schooling days due to her period. Seven active RED Brigades running student-led outreach.</p>
        <div class="pc-stats">
          <div class="pc-s"><b>700+</b><small>Girls reached</small></div>
          <div class="pc-s"><b>238</b><small>Kits — 2025</small></div>
          <div class="pc-s"><b>7</b><small>Brigades</small></div>
        </div>
        <div class="pc-list">
          <div class="pc-li">Reusable pad and hygiene kit distribution</div>
          <div class="pc-li">School assembly and peer education sessions</div>
          <div class="pc-li">Senior woman teacher engagement programme</div>
          <div class="pc-li">4 community health outreaches conducted</div>
        </div>
      </div>

      <!-- GreenSchools -->
      <div class="pc c-teal">
        <div class="pc-img"><img src="https://i.ibb.co/wrPnfcKG/21.png" alt="GreenSchools tree planting" loading="lazy"/></div>
        <span class="pc-tag">03 — GreenSchools</span>
        <h3 class="pc-h">Environmental<br/>Action</h3>
        <p class="pc-body">Student Green Teams lead tree planting, school gardens, and composting projects — all documented and reported. The GreenSchools framework produced the Kyanja Ecoloop team that won $150,000 globally.</p>
        <div class="pc-stats">
          <div class="pc-s"><b>39</b><small>Campaigns</small></div>
          <div class="pc-s"><b>6</b><small>Green teams</small></div>
          <div class="pc-s"><b>7</b><small>Gardens</small></div>
        </div>
        <div class="pc-list">
          <div class="pc-li">39 tree planting drives with nursery partners</div>
          <div class="pc-li">7 school gardens supported</div>
          <div class="pc-li">4 tree nursery partnerships active</div>
          <div class="pc-li">Ecoloop framework — Zayed Prize 2025 winner</div>
        </div>
      </div>

      <!-- PureWater -->
      <div class="pc c-blue">
        <div class="pc-img"><img src="https://i.ibb.co/m5TL3gFq/23.png" alt="PureWater Initiative clean water" loading="lazy"/></div>
        <span class="pc-tag">04 — PureWater Initiative</span>
        <h3 class="pc-h">Clean Water<br/>in Schools</h3>
        <p class="pc-body">Spouts Purifaaya ceramic filter installation in schools, maintained by trained student teams. Zero firewood used for water boiling. Waterborne disease risk from drinking water eliminated in participating schools.</p>
        <div class="pc-stats">
          <div class="pc-s"><b>3,200+</b><small>Students</small></div>
          <div class="pc-s"><b>0</b><small>Firewood used</small></div>
          <div class="pc-s"><b>100%</b><small>Youth-run</small></div>
        </div>
        <div class="pc-list">
          <div class="pc-li">Spouts Purifaaya ceramic filters installed</div>
          <div class="pc-li">Student maintenance teams trained on-site</div>
          <div class="pc-li">Reduced absenteeism from waterborne illness</div>
          <div class="pc-li">Improved classroom concentration reported</div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ④ YOSKILLS + OFA  (white) -->
<section id="secondary-progs" class="section-white">
  <div class="container">
    <div class="reveal" style="text-align:center">
      <span class="eyebrow ew-navy">Beyond Schools</span>
      <h2 class="t-section">Enterprise &amp; <em class="line-red">Community</em></h2>
      <p class="t-body" style="opacity:.62;max-width:460px;margin:12px auto 0">Two programmes that sit outside the school system — building income, confidence, and community ties.</p>
    </div>
    <div class="sp-grid reveal">

      <div class="sp-card c-gold">
        <span class="sp-tag">YoSkills Entrepreneurship Circles</span>
        <h3 class="sp-h">Skills that<br/>Create Income</h3>
        <span class="sp-stat-big">25+</span>
        <span class="sp-stat-lbl">Graduates from first cohort building businesses</span>
        <p class="sp-body">Practical entrepreneurship training run at Mpigi and Kampala centres. Graduates learn business planning, financial literacy, and production skills — then apply them. One tailoring graduate now produces reusable pads for local schools, creating personal income while supporting the RED Campaign supply chain.</p>
        <div class="sp-items">
          <div class="sp-item">Tailoring, printing, media, and design tracks</div>
          <div class="sp-item">Financial literacy module in every cohort</div>
          <div class="sp-item">Graduates feed directly into YAP Chapters</div>
          <div class="sp-item">Omuto Essentials employs programme graduates</div>
        </div>
      </div>

      <div class="sp-card c-cream">
        <span class="sp-tag">Omuto Football Alliance (OFA)</span>
        <h3 class="sp-h">Leadership Through<br/>Sport</h3>
        <span class="sp-stat-big">500+</span>
        <span class="sp-stat-lbl">Youth engaged through the Omuto Cup</span>
        <p class="sp-body">The OFA uses football as a gateway for leadership development, discipline, and peer education. The Omuto Cup draws teams from across Mpigi and Butambala — reaching young men who are not in school programmes through a format they already love and trust.</p>
        <div class="sp-items">
          <div class="sp-item">Omuto Cup — termly interschool tournament</div>
          <div class="sp-item">Leadership workshops embedded into training sessions</div>
          <div class="sp-item">Peer education on health and life skills</div>
          <div class="sp-item">Talent pathway to wider football networks</div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- PHOTO STRIP -->
<div id="imp-strip" class="photo-strip-3-eq">
  <div class="is-cell">
    <img src="https://i.ibb.co/QtQpJRz/10.png" alt="McMike Mutumba — Omuto founder" loading="lazy"/>
    <span class="is-cell-lbl">McMike Mutumba · Founder</span>
  </div>
  <div class="is-cell">
    <img src="https://i.ibb.co/wrPnfcKG/21.png" alt="Omuto youth programme field session" loading="lazy"/>
    <span class="is-cell-lbl">Field session · Mpigi District 2025</span>
  </div>
  <div class="is-cell">
    <img src="https://i.ibb.co/JWHrCkcp/26.png" alt="Youth entrepreneurship training" loading="lazy"/>
    <span class="is-cell-lbl">YoSkills · Entrepreneurship cohort</span>
  </div>
</div>

<!-- ⑤ PULSE + ESSENTIALS  (cream) -->
<section id="pulse-essentials" class="section-cream">
  <div class="container">
    <div class="reveal" style="text-align:center">
      <span class="eyebrow ew-teal">Content &amp; Commerce</span>
      <h2 class="t-section">Pulse &amp; <em class="line-red">Essentials</em></h2>
      <p class="t-body" style="opacity:.62;max-width:460px;margin:12px auto 0">Two arms of Omuto that amplify stories and generate revenue — both reinvested directly into programmes.</p>
    </div>
    <div class="pe-grid reveal">

      <div class="pe-card c-navy">
        <span class="pe-tag">Omuto Pulse</span>
        <h3 class="pe-h">Youth Media<br/>&amp; Storytelling</h3>
        <span class="pe-stat-big">100+</span>
        <span class="pe-stat-lbl">Youth journalists and content creators on platform</span>
        <p class="pe-body">Omuto Pulse is the media and documentation arm — a platform for youth journalists, photographers, and content creators across Mpigi and Butambala to tell the stories that mainstream media misses. Every Omuto programme is documented through Pulse. Every graduation, every campaign, every Omuto Cup match has a record.</p>
        <div class="pe-items">
          <div class="pe-item">Youth journalists covering community stories</div>
          <div class="pe-item">Programme documentation — video, photo, written</div>
          <div class="pe-item">Social media amplification of youth-led projects</div>
          <div class="pe-item">Creators trained through YoSkills media track</div>
        </div>
      </div>

      <div class="pe-card c-white">
        <span class="pe-tag">Omuto Essentials</span>
        <h3 class="pe-h">Products That<br/>Fund Programmes</h3>
        <span class="pe-stat-big">100%</span>
        <span class="pe-stat-lbl">Revenue reinvested into youth programmes</span>
        <p class="pe-body">Omuto Essentials produces and sells youth-made goods — reusable pads, skin jelly, dignity kits. Every purchase funds a programme. Every product is made by a YoSkills graduate or employed youth worker. The supply chain is the impact: when you buy, someone who trained with Omuto earned.</p>
        <div class="pe-items">
          <div class="pe-item">Reusable pad production — made by tailoring graduates</div>
          <div class="pe-item">Skin jelly range — youth-manufactured locally</div>
          <div class="pe-item">Dignity kits — distributed through the RED Campaign</div>
          <div class="pe-item">All profit funds school and community programmes</div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ⑥ HOW WE MEASURE  (navy) -->
<section id="how-we-measure" class="section-navy">
  <div class="halftone halftone-light"></div>
  <div class="container">
    <div class="hwm-grid">
      <div class="reveal">
        <span class="eyebrow ew-white" style="margin-bottom:24px">Accountability</span>
        <p class="hwm-big">We measure what<br/>we do. We publish<br/>what we <span class="red">find.</span><br/>We fix what<br/><span class="teal">doesn't work.</span></p>
        <div class="hwm-body">
          <p>Every programme has a scorecard. Every term produces a documented report. Youth leaders themselves review outcomes at the end of each school year — if a project didn't deliver, we say so in the annual report.</p>
          <p>Impact is not measured only in numbers. A prefect who plans a school project alone for the first time is a result. A girl who stays in class through her period is a result. We track both.</p>
        </div>
      </div>
      <div class="reveal rd2">
        <div class="measure-list">
          <div class="ml-row">
            <span class="ml-num">01</span>
            <div class="ml-t">
              <strong>Monthly Scorecards</strong>
              <span>Every school chapter submits a structured scorecard tracking activities, attendance, and outcomes against their term plan.</span>
            </div>
          </div>
          <div class="ml-row">
            <span class="ml-num">02</span>
            <div class="ml-t">
              <strong>Monitoring Visits</strong>
              <span>Omuto field staff visit partner schools 1–3 times per term depending on tier — observing, documenting, and supporting chapter leads.</span>
            </div>
          </div>
          <div class="ml-row">
            <span class="ml-num">03</span>
            <div class="ml-t">
              <strong>Project Documentation</strong>
              <span>Student-led projects are documented from planning through to outcome. Four completed projects are fully archived and publicly available.</span>
            </div>
          </div>
          <div class="ml-row">
            <span class="ml-num">04</span>
            <div class="ml-t">
              <strong>Annual Impact Report</strong>
              <span>Published each December. Contains programme data, financial summary, case studies, and what we plan to improve in the next year.</span>
            </div>
          </div>
          <div class="ml-row">
            <span class="ml-num">05</span>
            <div class="ml-t">
              <strong>Youth Review</strong>
              <span>Programme leaders — not just staff — review outcomes at the end of each year. Their assessments are included in the annual report.</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ⑦ RECOGNITION  (cream) -->
<section id="recognition" class="section-cream">
  <div class="container">
    <div class="reveal" style="text-align:center">
      <span class="eyebrow ew-teal">Verified &amp; Recognised</span>
      <h2 class="t-section">Who Recognises<br/><em class="line-red">Our Work</em></h2>
    </div>
    <div class="rec-grid reveal">
      <div>
        <span class="rec-block-h">Recognition &amp; Features</span>
        <div class="rec-pills">
          <span class="rec-pill hl">Forbes Africa · Jun/Jul 2024</span>
          <span class="rec-pill">GlobalGiving · Vetted Partner</span>
          <span class="rec-pill">Zayed Sustainability Prize · 2025</span>
          <span class="rec-pill">YALI Alumni Network</span>
          <span class="rec-pill">Theirworld Ambassador</span>
          <span class="rec-pill">End Child Violence Network</span>
        </div>
        <a href="report2025.php" class="btn btn-navy btn-sm" style="margin-top:8px">Read Annual Report 2025 →</a>
      </div>
      <div>
        <span class="rec-block-h">Mission-Aligned Partners</span>
        <div class="partner-list">
          <div class="partner-row">
            <span class="partner-name">Mpigi District Local Government</span>
            <span class="partner-type">Government</span>
          </div>
          <div class="partner-row">
            <span class="partner-name">Spouts of Water International</span>
            <span class="partner-type">PureWater</span>
          </div>
          <div class="partner-row">
            <span class="partner-name">Stanbic Bank Uganda</span>
            <span class="partner-type">Financial Literacy</span>
          </div>
          <div class="partner-row">
            <span class="partner-name">Reach A Hand Uganda</span>
            <span class="partner-type">Health</span>
          </div>
          <div class="partner-row">
            <span class="partner-name">MHAMIA</span>
            <span class="partner-type">Mental Health</span>
          </div>
          <div class="partner-row">
            <span class="partner-name">Red Cross Mpigi</span>
            <span class="partner-type">Community</span>
          </div>
          <div class="partner-row">
            <span class="partner-name">Miss Uganda &amp; Theirworld</span>
            <span class="partner-type">Advocacy</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ⑧ FINAL CTA  (red) -->
<section id="imp-cta" class="section-red">
  <div class="halftone"></div>
  <div class="container">
    <div class="imp-cta-inner cta-section reveal">
      <span class="eyebrow ew-white">Get Involved</span>
      <h2 class="imp-cta-h cta-section-h">Every number<br/>here has a<br/>name behind it.</h2>
      <p class="imp-cta-p cta-section-p">574 trained leaders. 700 girls back in class. 3,200 students drinking clean water. If you want to add to these numbers — fund a chapter, partner with us, or register your school.</p>
      <div class="imp-cta-btns cta-section-btns">
        <a href="campaign.php" class="btn btn-white" style="padding:16px 32px;font-size:13px">Fund a Chapter →</a>
        <a href="osx.php"      class="btn btn-navy" style="padding:16px 32px;font-size:13px">Partner a School →</a>
        <a href="contact.php"  class="btn btn-outline-white" style="padding:16px 32px;font-size:13px">Get in Touch</a>
      </div>
      <p class="imp-cta-note cta-section-note">Omuto Foundation · Registered NGO · Kammengo, Mpigi · info@omuto.org</p>
    </div>
  </div>
</section>

</main>

<?php include 'footer.php'; ?>