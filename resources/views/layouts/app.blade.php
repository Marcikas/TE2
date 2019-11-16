<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    
    <link rel="stylesheet" href="{{ secure_asset('css/app.css') }}">
</head>
<body id="page-top"> 
    <!-- Page Wrapper -->
  <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">
    
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
              <nav class="navbar navbar-expand navbar-light bg-light topbar mb-4 static-top shadow">     
                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">
                  <div class="topbar-divider d-none d-sm-block"></div>      
                  <!-- Nav Item - User Information -->
                  <li class="nav-item dropdown no-arrow">
                   <a class="nav-link" href="{{ route('user') }}">
                      <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                      <img class="img-profile rounded-circle" src="{{asset('storage/')}}/{{Auth::user()->photo}}">
                    </a>                    
                  </li>      
                </ul>      
              </nav>
              <!-- End of Topbar -->

        @yield('content')   
    </form>
    <script src="{{ secure_asset('js/app.js') }}"></script>
    <script src="{{ secure_asset('js/ajax.js') }}"></script>
    <script>      
      // Datatable
      $(document).ready(function() {
          $('#usuarios').DataTable({
            language: 
              {
                "sEmptyTable": "Nenhum registro encontrado",
                "sInfo": "Mostrando de _START_ até _END_ de _TOTAL_ registros",
                "sInfoEmpty": "Mostrando 0 até 0 de 0 registros",
                "sInfoFiltered": "(Filtrados de _MAX_ registros)",
                "sInfoPostFix": "",
                "sInfoThousands": ".",
                "sLengthMenu": "_MENU_ resultados por página",
                "sLoadingRecords": "Carregando...",
                "sProcessing": "Processando...",
                "sZeroRecords": "Nenhum registro encontrado",
                "sSearch": "Pesquisar",
                "oPaginate": {
                    "sNext": "Próximo",
                    "sPrevious": "Anterior",
                    "sFirst": "Primeiro",
                    "sLast": "Último"
                },
                "oAria": {
                    "sSortAscending": ": Ordenar colunas de forma ascendente",
                    "sSortDescending": ": Ordenar colunas de forma descendente"
                }             
              }            
          });
      });
    </script>
</body>
</html>