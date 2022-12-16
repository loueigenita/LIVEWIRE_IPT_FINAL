<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
  </ul>

  <ul class="navbar-nav ml-auto">
    
    <li class="nav-item dropdown">
        <a class="nav-link active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
        </a>
      </li>

    <li class="nav-item dropdown user-menu">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
            <img src="{{ asset('avatar.png') }}" class="user-image img-circle elevation-2" alt="User Image">
            <span class="d-none d-md-inline">{{ Auth::user()->name }}</span>
        </a>
        <ul class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
            <!-- User image -->
            <li class="user-header bg-primary">
                <img src="{{(Auth::user()->gender === 'Male') ? asset('images/male-icon-blue.png') : ''}}
                {{(Auth::user()->gender === 'Female') ? asset('images/female-icon-pink.png') : ''}}"
                     class="img-circle elevation-3"
                     alt="User Image">
                <p>
                    {{ Auth::user()->name }}
                    <small>Member since {{ Auth::user()->created_at->format('M. Y') }}</small>
                </p>
            </li>
            <!-- Menu Footer-->
            <li class="user-footer">
            
                {{-- <a href="{{url('profile')}}" class="btn btn-primary">Profile</a> --}}
                <a href="#" class="btn btn-danger float-right"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Sign out
                </a>
                <form id="logout-form" action="{{ url('logout') }}" class="d-none">
                    @csrf
                </form>
            </li>
        </ul>
    </li>
</ul>
  </nav>
  <!-- /.navbar -->
<script>

</script>
