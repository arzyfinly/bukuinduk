<!-- Sidebar -->
<div class="sidebar sidebar-style-2">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="{{ asset('assets/img/smp1.png') }}" alt="..." class="avatar-img">
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            {{ auth()->user()->name }}
                            <span class="user-level">Administrator</span>
                        </span>
                    </a>
                    <div class="clearfix"></div>
                </div>
            </div>
            <ul class="nav nav-success">
                <li class="nav-item {{ request()->is('home') ? 'active' : '' }}">
                    <a href="{{ route('home') }}">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                @if (auth()->user()->role == 1)
                    <li class="nav-section">
                        <span class="sidebar-mini-icon">
                            <i class="fa fa-ellipsis-h"></i>
                        </span>
                        <h4 class="text-section">Fitur</h4>
                    </li>
                    <!-- <li class="nav-item{{ request()->is('user*') ? ' active' : '' }}">-->
                    <!--    <a href="{{ route('user.index') }}">-->
                    <!--        <i class="fas fa-users"></i>-->
                    <!--        <p>Manajemen User</p>-->
                    <!--    </a>-->
                    <!--</li>-->
                    <li
                        class="nav-item{{ request()->is('agama*') || request()->is('jenis-pns*') || request()->is('jurusan*') || request()->is('mapel*') || request()->is('jabatan*') ? ' active submenu' : '' }}">
                        <a data-toggle="collapse" href="#master">
                            <i class="fas fa-layer-group"></i>
                            <p>Master</p>
                            <span class="caret"></span>
                        </a>
                        <div class="collapse{{ request()->is('agama*') || request()->is('jenis-pns*') || request()->is('jurusan*') || request()->is('mapel*') || request()->is('jabatan*') ? ' show' : '' }}"
                            id="master">
                            <ul class="nav nav-collapse">
                                <li class="{{ request()->is('agama*') ? 'active' : '' }}">
                                    <a href="{{ route('agama.index') }}">
                                        <span class="sub-item">Agama</span>
                                    </a>
                                </li>
                                <li class="{{ request()->is('jenis-pns*') ? 'active' : '' }}">
                                    <a href="{{ route('jenis-pns.index') }}">
                                        <span class="sub-item">Jenis PNS</span>
                                    </a>
                                </li>
                                <li class="{{ request()->is('jurusan*') ? 'active' : '' }}">
                                    <a href="{{ route('jurusan.index') }}">
                                        <span class="sub-item">Jurusan</span>
                                    </a>
                                </li>
                                <li class="{{ request()->is('jabatan*') ? 'active' : '' }}">
                                    <a href="{{ route('jabatan.index') }}">
                                        <span class="sub-item">Jabatan</span>
                                    </a>
                                </li>
                                <li class="{{ request()->is('mapel*') ? 'active' : '' }}">
                                    <a href="{{ route('mapel.index') }}">
                                        <span class="sub-item">Mapel</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item{{ request()->is('data-pegawai*') ? ' active' : '' }}">
                        <a href="{{ route('data-pegawai.index') }}">
                            <i class="fas fa-user-friends"></i>
                            <p>Data Pegawai</p>
                        </a>
                    </li>
                    <li class="nav-item{{ request()->is('data-induk*') ? ' active' : '' }}">
                        <a href="{{ route('data-induk.index') }}">
                            <i class="fas fa-database"></i>
                            <p>Data Induk</p>
                        </a>
                    </li>
                @elseif(auth()->user()->role == 2)
                    <li class="nav-item{{ request()->is('guest-data-induk*') ? ' active' : '' }}">
                        <a href="{{ route('guest-data-induk.index') }}">
                            <i class="fas fa-database"></i>
                            <p>Data Induk</p>
                        </a>
                    </li>
                @elseif(auth()->user()->role == 3)
                    <li class="nav-item{{ request()->is('data-induk*') ? ' active' : '' }}">
                        <a href="{{ route('data-induk.index') }}">
                            <i class="fas fa-database"></i>
                            <p>Data Induk</p>
                        </a>
                    </li>
                @elseif(auth()->user()->role == 4)
                    <li class="nav-item{{ request()->is('data-pegawai*') ? ' active' : '' }}">
                        <a href="{{ route('data-pegawai.index') }}">
                            <i class="fas fa-user-friends"></i>
                            <p>Data Pegawai</p>
                        </a>
                    </li>
                @else
                    <li class="nav-item{{ request()->is('guest-data-induk*') ? ' active' : '' }}">
                        <a href="{{ route('guest-data-induk.index') }}">
                            <i class="fas fa-database"></i>
                            <p>Data Induk</p>
                        </a>
                    </li>
                @endif
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Tambahan</h4>
                </li>
                <li
                    class="nav-item{{ request()->is('company-profiles*') || request()->is('slider*') ? ' active submenu' : '' }}">
                    <a data-toggle="collapse" href="#setting">
                        <i class="fas fa-cogs"></i>
                        <p>Pengaturan</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse{{ request()->is('company-profiles*') || request()->is('slider*') ? ' show' : '' }}"
                        id="setting">
                        <ul class="nav nav-collapse">
                            <li class="{{ request()->is('config-kepala-sekolah*') ? 'active' : '' }}">
                                <a href="{{ route('config-kepala-sekolah.index') }}">
                                    <span class="sub-item">Config Kepala Sekolah</span>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <span class="sub-item">Cleaner</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->
