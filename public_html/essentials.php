<?php
$page_title      = "Omuto Essentials | Youth-Made Products from Mpigi, Uganda";
$page_desc       = "Dignity Reusable Pads, handmade soaps, skin jelly and body wash — made by young people at the Omuto Youth Center, Mpigi.";
$page_canonical  = "https://omuto.org/essentials";
$page_active_nav = "store";
$footer_show_sticky = false;

$page_extra_css = '<style>
.ess-hero{min-height:65svh;display:flex;align-items:flex-end}
.ess-hero-glow{top:-60px;right:-60px;width:400px;height:400px;background:radial-gradient(circle,rgba(255,255,255,.2),transparent 70%)}
.ess-hero-inner{padding:60px 0;position:relative;z-index:2}
.ess-hero h1{font-family:var(--font-head);font-size:clamp(42px,8vw,96px);font-weight:900;line-height:.9;letter-spacing:-.04em;text-transform:uppercase;color:var(--navy);margin-bottom:16px}
.ess-hero h1 em{font-style:italic;color:var(--red)}
.ess-hero p{font-size:17px;font-weight:600;color:var(--navy);max-width:480px;line-height:1.7;opacity:.7}
.ess-badge{display:inline-flex;align-items:center;gap:8px;background:var(--navy);color:#fff;padding:8px 16px;border-radius:30px;font-family:var(--font-ui);font-size:10px;font-weight:700;text-transform:uppercase;letter-spacing:.12em;margin-bottom:20px}
.ess-badge svg{width:14px;height:14px;fill:#fff}
.ess-products{background:#fff;padding:88px 0}
.ess-product-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:32px;margin-top:48px}
.ess-product{background:var(--cream);border:var(--b);border-radius:var(--radius);overflow:hidden;box-shadow:var(--shadow-sm);transition:transform .2s,box-shadow .2s}
.ess-product:hover{transform:translate(-4px,-6px);box-shadow:var(--shadow)}
.ess-product-img{aspect-ratio:1;background:var(--navy);overflow:hidden;position:relative}
.ess-product-img img{width:100%;height:100%;object-fit:cover;transition:transform .4s}
.ess-product:hover .ess-product-img img{transform:scale(1.05)}
.ess-product-badge{position:absolute;top:12px;left:12px;background:var(--red);color:#fff;padding:4px 10px;border-radius:4px;font-family:var(--font-ui);font-size:9px;font-weight:700;text-transform:uppercase;letter-spacing:.1em}
.ess-product-body{padding:20px}
.ess-product-name{font-family:var(--font-head);font-size:18px;font-weight:900;text-transform:uppercase;font-style:italic;margin-bottom:4px}
.ess-product-desc{font-size:13px;font-weight:500;opacity:.7;line-height:1.5;margin-bottom:12px}
.ess-product-price{font-family:var(--font-head);font-size:22px;font-weight:900;color:var(--red);margin-bottom:16px}
.ess-product-price span{font-size:12px;font-weight:600;opacity:.5;text-decoration:line-through;margin-left:8px}
@media(max-width:900px){.ess-product-grid{grid-template-columns:repeat(2,1fr)}}
@media(max-width:500px){.ess-product-grid{grid-template-columns:1fr}}
.ess-mission{background:var(--navy);padding:88px 0;border-bottom:var(--b)}
.ess-mission-grid{display:grid;grid-template-columns:1fr 1fr;gap:64px;align-items:center}
.ess-mission-content h2{font-family:var(--font-head);font-size:clamp(32px,5vw,56px);font-weight:900;text-transform:uppercase;font-style:italic;color:#fff;margin-bottom:20px}
.ess-mission-content h2 em{color:var(--teal)}
.ess-mission-content p{font-size:15px;font-weight:500;line-height:1.8;color:rgba(255,255,255,.65);margin-bottom:16px}
.ess-mission-stats{display:flex;gap:24px;margin-top:24px}
.ess-mission-stat{text-align:center}
.ess-mission-stat-n{font-family:var(--font-head);font-size:42px;font-weight:900;color:var(--yellow)}
.ess-mission-stat-l{font-family:var(--font-ui);font-size:10px;font-weight:700;text-transform:uppercase;letter-spacing:.12em;color:rgba(255,255,255,.4)}
.ess-mission-img{aspect-ratio:4/3}
.ess-mission-img img{width:100%;height:100%;object-fit:cover}
@media(max-width:900px){.ess-mission-grid{grid-template-columns:1fr}}
@media(max-width:768px){.ess-mission-stats{flex-wrap:wrap;gap:16px}}
.ess-cta{background:var(--yellow);padding:88px 0;border-top:var(--b)}
.ess-cta-inner{text-align:center;max-width:600px;margin:0 auto}
.ess-cta-inner h2{font-family:var(--font-head);font-size:clamp(32px,5vw,56px);font-weight:900;text-transform:uppercase;font-style:italic;margin-bottom:16px}
.ess-cta-inner h2 em{color:var(--red)}
.ess-cta-inner p{font-size:16px;font-weight:600;opacity:.7;margin-bottom:28px}
</style>';
?>
<?php include 'header.php'; ?>

<main>
  <!-- HERO -->
  <section class="section-teal ess-hero">
    <div class="glow-red ess-hero-glow"></div>
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
  <section id="products" class="ess-products">
    <div class="container">
      <div style="text-align:center">
        <span class="eyebrow ew-teal">Shop</span>
        <h2 class="t-section">Youth-Made <em class="line-red">Products</em></h2>
        <p class="t-body" style="opacity:.6;max-width:480px;margin:12px auto 0">All products made at Omuto Youth Center. Revenue funds programmes.</p>
      </div>
      <div class="ess-product-grid">
        <div class="ess-product">
          <div class="ess-product-img"><span class="ess-product-badge">Bestseller</span><img src="https://i.ibb.co/JvmxZ3Qk/IMG-20240625-WA0001.jpg" alt="Dignity Reusable Pads" loading="lazy"/></div>
          <div class="ess-product-body">
            <h3 class="ess-product-name">Dignity Pad</h3>
            <p class="ess-product-desc">Reusable menstrual pad — 3 layers, snap closure. Lasts 2+ years.</p>
            <div class="ess-product-price">$8 <span>$15</span></div>
            <a href="https://wa.me/256750028703?text=Hi%20Omuto%2C%20I%27d%20like%20to%20order%20Dignity%20Pads" class="btn btn-red btn-sm btn-full" target="_blank" rel="noopener">Order via WhatsApp</a>
          </div>
        </div>
        <div class="ess-product">
          <div class="ess-product-img"><img src="https://i.ibb.co/kBnhM8q/soap-prod-1.jpg" alt="Lemongrass Soap" loading="lazy"/></div>
          <div class="ess-product-body">
            <h3 class="ess-product-name">Lemongrass Soap</h3>
            <p class="ess-product-desc">Handmade with local oils. Fresh scent, gentle on skin.</p>
            <div class="ess-product-price">$3</div>
            <a href="https://wa.me/256750028703?text=Hi%20Omuto%2C%20I%27d%20like%20to%20order%20Lemongrass%20Soap" class="btn btn-red btn-sm btn-full" target="_blank" rel="noopener">Order via WhatsApp</a>
          </div>
        </div>
        <div class="ess-product">
          <div class="ess-product-img"><img src="https://i.ibb.co/PZTKmhB/soap-prod-2.jpg" alt="Skin Jelly" loading="lazy"/></div>
          <div class="ess-product-body">
            <h3 class="ess-product-name">Skin Jelly</h3>
            <p class="ess-product-desc">Moisturizing jelly with shea butter. Great for dry skin.</p>
            <div class="ess-product-price">$4</div>
            <a href="https://wa.me/256750028703?text=Hi%20Omuto%2C%20I%27d%20like%20to%20order%20Skin%20Jelly" class="btn btn-red btn-sm btn-full" target="_blank" rel="noopener">Order via WhatsApp</a>
          </div>
        </div>
        <div class="ess-product">
          <div class="ess-product-img"><img src="https://i.ibb.co/QJNwLxq/soap-prod-3.jpg" alt="Body Wash" loading="lazy"/></div>
          <div class="ess-product-body">
            <h3 class="ess-product-name">Body Wash</h3>
            <p class="ess-product-desc">Liquid body wash with aloevera. Gentle and refreshing.</p>
            <div class="ess-product-price">$5</div>
            <a href="https://wa.me/256750028703?text=Hi%20Omuto%2C%20I%27d%20like%20to%20order%20Body%20Wash" class="btn btn-red btn-sm btn-full" target="_blank" rel="noopener">Order via WhatsApp</a>
          </div>
        </div>
        <div class="ess-product">
          <div class="ess-product-img"><span class="ess-product-badge">New</span><img src="https://i.ibb.co/RYMvXxK/soap-prod-4.jpg" alt="Laundry Soap" loading="lazy"/></div>
          <div class="ess-product-body">
            <h3 class="ess-product-name">Laundry Soap</h3>
            <p class="ess-product-desc">Hard soap for clothes. Effective and economical.</p>
            <div class="ess-product-price">$2</div>
            <a href="https://wa.me/256750028703?text=Hi%20Omuto%2C%20I%27d%20like%20to%20order%20Laundry%20Soap" class="btn btn-red btn-sm btn-full" target="_blank" rel="noopener">Order via WhatsApp</a>
          </div>
        </div>
        <div class="ess-product">
          <div class="ess-product-img"><img src="https://i.ibb.co/SRFm3hX/soap-prod-5.jpg" alt="Candles" loading="lazy"/></div>
          <div class="ess-product-body">
            <h3 class="ess-product-name">Scented Candles</h3>
            <p class="ess-product-desc">Hand-poured candles. Lavender and vanilla scents.</p>
            <div class="ess-product-price">$6</div>
            <a href="https://wa.me/256750028703?text=Hi%20Omuto%2C%20I%27d%20like%20to%20order%20Scented%20Candles" class="btn btn-red btn-sm btn-full" target="_blank" rel="noopener">Order via WhatsApp</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- MISSION -->
  <section id="mission" class="ess-mission">
    <div class="halftone halftone-light"></div>
    <div class="container">
      <div class="ess-mission-grid">
        <div class="ess-mission-content">
          <h2>Enterprise <em>With Purpose</em></h2>
          <p>Omuto Essentials is our youth-run social enterprise. Young people produce real products, learn real business skills, and generate real revenue — all of which funds our community programmes.</p>
          <p>When you buy, you're not just getting a quality product. You're investing in the next generation of Ugandan entrepreneurs.</p>
          <div class="ess-mission-stats">
            <div class="ess-mission-stat"><div class="ess-mission-stat-n">100%</div><div class="ess-mission-stat-l">Revenue Reinvested</div></div>
            <div class="ess-mission-stat"><div class="ess-mission-stat-n">12</div><div class="ess-mission-stat-l">Youth Employed</div></div>
            <div class="ess-mission-stat"><div class="ess-mission-stat-n">$2K+</div><div class="ess-mission-stat-l">Monthly Revenue</div></div>
          </div>
        </div>
        <div class="ess-mission-img img-bordered-lg"><img src="https://i.ibb.co/wZ9cf7Ny/31.png" alt="Youth at work" loading="lazy"/></div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="ess-cta">
    <div class="container">
      <div class="ess-cta-inner">
        <h2>Ready to <em>Support</em>?</h2>
        <p>Order via WhatsApp — we'll arrange delivery or pickup.</p>
        <a href="https://wa.me/256750028703?text=Hi%20Omuto,%20I%27d%20like%20to%20order%20products" class="btn btn-navy" target="_blank" rel="noopener">Order via WhatsApp</a>
      </div>
    </div>
  </section>
</main>

<?php include 'footer.php'; ?>
