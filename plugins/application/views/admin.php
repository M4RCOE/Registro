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
  
  <link rel='stylesheet' type='text/css' media='screen' href='fontawesome-free/css/all.min.css'>
     


    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
        integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ"
        crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"
        integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY"
        crossorigin="anonymous"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="<?php echo base_url('js/jquery.mjs.nestedSortable.js')?>"></script>
    <script src="<?php echo base_url('js/mmenu.js')?>"></script>
 
</head>
 
<body class="hold-transition sidebar-mini">

<!--  <script>
   function poneMenu(user){
	  console.log('asignando '+user)
	 $.ajax({
		url: "http://localhost:82/residencia/php/asignaMenu.php",
		data: { user:user },
		type: "POST",
		success: function (r) {
			r2 = JSON.parse(r);
			console.log(r2);
		contenedor = document.getElementById("menusUser");
	 	contenedor.innerHTML = "";  
			for (i = 0; i < r2.length; i++) {
        let li = document.createElement("li");
        let ul = document.createElement("ul");
        let a = document.createElement("a");
        let p = document.createElement("p");
        ul.className='nav nav-treeview'
        ul.setAttribute('style','display: none;')
        a.setAttribute('href',r2[i].Enlace);
        a.setAttribute('target','_blank');
        a.className='nav-link'
        p.innerHTML=r2[i].Menu   
        li.className='nav-item'     
        a.appendChild(p)
        li.appendChild(a)
 

				if (r2[i].Nivel == 0) {
     
					contenedor.appendChild(li);
					
				} else if (r2[i].Nivel == 1) {
        
					c = contenedor.lastChild;
          console.log(c)
          console.log(r2[i].Menu+' '+c.tagName)
          if(c.tagName=='UL'){
            c.appendChild(li);
          }else{
            console.log('agrega UL')

            ul.appendChild(li);
            c.appendChild(ul);
          }
				
           
				} else if (r2[i].Nivel == 2) {
					c = contenedor.lastChild;
          
					c2 = c.lastChild;
					ol.appendChild(li);
				 
					c2.appendChild(ol);
				} else if (r2[i].Nivel == 3) {
					c = contenedor.lastChild;
					c2 = c.lastChild;
					c3 = c2.lastChild;
					ol.appendChild(li);
				 
					c3.appendChild(ol);
				} else if (r2[i].Nivel == 4) {
					c = contenedor.lastChild;
					c2 = c.lastChild;
					c3 = c2.lastChild;
					c4 = c3.lastChild;
					ol.appendChild(li);
				 
					c3.appendChild(ol);
				} else if (r2[i].Nivel == 5) {
					c = contenedor.lastChild;
					c2 = c.lastChild;
					c3 = c2.lastChild;
					c4 = c3.lastChild;
					c5 = c4.lastChild;
					ol.appendChild(li);
			 
					c3.appendChild(ol);
				} else if (r2[i].Nivel == 6) {
					c = contenedor.lastChild;
					c2 = c.lastChild;
					c3 = c2.lastChild;
					c4 = c3.lastChild;
					c5 = c4.lastChild;
					c6 = c5.lastChild;
					ol.appendChild(li);
		 
					c3.appendChild(ol);
				}
			}
		},
	});  
}
 </script> -->
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
      <li class="nav-item" onclick='cargaUser() '>
        <a class="nav-link"  href="<?php echo site_url('Inicio/admin2')?>"  role="button">
          
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
  <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
  <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
  <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
</svg>
        </a>
      </li>
      <li class="nav-item" onclick='cargaUser() '>
        <a class="nav-link"  href="<?php echo site_url('Inicio/cierra_sesion')?>"  role="button">
        <i class="fas fa-sign-out-alt"></i>
        </a>
      </li>
       
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

       
      </div>

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
            <h1 class="m-0">Menus</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v3</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
<hr class='p-0 m-0'>
    <!-- Main content -->
    <div class="wrapper2">
        <!-- Sidebar  -->
        <nav id="sidebar2">
            <div class="sidebar-header2">
               <center> <h3></h3></center>
               
            </div>

            <ul class="list-unstyled   ">
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false"
                        class="dropdown-toggle active">Crear Menu</a>
                       <hr style='width:220px'> 
                    <ul class="collapse list-unstyled  " id="pageSubmenu">
                        
                        <br>
                        <div class='ml-3'>
                            <input type="text" onkeyup="onKeyUp2(event)"class='rounded border-0 mb-2' placeholder="Nombre Menu" id='nmenu'
                                style="width: 200px;; height:40px; text-align: center;"><br>
                            
                         </div>    
                        <center>
                            <input type="button" onclick='agrega_menu()' class='rounded border-0 mt-3 mr-4' value='+'
                                style="width:80px; height:40px; text-align: center;">
                        </center>
                        <br>
                       
                    </ul>
                </li>


                <li>
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle ">Url Personalizado</a>
                    <hr style='width:220px'> 
                    <ul class="collapse list-unstyled " id="homeSubmenu">
                        <br>
                        <div class='ml-3'>
                            <input type="text" class='rounded border-0 mb-2' placeholder="URL" id='url'
                                style="width: 200px;; height:40px; text-align: center;"> 
                            <input onkeyup="onKeyUp(event)" type="text" class='rounded border-0 mt-3' placeholder="Texto de Enlace" id='textoUrl'
                                style="width:200px; height:40px; text-align: center;">

                        </div>
                        <center>
                            <input type="button" onclick='agrega()' class='rounded border-0 mt-3 mr-4' value='+'
                                style="width:80px; height:40px; text-align: center;">
                        </center>
                        <br>
                    </ul>
                </li>
                <li>
                    <ul>
                        <center>
                            <input   class="mt-5 mr-5 btn btn-warning dropdown-toggle" type="button" value="Guardar Menu" onclick="niveles()">
                        </center>
                    </ul>
                </li>

               
            </ul>

        </nav>
        <div id="content2">
        <div class="alert alert-success text-center" id='alerta1' hidden role='alert'>
        
 
</div>
            
            <div class="dropdown ml-0 dropright d-flex justify-content-between">
  
                <button class=" ml-3 btn btn-transparent dropdown-toggle dropdown-menu-right" type="button" id="dropdownMenuButton"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  >
                    <img src="data:image/svg+xml;base64,PHN2ZyBpZD0iQ2FwYV8xIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCA1MTIgNTEyIiBoZWlnaHQ9IjUxMiIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHdpZHRoPSI1MTIiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGc+PHBhdGggZD0ibTUxMiA5MWgtMTk2bC00NSA0NC41IDQ1IDQ1LjVoMTk2eiIgZmlsbD0iIzM4NTdiYyIvPjxwYXRoIGQ9Im0xMjAgOTFoMTk2djkwaC0xOTZ6IiBmaWxsPSIjM2E2ZmQ4Ii8+PGNpcmNsZSBjeD0iNDUiIGN5PSIxMzYiIGZpbGw9IiMxNGNmZmYiIHI9IjQ1Ii8+PHBhdGggZD0ibTUxMiAyMTFoLTE5NmwtNDUgNDQuNSA0NSA0NS41aDE5NnoiIGZpbGw9IiMzODU3YmMiLz48cGF0aCBkPSJtMTIwIDIxMWgxOTZ2OTBoLTE5NnoiIGZpbGw9IiMzYTZmZDgiLz48Y2lyY2xlIGN4PSI0NSIgY3k9IjI1NiIgZmlsbD0iIzE0Y2ZmZiIgcj0iNDUiLz48cGF0aCBkPSJtNTEyIDMzMWgtMTk2bC00NSA0NC41IDQ1IDQ1LjVoMTk2eiIgZmlsbD0iIzM4NTdiYyIvPjxwYXRoIGQ9Im0xMjAgMzMxaDE5NnY5MGgtMTk2eiIgZmlsbD0iIzNhNmZkOCIvPjxjaXJjbGUgY3g9IjQ1IiBjeT0iMzc2IiBmaWxsPSIjMTRjZmZmIiByPSI0NSIvPjwvZz48L3N2Zz4=" height='50px'/>
                     
                </button>
                 
                <h2>Contenedor</h2>
                <h1 id='h44'></h1>
                <h1></h1>
             
                 
            
                <div id='cmenu' class="dropdown-menu"  >
                   

                </div>
            </div>
            <center>
                <span id='menuS'></span>
                <span id='menuS2' hidden></span>
            </center>
            <div class='cc'>
                <ol id='contenedor' class="sortable">
                     <li><div>Menu</div></li>
                    

                </ol>
            </div>
            
        </div>
    </div>
    <script>
        $().ready(function () {
            var ns = $('ol.sortable').nestedSortable({
                forcePlaceholderSize: true,
                handle: 'div',
                helper: 'clone',
                items: 'li',
                opacity: .6,
                placeholder: 'placeholder',
                revert: 250,
                tabSize: 25,
                tolerance: 'pointer',
                toleranceElement: '> div',
                maxLevels: 4,
                isTree: true,
                expandOnHover: 700,
                startCollapsed: false,
                excludeRoot: true,
                rootID: "root"
            });

            $('.expandEditor').attr('title', 'Click to show/hide item editor');
            $('.disclose').attr('title', 'Click to show/hide children');
            $('.deleteMenu').attr('title', 'Click to delete item.');

            $('.disclose').on('click', function () {
                $(this).closest('li').toggleClass('mjs-nestedSortable-collapsed').toggleClass('mjs-nestedSortable-expanded');
                $(this).toggleClass('ui-icon-plusthick').toggleClass('ui-icon-minusthick');
            });

            $('.expandEditor, .itemTitle').click(function () {
                var id = $(this).attr('data-id');
                $('#menuEdit' + id).toggle();
                $(this).toggleClass('ui-icon-triangle-1-n').toggleClass('ui-icon-triangle-1-s');
            });

            $('.deleteMenu').click(function () {
                var id = $(this).attr('data-id');
                $('#menuItem_' + id).remove();
            });

            $('#serialize').click(function () {
                serialized = $('ol.sortable').nestedSortable('serialize');
                $('#serializeOutput').text(serialized + '\n\n');
            })

            $('#toHierarchy').click(function (e) {
                hiered = $('ol.sortable').nestedSortable('toHierarchy', { startDepthCount: 0 });
                hiered = dump(hiered);
                (typeof ($('#toHierarchyOutput')[0].textContent) != 'undefined') ?
                    $('#toHierarchyOutput')[0].textContent = hiered : $('#toHierarchyOutput')[0].innerText = hiered;
            })

            $('#toArray').click(function (e) {
                arraied = $('ol.sortable').nestedSortable('toArray', { startDepthCount: 0 });
                arraied = dump(arraied);
                (typeof ($('#toArrayOutput')[0].textContent) != 'undefined') ?
                    $('#toArrayOutput')[0].textContent = arraied : $('#toArrayOutput')[0].innerText = arraied;
            });
        });

        function dump(arr, level) {
            var dumped_text = "";
            if (!level) level = 0;

            //The padding given at the beginning of the line.
            var level_padding = "";
            for (var j = 0; j < level + 1; j++) level_padding += "    ";

            if (typeof (arr) == 'object') { //Array/Hashes/Objects
                for (var item in arr) {
                    var value = arr[item];

                    if (typeof (value) == 'object') { //If it is an array,
                        console.log("object", arr[item]);
                        dumped_text += level_padding + "'" + arr[item] + "' ...\n";
                        dumped_text += dump(value, level + 1);
                    } else {
                        dumped_text += level_padding + "'" + item + "' => \"" + value + "\"\n";
                    }
                }
            } else { //Strings/Chars/Numbers etc.
                dumped_text = "===>" + arr + "<===(" + typeof (arr) + ")";
            }
            return dumped_text;
        }




    </script>


<!-- Modal -->
<div class="modal fade" id="modalUrl" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modifica menu</h5>
         
      </div>
      <div class="modal-body ">
        <center>
        <label >Url</label><br>
       <input class='text-center' type="text" id='MUrl' placecholder='url'><br><br>
       <label >Texto enlace</label><br>
       <input class='text-center' type="text" id='MtxtUrl'placecholder='Texto enlace'><br><br>
       <label >Icono</label><br>
       <input type="text" name="icon" id="icon">
       <input class='text-center' type="text" id='MtxtUrl2'hidden>
       <input class='text-center' type="text" id='Mid'hidden>
        </center>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary" data-dismiss="modal"onclick='guarda_url(contenedor)'>guardar</button>
      </div>
    </div>
  </div>
</div>
    
        <!-- Page Content  -->
         
     <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0-rc
    </div>
  </footer>
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
