@extends('layouts.welcome_template')

@section('style')
    <style>
        .feature-box h3{
            color:black;
            font-weight: bold;
        }

        .feature-box{
            padding:0 20px;
        }
    </style>

@endsection

@section('title')
    <div class="hero-headline bottommargin">
        <h1>Software always remain <br>softly for End users! <br>But sometimes hardly to developers!</h1>
    </div>

@endsection

@section('sidepic')

    <div class="side-cover-wrapper full-screen visible-lg visible-md">
        <div class="fslider" data-speed="3000" data-pause="5000" data-animation="fade" data-arrows="false" data-pagi="false" style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; background-color: #333;">
            <div class="flexslider" style="height: 100% !important;">
                <div class="slider-wrap" style="height: inherit !important;">
                    <div class="slide full-screen force-full-screen" style="background: url('images/index_side.jpg') center right; background-size: cover; height: 100% !important;"></div>
                    <div class="slide full-screen force-full-screen" style="background: url('images/index_side2.jpg') center right; background-size: cover; height: 100% !important;"></div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('content1')
    <div id="section-services" class="page-section">

        <h2 class="bottommargin">About My Website</h2>

        <div class="row clearfix">

            <div class="col-md-6 bottommargin">
                <div class="feature-box fbox-plain fbox-dark">

                    <img src="/images/about/laravel.jpg" alt="">

                </div>
            </div>
            <div class="col-md-6 bottommargin">
                <div class="feature-box fbox-plain fbox-dark">
                    <h3  class="aboutme-item-title">Amazing Laravel</h3>
                    <p>經過陽春的第一版php網站，我曉得php有它的便利性，但一段時間後，維護就顯得吃力。<br>種種考量下，我決定先用Laravel 的MVC去解決難以維護的問題。在接觸的過程當中，驚喜不斷，很多Ｖ1沒有的功能，在Laravel都可以很直覺的實現。像Eloquent relationships，我便可以輕易的建立資料關係，共不用講Composer上一堆功能強大的套件可供使用。<br>用了Laravel後，整個人都神清氣爽了起來呢！</p>

                </div>
            </div>
        </div>




        <div class="row clearfix">

            <div class="col-md-6 bottommargin">
                <div class="feature-box fbox-plain fbox-dark">

                    <img src="/images/about/user.jpg" alt="">

                </div>
            </div>
            <div class="col-md-6 bottommargin">
                <div class="feature-box fbox-plain fbox-dark">
                    <h3  class="aboutme-item-title">會員系統</h3>
                    <p>每個會員可個別發佈與編輯自己的文章、作品和留言</p>
                </div>
            </div>
        </div>

        <div class="row clearfix">
            <div class="col-md-6 bottommargin">
                <div class="feature-box fbox-plain fbox-dark">

                    <img src="/images/about/editor.jpg" alt="">

                </div>
            </div>
            <div class="col-md-6 bottommargin">
                <div class="feature-box fbox-plain fbox-dark">
                    <h3  class="aboutme-item-title">WISYWYG Editor</h3>
                    <p>方便易使用的編輯介面</p>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-md-6 bottommargin">
                <div class="feature-box fbox-plain fbox-dark">

                    <img src="/images/about/ga.jpg" alt="">

                </div>
            </div>
            <div class="col-md-6 bottommargin">
                <div class="feature-box fbox-plain fbox-dark">
                    <h3  class="aboutme-item-title">Google analytic</h3>
                    <p>來訪者分析</p>
                </div>
            </div>
        </div>

        <div class="row clearfix">

            <div class="col-md-6 bottommargin">
                <div class="feature-box fbox-plain fbox-dark">

                    <img src="/images/about/ajax.jpg" alt="">

                </div>
            </div>
            <div class="col-md-6 bottommargin">
                <div class="feature-box fbox-plain fbox-dark">
                    <h3  class="aboutme-item-title">Ajax Portfolio</h3>
                    <p>同樣也是為了解決V1作品頁面拉得過長，UX太差，所以此次將作品頁改成了lazy loading的方式，改善Loading 時間太長的問題</p>
                </div>
            </div>
        </div>

        <div class="row clearfix">

            <div class="col-md-6 bottommargin">
                <div class="feature-box fbox-plain fbox-dark">

                    <img src="/images/about/restful.jpg" alt="">

                </div>
            </div>
            <div class="col-md-6 bottommargin">
                <div class="feature-box fbox-plain fbox-dark">
                    <h3  class="aboutme-item-title">RESTful Api</h3>
                   <p>Laravel router 可以簡單實現</p>
                </div>
            </div>
        </div>

        <div class="row clearfix">

            <div class="col-md-6 bottommargin">
                <div class="feature-box fbox-plain fbox-dark">

                    <img src="/images/about/search.jpg" alt="">

                </div>
            </div>
            <div class="col-md-6 bottommargin">
                <div class="feature-box fbox-plain fbox-dark">
                    <h3  class="aboutme-item-title">Algolia Search</h3>
                    <p>使用Laravel scout 及Algolia 去做搜尋。他們提供相當好的index增加搜尋搜尋速度，algolia更可提供相當全方位的搜尋資料記錄和統計</p>
                </div>
            </div>
        </div>







        <div class="clear bottommargin-sm"></div>







    </div>

@endsection


@section('content2')
@endsection
