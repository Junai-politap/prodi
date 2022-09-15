@extends('template.admin')
@section('title', 'SIAKAD TEKNIK INFORMATIKA - Admin')
@section('content')
    @include('section.notif')

    <div class="card">
        <div class="card-header">
            <h1 class="text-center">
                <strong>Data Hasil Survey {{ $bagian->nama }} {{ $bagian->title }} </strong>
            </h1>

        </div>

        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th class="text-center"> No</th>
                        <th class="text-center">Soal</th>
                        <th class="text-center">Sangat Besar</th>
                        <th class="text-center">Besar</th>
                        <th class="text-center">Cukup Besar</th>
                        <th class="text-center">Kurang</th>
                        <th class="text-center">Tidak Sama Sekali</th>
                    </tr>
                </thead>
                @php
                    $no=1;
                @endphp
                <tbody>
                    @foreach ($list_soal as $soal)
                        <tr>
                            @if ($soal->id_bagian == $bagian->id)
                                <td>{{ $no++; }}</td>
                                <td>{{ $soal->soal }}</td>
                            @endif
                        </tr>
                    @endforeach



                </tbody>
            </table>
        </div>
    @endsection
