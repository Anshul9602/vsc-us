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
.listing-card .card-img{width: 100%;aspect-ratio: 9/5;border-radius: 0;overflow: hidden;}
.listing-card .card-img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: 0.75s;
}
.listing-card .card-content {
    padding: 30px 0 0 0;
}
.listing-card .card-content h5 {
    margin-bottom: 20px;
    padding-bottom: 8px;
    font-size: 20px;
    font-weight: 400;
   
    position: relative;
}
.listing-card .card-content p {
    margin: 0 0 30px 0;
    text-align: left;
    line-height: 1.55;
    white-space: unset;
    color: #444;
}
.link-area.small-btn {
    padding: 5px 0;
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

    <div
        style="background: url('assets/inner-banner.jpg') no-repeat center center fixed;background-size: cover;">
        <div class="inner-banner">
            <div class="container">
                <div class="banner-content">
                    <h1 class="page-title">Services</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="https://www.infinity-globus.com"><i
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
    <div class="row  d-flex justify-content-center  align-items-center">

        <div class="col-lg-4 col-md-6 mt-md-4 mt-2">
            <a class="listing-card" href="<?php echo base_url('Service1'); ?>">
                <div class="card-img"><img src="https://www.infinity-globus.com/wp-content/uploads/2023/11/Outsource-Tax-Preparation-Services.webp" class=" wp-post-image" alt="Outsource Tax Preparation Services" decoding="async"></div>
                <div class="card-content">
                    <h5>Tax Preparation Service</h5>
                    <p class="text-105">Get expert aid in preparing complex to simplest tax returns in an effective and efficient way with our Ou…</p>
                    <div class="link-area small-btn">Read More <span></span></div>
                </div>
            </a>
        </div>
        <div class="col-lg-4 col-md-6 mt-md-4 mt-2">
            <a class="listing-card" href="<?php echo base_url('Service1'); ?>">
                <div class="card-img"><img src="https://www.infinity-globus.com/wp-content/uploads/2023/11/Outsource-Tax-Preparation-Services.webp" class=" wp-post-image" alt="Outsource Tax Preparation Services" decoding="async"></div>
                <div class="card-content">
                    <h5>Tax Preparation Service</h5>
                    <p class="text-105">Get expert aid in preparing complex to simplest tax returns in an effective and efficient way with our Ou…</p>
                    <div class="link-area small-btn">Read More <span></span></div>
                </div>
            </a>
        </div>
        <div class="col-lg-4 col-md-6 mt-md-4 mt-2">
            <a class="listing-card" href="<?php echo base_url('Service1'); ?>">
                <div class="card-img"><img src="https://www.infinity-globus.com/wp-content/uploads/2023/11/Outsource-Tax-Preparation-Services.webp" class=" wp-post-image" alt="Outsource Tax Preparation Services" decoding="async"></div>
                <div class="card-content">
                    <h5>Tax Preparation Service</h5>
                    <p class="text-105">Get expert aid in preparing complex to simplest tax returns in an effective and efficient way with our Ou…</p>
                    <div class="link-area small-btn">Read More <span></span></div>
                </div>
            </a>
        </div>
    </div>

</section>
<!-- banner -->

