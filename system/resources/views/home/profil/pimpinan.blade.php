<x-home>
    @section('title', 'Profil Pimpinan Prodi - ')

    @include('section.page-title', [
        'page_title' => 'Profil Pimpinan',
    ])
    @include('section.menu')
    <br>
    <div class="site-section site-blocks-cover">
        <div class="container">
            <div class="row">
                @foreach ($kajur as $kajur)
                    <div class="col-md-6">
                        <br>
                        <div class="card">
                            <img src="{{ url("public/$kajur->foto") }}" class="card-img-top"
                                onerror="this.src='{{ url('public/app') }}/default-person.JPG';"
                                style="object-fit: cover; position: static; width: 100%; height: 500px;">
                            <div class="card-body">
                                <h5 class="card-title text-center" style="font-size: 26px;">
                                    {{ $kajur->jabatan }}
                                </h5>
                                <h5 class="card-title text-center" style="font-size: 16px;">
                                    {{ $kajur->nama_lengkap }},
                                    {{ $kajur->gelar_belakang }}
                                </h5>
                                <h5 class="card-title text-center" style="font-size: 16px;">
                                    {{ $kajur->nip }},

                                </h5>

                            </div>
                        </div>
                    </div>
                @endforeach

                 @foreach ($list_pimpinan as $pimpinan)
                  
                    <div class="col-md-6">
                        <br>
                        <div class="card">
                            <img src="{{ url("public/$pimpinan->foto") }}" class="card-img-top"
                                onerror="this.src='{{ url('public/app') }}/default-person.JPG';"
                                style="object-fit: cover; position: static; width: 100%; height: 500px;">
                            <div class="card-body">
                                <h5 class="card-title text-center" style="font-size: 26px;">
                                    {{ $pimpinan->jabatan }}
                                </h5>
                                <h5 class="card-title text-center" style="font-size: 16px;">
                                    {{ $pimpinan->nama_lengkap }},
                                    {{ $pimpinan->gelar_belakang }}
                                </h5>
                                <h5 class="card-title text-center" style="font-size: 16px;">
                                    {{ $pimpinan->nip }},

                                </h5>

                            </div>
                        </div>
                    </div>
                    
                @endforeach
            </div>
        </div>
    </div>



    @push('style')
        <style>
            .v-align-top {
                vertical-align: top;
            }
        </style>
    @endpush

    <br>
    <br>
    <br>
    <br>
</x-home>
