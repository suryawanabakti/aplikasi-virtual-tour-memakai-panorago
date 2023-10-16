<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="/styles.css" />
    <title>Web Design Mastery | Virtual Tour</title>
</head>

<body>
    <nav>
        <div class="nav__logo">Virtual Tour<span>.</span></div>
        <ul class="nav__links">
            <li class="link"><a href="#">Home</a></li>
            <li class="link"><a href="#trip">Destinations</a></li>
        </ul>
        <a class="btn" href="/login">Login As Admin</a>
    </nav>
    <header>
        <div class="section__container header__container">
            <div class="header__image">
                <img src="/assets2/header-1.jpg" alt="header" />
                <img src="/assets2/header-2.jpg" alt="header" />
            </div>
            <div class="header__content">
                <div>
                    {{-- <p class="sub__header">Book Now</p> --}}
                    <h1>Destinasi Wisata Air Terjun Kabupaten Maros</h1>
                    <p class="section__subtitle">
                        Make your travel more enjoyable with us.
                    </p>
                    {{-- <div class="action__btns">

                        <div class="story">
                            <div class="video__image">
                                <img src="/assets2/story.jpg" alt="story" />
                                <span><i class="ri-play-fill"></i></span>
                            </div>
                            <span>Watch our story</span>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </header>

    {{-- <section class="section__container destination__container">
        <div class="section__header">
            <div>
                <h2 class="section__title">Explore top destinations</h2>
                <p class="section__subtitle">
                    Explore your suitable and dream places around the world. Here you
                    can find your right destination.
                </p>
            </div>
            <div class="destination__nav">
                <span><i class="ri-arrow-left-s-line"></i></span>
                <span><i class="ri-arrow-right-s-line"></i></span>
            </div>
        </div>
        <div class="destination__grid">
            <div class="destination__card">
                <img src="/assets2/destination-1.jpg" alt="destination" />
                <div class="destination__details">
                    <p class="destination__title">Banff</p>
                    <p class="destination__subtitle">Canada</p>
                </div>
            </div>
            <div class="destination__card">
                <img src="/assets2/destination-2.jpg" alt="destination" />
                <div class="destination__details">
                    <p class="destination__title">Machu Picchu</p>
                    <p class="destination__subtitle">Peru</p>
                </div>
            </div>
            <div class="destination__card">
                <img src="/assets2/destination-3.jpg" alt="destination" />
                <div class="destination__details">
                    <p class="destination__title">Lauterbrunnen</p>
                    <p class="destination__subtitle">Switzerland</p>
                </div>
            </div>
            <div class="destination__card">
                <img src="/assets2/destination-4.jpg" alt="destination" />
                <div class="destination__details">
                    <p class="destination__title">Zhangjiajie</p>
                    <p class="destination__subtitle">China</p>
                </div>
            </div>
        </div>
    </section> --}}

    <section class="trip" id="trip">
        <div class="section__container trip__container">
            <h2 class="section__title">Destinations</h2>
            <p class="section__subtitle">
                Explore your suitable and dream places around the world. Here you can
                find your right destination.
            </p>
            <div class="trip__grid">
                @foreach ($wisatas as $wisata)
                    <div class="trip__card">
                        <img src="/storage/gambar-wisata/{{ $wisata->gambar }}" alt="trip" />
                        <div class="trip__details">
                            <p>{{ $wisata->nama_wisata }}, {{ $wisata->kabupatenkota }}</p>
                            <small>{{ $wisata->deskripsi }}</small>

                            <div class="booking__price">
                                <small>{{ $wisata->kabupatenkota }}</small>
                                <a class="book__now" href="{{ $wisata->virtual_link }}">Lihat Virtual</a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>


        </div>
    </section>
    {{-- 
    <section class="gallary">
        <div class="section__container gallary__container">
            <div class="image__gallary">
                <div class="gallary__col">
                    <img src="/assets2/gallery-1.jpg" alt="gallary" />
                </div>
                <div class="gallary__col">
                    <img src="/assets2/gallery-2.jpg" alt="gallary" />
                    <img src="/assets2/gallery-3.jpg" alt="gallary" />
                </div>
            </div>
            <div class="gallary__content">
                <div>
                    <h2 class="section__title">
                        Our trip gallary that will inspire you
                    </h2>
                    <p class="section__subtitle">
                        Explore your suitable and dream places around the world. Here you
                        can find your right destination.
                    </p>
                    <button class="btn">View All</button>
                </div>
            </div>
        </div>
    </section> --}}


    {{-- 
    <footer class="footer">
        <div class="section__container footer__container">
            <div class="footer__col">
                <h3>Virtual Tour<span>.</span></h3>
                <p>
                    Explore your suitable and dream places around the world. Here you
                    can find your right destination.
                </p>
            </div>
            <div class="footer__col">
                <h4>Support</h4>
                <p>FAQs</p>
                <p>Terms & Conditions</p>
                <p>Privacy Policy</p>
                <p>Contact Us</p>
            </div>
            <div class="footer__col">
                <h4>Address</h4>
                <p>
                    <span>Address:</span> 280 Wilson Street, Cima, California, 92323,
                    United States
                </p>
                <p><span>Email:</span> info@pathway.com</p>
                <p><span>Phone:</span> +91 9876543210</p>
            </div>
        </div>
        <div class="footer__bar">
            Copyright © 2023 Web Design Mastery. All rights reserved.
        </div>
    </footer> --}}
</body>

</html>
