<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('home') }}">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-home menu-icon"></i>
            </a>
        </li>
        @can('admin')
            <li class="nav-item">
                <a class="nav-link" href="{{ route('agencies') }}">
                    <span class="menu-title">Agencies</span>
                    <i class="mdi mdi-office-building menu-icon"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('users') }}">
                    <span class="menu-title">Accounts</span>
                    <i class="mdi mdi-account menu-icon"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('delegations') }}">
                    <span class="menu-title">Delegations</span>
                    <i class="mdi mdi-arrow-all menu-icon"></i>
                </a>
            </li>
        @endcan
    </ul>
</nav>
