<x-home>
@section('title', 'Survei Kepuasan Prodi - ')

    @include('section.page-title', [
        'page_title' => 'Survei Kepuasan',
    ])
    @include('section.menu')

    <section class="choosing-area">
        <div class="container">
            {{-- <div class="sec-title text-center">
                <div class="title"> Survei Kepuasan Prodi Teknologi Informasi</div>
                <div class="dector thm-bg-clr center"></div>
            </div> --}}
            <div class="row">

                <div class="col-md-4 col-sm-12">
                    <div class="single-choosing-item">
                        <div class="top">
                            <div class="title-holder float-left">
                                <h3>Survei Kepuasan <br> Tenaga Pendidik/Dosen</h3>
                            </div>
                            <div class="icon-holder float-right">
                                <span class="icon-business2"></span>
                            </div>
                        </div>
                        <div class="text-holder">
                            <p>

                            </p>
                            <a class="readmore" href="{{ url('pelayanan/survei-kepuasan-dosen') }}"> Detail </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="single-choosing-item">
                        <div class="top">
                            <div class="title-holder float-left">
                                <h3>Survei Kepuasan <br> Tenaga Pendidik/Teknisi</h3>
                            </div>
                            <div class="icon-holder float-right">
                                <span class="icon-business2"></span>
                            </div>
                        </div>
                        <div class="text-holder">
                            <p>

                            </p>
                            <a class="readmore" href="{{ url('pelayanan/survei-kepuasan-teknisi') }}"> Detail </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-12">
                    <div class="single-choosing-item">
                        <div class="top">
                            <div class="title-holder float-left">
                                <h3>Survei Kepuasan <br> Mahasiswa</h3>
                            </div>
                            <div class="icon-holder float-right">
                                <span class="icon-business2"></span>
                            </div>
                        </div>
                        <div class="text-holder">
                            <p>

                            </p>
                            <a class="readmore" href="{{ url('pelayanan/survei-kepuasan-mahasiswa') }}"> Detail </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-12">
                    <div class="single-choosing-item">
                        <div class="top">
                            <div class="title-holder float-left">
                                <h3>Data Tracer <br> Study</h3>
                            </div>
                            <div class="icon-holder float-right">
                                <span class="icon-business2"></span>
                            </div>
                        </div>
                        <div class="text-holder">
                            <p>

                            </p>
                            <a class="readmore" href="{{ url('pelayanan/tracer-study') }}"> Detail </a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-12">
                    <div class="single-choosing-item">
                        <div class="top">
                            <div class="title-holder float-left">
                                <h3>Survei Kepuasan <br> Pengguna</h3>
                            </div>
                            <div class="icon-holder float-right">
                                <span class="icon-business2"></span>
                            </div>
                        </div>
                        <div class="text-holder">
                            <p>

                            </p>
                            <a class="readmore" href="{{ url('pelayanan/survei-kepuasan-pengguna') }}"> Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    <br>
    <br>
    <br>
    <br>
</x-home>
