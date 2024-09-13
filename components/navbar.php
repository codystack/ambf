    <header class="header-section-1">
        <div class="container">
            <div id="header-sticky" class="header-1">
                <div class="container">
                    <div class="mega-menu-wrapper">
                        <div class="header-main">
                            <div class="header-left">
                                <div class="logo">
                                    <a href="./" class="header-logo">
                                        <img src="assets/img/ambf-logo-light.svg" width="190" alt="logo-img">
                                    </a>
                                </div>
                            </div>
                            <div class="header-right d-flex justify-content-end align-items-center">
                                <div class="mean__menu-wrapper">
                                    <div class="main-menu">
                                        <nav id="mobile-menu">
                                            <ul>
                                                <li>
                                                    <a class="<?php if($page=='Home'){echo 'active';}?>" href="./">Home</a> 
                                                </li>
                                                <li>
                                                    <a class="<?php if($page=='About' || $page=='Her'){echo 'active';}?>">
                                                        About AMBF
                                                        <i class="fa-regular fa-plus"></i>
                                                    </a>
                                                    <ul class="submenu">
                                                        <li><a class="<?php if($page=='About'){echo 'active';}?>" href="about">About Us</a></li>
                                                        <li><a class="<?php if($page=='Her'){echo 'active';}?>" href="her">Our Founder</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="causes">Causes</a>
                                                </li>
                                                <li>
                                                    <a href="volunteer">Volunteer</a>
                                                </li>
                                                <li>
                                                    <a href="https://shop.ambeautifiedlifefoundation.org/" target="_blank">Shop</a>
                                                </li>
                                                <li>
                                                    <a class="<?php if($page=='Contact'){echo 'active';}?>" href="contact">Contact us</a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                                <div class="header-button">
                                    <div class="btn-wrapper wow fadeInUp" data-wow-delay=".5s">
                                        <a href="causes-details.html"> <span class="theme-btn style3"> Donate Now
                                            </span><span class="arrow-btn style2"><i class="fa-solid fa-arrow-up-right"></i></span>
                                        </a>
                                    </div>
                                </div>
                                <div class="main-menu">
                                    <a href="donate" class="theme-btn style3">Donate</a>
                                </div>
                                
                                <div class="header__hamburger d-xl-block my-auto">
                                    <div class="sidebar__toggle ml-0">
                                        <i class="fas fa-bars"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </header>