
        <!-- Hero -->
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
                                        <li class="breadcrumb-item active" aria-current="page">Blog Post</li>
                                    </ol>
                                </nav>

                                <h1 class="mb-0 title effect-static-text"  style="font-size: 24px;">Blog Post</h1>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- Single -->
        <section id="single" class="section-1 single">
            <div class="container">
                <div class="row content">
                    
                    <!-- Main -->
                    <div class="col-12 col-lg-8 p-0 text">

                        <!-- Text -->
                        <div class="row intro">
                            <div class="col-12">
                                <span class="pre-title m-0">Technology</span>
                                <br><br>
                                <img src="<?php echo base_url() . 'admin' . $post['image_path'] ?>" alt="Full Image" class="" ><br><br>
                                <h2 class="mb-0"><span class="featured"></span> <?php echo $post['name'] ?></h2>
                            </div>

                            <!-- Meta -->
                            <div class="row post-meta mx-auto ml-lg-0">
                      
                                <div class="col-12 align-self-center">
                                    <span class="date"><i class="fas fa-user"></i><?php echo  $post['author'] ?></span>
                                    <span class="author"><i class="fas fa-calendar-alt"></i><?php                                    
                                                $createdAt = DateTime::createFromFormat('Y-m-d', $post['created_at']);
                                                if ($createdAt) {
                                                    echo $createdAt->format('d/m/Y'); // Output in dd/mm/yyyy format
                                                } else {
                                                    echo "Invalid date format"; // Handle the case where the date cannot be parsed
                                                } ?></span>
                                    <span class="comment"><i class="fas fa-comment-dots"></i>35 Comments</span>    
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 align-self-center">
                                <p><?php echo  $post['content'] ?></p>
                            </div>
                        </div>

                        <!-- Gallery -->
                        <div class="gallery row justify-content-center d-none">
                            <a class="col-6 item" href="assets/images/gallery-1.jpg">
                                <img src="assets/images/gallery-1.jpg" alt="Gallery" class="w-100">
                            </a>
                            <a class="col-6 item" href="assets/images/gallery-2.jpg">
                                <img src="assets/images/gallery-2.jpg" alt="Gallery" class="w-100">
                            </a>
                            <a class="col-6 item" href="assets/images/gallery-3.jpg">
                                <img src="assets/images/gallery-3.jpg" alt="Gallery" class="w-100">
                            </a>
                            <a class="col-6 item" href="assets/images/gallery-4.jpg">
                                <img src="assets/images/gallery-4.jpg" alt="Gallery" class="w-100">
                            </a>
                        </div>

                        <!-- Comments -->
                        <div class="row">
                            <div class="col-12 align-self-center">
                                <h4>Leave a Reply</h4>
                                <p>Sed mauris nulla, tempor eu est vel, dapibus hendrerit mauris.</p>
                                <form >
                                    <fieldset>
                                        <div class="row">
                                            <div class="col-12 col-lg-6 input-group p-0 pr-lg-3">
                                                <input type="text" name="name" data-minlength="3" class="form-control" placeholder="Name" required>
                                            </div>
                                            <div class="col-12 col-lg-6 input-group p-0">
                                                <input type="email" name="email" data-minlength="3" class="form-control" placeholder="Email" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 input-group p-0">
                                                <textarea name="message" data-minlength="3" class="form-control" placeholder="Message" required></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12 input-group p-0">
                                            <a id="next-3" class="send btn primary-button">COMMENT</a>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
            
                    </div>
                    <div class="col-12 col-lg-8 p-0 text d-none">

                        <!-- Text -->
                        <div class="row intro">
                            <div class="col-12">
                                <span class="pre-title m-0">Technology</span>
                                <h2 class="mb-0"><span class="featured"><span>Because</span></span> market research is part of the business plan.</h2>
                            </div>

                            <!-- Meta -->
                            <div class="row post-meta mx-auto ml-lg-0">
                                <div class="col-12 align-self-center">
                                    <span class="date"><i class="fas fa-user"></i>John Doe</span>
                                    <span class="author"><i class="fas fa-calendar-alt"></i>12 days ago</span>
                                    <span class="comment"><i class="fas fa-comment-dots"></i>35 Comments</span>    
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 align-self-center">
                                <p>Lorem ipsum dolor sit amet, <b>consectetur adipiscing</b> elit. Vestibulum velit tortor, interdum sed cursus eu, sagittis ut nunc. Sed vitae tellus et arcu aliquet faucibus fermentum non lacus.</p>
                                <p>Praesent fringilla quis massa et placerat. Mauris eu dui eget <u>urna pellentesque</u> gravida vitae quis nibh. Ut at augue tortor. Pellentesque quis suscipit magna.</p>
                                <blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quam tortor, ultrices accumsan mauris eget, pulvinar tincidunt erat. Sed nisi nisi, rutrum sit amet elit.</blockquote>
                                <p>Sed et enim dolor. Integer laoreet, elit nec <a href="#">ornare rutrum</a>, massa felis molestie magna, ut vehicula magna justo ac nulla. Integer luctus aliquet pulvinar.</p>

                                <div class="mb-5 gallery">
                                    <a href="https://vimeo.com/222990241" class="square-image d-flex justify-content-center align-items-center">
                                        <i class="icon bigger fas fa-play clone"></i>
                                        <i class="icon bigger fas fa-play"></i>
                                        <img src="assets/images/video-1.jpg" class="fit-image" alt="Introduction Video">
                                    </a>
                                </div>

                                <h4>Lorem ipsum dolor</h4>
                                <p>Sed mauris nulla, tempor eu est vel, dapibus hendrerit mauris curabitur dictum pharetra.</p>
                                <p>Etiam mollis sem sed bibendum blandit. Aenean quis luctus ligula, vitae suscipit dui. Nunc diam orci, tincidunt eget consectetur sit amet, vulputate.</p>
                                <ul>
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                    <li>Fusce consequat massa vel libero cursus, sed sollicitudin lacus elementum. Donec tortor lorem, consequat vitae ex id, consectetur dictum augue.</li>
                                    <li>Praesent faucibus mauris vel enim cursus, sit amet auctor odio bibendum.</li>
                                    <li>Quisque dapibus augue sed eros fringilla gravida. Nulla vitae scelerisque risus. Pellentesque elit odio, convallis nec sodales quis, pretium nec felis.</li>
                                    <li>Aliquam vestibulum odio nec sodales faucibus. Donec hendrerit nec odio in tristique.</li>
                                </ul>
                            </div>
                        </div>

                        <!-- Gallery -->
                        <div class="gallery row justify-content-center">
                            <a class="col-6 item" href="assets/images/gallery-1.jpg">
                                <img src="assets/images/gallery-1.jpg" alt="Gallery" class="w-100">
                            </a>
                            <a class="col-6 item" href="assets/images/gallery-2.jpg">
                                <img src="assets/images/gallery-2.jpg" alt="Gallery" class="w-100">
                            </a>
                            <a class="col-6 item" href="assets/images/gallery-3.jpg">
                                <img src="assets/images/gallery-3.jpg" alt="Gallery" class="w-100">
                            </a>
                            <a class="col-6 item" href="assets/images/gallery-4.jpg">
                                <img src="assets/images/gallery-4.jpg" alt="Gallery" class="w-100">
                            </a>
                        </div>

                        <!-- Comments -->
                        <div class="row">
                            <div class="col-12 align-self-center">
                                <h4>Leave a Reply</h4>
                                <p>Sed mauris nulla, tempor eu est vel, dapibus hendrerit mauris.</p>
                                <form>
                                    <fieldset>
                                        <div class="row">
                                            <div class="col-12 col-lg-6 input-group p-0 pr-lg-3">
                                                <input type="text" name="name" data-minlength="3" class="form-control" placeholder="Name" required>
                                            </div>
                                            <div class="col-12 col-lg-6 input-group p-0">
                                                <input type="email" name="email" data-minlength="3" class="form-control" placeholder="Email" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 input-group p-0">
                                                <textarea name="message" data-minlength="3" class="form-control" placeholder="Message" required></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12 input-group p-0">
                                            <a id="next-3" class="send btn primary-button">COMMENT</a>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
            
                    </div>
                    
                    <!-- Sidebar -->
                    <aside class="col-12 col-lg-4 pl-lg-5 p-0 float-right sidebar">

                        <!-- Share -->
                        <div class="row item widget-share">
                            <div class="col-12 align-self-center">
                                <h4 class="title">Share</h4>
                                <ul class="navbar-nav social share-list">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="fab fa-facebook-f ml-0"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="fab fa-pinterest"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="fab fa-google-drive"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="fas fa-envelope mr-2"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link"><i class="fas fa-print"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Search -->
                        <div class="row item widget-search">
                            <div class="col-12 align-self-center">
                                <h4 class="title">Search</h4>
                                <div class="row">
                                    <div class="col-12 m-0 p-0 input-group">
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
                            
                        <!-- Services -->
                        <div class="row item widget-services">
                            <div class="col-12 align-self-center">
                                <h4 class="title">Our Services</h4>
                                <div class="quote">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item d-flex justify-content-start align-items-center">
                                            <a href="#"><i class="icon icon-organization"></i></a>
                                            <div class="list-group-content">
                                                <h4>Audit & Assurance</h4>
                                                <p>$ 1.290 / mo</p>
                                            </div>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-start align-items-center">
                                            <a href="#"><i class="icon icon-briefcase"></i></a>
                                            <div class="list-group-content">
                                                <h4>Financial Advisory</h4>
                                                <p>$ 2.490 / mo</p>
                                            </div>
                                        </li>
                                        <li class="list-group-item d-flex justify-content-start align-items-center">
                                            <a href="#"><i class="icon icon-chart"></i></a>
                                            <div class="list-group-content">
                                                <h4>Analytics<br>and M&A</h4>
                                                <p>$ 2.990 / mo</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>   

                        <!-- Categories -->
                        <div class="row item widget-categories">
                            <div class="col-12 align-self-center">
                                <h4 class="title">Categories</h4>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <a href="#">Technology</a>
                                        <span class="badge circle">23</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <a href="#">Education</a>
                                        <span class="badge circle">41</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <a href="#">Industry</a>
                                        <span class="badge circle">26</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <a href="#">Development</a>
                                        <span class="badge circle">75</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                            
                        <!-- Tags -->
                        <div class="row item widget-tags">
                            <div class="col-12 align-self-center">
                                <h4 class="title">Tags</h4>
                                <div class="badges">
                                    <span class="badge"><a href="#">Consulting</a></span>
                                    <span class="badge"><a href="#">Audit</a></span>
                                    <span class="badge"><a href="#">Assurance</a></span>
                                    <span class="badge"><a href="#">Advisory</a></span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Archive -->
                        <div class="row item widget-archive">
                            <div class="col-12 align-self-center">
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
                        
                        <!-- Quote -->
                        <div class="row item widget-quote team">
                            <div class="col-12 align-self-center">
                                <div class="quote">
                                    <div class="quote-content">
                                        <h4>Author Message</h4>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                        <h5>T. Johnson</h5>
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

        <!-- Result -->
        <section id="result" class="section-2 showcase blog-grid filter-section projects d-none">
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

        <!-- Subscribe -->
        <section id="subscribe" class="section-3 odd subscribe">
            <div class="container smaller">
                <div class="row">
                    <div class="col-12 col-md-6 m-md-0 intro">
                        <span class="pre-title m-0">Newsletter</span>
                        <h2><span class="featured"><span>Know</span></span> First</h2>
                        <p>Follow closely and receive content about our company and the news of the current market.</p>
                    </div>
                    <div class="col-12 col-md-6">
                        <form action="php/form.php" id="nexgen-subscribe" class="row m-auto items">
                            <input type="hidden" name="section" value="nexgen_subscribe">

                            <input type="hidden" name="reCAPTCHA">
                            <!-- Remove this field if you want to disable recaptcha -->

                            <div class="col-12 mt-0 input-group align-self-center item">
                                <input type="text" name="name" class="form-control less-opacity field-name" placeholder="Name">
                            </div>
                            <div class="col-12 input-group align-self-center item">
                                <input type="email" name="email" class="form-control less-opacity field-email" placeholder="Email">
                            </div>
                            <div class="col-12 input-group align-self-center item">
                                <a data-aos="zoom-in" class="btn primary-button">SUBSCRIBE</a>
                            </div>
                            <div class="col-12 item">
                                <span class="form-alert mt-3 mb-0"></span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>