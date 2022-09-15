@extends('template.mahasiswa')

@section('title', 'SIAKAD TEKNIK INFORMATIKA | MAHASISWA')

@section('content')
    @include('section.mahasiswa')
    <section class="app-content">
        <div class="row">
            <div class="col-md-12">
                <br>
                @include('section.form')
                <div class="col-md-12">
                    <div class="widget"><br>

                        @if ($mahasiswa->status_tracing_2 == 0)
                            <header class="widget-header"><br>
                                <h4 class="widget-title">
                                    @foreach ($list_bagian->where('id', '96ae23fb-bb9c-4e75-81ac-6c5816ea0db5') as $bagian)
                                        <h1>{{ $bagian->nama }} - {{ $bagian->title }}</h1>
                                    @endforeach
                                </h4>
                            </header>
                            <hr class="widget-separator">
                            <div class="container">
                                <form action="{{ url('store-form-II') }}" method="post">
                                    @csrf
                                    <input name="id_mahasiswa" value="{{ $mahasiswa->id }}" type="hidden">

                                    @foreach ($list_soal->where('id_bagian', '96ae23fb-bb9c-4e75-81ac-6c5816ea0db5') as $soal)
                                        <div class="form-group">

                                            <input name="id_soal" value="{{ $soal->id }}" class="form-control" type="hidden">
                                            <input name="id_bagian" value="{{ $soal->bagian->id }}" class="form-control" type="hidden">

                                            <div class="col-lg-12 news_posts news_post_top d-flex flex-column ">
                                                <div class="news_posts"> <br>
                                                    <div class="news_post_top d-flex flex-column flex-sm-row">
                                                        <div class="news_post_date_container">
                                                            <div
                                                                class="news_post_date d-flex flex-column align-items-center justify-content-center">
                                                                <div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        {{-- No 1 --}}
                                                        <div class="news_post_title_container">

                                                            <div class="news_post_title text-dark">
                                                                <h4>{{ $loop->iteration }}. {{ $soal->soal }}</h4>

                                                            </div>
                                                            @foreach ($list_jawaban->where('id_soal', $soal->id) as $jawaban)
                                                                <div class="form-group" style="margin-left: 2%">
                                                                    <div class="radio">
                                                                        <input type="radio"
                                                                            name="jawaban[{{ $soal->id }}]"
                                                                            value="{{ $jawaban->id }}"
                                                                            class="form-check-input" required>
                                                                        <label>{{ $jawaban->jawaban }}</label>
                                                                    </div>
                                                                </div>
                                                            @endforeach

                                                        </div>
                                                        {{-- End No 1 --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                    <div class="form-group">
                                        <button class="btn btn-primary text-white btn-center"
                                            onclick="return confirm('Apakah Anda Yakin Ingin Menyimpan Data Ini?')">
                                            <i class="fa fa-save"></i>
                                            Simpan
                                        </button>
                                    </div>
                                </form>
                            </div>
                        @endif
                    </div>


                    @if ($mahasiswa->status_tracing == 1)
                        <div class="alert alert-success alert-block text-center">
                            <p style="font-family: roboto; font-size: 40px;">Terima Kasih Anda Telah Melakukan Survei</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <script>
        function Check1() {
            var radio = document.getElementById("myCheck");
            var text = document.getElementById("text");
            if (radio.checked == true) {
                text.style.display = "block";
            } else {
                text.style.display = "none";
            }
        }

        function Check2() {
            var radio = document.getElementById("myCheck2");
            var text = document.getElementById("text2");
            if (radio.checked == true) {
                text.style.display = "block";
            } else {
                text.style.display = "none";
            }
        }

        function Check3() {
            var radio = document.getElementById("myCheck3");
            var text = document.getElementById("text3");
            if (radio.checked == true) {
                text.style.display = "block";
            } else {
                text.style.display = "none";
            }
        }

        function Check4() {
            var radio = document.getElementById("myCheck4");
            var text = document.getElementById("text4");
            if (radio.checked == true) {
                text.style.display = "block";
            } else {
                text.style.display = "none";
            }
        }
    </script>

@endsection
