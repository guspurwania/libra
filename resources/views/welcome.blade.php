<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LiBRA (Learning Bot Reminder Assitant)</title>
    <link href="https://fonts.googleapis.com/css?family=Oxygen:400,700|Arimo:400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/landing/dist/css/style.css') }}">
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
    <style type="text/css">
        .hero {
            padding-top: 25px;
        }
    </style>
</head>
<body class="is-boxed has-animations">
    <div class="body-wrap boxed-container">
        {{-- <header class="site-header"> --}}
            <div class="container">
                <div class="site-header-inner">
                    <div class="brand header-brand">
                        <h1 class="m-0">
                            <a href="#">
                                <img src="{{ asset('assets/landing/dist/images/logo.svg') }}" style="padding-top: 20px" alt="Blue logo">
                            </a>
                        </h1>
                    </div>
                </div>
            </div>
        {{-- </header> --}}

        <main>
            <section class="hero">
                <div class="hero-left-decoration is-revealing"></div>
                <div class="hero-right-decoration is-revealing"></div>
                <div class="container">
                    <div class="hero-inner">
                        <div class="hero-copy">
                            <h3 class="hero-title mt-0 is-revealing">LiBRA: Learning Bot Reminder Assistant</h3>
                            <p class="hero-paragraph is-revealing">Our mission is to help the teaching and learning process more effectively and efficiently.</p>
                            <p class="hero-cta mb-0 is-revealing">
                                <a class="button button-primary button-shadow" href="login">Login to Explore More</a>
                            </p>
                        </div>
                        <div class="hero-illustration">
                        </div>
                    </div>
                </div>
            </section>

             <section class="clients section">
                <div class="container">
                    <div class="clients-inner section-inner has-top-divider">
                        <div class="container-sm">
                            <ul class="list-reset mb-0">
                                <li class="is-revealing">
                                    <img src="{{ asset('assets/landing/dist/images/botman.png') }}" width="100">
                                </li>
                                <li class="is-revealing">
                                    <img src="{{ asset('assets/landing/dist/images/laravel.png') }}" width="100">
                                </li>
                                <li class="is-revealing">
                                    <img src="{{ asset('assets/landing/dist/images/telegram.png') }}" width="100">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section> 

             <section class="features section text-center">
                <div class="container">
                    <div class="features-inner section-inner has-top-divider">
                        <div class="features-header text-center">
                            <div class="container-sm">
                                <h2 class="section-title mt-0">We are here as your Virtual Reminder Assistant</h2>
                                <p class="section-paragraph mb-0">Your virtual assistant will remind you of your class schedule, so you can manage your time better.</p>
                            </div>
                        </div>
                        <div class="features-wrap">
                            <div class="feature is-revealing">
                                <div class="feature-inner">
                                    <div class="feature-icon">
                                        <img src="{{ asset('assets/landing/dist/images/feature-icon-02.svg') }}" alt="Feature 02">
                                    </div>
                                    <h4 class="feature-title">Manage Schedule</h4>
                                    <p class="text-sm">You can manage your schedule through a special dashboard provided by the application.</p>
                                </div>
                            </div>
                            <div class="feature is-revealing">
                                <div class="feature-inner">
                                    <div class="feature-icon">
                                        <img src="{{ asset('assets/landing/dist/images/feature-icon-03.svg') }}" alt="Feature 03">
                                    </div>
                                    <h4 class="feature-title">Reminder Schedule</h4>
                                    <p class="text-sm">Bots provided by the application will notify you when there is a class or teaching schedule.</p>
                                </div>
                            </div>
                            <div class="feature is-revealing">
                                <div class="feature-inner">
                                    <div class="feature-icon">
                                        <img src="{{ asset('assets/landing/dist/images/feature-icon-04.svg') }}" alt="Feature 01">
                                    </div>
                                    <h4 class="feature-title">Broadcast</h4>
                                    <p class="text-sm">Bots provided by the application will spread the message to all participants who join the class to attend the class.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> 

            <section class="features-tabs section">
                <div class="container">
                    <div class="features-tabs-inner section-inner has-top-divider">
                        <div class="tabs-container">
                            <ul class="tabs-links">
                                <li class="is-revealing">
                                    <a href="#tab-1" class="tab-link is-active">
                                        <img src="{{ asset('assets/landing/dist/images/tabs-icon-01.svg') }}" alt="Tabs icon 01">
                                        <span class="h4 m-0">Application Dashboard</span>
                                    </a>
                                </li>
                                <li class="is-revealing">
                                    <a href="#tab-2" class="tab-link">
                                        <img src="{{ asset('assets/landing/dist/images/tabs-icon-02.svg') }}" alt="Tabs icon 02">
                                        <span class="h4 m-0">DeBoRA (Dosen Bot Reminder Asistant)</span>
                                    </a>
                                </li>
                                <li class="is-revealing">
                                    <a href="#tab-3" class="tab-link">
                                        <img src="{{ asset('assets/landing/dist/images/tabs-icon-03.svg') }}" alt="Tabs icon 03">
                                        <span class="h4 m-0">SoBAt (Student Bot Broadcast Asistant)</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="tabs-content">
                                <div id="tab-1" class="tab-panel is-active">
                                    <h2>Application Dashboard</h2>
                                    <p>We provide a dashboard to manage your schedule. You can input your schedule according to your needs.</p>
                                    <p class="mb-0">Participants or students who take your class can enter by entering the enrollment key</p>
                                    <br />
                                    <p class="hero-cta mb-0 is-revealing">
                                        <a class="button button-primary button-shadow" href="register/lecture">Register as a Lecturer</a>
                                        <a class="button button-primary button-shadow" href="register/student">Register as a Student</a>
                                    </p>
                                </div>
                                <div id="tab-2" class="tab-panel">
                                    <h2>DeBoRA (Dosen Bot Reminder Asistant)</h2>
                                    <p>We provide bots for those of you who register as lecturers, this bot will interact with you to remind you of your schedule</p>
                                    <p class="mb-0">You can tell whether you will teach or not, and the bot will notify the participants</p>
                                </div>
                                <div id="tab-3" class="tab-panel">
                                    <h2>SoBAt (Student Bot Broadcast Asistant)</h2>
                                    <p>We provide bots for those of you who register as students, this bot will notify you of the class schedule you are taking</p>
                                    <p class="mb-0">When there is no class because the teacher is unable to attend, the bot will inform you</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {{-- <section class="testimonials section">
                <div class="container">
                    <div class="testimonials-inner section-inner">
                        <div class="testimonials-header text-center text-light">
                            <h2 class="section-title mt-0">Quotes</h2>
                        </div>
                        <div class="testimonials-wrap">
                            <div class="testimonial text-sm is-revealing">
                                <div class="testimonial-inner">
                                    <div class="testimonial-main">
                                        <div class="testimonial-body">
                                            <p>If we are serious about our human wellbeing - from local communities to the global world economy - we need to now reconnect our entire world to the planet</p>
                                        </div>
                                    </div>
                                    <div class="testimonial-footer">
                                        <div class="testimonial-name"><a href="#">Johann Rockström</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial text-sm is-revealing">
                                <div class="testimonial-inner">
                                    <div class="testimonial-main">
                                        <div class="testimonial-body">
                                            <p>Every dollar spent on nuclear is one less dollar spent on clean renewable energy and one more dollar spent on making the world a comparatively dirtier and a more dangerous place, because nuclear power and nuclear weapons go hand in hand.</p>
                                        </div>
                                    </div>
                                    <div class="testimonial-footer">
                                        <div class="testimonial-name"><a href="#">Mark Z. Jacobson</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial text-sm is-revealing">
                                <div class="testimonial-inner">
                                    <div class="testimonial-main">
                                        <div class="testimonial-body">
                                            <p>There is an urgent need to stop subsidizing the fossil fuel industry, dramatically reduce wasted energy, and significantly shift our power supplies from oil, coal, and natural gas to wind, solar, geothermal, and other renewable energy sources.</p>
                                        </div>
                                    </div>
                                    <div class="testimonial-footer">
                                        <div class="testimonial-name"><a href="#">Bill McKibben</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial text-sm is-revealing">
                                <div class="testimonial-inner">
                                    <div class="testimonial-main">
                                        <div class="testimonial-body">
                                            <p>Renewable energy is an essential part of our strategy of decarbonization, decentralization, as well as digitalization of energy.</p>
                                        </div>
                                    </div>
                                    <div class="testimonial-footer">
                                        <div class="testimonial-name"><a href="#">Isabelle Kocher</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial text-sm is-revealing">
                                <div class="testimonial-inner">
                                    <div class="testimonial-main">
                                        <div class="testimonial-body">
                                            <p>The great hope for a quick and sweeping transition to renewable energy is wishful thinking.</p>
                                        </div>
                                    </div>
                                    <div class="testimonial-footer">
                                        <div class="testimonial-name"><a href="#">Vaclav Smil</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial text-sm is-revealing">
                                <div class="testimonial-inner">
                                    <div class="testimonial-main">
                                        <div class="testimonial-body">
                                            <p>The great hope for a quick and sweeping transition to renewable energy is wishful thinking.</p>
                                        </div>
                                    </div>
                                    <div class="testimonial-footer">
                                        <div class="testimonial-name"><a href="#">Vaclav Smil</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}

            {{-- <section class="pricing section">
                <div class="container">
                    <div class="pricing-inner section-inner">
                        <h2 class="section-title mt-0 text-center">Pricing</h2>
                        <div>
                            <div class="pricing-tables-wrap">
                                <div class="pricing-table is-revealing">
                                    <div class="pricing-table-inner">
                                        <div class="pricing-table-main">
                                            <div class="pricing-table-header mb-24 pb-24">
                                                <div class="pricing-table-title h4 mt-0 mb-16">Small Property</div>
                                                <div class="pricing-table-price"><span class="pricing-table-price-currency">IDR</span><span class="pricing-table-price-amount h1">500.000</span>/m</div>
                                            </div>
                                            <ul class="pricing-table-features list-reset text-xs">
                                                <li>
                                                    <span>1 Microcontroller/Device</span>
                                                </li>
                                                <li>
                                                    <span>1 Measurement Point</span>
                                                </li>
                                                <li>
                                                    <span>1 Property</span>
                                                </li>
                                                <li>
                                                    <span>< 3 room(s)</span>
                                                </li>
                                                <li>
                                                    <span>Software Monitoring</span>
                                                </li>
                                                <li>
                                                    <span>Eco-Bot Service</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="pricing-table-cta">
                                            <a class="button button-secondary button-shadow button-block" href="#">Get started</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="pricing-table is-revealing">
                                    <div class="pricing-table-inner">
                                        <div class="pricing-table-main">
                                            <div class="pricing-table-header mb-24 pb-24">
                                                <div class="pricing-table-title h4 mt-0 mb-16">Large Property</div>
                                                <div class="pricing-table-price"><span class="pricing-table-price-currency">IDR</span><span class="pricing-table-price-amount h1">1.500.000</span>/m</div>
                                            </div>
                                            <ul class="pricing-table-features list-reset text-xs">
                                                <li>
                                                    <span>4 Microcontroller/Device</span>
                                                </li>
                                                <li>
                                                    <span>4 Measurement Point</span>
                                                </li>
                                                <li>
                                                    <span>Unlimited Property</span>
                                                </li>
                                                <li>
                                                    <span>Unlimited room(s)</span>
                                                </li>
                                                <li>
                                                    <span>Software Monitoring</span>
                                                </li>
                                                <li>
                                                    <span>Eco-Bot Service</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="pricing-table-cta">
                                            <a class="button button-primary button-shadow button-block" href="#">Get started</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        {{-- <div class="pricing-faqs container-sm is-revealing">
                            <h4 class="mt-40 mb-32">FAQs</h4>
                            <ul class="accordion">
                                <li>
                                    <div class="accordion-title">
                                        <span>In a professional context it often happens that private?</span>
                                        <div class="accordion-icon"></div>
                                    </div>
                                    <div class="accordion-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="accordion-title">
                                        <span>Lorem ipsum dolor sit amet, consectetur</span>
                                        <div class="accordion-icon"></div>
                                    </div>
                                    <div class="accordion-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Ut enim ad minim veniam semper. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="accordion-title">
                                        <span>In a professional context it often happens that private?</span>
                                        <div class="accordion-icon"></div>
                                    </div>
                                    <div class="accordion-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="accordion-title">
                                        <span>Lorem ipsum dolor sit amet, consectetur</span>
                                        <div class="accordion-icon"></div>
                                    </div>
                                    <div class="accordion-body">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Ut enim ad minim veniam semper. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                </li>
                            </ul>
                        </div> --}}
                    {{-- </div>
                </div>
            </section> --}}

            <section class="cta section">
                <div class="container">
                    <div class="cta-inner section-inner is-revealing">
                        {{-- <h3 class="section-title mt-0">Still not convinced?</h3>
                        <div class="cta-cta">
                            <a class="button button-primary button-shadow" href="#">Schedule a live demo</a>
                        </div> --}}
                    </div>
                </div>
            </section>
        </main>

        <footer class="site-footer">
            <div class="container">
                <div class="site-footer-inner">
                    <div class="brand footer-brand">
                        <a href="#">
                            <img src="{{ asset('assets/landing/dist/images/logo.svg') }}" alt="Blue logo">
                        </a>
                    </div>
                    <ul class="footer-links list-reset">
                        <li>
                            <a href="#">Contact</a>
                        </li>
                        <li>
                            <a href="#">About us</a>
                        </li>
                        <li>
                            <a href="#">FAQ's</a>
                        </li>
                        <li>
                            <a href="#">Support</a>
                        </li>
                    </ul>
                    <ul class="footer-social-links list-reset">
                        <li>
                            <a href="#">
                                <span class="screen-reader-text">Facebook</span>
                                <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.023 16L6 9H3V6h3V4c0-2.7 1.672-4 4.08-4 1.153 0 2.144.086 2.433.124v2.821h-1.67c-1.31 0-1.563.623-1.563 1.536V6H13l-1 3H9.28v7H6.023z" fill="#FFF"/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="screen-reader-text">Twitter</span>
                                <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M16 3c-.6.3-1.2.4-1.9.5.7-.4 1.2-1 1.4-1.8-.6.4-1.3.6-2.1.8-.6-.6-1.5-1-2.4-1-1.7 0-3.2 1.5-3.2 3.3 0 .3 0 .5.1.7-2.7-.1-5.2-1.4-6.8-3.4-.3.5-.4 1-.4 1.7 0 1.1.6 2.1 1.5 2.7-.5 0-1-.2-1.5-.4C.7 7.7 1.8 9 3.3 9.3c-.3.1-.6.1-.9.1-.2 0-.4 0-.6-.1.4 1.3 1.6 2.3 3.1 2.3-1.1.9-2.5 1.4-4.1 1.4H0c1.5.9 3.2 1.5 5 1.5 6 0 9.3-5 9.3-9.3v-.4C15 4.3 15.6 3.7 16 3z" fill="#FFF"/>
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="screen-reader-text">Google</span>
                                <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.9 7v2.4H12c-.2 1-1.2 3-4 3-2.4 0-4.3-2-4.3-4.4 0-2.4 2-4.4 4.3-4.4 1.4 0 2.3.6 2.8 1.1l1.9-1.8C11.5 1.7 9.9 1 8 1 4.1 1 1 4.1 1 8s3.1 7 7 7c4 0 6.7-2.8 6.7-6.8 0-.5 0-.8-.1-1.2H7.9z" fill="#FFF"/>
                                </svg>
                            </a>
                        </li>
                    </ul>
                    <div class="footer-copyright">&copy; 2019 LiBRA, all rights reserved</div>
                </div>
            </div>
        </footer>
    </div>

    <script src="{{ asset('assets/landing/dist/js/main.min.js') }}"></script>
</body>
</html>
