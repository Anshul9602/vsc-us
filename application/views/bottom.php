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
    <link rel="stylesheet" href="<?php echo base_url(''); ?>assets/css/main.css">
<style>
    /*====================== Inner Page Banner =====================*/
    .primary-button, .primary-button:visited, .primary-button:active {
        position: relative;
        z-index: 2;
        padding: 10px 25px;
        background-color: var(--primary-color);
        border-radius: 4px;
        border: 1px solid;
        border-color: var(--primary-color);
        color: var(--primary-b-color);
        font-weight: 500;
        -webkit-transition: all .4s ease-out 0s;
        -o-transition: all .4s ease-out 0s;
        -moz-transition: all .4s ease-out 0s;
        transition: all .4s ease-out 0s;
    }
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
    .section-title::after {
        content: '';
        position: absolute;
        left: calc(var(--bs-gutter-x)* .5);
      
        bottom:0;
        width: 80px;
        height: 3px;
        background: #f66c00;
    }
    .section-title1 {
        position: relative;
        margin-bottom: 20px;
        padding-bottom: 9px;
        font-size: 26px;
        line-height: 1.2;
        font-weight: 400;
        font-family: "Source Serif 4", serif;
    }
    .section-title1::after {
        content: '';
        position: absolute;
        left: calc(var(--bs-gutter-x)* .5);
        line-height: 1.2;
        bottom:0;
        width: 80px;
        height: 3px;
        background: #f66c00;
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
        height: 100%;
        border-radius: 50%;
    }

    .section-part .testi-text-slider .testimonial-content {
        width: calc(100% - 150px);
    }

    .sp_arr .splide__arrows {
        position: absolute;
        right: 0;
        top: -18%;
    }

    .sp_arr .splide__arrow--prev {
        margin-left: -110px;
    }

    .container {
        max-width: 90%;
        margin: auto;
    }
    .faq .accordion .accordion-item .accordion-button::before {
        content: "?";
        position: absolute;
        top: 50%;
        left: 4px;
        transform: translateY(-50%);
        width: 46px;
        height: 46px;
        background: #fff;
        border-radius: 50%;
        font-size: 26px;
        font-weight: 300;
        color: #FFA800;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: 0.4s all;
    }
   
    .faq .accordion .accordion-item .accordion-button, .faq .accordion .accordion-item:last-of-type .accordion-button.collapsed {
        font-family: sans-serif !important;
        padding: 15px 60px 15px 80px;
        background: rgb(0 28 64 / 7%);
        border: none;
        border-radius: 25px;
        box-shadow: none;
        font-size: 17px;
        font-weight: 500;
        line-height: 1.4;
        color: #001C40;
        transition: 0.5s;
        font-family: emoji;
    }
    .faq .accordion .accordion-item {
        margin-bottom: 25px;
        border-radius: 25px;
        border-bottom: none;
    }
    .faq .accordion .accordion-item .accordion-body {
        padding: 30px 40px 30px 80px;
    }

    h2.accordion-header{
    margin: 0 !important;
    }
    @media (max-width: 768px) {
        .inner-page h3 {
            margin-bottom: 15px;
            font-size: 22px;
        }
        .section-title1{
            font-size: 21px;
        }
        .section-title{
            font-size: 21px !important;
        }
        .testi-text-slider .testimonial-card {
            display: block !important;
        }

        .section-part .testi-text-slider .icon {
            margin-right: auto !important;

        }

        .section-part .testi-text-slider .testimonial-content {
            width: 100% !important;
        }

       

        .faq .accordion .accordion-item .accordion-button,
        .faq .accordion .accordion-item:last-of-type .accordion-button.collapsed {
            font-family: sans-serif !important;
            padding: 15px 15px 15px 20px;
            font-size: 16px;
        }

        .faq .accordion .accordion-item .accordion-button::before {
            display: none !important;
        }
        .faq .accordion .accordion-item .accordion-body {
            padding: 20px 20px 20px 30px;
        }
        .experiance-sec .experiance-card {
            display: block;
            height: auto;
        }
        .experiance-sec .experiance-card .experiance-img {
            width:100%;
            height: auto;
        }
        .experiance-sec h3 {
          font-size: 20px !important;
        }
        .inner-page h3 {
            margin-bottom: 15px;
            font-size: 22px;
        }
        .experiance-sec li {
          font-size: 16px !important;
        }
        .experiance-sec .experiance-card .experiance-area {
            position: relative;
            padding: 30px 15px 30px 25px;
            width: 100%;
            border: 0 solid #D5D5D5;
            border-width: 1px 1px 1px 0;
        }
    }
</style>
<script src="
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js
"></script>
<link href="
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css
" rel="stylesheet">
<div class="blue-bg sec-with-shape py-5 ">
    <div class="container" >
        <div class="row">
            <div class="col-md-4">
                <h5 class="section-title1" style="    position: relative;">Why is Infinity Globus Your Perfect Partner for Outsourced Multi-State Tax Preparation Services?
                </h5>
            </div>
            <div class="col-md-8">
                <!-- Accordion 6 - Bootstrap Brain Component -->
                <section class="bsb-accordion-6 py-3">
                  
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
    <div class="container" >
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
                    
                        <div class="row">
                            <div class="col-12">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseOne11" aria-expanded="false"
                                                aria-controls="collapseOne11">

                                                Cost Efficient
                                            </button>
                                        </h2>
                                        <div id="collapseOne11" class="accordion-collapse collapse "
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
            <h3 class="section-title" style="position: relative;">Clients' Testimonials</h3>
            <br><br>
            <div class="splide testi-text-slider sp_arr" role="group" aria-label="Splide Basic HTML Example">
                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <div class="testimonial-card">
                                <div class="icon"><img width="150" height="150" src="assets/images/jonathan-convery.jpg"
                                        sizes="(max-width: 150px) 100vw, 150px"
                                        class="attachment-thumbnail size-thumbnail wp-post-image" alt=""></div>
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
                                <div class="icon"><img width="150" height="150" src="assets/images/shlomi-golan.jpg"
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
                                <div class="icon"><img width="150" height="150" src="assets/images/craig-carr.jpg"
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
<div class="www sec-with-shape py-5 container">
    <!-- Accordion 6 - Bootstrap Brain Component -->
    <section class="bsb-accordion-6 py-3 container">

        <div class="row">
            <div class="col-12 faq">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                What is an outsourced tax preparation service for CPA firms?
                            </button>
                        </h2>
                        <div id="collapse1" class="accordion-collapse collapse show"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body" style="color:#000">
                                In an outsourced tax preparation service, a CPA firm hires an external service provider
                                to handle their clients’ tax returns. This can include services such as tax planning,
                                research, and preparation of returns. The goal of outsourcing tax preparation is often
                                to save time and resources and to ensure that the tax returns are prepared accurately
                                and are in compliance with all relevant tax laws and regulations.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse111" aria-expanded="true" aria-controls="collapse111">
                                How does an outsourced tax preparation service work?
                            </button>
                        </h2>
                        <div id="collapse111" class="accordion-collapse collapse " data-bs-parent="#accordionExample">
                            <div class="accordion-body" style="color:#000">
                                Provide your clients’ necessary financial and personal information to the outsourcing
                                service provider. This can include W-2s, 1099s, and other financial statements. The
                                outsourcing service provider will then use this information to prepare your clients’ tax
                                returns and share the same with you.
                                <br><br>
                                The outsourcing service provider will also ensure that the tax returns are prepared in
                                compliance with all relevant laws and regulations and may also provide additional
                                services such as tax planning and consulting to help the client minimize their tax
                                liability. The client will then review and approve the tax return before submission.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse2" aria-expanded="true" aria-controls="collapse2">
                                What are the benefits of using an outsourced tax preparation service?
                            </button>
                        </h2>
                        <div id="collapse2" class="accordion-collapse collapse " data-bs-parent="#accordionExample">
                            <div class="accordion-body" style="color:#000">
                                There are several benefits to using outsourced tax preparation services. These are as
                                follows:-<br><br>

                                <span style="font-weight: 500;"> Expertise:</span> Outsourced tax preparation service
                                providers have the knowledge and experience to ensure that your client’s tax returns are
                                accurate and in compliance with all relevant laws and regulations.<br><br>

                                <span style="font-weight: 500;">Time-saving:</span> Outsourcing the preparation of your
                                client’s tax returns can save you a significant amount of time and allow you to focus on
                                other important tasks, such as client acquisition and relationship management.<br><br>

                                <span style="font-weight: 500;"> Cost-effective:</span> Outsourcing tax preparation can
                                be more cost-effective than hiring a full-time in-house accountant or tax
                                professional.<br><br>

                                <span style="font-weight: 500;"> Reduced Risk:</span> An outsourced tax preparation
                                service can help minimize the risk of errors or non-compliance, which can result in
                                fines and penalties.<br><br>

                                <span style="font-weight: 500;"> Tax Planning:</span> A good outsourced tax preparation
                                service provider can also offer tax planning services to help you minimize your clients’
                                tax liability in future years.<br><br>

                                Representation: In case of an audit, an outsourced tax preparation service can also
                                represent you and provide all the necessary support.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse3" aria-expanded="true" aria-controls="collapse3">
                                How do I choose the right outsourced tax preparation service provider for my business?
                            </button>
                        </h2>
                        <div id="collapse3" class="accordion-collapse collapse " data-bs-parent="#accordionExample">
                            <div class="accordion-body" style="color:#000">
                                When choosing an outsourced tax preparation service provider for your business, there
                                are several factors to consider:<br><br>

                                <span style="font-weight: 500;"> Expertise:</span> Look for a service provider that has
                                experience in your industry and understands the specific tax laws and regulations that
                                apply to your client’s business.<br><br>

                                <span style="font-weight: 500;">Reputation:</span> Research the service provider’s
                                reputation and check for complaints or negative reviews. You can also ask for references
                                from their existing clients.<br><br>

                                <span style="font-weight: 500;">Services:</span> Make sure the service provider offers
                                the services you need, such as tax planning, accounting, and representation in case of
                                an audit.<br><br>

                                <span style="font-weight: 500;">Communication:</span> Choose a service provider that you
                                feel comfortable communicating with, the one who is responsive to your needs.<br><br>

                                <span style="font-weight: 500;">Cost:</span> Compare the costs of different service
                                providers and make sure that the service provider’s fees are in line with industry
                                standards & their expertise.<br><br>
                                <span style="font-weight: 500;">Data Security:</span> Make sure that the service
                                provider has a robust data security system in place to protect your clients’ sensitive
                                business information.<br><br>
                                <span style="font-weight: 500;">Certifications:</span> Look for service providers who
                                are certified by professional organizations.<br><br>
                                <span style="font-weight: 500;">Support:</span> Find out about the level of support the
                                service provider offers, so you know what to expect if you have any questions or issues
                                with your clients’ tax returns.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse4" aria-expanded="true" aria-controls="collapse4">
                                How much does an outsourced tax preparation service cost?
                            </button>
                        </h2>
                        <div id="collapse4" class="accordion-collapse collapse " data-bs-parent="#accordionExample">
                            <div class="accordion-body" style="color:#000">
                                The cost of an outsourced tax preparation service can vary widely depending on the
                                complexity of the tax return, the services provided, and also on the location of the
                                service provider. It can range anywhere from a few hundred to thousand dollars. It’s
                                important to get quotes from multiple service providers and compare the costs, services,
                                and the level of expertise they offer before making a final decision.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse5" aria-expanded="true" aria-controls="collapse5">
                                Can an outsourced tax preparation service provider handle multiple state tax returns?
                            </button>
                        </h2>
                        <div id="collapse5" class="accordion-collapse collapse " data-bs-parent="#accordionExample">
                            <div class="accordion-body" style="color:#000">
                                Yes, most outsourced tax preparation service providers can handle multiple state tax
                                returns. Many of these services have the expertise and knowledge to prepare state tax
                                returns in addition to federal tax returns. This can include compliance with different
                                state tax laws and regulations. It is important to confirm with the service provider if
                                they can handle multiple state tax returns specifically, as some outsourced service
                                providers may only specialize in federal or state returns.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse6" aria-expanded="true" aria-controls="collapse6">
                                How does an outsourced tax preparation service provider ensure the security and
                                confidentiality of my tax information?
                            </button>
                        </h2>
                        <div id="collapse6" class="accordion-collapse collapse " data-bs-parent="#accordionExample">
                            <div class="accordion-body" style="color:#000">
                                Outsourced tax preparation service providers typically use a combination of physical and
                                digital security measures to ensure the confidentiality and security of client
                                information. Some of the ways they might do this are:<br><br>

                                <span style="font-weight: 500;">Data Encryption:</span> They use industry-standard
                                encryption methods to protect sensitive data both in storage and in transit.<br><br>

                                <span style="font-weight: 500;">Secure Data Transfer: </span> They use secure file
                                transfer protocols (SFTP) or virtual private networks (VPNs) to transfer data between
                                you and them.<br><br>

                                <span style="font-weight: 500;">Firewall:</span> They use firewalls to protect the
                                company’s internal network from unauthorized access.<br><br>

                                <span style="font-weight: 500;">Access Control: </span>They have strict access controls
                                in place to limit access to clients’ data to authorized personnel only.<br><br>

                                <span style="font-weight: 500;">Backup and recovery:</span> They maintain regular
                                backups and have a data recovery plan in case of data loss due to hardware failure or
                                other issues.<br><br>

                                <span style="font-weight: 500;">Compliance:</span> They comply with relevant security
                                and privacy regulations such as HIPAA, SOC 2, and PCI-DSS.<br><br>

                                <span style="font-weight: 500;">Background Check:</span> They conduct background checks
                                on their employees or contractors who handle clients’ data.<br><br>
                                <span style="font-weight: 500;">Regular Auditing:</span> They conduct regular internal
                                and external audits to ensure that the security and confidentiality of clients’ data are
                                maintained.<br><br>
                                It’s also important to have a conversation with the outsourced tax preparation service
                                providers about their security and confidentiality policies and procedures to ensure
                                that they meet your expectations.
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse7" aria-expanded="true" aria-controls="collapse7">
                                Can an outsourced tax preparation service provider represent your clients in case of an
                                audit?
                            </button>
                        </h2>
                        <div id="collapse7" class="accordion-collapse collapse " data-bs-parent="#accordionExample">
                            <div class="accordion-body" style="color:#000">
                                Yes, many outsourced tax preparation service providers can represent your clients in
                                case of an audit. They will have the necessary knowledge and expertise to help you
                                navigate the audit process and provide you with the support you need. This can include
                                reviewing the audit notice, preparing and organizing your clients’ records, and
                                representing your clients at the audit. Some service providers may offer representation
                                as a part of their service package, while others may offer it as an additional service
                                that you can opt for. It’s a good idea to confirm with the service providers if they
                                offer representation services in case of an audit and also to find out about their
                                experience and success rate in handling audits.


                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapse8" aria-expanded="true" aria-controls="collapse8">
                                How do I provide my clients' tax documents to an outsourced tax preparation service
                                provider?
                            </button>
                        </h2>
                        <div id="collapse8" class="accordion-collapse collapse " data-bs-parent="#accordionExample">
                            <div class="accordion-body" style="color:#000">
                                There are several ways that you can provide your tax documents to an outsourced tax
                                preparation service provider. These include:<br><br>

                                <span style="font-weight: 500;">Electronic upload:</span> Many service providers have a secure portal or website where you can upload your clients’ tax documents electronically.<br><br>

                                <span style="font-weight: 500;">Email: </span> You can also send your clients’ tax documents via email to the service provider if the email is encrypted and secure.<br><br>
                                <span style="font-weight: 500;">Mail or courier:</span> You can also mail or courier your clients’ tax documents to the service provider’s office, but this can take longer and might not be as secure as the other methods.<br><br>
                                <span style="font-weight: 500;">In-person meeting:</span> Some service providers may schedule an in-person meeting to collect the documents and go over the details of your client’s tax returns.<br><br>
                                <span style="font-weight: 500;">Mobile App or software:</span> Some service providers may have a mobile app or software that allows you to scan and upload your clients’ tax documents.<br><br>
                                It’s important to confirm with the service provider which method they prefer to receive the documents. Also, make sure to keep a copy of all the documents submitted to the service provider for your records.

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
</div>
<script>
    var splide = new Splide('.splide', {
        perPage: 2,
        perMove: 1,
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