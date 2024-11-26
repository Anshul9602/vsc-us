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
                            <li class="breadcrumb-item active">Secretarial Services</li>
                        </ol>
                    </nav>
                </div>
            </div>

        </div>
    </div>
    <div class="container">
        <div class="inner-page details-page services-details">
            <div class="row  d-flex justify-content-center ">

               
                <div class="col-lg-9 col-md-8 mt-md-5 mt-2">

                    <div class="post-thumbnails thumb-image">
                        <img width="1017" height="395"
                            src="<?php echo base_url(''); ?>assets/service/Outsource-Secretarial-Services.webp"
                            class="attachment-full size-full wp-post-image" alt="Outsource Secretarial Services"
                          
                            sizes="(max-width: 1017px) 100vw, 1017px">
                    </div><!-- .post-thumbnail -->

                    <h2 class="section-title">Enjoy Efficient Outsourced Secretarial Services with the Premium Firm in
                        the US!</h2>
                    <p>Are you finding the following challenges of secretarial services extremely overwhelming?</p>
                    <ul>
                        <li>Filing and organizing documents</li>
                        <li>Sending mail responses</li>
                        <li>Managing database</li>
                        <li>Gathering relevant information</li>
                    </ul>
                    <p>If all these are what is troubling you, then our outsourced secretarial services are what you
                        need!</p>
                    <p>So, just relax and let our efficient team handle all your burdens!</p>
                    <p><strong>Why Outsourced Secretarial Services is the Right Choice for You?</strong></p>
                    <p>According to a <a
                            href="https://www.linkedin.com/pulse/corporate-secretarial-services-market">report</a>, the
                        global Corporate Secretarial Services Market is expected to expand at a CAGR of 13.16% from USD
                        111911.24 million by 2027.</p>
                    <p>With immense benefits, no wonder the global secretarial market will expand and grow in the years
                        to come.</p>
                    <p>Although the expansion rate of this business segment is remarkable, the service requires a lot of
                        precision due to market competitiveness. This can only be handled by an experienced outsourced
                        accounting firm offering outsourced secretarial services.</p>
                    <p><strong>Some Key Advantages</strong></p>
                    <ul>
                        <li>Enhanced Efficiency</li>
                        <li>Reduced Cost</li>
                        <li>Improved Accuracy</li>
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