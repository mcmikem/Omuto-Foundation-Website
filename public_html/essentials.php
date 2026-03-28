<?php
$page_title      = "Omuto Essentials | Youth-Made Products from Mpigi, Uganda";
$page_desc       = "Dignity Reusable Pads, handmade soaps, skin jelly and body wash — made by young people at the Omuto Youth Center, Mpigi.";
$page_canonical  = "https://omuto.org/essentials";
$page_active_nav = "store";
$footer_show_sticky = false;

$page_extra_css = '<style>
.ess-hero{min-height:65svh;background:var(--teal);display:flex;align-items:flex-end;position:relative;overflow:hidden;border-bottom:var(--b)}
.ess-hero-glow{position:absolute;top:-60px;right:-60px;width:400px;height:400px;border-radius:50%;background:radial-gradient(circle,rgba(255,255,255,.2),transparent 70%)}
.ess-hero-inner{padding:60px 0;position:relative;z-index:2}
.ess-hero h1{font-family:var(--font-head);font-size:clamp(42px,8vw,96px);font-weight:900;line-height:.9;letter-spacing:-.04em;text-transform:uppercase;color:var(--navy);margin-bottom:16px}
.ess-hero h1 em{font-style:italic;color:var(--red)}
.ess-hero p{font-size:17px;font-weight:600;color:var(--navy);max-width:480px;line-height:1.7;opacity:.7}
.ess-badge{display:inline-flex;align-items:center;gap:8px;background:var(--navy);color:#fff;padding:8px 16px;border-radius:30px;font-family:var(--font-ui);font-size:10px;font-weight:700;text-transform:uppercase;letter-spacing:.12em;margin-bottom:20px}
.ess-badge svg{width:14px;height:14px;fill:#fff}
#products{background:#fff;padding:88px 0}
.product-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:32px;margin-top:48px}
.product-card{background:var(--cream);border:var(--b);border-radius:var(--radius);overflow:hidden;box-shadow:var(--shadow-sm);transition:transform .2s,box-shadow .2s}
.product-card:hover{transform:translate(-4px,-6px);box-shadow:var(--shadow)}
.product-img{aspect-ratio:1;background:var(--navy);overflow:hidden;position:relative}
.product-img img{width:100%;height:100%;object-fit:cover;transition:transform .4s}
.product-card:hover .product-img img{transform:scale(1.05)}
.product-badge{position:absolute;top:12px;left:12px;background:var(--red);color:#fff;padding:4px 10px;border-radius:4px;font-family:var(--font-ui);font-size:9px;font-weight:700;text-transform:uppercase;letter-spacing:.1em}
.product-body{padding:20px}
.product-name{font-family:var(--font-head);font-size:18px;font-weight:900;text-transform:uppercase;font-style:italic;margin-bottom:4px}
.product-desc{font-size:13px;font-weight:500;opacity:.7;line-height:1.5;margin-bottom:12px}
.product-price{font-family:var(--font-head);font-size:22px;font-weight:900;color:var(--red);margin-bottom:16px}
.product-price span{font-size:12px;font-weight:600;opacity:.5;text-decoration:line-through;margin-left:8px}
@media(max-width:900px){.product-grid{grid-template-columns:repeat(2,1fr)}}
@media(max-width:500px){.product-grid{grid-template-columns:1fr}}
#mission{background:var(--navy);padding:88px 0;border-bottom:var(--b)}
.mission-grid{display:grid;grid-template-columns:1fr 1fr;gap:64px;align-items:center}
.mission-content h2{font-family:var(--font-head);font-size:clamp(32px,5vw,56px);font-weight:900;text-transform:uppercase;font-style:italic;color:#fff;margin-bottom:20px}
.mission-content h2 em{color:var(--teal)}
.mission-content p{font-size:15px;font-weight:500;line-height:1.8;color:rgba(255,255,255,.65);margin-bottom:16px}
.mission-stats{display:flex;gap:24px;margin-top:24px}
.mission-stat{text-align:center}
.mission-stat-n{font-family:var(--font-head);font-size:42px;font-weight:900;color:var(--yellow)}
.mission-stat-l{font-family:var(--font-ui);font-size:10px;font-weight:700;text-transform:uppercase;letter-spacing:.12em;color:rgba(255,255,255,.4)}
.mission-img{aspect-ratio:4/3;border:var(--b);border-radius:var(--radius);overflow:hidden;box-shadow:var(--shadow-lg)}
.mission-img img{width:100%;height:100%;object-fit:cover}
@media(max-width:900px){.mission-grid{grid-template-columns:1fr}}
#cta{background:var(--yellow);padding:88px 0;border-top:var(--b)}
.cta-inner{text-align:center;max-width:600px;margin:0 auto}
.cta-inner h2{font-family:var(--font-head);font-size:clamp(32px,5vw,56px);font-weight:900;text-transform:uppercase;font-style:italic;margin-bottom:16px}
.cta-inner h2 em{color:var(--red)}
.cta-inner p{font-size:16px;font-weight:600;opacity:.7;margin-bottom:28px}
@media(max-width:768px){.mission-stats{flex-wrap:wrap;gap:16px}}
</style>';
?>
<?php include 'header.php'; ?>

<main>
  <!-- HERO -->
  <section class="ess-hero">
    <div class="ess-hero-glow"></div>
    <div class="container ess-hero-inner">
      <div class="ess-badge"><svg viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg> Youth-Run Social Enterprise</div>
      <h1>Omuto<br/><em>Essentials</em></h1>
      <p>Handmade by youth at our Youth Center. Every purchase funds community programmes.</p>
      <div style="margin-top:24px;display:flex;gap:12px;flex-wrap:wrap">
        <a href="#products" class="btn btn-navy">Shop Products</a>
        <a href="#mission" class="btn btn-white">Our Mission</a>
      </div>
    </div>
  </section>

  <!-- PRODUCTS -->
  <section id="products">
    <div class="container">
      <div style="text-align:center">
        <span class="eyebrow ew-teal">Shop</span>
        <h2 class="t-section">Youth-Made <em class="line-red">Products</em></h2>
        <p style="font-size:16px;font-weight:500;opacity:.6;max-width:480px;margin:12px auto 0">All products made at Omuto Youth Center. Revenue funds programmes.</p>
      </div>
      <div class="product-grid">
        <div class="product-card">
          <div class="product-img"><span class="product-badge">Bestseller</span><img src="https://i.ibb.co/JvmxZ3Qk/IMG-20240625-WA0001.jpg" alt="Dignity Reusable Pads" loading="lazy"/></div>
          <div class="product-body">
            <h3 class="product-name">Dignity Pad</h3>
            <p class="product-desc">Reusable menstrual pad — 3 layers, snap closure. Lasts 2+ years.</p>
            <div class="product-price">$8 <span>$15</span></div>
            <a href="#" class="btn btn-red btn-sm btn-full">Order via WhatsApp</a>
          </div>
        </div>
        <div class="product-card">
          <div class="product-img"><img src="https://i.ibb.co/kBnhM8q/soap-prod-1.jpg" alt="Lemongrass Soap" loading="lazy"/></div>
          <div class="product-body">
            <h3 class="product-name">Lemongrass Soap</h3>
            <p class="product-desc">Handmade with local oils. Fresh scent, gentle on skin.</p>
            <div class="product-price">$3</div>
            <a href="#" class="btn btn-red btn-sm btn-full">Order via WhatsApp</a>
          </div>
        </div>
        <div class="product-card">
          <div class="product-img"><img src="https://i.ibb.co/PZTKmhB/soap-prod-2.jpg" alt="Skin Jelly" loading="lazy"/></div>
          <div class="product-body">
            <h3 class="product-name">Skin Jelly</h3>
            <p class="product-desc">Moisturizing jelly with shea butter. Great for dry skin.</p>
            <div class="product-price">$4</div>
            <a href="#" class="btn btn-red btn-sm btn-full">Order via WhatsApp</a>
          </div>
        </div>
        <div class="product-card">
          <div class="product-img"><img src="https://i.ibb.co/QJNwLxq/soap-prod-3.jpg" alt="Body Wash" loading="lazy"/></div>
          <div class="product-body">
            <h3 class="product-name">Body Wash</h3>
            <p class="product-desc">Liquid body wash with aloevera. Gentle and refreshing.</p>
            <div class="product-price">$5</div>
            <a href="#" class="btn btn-red btn-sm btn-full">Order via WhatsApp</a>
          </div>
        </div>
        <div class="product-card">
          <div class="product-img"><span class="product-badge">New</span><img src="https://i.ibb.co/RYMvXxK/soap-prod-4.jpg" alt="Laundry Soap" loading="lazy"/></div>
          <div class="product-body">
            <h3 class="product-name">Laundry Soap</h3>
            <p class="product-desc">Hard soap for clothes. Effective and economical.</p>
            <div class="product-price">$2</div>
            <a href="#" class="btn btn-red btn-sm btn-full">Order via WhatsApp</a>
          </div>
        </div>
        <div class="product-card">
          <div class="product-img"><img src="https://i.ibb.co/SRFm3hX/soap-prod-5.jpg" alt="Candles" loading="lazy"/></div>
          <div class="product-body">
            <h3 class="product-name">Scented Candles</h3>
            <p class="product-desc">Hand-poured candles. Lavender and vanilla scents.</p>
            <div class="product-price">$6</div>
            <a href="#" class="btn btn-red btn-sm btn-full">Order via WhatsApp</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- MISSION -->
  <section id="mission">
    <div class="halftone halftone-light"></div>
    <div class="container">
      <div class="mission-grid">
        <div class="mission-content">
          <h2>Enterprise <em>With Purpose</em></h2>
          <p>Omuto Essentials is our youth-run social enterprise. Young people produce real products, learn real business skills, and generate real revenue — all of which funds our community programmes.</p>
          <p>When you buy, you're not just getting a quality product. You're investing in the next generation of Ugandan entrepreneurs.</p>
          <div class="mission-stats">
            <div class="mission-stat"><div class="mission-stat-n">100%</div><div class="mission-stat-l">Revenue Reinvested</div></div>
            <div class="mission-stat"><div class="mission-stat-n">12</div><div class="mission-stat-l">Youth Employed</div></div>
            <div class="mission-stat"><div class="mission-stat-n">$2K+</div><div class="mission-stat-l">Monthly Revenue</div></div>
          </div>
        </div>
        <div class="mission-img"><img src="https://i.ibb.co/wZ9cf7Ny/31.png" alt="Youth at work" loading="lazy"/></div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section id="cta">
    <div class="container">
      <div class="cta-inner">
        <h2>Ready to <em>Support</em>?</h2>
        <p>Order via WhatsApp — we'll arrange delivery or pickup.</p>
        <a href="https://wa.me/256750028703?text=Hi%20Omuto,%20I%27d%20like%20to%20order%20products" class="btn btn-navy" target="_blank" rel="noopener">Order via WhatsApp</a>
      </div>
    </div>
  </section>
</main>

<?php include 'footer.php'; ?>
</body>
</html>
