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
                            <li class="breadcrumb-item"><a href="https://www.infinity-globus.com"><i
                                        class="fa fa-home"></i></a></li>
                            <li class="breadcrumb-item active">Services</li>
                            <li class="breadcrumb-item"><a href="https://www.infinity-globus.com"><i
                                        class="fa fa-home"></i></a></li>
                            <li class="breadcrumb-item active">Tax Preparation Service</li>
                        </ol>
                    </nav>
                </div>
            </div>

        </div>
    </div>
    <div class="inner-page details-page services-details">
        <div class="row  d-flex justify-content-center " >

            <div class="col-lg-9 col-md-8 mt-md-5 mt-2">


                <div class="post-thumbnails thumb-image">
                    <img width="1017" height="395"
                        src="https://www.infinity-globus.com/wp-content/uploads/2023/11/Outsource-Tax-Preparation-Services.webp"
                        class="attachment-full size-full wp-post-image" alt="Outsource Tax Preparation Services"
                        decoding="async" fetchpriority="high"
                        srcset="https://www.infinity-globus.com/wp-content/uploads/2023/11/Outsource-Tax-Preparation-Services.webp 1017w, https://www.infinity-globus.com/wp-content/uploads/2023/11/Outsource-Tax-Preparation-Services-300x117.webp 300w, https://www.infinity-globus.com/wp-content/uploads/2023/11/Outsource-Tax-Preparation-Services-768x298.webp 768w"
                        sizes="(max-width: 1017px) 100vw, 1017px">
                </div><!-- .post-thumbnail -->

                <h2 class="section-title">Effortless Tax Preparation with the Leading Outsourced Tax Preparation Company
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
                        data-lf-fd-inspected-3p1w24dor3o7my5n="true">Deloitte</a>, 35% of the respondents said that one
                    of the advantages of employing outsourced tax operations is better compliance with digital tax
                    filing/ reporting requirements across multiple jurisdictions.</p>
                <p>All in all, the satisfaction from outsourcing tax preparation is evident across all levels!</p>
                <p>And why not?</p>
                <p>With myriad advantages and key elements, outsourcing tax return preparation indeed serves as a boon
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

    <div class="d-none">
        <div class="panel-group" id="accordion">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Collapsible Group 1</a>
                    </h4>
                </div>
                <div id="collapse1" class="panel-collapse collapse in">
                    <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Collapsible Group 2</a>
                    </h4>
                </div>
                <div id="collapse2" class="panel-collapse collapse">
                    <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Collapsible Group 3</a>
                    </h4>
                </div>
                <div id="collapse3" class="panel-collapse collapse">
                    <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                </div>
            </div>
        </div>
    </div>
    <div class="blue-bg sec-with-shape py-5 ">
        <div class="container">
            <div class="row">
                <div class="col-xl-4">
                    <h3>Why is Infinity Globus Your Perfect Partner for Outsourced Multi-State Tax Preparation Services?
                    </h3>
                </div>
                <div class="col-xl-8">
                    <div class="accordion details-accordion" id="productAccordion_cfcd208495d565ef66e7dff9f98764da">
                        <div class="accordion-item">
                            <h4 class="accordion-header" id="taxPreparation_accor_cfcd208495d565ef66e7dff9f98764da_1">
                                <button class="accordion-button " type="button" data-bs-toggle="collapse"
                                    data-bs-target="#taxPreparation_collapsecfcd208495d565ef66e7dff9f98764da_1"
                                    aria-expanded="false"
                                    aria-controls="taxPreparation_collapsecfcd208495d565ef66e7dff9f98764da_1"
                                    fdprocessedid="djtel">Sales-Down or Tax-Up Reporting <span></span></button>
                            </h4>
                            <div id="taxPreparation_collapsecfcd208495d565ef66e7dff9f98764da_1"
                                class="accordion-collapse collapse show"
                                aria-labelledby="taxPreparation_accor_cfcd208495d565ef66e7dff9f98764da_1"
                                data-bs-parent="#productAccordion_cfcd208495d565ef66e7dff9f98764da">
                                <div class="accordion-body">
                                    <p>We are adept in managing the multi-state tax preparation of your clients based on
                                        their requirements. As such, we make use of acknowledged methodologies, which
                                        include sales-down or tax reporting pertaining to multi-state tax preparation
                                        liabilities.</p>
                                    <p>Whether your requisites are for sales down or for tax up, our dedicated and
                                        readily available team will meet your needs.</p>

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h4 class="accordion-header" id="taxPreparation_accor_cfcd208495d565ef66e7dff9f98764da_2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#taxPreparation_collapsecfcd208495d565ef66e7dff9f98764da_2"
                                    aria-expanded="false"
                                    aria-controls="taxPreparation_collapsecfcd208495d565ef66e7dff9f98764da_2"
                                    fdprocessedid="xmoqim">Compliance Expertise <span></span></button>
                            </h4>
                            <div id="taxPreparation_collapsecfcd208495d565ef66e7dff9f98764da_2"
                                class="accordion-collapse collapse "
                                aria-labelledby="taxPreparation_accor_cfcd208495d565ef66e7dff9f98764da_2"
                                data-bs-parent="#productAccordion_cfcd208495d565ef66e7dff9f98764da">
                                <div class="accordion-body">
                                    <p>We have immense knowledge and experience in navigating the complex landscape of
                                        the industry. As such, we take due measures to keep up with the evolving
                                        landscape of multi-state sales tax regulations to ensure accurate compliance.
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h4 class="accordion-header" id="taxPreparation_accor_cfcd208495d565ef66e7dff9f98764da_3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#taxPreparation_collapsecfcd208495d565ef66e7dff9f98764da_3"
                                    aria-expanded="false"
                                    aria-controls="taxPreparation_collapsecfcd208495d565ef66e7dff9f98764da_3"
                                    fdprocessedid="abxabf">Economic Nexus Threshold Monitoring <span></span></button>
                            </h4>
                            <div id="taxPreparation_collapsecfcd208495d565ef66e7dff9f98764da_3"
                                class="accordion-collapse collapse "
                                aria-labelledby="taxPreparation_accor_cfcd208495d565ef66e7dff9f98764da_3"
                                data-bs-parent="#productAccordion_cfcd208495d565ef66e7dff9f98764da">
                                <div class="accordion-body">
                                    <p>By keeping a check on sales of multiple states, we gain better insights that help
                                        us ascertain the thresholds in the economic nexus state. Our well-equipped and
                                        proficient team maintains a check on the informs and statutes of our clients so
                                        that they can seamlessly register and file sales tax online.</p>

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h4 class="accordion-header" id="taxPreparation_accor_cfcd208495d565ef66e7dff9f98764da_4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#taxPreparation_collapsecfcd208495d565ef66e7dff9f98764da_4"
                                    aria-expanded="false"
                                    aria-controls="taxPreparation_collapsecfcd208495d565ef66e7dff9f98764da_4"
                                    fdprocessedid="c7ax6g">Audit Representation <span></span></button>
                            </h4>
                            <div id="taxPreparation_collapsecfcd208495d565ef66e7dff9f98764da_4"
                                class="accordion-collapse collapse "
                                aria-labelledby="taxPreparation_accor_cfcd208495d565ef66e7dff9f98764da_4"
                                data-bs-parent="#productAccordion_cfcd208495d565ef66e7dff9f98764da">
                                <div class="accordion-body">
                                    <p>We offer audit representation in case of an in-house audit. With extensive
                                        expertise and real-life experience in conducting sales tax audits for various
                                        firms, we aid our clients by lessening their audit liabilities. We not only go
                                        over and above distinctive approaches but even assist in finding credit
                                        opportunities, and related exemptions as well as available credits to reduce tax
                                        audits.</p>

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h4 class="accordion-header" id="taxPreparation_accor_cfcd208495d565ef66e7dff9f98764da_5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#taxPreparation_collapsecfcd208495d565ef66e7dff9f98764da_5"
                                    aria-expanded="false"
                                    aria-controls="taxPreparation_collapsecfcd208495d565ef66e7dff9f98764da_5"
                                    fdprocessedid="1izxw">Data Discernments <span></span></button>
                            </h4>
                            <div id="taxPreparation_collapsecfcd208495d565ef66e7dff9f98764da_5"
                                class="accordion-collapse collapse "
                                aria-labelledby="taxPreparation_accor_cfcd208495d565ef66e7dff9f98764da_5"
                                data-bs-parent="#productAccordion_cfcd208495d565ef66e7dff9f98764da">
                                <div class="accordion-body">
                                    <p>For the purpose of preparing multiple state sales tax returns, we take possession
                                        of some of the essential data that is necessary to gain insights, so that none
                                        of the aspects get overlooked. Depending upon the relevant information gathered,
                                        we give you accurate and reliable assistance with your multi-state sales tax
                                        return filing.</p>

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h4 class="accordion-header" id="taxPreparation_accor_cfcd208495d565ef66e7dff9f98764da_6">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#taxPreparation_collapsecfcd208495d565ef66e7dff9f98764da_6"
                                    aria-expanded="false"
                                    aria-controls="taxPreparation_collapsecfcd208495d565ef66e7dff9f98764da_6"
                                    fdprocessedid="cy1xff">Rapid Turnaround Time <span></span></button>
                            </h4>
                            <div id="taxPreparation_collapsecfcd208495d565ef66e7dff9f98764da_6"
                                class="accordion-collapse collapse "
                                aria-labelledby="taxPreparation_accor_cfcd208495d565ef66e7dff9f98764da_6"
                                data-bs-parent="#productAccordion_cfcd208495d565ef66e7dff9f98764da">
                                <div class="accordion-body">
                                    <p>We are committed to offering on-time sales tax compliance services that meet your
                                        client’s requirements.</p>

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h4 class="accordion-header" id="taxPreparation_accor_cfcd208495d565ef66e7dff9f98764da_7">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#taxPreparation_collapsecfcd208495d565ef66e7dff9f98764da_7"
                                    aria-expanded="false"
                                    aria-controls="taxPreparation_collapsecfcd208495d565ef66e7dff9f98764da_7"
                                    fdprocessedid="1im7kf">Cutting-Edge Software <span></span></button>
                            </h4>
                            <div id="taxPreparation_collapsecfcd208495d565ef66e7dff9f98764da_7"
                                class="accordion-collapse collapse "
                                aria-labelledby="taxPreparation_accor_cfcd208495d565ef66e7dff9f98764da_7"
                                data-bs-parent="#productAccordion_cfcd208495d565ef66e7dff9f98764da">
                                <div class="accordion-body">
                                    <p>We are equipped with the latest technology that optimizes your client’s
                                        multi-state sales tax preparation experience.</p>

                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h4 class="accordion-header" id="taxPreparation_accor_cfcd208495d565ef66e7dff9f98764da_8">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#taxPreparation_collapsecfcd208495d565ef66e7dff9f98764da_8"
                                    aria-expanded="false"
                                    aria-controls="taxPreparation_collapsecfcd208495d565ef66e7dff9f98764da_8"
                                    fdprocessedid="w14f48">Tailor-Made Engagement Models <span></span></button>
                            </h4>
                            <div id="taxPreparation_collapsecfcd208495d565ef66e7dff9f98764da_8"
                                class="accordion-collapse collapse "
                                aria-labelledby="taxPreparation_accor_cfcd208495d565ef66e7dff9f98764da_8"
                                data-bs-parent="#productAccordion_cfcd208495d565ef66e7dff9f98764da">
                                <div class="accordion-body">
                                    <p>For your convenience, we customize engagement models that suit your needs.</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- banner -->