           <!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary bg-dark elevation-4">

    <a href="{{ url('/') }}" class="brand-link">
        <img src="{{ asset('avatar.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">MINI CAPSTONE</span>
    </a>

    <div class="sidebar">
        <nav class="mt-5">
            <ul class="treeview-menu nav nav-pills nav-sidebar nav-child-indent flex-column" data-widget="treeview" role="menu">
            <li class="nav-item">
                <a href="{{ '/dashboard' }}" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt text-primary"></i>
                    <p>
                        Dashboard
                    </p>
                </a>
            </li>
           
            <li class="nav-item">
                <a href="{{ '/recent-post' }}" class="nav-link">
                    <i class="nav-icon fas fa-history text-primary"></i>
                    <p>
                       Recents
                    </p>
                </a>
            </li>
            @role('admin')
            <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-gear text-primary"></i>
                    <p>Admin</p>
                    <i class="right fas fa-angle-left text-primary"></i>
                </a>
                <ul class="nav-treeview">
                    <li class="nav-item">
                        <a href="{{ '/log' }}" class="nav-link">
                            <i class="far fa-circle"></i>
                            <p>Logs</p>
                           
                        </a>
                    </li>
                    

                </ul>
                <ul class="nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('admin.roles.index') }}" class="nav-link">
                            <i class="far fa-circle"></i>
                            <p>Roles</p>
                            
                        </a>
                    </li>
                </ul>
                <ul class="nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('admin.permissions.index') }}" class="nav-link">
                            <i class="far fa-circle"></i>
                            <p>Permissions</p>
                            
                        </a>
                    </li>
                </ul>
                <ul class="nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('admin.users.index') }}" class="nav-link">
                            <i class="far fa-circle"></i>
                            <p>Users</p>
                            
                        </a>
                    </li>
                </ul>
                <ul class="nav-treeview">
                    <li class="nav-item">
                        <a href="{{ '/my-post' }}" class="nav-link">
                            <i class="far fa-circle"></i>
                            <p>My Post</p>
                            
                        </a>
                    </li>
                </ul>
            </li>
            @endrole
           
            <li class="nav-item">
                <a href="{{ url('/logout') }}" class="nav-link">
                    <i class="nav-icon fas fa-power-off text-primary"></i>
                    <p>
                       Logout
                    </p>
                </a>
            </li>
            <ul>
        <nav>
    <div>
</aside>


