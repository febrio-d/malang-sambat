<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
        <span>Reports</span>
        </h6>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}" href="/dashboard">Unresponded Reports</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->is('dashboard/responded') ? 'active' : '' }}" href="/dashboard/responded">Responded Reports</a>
            </li>
        </ul>

        @can('admin')
            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Administrator</span>
            </h6>
            <ul class="nav flex-column mb-2">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('dashboard/employees') ? 'active' : '' }}" href="/dashboard/employees">
                    Employees
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('dashboard/register') ? 'active' : '' }}" href="/dashboard/register">
                    Register
                    </a>
                </li>
            </ul>
        @endcan
    </div>
</nav>