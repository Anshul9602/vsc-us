<!-- Hero -->

<style>
    .event_top_info {
        display: block;
        position: relative;
        background: #e2e7ec;
        padding: 0px 25px 20px;
    }

    .event_top_info .event_top_box {
        display: block;
        position: relative;
        padding-left: 25px;
    }

    .event_top_info .event_top_box i {
        position: absolute;
        left: 0;
        top: 0;
        font-size: 16px;
        color: #ffa800;
    }

    .event_top_info .event_top_box p {
        font-size: 16px;
        font-weight: 600;
        color: #001c40;
    }

    .event_top_info .event_top_box h6 {
        font-weight: 600;
        text-transform: uppercase;
        font-size: 12px;
        letter-spacing: 1px;
        color: #666666;
    }

    .btns {
        position: relative;
        display: inline-block;
        padding: 15px 85px 15px 28px;
        border: 1px solid #058283;
        border-radius: 100px;
        font-size: 14px;
        font-weight: 600;
        letter-spacing: 0.5px;
        color: #fff;
        text-transform: uppercase;
        transition: all 0.4s;
        z-index: 0;
        background-color: #058283;
    }

    .btns:before {
        content: "";
        position: absolute;
        top: 50%;
        right: 13px;
        transform: translate(-50%, -50%);
        width: 12px;
        height: 2px;
        background: #002448;
        border-radius: 40px;
        z-index: 1;
        transition: all 0.4s;
    }

    .register_button span {
        width: 34px;
        height: 34px;
    }

    .register_button {
        padding: 10px 65px 10px 18px;
    }

    .btns span {
        position: absolute;
        top: 50%;
        right: 0;
        width: 40px;
        height: 40px;
        background: #fff;
        border-radius: 100%;
        transform: translate(-5px, -50%);
        transition: all 0.4s;
    }

    .register_button:before {
        width: 10px;
        right: 12px;
    }

    .register_button span {
        width: 34px;
        height: 34px;
    }

    .register_button span:before,
    .register_button span:after {
        width: 5px;
    }

    .register_button:hover span:before,
    .register_button:hover span:after {
        width: 7px;
    }
    p {
    margin-bottom: 30px;
    font-size: 18px;
    font-weight: 500;
    line-height: 1.55;
    
}
</style>

<section id="slider" class="hero p-0 odd featured">
    <div class="swiper-container no-slider animation slider-h-50 slider-h-auto">
        <div class="swiper-wrapper">

            <!-- Item 1 -->
            <div class="swiper-slide slide-center">

                <!-- Media -->
                <img src="<?php echo base_url() . 'admin' . $post['image_path'] ?>" alt="Full Image" class="full-image" data-mask="80">

                <div class="slide-content row text-center">
                    <div class="col-12 mx-auto inner">

                        <!-- Content -->
                        <nav data-aos="zoom-out-up" data-aos-delay="800" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><?php echo  $post['name'] ?></li>
                            </ol>
                        </nav>

                        <h2 class="mb-0  effect-static-text "><?php echo $post['name'] ?></h2>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Single -->
<section id="single" class="section-1 single" style="    padding: 30px 0;">
    <div class="container">
        <div class="row content">

            <!-- Main -->
            <div class="col-12 col-md-8 p-0 text">

                <!-- Text -->
                <div class="row intro">
                    <div class="col-12">

                        <img src="<?php echo base_url() . 'admin' . $post['image_path'] ?>" alt="Full Image" class="" style="width:100%">
                        <div class="event_top_info">
                            <div class="row gx-sm-4 gy-4 align-items-center">
                                <div class="col-xl-8 ">
                                    <div class="row gx-sm-4 gy-3">
                                        <div class="col-md-4 col-sm-6">
                                            <div class="event_top_box">
                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                                <h6>Date</h6>
                                                <p><?php
                                                    $createdAt = DateTime::createFromFormat('Y-m-d', $post['created_at']);
                                                    if ($createdAt) {
                                                        echo $createdAt->format('d M Y'); // Output in dd Mmm yyyy format (e.g., 21 Nov 2024)
                                                    } else {
                                                        echo "Invalid date format"; // Handle the case where the date cannot be parsed
                                                    }
                                                    ?></p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="event_top_box">
                                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                                                <h6>Time</h6>
                                                <p><?php echo  $post['time'] ?></p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="event_top_box">
                                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                                <h6>Location</h6>
                                                <p>ORLANDO</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 justify-content-xl-end d-flex">
                                    <a href="https://www.woodard.com/2024-scaling-new-heights-registration-step-1?hsCtaTracking=9e7e0401-e1bd-4b72-8f4e-5041e7b85210%7C165c403b-504f-4bca-ba29-020b2c76bc97" target="_blank" class="page-btn btns register_button ms-xl-auto" style="color:#fff;">REGISTER NOW<span></span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Meta -->
                
                </div>

                <div class="row">
                    <div class="col-12 align-self-center">
                        <p><?php echo  $post['content'] ?></p>
                    </div>
                </div>


            </div>


            <!-- Sidebar -->
            <aside class="col-12 col-md-4 pl-lg-5 p-0 float-right sidebar">

                <!-- Quote -->
                <div class="row item widget-quote team m-5">
                    <div class="col-12 align-self-center">
                        <div class="quote" style="color:#fff;    border-radius: 15px;">
                            <div class="quote-content">
                                <h4>Exhibitor</h4>
                                <ul>
                                    <li style="color:#fff;">
                                        <h6 style="color:#fff;">Company Name</h6>
                                        <p style="color:#fff;">VSC OFFSHORE</p>
                                    </li>
                                    <li>
                                        <h6 style="color:#fff;">Phone</h6>
                                        <p style="color:#fff;"><a href="tel:17542584994">+91 8511103880</a></p>
                                    </li>
                                    <li>
                                        <h6 style="color:#fff;">Email</h6>
                                        <p style="color:#fff;"><a href="mailto:Support@vscoffshore.com">Support@vscoffshore.com</a></p>
                                    </li>
                                    <li>

                                        <h6 style="color:#fff;">Website</h6>
                                        <p style="color:#fff;"><a href="https://vscoffshore.com/">https://vscoffshore.com/</a></p>
                                    </li>
                                </ul>
                            </div>
                            <i class="quote-right fas fa-quote-right"></i>
                        </div>
                    </div>
                </div>

                <!-- Gallery -->

            </aside>
        </div>
    </div>
</section>



<!-- Subscribe -->
