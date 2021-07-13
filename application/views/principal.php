<script>
  window.onload = function () {
    if (<?php echo $msg;?>==1) {
      iniciar();
    }
  }
</script>

<body>
  <center>
    <h1>Cuerpo</h1>

    <div class="container">
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col " class="text-center">Usuarios</th>
            <th></th>
          </tr>
        </thead>
        <tbody>

        <?php
        foreach($usuarios as $key => $use){
        

        echo("<tr>");
        echo("<td>");
          echo $use['nomCom'];
        echo("</td>");
        echo("<td>");
          echo("<button type='button' class='btn btn-primary' data-toggle='modal' data-target='#modal'> play</button>");
        echo("</td>");
        echo("</tr>");
        }
  
        ?>
         
        </tbody>
      </table>
    </div>
  </center>

  <div class="modal" tabindex="-1" role="dialog" id="modal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Registro de tiempos</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <center>
            <form action="<?php echo site_url('Inicio/guarda')?>" method="post">
              Nombre: <br /><input type="text" value="Marco Antonio Eleno Tovar" name="nombre" readonly
                style="width: 200px" /><br /><br />
              <input id="fecha" type="text" name="fecha" readonly style="width: 80px" hidden />
              <input id="hrs_i" type="text" name="hrs_i" readonly style="width: 80px" hidden  />
              <input id="hrs_f" type="text" name="hrs_f" readonly style="width: 80px" hidden  />
              <input class="text-center" id="horas" type="text" value="0 " name="t1" readonly style="width: 35px" />
              :
              <input class="text-center" id="minutos" type="text" value="0 " name="t2" readonly style="width: 35px" />
              :
              <input class="text-center" id="segundos" type="text" value="0 " name="t3" readonly
                style="width: 35px" /><br /><br />

              <input type="button" onclick="iniciar()"value="Inicio" />
              <input type="button" onclick="detenerse()" value="Pausa" />
              <input type="submit" value="finalizar" />

              <br />
              <br />
              <br />
            </form>
          </center>
          <?php //print_r($msg)?>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">
            Close
          </button>
        </div>
      </div>
    </div>
  </div>

  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
 
  
 

 

</body>

<script type="text/javascript">
  var f = new Date();
  
  document.getElementById("fecha").value =
    f.getFullYear() + "-" + (f.getMonth() + 1) + "-" + f.getDate();
  

  var cronometro;
  contador_s = 1;
  contador_m = 0;
  contador_h = 0;

  function detenerse() {
    
    document.getElementById("hrs_f").value =f.getHours() + ":" + f.getMinutes() + ":" + f.getSeconds();
    clearInterval(cronometro);
  }

  function iniciar() {

    document.getElementById("hrs_i").value =f.getHours() + ":" + f.getMinutes() + ":" + f.getSeconds();
    s = document.getElementById("segundos");
    m = document.getElementById("minutos");
    h = document.getElementById("horas");

    cronometro = setInterval(function () {
      
      document.getElementById("segundos").value = eval(contador_s);
      if (contador_s == 60) {
        contador_s = 0;
        contador_m++;
        document.getElementById("minutos").value = eval(contador_m);
      }
      if (contador_m == 60) {
        contador_m = 0;
        contador_h++;
        document.getElementById("minutos").value = eval(contador_h);
      }
      s.innerHTML = contador_s;
      contador_s++;
    }, 1000);
  }
</script>
 

