<style>
    .event{
        padding: 0px 0px 130px 0;

    }
</style>
        <!-- Hero -->
        <section id="slider" class="hero p-0 odd featured">
            <div class="swiper-container no-slider animation slider-h-50 slider-h-auto">
                <div class="swiper-wrapper">

                    <!-- Item 1 -->
                    <div class="swiper-slide slide-center">

                        <!-- Media -->
                        <img src="assets/images/bg-wide.webp" alt="Full Image" class="full-image" data-mask="80">

                        <div class="slide-content row text-center">
                            <div class="col-12 mx-auto inner">

                                <!-- Content -->
                                <nav data-aos="zoom-out-up" data-aos-delay="800" aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Event</li>
                                    </ol>
                                </nav>

                                <h1 class="mb-0 title effect-static-text"  style="font-size: 24px;">Event</h1>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <!-- event -->
        <section id="blog" class="event section-1 single showcase projects">
            <div class="container">
                
                        <!-- Archive -->
                        <div class="row content item widget-archive d-flex justify-content-end">
                            <div class="col-md-3 align-self-center">
                                <h4 class="title">Archive</h4>
                                <div class="input-group">
                                    <i class="icon-arrow-down mr-3"></i>
                                    <select class="form-control">
                                        <option>July, 2020</option>
                                        <option>June, 2020</option>
                                        <option>April, 2020</option>
                                        <option>March, 2020</option>
                                        <option>February, 2020</option>
                                        <option>January, 2020</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                <div class="row content">
 
                    <!-- Main -->
                    <div class="col-12 col-lg-12 p-0 blog-grid">
                        <div class="row items">
                        <?php for ($i = 0; $i < sizeof($posts); $i++) {
                            
                            ?>
                            <div class="col-12 col-md-4 item">
                                <div class="row card p-0 text-center">
                                    <div class="image-over">
                                        <img src="<?php echo base_url() . 'admin' . $posts[$i]['image_path'] ?>" alt="Lorem ipsum">
                                    </div>
                                    <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                        <a href="#" class="d-lg-flex align-items-center"><i class="icon-user"></i>Vsc Offshore</a>
                                        <a href="#" class="d-lg-flex align-items-center"><i class="icon-clock"></i><?php  
                                   
                                   $createdAt = DateTime::createFromFormat('Y-m-d', $posts[$i]['created_at']);

                                   if ($createdAt) {
                                       echo $createdAt->format('d/m/Y'); // Output in dd/mm/yyyy format
                                   } else {
                                       echo "Invalid date format"; // Handle the case where the date cannot be parsed
                                   } ?></a>
                                    </div>
                                    <div class="card-caption col-12 p-0">
                                        <div class="card-body">
                                            <a href="<?php echo base_url() . 'event/events/' . $posts[$i]['id'] . '/' . $posts[$i]['url'] ?>">
                                                <h4><?php echo substr(strip_tags($posts[$i]['name']), 0, 50) ?></h4>
                                                <p class="text-center"><?php echo substr(strip_tags($posts[$i]['content']), 0, 150) ?></p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>            
                            <?php } ?>  
                            
                        </div>

                        <!-- Pagination -->
                        <div class="row d-none">
                            <div class="col-12">
                                <nav>
                                    <ul class="pagination justify-content-center">
                                        <li class="page-item">
                                            <a class="page-link" href="#" tabindex="-1">
                                                <i class="icon-arrow-left"></i>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">
                                                <i class="icon-arrow-right"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>

                 
                </div>
            </div>
        </section>

        <!-- Related -->
        <section id="related" class="section-2 carousel showcase">
            <div class="overflow-holder">
                <div class="container">
                    <div class="row intro">
                        <div class="col-12 col-md-9 align-self-center text-center text-md-left">
                            <span class="pre-title m-auto m-md-0">Our editorial content</span>
                            <h2>Related <span class="featured"><span>Posts</span></span></h2>
                            <p>Every week we publish content about what is best in the business world.</p>
                        </div>
                        <div class="col-12 col-md-3 align-self-end">
                            <a href="#" class="btn mx-auto mr-md-0 ml-md-auto primary-button">SEE ALL</a>
                        </div>
                    </div>
                    <div class="swiper-container mid-slider items" data-perview="3"> 
                        <div class="swiper-wrapper">
                             <?php 
                                 shuffle($posts);
                             for ($i = 0; $i < sizeof($posts); $i++) { 
                                
                             
                                ?>
                            <div class="swiper-slide slide-center item">
                                <div class="row card p-0 text-center">
                                    <div class="image-over">
                                        <img src="<?php echo base_url() . 'admin' . $posts[$i]['image_path'] ?>" alt="Lorem ipsum">
                                    </div>
                                    <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                        <a href="#" class="d-lg-flex align-items-center"><i class="icon-user"></i>Vsc Offshore</a>
                                        <a href="#" class="d-lg-flex align-items-center"><i class="icon-clock"></i><?php  
                                   
                                   $createdAt = DateTime::createFromFormat('Y-m-d', $posts[$i]['created_at']);

                                   if ($createdAt) {
                                       echo $createdAt->format('d/m/Y'); // Output in dd/mm/yyyy format
                                   } else {
                                       echo "Invalid date format"; // Handle the case where the date cannot be parsed
                                   } ?></a>
                                    </div>
                                    <div class="card-caption col-12 p-0">
                                        <div class="card-body">
                                            <a href="<?php echo base_url() . 'event/events/' . $posts[$i]['id'] . '/' . $posts[$i]['url'] ?>">
                                                <h4><?php echo substr(strip_tags($posts[$i]['name']), 0, 50) ?></h4>
                                                <p><?php echo substr(strip_tags($posts[$i]['content']), 0, 150) ?></p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>  
                        </div>
                    </div>
                </div>
            </div>
        </section>

