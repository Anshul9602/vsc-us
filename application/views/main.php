<style>
    .slider-container {
        width: 100%;
        overflow: hidden;
        position: relative;
    }

    .slider-wrapper {
        display: flex;
        width: calc(14 * 10%);
        /* 12 items */
    }

    .slider-item {
        /* min-width: 17%; */
        box-sizing: border-box;
    }

    .slider-item img {
        /* width: 200px;
        height: 33px; */
    }

    .slider {
        position: absolute;
        bottom: 10%;
    }

    /* Overlay styles */
    .slider-overlay {
        position: absolute;
        top: 0;
        bottom: 0;
        width: 20%;
        /* Adjust the width to control the overlay size */
        pointer-events: none;
        /* Make it non-interactive */
        background: linear-gradient(to right, rgba(255, 255, 255, 1), rgba(255, 255, 255, 0));
        z-index: 1;
        /* Ensure it stays above the slider */
    }

    .slider-overlay-left {
        left: 0;
        background: linear-gradient(to right, rgba(255, 255, 255, 1), rgba(255, 255, 255, 0));
        /* Fade from white to transparent */
    }

    .slider-overlay-right {
        right: 0;
        background: linear-gradient(to left, rgba(255, 255, 255, 1), rgba(255, 255, 255, 0));
        /* Fade from white to transparent */
    }

    .slider-item {
        padding: 0 10px;
    }
</style>
<!-- Hero -->
<section id="slider" class="hero p-0 odd">
    <div class="swiper-container no-slider animation slider-h-100 slider-h-auto">
        <div class="swiper-wrapper">

            <!-- Item 1 -->
            <div class="swiper-slide slide-center">

                <!-- Media -->
                <img src="assets/images/banner.webp" alt="Full Image" class="full-image" data-mask="50">

                <div class="slide-content row">
                    <div class="col-12 d-flex justify-content-start inner">
                        <div class="left text-left">

                            <!-- Content -->
                            <h1 data-aos="zoom-in" data-aos-delay="2000" class="title effect-static-text">
                                <!-- <span class="pre-title m-0">Human Resources</span> -->
                                <span class="pt-5"> Outsourcing<span class="featured bottom"><span>Your
                                            Way!</span></span>
                            </h1>
                            <p data-aos="zoom-in" data-aos-delay="2400" class="description bigger"> A Trusted Outsourced
                                Firm for Bookkeeping, Accounting and Tax, SMSF, Paraplanning and Loans Processing in
                                Australia </p>

                            <!-- Action -->
                            <div data-aos="fade-up" data-aos-delay="2800" class="buttons">
                                <div class="d-sm-inline-flex">
                                    <a href="#contact" class="smooth-anchor mb-4 btn primary-button">Know More</a>
                                    <!-- <a href="#features" class="smooth-anchor ml-sm-4 mt-4 btn outline-button">READ MORE</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Item 2 -->
            <div class="swiper-slide slide-center">

                <!-- Media -->
                <img src="assets/images/banner.webp" alt="Full Image" class="full-image" data-mask="50">

                <div class="slide-content row">
                    <div class="col-12 d-flex justify-content-start inner">
                        <div class="left text-left">

                            <!-- Content -->
                            <h1 data-aos="zoom-in" data-aos-delay="2000" class="title effect-static-text">
                                <!-- <span class="pre-title m-0">Human Resources</span> -->
                                <span class="pt-5"> Outsourcing<span class="featured bottom"><span>Your
                                            Way!</span></span>
                            </h1>
                            <p data-aos="zoom-in" data-aos-delay="2400" class="description bigger"> A Trusted Outsourced
                                Firm for Bookkeeping, Accounting and Tax, SMSF, Paraplanning and Loans Processing in
                                Australia </p>

                            <!-- Action -->
                            <div data-aos="fade-up" data-aos-delay="2800" class="buttons">
                                <div class="d-sm-inline-flex">
                                    <a href="#contact" class="smooth-anchor mt-4 btn primary-button">Know More</a>
                                    <!-- <a href="#features" class="smooth-anchor ml-sm-4 mt-4 btn outline-button">READ MORE</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- slider -->
<div class="row " style="padding:40px 0;">
    <div class="slider-container" style="margin: 10px 0;">
        <!-- Left white overlay -->
        <div class="slider-overlay slider-overlay-left"></div>

        <!-- Slider wrapper -->
        <div class="slider-wrapper">
            <div class="slider-item"><img width="125" height="50"
                    src="https://www.infinity-globus.com/wp-content/uploads/2023/11/QuickBooks.png" class="img-fluid"
                    alt="QuickBooks" decoding="async" /></div>
            <div class="slider-item"><img width="125" height="50"
                    src="https://www.infinity-globus.com/wp-content/uploads/2023/11/Drake-Software.png"
                    class="img-fluid" alt="Drake Software" decoding="async" /></div>
            <div class="slider-item"><img width="125" height="50"
                    src="https://www.infinity-globus.com/wp-content/uploads/2023/11/Ultratax.png" class="img-fluid"
                    alt="Ultratax" decoding="async" /></div>
            <div class="slider-item"><img width="125" height="50"
                    src="https://www.infinity-globus.com/wp-content/uploads/2023/11/Xero.png" class="img-fluid"
                    alt="Xero" decoding="async" /></div>
            <div class="slider-item"><img width="125" height="50"
                    src="https://www.infinity-globus.com/wp-content/uploads/2023/11/CCH-Axcess-2.png" class="img-fluid"
                    alt="CCH Axcess" decoding="async" /></div>
            <div class="slider-item"><img width="125" height="50"
                    src="https://www.infinity-globus.com/wp-content/uploads/2023/11/ProConnect.png" class="img-fluid"
                    alt="ProConnect" decoding="async" /></div>
            <!-- Duplicate images for infinite scroll -->
            <div class="slider-item"><img width="125" height="50"
                    src="https://www.infinity-globus.com/wp-content/uploads/2023/11/Sage.png" class="img-fluid"
                    alt="Sage" decoding="async" /></div>
            <div class="slider-item"><img width="125" height="50"
                    src="https://www.infinity-globus.com/wp-content/uploads/2023/11/Avalara.png" class="img-fluid"
                    alt="Avalara" decoding="async" /></div>
            <div class="slider-item"><img width="125" height="50"
                    src="https://www.infinity-globus.com/wp-content/uploads/2023/11/TaxJar.png" class="img-fluid"
                    alt="TaxJar" decoding="async" /></div>
            <div class="slider-item"><img width="125" height="50"
                    src="https://www.infinity-globus.com/wp-content/uploads/2023/11/ADP.png" class="img-fluid" alt="ADP"
                    decoding="async" /></div>
            <div class="slider-item"><img width="125" height="50"
                    src="https://www.infinity-globus.com/wp-content/uploads/2023/11/Gusto.png" class="img-fluid"
                    alt="Gusto" decoding="async" /></div>
            <div class="slider-item"><img width="125" height="50"
                    src="https://www.infinity-globus.com/wp-content/uploads/2023/11/Zoho.png" class="img-fluid"
                    alt="Zoho" decoding="async" /></div>
            <div class="slider-item"><img width="125" height="50"
                    src="https://www.infinity-globus.com/wp-content/uploads/2023/11/Wave.png" class="img-fluid" alt=""
                    decoding="async" /></div>
            <div class="slider-item"><img width="125" height="50"
                    src="https://www.infinity-globus.com/wp-content/uploads/2023/11/AuditFile.png" class="img-fluid"
                    alt="AuditFile" decoding="async" /></div>

        </div>

        <!-- Right white overlay -->
        <div class="slider-overlay slider-overlay-right"></div>
    </div>


</div>

<div class="client-slider">
    <div class="container">
        <div id="client-slider-2" class="owl-carousel owl-theme client-slid client-slider-2">
            <div class="item"></div>
            <div class="item"></div>
            <div class="item"></div>
            <div class="item"></div>
            <div class="item"></div>
            <div class="item"></div>
            <div class="item"></div>
            <div class="item"></div>
            <div class="item"></div>
            <div class="item"></div>
            <div class="item"></div>
            <div class="item"></div>
            <div class="item"></div>
            <div class="item"></div>
        </div>
    </div>
</div>

<!-- Features -->
<section id="features" class="section-1 features offers featured" style="padding: 40px 0;">
    <div class="container">
        <div class="row justify-content-center items">
            <div class="col-md-8 text-center">
                <h3>A Leading Outsourced Firm for Maximizing Profits  & Minimizing Hassles!</h3>
            </div>
        </div>
    </div>
</section>

<!-- about -->
<section id="funfacts" class="section-2 highlights image-right counter funfacts featured">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 pr-md-5 align-self-center text-center text-md-left text items">
                <div data-aos="fade-up" class="row intro mb-4">
                    <div class="col-12 p-0">
                        <span class="pre-title m-auto m-md-0">About the network</span>
                        <h2><span class="featured"><span>About</span></span> Us</h2>
                        <p>We have been providing outsourced taxation and accounting services to CPAs, EAs and accounting firms based in the USA, UK, Canada, and Australia.</p>
                        <p>Our team has over two decades of experience in outsourced accounting & tax preparation services and ensures a greater transparency with control to keep an eye on your business.</p>
                    </div>
                </div>
                <div class="row items">
                    <div data-aos="fade-up" class="col-12 col-md-4 m-0 p-0 pr-md-4 item">
                        <div data-percent="500" class="radial left">
                            <span></span>
                        </div>
                        <h4>Employees</h4>
                        <!-- <p>Lorem ipsum dolor sit amet.</p> -->
                    </div>
                    <div data-aos="fade-up" class="col-12 col-md-4 m-0 p-0 pr-md-4 item">
                        <div data-percent="200" class="radial left">
                            <span></span>
                        </div>
                        <h4>Clients</h4>
                        <!-- <p>Lorem ipsum dolor sit amet.</p> -->
                    </div>
                    <div data-aos="fade-up" class="col-12 col-md-4 m-0 p-0 pr-md-4 item">
                        <div data-percent="20" class="radial left">
                            <span></span>
                        </div>
                        <h4>Experience</h4>
                        <!-- <p>Lorem ipsum dolor sit amet.</p> -->
                    </div>
                </div>

                <!-- Action -->
                <div data-aos="fade-up" class="buttons">
                    <div class="d-sm-inline-flex mb-5 mb-md-0">
                        <a href="#contact" class="smooth-anchor mx-auto mt-4 btn primary-button">EXPLORE MORE</a>
                        <!-- <a href="#" class="mx-auto ml-sm-4 mt-4 btn outline-button">EXPLORE MORE</a> -->
                    </div>
                </div>
                <div class="row pt-4">
                    <div class="col-md-2 p-0">
                        <img src="assets/images/c-1.png" alt="">
                    </div>
                    <div class="col-md-2 p-0 pl-1">
                        <img src="assets/images/c-2.png" alt="">
                    </div>
                    <div class="col-md-2 p-0 pl-1">
                        <img src="assets/images/c-3.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 p-0 image">
                <img src="assets/images/about.webp" class="fit-image" alt="Fit Image">
            </div>
        </div>
    </div>
</section>

<!-- talent -->
<section id="features" class="section-1 features offers featured">
    <div class="container">
        <div class="row pb-3">
            <div class="col-md-12">
                <h2>Personalized Talent for Your Goals</h2>
            </div>
        </div>
        <div class="row justify-content-center items">
            <div class="col-12 col-md-6 col-lg-4 item">
                <div class="card">
                    <i class="icon featured icon-people"></i>
                    <h4 class="m-1">Accounting</h4>
                    <ul style="list-style: none;">
                        <li>Account Staff</li>
                        <li>Account Senior</li>
                        <li>Account Supervisor</li>
                        <li>Account Manager</li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 item">
                <div class="card">
                    <i class="icon featured icon-pie-chart"></i>
                    <h4 class="m-1">Tax</h4>
                    <ul style="list-style: none;">
                        <li>Tax Staff</li>
                        <li>Tax Senior</li>
                        <li>Tax Supervisor</li>
                        <li>Tax Manager</li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 item">
                <div class="card">
                    <i class="icon featured icon-speedometer"></i>
                    <h4 class="m-1">Audit</h4>
                    <ul style="list-style: none;">
                        <li>Audit Staff</li>
                        <li>Audit Senior</li>
                        <li>Audit Supervisor</li>
                        <li>Audit Manager</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</section>

<!-- Projects -->
<section id="projects" class="section-3 odd showcase blog-grid filter-section projects">
    <div class="overflow-holder">
        <div class="container">
            <div class="row text-center intro">
                <div class="col-12">
                    <span class="pre-title">We do more for everyone</span>
                    <h2 class="mb-0"> <span class="featured"><span>Why</span></span> Choose Us?</h2>
                    <p>VSC OFFSHORE specializes in addressing the needs of CPAs, EAs and accounting firms across the
                        globe.
                        Our end-to-end outsourced tax and accounting services are designed to help you navigate
                        challenges and seize opportunities.</p>
                </div>
            </div>

            <div class="row my-3  d-flex justify-content-center">
                <div class="col-12 col-md-6 col-lg-4 item filter-item"
                    data-groups='["environment","institutional","social"]'>
                    <div class="row card p-0 text-center">
                        <div class="image-over">
                            <img src="assets/images/project-1.webp" alt="Lorem ipsum">
                        </div>
                        <div class="card-caption col-12 p-0">
                            <div class="card-body">
                                <a href="#">
                                    <h4>Data Security</h4>
                                    <p>Strong security systems and data protection policies.</p>
                                </a>
                            </div>
                        </div>
                        <a href="#"><i class="btn-icon fas fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item filter-item"
                    data-groups='["technology","events","innovation"]'>
                    <div class="row card p-0 text-center">
                        <div class="image-over">
                            <img src="assets/images/project-4.webp" alt="Lorem ipsum">
                        </div>
                        <div class="card-caption col-12 p-0">
                            <div class="card-body">
                                <a href="#">
                                    <h4 class="m-0">Qualified Team</h4>
                                    <p>Certified team of more than a decade experience in Tax & Accounting outsourcing.
                                    </p>
                                </a>
                            </div>
                        </div>
                        <a href="#"><i class="btn-icon fas fas fa-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-1 filter-sizer"></div>
            </div>

            <div class="row my-3 d-flex justify-content-center">
                <div class="col-12 col-md-6 col-lg-4 item filter-item"
                    data-groups='["environment","institutional","social"]'>
                    <div class="row card p-0 text-center">
                        <div class="image-over">
                            <img src="assets/images/project-4.webp" alt="Lorem ipsum">
                        </div>
                        <div class="card-caption col-12 p-0">
                            <div class="card-body">
                                <a href="#">
                                    <h4 class="m-0">Quality Control and Review Processes</h4>
                                    <p>Our rigorous quality control and review processes ensure that your work is
                                        accurate & compliant.</p>
                                </a>
                            </div>
                        </div>
                        <a href="#"><i class="btn-icon fas fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 item filter-item"
                    data-groups='["technology","events","innovation"]'>
                    <div class="row card p-0 text-center">
                        <div class="image-over">
                            <img src="assets/images/project-1.webp" alt="Lorem ipsum">
                        </div>
                        <div class="card-caption col-12 p-0">
                            <div class="card-body">
                                <a href="#">
                                    <h4>Flexible Operational Models</h4>
                                    <p>Our operational Models follow the “Business Your Way” philosophy.</p>
                                </a>
                            </div>
                        </div>
                        <a href="#"><i class="btn-icon fas fas fa-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-1 filter-sizer"></div>
            </div>

            <!-- <div class="row items filter-items  d-flex justify-content-center">
                 <div class="col-12 col-md-6 col-lg-4 item filter-item" data-groups='["environment","institutional","social"]'>
                     <div class="row card p-0 text-center">
                         <div class="image-over">
                             <img src="assets/images/project-3.jpg" alt="Lorem ipsum">
                         </div>
                         <div class="card-caption col-12 p-0">
                             <div class="card-body">
                                 <a href="#">
                                     <h4>International business trip in Shanghai</h4>
                                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                 </a>
                             </div>
                         </div>
                         <a href="#"><i class="btn-icon fas fas fa-arrow-right"></i></a>
                     </div>
                 </div>
                 <div class="col-12 col-md-6 col-lg-4 item filter-item" data-groups='["technology","events","innovation"]'>
                     <div class="row card p-0 text-center">
                         <div class="image-over">
                             <img src="assets/images/project-4.jpg" alt="Lorem ipsum">
                         </div>
                         <div class="card-caption col-12 p-0">
                             <div class="card-body">
                                 <a href="#">
                                     <h4>Technology workshop with education theme</h4>
                                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                 </a>
                             </div>
                         </div>
                         <a href="#"><i class="btn-icon fas fas fa-arrow-right"></i></a>
                     </div>
                 </div>

                 <div class="col-1 filter-sizer"></div>
             </div> -->
        </div>
    </div>
</section>

<!-- Process -->
<!-- <section id="process" class="section-4 process offers">
     <div class="container full">
         <div class="row text-center intro">
             <div class="col-12">
                 <span class="pre-title">How it works in practice</span>
                 <h2><span class="featured"><span>Process</span></span> Management</h2>
                
             </div>
         </div>
         <div class="row justify-content-center text-center items">
             <div class="col-12 col-md-6 col-lg-2 item">
                 <div class="step"><span>01</span></div>
                 <h4>Collection of information</h4>
                 <p>Lorem ipsum dolor sit amet consectetur.</p>
             </div>
             <div class="col-12 col-md-6 col-lg-2 item">
                 <div class="step"><span>02</span></div>
                 <h4>Strategic planning</h4>
                 <p>Lorem ipsum dolor sit amet consectetur.</p>
             </div>
             <div class="col-12 col-md-6 col-lg-2 item">
                 <div class="step"><span>03</span></div>
                 <h4>Assignment of responsibilities</h4>
                 <p>Lorem ipsum dolor sit amet consectetur.</p>
             </div>
             <div class="col-12 col-md-6 col-lg-2 item">
                 <div class="step"><span>04</span></div>
                 <h4>Formatting process</h4>
                 <p>Lorem ipsum dolor sit amet consectetur.</p>
             </div>
             <div class="col-12 col-md-6 col-lg-2 item">
                 <div class="step"><span>05</span></div>
                 <h4>Continuity formalization</h4>
                 <p>Lorem ipsum dolor sit amet consectetur.</p>
             </div>
         </div>
     </div>
 </section> -->



<!-- Testimonials -->
<section id="testimonials" class="section-5 carousel testimonials">
    <div class="overflow-holder">
        <div class="container">
            <div class="row text-center intro">
                <div class="col-12">

                    <h2>Knowledge <span class="featured"><span> Treasure </span></span></h2>

                </div>
            </div>
            <div class="swiper-container mid-slider items" data-perview="3">
                <div class="swiper-wrapper">
                    <div class="swiper-slide slide-center item">
                        <div class="row card">
                            <div class="col-12">
                                <img src="assets/images/testimonial.webp" alt="Logo" class="logo">
                                <p>I love working with you!!!! Your team has been very professional, courteous, and
                                    prompt in helping me handle the workload of my firm. Resolving many special and
                                    complex tasks that are beneficial to my firm.</p>
                                <h6>lorem ipsum</h6>
                                <i class="quote-right fas fa-quote-right"></i>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide slide-center item">
                        <div class="row card">
                            <div class="col-12">
                                <img src="assets/images/testimonial.webp" alt="Logo" class="logo">
                                <p>Thanks for taking on tax & bookkeeping service for my company. It was a new venture
                                    but is so crucial to Tax-Bookkeeping company like mine that it is a surprise at how
                                    professionally you complete the tasks.</p>
                                <h6>lorem ipsum</h6>
                                <i class="quote-right fas fa-quote-right"></i>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide slide-center item">
                        <div class="row card">
                            <div class="col-12">
                                <img src="assets/images/testimonial.webp" alt="Logo" class="logo">
                                <p>Learning about new clients and the way they have their accounting can be tricky but
                                    Team VSC OFFSHORE has been a quick learner and has taken over tasks entirely
                                    which has reduced our training time and workload.</p>
                                <h6>lorem ipsum</h6>
                                <i class="quote-right fas fa-quote-right"></i>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide slide-center item">
                        <div class="row card">
                            <div class="col-12">
                                <img src="assets/images/testimonial.webp" alt="Logo" class="logo">
                                <p>I love working with you!!!! Your team has been very professional, courteous, and
                                    prompt in helping me handle the workload of my firm. Resolving many special and
                                    complex tasks that are beneficial to my firm.</p>
                                <h6>lorem ipsum</h6>
                                <i class="quote-right fas fa-quote-right"></i>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide slide-center item">
                        <div class="row card">
                            <div class="col-12">
                                <img src="assets/images/testimonial.webp" alt="Logo" class="logo">
                                <p>Thanks for taking on tax & bookkeeping service for my company. It was a new venture
                                    but is so crucial to Tax-Bookkeeping company like mine that it is a surprise at how
                                    professionally you complete the tasks.</p>
                                <h6>lorem ipsum</h6>
                                <i class="quote-right fas fa-quote-right"></i>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide slide-center item">
                        <div class="row card">
                            <div class="col-12">
                                <img src="assets/images/testimonial.webp" alt="Logo" class="logo">
                                <p>Learning about new clients and the way they have their accounting can be tricky but
                                    Team VSC OFFSHORE has been a quick learner and has taken over tasks entirely
                                    which has reduced our training time and workload.</p>
                                <h6>lorem ipsum</h6>
                                <i class="quote-right fas fa-quote-right"></i>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide slide-center item">
                        <div class="row card">
                            <div class="col-12">
                                <img src="assets/images/testimonial.webp" alt="Logo" class="logo">
                                <p>I love working with you!!!! Your team has been very professional, courteous, and
                                    prompt in helping me handle the workload of my firm. Resolving many special and
                                    complex tasks that are beneficial to my firm.</p>
                                <h6>lorem ipsum</h6>
                                <i class="quote-right fas fa-quote-right"></i>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide slide-center item">
                        <div class="row card">
                            <div class="col-12">
                                <img src="assets/images/testimonial.webp" alt="Logo" class="logo">
                                <p>Thanks for taking on tax & bookkeeping service for my company. It was a new venture
                                    but is so crucial to Tax-Bookkeeping company like mine that it is a surprise at how
                                    professionally you complete the tasks.</p>
                                <h6>lorem ipsum</h6>
                                <i class="quote-right fas fa-quote-right"></i>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide slide-center item">
                        <div class="row card">
                            <div class="col-12">
                                <img src="assets/images/testimonial.webp" alt="Logo" class="logo">
                                <p>Learning about new clients and the way they have their accounting can be tricky but
                                    Team VSC OFFSHORE has been a quick learner and has taken over tasks entirely
                                    which has reduced our training time and workload.</p>
                                <h6>lorem ipsum</h6>
                                <i class="quote-right fas fa-quote-right"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>


<!-- Service -->
<section id="funfacts" class="section-2 highlights image-right counter funfacts featured">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 pr-md-5 align-self-center text-center text-md-left text items">
                <div data-aos="fade-up" class="row intro mb-4">
                    <div class="col-12 p-0">
                        <span class="pre-title m-auto m-md-0"> A Holistic Solution for All Your Outsourcing Needs
                        </span>
                        <h2>Our <span class="featured"><span>Services</span></span></h2>
                        <p>Our experienced team in Australia extends a wide range of outsourced Bookkeeping, Accounting
                            and Tax, SMSF, Paraplanning and Loans Processing services that are aimed towards enhancing
                            your business stature and bringing optimum output at all times. With the aid of cutting-edge
                            technology and advanced strategies, we strive to assist you in your business endeavors.</p>
                    </div>
                </div>

                <!-- Action -->
                <div data-aos="fade-up" class="buttons">
                    <div class="d-sm-inline-flex mb-5 mb-md-0">
                        <a href="#contact" class="smooth-anchor mx-auto mt-4 btn primary-button">EXPLORE MORE</a>
                        <!-- <a href="#" class="mx-auto ml-sm-4 mt-4 btn outline-button">EXPLORE MORE</a> -->
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 p-0 image">
                <img src="https://www.infinity-globus.com/au/wp-content/uploads/2024/02/Infinity-Australia.webp"
                    class="fit-image" alt="Fit Image">
            </div>
        </div>
    </div>
</section>

<!-- Partners -->
<section id="partners" class="section-1 offers testimonials">
    <div class="container">
        <div class="row justify-content-center items">
            <div data-aos="fade-up" class="col-12 col-md-6 item">
                <div class="card">
                    <div class="col-12">
                        <img src="assets/images/eBooks.jpg" alt="Logo" class="logo" style="border-radius: 0%;">
                        <h4>eBooks</h4>
                        <p>Discover Our Vast Collection of eBooks Explore a World of Knowledge at Your Fingertips</p>

                        <!-- Action -->
                        <div class="buttons">
                            <div class="d-sm-inline-flex">
                                <a href="#" class="mt-3 btn outline-button">READ MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div data-aos="fade-up" class="col-12 col-md-6 item">
                <div class="card">
                    <div class="col-12">
                        <img src="assets/images/infographics.jpg" alt="Logo" class="logo" style="border-radius: 0%;">
                        <h4>Infographics</h4>
                        <p>Get interesting accounting marketing facts, tips and tools to help you drive new clients to
                            your firm.</p>

                        <!-- Action -->
                        <div class="buttons">
                            <div class="d-sm-inline-flex">
                                <a href="#" class="mt-3 btn outline-button">READ MORE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<script>
    const sliderWrapper = document.querySelector('.slider-wrapper');
    let scrollAmount = 1; // Adjust this value to control speed

    function startSlider() {
        // Move the slider to the left continuously
        sliderWrapper.style.transform = `translateX(${-scrollAmount}px)`;

        // Increase the scroll amount for smooth movement
        scrollAmount += 1; // Higher value = faster scroll

        // Reset scrollAmount if it exceeds the width of slider content for looping
        if (scrollAmount >= sliderWrapper.scrollWidth / 2) {
            scrollAmount = 0; // Reset for infinite scrolling effect
        }

        // Use requestAnimationFrame to call startSlider again for a smooth loop
        requestAnimationFrame(startSlider);
    }

    // Initialize the slider
    requestAnimationFrame(startSlider);
</script>