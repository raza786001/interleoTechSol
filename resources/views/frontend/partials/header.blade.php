 <!-- Main Header -->
 <header class="main-header header-style-two">

<!-- Header Upper -->
<div class="header-upper">
    <div class="auto-container">
        <div class="inner-container clearfix">
            <!--Logo-->
            <div class="logo-box">
                <div class="logo"><a href="#" title="Inter Leo Technology Solutions"><img src="{{ asset('assets/frontend/images/logo.png')}}" alt="Inter Leo Technology Solutions" title="Inter Leo Technology Solutions"></a></div>
            </div>
            <div class="right-info clearfix">
                <!--Info-->
                <div class="info clearfix">
                    <!--Info Block-->
                    <!-- <div class="info-block">
                        <div class="icon-box">
                            <span class="flaticon-placeholder-2"></span>
                        </div>
                        <div class="info-text">
                            <span>27 Wood Circle, Pana</span>
                            <strong>City Florida, 30401</strong>
                        </div>
                    </div> -->
                    <!--Info Block-->
                    <div class="info-block">
                        <div class="icon-box">
                            <span class="flaticon-smartphone"></span>
                        </div>
                        <div class="info-text">
                            <span>Call Us Now</span>
                            <a href="tel:+92-332-624-0428"><strong>+92 332 6240428 </strong></a>
                        </div>
                    </div>
                    <!--Info Block-->
                    <div class="info-block">
                        <div class="icon-box">
                            <span class="flaticon-email"></span>
                        </div>
                        <div class="info-text">
                            <span>Send Us Email</span>
                            <a href="mailto:info@interleotechsol.com"><strong>info@interleotechsol.com</strong></a>
                        </div>
                    </div>
                </div>
                <!--Language Block-->
                <div class="lang-block">
                    <!--Language-->
                    <div class="language">
                        <div class="lang-btn">
                            <span class="flag"><img src="{{ asset('assets/frontend/images/icons/icon-lang.png')}}" alt="" title="English"></span>
                            <span class="txt">En</span>
                            <span class="arrow fa fa-angle-down"></span>
                        </div>
                        <div class="lang-dropdown">
                            <ul>
                                <li><a href="#">German</a></li>
                                <li><a href="#">Italian</a></li>
                                <li><a href="#">Chinese</a></li>
                                <li><a href="#">Russian</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--End Header Upper-->

<div class="header-lower">
    <div class="auto-container">
        <div class="nav-box clearfix">
            <div class="nav-outer clearfix">
                <!--Mobile Navigation Toggler-->
                <div class="mobile-nav-toggler"><span class="icon flaticon-menu-1"></span></div>

                <!-- Main Menu -->
                <nav class="main-menu navbar-expand-md navbar-light">
                    <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                        <ul class="navigation clearfix">
                                <li class="current"><a href="#">Home</a></li>
                                <li ><a href="{{url('/about-us')}}">About Us</a>
                                    <!-- <ul>
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Case Studies</a></li>
                                        <li><a href="#">FAQ's</a></li>
                                    </ul> -->
                                </li>
                                <li ><a href="#">Services</a>
                                    <ul>
                                        <li><a href="#">All Services</a></li>
                                        <li><a href="#">Data Infrastructure</a></li>
                                        <li><a href="#">IT Cloud Integration</a></li>
                                        <li><a href="#">IT Startup Projects</a></li>
                                        <li><a href="#">Product Engineering</a></li>
                                        <li><a href="#">Business Security</a></li>
                                    </ul>
                                </li>
                                <li ><a href="#">Our Works</a></li>
                                <li ><a href="#">JOB Opportunities</a></li>
                                <li ><a href="#">Team</a>
                                    <!-- <ul>
                                        <li><a href="#">Case Studies</a></li>
                                        <li><a href="#">Project Details</a></li>
                                    </ul> -->
                                </li>
                                <li ><a href="#">FAQ</a></li>
                                <!-- <li ><a href="#">News</a>
                                    <ul>
                                        <li><a href="#">Blog Grid Style</a></li>
                                        <li><a href="#">Blog Fullwidth</a></li>
                                        <li><a href="#">Blog Post Details</a></li>
                                    </ul>
                                </li> -->
                                <li><a href="#">Contact</a></li>
                            </ul>
                    </div>
                </nav>
            </div>

            <!--Search Btn-->
            <div class="search-btn">
                <button type="button" class="theme-btn search-toggler"><span class="fa fa-search"></span></button>
            </div>
        </div>
    </div>
</div>

<!-- Sticky Header  -->
<div class="sticky-header">
    <div class="auto-container clearfix">
        <!--Logo-->
        <div class="logo pull-left">
            <a href="#" title=""><img src="{{ asset('assets/frontend/images/sticky-logo.png')}}" alt="" title=""></a>
        </div>
        <!--Right Col-->
        <div class="pull-right">
            <!-- Main Menu -->
            <nav class="main-menu clearfix">
                <!--Keep This Empty / Menu will come through Javascript-->
            </nav><!-- Main Menu End-->
        </div>
    </div>
</div><!-- End Sticky Menu -->

<!-- Mobile Menu  -->
<div class="mobile-menu">
    <div class="menu-backdrop"></div>
    <div class="close-btn"><span class="icon flaticon-targeting-cross"></span></div>
    
    <nav class="menu-box">
        <div class="nav-logo"><a href="#"><img src="{{ asset('assets/frontend/images/nav-logo.png')}}" alt="" title=""></a></div>
        <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
        <!--Social Links-->
        <div class="social-links">
            <ul class="clearfix">
                <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                <li><a href="#"><span class="fab fa-youtube"></span></a></li>
            </ul>
        </div>
    </nav>
</div><!-- End Mobile Menu -->
</header>
<!-- End Main Header -->