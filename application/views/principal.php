

<body>
  <br>  
  <center>
   

    <div class="container" style="width: 50%;">
      <table class="table table-hover ">
      
        <thead class="thead bg-success text-white rounded">
        
          <tr>
          
            <th scope="col " colspan="3"class="text-center"><H3>Residentes</H3></th>
             
            <th></th>
          </tr>
        </thead>
        <tbody>

        <?php
        foreach($usuarios as $key => $use){
        $u=$use['nomCom'];
        $domain = substr($u, 0,strpos($u,' '));
        

        echo("<tr data-target='#i".$domain."'>");
        echo("<td >");
          echo $u;
          ?>
          
        <br><input class="text-center border-0 text-muted" id="horas2<?php echo($domain)?>" type="text" value="0 " name="t1" readonly style="width: 35px" />
              :
              <input class="text-center border-0 text-muted" id="minutos2<?php echo($domain)?>" type="text" value="0 " name="t2" readonly style="width: 35px" />
              :
              <input class="text-center border-0 text-muted" id="segundos2<?php echo($domain)?>" type="text" value="0 " name="t3" readonly
                style="width: 35px" />
        <?php
        echo("</td>");
        
        echo("<td colspan='2'>");
           
          echo("<button ' type='button' id='play".$domain."' class='btn btn-success float-right' data-toggle='modal' data-target='#".$domain."'> play</button>"); 
          
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
          
              <input type="button" onclick= "iniciar(<?php echo($domain)?> )" value="Inicio" class="btn btn-success" />
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
</body>

<script type="text/javascript" >
  var f = new Date();
  
  document.getElementById("fecha").value =
  f.getFullYear() + "-" + (f.getMonth() + 1) + "-" + f.getDate();



</script>


 
 

