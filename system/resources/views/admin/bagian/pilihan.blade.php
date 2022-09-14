@extends('template.admin')
@section('title', 'SIAKAD TEKNIK INFORMATIKA - Admin')
@section('content')
    @include('section.notif')

    <div class="card">

        <div class="card-header">
            <h3 class="card-title"><strong> Data Pilihan {{ $jawaban->jawaban }}</strong></h3>

            <button class="btn btn-primary float-right" data-toggle="modal" data-target="#modal-md"><span
                    class="fa fa-plus"></span> Buat Soal</button>
        </div>
        <div class="header">
            <a href="{{ url('page-form') }}" class="btn btn-info"><span class="fa fa-arrow-left"></span> Kembali</a>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 30%">Aksi</th>
                        <th class="text-center" style="width: 45%">Nama</th>
                        <th class="text-center">Pilihan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($list_pilihan as $pilihan)
                        @if ($pilihan->id_jawaban == '971ae197-887f-4fd9-9f89-0f8db794e109')
                            <tr>
                                <td class="text-center">
                                    <div class="btn-group">
                                        <button class="btn btn-default" data-toggle="modal"
                                            data-target="#modal-jawaban{{ $pilihan->id }}"><span
                                                class="fa fa-list-ul "></span>
                                            Buat Pilihan
                                        </button>
                                        <div class="modal fade" id="modal-jawaban{{ $pilihan->id }}">
                                            <div class="modal-dialog modal-md">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Buat Pilihan jawaban</h4>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form class="form-horizontal" action="{{ url('store-jawaban') }}"
                                                        method="post" enctype="multipart/form-data">
                                                        @csrf

                                                        <div class="modal-body">
                                                            <div class="card-body">
                                                                <input type="text" class="form-control" name="id_jawaban"
                                                                    value="{{ $pilihan->id }}" hidden>
                                                                <div class="form-group row">
                                                                    <label class="col-sm-3 col-form-label">Pilihan
                                                                    </label>
                                                                    <div class="col-sm-9">
                                                                        <input type="text" name="jawaban"
                                                                            class="form-control" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer justify-content-between">
                                                            <button type="button" class="btn btn-default"
                                                                data-dismiss="modal"><span class="fa fa-times"></span>
                                                                Close</button>
                                                            <button class="btn btn-primary"><span class="fa fa-save"></span>
                                                                Simpan</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>


                                        <button class="btn btn-warning" data-toggle="modal"
                                            data-target="#modal-edit{{ $pilihan->id }}"><span class="fa fa-edit"></span>
                                            Edit</button>

                                        <div class="modal fade" id="modal-edit{{ $pilihan->id }}">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Edit jawaban</h4>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form class="form-horizontal"
                                                        action="{{ url('update-jawaban', $pilihan->id) }}" method="post">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="modal-body">
                                                            <div class="card-body">
                                                                <div class="form-group row">
                                                                    <label class="col-sm-3 col-form-label">jawaban
                                                                    </label>
                                                                    <div class="col-sm-9">
                                                                        <textarea name="jawaban" class="form-control" rows="5">{{ $pilihan->jawaban }}</textarea>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer justify-content-between">
                                                            <button type="button" class="btn btn-default"
                                                                data-dismiss="modal"><span class="fa fa-times"></span>
                                                                Close</button>
                                                            <button class="btn btn-primary"><span class="fa fa-save"></span>
                                                                Simpan</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </td>
                                <td class="text">{{ $pilihan->soal }}</td>
                                {{-- <td>
                                    @foreach ($list_pilihan as $pilihan)
                                        @if ($pilihan->id_jawaban == $jawaban->id)
                                            <li class="mt-2">
                                                <a href="" data-toggle="modal"
                                                    data-target="#modal-jawaban{{ $pilihan->id }}">
                                                    {{ $pilihan->jawaban }}
                                                </a>
                                                <div class="modal fade" id="modal-jawaban{{ $pilihan->id }}">
                                                    <div class="modal-dialog modal-md">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">Edit Jawaban</h4>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <form class="form-horizontal"
                                                                action="{{ url('update-jawaban', $pilihan->id) }}" method="post">
                                                                @csrf
                                                                @method('PUT')
                                                                <div class="modal-body">
                                                                    <div class="card-body">
                                                                        <div class="form-group row">
                                                                            <label class="col-sm-3 col-form-label">Jawaban
                                                                            </label>
                                                                            <div class="col-sm-9">
                                                                                <input type="text" class="form-control"
                                                                                    name="jawaban" value="{{ $pilihan->jawaban }}">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer justify-content-between">
                                                                    <button type="button" class="btn btn-default"
                                                                        data-dismiss="modal"><span class="fa fa-times"></span>
                                                                        Close</button>
                                                                    <button class="btn btn-primary"><span class="fa fa-save"></span>
                                                                        Simpan</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                @if ($pilihan->id_jawaban == '97069d29-bd4b-40c8-95a2-a13693248578')
                                                    
                                                <a href="" class="btn btn-primary" style="margin-left: 10%;"><span class="fa fa-plus"></span> Buat jawaban</a>
                                                @endif
                                            </li>
                                            
                                        @endif
                                    @endforeach
                                </td> --}}

                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


    <div class="modal fade" id="modal-md">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Data</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="form-horizontal" action="{{ url('store-pilihan') }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="card-body">
                            <input type="text" value="{{ $jawaban->id }}" name="id_jawaban" hidden>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Soal </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Masukan Soal "
                                        name="soal">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal"><span
                                class="fa fa-times"></span> Close</button>
                        <button class="btn btn-primary"><span class="fa fa-save"></span> Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
