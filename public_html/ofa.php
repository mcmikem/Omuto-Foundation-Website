<?php
$page_title      = "Omuto Football Alliance | OFA";
$page_desc       = "Omuto Football Alliance — a youth-led sports platform in rural Uganda that builds leaders through football.";
$page_canonical  = "https://omuto.org/ofa";
$page_active_nav = "work";
$footer_show_sticky = false;

$page_extra_css = '<style>
.ofa-hero{min-height:70svh;background:var(--navy);display:flex;align-items:flex-end;position:relative;overflow:hidden;border-bottom:var(--b)}
.ofa-hero-glow{position:absolute;top:-100px;right:-100px;width:600px;height:600px;border-radius:50%;background:radial-gradient(circle,rgba(64,210,175,.15),transparent 70%)}
.ofa-hero-inner{padding:60px 0;position:relative;z-index:2}
.ofa-hero h1{font-family:var(--font-head);font-size:clamp(42px,9vw,110px);font-weight:900;line-height:.9;letter-spacing:-.04em;text-transform:uppercase;color:#fff;margin-bottom:12px}
.ofa-hero h1 em{font-style:italic;color:var(--teal)}
.ofa-hero p{font-size:16px;font-weight:500;color:rgba(255,255,255,.65);max-width:480px;line-height:1.7}
.ofa-hero-stats{display:flex;gap:24px;margin-top:32px;padding-top:24px;border-top:1px solid rgba(255,255,255,.1)}
.ofa-stat{display:flex;flex-direction:column}
.ofa-stat-n{font-family:var(--font-head);font-size:28px;font-weight:900;color:var(--teal)}
.ofa-stat-l{font-family:var(--font-ui);font-size:9px;font-weight:700;text-transform:uppercase;letter-spacing:.12em;color:rgba(255,255,255,.4)}
#about{background:var(--cream);padding:88px 0}
.about-grid{display:grid;grid-template-columns:1fr 1fr;gap:64px;align-items:center}
.about-content h2{font-family:var(--font-head);font-size:clamp(32px,5vw,56px);font-weight:900;text-transform:uppercase;font-style:italic;margin-bottom:20px}
.about-content p{font-size:15px;font-weight:500;line-height:1.8;color:rgba(29,38,49,.7);margin-bottom:16px}
.about-img{aspect-ratio:4/3;border:var(--b);border-radius:var(--radius);overflow:hidden;box-shadow:var(--shadow-lg)}
.about-img img{width:100%;height:100%;object-fit:cover}
@media(max-width:900px){.about-grid{grid-template-columns:1fr}.ofa-hero-stats{flex-wrap:wrap;gap:16px}}
#teams{background:var(--teal);padding:88px 0;border-bottom:var(--b)}
.teams-grid{display:grid;grid-template-columns:repeat(4,1fr);gap:16px;margin-top:48px}
.team-card{background:#fff;border:var(--b);border-radius:var(--radius);padding:20px;text-align:center;transition:transform .2s}
.team-card:hover{transform:translateY(-4px)}
.team-card-n{font-family:var(--font-head);font-size:36px;font-weight:900;color:var(--navy)}
.team-card-name{font-family:var(--font-head);font-size:14px;font-weight:800;text-transform:uppercase;margin:8px 0 4px}
.team-card-role{font-family:var(--font-ui);font-size:10px;font-weight:700;text-transform:uppercase;letter-spacing:.1em;opacity:.5}
@media(max-width:900px){.teams-grid{grid-template-columns:repeat(2,1fr)}}
#cta{background:var(--navy);padding:88px 0}
.cta-ofa{text-align:center;max-width:560px;margin:0 auto}
.cta-ofa h2{font-family:var(--font-head);font-size:clamp(32px,5vw,52px);font-weight:900;text-transform:uppercase;font-style:italic;color:#fff;margin-bottom:16px}
.cta-ofa h2 em{color:var(--teal)}
.cta-ofa p{font-size:15px;font-weight:500;color:rgba(255,255,255,.6);margin-bottom:28px}
@media(max-width:600px){.teams-grid{grid-template-columns:1fr}}
</style>';
?>
<?php include 'header.php'; ?>

<main>
  <!-- HERO -->
  <section class="ofa-hero">
    <div class="ofa-hero-glow"></div>
    <div class="container ofa-hero-inner">
      <span class="eyebrow ew-teal">Omuto Talents</span>
      <h1>Football<br/><em>Alliance</em></h1>
      <p>In rural Uganda, football is identity. OFA organizes teams, mentors captains, and builds leaders. This is football with structure. Football with a future.</p>
      <div class="ofa-hero-stats">
        <div class="ofa-stat"><span class="ofa-stat-n">11</span><span class="ofa-stat-l">Teams</span></div>
        <div class="ofa-stat"><span class="ofa-stat-n">280+</span><span class="ofa-stat-l">Players</span></div>
        <div class="ofa-stat"><span class="ofa-stat-n">22</span><span class="ofa-stat-l">Captains Trained</span></div>
      </div>
    </div>
  </section>

  <!-- ABOUT -->
  <section id="about">
    <div class="container">
      <div class="about-grid">
        <div class="about-content">
          <h2>More Than <em class="line-red">a Game</em></h2>
          <p>The Omuto Football Alliance (OFA) uses football as a vehicle for youth leadership development. Every team has a captain trained in public speaking. Every match includes a safeguarding officer. Every player is part of a youth-led organization.</p>
          <p>We don't just play football — we build leaders through sport. The OFA is a leadership lab on the pitch.</p>
          <div style="margin-top:24px;display:flex;gap:12px">
            <a href="contact.php" class="btn btn-red">Join a Team</a>
            <a href="campaign.php" class="btn btn-navy">Sponsor a Team</a>
          </div>
        </div>
        <div class="about-img"><img src="https://i.ibb.co/mVPm5DzK/18.png" alt="OFA Teams" loading="lazy"/></div>
      </div>
    </div>
  </section>

  <!-- TEAMS -->
  <section id="teams">
    <div class="container">
      <div style="text-align:center"><span class="eyebrow ew-navy">The League</span><h2 class="t-section" style="color:#fff">Our <em class="line-yellow">Teams</em></h2></div>
      <div class="teams-grid">
        <div class="team-card"><div class="team-card-n">01</div><div class="team-card-name">Mpigi FC</div><div class="team-card-role">Founded 2023</div></div>
        <div class="team-card"><div class="team-card-n">02</div><div class="team-card-name">Butambala United</div><div class="team-card-role">Founded 2023</div></div>
        <div class="team-card"><div class="team-card-n">03</div><div class="team-card-name">Kammengo Kings</div><div class="team-card-role">Founded 2024</div></div>
        <div class="team-card"><div class="team-card-n">04</div><div class="team-card-name">Nabbuzi Stars</div><div class="team-card-role">Founded 2024</div></div>
        <div class="team-card"><div class="team-card-n">05</div><div class="team-card-name">Buwama Bullets</div><div class="team-card-role">Founded 2024</div></div>
        <div class="team-card"><div class="team-card-n">06</div><div class="team-card-name">Kitemba City</div><div class="team-card-role">Founded 2024</div></div>
        <div class="team-card"><div class="team-card-n">07</div><div class="team-card-name">Mokeera United</div><div class="team-card-role">Founded 2025</div></div>
        <div class="team-card"><div class="team-card-n">08</div><div class="team-card-name">Kigungu FC</div><div class="team-card-role">Founded 2025</div></div>
      </div>
    </div>
  </section>

  <!-- CAPTAINS -->
  <section style="background:var(--cream);padding:88px 0;border-bottom:var(--b)">
    <div class="container">
      <div class="about-grid">
        <div class="about-img"><img src="https://i.ibb.co/wrPnfcKG/21.png" alt="Captain training" loading="lazy"/></div>
        <div class="about-content">
          <h2>Captains Are <em class="line-teal">Leaders</em></h2>
          <p>Every OFA captain goes through our leadership training program. They learn public speaking, team management, conflict resolution, and event planning.</p>
          <p>These aren't just football captains — they're community leaders in training. Many go on to become YAP chapter leaders, school prefects, and youth mentors.</p>
          <div style="margin-top:24px;display:flex;gap:12px">
            <a href="contact.php" class="btn btn-navy">Become a Captain</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section id="cta">
    <div class="halftone halftone-light"></div>
    <div class="container">
      <div class="cta-ofa">
        <h2>Join the <em>Alliance</em></h2>
        <p>Whether you want to play, coach, sponsor, or volunteer — there's a place for you in OFA.</p>
        <div style="display:flex;gap:12px;justify-content:center;flex-wrap:wrap">
          <a href="contact.php" class="btn btn-teal">Join a Team</a>
          <a href="campaign.php" class="btn btn-white">Sponsor Teams</a>
        </div>
      </div>
    </div>
  </section>
</main>

<?php include 'footer.php'; ?>
</body>
</html>
