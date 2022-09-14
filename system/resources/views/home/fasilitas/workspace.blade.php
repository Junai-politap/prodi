@extends('template.home')
@section('title', 'Workshop Prodi - ')
@section('content')
    @include('layout.home.page-title', [
        'page_title' => 'Workshop',
    ])
    @include('section.menu')

    <section class="choosing-area">
        <div class="container">
            <div class="sec-title text-center">
                <div class="title"> Data Ruangan Workshop</div>
                <div class="dector thm-bg-clr center"></div>
            </div>
            <div class="row">
                @foreach ($list_fasilitas->where('jenis_fasilitas', 'Workspace') as $fasilitas)
                    <a href="{{ url("show-workshop/$fasilitas->id") }}">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                            <div class="single-choosing-item">
                                <div class="pic" style="height: 100%">
                                    <img style="object-fit: cover; position: static;"
                                        src="{{ url("public/$fasilitas->foto") }}"">
                                </div>
                                <div class="text-holder">
                                    <p style="color: black; font-size: 100%; text-align: center">
                                        {{ $fasilitas->nama_fasilitas }}
                                    </p>
                                    <a class="readmore" href="{{ url("show-workshop/$fasilitas->id") }}">Detail</a>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
            <hr>
            <div class="approach-content-box">
                <div class="sec-title">
                    <h2>Detail Fasilitas</h2>

                </div>
                <div class="row">
                    @foreach ($list_fasilitas->where('jenis_fasilitas', 'Workspace') as $fasilitas)
                        <div class="col-xl-12">
                            <div class="text">

                            </div>
                            <div class="accordion-holder style-one">
                                <article class="accordion">
                                    <div class="acc-btn">
                                        <div class="toggle-icon"><span class="icon-layers"></span></div>
                                        <h3>{{ $fasilitas->nama_fasilitas }}</h3>
                                    </div>
                                    <div class="acc-content">
                                        <div class="inner">
                                            <p>
                                                {!! nl2br($fasilitas->detail_fasilitas) !!}
                                            </p>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
