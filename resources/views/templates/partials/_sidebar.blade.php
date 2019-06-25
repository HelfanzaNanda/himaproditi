<!-- main sidebar -->
<aside id="sidebar_main">

    <div class="sidebar_main_header">
        <div class="sidebar_logo">
            <a href="#" class="sSidebar_hide sidebar_logo_large">
                <img class="logo_regular" src="{{asset('assets/img/logo_main.png')}}" alt="" height="15" width="71"/>
                <img class="logo_light" src="{{asset('assets/img/logo_main_white.png')}}" alt="" height="15" width="71"/>
            </a>
            <a href="#" class="sSidebar_show sidebar_logo_small">
                <img class="logo_regular" src="{{asset('assets/img/logo_main_small.png')}}" alt="" height="32" width="32"/>
                <img class="logo_light" src="{{asset('assets/img/logo_main_small_light.png')}}" alt="" height="32" width="32"/>
            </a>
        </div>
    </div>

    <div class="menu_section">
        <ul>
            <li title="Dashboard">
                <a href="{{route('dashboard')}}">
                    <span class="menu_icon"><i class="material-icons">&#xE871;</i></span>
                    <span class="menu_title">Dashboard</span>
                </a>

            </li>

            <li title="Anggota">
                <a href="{{route('anggota')}}">
                    <span class="menu_icon"><i class="material-icons"></i></span>
                    <span class="menu_title">Anggota</span>
                </a>

            </li>

            <li title="Inventaris">
                <a href="{{route('inventaris')}}">
                    <span class="menu_icon"><i class="material-icons">&#xE158;</i></span>
                    <span class="menu_title">Inventaris</span>
                </a>

            </li>
            <li title="ProgramKerja">
                <a href="{{route('proker')}}">
                    <span class="menu_icon"><i class="material-icons">&#xE158;</i></span>
                    <span class="menu_title">Program Kerja</span>
                </a>

            </li>
            <li title="Rapat">
                <a href="{{route('rapat')}}">
                    <span class="menu_icon"><i class="material-icons">&#xE53E;</i></span>
                    <span class="menu_title">Rapat</span>
                </a>

            </li>

            <li title="Atribut">
                <a href="#">
                    <span class="menu_icon"><i class="material-icons">&#xE53E;</i></span>
                    <span class="menu_title">Atribut</span>
                </a>

            </li>

        </ul>
    </div>
</aside>
<!-- main sidebar end -->