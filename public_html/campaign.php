<?php
/**
 * campaign.php — Omuto Foundation Donate Page
 * ─────────────────────────────────────────────
 * CURRENT MODE: Manual MoMo + Flutterwave payment link
 *
 * TO UPGRADE TO FULL API (once merchant accounts are approved):
 * 1. Replace $FLW_PAYMENT_LINK with your real Flutterwave inline payment key
 * 2. Set $USE_FLW_API = true
 * 3. Add your Flutterwave secret key to notify.php (included below as a separate file)
 * 4. Point Flutterwave webhook to: https://omuto.org/notify.php
 * That's it — everything else is already wired up.
 */

// ── CONFIG (edit these) ───────────────────────────────────────────────────
$WHATSAPP_NUMBER  = "256750028703";           // McMike's WhatsApp (no + or spaces)
$MTN_NUMBER       = "0750 028 703";           // Personal MoMo number for now
$AIRTEL_NUMBER    = "0701 234 567";           // Update when you have it
$NOTIFY_EMAIL     = "info@omuto.org";         // Where donation alerts go
$FORMSPREE_ID     = "YOUR_FORMSPREE_ID";      // Get free at formspree.io
$FLW_PAYMENT_LINK = "https://flutterwave.com/donate/omutofoundation"; // Replace with your real link from flutterwave.com/donate
$USE_FLW_API      = false;                    // Set true when merchant account approved
// ─────────────────────────────────────────────────────────────────────────

$page_title      = "Donate | Omuto Foundation";
$page_desc       = "Support youth-led change in Uganda. Give by card, PayPal, MTN Mobile Money or Airtel Money. Every shilling reaches the field.";
$page_canonical  = "https://omuto.org/campaign";
$page_active_nav = "home";

// Pass config to JS safely
$js_config = json_encode([
    'whatsapp'    => $WHATSAPP_NUMBER,
    'mtn'         => $MTN_NUMBER,
    'airtel'      => $AIRTEL_NUMBER,
    'formspree'   => $FORMSPREE_ID,
    'flw_link'    => $FLW_PAYMENT_LINK,
    'flw_api'     => $USE_FLW_API,
], JSON_HEX_TAG);

$page_extra_css = '
<style>

/* ═══════════════════════════════════════════════
   DONATE PAGE — omuto.org design system
   ═══════════════════════════════════════════════ */

/* ── HERO ── */
#give-hero{
  background:var(--navy);padding:64px 0 0;
  border-bottom:var(--b);position:relative;overflow:hidden
}
.gh-dot{
  position:absolute;inset:0;
  background-image:radial-gradient(circle,rgba(255,255,255,.04) 1px,transparent 1px);
  background-size:22px 22px;pointer-events:none
}
.gh-glow-r{
  position:absolute;top:-80px;right:-80px;width:520px;height:520px;
  border-radius:50%;background:radial-gradient(circle,rgba(238,39,38,.12),transparent 70%);
  pointer-events:none
}
.gh-glow-l{
  position:absolute;bottom:-60px;left:-60px;width:380px;height:380px;
  border-radius:50%;background:radial-gradient(circle,rgba(64,210,175,.07),transparent 70%);
  pointer-events:none
}
.gh-grid{
  display:grid;grid-template-columns:1fr 460px;
  gap:52px;align-items:start;position:relative;z-index:2
}
.gh-eyebrow{
  font-family:var(--font-ui);font-size:10px;font-weight:700;
  text-transform:uppercase;letter-spacing:.28em;
  color:rgba(255,255,255,.35);display:block;margin-bottom:18px
}
.gh-h1{
  font-family:var(--font-head);font-size:clamp(44px,6.5vw,80px);
  font-weight:900;line-height:.88;letter-spacing:-.04em;
  text-transform:uppercase;color:#fff;margin-bottom:20px
}
.gh-h1 em{font-style:italic;color:var(--red)}
.gh-sub{
  font-size:clamp(15px,1.6vw,18px);font-weight:500;
  color:rgba(255,255,255,.6);line-height:1.75;
  max-width:400px;margin-bottom:32px
}
/* social proof */
.gh-proof{
  display:flex;flex-direction:column;gap:10px;
  border:1px solid rgba(255,255,255,.1);border-radius:var(--radius-sm);
  padding:20px;background:rgba(255,255,255,.04)
}
.proof-row{display:flex;align-items:center;gap:12px}
.proof-icon{
  width:34px;height:34px;border-radius:50%;flex-shrink:0;
  display:flex;align-items:center;justify-content:center;
  font-family:var(--font-head);font-size:9px;font-weight:900;
  color:#fff;border:2px solid rgba(255,255,255,.15)
}
.proof-txt{font-size:13px;font-weight:500;color:rgba(255,255,255,.6);line-height:1.4}
.proof-txt strong{color:#fff;font-weight:700}
/* stat strip */
.gh-strip{
  display:grid;grid-template-columns:repeat(4,1fr);
  border-top:1px solid rgba(255,255,255,.08);
  margin-top:52px;position:relative;z-index:2
}
.gh-cell{padding:20px 0;border-right:1px solid rgba(255,255,255,.06)}
.gh-cell:last-child{border-right:none}
.gh-num{font-family:var(--font-head);font-size:clamp(20px,2.8vw,32px);font-weight:900;color:var(--yellow);display:block;line-height:1}
.gh-lbl{font-family:var(--font-ui);font-size:9px;font-weight:700;text-transform:uppercase;letter-spacing:.18em;color:rgba(255,255,255,.3);display:block;margin-top:4px}
@media(max-width:700px){
  .gh-strip{grid-template-columns:1fr 1fr}
  .gh-cell:nth-child(2){border-right:none}
  .gh-cell:nth-child(3){border-top:1px solid rgba(255,255,255,.06)}
  .gh-cell:nth-child(4){border-right:none;border-top:1px solid rgba(255,255,255,.06)}
}

/* ── GIVE BOX ── */
.give-box{
  background:#fff;border:var(--b);border-radius:var(--radius);
  box-shadow:var(--shadow-lg);overflow:hidden;
  margin-bottom:-48px;position:relative;z-index:5
}
.gb-top{
  background:var(--red);padding:16px 24px;border-bottom:var(--b);
  display:flex;align-items:center;justify-content:space-between
}
.gb-top-title{
  font-family:var(--font-head);font-size:15px;font-weight:900;
  text-transform:uppercase;font-style:italic;color:#fff
}
.gb-badge{
  background:var(--yellow);color:var(--navy);border:1.5px solid var(--navy);
  font-family:var(--font-ui);font-size:8px;font-weight:700;
  text-transform:uppercase;letter-spacing:.12em;padding:3px 9px;border-radius:4px
}
.gb-body{padding:24px}
.gb-label{
  font-family:var(--font-ui);font-size:9px;font-weight:700;
  text-transform:uppercase;letter-spacing:.2em;
  color:rgba(29,38,49,.4);display:block;margin-bottom:9px
}

/* amount pills */
.amt-row{display:flex;gap:6px;flex-wrap:wrap;margin-bottom:8px}
.amt-pill{
  flex:1;min-width:60px;
  padding:10px 6px;border:var(--b-thin);border-radius:var(--radius-sm);
  background:var(--cream);cursor:pointer;transition:all .15s;
  text-align:center;font-family:var(--font-head);
}
.amt-pill:hover{background:var(--yellow);border-color:var(--navy);transform:translate(-2px,-2px);box-shadow:3px 3px 0 var(--navy)}
.amt-pill.sel{background:var(--red);color:#fff;border-color:var(--red);transform:translate(-2px,-2px);box-shadow:3px 3px 0 var(--navy)}
.amt-pill b{display:block;font-size:13px;font-weight:900;line-height:1.1}
.amt-pill small{display:block;font-family:var(--font-ui);font-size:8px;font-weight:700;text-transform:uppercase;letter-spacing:.08em;opacity:.5;margin-top:2px}
.amt-pill.sel small{opacity:.7;color:#fff}
.custom-wrap{display:flex;gap:8px;margin-bottom:16px;align-items:center}
.custom-prefix{
  font-family:var(--font-head);font-size:16px;font-weight:900;
  color:rgba(29,38,49,.3);flex-shrink:0
}
.custom-input{
  flex:1;padding:10px 12px;border:var(--b-thin);border-radius:var(--radius-sm);
  font-family:var(--font-head);font-size:14px;font-weight:900;
  background:var(--cream);color:var(--navy);outline:none;
  transition:border-color .15s
}
.custom-input:focus{border-color:var(--red);background:#fff}
.custom-input::placeholder{font-size:11px;font-weight:600;opacity:.35}

/* prog select */
.prog-sel{
  width:100%;padding:11px 12px;border:var(--b-thin);border-radius:var(--radius-sm);
  font-family:var(--font-ui);font-size:11px;font-weight:700;
  background:var(--cream);color:var(--navy);outline:none;
  margin-bottom:18px;cursor:pointer;transition:border-color .15s;
  appearance:none;
  background-image:url("data:image/svg+xml,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' width=\'12\' height=\'8\' viewBox=\'0 0 12 8\'%3E%3Cpath fill=\'%231D2631\' d=\'M6 8L0 0h12z\'/%3E%3C/svg%3E");
  background-repeat:no-repeat;background-position:right 12px center;
  padding-right:32px
}
.prog-sel:focus{border-color:var(--red)}

/* method tabs */
.method-tabs{display:grid;grid-template-columns:1fr 1fr 1fr 1fr;gap:0;border:var(--b-thin);border-radius:var(--radius-sm);overflow:hidden;margin-bottom:18px}
.m-tab{
  padding:10px 4px;font-family:var(--font-ui);font-size:9px;font-weight:700;
  text-transform:uppercase;letter-spacing:.06em;text-align:center;
  cursor:pointer;transition:all .15s;background:var(--cream);
  color:rgba(29,38,49,.45);border:none;border-right:var(--b-thin);line-height:1.3
}
.m-tab:last-child{border-right:none}
.m-tab .m-icon{display:block;font-size:14px;margin-bottom:3px}
.m-tab.on{background:var(--navy);color:#fff}
.m-tab:hover:not(.on){background:#fff;color:var(--navy)}

/* panels */
.pay-panel{display:none}
.pay-panel.on{display:block}

/* ── MTN panel ── */
.mm-header{
  background:var(--yellow);border:var(--b-thin);border-radius:var(--radius-sm);
  padding:14px 16px;margin-bottom:14px;
  display:flex;align-items:center;gap:12px
}
.mm-header .mm-logo{
  font-family:var(--font-head);font-size:18px;font-weight:900;
  color:var(--navy);letter-spacing:-.02em;flex-shrink:0
}
.mm-header p{font-size:11px;font-weight:700;color:var(--navy);line-height:1.4;opacity:.75}

.airtel-header{
  background:#e40000;border:var(--b-thin);border-color:#e40000;border-radius:var(--radius-sm);
  padding:14px 16px;margin-bottom:14px;
  display:flex;align-items:center;gap:12px
}
.airtel-header .mm-logo{color:#fff}
.airtel-header p{color:rgba(255,255,255,.85)}

.mm-steps{display:flex;flex-direction:column;gap:8px;margin-bottom:14px}
.mm-step{
  display:flex;align-items:flex-start;gap:11px;
  padding:12px 14px;background:var(--cream);
  border:var(--b-thin);border-color:rgba(29,38,49,.1);border-radius:var(--radius-sm)
}
.mm-snum{
  width:22px;height:22px;border-radius:50%;flex-shrink:0;
  background:var(--navy);color:#fff;
  font-family:var(--font-head);font-size:10px;font-weight:900;
  display:flex;align-items:center;justify-content:center
}
.mm-sbody{font-size:12px;font-weight:500;color:var(--navy);line-height:1.5}
.mm-sbody code{
  display:inline-block;background:var(--navy);color:var(--yellow);
  font-family:var(--font-head);font-size:13px;font-weight:900;
  padding:2px 9px;border-radius:4px;margin-top:3px;letter-spacing:.02em
}
.mm-sbody strong{font-weight:700}
/* copy-able number */
.mm-number-btn{
  display:flex;align-items:center;gap:10px;width:100%;
  padding:12px 14px;background:var(--navy);border:none;border-radius:var(--radius-sm);
  cursor:pointer;transition:all .15s;margin-bottom:14px;
  text-align:left
}
.mm-number-btn:hover{background:#0a1520;transform:translate(-2px,-2px);box-shadow:var(--shadow-sm)}
.mm-number-btn .nbtn-num{
  font-family:var(--font-head);font-size:20px;font-weight:900;
  color:var(--yellow);letter-spacing:.02em;flex:1
}
.mm-number-btn .nbtn-copy{
  font-family:var(--font-ui);font-size:9px;font-weight:700;
  text-transform:uppercase;letter-spacing:.12em;color:rgba(255,255,255,.4);
  flex-shrink:0
}
.mm-number-btn .nbtn-label{
  font-family:var(--font-ui);font-size:8px;font-weight:700;
  text-transform:uppercase;letter-spacing:.14em;color:rgba(255,255,255,.35);
  display:block;margin-bottom:2px
}

/* confirm form */
.mm-confirm-lbl{
  font-family:var(--font-ui);font-size:9px;font-weight:700;
  text-transform:uppercase;letter-spacing:.18em;color:rgba(29,38,49,.38);
  display:block;margin-bottom:8px
}
.mm-fields{display:flex;flex-direction:column;gap:7px;margin-bottom:14px}
.mm-field{
  padding:10px 12px;border:var(--b-thin);border-radius:var(--radius-sm);
  font-family:var(--font-ui);font-size:12px;font-weight:600;
  background:#fff;color:var(--navy);outline:none;width:100%;
  transition:border-color .15s
}
.mm-field:focus{border-color:var(--red)}
.mm-field::placeholder{opacity:.38;font-weight:600}

/* WhatsApp fallback */
.wa-fallback{
  display:flex;align-items:center;gap:10px;
  padding:12px 14px;background:rgba(64,210,175,.08);
  border:var(--b-thin);border-color:rgba(64,210,175,.3);
  border-radius:var(--radius-sm);margin-top:10px
}
.wa-icon{font-size:20px;flex-shrink:0}
.wa-text{font-size:11px;font-weight:600;color:var(--navy);line-height:1.45;flex:1}
.wa-text a{color:var(--red);text-decoration:underline;font-weight:700}

/* submit btn */
.give-btn{
  width:100%;padding:14px;background:var(--red);color:#fff;
  border:var(--b);border-radius:var(--radius-sm);
  font-family:var(--font-head);font-size:14px;font-weight:900;
  text-transform:uppercase;font-style:italic;
  cursor:pointer;box-shadow:var(--shadow-sm);
  transition:all .18s;display:flex;align-items:center;justify-content:center;gap:8px
}
.give-btn:hover{transform:translate(-3px,-3px);box-shadow:var(--shadow);background:#c91f1e}
.give-btn:disabled{opacity:.5;cursor:not-allowed;transform:none;box-shadow:var(--shadow-sm)}
.give-btn.loading::after{content:" ⏳"}
.give-secure{
  font-family:var(--font-ui);font-size:9px;font-weight:700;
  text-transform:uppercase;letter-spacing:.14em;
  opacity:.28;text-align:center;margin-top:10px;display:block
}

/* success */
.give-success{
  display:none;text-align:center;padding:16px 0
}
.give-success.on{display:block}
.suc-icon{
  width:60px;height:60px;border-radius:50%;background:var(--teal);
  border:var(--b);box-shadow:var(--shadow-sm);
  display:flex;align-items:center;justify-content:center;
  margin:0 auto 14px;font-size:24px
}
.suc-h{font-family:var(--font-head);font-size:20px;font-weight:900;text-transform:uppercase;font-style:italic;margin-bottom:6px}
.suc-p{font-size:13px;font-weight:500;opacity:.62;line-height:1.6}

@media(max-width:960px){
  .gh-grid{grid-template-columns:1fr;gap:36px}
  .give-box{margin-bottom:0}
}

/* ── IMPACT ── */
#impact{background:var(--cream);padding:88px 0;border-bottom:var(--b);position:relative;overflow:hidden}
.impact-wm{position:absolute;top:10px;right:-20px;font-family:var(--font-head);font-size:clamp(100px,16vw,180px);font-weight:900;color:rgba(29,38,49,.04);letter-spacing:-.05em;pointer-events:none;user-select:none;white-space:nowrap}
.impact-grid{display:grid;grid-template-columns:1fr 1fr;gap:64px;align-items:start;position:relative;z-index:2}
.impact-pull{font-family:var(--font-head);font-size:clamp(20px,2.8vw,32px);font-weight:900;line-height:1.2;font-style:italic;margin-bottom:22px}
.impact-pull .red{color:var(--red)}
.impact-body{font-size:16px;line-height:1.85;font-weight:500;color:rgba(29,38,49,.7)}
.impact-body p+p{margin-top:14px}
.impact-table{border:var(--b);border-radius:var(--radius);overflow:hidden;box-shadow:var(--shadow)}
.it-row{
  display:flex;align-items:center;gap:16px;
  padding:16px 20px;border-bottom:var(--b);
  background:#fff;transition:background .15s;cursor:default
}
.it-row:last-child{border-bottom:none}
.it-row:hover{background:var(--cream)}
.it-amt{
  font-family:var(--font-head);font-size:15px;font-weight:900;
  color:var(--red);flex-shrink:0;min-width:100px;line-height:1
}
.it-amt small{
  display:block;font-family:var(--font-ui);font-size:8px;
  font-weight:700;text-transform:uppercase;letter-spacing:.1em;
  color:rgba(29,38,49,.35);margin-top:3px
}
.it-desc{font-size:13px;font-weight:600;color:var(--navy);line-height:1.5;flex:1}
.it-tag{
  font-family:var(--font-ui);font-size:8px;font-weight:700;
  text-transform:uppercase;letter-spacing:.1em;
  padding:3px 9px;border-radius:20px;flex-shrink:0
}
.tag-r{background:rgba(238,39,38,.1);border:1.5px solid rgba(238,39,38,.2);color:var(--red)}
.tag-t{background:rgba(64,210,175,.15);border:1.5px solid rgba(64,210,175,.3);color:#1a7a64}
.tag-n{background:rgba(29,38,49,.07);border:1.5px solid rgba(29,38,49,.15);color:var(--navy)}
.tag-g{background:rgba(214,145,0,.12);border:1.5px solid rgba(214,145,0,.25);color:var(--gold)}
@media(max-width:900px){.impact-grid{grid-template-columns:1fr;gap:40px}}

/* ── HOW IT WORKS ── */
#how{background:var(--navy);padding:88px 0;border-bottom:var(--b);position:relative;overflow:hidden}
.how-grid{display:grid;grid-template-columns:1fr 1fr;gap:64px;align-items:center;position:relative;z-index:2}
.how-big{font-family:var(--font-head);font-size:clamp(26px,3.8vw,46px);font-weight:900;line-height:1.1;font-style:italic;color:#fff}
.how-big .y{color:var(--yellow)}.how-big .r{color:var(--red)}
.how-sub{font-size:15px;line-height:1.85;font-weight:500;color:rgba(255,255,255,.52);margin-top:18px}
.how-sub p+p{margin-top:12px}
.how-list{border:var(--b-thin);border-color:rgba(255,255,255,.12);border-radius:var(--radius);overflow:hidden}
.how-item{padding:20px 24px;border-bottom:1px solid rgba(255,255,255,.08);display:flex;align-items:flex-start;gap:16px;transition:background .15s}
.how-item:last-child{border-bottom:none}
.how-item:hover{background:rgba(255,255,255,.04)}
.how-n{font-family:var(--font-head);font-size:11px;font-weight:900;color:var(--red);width:28px;flex-shrink:0;padding-top:1px}
.how-t strong{display:block;font-family:var(--font-head);font-size:12px;font-weight:800;text-transform:uppercase;letter-spacing:.06em;color:#fff;margin-bottom:2px}
.how-t span{font-size:13px;font-weight:500;color:rgba(255,255,255,.5);line-height:1.55}
@media(max-width:900px){.how-grid{grid-template-columns:1fr;gap:40px}}

/* ── FINAL CTA ── */
#finalcta-c{background:var(--red);padding:80px 0;border-top:var(--b);position:relative;overflow:hidden}
#finalcta-c .halftone{opacity:.06}
.fc-inner{text-align:center;position:relative;z-index:2;max-width:500px;margin:0 auto}
.fc-h{font-family:var(--font-head);font-size:clamp(28px,4.5vw,52px);font-weight:900;line-height:1;text-transform:uppercase;font-style:italic;color:#fff;margin-bottom:12px;letter-spacing:-.02em}
.fc-p{font-size:17px;font-weight:500;color:rgba(255,255,255,.88);margin-bottom:26px;line-height:1.6}
.fc-btns{display:flex;flex-wrap:wrap;gap:12px;justify-content:center}
</style>';

include 'header.php';
?>

<main style="padding-top:calc(var(--ticker-h) + 70px)">

<!-- ① HERO + GIVE BOX -->
<section id="give-hero">
  <div class="gh-dot"></div>
  <div class="gh-glow-r"></div>
  <div class="gh-glow-l"></div>
  <div class="container">
    <div class="gh-grid">

      <!-- LEFT — emotional copy + proof -->
      <div class="reveal">
        <span class="gh-eyebrow">Omuto Foundation · Mpigi, Uganda · Est. 2019</span>
        <h1 class="gh-h1">Your Gift<br/>Builds <em>Leaders.</em></h1>
        <p class="gh-sub">Not handouts. Real systems, real young people, real change — built from within communities that are done waiting.</p>
        <div class="gh-proof">
          <div class="proof-row">
            <div class="proof-icon" style="background:var(--red)">7K+</div>
            <p class="proof-txt"><strong>7,000 young people</strong> engaged across Mpigi and Butambala since 2019</p>
          </div>
          <div class="proof-row">
            <div class="proof-icon" style="background:var(--teal)">3.2K</div>
            <p class="proof-txt"><strong>3,200+ residents</strong> now have cleaner water because of youth-led projects</p>
          </div>
          <div class="proof-row">
            <div class="proof-icon" style="background:var(--gold)">700+</div>
            <p class="proof-txt"><strong>700+ girls</strong> back in school every month — no longer missing class</p>
          </div>
          <div class="proof-row">
            <div class="proof-icon" style="background:var(--navy);font-size:8px">Forbes</div>
            <p class="proof-txt">Recognised by <strong>Forbes Africa</strong>, GlobalGiving, YALI &amp; Theirworld</p>
          </div>
        </div>
      </div>

      <!-- RIGHT — give box -->
      <div class="reveal rd2">
        <div class="give-box" id="give-box">
          <div class="gb-top">
            <span class="gb-top-title">Give Now</span>
            <span class="gb-badge">🔒 Secure</span>
          </div>
          <div class="gb-body">

            <!-- AMOUNT -->
            <span class="gb-label">Choose an amount</span>
            <div class="amt-row">
              <div class="amt-pill" onclick="pickAmt(3,'UGX 11k',this)"><b>$3</b><small>UGX 11k</small></div>
              <div class="amt-pill sel" onclick="pickAmt(7,'UGX 26k',this)"><b>$7</b><small>UGX 26k</small></div>
              <div class="amt-pill" onclick="pickAmt(14,'UGX 52k',this)"><b>$14</b><small>UGX 52k</small></div>
              <div class="amt-pill" onclick="pickAmt(27,'UGX 100k',this)"><b>$27</b><small>UGX 100k</small></div>
              <div class="amt-pill" onclick="pickAmt(54,'UGX 200k',this)"><b>$54</b><small>UGX 200k</small></div>
            </div>
            <div class="custom-wrap">
              <span class="custom-prefix">$</span>
              <input class="custom-input" id="custom-amt" type="number" min="1"
                placeholder="Or type your own amount"
                oninput="clearPills(this)"/>
            </div>

            <!-- PROGRAMME -->
            <span class="gb-label">Direct your gift (optional)</span>
            <select class="prog-sel" id="prog-sel">
              <option value="general">Where it's needed most</option>
              <option value="slf">Student Leaders Forum</option>
              <option value="red">RED Campaign — Girls' Health</option>
              <option value="green">GreenSchools — Environment</option>
              <option value="water">PureWater Initiative</option>
              <option value="skills">YoSkills — Entrepreneurship</option>
              <option value="yap">YAP Community Chapters</option>
            </select>

            <!-- METHOD TABS -->
            <span class="gb-label">How would you like to pay?</span>
            <div class="method-tabs">
              <button class="m-tab on" onclick="switchMethod('mtn',this)">
                <span class="m-icon">📱</span>MTN MoMo
              </button>
              <button class="m-tab" onclick="switchMethod('airtel',this)">
                <span class="m-icon">📱</span>Airtel
              </button>
              <button class="m-tab" onclick="switchMethod('card',this)">
                <span class="m-icon">💳</span>Card
              </button>
              <button class="m-tab" onclick="switchMethod('paypal',this)">
                <span class="m-icon">🅿</span>PayPal
              </button>
            </div>

            <!-- ══ MTN PANEL ══ -->
            <div class="pay-panel on" id="panel-mtn">
              <div class="mm-header">
                <span class="mm-logo">MTN</span>
                <p>Send to this number directly. Takes 30 seconds. No app needed — just dial.</p>
              </div>

              <div class="mm-steps">
                <div class="mm-step">
                  <div class="mm-snum">1</div>
                  <div class="mm-sbody">
                    Dial <code>*165#</code> → <strong>Send Money</strong> → <strong>To Mobile Number</strong>
                  </div>
                </div>
                <div class="mm-step">
                  <div class="mm-snum">2</div>
                  <div class="mm-sbody">
                    Send to this number (tap to copy):
                  </div>
                </div>
              </div>

              <button class="mm-number-btn" onclick="copyNumber('0750028703','mtn-copy-hint')" aria-label="Copy MTN number">
                <div style="flex:1">
                  <span class="nbtn-label">MTN MoMo · Omuto Foundation</span>
                  <span class="nbtn-num">0750 028 703</span>
                </div>
                <span class="nbtn-copy" id="mtn-copy-hint">Tap to copy</span>
              </button>

              <div class="mm-steps">
                <div class="mm-step">
                  <div class="mm-snum">3</div>
                  <div class="mm-sbody">
                    Enter your amount in UGX. In the <strong>reason field</strong>, type your name + programme<br/>
                    e.g. <code>Sarah – RED</code>
                  </div>
                </div>
                <div class="mm-step">
                  <div class="mm-snum">4</div>
                  <div class="mm-sbody">
                    Confirm with your PIN. Then fill below — we'll send your receipt within 24 hours.
                  </div>
                </div>
              </div>

              <span class="mm-confirm-lbl">Confirm your donation</span>
              <div class="mm-fields">
                <input class="mm-field" id="mtn-name" type="text" placeholder="Your full name" autocomplete="name"/>
                <input class="mm-field" id="mtn-phone" type="tel" placeholder="Your MTN number (so we can match it)" autocomplete="tel"/>
                <input class="mm-field" id="mtn-ref" type="text" placeholder="Transaction ID from your MoMo message (optional)"/>
              </div>

              <button class="give-btn" id="mtn-btn" onclick="submitMoMo('mtn')">
                I've Sent the Money — Confirm ✓
              </button>

              <div class="wa-fallback">
                <span class="wa-icon">💬</span>
                <p class="wa-text">Prefer to sort it over WhatsApp? <a href="https://wa.me/<?= $WHATSAPP_NUMBER ?>?text=Hi%20McMike%2C%20I%20want%20to%20donate%20to%20Omuto" target="_blank" rel="noopener">Message McMike directly →</a></p>
              </div>
            </div>

            <!-- ══ AIRTEL PANEL ══ -->
            <div class="pay-panel" id="panel-airtel">
              <div class="airtel-header">
                <span class="mm-logo">Airtel</span>
                <p>Send directly via Airtel Money. Simple steps below.</p>
              </div>

              <div class="mm-steps">
                <div class="mm-step">
                  <div class="mm-snum">1</div>
                  <div class="mm-sbody">
                    Dial <code>*185#</code> → <strong>Send Money</strong> → <strong>To Mobile Number</strong>
                  </div>
                </div>
                <div class="mm-step">
                  <div class="mm-snum">2</div>
                  <div class="mm-sbody">Send to this number (tap to copy):</div>
                </div>
              </div>

              <button class="mm-number-btn" style="background:#c00" onclick="copyNumber('0701234567','airtel-copy-hint')" aria-label="Copy Airtel number">
                <div style="flex:1">
                  <span class="nbtn-label">Airtel Money · Omuto Foundation</span>
                  <span class="nbtn-num">0701 234 567</span>
                </div>
                <span class="nbtn-copy" id="airtel-copy-hint">Tap to copy</span>
              </button>

              <div class="mm-steps">
                <div class="mm-step">
                  <div class="mm-snum">3</div>
                  <div class="mm-sbody">
                    Enter amount in UGX. Add your name + programme in the note.<br/>
                    e.g. <code>John – Water</code>
                  </div>
                </div>
                <div class="mm-step">
                  <div class="mm-snum">4</div>
                  <div class="mm-sbody">Confirm with your PIN, then fill in below for your receipt.</div>
                </div>
              </div>

              <span class="mm-confirm-lbl">Confirm your donation</span>
              <div class="mm-fields">
                <input class="mm-field" id="airtel-name" type="text" placeholder="Your full name" autocomplete="name"/>
                <input class="mm-field" id="airtel-phone" type="tel" placeholder="Your Airtel number" autocomplete="tel"/>
                <input class="mm-field" id="airtel-ref" type="text" placeholder="Transaction ID (optional)"/>
              </div>

              <button class="give-btn" id="airtel-btn" onclick="submitMoMo('airtel')">
                I've Sent the Money — Confirm ✓
              </button>

              <div class="wa-fallback">
                <span class="wa-icon">💬</span>
                <p class="wa-text">Need help? <a href="https://wa.me/<?= $WHATSAPP_NUMBER ?>?text=Hi%20McMike%2C%20I%20want%20to%20donate%20via%20Airtel" target="_blank" rel="noopener">Message McMike on WhatsApp →</a></p>
              </div>
            </div>

            <!-- ══ CARD PANEL ══ -->
            <div class="pay-panel" id="panel-card">
              <p style="font-size:13px;font-weight:500;color:rgba(29,38,49,.65);line-height:1.65;margin-bottom:16px">
                Pay by Visa, Mastercard or any debit card. You'll be taken to a secure Flutterwave checkout page — takes under 2 minutes.
              </p>
              <a href="<?= htmlspecialchars($FLW_PAYMENT_LINK) ?>" target="_blank" rel="noopener"
                class="give-btn" style="text-decoration:none;margin-bottom:10px">
                Pay by Card — Secure Checkout →
              </a>
              <p style="font-size:10px;font-weight:600;opacity:.35;text-align:center;line-height:1.5">
                Powered by Flutterwave · Visa, Mastercard, international cards accepted
              </p>
            </div>

            <!-- ══ PAYPAL PANEL ══ -->
            <div class="pay-panel" id="panel-paypal">
              <p style="font-size:13px;font-weight:500;color:rgba(29,38,49,.65);line-height:1.65;margin-bottom:14px">
                Pay via PayPal — great for international donors. Any currency accepted.
              </p>
              <div id="paypal-container-DTBYQVYX5ABTY"></div>
              <p style="font-size:10px;font-weight:600;opacity:.35;text-align:center;margin-top:10px;line-height:1.5">
                You'll be redirected to PayPal's secure checkout page.
              </p>
            </div>

            <!-- SUCCESS STATE -->
            <div class="give-success" id="give-success">
              <div class="suc-icon">✓</div>
              <h3 class="suc-h">Received. Thank you.</h3>
              <p class="suc-p">McMike will personally send you an acknowledgement and impact update within 24 hours. You're building something real.</p>
              <a href="https://wa.me/<?= $WHATSAPP_NUMBER ?>?text=Hi%20McMike%2C%20I%20just%20donated%20to%20Omuto!" target="_blank" rel="noopener" class="btn btn-navy btn-sm" style="margin-top:16px;display:inline-flex">Say hi on WhatsApp →</a>
            </div>

            <span class="give-secure">🔒 Your info is never shared or sold</span>
          </div><!-- /gb-body -->
        </div><!-- /give-box -->
      </div>
    </div><!-- /gh-grid -->

    <!-- stat strip -->
    <div class="gh-strip reveal">
      <div class="gh-cell"><span class="gh-num">47</span><span class="gh-lbl">Completed Projects</span></div>
      <div class="gh-cell" style="padding-left:24px"><span class="gh-num">7,000+</span><span class="gh-lbl">Youth Engaged</span></div>
      <div class="gh-cell" style="padding-left:24px"><span class="gh-num">3,200+</span><span class="gh-lbl">Safer Water Access</span></div>
      <div class="gh-cell" style="padding-left:24px"><span class="gh-num">2019</span><span class="gh-lbl">Founded in Kammengo</span></div>
    </div>
  </div>
</section>

<!-- ② WHAT YOUR GIFT DOES -->
<section id="impact">
  <span class="impact-wm" aria-hidden="true">IMPACT</span>
  <div class="container">
    <div class="impact-grid">
      <div class="reveal">
        <span class="eyebrow ew-red" style="margin-bottom:24px">Real Numbers</span>
        <p class="impact-pull">Every amount has a<br/><span class="red">specific, trackable</span><br/>real-world result.</p>
        <div class="impact-body">
          <p>We don't do vague promises. When you give, you know exactly what happens. These aren't estimates — they're the actual costs of running programmes on the ground in Mpigi, verified by our annual accounts.</p>
          <p>Our youth teams report back on every project. Our books are audited and published.</p>
        </div>
        <div style="display:flex;gap:10px;flex-wrap:wrap;margin-top:28px">
          <a href="report2025.php" class="btn btn-red btn-sm">Annual Report →</a>
          <a href="impact.php" class="btn btn-white btn-sm">Full Impact Data</a>
        </div>
      </div>
      <div class="reveal rd2">
        <div class="impact-table">
          <div class="it-row"><div class="it-amt">$3<small>UGX 11,000</small></div><p class="it-desc">Project materials for one student leader for a full term</p><span class="it-tag tag-n">SLF</span></div>
          <div class="it-row"><div class="it-amt">$5<small>UGX 18,500</small></div><p class="it-desc">Reusable pads — keeps one girl in school for a full year</p><span class="it-tag tag-r">RED</span></div>
          <div class="it-row"><div class="it-amt">$7<small>UGX 26,000</small></div><p class="it-desc">Clean water access for 10 people for one month</p><span class="it-tag tag-t">Water</span></div>
          <div class="it-row"><div class="it-amt">$14<small>UGX 52,000</small></div><p class="it-desc">Plants and nurtures 5 fruit trees in a school compound</p><span class="it-tag tag-t">Green</span></div>
          <div class="it-row"><div class="it-amt">$27<small>UGX 100,000</small></div><p class="it-desc">Full hygiene education session for an entire school</p><span class="it-tag tag-r">RED</span></div>
          <div class="it-row"><div class="it-amt">$54<small>UGX 200,000</small></div><p class="it-desc">YoSkills weekend course for 10+ young entrepreneurs</p><span class="it-tag tag-g">Skills</span></div>
          <div class="it-row"><div class="it-amt">$135<small>UGX 500,000</small></div><p class="it-desc">Launches a new YAP community chapter in a village</p><span class="it-tag tag-n">YAP</span></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ③ HOW YOUR MONEY MOVES -->
<section id="how">
  <div class="halftone halftone-light"></div>
  <div class="container">
    <div class="how-grid">
      <div class="reveal">
        <span class="eyebrow ew-white" style="margin-bottom:24px">Full Transparency</span>
        <p class="how-big"><span class="y">We don't hide</span><br/>where the money<br/><span class="r">actually goes.</span></p>
        <div class="how-sub">
          <p>Omuto is a nationally registered NGO. Accounts are audited annually and published publicly. Every programme has a named youth lead accountable for its budget.</p>
          <p>When you donate, McMike personally acknowledges it within 24 hours. When the funded work is done, you hear about it.</p>
        </div>
        <div style="display:flex;gap:10px;flex-wrap:wrap;margin-top:28px">
          <a href="docs.php" class="btn btn-white btn-sm">View Financials →</a>
          <a href="report2025.php" class="btn btn-outline-white btn-sm">Annual Report</a>
        </div>
      </div>
      <div class="reveal rd2">
        <div class="how-list">
          <div class="how-item"><span class="how-n">01</span><div class="how-t"><strong>You give</strong><span>MTN, Airtel, card or PayPal — any amount from $3 / UGX 11,000.</span></div></div>
          <div class="how-item"><span class="how-n">02</span><div class="how-t"><strong>Instant acknowledgement</strong><span>Personal thank-you from McMike within 24 hours. Always.</span></div></div>
          <div class="how-item"><span class="how-n">03</span><div class="how-t"><strong>Funds allocated</strong><span>To your chosen programme — or the general fund where it's needed most.</span></div></div>
          <div class="how-item"><span class="how-n">04</span><div class="how-t"><strong>Youth execute</strong><span>Young people design, run, and report on every project. No external consultants, no overhead bloat.</span></div></div>
          <div class="how-item"><span class="how-n">05</span><div class="how-t"><strong>You see it happen</strong><span>Photo updates, impact data, and annual reports keep you connected to what your money built.</span></div></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ④ FINAL CTA -->
<section id="finalcta-c">
  <div class="halftone"></div>
  <div class="container">
    <div class="fc-inner reveal">
      <span class="eyebrow ew-white">Ready?</span>
      <h2 class="fc-h">Seeds grow<br/>when planted.</h2>
      <p class="fc-p">Whatever you give — it becomes a girl in school, a clean cup of water, a young person who knows they matter.</p>
      <div class="fc-btns">
        <a href="#give-hero" class="btn btn-white" style="font-size:13px">Give Now →</a>
        <a href="contact.php" class="btn btn-navy" style="font-size:13px">Partner With Us</a>
      </div>
    </div>
  </div>
</section>

</main>

<?php include 'footer.php'; ?>

<!-- PayPal SDK -->
<script src="https://www.paypal.com/sdk/js?client-id=YOUR_PAYPAL_CLIENT_ID&components=hosted-buttons&disable-funding=venmo&currency=USD"></script>

<script>
const CFG = <?= $js_config ?>;

// ── PayPal ──
if (typeof paypal !== 'undefined') {
  paypal.HostedButtons({ hostedButtonId: "DTBYQVYX5ABTY" })
    .render("#paypal-container-DTBYQVYX5ABTY");
}

// ── Amount state ──
let currentAmt = 7;

function pickAmt(val, ugx, el) {
  currentAmt = val;
  document.querySelectorAll('.amt-pill').forEach(p => p.classList.remove('sel'));
  el.classList.add('sel');
  document.getElementById('custom-amt').value = '';
}
function clearPills(el) {
  document.querySelectorAll('.amt-pill').forEach(p => p.classList.remove('sel'));
  currentAmt = parseFloat(el.value) || 0;
}
function getAmt() {
  const custom = document.getElementById('custom-amt').value;
  return custom ? parseFloat(custom) : currentAmt;
}

// ── Tab switcher ──
function switchMethod(tab, el) {
  document.querySelectorAll('.m-tab').forEach(t => t.classList.remove('on'));
  document.querySelectorAll('.pay-panel').forEach(p => p.classList.remove('on'));
  el.classList.add('on');
  document.getElementById('panel-' + tab).classList.add('on');
}

// ── Copy number to clipboard ──
function copyNumber(num, hintId) {
  navigator.clipboard.writeText(num).then(() => {
    const hint = document.getElementById(hintId);
    const orig = hint.textContent;
    hint.textContent = '✓ Copied!';
    hint.style.color = '#40D2AF';
    setTimeout(() => { hint.textContent = orig; hint.style.color = ''; }, 2000);
  }).catch(() => {
    // Fallback for older browsers
    const el = document.createElement('textarea');
    el.value = num; document.body.appendChild(el);
    el.select(); document.execCommand('copy'); document.body.removeChild(el);
    const hint = document.getElementById(hintId);
    hint.textContent = '✓ Copied!';
    setTimeout(() => { hint.textContent = 'Tap to copy'; }, 2000);
  });
}

// ── Mobile Money submit ──
function submitMoMo(network) {
  const name  = document.getElementById(network + '-name').value.trim();
  const phone = document.getElementById(network + '-phone').value.trim();
  const ref   = document.getElementById(network + '-ref').value.trim();
  const amt   = getAmt();
  const prog  = document.getElementById('prog-sel').value;
  const btn   = document.getElementById(network + '-btn');

  if (!name) { flashError(network + '-name', 'Please enter your name'); return; }
  if (!phone) { flashError(network + '-phone', 'Please enter your phone number'); return; }
  if (!amt || amt <= 0) { alert('Please select or enter a donation amount first.'); return; }

  btn.disabled = true;
  btn.classList.add('loading');
  btn.textContent = 'Sending confirmation...';

  const ugx = Math.round(amt * 3700);
  const body = {
    _subject:  `[Omuto Donation] ${network.toUpperCase()} – ${name}`,
    network:   network.toUpperCase() + ' Mobile Money',
    donor:     name,
    phone:     phone,
    amount_usd: '$' + amt,
    amount_ugx: 'UGX ' + ugx.toLocaleString(),
    programme: prog,
    ref_id:    ref || 'not provided',
    message:   `Donor says they have sent money via ${network.toUpperCase()} MoMo. Please verify against your MoMo statement and send receipt.`
  };

  // ── UPGRADE PATH ──
  // When you get your Flutterwave merchant account, replace this fetch with:
  //   fetch('/flw-checkout.php', { method:'POST', body: JSON.stringify({amt, prog, name, phone, network}) })
  // and Flutterwave handles everything automatically.

  fetch(`https://formspree.io/f/${CFG.formspree}`, {
    method:  'POST',
    headers: { 'Content-Type': 'application/json', 'Accept': 'application/json' },
    body:    JSON.stringify(body)
  })
  .then(r => r.json())
  .then(data => {
    if (data.ok || data.error === undefined) {
      showSuccess();
    } else {
      throw new Error('formspree error');
    }
  })
  .catch(() => {
    // Formspree failed — fall back to WhatsApp so no donation is lost
    btn.disabled = false;
    btn.classList.remove('loading');
    btn.textContent = "I've Sent the Money — Confirm ✓";
    const waMsg = encodeURIComponent(
      `Hi McMike, I've donated via ${network.toUpperCase()} MoMo.\nName: ${name}\nPhone: ${phone}\nAmount: $${amt} (UGX ${ugx.toLocaleString()})\nProgramme: ${prog}\nRef: ${ref || 'n/a'}`
    );
    if (confirm("Couldn't reach our server — would you like to confirm via WhatsApp instead? (Takes 10 seconds)")) {
      window.open(`https://wa.me/${CFG.whatsapp}?text=${waMsg}`, '_blank');
    }
  });
}

function flashError(fieldId, msg) {
  const el = document.getElementById(fieldId);
  el.style.borderColor = 'var(--red)';
  el.placeholder = msg;
  el.focus();
  setTimeout(() => { el.style.borderColor = ''; }, 2500);
}

function showSuccess() {
  // Hide all interactive elements
  document.querySelectorAll(
    '.amt-row,.custom-wrap,.prog-sel,.method-tabs,.pay-panel,.gb-label,.give-secure'
  ).forEach(el => el.style.display = 'none');
  document.getElementById('give-success').classList.add('on');
  document.getElementById('give-success').scrollIntoView({ behavior: 'smooth', block: 'center' });
}
</script>