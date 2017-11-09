<!DOCTYPE html>
<html dir="ltr" lang="{{ app()->getLocale() }}">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />

    <!-- Stylesheets
    ============================================= -->
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="style.css" type="text/css" />
    <link rel="stylesheet" href="css/dark.css" type="text/css" />
    <link rel="stylesheet" href="css/font-icons.css" type="text/css" />
    <link rel="stylesheet" href="css/animate.css" type="text/css" />
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

    <link rel="stylesheet" href="css/responsive.css" type="text/css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Document Title
    ============================================= -->
    <title>Blog - Masonry 2 Columns Left Sidebar | Canvas</title>

</head>

<body class="stretched">

<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">

    <!-- Header
    ============================================= -->
    @include('layouts.work_menu.blade')

    <!-- Page Title
    ============================================= -->
    <section id="page-title">

        <div class="container clearfix">
            <h1>Blog</h1>
            <span>Our Latest News in Masonry Layout</span>
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Blog</li>
            </ol>
        </div>

    </section><!-- #page-title end -->

    <!-- Content
    ============================================= -->
    <section id="content">

        <div class="content-wrap">

            <div class="container clearfix">

                <!-- Post Content
                ============================================= -->
                <div class="postcontent nobottommargin col_last clearfix">

                    <!-- Posts
                    ============================================= -->
                    <div id="posts" class="post-grid grid-container post-masonry grid-2 clearfix">

                        <div class="entry clearfix">
                            <div class="entry-image">
                                <a href="images/blog/full/17.jpg" data-lightbox="image"><img class="image_fade" src="images/blog/small/17.jpg" alt="Standard Post with Image"></a>
                            </div>
                            <div class="entry-title">
                                <h2><a href="blog-single.html">This is a Standard post with a Preview Image</a></h2>
                            </div>
                            <ul class="entry-meta clearfix">
                                <li><i class="icon-calendar3"></i> 10th Feb 2014</li>
                                <li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13</a></li>
                                <li><a href="#"><i class="icon-camera-retro"></i></a></li>
                            </ul>
                            <div class="entry-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in. Eligendi, deserunt, blanditiis est quisquam doloribus.</p>
                                <a href="blog-single.html"class="more-link">Read More</a>
                            </div>
                        </div>

                        <div class="entry clearfix">
                            <div class="entry-image">
                                <iframe src="http://player.vimeo.com/video/87701971" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                            </div>
                            <div class="entry-title">
                                <h2><a href="blog-single-full.html">This is a Standard post with an Embedded Video</a></h2>
                            </div>
                            <ul class="entry-meta clearfix">
                                <li><i class="icon-calendar3"></i> 16th Feb 2014</li>
                                <li><a href="blog-single-full.html#comments"><i class="icon-comments"></i> 19</a></li>
                                <li><a href="#"><i class="icon-film"></i></a></li>
                            </ul>
                            <div class="entry-content">
                                <p>Asperiores, tenetur, blanditiis, quaerat odit ex exercitationem pariatur quibusdam veritatis quisquam laboriosam esse beatae hic perferendis velit deserunt!</p>
                                <a href="blog-single-full.html"class="more-link">Read More</a>
                            </div>
                        </div>

                        <div class="entry clearfix">
                            <div class="entry-image">
                                <div class="fslider" data-arrows="false" data-lightbox="gallery">
                                    <div class="flexslider">
                                        <div class="slider-wrap">
                                            <div class="slide"><a href="images/blog/full/10.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/blog/masonry/10.jpg" alt="Standard Post with Gallery"></a></div>
                                            <div class="slide"><a href="images/blog/full/20.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/blog/masonry/20.jpg" alt="Standard Post with Gallery"></a></div>
                                            <div class="slide"><a href="images/blog/full/21.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/blog/masonry/21.jpg" alt="Standard Post with Gallery"></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="entry-title">
                                <h2><a href="blog-single-small.html">This is a Standard post with a Slider Gallery</a></h2>
                            </div>
                            <ul class="entry-meta clearfix">
                                <li><i class="icon-calendar3"></i> 24th Feb 2014</li>
                                <li><a href="blog-single-small.html#comments"><i class="icon-comments"></i> 21</a></li>
                                <li><a href="#"><i class="icon-picture"></i></a></li>
                            </ul>
                            <div class="entry-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptatem, dolorem animi nisi autem blanditiis enim culpa reiciendis et explicabo tenetur!</p>
                                <a href="blog-single-small.html"class="more-link">Read More</a>
                            </div>
                        </div>

                        <div class="entry clearfix">
                            <div class="entry-image">
                                <blockquote>
                                    <p>"When you are courting a nice girl an hour seems like a second. When you sit on a red-hot cinder a second seems like an hour. That's relativity."</p>
                                    <footer>Albert Einstein</footer>
                                </blockquote>
                            </div>
                            <ul class="entry-meta clearfix">
                                <li><i class="icon-calendar3"></i> 3rd Mar 2014</li>
                                <li><a href="blog-single.html#comments"><i class="icon-comments"></i> 23</a></li>
                                <li><a href="#"><i class="icon-quote-left"></i></a></li>
                            </ul>
                        </div>

                        <div class="entry clearfix">
                            <div class="entry-image clearfix">
                                <div class="portfolio-single-image masonry-thumbs col-5" data-big="1" data-lightbox="gallery">
                                    <a href="images/blog/full/2.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/blog/small/2.jpg" alt=""></a>
                                    <a href="images/blog/full/3.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/blog/small/3.jpg" alt=""></a>
                                    <a href="images/blog/full/6-1.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/blog/small/6-1.jpg" alt=""></a>
                                    <a href="images/blog/full/6-2.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/blog/small/6-2.jpg" alt=""></a>
                                    <a href="images/blog/full/12.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/blog/small/12.jpg" alt=""></a>
                                    <a href="images/blog/full/12-1.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/blog/small/12-1.jpg" alt=""></a>
                                    <a href="images/blog/full/13.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/blog/small/13.jpg" alt=""></a>
                                </div>
                            </div>
                            <div class="entry-title">
                                <h2><a href="blog-single-thumbs.html">This is a Standard post with Masonry Thumbs Gallery</a></h2>
                            </div>
                            <ul class="entry-meta clearfix">
                                <li><i class="icon-calendar3"></i> 3rd Mar 2014</li>
                                <li><a href="blog-single-thumbs.html#comments"><i class="icon-comments"></i> 21</a></li>
                                <li><a href="#"><i class="icon-picture"></i></a></li>
                            </ul>
                            <div class="entry-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptatem, dolorem animi nisi autem blanditiis enim culpa reiciendis et explicabo!</p>
                                <a href="blog-single-thumbs.html"class="more-link">Read More</a>
                            </div>
                        </div>

                        <div class="entry clearfix">
                            <div class="entry-image">
                                <a href="http://themeforest.net" class="entry-link" target="_blank">
                                    Themeforest.net
                                    <span>- http://themeforest.net</span>
                                </a>
                            </div>
                            <ul class="entry-meta clearfix">
                                <li><i class="icon-calendar3"></i> 17th Mar 2014</li>
                                <li><a href="blog-single.html#comments"><i class="icon-comments"></i> 26</a></li>
                                <li><a href="#"><i class="icon-link"></i></a></li>
                            </ul>
                        </div>

                        <div class="entry clearfix">
                            <div class="entry-image">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia, fuga optio voluptatibus saepe tenetur aliquam debitis eos accusantium!
                                    </div>
                                </div>
                            </div>
                            <ul class="entry-meta clearfix">
                                <li><i class="icon-calendar3"></i> 21st Mar 2014</li>
                                <li><a href="blog-single.html#comments"><i class="icon-comments"></i> 11</a></li>
                                <li><a href="#"><i class="icon-align-justify2"></i></a></li>
                            </ul>
                        </div>

                        <div class="entry clearfix">
                            <div class="entry-image clearfix">
                                <div class="fslider" data-animation="fade" data-pagi="false" data-pause="6000" data-lightbox="gallery">
                                    <div class="flexslider">
                                        <div class="slider-wrap">
                                            <div class="slide"><a href="images/blog/full/6-1.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/blog/masonry/6-1.jpg" alt="Standard Post with Gallery"></a></div>
                                            <div class="slide"><a href="images/blog/full/6-2.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/blog/masonry/6-2.jpg" alt="Standard Post with Gallery"></a></div>
                                            <div class="slide"><a href="images/blog/full/12-1.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/blog/masonry/12-1.jpg" alt="Standard Post with Gallery"></a></div>
                                            <div class="slide"><a href="images/blog/full/22.jpg" data-lightbox="gallery-item"><img class="image_fade" src="images/blog/masonry/22.jpg" alt="Standard Post with Gallery"></a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="entry-title">
                                <h2><a href="blog-single-thumbs.html">This is a Standard post with Fade Gallery</a></h2>
                            </div>
                            <ul class="entry-meta clearfix">
                                <li><i class="icon-calendar3"></i> 3rd Apr 2014</li>
                                <li><a href="blog-single-thumbs.html#comments"><i class="icon-comments"></i> 21</a></li>
                                <li><a href="#"><i class="icon-picture"></i></a></li>
                            </ul>
                            <div class="entry-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptatem, dolorem animi nisi autem blanditiis enim culpa reiciendis et explicabo!</p>
                                <a href="blog-single-thumbs.html"class="more-link">Read More</a>
                            </div>
                        </div>

                        <div class="entry clearfix">
                            <div class="entry-image clearfix">
                                <iframe width="100%" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/115823769&amp;auto_play=false&amp;hide_related=true&amp;visual=true"></iframe>
                            </div>
                            <div class="entry-title">
                                <h2><a href="blog-single.html">This is an Embedded Audio Post</a></h2>
                            </div>
                            <ul class="entry-meta clearfix">
                                <li><i class="icon-calendar3"></i> 28th April 2014</li>
                                <li><a href="blog-single.html#comments"><i class="icon-comments"></i> 16</a></li>
                                <li><a href="#"><i class="icon-music2"></i></a></li>
                            </ul>
                            <div class="entry-content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, voluptatem, dolorem animi nisi autem blanditiis enim culpa reiciendis et explicabo tenetur voluptate rerum.</p>
                                <a href="blog-single.html"class="more-link">Read More</a>
                            </div>
                        </div>

                        <div class="entry clearfix">
                            <div class="entry-image">
                                <iframe width="560" height="315" src="http://www.youtube.com/embed/SZEflIVnhH8" frameborder="0" allowfullscreen></iframe>
                            </div>
                            <div class="entry-title">
                                <h2><a href="blog-single-full.html">This is a Standard post with a Youtube Video</a></h2>
                            </div>
                            <ul class="entry-meta clearfix">
                                <li><i class="icon-calendar3"></i> 30th Apr 2014</li>
                                <li><a href="blog-single-full.html#comments"><i class="icon-comments"></i> 34</a></li>
                                <li><a href="#"><i class="icon-film"></i></a></li>
                            </ul>
                            <div class="entry-content">
                                <p>Asperiores, tenetur, blanditiis, quaerat odit ex exercitationem pariatur quibusdam veritatis quisquam laboriosam esse beatae hic perferendis velit deserunt!</p>
                                <a href="blog-single-full.html"class="more-link">Read More</a>
                            </div>
                        </div>

                    </div><!-- #posts end -->

                </div><!-- .postcontent end -->

                <!-- Sidebar
                ============================================= -->
                <div class="sidebar nobottommargin clearfix">
                    <div class="sidebar-widgets-wrap">

                        <div class="widget widget-twitter-feed clearfix">

                            <h4>Twitter Feed</h4>
                            <ul class="iconlist twitter-feed" data-username="envato" data-count="2">
                                <li></li>
                            </ul>

                            <a href="#" class="btn btn-default btn-sm fright">Follow Us on Twitter</a>

                        </div>

                        <div class="widget clearfix">

                            <h4>Flickr Photostream</h4>
                            <div id="flickr-widget" class="flickr-feed masonry-thumbs" data-id="613394@N22" data-count="16" data-type="group" data-lightbox="gallery"></div>

                        </div>

                        <div class="widget clearfix">

                            <div class="tabs nobottommargin clearfix" id="sidebar-tabs">

                                <ul class="tab-nav clearfix">
                                    <li><a href="#tabs-1">Popular</a></li>
                                    <li><a href="#tabs-2">Recent</a></li>
                                    <li><a href="#tabs-3"><i class="icon-comments-alt norightmargin"></i></a></li>
                                </ul>

                                <div class="tab-container">

                                    <div class="tab-content clearfix" id="tabs-1">
                                        <div id="popular-post-list-sidebar">

                                            <div class="spost clearfix">
                                                <div class="entry-image">
                                                    <a href="#" class="nobg"><img class="img-circle" src="images/magazine/small/3.jpg" alt=""></a>
                                                </div>
                                                <div class="entry-c">
                                                    <div class="entry-title">
                                                        <h4><a href="#">Debitis nihil placeat, illum est nisi</a></h4>
                                                    </div>
                                                    <ul class="entry-meta">
                                                        <li><i class="icon-comments-alt"></i> 35 Comments</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="spost clearfix">
                                                <div class="entry-image">
                                                    <a href="#" class="nobg"><img class="img-circle" src="images/magazine/small/2.jpg" alt=""></a>
                                                </div>
                                                <div class="entry-c">
                                                    <div class="entry-title">
                                                        <h4><a href="#">Elit Assumenda vel amet dolorum quasi</a></h4>
                                                    </div>
                                                    <ul class="entry-meta">
                                                        <li><i class="icon-comments-alt"></i> 24 Comments</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="spost clearfix">
                                                <div class="entry-image">
                                                    <a href="#" class="nobg"><img class="img-circle" src="images/magazine/small/1.jpg" alt=""></a>
                                                </div>
                                                <div class="entry-c">
                                                    <div class="entry-title">
                                                        <h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>
                                                    </div>
                                                    <ul class="entry-meta">
                                                        <li><i class="icon-comments-alt"></i> 19 Comments</li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="tab-content clearfix" id="tabs-2">
                                        <div id="recent-post-list-sidebar">

                                            <div class="spost clearfix">
                                                <div class="entry-image">
                                                    <a href="#" class="nobg"><img class="img-circle" src="images/magazine/small/1.jpg" alt=""></a>
                                                </div>
                                                <div class="entry-c">
                                                    <div class="entry-title">
                                                        <h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>
                                                    </div>
                                                    <ul class="entry-meta">
                                                        <li>10th July 2014</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="spost clearfix">
                                                <div class="entry-image">
                                                    <a href="#" class="nobg"><img class="img-circle" src="images/magazine/small/2.jpg" alt=""></a>
                                                </div>
                                                <div class="entry-c">
                                                    <div class="entry-title">
                                                        <h4><a href="#">Elit Assumenda vel amet dolorum quasi</a></h4>
                                                    </div>
                                                    <ul class="entry-meta">
                                                        <li>10th July 2014</li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="spost clearfix">
                                                <div class="entry-image">
                                                    <a href="#" class="nobg"><img class="img-circle" src="images/magazine/small/3.jpg" alt=""></a>
                                                </div>
                                                <div class="entry-c">
                                                    <div class="entry-title">
                                                        <h4><a href="#">Debitis nihil placeat, illum est nisi</a></h4>
                                                    </div>
                                                    <ul class="entry-meta">
                                                        <li>10th July 2014</li>
                                                    </ul>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="tab-content clearfix" id="tabs-3">
                                        <div id="recent-post-list-sidebar">

                                            <div class="spost clearfix">
                                                <div class="entry-image">
                                                    <a href="#" class="nobg"><img class="img-circle" src="images/icons/avatar.jpg" alt=""></a>
                                                </div>
                                                <div class="entry-c">
                                                    <strong>John Doe:</strong> Veritatis recusandae sunt repellat distinctio...
                                                </div>
                                            </div>

                                            <div class="spost clearfix">
                                                <div class="entry-image">
                                                    <a href="#" class="nobg"><img class="img-circle" src="images/icons/avatar.jpg" alt=""></a>
                                                </div>
                                                <div class="entry-c">
                                                    <strong>Mary Jane:</strong> Possimus libero, earum officia architecto maiores....
                                                </div>
                                            </div>

                                            <div class="spost clearfix">
                                                <div class="entry-image">
                                                    <a href="#" class="nobg"><img class="img-circle" src="images/icons/avatar.jpg" alt=""></a>
                                                </div>
                                                <div class="entry-c">
                                                    <strong>Site Admin:</strong> Deleniti magni labore laboriosam odio...
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="widget clearfix">

                            <h4>Portfolio Carousel</h4>
                            <div id="oc-portfolio-sidebar" class="owl-carousel carousel-widget" data-items="1" data-margin="10" data-loop="true" data-nav="false" data-autoplay="5000">

                                <div class="oc-item">
                                    <div class="iportfolio">
                                        <div class="portfolio-image">
                                            <a href="#">
                                                <img src="images/portfolio/4/3.jpg" alt="Mac Sunglasses">
                                            </a>
                                            <div class="portfolio-overlay">
                                                <a href="http://vimeo.com/89396394" class="center-icon" data-lightbox="iframe"><i class="icon-line-play"></i></a>
                                            </div>
                                        </div>
                                        <div class="portfolio-desc center nobottompadding">
                                            <h3><a href="portfolio-single-video.html">Mac Sunglasses</a></h3>
                                            <span><a href="#">Graphics</a>, <a href="#">UI Elements</a></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="oc-item">
                                    <div class="iportfolio">
                                        <div class="portfolio-image">
                                            <a href="portfolio-single.html">
                                                <img src="images/portfolio/4/1.jpg" alt="Open Imagination">
                                            </a>
                                            <div class="portfolio-overlay">
                                                <a href="images/blog/full/1.jpg" class="center-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
                                            </div>
                                        </div>
                                        <div class="portfolio-desc center nobottompadding">
                                            <h3><a href="portfolio-single.html">Open Imagination</a></h3>
                                            <span><a href="#">Media</a>, <a href="#">Icons</a></span>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="widget clearfix">

                            <h4>Tag Cloud</h4>
                            <div class="tagcloud">
                                <a href="#">general</a>
                                <a href="#">videos</a>
                                <a href="#">music</a>
                                <a href="#">media</a>
                                <a href="#">photography</a>
                                <a href="#">parallax</a>
                                <a href="#">ecommerce</a>
                                <a href="#">terms</a>
                                <a href="#">coupons</a>
                                <a href="#">modern</a>
                            </div>

                        </div>

                    </div>

                </div><!-- .sidebar end -->

            </div>

        </div>

    </section><!-- #content end -->

    <!-- Footer
    ============================================= -->
    <footer id="footer" class="dark">

        <div class="container">

            <!-- Footer Widgets
            ============================================= -->
            <div class="footer-widgets-wrap clearfix">

                <div class="col_two_third">

                    <div class="col_one_third">

                        <div class="widget clearfix">

                            <img src="images/footer-widget-logo.png" alt="" class="footer-logo">

                            <p>We believe in <strong>Simple</strong>, <strong>Creative</strong> &amp; <strong>Flexible</strong> Design Standards.</p>

                            <div style="background: url('images/world-map.png') no-repeat center center; background-size: 100%;">
                                <address>
                                    <strong>Headquarters:</strong><br>
                                    795 Folsom Ave, Suite 600<br>
                                    San Francisco, CA 94107<br>
                                </address>
                                <abbr title="Phone Number"><strong>Phone:</strong></abbr> (91) 8547 632521<br>
                                <abbr title="Fax"><strong>Fax:</strong></abbr> (91) 11 4752 1433<br>
                                <abbr title="Email Address"><strong>Email:</strong></abbr> info@canvas.com
                            </div>

                        </div>

                    </div>

                    <div class="col_one_third">

                        <div class="widget widget_links clearfix">

                            <h4>Blogroll</h4>

                            <ul>
                                <li><a href="http://codex.wordpress.org/">Documentation</a></li>
                                <li><a href="http://wordpress.org/support/forum/requests-and-feedback">Feedback</a></li>
                                <li><a href="http://wordpress.org/extend/plugins/">Plugins</a></li>
                                <li><a href="http://wordpress.org/support/">Support Forums</a></li>
                                <li><a href="http://wordpress.org/extend/themes/">Themes</a></li>
                                <li><a href="http://wordpress.org/news/">WordPress Blog</a></li>
                                <li><a href="http://planet.wordpress.org/">WordPress Planet</a></li>
                            </ul>

                        </div>

                    </div>

                    <div class="col_one_third col_last">

                        <div class="widget clearfix">
                            <h4>Recent Posts</h4>

                            <div id="post-list-footer">
                                <div class="spost clearfix">
                                    <div class="entry-c">
                                        <div class="entry-title">
                                            <h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>
                                        </div>
                                        <ul class="entry-meta">
                                            <li>10th July 2014</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="spost clearfix">
                                    <div class="entry-c">
                                        <div class="entry-title">
                                            <h4><a href="#">Elit Assumenda vel amet dolorum quasi</a></h4>
                                        </div>
                                        <ul class="entry-meta">
                                            <li>10th July 2014</li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="spost clearfix">
                                    <div class="entry-c">
                                        <div class="entry-title">
                                            <h4><a href="#">Debitis nihil placeat, illum est nisi</a></h4>
                                        </div>
                                        <ul class="entry-meta">
                                            <li>10th July 2014</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="col_one_third col_last">

                    <div class="widget clearfix" style="margin-bottom: -20px;">

                        <div class="row">

                            <div class="col-md-6 bottommargin-sm">
                                <div class="counter counter-small"><span data-from="50" data-to="15065421" data-refresh-interval="80" data-speed="3000" data-comma="true"></span></div>
                                <h5 class="nobottommargin">Total Downloads</h5>
                            </div>

                            <div class="col-md-6 bottommargin-sm">
                                <div class="counter counter-small"><span data-from="100" data-to="18465" data-refresh-interval="50" data-speed="2000" data-comma="true"></span></div>
                                <h5 class="nobottommargin">Clients</h5>
                            </div>

                        </div>

                    </div>

                    <div class="widget subscribe-widget clearfix">
                        <h5><strong>Subscribe</strong> to Our Newsletter to get Important News, Amazing Offers &amp; Inside Scoops:</h5>
                        <div class="widget-subscribe-form-result"></div>
                        <form id="widget-subscribe-form" action="include/subscribe.php" role="form" method="post" class="nobottommargin">
                            <div class="input-group divcenter">
                                <span class="input-group-addon"><i class="icon-email2"></i></span>
                                <input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email">
                                <span class="input-group-btn">
										<button class="btn btn-success" type="submit">Subscribe</button>
									</span>
                            </div>
                        </form>
                    </div>

                    <div class="widget clearfix" style="margin-bottom: -20px;">

                        <div class="row">

                            <div class="col-md-6 clearfix bottommargin-sm">
                                <a href="#" class="social-icon si-dark si-colored si-facebook nobottommargin" style="margin-right: 10px;">
                                    <i class="icon-facebook"></i>
                                    <i class="icon-facebook"></i>
                                </a>
                                <a href="#"><small style="display: block; margin-top: 3px;"><strong>Like us</strong><br>on Facebook</small></a>
                            </div>
                            <div class="col-md-6 clearfix">
                                <a href="#" class="social-icon si-dark si-colored si-rss nobottommargin" style="margin-right: 10px;">
                                    <i class="icon-rss"></i>
                                    <i class="icon-rss"></i>
                                </a>
                                <a href="#"><small style="display: block; margin-top: 3px;"><strong>Subscribe</strong><br>to RSS Feeds</small></a>
                            </div>

                        </div>

                    </div>

                </div>

            </div><!-- .footer-widgets-wrap end -->

        </div>

        <!-- Copyrights
        ============================================= -->
        <div id="copyrights">

            <div class="container clearfix">

                <div class="col_half">
                    Copyrights &copy; 2014 All Rights Reserved by Canvas Inc.<br>
                    <div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
                </div>

                <div class="col_half col_last tright">
                    <div class="fright clearfix">
                        <a href="#" class="social-icon si-small si-borderless si-facebook">
                            <i class="icon-facebook"></i>
                            <i class="icon-facebook"></i>
                        </a>

                        <a href="#" class="social-icon si-small si-borderless si-twitter">
                            <i class="icon-twitter"></i>
                            <i class="icon-twitter"></i>
                        </a>

                        <a href="#" class="social-icon si-small si-borderless si-gplus">
                            <i class="icon-gplus"></i>
                            <i class="icon-gplus"></i>
                        </a>

                        <a href="#" class="social-icon si-small si-borderless si-pinterest">
                            <i class="icon-pinterest"></i>
                            <i class="icon-pinterest"></i>
                        </a>

                        <a href="#" class="social-icon si-small si-borderless si-vimeo">
                            <i class="icon-vimeo"></i>
                            <i class="icon-vimeo"></i>
                        </a>

                        <a href="#" class="social-icon si-small si-borderless si-github">
                            <i class="icon-github"></i>
                            <i class="icon-github"></i>
                        </a>

                        <a href="#" class="social-icon si-small si-borderless si-yahoo">
                            <i class="icon-yahoo"></i>
                            <i class="icon-yahoo"></i>
                        </a>

                        <a href="#" class="social-icon si-small si-borderless si-linkedin">
                            <i class="icon-linkedin"></i>
                            <i class="icon-linkedin"></i>
                        </a>
                    </div>

                    <div class="clear"></div>

                    <i class="icon-envelope2"></i> info@canvas.com <span class="middot">&middot;</span> <i class="icon-headphones"></i> +91-11-6541-6369 <span class="middot">&middot;</span> <i class="icon-skype2"></i> CanvasOnSkype
                </div>

            </div>

        </div><!-- #copyrights end -->

    </footer><!-- #footer end -->

</div><!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>

<!-- External JavaScripts
============================================= -->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/plugins.js"></script>

<!-- Footer Scripts
============================================= -->
<script type="text/javascript" src="js/functions.js"></script>

</body>
</html>