<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta name="description" content="Contact Omuto Foundation. Partner, volunteer, donate skills, or just start a conversation. Real action starts with real conversation."/>
<title>Contact | Omuto Foundation</title>
<meta name="theme-color" content="#1D2631"/>
<link rel="canonical" href="https://omuto.org/contact"/>
<link rel="icon" type="image/png" href="https://i.imgur.com/onkikq1.png"/>
<meta property="og:type" content="website"/>
<meta property="og:title" content="Contact Omuto Foundation — Build With Us"/>
<meta property="og:description" content="Partner, volunteer, or get in touch. The youth of Mpigi are building. Join the conversation."/>
<meta property="og:image" content="https://i.imgur.com/onkikq1.png"/>
<meta property="og:url" content="https://omuto.org/contact"/>
<meta name="twitter:card" content="summary_large_image"/>
<link rel="preconnect" href="https://fonts.googleapis.com"/>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
<link href="https://fonts.googleapis.com/css2?family=Inter:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,700;1,800;1,900&family=Space+Grotesk:wght@500;600;700&family=Gochi+Hand&display=swap" rel="stylesheet"/>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>
<style>
:root{
  --red:#EE2726;--navy:#1D2631;--cream:#F9F6EE;--yellow:#FFCF5D;
  --teal:#40D2AF;--blue:#96D9F2;--gold:#D69100;
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
.line-teal{color:var(--teal)}
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
.btn-teal{background:var(--teal);color:var(--navy);box-shadow:var(--shadow-sm);border-color:var(--navy)}.btn-teal:hover{transform:translate(-2px,-2px);box-shadow:var(--shadow)}
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
.ticker-item{font-family:var(--font-ui);font-size:10px;font-weight:700;text-transform:uppercase;letter-spacing:.18em;padding:0 32px;display:flex;align-items:center;gap:8px;opacity:1;transition:opacity .4s ease}
.ticker-dot{color:var(--red);opacity:.7}
.ticker-new{background:var(--red);color:#fff;font-size:8px;padding:2px 6px;border-radius:3px;font-weight:700;letter-spacing:.1em}

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
.nav-dd-panel a{display:block;padding:8px 16px;font-family:var(--font-ui);font-size:11px;font-weight:700;text-transform:uppercase;letter-spacing:.08em;color:var(--navy)}
.nav-dd-panel a:hover{background:var(--cream);color:var(--red)}
.nav-cta-btn{font-family:var(--font-ui)!important;background:var(--red)!important;color:#fff!important;border:var(--b)!important;border-radius:8px!important;padding:8px 16px!important;font-size:11px!important;font-weight:700!important;transition:all .15s!important}
.nav-cta-btn:hover{background:var(--navy)!important;transform:translateY(-1px)}
.hbg{display:none;flex-direction:column;gap:5px;padding:8px;cursor:pointer}
.hbg span{display:block;width:22px;height:2.5px;background:var(--navy);border-radius:2px}
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

/* =====================
   HERO
   ===================== */
#hero{
  min-height:72svh;
  background:var(--navy);
  display:flex;align-items:flex-end;
  position:relative;overflow:hidden;
  border-bottom:var(--b);
}
.hero-grid{position:absolute;inset:0;background-image:linear-gradient(rgba(64,210,175,.04) 1px,transparent 1px),linear-gradient(90deg,rgba(64,210,175,.04) 1px,transparent 1px);background-size:48px 48px;pointer-events:none}
.hero-glow-r{position:absolute;top:-80px;right:-80px;width:500px;height:500px;border-radius:50%;background:radial-gradient(circle,rgba(64,210,175,.1),transparent 70%);pointer-events:none}
.hero-glow-l{position:absolute;bottom:-60px;left:-60px;width:400px;height:400px;border-radius:50%;background:radial-gradient(circle,rgba(238,39,38,.08),transparent 70%);pointer-events:none}
.hero-wm{position:absolute;right:-40px;top:50%;transform:translateY(-50%);font-family:var(--font-head);font-size:clamp(140px,22vw,280px);font-weight:900;font-style:italic;color:rgba(255,255,255,.022);letter-spacing:-.06em;text-transform:uppercase;pointer-events:none;user-select:none;line-height:1}

.hero-inner{position:relative;z-index:2;width:100%}
.hero-rule{width:100%;height:4px;background:var(--teal)}
.hero-text{padding:52px 0 0}

.hero-eyebrow{font-family:var(--font-ui);font-size:10px;font-weight:700;text-transform:uppercase;letter-spacing:.28em;color:rgba(255,255,255,.35);display:block;margin-bottom:18px}

.hero-h1{
  font-family:var(--font-head);
  font-size:clamp(60px,10vw,120px);
  font-weight:900;line-height:.88;
  letter-spacing:-.04em;text-transform:uppercase;color:#fff;
}
.hero-h1 .teal{color:var(--teal)}
.hero-h1 .red{color:var(--red)}

.hero-sub{
  font-size:clamp(15px,1.8vw,20px);font-weight:600;
  color:rgba(255,255,255,.55);max-width:560px;
  margin-top:18px;line-height:1.6;
}

/* quick channels strip */
.hero-channels{
  display:flex;flex-wrap:wrap;gap:10px;
  border-top:1px solid rgba(255,255,255,.1);
  padding:20px 0;margin-top:40px;
}
.hc{
  display:inline-flex;align-items:center;gap:8px;
  font-family:var(--font-ui);font-size:10px;font-weight:700;
  text-transform:uppercase;letter-spacing:.12em;
  padding:9px 16px;border-radius:var(--radius-sm);
  border:1.5px solid rgba(255,255,255,.15);
  color:rgba(255,255,255,.7);
  background:rgba(255,255,255,.05);
  transition:all .15s;
}
.hc:hover{background:rgba(255,255,255,.12);border-color:rgba(255,255,255,.3);color:#fff}
.hc svg{width:14px;height:14px;fill:currentColor;flex-shrink:0}

/* =====================
   CONTACT GRID — form + sidebar
   ===================== */
#contact-main{
  background:var(--cream);
  padding:88px 0;border-bottom:var(--b);
}

.contact-grid{
  display:grid;grid-template-columns:1fr 340px;
  gap:28px;align-items:start;
}

/* FORM */
.form-card{
  background:#fff;border:var(--b);border-radius:var(--radius);
  padding:40px;box-shadow:var(--shadow);
}
.form-card h3{
  font-family:var(--font-head);font-size:clamp(22px,2.8vw,32px);
  font-weight:900;text-transform:uppercase;font-style:italic;
  margin-bottom:6px;line-height:1;
}
.form-note{
  font-family:var(--font-ui);font-size:10px;font-weight:700;
  text-transform:uppercase;letter-spacing:.16em;
  color:rgba(29,38,49,.38);margin-bottom:32px;display:block;
}

.form-row{display:grid;grid-template-columns:1fr 1fr;gap:16px}
@media(max-width:600px){.form-row{grid-template-columns:1fr}}

.field{display:flex;flex-direction:column;gap:6px;margin-bottom:16px}
.field label{
  font-family:var(--font-ui);font-size:10px;font-weight:700;
  text-transform:uppercase;letter-spacing:.18em;color:rgba(29,38,49,.5);
}
.field input,.field textarea,.field select{
  font-family:var(--font-head);font-size:15px;font-weight:600;
  color:var(--navy);
  border:var(--b-thin);border-radius:var(--radius-sm);
  padding:13px 16px;background:#fff;
  outline:none;transition:border-color .15s,box-shadow .15s;
  font-style:italic;
  width:100%;
}
.field input:focus,.field textarea:focus,.field select:focus{
  border-color:var(--red);box-shadow:3px 3px 0 var(--red);
}
.field textarea{resize:vertical;min-height:140px}
.field select{cursor:pointer}

/* interest checkboxes */
.interest-grid{
  display:grid;grid-template-columns:1fr 1fr;
  gap:8px;margin-bottom:16px;
}
.interest-opt{
  display:flex;align-items:center;gap:10px;
  border:var(--b-thin);border-radius:var(--radius-sm);
  padding:10px 14px;cursor:pointer;
  transition:all .15s;background:#fff;
}
.interest-opt:hover{background:var(--cream);border-color:var(--navy)}
.interest-opt input[type=checkbox]{width:16px;height:16px;flex-shrink:0;cursor:pointer;accent-color:var(--red)}
.interest-opt span{font-family:var(--font-ui);font-size:11px;font-weight:700;text-transform:uppercase;letter-spacing:.08em;color:rgba(29,38,49,.7)}
.interest-opt.checked{background:rgba(238,39,38,.06);border-color:rgba(238,39,38,.35)}

.form-footer{display:flex;align-items:center;gap:16px;flex-wrap:wrap;margin-top:8px}
.form-privacy{font-family:var(--font-ui);font-size:10px;font-weight:700;text-transform:uppercase;letter-spacing:.12em;color:rgba(29,38,49,.35)}

/* success state */
.form-success{
  display:none;text-align:center;padding:40px 20px;
}
.form-success svg{width:48px;height:48px;fill:var(--teal);margin:0 auto 16px}
.form-success h4{font-family:var(--font-head);font-size:24px;font-weight:900;text-transform:uppercase;font-style:italic;margin-bottom:8px}
.form-success p{font-size:14px;font-weight:500;color:rgba(29,38,49,.65)}

/* SIDEBAR */
.contact-sidebar{display:flex;flex-direction:column;gap:16px}

/* direct contact card */
.dc-card{
  background:var(--navy);border:var(--b);border-radius:var(--radius);
  padding:28px;box-shadow:var(--shadow);
}
.dc-card h4{
  font-family:var(--font-head);font-size:17px;font-weight:900;
  text-transform:uppercase;font-style:italic;color:#fff;
  margin-bottom:20px;
}
.dc-item{
  display:flex;align-items:flex-start;gap:14px;
  margin-bottom:16px;
}
.dc-item:last-child{margin-bottom:0}
.dc-icon{
  width:38px;height:38px;border-radius:10px;flex-shrink:0;
  display:flex;align-items:center;justify-content:center;border:2px solid rgba(255,255,255,.15);
}
.dc-icon svg{width:16px;height:16px;fill:#fff}
.dc-label{font-family:var(--font-ui);font-size:9px;font-weight:700;text-transform:uppercase;letter-spacing:.16em;color:rgba(255,255,255,.32);display:block;margin-bottom:3px}
.dc-val{font-size:14px;font-weight:700;color:#fff;display:block;line-height:1.3}
.dc-sub{font-family:var(--font-ui);font-size:9px;font-weight:700;text-transform:uppercase;letter-spacing:.1em;color:rgba(255,255,255,.3);display:block;margin-top:2px}
.dc-val a{color:inherit;transition:color .15s}
.dc-val a:hover{color:var(--yellow)}

/* visit card */
.visit-card{
  background:var(--cream);border:var(--b);border-radius:var(--radius);
  padding:24px;box-shadow:var(--shadow-sm);
}
.visit-card h4{
  font-family:var(--font-head);font-size:15px;font-weight:900;
  text-transform:uppercase;font-style:italic;
  margin-bottom:16px;
}
.visit-item{display:flex;align-items:flex-start;gap:12px;margin-bottom:14px}
.visit-item:last-child{margin-bottom:0}
.vi-dot{
  width:10px;height:10px;border-radius:50%;background:var(--red);
  flex-shrink:0;border:2px solid var(--navy);margin-top:5px;
}
.vi-label{font-family:var(--font-ui);font-size:9px;font-weight:700;text-transform:uppercase;letter-spacing:.14em;color:rgba(29,38,49,.38);display:block;margin-bottom:2px}
.vi-val{font-size:13px;font-weight:700;color:var(--navy);display:block;line-height:1.45}

/* response sticker */
.response-sticker{
  background:#fff;border:var(--b);border-radius:var(--radius-sm);
  padding:16px 18px;box-shadow:var(--shadow-sm);
  display:flex;align-items:center;gap:12px;
}
.rs-sketch{
  font-family:var(--font-sketch);font-size:26px;
  color:var(--teal);flex-shrink:0;line-height:1;
}
.rs-text{font-family:var(--font-ui);font-size:10px;font-weight:700;text-transform:uppercase;letter-spacing:.12em;color:rgba(29,38,49,.55);line-height:1.6}
.rs-text strong{color:var(--navy)}

@media(max-width:960px){.contact-grid{grid-template-columns:1fr}}

/* =====================
   WAYS TO ENGAGE
   ===================== */
#engage{
  background:var(--navy);
  padding:88px 0;border-bottom:var(--b);
  position:relative;overflow:hidden;
}

.engage-grid{
  display:grid;grid-template-columns:repeat(3,1fr);
  gap:0;border:var(--b);border-radius:var(--radius);
  overflow:hidden;box-shadow:var(--shadow-lg);
  margin-top:48px;position:relative;z-index:2;
}

.engage-card{
  padding:36px 28px;border-right:var(--b);
  display:flex;flex-direction:column;gap:10px;
  transition:background .18s;
}
.engage-card:last-child{border-right:none}
.engage-card:hover{background:rgba(255,255,255,.04)}

.ec-icon{
  width:52px;height:52px;border-radius:14px;
  border:var(--b-thin);border-color:rgba(255,255,255,.2);
  display:flex;align-items:center;justify-content:center;
  margin-bottom:6px;
}
.ec-icon svg{width:24px;height:24px}

.ec-1 .ec-icon{background:rgba(64,210,175,.15)}.ec-1 .ec-icon svg{fill:var(--teal)}
.ec-2 .ec-icon{background:rgba(255,207,93,.15)}.ec-2 .ec-icon svg{fill:var(--yellow)}
.ec-3 .ec-icon{background:rgba(238,39,38,.12)}.ec-3 .ec-icon svg{fill:var(--red)}

.ec-title{
  font-family:var(--font-head);font-size:clamp(18px,2vw,24px);
  font-weight:900;text-transform:uppercase;font-style:italic;
  color:#fff;line-height:1;
}
.ec-body{
  font-size:13px;font-weight:500;line-height:1.7;
  color:rgba(255,255,255,.6);flex:1;
}
.ec-items{
  display:flex;flex-direction:column;gap:6px;margin:8px 0;
}
.ec-item{
  font-size:12px;font-weight:700;color:rgba(255,255,255,.55);
  display:flex;align-items:flex-start;gap:8px;
}
.ec-item::before{content:'→';flex-shrink:0;font-size:10px;margin-top:2px}
.ec-1 .ec-item::before{color:var(--teal)}
.ec-2 .ec-item::before{color:var(--yellow)}
.ec-3 .ec-item::before{color:var(--red)}

@media(max-width:768px){
  .engage-grid{grid-template-columns:1fr}
  .engage-card{border-right:none;border-bottom:var(--b)}
  .engage-card:last-child{border-bottom:none}
}

/* =====================
   FAQ
   ===================== */
#faq{
  background:#fff;
  padding:88px 0;border-bottom:var(--b);
}

.faq-list{
  display:flex;flex-direction:column;gap:0;
  border:var(--b);border-radius:var(--radius);
  overflow:hidden;box-shadow:var(--shadow);
  margin-top:48px;max-width:820px;margin-left:auto;margin-right:auto;
}

.faq-item{border-bottom:2px solid rgba(29,38,49,.07)}
.faq-item:last-child{border-bottom:none}

.faq-trigger{
  width:100%;display:flex;align-items:center;justify-content:space-between;gap:16px;
  padding:22px 28px;cursor:pointer;background:#fff;
  transition:background .15s;text-align:left;
}
.faq-trigger:hover{background:var(--cream)}
.faq-trigger.open{background:var(--cream)}

.faq-q{
  font-family:var(--font-head);font-size:16px;font-weight:800;
  text-transform:uppercase;font-style:italic;color:var(--navy);line-height:1.2;
}

.faq-chevron{
  width:28px;height:28px;border-radius:50%;border:2px solid rgba(29,38,49,.15);
  display:flex;align-items:center;justify-content:center;flex-shrink:0;
  transition:all .2s;background:#fff;
}
.faq-chevron svg{width:12px;height:12px;fill:var(--red);transition:transform .2s}
.faq-trigger.open .faq-chevron{background:var(--red);border-color:var(--red)}
.faq-trigger.open .faq-chevron svg{fill:#fff;transform:rotate(180deg)}

.faq-body{
  display:none;padding:0 28px 22px;
  font-size:15px;font-weight:500;line-height:1.75;
  color:rgba(29,38,49,.72);
}
.faq-body strong{color:var(--navy);font-weight:700}
.faq-item.open .faq-body{display:block}

/* =====================
   MAP
   ===================== */
#map-section{
  background:var(--cream);
  padding:88px 0;border-bottom:var(--b);
}

.map-layout{
  display:grid;grid-template-columns:1fr 300px;
  gap:24px;align-items:start;margin-top:48px;
}

#contact-map{
  height:440px;border:var(--b);border-radius:var(--radius);
  box-shadow:var(--shadow);overflow:hidden;
}

.leaflet-popup-content-wrapper{border:3px solid var(--navy)!important;border-radius:10px!important;box-shadow:4px 4px 0 var(--navy)!important;font-family:'Space Grotesk',sans-serif!important}
.leaflet-popup-tip{background:var(--navy)!important}

.map-cards{display:flex;flex-direction:column;gap:12px}

.map-addr{
  background:#fff;border:var(--b);border-radius:var(--radius-sm);
  padding:18px 20px;box-shadow:var(--shadow-sm);
}
.ma-tag{
  font-family:var(--font-ui);font-size:9px;font-weight:700;
  text-transform:uppercase;letter-spacing:.2em;
  padding:3px 10px;border-radius:20px;
  display:inline-block;margin-bottom:10px;
}
.ma-hq .ma-tag{background:rgba(238,39,38,.08);border:1.5px solid rgba(238,39,38,.25);color:var(--red)}
.ma-kla .ma-tag{background:rgba(64,210,175,.1);border:1.5px solid rgba(64,210,175,.3);color:#1a7a64}
.ma-name{font-family:var(--font-head);font-size:15px;font-weight:900;text-transform:uppercase;font-style:italic;margin-bottom:4px}
.ma-addr{font-size:12px;font-weight:600;color:rgba(29,38,49,.55);line-height:1.55}

.map-actions{display:flex;flex-direction:column;gap:8px}

@media(max-width:900px){.map-layout{grid-template-columns:1fr}#contact-map{height:340px}}

/* =====================
   FINAL CTA
   ===================== */
#finalcta{
  background:var(--navy);color:#fff;
  padding:88px 0;position:relative;overflow:hidden;
  border-top:var(--b);
}
.fc-inner{
  display:grid;grid-template-columns:1fr 1fr;
  gap:64px;align-items:center;position:relative;z-index:2;
}
.fc-left h2{
  font-family:var(--font-head);
  font-size:clamp(36px,5.5vw,68px);
  font-weight:900;line-height:.9;
  text-transform:uppercase;font-style:italic;
  letter-spacing:-.03em;margin-bottom:16px;
}
.fc-left h2 .red{color:var(--red)}
.fc-left p{
  font-size:17px;font-weight:500;opacity:.65;line-height:1.7;
  margin-bottom:28px;max-width:420px;
}
.fc-left .fc-note{
  font-family:var(--font-sketch);font-size:20px;
  color:var(--teal);opacity:1;
}

.fc-right{
  display:flex;flex-direction:column;gap:12px;
}
.fc-channel{
  display:flex;align-items:center;justify-content:space-between;
  gap:12px;background:rgba(255,255,255,.06);
  border:1.5px solid rgba(255,255,255,.12);
  border-radius:var(--radius-sm);padding:18px 22px;
  transition:all .15s;
}
.fc-channel:hover{
  background:rgba(255,255,255,.1);
  border-color:rgba(255,255,255,.25);
  transform:translateX(-4px);
}
.fc-ch-left{display:flex;align-items:center;gap:14px}
.fc-ch-icon{
  width:38px;height:38px;border-radius:10px;
  display:flex;align-items:center;justify-content:center;
  flex-shrink:0;
}
.fc-ch-icon svg{width:18px;height:18px;fill:#fff}
.fc-ch-label{font-family:var(--font-ui);font-size:9px;font-weight:700;text-transform:uppercase;letter-spacing:.16em;color:rgba(255,255,255,.35);display:block;margin-bottom:2px}
.fc-ch-val{font-size:14px;font-weight:700;color:#fff}
.fc-ch-arrow{font-family:var(--font-head);font-size:18px;font-weight:900;color:rgba(255,255,255,.25);transition:color .15s}
.fc-channel:hover .fc-ch-arrow{color:rgba(255,255,255,.7)}

@media(max-width:900px){.fc-inner{grid-template-columns:1fr;gap:40px}}

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

/* STICKY */
#sticky{position:fixed;bottom:0;left:0;width:100%;background:rgba(29,38,49,.96);backdrop-filter:blur(8px);border-top:3px solid var(--teal);padding:11px 0;z-index:500;transform:translateY(100%);transition:transform .3s ease}
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
  <div class="ticker-item" id="ticker-item">
    <span class="ticker-dot">●</span>
    <span class="ticker-new">Open</span>
    <span class="ticker-text">We respond within 24–48hrs · WhatsApp is fastest · +256 750 028 703</span>
  </div>
</div>

<!-- NAV -->
<nav id="nav" aria-label="Main navigation">
  <div class="nav-wrap">
    <div class="nav-left">
      <a href="index.php" class="nav-link">Home</a>
      <div class="nav-dd">
        <button class="nav-link" aria-haspopup="true">Our Work ▾</button>
        <div class="nav-dd-panel" role="menu">
          <a href="osx.php">School Xperience</a>
          <a href="yap.php">YAP Chapters</a>
          <a href="ofa.php">Football Alliance</a>
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
    <a href="contact.php" class="secondary">Get in Touch</a>
  </div>
</div>

<main style="padding-top:calc(var(--ticker-h) + 70px)">

<!-- ===== HERO ===== -->
<section id="hero">
  <div class="hero-grid"></div>
  <div class="hero-glow-r"></div>
  <div class="hero-glow-l"></div>
  <span class="hero-wm" aria-hidden="true">TALK</span>
  <div class="hero-inner">
    <div class="hero-rule"></div>
    <div class="container">
      <div class="hero-text reveal">
        <span class="hero-eyebrow">Omuto Foundation · Connect with Youth Leaders</span>
        <h1 class="hero-h1">
          Build<br/>
          With <span class="teal">Us.</span>
        </h1>
        <p class="hero-sub">Whether you want to volunteer, partner, donate skills, or just start a conversation — real action starts with real conversation.</p>
      </div>
      <div class="hero-channels reveal">
        <a href="mailto:info@omuto.org" class="hc">
          <svg viewBox="0 0 24 24"><path d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg>
          info@omuto.org
        </a>
        <a href="https://wa.me/256750028703" target="_blank" rel="noopener" class="hc">
          <svg viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
          WhatsApp · Fastest
        </a>
        <a href="https://www.instagram.com/omuto_foundation/" target="_blank" rel="noopener" class="hc">
          <svg viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
          Instagram
        </a>
        <a href="https://www.youtube.com/@omutopulse" target="_blank" rel="noopener" class="hc">
          <svg viewBox="0 0 24 24"><path d="M21.582 6.186a2.506 2.506 0 0 0-1.768-1.768C18.254 4 12 4 12 4s-6.254 0-7.814.418a2.506 2.506 0 0 0-1.768 1.768C2 7.746 2 12 2 12s0 4.254.418 5.814a2.506 2.506 0 0 0 1.768 1.768C5.746 20 12 20 12 20s6.254 0 7.814-.418a2.506 2.506 0 0 0 1.768-1.768C22 16.254 22 12 22 12s0-4.254-.418-5.814zM10 15.464V8.536L16 12l-6 3.464z"/></svg>
          Omuto Pulse
        </a>
      </div>
    </div>
  </div>
</section>

<!-- ===== CONTACT FORM + SIDEBAR ===== -->
<section id="contact-main">
  <div class="container">
    <div class="contact-grid">

      <!-- FORM -->
      <div class="form-card reveal">
        <h3>Send a Message</h3>
        <span class="form-note">We typically respond within 24–48 hours · No spam. Ever.</span>

        <form id="contactForm" novalidate>
          <div class="form-row">
            <div class="field">
              <label for="name">Your Name</label>
              <input type="text" id="name" name="name" required placeholder="Your full name"/>
            </div>
            <div class="field">
              <label for="email">Email Address</label>
              <input type="email" id="email" name="email" required placeholder="you@example.com"/>
            </div>
          </div>

          <div class="field">
            <label for="org">Organisation / School (optional)</label>
            <input type="text" id="org" name="org" placeholder="Where are you from?"/>
          </div>

          <div class="field">
            <label for="subject">I'm interested in…</label>
            <select id="subject" name="subject">
              <option value="" disabled selected>Select a topic</option>
              <option value="Volunteering">Volunteering</option>
              <option value="Partnership / Co-creation">Partnership / Co-creation</option>
              <option value="Funding a Chapter">Funding a Chapter</option>
              <option value="Media / Press">Media / Press</option>
              <option value="Internship">Internship Opportunity</option>
              <option value="School Partnership">School Partnership</option>
              <option value="General Enquiry">General Enquiry</option>
            </select>
          </div>

          <div class="field" style="margin-bottom:8px">
            <label>What can you bring? (tick all that apply)</label>
          </div>
          <div class="interest-grid" style="margin-bottom:16px">
            <label class="interest-opt" id="io1">
              <input type="checkbox" name="skills" value="Skills & Mentoring"/> <span>Skills &amp; Mentoring</span>
            </label>
            <label class="interest-opt" id="io2">
              <input type="checkbox" name="skills" value="Funding"/> <span>Funding</span>
            </label>
            <label class="interest-opt" id="io3">
              <input type="checkbox" name="skills" value="Media & Content"/> <span>Media &amp; Content</span>
            </label>
            <label class="interest-opt" id="io4">
              <input type="checkbox" name="skills" value="Connections"/> <span>Connections / Networks</span>
            </label>
          </div>

          <div class="field">
            <label for="message">Your Message</label>
            <textarea id="message" name="message" required placeholder="Tell us about your interest in Omuto — the more specific, the better…"></textarea>
          </div>

          <div class="form-footer">
            <button type="submit" class="btn btn-red">
              Send Message
              <svg width="14" height="14" fill="currentColor" viewBox="0 0 24 24"><path d="M2.01 21L23 12 2.01 3 2 10l15 2-15 2z"/></svg>
            </button>
            <span class="form-privacy">Your information stays private</span>
          </div>
        </form>

        <div class="form-success" id="formSuccess">
          <svg viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
          <h4>Message Sent</h4>
          <p>Your email client will open with your message ready to send to <strong>info@omuto.org</strong>. We'll reply within 24–48 hours.</p>
        </div>
      </div>

      <!-- SIDEBAR -->
      <div class="contact-sidebar reveal rd2">

        <div class="response-sticker">
          <span class="rs-sketch">24hrs</span>
          <span class="rs-text">Typical response time. <strong>WhatsApp is fastest</strong> for urgent enquiries.</span>
        </div>

        <!-- Direct contact -->
        <div class="dc-card">
          <h4>Direct Contact</h4>
          <div class="dc-item">
            <div class="dc-icon" style="background:rgba(238,39,38,.2)">
              <svg viewBox="0 0 24 24"><path d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg>
            </div>
            <div>
              <span class="dc-label">Primary Email</span>
              <span class="dc-val"><a href="mailto:info@omuto.org">info@omuto.org</a></span>
            </div>
          </div>
          <div class="dc-item">
            <div class="dc-icon" style="background:rgba(64,210,175,.2)">
              <svg viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
            </div>
            <div>
              <span class="dc-label">WhatsApp · Fastest Response</span>
              <span class="dc-val"><a href="https://wa.me/256750028703" target="_blank">+256 750 028 703</a></span>
              <span class="dc-sub">Text or call · Mon–Fri 9AM–5PM EAT</span>
            </div>
          </div>
          <div class="dc-item">
            <div class="dc-icon" style="background:rgba(255,207,93,.2)">
              <svg viewBox="0 0 24 24"><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/></svg>
            </div>
            <div>
              <span class="dc-label">Specific Enquiries</span>
              <span class="dc-val" style="font-size:12px">
                <a href="mailto:partnerships@omuto.org" style="display:block">partnerships@omuto.org</a>
                <a href="mailto:media@omuto.org" style="display:block;margin-top:2px">media@omuto.org</a>
              </span>
            </div>
          </div>
        </div>

        <!-- Visit -->
        <div class="visit-card">
          <h4>Visit Our Hub</h4>
          <div class="visit-item">
            <div class="vi-dot" style="background:var(--red)"></div>
            <div>
              <span class="vi-label">HQ · Kammengo, Nabbuzi</span>
              <span class="vi-val">Next to Moka Petro Station<br/>Mpigi District, Central Uganda</span>
            </div>
          </div>
          <div class="visit-item">
            <div class="vi-dot" style="background:var(--teal)"></div>
            <div>
              <span class="vi-label">Kampala Office</span>
              <span class="vi-val">Kyebando, Kanakulya Road</span>
            </div>
          </div>
          <div class="visit-item">
            <div class="vi-dot" style="background:rgba(29,38,49,.2)"></div>
            <div>
              <span class="vi-label">Office Hours</span>
              <span class="vi-val">Mon–Fri · 9:00 AM – 5:00 PM EAT</span>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<!-- ===== WAYS TO ENGAGE ===== -->
<section id="engage">
  <div class="halftone halftone-light"></div>
  <div class="container">
    <div class="reveal" style="text-align:center">
      <span class="eyebrow ew-white">Multiple Ways In</span>
      <h2 class="t-section" style="color:#fff">Get <em style="color:var(--teal)">Involved</em></h2>
      <p style="font-size:16px;font-weight:500;color:rgba(255,255,255,.55);max-width:440px;margin:12px auto 0">We're particularly excited about partnerships that bring skills, not just funding. What can you teach? What can you build?</p>
    </div>
    <div class="engage-grid reveal">
      <div class="engage-card ec-1">
        <div class="ec-icon">
          <svg viewBox="0 0 24 24"><path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/></svg>
        </div>
        <h3 class="ec-title">Volunteer</h3>
        <p class="ec-body">Share your skills in mentoring, training, media, sports coaching, or project management. Virtual or on-site. Every skill matters.</p>
        <div class="ec-items">
          <div class="ec-item">Virtual or on-site options available</div>
          <div class="ec-item">Skill-based and hands-on volunteering</div>
          <div class="ec-item">Youth mentorship programmes</div>
        </div>
        <a href="mailto:volunteer@omuto.org" class="btn btn-teal btn-sm" style="margin-top:4px">Volunteer with Us →</a>
      </div>
      <div class="engage-card ec-2">
        <div class="ec-icon">
          <svg viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
        </div>
        <h3 class="ec-title">Partner</h3>
        <p class="ec-body">Schools, NGOs, corporates, and community groups. Co-create programmes, sponsor chapters, or run joint campaigns. Let's build something that lasts.</p>
        <div class="ec-items">
          <div class="ec-item">School &amp; university partnerships</div>
          <div class="ec-item">Corporate CSR programmes</div>
          <div class="ec-item">NGO collaborations &amp; co-funding</div>
        </div>
        <a href="mailto:partnerships@omuto.org" class="btn btn-yellow btn-sm" style="margin-top:4px">Discuss Partnership →</a>
      </div>
      <div class="engage-card ec-3">
        <div class="ec-icon">
          <svg viewBox="0 0 24 24"><path d="M21 6.5C21 8.43 19.43 10 17.5 10S14 8.43 14 6.5 15.57 3 17.5 3 21 4.57 21 6.5zm-8 3c0 1.93-1.57 3.5-3.5 3.5S6 11.43 6 9.5 7.57 6 9.5 6 13 7.57 13 9.5zM17.5 12c2.21 0 6.5 1.11 6.5 3.33v1.67h-13v-1.67c0-2.22 4.29-3.33 6.5-3.33zm-8 0c-2.78 0-8 1.39-8 4.17V18h8v-1.83c0-.97.37-2.62 2.66-3.87C11.38 12.11 10.3 12 9.5 12z"/></svg>
        </div>
        <h3 class="ec-title">Media &amp; Press</h3>
        <p class="ec-body">Journalists, bloggers, and content creators covering youth-led change in Africa. Forbes Africa featured us — we're happy to tell the story further.</p>
        <div class="ec-items">
          <div class="ec-item">Press enquiries &amp; interviews</div>
          <div class="ec-item">Story features &amp; field visits</div>
          <div class="ec-item">Documentary &amp; content projects</div>
        </div>
        <a href="mailto:media@omuto.org" class="btn btn-red btn-sm" style="margin-top:4px">Contact Media Team →</a>
      </div>
    </div>
  </div>
</section>

<!-- ===== FAQ ===== -->
<section id="faq">
  <div class="container">
    <div class="reveal" style="text-align:center">
      <span class="eyebrow ew-red">Common Questions</span>
      <h2 class="t-section">Frequently<br/><em class="line-red">Asked</em></h2>
    </div>
    <div class="faq-list reveal">
      <div class="faq-item">
        <button class="faq-trigger" aria-expanded="false">
          <span class="faq-q">How quickly do you respond?</span>
          <span class="faq-chevron"><svg viewBox="0 0 24 24"><path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"/></svg></span>
        </button>
        <div class="faq-body">Within <strong>24–48 hours on weekdays</strong>. WhatsApp (+256 750 028 703) gets the fastest response — often within hours. Email is great for longer enquiries, formal proposals, or anything with attachments.</div>
      </div>
      <div class="faq-item">
        <button class="faq-trigger" aria-expanded="false">
          <span class="faq-q">Can international volunteers participate?</span>
          <span class="faq-chevron"><svg viewBox="0 0 24 24"><path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"/></svg></span>
        </button>
        <div class="faq-body">Absolutely. We have both <strong>virtual and on-site</strong> options. Virtual volunteers help with grant writing, digital skills, media, and remote mentoring. For on-site work in Uganda, we assist with orientation, logistics planning, and community integration. We particularly love people who bring specific, teachable skills.</div>
      </div>
      <div class="faq-item">
        <button class="faq-trigger" aria-expanded="false">
          <span class="faq-q">Do you offer internships for young people?</span>
          <span class="faq-chevron"><svg viewBox="0 0 24 24"><path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"/></svg></span>
        </button>
        <div class="faq-body">Yes. We offer <strong>3–6 month internships</strong> for Ugandan youth in community development, media production, environmental action, and programme management. These are hands-on, stipend-based positions designed to build real skills alongside real work.</div>
      </div>
      <div class="faq-item">
        <button class="faq-trigger" aria-expanded="false">
          <span class="faq-q">How can schools partner with Omuto?</span>
          <span class="faq-chevron"><svg viewBox="0 0 24 24"><path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"/></svg></span>
        </button>
        <div class="faq-body">Schools can engage through the <strong>School Xperience (OSX)</strong> programme — covering leadership forums, GreenSchools environmental education, the RED Campaign for menstrual health, and PureWater water filter installation. We provide structured programmes, training materials, and full coordination. Contact partnerships@omuto.org to discuss your school.</div>
      </div>
      <div class="faq-item">
        <button class="faq-trigger" aria-expanded="false">
          <span class="faq-q">Where exactly is your office?</span>
          <span class="faq-chevron"><svg viewBox="0 0 24 24"><path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"/></svg></span>
        </button>
        <div class="faq-body">Our HQ is in <strong>Kammengo, Nabbuzi, Mpigi District</strong> — next to Moka Petro Station. We also have a resource office in <strong>Kyebando, Kanakulya Road, Kampala</strong>. For directions, WhatsApp us and we'll send you a pin. Appointments are appreciated, especially for the Kammengo office.</div>
      </div>
    </div>
  </div>
</section>

<!-- ===== MAP ===== -->
<section id="map-section">
  <div class="container">
    <div class="reveal" style="text-align:center">
      <span class="eyebrow ew-teal">Where to Find Us</span>
      <h2 class="t-section">Find <em class="line-red">Us</em></h2>
      <p style="font-size:16px;font-weight:500;opacity:.6;max-width:400px;margin:12px auto 0">Based in the heart of Mpigi District. Working across Central Uganda.</p>
    </div>
    <div class="map-layout reveal">
      <div id="contact-map" aria-label="Map of Omuto Foundation offices"></div>
      <div class="map-cards">
        <div class="map-addr ma-hq">
          <span class="ma-tag">HQ</span>
          <p class="ma-name">Kammengo, Nabbuzi</p>
          <p class="ma-addr">Next to Moka Petro Station<br/>Mpigi District, Central Uganda</p>
        </div>
        <div class="map-addr ma-kla">
          <span class="ma-tag">Kampala</span>
          <p class="ma-name">Kyebando Office</p>
          <p class="ma-addr">Kanakulya Road, Kyebando<br/>Kampala, Uganda</p>
        </div>
        <div class="map-actions">
          <a href="https://maps.google.com/?q=Kammengo+Mpigi+Uganda" target="_blank" rel="noopener" class="btn btn-red btn-sm">
            <svg width="12" height="12" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/></svg>
            Open in Google Maps
          </a>
          <a href="https://wa.me/256750028703?text=Hi%20Omuto%20team,%20I%20need%20directions%20to%20your%20office" target="_blank" rel="noopener" class="btn btn-white btn-sm">
            <svg width="12" height="12" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
            Get Directions via WhatsApp
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===== FINAL CTA ===== -->
<section id="finalcta">
  <div class="halftone halftone-light"></div>
  <div class="container">
    <div class="fc-inner reveal">
      <div class="fc-left">
        <h2>Ready to<br/><span class="red">Connect?</span></h2>
        <p>Don't wait for the perfect moment. The youth of Mpigi are building now. Join the conversation today.</p>
        <p class="fc-note">We especially love people who bring skills, not just funding.</p>
      </div>
      <div class="fc-right">
        <a href="mailto:info@omuto.org" class="fc-channel">
          <div class="fc-ch-left">
            <div class="fc-ch-icon" style="background:var(--red)">
              <svg viewBox="0 0 24 24"><path d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg>
            </div>
            <div>
              <span class="fc-ch-label">Email Us</span>
              <span class="fc-ch-val">info@omuto.org</span>
            </div>
          </div>
          <span class="fc-ch-arrow">→</span>
        </a>
        <a href="https://wa.me/256750028703" target="_blank" rel="noopener" class="fc-channel">
          <div class="fc-ch-left">
            <div class="fc-ch-icon" style="background:#25d366">
              <svg viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
            </div>
            <div>
              <span class="fc-ch-label">WhatsApp · Fastest</span>
              <span class="fc-ch-val">+256 750 028 703</span>
            </div>
          </div>
          <span class="fc-ch-arrow">→</span>
        </a>
        <a href="mailto:partnerships@omuto.org" class="fc-channel">
          <div class="fc-ch-left">
            <div class="fc-ch-icon" style="background:var(--gold)">
              <svg viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
            </div>
            <div>
              <span class="fc-ch-label">Partnerships</span>
              <span class="fc-ch-val">partnerships@omuto.org</span>
            </div>
          </div>
          <span class="fc-ch-arrow">→</span>
        </a>
        <a href="mailto:media@omuto.org" class="fc-channel">
          <div class="fc-ch-left">
            <div class="fc-ch-icon" style="background:var(--teal)">
              <svg viewBox="0 0 24 24"><path d="M21 6.5C21 8.43 19.43 10 17.5 10S14 8.43 14 6.5 15.57 3 17.5 3 21 4.57 21 6.5zm-8 3c0 1.93-1.57 3.5-3.5 3.5S6 11.43 6 9.5 7.57 6 9.5 6 13 7.57 13 9.5z"/></svg>
            </div>
            <div>
              <span class="fc-ch-label">Media &amp; Press</span>
              <span class="fc-ch-val">media@omuto.org</span>
            </div>
          </div>
          <span class="fc-ch-arrow">→</span>
        </a>
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

<div id="sticky" role="complementary">
  <div class="container sticky-inner">
    <p class="sticky-msg">Real action starts with real conversation</p>
    <div class="sticky-btns">
      <a href="mailto:info@omuto.org" class="btn btn-teal btn-sm">Email Us</a>
      <a href="https://wa.me/256750028703" target="_blank" rel="noopener" class="btn btn-outline-white btn-sm">WhatsApp</a>
      <button class="sticky-x" onclick="document.getElementById('sticky').style.display='none'" aria-label="Dismiss">✕</button>
    </div>
  </div>
</div>

<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
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
  const obs = new IntersectionObserver(entries=>{
    entries.forEach(e=>{ if(e.isIntersecting) e.target.classList.add('visible'); });
  },{threshold:.07,rootMargin:'0px 0px -20px 0px'});
  document.querySelectorAll('.reveal').forEach(el=>obs.observe(el));
})();

// Sticky
let shown=false;
window.addEventListener('scroll',()=>{
  if(!shown&&window.scrollY>500){shown=true;document.getElementById('sticky').classList.add('show');}
},{passive:true});

// Ticker
const msgs=["We respond within 24–48hrs · WhatsApp is fastest · +256 750 028 703","Partner with us — skills, funding, or connections all welcome.","The youth of Mpigi are building. Join the conversation.","Internship and volunteer opportunities available now."];
const tEl=document.querySelector('#ticker-item .ticker-text');
const tItem=document.getElementById('ticker-item');
let tIdx=0;
setInterval(()=>{
  tItem.style.opacity=0;
  setTimeout(()=>{tIdx=(tIdx+1)%msgs.length;tEl.textContent=msgs[tIdx];tItem.style.opacity=1;},400);
},5000);

// Interest checkbox highlight
document.querySelectorAll('.interest-opt input').forEach(cb=>{
  cb.addEventListener('change',()=>{
    cb.closest('.interest-opt').classList.toggle('checked', cb.checked);
  });
});

// FAQ accordion
document.querySelectorAll('.faq-trigger').forEach(btn=>{
  btn.addEventListener('click',()=>{
    const item=btn.closest('.faq-item');
    const wasOpen=item.classList.contains('open');
    document.querySelectorAll('.faq-item').forEach(i=>{
      i.classList.remove('open');
      i.querySelector('.faq-trigger').classList.remove('open');
      i.querySelector('.faq-trigger').setAttribute('aria-expanded','false');
    });
    if(!wasOpen){
      item.classList.add('open');
      btn.classList.add('open');
      btn.setAttribute('aria-expanded','true');
    }
  });
});

// Map
document.addEventListener('DOMContentLoaded',()=>{
  const map=L.map('contact-map',{scrollWheelZoom:false}).setView([0.25,32.35],9);
  L.tileLayer('https://{s}.basemaps.cartocdn.com/rastertiles/voyager/{z}/{x}/{y}{r}.png',{
    attribution:'© OpenStreetMap contributors © CARTO',subdomains:'abcd',maxZoom:20
  }).addTo(map);

  const mkIcon=(color)=>L.divIcon({
    className:'',
    html:`<div style="width:16px;height:16px;border-radius:50%;background:${color};border:3px solid #1D2631;box-shadow:3px 3px 0 #1D2631;"></div>`,
    iconSize:[20,20],iconAnchor:[10,10],popupAnchor:[0,-10]
  });
  const popup=(t,d)=>`<strong style="font-family:Space Grotesk;font-size:12px;text-transform:uppercase;display:block;margin-bottom:4px">${t}</strong><span style="font-size:11px;opacity:.7">${d}</span>`;

  L.marker([0.168,32.235],{icon:mkIcon('#EE2726')}).addTo(map)
    .bindPopup(popup('Omuto HQ','Kammengo, Nabbuzi · Next to Moka Petro Station'));
  L.marker([0.358,32.575],{icon:mkIcon('#40D2AF')}).addTo(map)
    .bindPopup(popup('Kampala Office','Kyebando, Kanakulya Road'));

  setTimeout(()=>map.invalidateSize(),400);
});

// Form
document.getElementById('contactForm').addEventListener('submit',function(e){
  e.preventDefault();
  const name=document.getElementById('name').value.trim();
  const email=document.getElementById('email').value.trim();
  const subject=document.getElementById('subject').value||'General Enquiry';
  const org=document.getElementById('org').value.trim();
  const message=document.getElementById('message').value.trim();
  const skills=[...document.querySelectorAll('input[name="skills"]:checked')].map(c=>c.value).join(', ');

  if(!name||!email||!message){
    alert('Please fill in your name, email, and message.');
    return;
  }
  const sub=encodeURIComponent(`Omuto Contact: ${subject}`);
  const body=encodeURIComponent(
    `Name: ${name}\nEmail: ${email}${org?'\nOrganisation: '+org:''}\n\nInterests: ${skills||'Not specified'}\n\nMessage:\n${message}`
  );
  window.location.href=`mailto:info@omuto.org?subject=${sub}&body=${body}`;
  document.getElementById('contactForm').style.display='none';
  document.getElementById('formSuccess').style.display='block';
});
</script>
</body>
</html>