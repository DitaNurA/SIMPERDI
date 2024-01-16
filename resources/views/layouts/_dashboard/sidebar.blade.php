<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home') }}">
       
        <div class="sidebar-brand-text mx-3">
            <br><img src="{{ asset('/images/logo.png') }}" width="230" height="95" class="d-inline-block align-top" alt="" >
        </div> 
    </a>
    <br><br>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('home') }}">
            <i class="fas fa-fw fa-home"></i>
            <span style="font-size:16px; font-family:Georgia;">HOME</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-list"></i>
            <span style="font-size:16px; font-family:Georgia;">MASTER DATA</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('kelola_akun') }}">1. Kelola Akun</a>
                <a class="collapse-item" href="{{ route('kelola_jabatan') }}">2. Data Jabatan</a>
                <a class="collapse-item" href="{{ route('kelola_kepala_dinas') }}">3. Data Kepala Dinas</a>
                <a class="collapse-item" href="{{ route('kelola_pegawai') }}">4. Data Pegawai</a>
                <a class="collapse-item" href="{{ route('kelola_dokument') }}">5. Tanda Tangan Dokumen</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSurat"
            aria-expanded="true" aria-controls="collapseMessage">
            <i class="fas fa-fw fa-cogs"></i>
            <span style="font-size:16px; font-family:Georgia;">SURAT TUGAS</span>
        </a>
        <div id="collapseSurat" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('kelola_surattugas') }}"># SPT Luar Daerah</a>
                <a class="collapse-item" href="{{ route('cetak_surattugas') }}"># Cetak SPT Luar Daerah</a>
                <a class="collapse-item" href="{{ route('kelola_surattugasdalam') }}"># SPT Dalam Daerah</a>
                <a class="collapse-item" href="{{ route('cetak_surattugasdalam') }}"># Cetak SPT Dalam Daerah</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSppd"
            aria-expanded="true" aria-controls="collapseSetting">
            <i class="fas fa-fw fa-cogs"></i>
            <span style="font-size:16px; font-family:Georgia;">SURAT SPPD</span>
        </a>
        <div id="collapseSppd" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('kelola_sppd') }}"># SPPD Luar Daerah</a>
                <a class="collapse-item" href="{{ route('cetak_sppd') }}"># Cetak SPPD Luar Daerah</a>
                <a class="collapse-item" href="{{ route('kelola_sppd_dalam') }}"># SPPD Dalam Daerah</a>
                <a class="collapse-item" href="{{ route('cetak_surat_sppd_dalam') }}"># Cetak SPPD Dalam Daerah</a>
                
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBiaya"
            aria-expanded="true" aria-controls="collapseBiaya">
            <i class="fas fa-fw fa-cogs"></i>
            <span style="font-size:16px; font-family:Georgia;">DATA BIAYA</span>
        </a>
        <div id="collapseBiaya" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('uang_harian') }}"># Uang harian</a>
                <a class="collapse-item" href="{{ route('biaya_represantasi') }}"># Uang Representasi</a>
                <a class="collapse-item" href="{{ route('biaya_hotel') }}"># Biaya Penginapan</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseRincian"
            aria-expanded="true" aria-controls="collapseRincian">
            <i class="fas fa-fw fa-cogs"></i>
            <span style="font-size:16px; font-family:Georgia;">RINCIAN SPPD</span>
        </a>
        <div id="collapseRincian" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{ route('kelola_rincian_sppd') }}">RincianSPPD Luar</a>    
            <a class="collapse-item" href="{{ route('rincian_sppd_cetak') }}">Cetak RincianSPPD Luar</a>
            <a class="collapse-item" href="{{ route('kelola_rincian_sppd_dalam') }}">RincianSPPD Dalam</a>    
            <a class="collapse-item" href="{{ route('rincian_sppd_cetak_dalam') }}">Cetak RincianSPPD Dalam</a>
                
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCetak"
            aria-expanded="true" aria-controls="collapseCetak">
            <i class="fas fa-fw fa-cogs"></i>
            <span style="font-size:16px; font-family:Georgia;">RINCIAN SPJ</span>
        </a>
        <div id="collapseCetak" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="{{ route('kelola_spj') }}"># SPJ Luar Daerah</a>    
            <a class="collapse-item" href="{{ route('cetak_spj') }}"># Cetak SPJ Luar Daerah</a>
            <a class="collapse-item" href="{{ route('kelola_spj_dalam') }}"># SPJ Dalam Daerah</a> 
            <a class="collapse-item" href="{{ route('cetak_spj_dalam') }}"># Cetak SPJ Dalam Daerah</a>
                
            </div>
        </div>
    </li>

    
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
