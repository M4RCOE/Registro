<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard 3</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo base_url('plugins/fontawesome-free/css/all.min.css')?>">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('dist/css/adminlte.min.css')?>">
  <link rel="stylesheet" href="<?php echo base_url('css/estilo.css')?>">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  
  

     


    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
        integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ"
        crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"
        integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY"
        crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
    
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    
 
</head>
 
<body class="hold-transition sidebar-mini">
  <input type="text" id='sitioURL' value='<?php echo base_url()?>'hidden>
  <script src="<?php echo base_url('js/usuarios.js')?>"></script>
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?php echo site_url('Inicio')?>" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="<?php echo base_url('dist/img/user1-128x128.jpg')?>" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="<?php echo base_url('dist/img/user8-128x128.jpg')?>" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="<?php echo base_url('dist/img/user3-128x128.jpg')?>" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
       
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
       
       
      <!--  -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
        <i class="fas fa-cog"></i>
           
        </a>
        <div class="dropdown-menu dropdown-menu-md dropdown-menu-right  " >
          
         <center>
            
          <a class="nav-link"  href="<?php echo site_url('Inicio/admin')?>"  role="button">
         Menus 
         <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-menu-button-wide-fill" viewBox="0 0 16 16">
            <path d="M1.5 0A1.5 1.5 0 0 0 0 1.5v2A1.5 1.5 0 0 0 1.5 5h13A1.5 1.5 0 0 0 16 3.5v-2A1.5 1.5 0 0 0 14.5 0h-13zm1 2h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1 0-1zm9.927.427A.25.25 0 0 1 12.604 2h.792a.25.25 0 0 1 .177.427l-.396.396a.25.25 0 0 1-.354 0l-.396-.396zM0 8a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V8zm1 3v2a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2H1zm14-1V8a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2h14zM2 8.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0 4a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z"/>
          </svg>
          </a>
          <div class="dropdown-divider"></div>
         
          <a class="nav-link"  href="<?php echo site_url('Inicio/cierra_sesion')?>"  role="button">
          Salir
        <i class="fas fa-sign-out-alt"></i>
        </a>
         </center>
           
        </div>
      </li>
      <!--  -->
    </ul>
    
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url($user =$this->session->userdata('user')['img_user'])?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">  <?php
           $user =$this->session->userdata('user');
           $user = $user['nombre'];
            echo ucfirst($user);
            ?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div  class='pl-0 ml-0'>
      <ul  id='menusUser'class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

      
      </ul>
      <script>
         poneMenu('<?php echo ($user);?>')
       </script>

       

      <!-- Sidebar Menu -->
      
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Usuarios</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Usuarios</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
  
     <div id='content2'>
     <div class="alert alert-success text-center" id='alerta2' hidden role='alert'></div>
        <div class="alert alert-danger text-center" id='alerta3' hidden role='alert'></div>
<center>
  <style>
    th{

      text-align:center;
margin:0px;
font-size:115%;
font-family:"segoe ui light";
 
    }
    thead tr{
      padding-top: 0% !important;
      
    }
    thead th{
      padding-top: 0% !important;
      
    }
</style>

<div id='user'  class='mr-5'>
      <table class="table table-hover " id="table"   >

<thead class="thead bg-primary text-white " style='height: 10px;'>

  <tr  class="p-0 m-0">
 
    <th class="mt-0" style='with:10px'>
    Avatar 
    </th>
    <th class="mt-0">
     Usuarios 
    </th>
    <th class="mt-0">
     Alias 
    </th>
    <th class="mt-0">
    Correo 
    </th>
    <th class="mt-0">
     Menu 
    </th>
   
    <th class="  mt-0 mb-0">
      <button class='bg-transparent border-0 ml-4 pt-2 pl-0' style='height: 30px;' onclick='agregarUserM()' ><img src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjUwNnB0IiB2aWV3Qm94PSItNDggMCA1MDYgNTA2LjQiIHdpZHRoPSI1MDZwdCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48cGF0aCBkPSJtMjU1LjE2MDE1NiAyNjQuMDU4NTk0YzQ4LjgwNDY4OC0xMS44OTg0MzggOTkuNzg1MTU2IDguNDU3MDMxIDEyNi45NzY1NjMgNTAuNjk5MjE4IDI3LjE4NzUgNDIuMjM4MjgyIDI0LjYwMTU2MiA5Ny4wNzQyMTktNi40Mzc1IDEzNi41NzAzMTMtMzEuMDQyOTY5IDM5LjQ5MjE4Ny04My43MTA5MzggNTQuOTY0ODQ0LTEzMS4xNzk2ODggMzguNTI3MzQ0LTQ3LjQ2ODc1LTE2LjQzMzU5NC03OS4yOTY4NzUtNjEuMTYwMTU3LTc5LjI2OTUzMS0xMTEuMzk0NTMxLS4zMjgxMjUtNTQuNDE3OTY5IDM2Ljk1NzAzMS0xMDEuODU5Mzc2IDg5LjkxMDE1Ni0xMTQuNDAyMzQ0em04OC4wMzkwNjMgMTMzLjk0MTQwNnYtMzZoLTQ1di00NWgtMzZ2NDVoLTQ1djM2aDQ1djQ1aDM2di00NXptMCAwIiBmaWxsPSIjZmVkYjQxIi8+PHBhdGggZD0ibTM0My4xOTkyMTkgMzYydjM2aC00NXY0NWgtMzZ2LTQ1aC00NXYtMzZoNDV2LTQ1aDM2djQ1em0wIDAiIGZpbGw9IiMwMGVmZDEiLz48cGF0aCBkPSJtMTUyLjE3MTg3NSAxODEuMjg5MDYyYzQ5LjQ3MjY1Ni4wNzgxMjYgOTIuMjY1NjI1IDM0LjQ3MjY1NyAxMDIuOTg4MjgxIDgyLjc2OTUzMi02MS4zMjQyMTggMTQuOTUzMTI1LTk5Ljk3MjY1NiA3NS41NzgxMjUtODcuNjQwNjI1IDEzNy40ODA0NjhoLTE1Ny44MDA3ODF2LTExNC43NzczNDNjLjEwMTU2Mi01OC4zNTE1NjMgNDcuNDgwNDY5LTEwNS41NzAzMTMgMTA1LjgzMjAzMS0xMDUuNDcyNjU3em0wIDAiIGZpbGw9IiMwMGFjZWEiLz48cGF0aCBkPSJtMjA1LjQ4ODI4MSA4MS42NDA2MjV2LjAzOTA2M2MwIDM5LjYyNS0zMi4xMTMyODEgNzEuNzUzOTA2LTcxLjczODI4MSA3MS43Njk1MzFoLS4wNTg1OTRjLTM5LjY0MDYyNS4wMTE3MTktNzEuNzg5MDYyLTMyLjEwOTM3NS03MS44MTI1LTcxLjc1di0uMDk3NjU3Yy4wMDM5MDYtMzkuNjI1IDMyLjExNzE4OC03MS43NTM5MDYgNzEuNzQyMTg4LTcxLjc3MzQzN2guMTA5Mzc1YzM5LjYyNSAwIDcxLjc1IDMyLjExNzE4NyA3MS43NTc4MTIgNzEuNzQyMTg3em0wIDAiIGZpbGw9IiMwMGFjZWEiLz48ZyBmaWxsPSIjMDgzODYzIj48cGF0aCBkPSJtOS43MTg3NSA0MTJoMTQ5Ljg2NzE4OGMxNC43NzczNDMgNTUgNjUuNDAyMzQzIDk0LjM5ODQzOCAxMjMuMzc1IDk0LjM5ODQzOCA3MC40MjU3ODEgMCAxMjcuNzE4NzUtNTcuNDA2MjUgMTI3LjcxODc1LTEyNy44MjQyMTlzLTU3LjI5Mjk2OS0xMjcuNzczNDM4LTEyNy43MTg3NS0xMjcuNzczNDM4Yy02Ljg5MDYyNi0uMDA3ODEyLTEzLjc2OTUzMi41MzkwNjMtMjAuNTcwMzEzIDEuNjM2NzE5LTE1LjA0Mjk2OS00OC4yODEyNS01OS42NDg0MzctODEuMjM4MjgxLTExMC4yMTg3NS04MS40Mzc1aC0zNi44MDA3ODFjLTYzLjY3OTY4OCAwLTExNS4xNzE4NzUgNTIuMDQyOTY5LTExNS4xNzE4NzUgMTE1Ljc2MTcxOXYxMTQuNzc3MzQzYzAgNS41MjM0MzggNCAxMC40NjA5MzggOS41MTk1MzEgMTAuNDYwOTM4em0zODAuOTYwOTM4LTMzLjUzOTA2MmMwIDU5LjQ4ODI4MS00OC4yMjY1NjMgMTA3LjcxNDg0My0xMDcuNzE0ODQ0IDEwNy43MTQ4NDMtNTkuNDg4MjgyIDAtMTA3LjcxNDg0NC00OC4yMjY1NjItMTA3LjcxNDg0NC0xMDcuNzE0ODQzLS4wOTM3NS0yNC4zODI4MTMgOC4xNzU3ODEtNDguMDU4NTk0IDIzLjQyOTY4OC02Ny4wNzgxMjYgMTQuOTE0MDYyLTE4LjY5MTQwNiAzNS42MDU0NjgtMzEuOTE0MDYyIDU4LjgzMjAzMS0zNy42MDE1NjJsLjAyMzQzNy0uMDAzOTA2YzMyLjExMzI4Mi03Ljc4NTE1NiA2Ni4wMTk1MzItLjQwNjI1IDkxLjk5MjE4OCAyMC4wMTE3MTggMjUuOTcyNjU2IDIwLjQyMTg3NiA0MS4xNDA2MjUgNTEuNjMyODEzIDQxLjE1MjM0NCA4NC42NzE4NzZ6bS0zNzAuNDgwNDY5LTkxLjY4MzU5NGMwLTUyLjY4NzUgNDIuNS05NS43NzczNDQgOTUuMTgzNTkzLTk1Ljc3NzM0NGgzNi43Njk1MzJjNDEuMzM1OTM3LjE3OTY4OCA3Ny45MDIzNDQgMjYuODIwMzEyIDkwLjc0NjA5NCA2Ni4xMDU0NjktMjMuNTcwMzEzIDcuODUxNTYyLTQ0LjM2MzI4MiAyMi4zNTkzNzUtNTkuODU5Mzc2IDQxLjc3NzM0My0xOC4wOTc2NTYgMjIuNjQ0NTMyLTI3LjkwMjM0MyA1MC44MDA3ODItMjcuNzg5MDYyIDc5Ljc4OTA2MyAwIDQuMzc1LjIyNjU2MiA4LjMyODEyNS42NzE4NzUgMTMuMzI4MTI1aC0xMzUuNzIyNjU2em0wIDAiLz48cGF0aCBkPSJtMTMzLjczMDQ2OSAwaC0uMTE3MTg4Yy0yMS42MjEwOTMuMDA3ODEyNS00Mi4zNTE1NjIgOC42MTMyODEtNTcuNjI1IDIzLjkxNzk2OS0xNS4yNzM0MzcgMTUuMzA4NTkzLTIzLjgzMjAzMSAzNi4wNTg1OTMtMjMuNzg5MDYyIDU3LjY4MzU5M3YuMTAxNTYzYy0uMDE5NTMxIDIxLjYwMTU2MyA4LjU2MjUgNDIuMzE2NDA2IDIzLjg1MTU2MiA1Ny41NzQyMTkgMTUuMjg5MDYzIDE1LjI1MzkwNiAzNi4wMjM0MzggMjMuNzkyOTY4IDU3LjYyMTA5NCAyMy43MjI2NTZoLjA4MjAzMWMyMS41OTc2NTYuMDU4NTk0IDQyLjMyODEyNS04LjQ4ODI4MSA1Ny42MDkzNzUtMjMuNzQ2MDk0IDE1LjI4NTE1Ny0xNS4yNjE3MTggMjMuODU5Mzc1LTM1Ljk3NjU2MiAyMy44MzU5MzgtNTcuNTc0MjE4di0uMTEzMjgyYy4wMzEyNS0yMS42MjUtOC41MzkwNjMtNDIuMzc1LTIzLjgyNDIxOS01Ny42NzU3ODEtMTUuMjgxMjUtMTUuMjk2ODc1LTM2LjAxOTUzMS0yMy44OTQ1MzEyNS01Ny42NDQ1MzEtMjMuODkwNjI1em03MS43NTc4MTIgODEuNTcwMzEyLTEwLS4xMTcxODdjLS4wNTQ2ODcgMzQuMDQ2ODc1LTI3LjY5NTMxMiA2MS41OTc2NTYtNjEuNzM4MjgxIDYxLjU0Njg3NWgtLjA1ODU5NGMtLjAwNzgxMiAwLS4wMTE3MTguMjI2NTYyLS4wMTk1MzEuMjI2NTYyLTIyLjEwOTM3NS4wOTM3NS00Mi41ODU5MzctMTEuNjQwNjI0LTUzLjY3NTc4MS0zMC43NzM0MzctMTEuMDg1OTM4LTE5LjEyODkwNi0xMS4wOTc2NTYtNDIuNzMwNDY5LS4wMjM0MzgtNjEuODY3MTg3IDExLjA3NDIxOS0xOS4xNDA2MjYgMzEuNTM5MDYzLTMwLjg5MDYyNiA1My42NTIzNDQtMzAuODEyNWwtLjAwMzkwNi05Ljk3MjY1Ny4xMDkzNzUgMTAuMDExNzE5YzM0LjA4NTkzNy4wNDI5NjkgNjEuNzEwOTM3IDI3LjY2NDA2MiA2MS43NTc4MTIgNjEuNzV6bTAgMCIvPjxwYXRoIGQ9Im0yNTIuMTk5MjE5IDMxN3YzNWgtMzVjLTUuNTIzNDM4IDAtMTAgNC40NzY1NjItMTAgMTB2MzZjMCA1LjUyMzQzOCA0LjQ3NjU2MiAxMCAxMCAxMGgzNXYzNWMwIDUuNTIzNDM4IDQuNDc2NTYyIDEwIDEwIDEwaDM2YzUuNTIzNDM3IDAgMTAtNC40NzY1NjIgMTAtMTB2LTM1aDM1YzUuNTIzNDM3IDAgMTAtNC40NzY1NjIgMTAtMTB2LTM2YzAtNS41MjM0MzgtNC40NzY1NjMtMTAtMTAtMTBoLTM1di0zNWMwLTUuNTIzNDM4LTQuNDc2NTYzLTEwLTEwLTEwaC0zNmMtNS41MjM0MzggMC0xMCA0LjQ3NjU2Mi0xMCAxMHptMjAgNDV2LTM1aDE2djM1YzAgNS41MjM0MzggNC40NzY1NjIgMTAgMTAgMTBoMzV2MTZoLTM1Yy01LjUyMzQzOCAwLTEwIDQuNDc2NTYyLTEwIDEwdjM1aC0xNnYtMzVjMC01LjUyMzQzOC00LjQ3NjU2My0xMC0xMC0xMGgtMzV2LTE2aDM1YzUuNTIzNDM3IDAgMTAtNC40NzY1NjIgMTAtMTB6bTAgMCIvPjwvZz48L3N2Zz4="  width='30px'/>
    </button>
    </th>

  </tr>
</thead>
<tbody id='tuser' >

</tbody>
</table>
      </div>
      <!-- The Modal user -->
<div class="modal" id="ModalUsersE">
  <div class="modal-dialog modal-lg">
    <div class="modal-content " style='border-top-right-radius: 10px; border-top-left-radius: 10px;'>
<script>
    $("#upfile1").click(function () {
                $("#imgU").trigger('click');
            }); 
</script>
      <!-- Modal Header -->
      <div class="modal-header wrap-contact100 contact100-form-title " style='border-top-right-radius: 10px; border-top-left-radius: 10px; background-image: url(<?php echo base_url('img/bg-01.jpg')?>);'>
      <button type="button" class="close pt-2 mt-0 text-light " data-dismiss="modal">&times;</button> 
      <h2 class="modal-title text-center text-light ">Editar Usuario</h2>
      </div>

      <!-- Modal body -->
      <div id='modalU' class="modal-body">
          
      <form id='editarUserM' enctype='multipart/form-data'  method="post">
      <label class='text-success  ' style='opacity: 0.8;'>Foto</label><br>
          <div class="  border-0" style="width: 8em;">
            <img class="card-img-top rounded-circle" id='upfile1'src="<?php echo base_url('img/user3.png')?>" width='1%' height='10%'>
            <div class="card-body">
                    <input type="file" class="form-control-file" name="imgU"   id="imgU" hidden>
                    
            </div>
         </div>

         <div class=' ml-6 pl-5 pr-0 mr-0 pt-4'style='display: flex; height: 10em; flex-wrap: wrap; align-content: center; width:650px'>
              <div class='pr-5'>
                <label class='text-success '  style='opacity: 0.8;'>Nombre</label><br>
                <input class=' border-0 text-center' type="text" name='nombre' id='Nommue' style='width:250px'>
                <hr class='mt-0 pt-0' style='width:250px'><br>
              </div>

              <div class='pl-5'>
                <label class='text-success  ' style='opacity: 0.8;'>Alias</label><br>
                <input class=' border-0 text-center mb-0 pb-0' type="text" name='alias' id='Alimue'>
                <hr class='mt-0 pt-0' style='width:120px'><br>
              </div>
              <div class='pr-5'>
                <label class='text-success  ' style='opacity: 0.8;'>Correo</label><br>
                <input class=' border-0 text-center mb-0 pb-0' type="text" name='correo' id='Corrmue'><hr class='mt-0 pt-0' style='width:250px'><br>
                <input class=' border-0 text-center mb-0 pb-0' type="text" name='id' id='idmue' hidden>
              </div>
              <div class='pl-5'>
                <label class='text-success  ' style='opacity: 0.8;'>Clave</label><br>
                <input class=' border-0 text-center mb-0 pb-0' placeholder='*****' type="password" name='cve' id='cve'>
                <hr class='mt-0 pt-0' style='width:200px'><br>
              </div>
        </div>

          </form>
          <!-- <label >Menu</label><br>
          <select class="select" id='MUserA'>
            
          </select> -->


          
      </div>

      <!-- Modal footer -->
      <div class="modal-footer border-0">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-success" data-dismiss="modal" onclick='editUser()' >Guardar</button>
      </div>

    </div>
  </div>
</div>

<script>
 
   
  function userclick2() {
	let padre = this.parentNode;
	let hijo = padre.childNodes[1];
	let temp = hijo.id;
	array = temp.split("-");
 
	nombre = hijo.innerText;
	alias = array[1];
	id = array[0];
	correo=array[2];
	document.getElementById("Nommue").value = nombre;
	document.getElementById("Alimue").value = alias;
	document.getElementById("idmue").value = id;
	document.getElementById("Corrmue").value = correo;
	document.getElementById("upfile1").setAttribute('src',padre.childNodes[0].childNodes[0].src)

	console.log(" click 2  -> id " + id + " nom " + nombre + " alias " + alias);
  $("#ModalUsersE").modal("show");
	 
	 
}

$(document).ready(function() {
    $('#table').dataTable( {
        "language": {
            "url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Spanish.json"
        },
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
  cargaUser()
  function cargaUser() {
    let sis=document.getElementById('sitioURL').value
   $.ajax({
     url: sis+"php/users.php",
     success: function (r) {
       t = document.getElementById("tuser");
    
       
        t.innerHTML=''
       r2 = JSON.parse(r);
       //console.log('User '+t)
       for (i = 0; i < r2.length; i++) {
         let div = document.createElement("select");
         div.className = "selectpicker  bg-transparent border-0";
         
         div.setAttribute("onchange", 'menuF(this,"<?php echo ($user)?>")');
         div.id='MenuFV'

         let tr = document.createElement("tr");
         let td = document.createElement("td");
         let td2 = document.createElement("td");
         let td3 = document.createElement("td");
         let td4 = document.createElement("td");
         let td5 = document.createElement("td");
         let td6 = document.createElement("td");
         let btn = document.createElement("button");
         let btn2 = document.createElement("button");
         let img = document.createElement("img");
         let img2 = document.createElement("img");
         let img3 = document.createElement("img");
          
         img.setAttribute("src","data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjQwMXB0IiB2aWV3Qm94PSIwIC0xIDQwMS41NDExIDQwMSIgd2lkdGg9IjQwMXB0IiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxwYXRoIGQ9Im0zODEuMjg5MDYyIDMyLjI0MjE4OGMxMy42NzE4NzYgMTMuNjY0MDYyIDEzLjY3MTg3NiAzNS44MjQyMTggMCA0OS40ODgyODFsLTE3LjY3OTY4NyAxNy42Nzk2ODctNjEuMjMwNDY5LTYxLjIzMDQ2OCAxNy42Nzk2ODgtMTcuNjc5Njg4YzEzLjY3MTg3NS0xMy42Njc5NjkgMzUuODMyMDMxLTEzLjY2Nzk2OSA0OS41IDB6bTAgMCIgZmlsbD0iIzAwYWNlYSIvPjxwYXRoIGQ9Im0zNjMuNjA5Mzc1IDk5LjQxMDE1Ni0xNjAuMTQ4NDM3IDE2MC4xNjAxNTZoLS4wMTE3MTlsLTYxLjIzMDQ2OS02MS4yMzA0NjggMTYwLjE2MDE1Ni0xNjAuMTYwMTU2em0wIDAiIGZpbGw9IiMwMGVmZDEiLz48cGF0aCBkPSJtMTQyLjIxODc1IDE5OC4zMzk4NDQgNjEuMjMwNDY5IDYxLjIzMDQ2OC0uNTcwMzEzLjU3MDMxMy04NC42ODc1IDIzLjQ2MDkzNyAyMy40NTcwMzItODQuNjkxNDA2em0wIDAiIGZpbGw9IiNmZWRiNDEiLz48ZyBmaWxsPSIjMDgzODYzIj48cGF0aCBkPSJtMzcwLjU4OTg0NCAyNTAuOTYwOTM4Yy01LjUyMzQzOCAwLTEwIDQuNDc2NTYyLTEwIDEwdjg4Ljc4OTA2MmMtLjAxOTUzMiAxNi41NjI1LTEzLjQzNzUgMjkuOTgwNDY5LTMwIDMwaC0yODAuNTg5ODQ0Yy0xNi41NjI1LS4wMTk1MzEtMjkuOTgwNDY5LTEzLjQzNzUtMzAtMzB2LTI2MC41ODk4NDRjLjAxOTUzMS0xNi41NTg1OTQgMTMuNDM3NS0yOS45ODA0NjggMzAtMzBoODguNzg5MDYyYzUuNTIzNDM4IDAgMTAtNC40NzY1NjIgMTAtMTAgMC01LjUyMzQzNy00LjQ3NjU2Mi0xMC0xMC0xMGgtODguNzg5MDYyYy0yNy42MDE1NjIuMDMxMjUtNDkuOTY4NzUgMjIuMzk4NDM4LTUwIDUwdjI2MC41ODk4NDRjLjAzMTI1IDI3LjYwMTU2MiAyMi4zOTg0MzggNDkuOTY4NzUgNTAgNTBoMjgwLjU4OTg0NGMyNy42MDE1NjItLjAzMTI1IDQ5Ljk2ODc1LTIyLjM5ODQzOCA1MC01MHYtODguNzg5MDYyYzAtNS41MjM0MzgtNC40NzY1NjMtMTAtMTAtMTB6bTAgMCIvPjxwYXRoIGQ9Im0zNzYuNjMyODEyIDEzLjQyOTY4OGMtMTcuNTg5ODQzLTE3LjU0Njg3Ni00Ni4wNTg1OTMtMTcuNTQ2ODc2LTYzLjY0NDUzMSAwbC0xNzguNDEwMTU2IDE3OC40MTAxNTZjLTEuMjE4NzUgMS4yMjI2NTYtMi4xMDU0NjkgMi43MzgyODEtMi41NjY0MDYgNC4zOTg0MzdsLTIzLjQ1NzAzMSA4NC42OTE0MDdjLS45NjQ4NDQgMy40NzI2NTYuMDE1NjI0IDcuMTkxNDA2IDIuNTYyNSA5Ljc0MjE4NyAyLjU1MDc4MSAyLjU0Njg3NSA2LjI2OTUzMSAzLjUyNzM0NCA5Ljc0MjE4NyAyLjU2NjQwNmw4NC42OTE0MDYtMjMuNDYwOTM3YzEuNjY0MDYzLS40NjA5MzggMy4xODM1OTQtMS4zNDc2NTYgNC40MDYyNS0yLjU3MDMxM2wuNTY2NDA3LS41NzAzMTIgMTc3LjgzNTkzNy0xNzcuODM1OTM4YzE3LjU3NDIxOS0xNy41NzAzMTIgMTcuNTc0MjE5LTQ2LjA1ODU5MyAwLTYzLjYyODkwNnptLTIyOS42NzU3ODEgMjAzLjc4OTA2MiAzNy42MTMyODEgMzcuNjE3MTg4LTUyLjAzMTI1IDE0LjQxNDA2MnptNTYuNSA0Mi4zNTU0Njl2LS4wMDc4MTNsNi41MTk1MzEgNi41MTk1MzJ6bTAtMTQuMTQwNjI1LTQ3LjA5Mzc1LTQ3LjA5Mzc1IDE0Ni4wMTU2MjUtMTQ2LjAxNTYyNSA0Ny4wODk4NDQgNDcuMDg1OTM3em0xNzAuNzYxNzE5LTE3MC43NzM0MzgtMTAuNjA5Mzc1IDEwLjYwOTM3NS00Ny4wODU5MzctNDcuMDg5ODQzIDEwLjYwOTM3NC0xMC42MDkzNzZjOS43NjU2MjYtOS43NDYwOTMgMjUuNTgyMDMyLTkuNzQ2MDkzIDM1LjM1MTU2MyAwbDExLjczNDM3NSAxMS43NDYwOTRjOS43NjU2MjUgOS43NTc4MTMgOS43NjU2MjUgMjUuNTg1OTM4IDAgMzUuMzQzNzV6bTAgMCIvPjwvZz48L3N2Zz4=")
         img.setAttribute("width","22px")
 
         img2.setAttribute("src","data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjQ2N3B0IiB2aWV3Qm94PSItNjAgMCA0NjcgNDY3LjAwMDYxIiB3aWR0aD0iNDY3cHQiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0ibTMzNi4zOTg0MzggOTIuODAwNzgxdjU2aC0zMjYuMzk4NDM4di01NmMwLTE2LjU3MDMxMiAxMy40MzM1OTQtMzAgMzAtMzBoMjY2LjM5ODQzOGMxNi41NzAzMTIgMCAzMCAxMy40Mjk2ODggMzAgMzB6bTAgMCIgZmlsbD0iIzAwZWZkMSIvPjxwYXRoIGQ9Im0zMDcuODAwNzgxIDE0OS4xOTkyMTl2MjY0LjgwMDc4MWMwIDI1LjA4OTg0NC0xNy45MTAxNTYgNDMtNDAgNDNoLTE4OS4xOTkyMTljLTIyLjA4OTg0MyAwLTQwLTE3LjkxMDE1Ni00MC00M3YtMjY1LjE5OTIxOWgyNjkuMTk5MjE5em0wIDAiIGZpbGw9IiMwMGFjZWEiLz48ZyBmaWxsPSIjMDgzODYzIj48cGF0aCBkPSJtMjMyLjYwMTU2MiA0MDQuMTk5MjE5YzUuNTIzNDM4IDAgMTAtNC40NzY1NjMgMTAtMTB2LTE5OWMwLTUuNTIzNDM4LTQuNDc2NTYyLTEwLTEwLTEwLTUuNTIzNDM3IDAtMTAgNC40NzY1NjItMTAgMTB2MTk5YzAgNS41MjM0MzcgNC40NzY1NjMgMTAgMTAgMTB6bTAgMCIvPjxwYXRoIGQ9Im0xMTMuODAwNzgxIDQwNC4xOTkyMTljNS41MjM0MzggMCAxMC00LjQ3NjU2MyAxMC0xMHYtMTk5YzAtNS41MjM0MzgtNC40NzY1NjItMTAtMTAtMTAtNS41MjM0MzcgMC0xMCA0LjQ3NjU2Mi0xMCAxMHYxOTljMCA1LjUyMzQzNyA0LjQ3NjU2MyAxMCAxMCAxMHptMCAwIi8+PHBhdGggZD0ibTMwNi4zOTg0MzggNTIuODAwNzgxaC00OC43OTY4NzZ2LTEyLjgwMDc4MWMtLjAyNzM0My0yMi4wODIwMzEtMTcuOTIxODc0LTM5Ljk3NjU2MjUtNDAtNDBoLTg4LjgwMDc4MWMtMjIuMDgyMDMxLjAyMzQzNzUtMzkuOTc2NTYyIDE3LjkxNzk2OS00MCA0MHYxMi44MDA3ODFoLTQ4LjgwMDc4MWMtMjIuMDgyMDMxLjAyMzQzOC0zOS45NzY1NjI1IDE3LjkxNzk2OS00MCA0MHY1NmMwIDUuNTIzNDM4IDQuNDc2NTYyIDEwIDEwIDEwaDE4LjYwMTU2MnYyNTUuMTk5MjE5YzAgMTQuNTYyNSA1LjEzNjcxOSAyNy45ODQzNzUgMTQuNDY4NzUgMzcuODAwNzgxIDkuMjMwNDY5IDkuNzYxNzE5IDIyLjA5Mzc1IDE1LjI2NTYyNSAzNS41MzEyNSAxNS4xOTkyMTloMTg5LjE5OTIxOWMxMy40Mzc1LjA2NjQwNiAyNi4zMDA3ODEtNS40Mzc1IDM1LjUzMTI1LTE1LjE5OTIxOSA5LjMzMjAzMS05LjgxMjUgMTQuNDY4NzUtMjMuMjM4MjgxIDE0LjQ2ODc1LTM3LjgwMDc4MXYtMjU1LjE5OTIxOWgxOC41OTc2NTdjNS41MjM0MzcgMCAxMC00LjQ3NjU2MiAxMC0xMHYtNTZjLS4wMjM0MzgtMjIuMDgyMDMxLTE3LjkxNzk2OS0zOS45NzY1NjItNDAtNDB6bS0xOTcuNTk3NjU3LTEyLjgwMDc4MWMuMDExNzE5LTExLjAzOTA2MiA4Ljk2MDkzOC0xOS45ODgyODEgMjAtMjBoODguODAwNzgxYzExLjAzOTA2My4wMTE3MTkgMTkuOTg0Mzc2IDguOTYwOTM4IDIwIDIwdjEyLjgwMDc4MWgtMTI4LjgwMDc4MXptMTg5IDM3NGMwIDE4LjgxMjUtMTIuOTAyMzQzIDMzLTMwIDMzaC0xODkuMTk5MjE5Yy0xNy4xMDE1NjIgMC0zMC0xNC4xODc1LTMwLTMzdi0yNTUuMTk5MjE5aDI0OS4xOTkyMTl6bTI4LjU5NzY1Ny0yNzUuMTk5MjE5aC0zMDYuMzk4NDM4di00NmMuMDExNzE5LTExLjA0Mjk2OSA4Ljk2MDkzOC0xOS45ODgyODEgMjAtMjBoMjY2LjM5ODQzOGMxMS4wNDI5NjguMDExNzE5IDE5Ljk4ODI4MSA4Ljk1NzAzMSAyMCAyMHptMCAwIi8+PC9nPjwvc3ZnPg==")
         img2.setAttribute("width","22px")
           
         img3.setAttribute("src",sis+""+r2[i].img_user)
         img3.setAttribute("width","35px")
         img3.className="rounded-circle "

         btn.appendChild(img)
         btn2.appendChild(img2)
         btn.className='bg-transparent border-0'
         btn.addEventListener("click", userclick, false);

         td.addEventListener("click", userclick2, false);
         td3.addEventListener("click", userclick2, false);
         td4.addEventListener("click", userclick2, false);
       
         
         btn2.className='bg-transparent border-0'
         btn2.addEventListener("click", eliminaUser, false);
         td2.appendChild(btn)
         td2.appendChild(btn2)


         td6.appendChild(img3)
         td6.className='pl-5 pr-0 mr-0'
         td.className='pt-3'
         td2.className='pt-3 d-flex justify-content-center'
         td3.className='pt-3'
         td4.className='pt-3'
         td5.className='pt-3'
         
         td.innerHTML = r2[i].nomCom;
         td6.id = r2[i].id+'-'+r2[i].nombre+'-'+r2[i].Correo;
         td.id = r2[i].id+'-'+r2[i].nombre+'-'+r2[i].Correo;
         td3.innerHTML = r2[i].Correo;
         td4.innerHTML = r2[i].nombre;
         td.className='pl-5 pt-3'
          
        
         let nomTem=r2[i].nomCom
         $.ajax({
          url: sis+"php/consulta.php",
          success: function (r) {
            r3 = JSON.parse(r);
            contenedor = document.getElementById("MenuFV");
            for (j = 0; j < r3.length; j++) {
              let a = document.createElement("option");
              a.innerHTML = r3[j].nomMenu;
              a.id = r3[j].id;
              if( r3[j].usuario==nomTem){
                a.setAttribute('selected',true)
              }
              div.appendChild(a);
              
            } 
            
          },
        });
        td5.appendChild(div)
              tr.appendChild(td6);
              tr.appendChild(td);
              tr.appendChild(td4);
              tr.appendChild(td3);
              tr.appendChild(td5);
              tr.appendChild(td2); 
              t.appendChild(tr);
       }
       
 
     },
   });
    
   //
   
   //
   
 }
</script>
<style>
   .contact100-form-title {
    width: 100%;
    position: relative;
    z-index: 1;
    display: -webkit-box;
    display: -webkit-flex;
    display: -moz-box;
    display: -ms-flexbox;
    display: flex;
    flex-wrap: wrap;
    flex-direction: column;
    align-items: center;
  
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
  
    padding: 0px 15px 40px 15px;
  }
  .contact100-form-title::before {
  content: "";
  display: block;
  position: absolute;
  border-top-right-radius: 10px;
   border-top-left-radius: 10px;
  z-index: -1;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  background-color: rgba(54,84,99,0.7);
}
wrap-contact100 {
  width: 670px;
  background: #fff;
  border-radius: 10px;
  overflow: hidden;
  position: relative;
}
</style>
      <!-- The Modal user Agrega -->
<div class="modal" id="ModalUsersA">
  <div class="modal-dialog modal-lg">
    <div class="modal-content" style='border-top-right-radius: 10px; border-top-left-radius: 10px;'>

      <!-- Modal Header -->
      <div class="modal-header wrap-contact100 contact100-form-title " style="border-top-right-radius: 10px; border-top-left-radius: 10px; background-image: url(<?php echo base_url('img/bg-01.jpg')?>);">
      <button type="button" class="close pt-2 mt-0 text-light " data-dismiss="modal">&times;</button> 
      <h2 class="modal-title text-center text-light ">Agregar Usuario</h2>
      </div>
      <script>
              $("#upfile11").click(function () {
                $("#imgU").trigger('click');
            }); 
            
            </script>
      <!-- Modal body -->
   
      <div id='modalU' class="modal-body">
          
      <form id='agregaUser' enctype='multipart/form-data'  method="post">
      <label class='text-success  ' style='opacity: 0.8;'>Foto</label><br>
          <div class="  border-0" style="width: 8em;">
            <img class="card-img-top rounded-circle" id='upfile11'src="<?php echo base_url('img/user.png')?>" width='1%' height='10%'>
            <div class="card-body">
                    <input type="file" class="form-control-file" name="imgU"   id="imgU" hidden>
                    
            </div>
         </div>

         <div class=' ml-6 pl-5 pr-0 mr-0 pt-4'style='display: flex; height: 10em; flex-wrap: wrap; align-content: center; width:650px'>
              <div class='pr-5'>
                <label class='text-success '  style='opacity: 0.8;'>Nombre</label><br>
                <input class=' border-0 text-center' type="text" name='nombre'placeholder='user ' id='nombreI' style='width:250px'>
                <hr class='mt-0 pt-0' style='width:250px'><br>
              </div>

              <div class='pl-5'>
                <label class='text-success  ' style='opacity: 0.8;'>Alias</label><br>
                <input class=' border-0 text-center mb-0 pb-0' placeholder='user2'type="text" name='alias' id='aliasI'>
                <hr class='mt-0 pt-0' style='width:120px'><br>
              </div>
              <div class='pr-5'>
                <label class='text-success  ' style='opacity: 0.8;'>Correo</label><br>
                <input class=' border-0 text-center mb-0 pb-0' placeholder='admin@gmail.com'type="text" name='correo' id='correoI'><hr class='mt-0 pt-0' style='width:250px'><br>
               
              </div>
              <div class='pl-5'>
                <label class='text-success  ' style='opacity: 0.8;'>Clave</label><br>
                <input class=' border-0 text-center mb-0 pb-0' placeholder='*****' type="password" name='clave' id='claveI'>
                <hr class='mt-0 pt-0' style='width:200px'><br>
              </div>
        </div>

          </form>
    
          
      </div>


      <!-- Modal footer -->
      <div class="modal-footer border-0">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-success" data-dismiss="modal" onclick='agregarUser()' >Guardar</button>
      </div>

    </div>
  </div>
</div>


      
 <!-- The Modal -->
 <div class="modal fade" id="ModalEliminaU">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
      
         
        <!-- Modal body -->
        <div class="modal-body" id='MeUser'>
          <h2>Atención!!</h2>
          <span class='text-danger'>Esta a punto de eliminar al usuario</span><br>
          <span id='EUc' ></span>
          <input type="text" id='EliminaUser' hidden></div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal" onclick='ContinuaElimina()'>Eliminar</button>
        </div>
        
      </div>
    </div>
  </div>
</center>
    </div>
     </div>
    
        <!-- Page Content  -->
         
     <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    
    <!-- Control sidebar content goes here -->
  </aside>
   
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->

<!-- Bootstrap -->
<script src="<?php echo base_url('plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
<!-- AdminLTE -->
<script src="<?php echo base_url('dist/js/adminlte.js')?>"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="<?php echo base_url('plugins/chart.js/Chart.min.js')?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('dist/js/demo.js')?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url('dist/js/pages/dashboard3.js')?>"></script>

</body>
</html>
