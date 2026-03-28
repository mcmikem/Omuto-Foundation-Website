<?php
$page_title      = "Contact | Omuto Foundation";
$page_desc       = "Contact Omuto Foundation. Partner, volunteer, donate skills, or just start a conversation.";
$page_canonical  = "https://omuto.org/contact";
$page_active_nav = "impact";
$footer_show_sticky = false;

$page_extra_css = '<style>
.hero-contact{min-height:60svh;background:var(--navy);display:flex;align-items:flex-end;position:relative;overflow:hidden;border-bottom:var(--b)}
.hero-contact-glow{position:absolute;top:-80px;right:-80px;width:500px;height:500px;border-radius:50%;background:radial-gradient(circle,rgba(238,39,38,.13),transparent 70%)}
.hero-contact-wm{position:absolute;bottom:20px;right:40px;font-family:var(--font-head);font-size:clamp(80px,15vw,180px);font-weight:900;color:rgba(255,255,255,.04);letter-spacing:-.02em;pointer-events:none;user-select:none}
.hero-contact-inner{padding:60px 0;position:relative;z-index:2}
.hero-contact h1{font-family:var(--font-head);font-size:clamp(48px,8vw,96px);font-weight:900;line-height:.9;letter-spacing:-.04em;text-transform:uppercase;color:#fff;margin-bottom:16px}
.hero-contact h1 em{font-style:italic;color:var(--teal)}
.hero-contact p{font-size:16px;font-weight:500;color:rgba(255,255,255,.65);max-width:480px;line-height:1.7}
.hc{display:flex;align-items:center;gap:10px;padding:12px 18px;background:rgba(255,255,255,.08);border:2px solid rgba(255,255,255,.15);border-radius:var(--radius-sm);color:#fff;font-size:13px;font-weight:700;transition:all .15s;margin-right:8px;margin-bottom:8px}
.hc:hover{background:rgba(255,255,255,.15);border-color:var(--teal)}
.hc svg{width:16px;height:16px;fill:currentColor}
#engage{background:var(--navy);padding:88px 0;border-bottom:var(--b)}
.engage-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:0;border:var(--b);border-radius:var(--radius);overflow:hidden;box-shadow:var(--shadow-lg);margin-top:48px}
.engage-card{padding:36px 28px;border-right:var(--b);display:flex;flex-direction:column;gap:10px;transition:background .18s}
.engage-card:last-child{border-right:none}
.engage-card:hover{background:rgba(255,255,255,.05}
.engage-card h3{font-family:var(--font-head);font-size:20px;font-weight:900;text-transform:uppercase;font-style:italic;color:#fff;margin-bottom:8px}
.engage-card p{font-size:13px;font-weight:500;color:rgba(255,255,255,.55);line-height:1.6}
.engage-card .ec-icon{width:48px;height:48px;border-radius:12px;display:flex;align-items:center;justify-content:center;margin-bottom:8px}
.engage-card .ec-icon svg{width:22px;height:22px;fill:#fff}
@media(max-width:768px){.engage-grid{grid-template-columns:1fr}.engage-card{border-right:none;border-bottom:var(--b)}.engage-card:last-child{border-bottom:none}}
#faq{background:var(--cream);padding:88px 0;border-bottom:var(--b)}
.faq-list{max-width:720px;margin:48px auto 0}
.faq-item{border:var(--b-thin);border-radius:var(--radius-sm);margin-bottom:12px;overflow:hidden;background:#fff}
.faq-trigger{width:100%;padding:20px 24px;display:flex;justify-content:space-between;align-items:center;background:none;border:none;cursor:pointer;text-align:left}
.faq-q{font-family:var(--font-head);font-size:15px;font-weight:800;text-transform:uppercase;color:var(--navy)}
.faq-chevron{width:24px;height:24px;display:flex;align-items:center;justify-content:center;transition:transform .2s}
.faq-chevron svg{width:18px;height:18px;fill:var(--navy)}
.faq-trigger[aria-expanded="true"] .faq-chevron{transform:rotate(180deg)}
.faq-body{padding:0 24px 20px;font-size:14px;font-weight:500;line-height:1.7;color:rgba(29,38,49,.7);display:none}
.faq-item.open .faq-body{display:block}
#map-section{background:#fff;padding:88px 0;border-bottom:var(--b)}
.map-layout{display:grid;grid-template-columns:1fr 300px;gap:24px;margin-top:48px}
#contact-map{height:400px;border:var(--b);border-radius:var(--radius)}
.map-cards{display:flex;flex-direction:column;gap:12px}
.map-addr{background:var(--cream);padding:16px 20px;border:var(--b-thin);border-radius:var(--radius-sm)}
.ma-tag{font-family:var(--font-ui);font-size:8px;font-weight:700;text-transform:uppercase;letter-spacing:.16em;background:var(--red);color:#fff;padding:2px 8px;border-radius:4px;margin-bottom:8px;display:inline-block}
.ma-name{font-family:var(--font-head);font-size:14px;font-weight:800;text-transform:uppercase;margin-bottom:4px}
.ma-addr{font-size:12px;font-weight:500;opacity:.6;line-height:1.5}
#finalcta{background:var(--navy);padding:88px 0;position:relative;overflow:hidden}
.fc-inner{display:flex;gap:48px;align-items:center}
.fc-left{flex:1}
.fc-left h2{font-family:var(--font-head);font-size:clamp(36px,5vw,56px);font-weight:900;text-transform:uppercase;font-style:italic;color:#fff;margin-bottom:16px}
.fc-left h2 .red{color:var(--red)}
.fc-left p{font-size:15px;font-weight:500;color:rgba(255,255,255,.6);line-height:1.7;max-width:400px}
.fc-note{font-family:var(--font-ui);font-size:11px;font-weight:700;text-transform:uppercase;letter-spacing:.12em;color:rgba(255,255,255,.35);margin-top:12px}
.fc-right{display:flex;flex-direction:column;gap:10px;min-width:280px}
.fc-channel{display:flex;align-items:center;justify-content:space-between;padding:16px 20px;background:rgba(255,255,255,.05);border:2px solid rgba(255,255,255,.1);border-radius:var(--radius-sm);transition:all .15s}
.fc-channel:hover{background:rgba(255,255,255,.1);border-color:rgba(255,255,255,.3)}
.fc-ch-left{display:flex;align-items:center;gap:14px}
.fc-ch-icon{width:36px;height:36px;border-radius:8px;display:flex;align-items:center;justify-content:center}
.fc-ch-icon svg{width:16px;height:16px;fill:#fff}
.fc-ch-label{font-family:var(--font-ui);font-size:9px;font-weight:700;text-transform:uppercase;letter-spacing:.14em;color:rgba(255,255,255,.4);display:block}
.fc-ch-val{font-size:13px;font-weight:700;color:#fff;display:block;margin-top:2px}
.fc-ch-arrow{font-size:20px;color:rgba(255,255,255,.3)}
@media(max-width:900px){.fc-inner{flex-direction:column;gap:32px}.fc-right{width:100%;min-width:auto}}
@media(max-width:600px){.map-layout{grid-template-columns:1fr}}
</style>';

$page_extra_head = '<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"/>';
$footer_extra_js = '<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
<script>
document.addEventListener("DOMContentLoaded",function(){
  // FAQ accordion
  document.querySelectorAll(".faq-trigger").forEach(function(btn){
    btn.addEventListener("click",function(){
      var item=this.closest(".faq-item");
      var isOpen=item.classList.contains("open");
      document.querySelectorAll(".faq-item").forEach(function(i){i.classList.remove("open");i.querySelector(".faq-trigger").setAttribute("aria-expanded","false")});
      if(!isOpen){item.classList.add("open");this.setAttribute("aria-expanded","true")}
    });
  });
  // Leaflet map
  if(document.getElementById("contact-map")){
    var map=L.map("contact-map",{center:[0.25,32.0],zoom:9,scrollWheelZoom:false});
    L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png",{attribution:"© OpenStreetMap"}).addTo(map);
    L.marker([0.25,32.0],{icon:L.divIcon({className:"map-marker",html:"<div style=\'background:var(--red);width:20px;height:20px;border-radius:50%;border:3px solid #fff;box-shadow:0 2px 8px rgba(0,0,0,0.3)\'></div>",iconSize:[20,20],iconAnchor:[10,10]})}).addTo(map).bindPopup("<strong>Omuto Foundation</strong><br/>Mpigi, Uganda");
  }
  // Form
  var form=document.getElementById("contactForm");
  if(form){
    form.addEventListener("submit",function(e){
      e.preventDefault();
      form.style.display="none";
      document.getElementById("formSuccess").style.display="block";
    });
  }
});
</script>';
?>
<?php include 'header.php'; ?>

<main>
  <!-- HERO -->
  <section class="hero-contact">
    <div class="hero-contact-glow"></div>
    <div class="hero-contact-wm" aria-hidden="true">TALK</div>
    <div class="container hero-contact-inner">
      <h1>Build<br/><em>With Us.</em></h1>
      <p>Whether you want to volunteer, partner, donate skills, or just start a conversation — real action starts with real conversation.</p>
      <div style="margin-top:24px;display:flex;flex-wrap:wrap">
        <a href="mailto:info@omuto.org" class="hc"><svg viewBox="0 0 24 24"><path d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg> info@omuto.org</a>
        <a href="https://wa.me/256750028703" target="_blank" rel="noopener" class="hc"><svg viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg> WhatsApp</a>
        <a href="https://www.instagram.com/omuto_foundation/" target="_blank" rel="noopener" class="hc"><svg viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg> Instagram</a>
      </div>
    </div>
  </section>

  <!-- FORM -->
  <section style="padding:88px 0">
    <div class="container">
      <div class="contact-grid">
        <div class="form-card">
          <h3>Send a Message</h3>
          <span class="form-note">We typically respond within 24–48 hours · No spam.</span>
          <form id="contactForm">
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
                <option value="Partnership">Partnership / Co-creation</option>
                <option value="Funding">Funding a Chapter</option>
                <option value="Media">Media / Press</option>
                <option value="Internship">Internship</option>
                <option value="School">School Partnership</option>
                <option value="General">General Enquiry</option>
              </select>
            </div>
            <div class="field"><label>What can you bring?</label></div>
            <div class="interest-grid">
              <label class="interest-opt"><input type="checkbox" name="skills" value="Skills"/> <span>Skills</span></label>
              <label class="interest-opt"><input type="checkbox" name="skills" value="Funding"/> <span>Funding</span></label>
              <label class="interest-opt"><input type="checkbox" name="skills" value="Media"/> <span>Media</span></label>
              <label class="interest-opt"><input type="checkbox" name="skills" value="Connections"/> <span>Connections</span></label>
            </div>
            <div class="field">
              <label for="message">Your Message</label>
              <textarea id="message" name="message" required placeholder="Tell us about your interest..."></textarea>
            </div>
            <div class="form-footer">
              <button type="submit" class="btn btn-red">Send Message</button>
              <span class="form-privacy">Your info stays private</span>
            </div>
          </form>
          <div class="form-success" id="formSuccess">
            <svg viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
            <h4>Message Sent!</h4>
            <p>We'll reply within 24–48 hours.</p>
          </div>
        </div>
        <div class="contact-sidebar">
          <div class="response-sticker"><span class="rs-sketch">24hrs</span><span class="rs-text">Typical response time. <strong>WhatsApp is fastest.</strong></span></div>
          <div class="dc-card">
            <h4>Direct Contact</h4>
            <div class="dc-item"><div class="dc-icon" style="background:rgba(238,39,38,.2)"><svg viewBox="0 0 24 24"><path d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg></div><div><span class="dc-label">Email</span><span class="dc-val"><a href="mailto:info@omuto.org">info@omuto.org</a></span></div></div>
            <div class="dc-item"><div class="dc-icon" style="background:rgba(37,211,102,.2)"><svg viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg></div><div><span class="dc-label">WhatsApp</span><span class="dc-val"><a href="https://wa.me/256750028703">+256 750 028 703</a></span><span class="dc-sub">Fastest response</span></div></div>
          </div>
          <div class="visit-card">
            <h4>Visit Us</h4>
            <div class="visit-item"><div class="vi-dot"></div><div><span class="vi-label">HQ</span><span class="vi-val">Kammengo, Nabbuzi<br/>Mpigi District</span></div></div>
            <div class="visit-item"><div class="vi-dot" style="background:var(--teal);border-color:var(--teal)"></div><div><span class="vi-label">Kampala</span><span class="vi-val">Kyebando, Kanakulya Rd</span></div></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ENGAGE -->
  <section id="engage">
    <div class="container">
      <div style="text-align:center"><span class="eyebrow ew-teal">Get Involved</span><h2 class="t-section" style="color:#fff">Three Ways to <em class="line-teal">Engage</em></h2></div>
      <div class="engage-grid">
        <div class="engage-card"><div class="ec-icon" style="background:var(--red)"><svg viewBox="0 0 24 24"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg></div><h3>Fund a Chapter</h3><p>Support youth-led projects. Every contribution builds the next generation of leaders.</p><a href="campaign.php" class="btn btn-sm btn-outline-white" style="margin-top:12px">Donate →</a></div>
        <div class="engage-card"><div class="ec-icon" style="background:var(--teal)"><svg viewBox="0 0 24 24"><path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/></svg></div><h3>Partner With Us</h3><p>Schools, NGOs, and institutions can scale our model to new communities.</p><a href="campaign.php" class="btn btn-sm btn-outline-white" style="margin-top:12px">Start →</a></div>
        <div class="engage-card"><div class="ec-icon" style="background:var(--gold)"><svg viewBox="0 0 24 24"><path d="M12 3L1 9l11 6 9-4.91V17h2V9L12 3z"/></svg></div><h3>Volunteer Skills</h3><p>Share your expertise — mentoring, media, tech, or business skills transform lives.</p><a href="campaign.php" class="btn btn-sm btn-outline-white" style="margin-top:12px">Apply →</a></div>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section id="faq">
    <div class="container">
      <div style="text-align:center"><span class="eyebrow ew-navy">FAQ</span><h2 class="t-section">Questions <em class="line-red">Answered</em></h2></div>
      <div class="faq-list">
        <div class="faq-item"><button class="faq-trigger" aria-expanded="false"><span class="faq-q">How do I start a chapter?</span><span class="faq-chevron"><svg viewBox="0 0 24 24"><path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"/></svg></span></button><div class="faq-body">Fill out our contact form with your interest. We'll schedule a call within 48 hours to discuss your community and how the OMUTO model can work there.</div></div>
        <div class="faq-item"><button class="faq-trigger" aria-expanded="false"><span class="faq-q">Can I visit your programs?</span><span class="faq-chevron"><svg viewBox="0 0 24 24"><path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"/></svg></span></button><div class="faq-body">Absolutely! We welcome visitors to see our work firsthand. WhatsApp us to arrange a visit to our Youth Center in Mpigi.</div></div>
        <div class="faq-item"><button class="faq-trigger" aria-expanded="false"><span class="faq-q">Where exactly is your office?</span><span class="faq-chevron"><svg viewBox="0 0 24 24"><path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z"/></svg></span></button><div class="faq-body">Our HQ is in Kammengo, Nabbuzi, Mpigi District — next to Moka Petro Station. We also have an office in Kyebando, Kampala.</div></div>
      </div>
    </div>
  </section>

  <!-- MAP -->
  <section id="map-section">
    <div class="container">
      <div style="text-align:center"><span class="eyebrow ew-teal">Location</span><h2 class="t-section">Find <em class="line-red">Us</em></h2></div>
      <div class="map-layout">
        <div id="contact-map"></div>
        <div class="map-cards">
          <div class="map-addr"><span class="ma-tag">HQ</span><p class="ma-name">Kammengo, Nabbuzi</p><p class="ma-addr">Mpigi District<br/>Central Uganda</p></div>
          <div class="map-addr"><span class="ma-tag">Kampala</span><p class="ma-name">Kyebando Office</p><p class="ma-addr">Kanakulya Road<br/>Kampala, Uganda</p></div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section id="finalcta">
    <div class="halftone halftone-light"></div>
    <div class="container">
      <div class="fc-inner">
        <div class="fc-left"><h2>Ready to<br/><span class="red">Connect?</span></h2><p>Don't wait for the perfect moment. The youth of Mpigi are building now.</p><p class="fc-note">We love people who bring skills, not just funding.</p></div>
        <div class="fc-right">
          <a href="mailto:info@omuto.org" class="fc-channel"><div class="fc-ch-left"><div class="fc-ch-icon" style="background:var(--red)"><svg viewBox="0 0 24 24"><path d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg></div><div><span class="fc-ch-label">Email</span><span class="fc-ch-val">info@omuto.org</span></div></div><span class="fc-ch-arrow">→</span></a>
          <a href="https://wa.me/256750028703" target="_blank" rel="noopener" class="fc-channel"><div class="fc-ch-left"><div class="fc-ch-icon" style="background:#25d366"><svg viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg></div><div><span class="fc-ch-label">WhatsApp</span><span class="fc-ch-val">+256 750 028 703</span></div></div><span class="fc-ch-arrow">→</span></a>
        </div>
      </div>
    </div>
  </section>
</main>

<?php include 'footer.php'; ?>
</body>
</html>
