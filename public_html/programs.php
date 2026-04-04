<?php
$page_title      = "Our Programs | Omuto Foundation";
$page_desc       = "Five interconnected programs building youth-led change: School Xperience, YAP Chapters, YoSkills, Omuto Essentials, and Omuto Talents.";
$page_canonical  = "https://omuto.org/programs";
$page_active_nav = "work";
?>
<?php include 'header.php'; ?>

<style>
/* ── Programs Page ─────────────────────────────────────────────── */

/* Hero */
.pg-hero{min-height:80svh;background:var(--navy);display:flex;align-items:flex-end;position:relative;overflow:hidden;border-bottom:var(--b)}
.pg-hero-glow{position:absolute;top:-80px;right:-80px;width:500px;height:500px;border-radius:50%;background:radial-gradient(circle,rgba(238,39,38,.13),transparent 70%)}
.pg-hero-halftone{opacity:0.5}
.pg-talents-halftone,.pg-cta-halftone{opacity:0.3}
.pg-hero-inner{position:relative;z-index:2;padding:60px 24px}
.pg-hero-eyebrow{margin-bottom:18px}
.pg-hero-h{font-family:var(--font-head);font-size:clamp(48px,9vw,100px);font-weight:900;line-height:.88;letter-spacing:-.04em;text-transform:uppercase;color:#fff;margin-bottom:16px}
.pg-hero-h em{font-style:italic;color:var(--red)}
.pg-hero-sub{font-size:clamp(16px,2vw,22px);font-weight:700;color:rgba(255,255,255,.7);max-width:560px;line-height:1.6}
.pg-hero-accent{color:var(--red)}
.pg-hero-desc{font-size:16px;font-weight:500;color:rgba(255,255,255,.55);max-width:520px;margin-top:18px;line-height:1.75;font-style:italic}

/* SLF */
.pg-slf{background:var(--blue);padding:88px 0;border-bottom:var(--b);position:relative;overflow:hidden}
.pg-slf-inner{position:relative;z-index:2}
.pg-slf-grid{display:grid;grid-template-columns:1fr 1fr;gap:64px;align-items:start}
.pg-slf-h{font-family:var(--font-head);font-size:clamp(32px,5vw,56px);font-weight:900;text-transform:uppercase;font-style:italic;line-height:1;margin-bottom:12px}
.pg-slf-h-accent{color:var(--red)}
.pg-slf-label{font-family:var(--font-ui);font-size:10px;font-weight:700;text-transform:uppercase;letter-spacing:.18em;color:rgba(29,38,49,.5);margin-bottom:20px}
.pg-slf-text{font-size:16px;font-weight:500;line-height:1.8;color:rgba(29,38,49,.75);margin-bottom:28px}
.pg-slf-stats{display:grid;grid-template-columns:1fr 1fr;gap:16px;margin-bottom:32px}
.pg-slf-stat-card{background:rgba(255,255,255,.4);padding:20px;border:var(--b-thin);border-radius:var(--radius-sm)}
.pg-slf-stat-card--alt{background:var(--yellow);padding:20px;border:var(--b);border-radius:var(--radius-sm)}
.pg-slf-stat-label{font-family:var(--font-ui);font-size:10px;font-weight:700;text-transform:uppercase;letter-spacing:.12em;margin-bottom:12px}
.pg-slf-stat-list{font-size:12px;font-weight:600;opacity:.7;line-height:2;list-style:none;padding:0;margin:0}
.pg-slf-stat-num{font-family:var(--font-head);font-size:42px;font-weight:900;font-style:italic;color:var(--navy);margin:0}
.pg-slf-stat-desc{font-family:var(--font-ui);font-size:9px;font-weight:700;text-transform:uppercase;letter-spacing:.1em;opacity:.7;margin:0}
.pg-slf-btns{display:flex;gap:12px;flex-wrap:wrap}
.pg-slf-img{width:100%;border:var(--b);border-radius:var(--radius);box-shadow:var(--shadow)}

/* YAP */
.pg-yap{background:var(--teal);padding:88px 0;border-bottom:var(--b);position:relative;overflow:hidden}
.pg-yap-inner{position:relative;z-index:2}
.pg-yap-grid{display:grid;grid-template-columns:1fr 1fr;gap:64px;align-items:center}
.pg-yap-img{width:100%;border:var(--b);border-radius:var(--radius);box-shadow:var(--shadow)}
.pg-yap-h{font-family:var(--font-head);font-size:clamp(32px,5vw,56px);font-weight:900;text-transform:uppercase;font-style:italic;line-height:1;margin-bottom:12px}
.pg-yap-h-accent{color:var(--navy)}
.pg-yap-label{font-family:var(--font-ui);font-size:10px;font-weight:700;text-transform:uppercase;letter-spacing:.18em;color:rgba(29,38,49,.5);margin-bottom:20px}
.pg-yap-text{font-size:16px;font-weight:500;line-height:1.8;color:rgba(29,38,49,.75);margin-bottom:28px}
.pg-yap-metrics{display:flex;flex-direction:column;gap:12px;margin-bottom:32px}
.pg-yap-metric{background:rgba(255,255,255,.3);padding:16px 20px;border:var(--b-thin);border-radius:var(--radius-sm);display:flex;gap:16px;align-items:center}
.pg-yap-metric-num{font-family:var(--font-head);font-size:36px;font-weight:900;color:var(--navy)}
.pg-yap-metric-desc{font-size:14px;font-weight:600;color:rgba(29,38,49,.7)}
.pg-yap-btns{display:flex;gap:12px;flex-wrap:wrap}

/* YoSkills */
.pg-yoskills{background:var(--yellow);padding:88px 0;border-bottom:var(--b)}
.pg-yoskills-header{text-align:center;margin-bottom:48px}
.pg-yoskills-h{font-family:var(--font-head);font-size:clamp(36px,6vw,64px);font-weight:900;text-transform:uppercase;font-style:italic;line-height:1;margin-bottom:12px}
.pg-yoskills-h-accent{color:var(--red)}
.pg-yoskills-label{font-family:var(--font-ui);font-size:11px;font-weight:700;text-transform:uppercase;letter-spacing:.18em;color:rgba(29,38,49,.5)}
.pg-yoskills-intro{text-align:center;max-width:640px;margin:0 auto 48px;font-size:18px;font-weight:600;line-height:1.7;color:rgba(29,38,49,.7)}
.pg-yoskills-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:24px;margin-bottom:48px}
.pg-yoskills-card{background:#fff;padding:32px;border:var(--b);border-radius:var(--radius);box-shadow:var(--shadow-sm)}
.pg-yoskills-card-icon{width:56px;height:56px;border-radius:12px;display:flex;align-items:center;justify-content:center;margin-bottom:20px}
.pg-yoskills-card-icon--red{background:var(--red)}
.pg-yoskills-card-icon--teal{background:var(--teal)}
.pg-yoskills-card-icon--gold{background:var(--gold)}
.pg-yoskills-card-h{font-family:var(--font-head);font-size:14px;font-weight:800;text-transform:uppercase;margin-bottom:12px}
.pg-yoskills-card-text{font-size:13px;font-weight:500;opacity:.7;line-height:1.6}
.pg-yoskills-cta{text-align:center}

/* Essentials */
.pg-ess{padding:88px 0;border-bottom:var(--b)}
.pg-ess-grid{display:grid;grid-template-columns:1fr 1fr;gap:64px;align-items:center}
.pg-ess-h{font-family:var(--font-head);font-size:clamp(32px,5vw,56px);font-weight:900;text-transform:uppercase;font-style:italic;line-height:1;margin-bottom:12px}
.pg-ess-h-accent{color:var(--gold)}
.pg-ess-label{font-family:var(--font-ui);font-size:10px;font-weight:700;text-transform:uppercase;letter-spacing:.18em;color:rgba(29,38,49,.5);margin-bottom:20px}
.pg-ess-text{font-size:16px;font-weight:500;line-height:1.8;color:rgba(29,38,49,.75);margin-bottom:24px}
.pg-ess-products{background:var(--cream);padding:24px;border:var(--b);border-radius:var(--radius);margin-bottom:24px}
.pg-ess-products-h{font-family:var(--font-ui);font-size:10px;font-weight:700;text-transform:uppercase;letter-spacing:.12em;color:var(--red);margin-bottom:16px}
.pg-ess-products-list{display:grid;grid-template-columns:1fr 1fr;gap:8px;font-family:var(--font-ui);font-size:11px;font-weight:700;text-transform:uppercase;letter-spacing:.08em;opacity:.7}
.pg-ess-imgs{display:grid;grid-template-columns:1fr 1fr;gap:16px}
.pg-ess-img{width:100%;aspect-ratio:1;border:var(--b);border-radius:var(--radius);box-shadow:var(--shadow-sm);object-fit:cover}
.pg-ess-img--offset{margin-top:32px}

/* Talents */
.pg-talents{background:var(--navy);padding:88px 0;border-bottom:var(--b);position:relative;overflow:hidden}
.pg-talents-inner{position:relative;z-index:2}
.pg-talents-header{text-align:center;margin-bottom:56px}
.pg-talents-h{font-family:var(--font-head);font-size:clamp(36px,6vw,72px);font-weight:900;text-transform:uppercase;font-style:italic;line-height:1;color:#fff}
.pg-talents-h-accent{color:var(--yellow)}
.pg-talents-sketch{font-family:var(--font-sketch);font-size:28px;color:var(--yellow);margin-top:12px}
.pg-talents-grid{display:grid;grid-template-columns:1fr 1fr;gap:24px}
.pg-talents-card{background:rgba(255,255,255,.05);border:2px solid rgba(255,255,255,.2);padding:32px;border-radius:var(--radius)}
.pg-talents-card-icon{width:64px;height:64px;border-radius:16px;display:flex;align-items:center;justify-content:center;margin-bottom:24px}
.pg-talents-card-icon--red{background:var(--red)}
.pg-talents-card-icon--teal{background:var(--teal)}
.pg-talents-card-h{font-family:var(--font-head);font-size:24px;font-weight:900;text-transform:uppercase;font-style:italic;color:#fff;margin-bottom:16px}
.pg-talents-card-text{font-size:14px;font-weight:500;line-height:1.7;color:rgba(255,255,255,.6);margin-bottom:24px}

/* Initiatives */
.pg-initiatives{padding:88px 0}
.pg-initiatives-header{text-align:center;margin-bottom:48px}
.pg-initiatives-h{font-family:var(--font-head);font-size:clamp(32px,5vw,52px);font-weight:900;text-transform:uppercase;font-style:italic;line-height:1;margin-bottom:12px}
.pg-initiatives-h-accent{color:var(--red)}
.pg-initiatives-sub{font-size:16px;font-weight:500;opacity:.6}
.pg-initiatives-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:32px}
.pg-initiative-img-wrap{aspect-ratio:4/3;background:var(--navy);border:var(--b);border-radius:var(--radius);overflow:hidden;margin-bottom:20px}
.pg-initiative-img{width:100%;height:100%;object-fit:cover}
.pg-initiative-h{font-family:var(--font-head);font-size:18px;font-weight:800;text-transform:uppercase;font-style:italic;margin-bottom:8px}
.pg-initiative-h--red{color:var(--red)}
.pg-initiative-h--teal{color:var(--teal)}
.pg-initiative-h--blue{color:var(--blue)}
.pg-initiative-text{font-size:13px;font-weight:500;line-height:1.6;opacity:.7}
.pg-initiatives-cta{text-align:center;margin-top:48px}

/* Why It Matters */
.pg-why{background:var(--yellow);padding:88px 0;border-top:var(--b)}
.pg-why-inner{text-align:center}
.pg-why-h{font-family:var(--font-head);font-size:clamp(32px,5vw,52px);font-weight:900;text-transform:uppercase;font-style:italic;line-height:1;margin-bottom:16px}
.pg-why-h-accent{color:var(--red)}
.pg-why-intro{font-size:18px;font-weight:600;line-height:1.7;max-width:560px;margin:0 auto 40px;opacity:.75}
.pg-why-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:16px;max-width:700px;margin:0 auto}
.pg-why-item{padding:20px;border:2px solid rgba(29,38,49,.2);border-radius:var(--radius-sm)}
.pg-why-item-label{font-family:var(--font-ui);font-size:10px;font-weight:700;text-transform:uppercase;letter-spacing:.1em;opacity:.6}
.pg-why-item-text{font-family:var(--font-head);font-size:14px;font-weight:800}

/* CTA */
.pg-cta{background:var(--navy);padding:120px 0;position:relative;overflow:hidden}
.pg-cta-inner{position:relative;z-index:2;text-align:center}
.pg-cta-h{font-family:var(--font-head);font-size:clamp(36px,7vw,80px);font-weight:900;text-transform:uppercase;font-style:italic;line-height:1;color:#fff;margin-bottom:20px}
.pg-cta-h-accent{color:var(--red)}
.pg-cta-text{font-size:18px;font-weight:500;color:rgba(255,255,255,.7);max-width:480px;margin:0 auto 36px}
.pg-cta-btns{display:flex;gap:16px;justify-content:center;flex-wrap:wrap}

/* ── Responsive ────────────────────────────────────────────────── */
@media(max-width:900px){
  .pg-slf-grid,
  .pg-yap-grid,
  .pg-ess-grid,
  .pg-talents-grid{grid-template-columns:1fr;gap:40px}
  .pg-slf-grid .pg-slf-img-wrap,
  .pg-yap-grid .pg-yap-img-wrap{order:-1}
  .pg-yoskills-grid,
  .pg-initiatives-grid{grid-template-columns:1fr 1fr;gap:20px}
  .pg-why-grid{grid-template-columns:1fr;gap:12px}
}
@media(max-width:600px){
  .pg-yoskills-grid,
  .pg-initiatives-grid{grid-template-columns:1fr}
  .pg-slf-stats{grid-template-columns:1fr}
  .pg-ess-imgs{grid-template-columns:1fr 1fr}
  .pg-ess-img--offset{margin-top:0}
  .pg-hero-h{font-size:clamp(36px,12vw,64px)}
  .pg-cta{padding:80px 0}
}
</style>

<main>
    <!-- HERO -->
    <section id="programs-hero" class="pg-hero">
        <div class="halftone pg-hero-halftone"></div>
        <div class="pg-hero-glow"></div>
        <div class="container pg-hero-inner">
            <span class="eyebrow ew-teal pg-hero-eyebrow">Our Work</span>
            <h1 class="pg-hero-h">
                Activate <em>The Future</em>
            </h1>
            <p class="pg-hero-sub">
                Youth-Led. Community-Built. <span class="pg-hero-accent">Action-Driven.</span>
            </p>
            <p class="pg-hero-desc">
                At Omuto Foundation, we don't just talk about change — we activate it. Every program is designed, led, and executed by young people.
            </p>
        </div>
    </section>

    <!-- SLF -->
    <section class="pg-slf">
        <div class="halftone halftone-light"></div>
        <div class="container pg-slf-inner">
            <div class="pg-slf-grid">
                <div>
                    <span class="eyebrow ew-navy">Pathway 01</span>
                    <h2 class="pg-slf-h">
                        School <span class="pg-slf-h-accent">Xperience</span>
                    </h2>
                    <p class="pg-slf-label">Schools as leadership labs</p>
                    <p class="pg-slf-text">
                        SLF trains youth to lead with competence, confidence, and action-oriented skills. Youth identify challenges, design solutions, and implement projects in their schools.
                    </p>
                    <div class="pg-slf-stats">
                        <div class="pg-slf-stat-card">
                            <h4 class="pg-slf-stat-label">Key Activities</h4>
                            <ul class="pg-slf-stat-list">
                                <li>— Leadership Training</li>
                                <li>— Peer Mentoring</li>
                                <li>— Interschool Debates</li>
                                <li>— RED Campaign</li>
                                <li>— GreenSchools</li>
                            </ul>
                        </div>
                        <div class="pg-slf-stat-card--alt">
                            <p class="pg-slf-stat-num">10k+</p>
                            <p class="pg-slf-stat-desc">Youth trained in leadership</p>
                        </div>
                    </div>
                    <div class="pg-slf-btns">
                        <a href="contact.php" class="btn btn-navy btn-sm">Schools: Register</a>
                        <a href="campaign.php" class="btn btn-red btn-sm">Support Youth</a>
                    </div>
                </div>
                <div class="pg-slf-img-wrap">
                    <img src="https://scontent.ftlv19-2.fna.fbcdn.net/v/t39.30808-6/476896815_671279225221843_1032820912016263947_n.jpg?stp=c342.0.1365.1365a_dst-jpg_s552x414_tt6&_nc_cat=109&ccb=1-7&_nc_sid=a934a8&_nc_ohc=OmZtODDPfaYQ7kNvwFohJw3&_nc_oc=Admoz2KNxIdWk84H-Zk1zSpJYh2J4DaBmxLMvsvRtMJY6gt7qrOaZxG-0JblcyWdO1hUTDWa2OxFyeUMuETW3X7U&_nc_zt=23&_nc_ht=scontent.ftlv19-2.fna&_nc_gid=6ldJHiobwjspU4JW7sg2Cg&_nc_ss=8&oh=00_Afwv36OPchLjs3u0Odp2RuSuno36IMA8BveuDJetA8_MxA&oe=69B0C681" 
                         alt="Student Leaders in action" class="pg-slf-img" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    <!-- YAP -->
    <section class="pg-yap">
        <div class="halftone halftone-light"></div>
        <div class="container pg-yap-inner">
            <div class="pg-yap-grid">
                <div class="pg-yap-img-wrap">
                    <img src="https://scontent.ftlv19-2.fna.fbcdn.net/v/t39.30808-6/477940217_671916558491443_7957135059882538200_n.jpg?stp=c342.0.1365.1365a_dst-jpg_s552x414_tt6&_nc_cat=111&ccb=1-7&_nc_sid=a934a8&_nc_ohc=wSDH5J_SOb4Q7kNvwFCEAUK&_nc_oc=AdmzmRG34iH4b-cJlh7aWw3xej4AiV0dKA-DtyAsgLGhpp1kO3_2cjKrJg22T0p2wuzklWnLJRLpz_ZWCAQMAd-d&_nc_zt=23&_nc_ht=scontent.ftlv19-2.fna&_nc_gid=RiBdIZtRux0NN770X89YRg&_nc_ss=8&oh=00_Afy6tYCg54AA1eI6BpmGLpYzPZ5XedGLu4vs78IPIEscNw&oe=69B0EB65" 
                         alt="YAP Chapter Leaders" class="pg-yap-img" loading="lazy">
                </div>
                <div>
                    <span class="eyebrow ew-navy">Pathway 02</span>
                    <h2 class="pg-yap-h">
                        YAP <span class="pg-yap-h-accent">Chapters</span>
                    </h2>
                    <p class="pg-yap-label">From skills to community impact</p>
                    <p class="pg-yap-text">
                        YAP guides youth from learning practical skills to creating measurable community impact. Our chapters function as organized cells of change.
                    </p>
                    <div class="pg-yap-metrics">
                        <div class="pg-yap-metric">
                            <span class="pg-yap-metric-num">10</span>
                            <span class="pg-yap-metric-desc">Active chapters with 5-member core teams in Buwama</span>
                        </div>
                        <div class="pg-yap-metric">
                            <span class="pg-yap-metric-num">47</span>
                            <span class="pg-yap-metric-desc">Youth-led community projects across the region</span>
                        </div>
                    </div>
                    <div class="pg-yap-btns">
                        <a href="yap.php" class="btn btn-navy btn-sm">Learn More</a>
                        <a href="contact.php" class="btn btn-white btn-sm">Partner</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- YOSKILLS -->
    <section class="pg-yoskills">
        <div class="container">
            <div class="pg-yoskills-header">
                <span class="eyebrow ew-red">Pathway 03</span>
                <h2 class="pg-yoskills-h">
                    YoSkills <span class="pg-yoskills-h-accent">Circles</span>
                </h2>
                <p class="pg-yoskills-label">Turning skills into livelihoods</p>
            </div>
            <p class="pg-yoskills-intro">
                Equipping young people with practical business and technical skills for employment and entrepreneurship through intense weekend cohorts.
            </p>
            <div class="pg-yoskills-grid">
                <div class="pg-yoskills-card">
                    <div class="pg-yoskills-card-icon pg-yoskills-card-icon--red">
                        <svg width="24" height="24" fill="#fff" viewBox="0 0 24 24"><path d="M21.3 8.7l-8.6 8.6-4-4-1.4 1.4 5.4 5.4 10-10-1.4-1.4z"/></svg>
                    </div>
                    <h4 class="pg-yoskills-card-h">Vocational Base</h4>
                    <p class="pg-yoskills-card-text">Tailoring, hairdressing, and basic tech modules designed for the local market.</p>
                </div>
                <div class="pg-yoskills-card">
                    <div class="pg-yoskills-card-icon pg-yoskills-card-icon--teal">
                        <svg width="24" height="24" fill="#fff" viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7z"/></svg>
                    </div>
                    <h4 class="pg-yoskills-card-h">Centers</h4>
                    <p class="pg-yoskills-card-text">Weekend short courses at Omuto Youth Center (Mpigi) and our office in Kampala.</p>
                </div>
                <div class="pg-yoskills-card">
                    <div class="pg-yoskills-card-icon pg-yoskills-card-icon--gold">
                        <svg width="24" height="24" fill="#fff" viewBox="0 0 24 24"><path d="M12 3L1 9l11 6 9-4.91V17h2V9L12 3z"/></svg>
                    </div>
                    <h4 class="pg-yoskills-card-h">Milestones</h4>
                    <p class="pg-yoskills-card-text">25 graduates from the first cohort now building sustainable small businesses.</p>
                </div>
            </div>
            <div class="pg-yoskills-cta">
                <a href="contact.php" class="btn btn-navy">Join YoSkills</a>
            </div>
        </div>
    </section>

    <!-- ESSENTIALS -->
    <section class="pg-ess">
        <div class="container">
            <div class="pg-ess-grid">
                <div>
                    <span class="eyebrow ew-yellow">Pathway 04</span>
                    <h2 class="pg-ess-h">
                        Omuto <span class="pg-ess-h-accent">Essentials</span>
                    </h2>
                    <p class="pg-ess-label">Youth-led businesses that give back</p>
                    <p class="pg-ess-text">
                        Our social enterprise arm, producing youth-led products that generate revenue for programs. 100% of revenue is reinvested into the movement.
                    </p>
                    <div class="pg-ess-products">
                        <h4 class="pg-ess-products-h">Current Products</h4>
                        <div class="pg-ess-products-list">
                            <span>✓ Reusable Pads</span>
                            <span>✓ Skin Jelly</span>
                            <span>✓ Body Soap</span>
                            <span>✓ Liquid Soap</span>
                            <span>✓ Candles</span>
                            <span>✓ Ginger Powder</span>
                        </div>
                    </div>
                    <a href="essentials.php" class="btn btn-navy">Shop Products</a>
                </div>
                <div class="pg-ess-imgs">
                    <img src="https://i.ibb.co/JvmxZ3Qk/IMG-20240625-WA0001.jpg" 
                         alt="Product production" class="pg-ess-img" loading="lazy">
                    <img src="https://i.ibb.co/kBnhM8q/soap-prod-1.jpg" 
                         alt="Product packaging" class="pg-ess-img pg-ess-img--offset" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    <!-- TALENTS -->
    <section class="pg-talents">
        <div class="halftone halftone-light pg-talents-halftone"></div>
        <div class="container pg-talents-inner">
            <div class="pg-talents-header">
                <span class="eyebrow ew-red">Pathway 05</span>
                <h2 class="pg-talents-h">
                    Omuto <span class="pg-talents-h-accent">Talents</span>
                </h2>
                <p class="pg-talents-sketch">Voice and creativity in action.</p>
            </div>
            <div class="pg-talents-grid">
                <div class="pg-talents-card">
                    <div class="pg-talents-card-icon pg-talents-card-icon--red">
                        <svg width="28" height="28" fill="#fff" viewBox="0 0 24 24"><path d="M12 3v10.55c-.59-.34-1.27-.55-2-.55-2.21 0-4 1.79-4 4s1.79 4 4 4 4-1.79 4-4V7h4V3h-6z"/></svg>
                    </div>
                    <h3 class="pg-talents-card-h">Omuto Pulse</h3>
                    <p class="pg-talents-card-text">
                        Our youth-led media platform amplifying stories, campaigns, and advocacy. We train youth in journalism, content creation, and storytelling to own their narrative.
                    </p>
                    <a href="https://www.youtube.com/@omutopulse" target="_blank" rel="noopener" class="btn btn-outline-white btn-sm">Watch on YouTube →</a>
                </div>
                <div class="pg-talents-card">
                    <div class="pg-talents-card-icon pg-talents-card-icon--teal">
                        <svg width="28" height="28" fill="#fff" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                    </div>
                    <h3 class="pg-talents-card-h">Football Alliance</h3>
                    <p class="pg-talents-card-text">
                        Building teamwork, discipline, and leadership through sports. We host regional tournaments including the prestigious Omuto Cup to engage the community.
                    </p>
                    <a href="ofa.php" class="btn btn-outline-white btn-sm">Learn More →</a>
                </div>
            </div>
        </div>
    </section>

    <!-- INITIATIVES -->
    <section class="pg-initiatives">
        <div class="container">
            <div class="pg-initiatives-header">
                <h2 class="pg-initiatives-h">
                    Our <span class="pg-initiatives-h-accent">Initiatives</span>
                </h2>
                <p class="pg-initiatives-sub">Focused campaigns for immediate regional change.</p>
            </div>
            <div class="pg-initiatives-grid">
                <div class="pg-initiative">
                    <div class="pg-initiative-img-wrap">
                        <img src="https://scontent.ftlv19-2.fna.fbcdn.net/v/t39.30808-6/476896815_671279225221843_1032820912016263947_n.jpg?stp=c342.0.1365.1365a_dst-jpg_s552x414_tt6&_nc_cat=109&ccb=1-7&_nc_sid=a934a8&_nc_ohc=OmZtODDPfaYQ7kNvwFohJw3&_nc_oc=Admoz2KNxIdWk84H-Zk1zSpJYh2J4DaBmxLMvsvRtMJY6gt7qrOaZxG-0JblcyWdO1hUTDWa2OxFyeUMuETW3X7U&_nc_zt=23&_nc_ht=scontent.ftlv19-2.fna&_nc_gid=6ldJHiobwjspU4JW7sg2Cg&_nc_ss=8&oh=00_Afwv36OPchLjs3u0Odp2RuSuno36IMA8BveuDJetA8_MxA&oe=69B0C681" 
                             alt="RED Campaign" class="pg-initiative-img" loading="lazy">
                    </div>
                    <h4 class="pg-initiative-h pg-initiative-h--red">RED Campaign</h4>
                    <p class="pg-initiative-text">Educating girls about menstrual hygiene, distributing reusable pads, and advocating for dignity in schools.</p>
                </div>
                <div class="pg-initiative">
                    <div class="pg-initiative-img-wrap">
                        <img src="https://scontent.ftlv19-2.fna.fbcdn.net/v/t39.30808-6/477940217_671916558491443_7957135059882538200_n.jpg?stp=c342.0.1365.1365a_dst-jpg_s552x414_tt6&_nc_cat=111&ccb=1-7&_nc_sid=a934a8&_nc_ohc=wSDH5J_SOb4Q7kNvwFCEAUK&_nc_oc=AdmzmRG34iH4b-cJlh7aWw3xej4AiV0dKA-DtyAsgLGhpp1kO3_2cjKrJg22T0p2wuzklWnLJRLpz_ZWCAQMAd-d&_nc_zt=23&_nc_ht=scontent.ftlv19-2.fna&_nc_gid=RiBdIZtRux0NN770X89YRg&_nc_ss=8&oh=00_Afy6tYCg54AA1eI6BpmGLpYzPZ5XedGLu4vs78IPIEscNw&oe=69B0EB65" 
                             alt="GreenSchools" class="pg-initiative-img" loading="lazy">
                    </div>
                    <h4 class="pg-initiative-h pg-initiative-h--teal">GreenSchools</h4>
                    <p class="pg-initiative-text">Training youth to protect the environment through local action and regional tree planting initiatives.</p>
                </div>
                <div class="pg-initiative">
                    <div class="pg-initiative-img-wrap">
                        <img src="https://scontent.ftlv19-1.fna.fbcdn.net/v/t39.30808-6/480027248_671916561824776_701939243737967098_n.jpg?stp=c342.0.1365.1365a_dst-jpg_s552x414_tt6&_nc_cat=100&ccb=1-7&_nc_sid=a934a8&_nc_ohc=gyXusTBlWkEQ7kNvwHY33YV&_nc_oc=Adk33tCx04_lA6q1GXFIjnsO7ul-7GfusBHOvO_66KlARVBS_aHhqin2kBHhXIi4rqm85o_P9toRRJ9-t8_EC9tH&_nc_zt=23&_nc_ht=scontent.ftlv19-1.fna&_nc_gid=ckDtdeBTwbb6QkgZ-QfLHA&_nc_ss=8&oh=00_AfwdLNarqH8dOnYEtvk3qfXOyKjC3K_8nj5tRBsAKC8OZQ&oe=69B0CBCC" 
                             alt="PureWater" class="pg-initiative-img" loading="lazy">
                    </div>
                    <h4 class="pg-initiative-h pg-initiative-h--blue">PureWater</h4>
                    <p class="pg-initiative-text">Promoting access to safe drinking water through youth-led hygiene campaigns and purifier governance.</p>
                </div>
            </div>
            <div class="pg-initiatives-cta">
                <a href="campaign.php" class="btn btn-red">Support Youth</a>
            </div>
        </div>
    </section>

    <!-- WHY IT MATTERS -->
    <section class="pg-why">
        <div class="container pg-why-inner">
            <h2 class="pg-why-h">
                Why Our Work <span class="pg-why-h-accent">Matters</span>
            </h2>
            <p class="pg-why-intro">
                Every program is youth-led, evidence-driven, and locally-rooted. Omuto ensures that youth are <strong>not just participants</strong> — they are owners of the change.
            </p>
            <div class="pg-why-grid">
                <div class="pg-why-item">
                    <p class="pg-why-item-label">Skills</p>
                    <p class="pg-why-item-text">Applied to real problems</p>
                </div>
                <div class="pg-why-item">
                    <p class="pg-why-item-label">Impact</p>
                    <p class="pg-why-item-text">Communities strengthened</p>
                </div>
                <div class="pg-why-item">
                    <p class="pg-why-item-label">Future</p>
                    <p class="pg-why-item-text">Systems improve inside-out</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="pg-cta">
        <div class="halftone halftone-light pg-cta-halftone"></div>
        <div class="container pg-cta-inner">
            <h2 class="pg-cta-h">
                The Action <span class="pg-cta-h-accent">Starts Now</span>
            </h2>
            <p class="pg-cta-text">
                Ready to build youth agency in your community? Ready to invest in real action?
            </p>
            <div class="pg-cta-btns">
                <a href="contact.php" class="btn btn-red">Join a Program</a>
                <a href="contact.php" class="btn btn-white">Volunteer</a>
                <a href="campaign.php" class="btn btn-outline-white">Support Youth</a>
            </div>
        </div>
    </section>
</main>

<?php include 'footer.php'; ?>
