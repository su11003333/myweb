@extends('layouts.welcome_template')

@section('style')
    <style>
        .feature-box h3{
            color:white;
        }
        .aboutme-item-title{
            background-color:black;
            color:white;
            line-height: 1.6;
        }
        .feature-box{
            padding:0 20px;
        }
    </style>

@endsection

@section('title')
    <div class="hero-headline bottommargin">
        <h1>This is where I start.<br>The journy begins.</h1>
    </div>

@endsection

@section('sidepic')

    <div class="side-cover-wrapper full-screen visible-lg visible-md">
        <div class="fslider" data-speed="3000" data-pause="5000" data-animation="fade" data-arrows="false" data-pagi="false" style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; background-color: #333;">
            <div class="flexslider" style="height: 100% !important;">
                <div class="slider-wrap" style="height: inherit !important;">
                    <div class="slide full-screen force-full-screen" style="background: url('images/index_side3.jpg') center right; background-size: cover; height: 100% !important;"></div>
                    <div class="slide full-screen force-full-screen" style="background: url('images/index_side4.jpg') center right; background-size: cover; height: 100% !important;"></div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('content1')
    <div id="section-services" class="page-section">

        <h2 class="bottommargin">About Me.</h2>

        <div class="row clearfix">

            <div class="col-md-3 bottommargin">
                <div class="feature-box fbox-plain fbox-dark">

                    <h3  class="text-center aboutme-item-title">2007</h3>

                </div>
            </div>
            <div class="col-md-9 bottommargin">
                <div class="feature-box fbox-plain fbox-dark">

                    <p>大學通識課選修到了初階網頁製作，並用Dreamwaver、Apache和Hinet hosting完成了人生第一個網頁，當下的成就感指數爆表。</p>
                </div>
            </div>

            <div class="col-md-3 bottommargin">
                <div class="feature-box fbox-plain fbox-dark">

                    <h3 class="text-center aboutme-item-title">2008</h3>

                </div>
            </div>
            <div class="col-md-9 bottommargin">
                <div class="feature-box fbox-plain fbox-dark">

                    <p>畢業於輔仁大學生命科學系</p>
                </div>
            </div>

            <div class="col-md-3 bottommargin">
                <div class="feature-box fbox-plain fbox-dark">

                    <h3 class="text-center aboutme-item-title">2009</h3>

                </div>
            </div>
            <div class="col-md-9 bottommargin">
                <div class="feature-box fbox-plain fbox-dark">

                    <p>航空特戰指揮部退伍，完成五次空跳<br>就此奉行"Not everything is meant to be,but everything is worth a try."</p>
                </div>
            </div>

            <div class="col-md-3 bottommargin">
                <div class="feature-box fbox-plain fbox-dark">

                    <h3 class="text-center aboutme-item-title">2010~2011</h3>

                </div>
            </div>
            <div class="col-md-9 bottommargin">
                <div class="feature-box fbox-plain fbox-dark">

                    <p>手機包膜店擔任店長，成天包手機和管理店內員工。<br>開始自學Photoshop和Illustrator，並承接外包平面設計案件</p>
                </div>
            </div>

            <div class="col-md-3 bottommargin">
                <div class="feature-box fbox-plain fbox-dark">

                    <h3 class="text-center aboutme-item-title">2012</h3>

                </div>
            </div>
            <div class="col-md-9 bottommargin">
                <div class="feature-box fbox-plain fbox-dark">

                    <p>獨自跑去蘭嶼打工度假三個月，由於喜愛那邊的生活環境和雇主，於是利用了時間研究flash並幫雇主製作了第一個全 <a href="http://www.straydes.com/work/48">flash的潛水網站</a></p>
                </div>
            </div>

            <div class="col-md-3 bottommargin">
                <div class="feature-box fbox-plain fbox-dark">

                    <h3 class="text-center aboutme-item-title">2013~2015</h3>

                </div>
            </div>
            <div class="col-md-9 bottommargin">
                <div class="feature-box fbox-plain fbox-dark">

                    <p>搬回台北並任職於大登旅行社擔任美編。開始接觸html、css、jquery以及Indesign。<br>主要工作：製作平面文宣、EDM和活動網頁。<br>並在晚上擔任化學及英文家教</p>

                </div>
            </div>

            <div class="col-md-3 bottommargin">
                <div class="feature-box fbox-plain fbox-dark">

                    <h3 class="text-center aboutme-item-title">2016</h3>

                </div>
            </div>
            <div class="col-md-9 bottommargin">
                <div class="feature-box fbox-plain fbox-dark">

                    <p>前後在網路公司及出版社擔任網頁設計師與美編，負責美術編輯及影片剪輯和特效製作<br>接觸Aftereffects、Final Cut Pro及Premiere<br>接觸php，並用php製作第一個自己的CRUD個人網站。</p>


                </div>
            </div>

            <div class="col-md-3 bottommargin">
                <div class="feature-box fbox-plain fbox-dark">

                    <h3 class="text-center aboutme-item-title">2017</h3>

                </div>
            </div>
            <div class="col-md-9 bottommargin">
                <div class="feature-box fbox-plain fbox-dark">

                    <p>六月份搬至台中，並在之後承接平面、影片及網頁設計外包<br>開始學習Laravel及Vue，並完成以Laravel製作的個人網站Version2.0</p>


                </div>
            </div>




            <div class="clear bottommargin-sm"></div>





        </div>

    </div>

@endsection


@section('content2')
@endsection
