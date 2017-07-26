<!DOCTYPE html>
<html dir="ltr" lang="{{ app()->getLocale() }}">
    @extends('layouts.head')

<body class="stretched">

<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">



    <!-- Header
    ============================================= -->
    <header id="header" class="full-header transparent-header dark" data-sticky-class="not-dark">

        <div id="header-wrap">

            <div class="container clearfix">

                <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

                <!-- Logo
                ============================================= -->
                <div id="logo">
                    <a href="index.html" class="standard-logo" data-dark-logo="images/logo-dark.png"><img src="images/logo.png" alt="Canvas Logo"></a>
                    <a href="index.html" class="retina-logo" data-dark-logo="images/logo-dark@2x.png"><img src="images/logo@2x.png" alt="Canvas Logo"></a>
                </div><!-- #logo end -->

                <!-- Primary Navigation
                ============================================= -->
                <nav id="primary-menu">

                    <ul>
                        <li><a href="{{url('/')}}"><div>Home</div></a>
                            {{--<ul>--}}
                            {{--<li><a href="index-corporate.html"><div>Home - Corporate</div></a>--}}
                            {{--<ul>--}}
                            {{--<li><a href="index-corporate.html"><div>Corporate - Layout 1</div></a></li>--}}
                            {{--<li><a href="index-corporate-2.html"><div>Corporate - Layout 2</div></a></li>--}}
                            {{--<li><a href="index-corporate-3.html"><div>Corporate - Layout 3</div></a></li>--}}
                            {{--<li><a href="index-corporate-4.html"><div>Corporate - Layout 4</div></a></li>--}}
                            {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li><a href="index-portfolio.html"><div>Home - Portfolio</div></a>--}}
                            {{--<ul>--}}
                            {{--<li><a href="index-portfolio.html"><div>Portfolio - Layout 1</div></a></li>--}}
                            {{--<li><a href="index-portfolio-2.html"><div>Portfolio - Layout 2</div></a></li>--}}
                            {{--<li><a href="index-portfolio-3.html"><div>Portfolio - Masonry</div></a></li>--}}
                            {{--<li><a href="index-portfolio-4.html"><div>Portfolio - AJAX</div></a></li>--}}
                            {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li><a href="index-blog.html"><div>Home - Blog</div></a>--}}
                            {{--<ul>--}}
                            {{--<li><a href="index-blog.html"><div>Blog - Layout 1</div></a></li>--}}
                            {{--<li><a href="index-blog-2.html"><div>Blog - Layout 2</div></a></li>--}}
                            {{--<li><a href="index-blog-3.html"><div>Blog - Layout 3</div></a></li>--}}
                            {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li><a href="index-shop.html"><div>Home - Shop</div></a>--}}
                            {{--<ul>--}}
                            {{--<li><a href="index-shop.html"><div>Shop - Layout 1</div></a></li>--}}
                            {{--<li><a href="index-shop-2.html"><div>Shop - Layout 2</div></a></li>--}}
                            {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li><a href="index-magazine.html"><div>Home - Magazine</div></a>--}}
                            {{--<ul>--}}
                            {{--<li><a href="index-magazine.html"><div>Magazine - Layout 1</div></a></li>--}}
                            {{--<li><a href="index-magazine-2.html"><div>Magazine - Layout 2</div></a></li>--}}
                            {{--<li><a href="index-magazine-3.html"><div>Magazine - Layout 3</div></a></li>--}}
                            {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li><a href="landing.html"><div>Home - Landing Page</div></a>--}}
                            {{--<ul>--}}
                            {{--<li><a href="landing.html"><div>Landing Page - Layout 1</div></a></li>--}}
                            {{--<li><a href="landing-2.html"><div>Landing Page - Layout 2</div></a></li>--}}
                            {{--<li><a href="landing-3.html"><div>Landing Page - Layout 3</div></a></li>--}}
                            {{--<li><a href="landing-4.html"><div>Landing Page - Layout 4</div></a></li>--}}
                            {{--<li><a href="landing-5.html"><div>Landing Page - Layout 5</div></a></li>--}}
                            {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li><a href="index-fullscreen-image.html"><div>Home - Full Screen</div></a>--}}
                            {{--<ul>--}}
                            {{--<li><a href="index-fullscreen-image.html"><div>Full Screen - Image</div></a></li>--}}
                            {{--<li><a href="index-fullscreen-slider.html"><div>Full Screen - Slider</div></a></li>--}}
                            {{--<li><a href="index-fullscreen-video.html"><div>Full Screen - Video</div></a></li>--}}
                            {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li><a href="index-onepage.html"><div>Home - One Page</div></a>--}}
                            {{--<ul>--}}
                            {{--<li><a href="index-onepage.html"><div>One Page - Default</div></a></li>--}}
                            {{--<li><a href="index-onepage-2.html"><div>One Page - Submenu</div></a></li>--}}
                            {{--<li><a href="index-onepage-3.html"><div>One Page - Dots Style</div></a></li>--}}
                            {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li><a href="index-wedding.html"><div>Home - Wedding</div></a></li>--}}
                            {{--<li><a href="index-restaurant.html"><div>Home - Restaurant</div></a></li>--}}
                            {{--<li><a href="index-events.html"><div>Home - Events</div></a></li>--}}
                            {{--<li><a href="index-parallax.html"><div>Home - Parallax</div></a></li>--}}
                            {{--<li><a href="index-app-showcase.html"><div>Home - App Showcase</div></a></li>--}}
                            {{--</ul>--}}
                        </li>
                        <li class="current"><a href="{{url('/home')}}"><div>SignIn</div></a>
                            {{--<ul>--}}
                                {{--<li><a href="#"><div><i class="icon-stack"></i>Sliders</div></a>--}}
                                    {{--<ul>--}}
                                        {{--<li><a href="slider-revolution.html"><div>Revolution Slider</div></a>--}}
                                            {{--<ul>--}}
                                                {{--<li><a href="rs-demo-premium-concept.html"><div>Premium Templates</div></a></li>--}}
                                                {{--<li><a href="slider-revolution.html"><div>Full Screen</div></a></li>--}}
                                                {{--<li><a href="slider-revolution-fullwidth.html"><div>Full Width</div></a></li>--}}
                                                {{--<li><a href="slider-revolution-kenburns.html"><div>Kenburns Effect</div></a></li>--}}
                                                {{--<li><a href="slider-revolution-html5-videos.html"><div>HTML5 Video</div></a></li>--}}
                                            {{--</ul>--}}
                                        {{--</li>--}}
                                        {{--<li><a href="slider-canvas.html"><div>Canvas Slider</div></a>--}}
                                            {{--<ul>--}}
                                                {{--<li><a href="slider-canvas.html"><div>Full Width</div></a></li>--}}
                                                {{--<li><a href="slider-canvas-fade.html"><div>Fade Transition</div></a></li>--}}
                                                {{--<li><a href="slider-canvas-autoplay.html"><div>Autoplay Feature</div></a></li>--}}
                                                {{--<li><a href="slider-canvas-video-event.html"><div>Custom Video Event</div></a></li>--}}
                                                {{--<li><a href="slider-canvas-pagination.html"><div>Pagination Navigation</div></a></li>--}}
                                                {{--<li><a href="slider-canvas-3.html"><div>3 Columns</div></a></li>--}}
                                                {{--<li><a href="slider-canvas-4.html"><div>4 Columns</div></a></li>--}}
                                                {{--<li><a href="slider-canvas-5.html"><div>5 Columns</div></a></li>--}}
                                            {{--</ul>--}}
                                        {{--</li>--}}
                                        {{--<li><a href="slider-flex.html"><div>Flex Slider</div></a>--}}
                                            {{--<ul>--}}
                                                {{--<li><a href="slider-flex.html"><div>Default Layout</div></a></li>--}}
                                                {{--<li><a href="slider-flex-thumbs.html"><div>with Thumbs</div></a></li>--}}
                                            {{--</ul>--}}
                                        {{--</li>--}}
                                        {{--<li><a href="slider-owl.html"><div>Owl Slider</div></a>--}}
                                            {{--<ul>--}}
                                                {{--<li><a href="slider-owl-full.html"><div>Full Width</div></a></li>--}}
                                                {{--<li><a href="slider-owl.html"><div>Boxed Width</div></a></li>--}}
                                                {{--<li><a href="slider-owl-videos.html"><div>Video Slider</div></a></li>--}}
                                            {{--</ul>--}}
                                        {{--</li>--}}
                                        {{--<li><a href="static-parallax.html"><div>Static Media</div></a>--}}
                                            {{--<ul>--}}
                                                {{--<li><a href="static-parallax.html"><div>Static - Parallax</div></a></li>--}}
                                                {{--<li><a href="static-image.html"><div>Static - Image</div></a></li>--}}
                                                {{--<li><a href="static-thumbs-grid.html"><div>Static - Thumb Gallery</div></a></li>--}}
                                                {{--<li><a href="static-html5-video.html"><div>Static - HTML5 Video</div></a></li>--}}
                                                {{--<li><a href="static-embed-video.html"><div>Static - Embedded Video</div></a></li>--}}
                                            {{--</ul>--}}
                                        {{--</li>--}}
                                        {{--<li><a href="slider-camera.html"><div>Camera Slider</div></a></li>--}}
                                        {{--<li><a href="slider-elastic.html"><div>Elastic Slider</div></a></li>--}}
                                        {{--<li><a href="slider-nivo.html"><div>Nivo Slider</div></a></li>--}}
                                    {{--</ul>--}}
                                {{--</li>--}}
                                {{--<li><a href="widgets.html"><div><i class="icon-gift"></i>Widgets</div></a>--}}
                                    {{--<ul>--}}
                                        {{--<li><a href="widgets.html"><div>Links</div></a></li>--}}
                                        {{--<li><a href="widgets.html"><div>Flickr Photostream</div></a></li>--}}
                                        {{--<li><a href="widgets.html"><div>Dribbble Shots</div></a></li>--}}
                                        {{--<li><a href="widgets.html"><div>Instagram Feed</div></a></li>--}}
                                        {{--<li><a href="widgets.html"><div>Posts List</div></a></li>--}}
                                        {{--<li><a href="widgets.html"><div>Twitter Feed</div></a></li>--}}
                                        {{--<li><a href="widgets.html"><div>Tabbed Widgets</div></a></li>--}}
                                        {{--<li><a href="widgets.html"><div>Carousel</div></a></li>--}}
                                        {{--<li><a href="widgets.html"><div>Subscribers</div></a></li>--}}
                                        {{--<li><a href="widgets.html"><div>Social Icons</div></a></li>--}}
                                        {{--<li><a href="widgets.html"><div>Testimonials</div></a></li>--}}
                                        {{--<li><a href="widgets.html"><div>Quick Contact</div></a></li>--}}
                                        {{--<li><a href="widgets.html"><div>Tags Cloud</div></a></li>--}}
                                        {{--<li><a href="widgets.html"><div>Video Embeds</div></a></li>--}}
                                        {{--<li><a href="widgets.html"><div>Raw Text/HTML</div></a></li>--}}
                                    {{--</ul>--}}
                                {{--</li>--}}
                                {{--<li><a href="#"><div><i class="icon-umbrella"></i>Headers</div></a>--}}
                                    {{--<ul>--}}
                                        {{--<li><a href="header-light.html"><div>Light Version</div></a></li>--}}
                                        {{--<li><a href="header-dark.html"><div>Dark Version</div></a></li>--}}
                                        {{--<li><a href="header-transparent.html"><div>Transparent</div></a></li>--}}
                                        {{--<li><a href="header-semi-transparent.html"><div>Semi Transparent</div></a>--}}
                                            {{--<ul>--}}
                                                {{--<li><a href="header-semi-transparent.html"><div>Light Version</div></a></li>--}}
                                                {{--<li><a href="header-semi-transparent-dark.html"><div>Dark Version</div></a></li>--}}
                                            {{--</ul>--}}
                                        {{--</li>--}}
                                        {{--<li><a href="header-side-left.html"><div>Left Side Header</div></a>--}}
                                            {{--<ul>--}}
                                                {{--<li><a href="header-side-left.html"><div>Fixed Position</div></a></li>--}}
                                                {{--<li><a href="header-side-left-open.html"><div>OnClick Open</div></a></li>--}}
                                                {{--<li><a href="header-side-left-open-push.html"><div>Push Content</div></a></li>--}}
                                            {{--</ul>--}}
                                        {{--</li>--}}
                                        {{--<li><a href="header-side-right.html"><div>Right Side Header</div></a>--}}
                                            {{--<ul>--}}
                                                {{--<li><a href="header-side-right.html"><div>Fixed Position</div></a></li>--}}
                                                {{--<li><a href="header-side-right-open.html"><div>OnClick Open</div></a></li>--}}
                                                {{--<li><a href="header-side-right-open-push.html"><div>Push Content</div></a></li>--}}
                                            {{--</ul>--}}
                                        {{--</li>--}}
                                        {{--<li><a href="header-floating.html"><div>Floating Version</div></a></li>--}}
                                        {{--<li><a href="static-sticky.html"><div>Static Sticky</div></a></li>--}}
                                        {{--<li><a href="responsive-sticky.html"><div>Responsive Sticky</div></a></li>--}}
                                        {{--<li><a href="logo-changer.html"><div>Alternate Logos</div></a></li>--}}
                                        {{--<li><a href="alternate-mobile-menu.html"><div>Alternate Mobile Menu</div></a></li>--}}
                                    {{--</ul>--}}
                                {{--</li>--}}
                                {{--<li><a href="side-panel.html"><div><i class="icon-line-layout"></i>Side Panel</div></a>--}}
                                    {{--<ul>--}}
                                        {{--<li><a href="side-panel-left-overlay.html"><div>Left Overlay</div></a></li>--}}
                                        {{--<li><a href="side-panel-left-push.html"><div>Left Push</div></a></li>--}}
                                        {{--<li><a href="side-panel-right-overlay.html"><div>Right Overlay</div></a></li>--}}
                                        {{--<li><a href="side-panel.html"><div>Right Push</div></a></li>--}}
                                        {{--<li><a href="side-panel-light.html"><div>Light Background</div></a></li>--}}
                                    {{--</ul>--}}
                                {{--</li>--}}
                                {{--<li><a href="#"><div><i class="icon-align-justify2"></i>Menu Styles</div></a>--}}
                                    {{--<ul>--}}
                                        {{--<li><a href="header-light.html"><div>Menu - Style 1</div></a></li>--}}
                                        {{--<li><a href="menu-2.html"><div>Menu - Style 2</div></a></li>--}}
                                        {{--<li><a href="menu-3.html"><div>Menu - Style 3</div></a></li>--}}
                                        {{--<li><a href="menu-4.html"><div>Menu - Style 4</div></a></li>--}}
                                        {{--<li><a href="menu-5.html"><div>Menu - Style 5</div></a></li>--}}
                                        {{--<li><a href="menu-6.html"><div>Menu - Style 6</div></a></li>--}}
                                        {{--<li><a href="menu-7.html"><div>Menu - Style 7</div></a></li>--}}
                                        {{--<li><a href="menu-8.html"><div>Menu - Style 8</div></a></li>--}}
                                        {{--<li><a href="menu-9.html"><div>Menu - Style 9</div></a></li>--}}
                                        {{--<li><a href="menu-10.html"><div>Menu - Overlay</div></a></li>--}}
                                    {{--</ul>--}}
                                {{--</li>--}}
                                {{--<li><a href="#"><div><i class="icon-ok-sign"></i>Page Titles</div></a>--}}
                                    {{--<ul>--}}
                                        {{--<li><a href="page.html"><div>Left Align</div></a></li>--}}
                                        {{--<li><a href="page-title-right.html"><div>Right Align</div></a></li>--}}
                                        {{--<li><a href="page-title-center.html"><div>Center Align</div></a></li>--}}
                                        {{--<li><a href="page-titledark.html"><div>Dark Style</div></a></li>--}}
                                        {{--<li><a href="page-title-pattern.html"><div>Pattern Background</div></a></li>--}}
                                        {{--<li><a href="page-title-parallax.html"><div>Parallax Background</div></a>--}}
                                            {{--<ul>--}}
                                                {{--<li><a href="page-title-parallax.html"><div>Default Header</div></a></li>--}}
                                                {{--<li><a href="page-title-parallax-header.html"><div>Transparent Header</div></a></li>--}}
                                            {{--</ul>--}}
                                        {{--</li>--}}
                                        {{--<li><a href="page-title-video.html"><div>HTML5 Video</div></a></li>--}}
                                        {{--<li><a href="page-title-nobg.html"><div>No Background</div></a></li>--}}
                                        {{--<li><a href="page-title-mini.html"><div>Mini Version</div></a></li>--}}
                                    {{--</ul>--}}
                                {{--</li>--}}
                                {{--<li><a href="contact.html"><div><i class="icon-envelope-alt"></i>Contact Pages</div></a>--}}
                                    {{--<ul>--}}
                                        {{--<li><a href="contact.html">Contact 1</a></li>--}}
                                        {{--<li><a href="contact-2.html">Contact 2</a></li>--}}
                                        {{--<li><a href="contact-3.html">Contact 3</a></li>--}}
                                        {{--<li><a href="contact-4.html">Contact 4</a></li>--}}
                                        {{--<li><a href="contact-5.html">Contact 5</a></li>--}}
                                        {{--<li><a href="contact-6.html">Contact 6</a></li>--}}
                                        {{--<li><a href="contact-7.html">Contact 7</a></li>--}}
                                    {{--</ul>--}}
                                {{--</li>--}}
                                {{--<li><a href="#footer" data-scrollto="#footer"><div><i class="icon-th"></i>Footers</div></a>--}}
                                    {{--<ul>--}}
                                        {{--<li><a href="sticky-footer.html"><div>Sticky Footer</div></a></li>--}}
                                        {{--<li><a href="#footer" data-scrollto="#footer"><div>Footer - Layout 1</div></a></li>--}}
                                        {{--<li><a href="footer-2.html#footer"><div>Footer - Layout 2</div></a></li>--}}
                                        {{--<li><a href="footer-3.html#footer"><div>Footer - Layout 3</div></a></li>--}}
                                        {{--<li><a href="footer-4.html#footer"><div>Footer - Layout 4</div></a></li>--}}
                                        {{--<li><a href="footer-5.html#footer"><div>Footer - Layout 5</div></a></li>--}}
                                        {{--<li><a href="footer-6.html#footer"><div>Footer - Layout 6</div></a></li>--}}
                                        {{--<li><a href="footer-7.html#footer"><div>Footer - Layout 7</div></a></li>--}}
                                    {{--</ul>--}}
                                {{--</li>--}}
                                {{--<li><a href="#"><div><i class="icon-calendar3"></i>Events</div></a>--}}
                                    {{--<ul>--}}
                                        {{--<li><a href="events-calendar.html"><div>Full Width Calendar</div></a></li>--}}
                                        {{--<li><a href="events-list.html"><div>Events List</div></a>--}}
                                            {{--<ul>--}}
                                                {{--<li><a href="events-list.html"><div>Right Sidebar</div></a></li>--}}
                                                {{--<li><a href="events-list-left-sidebar.html"><div>Left Sidebar</div></a></li>--}}
                                                {{--<li><a href="events-list-both-sidebar.html"><div>Both Sidebar</div></a></li>--}}
                                                {{--<li><a href="events-list-fullwidth.html"><div>Full Width</div></a></li>--}}
                                                {{--<li><a href="events-list-parallax.html"><div>Parallax List</div></a></li>--}}
                                            {{--</ul>--}}
                                        {{--</li>--}}
                                        {{--<li><a href="event-single.html"><div>Single Event</div></a>--}}
                                            {{--<ul>--}}
                                                {{--<li><a href="event-single-right-sidebar.html"><div>Right Sidebar</div></a></li>--}}
                                                {{--<li><a href="event-single-left-sidebar.html"><div>Left Sidebar</div></a></li>--}}
                                                {{--<li><a href="event-single-both-sidebar.html"><div>Both Sidebar</div></a></li>--}}
                                                {{--<li><a href="event-single.html"><div>Full Width</div></a></li>--}}
                                            {{--</ul>--}}
                                        {{--</li>--}}
                                        {{--<li><a href="event-single-full-width-image.html"><div>Single Event - Full</div></a>--}}
                                            {{--<ul>--}}
                                                {{--<li><a href="event-single-full-width-image.html"><div>Parallax Image</div></a></li>--}}
                                                {{--<li><a href="event-single-full-width-map.html"><div>Google Map</div></a></li>--}}
                                                {{--<li><a href="event-single-full-width-slider.html"><div>Slider Gallery</div></a></li>--}}
                                                {{--<li><a href="event-single-full-width-video.html"><div>HTML5 Video</div></a></li>--}}
                                            {{--</ul>--}}
                                        {{--</li>--}}
                                    {{--</ul>--}}
                                {{--</li>--}}
                                {{--<li><a href="modal-onload.html"><div><i class="icon-line-expand"></i>Modal OnLoad</div></a>--}}
                                    {{--<ul>--}}
                                        {{--<li><a href="modal-onload.html"><div>Simple Layout</div></a></li>--}}
                                        {{--<li><a href="modal-onload-iframe.html"><div>Video iFrame</div></a></li>--}}
                                        {{--<li><a href="modal-onload-subscribe.html"><div>Subscription Form</div></a></li>--}}
                                        {{--<li><a href="modal-onload-common-height.html"><div>Common Height</div></a></li>--}}
                                        {{--<li><a href="modal-onload-cookie.html"><div>Cookies Enabled</div></a></li>--}}
                                    {{--</ul>--}}
                                {{--</li>--}}
                                {{--<li><a href="coming-soon.html"><div><i class="icon-time"></i>Coming Soon</div></a>--}}
                                    {{--<ul>--}}
                                        {{--<li><a href="coming-soon.html"><div>Simple Layout</div></a></li>--}}
                                        {{--<li><a href="coming-soon-2.html"><div>Parallax Image</div></a></li>--}}
                                        {{--<li><a href="coming-soon-3.html"><div>HTML5 Video</div></a></li>--}}
                                    {{--</ul>--}}
                                {{--</li>--}}
                                {{--<li><a href="#"><div><i class="icon-adjust"></i>Dark Version</div></a></li>--}}
                            {{--</ul>--}}
                        </li>
                        {{--<li class="mega-menu"><a href="#"><div>Pages</div></a>--}}
                            {{--<div class="mega-menu-content style-2 clearfix">--}}
                                {{--<ul class="mega-menu-column col-md-3">--}}
                                    {{--<li class="mega-menu-title"><a href="#"><div>Introduction</div></a>--}}
                                        {{--<ul>--}}
                                            {{--<li><a href="about.html"><div>About Us</div></a></li>--}}
                                            {{--<li><a href="about-2.html"><div>About Us - Layout 2</div></a></li>--}}
                                            {{--<li><a href="about-me.html"><div>About Me</div></a></li>--}}
                                            {{--<li><a href="team.html"><div>Team Members</div></a></li>--}}
                                            {{--<li><a href="jobs.html"><div>Careers</div></a></li>--}}
                                            {{--<li><a href="side-navigation.html"><div>Side Navigation</div></a></li>--}}
                                            {{--<li><a href="page-submenu.html"><div>Page Submenu</div></a></li>--}}
                                            {{--<li><a href="sitemap.html"><div>Sitemap</div></a></li>--}}
                                        {{--</ul>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                                {{--<ul class="mega-menu-column col-md-3">--}}
                                    {{--<li class="mega-menu-title"><a href="#"><div>Utility</div></a>--}}
                                        {{--<ul>--}}
                                            {{--<li><a href="services.html"><div>Services - Layout 1</div></a></li>--}}
                                            {{--<li><a href="services-2.html"><div>Services - Layout 2</div></a></li>--}}
                                            {{--<li><a href="services-3.html"><div>Services - Layout 3</div></a></li>--}}
                                            {{--<li><a href="faqs.html"><div>FAQs - Layout 1</div></a></li>--}}
                                            {{--<li><a href="faqs-2.html"><div>FAQs - Layout 2</div></a></li>--}}
                                            {{--<li><a href="faqs-3.html"><div>FAQs - Layout 3</div></a></li>--}}
                                            {{--<li><a href="faqs-4.html"><div>FAQs - Layout 4</div></a></li>--}}
                                            {{--<li><a href="maintenance.html"><div>Maintenance Page</div></a></li>--}}
                                        {{--</ul>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                                {{--<ul class="mega-menu-column col-md-3">--}}
                                    {{--<li class="mega-menu-title"><a href="#"><div>Layout Grids</div></a>--}}
                                        {{--<ul>--}}
                                            {{--<li><a href="full-width.html"><div>Full Width</div></a></li>--}}
                                            {{--<li><a href="full-width-wide.html"><div>Full Width - Wide</div></a></li>--}}
                                            {{--<li><a href="right-sidebar.html"><div>Right Sidebar</div></a></li>--}}
                                            {{--<li><a href="left-sidebar.html"><div>Left Sidebar</div></a></li>--}}
                                            {{--<li><a href="both-sidebar.html"><div>Both Sidebar</div></a></li>--}}
                                            {{--<li><a href="both-right-sidebar.html"><div>Both Right Sidebar</div></a></li>--}}
                                            {{--<li><a href="both-left-sidebar.html"><div>Both Left Sidebar</div></a></li>--}}
                                            {{--<li><a href="blank-page.html"><div>Blank Page</div></a></li>--}}
                                        {{--</ul>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                                {{--<ul class="mega-menu-column col-md-3">--}}
                                    {{--<li class="mega-menu-title"><a href="#"><div>Miscellaneous</div></a>--}}
                                        {{--<ul>--}}
                                            {{--<li><a href="login-register.html"><div>Login/Register</div></a></li>--}}
                                            {{--<li><a href="login-register-2.html"><div>Login/Register - Style 2</div></a></li>--}}
                                            {{--<li><a href="login-register-3.html"><div>Login/Register - Style 3</div></a></li>--}}
                                            {{--<li><a href="login-1.html"><div>Login - Style 1</div></a></li>--}}
                                            {{--<li><a href="login-2.html"><div>Login - Style 2</div></a></li>--}}
                                            {{--<li><a href="404.html"><div>404 - Simple Layout</div></a></li>--}}
                                            {{--<li><a href="404-2.html"><div>404 - Parallax Image</div></a></li>--}}
                                            {{--<li><a href="404-3.html"><div>404 - HTML5 Video</div></a></li>--}}
                                        {{--</ul>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</li>--}}
                        {{--<li class="mega-menu"><a href="#"><div>Portfolio</div></a>--}}
                            {{--<div class="mega-menu-content style-2 clearfix">--}}
                                {{--<ul class="mega-menu-column col-5">--}}
                                    {{--<li class="mega-menu-title"><a href="#"><div>Grids</div></a>--}}
                                        {{--<ul>--}}
                                            {{--<li><a href="portfolio-1.html"><div>1 Column</div></a></li>--}}
                                            {{--<li><a href="portfolio-2.html"><div>2 Columns</div></a></li>--}}
                                            {{--<li><a href="portfolio-3.html"><div>3 Columns</div></a></li>--}}
                                            {{--<li><a href="portfolio.html"><div>4 Columns</div></a></li>--}}
                                            {{--<li><a href="portfolio-5.html"><div>5 Columns</div></a></li>--}}
                                            {{--<li><a href="portfolio-6.html"><div>6 Columns</div></a></li>--}}
                                        {{--</ul>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                                {{--<ul class="mega-menu-column col-5">--}}
                                    {{--<li class="mega-menu-title"><a href="#"><div>Masonry</div></a>--}}
                                        {{--<ul>--}}
                                            {{--<li><a href="portfolio-mixed-masonry.html"><div>Mixed Columns</div></a></li>--}}
                                            {{--<li><a href="portfolio-2-masonry.html"><div>2 Columns</div></a></li>--}}
                                            {{--<li><a href="portfolio-3-masonry.html"><div>3 Columns</div></a></li>--}}
                                            {{--<li><a href="portfolio-masonry.html"><div>4 Columns</div></a></li>--}}
                                            {{--<li><a href="portfolio-5-masonry.html"><div>5 Columns</div></a></li>--}}
                                            {{--<li><a href="portfolio-6-masonry.html"><div>6 Columns</div></a></li>--}}
                                        {{--</ul>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                                {{--<ul class="mega-menu-column col-5">--}}
                                    {{--<li class="mega-menu-title"><a href="#"><div>Loading Styles</div></a>--}}
                                        {{--<ul>--}}
                                            {{--<li><a href="portfolio.html"><div>jQuery Filter</div></a></li>--}}
                                            {{--<li><a href="portfolio-pagination.html"><div>Pagination</div></a></li>--}}
                                            {{--<li><a href="portfolio-jpagination.html"><div>jQuery Pagination</div></a></li>--}}
                                            {{--<li><a href="portfolio-infinity-scroll.html"><div>Infinity Scroll</div></a></li>--}}
                                            {{--<li><a href="portfolio-ajax.html"><div>AJAX In Page</div></a></li>--}}
                                            {{--<li><a href="portfolio-ajax-in-modal.html"><div>AJAX In Modal</div></a></li>--}}
                                        {{--</ul>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                                {{--<ul class="mega-menu-column col-5">--}}
                                    {{--<li class="mega-menu-title"><a href="#"><div>Single Project</div></a>--}}
                                        {{--<ul>--}}
                                            {{--<li><a href="portfolio-single-extended.html"><div>Extended Item</div></a></li>--}}
                                            {{--<li><a href="portfolio-single-fullwidth.html"><div>Parallax Image</div></a></li>--}}
                                            {{--<li><a href="portfolio-single-gallery-full.html"><div>Slider Gallery</div></a></li>--}}
                                            {{--<li><a href="portfolio-single-video-fullwidth-left-sidebar.html"><div>HTML5 Video</div></a></li>--}}
                                            {{--<li><a href="portfolio-single-thumbs-right-sidebar.html"><div>Masonry Thumbs</div></a></li>--}}
                                            {{--<li><a href="portfolio-single-video-both-sidebar.html"><div>Embed Video</div></a></li>--}}
                                        {{--</ul>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                                {{--<ul class="mega-menu-column col-5">--}}
                                    {{--<li class="mega-menu-title"><a href="#"><div>Layouts</div></a>--}}
                                        {{--<ul>--}}
                                            {{--<li><a href="portfolio-nomargin.html"><div>Default</div></a></li>--}}
                                            {{--<li><a href="portfolio-1-alt-right-sidebar.html"><div>Right Sidebar</div></a></li>--}}
                                            {{--<li><a href="portfolio-3-left-sidebar.html"><div>Left Sidebar</div></a></li>--}}
                                            {{--<li><a href="portfolio-2-both-sidebar.html"><div>Both Sidebar</div></a></li>--}}
                                            {{--<li><a href="portfolio-fullwidth-notitle.html"><div>100% Width</div></a></li>--}}
                                            {{--<li><a href="portfolio-parallax.html"><div>Parallax</div></a></li>--}}
                                        {{--</ul>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</li>--}}
                        {{--<li class="mega-menu"><a href="#"><div>Blog</div></a>--}}
                            {{--<div class="mega-menu-content style-2 clearfix">--}}
                                {{--<ul class="mega-menu-column col-md-3">--}}
                                    {{--<li class="mega-menu-title"><a href="#"><div>Default</div></a>--}}
                                        {{--<ul>--}}
                                            {{--<li><a href="blog.html"><div>Right Sidebar</div></a></li>--}}
                                            {{--<li><a href="blog-left-sidebar.html"><div>Left Sidebar</div></a></li>--}}
                                            {{--<li><a href="blog-both-sidebar.html"><div>Both Sidebar</div></a></li>--}}
                                            {{--<li><a href="blog-full-width.html"><div>Full Width</div></a></li>--}}
                                        {{--</ul>--}}
                                    {{--</li>--}}
                                    {{--<li class="mega-menu-title"><a href="#"><div>Timeline</div></a>--}}
                                        {{--<ul>--}}
                                            {{--<li><a href="blog-timeline-right-sidebar.html"><div>Right Sidebar</div></a></li>--}}
                                            {{--<li><a href="blog-timeline-left-sidebar.html"><div>Left Sidebar</div></a></li>--}}
                                            {{--<li><a href="blog-timeline.html"><div>Full Width</div></a></li>--}}
                                        {{--</ul>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                                {{--<ul class="mega-menu-column col-md-3">--}}
                                    {{--<li class="mega-menu-title"><a href="#"><div>Masonry</div></a>--}}
                                        {{--<ul>--}}
                                            {{--<li><a href="blog-masonry.html"><div>4 Columns</div></a></li>--}}
                                            {{--<li><a href="blog-masonry-3.html"><div>3 Columns</div></a></li>--}}
                                            {{--<li><a href="blog-masonry-2.html"><div>2 Columns</div></a></li>--}}
                                            {{--<li><a href="blog-masonry-full.html"><div>100% Width</div></a></li>--}}
                                        {{--</ul>--}}
                                    {{--</li>--}}
                                    {{--<li class="mega-menu-title"><a href="#"><div>Grid</div></a>--}}
                                        {{--<ul>--}}
                                            {{--<li><a href="blog-grid.html"><div>4 Columns</div></a></li>--}}
                                            {{--<li><a href="blog-grid-3.html"><div>3 Columns</div></a></li>--}}
                                            {{--<li><a href="blog-grid-2.html"><div>2 Columns</div></a></li>--}}
                                        {{--</ul>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                                {{--<ul class="mega-menu-column col-md-3">--}}
                                    {{--<li class="mega-menu-title"><a href="#"><div>Small Thumbs</div></a>--}}
                                        {{--<ul>--}}
                                            {{--<li><a href="blog-small-left-sidebar.html"><div>Left Sidebar</div></a></li>--}}
                                            {{--<li><a href="blog-small.html"><div>Right Sidebar</div></a></li>--}}
                                            {{--<li><a href="blog-small-both-sidebar.html"><div>Both Sidebar</div></a></li>--}}
                                            {{--<li><a href="blog-small-full-width.html"><div>Full Width</div></a></li>--}}
                                            {{--<li><a href="blog-small-alt.html"><div>Alternate Layout</div></a></li>--}}
                                        {{--</ul>--}}
                                    {{--</li>--}}
                                    {{--<li class="mega-menu-title"><a href="#"><div>Item Splitting</div></a>--}}
                                        {{--<ul>--}}
                                            {{--<li><a href="blog-grid.html"><div>Pagination</div></a></li>--}}
                                            {{--<li><a href="blog-masonry.html"><div>Infinite Scroll</div></a></li>--}}
                                        {{--</ul>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                                {{--<ul class="mega-menu-column col-md-3">--}}
                                    {{--<li class="mega-menu-title"><a href="#"><div>Single</div></a>--}}
                                        {{--<ul>--}}
                                            {{--<li><a href="blog-single.html"><div>Default Layout</div></a></li>--}}
                                            {{--<li><a href="blog-single-left-sidebar.html"><div>Left Sidebar</div></a></li>--}}
                                            {{--<li><a href="blog-single-full.html"><div>Full Width</div></a></li>--}}
                                            {{--<li><a href="blog-single-small.html"><div>Small Image</div></a></li>--}}
                                            {{--<li><a href="blog-single-split-right-sidebar.html"><div>Split Layout</div></a></li>--}}
                                        {{--</ul>--}}
                                    {{--</li>--}}
                                    {{--<li class="mega-menu-title"><a href="#"><div>Comments Module</div></a>--}}
                                        {{--<ul>--}}
                                            {{--<li><a href="blog-single-left-sidebar.html#comments"><div>Facebook Comments</div></a></li>--}}
                                            {{--<li><a href="blog-single-small.html#comments"><div>Disqus Comments</div></a></li>--}}
                                        {{--</ul>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</li>--}}
                        {{--<li><a href="shop.html"><div>Shop</div></a>--}}
                            {{--<ul>--}}
                                {{--<li><a href="shop.html"><div>4 Columns</div></a></li>--}}
                                {{--<li><a href="shop-3.html"><div>3 Columns</div></a>--}}
                                    {{--<ul>--}}
                                        {{--<li><a href="shop-3.html"><div>Full Width</div></a></li>--}}
                                        {{--<li><a href="shop-3-right-sidebar.html"><div>Right Sidebar</div></a></li>--}}
                                        {{--<li><a href="shop-3-left-sidebar.html"><div>Left Sidebar</div></a></li>--}}
                                    {{--</ul>--}}
                                {{--</li>--}}
                                {{--<li><a href="shop-2.html"><div>2 Columns</div></a>--}}
                                    {{--<ul>--}}
                                        {{--<li><a href="shop-2-right-sidebar.html"><div>Right Sidebar</div></a></li>--}}
                                        {{--<li><a href="shop-2-left-sidebar.html"><div>Left Sidebar</div></a></li>--}}
                                        {{--<li><a href="shop-2-both-sidebar.html"><div>Both Sidebar</div></a></li>--}}
                                    {{--</ul>--}}
                                {{--</li>--}}
                                {{--<li><a href="shop-1.html"><div>1 Columns</div></a>--}}
                                    {{--<ul>--}}
                                        {{--<li><a href="shop-1.html"><div>Full Width</div></a></li>--}}
                                        {{--<li><a href="shop-1-right-sidebar.html"><div>Right Sidebar</div></a></li>--}}
                                        {{--<li><a href="shop-1-left-sidebar.html"><div>Left Sidebar</div></a></li>--}}
                                        {{--<li><a href="shop-1-both-sidebar.html"><div>Both Sidebar</div></a></li>--}}
                                    {{--</ul>--}}
                                {{--</li>--}}
                                {{--<li><a href="shop-category-parallax.html"><div>Categories - Parallax</div></a></li>--}}
                                {{--<li><a href="shop-single.html"><div>Single Product</div></a>--}}
                                    {{--<ul>--}}
                                        {{--<li><a href="shop-single.html"><div>Full Width</div></a></li>--}}
                                        {{--<li><a href="shop-single-right-sidebar.html"><div>Right Sidebar</div></a></li>--}}
                                        {{--<li><a href="shop-single-left-sidebar.html"><div>Left Sidebar</div></a></li>--}}
                                        {{--<li><a href="shop-single-both-sidebar.html"><div>Both Sidebar</div></a></li>--}}
                                    {{--</ul>--}}
                                {{--</li>--}}
                                {{--<li><a href="cart.html"><div>Cart</div></a></li>--}}
                                {{--<li><a href="checkout.html"><div>Checkout</div></a></li>--}}
                            {{--</ul>--}}
                        {{--</li>--}}
                        {{--<li class="mega-menu"><a href="#"><div>Shortcodes</div></a>--}}
                            {{--<div class="mega-menu-content clearfix">--}}
                                {{--<ul class="mega-menu-column col-5">--}}
                                    {{--<li><a href="animations.html"><div><i class="icon-magic"></i>Animations</div></a></li>--}}
                                    {{--<li><a href="buttons.html"><div><i class="icon-link"></i>Buttons</div></a></li>--}}
                                    {{--<li><a href="carousel.html"><div><i class="icon-heart3"></i>Carousel</div></a></li>--}}
                                    {{--<li><a href="charts.html"><div><i class="icon-bar-chart"></i>Charts</div></a></li>--}}
                                    {{--<li><a href="clients.html"><div><i class="icon-apple"></i>Clients</div></a></li>--}}
                                    {{--<li><a href="columns-grids.html"><div><i class="icon-th-large"></i>Columns</div></a></li>--}}
                                    {{--<li><a href="counters.html"><div><i class="icon-time"></i>Counters</div></a></li>--}}
                                    {{--<li><a href="component-datatable.html"><div><i class="icon-table"></i>Data Tables</div></a></li>--}}
                                    {{--<li><a href="component-datepicker.html"><div><i class="icon-calendar3"></i>Date &amp; Time Pickers</div></a></li>--}}
                                {{--</ul>--}}
                                {{--<ul class="mega-menu-column col-5">--}}
                                    {{--<li><a href="dividers.html"><div><i class="icon-indent-right"></i>Dividers</div></a></li>--}}
                                    {{--<li><a href="featured-boxes.html"><div><i class="icon-lightbulb"></i>Icon Boxes</div></a></li>--}}
                                    {{--<li><a href="gallery.html"><div><i class="icon-picture"></i>Galleries</div></a></li>--}}
                                    {{--<li><a href="headings-dropcaps.html"><div><i class="icon-pencil2"></i>Heading Styles</div></a></li>--}}
                                    {{--<li><a href="icon-lists.html"><div><i class="icon-list-alt"></i>Icon Lists</div></a></li>--}}
                                    {{--<li><a href="labels-badges.html"><div><i class="icon-plus-sign"></i>Labels</div></a></li>--}}
                                    {{--<li><a href="lightbox.html"><div><i class="icon-resize-full"></i>Lightbox</div></a></li>--}}
                                    {{--<li><a href="component-editable.html"><div><i class="icon-edit"></i>Editable Fields</div></a></li>--}}
                                    {{--<li><a href="component-uploads.html"><div><i class="icon-line-upload"></i>File Uploads</div></a></li>--}}
                                {{--</ul>--}}
                                {{--<ul class="mega-menu-column col-5">--}}
                                    {{--<li><a href="lists-panels.html"><div><i class="icon-th-list"></i>Lists &amp; Panels</div></a></li>--}}
                                    {{--<li><a href="maps.html"><div><i class="icon-map-marker2"></i>Maps</div></a></li>--}}
                                    {{--<li><a href="media-embeds.html"><div><i class="icon-play"></i>Media Embeds</div></a></li>--}}
                                    {{--<li><a href="modal-popovers.html"><div><i class="icon-move"></i>Modal Boxes</div></a></li>--}}
                                    {{--<li><a href="navigation.html"><div><i class="icon-align-justify2"></i>Navigations</div></a></li>--}}
                                    {{--<li><a href="pagination-progress.html"><div><i class="icon-cogs"></i>Pagination</div></a></li>--}}
                                    {{--<li><a href="pie-skills.html"><div><i class="icon-tasks"></i>Pies &amp; Skills</div></a></li>--}}
                                    {{--<li><a href="component-range-slider.html"><div><i class="icon-line-move"></i>Range Slider</div></a></li>--}}
                                    {{--<li><a href="component-ratings.html"><div><i class="icon-star3"></i>Star Ratings</div></a></li>--}}
                                {{--</ul>--}}
                                {{--<ul class="mega-menu-column col-5">--}}
                                    {{--<li><a href="pricing.html"><div><i class="icon-dollar"></i>Pricing Boxes</div></a></li>--}}
                                    {{--<li><a href="process-steps.html"><div><i class="icon-thumbs-up"></i>Process Steps</div></a></li>--}}
                                    {{--<li><a href="promo-boxes.html"><div><i class="icon-rocket"></i>Promo Boxes</div></a></li>--}}
                                    {{--<li><a href="quotes-blockquotes.html"><div><i class="icon-quote-left"></i>Blockquotes</div></a></li>--}}
                                    {{--<li><a href="responsive.html"><div><i class="icon-laptop2"></i>Responsive</div></a></li>--}}
                                    {{--<li><a href="sections.html"><div><i class="icon-folder-open"></i>Sections</div></a></li>--}}
                                    {{--<li><a href="social-icons.html"><div><i class="icon-facebook2"></i>Social Icons</div></a></li>--}}
                                    {{--<li><a href="component-select-picker.html"><div><i class="icon-select"></i>Select Picker</div></a></li>--}}
                                    {{--<li><a href="component-select-box.html"><div><i class="icon-line-columns"></i>Select Boxes</div></a></li>--}}
                                {{--</ul>--}}
                                {{--<ul class="mega-menu-column col-5">--}}
                                    {{--<li><a href="style-boxes.html"><div><i class="icon-exclamation-sign"></i>Alert Boxes</div></a></li>--}}
                                    {{--<li><a href="styled-icons.html"><div><i class="icon-flag2"></i>Styled Icons</div></a></li>--}}
                                    {{--<li><a href="tables.html"><div><i class="icon-table"></i>Tables</div></a></li>--}}
                                    {{--<li><a href="tabs.html"><div><i class="icon-star3"></i>Tabs</div></a></li>--}}
                                    {{--<li><a href="testimonials-twitter.html"><div><i class="icon-user4"></i>Testimonials</div></a></li>--}}
                                    {{--<li><a href="thumbnails-slider.html"><div><i class="icon-camera3"></i>Thumbnails</div></a></li>--}}
                                    {{--<li><a href="toggles-accordions.html"><div><i class="icon-ok-circle"></i>Toggles</div></a></li>--}}
                                    {{--<li><a href="component-radios-switches.html"><div><i class="icon-line-square-check"></i>Radios &amp; Switches</div></a></li>--}}
                                    {{--<li><a href="component-typeahead.html"><div><i class="icon-type"></i>Input Typeahead</div></a></li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</li>--}}
                    </ul>

                    <!-- Top Cart
                    ============================================= -->
                {{--<div id="top-cart">--}}
                {{--<a href="#" id="top-cart-trigger"><i class="icon-shopping-cart"></i><span>5</span></a>--}}
                {{--<div class="top-cart-content">--}}
                {{--<div class="top-cart-title">--}}
                {{--<h4>Shopping Cart</h4>--}}
                {{--</div>--}}
                {{--<div class="top-cart-items">--}}
                {{--<div class="top-cart-item clearfix">--}}
                {{--<div class="top-cart-item-image">--}}
                {{--<a href="#"><img src="images/shop/small/1.jpg" alt="Blue Round-Neck Tshirt" /></a>--}}
                {{--</div>--}}
                {{--<div class="top-cart-item-desc">--}}
                {{--<a href="#">Blue Round-Neck Tshirt</a>--}}
                {{--<span class="top-cart-item-price">$19.99</span>--}}
                {{--<span class="top-cart-item-quantity">x 2</span>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<div class="top-cart-item clearfix">--}}
                {{--<div class="top-cart-item-image">--}}
                {{--<a href="#"><img src="images/shop/small/6.jpg" alt="Light Blue Denim Dress" /></a>--}}
                {{--</div>--}}
                {{--<div class="top-cart-item-desc">--}}
                {{--<a href="#">Light Blue Denim Dress</a>--}}
                {{--<span class="top-cart-item-price">$24.99</span>--}}
                {{--<span class="top-cart-item-quantity">x 3</span>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--<div class="top-cart-action clearfix">--}}
                {{--<span class="fleft top-checkout-price">$114.95</span>--}}
                {{--<button class="button button-3d button-small nomargin fright">View Cart</button>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                <!-- #top-cart end -->

                    <!-- Top Search
                    ============================================= -->
                {{--<div id="top-search">--}}
                {{--<a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>--}}
                {{--<form action="search.html" method="get">--}}
                {{--<input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter..">--}}
                {{--</form>--}}
                {{--</div>--}}
                <!-- #top-search end -->

                </nav><!-- #primary-menu end -->

            </div>

        </div>

    </header><!-- #header end -->




    <!-- Slider
    ============================================= -->
    <section id="slider" class="revslider-wrap clearfix">

        <div class="rev_slider_wrapper">
            <!-- START REVOLUTION SLIDER 5.3.1.6 fullscreen mode -->
            <div id="rev_slider_4_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.1.4">
                <ul>	<!-- SLIDE  -->
                    <li class="dark" data-index="rs-8" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="include/rs-plugin/demos/assets/images/transparent.png" style='background-color:#1d2931' alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption   tp-resizeme"
                             id="slide-8-layer-1"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                             data-y="['bottom','bottom','bottom','bottom']" data-voffset="['0','0','0','0']"
                             data-width="full-proportional"
                             data-height="full-proportional"
                             data-whitespace="nowrap"

                             data-type="image"
                             data-basealign="slide"
                             data-responsive_offset="on"

                             data-frames='[{"delay":500,"speed":2000,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"

                             style="z-index: 5;"><img src="include/rs-plugin/demos/assets/images/gravity_bg.jpg" alt="" data-ww="['full-proportional','full-proportional','full-proportional','full-proportional']" data-hh="['full-proportional','full-proportional','full-proportional','full-proportional']" data-no-retina> </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption   tp-resizeme rs-parallaxlevel-1"
                             id="slide-8-layer-8"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                             data-y="['bottom','bottom','bottom','bottom']" data-voffset="['597','517','597','497']"
                             data-fontsize="['120','120','120','80']"
                             data-lineheight="['90','90','90','60']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"

                             data-type="text"
                             data-responsive_offset="on"

                             data-frames='[{"delay":1300,"speed":2000,"frame":"0","from":"sX:2;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['center','center','center','center']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"

                             style="z-index: 6; white-space: nowrap; font-size: 120px; line-height: 90px; font-weight: 700; color: rgba(255, 0, 255, 1.00);font-family:Poppins;letter-spacing:-10px;">
                            <div class="rs-looped rs-wave"  data-speed="3" data-angle="0" data-radius="2px" data-origin="50% 50%">GRAVITY<br/>DESIGN </div></div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption   tp-resizeme rs-parallaxlevel-1"
                             id="slide-8-layer-7"
                             data-x="['center','center','center','center']" data-hoffset="['-3','-3','-3','-3']"
                             data-y="['bottom','bottom','bottom','bottom']" data-voffset="['600','520','600','500']"
                             data-fontsize="['120','120','120','80']"
                             data-lineheight="['90','90','90','60']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"

                             data-type="text"
                             data-responsive_offset="on"

                             data-frames='[{"delay":1200,"speed":2000,"frame":"0","from":"sX:2;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['center','center','center','center']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"

                             style="z-index: 7; white-space: nowrap; font-size: 120px; line-height: 90px; font-weight: 700; color: rgba(255, 255, 0, 1.00);font-family:Poppins;letter-spacing:-10px;">
                            <div class="rs-looped rs-wave"  data-speed="3" data-angle="0" data-radius="2px" data-origin="50% 50%">GRAVITY<br/>DESIGN </div></div>

                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption   tp-resizeme rs-parallaxlevel-1"
                             id="slide-8-layer-5"
                             data-x="['center','center','center','center']" data-hoffset="['3','3','3','3']"
                             data-y="['bottom','bottom','bottom','bottom']" data-voffset="['600','520','600','500']"
                             data-fontsize="['120','120','120','80']"
                             data-lineheight="['90','90','90','60']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"

                             data-type="text"
                             data-responsive_offset="on"

                             data-frames='[{"delay":1100,"speed":2000,"frame":"0","from":"sX:2;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['center','center','center','center']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"

                             style="z-index: 8; white-space: nowrap; font-size: 120px; line-height: 90px; font-weight: 700; color: rgba(0, 255, 255, 1.00);font-family:Poppins;letter-spacing:-10px;">
                            <div class="rs-looped rs-wave"  data-speed="3" data-angle="0" data-radius="2px" data-origin="50% 50%">GRAVITY<br/>DESIGN </div></div>

                        <!-- LAYER NR. 5 -->
                        <div class="tp-caption   tp-resizeme rs-parallaxlevel-1"
                             id="slide-8-layer-3"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                             data-y="['bottom','bottom','bottom','bottom']" data-voffset="['600','520','600','500']"
                             data-fontsize="['120','120','120','80']"
                             data-lineheight="['90','90','90','60']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"

                             data-type="text"
                             data-responsive_offset="on"

                             data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:2;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['center','center','center','center']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"

                             style="z-index: 9; white-space: nowrap; font-size: 120px; line-height: 90px; font-weight: 700; color: rgba(255, 255, 255, 1.00);font-family:Poppins;letter-spacing:-10px;">GRAVITY<br/>DESIGN </div>

                        <!-- LAYER NR. 6 -->
                        <div class="tp-caption   tp-resizeme rs-parallaxlevel-1"
                             id="slide-8-layer-15"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                             data-y="['bottom','bottom','bottom','bottom']" data-voffset="['119','99','200','220']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"

                             data-type="image"
                             data-responsive_offset="on"

                             data-frames='[{"delay":850,"speed":2000,"frame":"0","from":"sX:1.1;sY:1.1;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"

                             style="z-index: 10;">
                            <div class="rs-looped rs-wave"  data-speed="5" data-angle="0" data-radius="3px" data-origin="50% 50%"><img src="include/rs-plugin/demos/assets/images/galaxy_bg-1.png" alt="" data-ww="['509px','509px','509px','407px']" data-hh="['250px','250px','250px','200px']" data-no-retina> </div></div>

                        <!-- LAYER NR. 7 -->
                        <div class="tp-caption   tp-resizeme rs-parallaxlevel-2"
                             id="slide-8-layer-2"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                             data-y="['bottom','bottom','bottom','bottom']" data-voffset="['299','260','380','350']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"

                             data-type="image"
                             data-responsive_offset="on"

                             data-frames='[{"delay":250,"speed":5000,"frame":"0","from":"y:100px;rZ:15deg;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"

                             style="z-index: 11;">
                            <div class="rs-looped rs-wave"  data-speed="10" data-angle="0" data-radius="5px" data-origin="50% 50%"><img src="include/rs-plugin/demos/assets/images/gravity_astronaut.png" alt="" data-ww="['820px','718px','615px','410px']" data-hh="['400px','350px','300px','200px']" data-no-retina> </div></div>

                        <!-- LAYER NR. 8 -->
                        <a class="tp-caption   tp-resizeme"
                           href="https://themeforest.net/item/canvas-the-multipurpose-html5-template/9228123?ref=semicolonweb" target="_blank"			 id="slide-8-layer-16"
                           data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                           data-y="['bottom','bottom','bottom','bottom']" data-voffset="['230','210','310','310']"
                           data-fontsize="['25','25','25','20']"
                           data-lineheight="['25','25','25','20']"
                           data-width="['none','none','none','320']"
                           data-height="none"
                           data-whitespace="['nowrap','nowrap','nowrap','normal']"

                           data-type="text"
                           data-actions='[{"event":"mouseenter","action":"startlayer","layer":"slide-8-layer-17","delay":""},{"event":"mouseleave","action":"stoplayer","layer":"slide-8-layer-17","delay":""}]'
                           data-responsive_offset="on"

                           data-frames='[{"delay":1000,"speed":1500,"frame":"0","from":"sX:2;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;fb:0px;","style":"c:rgba(255, 255, 255, 1.00);"}]'
                           data-textAlign="['inherit','inherit','inherit','center']"
                           data-paddingtop="[0,0,0,0]"
                           data-paddingright="[0,0,0,0]"
                           data-paddingbottom="[0,0,0,0]"
                           data-paddingleft="[0,0,0,0]"

                           style="z-index: 12; white-space: nowrap; font-size: 25px; line-height: 25px; font-weight: 300; color: rgba(255, 255, 255, 1.00);font-family:Oswald;letter-spacing:10px;cursor:pointer;text-decoration: none;">START THE EXPERIENCE </a>

                        <!-- LAYER NR. 9 -->
                        <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme"
                             id="slide-8-layer-17"
                             data-x="['center','center','center','center']" data-hoffset="['-4','-4','-4','-4']"
                             data-y="['bottom','bottom','bottom','bottom']" data-voffset="['221','201','301','300']"
                             data-width="['390','390','390','180']"
                             data-height="2"
                             data-whitespace="nowrap"

                             data-type="shape"
                             data-responsive_offset="on"

                             data-frames='[{"delay":"bytrigger","speed":500,"frame":"0","from":"sX:0;opacity:1;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"bytrigger","speed":300,"frame":"999","to":"sX:0;opacity:1;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"
                             data-lasttriggerstate="reset"
                             style="z-index: 13;background-color:rgba(255, 255, 255, 1.00);"> </div>

                        <!-- LAYER NR. 10 -->
                        <div class="tp-caption   tp-resizeme rs-parallaxlevel-3"
                             id="slide-8-layer-9"
                             data-x="['center','center','center','center']" data-hoffset="['-531','-531','-348','-204']"
                             data-y="['bottom','bottom','bottom','bottom']" data-voffset="['350','350','421','431']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"

                             data-type="image"
                             data-responsive_offset="on"

                             data-frames='[{"delay":250,"speed":3000,"frame":"0","from":"y:150px;rZ:90deg;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"

                             style="z-index: 14;">
                            <div class="rs-looped rs-wave"  data-speed="5" data-angle="0" data-radius="3px" data-origin="50% 50%"><img src="include/rs-plugin/demos/assets/images/flake2.png" alt="" data-ww="['29px','29px','29px','29px']" data-hh="['21px','21px','21px','21px']" data-no-retina> </div></div>

                        <!-- LAYER NR. 11 -->
                        <div class="tp-caption   tp-resizeme rs-parallaxlevel-3"
                             id="slide-8-layer-10"
                             data-x="['center','center','center','center']" data-hoffset="['493','493','326','194']"
                             data-y="['bottom','bottom','bottom','bottom']" data-voffset="['399','399','408','438']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"

                             data-type="image"
                             data-responsive_offset="on"

                             data-frames='[{"delay":350,"speed":3000,"frame":"0","from":"y:150px;rZ:-90deg;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"

                             style="z-index: 15;">
                            <div class="rs-looped rs-wave"  data-speed="5" data-angle="0" data-radius="3px" data-origin="50% 50%"><img src="include/rs-plugin/demos/assets/images/flake5.png" alt="" data-ww="['28px','28px','28px','28px']" data-hh="['27px','27px','27px','27px']" data-no-retina> </div></div>

                        <!-- LAYER NR. 12 -->
                        <div class="tp-caption   tp-resizeme rs-parallaxlevel-5"
                             id="slide-8-layer-11"
                             data-x="['center','center','center','center']" data-hoffset="['350','350','245','141']"
                             data-y="['bottom','bottom','bottom','bottom']" data-voffset="['338','338','331','348']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"

                             data-type="image"
                             data-responsive_offset="on"

                             data-frames='[{"delay":450,"speed":3000,"frame":"0","from":"y:150px;rZ:45deg;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"

                             style="z-index: 16;">
                            <div class="rs-looped rs-wave"  data-speed="3" data-angle="0" data-radius="2px" data-origin="50% 50%"><img src="include/rs-plugin/demos/assets/images/flake4.png" alt="" data-ww="['26px','26px','26px','26px']" data-hh="['24px','24px','24px','24px']" data-no-retina> </div></div>

                        <!-- LAYER NR. 13 -->
                        <div class="tp-caption   tp-resizeme rs-parallaxlevel-5"
                             id="slide-8-layer-12"
                             data-x="['center','center','center','center']" data-hoffset="['-455','-455','-321','-214']"
                             data-y="['bottom','bottom','bottom','bottom']" data-voffset="['320','320','357','381']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"

                             data-type="image"
                             data-responsive_offset="on"

                             data-frames='[{"delay":550,"speed":3000,"frame":"0","from":"y:150px;rZ:-125deg;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"

                             style="z-index: 17;">
                            <div class="rs-looped rs-wave"  data-speed="5" data-angle="0" data-radius="4px" data-origin="50% 50%"><img src="include/rs-plugin/demos/assets/images/flake3.png" alt="" data-ww="['27px','27px','27px','27px']" data-hh="['26px','26px','26px','26px']" data-no-retina> </div></div>

                        <!-- LAYER NR. 14 -->
                        <div class="tp-caption   tp-resizeme rs-parallaxlevel-4"
                             id="slide-8-layer-13"
                             data-x="['center','center','center','center']" data-hoffset="['-88','-88','-88','-37']"
                             data-y="['bottom','bottom','bottom','bottom']" data-voffset="['382','382','382','399']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"

                             data-type="image"
                             data-responsive_offset="on"

                             data-frames='[{"delay":650,"speed":3000,"frame":"0","from":"y:150px;rZ:125deg;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"

                             style="z-index: 18;">
                            <div class="rs-looped rs-wave"  data-speed="6" data-angle="0" data-radius="3px" data-origin="50% 50%"><img src="include/rs-plugin/demos/assets/images/flake1.png" alt="" data-ww="['13','13','13','13px']" data-hh="12px" data-no-retina> </div></div>

                        <!-- LAYER NR. 15 -->
                        <div class="tp-caption   tp-resizeme rs-parallaxlevel-4"
                             id="slide-8-layer-14"
                             data-x="['center','center','center','center']" data-hoffset="['-232','-232','-232','-170']"
                             data-y="['bottom','bottom','bottom','bottom']" data-voffset="['300','300','300','366']"
                             data-width="none"
                             data-height="none"
                             data-whitespace="nowrap"

                             data-type="image"
                             data-responsive_offset="on"

                             data-frames='[{"delay":750,"speed":3000,"frame":"0","from":"y:150px;rZ:-125deg;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"

                             style="z-index: 19;">
                            <div class="rs-looped rs-wave"  data-speed="7" data-angle="0" data-radius="6px" data-origin="50% 50%"><img src="include/rs-plugin/demos/assets/images/flake3.png" alt="" data-ww="['16px','16px','16px','16px']" data-hh="['15px','15px','15px','15px']" data-no-retina> </div></div>

                        <!-- LAYER NR. 16 -->
                        <a class="tp-caption   tp-resizeme"
                           href="http://themes.semicolonweb.com/html/canvas/intro.php#section-hero" target="_blank"
                           id="slide-8-layer-18"
                           data-x="['center','center','center','center']" data-hoffset="['-270','-270','-230','0']"
                           data-y="['bottom','bottom','bottom','bottom']" data-voffset="['100','100','200','210']"
                           data-fontsize="['30','30','25','25']"
                           data-lineheight="['28','28','23','23']"
                           data-width="270"
                           data-height="none"
                           data-whitespace="nowrap"

                           data-type="text"
                           data-actions=''
                           data-responsive_offset="on"

                           data-frames='[{"delay":1400,"speed":1500,"frame":"0","from":"sX:2;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;fb:0px;","style":"c:rgba(255, 255, 255, 1.00);"}]'
                           data-textAlign="['center','center','center','center']"
                           data-paddingtop="[0,0,0,0]"
                           data-paddingright="[0,0,0,0]"
                           data-paddingbottom="[0,0,0,0]"
                           data-paddingleft="[0,0,0,0]"

                           style="z-index: 20; min-width: 270px; max-width: 270px; white-space: nowrap; font-size: 30px; line-height: 28px; font-weight: 300; color: rgba(255, 255, 255, 1.00);font-family:Oswald;cursor:pointer;text-decoration: none;">
                            FREE REVOLUTION<br/>SLIDER HERO TEMPLATES.</a>

                        <!-- LAYER NR. 17 -->
                        <a class="tp-caption   tp-resizeme"
                           href="http://themes.semicolonweb.com/html/canvas/intro.php" target="_blank"
                           id="slide-8-layer-19"
                           data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                           data-y="['bottom','bottom','bottom','bottom']" data-voffset="['100','100','200','150']"
                           data-fontsize="['30','30','25','25']"
                           data-lineheight="['28','28','23','23']"
                           data-width="270"
                           data-height="none"
                           data-whitespace="nowrap"

                           data-type="text"
                           data-actions=''
                           data-responsive_offset="on"

                           data-frames='[{"delay":1400,"speed":1500,"frame":"0","from":"sX:2;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;fb:0px;","style":"c:rgba(255, 255, 255, 1.00);"}]'
                           data-textAlign="['center','center','center','center']"
                           data-paddingtop="[0,0,0,0]"
                           data-paddingright="[0,0,0,0]"
                           data-paddingbottom="[0,0,0,0]"
                           data-paddingleft="[0,0,0,0]"

                           style="z-index: 21; min-width: 270px; max-width: 270px; white-space: nowrap; font-size: 30px; line-height: 28px; font-weight: 300; color: rgba(255, 255, 255, 1.00);font-family:Oswald;cursor:pointer;text-decoration: none;">700+ HTML FILES<br/>INCLUDED FOR FREE </a>

                        <!-- LAYER NR. 18 -->
                        <a class="tp-caption   tp-resizeme"
                           href="https://themeforest.net/item/canvas-the-multipurpose-html5-template/9228123?ref=semicolonweb" target="_blank"			 id="slide-8-layer-20"
                           data-x="['center','center','center','center']" data-hoffset="['270','270','230','0']"
                           data-y="['bottom','bottom','bottom','bottom']" data-voffset="['100','100','200','90']"
                           data-fontsize="['30','30','25','25']"
                           data-lineheight="['28','28','23','23']"
                           data-width="270"
                           data-height="none"
                           data-whitespace="nowrap"

                           data-type="text"
                           data-actions=''
                           data-responsive_offset="on"

                           data-frames='[{"delay":1400,"speed":1500,"frame":"0","from":"sX:2;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;fb:0px;","style":"c:rgba(255, 255, 255, 1.00);"}]'
                           data-textAlign="['center','center','center','center']"
                           data-paddingtop="[0,0,0,0]"
                           data-paddingright="[0,0,0,0]"
                           data-paddingbottom="[0,0,0,0]"
                           data-paddingleft="[0,0,0,0]"

                           style="z-index: 22; min-width: 270px; max-width: 270px; white-space: nowrap; font-size: 30px; line-height: 28px; font-weight: 300; color: rgba(255, 255, 255, 1.00);font-family:Oswald;cursor:pointer;text-decoration: none;">LESS, SASS, RTL<br/>AVAILABLE IN CANVAS </a>

                        <!-- LAYER NR. 19 -->
                        <div class="tp-caption   tp-resizeme"
                             id="slide-8-layer-21"
                             data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                             data-y="['bottom','bottom','bottom','bottom']" data-voffset="['50','50','50','30']"
                             data-width="['none','none','none','360']"
                             data-height="none"
                             data-whitespace="['nowrap','nowrap','nowrap','normal']"

                             data-type="text"
                             data-basealign="slide"
                             data-responsive_offset="on"

                             data-frames='[{"delay":1400,"speed":1500,"frame":"0","from":"sX:2;opacity:0;fb:10px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['center','center','center','center']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"

                             style="z-index: 23; white-space: nowrap; font-size: 15px; line-height: 15px; font-weight: 300; color: rgba(12, 17, 21, 1.00);font-family:Oswald;letter-spacing:10px;cursor:pointer;">COPYRIGHT 2017 SEMICOLONWEB
                        </div>
                    </li>
                </ul>
                <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>	</div>
        </div><!-- END REVOLUTION SLIDER -->
</div><!-- END REVOLUTION SLIDER WRAPPER -->

</section>

<!-- Content
============================================= -->
<section id="content">



</section><!-- #content end -->

@extends('layouts.footer')

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

<!-- SLIDER REVOLUTION 5.x SCRIPTS  -->
<script type="text/javascript" src="include/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="include/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="include/rs-plugin/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="include/rs-plugin/js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="include/rs-plugin/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="include/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="include/rs-plugin/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="include/rs-plugin/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="include/rs-plugin/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="include/rs-plugin/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="include/rs-plugin/js/extensions/revolution.extension.video.min.js"></script>

<!-- ADD-ONS JS FILES -->
<script type="text/javascript" src="include/rs-plugin/js/addons/revolution.addon.particles.min.js"></script>

<script>
    var tpj=jQuery;

    var revapi4;
    tpj(document).ready(function() {
        if(tpj("#rev_slider_4_1").revolution == undefined){
            revslider_showDoubleJqueryError("#rev_slider_4_1");
        }else{
            revapi4 = tpj("#rev_slider_4_1").show().revolution({
                sliderType:"hero",
                jsFileLocation:"include/rs-plugin/js/",
                sliderLayout:"fullscreen",
                dottedOverlay:"none",
                delay:9000,
                particles: {startSlide: "first", endSlide: "last", zIndex: "6",
                    particles: {
                        number: {value: 100}, color: {value: "#FFF"},
                        shape: {
                            type: "circle", stroke: {width: 0, color: "#FFF", opacity: 1},
                            image: {src: ""}
                        },
                        opacity: {value: 1, random: true, min: 0.25, anim: {enable: false, speed: 3, opacity_min: 0, sync: false}},
                        size: {value: 3, random: true, min: 0.5, anim: {enable: false, speed: 40, size_min: 1, sync: false}},
                        line_linked: {enable: false, distance: 150, color: "#FFF", opacity: 0.4, width: 1},
                        move: {enable: true, speed: 1, direction: "top", random: true, min_speed: 1, straight: false, out_mode: "out"}},
                    interactivity: {
                        events: {onhover: {enable: true, mode: "bubble"}, onclick: {enable: false, mode: "repulse"}},
                        modes: {grab: {distance: 400, line_linked: {opacity: 0.5}}, bubble: {distance: 400, size: 0, opacity: 0.01}, repulse: {distance: 200}}
                    }
                },
                navigation: {
                },
                responsiveLevels:[1170,1024,778,480],
                visibilityLevels:[1170,1024,778,480],
                gridwidth:[1170,1024,778,480],
                gridheight:[900,768,960,720],
                lazyType:"none",
                parallax: {
                    type:"mouse",
                    origo:"slidercenter",
                    speed:400,
                    levels:[1,2,3,4,5,10,15,20,25,46,47,48,49,50,51,55],
                },
                shadow:0,
                spinner:"off",
                autoHeight:"off",
                fullScreenAutoWidth:"off",
                fullScreenAlignForce:"off",
                fullScreenOffsetContainer: "",
                fullScreenOffset: "",
                disableProgressBar:"on",
                hideThumbsOnMobile:"off",
                hideSliderAtLimit:0,
                hideCaptionAtLimit:0,
                hideAllCaptionAtLilmit:0,
                debugMode:false,
                fallbacks: {
                    simplifyAll:"off",
                    disableFocusListener:false,
                }
            });
        }

        RsParticlesAddOn(revapi4);
    });	/*ready*/
</script>

</body>
</html>