@extends('template.home')
@section('title', 'Pedoman Prodi - ')
@section('content')
    @include('layout.home.page-title', [
        'page_title' => 'Pedoman ' ,
    ])
    @include('section.menu')
    <br>

    <div class="site-section" style="margin-bottom: 10%; margin-top: 2%">
        <div class="container">
            <div class="sec-title text-center">
                <div class="title" style="font-family: roboto">
                    <ul> 
                        {{ $jenis_pedoman->nama_jenis_pedoman }}
                    </ul>
                </div>
                <div class="dector thm-bg-clr center" style="width: auto; background-color: #0f1341" ></div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="content-box">
                        @php
                            $no = 1;
                        @endphp
                        <div class="planning-strategies-content">
                            @foreach ($list_pedoman as $pedoman)
                                @if ($pedoman->id_jenis_pedoman == $jenis_pedoman->id)
                                    <li>

                                        <p style="color: black">{{ $no++ }}.
                                            <a style="color: black; font-family: roboto"
                                                href="{{ url("public/$pedoman->file_word") }}">{{ $pedoman->nama_pedoman }}</a>
                                            | <a href="{{ url("public/$pedoman->file_pdf") }}"
                                                target="_blank">File PDF</a>
                                        </p>
                                    </li>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
