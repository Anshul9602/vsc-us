<!-- <section   style="background-image: url('<?php echo base_url('Service1'); ?>assets/img/bg.png'); max-width: 100%; background-repeat: no-repeat;height:90vh; ">
<div class=" d-flex justify-content-center align-items-center container space" style="padding-top: 40vh;">
    <h1>COMING SOON</h1>
</div>
</section> -->
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

    .listing-card .card-img {
        width: 100%;
        aspect-ratio: 9/5;
        border-radius: 0;
        overflow: hidden;
    }
    .listing-card {
       margin-top: 10px;
    }

    .listing-card .card-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: 0.75s;
    }

    .listing-card .card-content {
        padding: 0px 0 10px 0;
    }

    .listing-card .card-content h5 {
        margin-bottom: 10px;
        padding-bottom: 8px;
        font-size: 20px;
        font-weight: 400;

        position: relative;
    }
    .link-area.small-btn:hover {
       background-color: #00a6a6;
       
    }
    .listing-card .card-content p {
        margin: 0 0 10px 0;
        text-align: left;
        line-height: 1.55;
        white-space: unset;
        color: #444;
    }

    .link-area.small-btn {
        padding: 10px;
        width: fit-content;
        border: none;
        justify-content: flex-start;
    }

    .link-area {
        width: 100%;
        padding: 15px 21px 18px 28px;
        border-top: 1px solid #D5D5D5;
        font-size: 14px;
        font-weight: 600;
        line-height: 1.2;
        letter-spacing: 0.4px;
        color: #444;
        transition: 0.5s;
        z-index: 0;
        display: flex;
        align-items: center;
        justify-content: space-between;
        position: relative;
    }
</style>

<!-- banner -->
<section>

    <div style="background: url('assets/inner-banner.jpg') no-repeat center center fixed;background-size: cover;">
        <div class="inner-banner">
            <div class="container">
                <div class="banner-content">
                    <h1 class="page-title">Services</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url(''); ?>"><i
                                        class="fa fa-home"></i></a></li>
                            <li class="breadcrumb-item active">Services</li>
                        </ol>
                    </nav>
                </div>
            </div>

        </div>
    </div>
    <div class="container">
        <div class="sec-title text-center pb-5 mt-3">
            <h4 class="bold-para">A Holistic Solution for All Your Outsourcing Accounting Needs</h4>
            <p>Our team of experts specializes in providing a wide range of outsourcing accounting services, including
                industry-specific bookkeeping, payroll, tax preparation, and many more to support the growth and success
                of your CPA &amp; accounting firm. With our holistic approach, you can expand your offerings, increase
                efficiency, and serve your clients better. We are committed to delivering high-quality services that
                enable our clients to achieve their goals and reach new levels of success.</p>
        </div>
    </div>
    <div class="container  d-flex justify-content-center  align-items-center">
        <div class="row" id="ajax_product">
            <div class="col-lg-4 col-md-6">
                <a class="listing-card"
                    href="<?php echo base_url('Tax_Preparation_Service'); ?>">
                    <div class="card-img"><img
                            src="<?php echo base_url(''); ?>assets/service/Outsource-Tax-Preparation-Services.webp"
                            class=" wp-post-image" alt="Outsource Tax Preparation Services" decoding="async"></div>
                    <div class="card-content">
                        <h5>Tax Preparation Service</h5>
                        <p class="text-105">Get expert aid in preparing complex to simplest tax returns in an effective
                            and efficient way with our Ou…</p>
                        <div class="link-area small-btn">Read More <span></span></div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6">
                <a class="listing-card"
                    href="<?php echo base_url('Multistate_Tax_Preparation_Service'); ?>">
                    <div class="card-img"><img
                            src="<?php echo base_url(''); ?>assets/service/Outsource-Multistate-Sales-Tax-Preparation.webp"
                            class=" wp-post-image" alt="Outsource Multistate Sales Tax Preparation" decoding="async">
                    </div>
                    <div class="card-content">
                        <h5>Multistate Tax Preparation Service</h5>
                        <p class="text-105">We provide an integrated outsourced multi-state tax preparation services
                            that offers expert guidance to a…</p>
                        <div class="link-area small-btn">Read More <span></span></div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6">
                <a class="listing-card"
                    href="<?php echo base_url('Back_Year_Tax_Preparation'); ?>">
                    <div class="card-img"><img
                            src="<?php echo base_url(''); ?>assets/service/Outsourced-Back-Years-Tax-Preparation.webp"
                            class=" wp-post-image" alt="Outsourced Back Year Tax Preparation" decoding="async"></div>
                    <div class="card-content">
                        <h5>Back Year Tax Preparation</h5>
                        <p class="text-105">Filing back taxes is easier with Infinity's comprehensive Outsourced Back
                            Tax Preparation services that t…</p>
                        <div class="link-area small-btn">Read More <span></span></div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6">
                <a class="listing-card"
                    href="<?php echo base_url('Tax_Litigation_Resolution_Services'); ?>">
                    <div class="card-img"><img
                            src="<?php echo base_url(''); ?>assets/service/Outsourced-Tax-Litigation-Resolution-Notices.webp"
                            class=" wp-post-image" alt="Outsourced Tax Litigation Resolution Services" decoding="async">
                    </div>
                    <div class="card-content">
                        <h5>Tax Litigation Resolution Services</h5>
                        <p class="text-105">Trust us for handling of intricate tax litigation issues. Our comprehensive
                            suite of services includes st…</p>
                        <div class="link-area small-btn">Read More <span></span></div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6">
                <a class="listing-card"
                    href="<?php echo base_url('Management_Accounting_Reporting_Services'); ?>">
                    <div class="card-img"><img
                            src="<?php echo base_url(''); ?>assets/service/Outsourced-Management-Accounting.webp"
                            class=" wp-post-image" alt="Outsourced Management Accounting" decoding="async"></div>
                    <div class="card-content">
                        <h5>Management Accounting &amp; Reporting Services</h5>
                        <p class="text-105">From increasing efficiency to staying compliant, boost your clients' revenue
                            and profits with our seamles…</p>
                        <div class="link-area small-btn">Read More <span></span></div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6">
                <a class="listing-card" href="<?php echo base_url('Payroll_Services'); ?>">
                    <div class="card-img"><img
                            src="<?php echo base_url(''); ?>assets/service/Outsourced-Payroll-Services.webp"
                            class=" wp-post-image" alt="Outsourced Payroll Services" decoding="async"></div>
                    <div class="card-content">
                        <h5>Payroll Services</h5>
                        <p class="text-105">Stay a step ahead with our automated and error-free Payroll services aimed
                            towards relieving you from the…</p>
                        <div class="link-area small-btn">Read More <span></span></div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6">
                <a class="listing-card"
                    href="<?php echo base_url('Bookkeeping_Services'); ?>">
                    <div class="card-img"><img
                            src="<?php echo base_url(''); ?>assets/service/Outsource-Bookkeeping-Services.webp"
                            class=" wp-post-image" alt="Outsourced bookkeeping service" decoding="async"></div>
                    <div class="card-content">
                        <h5>Bookkeeping Services</h5>
                        <p class="text-105">Optimize every financial operation with a customized approach, focused on
                            your clients' unique needs thro…</p>
                        <div class="link-area small-btn">Read More <span></span></div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6">
                <a class="listing-card"
                    href="<?php echo base_url('Secretarial_Services'); ?>">
                    <div class="card-img"><img
                            src="<?php echo base_url(''); ?>assets/service/Outsource-Secretarial-Services.webp"
                            class=" wp-post-image" alt="Outsource Secretarial Services" decoding="async"></div>
                    <div class="card-content">
                        <h5>Secretarial Services</h5>
                        <p class="text-105">Avail corporate secretarial services to ease your tasks and gain thorough
                            oversight of your accounting fi…</p>
                        <div class="link-area small-btn">Read More <span></span></div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6">
                <a class="listing-card" href="<?php echo base_url('Audit_Services'); ?>">
                    <div class="card-img"><img
                            src="<?php echo base_url(''); ?>assets/service/Outsource-Audit-Services.webp"
                            class=" wp-post-image" alt="Outsourced Audit Services" decoding="async"></div>
                    <div class="card-content">
                        <h5>Audit Services</h5>
                        <p class="text-105">Our consistent outsourced audit services make complex issues simpler with
                            the world-class audit methodolo…</p>
                        <div class="link-area small-btn">Read More <span></span></div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6">
                <a class="listing-card"
                    href="<?php echo base_url('Forensic_Accounting_Services'); ?>">
                    <div class="card-img"><img
                            src="<?php echo base_url(''); ?>assets/service/Outsourced-Forensic-Accounting-Services.webp"
                            class=" wp-post-image" alt="Outsourced Forensic Accounting Services" decoding="async"></div>
                    <div class="card-content">
                        <h5>Forensic Accounting Services</h5>
                        <p class="text-105">We offer fraud investigation services that help you detect and prevent
                            fraudulent activities while also aiding you in investigating those...</p>
                        <div class="link-area small-btn">Read More <span></span></div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6">
                <a class="listing-card"
                    href="<?php echo base_url('Business_Valuation_Services'); ?>">
                    <div class="card-img"><img
                            src="<?php echo base_url(''); ?>assets/service/Outsource-Business-Valuation.webp"
                            class=" wp-post-image" alt="Outsource Business Valuation Services" decoding="async"></div>
                    <div class="card-content">
                        <h5>Business Valuation Services</h5>
                        <p class="text-105">We offer accurate and practical Outsourced Business Valuation services to
                            help your clients enhance their strategic, financial, and operational objectives.</p>
                        <div class="link-area small-btn">Read More <span></span></div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6">
                <a class="listing-card" href="<?php echo base_url('Employee_Retention_Tax_Credit'); ?>">
                    <div class="card-img"><img
                            src="<?php echo base_url(''); ?>assets/service/Outsourced-Employee-Retention-Tax-Credit-ERTC.webp"
                            class=" wp-post-image" alt="Outsourced Employee Retention Tax Credit&nbsp;"
                            decoding="async"></div>
                    <div class="card-content">
                        <h5>Employee Retention Tax Credit (ERTC)</h5>
                        <p class="text-105">With our timely solutions, managing the Employee Retention Tax Credit of
                            your clients turns out to be simple and seamless.</p>
                        <div class="link-area small-btn">Read More <span></span></div>
                    </div>
                </a>
            </div>
        </div>
    </div>

</section>
<!-- banner -->