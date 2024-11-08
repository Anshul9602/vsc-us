<!-- <section   style="background-image: url('<?php echo base_url(''); ?>assets/img/bg.png'); max-width: 100%; background-repeat: no-repeat;height:90vh; ">
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

    .inner-page .thumb-image {
        margin-bottom: 30px;
        width: 100%;
        aspect-ratio: 9 / 3.5;
    }

    .inner-page .thumb-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .inner-page .section-title {
        margin: 0 0 30px 0;
        font-size: 31px;
        line-height: 1.44;
    }

    .section-title {
        position: relative;
        margin-bottom: 20px;
        padding-bottom: 9px;
        font-size: 40px;
        line-height: 1.2;
        font-weight: 400;
        font-family: "Source Serif 4", serif;

    }


    p {
        margin-bottom: 30px;
        font-size: 18px;
        font-weight: 500;
        line-height: 1.55;
        color: #444;
    }

    ul.theme-list li,
    .details-page ul li,
    .sidebar-widget ul li,
    .details-page .accordion-body ul li {
        position: relative;
        padding: 0 0 0 26px;
        width: fit-content;
        font-size: 16px;
        font-weight: 500;
        line-height: 1.55;
        color: #444;
        border: none;
    }

    ul.theme-list li::before,
    .details-page ul li::before,
    .sidebar-widget ul li::before,
    ::marker {
        content: '';
        position: absolute;
        top: 8px;
        left: 0;
        width: 10px;
        height: 10px;
        background: url(assets/images/arrow-TopRight.svg) no-repeat center center;
        background-size: contain;
        transition: 0.5s;
    }

    .accordion-body ul li:hover::before,
    li:hover::marker {
        transform: rotate(45deg);
    }

    .accordion-button::after {
        background: #fff;
    }
</style>

<section style="    padding: 130px 0 0px;">

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
                            <li class="breadcrumb-item">/</li>
                            <li class="breadcrumb-item active">Management Accounting & Reporting Services</li>
                        </ol>
                    </nav>
                </div>
            </div>

        </div>
    </div>
    <div class="" style="max-width: 95%; margin:auto;">
        <div class="inner-page details-page services-details">
            <div class="row  d-flex justify-content-center ">

           
                <div class="col-lg-9 col-md-8 mt-md-5 mt-2">

                    <div class="post-thumbnails thumb-image">
                        <img width="1017" height="395"
                            src="<?php echo base_url(''); ?>assets/service/Outsourced-Management-Accounting.webp"
                            class="attachment-full size-full wp-post-image" alt="Outsourced Management Accounting"
                            decoding="async" fetchpriority="high"
                            srcset="<?php echo base_url(''); ?>assets/service/Outsourced-Management-Accounting.webp 1017w, <?php echo base_url(''); ?>assets/service/Outsourced-Management-Accounting-300x117.webp 300w, <?php echo base_url(''); ?>assets/service/Outsourced-Management-Accounting-768x298.webp 768w"
                            sizes="(max-width: 1017px) 100vw, 1017px">
                    </div><!-- .post-thumbnail -->

                    <h2 class="section-title">Outsourced Management Accounting and Reporting Services for CPAs and
                        Accounting Firms!</h2>
                    <p>Do the below-mentioned tasks of your clients leave you totally worked up?</p>
                    <ul>
                        <li>Monitoring Business Performance</li>
                        <li>Gathering Insights to Costs and Cash Flow</li>
                        <li>Monetary Scrutiny</li>
                        <li>Deviations Identifications</li>
                    </ul>
                    <p>Yes?</p>
                    <p>Well, Not Anymore!</p>
                    <p>With our efficient team in place, relax as we offer the industry’s best outsourced management
                        accounting services that effectively shoulder your burden!</p>
                    <p><strong>Why Outsourced Management Accounting Services is the Right Choice for You?</strong></p>
                    <p>According to a recent report by <a
                            href="https://www.accountingtoday.com/opinion/6-things-you-might-not-know-about-management-accountants">IMA</a>,
                        there exist about 975,000 management accountants, with many more across the globe. With such a
                        vast number of efficient talents, outsourcing management accounting and related services is the
                        perfect way to minimize errors and bring optimum output.</p>
                    <p>As such, the advantages that come from utilizing outsourced management accounting reports and
                        mentioned services are immense, which makes them one of the most sought-after options for
                        businesses across the globe.</p>
                    <p><strong>Some Key Advantages</strong></p>
                    <ul>
                        <li>Our team of management accounting professionals has over 20 years of industry experience.
                        </li>
                        <li>Adept team of industry veterans.</li>
                        <li>We are a member of the American Institute of CPAs (AICPA).</li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-4 mt-md-5 mt-2">
                    <?php $this->load->view('side'); ?>
                </div>
            </div>
        </div>
    </div>

    <?php $this->load->view('bottom'); ?>


</section>
<!-- banner -->