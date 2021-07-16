

<body>
  <br>  
  <center>
   

    <div class="container" style="width: 60%;">
      <table class="table table-hover " id="table">
      
        <thead class="thead bg-dark text-white ">
        
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
        

        echo("<tr class='datos' data-toggle='modal' data-id=".$domain."data-target='#im".$domain."'>");
        
        echo("<td hidden>".$domain."</td>");
        echo("<td>");
        echo("<img src='https://image.flaticon.com/icons/png/512/560/560216.png'width='50' height='50'>");
          echo $u;
          ?>
         <div style="font-size: 12px">
         <span class="text-muted">Horas mensuales</span><span class="text-muted"> Actual</span>
         <input style="background-color:transparent; width: 35px"class="text-center border-0 text-muted" id="horas2<?php echo($domain)?>" type="text" value="0 " name="t1" disabled   />
              :
              <input style="background-color:transparent;width: 35px" class="text-center border-0 text-muted" id="minutos2<?php echo($domain)?>" type="text" value="0 " name="t2" disabled style="width: 35px" />
              :
              <input style="background-color:transparent;width: 35px" class="text-center border-0 text-muted" id="segundos2<?php echo($domain)?>" type="text" value="0 " name="t3" disabled
                style="width: 35px" />
         </div>
        <?php
        echo("</td>");
        
        echo("<td colspan='2'>");
           
          echo("<button style=' border-radius: 24px; padding:10px 20px; border: 2px solid #00690B;' type='button' id='p".($domain)."' class='btn btn-success float-right' onclick=iniciar(this)> play</button>"); 
 
          
        ?>  
         
 
          <center>
            <form action="<?php echo site_url('Inicio/guarda')?>" method="post" hidden>
              Nombre: <br /><br><input type="text" value="<?php echo($u)?>" name="nombre" readonly
                style="width: 200px" hidden/><br /><br />
              <input id="fecha" type="text" name="fecha" readonly style="width: 80px" hidden />
              <input id="hrs_i" type="text" name="hrs_i" readonly style="width: 80px" hidden  />
              <input id="hrs_f" type="text" name="hrs_f" readonly style="width: 80px" hidden  /><br /> 
              <input class="text-center" id="horas<?php echo($domain)?>" type="text" value="0 " name="t1" readonly style="width: 35px" hidden/>
 
              <input class="text-center" id="minutos<?php echo($domain)?>" type="text" value="0 " name="t2" readonly style="width: 35px" hidden/>
 
              <input class="text-center" id="segundos<?php echo($domain)?>" type="text" value="0 " name="t3" readonly
              style="width: 35px" hidden/><br /><br /><br /> 
          
              <input type="button"style=' border-radius: 24px; padding:10px 20px; border: 2px solid #00690B;' onclick= "iniciar(this)" value="Inicio" class="btn btn-success" hidden/>
              <input type="button" style=' border-radius: 24px; padding:10px 20px; border: 2px solid #002769;'onclick="detenerse(this)" value="Pausa" class="btn btn-primary" hidden/>
              <input type="submit" style=' border-radius: 24px; padding:10px 20px; border: 2px solid #690400;'value="finalizar" class="btn btn-danger" hidden/>
            </form>
          </center>
          <?php //print_r($msg)?>
         
        <?php
 echo("</td>");
 echo("<td>");
  
 ?>
 
  
</div>

<div class="container">
  <!-- The Modal -->
  <div class="modal" id="im<?php echo($domain)?>">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title "style="aling:center"><?php echo$u?></h4>
           
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
 <center>
          <canvas class="border border-2" name="chart" id="myChart<?php echo $domain?>"> </canvas>
          </center>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" id =<?php echo $domain?> data-dismiss="modal">Cerrar</button>
        </div>
        
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
 
$("#table td").each(function (e, value) {
	value.onclick = function (e) {
		if (e.target.nodeName === "TD") {
			$("#im" + e.target.parentNode.firstChild.innerText).modal("show");
		}else{
      $("#im" + e.target.id).modal("hide");
    }
	}
});
 
 

</script>




 
 

