<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta name="description" content="Omuto Football Alliance — a youth-led sports platform in rural Uganda that builds leaders through football. Organized teams, structured competition, real pathways."/>
<title>Omuto Football Alliance | OFA</title>
<meta name="theme-color" content="#1D2631"/>
<link rel="canonical" href="https://omuto.org/ofa"/>
<link rel="icon" type="image/png" href="https://i.imgur.com/onkikq1.png"/>
<meta property="og:type" content="website"/>
<meta property="og:title" content="Omuto Football Alliance — Football With Purpose"/>
<meta property="og:description" content="In rural Uganda, football is identity. OFA organizes teams, mentors captains, and builds leaders. This is football with structure. Football with a future."/>
<meta property="og:image" content="https://i.imgur.com/onkikq1.png"/>
<meta property="og:url" content="https://omuto.org/ofa"/>
<meta name="twitter:card" content="summary_large_image"/>
<link rel="preconnect" href="https://fonts.googleapis.com"/>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
<link href="https://fonts.googleapis.com/css2?family=Inter:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,700;1,800;1,900&family=Space+Grotesk:wght@500;600;700&family=Gochi+Hand&display=swap" rel="stylesheet"/>
<style>
:root{
  --red:#EE2726;--navy:#1D2631;--cream:#F9F6EE;--yellow:#FFCF5D;
  --teal:#40D2AF;--blue:#96D9F2;--gold:#D69100;--green:#3DB86B;
  --font-head:'Inter',system-ui,sans-serif;
  --font-ui:'Space Grotesk',sans-serif;
  --font-sketch:'Gochi Hand',cursive;
  --b:4px solid #1D2631;--b-thin:2px solid #1D2631;
  --shadow:8px 8px 0 #1D2631;--shadow-sm:4px 4px 0 #1D2631;--shadow-lg:12px 12px 0 #1D2631;
  --radius:16px;--radius-sm:10px;
  --ticker-h:32px;
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
.line-red{color:var(--red)}
.line-yellow{color:var(--yellow)}
.eyebrow{font-family:var(--font-ui);font-size:10px;font-weight:700;text-transform:uppercase;letter-spacing:.22em;display:inline-block;padding:5px 14px;border-radius:30px;margin-bottom:16px}
.ew-red{background:rgba(238,39,38,.1);border:1.5px solid rgba(238,39,38,.3);color:var(--red)}
.ew-teal{background:rgba(64,210,175,.12);border:1.5px solid rgba(64,210,175,.35);color:#1a7a64}
.ew-navy{background:rgba(29,38,49,.07);border:1.5px solid rgba(29,38,49,.2);color:var(--navy)}
.ew-yellow{background:rgba(255,207,93,.25);border:1.5px solid rgba(255,207,93,.6);color:#7a5d00}
.ew-white{background:rgba(255,255,255,.15);border:1.5px solid rgba(255,255,255,.35);color:rgba(255,255,255,.9)}
.btn{display:inline-flex;align-items:center;gap:8px;font-family:var(--font-ui);font-size:12px;font-weight:700;text-transform:uppercase;letter-spacing:.1em;padding:14px 28px;border-radius:var(--radius-sm);border:var(--b);cursor:pointer;transition:all .18s ease;white-space:nowrap}
.btn-red{background:var(--red);color:#fff;box-shadow:var(--shadow-sm)}.btn-red:hover{transform:translate(-3px,-3px);box-shadow:var(--shadow)}
.btn-white{background:#fff;color:var(--navy);box-shadow:var(--shadow-sm)}.btn-white:hover{transform:translate(-2px,-2px);box-shadow:var(--shadow);background:var(--yellow)}
.btn-navy{background:var(--navy);color:#fff;box-shadow:var(--shadow-sm)}.btn-navy:hover{transform:translate(-2px,-2px);box-shadow:var(--shadow)}
.btn-yellow{background:var(--yellow);color:var(--navy);box-shadow:var(--shadow-sm);border-color:var(--navy)}.btn-yellow:hover{transform:translate(-2px,-2px);box-shadow:var(--shadow)}
.btn-outline-white{background:transparent;color:#fff;border-color:rgba(255,255,255,.4)}.btn-outline-white:hover{background:rgba(255,255,255,.12)}
.btn-sm{padding:10px 20px;font-size:11px}
.halftone{position:absolute;inset:0;background-image:radial-gradient(circle,rgba(29,38,49,.07) 1px,transparent 1px);background-size:22px 22px;pointer-events:none}
.halftone-light{background-image:radial-gradient(circle,rgba(255,255,255,.06) 1px,transparent 1px)}
.reveal{opacity:0;transform:translateY(28px);transition:opacity .55s ease,transform .55s ease}
.reveal.visible{opacity:1;transform:none}
.rd1{transition-delay:.08s}.rd2{transition-delay:.16s}.rd3{transition-delay:.24s}.rd4{transition-delay:.32s}

/* TICKER */
#ticker{position:fixed;top:0;left:0;width:100%;height:var(--ticker-h);background:var(--navy);color:#fff;border-bottom:3px solid var(--red);z-index:800;display:flex;align-items:center;justify-content:center}
.ticker-item{font-family:var(--font-ui);font-size:10px;font-weight:700;text-transform:uppercase;letter-spacing:.18em;padding:0 32px;display:flex;align-items:center;gap:8px}
.ticker-dot{color:var(--red);opacity:.7}
.ticker-new{background:var(--red);color:#fff;font-family:var(--font-ui);font-size:8px;font-weight:700;text-transform:uppercase;letter-spacing:.1em;padding:2px 6px;border-radius:3px}
.ticker-fade{opacity:1;transition:opacity .4s ease}

/* NAV */
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
.mob-links a{display:block;font-family:var(--font-ui);font-size:13px;font-weight:700;text-transform:uppercase;letter-spacing:.08em;padding:10px 14px;border-radius:8px;color:var(--navy)}
.mob-links a:hover{background:var(--cream);color:var(--red)}
.mob-group-lbl{font-family:var(--font-ui);font-size:9px;font-weight:700;text-transform:uppercase;letter-spacing:.22em;color:rgba(29,38,49,.4);padding:10px 14px 4px;display:block}
.mob-group-links a{padding:8px 14px 8px 24px;font-size:12px}
.mob-ctas{display:flex;flex-direction:column;gap:8px;padding-top:16px;border-top:2px solid rgba(29,38,49,.08)}
.mob-ctas a{font-family:var(--font-ui);font-size:13px;font-weight:700;text-transform:uppercase;letter-spacing:.08em;padding:12px;border-radius:10px;text-align:center;border:var(--b)}
.mob-ctas a.primary{background:var(--red);color:#fff}
.mob-ctas a.secondary{background:#fff;color:var(--navy)}
@media(max-width:960px){.nav-left,.nav-right{display:none}.nav-wrap{display:flex;justify-content:space-between}.hbg{display:flex}}

/* ============================
   HERO — full bleed, pitch green accent
   ============================ */
#hero{
  min-height:80svh;
  background:var(--navy);
  display:flex;
  align-items:flex-end;
  position:relative;
  overflow:hidden;
  border-bottom:var(--b);
}

/* pitch pattern overlay */
.hero-pitch{
  position:absolute;inset:0;
  background-image:
    linear-gradient(rgba(61,184,107,.04) 1px, transparent 1px),
    linear-gradient(90deg, rgba(61,184,107,.04) 1px, transparent 1px);
  background-size:60px 60px;
  pointer-events:none;
}

.hero-glow-r{position:absolute;top:-60px;right:-60px;width:560px;height:560px;border-radius:50%;background:radial-gradient(circle,rgba(238,39,38,.12),transparent 70%);pointer-events:none}
.hero-glow-l{position:absolute;bottom:-80px;left:-80px;width:440px;height:440px;border-radius:50%;background:radial-gradient(circle,rgba(61,184,107,.08),transparent 70%);pointer-events:none}

/* OFA crest watermark */
.hero-wm{
  position:absolute;
  right:-60px;top:50%;
  transform:translateY(-50%);
  font-family:var(--font-head);
  font-size:clamp(200px,28vw,340px);
  font-weight:900;
  font-style:italic;
  color:rgba(255,255,255,.025);
  letter-spacing:-.06em;
  text-transform:uppercase;
  pointer-events:none;
  user-select:none;
  line-height:1;
}

.hero-inner{position:relative;z-index:2;width:100%}
.hero-rule{width:100%;height:4px;background:var(--green)}

.hero-text{padding:52px 0 0}

.hero-breadcrumb{
  display:flex;align-items:center;gap:8px;
  font-family:var(--font-ui);font-size:10px;font-weight:700;
  text-transform:uppercase;letter-spacing:.2em;
  color:rgba(255,255,255,.3);
  margin-bottom:20px;
}
.hero-breadcrumb span{color:rgba(255,255,255,.15)}

.hero-h1{
  font-family:var(--font-head);
  font-size:clamp(56px,10vw,120px);
  font-weight:900;
  line-height:.88;
  letter-spacing:-.04em;
  text-transform:uppercase;
  color:#fff;
}
.hero-h1 .green{color:var(--green)}
.hero-h1 .red{color:var(--red)}

.hero-sub{
  font-family:var(--font-head);
  font-size:clamp(14px,1.8vw,20px);
  font-weight:800;
  text-transform:uppercase;
  color:rgba(255,255,255,.45);
  letter-spacing:.04em;
  margin-top:14px;
  font-style:italic;
}

/* bottom strip */
.hero-strip{
  display:grid;
  grid-template-columns:1fr 1fr 1fr 1fr;
  border-top:1px solid rgba(255,255,255,.1);
  margin-top:48px;
}
.hs-cell{padding:20px 0;border-right:1px solid rgba(255,255,255,.08)}
.hs-cell:last-child{border-right:none}
.hs-num{font-family:var(--font-head);font-size:clamp(22px,3vw,34px);font-weight:900;line-height:1;display:block;color:var(--green)}
.hs-lbl{font-family:var(--font-ui);font-size:9px;font-weight:700;text-transform:uppercase;letter-spacing:.18em;display:block;margin-top:5px;color:rgba(255,255,255,.35)}

@media(max-width:700px){
  .hero-strip{grid-template-columns:1fr 1fr}
  .hs-cell:nth-child(2){border-right:none}
  .hs-cell:nth-child(3){border-top:1px solid rgba(255,255,255,.08)}
  .hs-cell:nth-child(4){border-right:none;border-top:1px solid rgba(255,255,255,.08)}
}

/* ============================
   WHY OFA EXISTS
   ============================ */
#why{
  background:var(--cream);
  padding:88px 0;
  border-bottom:var(--b);
  position:relative;
  overflow:hidden;
}

.why-wm{
  position:absolute;bottom:-20px;right:-20px;
  font-family:var(--font-head);
  font-size:clamp(120px,18vw,200px);
  font-weight:900;font-style:italic;
  color:rgba(29,38,49,.03);
  letter-spacing:-.05em;
  pointer-events:none;user-select:none;
}

.why-grid{
  display:grid;
  grid-template-columns:1fr 1fr;
  gap:72px;
  align-items:center;
  position:relative;z-index:2;
}

.why-pull{
  font-family:var(--font-head);
  font-size:clamp(22px,3vw,36px);
  font-weight:900;
  line-height:1.15;
  font-style:italic;
  color:var(--navy);
  margin-bottom:24px;
}
.why-pull .red{color:var(--red)}

.why-body{
  font-size:16px;
  line-height:1.85;
  font-weight:500;
  color:rgba(29,38,49,.75);
  margin-bottom:24px;
}

/* Problem list — the gaps */
.gap-list{
  display:flex;flex-direction:column;gap:0;
  border:var(--b);border-radius:var(--radius);
  overflow:hidden;box-shadow:var(--shadow-sm);
}
.gap-item{
  display:flex;align-items:flex-start;gap:14px;
  padding:16px 20px;
  border-bottom:2px solid rgba(29,38,49,.07);
  background:#fff;
  transition:background .15s;
}
.gap-item:last-child{border-bottom:none}
.gap-item:hover{background:var(--cream)}
.gap-icon{
  width:32px;height:32px;border-radius:8px;
  background:rgba(238,39,38,.08);
  border:1.5px solid rgba(238,39,38,.2);
  display:flex;align-items:center;justify-content:center;
  flex-shrink:0;margin-top:1px;
}
.gap-icon svg{width:14px;height:14px;fill:var(--red)}
.gap-text{
  font-size:14px;font-weight:600;
  color:rgba(29,38,49,.75);line-height:1.5;
}
.gap-text strong{
  display:block;font-family:var(--font-head);
  font-size:12px;font-weight:800;text-transform:uppercase;
  letter-spacing:.04em;color:var(--navy);margin-bottom:2px;
}

/* Photo with sticker */
.why-photo{
  position:relative;
}
.why-photo-main{
  border:var(--b);border-radius:var(--radius);
  overflow:hidden;box-shadow:var(--shadow-lg);
  aspect-ratio:4/5;background:var(--navy);
}
.why-photo-main img{width:100%;height:100%;object-fit:cover}
.why-sticker{
  position:absolute;
  bottom:-18px;left:-18px;
  font-family:var(--font-sketch);font-size:22px;
  color:var(--navy);background:var(--green);
  border:3px solid var(--navy);border-radius:10px;
  padding:8px 18px;box-shadow:4px 4px 0 var(--navy);
  z-index:5;white-space:nowrap;
  transform:rotate(3deg);
}
.why-sticker-2{
  position:absolute;
  top:-16px;right:-14px;
  font-family:var(--font-sketch);font-size:18px;
  color:#fff;background:var(--red);
  border:3px solid var(--navy);border-radius:10px;
  padding:6px 14px;box-shadow:3px 3px 0 var(--navy);
  z-index:5;white-space:nowrap;
  transform:rotate(-4deg);
}

@media(max-width:900px){
  .why-grid{grid-template-columns:1fr;gap:40px}
}

/* ============================
   WHAT WE DO — 4 pillars
   ============================ */
#what{
  background:#fff;
  padding:88px 0;
  border-bottom:var(--b);
}

.what-intro{
  display:grid;
  grid-template-columns:1fr 1fr;
  gap:48px;
  align-items:end;
  margin-bottom:56px;
}

.what-body{
  font-size:16px;line-height:1.8;font-weight:500;
  color:rgba(29,38,49,.7);
}

.pillars{
  display:grid;
  grid-template-columns:1fr 1fr;
  gap:20px;
}

.pillar-card{
  border:var(--b);border-radius:var(--radius);
  overflow:hidden;box-shadow:var(--shadow-sm);
  transition:transform .22s,box-shadow .22s;
  display:flex;flex-direction:column;
}
.pillar-card:hover{
  transform:translate(-4px,-6px);
  box-shadow:var(--shadow);
}

.pillar-card-head{
  padding:20px 22px 0;
  display:flex;align-items:flex-start;gap:14px;
}

.pillar-num{
  font-family:var(--font-head);
  font-size:clamp(40px,5vw,60px);
  font-weight:900;
  line-height:.9;
  color:rgba(29,38,49,.07);
  flex-shrink:0;
  letter-spacing:-.03em;
}

.pillar-label-group{flex:1}

.pillar-tag{
  font-family:var(--font-ui);font-size:9px;font-weight:700;
  text-transform:uppercase;letter-spacing:.16em;
  padding:3px 10px;border-radius:20px;border:2px solid var(--navy);
  display:inline-block;width:fit-content;margin-bottom:6px;
}

.pillar-title{
  font-family:var(--font-head);
  font-size:18px;font-weight:900;
  text-transform:uppercase;font-style:italic;
  line-height:1.1;
}

.pillar-card-body{
  padding:14px 22px 22px;
  flex:1;
}

.pillar-body{
  font-size:13px;font-weight:500;
  line-height:1.65;color:rgba(29,38,49,.68);
}

.pillar-items{
  display:flex;flex-direction:column;gap:6px;
  margin-top:12px;
}

.pillar-item{
  display:flex;align-items:flex-start;gap:8px;
  font-size:12px;font-weight:600;
  color:rgba(29,38,49,.65);line-height:1.45;
}
.pillar-item::before{
  content:'→';color:var(--red);font-weight:900;
  flex-shrink:0;font-size:10px;margin-top:2px;
}

/* color accents per card */
.pc-1{background:var(--cream)}.pc-1 .pillar-tag{background:rgba(238,39,38,.08);border-color:rgba(238,39,38,.3);color:var(--red)}
.pc-2{background:#fff}.pc-2 .pillar-tag{background:rgba(61,184,107,.1);border-color:rgba(61,184,107,.3);color:#1a7a3c}
.pc-3{background:var(--navy)}.pc-3 .pillar-title,.pc-3 .pillar-body,.pc-3 .pillar-item{color:rgba(255,255,255,.85)}.pc-3 .pillar-body{color:rgba(255,255,255,.6)}.pc-3 .pillar-item::before{color:var(--yellow)}.pc-3 .pillar-tag{background:rgba(255,207,93,.15);border-color:rgba(255,207,93,.35);color:var(--yellow)}.pc-3 .pillar-num{color:rgba(255,255,255,.06)}
.pc-4{background:var(--cream)}.pc-4 .pillar-tag{background:rgba(150,217,242,.15);border-color:rgba(150,217,242,.4);color:#1a6a8a}

@media(max-width:900px){
  .what-intro{grid-template-columns:1fr;gap:24px}
  .pillars{grid-template-columns:1fr}
}

/* ============================
   OMUTO CUP — flagship event
   ============================ */
#cup{
  background:var(--navy);
  padding:88px 0;
  border-bottom:var(--b);
  position:relative;
  overflow:hidden;
}

.cup-grid{
  display:grid;
  grid-template-columns:1fr 1fr;
  gap:72px;
  align-items:center;
  position:relative;z-index:2;
}

.cup-eyebrow-row{
  display:flex;align-items:center;gap:12px;margin-bottom:20px;
}

.cup-trophy{
  width:40px;height:40px;border-radius:10px;
  background:var(--yellow);border:2px solid rgba(255,255,255,.3);
  display:flex;align-items:center;justify-content:center;
  flex-shrink:0;
}
.cup-trophy svg{width:20px;height:20px;fill:var(--navy)}

.cup-title{
  font-family:var(--font-head);
  font-size:clamp(36px,5vw,64px);
  font-weight:900;
  text-transform:uppercase;
  font-style:italic;
  line-height:1;
  color:#fff;
  margin-bottom:16px;
}
.cup-title .yellow{color:var(--yellow)}

.cup-body{
  font-size:16px;line-height:1.8;font-weight:500;
  color:rgba(255,255,255,.65);
  margin-bottom:24px;
}

.cup-format{
  display:flex;flex-direction:column;gap:0;
  border:2px solid rgba(255,255,255,.12);
  border-radius:var(--radius);overflow:hidden;
  margin-bottom:28px;
}

.cf-row{
  display:flex;align-items:center;gap:16px;
  padding:14px 18px;
  border-bottom:1px solid rgba(255,255,255,.07);
  transition:background .15s;
}
.cf-row:last-child{border-bottom:none}
.cf-row:hover{background:rgba(255,255,255,.05)}

.cf-step{
  width:28px;height:28px;border-radius:50%;
  background:var(--yellow);color:var(--navy);
  font-family:var(--font-head);font-size:13px;font-weight:900;
  display:flex;align-items:center;justify-content:center;
  flex-shrink:0;
}

.cf-text{
  font-size:13px;font-weight:700;
  color:rgba(255,255,255,.8);
  font-family:var(--font-ui);text-transform:uppercase;letter-spacing:.06em;
}

/* cup visual */
.cup-visual{
  position:relative;
}
.cup-photo{
  border:var(--b);border-radius:var(--radius);
  overflow:hidden;box-shadow:var(--shadow-lg);
  aspect-ratio:3/4;background:rgba(255,255,255,.05);
}
.cup-photo img{width:100%;height:100%;object-fit:cover}

.cup-stat-float{
  position:absolute;
  bottom:-16px;left:-16px;
  background:#fff;border:var(--b);
  border-radius:var(--radius-sm);
  padding:14px 18px;
  box-shadow:var(--shadow);
  z-index:5;
}
.csf-num{
  font-family:var(--font-head);
  font-size:32px;font-weight:900;
  color:var(--green);line-height:1;display:block;
}
.csf-lbl{
  font-family:var(--font-ui);font-size:9px;font-weight:700;
  text-transform:uppercase;letter-spacing:.16em;
  color:rgba(29,38,49,.45);display:block;margin-top:3px;
}

@media(max-width:900px){.cup-grid{grid-template-columns:1fr;gap:40px}}

/* ============================
   THREE PILLARS MODEL
   ============================ */
#model{
  background:var(--cream);
  padding:88px 0;
  border-bottom:var(--b);
}

.model-grid{
  display:grid;
  grid-template-columns:repeat(3,1fr);
  gap:0;
  border:var(--b);border-radius:var(--radius);
  overflow:hidden;box-shadow:var(--shadow);
  margin-top:48px;
}

.model-cell{
  padding:36px 28px;
  border-right:var(--b);
  display:flex;flex-direction:column;gap:12px;
  transition:background .18s;
  position:relative;
}
.model-cell:last-child{border-right:none}

.mc-1{background:#fff}.mc-1:hover{background:var(--cream)}
.mc-2{background:var(--green)}.mc-2:hover{background:#35a560}
.mc-3{background:var(--navy)}.mc-3:hover{background:#243040}

.mc-icon{
  width:52px;height:52px;border-radius:14px;
  display:flex;align-items:center;justify-content:center;
  border:var(--b);margin-bottom:4px;
}
.mc-1 .mc-icon{background:var(--cream)}
.mc-2 .mc-icon{background:rgba(255,255,255,.2);border-color:rgba(255,255,255,.3)}
.mc-3 .mc-icon{background:rgba(255,255,255,.08);border-color:rgba(255,255,255,.15)}
.mc-icon svg{width:22px;height:22px}
.mc-1 .mc-icon svg{fill:var(--green)}
.mc-2 .mc-icon svg{fill:#fff}
.mc-3 .mc-icon svg{fill:var(--yellow)}

.mc-word{
  font-family:var(--font-head);
  font-size:clamp(28px,4vw,42px);
  font-weight:900;font-style:italic;
  text-transform:uppercase;line-height:1;
}
.mc-1 .mc-word{color:var(--navy)}
.mc-2 .mc-word{color:#fff}
.mc-3 .mc-word{color:var(--yellow)}

.mc-tagline{
  font-family:var(--font-ui);font-size:10px;font-weight:700;
  text-transform:uppercase;letter-spacing:.16em;
}
.mc-1 .mc-tagline{color:var(--green)}
.mc-2 .mc-tagline{color:rgba(255,255,255,.7)}
.mc-3 .mc-tagline{color:rgba(255,255,255,.4)}

.mc-body{
  font-size:13px;font-weight:500;line-height:1.65;
  margin-top:4px;
}
.mc-1 .mc-body{color:rgba(29,38,49,.68)}
.mc-2 .mc-body{color:rgba(255,255,255,.8)}
.mc-3 .mc-body{color:rgba(255,255,255,.6)}

@media(max-width:768px){
  .model-grid{grid-template-columns:1fr}
  .model-cell{border-right:none;border-bottom:var(--b)}
  .model-cell:last-child{border-bottom:none}
}

/* ============================
   VIDEO ROW
   ============================ */
#videos{
  background:var(--navy);
  padding:88px 0;
  border-bottom:var(--b);
  position:relative;overflow:hidden;
}

.vid-row{
  display:grid;
  grid-template-columns:2fr 1fr;
  gap:16px;
  margin-top:48px;
  position:relative;z-index:2;
}

.vid-card{
  border:var(--b);border-radius:var(--radius);
  overflow:hidden;cursor:pointer;
  transition:transform .2s,box-shadow .2s;
  background:rgba(255,255,255,.04);
}
.vid-card:hover{transform:translateY(-4px);box-shadow:var(--shadow)}
.vid-card.featured{grid-row:span 2}

.vid-thumb{position:relative;overflow:hidden;background:#0a0f14}
.vid-thumb img{width:100%;height:100%;object-fit:cover;transition:transform .4s}
.vid-card:hover .vid-thumb img{transform:scale(1.04)}
.vid-card.featured .vid-thumb{aspect-ratio:16/10}
.vid-card:not(.featured) .vid-thumb{aspect-ratio:16/9}

.vplay{position:absolute;inset:0;display:flex;align-items:center;justify-content:center;background:rgba(0,0,0,.2)}
.vpc{width:52px;height:52px;border-radius:50%;background:rgba(255,255,255,.9);display:flex;align-items:center;justify-content:center;border:3px solid var(--navy);transition:transform .15s}
.vid-card.featured .vpc{width:64px;height:64px}
.vid-card:hover .vpc{transform:scale(1.1)}
.vpc svg{width:20px;height:20px;fill:var(--navy);margin-left:3px}
.vid-card.featured .vpc svg{width:26px;height:26px}

.vid-info{padding:14px 16px}
.v-tag{font-family:var(--font-ui);font-size:9px;font-weight:700;text-transform:uppercase;letter-spacing:.18em;color:var(--yellow);margin-bottom:4px}
.v-title{font-family:var(--font-head);font-size:14px;font-weight:800;color:#fff;line-height:1.3;text-transform:uppercase}
.vid-card.featured .v-title{font-size:17px}
.v-desc{font-size:12px;font-weight:500;color:rgba(255,255,255,.5);line-height:1.5;margin-top:3px}

@media(max-width:768px){.vid-row{grid-template-columns:1fr}.vid-card.featured{grid-row:span 1}}

/* ============================
   JOIN / CTA CARDS
   ============================ */
#join{
  background:var(--cream);
  padding:88px 0;
  border-bottom:var(--b);
}

.join-grid{
  display:grid;
  grid-template-columns:repeat(4,1fr);
  gap:16px;
  margin-top:48px;
}

.join-card{
  border:var(--b);border-radius:var(--radius);
  padding:24px;box-shadow:var(--shadow-sm);
  display:flex;flex-direction:column;gap:10px;
  transition:transform .2s,box-shadow .2s;
  background:#fff;
}
.join-card:hover{transform:translate(-3px,-5px);box-shadow:var(--shadow)}

.jc-icon{
  width:44px;height:44px;border-radius:10px;
  border:var(--b);display:flex;align-items:center;
  justify-content:center;margin-bottom:4px;
}
.jc-icon svg{width:20px;height:20px}

.jc-1 .jc-icon{background:rgba(61,184,107,.1)}.jc-1 .jc-icon svg{fill:var(--green)}
.jc-2 .jc-icon{background:rgba(238,39,38,.08)}.jc-2 .jc-icon svg{fill:var(--red)}
.jc-3 .jc-icon{background:rgba(255,207,93,.2)}.jc-3 .jc-icon svg{fill:var(--gold)}
.jc-4 .jc-icon{background:rgba(29,38,49,.06)}.jc-4 .jc-icon svg{fill:var(--navy)}

.jc-title{
  font-family:var(--font-head);font-size:16px;font-weight:900;
  text-transform:uppercase;font-style:italic;line-height:1.1;
}
.jc-body{font-size:13px;font-weight:500;line-height:1.6;color:rgba(29,38,49,.65);flex:1}

@media(max-width:900px){.join-grid{grid-template-columns:1fr 1fr}}
@media(max-width:500px){.join-grid{grid-template-columns:1fr}}

/* ============================
   FINAL CTA
   ============================ */
#finalcta{
  background:var(--green);color:#fff;
  padding:80px 0;position:relative;overflow:hidden;
  border-top:var(--b);
}

/* pitch lines in CTA */
#finalcta::before{
  content:'';position:absolute;inset:0;
  background-image:
    linear-gradient(rgba(255,255,255,.04) 1px,transparent 1px),
    linear-gradient(90deg,rgba(255,255,255,.04) 1px,transparent 1px);
  background-size:50px 50px;pointer-events:none;
}

.fcta-inner{text-align:center;position:relative;z-index:2;max-width:560px;margin:0 auto}
.fcta-h{font-family:var(--font-head);font-size:clamp(28px,4.5vw,52px);font-weight:900;line-height:1;text-transform:uppercase;font-style:italic;margin-bottom:14px;letter-spacing:-.02em;color:#fff}
.fcta-p{font-size:17px;font-weight:500;opacity:.9;margin-bottom:28px;line-height:1.6;color:#fff}
.fcta-btns{display:flex;flex-wrap:wrap;gap:12px;justify-content:center}

/* FOOTER */
footer{background:var(--navy);color:#fff;border-top:var(--b)}
.footer-grid{display:grid;grid-template-columns:1.7fr 1fr 1fr;gap:48px;padding:56px 0 32px}
.f-logo{height:44px;filter:brightness(0) invert(1);opacity:.75;margin-bottom:14px}
.f-desc{font-size:13px;font-weight:500;opacity:.52;line-height:1.7;max-width:240px;margin-bottom:18px}
.f-socials{display:flex;gap:9px}
.f-soc{width:36px;height:36px;border-radius:50%;border:1.5px solid rgba(255,255,255,.18);display:flex;align-items:center;justify-content:center;transition:all .15s}
.f-soc:hover{background:var(--red);border-color:var(--red)}
.f-soc svg{width:14px;height:14px;fill:#fff}
footer nav h4{font-family:var(--font-ui);font-size:10px;font-weight:700;text-transform:uppercase;letter-spacing:.22em;opacity:.45;margin-bottom:14px}
footer nav ul li{margin-bottom:8px}
footer nav ul a{font-size:13px;font-weight:500;opacity:.58;transition:opacity .15s;display:inline-block}
footer nav ul a:hover{opacity:1;color:var(--yellow)}
.footer-bottom{border-top:1px solid rgba(255,255,255,.07);padding:16px 0;display:flex;justify-content:space-between;align-items:center;gap:12px;font-family:var(--font-ui);font-size:10px;font-weight:700;text-transform:uppercase;letter-spacing:.1em;opacity:.3;flex-wrap:wrap}
@media(max-width:768px){.footer-grid{grid-template-columns:1fr;gap:24px}}

/* VIDEO MODAL */
#modal{display:none;position:fixed;inset:0;z-index:950;background:rgba(29,38,49,.85);backdrop-filter:blur(8px);align-items:center;justify-content:center;padding:20px}
#modal.open{display:flex}
.modal-inner{width:100%;max-width:840px;background:#000;border:var(--b);border-radius:var(--radius);overflow:hidden;box-shadow:var(--shadow-lg);position:relative}
.modal-close{position:absolute;top:-46px;right:0;color:#fff;font-family:var(--font-ui);font-size:13px;font-weight:700;text-transform:uppercase;letter-spacing:.1em;cursor:pointer;padding:5px 12px;border:2px solid rgba(255,255,255,.3);border-radius:8px;background:rgba(255,255,255,.08)}
.modal-inner iframe{width:100%;aspect-ratio:16/9;border:none;display:block}

/* STICKY */
#sticky{position:fixed;bottom:0;left:0;width:100%;background:rgba(29,38,49,.96);backdrop-filter:blur(8px);border-top:3px solid var(--green);padding:11px 0;z-index:500;transform:translateY(100%);transition:transform .3s ease}
#sticky.show{transform:none}
.sticky-inner{display:flex;align-items:center;justify-content:space-between;gap:14px}
.sticky-msg{font-family:var(--font-ui);font-size:11px;font-weight:700;text-transform:uppercase;letter-spacing:.12em;color:#fff}
.sticky-btns{display:flex;gap:8px;align-items:center}
.sticky-x{color:rgba(255,255,255,.4);font-size:18px;padding:4px 8px;cursor:pointer;background:none;border:none;transition:color .15s}
.sticky-x:hover{color:#fff}
@media(max-width:580px){.sticky-msg{display:none}}
</style>
</head>
<body>

<!-- TICKER -->
<div id="ticker">
  <div class="ticker-item ticker-fade" id="ticker-item">
    <span class="ticker-dot">●</span>
    <span class="ticker-new">New</span>
    <span class="ticker-text">OFA Launch Match Day — January 2026. Watch the highlights.</span>
  </div>
</div>

<!-- NAV -->
<nav id="nav" aria-label="Main navigation">
  <div class="nav-wrap">
    <div class="nav-left">
      <a href="index.php" class="nav-link">Home</a>
      <div class="nav-dd">
        <button class="nav-link active" aria-haspopup="true">Our Work ▾</button>
        <div class="nav-dd-panel" role="menu">
          <a href="osx.php">School Xperience</a>
          <a href="yap.php">YAP Chapters</a>
          <a href="ofa.php" style="color:var(--red)">Football Alliance ←</a>
          <a href="https://www.youtube.com/@omutopulse" target="_blank" rel="noopener">Omuto Pulse ↗</a>
          <a href="shop.php">Omuto Essentials</a>
        </div>
      </div>
      <a href="about.php" class="nav-link">About</a>
    </div>
    <div class="nav-center">
      <a href="index.php" aria-label="Omuto Foundation home">
        <img src="https://i.imgur.com/onkikq1.png" alt="Omuto Foundation"/>
      </a>
    </div>
    <div class="nav-right">
      <div class="nav-dd">
        <button class="nav-link" aria-haspopup="true">Impact ▾</button>
        <div class="nav-dd-panel" role="menu">
          <a href="report2025.php">Annual Report 2025</a>
          <a href="impact.php">Impact Data</a>
          <a href="docs.php">Financials</a>
        </div>
      </div>
      <a href="essentials.php" class="nav-link">Store</a>
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

<div id="mob-nav" role="dialog" aria-label="Mobile navigation">
  <div class="mob-links">
    <a href="index.php">Home</a>
    <span class="mob-group-lbl">Our Work</span>
    <div class="mob-group-links">
      <a href="osx.php">School Xperience</a>
      <a href="yap.php">YAP Chapters</a>
      <a href="ofa.php">Football Alliance</a>
      <a href="https://www.youtube.com/@omutopulse" target="_blank">Omuto Pulse ↗</a>
      <a href="shop.php">Essentials</a>
    </div>
    <a href="about.php">About</a>
    <span class="mob-group-lbl">Impact</span>
    <div class="mob-group-links">
      <a href="report2025.php">Annual Report 2025</a>
      <a href="impact.php">Impact Data</a>
    </div>
    <a href="essentials.php">Store</a>
  </div>
  <div class="mob-ctas">
    <a href="campaign.php" class="primary">Fund a Chapter</a>
    <a href="contact.php" class="secondary">Partner With Us</a>
  </div>
</div>

<main style="padding-top:calc(var(--ticker-h) + 70px)">

<!-- ===== HERO ===== -->
<section id="hero">
  <div class="hero-pitch"></div>
  <div class="hero-glow-r"></div>
  <div class="hero-glow-l"></div>
  <span class="hero-wm" aria-hidden="true">OFA</span>
  <div class="hero-inner">
    <div class="hero-rule"></div>
    <div class="container">
      <div class="hero-text reveal">
        <div class="hero-breadcrumb">
          <span>Omuto Foundation</span>
          <span>→</span>
          <span>Talents Project</span>
          <span>→</span>
          <span style="color:var(--green)">Football Alliance</span>
        </div>
        <h1 class="hero-h1">
          Football<br/>
          With <span class="green">Purpose.</span><br/>
          <span class="red">Leadership</span><br/>
          With Impact.
        </h1>
        <p class="hero-sub">Omuto Football Alliance · Mpigi &amp; Butambala, Uganda</p>
      </div>
      <div class="hero-strip reveal">
        <div class="hs-cell">
          <span class="hs-num">OFA</span>
          <span class="hs-lbl">Est. 2025</span>
        </div>
        <div class="hs-cell" style="padding-left:24px">
          <span class="hs-num">Teams</span>
          <span class="hs-lbl">Community Based</span>
        </div>
        <div class="hs-cell" style="padding-left:24px">
          <span class="hs-num">Omuto</span>
          <span class="hs-lbl">Cup Flagship Event</span>
        </div>
        <div class="hs-cell" style="padding-left:24px">
          <span class="hs-num">2</span>
          <span class="hs-lbl">Districts Active</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===== WHY OFA EXISTS ===== -->
<section id="why">
  <span class="why-wm" aria-hidden="true">FOOTBALL</span>
  <div class="container">
    <div class="why-grid">
      <div class="reveal">
        <span class="eyebrow ew-red" style="margin-bottom:24px">Why OFA Exists</span>
        <p class="why-pull">
          In rural communities, football is <span class="red">more than a game.</span><br/>
          It is identity. Discipline. Hope.
        </p>
        <p class="why-body">
          But talent without structure goes nowhere. Youth teams across Mpigi and Butambala play with passion — and no mentorship, no governance, no pathway forward. Location should never limit potential.
        </p>
        <p class="why-body" style="margin-top:0">
          OFA was built to close that gap. We organize teams. We mentor captains. We build discipline. We create exposure. Football becomes a system — not just a weekend activity.
        </p>
        <div style="display:flex;gap:10px;flex-wrap:wrap;margin-top:28px">
          <a href="contact.php" class="btn btn-red btn-sm">Join the Alliance →</a>
          <a href="#cup" class="btn btn-white btn-sm">See the Omuto Cup</a>
        </div>
      </div>
      <div class="reveal rd2">
        <div class="gap-list">
          <div class="gap-item">
            <div class="gap-icon">
              <svg viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/></svg>
            </div>
            <div class="gap-text">
              <strong>No Structure</strong>
              Youth teams play without leadership roles, training culture, or any accountability system.
            </div>
          </div>
          <div class="gap-item">
            <div class="gap-icon">
              <svg viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/></svg>
            </div>
            <div class="gap-text">
              <strong>Talent Goes Unseen</strong>
              No documentation. No visibility. No connection to broader football structures.
            </div>
          </div>
          <div class="gap-item">
            <div class="gap-icon">
              <svg viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/></svg>
            </div>
            <div class="gap-text">
              <strong>No Mentorship</strong>
              Players lack coaches who teach life skills alongside football — discipline, conflict resolution, leadership.
            </div>
          </div>
          <div class="gap-item">
            <div class="gap-icon">
              <svg viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/></svg>
            </div>
            <div class="gap-text">
              <strong>No Long-term Vision</strong>
              Football is a weekend activity, not a system. When the season ends, growth stops.
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===== WHAT WE DO ===== -->
<section id="what">
  <div class="container">
    <div class="what-intro reveal">
      <div>
        <span class="eyebrow ew-teal" style="margin-bottom:16px">What We Do</span>
        <h2 class="t-section">Four Ways OFA<br/><em class="line-red">Changes the Game</em></h2>
      </div>
      <p class="what-body">
        OFA is not a football club. It is a development platform that uses football as its language. Every programme builds something beyond the pitch.
      </p>
    </div>
    <div class="pillars reveal">
      <div class="pillar-card pc-1">
        <div class="pillar-card-head">
          <span class="pillar-num">01</span>
          <div class="pillar-label-group">
            <span class="pillar-tag">Foundation</span>
            <h3 class="pillar-title">Team Organization &amp; Governance</h3>
          </div>
        </div>
        <div class="pillar-card-body">
          <p class="pillar-body">We give community teams the structures they need to run properly — not just play.</p>
          <div class="pillar-items">
            <div class="pillar-item">Build captain, coach, and committee roles</div>
            <div class="pillar-item">Develop team identity and branding</div>
            <div class="pillar-item">Improve training culture and consistency</div>
            <div class="pillar-item">Strengthen accountability and fair play</div>
          </div>
        </div>
      </div>
      <div class="pillar-card pc-2">
        <div class="pillar-card-head">
          <span class="pillar-num">02</span>
          <div class="pillar-label-group">
            <span class="pillar-tag">Core</span>
            <h3 class="pillar-title">Leadership Through Sport</h3>
          </div>
        </div>
        <div class="pillar-card-body">
          <p class="pillar-body">The pitch is a classroom. OFA trains players and captains in skills that last beyond football.</p>
          <div class="pillar-items">
            <div class="pillar-item">Discipline and personal responsibility</div>
            <div class="pillar-item">Conflict resolution and communication</div>
            <div class="pillar-item">Goal setting and community engagement</div>
            <div class="pillar-item">Strong teams create strong communities</div>
          </div>
        </div>
      </div>
      <div class="pillar-card pc-3">
        <div class="pillar-card-head">
          <span class="pillar-num">03</span>
          <div class="pillar-label-group">
            <span class="pillar-tag">Events</span>
            <h3 class="pillar-title">Structured Competition</h3>
          </div>
        </div>
        <div class="pillar-card-body">
          <p class="pillar-body">The Omuto Cup gives teams a stage — and gives talent the visibility it deserves.</p>
          <div class="pillar-items">
            <div class="pillar-item">Regional qualifiers and progressive rounds</div>
            <div class="pillar-item">Structured finals with community turnout</div>
            <div class="pillar-item">Growth, respect, leadership — not just winning</div>
          </div>
        </div>
      </div>
      <div class="pillar-card pc-4">
        <div class="pillar-card-head">
          <span class="pillar-num">04</span>
          <div class="pillar-label-group">
            <span class="pillar-tag">Pathways</span>
            <h3 class="pillar-title">Talent Exposure</h3>
          </div>
        </div>
        <div class="pillar-card-body">
          <p class="pillar-body">We document performance and create connections that rural players have never had access to before.</p>
          <div class="pillar-items">
            <div class="pillar-item">Player performance documentation</div>
            <div class="pillar-item">Connections to broader football structures</div>
            <div class="pillar-item">Visibility for rural talent</div>
            <div class="pillar-item">Location should never limit potential</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===== OMUTO CUP ===== -->
<section id="cup">
  <div class="halftone halftone-light"></div>
  <div class="container">
    <div class="cup-grid">
      <div class="reveal">
        <div class="cup-eyebrow-row">
          <div class="cup-trophy">
            <svg viewBox="0 0 24 24"><path d="M19 5h-2V3H7v2H5c-1.1 0-2 .9-2 2v1c0 2.55 1.92 4.63 4.39 4.94C8.35 14.19 9.61 15 11 15v2H7v2h10v-2h-4v-2c1.39 0 2.65-.81 3.61-2.06C19.08 12.63 21 10.55 21 8V7c0-1.1-.9-2-2-2zM7 10.82C5.84 10.4 5 9.3 5 8V7h2v3.82zM19 8c0 1.3-.84 2.4-2 2.82V7h2v1z"/></svg>
          </div>
          <span class="eyebrow ew-white" style="margin-bottom:0">Flagship Event</span>
        </div>
        <h2 class="cup-title">The Omuto<br/><span class="yellow">Cup</span></h2>
        <p class="cup-body">
          The Omuto Cup is OFA's flagship football event. It is not just about winning — it is about growth, respect, and leadership. Every team that enters comes out stronger.
        </p>
        <p class="cup-body" style="margin-top:0">
          Communities rally around it. Parents show up. Young players see what is possible when structure meets talent.
        </p>
        <div class="cup-format">
          <div class="cf-row">
            <span class="cf-step">1</span>
            <span class="cf-text">Community Registration — Teams apply and are onboarded</span>
          </div>
          <div class="cf-row">
            <span class="cf-step">2</span>
            <span class="cf-text">Regional Qualifiers — Local group stages across Mpigi &amp; Butambala</span>
          </div>
          <div class="cf-row">
            <span class="cf-step">3</span>
            <span class="cf-step" style="background:var(--teal)">3</span>
            <span class="cf-text">Progressive Advancement — Best teams advance</span>
          </div>
          <div class="cf-row">
            <span class="cf-step" style="background:var(--red)">4</span>
            <span class="cf-text">Structured Finals — Community event, visibility, celebration</span>
          </div>
        </div>
        <a href="contact.php" class="btn btn-yellow btn-sm">Register Your Team →</a>
      </div>
      <div class="reveal rd2">
        <div class="cup-visual">
          <div class="cup-photo">
            <img src="https://img.youtube.com/vi/CdMBDRVExaA/maxresdefault.jpg" alt="OFA Launch Match Day — January 2026" loading="lazy" onerror="this.src='https://img.youtube.com/vi/CdMBDRVExaA/hqdefault.jpg'"/>
          </div>
          <div class="cup-stat-float">
            <span class="csf-num">Jan 2026</span>
            <span class="csf-lbl">OFA Launch Match Day</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===== THREE PILLAR MODEL ===== -->
<section id="model">
  <div class="container">
    <div class="reveal" style="text-align:center">
      <span class="eyebrow ew-navy">The OFA Model</span>
      <h2 class="t-section">Three Words.<br/><em class="line-red">One System.</em></h2>
      <p style="font-size:16px;font-weight:500;opacity:.6;max-width:440px;margin:12px auto 0">Football with structure. Football with accountability. Football with a future.</p>
    </div>
    <div class="model-grid reveal">
      <div class="model-cell mc-1">
        <div class="mc-icon">
          <svg viewBox="0 0 24 24"><path d="M17 12h-5v5h5v-5zM16 1v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2h-1V1h-2zm3 18H5V8h14v11z"/></svg>
        </div>
        <span class="mc-word">Organize</span>
        <span class="mc-tagline">Build the structure</span>
        <p class="mc-body">Give teams the governance, roles, identity, and training culture they need to function. A team without structure is just a group of people.</p>
      </div>
      <div class="model-cell mc-2">
        <div class="mc-icon">
          <svg viewBox="0 0 24 24"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>
        </div>
        <span class="mc-word">Mentor</span>
        <span class="mc-tagline">Develop the leader</span>
        <p class="mc-body">Train captains and players in discipline, communication, and life skills. Every match is a leadership lesson. Every practice builds character.</p>
      </div>
      <div class="model-cell mc-3">
        <div class="mc-icon">
          <svg viewBox="0 0 24 24"><path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z"/></svg>
        </div>
        <span class="mc-word">Expose</span>
        <span class="mc-tagline">Create the pathway</span>
        <p class="mc-body">Document talent, create visibility, connect players to opportunities they could never access from a rural village alone. Location should never be the limit.</p>
      </div>
    </div>
  </div>
</section>

<!-- ===== VIDEOS ===== -->
<section id="videos">
  <div class="halftone halftone-light"></div>
  <div class="container" style="position:relative;z-index:2">
    <div class="reveal" style="text-align:center">
      <span class="eyebrow ew-yellow">Omuto Pulse · OFA Highlights</span>
      <h2 class="t-section" style="color:#fff">Watch It<br/><em style="color:var(--green)">Happen</em></h2>
    </div>
    <div class="vid-row reveal">
      <div class="vid-card featured" onclick="openModal('CdMBDRVExaA')" role="button" tabindex="0" aria-label="Play OFA Launch Match Day video" onkeydown="if(event.key==='Enter')openModal('CdMBDRVExaA')">
        <div class="vid-thumb">
          <img src="https://img.youtube.com/vi/CdMBDRVExaA/maxresdefault.jpg" alt="OFA Launch Match Day — Jan 2026" loading="lazy" onerror="this.src='https://img.youtube.com/vi/CdMBDRVExaA/hqdefault.jpg'"/>
          <div class="vplay"><div class="vpc"><svg viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg></div></div>
        </div>
        <div class="vid-info">
          <p class="v-tag">Featured · Match Day</p>
          <h4 class="v-title">OFA Launch Match Day — January 2026</h4>
          <p class="v-desc">The first official Omuto Football Alliance match. Teams, community, and purpose on one pitch.</p>
        </div>
      </div>
      <div class="vid-card" onclick="openModal('qhKgGPs_Gy8')" role="button" tabindex="0" aria-label="Play Young Leaders Camp video" onkeydown="if(event.key==='Enter')openModal('qhKgGPs_Gy8')">
        <div class="vid-thumb">
          <img src="https://img.youtube.com/vi/qhKgGPs_Gy8/hqdefault.jpg" alt="Young Leaders Camp 2023" loading="lazy"/>
          <div class="vplay"><div class="vpc"><svg viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg></div></div>
        </div>
        <div class="vid-info">
          <p class="v-tag">Omuto Pulse</p>
          <h4 class="v-title">Young Leaders Camp 2023</h4>
        </div>
      </div>
      <div class="vid-card" onclick="openModal('Pmcf5-HD1Z8')" role="button" tabindex="0" aria-label="Play Talents video" onkeydown="if(event.key==='Enter')openModal('Pmcf5-HD1Z8')">
        <div class="vid-thumb">
          <img src="https://img.youtube.com/vi/Pmcf5-HD1Z8/hqdefault.jpg" alt="Talents &amp; Voice" loading="lazy"/>
          <div class="vplay"><div class="vpc"><svg viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg></div></div>
        </div>
        <div class="vid-info">
          <p class="v-tag">Omuto Pulse</p>
          <h4 class="v-title">Talents &amp; Voice</h4>
        </div>
      </div>
    </div>
    <div style="text-align:center;margin-top:24px" class="reveal">
      <a href="https://www.youtube.com/@omutopulse" target="_blank" rel="noopener" class="btn btn-outline-white btn-sm">
        <svg width="14" height="14" fill="currentColor" viewBox="0 0 24 24"><path d="M21.582 6.186a2.506 2.506 0 0 0-1.768-1.768C18.254 4 12 4 12 4s-6.254 0-7.814.418a2.506 2.506 0 0 0-1.768 1.768C2 7.746 2 12 2 12s0 4.254.418 5.814a2.506 2.506 0 0 0 1.768 1.768C5.746 20 12 20 12 20s6.254 0 7.814-.418a2.506 2.506 0 0 0 1.768-1.768C22 16.254 22 12 22 12s0-4.254-.418-5.814zM10 15.464V8.536L16 12l-6 3.464z"/></svg>
        All Videos on Omuto Pulse
      </a>
    </div>
  </div>
</section>

<!-- ===== JOIN THE ALLIANCE ===== -->
<section id="join">
  <div class="container">
    <div class="reveal" style="text-align:center">
      <span class="eyebrow ew-navy">Get Involved</span>
      <h2 class="t-section">Join the <em class="line-red">Alliance</em></h2>
      <p style="font-size:16px;font-weight:500;opacity:.6;max-width:480px;margin:12px auto 0">OFA welcomes everyone who believes in youth-driven transformation through sport.</p>
    </div>
    <div class="join-grid">
      <div class="join-card jc-1 reveal rd1">
        <div class="jc-icon">
          <svg viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
        </div>
        <h3 class="jc-title">Community Team</h3>
        <p class="jc-body">Your team plays. We bring structure, mentorship, and a stage. Register your team for the next OFA season and the Omuto Cup.</p>
        <a href="contact.php" class="btn btn-navy btn-sm" style="margin-top:auto">Register Team →</a>
      </div>
      <div class="join-card jc-2 reveal rd2">
        <div class="jc-icon">
          <svg viewBox="0 0 24 24"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>
        </div>
        <h3 class="jc-title">Coach or Mentor</h3>
        <p class="jc-body">Bring your experience to rural teams that need it. OFA trains coaches who teach both football and life skills.</p>
        <a href="contact.php" class="btn btn-navy btn-sm" style="margin-top:auto">Get in Touch →</a>
      </div>
      <div class="join-card jc-3 reveal rd3">
        <div class="jc-icon">
          <svg viewBox="0 0 24 24"><path d="M11.8 10.9c-2.27-.59-3-1.2-3-2.15 0-1.09 1.01-1.85 2.7-1.85 1.78 0 2.44.85 2.5 2.1h2.21c-.07-1.72-1.12-3.3-3.21-3.81V3h-3v2.16c-1.94.42-3.5 1.68-3.5 3.61 0 2.31 1.91 3.46 4.7 4.13 2.5.6 3 1.48 3 2.41 0 .69-.49 1.79-2.7 1.79-2.06 0-2.87-.92-2.98-2.1h-2.2c.12 2.19 1.76 3.42 3.68 3.83V21h3v-2.15c1.95-.37 3.5-1.5 3.5-3.55 0-2.84-2.43-3.81-4.7-4.4z"/></svg>
        </div>
        <h3 class="jc-title">Local Sponsor</h3>
        <p class="jc-body">Fund kit, equipment, match days, or leadership training. Sponsorship goes directly into OFA programmes — no overhead.</p>
        <a href="contact.php" class="btn btn-navy btn-sm" style="margin-top:auto">Sponsor OFA →</a>
      </div>
      <div class="join-card jc-4 reveal rd4">
        <div class="jc-icon">
          <svg viewBox="0 0 24 24"><path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/></svg>
        </div>
        <h3 class="jc-title">Youth Leader</h3>
        <p class="jc-body">Passionate about sport and community? OFA trains youth leaders who don't just play — they organise, mentor, and lead.</p>
        <a href="contact.php" class="btn btn-navy btn-sm" style="margin-top:auto">Join as Leader →</a>
      </div>
    </div>
  </div>
</section>

<!-- ===== FINAL CTA ===== -->
<section id="finalcta">
  <div class="container">
    <div class="fcta-inner reveal">
      <h2 class="fcta-h">This is football with a future.</h2>
      <p class="fcta-p">Every match. Every training. Every captain mentored — it all builds the same thing. Young people who lead.</p>
      <div class="fcta-btns">
        <a href="contact.php" class="btn btn-navy">Join the Alliance →</a>
        <a href="campaign.php" class="btn btn-white">Fund OFA</a>
        <a href="index.php" class="btn btn-outline-white">Back to Home</a>
      </div>
    </div>
  </div>
</section>

</main>

<!-- FOOTER -->
<footer>
  <div class="container">
    <div class="footer-grid">
      <div>
        <img src="https://i.imgur.com/onkikq1.png" alt="Omuto Foundation" class="f-logo"/>
        <p class="f-desc">Youth-led community development in Mpigi and Butambala, Uganda. For Youth &amp; Sustainable Change. Since 2019.</p>
        <div class="f-socials">
          <a href="https://www.youtube.com/@omutopulse" target="_blank" rel="noopener" class="f-soc" aria-label="YouTube"><svg viewBox="0 0 24 24"><path d="M21.582 6.186a2.506 2.506 0 0 0-1.768-1.768C18.254 4 12 4 12 4s-6.254 0-7.814.418a2.506 2.506 0 0 0-1.768 1.768C2 7.746 2 12 2 12s0 4.254.418 5.814a2.506 2.506 0 0 0 1.768 1.768C5.746 20 12 20 12 20s6.254 0 7.814-.418a2.506 2.506 0 0 0 1.768-1.768C22 16.254 22 12 22 12s0-4.254-.418-5.814zM10 15.464V8.536L16 12l-6 3.464z"/></svg></a>
          <a href="https://wa.me/256750028703" target="_blank" rel="noopener" class="f-soc" aria-label="WhatsApp"><svg viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg></a>
          <a href="https://www.instagram.com/omuto_foundation/" target="_blank" rel="noopener" class="f-soc" aria-label="Instagram"><svg viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg></a>
          <a href="mailto:info@omuto.org" class="f-soc" aria-label="Email"><svg viewBox="0 0 24 24"><path d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg></a>
        </div>
      </div>
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

<!-- VIDEO MODAL -->
<div id="modal" role="dialog" aria-modal="true" aria-label="Video player" onclick="if(event.target===this)closeModal()">
  <div class="modal-inner">
    <button class="modal-close" onclick="closeModal()" type="button">✕ Close</button>
    <iframe id="modal-iframe" src="" title="Video" frameborder="0" allow="accelerometer;autoplay;clipboard-write;encrypted-media;gyroscope;picture-in-picture" allowfullscreen></iframe>
  </div>
</div>

<!-- STICKY -->
<div id="sticky" role="complementary">
  <div class="container sticky-inner">
    <p class="sticky-msg">Join the Omuto Football Alliance</p>
    <div class="sticky-btns">
      <a href="contact.php" class="btn btn-yellow btn-sm" style="color:var(--navy)">Register Your Team</a>
      <a href="campaign.php" class="btn btn-outline-white btn-sm">Fund OFA</a>
      <button class="sticky-x" onclick="document.getElementById('sticky').style.display='none'" aria-label="Dismiss">✕</button>
    </div>
  </div>
</div>

<script>
document.getElementById('yr').textContent = new Date().getFullYear();

// Mobile nav
const hbg = document.getElementById('hbg');
const mobNav = document.getElementById('mob-nav');
hbg.addEventListener('click', () => {
  const open = mobNav.classList.toggle('open');
  hbg.setAttribute('aria-expanded', String(open));
  document.body.style.overflow = open ? 'hidden' : '';
});
document.addEventListener('click', e => {
  if(mobNav.classList.contains('open') && !mobNav.contains(e.target) && !hbg.contains(e.target)){
    mobNav.classList.remove('open');
    hbg.setAttribute('aria-expanded','false');
    document.body.style.overflow = '';
  }
});

// Reveals
(function(){
  const obs = new IntersectionObserver(entries => {
    entries.forEach(e => { if(e.isIntersecting) e.target.classList.add('visible'); });
  },{threshold:0.08,rootMargin:'0px 0px -20px 0px'});
  document.querySelectorAll('.reveal').forEach(el => obs.observe(el));
})();

// Sticky
let shown = false;
window.addEventListener('scroll', () => {
  if(!shown && window.scrollY > 500){ shown = true; document.getElementById('sticky').classList.add('show'); }
},{passive:true});

// Ticker
const msgs = [
  "OFA Launch Match Day — January 2026. Watch the highlights.",
  "Join the Omuto Football Alliance — register your team today.",
  "Football with purpose. Leadership with impact.",
  "The Omuto Cup — where rural talent gets a stage."
];
const tEl = document.querySelector('#ticker-item .ticker-text');
const tItem = document.getElementById('ticker-item');
let tIdx = 0;
setInterval(() => {
  tItem.style.opacity = 0;
  setTimeout(() => { tIdx=(tIdx+1)%msgs.length; tEl.textContent=msgs[tIdx]; tItem.style.opacity=1; }, 400);
}, 5000);

// Video modal
function openModal(vid) {
  const m = document.getElementById('modal');
  document.getElementById('modal-iframe').src = 'https://www.youtube.com/embed/'+vid+'?autoplay=1';
  m.classList.add('open');
  document.body.style.overflow = 'hidden';
}
function closeModal() {
  document.getElementById('modal').classList.remove('open');
  document.getElementById('modal-iframe').src = '';
  document.body.style.overflow = '';
}
document.addEventListener('keydown', e => { if(e.key==='Escape') closeModal(); });
</script>
</body>
</html>