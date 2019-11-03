<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body id="page-top"> 
    <!-- Page Wrapper -->
  <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    
          <!-- Sidebar - Brand -->
          <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
            <div class="sidebar-brand-icon rotate-n-15">
              <i class="fas fa-book"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Tópicos<sup>2</sup></div>
          </a>
    
          <!-- Divider -->
          <hr class="sidebar-divider my-0">        
    
          <!-- Divider -->
          <hr class="sidebar-divider">
    
          <!-- Heading -->
          <div class="sidebar-heading">
            Admin
          </div>
    
          <!-- Nav Item - Pages Collapse Menu -->
          <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('dashboard') }}">
              <i class="fas fa-fw fa-user"></i>
              <span>Usuários</span>
            </a>            
          </li>
           
          <!-- Nav Item - Tables -->
          <li class="nav-item">
            <a class="nav-link" href="{{ route('quotes') }}">
              <i class="fas fa-fw fa-dollar-sign"></i>
              <span>Cotações</span></a>
          </li>
    
          <!-- Divider -->
          <hr class="sidebar-divider d-none d-md-block">
    
        </ul>
        <!-- End of Sidebar -->
        
    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
      
              <!-- Topbar -->
              <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
      
                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                  <i class="fa fa-bars"></i>
                </button>               
      
                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">
      
                  <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                  <li class="nav-item dropdown no-arrow d-sm-none">
                    <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-search fa-fw"></i>
                    </a>
                    <!-- Dropdown - Messages -->
                    <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                      <form class="form-inline mr-auto w-100 navbar-search">
                        <div class="input-group">
                          <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                          <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                              <i class="fas fa-search fa-sm"></i>
                            </button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </li>                       
      
                  <div class="topbar-divider d-none d-sm-block"></div>
      
                  <!-- Nav Item - User Information -->
                  <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                      <img class="img-profile rounded-circle" src="{{asset('storage/')}}/{{Auth::user()->photo}}">
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                      <a class="dropdown-item" href="#">
                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                        Profile
                      </a>                      
                      <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Logout
                      </a>
                    </div>
                  </li>      
                </ul>
      
              </nav>
              <!-- End of Topbar -->

        @yield('content')   
    </form>
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="{{ mix('js/ajax.js') }}"></script>
</body>
</html>