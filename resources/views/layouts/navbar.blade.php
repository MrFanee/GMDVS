<nav class="navbar navbar-expand-sm navbar-default">
    <div id="main-menu" class="main-menu collapse navbar-collapse">
        <ul class="nav navbar-nav"> 
            <li class="sub-menu">
                <a href="{{ route('dashboard') }}"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
            </li>

            <li class="menu-item-has-children dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-pencil"></i>Input</a>
                <ul class="sub-menu children dropdown-menu">
                    <li><i class="fa fa-tachometer"></i><a href="{{ route('input.keberangkatan') }}">Keberangkatan </a></li>
                    <li><i class="fa fa-tachometer"></i><a href="{{ route('input.kedatangan') }}">Kedatangan </a></li>
                </ul>
            </li>

            {{-- <li class="menu-title">Master</li><!-- /.menu-title --> --}}
            <li class="menu-item-has-children dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>Master</a>
                <ul class="sub-menu children dropdown-menu">
                    <li><i class="fa fa-puzzle-piece"></i><a href="{{ route('master.pic') }}">Data PIC </a></li>
                    <li><i class="fa fa-puzzle-piece"></i><a href="{{ route('master.kendaraan') }}">Data Kendaraan </a></li>
                    <li><i class="fa fa-puzzle-piece"></i><a href="{{ route('master.jadwal') }}">Mapping Jadwal </a></li>
                </ul>
            </li>

            <li class="menu-item-has-children dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>Report</a>
                <ul class="sub-menu children dropdown-menu">
                    <li><i class="fa fa-puzzle-piece"></i><a href="{{ route('report.index') }}">Report Data </a></li>                    
                </ul>
            </li>

            <li class="sub-menu">
                <a href=""><i class="menu-icon fa fa-sign-out"></i>Log Out </a>
            </li>


            {{-- <li class="menu-title">Extras</li><!-- /.menu-title -->
            <li class="menu-item-has-children dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Pages</a>
                <ul class="sub-menu children dropdown-menu">
                    <li><i class="menu-icon fa fa-sign-in"></i><a href="page-login.html">Login</a></li>
                    <li><i class="menu-icon fa fa-sign-in"></i><a href="page-register.html">Register</a></li>
                    <li><i class="menu-icon fa fa-paper-plane"></i><a href="pages-forget.html">Forget Pass</a></li>
                </ul>
            </li> --}}
        </ul>
    </div><!-- /.navbar-collapse -->
</nav>
