<style>
    /* Styling the container */
    .slider-container {
        width: 100%;
        overflow: hidden;
        position: relative;
        display: flex;
        justify-content: center;
        background: #f9f9f9;
        padding: 20px 0;
    }

    /* Slider track */
    .slider-wrapper {
        display: flex;
        animation: scroll 15s linear infinite;
        gap: 15px;
    }

    /* Individual slider item */
    .slider-item {
        flex-shrink: 0;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    /* Image styling */
    .slider-item img {
        width: 125px;
        height: 50px;
        object-fit: contain;
        transition: transform 0.3s ease;
    }

    /* Hover effect for images */
    .slider-item img:hover {
        transform: scale(1.1);
    }

    /* Infinite scroll animation */
    @keyframes scroll {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(-100%);
        }
    }

    /* Responsive adjustments for mobile */
    @media screen and (max-width: 768px) {
        .slider-wrapper {
            gap: 10px;
        }

        .slider-item img {
            width: 100px;
            height: 40px;
        }
    }

    /* Mobile-Only Header Row */
@media (max-width: 768px) {
    
    .udesk{
        display: none;
    }
    .umobile{
        display: block;
    }
}

/* Hide on larger screens */
@media (min-width: 769px) {
   
    .udesk{
        display: block;
    }
    .umobile{
        display: none;
    }
}
</style>
<!-- Hero -->

<!-- mobile -->
<section class="hero p-0 odd umobile">
    <div class="swiper-container no-slider animation slider-h-100 slider-h-auto">
        <div class="swiper-wrapper">

            <!-- Item 1 -->
            <div class="swiper-slide slide-center">

                <!-- Media -->
                <img src="assets/images/slider-1.jpg" alt="Full Image" class="full-image d-banner" data-mask="50">
                <img src="assets/images/uk-m.jpg" alt="Full Image" class="full-image m-banner" data-mask="50">

                <div class="slide-content row">
                    <div class="col-12 d-flex justify-content-start inner">
                        <div class="left text-left">

                            <!-- Content -->
                            <h1 data-aos="zoom-in" data-aos-delay="2000" class=" b-heading title effect-static-text">
                                <!-- <span class="pre-title m-0">Human Resources</span> -->
                                <span class="pt-5"> Outsourcing<span class="featured bottom"><span>Your
                                            Way!</span></span>
                            </h1>
                            <p data-aos="zoom-in" data-aos-delay="2400" class="description bigger"> Get accurate financial
                                statements at month-end with our Outsource Bookkeeping Services</p>

                            <!-- Action -->
                            <div data-aos="fade-up" data-aos-delay="2800" class="buttons">
                                <div class="d-sm-inline-flex">
                                <a href="contact" class="mb-4 btn primary-button">Know More</a>
                                    <!-- <a href="#features" class="smooth-anchor ml-sm-4 mt-4 btn outline-button">READ MORE</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Item 2 -->
            <!-- <div class="swiper-slide slide-center">

                <img src="assets/images/banner.webp" alt="Full Image" class="full-image" data-mask="50">

                <div class="slide-content row">
                    <div class="col-12 d-flex justify-content-start inner">
                        <div class="left text-left">

                            <h1 data-aos="zoom-in" data-aos-delay="2000" class="title effect-static-text">
                                <span class="pt-5"> Outsourcing<span class="featured bottom"><span>Your
                                            Way!</span></span>
                            </h1>
                            <p data-aos="zoom-in" data-aos-delay="2400" class="description bigger"> A Trusted Outsourced
                                Firm for Bookkeeping, Accounting and Tax, Paraplanning and Loans Processing in
                                Middle East </p>

                            <div data-aos="fade-up" data-aos-delay="2800" class="buttons">
                                <div class="d-sm-inline-flex">
                                    
                                <a href="contact" class=" mt-4 btn primary-button">Know More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

        </div>
    </div>
</section>

<!-- desktop -->
<section class="hero p-0 odd udesk">
    <div class="swiper-container no-slider animation slider-h-100 slider-h-auto">
        <div class="swiper-wrapper">

            <!-- Item 1 -->
            <div class="swiper-slide slide-center">

                <!-- Media -->
                <img src="assets/images/sl11.jpeg" alt="Full Image" width="100%">

                <div class="slide-content row d-none">
                    <div class="col-12 d-flex justify-content-start inner">
                        <div class="left text-left">

                            <!-- Content -->
                            <h1 data-aos="zoom-in" data-aos-delay="2000" class="title effect-static-text">
                                <!-- <span class="pre-title m-0">Human Resources</span> -->
                                <span class="pt-5"> Outsourcing<span class="featured bottom"><span>Your
                                            Way!</span></span>
                            </h1>
                            <p data-aos="zoom-in" data-aos-delay="2400" class="description bigger"> Get accurate financial
                                statements at month-end with our Outsource Bookkeeping Services</p>

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
                                Firm for Bookkeeping, Accounting and Tax, Paraplanning and Loans Processing in
                                Middle East </p>

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
<div class="row ">
    <div class="slider-container" style="margin: 10px 0;">
        <!-- Left white overlay -->
        <div class="slider-overlay slider-overlay-left"></div>

        <!-- Slider wrapper -->
        <div class="slider-container">
            <div class="slider-wrapper">
                <div class="slider-item">
                    <img src="assets/images/logo/1.png" alt="QuickBooks" decoding="async" />
                </div>
                <div class="slider-item">
                    <img src="assets/images/logo/2.png" alt="Drake Software" decoding="async" />
                </div>
                <div class="slider-item">
                    <img src="assets/images/logo/3.png" alt="Ultratax" decoding="async" />
                </div>
                <div class="slider-item">
                    <img src="assets/images/logo/4.png" alt="Xero" decoding="async" />
                </div>
                <div class="slider-item">
                    <img src="assets/images/logo/5.png" alt="CCH Axcess" decoding="async" />
                </div>
                <div class="slider-item">
                    <img src="assets/images/logo/6.png" alt="ProConnect" decoding="async" />
                </div>
                <div class="slider-item">
                    <img src="assets/images/logo/7.png" alt="Sage" decoding="async" />
                </div>
                <div class="slider-item">
                    <img src="assets/images/logo/8.png" alt="Avalara" decoding="async" />
                </div>
                <div class="slider-item">
                    <img src="assets/images/logo/9.png" alt="TaxJar" decoding="async" />
                </div>
                <div class="slider-item">
                    <img src="assets/images/logo/10.png" alt="ADP" decoding="async" />
                </div>
            </div>
        </div>

        <!-- Right white overlay -->
        <div class="slider-overlay slider-overlay-right"></div>
    </div>


</div>


<!-- Features -->
<section id="features" class="section-1 features offers featured" style="padding: 40px 0;">
    <div class="container">
        <div class="row justify-content-center items">
            <div class="col-md-12 text-center">
                <h2 class="mb-0">A Leading Outsourced Firm for Maximizing </h2>
                <h2 class="mt-0"> Profits & Minimizing Hassles!</h2>
            </div>
        </div>
    </div>
</section>

<!-- about -->
<section id="funfacts" class="section-2 highlights image-right counter skills funfacts featured">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 pr-md-5 align-self-center text-center text-md-left text items">
                <div data-aos="fade-up" class="row intro mb-4">
                    <div class="col-12 p-0">
                        <span class="pre-title  m-md-0">About the network</span>
                        <h2><span class="featured"><span>About</span></span> Us</h2>
                        <p class="mb-3 mt-3 m-0">VSC Offshore is the brand name of global outsourcing arm of VSC Consulting Inc., a US-based entity, and an extension of Vinod Singhal & Co LLP—one of India’s most respected Chartered Accountant firms with a legacy spanning over 33 years.</p>
                        <p class="mb-3 m-0"> With more than 30 offices across India, Vinod Singhal & Co LLP has established itself as a leader in delivering exceptional financial expertise and professional integrity.</p>
                        <p class="mb-3 m-0">At VSC Offshore, we specialize in providing seamless taxation, accounting, and financial solutions to CPAs, EAs, and accounting firms in the USA, UK, Middle East, and beyond. </p>
                    </div>
                </div>


                <div class="row items">
                    <div data-aos="fade-up" class="col-4 col-md-4 m-0 p-0 pr-md-4 item">
                        <div data-percent="150" class="radial left">
                            <span></span>
                        </div>
                        <h4 class="m">Employees</h4>
                        <!-- <p>Lorem ipsum dolor sit amet.</p> -->
                    </div>
                    <div data-aos="fade-up" class="col-4 col-md-4 m-0 p-0 pr-md-4 item">
                        <div data-percent="100" class="radial left">
                            <span></span>
                        </div>
                        <h4 class="m">Clients</h4>
                        <!-- <p>Lorem ipsum dolor sit amet.</p> -->
                    </div>
                    <div data-aos="fade-up" class="col-4 col-md-4 m-0 p-0 pr-md-4 item">
                        <div data-percent="15" class="radial left">
                            <span></span>
                        </div>
                        <h4 class="m">Experience</h4>
                        <!-- <p>Lorem ipsum dolor sit amet.</p> -->
                    </div>
                </div>


                <!-- Action -->
                <div data-aos="fade-up" class="buttons">
                    <div class="d-sm-inline-flex ">
                        <a href="onboarding" class="my-3 btn primary-button">EXPLORE MORE</a>
                        <!-- <a href="#" class="mx-auto ml-sm-4 mt-4 btn outline-button">EXPLORE MORE</a> -->
                    </div>
                </div>
                <div class="row pt-md-1 mb-3">
                    
                    <div class="col-3 col-md-2 p-0 ml-1">
                        <img src="assets/images/c-2.png" alt="">
                    </div>
                    <div class="col-3 col-md-2 p-0 ml-1">
                        <img src="assets/images/c-3.png" alt="">
                    </div>
                    <div class="col-3 col-md-2 p-0">
                        <img src="assets/images/c-1.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 p-0 image ">
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
                <h2><span class="featured"><span>Personalized </span></span> Talent for Your Goals</h2>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card-container">
                <!-- Card 1 -->
                <div class="card1">
                    <div class="icon-section accounting-icon d-flex align-items-start">
                        <!-- <img src="assets/images/1.png" alt="Tailored Financial Solutions"> -->
                    </div>
                    <div class="content">
                        <h3 class="m-0">Tailored Financial Solutions</h3>
                        <hr class="my-4">
                        <ul>
                            <li>Comprehensive Services: Bookkeeping, Accounting, and Tax management</li>
                            <li>Personalized for You: Solutions aligned with your business goals</li>
                            <li>Expert Support: Middle East-based experienced professionals</li>
                        </ul>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="card1">
                    <div class="icon-section tax-icon">
                        <!-- <img src="assets/images/2.png" alt="Streamlined Processes"> -->
                    </div>
                    <div class="content">
                        <h3 class="m-0">Streamlined Processes</h3>
                        <hr class="my-4">
                        <ul>
                            <li>Outsourced Expertise: Paraplanning and Loans Processing</li>
                            <li>Technology-Driven: Cutting-edge tools for efficiency</li>
                            <li>Enhanced Output: Optimizing performance for better results</li>
                        </ul>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="card1">
                    <div class="icon-section audit-icon">
                        <!-- <img src="assets/images/3.png" alt="Growth-Oriented Approach"> -->
                    </div>
                    <div class="content">
                        <h3 class="m-0">Growth-Oriented Approach</h3>
                        <hr class="my-4">
                        <ul>
                            <li>Business Focused: Strategies to elevate your business stature</li>
                            <li>Continuous Improvement: Always aiming for optimal results</li>
                            <li>Reliable Partnership: Supporting your business endeavors</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>

</section>

<!-- Projects -->
<section id="projects" class="section-3 odd showcase blog-grid filter-section projects ">
    <div class="overflow-holder">
        <div class="container">
            <div class="row d-flex justify-content-center text-center intro">
                <div class="col-md-10">
                    <span class="pre-title">We do more for everyone</span>
                    <h2 class="mb-0"> <span class="featured"><span>Why</span></span> Choose Us?</h2>
                    <p>VSC OFFSHORE specializes in addressing the needs of CPAs, EAs and accounting firms across the
                        globe.
                        Our end-to-end outsourced tax and accounting services are designed to help you navigate
                        challenges and seize opportunities.</p>
                </div>
            </div>
            <!-- <div class="row my-3  d-flex justify-content-center">
                <div class="col-12 col-md-6 col-lg-4 item filter-item"
                    data-groups='["environment","institutional","social"]'>
                    <div class="row card p-0 text-center">
                        <div class="image-over">
                            <img src="assets/images/project-1.webp" alt="Lorem ipsum">
                        </div>
                        <div class="card-caption col-12 p-0">
                            <div class="card-body">
                                <a href="onboarding#ds1">
                                    <h4>Data Security</h4>
                                    <p>Strong security systems and data protection policies.</p>
                                </a>
                            </div>
                        </div>
                        <a href="onboarding#ds1"><i class="btn-icon fas fas fa-arrow-right"></i></a>
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
                                <a href="onboarding#team">
                                    <h4 class="m-0">Qualified Team</h4>
                                    <p>Certified team of more than a decade experience in Tax & Accounting outsourcing.
                                    </p>
                                </a>
                            </div>
                        </div>
                        <a href="onboarding#team"><i class="btn-icon fas fas fa-arrow-right"></i></a>
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
                                <a href="onboarding#tn1">
                                    <h4 class="m-0">Quality Control and Review Processes</h4>
                                    <p>Our rigorous quality control and review processes ensure that your work is
                                        accurate & compliant.</p>
                                </a>
                            </div>
                        </div>
                        <a href="onboarding#tn1"><i class="btn-icon fas fas fa-arrow-right"></i></a>
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
                                <a href="onboarding#op1">
                                    <h4>Flexible Operational Models</h4>
                                    <p>Our operational Models follow the “Business Your Way” philosophy.</p>
                                </a>
                            </div>
                        </div>
                        <a href="onboarding#op1"><i class="btn-icon fas fas fa-arrow-right"></i></a>
                    </div>
                </div>

                <div class="col-1 filter-sizer"></div>
            </div> -->

            <div class="row my-3 d-flex justify-content-center">
                <div class="col-6 col-md-6 col-lg-4 item filter-item" data-groups='["environment","institutional","social"]'>
                    <div class="row card p-0 text-center">
                        <div class="image-over">
                            <img src="assets/images/ds3.jpg" alt="Lorem ipsum">
                        </div>
                        <div class="card-caption col-12 p-0">
                            <div class="card-body">
                                <a href="onboarding#ds1">
                                    <h4 class="ds-mob">Data Security</h4>
                                    <p>Strong security systems and data protection policies.</p>
                                </a>
                            </div>
                        </div>
                        <a href="onboarding#ds1"><i class="btn-icon fas fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-6 col-md-6 col-lg-4 item filter-item" data-groups='["technology","events","innovation"]'>
                    <div class="row card p-0 text-center">
                        <div class="image-over">
                            <img src="assets/images/qt3.jpg" alt="Lorem ipsum">
                        </div>
                        <div class="card-caption col-12 p-0">
                            <div class="card-body">
                                <a href="onboarding#team">
                                    <h4 class="m-0">Qualified Team</h4>
                                    <p>Certified team of more than a decade experience in Tax & Accounting outsourcing.</p>
                                </a>
                            </div>
                        </div>
                        <a href="onboarding#team"><i class="btn-icon fas fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-1 filter-sizer"></div>
            </div>

            <div class="row my-3 d-flex justify-content-center">
                <div class="col-6 col-md-6 col-lg-4 item filter-item" data-groups='["environment","institutional","social"]'>
                    <div class="row card p-0 text-center">
                        <div class="image-over">
                            <img src="assets/images/r3.jpg" alt="Lorem ipsum">
                        </div>
                        <div class="card-caption col-12 p-0">
                            <div class="card-body">
                                <a href="onboarding#tn1">
                                    <h4 class="m-0">Quality Control and Review Processes</h4>
                                    <p>Our rigorous quality control and review processes ensure that your work is
                                        accurate & compliant.</p>
                                </a>
                            </div>
                        </div>
                        <a href="onboarding#tn1"><i class="btn-icon fas fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-6 col-md-6 col-lg-4 item filter-item" data-groups='["technology","events","innovation"]'>
                    <div class="row card p-0 text-center">
                        <div class="image-over">
                            <img src="assets/images/fl3.jpg" alt="Lorem ipsum">
                        </div>
                        <div class="card-caption col-12 p-0">
                            <div class="card-body">
                                <a href="onboarding#op1">
                                    <h4>Flexible Operational Models</h4>
                                    <p>Our operational Models follow the “Business Your Way” philosophy.</p>
                                </a>
                            </div>
                        </div>
                        <a href="onboarding#op1"><i class="btn-icon fas fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-1 filter-sizer"></div>
            </div>

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
<!-- <section id="testimonials" class="section-5 carousel testimonials featured">
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
</section> -->


<!-- Service -->
<!-- <section id="funfacts" class="section-2 highlights image-right counter funfacts featured">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 pr-md-5 align-self-center text-center text-md-left text items">
                <div data-aos="fade-up" class="row intro mb-4">
                    <div class="col-12 p-0">
                        <span class="pre-title m-auto m-md-0"> A Holistic Solution for All Your Outsourcing Needs
                        </span>
                        <h2>Our <span class="featured"><span>Services</span></span></h2>
                        <p>Our experienced team in Middle East extends a wide range of outsourced Bookkeeping, Accounting
                            and Tax, Paraplanning and Loans Processing services that are aimed towards enhancing
                            your business stature and bringing optimum output at all times. With the aid of cutting-edge
                            technology and advanced strategies, we strive to assist you in your business endeavors.</p>
                    </div>
                </div>

         
                <div data-aos="fade-up" class="buttons">
                    <div class="d-sm-inline-flex mb-5 mb-md-0">
                        <a href="#contact" class="smooth-anchor mx-auto mt-4 btn primary-button">EXPLORE MORE</a>
                    
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 p-0 image">
                <img src="https://www.infinity-globus.com/au/wp-content/uploads/2024/02/Infinity-Australia.webp"
                    class="fit-image" alt="Fit Image">
            </div>
        </div>
    </div>
</section> -->



<!-- slider -->
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const sliderWrapper = document.querySelector(".slider-wrapper");

        // Duplicate slider items for seamless infinite scrolling
        const items = Array.from(sliderWrapper.children);
        items.forEach((item) => {
            const clone = item.cloneNode(true);
            sliderWrapper.appendChild(clone);
        });

        // Pause the animation on hover
        sliderWrapper.addEventListener("mouseover", () => {
            sliderWrapper.style.animationPlayState = "paused";
        });

        // Resume the animation when hover ends
        sliderWrapper.addEventListener("mouseout", () => {
            sliderWrapper.style.animationPlayState = "running";
        });
    });
</script>



<!-- #open -->
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const hash = window.location.hash;
        if (hash) {
            const target = document.querySelector(hash);
            if (target) {
                target.scrollIntoView({
                    behavior: "smooth"
                });
            }
        }
    });
</script>