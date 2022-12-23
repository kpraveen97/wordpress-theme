<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package event-listing-water-sports
 */

get_header();
?>

<body>
    <header class="header-main">
        <nav id="nav" class="main-navigation">
            <div class="site-logo">
                <a href="#">kp97<span>.</span></a>
            </div>
            <div class="toggle_btn">
                <button class="btn">
                    <i class="fa fa-bars"></i>
                </button>
            </div>
            <div class="collapse flex_grow">
                <ul class="flex-center">
                    <li>
                        <a href="#">website</a>
                    </li>
                    <li>
                        <a href="#">app</a>
                    </li>
                    <li>
                        <a href="#">ui/ux design</a>
                    </li>
                    <li>
                        <a href="#">works</a>
                    </li>
                    <li>
                        <a href="#">pricing</a>
                    </li>
                </ul>
            </div>
            <div class="flex-inital">
                <ul style="display: flex;">
                    <button class="theme_btn">Tell us about your project</button>
                </ul>
            </div>

        </nav>
    </header>

    <main>
        <section class="wp-theme-banner">
            <div class="container text-center">
                <div class="banner-slider">
                    <div class="slider-items">
                        <div class="slider-item animate__animated animate__bounce">
                            <h1>Beautifully Crafted Websites & Apps
                            </h1>
                            <p>Get your website design prototypes and mockups converted into pixel perfect, responsive,
                                and hand coded websites with us.</p>
                            <div class="slider_btn">
                                <a href="#" target="_blank" title="Visit Site">Tell us about your project</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="wp-theme-logos-silder text-center">
            <div class="container ">
                <h2>Trusted by</h2>
                <div class="row mt-6" id="logo_item">
                    <div class="column column-2">
                        <div class="logo-item">
                            <img src="assets/images/logoipsum.svg" alt="LOGO" srcset="">
                        </div>
                    </div>
                    <div class="column column-2">
                        <div class="logo-item">
                            <img src="assets/images/logoipsum.svg" alt="LOGO" srcset="">
                        </div>
                    </div>
                    <div class="column column-2">
                        <div class="logo-item">
                            <img src="assets/images/logoipsum.svg" alt="LOGO" srcset="">
                        </div>
                    </div>
                    <div class="column column-2">
                        <div class="logo-item">
                            <img src="assets/images/logoipsum.svg" alt="LOGO" srcset="">
                        </div>
                    </div>
                    <div class="column column-2">
                        <div class="logo-item">
                            <img src="assets/images/logoipsum.svg" alt="LOGO" srcset="">
                        </div>
                    </div>
                    <div class="column column-2">
                        <div class="logo-item">
                            <img src="assets/images/logoipsum.svg" alt="LOGO" srcset="">
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <section class="wp-theme-services-section">
            <div class="container">
                <h2 class="text-center mb-6">Services</h2>
                <div class="row">
                    <div class="column column-4">
                        <div class="services-item">
                            <i class="fa fa-desktop" aria-hidden="true"></i>
                            <h2>Websites</h2>
                            <p>We design and develop the most beautiful websites on the internet</p>
                        </div>
                    </div>
                    <div class="column column-4">
                        <div class="services-item">
                            <i class="fa fa-mobile" aria-hidden="true"></i>
                            <h2>Apps</h2>
                            <p>We turn your app idea into reality with high quality development</p>
                        </div>
                    </div>
                    <div class="column column-4">
                        <div class="services-item">
                            <i class="fa fa-pencil"></i>
                            <h2>UI/UX</h2>
                            <p>We craft a human-centered user interface and experience with care</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="wp-theme-demos">
            <div class="container text-center">
                <div class="wp-theme-section-title text-center">
                    <h5>Prebuilt live websites</h5>
                    <p>Make your design responsive and interactive - Get real hover effects, pressed effects,
                        animations, actions and more without having to create multiple versions of the same layer.
                        Ensure your designs and interactions work seamlessly on different screen sizes</p>
                </div>
                <div class="row demos">
                    <div class="column column-4">
                        <div class="demo-item">
                            <img src="https://images.pexels.com/photos/1375849/pexels-photo-1375849.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                alt="" srcset="">
                             <div class="visit-live">
                                <a href="https://texastt.us/">Visit live site.</a>
                             </div>
                        </div>
                    </div>
                    <div class="column column-4">
                        <div class="demo-item ">
                            <img src="https://images.pexels.com/photos/1375849/pexels-photo-1375849.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                alt="" srcset="">
                        </div>
                    </div>
                    <div class="column column-4">
                        <div class="demo-item ">
                            <img src="https://images.pexels.com/photos/1375849/pexels-photo-1375849.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                alt="" srcset="">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="overlay-light">
            <div class="container text-center">
                <div class="wp-theme-section-title text-center">
                    <h5>Tell us about your project</h5>
                    <p>Turn your designs into production-ready frontend code for mobile apps and web</p>
                </div>
                <button class="theme_btn">Get started now</button>
                <img src="assets/images/powerful-section.png" alt="" srcset="">
            </div>
        </section>

        <section class="wpem_charity_theme-ccampaigns-box">
            <div class="container">
                <div class="wp-theme-section-title text-center">
                    <h5>Design to code expert.</h5>
                    <p>Design to code expert.</p>
                </div>
                <div class="row">
                    <div class="column column-3">
                        <div class="wpem_charity_theme-campaigns-box">
                            <img src="assets/images/pexels-1.jpg" alt="campaign">
                            <div class="wpem_charity_theme-campaigns-box-content">
                                <h4>Convert Figma to React</h4>
                                <div class="wpem_charity_theme-progress-label">
                                    <span>$ 5000</span>
                                    <span>$ 15,000</span>
                                </div>
                                <div class="wpem_charity_theme-progress">
                                    <div class="wpem_charity_theme-progress-bar" style="width: 33.33%"></div>
                                </div>
                                <button class="theme_btn">visit site</button>
                            </div>
                        </div>
                    </div>
                    <div class="column column-3">
                        <div class="wpem_charity_theme-campaigns-box">
                            <img src="assets/images/pexels-3.jpg" alt="campaign">
                            <div class="wpem_charity_theme-campaigns-box-content">
                                <h4>Convert Adobe XD to React</h4>
                                <div class="wpem_charity_theme-progress-label">
                                    <span>$ 22,000</span>
                                    <span>$ 1,00,000</span>
                                </div>
                                <div class="wpem_charity_theme-progress">
                                    <div class="wpem_charity_theme-progress-bar" style="width: 50%"></div>
                                </div>
                                <button class="theme_btn">visit site</button>
                            </div>
                        </div>
                    </div>
                    <div class="column column-3">
                        <div class="wpem_charity_theme-campaigns-box">
                            <img src="assets/images/pexels-4.jpg" alt="campaign">
                            <div class="wpem_charity_theme-campaigns-box-content">
                                <h4>Convert Adobe XD to HTML CSS</h4>
                                <div class="wpem_charity_theme-progress-label">
                                    <span>$ 22,000</span>
                                    <span>$ 1,00,000</span>
                                </div>
                                <div class="wpem_charity_theme-progress">
                                    <div class="wpem_charity_theme-progress-bar" style="width: 33.33%"></div>
                                </div>
                                <button class="theme_btn">visit site</button>
                            </div>
                        </div>
                    </div>
                    <div class="column column-3">
                        <div class="wpem_charity_theme-campaigns-box">
                            <img src="assets/images/pexels-2.jpg" alt="campaign">
                            <div class="wpem_charity_theme-campaigns-box-content">
                                <h4>Convert Figma to HTML CSS</h4>
                                <div class="wpem_charity_theme-progress-label">
                                    <span>$ 22,000</span>
                                    <span>$ 1,00,000</span>
                                </div>
                                <div class="wpem_charity_theme-progress">
                                    <div class="wpem_charity_theme-progress-bar" style="width: 70%"></div>
                                </div>
                                <button class="theme_btn">visit site</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="overlay">
            <div class="container text-center">
                <div class="wp-theme-section-title text-center">
                    <h5>Build your website with modern standars and advanced animations.
                    </h5>
                    <p>Our websites and apps are fast, responsive so the users experience is good.</p>
                </div>
                <div class="row">
                    <div class="column column-4">
                        <div class="agency-theme-demo">
                            <img src="https://images.pexels.com/photos/7559442/pexels-photo-7559442.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=1260&amp;h=750&amp;dpr=1"
                                alt="">
                            <div class="captions flex-center">
                                <a href="https://texastt.us/" target="_blank"><h4>Visit live site</h4></a>
                            </div>
                        </div>
                    </div>
                    <div class="column column-4">
                        <div class="agency-theme-demo">
                            <img src="https://images.pexels.com/photos/13463984/pexels-photo-13463984.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=600&amp;lazy=load"
                                alt="">
                            <div class="captions flex-center">
                                <a href="https://texastt.us/" target="_blank"><h4>Visit live site</h4></a>
                            </div>
                        </div>
                    </div>
                    <div class="column column-4">
                        <div class="agency-theme-demo">
                            <img src="https://images.pexels.com/photos/11843379/pexels-photo-11843379.jpeg?auto=compress&amp;cs=tinysrgb&amp;w=600&amp;lazy=load"
                                alt="">
                            <div class="captions flex-center">
                                <a href="https://texastt.us/" target="_blank"><h4>Visit live site</h4></a>
                            </div>
                        </div>
                    </div>
                </div>
                <img src="assets/images/powerful-section.png" alt="" srcset="">
                <button class="theme_btn">Get it now for free</button>
            </div>
        </section>

        <section class="main_loading_animation_container">
            <div class="container">
                <div class="wp-theme-section-title text-center">
                </div>
                <div class="main_loading">
                    <h2>How it works?</h2>
                    <div class="center_loading">
                        <span class="flex-center">Design</span>
                        <span class="flex-center">Code</span>
                        <span class="flex-center">Deploy</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="wave_loading_effect pt-0 pb-0">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#1877F2" fill-opacity="1"
                    d="M0,224L40,229.3C80,235,160,245,240,224C320,203,400,149,480,149.3C560,149,640,203,720,192C800,181,880,107,960,106.7C1040,107,1120,181,1200,202.7C1280,224,1360,192,1400,176L1440,160L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z">
                </path>
            </svg>
            <div class="flex-center " style="background-color:var(--wp-theme-primary-color);margin: -10px 0;">
                <h2>Build your site with advance js animations.</h2>
                <div class="wave"></div>
                <div class="wave"></div>
                <div class="wave"></div>
                <div class="wave"></div>
                <div class="wave"></div>
                <div class="wave"></div>
                <div class="wave"></div>
                <div class="wave"></div>
                <div class="wave"></div>
                <div class="wave"></div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#1877F2" fill-opacity="1"
                    d="M0,224L40,229.3C80,235,160,245,240,224C320,203,400,149,480,149.3C560,149,640,203,720,192C800,181,880,107,960,106.7C1040,107,1120,181,1200,202.7C1280,224,1360,192,1400,176L1440,160L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z">
                </path>
            </svg>
        </section>
        <section class="hover_cards">
            <div class="container">
                <h2 class="text-center mb-6">Hover Cards</h2>
                <div class="row">
                    <div class="column column-4">
                        <div class="hover_card flex-center">
                            <div class="card_content">
                                <h2>Design to code experts.</h2>
                                <p>We convert your designs into production ready code for React, React Native, HTML-CSS,
                                    WordPress. It will save you 80%-90% of your time so you don’t write frontend code
                                    from scratch and can focus on more complex business logic instead.</p>
                                <a href="#">Connect</a>
                            </div>
                            <div class="card_number">
                                <h2>Frontend code</h2>
                            </div>
                        </div>
                    </div>
                    <div class="column column-4">
                        <div class="hover_card flex-center">
                            <div class="card_content">
                                <h2>Design to code experts.</h2>
                                <p>We convert your designs into production ready code for React, React Native, HTML-CSS,
                                    WordPress. It will save you 80%-90% of your time so you don’t write frontend code
                                    from scratch and can focus on more complex business logic instead.</p>
                                <a href="#">Connect</a>
                            </div>
                            <div class="card_number">
                                <h2>Frontend code</h2>
                            </div>
                        </div>
                    </div>
                    <div class="column column-4">
                        <div class="hover_card flex-center">
                            <div class="card_content">
                                <h2>Design to code experts.</h2>
                                <p>We convert your designs into production ready code for React, React Native, HTML-CSS,
                                    WordPress. It will save you 80%-90% of your time so you don’t write frontend code
                                    from scratch and can focus on more complex business logic instead.</p>
                                <a href="#">Connect</a>
                            </div>
                            <div class="card_number">
                                <h2>Frontend code</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="contact_form">
            <div class="container">
                <h2 class="text-center" style="margin-bottom: 30px;">Let's Connect</h2>
                <div class="flex-center contact_form_container">
                    <form action="" method="">
                        <h2 class="text-center mb-6">Get a free quote!</h2>
                        <div class="inputBox">
                            <input type="text" name="username" autocomplete="off" required>
                            <label for="">Name</label>
                        </div>
                        <div class="inputBox">
                            <input type="email" name="email" autocomplete="off" required>
                            <label for="">Email</label>
                        </div>
                        <div class="inputBox">
                            <input type="text" name="Message" autocomplete="off" required>
                            <label for="">Message</label>
                        </div>
                        <input type="submit" value="send">
                    </form>
                </div>
            </div>
        </section>
        <section class="lets-connect text-center">
            <div class="container">
                <h2>Lets Connect</h2>
                <ul class="social-icons">
                    <li>
                        <a href="#">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-linkedin"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-envelope"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </section>
    </main>
</body>

<?php
get_footer();