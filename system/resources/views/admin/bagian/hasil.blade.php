@extends('template.admin')
@section('title', 'SIAKAD TEKNIK INFORMATIKA - Admin')
@section('content')
    @include('section.notif')

    <div class="card">
        <div class="card-header">
            <h1 class="text-center">
                <strong>Data Hasil Survey </strong>
            </h1>

        </div>

        <div class="card-body">
           
            <div class="row">
                @foreach ($list_mahasiswa->groupBy('tahun_masuk') as $mahasiswa => $val)
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>
                                    Tahun Angkatan {{ $mahasiswa }}
                                </h3>
                               
                                {{-- <p>Jumlah {{ $mahasiswa->sum() }}</p> --}}
                            </div><br>
                            <div class="icon">
                                <i class="ion ion-bag"></i>
                            </div>
                            <a href="#" class="small-box-footer">Detail 
                                <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endsection
