
        <!-- Hero -->
        <section id="slider" class="hero p-0 odd featured">
            <div class="swiper-container no-slider animation slider-h-50 slider-h-auto">
                <div class="swiper-wrapper">

                    <!-- Item 1 -->
                    <div class="swiper-slide slide-center">

                        <!-- Media -->
                        <img src="assets/images//bg-wide.webp 
                        " alt="Full Image" class="full-image" data-mask="80">

                        <div class="slide-content row text-center">
                            <div class="col-12 mx-auto inner">

                                <!-- Content -->
                                <nav data-aos="zoom-out-up" data-aos-delay="800" aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Blog</li>
                                    </ol>
                                </nav>

                                <h1 class="mb-0 title effect-static-text"  style="font-size: 24px;">Blog</h1>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Blog -->
        <section id="blog" class="section-1 showcase blog-grid filter-section projects">
            <div class="overflow-holder">
                <div class="container">
                    <div class="row justify-content-center text-center">
                        <div class="col-12">
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn active">
                                    <input type="radio" value="all" checked class="btn-filter-item">
                                    <span>All</span>
                                </label>
                                <label class="btn">
                                    <input type="radio" value="institutional" class="btn-filter-item">
                                    <span>Institutional</span>
                                </label>
                                <label class="btn">
                                    <input type="radio" value="social" class="btn-filter-item">
                                    <span>Social</span>
                                </label>
                                <label class="btn">
                                    <input type="radio" value="events" class="btn-filter-item">
                                    <span>Events</span>
                                </label>
                                <label class="btn">
                                    <input type="radio" value="innovation" class="btn-filter-item">
                                    <span>Innovation</span>
                                </label>
                                <label class="btn">
                                    <input type="radio" value="environment" class="btn-filter-item">
                                    <span>Environment</span>
                                </label>
                                <label class="btn">
                                    <input type="radio" value="technology" class="btn-filter-item">
                                    <span>Technology</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row items filter-items">
                    <?php for ($i = 0; $i < sizeof($posts); $i++) { ?>
                        <div class="col-12 col-md-6 col-lg-4 item filter-item" data-groups='["innovation","social","technology"]'>
                            <div class="row card p-0 text-center">
                                <div class="image-over">
                                    <img src="<?php echo base_url() . 'admin' . $posts[$i]['image_path'] ?>" alt="Lorem ipsum">
                                </div>
                                <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                    <a href="#" class="d-lg-flex align-items-center"><i class="icon-user"></i><?php echo $posts[$i]['author'] ?></a>
                                    <a href="#" class="d-lg-flex align-items-center"><i class="icon-clock"></i>2 Days Ago</a>
                                </div>
                                <div class="card-caption col-12 p-0">
                                    <div class="card-body">
                                        <a href="<?php echo base_url() . 'blog/post/' . $posts[$i]['id'] . '/' . $posts[$i]['url'] ?>">
                                            <h4><?php echo substr(strip_tags($posts[$i]['name']), 0, 50) ?></h4>
                                            <p><?php echo substr(strip_tags($posts[$i]['content']), 0, 150) ?></p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>    
                        <?php } ?>        
                        <div class="col-12 col-md-6 col-lg-4 item filter-item" data-groups='["innovation","social","technology"]'>
                            <div class="row card p-0 text-center">
                                <div class="image-over">
                                    <img src="assets/images/news-1.jpg" alt="Lorem ipsum">
                                </div>
                                <div class="card-footer d-lg-flex align-items-center justify-content-center">
                                    <a href="#" class="d-lg-flex align-items-center"><i class="icon-user"></i>Andrea Miller</a>
                                    <a href="#" class="d-lg-flex align-items-center"><i class="icon-clock"></i>2 Days Ago</a>
                                </div>
                                <div class="card-caption col-12 p-0">
                                    <div class="card-body">
                                        <a href="#">
                                            <h4>Increasing creativity is possible for everyone</h4>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>            
                        
                        <div class="col-1 filter-sizer"></div>
                    </div>

                    <!-- Pagination -->
                    <div class="row">
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
        </section>

        <!-- Result -->
        <section id="result" class="section-2 showcase blog-grid projects">
            <div class="container">
            <div class="row items">
                <div class="col-12 col-md-4 pr-md-5 text">
                    <div data-aos="fade-up"  class="row intro">
                        <div class="col-12 p-0">
                            <span class="pre-title m-0">Featured posts</span>
                            <h2 class="mb-3">Most<br>Viewed<br>This Month</h2>
                            <div class="row">
                                <div class="col-12 p-0 input-group">
                                    <input type="text" class="form-control" placeholder="Enter Keywords">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 p-0 input-group align-self-center">
                                    <button class="btn primary-button">SEARCH</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-aos="fade-up" class="col-12 col-md-4 item">
                    <div class="card p-0 text-center">
                        <div class="image-over">
                            <img src="assets/images/news-1.jpg" alt="Lorem ipsum">
                        </div>
                        <div class="card-footer d-lg-flex align-items-center justify-content-center">
                            <a href="#" class="d-lg-flex align-items-center"><i class="icon-user"></i>Andrea Miller</a>
                            <a href="#" class="d-lg-flex align-items-center"><i class="icon-clock"></i>2 Days Ago</a>
                        </div>
                        <div class="card-caption col-12 p-0">
                            <div class="card-body">
                                <a href="#">
                                    <h4>Increasing creativity is possible for everyone</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-aos="fade-up" class="col-12 col-md-4 item">
                    <div class="card p-0 text-center">
                        <div class="image-over">
                            <img src="assets/images/news-2.jpg" alt="Lorem ipsum">
                        </div>
                        <div class="card-footer d-lg-flex align-items-center justify-content-center">
                            <a href="#" class="d-lg-flex align-items-center"><i class="icon-user"></i>John Smith</a>
                            <a href="#" class="d-lg-flex align-items-center"><i class="icon-clock"></i>9 Days Ago</a>
                        </div>
                        <div class="card-caption col-12 p-0">
                            <div class="card-body">
                                <a href="#">
                                    <h4>Because market research is part of the business plan</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
