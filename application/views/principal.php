<script>
  var intervalo ={};
  var i;
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<body>
  <center>
    <h1>Cuerpo</h1>

    <div class="container">
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col " class="text-center"><h4>U s u a r i o s</h4></th>
            <th scope="col " class="text-center col-2"><h4> </h4></th>
            <th scope="col " class="text-center col-2"><h4> </h4></th>
            <th></th>
          </tr>
        </thead>
        <tbody>

        <?php
        foreach($usuarios as $key => $use){
        $u=$use['nomCom'];
        $domain = substr($u, 0,strpos($u,' '));
        

        echo("<tr>");
        echo("<td>");
          echo $u;
          ?>
        <br><input class="text-center" id="horas2<?php echo($domain)?>" type="text" value="0 " name="t1" readonly style="width: 35px" />
              :
              <input class="text-center" id="minutos2<?php echo($domain)?>" type="text" value="0 " name="t2" readonly style="width: 35px" />
              :
              <input class="text-center" id="segundos2<?php echo($domain)?>" type="text" value="0 " name="t3" readonly
                style="width: 35px" />
        <?php
        echo("</td>");
        
        echo("<td>");
           
          echo("<button ' type='button' id='play".$domain."' class='btn btn-primary' data-toggle='modal' data-target='#".$domain."'> play</button>"); 
          
        ?>  
         
<div class="modal" tabindex="-1" role="dialog" id="<?php echo($domain)?>">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Registro de tiempos</h5>
            
          </button>
        </div>
        <div class="modal-body">
          <center>
            <form action="<?php echo site_url('Inicio/guarda')?>" method="post">
              Nombre: <br /><br><input type="text" value="<?php echo($u)?>" name="nombre" readonly
                style="width: 200px" /><br /><br />
              <input id="fecha" type="text" name="fecha" readonly style="width: 80px" hidden />
              <input id="hrs_i" type="text" name="hrs_i" readonly style="width: 80px" hidden  />
              <input id="hrs_f" type="text" name="hrs_f" readonly style="width: 80px" hidden  /><br /> 
              <input class="text-center" id="horas<?php echo($domain)?>" type="text" value="0 " name="t1" readonly style="width: 35px" />
              :
              <input class="text-center" id="minutos<?php echo($domain)?>" type="text" value="0 " name="t2" readonly style="width: 35px" />
              :
              <input class="text-center" id="segundos<?php echo($domain)?>" type="text" value="0 " name="t3" readonly
                style="width: 35px" /><br /><br /><br /> 

              <input type="button" onclick="iniciar(<?php echo($domain)?>)" value="Inicio" class="btn btn-success" />
              <input type="button" onclick="detenerse(<?php echo($domain)?>)" value="Pausa" class="btn btn-primary"/>
              <input type="submit" value="finalizar" class="btn btn-danger"/>

              <br />
              <br />
              <br />
            </form>
          </center>
          <?php //print_r($msg)?>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-dark" data-dismiss="modal">
            Close
          </button>
        </div>
      </div>
    </div>
  </div>
        <?php
 echo("</td>");
 echo("<td>");
 echo("<button  type='button' id='info".$domain."' class='btn btn-info ' data-toggle='modal' data-target='#i".$domain."'> info</button>");
 ?>
 <div class="modal" tabindex="-1" role="dialog" id="i<?php echo($domain)?>">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
        <div class="container">
          <div class="dropdown">
            <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Estadisticas
            <span class="caret"></span></button>
            <ul class="dropdown-menu">
              <li><a href="#">Dia</a></li>
              <li><a href="#">Semana</a></li>
              <li><a href="#">Mes</a></li>
               
            </ul>
          </div>
        </div>
            
          </button>
        </div>
        <div class="modal-body">
           
        
          <?php //print_r($msg)?>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-dark" data-dismiss="modal">
            Close
          </button>
        </div>
      </div>
    </div>
  </div>
 <?php
 echo("</td>");
 
 echo("</tr>");
        }
  
        ?>
         
        </tbody>
      </table>
    </div>
  </center>


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

<script type="text/javascript" >
  var f = new Date();
  
  document.getElementById("fecha").value =
    f.getFullYear() + "-" + (f.getMonth() + 1) + "-" + f.getDate();
  

  var cronometro;
  

  function detenerse(nom) {
    nomb=nom['id'];
    btn=document.getElementById("play"+nomb);
    btn.innerHTML='Reanudar';
    document.getElementById("hrs_f").value =f.getHours() + ":" + f.getMinutes() + ":" + f.getSeconds();
    clearInterval(cronometro);
  }
  function btn() {
    btn=document.getElementById("play");
    btn.innerHTML='Play';
    btn.className = "btn btn-primary";
    
  } 

 function iniciar(nom) {
  contador_s = 1;
  contador_m = 0;
  contador_h = 0;
    nomb=nom['id']
    btn=document.getElementById("play"+nomb);
    btn.innerHTML='Pausar';
    btn.className = "btn btn-warning";

    document.getElementById("hrs_i").value =f.getHours() + ":" + f.getMinutes() + ":" + f.getSeconds();
    s = document.getElementById("segundos"+nomb);
    m = document.getElementById("minutos"+nomb);
    h = document.getElementById("horas"+nomb);

    cronometro = setInterval(function () {
      
      document.getElementById("segundos"+nomb).value = eval(contador_s);
      document.getElementById("segundos2"+nomb).value = eval(contador_s);
      if (contador_s == 60) {
        contador_s = 0;
        contador_m++;
        document.getElementById("minutos"+nomb).value = eval(contador_m);
        document.getElementById("minutos2"+nomb).value = eval(contador_m);
      }
      if (contador_m == 60) {
        contador_m = 0;
        contador_h++;
        document.getElementById("horas"+nomb).value = eval(contador_h);
        document.getElementById("horas2"+nomb).value = eval(contador_h);
      }
      s.innerHTML = contador_s;
      contador_s++;
    }, 1000);  
  }
</script>
 

