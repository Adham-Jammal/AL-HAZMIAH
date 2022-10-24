let preloader = document.getElementById("preloader");
if (preloader) {
    window.addEventListener("load", () => {
        preloader.remove();
    });
}

window.addEventListener("load", () => {
    x = document.querySelectorAll('.links a')
    for( let i = 1 ; i < x.length  ; i++){
        x[i].addEventListener('click' , () => {
            document.querySelector('.burger').click()
        })
    }
    AOS.init({
        duration: 1000,
        easing: "ease-in-out",
        once: true,
        mirror: false,
    });
});

$(".vision-carousel").owlCarousel({
    margin : 10,
    loop: true,
    rtl : true,
    autoplay: true,
    autoplaySpeed: 1000,
    autoplayTimeout: 6000,
    dots: false,
    smartSpeed: 1000,
    lazyLoad: true,
    nav: true,
    navText : ["","<i class='fa fa-chevron-left'></i>"],
    responsive:{
        400:{
            items:1,
        },
        768:{
            items:3,
        },
    }

  });
  $(".message-carousel").owlCarousel({
    margin : 20,
    loop: true,
    rtl : true,
    autoplay: true,
    autoplaySpeed: 1000,
    autoplayTimeout: 6000,
    dots: false,
    smartSpeed: 1000,
    lazyLoad: true,
    nav: false,
    navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
    responsive:{
        400:{
            items:2,
        },
        768:{
            items:3,
        },
        1000:{
            items:4,
        },

    }
  });
  $(".message-2-carousel").owlCarousel({
    items:1,
    margin : 10,
    loop: true,
    rtl : true,
    autoplay: false,
    autoplaySpeed: 1000,
    autoplayTimeout: 6000,
    dots: false,
    smartSpeed: 1000,
    lazyLoad: true,
    nav: false,
    navText : ["","<i class='fa fa-chevron-right'></i>"],
    responsive:{
        400:{
            items:1,
        },
        768:{
            items:1,
        },
    }

  });

  $(".team-carousel").owlCarousel({
    margin : 10,
    loop: true,
    rtl : true,
    autoplay: true,
    autoplaySpeed: 1000,
    autoplayTimeout: 6000,
    dots: false,
    smartSpeed: 1000,
    lazyLoad: true,
    responsive:{
        400:{
            items:1,
        },
        768:{
            items:5,
        },
    }
  });

  $(".partners-slider").owlCarousel({
    items: 5,
    loop: true,
    rtl : true,
    autoplay: true,
    autoplaySpeed: 1000,
    autoplayTimeout: 6000,
    dots: false,
    smartSpeed: 1000,
    lazyLoad: true,
    nav: false,
    responsive: {
        0: {
            items: 1,
            nav: false,
        },
        600: {
            items: 3,
            nav: false,
        },
        1000: {
            items: 5,
        },
    },
  });
  const observer = lozad(); // lazy loads elements with default selector as '.lozad'
  observer.observe();
