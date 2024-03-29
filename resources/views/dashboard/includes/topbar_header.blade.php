<header class="topbar-nav">
    <nav class="navbar navbar-expand fixed-top">
    <ul class="navbar-nav mr-auto align-items-center">
        <li class="nav-item">
        <a class="nav-link toggle-menu" href="javascript:void();">
        <i class="icon-menu menu-icon"></i>
        </a>
        </li>
        <li class="nav-item">
        <form class="search-bar" method="POST">
            <input type="text" class="form-control" placeholder="Enter keywords" id="search">
            <a href="javascript:void();"><i class="icon-magnifier"></i></a>
        </form>
        </li>
    </ul>
        
    <ul class="navbar-nav align-items-center right-nav-link">
        {{-- <li class="nav-item dropdown-lg">
        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
        <i class="fa fa-envelope-open-o"></i></a>
        </li>
        <li class="nav-item dropdown-lg">
        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
        <i class="fa fa-bell-o"></i></a>
        </li>
        <li class="nav-item language">
        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();"><i class="fa fa-flag"></i></a>
        <ul class="dropdown-menu dropdown-menu-right">
            <li class="dropdown-item"> <i class="flag-icon flag-icon-gb mr-2"></i> English</li>
            <li class="dropdown-item"> <i class="flag-icon flag-icon-fr mr-2"></i> French</li>
            <li class="dropdown-item"> <i class="flag-icon flag-icon-cn mr-2"></i> Chinese</li>
            <li class="dropdown-item"> <i class="flag-icon flag-icon-de mr-2"></i> German</li>
            </ul>
        </li> --}}
        <li class="nav-item">
            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
                @isset (auth()->user()->image)
                    <span class="user-profile"><img src="{{ asset('storage/uploads/avatar') . '/' . auth()->user()->image }}" class="img-circle" alt="user avatar"></span>
                @else
                    <span class="user-profile"><img src="https://via.placeholder.com/110x110" class="img-circle" alt="user avatar"></span>
                @endif
            </a>
            <ul class="dropdown-menu dropdown-menu-right bg-dark-light">
                <li class="dropdown-item user-details">
                    <a href="javaScript:void();">
                        <div class="media">
                            @isset (auth()->user()->image)
                                <div class="avatar"><img class="align-self-start mr-3" src="{{ asset('storage/uploads/avatar') . '/' . auth()->user()->image }}" alt="user avatar"></div>
                            @else
                                <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
                            @endif
                            <div class="media-body">
                            <h6 class="mt-2 user-title">{{ auth()->user()->fullname }}</h6>
                            <p class="user-subtitle">{{ auth()->user()->email }}</p>
                            <p class="user-subtitle">{{ auth()->user()->roles->role }}</p>
                            </div>
                        </div>
                    </a>
                </li>
                {{-- <li class="dropdown-divider"></li>
                <a href="#"><li class="dropdown-item"><i class="icon-envelope mr-2"></i> Inbox</li></a>
                <li class="dropdown-divider"></li> --}}
                <a href="/dashboard/users?page=edit"><li class="dropdown-item"><i class="icon-wallet mr-2"></i> Account</li></a>
                <li class="dropdown-divider"></li>
                <a href="#"><li class="dropdown-item"><i class="icon-settings mr-2"></i> Setting</li></a>
                <li class="dropdown-divider"></li>
                <a href="/logout"><li class="dropdown-item"><i class="icon-power mr-2"></i> Logout</li></a>
            </ul>
        </li>
    </ul>
    </nav>
</header>