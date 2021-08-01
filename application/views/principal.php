<body>

  <br>
  <div>


    <center>


      <div class="container" style="width: 60%;">
        <table class="table table-hover " id="table">

          <thead class="thead bg-dark text-white ">

            <tr>
              <th colspan="7" class="text-center"
                style='border-top-right-radius: 10px; border-top-left-radius: 10px; border:0px;'>
                <H3>Residentes</H3>
              </th>


            </tr>
          </thead>
          <tbody>

            <?php
        foreach($usuarios as $key => $use){
        $u=$use['nomCom'];
        $domain = substr($u, 0,strpos($u,' '));
        

        echo("<tr class='datos' data-toggle='modal' data-id=".$domain."data-target='#im".$domain."'>");
        
        echo("<td hidden>".$domain."</td>");
        echo("<td class='p-0  '><img class='pr-3 pb-1  mt-2' src='https://image.flaticon.com/icons/png/512/843/843331.png 'width='75' height='60'style='position: relative;'align='right'></td>");
        echo("<td class='mt-1 pt-3 pb-2 mt-1 pl-0'>");
        
          echo ("<p style='font-size: 20px;width:240px;' class ='m-0' id='pr".$domain."'>".$u."</p>");
          ?>
            <div style="font-size: 12px">
              <span class="text-muted">Horas mensuales</span>
              <span class="text-muted mt-5" id='sp<?php echo($domain)?>'></span>
              <script>
                horas('<?php echo($u)?>')
                dia('<?php echo($u)?>')


              </script>
              <span class="text-muted ml-1 mr-0"> Actual</span>
              <span id='time<?php echo($domain)?>'></span>
              <input style="background-color:transparent; width: 13px" class="p-0 m-0 text-center border-0 text-muted"
                id="horas2<?php echo($domain)?>" type="text" value="00 " name="t1" disabled />
              <span class='p-0 m-0'>:</span>
              <input style="background-color:transparent;width: 13px" class="p-0 m-0 text-center border-0 text-muted"
                id="minutos2<?php echo($domain)?>" type="text" value="00 " name="t2" disabled />
              <span class='p-0 m-0'>:</span>
              <input style="background-color:transparent;width: 13px" class="p-0 m-0 text-center border-0 text-muted"
                id="segundos2<?php echo($domain)?>" type="text" value="00 " name="t3" disabled />

            </div>

            <?php
        
        echo("</td>");
        
        echo("<td colspan='2'>");
           ?>
           <div class='d-flex justify-content-center'>
           <button style=' border-radius: 24px; padding:10px 20px; border: 2px solid darkslategray;' onclick='desaparece(this)' id='bc1<?php echo($domain)?>' type='button'   class='btn btn-primary mt-1 pl-2 pr-2'  > Continuar</button>
           
          <button class="rounded-circle border-0 bg-transparent  translate-middle-x ml-5 mr-0 pr-0" id='bc<?php echo($domain)?>' onclick='aparece(this)'>
           <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIwIDAgNTEyIDUxMiIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNTEyIDUxMjsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPGNpcmNsZSBzdHlsZT0iZmlsbDojMjVEOUY4OyIgY3g9IjI1NiIgY3k9IjI1NiIgcj0iMjU2Ii8+DQo8cGF0aCBzdHlsZT0iZmlsbDojMDBDMEYxOyIgZD0iTTUwNi41LDMwOC45NjdsLTE3OC45Ni0xNzguOTZMMjM4LDEzN2wtNTEsNjhsLTMxLjU0Nyw0Mi40NjlMMTM3LjE3Miw0MTJsOTkuMjYyLDk5LjI2Mg0KCUMyNDIuODkyLDUxMS43NSwyNDkuNDE3LDUxMiwyNTYsNTEyQzM3OS4yMjQsNTEyLDQ4Mi4xLDQyNC45MzQsNTA2LjUsMzA4Ljk2N3oiLz4NCjxwYXRoIHN0eWxlPSJmaWxsOiM1QTVBNUE7IiBkPSJNMjU2LDEwMGMtNTUuMzkzLDAtMTAwLjU0Nyw0NS4xNTQtMTAwLjU0NywxMDAuNTQ3djU2LjA2M2g1NC44NDR2LTU2LjA2Mw0KCWMwLTI1LjIyOCwyMC40NzUtNDUuNzAzLDQ1LjcwMy00NS43MDNzNDUuNzAzLDIwLjQ3NSw0NS43MDMsNDUuNzAzdjU2LjA2M2g1NC44NDR2LTU2LjA2M0MzNTYuNTQ3LDE0NS4xNTQsMzExLjM5MywxMDAsMjU2LDEwMHoiLz4NCjxwYXRoIHN0eWxlPSJmaWxsOiM0NDQ0NDQ7IiBkPSJNMzU2LjU0NywyMDAuNTQ3djU2LjA2M2gtNTQuODQ0di01Ni4wNjNjMC0yNS4yMjgtMjAuNDc1LTQ1LjcwMy00NS43MDMtNDUuNzAzVjEwMA0KCUMzMTEuMzkzLDEwMCwzNTYuNTQ3LDE0NS4xNTQsMzU2LjU0NywyMDAuNTQ3eiIvPg0KPHBhdGggc3R5bGU9ImZpbGw6I0ZGRDQwMDsiIGQ9Ik0xMzcuMTcyLDI0Ny40NjlWNDEyaDIzNy42NTZWMjQ3LjQ2OUgxMzcuMTcyeiIvPg0KPHJlY3QgeD0iMjU2IiB5PSIyNDcuNDciIHN0eWxlPSJmaWxsOiNGRjlGMDA7IiB3aWR0aD0iMTE4LjgzIiBoZWlnaHQ9IjE2NC41MyIvPg0KPGc+DQoJPHBhdGggc3R5bGU9ImZpbGw6IzVBNUE1QTsiIGQ9Ik0yNTYsMjg0LjAzMWMtMTUuMTc0LDAtMjcuNDIyLDEyLjI0OC0yNy40MjIsMjcuNDIyYzAsMTUuMTczLDEyLjI0OCwyNy40MjIsMjcuNDIyLDI3LjQyMg0KCQljMTUuMTc0LDAsMjcuNDIyLTEyLjI0OSwyNy40MjItMjcuNDIyQzI4My40MjIsMjk2LjI3OSwyNzEuMTc0LDI4NC4wMzEsMjU2LDI4NC4wMzF6Ii8+DQoJPHJlY3QgeD0iMjQ2Ljg2IiB5PSIzMjkuNzMiIHN0eWxlPSJmaWxsOiM1QTVBNUE7IiB3aWR0aD0iMTguMjgxIiBoZWlnaHQ9IjQ1LjcwMyIvPg0KPC9nPg0KPGc+DQoJPHBhdGggc3R5bGU9ImZpbGw6IzQ0NDQ0NDsiIGQ9Ik0yODMuNDIyLDMxMS40NTNjMCwxNS4xNzMtMTIuMjQ4LDI3LjQyMi0yNy40MjIsMjcuNDIydi01NC44NDQNCgkJQzI3MS4xNzQsMjg0LjAzMSwyODMuNDIyLDI5Ni4yNzksMjgzLjQyMiwzMTEuNDUzeiIvPg0KCTxyZWN0IHg9IjI1NiIgeT0iMzI5LjczIiBzdHlsZT0iZmlsbDojNDQ0NDQ0OyIgd2lkdGg9IjkuMTQxIiBoZWlnaHQ9IjQ1LjcwMyIvPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPC9zdmc+DQo=" height='50px' />
           </button>
           
           <?php
          echo("<button style=' border-radius: 24px; padding:10px 20px; border: 2px solid darkslategray;' type='button' id='p".($domain)."' class='btn btn-success float-right mt-1 ' onclick=iniciar(this,0)> Iniciar</button>"); 
          
        ?>
</div>

            <script>
              oculta('<?php echo($domain)?>')
              corriendo('<?php echo($u)?>')


            </script>

            <form id="form<?php echo($domain)?>" method="post">
              <input id="nombre<?php echo($domain)?>" type="text" value="<?php echo($u)?>" name="nombre" hidden />
              <input id="fecha<?php echo($domain)?>" type="text" name="fecha" hidden />
              <input id="hrs_i" type="text" name="hrs_i" hidden />
              <input id="hrs_f" type="text" name="hrs_f" hidden />
              <input id="horas<?php echo($domain)?>" type="text" value="0 " name="t1" hidden />
              <input id="minutos<?php echo($domain)?>" type="text" value="0 " name="t2" hidden />
              <input id="segundos<?php echo($domain)?>" type="text" value="0 " name="t3" hidden />
            </form>
            <?php //print_r($msg)?>

            <?php
 echo("</td>");
 echo("<td>");
  
 ?>


            <div class="container">
              <!-- The Modal -->
              <div class="modal fade bd-example-modal-lg" id="im<?php echo($domain)?>">
                <div class="modal-dialog modal-lg modal-dialog-centered">
                  <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                      <h4 class="modal-title col-11 text-center">
                        <?php echo$u?>
                      </h4>

                    </div>

                    <!-- Modal body -->
                    <div class="modal-body d-flex justify-content-between aling-items-center flex-column text-center">
                      <ul class="nav nav-tabs" id="myTab" role="tablist">
                      <li class="nav-item">
                          <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile<?php echo($domain)?>"
                            role="tab" aria-controls="profile" aria-selected="false">Tareas</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link " id="home-tab" data-toggle="tab" href="#home<?php echo($domain)?>"
                            role="tab" aria-controls="home" aria-selected="true">Grafica</a>
                        </li>
                        

                      </ul>
                      <div class="tab-content" id="myTabContent" style='height:600px;'>
                        <div class="tab-pane fade  " id="home<?php echo($domain)?>" role="tabpanel"
                          aria-labelledby="home-tab">

                          <center>
                            <canvas class="border border-2" name="chart" id="myChart<?php echo $domain?>">
                            </canvas>
                          </center>
                        </div>

                        <script>	$('#a1').hide();</script>
                        <div class="tab-pane fade show active" id="profile<?php echo($domain)?>" role="tabpanel"
                          aria-labelledby="profile-tab">



                          <div id='<?php echo($u)?>' class='d-flex ' style="width:800px;">
                            <div>
                              <!--  -->
                              <div id='<?php echo($u)?>'
                                class="d-flex flex-column flex-shrink-0 mt-2 text-white bg-primary"
                                style="width:400px; height:580px;">
                                <br>
                                <h2 class="text-center">Calendario</h2>
                                <hr>
                                <center>


                                  <input type="text" class='rounded border-0' placeholder="Tarea"
                                    id='title<?php echo($domain)?>'
                                    style="width:320px; height:40px; text-align: center;">

                                  <input type="text" class='rounded border-0 mt-3' placeholder="Fecha"
                                    id='fecha2<?php echo($domain)?>'
                                    style="width:320px; height:40px; text-align: center;" readonly>


                                  <button type="button" class="mt-2 mb-1 btn btn-primary"
                                    onclick="tarea(this)">Agregar</button>
                                  <script>
                                    gg = new Date();

                                    document.getElementById("fecha2<?php echo($domain)?>").value = gg.getFullYear() + "-" + gg.getMonth() + "-" + gg.getDate();
                                  </script>

                                  <div id='<?php echo($u)?>' class="calendar pt-0 mt-0"
                                    style="width:300px; height:10px;">
                                    <div class="header" style="width:300px; height:75px;">
                                      <a data-action="prev-month" href="javascript:void(0)"
                                        title="Previous Month"><i></i></a>
                                      <div id='sp1' class="text" data-render="month-year"></div>
                                      <a data-action="next-month" href="javascript:void(0)"
                                        title="Next Month"><i></i></a>
                                    </div>
                                    <div class="months " data-flow="left">
                                      <div class="month month-a" style=" height:250px;">
                                        <div class="render render-a"></div>
                                      </div>
                                      <div class="month month-b">
                                        <div class="render render-b"></div>
                                      </div>
                                    </div>
                                  </div>


                                </center>


                              </div>

                              <!--  -->
                            </div>
                            <!--  -->
                            <div style="width:370px;">

                              <div id="content">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                  <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab"
                                      href="#contiene<?php echo($domain)?>" role="tab" aria-controls="home"
                                      aria-selected="true">Activa</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link  " id="home-tab" data-toggle="tab"
                                      href="#contiene2<?php echo($domain)?>" role="tab" aria-controls="home"
                                      aria-selected="true">Pausada</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link  " id="home-tab" data-toggle="tab"
                                      href="#contiene3<?php echo($domain)?>" role="tab" aria-controls="home"
                                      aria-selected="true">Cancelada</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link  " id="home-tab" data-toggle="tab"
                                      href="#contiene4<?php echo($domain)?>" role="tab" aria-controls="home"
                                      aria-selected="true">Terminada</a>
                                  </li>


                                </ul>

                                <center><br>
                                  <h4 class='text-center text-dark'>Tareas importantes</h4><br>
                                </center>
                                <nav class="navbar">
                                  <div class="tab-content" id="myTabContent">
                                    <div class="form-check text-dark menu tab-pane fade show active "
                                      id="contiene<?php echo($domain)?>"
                                      style='overflow-y: auto;height: 500px; width: 355px;'>
                                    </div>
                                    <div class="tab-pane fade text-dark menu" id="contiene2<?php echo($domain)?>"
                                      role="tabpanel" aria-labelledby="profile-tab" style='overflow-y: auto;height: 500px; width: 355px;'>
                                    </div>
                                    <div class="tab-pane fade text-dark menu" id="contiene3<?php echo($domain)?>"
                                      role="tabpanel" aria-labelledby="profile-tab"style='overflow-y: auto;height: 500px; width: 355px;'>
                                    </div>
                                    <div class="tab-pane fade text-dark menu" id="contiene4<?php echo($domain)?>"
                                      role="tabpanel" aria-labelledby="profile-tab"style='overflow-y: auto;height: 500px; width: 355px;'>
                                    </div>
                                  </div>


                              </div>

                              </nav>
                            </div>
                            <!--  -->
                          </div>

                        </div>


                      </div>

                      <!-- Modal footer -->
                      <div class="modal-footer d-flex justify-content-center">
                        <button type="button" class="btn btn-danger" id=<?php echo $domain?>
                          data-dismiss="modal">Cerrar</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>



              <div class="modal" tabindex="-1" id="modalTarea<?php echo($domain)?>">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id='TmT<?php echo($domain)?>'></h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <center>
                        <form id='CambiaTarea<?php echo($domain)?>'>
                          <input class='rounded border-1 border-secondary' type="text" name='id_tarea'
                            id='mid<?php echo($domain)?>' hidden>
                          <input class='rounded border-1 border-secondary' type="text" name='estado'
                            id='me<?php echo($domain)?>' value='Activa' hidden>
                          <input class='rounded border-1 border-secondary ' type="text" name='nombre'
                            id='mtn<?php echo($domain)?>' style="width:320px; height:40px; text-align: center;"
                            readonly><br>

                          <textarea class='rounded border-1 border-secondary mt-2' name='tarea' maxlength="300"
                            style="width:320px; height:50px; text-align: center;" name='tarea'
                            id='mtt<?php echo($domain)?>'></textarea>
                          <input class='rounded border-1 border-secondary mt-2' type="text" name='fecha'
                            id='mtf<?php echo($domain)?>' style="width:320px; height:40px; text-align: center;"><br>
                          <textarea class='rounded border-1 border-secondary mt-2' name='comentario' maxlength="300"
                            style="width:320px; height:40px; text-align: center;" placeholder='Comentario'></textarea>


                          <br><br>
                          <button class="btn btn-success btn-line-success btn-round" type="button"
                            onclick='document.getElementById("me<?php echo($domain)?>").value ="Activa"'>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M8 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L7.5 2.707V14.5a.5.5 0 0 0 .5.5z"/>
                          </svg></button>
                          <button class="btn btn-info btn-line-info btn-round" type="button"
                            onclick='document.getElementById("me<?php echo($domain)?>").value ="Terminada"'>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                              class="bi bi-check2" viewBox="0 0 16 16">
                              <path
                                d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
                            </svg></button>
                          <button class="btn btn-danger btn-line-danger btn-round" type="button"
                            onclick='document.getElementById("me<?php echo($domain)?>").value ="Cancelada"'>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                              class="bi bi-pause" viewBox="0 0 16 16">
                              <path
                                d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z">
                              </path>
                            </svg></button>
                          <button class="btn btn-secondary btn-line-secondary btn-round" type="button"
                            onclick='document.getElementById("me<?php echo($domain)?>").value ="Pausada"'>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                              class="bi bi-pause" viewBox="0 0 16 16">
                              <path
                                d="M6 3.5a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-1 0V4a.5.5 0 0 1 .5-.5zm4 0a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-1 0V4a.5.5 0 0 1 .5-.5z" />
                            </svg></button>
                          <br>

                        </form>

                      </center>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                      <button id='<?php echo($u)?>' type="button" class="btn btn-primary" onclick=cambiosT(this)
                        data-bs-dismiss="modal">Guardar</button>
                    </div>
                  </div>
                </div>
              </div>

            </div>

            <script>

              cargaTareas('<?php echo($u)?>');
              function cargaTareas(n) {
                nn = n.split(' ')
                console.log('Cargando')
                let contenedor = document.getElementById("contiene" + nn[0]);
                let contenedor2 = document.getElementById("contiene2" + nn[0]);
                let contenedor3 = document.getElementById("contiene3" + nn[0]);
                let contenedor4 = document.getElementById("contiene4" + nn[0]);
                contenedor.innerHTML = ''
                var parametros = { nomb: n };
                let r2
                $.ajax({
                  url: "http://localhost:82/residencia/php/muestraTareas.php",
                  type: "POST",
                  data: parametros,
                  success: function (r) {


                    if (r != 0) {

                      r2 = JSON.parse(r)
                      for (i = 0; i < r2.length; i++) {

                        if (r2[i].residente == n) {
                          let br = document.createElement("br");
                          let sp = document.createElement("span");
                          let hr = document.createElement("hr");
                          let div = document.createElement("div");
                          let newLabel = document.createElement("label");

                          div.className = "container";
                          sp.innerHTML = r2[i].estado
                          if (r2[i].estado == 'Activa') {
                            sp.className = 'float-right text-success'
                            sp.id = r2[i].id_tarea
                            newLabel.id = nn
                            newLabel.innerHTML = r2[i].fecha + ",   " + urlify(r2[i].tarea)
                            div.appendChild(newLabel);
                            div.appendChild(sp);
                            div.addEventListener("click", tareaclick, false);

                            contenedor.appendChild(div);
                            contenedor.appendChild(hr);
                            contenedor.appendChild(br);
                          } else if (r2[i].estado == 'Pausada') {
                            sp.className = 'float-right text-secundary'
                            sp.id = r2[i].id_tarea
                            newLabel.id = nn
                            newLabel.innerHTML = r2[i].fecha + ",   " + urlify(r2[i].tarea)
                            div.appendChild(newLabel);
                            div.appendChild(sp);
                            div.addEventListener("click", tareaclick, false);

                            contenedor2.appendChild(div);
                            contenedor2.appendChild(hr);
                            contenedor2.appendChild(br);
                          } else if (r2[i].estado == 'Cancelada') {
                            sp.className = 'float-right text-danger'
                            newLabel.id = nn
                            newLabel.innerHTML = r2[i].fecha + ",   " + urlify(r2[i].tarea)
                            div.appendChild(newLabel);
                            div.appendChild(sp);
                            div.addEventListener("click", tareaclick, false);

                            contenedor3.appendChild(div);
                            contenedor3.appendChild(hr);
                            contenedor3.appendChild(br);
                          } else if (r2[i].estado == 'Terminada') {
                            sp.className = 'float-right text-info'
                            newLabel.id = nn
                            newLabel.innerHTML = r2[i].fecha + ",   " + r2[i].tarea
                            div.appendChild(newLabel);
                            div.appendChild(sp);
                            div.addEventListener("click", tareaclick, false);

                            contenedor4.appendChild(div);
                            contenedor4.appendChild(hr);
                            contenedor4.appendChild(br);
                          }


                        }
                      }
                    }
                  },
                });

              }
              function tareaclick() {


                let txt = this.childNodes[0].innerText
                let txt3 = this.childNodes[1]
                let txt2 = txt.split(',')
                let name = this.childNodes[0].id
                console.log(txt2[0].replaceAll('-', '/') + '-> ' + name.split(',', 1))
                console.log(this.childNodes[0].id.replaceAll(',', ' '))

                document.getElementById("TmT" + name.split(',', 1)).innerText = "Tarea#" + txt3.id
                document.getElementById("mid" + name.split(',', 1)).value = txt3.id
                document.getElementById("mtn" + name.split(',', 1)).value = name.replaceAll(',', ' ')
                document.getElementById("mtt" + name.split(',', 1)).value = txt2[1]
                document.getElementById("mtf" + name.split(',', 1)).value = txt2[0]
                $("#modalTarea" + name.split(',', 1)).modal('show');


              }

            </script>
            <style>
              .menu div:hover {
                background-color: #e6f0ff;
                border-radius: 15px;
                border: 0px;
                padding: 15px;
              }

              html {
                min-height: 100%;
                position: relative;
              }

              body {
                margin: 0;
                margin-bottom: 70px;

              }
            </style>
            <?php

 echo("</td>");
 echo("</tr>");
        }
        ?>
          </tbody>
        </table>
      </div>
    </center>

    <form id="formenvia" method="post">
      <input id="nomb" type="text" value="" name="nomb" hidden />
      <input id="fech" type="text" name="fech" hidden />
      <input id="hr_i" type="text" name="hr_i" hidden />
      <input id="hr_f" type="text" name="hr_f" hidden />
      <input id="tiempo" type="text" value="0:0:0" name="tiempo" hidden />
      <input id="tiempo" type="text" value="1" name="play" hidden />
    </form>
    <form id="formenvia2" method="post">
      <input id="nomb2" type="text" value="" name="nomb" hidden />
      <input id="hr_f2" type="text" name="hr_f" hidden />
      <input id="tiempo2" type="text" value="0" name="tiempo" hidden />
      <input id="tiempo" type="text" value="1" name="play" hidden />
    </form>
</body>

<script type="text/javascript">

  $("#table td").each(function (e, value) {
    value.onclick = function (e) {
      if (e.target.nodeName === "TD") {
        $("#im" + e.target.parentNode.firstChild.innerText).modal("show");
      } else {
        $("#im" + e.target.id).modal("hide");
      }
    }
  });




</script>