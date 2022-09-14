<section class="top-bar-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="top-bar clearfix">
                    <div class="top-left-content clearfix float-left">
                        <p><span class="fa fa-graduation-cap"></span>Selamat Datang di Prodi Teknologi Informasi</a></p>
                    </div>
                   
                </div>    
            </div>
        </div>
    </div>
</section>
<header class="header-area stricky">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="inner-content clearfix">
                    <div class="header-left float-left" style="width: 17%;">
                        <div class="logo" >
                            <a href="{{ url('/') }}">
                                <img src="{{ url('public/home') }}/bg.jpg">
                            </a>
                        </div>
                    </div>
                    <div class="header-middle clearfix float-left">
                        <nav class="main-menu clearfix float-left">
                            <div class="navbar-header clearfix">   	
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation clearfix">
                                    <li class="current" style="color: black"><a href="{{ url('/') }}">Dashboard</a></li>
                                    
                                    <li class="dropdown"><a href="#">Profil</a>
                                        <ul>
                                            <li><a href="{{ url('profil-pimpinan') }}"> Pimpinan</a></li>
                                            <li><a href="{{ url('profil-dosen') }}"> Dosen</a></li>
                                            <li><a href="{{ url('profil-staff') }}"> Teknisi / Administrasi</a></li>
                                            <li><a href="{{ url('profil-lulusan') }}"> Profil Lulusan</a></li>
                                            <li><a href="{{ url('visi-misi') }}"> Visi & Misi</a></li>
                                            
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Akademik</a>
                                        <ul>
                                            <li><a href="{{ url('kurikulum') }}"> Kurikulum</a></li>
                                            <li><a href="{{ url('akreditasi') }}"> Akreditasi</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="blog.html">Pelayanan</a>
                                        <ul>
                                            @yield('menu')
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Pedoman</a>
                                        <ul>
                                            @yield('pedoman')
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Fasilitas</a>
                                        <ul>
                                            <li><a href="{{ url('workspace') }}"> Workspace</a>
                                               
                                            </li>
                                            <li><a href="{{ url('ruang-riset') }}"> Research and Development</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Project</a>
                                        <ul>
                                            <li><a href="{{ url('#') }}"> PBL</a></li>
                                            <li><a href="{{ url('#') }}"> Tugas Akhir</a></li>
                                            <li><a href="{{ url('#') }}"> Penelitian Dosen</a></li>
                                            <li><a href="{{ url('#') }}"> Pengabdian Dosen</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ url('berita') }}">Berita</a></li>
                                    
                                </ul>
                            </div>
                        </nav>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</header> 