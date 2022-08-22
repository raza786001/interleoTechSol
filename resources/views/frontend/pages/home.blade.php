
@extends('frontend.layout.app')

@section('content')

@include('frontend.components.banner')

<!--Services Section-->
<section class="services-section-two">
<div class="gradient-layer"></div>

<div class="auto-container">
    <div class="sec-title centered">
        <div class="upper-text">Inter Leo IT Services</div>
        <h2><strong>Solutions And Focus Areas</strong></h2>
        <div class="lower-text">Digital Transformation By IT Solutions laboris nisi ut aliquip irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident sunt in culpa</div>
    </div>
    <div class="services-box">
        <div class="row clearfix">
            <!--Service Block-->
            <div class="service-block-three col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="icon-outer">
                        <span class="icon-bg"></span>
                        <div class="icon-box wow zoomInStable" data-wow-delay="0ms" data-wow-duration="2000ms"><span class="themify-cloud"></span></div>
                    </div>
                    <h3><a href="services.html">Cloud Integration</a></h3>
                    <div class="text">Eiusmod sed incididunt labore dolore magna sed aliquatenim minim veniam ipsum nostrud exercitation.</div>
                    <div class="more-link"><a href="services.html"><span class="fa fa-arrow-right"></span></a></div>
                </div>
            </div>
            <!--Service Block-->
            <div class="service-block-three col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="icon-outer">
                        <span class="icon-bg"></span>
                        <div class="icon-box wow zoomInStable" data-wow-delay="300ms" data-wow-duration="2000ms"><span class="themify-desktop"></span></div>
                    </div>
                    <h3><a href="services.html">Product Engineering</a></h3>
                    <div class="text">Eiusmod sed incididunt labore dolore magna sed aliquatenim minim veniam ipsum nostrud exercitation.</div>
                    <div class="more-link"><a href="services.html"><span class="fa fa-arrow-right"></span></a></div>
                </div>
            </div>
            <!--Service Block-->
            <div class="service-block-three col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="icon-outer">
                        <span class="icon-bg"></span>
                        <div class="icon-box wow zoomInStable" data-wow-delay="600ms" data-wow-duration="2000ms"><span class="themify-shield"></span></div>
                    </div>
                    <h3><a href="services.html">Business Security</a></h3>
                    <div class="text">Eiusmod sed incididunt labore dolore magna sed aliquatenim minim veniam ipsum nostrud exercitation.</div>
                    <div class="more-link"><a href="services.html"><span class="fa fa-arrow-right"></span></a></div>
                </div>
            </div>
            <!--Service Block-->
            <div class="service-block-three col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="icon-outer">
                        <span class="icon-bg"></span>
                        <div class="icon-box wow zoomInStable" data-wow-delay="0ms" data-wow-duration="2000ms"><span class="themify-folder"></span></div>
                    </div>
                    <h3><a href="services.html">IT Startup Projects</a></h3>
                    <div class="text">Eiusmod sed incididunt labore dolore magna sed aliquatenim minim veniam ipsum nostrud exercitation.</div>
                    <div class="more-link"><a href="services.html"><span class="fa fa-arrow-right"></span></a></div>
                </div>
            </div>
            <!--Service Block-->
            <div class="service-block-three col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="icon-outer">
                        <span class="icon-bg"></span>
                        <div class="icon-box wow zoomInStable" data-wow-delay="300ms" data-wow-duration="2000ms"><span class="themify-server"></span></div>
                    </div>
                    <h3><a href="services.html">Data Infrastructure</a></h3>
                    <div class="text">Eiusmod sed incididunt labore dolore magna sed aliquatenim minim veniam ipsum nostrud exercitation.</div>
                    <div class="more-link"><a href="services.html"><span class="fa fa-arrow-right"></span></a></div>
                </div>
            </div>
            <!--Service Block-->
            <div class="service-block-three col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="icon-outer">
                        <span class="icon-bg"></span>
                        <div class="icon-box wow zoomInStable" data-wow-delay="600ms" data-wow-duration="2000ms"><span class="themify-headphone-alt"></span></div>
                    </div>
                    <h3><a href="#">Smart Communication</a></h3>
                    <div class="text">Eiusmod sed incididunt labore dolore magna sed aliquatenim minim veniam ipsum nostrud exercitation.</div>
                    <div class="more-link"><a href="#"><span class="fa fa-arrow-right"></span></a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-text">
        <div class="text">We're ready to discover and unlock your potential. <a href="#"><strong>Get The Solutions</strong></a> or Call us Today! <a href="tel:+92-332-624-0428"><strong>+92-332-624-0428</strong></a></div>
    </div>
</div>
</section>

<!--Video Section-->
<section class="video-section">
<div class="image-layer" style="background-image: url({{ asset('assets/frontend/images/background/image-3.jpg')}});"></div>
<div class="auto-container">
    <div class="video-link">
        <a href="https://www.youtube.com/watch?v=Get7rqXYrbQ" class="theme-btn lightbox-image"><span class="flaticon-play-button"></span></a>
    </div>
    <h2>Inter Leo IT Solutions will get you on the move towards your goals.</h2>
</div>
</section>

<!--About Section Two-->
<section class="about-section-two">
<div class="pattern-layer"></div>

<div class="auto-container">
    <div class="row clearfix">
        <!--Left Column-->
        <div class="left-column col-lg-6 col-md-12 col-sm-12">
            <div class="inner">
                <figure class="image">
                    <img src="{{ asset('assets/frontend/images/resource/featured-image-2.jpg')}}" alt="" title="">
                    <div class="over-icon  wow zoomInStable" data-wow-delay="0ms" data-wow-duration="2500ms">
                        <img src="{{ asset('assets/frontend/images/resource/about-logo-image.jpg')}}" alt="" title="">
                    </div>
                </figure>
                <div class="sec-title">
                    <div class="upper-text">Inter Leo - Welcome to IT Solutions</div>
                    <h2>Let us be your next <br><strong>Preferred IT Partner</strong></h2>
                    <div class="lower-text">Dolor sit amet, consectetur adipisicing elitm sed do eiusmod temp sed incididunt ut labore etsu dolore magna aliquatenim minim veniam quis ipsum nostrud exer citation ullamco laboris nisi ut aliquip ex ea consequat.</div>
                </div>

                <!--Features-->
                <div class="features">
                    <div class="row clearfix">
                        <!--Feature Block-->
                        <div class="feature-block col-lg-4 col-md-4 col-sm-6">
                            <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                                <div class="icon-box">
                                    <span class="flaticon-code"></span>
                                </div>
                                <div class="title">Business <br>Intelligence</div>
                            </div>
                        </div>
                        <!--Feature Block-->
                        <div class="feature-block col-lg-4 col-md-4 col-sm-6">
                            <div class="inner-box wow fadeInLeft" data-wow-delay="150ms" data-wow-duration="1500ms">
                                <div class="icon-box">
                                    <span class="flaticon-report"></span>
                                </div>
                                <div class="title">Desktop <br>Softwares</div>
                            </div>
                        </div>
                        <!--Feature Block-->
                        <div class="feature-block col-lg-4 col-md-4 col-sm-6">
                            <div class="inner-box wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                                <div class="icon-box">
                                    <span class="flaticon-consult"></span>
                                </div>
                                <div class="title">Dynamic <br>Consulting</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!--Right Column-->
        <div class="right-column col-lg-6 col-md-12 col-sm-12">
            <div class="inner">
                <figure class="image">
                    <img src="{{ asset('assets/frontend/images/resource/featured-image-3.jpg')}}" alt="" title="">
                </figure>
                <div class="text-content">
                    <h3>Company Mission And Vision</h3>
                    <p>Magna aliquatenim minim veniam quis ipsum nostrud exer citation ullamco laboris aliquip ex ea commodo ipsum consequat duis aute irure dolorn.</p>
                    <ul class="list-style-one">
                        <li>We are committed to providing quality IT Services</li>
                        <li>Our benefits are endless for local IT Companies &amp; Startups</li>
                        <li>Really know the true needs and expectations of customers</li>
                        <li>Talented &amp; experienced management solutions for IT</li>
                        <li>Processes of achieving the excellence and continue improvements</li>
                    </ul>
                </div>

            </div>
        </div>

    </div>
</div>
</section>

<!--Fun Facts Section-->
<section class="fun-facts-section alternate">
<div class="map-pattern-layer"></div>

<div class="auto-container">
    <div class="title-box">
        <h1>The Number Speaks</h1>
    </div>
    <div class="fact-counter">

        <div class="row clearfix">
            <!--Column-->
            <div class="counter-column col-lg-4 col-md-4 col-sm-12">
                <div class="inner wow fadeInUp" data-wow-delay="0ms">
                    <div class="upper-title">System Integrations Done</div>
                    <div class="count-box"><span class="count-text" data-speed="1000" data-stop="1458">0</span></div>
                    <div class="counter-title">for customers</div>
                </div>
            </div>

            <!--Column-->
            <div class="counter-column col-lg-4 col-md-4 col-sm-12 wow fadeInUp">
                <div class="inner wow fadeInUp" data-wow-delay="300ms">
                    <div class="upper-title">Powerful Team to Focus</div>
                    <div class="count-box"><span class="count-text" data-speed="1000" data-stop="160">0</span>+</div>
                    <div class="counter-title">Expert Members</div>
                </div>
            </div>

            <!--Column-->
            <div class="counter-column col-lg-4 col-md-4 col-sm-12 wow fadeInUp">
                <div class="inner wow fadeInUp" data-wow-delay="600ms">
                    <div class="upper-title">Launched Case Studies</div>
                    <div class="count-box"><span class="count-text" data-speed="1000" data-stop="1080">0</span></div>
                    <div class="counter-title">Fully Launched</div>
                </div>
            </div>

        </div>
    </div>
</div>
</section>

<!--Cases Section Two-->
<section class="cases-section-two">
<div class="gradient-layer"></div>

<div class="auto-container">

    <div class="sec-title centered">
        <div class="upper-text">IT Related CaseStudies & Works</div>
        <h2><strong>IT Solutions & Projects</strong></h2>
    </div>

    <!--Carousel Box-->
    <div class="carousel-box">
        <div class="cases-carousel-two theme-carousel owl-theme owl-carousel" data-options='{"loop": true, "margin": 30, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 7000, "smartSpeed": 700, "responsive":{ "0" :{ "items": "1" }, "800" :{ "items" : "1" } , "991":{ "items" : "1" }, "1024":{ "items" : "1" }}}'>
            <!-- Slide Item -->
            <div class="slide-item">
                <!--Case Block-->
                <div class="case-block-two">
                    <div class="inner-box clearfix">
                        <div class="image-column">
                            <div class="image-layer" style="background-image: url({{ asset('assets/frontend/images/resource/case-image-3.jpg')}});"></div>
                            <figure class="image-box">
                                <img src="{{ asset('assets/frontend/images/resource/case-image-3.jpg')}}" alt="" title="">
                            </figure>
                            <a class="link-layer" href="#"></a>
                        </div>
                        <div class="content-column">
                            <div class="content-box">
                                <div class="title-box">
                                    <h3><a href="#">Data Machine Learning</a></h3>
                                    <div class="sub-text">Artificial Intelligence</div>
                                </div>
                                <div class="text-content">
                                    <div class="text">Eiusmod sed incididunt labore magna sed aliquatenim veniam ipsum nostrud exercit minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip consequat. Duis aute irure dolor in reprehenderit.</div>
                                    <div class="link-box"><a href="#">View Case Study <span class="arrow fa fa-arrow-right"></span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide Item -->
            <div class="slide-item">
                <!--Case Block-->
                <div class="case-block-two">
                    <div class="inner-box clearfix">
                        <div class="image-column">
                            <div class="image-layer" style="background-image: url({{ asset('assets/frontend/images/resource/case-image-3.jpg')}});"></div>
                            <figure class="image-box">
                                <img src="{{ asset('assets/frontend/images/resource/case-image-3.jpg')}}" alt="" title="">
                            </figure>
                            <a class="link-layer" href="#"></a>
                        </div>
                        <div class="content-column">
                            <div class="content-box">
                                <div class="title-box">
                                    <h3><a href="#">Workflow Management</a></h3>
                                    <div class="sub-text">IT Networking</div>
                                </div>
                                <div class="text-content">
                                    <div class="text">Eiusmod sed incididunt labore magna sed aliquatenim veniam ipsum nostrud exercit minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip consequat. Duis aute irure dolor in reprehenderit.</div>
                                    <div class="link-box"><a href="#">View Case Study <span class="arrow fa fa-arrow-right"></span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide Item -->
            <div class="slide-item">
                <!--Case Block-->
                <div class="case-block-two">
                    <div class="inner-box clearfix">
                        <div class="image-column">
                            <div class="image-layer" style="background-image: url({{ asset('assets/frontend/images/resource/case-image-3.jpg')}});"></div>
                            <figure class="image-box">
                                <img src="{{ asset('assets/frontend/images/resource/case-image-3.jpg')}}" alt="" title="">
                            </figure>
                            <a class="link-layer" href="#"></a>
                        </div>
                        <div class="content-column">
                            <div class="content-box">
                                <div class="title-box">
                                    <h3><a href="#">Data Machine Learning</a></h3>
                                    <div class="sub-text">Artificial Intelligence</div>
                                </div>
                                <div class="text-content">
                                    <div class="text">Eiusmod sed incididunt labore magna sed aliquatenim veniam ipsum nostrud exercit minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip consequat. Duis aute irure dolor in reprehenderit.</div>
                                    <div class="link-box"><a href="#">View Case Study <span class="arrow fa fa-arrow-right"></span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide Item -->
            <div class="slide-item">
                <!--Case Block-->
                <div class="case-block-two">
                    <div class="inner-box clearfix">
                        <div class="image-column">
                            <div class="image-layer" style="background-image: url({{ asset('assets/frontend/images/resource/case-image-3.jpg')}});"></div>
                            <figure class="image-box">
                                <img src="{{ asset('assets/frontend/images/resource/case-image-3.jpg')}}" alt="" title="">
                            </figure>
                            <a class="link-layer" href="#"></a>
                        </div>
                        <div class="content-column">
                            <div class="content-box">
                                <div class="title-box">
                                    <h3><a href="#">Workflow Management</a></h3>
                                    <div class="sub-text">IT Networking</div>
                                </div>
                                <div class="text-content">
                                    <div class="text">Eiusmod sed incididunt labore magna sed aliquatenim veniam ipsum nostrud exercit minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip consequat. Duis aute irure dolor in reprehenderit.</div>
                                    <div class="link-box"><a href="#">View Case Study <span class="arrow fa fa-arrow-right"></span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Slide Item -->
            <div class="slide-item">
                <!--Case Block-->
                <div class="case-block-two">
                    <div class="inner-box clearfix">
                        <div class="image-column">
                            <div class="image-layer" style="background-image: url({{ asset('assets/frontend/images/resource/case-image-3.jpg')}});"></div>
                            <figure class="image-box">
                                <img src="{{ asset('assets/frontend/images/resource/case-image-3.jpg')}}" alt="" title="">
                            </figure>
                            <a class="link-layer" href="#"></a>
                        </div>
                        <div class="content-column">
                            <div class="content-box">
                                <div class="title-box">
                                    <h3><a href="#">Workflow Management</a></h3>
                                    <div class="sub-text">IT Networking</div>
                                </div>
                                <div class="text-content">
                                    <div class="text">Eiusmod sed incididunt labore magna sed aliquatenim veniam ipsum nostrud exercit minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip consequat. Duis aute irure dolor in reprehenderit.</div>
                                    <div class="link-box"><a href="#">View Case Study <span class="arrow fa fa-arrow-right"></span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div><!--End Carousel Box-->

</div>

<div class="sponsors-outer">
    <!--Sponsors-->
    <div class="auto-container">
        <!--Sponsors Carousel-->
        <div class="sponsors-carousel theme-carousel owl-theme owl-carousel" data-options='{"loop": true, "margin": 30, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 500, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "2" }, "768" :{ "items" : "3" } , "800":{ "items" : "3" }, "1024":{ "items" : "4" }, "1200":{ "items" : "5" }}}'>
            <div class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('assets/frontend/images/clients/6.jpg')}}" alt=""></a></figure></div>
            <div class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('assets/frontend/images/clients/7.jpg')}}" alt=""></a></figure></div>
            <div class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('assets/frontend/images/clients/8.jpg')}}" alt=""></a></figure></div>
            <div class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('assets/frontend/images/clients/9.jpg')}}" alt=""></a></figure></div>
            <div class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('assets/frontend/images/clients/10.jpg')}}" alt=""></a></figure></div>
            <div class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('assets/frontend/images/clients/6.jpg')}}" alt=""></a></figure></div>
            <div class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('assets/frontend/images/clients/7.jpg')}}" alt=""></a></figure></div>
            <div class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('assets/frontend/images/clients/8.jpg')}}" alt=""></a></figure></div>
            <div class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('assets/frontend/images/clients/9.jpg')}}" alt=""></a></figure></div>
            <div class="slide-item"><figure class="image-box"><a href="#"><img src="{{ asset('assets/frontend/images/clients/10.jpg')}}" alt=""></a></figure></div>
        </div>
    </div>
</div>
</section>

<!--Team Section-->
<section class="team-section">
<div class="pattern-layer"></div>

<div class="auto-container">
    <div class="row clearfix">
        <!--Column-->
        <div class="column col-lg-6 col-md-12 col-sm-12">
            <div class="inner">
                <div class="sec-title">
                    <div class="upper-text">Ambitious & Dedicated Team</div>
                    <h2>ZenTech <strong>IT Experts</strong></h2>
                </div>
                <div class="text-content">
                    <div class="text">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet velit sed quia non numquam eius modi tempora incidunt labore dolore magna aliqua enim minim veniam, quis nostrud exercitation ullamco.</div>
                </div>

                <div class="team-block wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <a href="#"><img src="{{ asset('assets/frontend/images/resource/team-image-1.jpg')}}" alt=""></a>
                        </div>
                        <div class="title-box">
                            <h3 class="name"><a href="#">Benjamin Zara</a></h3>
                            <div class="designation">Marketing Manager</div>
                        </div>
                        <div class="text">Veniam quis nostrud exercitaon ullam laboris nis aliquip sed conseqal.</div>
                    </div>
                </div>

            </div>
        </div>

        <!--Column-->
        <div class="column col-lg-6 col-md-12 col-sm-12">
            <div class="inner">

                <div class="team-block wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <a href="#"><img src="{{ asset('assets/frontend/images/resource/team-image-2.jpg')}}" alt=""></a>
                        </div>
                        <div class="title-box">
                            <h3 class="name"><a href="#">Amayda Tim</a></h3>
                            <div class="designation">Team Leader, IT</div>
                        </div>
                        <div class="text">Veniam quis nostrud exercitaon ullam laboris nis aliquip sed conseqal.</div>
                    </div>
                </div>

                <div class="team-block wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <a href="#"><img src="{{ asset('assets/frontend/images/resource/team-image-3.jpg')}}" alt=""></a>
                        </div>
                        <div class="title-box">
                            <h3 class="name"><a href="#">Paul Wilsona</a></h3>
                            <div class="designation">CEO, IT Expert</div>
                        </div>
                        <div class="text">Veniam quis nostrud exercitaon ullam laboris nis aliquip sed conseqal.</div>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <div class="view-all link-box">
        <a href="#" class="theme-btn btn-style-one"><div class="btn-title">View Full Team</div></a>
    </div>

</div>
</section>

<!--Testimonials Section-->
<section class="testimonials-two">
<div class="image-layer" style="background-image: url({{ asset('assets/frontend/images/background/image-2.jpg')}});"></div>

<div class="auto-container">
    <div class="sec-title centered">
        <div class="upper-text">Read The Testimonials</div>
        <h2>What Clients Says <strong>About Us</strong></h2>
        <div class="lower-text">Sit amet consectetur adipisicing elitm sed eiusmod temp sed incididunt labore dolore magna aliquatenim veniam quis ipsum nostrud exer citation ullamco laboris.</div>
    </div>

    <div class="carousel-box">
        <div class="testimonial-carousel theme-carousel owl-theme owl-carousel" data-options='{"loop": true, "margin": 30, "autoheight":true, "lazyload":true, "nav": false, "dots": false, "autoplay": true, "autoplayTimeout": 5000, "smartSpeed": 500, "responsive":{ "0" :{ "items": "1" }, "768" :{ "items" : "1" } , "800":{ "items" : "2" }, "1024":{ "items" : "2" }, "1366":{ "items" : "3" }}}'>
            <!--Slide-->
            <div class="testimonial-block">
                <div class="inner">
                    <div class="content-box">
                        <div class="content">
                            <div class="text">Fugiat nulla pariatur excepteur sint occaecat dolor cupidatat non proident, sunt in culp qui officia quisy deserunt mollit anim id est laborum. Sed untminim perspiciatis unde omnis iste.</div>
                        </div>
                    </div>
                    
                    <div class="info">
                        <div class="image"><img src="{{ asset('assets/frontend/images/resource/author-thumb-1.jpg')}}" alt=""></div>
                        <div class="name">Nelson Hilly</div>
                        <div class="designation">Technical</div>
                        <div class="rating"><span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span></div>
                    </div>
                </div>
            </div>
            <!--Slide-->
            <div class="testimonial-block">
                <div class="inner">
                    <div class="content-box">
                        <div class="content">
                            <div class="text">Fugiat nulla pariatur excepteur sint occaecat dolor cupidatat non proident, sunt in culp qui officia quisy deserunt mollit anim id est laborum. Sed untminim perspiciatis unde omnis iste.</div>
                        </div>
                    </div>
                    
                    <div class="info">
                        <div class="image"><img src="{{ asset('assets/frontend/images/resource/author-thumb-2.jpg')}}" alt=""></div>
                        <div class="name">Thomas Shely</div>
                        <div class="designation">Technical</div>
                        <div class="rating"><span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span></div>
                    </div>
                </div>
            </div>
            <!--Slide-->
            <div class="testimonial-block">
                <div class="inner">
                    <div class="content-box">
                        <div class="content">
                            <div class="text">Fugiat nulla pariatur excepteur sint occaecat dolor cupidatat non proident, sunt in culp qui officia quisy deserunt mollit anim id est laborum. Sed untminim perspiciatis unde omnis iste.</div>
                        </div>
                    </div>
                    
                    <div class="info">
                        <div class="image"><img src="{{ asset('assets/frontend/images/resource/author-thumb-3.jpg')}}" alt=""></div>
                        <div class="name">Peter Willy</div>
                        <div class="designation">Technical</div>
                        <div class="rating"><span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span> <span class="fa fa-star"></span></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

</section>

<!--Contact Section-->
<section class="contact-section">
<div class="map-pattern-layer"></div>

<div class="auto-container">
    <div class="row clearfix">
        <!--Text Column-->
        <div class="text-column col-lg-6 col-md-12 col-sm-12">
            <div class="inner">
                <div class="sec-title">
                    <div class="upper-text">Get In Touch With Us Today!</div>
                    <h2><strong>Need Our Services? <br>Book Your Appointment</strong></h2>
                    <div class="lower-text">We Help Customers Digital Transformation By IT Solutions</div>
                </div>

                <ul class="info">
                    <li><div class="phone-title">call us for support</div></li>
                    <li class="phone"><a href="tel:+92 332 6240 428"><span class="icon sl-icon-call-in"></span> <strong>+92 332 6240 428</strong></a></li>
                    <li class="email"><a href="mailto:info@interleotechsol.com">info@interleotechsol.com</a></li>
                </ul>
            </div>
        </div>
        <!--Form Column-->
        <div class="form-column col-lg-6 col-md-12 col-sm-12">
            <div class="inner">
                <!--Form Box-->
                <div class="form-box">
                    <div class="default-form appointment-form">
                        <form method="post" action="#">
                            <div class="row clearfix">                                    
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="text" name="field-name" placeholder="Your Name" required="" value="">
                                </div>
                                
                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="email" name="field-name" placeholder="Email" required="" value="">
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                    <input type="text" name="field-name" placeholder="Phone" required="" value="">
                                </div>

                                <div class="form-group col-md-6 col-sm-12">
                                    <select class="custom-select-box" name="field-name">
                                        <option>Inquiry About</option>
                                        <option>IT Cloud Integration</option>
                                        <option>Business Security</option>
                                        <option>Product Engineering</option>
                                    </select>
                                </div>

                                <div class="col-lg-12 col-md-12 col-sm-12 form-group">
                                    <textarea name="field-name" placeholder="Message" required=""></textarea>
                                </div>
        
                                <div class="form-group col-md-12 col-sm-12">
                                    <button type="submit" class="theme-btn btn-style-one"><span class="btn-title">Make a Request</span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</section>

@endsection



