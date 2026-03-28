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

  window.addEventListener('scroll', shouldStartCounters);
  shouldStartCounters();

  // SCROLL REVEAL
  const revealEls = document.querySelectorAll('.reveal');
  function handleReveal() {
    revealEls.forEach(el => {
      const rect = el.getBoundingClientRect();
      if (rect.top < window.innerHeight - 80) {
        el.classList.add('revealed');
      }
    });
  }
  window.addEventListener('scroll', handleReveal);
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
    function handleSticky() {
      const scrollY = window.scrollY || window.pageYOffset;
      if (scrollY > 600) {
        stickyCta.classList.add('visible');
      } else {
        stickyCta.classList.remove('visible');
      }
    }
    window.addEventListener('scroll', handleSticky);
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

});

