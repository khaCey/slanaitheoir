<?php get_header(); ?>

<!-- Mashead header-->
<header class="masthead">
    <div class="container px-5">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-6">
                <!-- Mashead text and app badges-->
                <div class="mb-5 mb-lg-0 text-center text-lg-start">
                    <h1 class="display-1 lh-1 mb-3">Web Applications</h1>
                    <p class="lead fw-normal text-muted mb-5">Applications catered to your business needs at the
                        tip of your fingertips!</p>
                </div>
            </div>
            <div class="col-lg-6">
                <!-- Masthead device mockup feature-->
                <div class="masthead-device-mockup">
                    <svg class="circle" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                        <defs>
                            <linearGradient id="circleGradient" gradientTransform="rotate(45)">
                                <stop class="gradient-start-color" offset="0%"></stop>
                                <stop class="gradient-end-color" offset="100%"></stop>
                            </linearGradient>
                        </defs>
                        <circle cx="50" cy="50" r="50"></circle>
                    </svg><svg class="shape-1 d-none d-sm-block" viewBox="0 0 240.83 240.83"
                        xmlns="http://www.w3.org/2000/svg">
                        <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03"
                            transform="translate(120.42 -49.88) rotate(45)"></rect>
                        <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03"
                            transform="translate(-49.88 120.42) rotate(-45)"></rect>
                    </svg><svg class="shape-2 d-none d-sm-block" viewBox="0 0 100 100"
                        xmlns="http://www.w3.org/2000/svg">
                        <circle cx="50" cy="50" r="50"></circle>
                    </svg>
                    <div class="device-wrapper">
                        <div class="device" data-device="iPhoneX" data-orientation="portrait" data-color="black">
                            <div class="screen bg-black">
                                <!-- PUT CONTENTS HERE:-->
                                <!-- * * This can be a video, image, or just about anything else.-->
                                <!-- * * Set the max width of your media to 100% and the height to-->
                                <!-- * * 100% like the demo example below.-->
                                <img src='<?php echo esc_url(get_template_directory_uri() . '/assets/img/demo-screen.webp'); ?>'
                                    style="width: 100%; height: 100%">
                                </img>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Quote/testimonial aside-->
<aside class="text-center bg-gradient-primary-to-secondary">
    <div class="container px-5">
        <div class="row gx-5 justify-content-center">
            <div class="col-xl-8">
                <div class="h2 fs-1 text-white mb-4">"We provide IT Solutions to your business problems."</div>
            </div>
        </div>
    </div>
</aside>
<!-- App features section-->
<section id="features">
    <div class="container px-5">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-8 order-lg-1 mb-5 mb-lg-0">
                <div class="container-fluid px-5">
                    <div class="row gx-5">
                        <div class="col-md-6 mb-5">
                            <!-- Feature item-->
                            <div class="text-center">
                                <i class="bi-phone icon-feature text-gradient d-block mb-3"></i>
                                <h3 class="font-alt">Web Applications</h3>
                                <p class="text-muted mb-0">Applications that can be easily accessed through mobile
                                    devices which gives you an opportunity to cater to your clients easily!</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-5">
                            <!-- Feature item-->
                            <div class="text-center">
                                <i class="bi-cloud-check icon-feature text-gradient d-block mb-3"></i>
                                <h3 class="font-alt">Cloud-based Applications</h3>
                                <p class="text-muted mb-0">For those who wish to be always on the go.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-5 mb-md-0">
                            <!-- Feature item-->
                            <div class="text-center">
                                <i class="bi-display icon-feature text-gradient d-block mb-3"></i>
                                <h3 class="font-alt">Desktop Applications</h3>
                                <p class="text-muted mb-0">We also develop old school applications that require no
                                    internet connection, if internet connectivity is a main issue; we got you covered!
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- Feature item-->
                            <div class="text-center">
                                <i class="bi-check-circle icon-feature text-gradient d-block mb-3"></i>
                                <h3 class="font-alt">Modern Design</h3>
                                <p class="text-muted mb-0">With our modern and intuitive design, your applications will
                                    standout against competetitors! </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 order-lg-0">
                <!-- Features section device mockup-->
                <div class="features-device-mockup">
                    <svg class="circle" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                        <defs>
                            <linearGradient id="circleGradient" gradientTransform="rotate(45)">
                                <stop class="gradient-start-color" offset="0%"></stop>
                                <stop class="gradient-end-color" offset="100%"></stop>
                            </linearGradient>
                        </defs>
                        <circle cx="50" cy="50" r="50"></circle>
                    </svg><svg class="shape-1 d-none d-sm-block" viewBox="0 0 240.83 240.83"
                        xmlns="http://www.w3.org/2000/svg">
                        <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03"
                            transform="translate(120.42 -49.88) rotate(45)"></rect>
                        <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03"
                            transform="translate(-49.88 120.42) rotate(-45)"></rect>
                    </svg><svg class="shape-2 d-none d-sm-block" viewBox="0 0 100 100"
                        xmlns="http://www.w3.org/2000/svg">
                        <circle cx="50" cy="50" r="50"></circle>
                    </svg>
                    <div class="device-wrapper">
                        <div class="device" data-device="iPhoneX" data-orientation="portrait" data-color="black">
                            <div class="screen bg-black">
                                <!-- PUT CONTENTS HERE:-->
                                <!-- * * This can be a video, image, or just about anything else.-->
                                <!-- * * Set the max width of your media to 100% and the height to-->
                                <!-- * * 100% like the demo example below.-->
                                <img src='<?php echo esc_url(get_template_directory_uri() . '/assets/img/demo-screen_1.webp'); ?>'
                                    style="width: 100%; height: 100%">
                                </img>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Basic features section-->
<section class="bg-light">
    <div class="container px-5">
        <div class="row gx-5 align-items-center justify-content-center justify-content-lg-between">
            <div class="col-12 col-lg-5">
                <h2 class="display-4 lh-1 mb-4">Enter a new age of web design</h2>
                <p class="lead fw-normal text-muted mb-5 mb-lg-0">With our dedicated team, we will provide the best
                    applications with all the latest features and technologies!</p>
            </div>
            <div class="col-sm-8 col-md-6">
                <div class="px-5 px-sm-0"><img class="img-fluid rounded-circle"
                        src="https://source.unsplash.com/u8Jn2rzYIps/900x900" alt="..." /></div>
            </div>
        </div>
    </div>
</section>
<section id="pricing">
    <div class="container px-5">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-4 order-lg-0">
                <!-- Features section device mockup-->
                <div class="col-lg-6">
                    <!-- Mashead text and app badges-->
                    <div class="mb-5 mb-lg-0 text-center text-lg-start">
                        <h1 class="display-1 lh-1 mb-3"> Pricing</h1>
                        <p class="lead fw-normal text-muted mb-5">We offer different pricing ranges based on your needs
                            and financing capabilities.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 order-lg-1 mb-5 mb-lg-0">
                <div class="container-fluid px-5">
                    <div class="row gx-5">
                        <div class="col-md-6 mb-5">
                            <!-- Feature item-->
                            <div class="text-center">
                                <i class="bi-terminal icon-feature text-gradient d-block mb-3"></i>
                                <h3 class="font-alt">Single Project</h3>
                                <p class="text-muted mb-0">This is a single application.</p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-5">
                            <!-- Feature item-->
                            <div class="text-center">
                                <i class="bi-headset icon-feature text-gradient d-block mb-3"></i>
                                <h3 class="font-alt">Application and Maintenance</h3>
                                <p class="text-muted mb-0">With this contract, we will provide updates and maintenance
                                    for
                                    the application, and a dedicated support team to deal with any problems.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-5 mb-md-0">
                            <!-- Feature item-->
                            <div class="text-center">
                                <i class="bi-box-seam icon-feature text-gradient d-block mb-3"></i>
                                <h3 class="font-alt">Package Deal</h3>
                                <p class="text-muted mb-0">This is a long term contract.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- Feature item-->
                            <div class="text-center">
                                <i class="bi-check-circle icon-feature text-gradient d-block mb-3"></i>
                                <h3 class="font-alt">Full I.T. Service</h3>
                                <p class="text-muted mb-0">A full "no-headache" deal. We will provide you with the
                                    devices
                                    and application that you will need. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- App badge section-->
<section class="bg-gradient-primary-to-secondary" id="download">
    <div class="container px-5">
        <h2 class="text-center text-white font-alt mb-4">View our samples!</h2>
    </div>
</section>
<section id="samples">
    <div class="container px-5">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-8 order-lg-1 mb-5 mb-lg-0 container">
                <div class="container-fluid px-5">
                    <div class="sample-container">
                        <div class="samples">
                            <!-- Feature item-->
                            <a class="box-link" href="scoile.khaceyslanaitheoir.com">
                                <div class="text-center">
                                    <i class="bi-book icon-feature text-gradient d-block mb-3"></i>
                                    <h3 class="font-alt">Scoile</h3>
                                </div>
                            </a>
                        </div>
                        <div class="samples">
                            <!-- Feature item-->
                            <a class="box-link" href="https://bialann.khaceyslanaitheoir.com">
                                <div class="text-center">
                                    <i class="bi-shop icon-feature text-gradient d-block mb-3"></i>
                                    <h3 class="font-alt">Bialann</h3>
                                </div>
                            </a>
                        </div>
                        <div class="samples">
                            <!-- Feature item-->
                            <a class="box-link" href="https://sanitas.khaceyslanaitheoir.com">
                                <div class="text-center">
                                    <i class="bi-clipboard icon-feature text-gradient d-block mb-3"></i>
                                    <h3 class="font-alt">Sanitas</h3>
                                </div>
                            </a>
                        </div>
                        <div class="samples">
                            <!-- Feature item-->
                            <a class="box-link" href="https://mise.khaceyslanaitheoir.com">
                                <div class="text-center">
                                    <i class="bi-basket icon-feature text-gradient d-block mb-3"></i>
                                    <h3 class="font-alt">Mise</h3>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to action section-->
<section id="contact" class="cta">
    <div class="cta-content">
        <div class="container px-5">
            <h2 class="text-white display-1 lh-1 mb-4">
                Stop waiting.
                <br />
                Start building.
            </h2>
            <a class="btn btn-outline-light py-3 px-4 rounded-pill" href="contact">Contact us now!</a>
        </div>
    </div>
</section>
<?php get_footer(); ?>

<!-- Bootstrap core JS--
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<!-- * *                               SB Forms JS                               * *-->
<!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

</body>

</html>