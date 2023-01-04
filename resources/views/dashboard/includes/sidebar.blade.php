<div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
        <div class="brand-logo">
        <a href="index.html">
        <img src="{{asset('assets')}}/images/logo-icon.png" class="logo-icon" alt="logo icon">
        <h5 class="logo-text">Dashboard</h5>
        </a>
    </div>
    <ul class="sidebar-menu do-nicescrol">
        <li class="sidebar-header">MAIN NAVIGATION</li>
        @if(auth()->user()->roles->id == 3)
            <li>
                <a href="/dashboard">
                <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="/dashboard/users">
                <i class="zmdi zmdi-format-list-bulleted"></i> <span>Users</span>
                </a>
            </li>
            <li>
                <a href="/dashboard/users?page=add">
                <i class="zmdi zmdi-account-circle"></i> <span>Add User</span>
                </a>
            </li>
            <li>
                <a href="/dashboard/logging">
                <i class="zmdi zmdi-lock"></i> <span>Logging</span>
                </a>
            </li>
            <li>
                <a href="/dashboard/role">
                <i class="zmdi zmdi-account-circle"></i> <span>Role</span>
                </a>
            </li>
        @endif

        <li>
            <a href="/dashboard/profile">
            <i class="zmdi zmdi-face"></i> <span>Profile</span>
            </a>
        </li>

        <li class="sidebar-header">LABELS</li>
        <li><a href="javaScript:void();"><i class="zmdi zmdi-coffee text-danger"></i> <span>Important</span></a></li>
        <li><a href="javaScript:void();"><i class="zmdi zmdi-chart-donut text-success"></i> <span>Warning</span></a></li>
        <li><a href="javaScript:void();"><i class="zmdi zmdi-share text-info"></i> <span>Information</span></a></li>

        </ul>
    
    </div>