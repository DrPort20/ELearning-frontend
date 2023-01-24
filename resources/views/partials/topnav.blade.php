<nav class="navbar navbar-expand-lg main-navbar">
  <form class="form-inline mr-auto">
    <!-- navbar toggler -->
    <ul class="navbar-nav mr-3">
      <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
      <li class="text-light font-weight-bold d-sm-none mt-1">E-Learning</li>
    </ul>
    <!-- navbar search -->
    <div class="search-element">
      <ul class="navbar-nav mr-3">
        <li class="text-light font-weight-bold">E-Learning  SMK KEREN ABIS</li>
      </ul>
    </div>
  </form>
  <ul class="navbar-nav navbar-right">
    <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
      <img alt="image" src="{{ asset('assets/img/avatar/avatar-1.png') }}" width="30" class="rounded-circle mr-1">
      <div class="d-sm-none d-lg-inline-block">Hi, Ujang Maman</div></a>
      <div class="dropdown-menu dropdown-menu-right">
        <div class="dropdown-title">Menu Profil</div>
        <a href="/profil" class="dropdown-item has-icon">
          <i class="far fa-user"></i> Profil
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item has-icon text-danger">
          <i class="fas fa-sign-out-alt"></i> Logout
        </a>
      </div>
    </li>
  </ul>
</nav>