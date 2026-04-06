<?php
$page_title      = "School Xperience 2026 | Omuto Foundation";
$page_desc       = "The Omuto School Partnership Model — transforming prefect systems into measurable student-led action. 40 schools. 574 leaders trained. Join Term 1 2026.";
$page_canonical  = "https://omuto.org/osx";
$page_active_nav = "work";

$page_extra_css = '<style>

/* ═══════════════════════════════════════════════════
   OSX.PHP — School Xperience 2026
   Matches about.php design system exactly.
   No Tailwind. No Font Awesome. No rounded corners.
   ═══════════════════════════════════════════════════ */

/* ─── 1. HERO ─── */
#osx-hero {
  min-height: 88svh;
}
.oh-bg { display: none; }
/* hero split grid */
.oh-split {
  display: grid; grid-template-columns: 1fr 420px;
  min-height: 88svh; position: relative; z-index: 1;
}
.oh-left {
  display: flex; flex-direction: column; justify-content: flex-end;
  padding: 52px 48px 0; border-right: var(--b);
}
.oh-right {
  display: grid; grid-template-rows: 1fr 1fr; overflow: hidden;
}
.oh-photo {
  overflow: hidden; position: relative; border-bottom: var(--b);
}
.oh-photo:last-child { border-bottom: none; }
.oh-photo img {
  width: 100%; height: 100%; object-fit: cover; display: block;
  transition: filter .5s;
}
.oh-photo:hover img { filter: grayscale(0%) brightness(.95); }
.oh-photo-lbl {
  position: absolute; bottom: 0; left: 0; right: 0;
  background: linear-gradient(transparent, rgba(29,38,49,.85));
  padding: 28px 16px 12px;
  font-family: var(--font-ui); font-size: 8px; font-weight: 700;
  text-transform: uppercase; letter-spacing: .18em; color: rgba(255,255,255,.65);
}
.oh-pill {
  display: inline-block; background: var(--teal); color: var(--navy);
  font-family: var(--font-ui); font-size: 9px; font-weight: 700;
  text-transform: uppercase; letter-spacing: .22em;
  padding: 6px 14px; border: var(--b-thin); border-color: var(--teal);
  margin-bottom: 22px;
}
.oh-h1 {
  font-family: var(--font-head); font-size: clamp(48px, 8vw, 104px);
  font-weight: 900; line-height: .88;
  letter-spacing: -.04em; text-transform: uppercase; color: #fff;
}
.oh-h1 em { font-style: italic; color: var(--teal); }
.oh-sub {
  font-size: clamp(14px, 1.5vw, 18px); font-weight: 500;
  color: rgba(255,255,255,.55); line-height: 1.75;
  max-width: 480px; margin: 18px 0 28px;
}
.oh-btns { display: flex; gap: 12px; flex-wrap: wrap; padding-bottom: 48px; }
.oh-cell-pad { padding-left: 20px; }
@media(max-width:900px){
  .oh-split { grid-template-columns: 1fr; min-height: auto; }
  .oh-left  { border-right: none; border-bottom: var(--b); padding: 40px 20px; }
  .oh-right { grid-template-rows: 240px 240px; }
}

/* ─── 2. KYANJA PROOF ─── */
.kyanja-wrap {
  display: grid; grid-template-columns: 1fr 1fr; gap: 0;
}
.kyanja-l {
  padding: 64px 48px;
  position: relative; z-index: 2;
  border-right: var(--b);
}
.kyanja-r {
  padding: 64px 48px;
  background: var(--navy);
  position: relative; overflow: hidden;
}
.kyanja-tag {
  font-family: var(--font-ui); font-size: 9px; font-weight: 700;
  text-transform: uppercase; letter-spacing: .25em;
  color: rgba(29,38,49,.42); display: block; margin-bottom: 16px;
}
.kyanja-prize {
  font-family: var(--font-head);
  font-size: clamp(34px, 5vw, 66px);
  font-weight: 900; line-height: .9;
  letter-spacing: -.03em; text-transform: uppercase;
  font-style: italic; color: var(--navy); margin-bottom: 18px;
}
.kyanja-prize span { color: var(--red); }
.kyanja-body {
  font-size: 15px; font-weight: 500; line-height: 1.8;
  color: rgba(29,38,49,.72); max-width: 420px; margin-bottom: 22px;
}
.kyanja-body strong { color: var(--navy); font-weight: 700; }
.kyanja-link {
  font-family: var(--font-ui); font-size: 10px; font-weight: 700;
  text-transform: uppercase; letter-spacing: .16em;
  color: var(--red); text-decoration: underline;
}
.kyanja-big {
  font-family: var(--font-head);
  font-size: clamp(22px, 3.2vw, 40px);
  font-weight: 900; font-style: italic; line-height: 1.05;
  color: #fff; margin-bottom: 28px;
}
.kyanja-big .y { color: var(--yellow); }
.kyanja-facts { display: flex; flex-direction: column; gap: 12px; }
.kf {
  display: flex; align-items: center; gap: 16px;
  padding: 16px 18px;
  background: rgba(255,255,255,.05);
  border: 1px solid rgba(255,255,255,.1);
}
.kf-n {
  font-family: var(--font-head); font-size: 22px; font-weight: 900;
  color: var(--yellow); flex-shrink: 0; min-width: 56px; line-height: 1;
}
.kf-t { font-size: 13px; font-weight: 600; color: rgba(255,255,255,.62); line-height: 1.45; }
.kf-t strong { color: #fff; }
@media(max-width:900px){
  .kyanja-wrap { grid-template-columns: 1fr; }
  .kyanja-l { border-right: none; border-bottom: var(--b); }
}
.kyanja-photo {
  width: 100%; aspect-ratio: 16/9;
  overflow: hidden; border-bottom: var(--b); position: relative;
}
.kyanja-photo img {
  width: 100%; height: 100%; object-fit: cover;
  display: block;
}
.kyanja-photo-cap {
  position: absolute; bottom: 0; left: 0; right: 0;
  background: linear-gradient(transparent, rgba(29,38,49,.85));
  padding: 32px 24px 18px;
  font-family: var(--font-ui); font-size: 9px; font-weight: 700;
  text-transform: uppercase; letter-spacing: .2em; color: rgba(255,255,255,.7);
}

/* ─── PHOTO STRIP (between system and stories) ─── */
#photo-strip {
  display: grid; grid-template-columns: 2fr 1fr 1fr;
  border-bottom: var(--b); border-top: var(--b);
  height: 340px; overflow: hidden;
}
.ps-img {
  overflow: hidden; border-right: var(--b); position: relative;
}
.ps-img:last-child { border-right: none; }
.ps-img img {
  width: 100%; height: 100%; object-fit: cover; display: block;
  transition: transform .6s ease;
}
.ps-img:hover img { transform: scale(1.05); }
.ps-img-label {
  position: absolute; bottom: 0; left: 0; right: 0;
  background: rgba(29,38,49,.75); backdrop-filter: blur(4px);
  padding: 10px 14px;
  font-family: var(--font-ui); font-size: 8px; font-weight: 700;
  text-transform: uppercase; letter-spacing: .18em; color: rgba(255,255,255,.8);
  transform: translateY(100%); transition: transform .3s ease;
}
.ps-img:hover .ps-img-label { transform: translateY(0); }
@media(max-width:700px){
  #photo-strip { grid-template-columns: 1fr; height: auto; }
  .ps-img { height: 220px; border-right: none; border-bottom: var(--b); }
  .ps-img:last-child { border-bottom: none; }
  .ps-img-label { transform: translateY(0); }
}

/* story card images */
.sc-img {
  width: 100%; aspect-ratio: 16/10; overflow: hidden;
  border-bottom: var(--b);
}
.sc-img img {
  width: 100%; height: 100%; object-fit: cover; display: block;
  transition: transform .5s ease;
}
.story-card:hover .sc-img img { transform: scale(1.04); }

/* ─── 3. PROGRAMMES (tight grid) ─── */
.prog-wm-osx {
  position: absolute; top: 10px; right: -20px;
  font-family: var(--font-head);
  font-size: clamp(90px,14vw,170px);
  font-weight: 900; line-height: 1;
  color: rgba(29,38,49,.04); letter-spacing: -.05em;
  pointer-events: none; user-select: none; white-space: nowrap;
}
.prog-intro {
  display: grid; grid-template-columns: 1fr 1fr; gap: 40px;
  align-items: end; margin-bottom: 48px; position: relative; z-index: 2;
}
.prog-intro-r { text-align: right; }
.prog-intro-r p {
  font-size: 15px; font-weight: 500; opacity: .6; line-height: 1.7; max-width: 380px; margin-left: auto;
}
@media(max-width:700px){ .prog-intro { grid-template-columns: 1fr; } .prog-intro-r { text-align: left; } }

.prog-grid-osx {
  display: grid; grid-template-columns: 1fr 1fr; gap: 0;
  border: var(--b);
  overflow: hidden; box-shadow: var(--shadow);
  position: relative; z-index: 2;
}
.pc {
  padding: 38px 34px; border-right: var(--b); border-bottom: var(--b);
  display: flex; flex-direction: column; transition: filter .2s;
}
.pc:hover { filter: brightness(.97); }
.pc:nth-child(2n) { border-right: none; }
.pc:nth-last-child(-n+2) { border-bottom: none; }
.pc.c-navy { background: var(--navy); color: #fff; }
.pc.c-red  { background: var(--red);  color: #fff; }
.pc.c-teal { background: var(--teal); }
.pc.c-blue { background: var(--blue); }
.pc-tag {
  font-family: var(--font-head); font-size: 10px; font-weight: 900;
  text-transform: uppercase; letter-spacing: .12em;
  opacity: .32; display: block; margin-bottom: 12px;
}
.pc.c-navy .pc-tag, .pc.c-red .pc-tag { opacity: .5; color: #fff; }
.pc-h {
  font-family: var(--font-head);
  font-size: clamp(20px, 2.4vw, 28px);
  font-weight: 900; text-transform: uppercase; font-style: italic;
  line-height: 1; margin-bottom: 12px;
}
.pc-body {
  font-size: 14px; line-height: 1.8; font-weight: 500;
  opacity: .68; margin-bottom: 24px; flex: 1;
}
.pc.c-navy .pc-body, .pc.c-red .pc-body { opacity: .82; color: #fff; }
.pc-stats {
  display: flex; gap: 0;
  border: var(--b-thin); overflow: hidden; margin-bottom: 20px;
}
.pc.c-navy .pc-stats, .pc.c-red .pc-stats { border-color: rgba(255,255,255,.2); }
.pc.c-teal .pc-stats, .pc.c-blue .pc-stats { border-color: rgba(29,38,49,.15); }
.pc-s {
  flex: 1; padding: 12px 8px; text-align: center;
  border-right: var(--b-thin);
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
.pc-list { display: flex; flex-direction: column; gap: 6px; }
.pc-li {
  font-size: 12px; font-weight: 600; opacity: .65; line-height: 1.45;
  display: flex; align-items: flex-start; gap: 8px;
}
.pc.c-navy .pc-li, .pc.c-red .pc-li { color: #fff; opacity: .75; }
.pc-li::before { content: "—"; flex-shrink: 0; opacity: .45; font-size: 10px; margin-top: 2px; }
@media(max-width:760px){
  .prog-grid-osx { grid-template-columns: 1fr; }
  .pc { border-right: none; }
  .pc:nth-last-child(-n+2) { border-bottom: var(--b); }
  .pc:last-child { border-bottom: none; }
}

/* ─── 4. THE SYSTEM ─── */
.sys-track {
  display: grid; grid-template-columns: repeat(5, 1fr); gap: 0;
  border: var(--b);
  overflow: hidden; box-shadow: var(--shadow); margin-top: 48px;
}
.sys-cell {
  padding: 32px 20px; border-right: var(--b);
  display: flex; flex-direction: column; gap: 12px;
  transition: background .18s;
}
.sys-cell:last-child { border-right: none; }
.sys-cell:hover { background: var(--cream); }
.sys-bar { width: 100%; height: 4px; margin-bottom: 4px; }
.sys-cell:nth-child(1) .sys-bar { background: var(--navy); }
.sys-cell:nth-child(2) .sys-bar { background: var(--red); }
.sys-cell:nth-child(3) .sys-bar { background: var(--teal); }
.sys-cell:nth-child(4) .sys-bar { background: var(--gold); }
.sys-cell:nth-child(5) .sys-bar { background: var(--blue); }
.sys-num {
  font-family: var(--font-head); font-size: clamp(22px,2.5vw,30px);
  font-weight: 900; font-style: italic; line-height: 1;
}
.sys-cell:nth-child(1) .sys-num { color: var(--navy); }
.sys-cell:nth-child(2) .sys-num { color: var(--red); }
.sys-cell:nth-child(3) .sys-num { color: var(--teal); }
.sys-cell:nth-child(4) .sys-num { color: var(--gold); }
.sys-cell:nth-child(5) .sys-num { color: var(--blue); }
.sys-name {
  font-family: var(--font-head); font-size: 13px;
  font-weight: 800; text-transform: uppercase; letter-spacing: .06em;
}
.sys-desc { font-size: 12px; font-weight: 500; color: rgba(29,38,49,.6); line-height: 1.55; }
@media(max-width:900px){
  .sys-track { grid-template-columns: 1fr 1fr; }
  .sys-cell:nth-child(2n){ border-right: none; }
  .sys-cell:nth-child(n+3){ border-top: var(--b); }
  .sys-cell:last-child { grid-column: 1 / -1; border-right: none; }
}
@media(max-width:480px){
  .sys-track { grid-template-columns: 1fr; }
  .sys-cell { border-right: none !important; border-top: var(--b) !important; }
  .sys-cell:first-child { border-top: none !important; }
}

/* ─── 5. STORIES ─── */
.stories-grid {
  display: grid; grid-template-columns: repeat(3, 1fr);
  gap: 18px; margin-top: 48px;
}
.story-card {
  border: var(--b); background: #fff;
  overflow: hidden; box-shadow: var(--shadow-sm);
  display: flex; flex-direction: column;
  transition: transform .22s, box-shadow .22s;
}
.story-card:hover { transform: translate(-4px,-6px); box-shadow: var(--shadow); }
.sc-top { padding: 22px 22px 0; }
.sc-loc {
  font-family: var(--font-ui); font-size: 8px; font-weight: 700;
  text-transform: uppercase; letter-spacing: .15em;
  padding: 4px 10px; border: 1.5px solid rgba(64,210,175,.35);
  background: rgba(64,210,175,.1); color: #1a7a64;
  display: inline-block; margin-bottom: 12px;
}
.sc-loc.gold-loc {
  border-color: rgba(214,145,0,.3);
  background: rgba(214,145,0,.1); color: var(--gold);
}
.sc-school {
  font-family: var(--font-ui); font-size: 8px; font-weight: 700;
  text-transform: uppercase; letter-spacing: .12em;
  color: rgba(29,38,49,.32); display: block; margin-bottom: 10px;
}
.sc-h {
  font-family: var(--font-head); font-size: 17px; font-weight: 900;
  text-transform: uppercase; font-style: italic; line-height: 1.05;
}
.sc-body {
  padding: 16px 22px 22px;
  border-top: var(--b); margin-top: 16px; flex: 1;
}
.sc-body p {
  font-size: 13px; font-weight: 500;
  line-height: 1.75; color: rgba(29,38,49,.68);
}
.sc-body strong { color: var(--navy); font-weight: 700; }
@media(max-width:900px){ .stories-grid { grid-template-columns: 1fr 1fr; } }
@media(max-width:560px){ .stories-grid { grid-template-columns: 1fr; } }

/* ─── 6. PRICING ─── */
.price-note {
  font-size: 14px; font-weight: 500; font-style: italic;
  color: rgba(255,255,255,.42); max-width: 440px; margin: 14px auto 0;
  text-align: center; line-height: 1.65;
}
.price-grid {
  display: grid; grid-template-columns: repeat(4, 1fr); gap: 0;
  border: var(--b-thin); border-color: rgba(255,255,255,.15);
  overflow: hidden; margin-top: 48px; position: relative; z-index: 2;
}
.ptier {
  padding: 32px 24px; border-right: 1px solid rgba(255,255,255,.1);
  display: flex; flex-direction: column;
  transition: background .18s;
}
.ptier:last-child { border-right: none; }
.ptier:hover { background: rgba(255,255,255,.04); }
.ptier.featured {
  background: var(--yellow);
  border: var(--b) !important;
  border-color: var(--navy) !important;
  position: relative; z-index: 2;
  margin: -1px;
  box-shadow: var(--shadow);
}
.ptier.featured:hover { background: #f5d155; }
.pt-rec {
  font-family: var(--font-ui); font-size: 8px; font-weight: 700;
  text-transform: uppercase; letter-spacing: .2em;
  color: var(--red); display: block; margin-bottom: 10px;
}
.ptier:not(.featured) .pt-rec { color: rgba(255,255,255,.28); }
.ptier.featured .pt-rec { color: var(--red); font-weight: 900; }
.pt-name {
  font-family: var(--font-head); font-size: clamp(18px,2vw,24px);
  font-weight: 900; text-transform: uppercase; font-style: italic;
  color: rgba(255,255,255,.85); margin-bottom: 8px; line-height: 1;
}
.ptier.featured .pt-name { color: var(--navy); }
.pt-price {
  font-family: var(--font-head); font-size: clamp(20px,2.5vw,30px);
  font-weight: 900; color: var(--yellow); margin-bottom: 4px; line-height: 1;
}
.ptier.featured .pt-price { color: var(--red); }
.pt-cycle {
  font-family: var(--font-ui); font-size: 9px; font-weight: 700;
  text-transform: uppercase; letter-spacing: .14em;
  color: rgba(255,255,255,.28); display: block; margin-bottom: 24px;
}
.ptier.featured .pt-cycle { color: rgba(29,38,49,.4); }
.pt-feats {
  display: flex; flex-direction: column; gap: 9px;
  flex: 1; margin-bottom: 24px;
}
.pt-f {
  font-size: 12px; font-weight: 600;
  color: rgba(255,255,255,.45); line-height: 1.4;
  display: flex; align-items: flex-start; gap: 8px;
}
.ptier.featured .pt-f { color: rgba(29,38,49,.65); }
.pt-f::before { content: "—"; flex-shrink: 0; opacity: .35; font-size: 10px; margin-top: 1px; }
.pt-f.on { color: rgba(255,255,255,.88); }
.ptier.featured .pt-f.on { color: var(--navy); font-weight: 700; }
.pt-f.on::before { content: "✓"; color: var(--teal); opacity: 1; font-weight: 900; }
.ptier.featured .pt-f.on::before { color: var(--red); }
@media(max-width:900px){
  .price-grid { grid-template-columns: 1fr 1fr; }
  .ptier:nth-child(2n){ border-right: none; }
  .ptier:nth-child(n+3){ border-top: 1px solid rgba(255,255,255,.1); }
  .ptier.featured { margin: 0; }
}
@media(max-width:480px){
  .price-grid { grid-template-columns: 1fr; }
  .ptier { border-right: none !important; border-top: 1px solid rgba(255,255,255,.1) !important; }
  .ptier:first-child { border-top: none !important; }
}

/* ─── 7. PROBLEM / SOLUTION ─── */
.ps-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 72px; align-items: start; }
.ps-h {
  font-family: var(--font-head); font-size: clamp(22px,3vw,38px);
  font-weight: 900; font-style: italic; line-height: 1.1; margin-bottom: 20px;
}
.ps-h .red { color: var(--red); }
.ps-intro {
  font-size: 16px; line-height: 1.85; font-weight: 500;
  color: rgba(29,38,49,.7); margin-bottom: 28px;
}
.ps-list {
  display: flex; flex-direction: column; gap: 0;
  border: var(--b); overflow: hidden; box-shadow: var(--shadow-sm);
}
.ps-row {
  padding: 16px 20px; border-bottom: var(--b);
  display: flex; align-items: flex-start; gap: 14px;
  background: #fff; transition: background .15s;
}
.ps-row:last-child { border-bottom: none; }
.ps-row:hover { background: var(--cream); }
.ps-icon { font-size: 15px; flex-shrink: 0; margin-top: 1px; line-height: 1; }
.ps-text { font-size: 14px; font-weight: 600; color: var(--navy); line-height: 1.5; }
.ps-text strong { font-weight: 800; color: var(--red); }
.sol-box {
  background: var(--navy); border: var(--b);
  padding: 36px; box-shadow: var(--shadow);
}
.sol-box-h {
  font-family: var(--font-head); font-size: clamp(18px,2vw,24px);
  font-weight: 900; font-style: italic; text-transform: uppercase;
  color: #fff; margin-bottom: 22px;
}
.sol-box-h .teal { color: var(--teal); }
.sol-list { display: flex; flex-direction: column; gap: 0; border: var(--b-thin); border-color: rgba(255,255,255,.12); overflow: hidden; }
.sol-row {
  padding: 18px 20px; border-bottom: 1px solid rgba(255,255,255,.08);
  display: flex; align-items: flex-start; gap: 14px;
  transition: background .15s;
}
.sol-row:last-child { border-bottom: none; }
.sol-row:hover { background: rgba(255,255,255,.04); }
.sol-n {
  font-family: var(--font-head); font-size: 11px; font-weight: 900;
  color: var(--teal); width: 26px; flex-shrink: 0; padding-top: 1px;
}
.sol-t strong {
  display: block; font-family: var(--font-head); font-size: 12px;
  font-weight: 800; text-transform: uppercase; letter-spacing: .06em;
  color: #fff; margin-bottom: 2px;
}
.sol-t span { font-size: 13px; font-weight: 500; color: rgba(255,255,255,.5); line-height: 1.55; }
@media(max-width:900px){ .ps-grid { grid-template-columns: 1fr; gap: 40px; } }

/* ─── 8. SERVICES ─── */
.svc-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 64px; align-items: start; }
.svc-table {
  border: var(--b); overflow: hidden;
  box-shadow: var(--shadow-sm); margin-top: 28px;
}
.svc-row {
  display: flex; align-items: center; gap: 18px;
  padding: 18px 20px; border-bottom: var(--b);
  background: #fff; transition: background .15s;
}
.svc-row:last-child { border-bottom: none; }
.svc-row:hover { background: var(--cream); }
.svc-ico {
  width: 40px; height: 40px; background: var(--navy);
  display: flex; align-items: center; justify-content: center;
  flex-shrink: 0; font-size: 18px; border: var(--b-thin);
}
.svc-label { font-family: var(--font-head); font-size: 13px; font-weight: 800; text-transform: uppercase; display: block; margin-bottom: 2px; }
.svc-note { font-size: 11px; font-weight: 500; color: rgba(29,38,49,.5); }
.svc-card {
  background: var(--gold); color: #fff;
  border: var(--b); padding: 40px;
  box-shadow: var(--shadow);
}
.svc-card h3 {
  font-family: var(--font-head); font-size: clamp(22px,2.5vw,32px);
  font-weight: 900; font-style: italic; text-transform: uppercase;
  color: #fff; margin-bottom: 14px; line-height: 1;
}
.svc-card p { font-size: 15px; font-weight: 500; color: rgba(255,255,255,.85); line-height: 1.75; margin-bottom: 20px; }
.svc-card a {
  font-family: var(--font-ui); font-size: 10px; font-weight: 700;
  text-transform: uppercase; letter-spacing: .16em;
  color: #fff; text-decoration: underline;
}
@media(max-width:900px){ .svc-grid { grid-template-columns: 1fr; gap: 40px; } }

/* ─── 9. ROADMAP + TEAM ─── */
.rm-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 72px; align-items: start; }
.rm-track {
  display: flex; flex-direction: column; gap: 0;
  border: var(--b); overflow: hidden; box-shadow: var(--shadow); margin-top: 32px;
}
.rm-row {
  padding: 24px 26px; border-bottom: var(--b);
  display: flex; align-items: flex-start; gap: 18px;
  background: #fff; transition: background .15s;
}
.rm-row:last-child { border-bottom: none; }
.rm-row:hover { background: var(--cream); }
.rm-dot { width: 14px; height: 14px; border-radius: 50%; flex-shrink: 0; margin-top: 4px; border: var(--b-thin); }
.rm-row:nth-child(1) .rm-dot { background: var(--red);  border-color: var(--red); }
.rm-row:nth-child(2) .rm-dot { background: var(--gold); border-color: var(--gold); }
.rm-row:nth-child(3) .rm-dot { background: var(--teal); border-color: var(--teal); }
.rm-term {
  font-family: var(--font-head); font-size: 16px; font-weight: 900;
  text-transform: uppercase; font-style: italic; display: block; margin-bottom: 2px;
}
.rm-period {
  font-family: var(--font-ui); font-size: 9px; font-weight: 700;
  text-transform: uppercase; letter-spacing: .18em;
  opacity: .32; display: block; margin-bottom: 6px;
}
.rm-desc { font-size: 13px; font-weight: 500; color: rgba(29,38,49,.65); line-height: 1.6; }
.rm-desc strong { color: var(--navy); font-weight: 700; }
.team-osx { display: grid; grid-template-columns: 1fr 1fr; gap: 12px; margin-top: 32px; }
.tc {
  border: var(--b); padding: 20px;
  background: #fff; box-shadow: var(--shadow-sm);
  transition: all .2s;
}
.tc:hover { transform: translate(-3px,-3px); box-shadow: var(--shadow); background: var(--cream); }
.tc-name {
  font-family: var(--font-head); font-size: 13px; font-weight: 900;
  text-transform: uppercase; font-style: italic;
  color: var(--red); margin-bottom: 3px; line-height: 1.1;
}
.tc-role {
  font-family: var(--font-ui); font-size: 9px; font-weight: 700;
  text-transform: uppercase; letter-spacing: .14em; color: rgba(29,38,49,.36);
}
@media(max-width:900px){ .rm-grid { grid-template-columns: 1fr; gap: 40px; } }

/* ─── 10. PLEDGE ─── */
.pledge-inner {
  display: flex; align-items: center; gap: 24px;
  position: relative; z-index: 2;
}
.pledge-q {
  font-family: var(--font-head); font-size: 40px; font-weight: 900;
  color: var(--teal); flex-shrink: 0; line-height: 1;
}
.pledge-text {
  font-size: 14px; font-weight: 500; font-style: italic;
  color: rgba(255,255,255,.55); line-height: 1.7;
}
.pledge-text strong { color: #fff; font-weight: 700; }
@media(max-width:700px){ .pledge-inner { flex-direction: column; text-align: center; } }

/* ─── 11. FINAL CTA ─── */
#osx-cta .halftone { opacity: .06; }
.cta-h {
  font-family: var(--font-head);
  font-size: clamp(34px, 5.5vw, 68px);
  font-weight: 900; line-height: .9; text-transform: uppercase;
  font-style: italic; color: #fff; margin: 16px 0 16px; letter-spacing: -.02em;
}
.cta-sub {
  font-size: 17px; font-weight: 500;
  color: rgba(255,255,255,.88); margin-bottom: 32px; line-height: 1.6;
}

</style>';

include 'header.php';
?>

<main style="padding-top:calc(var(--ticker-h) + 70px)">

<!-- ①  HERO -->
<section id="osx-hero" class="section-navy">
  <div class="oh-dots hero-dots"></div>
  <div class="oh-split">

    <!-- LEFT — text -->
    <div class="oh-left reveal">
      <span class="oh-pill">School Partnership Model · 2026</span>
      <h1 class="oh-h1">Transform<br/>Students<br/>Into <em>Leaders.</em></h1>
      <p class="oh-sub">A practical school partnership that turns your existing prefect system into measurable, student-led action — training, tools, and accountability built in from day one.</p>
      <div class="oh-btns">
        <a href="#pricing" class="btn btn-white">Choose Your Tier →</a>
        <a href="contact.php" class="btn btn-outline-white">Book a Meeting</a>
      </div>
      <div class="oh-strip stat-strip">
        <div class="oh-cell stat-strip-cell">
          <span class="oh-num stat-strip-num">40</span>
          <span class="oh-lbl stat-strip-lbl">Schools</span>
        </div>
        <div class="oh-cell oh-cell-pad stat-strip-cell">
          <span class="oh-num stat-strip-num">574</span>
          <span class="oh-lbl stat-strip-lbl">Leaders Trained</span>
        </div>
        <div class="oh-cell oh-cell-pad stat-strip-cell">
          <span class="oh-num stat-strip-num">$150K</span>
          <span class="oh-lbl stat-strip-lbl">Kyanja Prize</span>
        </div>
        <div class="oh-cell oh-cell-pad stat-strip-cell">
          <span class="oh-num stat-strip-num">'20</span>
          <span class="oh-lbl stat-strip-lbl">Since</span>
        </div>
      </div>
    </div>

    <!-- RIGHT — stacked photos -->
    <div class="oh-right">
      <div class="oh-photo img-grayscale">
        <img src="https://scontent.ftlv19-2.fna.fbcdn.net/v/t39.30808-6/480921922_679986591017773_8574608311739862468_n.jpg?stp=c267.0.1067.1067a_dst-jpg_s552x414_tt6&_nc_cat=110&ccb=1-7&_nc_sid=5df8b4&_nc_ohc=qW8cgYJv-HEQ7kNvwHLzBfJ&_nc_oc=Adn19MYc2iG6YjyNbiaytWAJHbYCbohJ-7-7U8rbZN3Ab_2V9LCfy_BF3vxA72c9N9PsFvx--fb8dTurxkE_AMfL&_nc_zt=23&_nc_ht=scontent.ftlv19-2.fna&_nc_gid=PavKO5Bv61uYXSbIdr151Q&_nc_ss=8&oh=00_AfxdQbd5d8mqL-E619BlAy5nbdTs8wco4d8smncpb5pBVA&oe=69B0CDFF" alt="Youth-led project work — Omuto Foundation" loading="eager"/>
        <span class="oh-photo-lbl">Youth Action · Mpigi District</span>
      </div>
      <div class="oh-photo img-grayscale">
        <img src="https://scontent.ftlv19-3.fna.fbcdn.net/v/t39.30808-6/479510278_671916641824768_165185212080284169_n.jpg?stp=c342.0.1365.1365a_dst-jpg_s552x414_tt6&_nc_cat=106&ccb=1-7&_nc_sid=a934a8&_nc_ohc=kArFpSvBJ5sQ7kNvwGVlIiF&_nc_oc=AdkBwBbcoSDxHNkJVfj8mHxPyBFfan1z7HXhhJlwGMfvEmVCtM8X8T_NLDSF65poKmX6Dlb4Q0VXBWxpfZLLauWl&_nc_zt=23&_nc_ht=scontent.ftlv19-3.fna&_nc_gid=79UYzfS-7_qhe7TSQ_yw6g&_nc_ss=8&oh=00_AfyTXOsbEXOzn-BY7R_wNoTHnhM0CPCk0SNAOHJFMhjXsg&oe=69B0F52D" alt="Omuto youth in community action" loading="eager"/>
        <span class="oh-photo-lbl">Student Leaders Forum · 2025</span>
      </div>
    </div>

  </div>
</section>

<!-- ②  KYANJA — lead proof -->
<section id="kyanja" class="section-yellow">
  <div class="kyanja-photo img-grayscale-light">
    <img src="https://scontent.ftlv19-1.fna.fbcdn.net/v/t39.30808-6/615225873_1401241771412487_8236127724590046681_n.jpg?stp=cp6_dst-jpg_tt6&_nc_cat=103&ccb=1-7&_nc_sid=7b2446&_nc_ohc=uou0iADwOLAQ7kNvwFwsNvY&_nc_oc=AdnTXxy0S-UPz4pmTu2DLUuB8DBlBCM6EYcAdj3YlHB4JBYuQeqxI-13V_GOqWa4i_iDxv-LfTtrjtVfAYhOWW63&_nc_zt=23&_nc_ht=scontent.ftlv19-1.fna&_nc_gid=b20Tissf1eCKboSOkCNr5w&_nc_ss=8&oh=00_AfzK3pPEdegjUO_a2OnJzEgx-LkltrfCJr-Xzewwq_lvbA&oe=69B11151" alt="Kyanja High School Ecoloop team — Zayed Sustainability Prize 2025" loading="lazy"/>
    <span class="kyanja-photo-cap">Kyanja High School · Ecoloop · Zayed Sustainability Prize 2025 · $150,000 USD</span>
  </div>
  <div class="kyanja-wrap grid-2">
    <div class="kyanja-l reveal">
      <span class="kyanja-tag">Proof It Works · Zayed Sustainability Prize 2025</span>
      <h2 class="kyanja-prize">Kyanja High<br/>Won <span>$150,000.</span></h2>
      <p class="kyanja-body">
        After Omuto installed the SLF and GreenSchools system, Kyanja students launched <strong>Ecoloop</strong> — an environmental innovation project that won one of the world's most prestigious sustainability prizes. <strong>Omuto didn't win. The students did.</strong> Our role was training the leadership system that made it possible.
      </p>
      <a href="impact.php#kyanja" class="kyanja-link">Read the full case study →</a>
    </div>
    <div class="kyanja-r reveal rd2">
      <p class="kyanja-big"><span class="y">Leadership is a skill,</span><br/>not a title.<br/>We train both.</p>
      <div class="kyanja-facts">
        <div class="kf">
          <span class="kf-n">574</span>
          <p class="kf-t"><strong>student leaders trained</strong> across Mpigi and Butambala since 2020</p>
        </div>
        <div class="kf">
          <span class="kf-n">40</span>
          <p class="kf-t"><strong>schools</strong> have run the chapter system with documented outcomes</p>
        </div>
        <div class="kf">
          <span class="kf-n">174</span>
          <p class="kf-t"><strong>new leaders trained in 2025 alone</strong> — the programme is accelerating</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ③  PROGRAMMES — tight grid, no deep dives -->
<section id="programmes" class="section-cream">
  <span class="prog-wm-osx watermark" aria-hidden="true">PROGRAMMES</span>
  <div class="container">
    <div class="prog-intro">
      <div class="reveal">
        <span class="eyebrow ew-red">What Gets Installed</span>
        <h2 class="t-section">Four Active<br/><em class="line-red">Programmes</em></h2>
      </div>
      <div class="prog-intro-r reveal rd2">
        <p>Each programme runs as a student-led action team inside your school. You choose which ones to activate — all are included from the Active tier upwards.</p>
      </div>
    </div>

    <div class="prog-grid-osx grid-3-tight">

      <!-- SLF -->
      <div class="pc c-navy reveal">
        <span class="pc-tag">01 — Student Leaders Forum</span>
        <h3 class="pc-h">Leadership<br/>&amp; Debate</h3>
        <p class="pc-body">We retrain prefects from commanders into servant leaders. The SLF curriculum covers ethics, public speaking, project management, and conflict resolution. Termly debate championships build confidence and English fluency.</p>
        <div class="pc-stats">
          <div class="pc-s"><b>574</b><small>Trained total</small></div>
          <div class="pc-s"><b>174</b><small>In 2025</small></div>
          <div class="pc-s"><b>40</b><small>Schools</small></div>
        </div>
        <div class="pc-list">
          <div class="pc-li">Ethics, planning, public speaking, conflict resolution</div>
          <div class="pc-li">Termly interschool debate championships</div>
          <div class="pc-li">Featured on Omuto Pulse media</div>
        </div>
      </div>

      <!-- RED -->
      <div class="pc c-red reveal rd2">
        <span class="pc-tag">02 — RED Campaign</span>
        <h3 class="pc-h">Menstrual<br/>Dignity</h3>
        <p class="pc-body">We don't just hand out pads — we build a system. The RED Campaign ensures no girl drops out of school due to her period. Student RED Brigades run peer education, hygiene advocacy, and local dialogue sessions.</p>
        <div class="pc-stats">
          <div class="pc-s"><b>700+</b><small>Girls reached</small></div>
          <div class="pc-s"><b>238</b><small>Kits 2025</small></div>
          <div class="pc-s"><b>7</b><small>Brigades</small></div>
        </div>
        <div class="pc-list">
          <div class="pc-li">Reusable pad distribution and hygiene kits</div>
          <div class="pc-li">School assemblies and peer education sessions</div>
          <div class="pc-li">Mental health and wellbeing integration</div>
        </div>
      </div>

      <!-- GreenSchools -->
      <div class="pc c-teal reveal">
        <span class="pc-tag">03 — GreenSchools</span>
        <h3 class="pc-h">Environmental<br/>Action</h3>
        <p class="pc-body">Student Green Teams lead tree planting, composting workshops, school garden projects, and environmental education — all documented and reported on. Kyanja's team won a $150,000 global prize doing exactly this.</p>
        <div class="pc-stats">
          <div class="pc-s"><b>39</b><small>Campaigns</small></div>
          <div class="pc-s"><b>6</b><small>Green teams</small></div>
          <div class="pc-s"><b>7</b><small>Gardens</small></div>
        </div>
        <div class="pc-list">
          <div class="pc-li">Tree planting drives with nursery partners</div>
          <div class="pc-li">School gardens and composting projects</div>
          <div class="pc-li">Ecoloop framework — Zayed Prize winner</div>
        </div>
      </div>

      <!-- PureWater -->
      <div class="pc c-blue reveal rd2">
        <span class="pc-tag">04 — PureWater Initiative</span>
        <h3 class="pc-h">Clean Water<br/>Every Day</h3>
        <p class="pc-body">We install Spouts Purifaaya ceramic filters and train student teams to maintain them. Zero firewood. Zero waterborne disease from drinking water. Students learn hygiene science by doing it — then teach others.</p>
        <div class="pc-stats">
          <div class="pc-s"><b>3.2K</b><small>Students</small></div>
          <div class="pc-s"><b>0</b><small>Firewood</small></div>
          <div class="pc-s"><b>100%</b><small>Youth-run</small></div>
        </div>
        <div class="pc-list">
          <div class="pc-li">Spouts Purifaaya filter installation</div>
          <div class="pc-li">Student maintenance teams trained on-site</div>
          <div class="pc-li">Reduced disease, improved concentration</div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ④  THE 5-STEP CHAPTER SYSTEM -->
<section id="system" class="section-white">
  <div class="container">
    <div class="reveal" style="text-align:center">
      <span class="eyebrow ew-navy">How It Works</span>
      <h2 class="t-section">The Chapter<br/><em class="line-red">System</em></h2>
      <p class="t-body" style="opacity:.62;max-width:440px;margin:12px auto 0">Five steps. One school year. Leadership infrastructure that runs itself.</p>
    </div>
    <div class="sys-track grid-5 reveal">
      <div class="sys-cell">
        <div class="sys-bar"></div>
        <span class="sys-num">01</span>
        <p class="sys-name">Register</p>
        <p class="sys-desc">Simple form. Appoint one patron teacher. No complex MOU required to start.</p>
      </div>
      <div class="sys-cell">
        <div class="sys-bar"></div>
        <span class="sys-num">02</span>
        <p class="sys-name">Launch</p>
        <p class="sys-desc">On-site orientation session. Printed toolkits delivered. Leaders formally commissioned.</p>
      </div>
      <div class="sys-cell">
        <div class="sys-bar"></div>
        <span class="sys-num">03</span>
        <p class="sys-name">Action Teams</p>
        <p class="sys-desc">Students join RED, GreenSchools, or Debate &amp; Civic Action — whichever your school activates.</p>
      </div>
      <div class="sys-cell">
        <div class="sys-bar"></div>
        <span class="sys-num">04</span>
        <p class="sys-name">Support</p>
        <p class="sys-desc">Structured monitoring visits, monthly scorecards, and full project documentation every term.</p>
      </div>
      <div class="sys-cell">
        <div class="sys-bar"></div>
        <span class="sys-num">05</span>
        <p class="sys-name">Recognition</p>
        <p class="sys-desc">Certificates, awards, media features, and leadership transition planning for the next intake.</p>
      </div>
    </div>
  </div>
</section>

<!-- PHOTO STRIP -->
<div id="photo-strip">
  <div class="ps-img">
    <img src="https://scontent.ftlv19-2.fna.fbcdn.net/v/t39.30808-6/476896815_671279225221843_1032820912016263947_n.jpg?stp=c342.0.1365.1365a_dst-jpg_s552x414_tt6&_nc_cat=109&ccb=1-7&_nc_sid=a934a8&_nc_ohc=OmZtODDPfaYQ7kNvwFohJw3&_nc_oc=Admoz2KNxIdWk84H-Zk1zSpJYh2J4DaBmxLMvsvRtMJY6gt7qrOaZxG-0JblcyWdO1hUTDWa2OxFyeUMuETW3X7U&_nc_zt=23&_nc_ht=scontent.ftlv19-2.fna&_nc_gid=6ldJHiobwjspU4JW7sg2Cg&_nc_ss=8&oh=00_Afwv36OPchLjs3u0Odp2RuSuno36IMA8BveuDJetA8_MxA&oe=69B0C681" alt="Student leadership session" loading="lazy" class="img-hover-scale"/>
    <span class="ps-img-label">Student Leaders Forum · Mpigi 2025</span>
  </div>
  <div class="ps-img">
    <img src="https://www.globalgiving.org/pfil/63544/IMG_0517_Large.jpeg" alt="RED Campaign session" loading="lazy" class="img-hover-scale"/>
    <span class="ps-img-label">RED Campaign · Dignity Kits</span>
  </div>
  <div class="ps-img">
    <img src="https://scontent.ftlv19-3.fna.fbcdn.net/v/t39.30808-6/480860931_679995001016932_4611239094514458600_n.jpg?stp=dst-jpg_s552x414_tt6&_nc_cat=106&ccb=1-7&_nc_sid=a934a8&_nc_ohc=_0uJpCuYZN4Q7kNvwF5IVR8&_nc_oc=Adlg4B-OKcKW3m1xfMbWH-u2CVHJ5Ck3tcbeT4m-EKEyzfdOkUZpRVceCPWhIf9BemdrERTco-CpjTXZR4C3ARHH&_nc_zt=23&_nc_ht=scontent.ftlv19-3.fna&_nc_gid=NHoSxjjLNAyvUTzmzB_VaQ&_nc_ss=8&oh=00_AfxtlkUCmZZUms55SVUW39a3BR6eyyDArFd4zJZnGreo3w&oe=69B0F032" alt="GreenSchools tree planting" loading="lazy" class="img-hover-scale"/>
    <span class="ps-img-label">GreenSchools · Tree Planting</span>
  </div>
</div>

<!-- ⑤  STORIES -->
<section id="stories" class="section-cream">
  <div class="container">
    <div class="reveal" style="text-align:center">
      <span class="eyebrow ew-teal">Field Report 2025</span>
      <h2 class="t-section">Stories of <em class="line-red">Change</em></h2>
      <p class="t-body" style="opacity:.62;max-width:480px;margin:12px auto 0">What happens when you give students real tools and real responsibility.</p>
    </div>
    <div class="stories-grid grid-3">

      <div class="story-card reveal">
        <div class="sc-img">
          <img src="https://scontent.ftlv19-2.fna.fbcdn.net/v/t39.30808-6/476838397_671279345221831_4548276021285878824_n.jpg?stp=c342.0.1365.1365a_dst-jpg_s552x414_tt6&_nc_cat=105&ccb=1-7&_nc_sid=a934a8&_nc_ohc=qkFO1ZbtoT8Q7kNvwHpEqOP&_nc_oc=AdlVRzKkMEH_TByGW2ybw2Wr_81SUm6Pp0bflE5uT7ffRVu_KZUfQoGWbUk0MvBGrSKtU-ABzB9sXyb6nH72hfuk&_nc_zt=23&_nc_ht=scontent.ftlv19-2.fna&_nc_gid=6ldJHiobwjspU4JW7sg2Cg&_nc_ss=8&oh=00_AfyIBOABC4ycYMZrqd7K1yeXOSUIQBGQ0PwNIPqTkjmHZA&oe=69B0EFC7" alt="Mitaramaria Hill Secondary students" loading="lazy" class="img-hover-scale img-grayscale-light"/>
        </div>
        <div class="sc-top">
          <span class="sc-loc">Buwama</span>
          <span class="sc-school">Mitaramaria Hill Secondary</span>
          <h3 class="sc-h">The Student Investors</h3>
        </div>
        <div class="sc-body">
          <p>After SLF financial literacy training, the student council launched their own <strong>Savings &amp; Investment Club</strong>. They now pool resources to fund school requirements for needy students — without waiting for administration.</p>
        </div>
      </div>

      <div class="story-card reveal rd2">
        <div class="sc-img">
          <img src="https://scontent.ftlv19-1.fna.fbcdn.net/v/t39.30808-6/479285217_671916531824779_1464741376816009831_n.jpg?stp=c342.0.1365.1365a_dst-jpg_s552x414_tt6&_nc_cat=100&ccb=1-7&_nc_sid=a934a8&_nc_ohc=MXaD23FXPZoQ7kNvwG6Hk_h&_nc_oc=AdnDN8iGo2hFBwgrkwnX8kfOQTfjoKcuPgj0AboIKlc0QH0hGPJFzPOT5y5UO9acM0Kt6y3Nh37UpgwFbDhiGNB5&_nc_zt=23&_nc_ht=scontent.ftlv19-1.fna&_nc_gid=t-9c0xW7awEyZ8WtEaiMHw&_nc_ss=8&oh=00_AfwPemPFDGI2ydLXKR9XuSSXBj-iSG-j5iSO1ZSqRP637g&oe=69B0E8C4" alt="Mitaramaria Standard Primary book project" loading="lazy" class="img-hover-scale img-grayscale-light"/>
        </div>
        <div class="sc-top">
          <span class="sc-loc">Buwama</span>
          <span class="sc-school">Mitaramaria Standard Primary</span>
          <h3 class="sc-h">The Culture Authors</h3>
        </div>
        <div class="sc-body">
          <p>Applying project management skills from the forum, prefects initiated a <strong>Book Writing Project</strong> to preserve Buganda culture. They are documenting local history so future students know where they come from.</p>
        </div>
      </div>

      <div class="story-card reveal rd3">
        <div class="sc-img">
          <img src="https://scontent.ftlv19-1.fna.fbcdn.net/v/t39.30808-6/480027248_671916561824776_701939243737967098_n.jpg?stp=c342.0.1365.1365a_dst-jpg_s552x414_tt6&_nc_cat=100&ccb=1-7&_nc_sid=a934a8&_nc_ohc=gyXusTBlWkEQ7kNvwHY33YV&_nc_oc=Adk33tCx04_lA6q1GXFIjnsO7ul-7GfusBHOvO_66KlARVBS_aHhqin2kBHhXIi4rqm85o_P9toRRJ9-t8_EC9tH&_nc_zt=23&_nc_ht=scontent.ftlv19-1.fna&_nc_gid=ckDtdeBTwbb6QkgZ-QfLHA&_nc_ss=8&oh=00_AfwdLNarqH8dOnYEtvk3qfXOyKjC3K_8nj5tRBsAKC8OZQ&oe=69B0CBCC" alt="St Bonaventure peer support circles" loading="lazy" class="img-hover-scale img-grayscale-light"/>
        </div>
        <div class="sc-top">
          <span class="sc-loc gold-loc">Kanyike</span>
          <span class="sc-school">St. Bonaventure Primary</span>
          <h3 class="sc-h">Mental Health Circles</h3>
        </div>
        <div class="sc-body">
          <p>In partnership with MHAMIA, student leaders established <strong>Peer Support Circles</strong>. They now mediate conflicts and identify mental health challenges early — creating a school environment where students feel safe to talk.</p>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ⑥  PRICING -->
<section id="pricing" class="section-navy">
  <div class="halftone halftone-light"></div>
  <div class="container">
    <div class="reveal" style="text-align:center">
      <span class="eyebrow ew-white">2026 Investment Model</span>
      <h2 class="t-section" style="color:#fff">Choose Your <em style="color:var(--yellow)">Tier</em></h2>
      <p class="price-note">Designed for school cashflow — paid termly. All tiers include training, toolkits, and monitoring. Only <strong style="color:#fff">12 slots per term</strong> to protect quality.</p>
    </div>
    <div class="price-grid grid-4 reveal">

      <!-- Partner -->
      <div class="ptier">
        <span class="pt-rec">Entry Level</span>
        <p class="pt-name">Partner</p>
        <p class="pt-price">UGX 200k</p>
        <span class="pt-cycle">per year · paid termly</span>
        <div class="pt-feats">
          <p class="pt-f on">1 training session per term</p>
          <p class="pt-f on">1 monitoring visit per term</p>
          <p class="pt-f on">Digital materials and guides</p>
          <p class="pt-f on">Digital certificates for students</p>
          <p class="pt-f">Printed toolkit</p>
          <p class="pt-f">Patron recognition plaque</p>
          <p class="pt-f">Media feature</p>
        </div>
        <a href="contact.php" class="btn btn-outline-white btn-sm" style="text-align:center;justify-content:center">Select →</a>
      </div>

      <!-- Active — featured -->
      <div class="ptier featured">
        <span class="pt-rec">★ Recommended</span>
        <p class="pt-name">Active</p>
        <p class="pt-price">UGX 400k</p>
        <span class="pt-cycle">per year · paid termly</span>
        <div class="pt-feats">
          <p class="pt-f on">1 full training per term</p>
          <p class="pt-f on">2 monitoring visits per term</p>
          <p class="pt-f on">Printed toolkit delivered</p>
          <p class="pt-f on">Student certificates (printed)</p>
          <p class="pt-f on">Patron recognition certificate</p>
          <p class="pt-f on">Monthly scorecard reports</p>
          <p class="pt-f">School entrance plaque</p>
        </div>
        <a href="contact.php" class="btn btn-red btn-sm" style="text-align:center;justify-content:center;background:var(--navy);border-color:var(--navy);color:#fff">Start Here →</a>
      </div>

      <!-- Advanced -->
      <div class="ptier">
        <span class="pt-rec">Growing Schools</span>
        <p class="pt-name">Advanced</p>
        <p class="pt-price">UGX 500k</p>
        <span class="pt-cycle">per year · paid termly</span>
        <div class="pt-feats">
          <p class="pt-f on">2 full trainings per term</p>
          <p class="pt-f on">2 monitoring visits per term</p>
          <p class="pt-f on">Printed toolkit + extras</p>
          <p class="pt-f on">Premium student certificates</p>
          <p class="pt-f on">School entrance plaque</p>
          <p class="pt-f on">Regular media features</p>
          <p class="pt-f on">5% service discount</p>
        </div>
        <a href="contact.php" class="btn btn-outline-white btn-sm" style="text-align:center;justify-content:center">Select →</a>
      </div>

      <!-- Flagship -->
      <div class="ptier">
        <span class="pt-rec">★ Top Tier</span>
        <p class="pt-name">Flagship</p>
        <p class="pt-price">UGX 800k</p>
        <span class="pt-cycle">per year · paid termly</span>
        <div class="pt-feats">
          <p class="pt-f on">Priority partner status</p>
          <p class="pt-f on">3 visits per term</p>
          <p class="pt-f on">Omuto Pulse media feature</p>
          <p class="pt-f on">Professional event coverage</p>
          <p class="pt-f on">UGX 50k materials grant</p>
          <p class="pt-f on">All Advanced benefits</p>
          <p class="pt-f on">Annual Impact Report mention</p>
        </div>
        <a href="contact.php" class="btn btn-red btn-sm" style="text-align:center;justify-content:center">Select →</a>
      </div>

    </div>
  </div>
</section>

<!-- ⑦  PROBLEM / SOLUTION -->
<section id="probsol" class="section-cream">
  <div class="container">
    <div class="ps-grid grid-2">
      <div class="reveal">
        <span class="eyebrow ew-red" style="margin-bottom:24px">The Problem We Solve</span>
        <p class="ps-h">Titles without<br/><span class="red">training.</span></p>
        <p class="ps-intro">Every school has prefects. Almost none have been trained to actually lead. The result is the same everywhere — clubs that exist on paper, students waiting to be told what to do, teachers carrying everything themselves.</p>
        <div class="ps-list bordered-list">
          <div class="ps-row"><span class="ps-icon">✗</span><p class="ps-text">Prefects who command but haven't learned to lead</p></div>
          <div class="ps-row"><span class="ps-icon">✗</span><p class="ps-text">Clubs that exist on paper but produce nothing</p></div>
          <div class="ps-row"><span class="ps-icon">✗</span><p class="ps-text">Students waiting to be pushed instead of self-starting</p></div>
          <div class="ps-row"><span class="ps-icon">✗</span><p class="ps-text">Teachers carrying the full load of student motivation</p></div>
          <div class="ps-row" style="background:rgba(238,39,38,.04)">
            <span class="ps-icon">⚠</span>
            <p class="ps-text"><strong>Root cause: Titles without training, action without accountability</strong></p>
          </div>
        </div>
      </div>
      <div class="reveal rd2">
        <div class="sol-box">
          <p class="sol-box-h">The Omuto <span class="teal">Fix</span></p>
          <div class="sol-list bordered-list-dark">
            <div class="sol-row"><span class="sol-n">01</span><div class="sol-t"><strong>Train Real Skills</strong><span>Planning, mobilising, conflict resolution, public speaking — tools, not theory.</span></div></div>
            <div class="sol-row"><span class="sol-n">02</span><div class="sol-t"><strong>Provide the Tools</strong><span>Printed logbooks, monthly scorecards, project planning templates, and a patron guide.</span></div></div>
            <div class="sol-row"><span class="sol-n">03</span><div class="sol-t"><strong>Track Results</strong><span>Monitoring visits and documented outcomes every term — nothing left to guesswork.</span></div></div>
            <div class="sol-row"><span class="sol-n">04</span><div class="sol-t"><strong>Build the Habit</strong><span>By year end, student leaders run sessions themselves. You step back. They step up.</span></div></div>
            <div class="sol-row"><span class="sol-n">05</span><div class="sol-t"><strong>Transfer Ownership</strong><span>Graduating leaders hand over to the next intake. The system runs without Omuto present.</span></div></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ⑧  SERVICES -->
<section id="services" class="section-white">
  <div class="container">
    <div class="svc-grid grid-2-sm">
      <div class="reveal">
        <span class="eyebrow ew-navy" style="margin-bottom:24px">Optional Add-Ons</span>
        <h2 class="t-section" style="font-size:clamp(28px,3.5vw,44px)">Schools buy.<br/><em class="line-red">Youth earn.</em></h2>
        <p style="font-size:15px;line-height:1.85;font-weight:500;color:rgba(29,38,49,.68);margin-bottom:4px">Beyond training, we provide youth-led professional services at competitive rates — separate from your partnership fee. When schools buy from Omuto, they directly fund the programmes.</p>
        <p style="font-size:11px;font-style:italic;opacity:.38;margin-bottom:24px">Services are quoted separately from partnership fees.</p>
        <div class="svc-table bordered-list">
          <div class="svc-row">
            <div class="svc-ico">🖨️</div>
            <div><span class="svc-label">Printing</span><span class="svc-note">Exams, holiday packages, circulars, reports</span></div>
          </div>
          <div class="svc-row">
            <div class="svc-ico">👕</div>
            <div><span class="svc-label">Tailoring</span><span class="svc-note">Uniforms, sportswear, branded school kits</span></div>
          </div>
          <div class="svc-row">
            <div class="svc-ico">🎬</div>
            <div><span class="svc-label">Media Coverage</span><span class="svc-note">Event documentation, promos, photography</span></div>
          </div>
          <div class="svc-row">
            <div class="svc-ico">🎨</div>
            <div><span class="svc-label">Design &amp; Signage</span><span class="svc-note">Banners, signposts, school profiles, branding</span></div>
          </div>
        </div>
      </div>
      <div class="reveal rd2">
        <div class="svc-card">
          <h3>Support Local.<br/>Build Youth.</h3>
          <p>When your school buys printing, tailoring, or media from Omuto, you are directly employing young people in Mpigi. The money doesn't leave the district — it funds the next student's training and the next project.</p>
          <a href="contact.php">Request a Rate Card →</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ⑨  ROADMAP + TEAM -->
<section id="roadmap" class="section-cream">
  <div class="container">
    <div class="rm-grid grid-2">
      <div class="reveal">
        <span class="eyebrow ew-navy" style="margin-bottom:20px">2026 Calendar</span>
        <h2 class="t-section" style="font-size:clamp(28px,3.5vw,44px)">Three Terms.<br/><em class="line-red">One Year.</em></h2>
        <div class="rm-track bordered-list">
          <div class="rm-row">
            <div class="rm-dot"></div>
            <div>
              <span class="rm-term">Term 1 — Foundation</span>
              <span class="rm-period">February – April 2026</span>
              <p class="rm-desc">Registration, orientation launches, toolkits delivered. First scorecard cycle. Leaders formally commissioned.</p>
            </div>
          </div>
          <div class="rm-row">
            <div class="rm-dot"></div>
            <div>
              <span class="rm-term">Term 2 — Implementation</span>
              <span class="rm-period">May – August 2026</span>
              <p class="rm-desc">Deep training sessions, monitoring visits, visible school improvements through RED and GreenSchools action teams.</p>
            </div>
          </div>
          <div class="rm-row">
            <div class="rm-dot"></div>
            <div>
              <span class="rm-term">Term 3 — Results</span>
              <span class="rm-period">September – December 2026</span>
              <p class="rm-desc">End-of-year reports, awards and certificates, leadership transition planning. <strong>Public Impact Report shared with all partners.</strong></p>
            </div>
          </div>
        </div>
      </div>
      <div class="reveal rd2">
        <span class="eyebrow ew-navy" style="margin-bottom:20px">Delivery Team</span>
        <h2 class="t-section" style="font-size:clamp(28px,3.5vw,44px)">Who You'll<br/><em class="line-red">Work With</em></h2>
        <div class="team-osx">
          <div class="tc">
            <p class="tc-name">Dianah Nansikombi</p>
            <p class="tc-role">Programs &amp; Partnerships</p>
          </div>
          <div class="tc">
            <p class="tc-name">Costantine Kasirye</p>
            <p class="tc-role">Operations &amp; Field</p>
          </div>
          <div class="tc">
            <p class="tc-name">Alex Nsereko</p>
            <p class="tc-role">Media &amp; Communications</p>
          </div>
          <div class="tc">
            <p class="tc-name">McMike Mutumba</p>
            <p class="tc-role">Strategy &amp; Oversight</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ⑩  INTEGRITY PLEDGE -->
<section id="pledge" class="section-navy">
  <div class="halftone halftone-light"></div>
  <div class="container">
    <div class="pledge-inner reveal">
      <span class="pledge-q">"</span>
      <p class="pledge-text">
        <strong>Our policy on allowances:</strong> We do not pay allowances for participation because it creates dependency. We invest funds into systems, materials, and skills training that remain in the school long after we leave. The goal is a programme that runs itself — without Omuto in the room.
      </p>
      <span class="pledge-q">"</span>
    </div>
  </div>
</section>

<!-- ⑪  FINAL CTA -->
<section id="osx-cta" class="section-red">
  <div class="halftone"></div>
  <div class="container">
    <div class="cta-inner cta-section reveal">
      <span class="eyebrow ew-white">Register for 2026</span>
      <h2 class="cta-h">Ready to<br/>Transform?</h2>
      <p class="cta-sub">Secure your school's slot for Term 1 2026. Only 12 partner slots per term — we cap numbers to protect quality of delivery.</p>
      <div class="cta-btns">
        <a href="contact.php" class="btn btn-white" style="padding:16px 36px;font-size:13px">Register Your School →</a>
        <a href="mailto:info@omuto.org" class="btn btn-navy" style="padding:16px 36px;font-size:13px">Request a Meeting</a>
      </div>
      <p class="cta-note">Trusted by schools across Mpigi &amp; Butambala since 2020 · Registered NGO · info@omuto.org</p>
    </div>
  </div>
</section>

</main>

<?php include 'footer.php'; ?>
