<x-admin>
    
    <div class="card"><br>
        <div class="header">
            <a href="{{ url('admin/pegawai') }}" class="btn btn-info"><span class="fa fa-arrow-left"></span>
                Kembali</a>
        </div>
        <div class="row mt-3">
            <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="card-body text-center">
                        @if ($pegawai->foto == $pegawai->foto)
                            <img style="width: 100%" src="{{ url("public/$pegawai->foto") }}"
                                onerror="this.src='{{ url('public/app') }}/default-person.JPG';"
                                class="rounded">
                        @endif
                        <h2 class="my-3">{{ $pegawai->nama_lengkap }}, {{ $pegawai->gelar_belakang }}</h2>
                        <h4 class="my-3">{{ $pegawai->jabatan }}</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-5">
                                <p class="mb-0">NIP</p>
                            </div>
                            <div class="col-sm-7">
                                <p class="text-muted mb-0">{{ $pegawai->nip }}</p>
                            </div>
                        </div>
                        <hr>

                        <div class="row">
                            <div class="col-sm-5">
                                <p class="mb-0">Jenis Kelamin</p>
                            </div>
                            <div class="col-sm-7">
                                <p class="text-muted mb-0">{{ $pegawai->jenis_kelamin }}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-5">
                                <p class="mb-0">Agama</p>
                            </div>
                            <div class="col-sm-7">
                                <p class="text-muted mb-0">{{ $pegawai->agama }}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-5">
                                <p class="mb-0">Tempat, Tanggal Lahir</p>
                            </div>
                            <div class="col-sm-7">
                                <p class="text-muted mb-0">{{ $pegawai->tempat_lahir }},
                                    {{ date('d-m-Y', strtotime($pegawai->tanggal_lahir)) }}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-5">
                                <p class="mb-0">Alamat</p>
                            </div>
                            <div class="col-sm-7">
                                <p class="text-muted mb-0">{{ $pegawai->alamat }}</p>
                            </div>
                        </div>
                        <hr>
                        
                        <div class="row">
                            <div class="col-sm-5">
                                <p class="mb-0">No Hp</p>
                            </div>
                            <div class="col-sm-7">
                                <p class="text-muted mb-0">{{ $pegawai->hp }}</p>
                            </div>
                        </div>
                        <hr>
                       
                        <div class="row">
                            <div class="col-sm-5">
                                <p class="mb-0">Email</p>
                            </div>
                            <div class="col-sm-7">
                                <p class="text-muted mb-0">{{ $pegawai->email }}</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-admin>
