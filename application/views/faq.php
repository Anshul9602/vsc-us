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
    .inner-banner {
        padding: 50px 0;
        background: rgb(0 0 0/80%);
        /*text-align: center;*/
        position: relative;
    }

    .inner-banner::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: url(../sub-images/inner-banner.jpg) no-repeat center center fixed;
        background-size: cover;
        z-index: -1;
    }

    .inner-banner .banner-content {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        gap: 18px;
        flex-direction: column;
        align-items: flex-start;
    }

    .inner-banner .page-title {
        margin: 0;
        padding: 0 15px 0 0;
        width: fit-content;
        font-size: 36px;
        line-height: 1.26;
        font-weight: 500;
        font-family: "Source Serif 4", serif;
        text-align: left;
        white-space: pre-line;
        color: #fff;
        position: relative;
    }

    .inner-banner .page-title:before {
        content: "";
        position: absolute;
        bottom: -3px;
        left: 0;
        width: 50%;
        min-width: 100px;
        height: 2px;
        background: var(--theme-yellow);
    }

    .inner-banner .page-title {
        font-size: 36px;
        text-transform: capitalize;
    }

    .inner-banner .page-title:before {
        height: 2px;
    }

    /*====================== Breadcrumb =====================*/
    .inner-banner .breadcrumb {
        margin: 0 auto;
        width: fit-content;
    }

    .inner-banner .breadcrumb .breadcrumb-item {
        color: rgb(255 255 255 / 65%);
    }

    .inner-banner .breadcrumb .breadcrumb-item a {
        color: rgb(255 255 255 / 65%);
        transition: 0.5s;
    }

    .inner-banner .breadcrumb .breadcrumb-item a i {
        color: var(--theme-yellow);
    }

    .inner-banner .breadcrumb .breadcrumb-item.active {
        color: rgb(255 255 255 /65%);
    }

    .inner-banner .breadcrumb .breadcrumb-item a:hover {
        color: rgb(255 170 0 /80%);
    }

    .inner-banner .breadcrumb .breadcrumb-item+.breadcrumb-item::before {
        content: var(--bs-breadcrumb-divider, "|");
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



    .accordion-button:not(.collapsed) {
        color: #fff;
        background-color: transparent;
        box-shadow: inset 0 calc(-1* var(--bs-accordion-border-width)) 0 var(--bs-accordion-border-color);
    }

    .accordion-item {
        background-color: transparent;
        color: #fff;
    }



    .container {
        max-width: 85%;
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

    .faq .accordion .accordion-item .accordion-button,
    .faq .accordion .accordion-item:last-of-type .accordion-button.collapsed {
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

    .inner-page .section-title {
        margin: 0 0 30px 0;
        font-size: 31px;
        font-family: initial;
        line-height: 1.44;
    }

    .section-title::after {
        content: '';
        position: absolute;
        left: calc(var(--bs-gutter-x)* .5);

        top: 50px;
        width: 60px;
        height: 3px;
        background: #f66c00;
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

    h2.accordion-header {
        margin: 0 !important;
    }
</style>
<script src="
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js
"></script>
<link href="
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css
" rel="stylesheet">
<style>
    @media (max-width: 768px) {
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
        .inner-page h3 {
            margin-bottom: 15px;
            font-size: 22px;
        }
    }
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
</style>

<section class="inner-page">

    <div style="background: url('assets/inner-banner.jpg') no-repeat center center fixed;background-size: cover;">
        <div class="inner-banner">
            <div class="container">
                <div class="banner-content">
                    <h1 class="page-title">Faq</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url(''); ?>"><i
                                        class="fa fa-home"></i></a></li>
                            <li class="breadcrumb-item active">Faq</li>
                        </ol>
                    </nav>
                </div>
            </div>

        </div>
    </div>

    <div class="www sec-with-shape py-5 container">
        <!-- Accordion 6 - Bootstrap Brain Component -->
        <div class="bsb-accordion-6 py-3 ">
            <div class="faq_content text-center">
                <p>We offer outsourced tax and accounting services that are aimed to save time for you to grow your
                    business exponentially. Driven by dedication and zeal to offer exemplary services to you, we are
                    here to take care of any concern that might arise related to our deliverables.</p>
                <p>Answering all your quests and queries is our prime focus and we strive to bring clarity to you with
                    our comprehensive FAQs that encompass crucial questions related to our services.</p>
            </div>
            <div class="row mt-4">
                <div class="col-12 faq">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    What does it mean when you say Outsourcing Accounting and Financial Services?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body" style="color:#000">
                                    By definition, outsourcing refers to collaborating with an individual or a team
                                    outside of your organisation in order to carry out a certain set of business
                                    activities.<br><br>

                                    In reference to an accounting firm, it has to do with partnering with an external
                                    team of experts to assist you with business procedures that either lie outside of
                                    your core business operations; or are too time-consuming and could use an expert’s
                                    touch.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne1" aria-expanded="true" aria-controls="collapseOne1">
                                    How does outsourced Accounting and Financial Services work?
                                </button>
                            </h2>
                            <div id="collapseOne1" class="accordion-collapse collapse "
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body" style="color:#000">
                                    At VSC OFFSHORE, we strive towards maximum client satisfaction and ease of
                                    operation. We have a tried and tested process in place for all our clients. The
                                    first step of the process involves a thorough need identification, building up on
                                    that we suggest the most appropriate engagement model for your needs. Moving on, you
                                    are assigned with the specific team required for the task. We also facilitate smooth
                                    on-boarding and set-up procedures for the client at no added cost.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne2" aria-expanded="true" aria-controls="collapseOne2">
                                    How do I engage with the team I am going to be working with?
                                </button>
                            </h2>
                            <div id="collapseOne2" class="accordion-collapse collapse "
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body" style="color:#000">
                                    At VSC OFFSHORE, we understand that each client will have different needs, and to
                                    cater to each of our client in the best possible manner we have a host of engagement
                                    models to choose from depending on your needs such as<br><br>

                                    Full-time engagement model (140 hours per month)<br><br>

                                    Half-time engagement model (70 hours per month)<br><br>

                                    Ad hoc engagement model (No obligation)<br><br>
                                    Based on these models, clients can choose to work with Accounting, bookkeeping,
                                    taxation experts. We also provide engagement models depending on the clients’
                                    specific needs.
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="blue-bg sec-with-shape py-5 ">
        <div class="container inner-page">
            <div class="row">
                <div class="col-md-3">
                    <h3 class="section-title" style="    position: relative;">Financials
                    </h3>
                </div>
                <div class="col-md-9">
                    <!-- Accordion 6 - Bootstrap Brain Component -->
                    <section class="bsb-accordion-6 py-3">
                     
                            <div class="row dark-accordion">
                                <div class="col-12">
                                    <div class="accordion" id="accordionExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapse1" aria-expanded="true"
                                                    aria-controls="collapseOne">

                                                    How much does it cost to outsource accounting and financial
                                                    services?
                                                </button>
                                            </h2>
                                            <div id="collapse1" class="accordion-collapse collapse show"
                                                data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    The costs involved in partnering with an outsourced accounting team
                                                    depends on multiple factors such as specific requirements,
                                                    engagement models and more. That being said, outsourced
                                                    professionals can be as much as 60-70% cost-effective as compared to
                                                    an in-house team.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapse2"
                                                    aria-expanded="false" aria-controls="collapse2">

                                                    How do I make the Payments?
                                                </button>
                                            </h2>
                                            <div id="collapse2" class="accordion-collapse collapse"
                                                data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    At VSC OFFSHORE, you can pay in a method most convenient to you
                                                    such as a direct transfer to our bank account, bill.com, credit
                                                    cards etc.
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


    <div class="www sec-with-shape py-5 ">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h3 class="section-title" style="    position: relative;">Communication</h3>

                </div>
                <div class="col-md-9">
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
                                                    Tax Calculation and Return Preparation
                                                </button>
                                            </h2>
                                            <div id="collapseOne" class="accordion-collapse collapse show"
                                                data-bs-parent="#accordionExample">
                                                <div class="accordion-body" style="color:#000">
                                                    We understand that uninterrupted communication is a key element
                                                    whilst working with teams across borders. At VSC OFFSHORE, our
                                                    teams are accessible through all the usual mediums such as email,
                                                    phone, Skype/ Zoom.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseOne1" aria-expanded="false"
                                                    aria-controls="collapseOne1">
                                                    How do I assess work performance and solicit feedback from the team
                                                    that I am working with?
                                                </button>
                                            </h2>
                                            <div id="collapseOne1" class="accordion-collapse collapse "
                                                data-bs-parent="#accordionExample">
                                                <div class="accordion-body" style="color:#000">
                                                    We believe in an output oriented philosophy, hence each team is
                                                    assigned with a manager who is responsible for monitoring daily,
                                                    weekly and monthly performance. Subsequently, the client is also
                                                    free to implement any performance review methodology that works best
                                                    for the client.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseOne2" aria-expanded="false"
                                                    aria-controls="collapseOne2">
                                                    How do I assess work performance and solicit feedback from the team
                                                    that I am working with?
                                                </button>
                                            </h2>
                                            <div id="collapseOne2" class="accordion-collapse collapse "
                                                data-bs-parent="#accordionExample">
                                                <div class="accordion-body" style="color:#000">
                                                    We believe in an output oriented philosophy, hence each team is
                                                    assigned with a manager who is responsible for monitoring daily,
                                                    weekly and monthly performance. Subsequently, the client is also
                                                    free to implement any performance review methodology that works best
                                                    for the client.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseOne2" aria-expanded="false"
                                                    aria-controls="collapseOne2">
                                                    What does the IT competence look like at VSC OFFSHORE?
                                                </button>
                                            </h2>
                                            <div id="collapseOne2" class="accordion-collapse collapse"
                                                data-bs-parent="#accordionExample">
                                                <div class="accordion-body" style="color:#000">
                                                    We understand that in this day and age, technology holds paramount
                                                    importance for accountants. With respect to that, we are equipped
                                                    with the most up-to-date IT infrastructure. We use internationally
                                                    renowned software tools required to best suit client needs. Our
                                                    professionals are extensively trained and proficient in working with
                                                    software tools such as Xero, Quickbooks, and NETSUITE etc.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseOne3" aria-expanded="false"
                                                    aria-controls="collapseOne3">
                                                    How is client data managed and used?
                                                </button>
                                            </h2>
                                            <div id="collapseOne3" class="accordion-collapse collapse "
                                                data-bs-parent="#accordionExample">
                                                <div class="accordion-body" style="color:#000">
                                                    Data security is crucial to an accountant and we fully understand
                                                    that at VSC OFFSHORE. We manage all our data using highly secure
                                                    cloud-based servers, thereby ensuring maximum data security. Our
                                                    professional will only request data that is required to complete the
                                                    assigned tasks. Once the task is completed the data is cleared from
                                                    our systems permanently. In addition to that, we are an ISO
                                                    9001-2008 as well as ISO 27001 certified organisation.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseOne4" aria-expanded="false"
                                                    aria-controls="collapseOne4">
                                                    What are the industry sectors that you operate in?
                                                </button>
                                            </h2>
                                            <div id="collapseOne4" class="accordion-collapse collapse "
                                                data-bs-parent="#accordionExample">
                                                <div class="accordion-body" style="color:#000">
                                                    At VSC OFFSHORE, we understand that no two accounting firms are
                                                    the same. Our years of experience and expertise allows us to work
                                                    across diverse sectors. We have been providing consistent accounting
                                                    excellence to CPA firms operating within industries such as
                                                    Automotive, Restaurants and Hospitality, Healthcare etc.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseOne4" aria-expanded="false"
                                                    aria-controls="collapseOne4">
                                                    Does the company invest in training and up skilling of the
                                                    employees?
                                                </button>
                                            </h2>
                                            <div id="collapseOne4" class="accordion-collapse collapse "
                                                data-bs-parent="#accordionExample">
                                                <div class="accordion-body" style="color:#000">
                                                    At VSC OFFSHORE, we believe are employees to be the driving force
                                                    behind the growth of our business. In order to sustain the same, we
                                                    dedicate substantial amount of time and energy in up-skilling our
                                                    teams.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseOne5" aria-expanded="false"
                                                    aria-controls="collapseOne5">
                                                    What is the average turnaround time for services availed?
                                                </button>
                                            </h2>
                                            <div id="collapseOne5" class="accordion-collapse collapse "
                                                data-bs-parent="#accordionExample">
                                                <div class="accordion-body" style="color:#000">
                                                    Time is a crucial element when it comes to accounting and financial
                                                    procedures as there are strict timelines to be followed. At Infinity
                                                    Globus, we boast an average turnaround time of 24 hours. Of course
                                                    the timelines are mutually co-ordinated and depend on the nature of
                                                    the work.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseOne6" aria-expanded="false"
                                                    aria-controls="collapseOne6">
                                                    What level of qualifications does the team hold?
                                                </button>
                                            </h2>
                                            <div id="collapseOne6" class="accordion-collapse collapse "
                                                data-bs-parent="#accordionExample">
                                                <div class="accordion-body" style="color:#000">
                                                    We have a team of highly experienced CPAs, EAs, CAs and US Tax &
                                                    Accounting professionals.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseOne7" aria-expanded="false"
                                                    aria-controls="collapseOne7">
                                                    What is the benefit of working with a remote team?
                                                </button>
                                            </h2>
                                            <div id="collapseOne7" class="accordion-collapse collapse "
                                                data-bs-parent="#accordionExample">
                                                <div class="accordion-body" style="color:#000">
                                                    The key benefit of working with a team that operates in a different
                                                    geography is that of the time-zone difference. This ensures
                                                    increased working efficiency thereby driving business growth.
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
                <h3 class="section-title" style="    position: relative;">Clients' Testimonials</h3>
                <br><br>
                <div class="splide testi-text-slider sp_arr" role="group" aria-label="Splide Basic HTML Example">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <div class="testimonial-card">
                                    <div class="icon"><img width="150" height="150"
                                            src="assets/images/jonathan-convery.jpg"
                                            sizes="(max-width: 150px) 100vw, 150px"
                                            class="attachment-thumbnail size-thumbnail wp-post-image" alt=""></div>
                                    <div class="testimonial-content">
                                        <p>Learning about new clients and the way they have their accounting can be
                                            tricky
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
                                        <p>I love working with you!!!! Your team has been very professional, courteous,
                                            and
                                            prompt in
                                            helping me handle the workload of my firm. Resolving many special and
                                            complex
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
                                        <p>Thank you for taking on tax &amp; bookkeeping service for my company. I know
                                            it
                                            was a new venture
                                            but is so crucial to Tax-Bookkeeping company like mine that it is a surprise
                                            at
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
</section>
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