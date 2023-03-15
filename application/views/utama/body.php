<header class="header-area">
    <?php $this->load->view('tampilan_user/topheader.php') ?>
    <?php $this->load->view('gadipake/breakingnewsarea.php') ?>

    <!-- <div class="middle-header">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-6 col-md-3">
                    <div class="logo-area">
                        <a href="#"><img src="<?= base_url('assets/logo1') ?>/loman.png" alt="logo" height="80" width="80"></a>
                        <a href="#" style="margin-left: 10px;"><img src="<?= base_url('assets/logo1') ?>/lobang.png" alt="logo " height="130" width="130"></a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <?php $this->load->view('tampilan_user/carousel1.php')  ?>

    <div class="bottom-header">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="main-menu">
                        <nav class="navbar navbar-expand-lg">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#gazetteMenu" aria-controls="gazetteMenu" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i> Menu</button>
                            <div class="collapse navbar-collapse" id="gazetteMenu">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="#">Today <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="index-2.html">Home</a>
                                            <!-- <a class="dropdown-item" href="catagory.html">Catagory</a>
                                            <a class="dropdown-item" href="single-post.html">Single Post</a>
                                            <a class="dropdown-item" href="about-us.html">About Us</a>
                                            <a class="dropdown-item" href="contact.html">Contact</a> -->
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Politics</a>
                                    </li>

                                </ul>

                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- <?php $this->load->view('gadipake/carousel.php') ?> -->

<!-- cari carousel biasa -->


<section class="main-content-wrapper section_padding_100">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-9">
                <div class="gazette-welcome-post">
                    <div class="gazette-post-tag">
                        <a href="#">Politices</a>
                    </div>
                    <h2 class="font-pt">What's behind the world obsession with gems?</h2>
                    <p class="gazette-post-date">March 29, 2016</p>
                    <div class="blog-post-thumbnail my-5">
                        <img src="<?= base_url('assets/img/blog-img/1.jpg"') ?>" alt="post-thumb">
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ultrices egestas nunc, quis venenatis orci tincidunt id. Fusce commodo blandit eleifend. Nullam viverra tincidunt dolor, at pulvinar dui. Nullam at risus ut ipsum viverra posuere. Aliquam quis convallis enim. Nunc pulvinar molestie sem id blandit. Nunc venenatis interdum mollis. Aliquam finibus nulla quam, a iaculis justo finibus non. Suspendisse in fermentum nunc. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse ultrices egestas nunc, quis venenatis orci tincidunt id. Fusce commodo blandit eleifend.</p>
                    <div class="post-continue-reading-share d-sm-flex align-items-center justify-content-between mt-30">
                        <div class="post-continue-btn">
                            <a href="#" class="font-pt">Continue Reading <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                        </div>
                        <div class="post-share-btn-group">
                            <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3 col-md-6">
                <div class="sidebar-area">

                    <div class="breaking-news-widget">
                        <div class="widget-title">
                            <h5>breaking news</h5>
                        </div>

                        <div class="single-breaking-news-widget">
                            <img src="<?= base_url('assets/img/blog-img/bn-1.jpg') ?>" alt="">
                            <div class="breakingnews-title">
                                <p>breaking news</p>
                            </div>
                            <div class="breaking-news-heading gradient-background-overlay">
                                <h5 class="font-pt">China leads new global skyscraper record</h5>
                            </div>
                        </div>

                    </div>

                    <div class="donnot-miss-widget">
                        <div class="widget-title">
                            <h5>Don't miss</h5>
                        </div>

                        <div class="single-dont-miss-post d-flex mb-30">
                            <div class="dont-miss-post-thumb">
                                <img src="img/blog-img/dm-1.jpg" alt="">
                            </div>
                            <div class="dont-miss-post-content">
                                <a href="#" class="font-pt">EU council reunites</a>
                                <span>Nov 29, 2017</span>
                            </div>
                        </div>

                        <div class="single-dont-miss-post d-flex mb-30">
                            <div class="dont-miss-post-thumb">
                                <img src="img/blog-img/dm-2.jpg" alt="">
                            </div>
                            <div class="dont-miss-post-content">
                                <a href="#" class="font-pt">A new way to travel the world</a>
                                <span>March 29, 2016</span>
                            </div>
                        </div>

                        <div class="single-dont-miss-post d-flex mb-30">
                            <div class="dont-miss-post-thumb">
                                <img src="img/blog-img/dm-3.jpg" alt="">
                            </div>
                            <div class="dont-miss-post-content">
                                <a href="#" class="font-pt">Why choose a bank?</a>
                                <span>March 29, 2016</span>
                            </div>
                        </div>
                    </div>

                    <div class="advert-widget">
                        <div class="widget-title">
                            <h5>Advert</h5>
                        </div>
                        <div class="advert-thumb mb-30">
                            <a href="#"><img src="img/bg-img/add.png" alt=""></a>
                        </div>
                    </div>

                    <div class="subscribe-widget">
                        <div class="widget-title">
                            <h5>subscribe</h5>
                        </div>
                        <div class="subscribe-form">
                            <form action="#">
                                <input type="email" name="email" id="subs_email" placeholder="Your Email">
                                <button type="submit">subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="gazette-catagory-posts-area">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4">

                    <div class="gazette-single-catagory-post">
                        <div class="single-catagory-post-thumb mb-15">
                            <img src="img/blog-img/12.jpg" alt="">
                        </div>

                        <div class="gazette-post-tag">
                            <a href="#">Video</a>
                        </div>
                        <h5><a href="#" class="font-pt">Save the eniroment with this step</a></h5>
                        <span>Nov 29, 2017</span>
                    </div>

                    <div class="gazette-single-catagory-post">
                        <h5><a href="#" class="font-pt">Protest to be anounced in January</a></h5>
                        <span>Nov 29, 2017</span>
                    </div>

                    <div class="gazette-single-catagory-post">
                        <h5><a href="#" class="font-pt">10 Bills that the Congress in voting</a></h5>
                        <span>Nov 29, 2017</span>
                    </div>

                    <div class="gazette-single-catagory-post">
                        <h5><a href="#" class="font-pt">The narcissism of Donald Trump</a></h5>
                        <span>Nov 29, 2017</span>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="row">
                        <div class="col-12 col-md-6">

                            <div class="gazette-single-catagory-post">
                                <div class="single-catagory-post-thumb mb-15">
                                    <img src="img/blog-img/14.jpg" alt="">
                                </div>

                                <div class="gazette-post-tag">
                                    <a href="#">Others</a>
                                </div>
                                <h5><a href="#" class="font-pt">11 hottest toys for this holiday season</a></h5>
                                <span>Nov 29, 2017</span>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">

                            <div class="gazette-single-catagory-post">
                                <div class="single-catagory-post-thumb mb-15">
                                    <img src="img/blog-img/15.jpg" alt="">
                                </div>

                                <div class="gazette-post-tag">
                                    <a href="#">Video</a>
                                </div>
                                <h5><a href="#" class="font-pt">Get this good feeling about life</a></h5>
                                <span>Nov 29, 2017</span>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">

                            <div class="gazette-single-catagory-post">
                                <div class="single-catagory-post-thumb mb-15">
                                    <img src="img/blog-img/16.jpg" alt="">
                                </div>

                                <div class="gazette-post-tag">
                                    <a href="#">Interview</a>
                                </div>
                                <h5><a href="#" class="font-pt">Get this good feeling about life</a></h5>
                                <span>Nov 29, 2017</span>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">

                            <div class="gazette-single-catagory-post">
                                <div class="single-catagory-post-thumb mb-15">
                                    <img src="img/blog-img/17.jpg" alt="">
                                </div>

                                <div class="gazette-post-tag">
                                    <a href="#">Video</a>
                                </div>
                                <h5><a href="#" class="font-pt">11 hottest toys for this holiday season</a></h5>
                                <span>Nov 29, 2017</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">

                    <div class="gazette-single-catagory-post">
                        <div class="single-catagory-post-thumb mb-15">
                            <img src="img/blog-img/13.jpg" alt="">
                        </div>

                        <div class="gazette-post-tag">
                            <a href="#">Video</a>
                        </div>
                        <h5><a href="#" class="font-pt">10 Bills that the Congress in voting</a></h5>
                        <span>Nov 29, 2017</span>
                    </div>

                    <div class="gazette-single-catagory-post">
                        <h5><a href="#" class="font-pt">Blair can't save Britain from Brexit</a></h5>
                        <span>Nov 29, 2017</span>
                    </div>

                    <div class="gazette-single-catagory-post">
                        <h5><a href="#" class="font-pt">Save the eniroment with this step</a></h5>
                        <span>Nov 29, 2017</span>
                    </div>

                    <div class="gazette-single-catagory-post">
                        <h5><a href="#" class="font-pt">Protest to be anounced in January</a></h5>
                        <span>Nov 29, 2017</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php $this->load->view('gadipake/gazatte-video-post-area.php') ?>

<?php $this->load->view('gadipake/sliderbawah') ?>


<!-- <script src="js/jquery/jquery-2.2.4.min.js"></script> -->
<script src="<?= base_url('assets/js/jquery/jquery-2.2.4.min.js') ?>"></script>

<!-- <script src="js/popper.min.js"></script> -->
<script src="<?= base_url('assets/js/popper.min.js') ?>"></script>

<!-- <script src="js/bootstrap.min.js"></script> -->
<script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>

<!-- <script src="js/plugins.js"></script> -->
<script src="<?= base_url('assets/js/plugins.js') ?>"></script>

<!-- <script src="js/active.js"></script> -->
<script src="<?= base_url('assets/js/active.js') ?>"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993" integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA==" data-cf-beacon='{"rayId":"7a5817abb86448d6","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2023.2.0","si":100}' crossorigin="anonymous"></script>