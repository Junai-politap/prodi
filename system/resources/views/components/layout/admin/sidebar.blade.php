@php

    function checkRouteActive($route)
    {
        if (Route::current()->uri == $route) {
            return 'active';
        }
    }
@endphp
<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href="{{ url('admin') }}" class="brand-link">
        <img src="{{ url('public/admin') }}/logo.ico" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Teknologi Informasi</span>
    </a>

    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ url('public/admin') }}/logo.ico" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="{{ url('admin') }}" class="d-block"> Super Admin</a>
            </div>
        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">

                <li class="nav-item has-treeview menu-open">
                    <a href="{{ url('admin') }}" class="nav-link {{ checkRouteActive('admin/admin') }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-list"></i>
                        <p>
                            Master Data
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="{{ url('admin/pimpinan') }}"
                                class="nav-link {{ checkRouteActive('admin/pegawai') }}">
                                <i class="fa fa-minus nav-icon"></i>
                                <p>Pimpinan</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('admin/pegawai') }}" class="nav-link {{ checkRouteActive('admin/pegawai') }}">
                                <i class="fa fa-minus nav-icon"></i>
                                <p>Pegawai Prodi</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('admin/mahasiswa') }}"
                                class="nav-link {{ checkRouteActive('admin/mahasiswa') }}">
                                <i class="fa fa-minus nav-icon"></i>
                                <p>
                                    Mahasiswa
                                </p>
                            </a>

                        </li>

                        <li class="nav-item">
                            <a href="{{ url('admin/visi-misi') }}"
                                class="nav-link {{ checkRouteActive('admin/visi-misi') }}">
                                <i class="fa fa-minus nav-icon"></i>
                                <p>Visi & Misi</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('admin/lulusan') }}"
                                class="nav-link {{ checkRouteActive('admin/lulusan') }}">
                                <i class="fa fa-minus nav-icon"></i>
                                <p>Profil Lulusan</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-list"></i>
                        <p>
                            Akademik
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('admin/kurikulum') }}"
                                class="nav-link {{ checkRouteActive('admin/kurikulum') }}">
                                <i class="fa fa-minus nav-icon"></i>
                                <p>Kurikulum</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('admin/akreditasi') }}"
                                class="nav-link {{ checkRouteActive('admin/akreditasi') }}">
                                <i class="fa fa-minus nav-icon"></i>
                                <p>Akreditasi</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/pedoman') }}"
                                class="nav-link {{ checkRouteActive('admin/pedoman') }}">
                                <i class="fa fa-minus nav-icon"></i>
                                <p>Pedoman</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('admin/fasilitas') }}"
                                class="nav-link {{ checkRouteActive('admin/fasilitas') }}">
                                <i class="fa fa-minus nav-icon"></i>
                                <p>Fasilitas</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('admin/pelayanan') }}"
                                class="nav-link {{ checkRouteActive('admin/pelayanan') }}">
                                <i class="fa fa-minus nav-icon"></i>
                                <p>Pelayanan</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-database"></i>
                        <p>
                            Project
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="{{ url('admin/pbl') }}" class="nav-link {{ checkRouteActive('admin/pbl') }}">
                                <i class="fa fa-minus nav-icon"></i>
                                <p>PBL</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('admin/tugas-akhir') }}"
                                class="nav-link {{ checkRouteActive('admin/tugas-akhir') }}">
                                <i class="fa fa-minus nav-icon"></i>
                                <p>
                                    Tugas Akhir
                                </p>
                            </a>

                        </li>

                        <li class="nav-item">
                            <a href="{{ url('admin/penelitian') }}"
                                class="nav-link {{ checkRouteActive('admin/penelitian-dosen') }}">
                                <i class="fa fa-minus nav-icon"></i>
                                <p>Penelitian Dosen</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ url('admin/pengabdian') }}"
                                class="nav-link {{ checkRouteActive('admin/pengabdian-dosen') }}">
                                <i class="fa fa-minus nav-icon"></i>
                                <p>Pengabdian Dosen</p>
                            </a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="{{ url('admin/form') }}" class="nav-link {{ checkRouteActive('admin/form') }}">
                        <i class="nav-icon fa fa-industry"></i>
                        <p>
                            Tracer Study
                        </p>
                    </a>
                </li>

                {{-- <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-plus-square"></i>
                        <p>
                            Laporan Tracer
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa fa-check nav-icon"></i>
                                <p>
                                    Bekerja
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ url('admin/laporan-tracer/bekerja/masa-tunggu') }}" class="nav-link">
                                        <i class="fa fa-minus nav-icon"></i>
                                        <p>Masa Tunggu</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('admin/laporan-tracer/bekerja/kategori-pekerjaan') }}" class="nav-link">
                                        <i class="fa fa-minus nav-icon"></i>
                                        <p>Kategori Pekerjaan</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('admin/laporan-tracer/bekerja/pendapatan-pertama') }}" class="nav-link">
                                        <i class="fa fa-minus nav-icon"></i>
                                        <p> Pendapatan Pertama</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('admin/laporan-tracer/bekerja/jenis-pekerjaan') }}" class="nav-link">
                                        <i class="fa fa-minus nav-icon"></i>
                                        <p> Jenis Pekerjaan</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('admin/laporan-tracer/bekerja/kesesuaian') }}" class="nav-link">
                                        <i class="fa fa-minus nav-icon"></i>
                                        <p> Kesesuian</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('admin/laporan-tracer/bekerja/cara-mendapatkan-pekerjaan') }}" class="nav-link">
                                        <i class="fa fa-minus nav-icon"></i>
                                        <p> Cara Mendapatkan <br>Info Lowongan</p>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="fa fa-check nav-icon"></i>
                                <p>
                                    Wirausaha
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ url('admin/laporan-tracer/wirausaha/posisi-jabatan') }}" class="nav-link">
                                        <i class="fa fa-minus nav-icon"></i>
                                        <p>Posisi/Jabatan</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('admin/laporan-tracer/wirausaha/pendapatan-pertama') }}" class="nav-link">
                                        <i class="fa fa-minus nav-icon"></i>
                                        <p>Pendapatan Pertama</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('admin/laporan-tracer/wirausaha/masa-tunggu') }}" class="nav-link">
                                        <i class="fa fa-minus nav-icon"></i>
                                        <p> Masa Tunggu</p>
                                    </a>
                                </li>
                               
                                <li class="nav-item">
                                    <a href="{{ url('admin/laporan-tracer/wirausaha/kesesuaian') }}" class="nav-link">
                                        <i class="fa fa-minus nav-icon"></i>
                                        <p> Kesesuian</p>
                                    </a>
                                </li>
                                
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa fa-check nav-icon"></i>
                                <p>
                                    Studi Lanjut
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ url('admin/laporan-tracer/studi-lanjut/jenjang-studi-lanjut') }}" class="nav-link">
                                        <i class="fa fa-minus nav-icon"></i>
                                        <p>Jenjang Studi Lanjut</p>
                                    </a>
                                </li>

                                
                                <li class="nav-item">
                                    <a href="{{ url('admin/laporan-tracer/studi-lanjut/alasan-studi-lanjut') }}" class="nav-link">
                                        <i class="fa fa-minus nav-icon"></i>
                                        <p>Alasan Studi Lanjut</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('admin/laporan-tracer/studi-lanjut/biaya') }}" class="nav-link">
                                        <i class="fa fa-minus nav-icon"></i>
                                        <p>Pembiayaan</p>
                                    </a>
                                </li>
                               
                               
                            </ul>
                        </li>

                    </ul>
                </li> --}}
                
                <li class="nav-item has-treeview">
                    <a href="{{ url('admin/survei') }}" class="nav-link {{ checkRouteActive('admin/survei') }}">
                        <i class="nav-icon fa fa-file"></i>
                        <p>
                            Laporan Survei
                        </p>
                    </a>
                </li>

                <li class="nav-item has-treeview">
                    <a href="{{ url('admin/berita') }}" class="nav-link {{ checkRouteActive('admin/berita') }}">
                        <i class="nav-icon fa fa-newspaper"></i>
                        <p>
                            Berita
                        </p>
                    </a>

                </li>
                <li class="nav-item has-treeview">
                    <a href="{{ url('admin/slide') }}" class="nav-link {{ checkRouteActive('admin/slide') }}">
                        <i class="nav-icon fa fa-home"></i>
                        <p>
                            Home Base
                        </p>
                    </a>

                </li>

                <li class="nav-item has-treeview">
                    <a onclick="return confirm('Apakah Anda Yakin Ingin Keluar?')" href="{{ url('logout') }}"
                        class="nav-link {{ checkRouteActive('admin/logout') }}">
                        <i class="nav-icon fa fa-arrow-circle-left"></i>
                        <p>
                            Loguot
                        </p>
                    </a>

                </li>
            </ul>
        </nav>
    </div>
</aside>
