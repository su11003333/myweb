@extends('layouts.post_maintemplate')


@section('content')

    <div class="single-post nobottommargin">

        <!-- Single Post
        ============================================= -->
        <div class="entry clearfix">

            <!-- Entry Title
            ============================================= -->
            <div class="entry-title">
                <h2>This is a Standard post with a Preview Image</h2>
            </div><!-- .entry-title end -->

            <!-- Entry Meta
            ============================================= -->
            <ul class="entry-meta clearfix">
                <li><i class="icon-calendar3"></i> 10th July 2014</li>
                <li><a href="#"><i class="icon-user"></i> admin</a></li>
                <li><i class="icon-folder-open"></i> <a href="#">General</a>, <a href="#">Media</a></li>
                <li><a href="#"><i class="icon-comments"></i> 43 Comments</a></li>
                <li><a href="#"><i class="icon-camera-retro"></i></a></li>
            </ul><!-- .entry-meta end -->

            <!-- Entry Image
            ============================================= -->
            <div class="entry-image">
                <a href="#"><img src="{{asset('./images/blog/full/1.jpg')}}" alt="Blog Single"></a>
            </div><!-- .entry-image end -->

            <!-- Entry Content
            ============================================= -->
            <div class="entry-content notopmargin">

                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>

                <p>Nullam id dolor id nibh ultricies vehicula ut id elit. <a href="#">Curabitur blandit tempus porttitor</a>. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Donec id elit non mi porta gravida at eget metus. Vestibulum id ligula porta felis euismod semper.</p>

                <blockquote><p>Vestibulum id ligula porta felis euismod semper. Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper.</p></blockquote>

                <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cras mattis consectetur purus sit amet fermentum. Donec id elit non mi porta gravida at eget metus.</p>

                <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam. <a href="#">Nullam quis risus eget urna</a> mollis ornare vel eu leo. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>

                <pre>
#header-inner {
	width: 940px;
	margin: 0 auto;
	padding-top: 40px;
}</pre>

                <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>

                <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Curabitur blandit tempus porttitor. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Donec id elit non mi porta gravida at eget metus. Vestibulum id ligula porta felis euismod semper.</p>
                <!-- Post Single - Content End -->

                <!-- Tag Cloud
                ============================================= -->
                <div class="tagcloud clearfix bottommargin">
                    <a href="#">general</a>
                    <a href="#">information</a>
                    <a href="#">media</a>
                    <a href="#">press</a>
                    <a href="#">gallery</a>
                    <a href="#">illustration</a>
                </div><!-- .tagcloud end -->

                <div class="clear"></div>

                <!-- Post Single - Share
                ============================================= -->
                <div class="si-share noborder clearfix">
                    <span>Share this Post:</span>
                    <div>
                        <a href="#" class="social-icon si-borderless si-facebook">
                            <i class="icon-facebook"></i>
                            <i class="icon-facebook"></i>
                        </a>
                        <a href="#" class="social-icon si-borderless si-twitter">
                            <i class="icon-twitter"></i>
                            <i class="icon-twitter"></i>
                        </a>
                        <a href="#" class="social-icon si-borderless si-pinterest">
                            <i class="icon-pinterest"></i>
                            <i class="icon-pinterest"></i>
                        </a>
                        <a href="#" class="social-icon si-borderless si-gplus">
                            <i class="icon-gplus"></i>
                            <i class="icon-gplus"></i>
                        </a>
                        <a href="#" class="social-icon si-borderless si-rss">
                            <i class="icon-rss"></i>
                            <i class="icon-rss"></i>
                        </a>
                        <a href="#" class="social-icon si-borderless si-email3">
                            <i class="icon-email3"></i>
                            <i class="icon-email3"></i>
                        </a>
                    </div>
                </div><!-- Post Single - Share End -->

            </div>
        </div><!-- .entry end -->

        <!-- Post Navigation
        ============================================= -->
        <div class="post-navigation clearfix">

            <div class="col_half nobottommargin">
                <a href="#">&lArr; This is a Standard post with a Slider Gallery</a>
            </div>

            <div class="col_half col_last tright nobottommargin">
                <a href="#">This is an Embedded Audio Post &rArr;</a>
            </div>

        </div><!-- .post-navigation end -->

        <div class="line"></div>

        <!-- Post Author Info
        ============================================= -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Posted by <span><a href="#">John Doe</a></span></h3>
            </div>
            <div class="panel-body">
                <div class="author-image">
                    <img src="{{asset('./images/author/1.jpg')}}" alt="" class="img-circle">
                </div>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, eveniet, eligendi et nobis neque minus mollitia sit repudiandae ad repellendus recusandae blanditiis praesentium vitae ab sint earum voluptate velit beatae alias fugit accusantium laboriosam nisi reiciendis deleniti tenetur molestiae maxime id quaerat consequatur fugiat aliquam laborum nam aliquid. Consectetur, perferendis?
            </div>
        </div><!-- Post Single - Author End -->

        <div class="line"></div>

        <h4>Related Posts:</h4>

        <div class="related-posts clearfix">

            <div class="col_half nobottommargin">

                <div class="mpost clearfix">
                    <div class="entry-image">
                        <a href="#"><img src="{{asset('./images/blog/small/10.jpg')}}" alt="Blog Single"></a>
                    </div>
                    <div class="entry-c">
                        <div class="entry-title">
                            <h4><a href="#">This is an Image Post</a></h4>
                        </div>
                        <ul class="entry-meta clearfix">
                            <li><i class="icon-calendar3"></i> 10th July 2014</li>
                            <li><a href="#"><i class="icon-comments"></i> 12</a></li>
                        </ul>
                        <div class="entry-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia nisi perferendis.</div>
                    </div>
                </div>

                <div class="mpost clearfix">
                    <div class="entry-image">
                        <a href="#"><img src="{{asset('./images/blog/small/20.jpg')}}" alt="Blog Single"></a>
                    </div>
                    <div class="entry-c">
                        <div class="entry-title">
                            <h4><a href="#">This is a Video Post</a></h4>
                        </div>
                        <ul class="entry-meta clearfix">
                            <li><i class="icon-calendar3"></i> 24th July 2014</li>
                            <li><a href="#"><i class="icon-comments"></i> 16</a></li>
                        </ul>
                        <div class="entry-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia nisi perferendis.</div>
                    </div>
                </div>

            </div>

            <div class="col_half nobottommargin col_last">

                <div class="mpost clearfix">
                    <div class="entry-image">
                        <a href="#"><img src="{{asset('./images/blog/small/21.jpg')}}" alt="Blog Single"></a>
                    </div>
                    <div class="entry-c">
                        <div class="entry-title">
                            <h4><a href="#">This is a Gallery Post</a></h4>
                        </div>
                        <ul class="entry-meta clearfix">
                            <li><i class="icon-calendar3"></i> 8th Aug 2014</li>
                            <li><a href="#"><i class="icon-comments"></i> 8</a></li>
                        </ul>
                        <div class="entry-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia nisi perferendis.</div>
                    </div>
                </div>

                <div class="mpost clearfix">
                    <div class="entry-image">
                        <a href="#"><img src="{{asset('./images/blog/small/22.jpg')}}" alt="Blog Single"></a>
                    </div>
                    <div class="entry-c">
                        <div class="entry-title">
                            <h4><a href="#">This is an Audio Post</a></h4>
                        </div>
                        <ul class="entry-meta clearfix">
                            <li><i class="icon-calendar3"></i> 22nd Aug 2014</li>
                            <li><a href="#"><i class="icon-comments"></i> 21</a></li>
                        </ul>
                        <div class="entry-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia nisi perferendis.</div>
                    </div>
                </div>

            </div>

        </div>

        <!-- Comments
        ============================================= -->
        <div id="comments" class="clearfix">

            <h3 id="comments-title"><span><fb:comments-count href="http://themes.semicolonweb.com/html/coworker/blog-single-split.php"></fb:comments-count></span> Comments</h3>

            <!-- Facebook Comments
            ============================================= -->
            <div class="fb-comments" data-width="100%" data-href="http://themes.semicolonweb.com/html/coworker/blog-single-split.php" data-numposts="5" data-colorscheme="light"></div>
            <!-- Facebook Comments end -->

        </div><!-- #comments end -->

    </div>

@stop