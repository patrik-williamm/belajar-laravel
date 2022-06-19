
<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
                <span data-feather="home"></span>
                    Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : '' }}" href="/dashboard/posts">
                <span data-feather="file"></span>
                    My Posts
                </a>
            </li>
            @can('admin')
            <li class="nav-item">
                <a class="nav-link {{Request::is('dashboard/categories*') ? 'active' : ''}}" href="/dashboard/categories">
                <span data-feather="file"></span>
                    Categories Post
                </a>
            </li>
            @endcan
        </ul>
    </div>
</nav>