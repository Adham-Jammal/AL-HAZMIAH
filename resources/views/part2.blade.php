    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-v4-grid-only@1.0.0/dist/bootstrap-grid.css" media="print" onload="this.media='all'; this.onload = null">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" media="print" onload="this.media='all'; this.onload = null">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" media="print" onload="this.media='all'; this.onload = null">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" media="print" onload="this.media='all'; this.onload = null">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w==" crossorigin="anonymous" referrerpolicy="no-referrer" media="print" onload="this.media='all'; this.onload = null" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


    {{-- Hero --}}
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-content">
                    <h1 data-aos="fade-right" data-aos-duration="1000">
                        {{ __('index.1') }} <span class="with-bg"> {{ __('index.1.1') }}</span>
                    </h1>
                </div>
                <div class="col-md-8 image-content" data-aos="zoom-in" data-aos-duration="1000">
                    <img class="lozad" data-src="{{ asset('/img/hero-background.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>
    {{-- Vision --}}
    <section class="vision" id="about_us">
        <div class="container">
            <div class="row">
                <div class="col-md-5 text-content" data-aos="fade-up" data-aos-duration="1000">
                    <h2>{{ __('index.7') }}</h2>
                    <p>{{ __('index.8') }}</p>
                    <p>{{ __('index.9') }}</p>
                </div>
                <div class="col-md-7 slider" data-aos="zoom-in" data-aos-duration="1000">
                    <div id="owl-carousel" class="vision-carousel owl-carousel owl-theme">
                        <div class="slide">
                            <img class="lozad" data-src="{{ asset('/img/slider-1.png') }}" alt="">
                        </div>
                        <div class="slide">
                            <img class="lozad" data-src="{{ asset('/img/slider-2.png') }}" alt="">
                        </div>
                        <div class="slide">
                            <img class="lozad" data-src="{{ asset('/img/slider-3.png') }}" alt="">
                        </div>
                        <div class="slide">
                            <img class="lozad" data-src="{{ asset('/img/slider-1.png') }}" alt="">
                        </div>
                        <div class="slide">
                            <img class="lozad" data-src="{{ asset('/img/slider-2.png') }}" alt="">
                        </div>
                        <div class="slide">
                            <img class="lozad" data-src="{{ asset('/img/slider-3.png') }}" alt="">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Message 2 --}}
    <section class="message-2" id="message-2">
        <div class="container">
            <div class="row">
                <div class="col-md-5 text-content" data-aos="fade-up" data-aos-duration="1000">
                    <h2>{{ __('index.10') }}</h2>
                    <p>{{ __('index.11') }}</p>
                </div>
                <div class="col-md-7 slider" data-aos="zoom-in" data-aos-duration="1000">
                    <div id="owl-carousel" class="message-2-carousel owl-carousel owl-theme">

                        <div class="slide">
                            <img class="lozad" data-src="{{ asset('/img/message-slider.png') }}" alt="">
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Goals --}}
    <section class="goals">
        <div class="container">
            <div class="row">
                <div class="col-md-7 image-content" data-aos="zoom-in" data-aos-duration="1000">
                    <img class="lozad" data-src="{{ asset('/img/goals-image.png') }}" class="desktop" alt="">
                </div>
                <div class="col-md-5 text-content">
                    <h2 data-aos="zoom-in" data-aos-duration="1000">{{ __('index.12') }}</h2>
                    <img data-src="{{ asset('/img/goals-image.png') }}" class="lozad mobile" alt="">
                    <ul>
                        <li data-aos="fade-up" data-aos-duration="1000"><img class="lozad" data-src="{{ asset('/img/Ellipse.png') }}" alt="">
                            <p>{{ __('index.13') }}</p>
                        </li>
                        <li data-aos="fade-up" data-aos-duration="1000"><img class="lozad" data-src="{{ asset('/img/Ellipse.png') }}" alt="">
                            <p>{{ __('index.14') }}</p>
                        </li>
                        <li data-aos="fade-up" data-aos-duration="1000"><img class="lozad" data-src="{{ asset('/img/Ellipse.png') }}" alt="">
                            <p>{{ __('index.15') }}</p>
                        </li>
                        <li data-aos="fade-up" data-aos-duration="1000"><img class="lozad" data-src="{{ asset('/img/Ellipse.png') }}" alt="">
                            <p>{{ __('index.16') }}</p>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </section>

    {{-- services --}}
    <section class="services" id="services">
        <div class="container">
            <h2 data-aos="fade-up" data-aos-duration="1000">{{ __('index.17') }}</h2>
            <div class="services-images">
                <img class="lozad" data-src="{{ asset('img/services-image-1.png') }}" alt="service-image">
                <img class="lozad" data-src="{{ asset('img/services-image-2.png') }}" alt="service-image">
                <img class="lozad" data-src="{{ asset('img/services-image-3.png') }}" alt="service-image">
                <img class="lozad" data-src="{{ asset('img/services-image-4.png') }}" alt="service-image">
            </div>
            <div class="content">
                <p class="services-p">{{ __('index.18') }}</p>
                <ul>
                    <li data-aos="fade-up" data-aos-duration="1000"><img class="lozad" data-src="{{ asset('/img/arrow.png') }}" alt="">
                        <p>{{ __('index.19') }}</p>
                    </li>
                    <li data-aos="fade-up" data-aos-duration="1000"><img class="lozad" data-src="{{ asset('/img/arrow.png') }}" alt="">
                        <p>{{ __('index.20') }}</p>
                    </li>
                    <li data-aos="fade-up" data-aos-duration="1000"><img class="lozad" data-src="{{ asset('/img/arrow.png') }}" alt="">
                        <p>{{ __('index.21') }}</p>
                    </li>
                    <li data-aos="fade-up" data-aos-duration="1000"><img class="lozad" data-src="{{ asset('/img/arrow.png') }}" alt="">
                        <p>{{ __('index.22') }}</p>
                    </li>
                    <li data-aos="fade-up" data-aos-duration="1000"><img class="lozad" data-src="{{ asset('/img/arrow.png') }}" alt="">
                        <p>{{ __('index.23') }}</p>
                    </li>
                    <li data-aos="fade-up" data-aos-duration="1000"><img class="lozad" data-src="{{ asset('/img/arrow.png') }}" alt="">
                        <p>{{ __('index.24') }}</p>
                    </li>
                    <li data-aos="fade-up" data-aos-duration="1000"><img class="lozad" data-src="{{ asset('/img/arrow.png') }}" alt="">
                        <p>{{ __('index.25') }}</p>
                    </li>
                    <li data-aos="fade-up" data-aos-duration="1000"><img class="lozad" data-src="{{ asset('/img/arrow.png') }}" alt="">
                        <p>{{ __('index.26') }}</p>
                    </li>
                    <li data-aos="fade-up" data-aos-duration="1000"><img class="lozad" data-src="{{ asset('/img/arrow.png') }}" alt="">
                        <p>{{ __('index.27') }}</p>
                    </li>
                    <li data-aos="fade-up" data-aos-duration="1000"><img class="lozad" data-src="{{ asset('/img/arrow.png') }}" alt="">
                        <p>{{ __('index.28') }}</p>
                    </li>
                    <li data-aos="fade-up" data-aos-duration="1000"><img class="lozad" data-src="{{ asset('/img/arrow.png') }}" alt="">
                        <p>{{ __('index.29') }}</p>
                    </li>
                </ul>
            </div>

        </div>
    </section>
    {{-- Success Partners --}}
    <section class="success-partners">
        <div class="container">
            <h2>{{ __('index.45') }}</h2>
            <div class="images partners-slider owl-carousel owl-drag owl-theme" data-aos="fade-up" data-aos-duration="1000">
                <img class="lozad big-image" data-src="{{ asset('img/slider-image-1.png') }}" alt="partner-image">
                <img class="lozad" data-src="{{ asset('img/slider-image-2.png') }}" alt="partner-image">
                <img class="lozad" data-src="{{ asset('img/slider-image-3.png') }}" alt="partner-image">
                <img class="lozad" data-src="{{ asset('img/slider-image-4.png') }}" alt="partner-image">
                <img class="lozad" data-src="{{ asset('img/success-2.png') }}" alt="partner-image">
                <img class="lozad big-image" data-src="{{ asset('img/slider-image-6.png') }}" alt="partner-image">
                <img class="lozad" data-src="{{ asset('img/slider-image-7.png') }}" alt="partner-image">
                <img class="lozad" data-src="{{ asset('img/slider-image-8.png') }}" alt="partner-image">
                <img class="lozad" data-src="{{ asset('img/slider-image-9.jpg') }}" alt="partner-image">
                <img class="lozad" data-src="{{ asset('img/slider-image-10.png') }}" alt="partner-image">


            </div>
        </div>
    </section>
    {{-- Contact --}}
    <section class="contact-form" id="contact_us">
        <div class="container">
            <div class="row">
                <div class="col-md-7 map" data-aos="zoom-in" data-aos-duration="1000">
                    <iframe data-src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3625.0168588789716!2d46.680480114951585!3d24.691947184133706!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f03816e57f521%3A0x9bb82f20e03be9e9!2sHamad%20Tower!5e0!3m2!1sen!2s!4v1661818326361!5m2!1sen!2s" style="border:0;" allowfullscreen="" class="lozad" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-md-5 form" data-aos="zoom-out" data-aos-duration="1000">
                    <h2>{{ __('index.35') }}</h2>
                    <p>{{ __('index.36') }}</p>
                    <form action="#">
                        <input type="text" name="name" id="name" placeholder="{{ __('index.37') }}">
                        <input type="email" name="email" id="email" placeholder="{{ __('index.38') }}">
                        <input type="text" name="" id="" placeholder="{{ __('index.39') }}">
                        <input type="number" name="phone" id="number" placeholder="{{ __('index.40') }}">
                        <textarea name="message" id="message" placeholder="{{ __('index.41') }}" cols="30" rows="10"></textarea>
                        <input type="submit" name="submit" id="submit" value="{{ __('index.42') }}">

                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="team">
        <div class="container">
            <h2>{{ __('index.46') }}</h2>
            <div class="slider" data-aos="zoom-in" data-aos-duration="1000">
                <div id="owl-carousel" class="team-carousel owl-carousel owl-theme">
                    <div class="slide">
                        <img class="lozad" data-src="{{ asset('/img/slider-1.jpeg') }}" alt="">
                    </div>
                    <div class="slide">
                        <img class="lozad" data-src="{{ asset('/img/slider-2.jpeg') }}" alt="">
                    </div>
                    <div class="slide">
                        <img class="lozad" data-src="{{ asset('/img/slider-3.jpeg') }}" alt="">
                    </div>
                    <div class="slide">
                        <img class="lozad" data-src="{{ asset('/img/slider-4.jpeg') }}" alt="">
                    </div>
                    <div class="slide">
                        <img class="lozad" data-src="{{ asset('/img/slider-5.jpeg') }}" alt="">
                    </div>
                    <div class="slide">
                        <img class="lozad" data-src="{{ asset('/img/slider-6.jpeg') }}" alt="">
                    </div>
                    <div class="slide">
                        <img class="lozad" data-src="{{ asset('/img/slider-7.jpeg') }}" alt="">
                    </div>
                    <div class="slide">
                        <img class="lozad" data-src="{{ asset('/img/slider-8.jpeg') }}" alt="">
                    </div>

                </div>
            </div>
        </div>
    </section>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600&display=swap');
        @import url("https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css");
        @import url('https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;500;600;700;800;900&display=swap');
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('js/main-' . LaravelLocalization::getCurrentLocale() . '.js') }}"></script>


    <script>
        var intervalId = window.setInterval(function() {


            
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

            AOS.init({
                duration: 1000,
                easing: "ease-in-out",
                once: true,
                mirror: false,
            });
            observerw.observe();

        }, 80);
        preloader.remove();

        setTimeout(function() {
            clearInterval(intervalId)

        }, 3000);

        
    </script>