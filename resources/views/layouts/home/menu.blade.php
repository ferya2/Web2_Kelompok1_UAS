<nav class="sidebar-nav scroll-sidebar" data-simplebar="">
    <ul id="sidebarnav">
        <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">PANDUAN</span>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="/dashboard" aria-expanded="false">
                <span>
                    <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">How to Vote</span>
            </a>
        </li>
        <!-- Menu Peserta -->
        @if (auth()->check() && auth()->user()->role == 'user')
            <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">VOTE</span>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="/dashboard/voting" aria-expanded="false">
                    <span>
                        <i class="ti ti-pin"></i>
                    </span>
                    <span class="hide-menu">Voting</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="/dashboard/detailpaslon" aria-expanded="false">
                    <span>
                        <i class="ti ti-user"></i>
                    </span>
                    <span class="hide-menu">Detail Kandidat</span>
                </a>
            </li>
        @endif
        <!-- Menu Admin -->
        @if (auth()->check() && auth()->user()->role == 'admin')
            <li class="nav-small-cap">
                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                <span class="hide-menu">ADMIN</span>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="/admin/managepaslon" aria-expanded="false">
                    <span>
                        <i class="ti ti-file"></i>
                    </span>
                    <span class="hide-menu">Manage Paslon</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="/admin/managepaslon/results" aria-expanded="false">
                    <span>
                        <i class="ti ti-file"></i>
                    </span>
                    <span class="hide-menu">Hasil Voting</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="/admin/managepaslon/history" aria-expanded="false">
                    <span><i class="ti ti-folder"></i></span>
                    <span class="hide-menu">Detail Voting</span>
                </a>
            </li>
        @endif

        <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Bantuan</span>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="/note" aria-expanded="false">
                <span>
                    <i class="ti ti-help"></i>
                </span>
                <span class="hide-menu">FAQ</span>
            </a>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="/dashboard/hubungikami" aria-expanded="false">
                <span>
                    <i class="ti ti-message"></i>
                </span>
                <span class="hide-menu">Hubungi Kami</span>
            </a>
        </li>
    </ul>
</nav>
