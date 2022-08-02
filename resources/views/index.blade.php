@extends('app')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/' . LaravelLocalization::getCurrentLocale() . '-style.css') }}">
@stop
@section('main')
{{-- Hero --}}
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-content">
                    <h1 data-aos="fade-right" data-aos-duration="1000">
                        {{ __('index.1') }}
                    </h1>
                </div>
                <div class="col-md-8 image-content" data-aos="zoom-in" data-aos-duration="1000">
                    <img src="{{ asset('/img/hero-background.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>
    {{-- Icons --}}
    <section class="icons-section">
        <div class="container">
            <div class="boxes">
                <div class="box" data-aos="zoom-in" data-aos-duration="500">
                    <div class="icon">
                        <img src="{{ asset('/img/icon1.png') }}" alt="">
                    </div>
                    <div class="text-content">
                        <span>+84</span>
                        <h5>{{ __('index.2') }}</h5>
                    </div>
                </div>

                <div class="box" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="icon">
                        <img src="{{ asset('/img/icon2.png') }}" alt="">
                    </div>
                    <div class="text-content">
                        <span>+99</span>
                        <h5>{{ __('index.3') }}</h5>
                    </div>
                </div>

                <div class="box" data-aos="zoom-in" data-aos-duration="1500">
                    <div class="icon">
                        <img src="{{ asset('/img/icon3.png') }}" alt="">
                    </div>
                    <div class="text-content">
                        <span>{{ __('index.4') }}</span>
                        <h5>{{ __('index.5') }}</h5>
                    </div>
                </div>

                <div class="box" data-aos="zoom-in" data-aos-duration="2000">
                    <div class="icon">
                        <img src="{{ asset('/img/icon4.png') }}" alt="">
                    </div>
                    <div class="text-content">
                        <span>+10</span>
                        <h5>{{ __('index.6') }}</h5>
                    </div>
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
                            <img src="{{ asset('/img/slider-1.png') }}" alt="">
                        </div>
                        <div class="slide">
                            <img src="{{ asset('/img/slider-2.png') }}" alt="">
                        </div>
                        <div class="slide">
                            <img src="{{ asset('/img/slider-3.png') }}" alt="">
                        </div>
                        <div class="slide">
                            <img src="{{ asset('/img/slider-1.png') }}" alt="">
                        </div>
                        <div class="slide">
                            <img src="{{ asset('/img/slider-2.png') }}" alt="">
                        </div>
                        <div class="slide">
                            <img src="{{ asset('/img/slider-3.png') }}" alt="">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Message --}}
    <section class="message">
        <div class="container">
            <h2  data-aos="fade-up" data-aos-duration="1000">{{ __('index.10') }}</h2>
            <p>{{ __('index.11') }}</p>
            <div id="owl-carousel" class="owl-carousel owl-theme message-carousel"  data-aos="fade-up" data-aos-duration="1000">
                <div class="slide">
                    <img src="{{ asset('/img/message-1.png') }}" alt="">
                </div>
                <div class="slide">
                    <img src="{{ asset('/img/message-2.png') }}" alt="">
                </div>
                <div class="slide">
                    <img src="{{ asset('/img/message-3.png') }}" alt="">
                </div>
                <div class="slide">
                    <img src="{{ asset('/img/message-4.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="goals">
        <div class="container">
            <div class="row">
                <div class="col-md-7 image-content"  data-aos="zoom-in" data-aos-duration="1000">
                    <img src="{{ asset('/img/goals-image.png') }}" class="desktop" alt="">
                </div>
                <div class="col-md-5 text-content" >
                    <h2  data-aos="zoom-in" data-aos-duration="1000">{{ __('index.12') }}</h2>
                    <img src="{{ asset('/img/goals-image.png') }}" class="mobile" alt="">
                    <ul>
                        <li  data-aos="fade-up" data-aos-duration="1000"><img src="{{ asset('/img/Ellipse.svg') }}" alt=""><p>{{ __('index.13') }}</p> </li>
                        <li  data-aos="fade-up" data-aos-duration="1000"><img src="{{ asset('/img/Ellipse.svg') }}" alt=""><p>{{ __('index.14') }}</p></li>
                        <li  data-aos="fade-up" data-aos-duration="1000"><img src="{{ asset('/img/Ellipse.svg') }}" alt=""><p>{{ __('index.15') }}</p></li>
                        <li  data-aos="fade-up" data-aos-duration="1000"><img src="{{ asset('/img/Ellipse.svg') }}" alt=""><p>{{ __('index.16') }}</p></li>

                    </ul>
                </div>
            </div>
        </div>
    </section>
    {{-- services --}}
    <section class="services" id="services">
        <div class="container">
            <h2  data-aos="fade-up" data-aos-duration="1000">{{ __('index.17') }}</h2>
            <div class="angry-grid">
                <div id="item-0" data-aos="zoom-in" data-aos-duration="500"></div>
                <div id="item-1" data-aos="zoom-in" data-aos-duration="750"></div>
                <div id="item-2" data-aos="zoom-in" data-aos-duration="1000"></div>
                <div id="item-3" data-aos="zoom-in" data-aos-duration="1250"></div>
                <div id="item-4" data-aos="zoom-in" data-aos-duration="1500"></div>
                <div id="item-5" data-aos="zoom-in" data-aos-duration="1750"></div>
                <div id="item-6" data-aos="zoom-in" data-aos-duration="2000"></div>
              </div>
              <p class="services-p">{{ __('index.18') }}</p>
              <ul>
                  <li data-aos="fade-up" data-aos-duration="1000"><img src="{{ asset('/img/arrow.svg') }}" alt=""><p>{{ __('index.19') }}</p></li>
                  <li data-aos="fade-up" data-aos-duration="1000"><img src="{{ asset('/img/arrow.svg') }}" alt=""><p>{{ __('index.20') }}</p></li>
                  <li data-aos="fade-up" data-aos-duration="1000"><img src="{{ asset('/img/arrow.svg') }}" alt=""><p>{{ __('index.21') }}</p></li>
                  <li data-aos="fade-up" data-aos-duration="1000"><img src="{{ asset('/img/arrow.svg') }}" alt=""><p>{{ __('index.22') }}</p></li>
                  <li data-aos="fade-up" data-aos-duration="1000"><img src="{{ asset('/img/arrow.svg') }}" alt=""><p>{{ __('index.23') }}</p></li>
                  <li data-aos="fade-up" data-aos-duration="1000"><img src="{{ asset('/img/arrow.svg') }}" alt=""><p>{{ __('index.24') }}</p></li>
                  <li data-aos="fade-up" data-aos-duration="1000"><img src="{{ asset('/img/arrow.svg') }}" alt=""><p>{{ __('index.25') }}</p></li>
                  <li data-aos="fade-up" data-aos-duration="1000"><img src="{{ asset('/img/arrow.svg') }}" alt=""><p>{{ __('index.26') }}</p></li>
                  <li data-aos="fade-up" data-aos-duration="1000"><img src="{{ asset('/img/arrow.svg') }}" alt=""><p>{{ __('index.27') }}</p></li>
                  <li data-aos="fade-up" data-aos-duration="1000"><img src="{{ asset('/img/arrow.svg') }}" alt=""><p>{{ __('index.28') }}</p></li>
                  <li data-aos="fade-up" data-aos-duration="1000"><img src="{{ asset('/img/arrow.svg') }}" alt=""><p>{{ __('index.29') }}</p></li>
              </ul>
        </div>
    </section>
    {{-- Contact --}}
    <section class="contact-form" id="contact_us">
        <div class="container">
            <div class="row">
                <div class="col-md-7 map"  data-aos="zoom-in" data-aos-duration="1000">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d226.39194560305282!2d46.67227781960658!3d24.786167820519566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2ee3a70733ccaf%3A0xac9fc41130481e41!2z2LTYsdmD2Kkg2KzZhtmJINin2YTYt9io2YrYqQ!5e0!3m2!1sen!2s!4v1658918901016!5m2!1sen!2s" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-md-5 form"  data-aos="zoom-out" data-aos-duration="1000">
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
@stop
