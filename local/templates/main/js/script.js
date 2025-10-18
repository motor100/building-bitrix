document.addEventListener("DOMContentLoaded", () => {

  // Top menu item set active
  const topMenuItem = document.querySelectorAll('.top-menu .menu-item');

  if (typeof(topMenuItemActive) != "undefined" && topMenuItemActive !== null) {
    topMenuItem[topMenuItemActive].classList.add('active');
  }

  // Sticky header
  window.onscroll = function() {
    const scrStickyHeader = window.pageYOffset || document.documentElement.scrollTop;
    const stickyHeader = document.querySelector('.js-sticky-header');
    if (scrStickyHeader > 400) {
      stickyHeader.classList.add('active');
    }
    if (scrStickyHeader < 400) {
      stickyHeader.classList.remove('active');
    }
  }

  // Paralax main image
  window.addEventListener('scroll', function() {
    let parallax = document.getElementById('parallax');
    if (parallax) {
      let offset = window.pageYOffset;
      let clientWidth = document.body.clientWidth;
      parallax.style.backgroundPositionY = (-50 + offset * 0.4) + 'px';
    }
  });

  // Our advantages slider
  const ourAdvantagesSlider = document.querySelector('.our-advantages-slider');

  if (ourAdvantagesSlider) {
    new Swiper('.our-advantages-slider', {
      loop: true,
      
      autoplay: false,
      breakpoints: {
        // mobile 320-991
        320: {
          spaceBetween: 15,
          slidesPerView: 1,
        },
        // desktop >= 480
        480: {
          spaceBetween: 15,
          slidesPerView: 2,
        },
        // desktop >= 992
        992: {
          spaceBetween: 20,
          slidesPerView: 3,
        },
        // desktop >= 1200
        1400: {
          spaceBetween: 24,
          slidesPerView: 4,
        },
      },
      navigation: {
        nextEl: '.swiper-next',
        prevEl: '.swiper-prev',
      },
    });
  }

  // News Swiper slider
  /*
  const newsSlider = document.querySelector('.news-slider');

  if (newsSlider) {
    new Swiper('.news-slider', {
      loop: true,
      slidesPerView: 4,
      autoplay: false,
      breakpoints: {
        // mobile 320-991
        320: {
          spaceBetween: 15,
          slidesPerView: 1,
        },
        // mobile >= 480
        480: {
          spaceBetween: 15,
          slidesPerView: 2,
        },
        // mobile >= 768
        768: {
          spaceBetween: 15,
          slidesPerView: 3,
        },
        // desktop >= 992
        992: {
          spaceBetween: 24,
          slidesPerView: 4,
        },
        // desktop >= 1200
        1200: {
          spaceBetween: 30,
          slidesPerView: 4,
        }
      },
      navigation: {
        nextEl: '.swiper-next',
        prevEl: '.swiper-prev',
      },
    });
  }
  */

  // Показать еще в форме открытие полей
  const moreInfoBtn = document.querySelector('.more-info-btn');
  const openMoreInfo = document.querySelector('.js-open-more-info');

  if (moreInfoBtn) {
    moreInfoBtn.onclick = function() {
      openMoreInfo.classList.toggle('active');
    }
  }

  // Project detail Swiper slider
  const projectDetailSlider = document.querySelector('.project-detail-slider');

  if (projectDetailSlider) {
    const slider = new Swiper('.project-detail-slider', {
      loop: true,
      slidesPerView: 1,
      autoplay: false,
      navigation: {
        nextEl: '.swiper-next',
        prevEl: '.swiper-prev',
      },
    });
  }

  // Location advantages Swiper slider слайдер Здесь начинается удобство
  const locationAdvantagesSlider = document.querySelector('.location-advantages-slider');

  if (locationAdvantagesSlider) {
    const laSlider = new Swiper('.location-advantages-slider', {
      loop: true,
      slidesPerView: 'auto',
      autoplay: false,
      breakpoints: {
        // mobile 320-991
        320: {
          spaceBetween: 10,
        },
        // desktop >= 992
        992: {
          spaceBetween: 20,
        },
      },
      navigation: {
        nextEl: '.swiper-next',
        prevEl: '.swiper-prev',
      },
    });

    const locationContentItems = document.querySelectorAll('.location-content-item');

    // Переключение слайда при клике на неактивный
    laSlider.on('click', function (swiper, event) {
      let el = swiper.clickedSlide; // Get the DOM element of the clicked slide

      if (!el.classList.contains('swiper-slide-active')) {
        swiper.slideNext();
      }
    });

    // Обновление галереи .location-content-item
    laSlider.on('slideChange', function (swiper) {
      let slideActiveIndex = swiper.realIndex;

      for (let i = 0; i < locationContentItems.length; i++) {
        locationContentItems[i].classList.remove('active');
      }

      locationContentItems[slideActiveIndex].classList.add('active');
    });

  }

  // Slim Select в большой форме
  const bigBookingOnlineForm = document.getElementById('big-booking-online-form');

  if (bigBookingOnlineForm) {

    new SlimSelect({
      select: '#big-form-project',
      showSearch: false,
      searchFocus: false,
    });

    new SlimSelect({
      select: '#big-form-type-meeting',
      showSearch: false,
      searchFocus: false,
    });

    new SlimSelect({
      select: '#big-form-type-room',
      showSearch: false,
      searchFocus: false,
    });

    new SlimSelect({
      select: '#big-form-type-payment',
      showSearch: false,
      searchFocus: false,
    });

  }

  // Date picker
  let datepickers = document.querySelectorAll('.datepicker');

  datepickers.forEach((item) => {
    const dp = new AirDatepicker(item, {
      minDate: new Date(),
      autoClose: true
    });
  });

  // Аккордеон на странице Ипотека
  const accordeon = document.querySelector('.accordeon');

  if (accordeon) {
    const accordeonItems = document.querySelectorAll('.accordeon-item');

    accordeonItems.forEach((item) => {
      // const accordeonItemTitle = item.querySelector('.accordeon-item-title');

      // accordeonItemTitle.onclick = function () {
      item.onclick = function () {
        item.classList.toggle('active');
      }
    });
  }


  // Current year
  const now = new Date();
  const year = now.getFullYear();

  const currentYear = document.getElementById('current-year');
  currentYear.innerText = year;


  // Mobile menu
  const body = document.querySelector('body');
  const openMenuBtns = document.querySelectorAll('.js-open-menu-btn');
  const closeMenuBtns = document.querySelectorAll('.js-close-menu')
  const mobileMenu = document.querySelector('.mobile-menu');

  function openMobileMenu() {
    body.classList.add('overflow-hidden');
    mobileMenu.classList.add('active');
  }

  function closeMobileMenu() {
    body.classList.remove('overflow-hidden');
    mobileMenu.classList.remove('active');
  }

  openMenuBtns.forEach((item) => {
    item.onclick = function() {
      if (item.classList.contains('menu-is-open')) {
        closeMobileMenu();
      } else {
        openMobileMenu();
      }
    }
  });

  closeMenuBtns.forEach((item) => {
    item.onclick = function() {
      closeMobileMenu();
    }
  });

  const listParentClick = document.querySelectorAll('.mobile-menu li.menu-item a');

  for (let i=0; i < listParentClick.length; i++) {
    listParentClick[i].onclick = function (event) {
      event.preventDefault();
      closeMobileMenu();
      let hrefClick = this.href;
      setTimeout(function() {
        location.href = hrefClick
      }, 500);
    }
  }


  // Окна
  const modalWindows = document.querySelectorAll('.modal-window');

  const advantagesModalBtns = document.querySelectorAll('.js-advantages-modal-btn');
  const advantagesModal = document.querySelector('#advantages-modal');

  const videoBtn = document.querySelector('#video-btn');
  const videoModal = document.querySelector('#video-modal');

  const writeUsBtn = document.querySelector('.js-write-us-btn');
  const writeUsModal = document.querySelector('#write-us-modal');

  const callbackFormBtns = document.querySelectorAll('.js-callback-form-btn');
  const callbackModal = document.querySelector('#callback-modal');
  const modalCloseBtns = document.querySelectorAll('.modal-window .modal-close');

  advantagesModalBtns.forEach((item) => {
    item.onclick = function () {
      modalWindowOpen(advantagesModal);
    }
  });

  if (videoBtn) {
    videoBtn.onclick = function () {
      modalWindowOpen(videoModal);
    }
  }

  if (writeUsBtn) {
    writeUsBtn.onclick = function () {
      modalWindowOpen(writeUsModal);
    }
  }

  callbackFormBtns.forEach((item) => {
    item.onclick = function () {
      modalWindowOpen(callbackModal);
    }
  });
  
  function modalWindowOpen(win) {
    // Открытие окна
    body.classList.add('overflow-hidden');
    win.classList.add('active');
    setTimeout(function(){
      win.childNodes[1].classList.add('active');
    }, 200);
  }

  for (let i=0; i < modalCloseBtns.length; i++) {
    modalCloseBtns[i].onclick = function() {
      modalWindowClose(modalWindows[i]);
    }
  }

  for (let i = 0; i < modalWindows.length; i++) {
    modalWindows[i].onclick = function(event) {
      let classList = event.target.classList;
      for (let j = 0; j < classList.length; j++) {
        if (classList[j] == "modal" || classList[j] == "modal-wrapper" || classList[j] == "modal-window") {
          modalWindowClose(modalWindows[i])
        }
      }
    }
  }

  function modalWindowClose(win) {
    body.classList.remove('overflow-hidden');
    win.childNodes[1].classList.remove('active');
    setTimeout(() => {
      win.classList.remove('active');
    }, 300);
    // Если это окно с видео, то при закрытии ставлю видео на паузу
    console.log(win == videoModal);
    if (win == videoModal) {
      const video = document.getElementById("video");
      console.log(video);
      video.load();
    }
  }


  // Input phone mask
  function inputPhoneMask() {
    const elementPhone = document.querySelectorAll('.js-input-phone-mask');

    const maskOptionsPhone = {
      mask: '+{7} (000) 000 00 00'
    };

    elementPhone.forEach((item) => {
      const mask = IMask(item, maskOptionsPhone);
    });

  }

  inputPhoneMask();

  // Animation
  const animItems = document.querySelectorAll('._anim-items');

  if (animItems.length > 0) {
    window.addEventListener('scroll', animOnScroll);
    function animOnScroll(param) {

      for (let index = 0; index < animItems.length; index++) {
        const animItem = animItems[index];
        const animItemHeight = animItem.offsetHeight;
        const animItemOffset = offset(animItem).top;
        const animStart = 4;

        let animItemPoint = window.innerHeight - animItemHeight / animStart;

        if (animItemHeight > window.innerHeight) {
          animItemPoint = window.innerHeight - window.innerHeight / animStart;
        }

        if ((pageYOffset > animItemOffset - animItemPoint) && pageYOffset < (animItemOffset + animItemHeight)) {
          animItem.classList.add('_active');
        } else {
          if (!animItem.classList.contains('_anim-no-hide')) {
            animItem.classList.remove('_active');
          }
        }
      }
    }

    function offset(el) {
      const rect = el.getBoundingClientRect(),
        scrollLeft = window.pageXOffset || document.documentElement.scrollLeft,
        scrollTop = window.pageYOffset || document.documentElement.scrollTop;
      return { top: rect.top + scrollTop, left: rect.left + scrollLeft}
    }

    setTimeout(() => {
      animOnScroll();
    }, 300);

  }


  // Cookie and Yandex Metrika
  function loadMetrica() {
    console.log('Metrica Load');
  }

  /*
  function loadMetrica() {

    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
    m[i].l=1*new Date();
    for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
    k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
    ym(99915628, "init", {
      clickmap:true,
      trackLinks:true,
      accurateTrackBounce:true,
      webvisor:false
    });

  }
  */

  function setCookie(name, value, days) {
    let expires = "";
    if (days) {
      let date = new Date();
      date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
      expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "") + expires + "; path=/" + "; sameSite=Lax;";
  }

  function getCookie(name) {
    let matches = document.cookie.match(new RegExp("(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"));
    return matches ? decodeURIComponent(matches[1]) : undefined;
  }

  function checkCookies() {
    const cookieNote = document.querySelector('#cookie_note');
    const cookieBtnAccept = cookieNote.querySelector('#cookie_accept');
    const cookieBtnDontAccept = cookieNote.querySelector('#cookie_dont_accept');
    // Нижнее меню
    //const fixedBottomNav = document.querySelector('#fixed-bottom-nav');

    // Если куки we-use-cookie нет или она просрочена, то показываем уведомление
    if (!getCookie('we-use-cookie')) {
      cookieNote.classList.add('active');
      // Нижнее меню
      /*
      if (fixedBottomNav) {
        fixedBottomNav.classList.add('with-cookie');
      }
      */
    }

    if (getCookie('we-use-cookie') == 'true') {
      loadMetrica();
    }

    cookieBtnAccept.addEventListener('click', function () {
      setCookie('we-use-cookie', 'true', 365);
      cookieNote.classList.remove('active');
      loadMetrica();
      // Нижнее меню
      /*
      if (fixedBottomNav) {
        fixedBottomNav.classList.remove('with-cookie');
      }
      */
    });

    cookieBtnDontAccept.addEventListener('click', function () {
      setCookie('we-use-cookie', 'false', 10);
      cookieNote.classList.remove('active');
      // Нижнее меню
      /*
      if (fixedBottomNav) {
        fixedBottomNav.classList.remove('with-cookie');
      }
      */
    });

  }

  checkCookies();
  
});