@extends('template.home')

@section('content')
    @include('section.menu')
    <style>
        .animate-charcter {
            text-transform: uppercase;
            background-image: linear-gradient(-225deg,
                    #000000 0%,
                    #000000 29%,
                    #fff 67%,
                    #7c068a 100%);
            background-size: auto auto;
            background-clip: border-box;
            background-size: 200% auto;
            color: #fff;
            background-clip: text;
            text-fill-color: transparent;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: textclip 4s linear infinite;
            display: inline-block;
            font-size: 40px;
            max-width: 100%;
        }

        @keyframes textclip {
            to {
                background-position: 200% center;
            }
        }

        .bg-image {
           
            filter: blur(100px);
            -webkit-filter: blur(100px);

            height: 100%;

            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            -webkit-background-composite: border;
        }
    </style>

    <!--Start rev slider wrapper-->
    <section class="rev_slider_wrapper">
        <div id="slider1" class="rev_slider" data-version="5.0">
            <ul style="height: 50%;">
                @foreach ($list_slide as $slide)
                    <li data-transition="fade">
                        <img src="{{ url("public/$slide->gambar") }}" data-bgfit="cover" class=".bg-image">
                        <div class="tp-caption" data-x="left" data-y="top" data-voffset="240" data-start="1000">
                            <div class="slide-content left-slide">
                                <h3 class="animate-charcter">
                                    <strong>
                                        {{ $slide->title }}
                                    </strong>
                                </h3>

                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>

    <section class="call-toaction-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <ul>
                        <li>
                            <div class="left-content float-left">
                                <div class="icon-holder">
                                    <span class="icon-computer thm-clr"></span>
                                </div>
                                <div class="title-holder">
                                    <h3>Junior Programmer</h3>
                                    <span class="thm-clr">Junior Programmer</span>
                                </div>
                            </div>
                            <div class="right-content float-right">
                                <div class="read-more-button">
                                    <div class="inner">
                                        <a href="#"><span class="icon-arrows"></span></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="left-content float-left">
                                <div class="icon-holder">
                                    <span class="icon-transport thm-clr"></span>
                                </div>
                                <div class="title-holder">
                                    <h3>Network Administrator</h3>
                                    <span class="thm-clr">Network Administrator</span>
                                </div>
                            </div>
                            <div class="right-content float-right">
                                <div class="read-more-button">
                                    <div class="inner">
                                        <a href="#"><span class="icon-arrows"></span></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="left-content float-left">
                                <div class="icon-holder">
                                    <span class="icon-layers thm-clr"></span>
                                </div>
                                <div class="title-holder">
                                    <h3>System Analyst</h3>
                                    <span class="thm-clr">System Analyst</span>
                                </div>
                            </div>
                            <div class="right-content float-right">
                                <div class="read-more-button">
                                    <div class="inner">
                                        <a href="#"><span class="icon-arrows"></span></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="choosing-area">
        <div class="container">
            <div class="sec-title text-center">
                <div class="title"> Berita Terkini</div>
                <div class="dector thm-bg-clr center"></div>
            </div>
            <div class="row">
                @foreach ($list_berita as $berita)
                    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                        <a href="{{ url("berita-show/$berita->id") }}">
                            <div class="single-choosing-item">
                                <div class="pic" style="height: 50%">
                                    <img style="object-fit: cover; position: static;"
                                        src="{{ url("public/$berita->gambar") }}" alt="Image" class="img-fluid">
                                </div>
                                <div class="text-holder">
                                    <p class="text" style="color: #000000; font-size: 20px; font-family: roboto">
                                        {{ $berita->nama_berita }}
                                    </p>
                                    <a class="readmore" href="{{ url("berita-show/$berita->id") }}">Read More</a>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="testimonial-area parallax-bg-one" style="background-image: url(public/home/images/bg_1.jpg);">
        <div id="particles-js"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="testimonial-outer">
                        <div class="client-testimonial-carousel owl-carousel owl-theme">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
