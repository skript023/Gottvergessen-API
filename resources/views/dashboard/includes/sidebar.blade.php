<div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
        <div class="brand-logo">
        <a href="/dashboard/profile">
        <img src="{{asset('assets')}}/images/logo-icon.png" class="logo-icon" alt="logo icon">
        <h5 class="logo-text">Dashboard</h5>
        </a>
    </div>
    <ul class="sidebar-menu do-nicescrol">
        <li class="sidebar-header">MAIN NAVIGATION</li>
        @if (auth()->user()->roles->name === 'admin')
            <li>
                <a href="/dashboard">
                    <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="/dashboard/users">
                    <i class="zmdi zmdi-accounts-list"></i> <span>Users</span>
                </a>
            </li>
            <li>
                <a href="/dashboard/logging">
                <i class="zmdi zmdi-alert-triangle"></i> <span>Logging</span>
                </a>
            </li>
            <li>
                <a href="/dashboard/role">
                <i class="zmdi zmdi-account-circle"></i> <span>Role</span>
                </a>
            </li>
            <li>
                <a href="/dashboard/bin">
                    <i class="zmdi zmdi-folder-star"></i> <span>Binary</span>
                </a>
            </li>
            <li>
                <a href="/dashboard/ownership">
                    <i class="zmdi zmdi-chart"></i> <span>Ownerships</span>
                </a>
            </li>
            <li>
                <a href="/dashboard/transaction-history">
                    <i class="zmdi zmdi-format-list-bulleted"></i> <span>Transaction</span>
                </a>
            </li>
            <li>
                <a href="/dashboard/wallets">
                    <i class="zmdi zmdi-balance-wallet"></i> <span>Wallets</span>
                </a>
            </li>
            <li>
                <a href="/dashboard/users/balance">
                    <i class="zmdi zmdi-balance"></i> <span>Balances</span>
                </a>
            </li>
            <li>
                <a href="/dashboard/users/activity">
                    <i class="zmdi zmdi-assignment"></i> <span>Activity</span>
                </a>
            </li>
        @endif

        <li>
            <a href="/dashboard/profile">
            <i class="zmdi zmdi-face"></i> <span>Profile</span>
            </a>
        </li>

        @if (auth()->user()->roles->name === 'admin')
            <li class="sidebar-header">Admin</li>
            <li><a href="/admin/command/maintenance"><i class="zmdi zmdi-alert-triangle text-danger"></i> <span>Maintenance</span></a></li>
            <li><a href="/admin/command/migration"><i class="zmdi zmdi-chart-donut text-success"></i> <span>Migration</span></a></li>
            <li><a href="/admin/command/migration-fresh"><i class="zmdi zmdi-chart-donut text-info"></i> <span>Migration Fresh</span></a></li>
            <li><a href="/admin/command/server-up"><i class="zmdi zmdi-cloud-done text-info"></i> <span>Server Up</span></a></li>
        @endif
        </ul>
    
    </div>