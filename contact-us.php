<?php include 'Partials/header.php'; ?>

</div>

    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb_box text-center">
                        <h2 class="breadcrumb-title">Contact us</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area end -->


    <div id="main-wrapper">
        <div class="site-wrapper-reveal">
            <!--====================  Conact us Section Start ====================-->
            <div class="contact-us-section-wrappaer section-space--pt_100 section-space--pb_70">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12 col-lg-6">
                            <div class="contact-form-wrap">
                                <!-- <form id="contact-form" action="http://whizthemes.com/mail-php/jowel/mitech/php/mail.php" method="post"> -->
                                <form id="contact-form" action="https://htmldemo.net/mitech/assets/php/mail.php" method="post">
                                    <div class="contact-form">
                                        <div class="contact-input">
                                            <div class="contact-inner">
                                                <input name="con_name" type="text" placeholder="Name *" required>
                                            </div>
                                            <div class="contact-inner">
                                                <input name="con_email" type="email" placeholder="Email *" required>
                                            </div>
                                        </div>
                                        <div class="contact-inner">
                                            <input name="con_subject" type="text" placeholder="Subject *" required>
                                        </div>
                                        <div class="contact-inner contact-message">
                                            <textarea name="con_message" placeholder="Please describe what you need." required></textarea>
                                        </div>
                                        <div class="submit-btn mt-20">
                                            <button class="ht-btn ht-btn-md" type="submit">Send message</button>
                                            <p class="form-messege"></p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--====================  Conact us Section End  ====================-->

            <!--====================  Conact us info Start ====================-->

        </div>
        </div>
        </div>
                <div class="footer">
                    <div class="footer-widget__logo mb-30">
                        <img src="assets/images/fatold-blue.png" width="150" height="48" class="img-fluid" alt="Logo">
                    </div>
                
                    <div class="links">
                        <ul class="footer-widget__list">
                            <li><a href="/" class="hover-style-link">Home</a></li>
                            <li><a href="/about-us" class="hover-style-link">About</a></li>
                            <li><a href="/services" class="hover-style-link">Services</a></li>
                            <li><a href="/project" class="hover-style-link">Projects</a></li>
                            <li><a href="/contact-us" class="hover-style-link">Contact</a></li>
                        </ul>
                    </div>
                    <div class="social">
                        <ul class="ht-social-networks solid-rounded-icon">
                            <li class="item">
                                <a href="https://www.linkedin.com/in/fatoldtechnologies" target="_blank" aria-label="LinkedIn"
                                    class="social-link hint--bounce hint--top hint--primary">
                                    <i class="fab fa-linkedin link-icon"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <hr>
                </div>
                </div>
                </div>
                <div class="footer-copyright-area">
                    <div class="container">
                        <span class="copyright-text">
                            &copy; 2025 Fatold Technologies.
                            <a href="#">All Rights Reserved.</a>
                        </span>
                        <a href="#" style="padding-left:10px;">Terms</a>
                        <a href="#" style="padding-left:10px;">Privacy</a>
                    </div>
                </div>
        <!--====================  End of footer area  ====================-->

    </div>
    </div>
    <!-- End Toolbar -->
    <!--====================  scroll top ====================-->
    <a href="#" class="scroll-top" id="scroll-top">
        <i class="arrow-top fas fa-chevron-up"></i>
        <i class="arrow-bottom fas fa-chevron-up"></i>
    </a>
    <!--====================  End of scroll top  ====================-->

    <!--====================  mobile menu overlay ====================-->
    <div class="mobile-menu-overlay" id="mobile-menu-overlay">
        <div class="mobile-menu-overlay__inner">
            <div class="mobile-menu-overlay__header">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-md-6 col-8">
                            <!-- logo -->
                            <div class="logo">
                                <a href="/">
                                    <img src="assets/images/fatold-blue.png" class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-4">
                            <!-- mobile menu content -->
                            <div class="mobile-menu-content text-end">
                                <span class="mobile-navigation-close-icon" id="mobile-menu-close-trigger"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-menu-overlay__body">
                <nav class="offcanvas-navigation">
                <ul>
                    <li>
                        <a href="/"><span>Home</span></a>
                    </li>
                    <li class="">
                        <a href="/about-us"><span>About</span></a>
                    </li>
                    <li>
                        <a href="/services"><span>Services</span></a>
                    </li>
                    <li>
                        <a href="/project"><span>Projects</span></a>
                    </li>
                    <li>
                        <a href="/contact-us"><span>Contact</span></a>
                    </li>
                </ul>
                </nav>
            </div>
        </div>
    </div>
    <!--====================  End of mobile menu overlay  ====================-->







    <?php include 'Partials/footer.php'; ?>