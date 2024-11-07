<link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet"
    href="https://unpkg.com/bs-brain@2.0.4/tutorials/accordions/accordion-6/assets/css/accordion-6.css">
<!-- banner -->
<script src="https://unpkg.com/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<link rel='stylesheet' id='infinityglobus-owl-theme-css'
    href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.0/assets/owl.theme.default.min.css?ver=1.0.0'
    media='all' />
<link rel='stylesheet' id='infinityglobus-owl-carousel-css'
    href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.0/assets/owl.carousel.min.css?ver=1.0.0'
    media='all' />
<style>
    /*====================== Inner Page Banner =====================*/

    .blue-bg h3,
    .blue-bg h4,
    .blue-bg h5,
    .blue-bg h6 {
        color: #fff;
    }

    .blue-bg {
        margin-top: 70px;
        padding: 70px 0;
        background: #001C40;
        color: #fff;
    }

    .details-accordion .accordion-item {
        background: transparent;
        border: 0;
    }

    .accordion-button {
        background: transparent;
        border-bottom: 2px solid;
        color: #fff;
    }

    .www .accordion-button {
        background: transparent;
        border-bottom: 2px solid;
        color: #000;
    }

    .accordion-button:not(.collapsed) {
        color: #fff;
        background-color: transparent;
        box-shadow: inset 0 calc(-1* var(--bs-accordion-border-width)) 0 var(--bs-accordion-border-color);
    }

    .www .accordion-button:not(.collapsed) {
        color: #000;
        background-color: transparent;
        box-shadow: inset 0 calc(-1* var(--bs-accordion-border-width)) 0 var(--bs-accordion-border-color);
    }

    .accordion-item {
        background-color: transparent;
        color: #fff;
    }

    .experiance-sec .experiance-card {
        display: flex;
        height: 100%;
    }

    .experiance-sec .experiance-card .experiance-img {
        width: 250px;
        height: 100%;
    }

    .experiance-sec .experiance-card .experiance-area {
        position: relative;
        padding: 30px 15px 30px 25px;
        width: calc(100% - 250px);
        border: 0 solid #D5D5D5;
        border-width: 1px 1px 1px 0;
    }

    .experiance-sec .experiance-card .experiance-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .inner-page h3,
    .pro-testimonials h3 {
        margin: 0 0 24px 0;
        font-size: 25px;
        line-height: 1.44;
    }

    .light-bg {
        /* padding: 70px 0; */
        background: #F3F3F3;
    }

    .section-part .testi-text-slider .item {
        padding: 20px 0 1px 0;
    }

    .section-part .testi-text-slider .testimonial-card {
        margin: 0;
        padding: 30px 50px;
        min-height: 250px
    }

    .section-part .testi-text-slider .testimonial-card::before {
        left: 20px;
        width: 60px;
    }

    .section-part .testi-text-slider .testimonial-card::after {
        top: -21px;
        left: 30px;
        width: 40px;
        height: 40px;
    }

    .section-part .testi-text-slider .icon {
        margin-right: 30px;
        width: 120px;
        height: 120px;
        line-height: normal;
        text-align: center;
        font-size: medium;
    }

    .section-part .testi-text-slider .testimonial-content {
        width: calc(100% - 150px);
    }

    .testi-text-slider .item {
        padding: 30px 25px 0 0;
    }

    .testi-text-slider .testimonial-card {
        margin: 30px 50px 0 0;
        padding: 50px 90px 45px 65px;
        border: 1px solid #DEDADA;
        border-radius: 5px;
        display: flex;
        position: relative;
    }

    .testi-text-slider .testimonial-card::before {
        content: '';
        position: absolute;
        top: -1px;
        left: 30px;
        width: 76px;
        height: 3px;
        background: #fff;
    }

    .testi-text-slider .testimonial-card::after {
        content: '';
        position: absolute;
        top: -31px;
        left: 39px;
        width: 57px;
        height: 51px;
        background: url(../images/icon-quote.svg) no-repeat center center;
        background-size: contain;
    }

    .testi-text-slider .testimonial-card .icon {
        margin-right: 40px;
        width: 152px;
        height: 152px;
        background: var(--theme-blue);
        border-radius: 50%;
        overflow: hidden;
    }

    .testi-text-slider .testimonial-card .testimonial-content {
        padding: 10px 0 0 0;
        width: calc(100% - 192px);
    }

    .testi-text-slider .testimonial-card .testimonial-content p {
        margin-bottom: 20px;
    }

    .testi-text-slider .testimonial-card .testimonial-content .designation {
        margin: 0;
        font-size: 18px;
        font-weight: 600;
        color: var(--theme-blue2);
    }

    .testi-text-slider.owl-theme .owl-nav {
        flex-direction: column;
        width: fit-content;
        position: absolute;
        bottom: 23%;
        right: 0px;
    }
    .section-part .testi-text-slider .item {
        padding: 20px 0 1px 0;
    }
    
    .section-part .testi-text-slider .testimonial-card {
        margin: 0;
        padding: 30px 50px;
    }
    
    .section-part .testi-text-slider .testimonial-card::before {
        left: 20px;
        width: 60px;
    }
    
    .section-part .testi-text-slider .testimonial-card::after {
        top: -21px;
        left: 30px;
        width: 40px;
        height: 40px;
    }
    
    .section-part .testi-text-slider .icon {
        margin-right: 30px;
        width: 120px;
        height: 120px;
    }
    .section-part .testi-text-slider .icon img {
        object-fit: cover;
        height:100%;
        border-radius:50%;
    }
    .section-part .testi-text-slider .testimonial-content {
        width: calc(100% - 150px);
    }
    .sp_arr .splide__arrows{
        position: absolute;
    right: 0;
    top: -18%;
    }
    .sp_arr .splide__arrow--prev{
       margin-left: -110px;
    }
    
</style>
<script src="
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js
"></script>
<link href="
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css
" rel="stylesheet">
<div class="blue-bg sec-with-shape py-5 ">
    <div class="" style="max-width: 95%; margin:auto;">
        <div class="row">
            <div class="col-md-4">
                <h5>Why is Infinity Globus Your Perfect Partner for Outsourced Multi-State Tax Preparation Services?
                </h5>
            </div>
            <div class="col-md-8">
                <!-- Accordion 6 - Bootstrap Brain Component -->
                <section class="bsb-accordion-6 py-3">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">

                                                Cost Efficient
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                We offer a cost-effective approach combined with exceptional outsourced
                                                tax return preparation services that are one of a kind in the industry.
                                                We, therefore, not only give you value-added services but even save your
                                                clients from unwanted expenditures.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                aria-expanded="false" aria-controls="collapseTwo">

                                                Cutting-Edge Technology
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                By leveraging modern technology, we provide the best tax preparation
                                                outsourcing services that optimize your experience and bring optimal
                                                results.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">

                                                Process Standardization
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                We are committed to offering you a guaranteed standardized process of
                                                tax planning that not only
                                                boosts overall efficiency but converts outsourced tax return preparation
                                                into a seamless experience.
                                            </div>
                                        </div>

                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseThree1"
                                                aria-expanded="false" aria-controls="collapseThree1">

                                                Diverse and Committed Workforce
                                            </button>
                                        </h2>
                                        <div id="collapseThree1" class="accordion-collapse collapse"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                We have a dedicated team of CPAs, EAs, Tax specialists and industry
                                                veterans who understand the
                                                know-how of the complex outsourcing tax return preparation demands
                                                of the industry.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseThree2"
                                                aria-expanded="false" aria-controls="collapseThree2">

                                                Assurance of Data Confidentiality
                                            </button>
                                        </h2>
                                        <div id="collapseThree2" class="accordion-collapse collapse"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                Infinity Globus keeps your client’s data confidentiality at the core
                                                of the services offered. As
                                                such, we secure every piece of information shared with the aid of
                                                our trusted software along with a
                                                team of reliable and responsible professionals.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseThree3"
                                                aria-expanded="false" aria-controls="collapseThree3">
                                                Exemplary Outsourced Tax Preparation Services
                                            </button>
                                        </h2>
                                        <div id="collapseThree3" class="accordion-collapse collapse"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                From our impeccable tax return services to our unfailing commitment
                                                to offering you the best services
                                                based on attention to detail, Infinity Globus is the answer to all
                                                your outsourced tax return
                                                requirements.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseThree4"
                                                aria-expanded="false" aria-controls="collapseThree4">
                                                Professional Advice and Guidance
                                            </button>
                                        </h2>
                                        <div id="collapseThree4" class="accordion-collapse collapse"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                We are always on our toes to assist and guide you with your client’s
                                                tax planning, and its solutions,
                                                thus ensuring maximum credits and deductions to them. Infinity
                                                Globus believes in providing you with
                                                tailored outsourced tax solutions at every step of your way.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseThree5"
                                                aria-expanded="false" aria-controls="collapseThree5">
                                                Adept in Complex Tax Returns
                                            </button>
                                        </h2>
                                        <div id="collapseThree5" class="accordion-collapse collapse"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                No matter how complex your client’s tax returns are, Infinity Globus
                                                can prepare and save money
                                                wherever possible, making your experience with your client a
                                                seamless one.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </section>

            </div>
        </div>
    </div>
</div>
<div class="light-bg experiance-sec py-5 image_box_section_c4ca4238a0b923820dcc509a6f75849b">
    <div class="container">
        <style>
            .image_box_section_c4ca4238a0b923820dcc509a6f75849b {
                padding: 100px 0px 70px 0px;
                background: #f3f3f3
            }

            ;
        </style>
        <div class="row g-4 image_box_c4ca4238a0b923820dcc509a6f75849b">
            <div class="col-xl-6">
                <div class="experiance-card">
                    <div class="experiance-img"><img width="700" height="634" src="assets/images/expertise.jpg"
                            class="no_lazy" alt="expertise" sizes="(max-width: 700px) 100vw, 700px"></div>
                    <div class="experiance-area">
                        <h3><b><span data-contrast="none">Our Expertise</span></b></h3>
                        <ul>
                            <li><span data-contrast="auto">Our team of exceptional tax litigation preparers has over 20
                                    years of industry experience.</span></li>
                            <li><span data-contrast="auto">Adept team of industry veterans.</span></li>
                            <li><span data-contrast="auto">We are a member of the American Institute of CPAs
                                    (AICPA).</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="experiance-card">
                    <div class="experiance-img"><img width="700" height="634" src="assets/images/trustworthiness.jpg"
                            class="no_lazy" alt="trustworthiness" sizes="(max-width: 700px) 100vw, 700px"></div>
                    <div class="experiance-area">
                        <h3>Trustworthiness</h3>
                        <ul>
                            <li>ISO 27001-2013 certified for the most standard Quality Measures for Information
                                Security.</li>
                            <li>A proud ISO 9001-2008 certified firm.</li>
                            <li>Trusted SOC 2 Type 2 compliant firm with stringent security software safeguarding client
                                data.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="www sec-with-shape py-5 ">
    <div class="" style="max-width: 95%; margin:auto;">
        <div class="row">
            <div class="col-md-4">
                <h5>Our Outsource Tax Litigation Resolution Services
                </h5>
                <p>With our expert assistance, forget the worries of handling complex tax litigation challenges alone!
                </p>
            </div>
            <div class="col-md-8">
                <!-- Accordion 6 - Bootstrap Brain Component -->
                <section class="bsb-accordion-6 py-3">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">

                                                Cost Efficient
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body" style="color:#000">
                                                <ul>
                                                    <li>
                                                        Tax litigation strategy assistance.
                                                    </li>
                                                    <li>Investigating other tax dispute settlement options.</li>
                                                    <li>Help with submissions before the different tax authorities</li>
                                                    <li>Support in the preparation and submission of various
                                                        applications to the relevant authorities for Mutual Agreement
                                                        Procedure (MAP) under tax treaties</li>
                                                    <li>Guiding counsel with the preparation and presentation of
                                                        appeals/petitions before high courts and the Supreme Court.</li>
                                                    <li>Examining any tax evasion or other arrangements to identify
                                                        hazards</li>
                                                    <li>Providing advice on tax evasion investigations and settlement
                                                        alternatives, including withdrawal from agreements</li>
                                                    <li>Ensuring that HMRC does not violate statutory time limitations
                                                        or its discovery and inquiry capabilities.</li>
                                                </ul>
                                                <p>In addition to strategic expertise, we have specific substantive tax
                                                    experience in several areas, including:</p>
                                                <ul>
                                                    <li>Disputes over income taxes</li>
                                                    <li>Disputes over transfer pricing</li>
                                                    <li>Employment tax liabilities</li>
                                                    <li>Disputes over estate and gift tax valuation</li>
                                                    <li>Tax collection conflicts</li>
                                                    <li>Collection Due Process (CDP) Disputes</li>
                                                    <li>Taxation of Native American tribal governments and their
                                                        enterprises</li>
                                                    <li>Tax-exempt issues</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                </section>

            </div>
        </div>
    </div>
</div>
<div class="light-bg testimonial_scssn py-5">
    <div class="container">
        <div class="section-part pro-testimonials">
            <h3 class="section-title">Clients' Testimonials</h3>
            <div class="splide testi-text-slider sp_arr" role="group" aria-label="Splide Basic HTML Example">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <div class="testimonial-card">
                                <div class="icon"><img width="150" height="150"
                                        src="assets/images/jonathan-convery.jpg"sizes="(max-width: 150px) 100vw, 150px"
                                        class="attachment-thumbnail size-thumbnail wp-post-image" alt=""
                                       ></div>
                                <div class="testimonial-content">
                                    <p>Learning about new clients and the way they have their accounting can be tricky
                                        but Team Infinity
                                        Globus has been a quick learner and has taken over tasks entirely which has
                                        reduced our training
                                        time...</p>
                                    <h6 class="designation">Jonathan Convery, CPA, MBA</h6>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="testimonial-card">
                                <div class="icon"><img width="150" height="150"
                                        src="assets/images/shlomi-golan.jpg"
                                        class="attachment-thumbnail size-thumbnail wp-post-image" alt="Shlomi Golan"
                                       
                                        sizes="(max-width: 150px) 100vw, 150px"></div>
                                <div class="testimonial-content">
                                    <p>I love working with you!!!! Your team has been very professional, courteous, and
                                        prompt in
                                        helping me handle the workload of my firm. Resolving many special and complex
                                        tasks that are
                                        beneficial to my firm.</p>
                                    <h6 class="designation">Shlomi Golan</h6>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="testimonial-card">
                                <div class="icon"><img width="150" height="150"
                                        src="assets/images/craig-carr.jpg"
                                        class="attachment-thumbnail size-thumbnail wp-post-image" alt="craig carr"
                                        sizes="(max-width: 150px) 100vw, 150px"></div>
                                <div class="testimonial-content">
                                    <p>Thank you for taking on tax &amp; bookkeeping service for my company. I know it
                                        was a new venture
                                        but is so crucial to Tax-Bookkeeping company like mine that it is a surprise at
                                        how...</p>
                                    <h6 class="designation">Craig Carr</h6>
                                </div>
                            </div>
                        </li>
                       
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var splide = new Splide('.splide', {
        perPage: 2,
        perMove:1,
              // Number of items per page
        rewind: true,      // Enable rewind mode
        autoplay: true,    // Enable autoplay
        interval: 3000,    // Autoplay interval in milliseconds (3 seconds here)
        gap: '20px',       // Gap between items, adjust as needed
        type: 'loop',  
        pagination: false, 
        breakpoints: {
            768: {
                perPage: 1,  // Show 1 slide on screens <= 768px
            },
        },   // Enables looping for smooth autoplay
    });
    
    splide.mount();
</script>


<!-- Load jQuery first -->