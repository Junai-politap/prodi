<x-home>
    @section('title', 'Lihat Berita Prodi - ')

    @include('section.page-title', [
        'page_title' => 'Lihat Berita',
    ])

    <style>
        .img {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        .text {
            text-align: left;
            font-family: roboto;
            font-size: 20px;
            color: black;
            text-indent: 50px;
            line-height: 155%;
        }
    </style>
    @include('section.menu')
    <section id="blog-area" class="blog-large-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12">
                    <div class="single-shop-content">
                        <div class="sec-title">
                            <p style="text-align: left; font-family: roboto; font-size: 24px; color: black">
                                <strong>
                                    {{ $berita->nama_berita }}
                                </strong>
                            </p>
                            <div class="left">
                                <p>Tanggal Kegiatan : {{ date('d-M-Y', strtotime($berita->tanggal_kegiatan)) }} </p>
                            </div>
                        </div>
                        <div class="row" style="margin-top:-5%;">
                            <div class="col-md-12">
                                <img src="{{ url("public/$berita->gambar") }}"
                                    onerror="this.src='{{ url('public/app/berita') }}/berita.jpg';"
                                    style="object-fit: cover; position: static; width: 100%; height: 400px;">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-md-12 mx-auto">
                                <div class="title">
                                    <p class="text">
                                        {!! nl2br($berita->detail) !!}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-8 col-md-7 col-sm-12 float-left">
                    <div class="sidebar-wrapper">
                        <div class="single-sidebar">
                            <div class="sec-title">
                                <h3>Berita Terbaru</h3>
                            </div>
                            <ul class="latest-product">
                                @foreach ($list_berita as $berita)
                                    @if ($berita->status == 1)
                                        <li>
                                            <div class="img-holder">
                                                 <img src="{{ url("public/$berita->gambar") }}"
                                                onerror="this.src='{{ url('public/app/berita') }}/berita.jpg';"
                                                style="object-fit: cover; position: static; width: 100%; height: 100px;">
                                                <div class="overlay-style-one">
                                                    <div class="box">
                                                        <div class="content">
                                                            <a href="{{ url("berita-show/$berita->id") }}"><i
                                                                    class="fa fa-link" aria-hidden="true"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="title-holder">
                                                <a href="{{ url("berita-show/$berita->id") }}">
                                                    <h4>{{ $berita->nama_berita }}</h4>
                                                </a>
                                                <h5>
                                                    {{ date('d-M-Y', strtotime($berita->tanggal_kegiatan)) }}
                                                </h5>

                                            </div>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </section>



    @push('script')
        <script>
            function changePicture(url) {
                $("#img-container").attr("src", url);
            }
        </script>
    @endpush

    @push('style')
        <style>
            .title {
                margin-top: 50px;
                font-size: 28px;
                color: black;
                font-weight: 800;
            }
        </style>
    @endpush
</x-home>
