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
    ul.theme-list li::before, .details-page ul li::before, .sidebar-widget ul li::before, ::marker {
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
    .accordion-body ul li:hover::before, li:hover::marker {
        transform: rotate(45deg);
    }
    .accordion-button::after {
        background: #fff;}
</style>

<section style="    padding: 130px 0 0px;">

    <div style="background: url('assets/inner-banner.jpg') no-repeat center center fixed;background-size: cover;">
        <div class="inner-banner">
            <div class="container">
                <div class="banner-content">
                    <h1 class="page-title">Services</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="https://www.infinity-globus.com"><i
                                        class="fa fa-home"></i></a></li>
                            <li class="breadcrumb-item active">Services</li>
                            <li class="breadcrumb-item"><a href="https://www.infinity-globus.com"><i
                                        class="fa fa-home"></i></a></li>
                            <li class="breadcrumb-item active">Secretarial Services</li>
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
                            src="https://www.infinity-globus.com/wp-content/uploads/2023/11/Outsource-Tax-Preparation-Services.webp"
                            class="attachment-full size-full wp-post-image" alt="Outsource Tax Preparation Services"
                            decoding="async" fetchpriority="high"
                            srcset="https://www.infinity-globus.com/wp-content/uploads/2023/11/Outsource-Tax-Preparation-Services.webp 1017w, https://www.infinity-globus.com/wp-content/uploads/2023/11/Outsource-Tax-Preparation-Services-300x117.webp 300w, https://www.infinity-globus.com/wp-content/uploads/2023/11/Outsource-Tax-Preparation-Services-768x298.webp 768w"
                            sizes="(max-width: 1017px) 100vw, 1017px">
                    </div><!-- .post-thumbnail -->

                    <h2 class="section-title">Effortless Tax Preparation with the Leading Outsourced Tax Preparation
                        Company
                        in the US and India!</h2>
                    <p>Are you overworked during tax season or are experiencing one or more situations regarding the tax
                        preparation of your clients?</p>
                    <ul>
                        <li>Exhausted workforce during rush season</li>
                        <li>Missed deadlines</li>
                        <li>Failing to manage the dynamic tax policies and new business models</li>
                        <li>Flaws in tax returns</li>
                    </ul>
                    <p>Relax and let our expert team alleviate your burden!</p>
                    <p>Our outsourced tax preparation services are the perfect aid for combating tedious tax seasons,
                        custom-tailored to rejuvenate your accounting firm’s efficiency and success.</p>
                    <p><strong>Why Outsourced Tax Preparation is the Right Choice for You?</strong></p>
                    <p>According to a survey conducted by <a
                            href="https://www2.deloitte.com/content/dam/Deloitte/us/Documents/Tax/tax-transformation-trends-technology-in-focus-april-2022.pdf"
                            data-lf-fd-inspected-3p1w24dor3o7my5n="true">Deloitte</a>, 35% of the respondents said that
                        one
                        of the advantages of employing outsourced tax operations is better compliance with digital tax
                        filing/ reporting requirements across multiple jurisdictions.</p>
                    <p>All in all, the satisfaction from outsourcing tax preparation is evident across all levels!</p>
                    <p>And why not?</p>
                    <p>With myriad advantages and key elements, outsourcing tax return preparation indeed serves as a
                        boon
                        for small, mid-sized and large-scale CPA firms alike!</p>
                    <p><strong>Some Key Advantages</strong></p>
                    <ul>
                        <li>Boosts Efficiency</li>
                        <li>Enhances Compliance</li>
                        <li>Improves Scalability</li>
                        <li>Promotes Data Security</li>
                        <li>Maintains Confidentiality</li>
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