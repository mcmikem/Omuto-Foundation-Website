/**
 * Omuto Foundation — Homepage Scripts
 * All interactive behaviour for the homepage sections
 */

document.addEventListener('DOMContentLoaded', function () {

  // ===== HERO SLIDESHOW =====
  const slides = document.querySelectorAll('.hero-slide');
  const dotsWrap = document.getElementById('sdots');
  const pauseBtn = document.getElementById('ss-pause');
  const pauseIcon = document.getElementById('ss-pause-icon');
  const wm = document.querySelector('.hero-watermark');
  let cur = 0, isPaused = false;
  const PLAY_SVG = '<path d="M8 5v14l11-7z"/>';
  const PAUSE_SVG = '<path d="M6 19h4V5H6v14zm8-14v14h4V5h-4z"/>';

  function updateWatermark() {
    if (!wm || !slides[cur]) return;
    wm.textContent = slides[cur].dataset.watermark || '';
  }

  slides.forEach((_, i) => {
    const d = document.createElement('button');
    d.className = 'sdot' + (i === 0 ? ' active' : '');
    d.setAttribute('aria-label', 'Slide ' + (i + 1));
    d.setAttribute('type', 'button');
    d.onclick = () => goSlide(i);
    dotsWrap.appendChild(d);
  });

  function goSlide(n) {
    slides[cur].classList.remove('active');
    dotsWrap.querySelectorAll('.sdot')[cur].classList.remove('active');
    cur = (n + slides.length) % slides.length;
    slides[cur].classList.add('active');
    dotsWrap.querySelectorAll('.sdot')[cur].classList.add('active');
    updateWatermark();
  }

  setInterval(() => { if (!isPaused) goSlide(cur + 1); }, 4500);

  if (pauseBtn) {
    pauseBtn.addEventListener('click', () => {
      isPaused = !isPaused;
      pauseIcon.innerHTML = isPaused ? PLAY_SVG : PAUSE_SVG;
      pauseBtn.setAttribute('aria-label', isPaused ? 'Resume' : 'Pause');
    });
  }

  updateWatermark();

  // ===== STAT COUNTERS =====
  const counters = document.querySelectorAll('.stat-counter');
  let counted = false;
  new IntersectionObserver(entries => {
    if (entries[0].isIntersecting && !counted) {
      counted = true;
      counters.forEach(el => {
        const delay = parseInt(el.dataset.delay) || 0;
        const target = +el.dataset.target;
        const suffix = el.dataset.suffix || '';
        setTimeout(() => {
          let step = 0, steps = 60;
          const tick = () => {
            step++;
            const val = Math.min(step * target / steps, target);
            el.textContent = (val >= 1000 ? (Math.round(val / 100) * 100).toLocaleString() : Math.round(val)) + suffix;
            if (step < steps) requestAnimationFrame(tick);
            else {
              el.textContent = (target >= 1000 ? target.toLocaleString() : target) + suffix;
              el.classList.add('popped');
              el.addEventListener('animationend', () => el.classList.remove('popped'), { once: true });
            }
          };
          requestAnimationFrame(tick);
        }, delay);
      });
    }
  }, { threshold: 0.4 }).observe(document.getElementById('stats'));

  // ===== MODEL TABS =====
  const order = [
    { key: 'O', idx: 0 }, { key: 'M', idx: 1 }, { key: 'U', idx: 2 },
    { key: 'T', idx: 3 }, { key: 'O2', idx: 4 }
  ];
  const tabs = document.querySelectorAll('.om-mtab');
  const panels = document.querySelectorAll('.om-model-panel');
  const prog = document.getElementById('om-model-progress');
  const box = document.querySelector('.om-model-box');

  if (tabs.length && panels.length && prog && box) {
    let step = 0, timer = null;
    const ROTATE_MS = 7000;

    function setStep(next) {
      step = (next + order.length) % order.length;
      const { key, idx } = order[step];
      tabs.forEach(t => { t.classList.remove('active'); t.setAttribute('aria-selected', 'false'); });
      const at = document.getElementById('om-mt-' + key);
      if (at) { at.classList.add('active'); at.setAttribute('aria-selected', 'true'); }
      panels.forEach(p => p.classList.remove('active'));
      const ap = document.getElementById('om-mp-' + key);
      if (ap) ap.classList.add('active');
      const seg = 100 / order.length;
      prog.style.setProperty('--om-model-width', '26%');
      requestAnimationFrame(() => {
        prog.style.setProperty('--om-model-x', (seg * idx) + '%');
        setTimeout(() => prog.style.setProperty('--om-model-width', '20%'), 200);
      });
    }

    function startAuto() { if (timer) clearInterval(timer); timer = setInterval(() => setStep(step + 1), ROTATE_MS); }

    tabs.forEach((tab, i) => { tab.addEventListener('click', () => { setStep(i); startAuto(); }); });
    box.addEventListener('click', e => {
      if (e.target.closest('[data-om-model-next]')) { setStep(step + 1); startAuto(); }
      else if (e.target.closest('[data-om-model-prev]')) { setStep(step - 1); startAuto(); }
    });
    setStep(0);
    startAuto();
  }

  // ===== VIDEO MODAL =====
  window.openModal = function (vid) {
    document.getElementById('modal-iframe').src = 'https://www.youtube.com/embed/' + vid + '?autoplay=1';
    document.getElementById('modal').classList.add('open');
    document.body.style.overflow = 'hidden';
  };
  window.closeModal = function () {
    document.getElementById('modal').classList.remove('open');
    document.getElementById('modal-iframe').src = '';
    document.body.style.overflow = '';
  };
  document.addEventListener('keydown', e => { if (e.key === 'Escape') window.closeModal(); });

  // ===== DONATE WIDGET =====
  const impactMap = { '10': 'contributes to Dignity Pad materials', '25': 'keeps a girl in school for a month', '50': 'maintains a water filter for one term', '100': 'equips a full youth action team' };
  let isMonthly = false, selAmt = '10';

  window.toggleMonthly = function () {
    isMonthly = !isMonthly;
    document.getElementById('d-sw').classList.toggle('on', isMonthly);
    document.getElementById('d-lbl').textContent = 'Select amount — ' + (isMonthly ? 'monthly:' : 'one-time:');
    updateGoBtn();
  };
  window.selectAmt = function (el, amt) {
    document.querySelectorAll('.d-amt').forEach(a => a.classList.remove('sel'));
    el.classList.add('sel');
    selAmt = amt;
    const imp = document.getElementById('d-impact');
    if (imp) imp.textContent = '$' + amt + ' ' + (impactMap[amt] || 'makes a real difference');
    updateGoBtn();
  };
  function updateGoBtn() {
    const btn = document.getElementById('d-go');
    if (!btn) return;
    btn.textContent = 'Donate $' + selAmt + (isMonthly ? '/month' : ' Now');
    btn.onclick = () => { window.location.href = 'campaign.php?amount=' + selAmt + (isMonthly ? '&freq=monthly' : ''); };
  }
  window.selectAmt(document.querySelector('.d-amt.sel'), '10');

  // ===== NEWSLETTER =====
  window.handleNL = function (e) {
    e.preventDefault();
    const btn = document.getElementById('nl-btn');
    btn.textContent = 'Thanks! \u2713';
    btn.style.background = 'var(--teal)';
    btn.style.color = 'var(--navy)';
    btn.disabled = true;
  };

});
