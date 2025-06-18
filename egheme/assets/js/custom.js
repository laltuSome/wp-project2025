jQuery(document).ready(function () {

  // === Sticky Header ===
  (function () {
    var shrinkHeader = 2;
    jQuery(window).scroll(function () {
      var scroll = window.pageYOffset || document.documentElement.scrollTop;
      if (scroll >= shrinkHeader) {
        jQuery('header.top-head').addClass('sticky');
      } else {
        jQuery('header.top-head').removeClass('sticky');
      }
    });
  })();

  // === Scroll to Top Button ===
  jQuery(window).on("scroll", function () {
    if (jQuery(this).scrollTop() > 100) {
      jQuery(".scrollup").addClass("actives");
    } else {
      jQuery(".scrollup").removeClass("actives");
    }
  });

  jQuery(".scrollup").on("click", function () {
    jQuery("html, body").animate({ scrollTop: 0 }, 600);
    return false;
  });

  // === AOS Animation ===
  AOS.init({
    once: true,
    throttleDelay: 0,
    offset: 0,
    disable: function () {
      return window.innerWidth < 768;
    }
  });

  let scrollRef = 0;
  window.addEventListener('scroll', function () {
    scrollRef <= 10 ? scrollRef++ : AOS.refresh();
  });

  // === Isotope Filtering ===
  var $grid = jQuery(".grid").isotope({
    itemSelector: ".all",
    percentPosition: true,
    masonry: {
      columnWidth: ".all"
    }
  });

  jQuery('.filters ul li').click(function () {
    jQuery('.filters ul li').removeClass('activefilter');
    jQuery(this).addClass('activefilter');
    var data = jQuery(this).attr('data-filter');
    $grid.isotope({ filter: data });
  });

  // === Swiper Sliders ===

  // Services Swiper
  new Swiper('.services-swiper', {
    slidesPerView: 4,
    loop: false,
    spaceBetween: 20,
    navigation: {
      nextEl: '.custom-next',
      prevEl: '.custom-prev',
    },
    breakpoints: {
      576: { slidesPerView: 1 },
      768: { slidesPerView: 3 },
      992: { slidesPerView: 4 }
    }
  });

  // Testimonial Swiper
  new Swiper('.testimonial-slider', {
    slidesPerView: 1,
    loop: true,
    spaceBetween: 30,
    navigation: {
      nextEl: '.testimonial-button-next',
      prevEl: '.testimonial-button-prev',
    }
  });

  // === Contact Form 7 – Hide Fields After Submit ===
  document.addEventListener('wpcf7mailsent', function () {
    document.querySelectorAll("form.wpcf7-form > :not(.wpcf7-response-output)").forEach(el => {
      el.style.display = 'none';
    });
  }, false);

  // === Form Label Animation ===
  jQuery('input, textarea').focus(function () {
    jQuery(this).parents('.form-group').addClass('focused');
  });

  jQuery('input, textarea').blur(function () {
    var inputValue = jQuery(this).val();
    if (inputValue === "") {
      jQuery(this).removeClass('filled');
      jQuery(this).parents('.form-group').removeClass('focused');
    } else {
      jQuery(this).addClass('filled');
    }
  });

  // === Mobile Menu Toggle ===
  let menu_icon_box = document.querySelector(".menu_icon_box");
  let box = document.querySelector(".box");

  menu_icon_box.onclick = function () {
    menu_icon_box.classList.toggle("activem");
    box.classList.toggle("active_box");
  };

  document.onclick = function (e) {
    if (!menu_icon_box.contains(e.target) && !box.contains(e.target)) {
      menu_icon_box.classList.remove("activem");
      box.classList.remove("active_box");
    }
  };

  // === Parallax Scroll Effect ===
  window.addEventListener("scroll", function () {
    const scrollY = window.scrollY;
    const topImg = document.querySelector(".bathcestop img");
    const bottomImg = document.querySelector(".bathces img");

    if (topImg) {
      topImg.style.transform = `translateY(${scrollY * 0.3}px)`;
    }

    if (bottomImg) {
      bottomImg.style.transform = `translateY(${scrollY * -0.3}px)`;
    }
  });

//=======last braket=====
});
