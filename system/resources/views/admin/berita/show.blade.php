<x-admin>
    @section('title', 'SIAKAD TEKNIK INFORMATIKA - Admin')

    <div class="card card-solid">
        <div class="card-body">
            <div class="row">
                @csrf
                <div class="col-12 col-sm-6">
                    <h3 class="d-inline-block d-sm-none"></h3>
                    <div class="col-12">
                        <img src="{{ url("public/$berita->gambar") }}"
                            onerror="this.src='{{ url('public/app/berita') }}/berita.jpg';"
                            style="object-fit: cover; position: static; width: 100%;">
                    </div>

                </div>
                <div class="col-12 col-sm-6">
                    <h3 class="my-3">{{ $berita->nama_berita }}</h3>
                    <hr>
                    <h3 class="my-3"> Tanggal Kegiatan : {{ date('d-M-Y', strtotime($berita->tanggal_kegiatan)) }}
                    </h3>
                    <hr>

                    <p>
                        {!! nl2br($berita->detail) !!}
                    </p>
                    <hr>
                </div>
            </div>
        </div>
    </div>

</x-admin>
