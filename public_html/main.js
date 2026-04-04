document.addEventListener('DOMContentLoaded', function () {
  // HERO SLIDESHOW
  const slides = document.querySelectorAll('.hero-slide');
  const dotsContainer = document.getElementById('slide-dots');
  let currentSlide = 0;
  let slideInterval;

  if (slides.length && dotsContainer) {
    slides.forEach((_, index) => {
      const dot = document.createElement('button');
      dot.className = 'slide-dot' + (index === 0 ? ' active' : '');
      dot.setAttribute('aria-label', 'Go to slide ' + (index + 1));
      dot.addEventListener('click', () => goToSlide(index));
      dotsContainer.appendChild(dot);
    });

    const dots = dotsContainer.querySelectorAll('.slide-dot');

    function goToSlide(index) {
      slides[currentSlide].classList.remove('active');
      dots[currentSlide].classList.remove('active');
      currentSlide = index;
      slides[currentSlide].classList.add('active');
      dots[currentSlide].classList.add('active');
      resetInterval();
    }

    function nextSlide() {
      let next = currentSlide + 1;
      if (next >= slides.length) next = 0;
      goToSlide(next);
    }

    function resetInterval() {
      if (slideInterval) clearInterval(slideInterval);
      slideInterval = setInterval(nextSlide, 5000);
    }

    resetInterval();
  }

  // MODEL STEPPER
  const modelButtons = document.querySelectorAll('.model-step-btn');
  const modelPanels = document.querySelectorAll('.model-panel');
  const modelImages = [
    'https://i.ibb.co/wZ9cf7Ny/31.png',
    'https://i.ibb.co/m5TL3gFq/23.png',
    'https://i.ibb.co/TBrW6BPh/28.png',
    'https://i.ibb.co/mVPm5DzK/18.png',
    'https://i.ibb.co/whj2bMb6/22.png'
  ];
  const modelImageEl = document.getElementById('model-image');
  const modelProgress = document.getElementById('model-progress');
  const prevBtn = document.getElementById('model-prev');
  const nextBtn = document.getElementById('model-next');
  let currentModelIndex = 0;

  function updateModelStep(index) {
    currentModelIndex = index;
    modelButtons.forEach((btn, i) => {
      btn.classList.toggle('active', i === index);
    });
    modelPanels.forEach((panel, i) => {
      panel.classList.toggle('active', i === index);
    });
    if (modelImageEl && modelImages[index]) {
      modelImageEl.src = modelImages[index];
    }
    if (modelProgress) {
      const percent = ((index + 1) / modelButtons.length) * 100;
      modelProgress.style.width = percent + '%';
    }
    if (prevBtn) prevBtn.disabled = index === 0;
    if (nextBtn) nextBtn.disabled = index === modelButtons.length - 1;
  }

  window.switchModelStep = function (stepId, index) {
    const panel = document.getElementById('model-' + stepId);
    if (!panel) return;
    updateModelStep(index);
  };

  window.modelNav = function (direction) {
    let newIndex = currentModelIndex + direction;
    if (newIndex < 0 || newIndex >= modelButtons.length) return;
    updateModelStep(newIndex);
  };

  if (modelButtons.length && modelPanels.length) {
    updateModelStep(0);
  }

  // ANIMATED STATS COUNTERS
  const counters = document.querySelectorAll('.stat-counter');
  let countersStarted = false;

  function animateCounters() {
    counters.forEach(counter => {
      const target = parseInt(counter.getAttribute('data-target') || '0', 10);
      const suffix = counter.getAttribute('data-suffix') || '';
      let current = 0;
      const duration = 1500;
      const startTime = performance.now();

      function update(now) {
        const progress = Math.min((now - startTime) / duration, 1);
        current = Math.floor(progress * target);
        counter.textContent = current.toLocaleString() + suffix;
        if (progress < 1) {
          requestAnimationFrame(update);
        } else {
          counter.textContent = target.toLocaleString() + suffix;
        }
      }

      requestAnimationFrame(update);
    });
  }

  function shouldStartCounters() {
    if (countersStarted || !counters.length) return;
    const statsSection = document.getElementById('stats-section');
    if (!statsSection) return;
    const rect = statsSection.getBoundingClientRect();
    if (rect.top < window.innerHeight && rect.bottom > 0) {
      countersStarted = true;
      animateCounters();
    }
  }

  window.addEventListener('scroll', shouldStartCounters, {passive: true});
  shouldStartCounters();

  // SCROLL REVEAL
  const revealEls = document.querySelectorAll('.reveal');
  let revealTicking = false;
  function handleReveal() {
    if (!revealTicking) {
      requestAnimationFrame(() => {
        revealEls.forEach(el => {
          const rect = el.getBoundingClientRect();
          if (rect.top < window.innerHeight - 80) {
            el.classList.add('revealed');
          }
        });
        revealTicking = false;
      });
      revealTicking = true;
    }
  }
  window.addEventListener('scroll', handleReveal, {passive: true});
  handleReveal();

  // MOBILE MENU
  const mobileTrigger = document.getElementById('mobileMenuTrigger');
  const mobileMenu = document.getElementById('mobileMenu');
  const menuIcon = document.getElementById('menuIcon');

  if (mobileTrigger && mobileMenu && menuIcon) {
    mobileTrigger.addEventListener('click', () => {
      const isOpen = !mobileMenu.classList.contains('hidden');
      mobileMenu.classList.toggle('hidden', isOpen);
      mobileTrigger.setAttribute('aria-expanded', String(!isOpen));
      menuIcon.classList.toggle('fa-bars', isOpen);
      menuIcon.classList.toggle('fa-xmark', !isOpen);
    });
  }

  // STICKY CTA BAR (optional)
  const stickyCta = document.getElementById('sticky-cta');
  if (stickyCta) {
    let stickyTicking = false;
    function handleSticky() {
      if (!stickyTicking) {
        requestAnimationFrame(() => {
          const scrollY = window.scrollY || window.pageYOffset;
          if (scrollY > 600) {
            stickyCta.classList.add('visible');
          } else {
            stickyCta.classList.remove('visible');
          }
          stickyTicking = false;
        });
        stickyTicking = true;
      }
    }
    window.addEventListener('scroll', handleSticky, {passive: true});
    handleSticky();
  }

  // VIDEO MODAL
  const videoModal = document.getElementById('videoModal');
  const modalIframe = document.getElementById('modalIframe');

  window.openVideoModal = function (url) {
    if (!modalIframe || !videoModal) return;
    modalIframe.src = url + (url.includes('?') ? '&' : '?') + 'autoplay=1';
    videoModal.classList.remove('hidden');
    document.body.style.overflow = 'hidden';
  };

  window.closeVideoModal = function () {
    if (!modalIframe || !videoModal) return;
    modalIframe.src = '';
    videoModal.classList.add('hidden');
    document.body.style.overflow = 'auto';
  };

  if (videoModal) {
    videoModal.addEventListener('click', e => {
      if (e.target === videoModal) closeVideoModal();
    });
  }

  document.addEventListener('keydown', e => {
    if (e.key === 'Escape' && videoModal && !videoModal.classList.contains('hidden')) {
      closeVideoModal();
    }
  });

  // HERO SLIDESHOW — SWIPE SUPPORT
  (function(){
    const hero = document.querySelector('.hero-section');
    if(!hero || !slides.length) return;
    let startX = 0, startY = 0, isDragging = false;
    hero.addEventListener('touchstart', function(e){
      startX = e.touches[0].clientX;
      startY = e.touches[0].clientY;
      isDragging = true;
    }, {passive: true});
    hero.addEventListener('touchend', function(e){
      if(!isDragging) return;
      isDragging = false;
      const dx = e.changedTouches[0].clientX - startX;
      const dy = e.changedTouches[0].clientY - startY;
      if(Math.abs(dx) > 50 && Math.abs(dx) > Math.abs(dy)){
        if(dx < 0){
          let next = currentSlide + 1;
          if(next >= slides.length) next = 0;
          goToSlide(next);
        } else {
          let prev = currentSlide - 1;
          if(prev < 0) prev = slides.length - 1;
          goToSlide(prev);
        }
      }
    }, {passive: true});
  })();

  // MODEL STEPPER — SWIPE SUPPORT
  (function(){
    const stepper = document.querySelector('.model-stepper');
    if(!stepper || !modelButtons.length) return;
    let startX = 0;
    stepper.addEventListener('touchstart', function(e){
      startX = e.touches[0].clientX;
    }, {passive: true});
    stepper.addEventListener('touchend', function(e){
      const dx = e.changedTouches[0].clientX - startX;
      if(Math.abs(dx) > 50){
        if(dx < 0) window.modelNav(1);
        else window.modelNav(-1);
      }
    }, {passive: true});
  })();

  // STAT COUNTERS — RE-CLICKABLE
  (function(){
    const statEls = document.querySelectorAll('.stat-num-wrap');
    statEls.forEach(function(el){
      el.addEventListener('click', function(){
        const counter = el.querySelector('.stat-counter');
        if(!counter) return;
        const target = parseInt(counter.getAttribute('data-target') || '0', 10);
        const suffix = counter.getAttribute('data-suffix') || '';
        let current = 0;
        const duration = 1200;
        const startTime = performance.now();
        counter.textContent = '0' + suffix;
        function update(now){
          const progress = Math.min((now - startTime) / duration, 1);
          current = Math.floor(progress * target);
          counter.textContent = current.toLocaleString() + suffix;
          if(progress < 1) requestAnimationFrame(update);
          else counter.textContent = target.toLocaleString() + suffix;
        }
        requestAnimationFrame(update);
      });
    });
  })();

  // PHOTO STRIP SWIPE (for mobile)
  (function(){
    const strips = document.querySelectorAll('.ps-track, .photo-strip');
    strips.forEach(function(strip){
      let startX = 0, isDragging = false;
      strip.addEventListener('touchstart', function(e){
        startX = e.touches[0].clientX;
        isDragging = true;
      }, {passive: true});
      strip.addEventListener('touchend', function(e){
        if(!isDragging) return;
        isDragging = false;
        const dx = e.changedTouches[0].clientX - startX;
        if(Math.abs(dx) > 40){
          const scrollAmount = strip.offsetWidth * 0.7;
          strip.scrollBy({ left: dx < 0 ? scrollAmount : -scrollAmount, behavior: 'smooth' });
        }
      }, {passive: true});
    });
  })();

});

