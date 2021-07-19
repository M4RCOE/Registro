
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
          echo ("<p id='pr".$domain."'>".$u."</p>");
          ?>
         <div style="font-size: 12px">
         <span class="text-muted">Horas mensuales</span>
         <span class="text-muted" id='sp<?php echo($domain)?>'></span>
         <script>
          horas('<?php echo($u)?>')
          dia('<?php echo($u)?>')
          clasif('<?php echo($domain)?>')

         </script><br>
         <span class="text-muted"> Actual</span>
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
           
          echo("<button style=' border-radius: 24px; padding:10px 20px; border: 2px solid #00690B;' type='button' id='p".($domain)."' class='btn btn-success float-right' onclick=iniciar(this,0)> Play</button>"); 
 
          
        ?>  
        <script>
          var b=localStorage.getItem('p<?php echo($domain)?>');
          var obj=localStorage.getItem('o<?php echo($domain)?>');
           
          if(b!=null){
            document.getElementById("p<?php echo($domain)?>").innerHTML=b;
          }
          var h=localStorage.getItem('horas2<?php echo($domain)?>');
          var m=localStorage.getItem('minutos2<?php echo($domain)?>');
          var s=localStorage.getItem('segundos2<?php echo($domain)?>');
          
          if(b!='Play'){
            if(h!=null){
            document.getElementById("horas2<?php echo($domain)?>").value=h;

          }
          if(m!=null){
            document.getElementById("minutos2<?php echo($domain)?>").value=m;
          }
          if(s!=null){
            document.getElementById("segundos2<?php echo($domain)?>").value=s;
            
          }
          }
          o= document.getElementById("p<?php echo($domain)?>")

          if(b=='Finalizar'){
            console.log('continua')
            iniciar(o,1)
          } 
 
        </script>

          <form id="form<?php echo($domain)?>" method="post" >
              <input id="nombre<?php echo($domain)?>" type="text" value="<?php echo($u)?>" name="nombre"hidden />
              <input id="fecha<?php echo($domain)?>" type="text" name="fecha" hidden />
              <input id="hrs_i" type="text" name="hrs_i" hidden  />
              <input id="hrs_f" type="text" name="hrs_f" hidden  />
              <input id="horas<?php echo($domain)?>" type="text" value="0 " name="t1"  hidden/>
              <input id="minutos<?php echo($domain)?>" type="text" value="0 " name="t2"  hidden/>
              <input id="segundos<?php echo($domain)?>" type="text" value="0 " name="t3"hidden/>
            </form>
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
          
          <span id="Chart<?php echo $domain?>"></span>
          
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


  <form id="formenvia" method="post" >
              <input id="nomb" type="text" value="" name="nomb"hidden />
              <input id="fech" type="text" name="fech"  hidden/>
              <input id="hr_i" type="text" name="hr_i" hidden  />
              <input id="hr_f" type="text" name="hr_f" hidden  />
              <input id="tiempo" type="text" value="0:0:0" name="tiempo"hidden/>
            </form>
  <form id="formenvia2" method="post" >
              <input id="nomb2" type="text" value="" name="nomb"hidden />
              <input id="hr_f2" type="text" name="hr_f" hidden  />
              <input id="tiempo2" type="text" value="0" name="tiempo"hidden/>
            </form>
</body>

<script type="text/javascript" >
  
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

 

