
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
         

         </script><br>
         <span class="text-muted"> Actual</span>
         <input style="background-color:transparent; width: 35px"class="p-0 text-center border-0 text-muted" id="horas2<?php echo($domain)?>" type="text" value="0 " name="t1" disabled   />
              :
              <input style="background-color:transparent;width: 35px" class="p-0 text-center border-0 text-muted"  id="minutos2<?php echo($domain)?>" type="text" value="0 " name="t2" disabled style="width: 35px" />
              :
              <input style="background-color:transparent;width: 35px" class="p-0 text-center border-0 text-muted" id="segundos2<?php echo($domain)?>" type="text" value="0 " name="t3" disabled
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
  <div class="modal fade bd-example-modal-lg" id="im<?php echo($domain)?>">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title col-11 text-center"><?php echo$u?></h4>
           
        </div>
        
        <!-- Modal body -->
        <div class="modal-body d-flex justify-content-between aling-items-center flex-column text-center">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Grafica</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Tareas</a>
            </li>
             
      </ul>
      <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
          <span id="Chart<?php echo $domain?>" hidden></span>
                <input type="text" id="cc<?php echo $domain?>" hidden>
                <center>
                <canvas class="border border-2" name="chart" id="myChart<?php echo $domain?>"> </canvas>
                </center>
          </div>

          <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
          <div class="d-flex flex-column flex-shrink-0 mt-2 text-white bg-primary" style="width:70vh; height:100vh;">
           <br><h2 class="text-center">Calendario</h2><hr>
            <center>
                
            <input type="text" class='rounded border-0'placeholder="                                                 Tarea" id='title' style="width:320px; height:40px;">
            <input type="text" class='rounded border-0 mt-3'placeholder="                                                 Fecha" id='fecha' style="width:320px; height:40px;">
           
            <button type="button" class="mt-2 mb-1 btn btn-primary" onclick="tarea()">Agregar</button>
        </center>

            <div class="calendar pt-0 mt-0"  style="width:300px; height:10px;" >
                <div class="header"style="width:300px; height:75px;">
                    <a data-action="prev-month" href="javascript:void(0)" title="Previous Month"><i></i></a>
                    <div id='sp1' class="text" data-render="month-year"></div>
                    <a data-action="next-month" href="javascript:void(0)" title="Next Month"><i></i></a>
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
            <div>
              
            <div id="content" class='d-flex justify-self-end '>
              <h1 class='text-center text-dark' >Tareas importantes</h1><br>
                <nav class="navbar" >
                <div class="form-check text-dark" id="contiene">
                  </div>
                  </div>
                </nav>
            </div> 
         <div class='d-flex justify-content-center'>
          <div></div>
          <div></div>

         </div>
        

        </div>
         
        <!-- Modal footer -->
        <div class="modal-footer d-flex justify-content-center">
          <button type="button" class="btn btn-danger" id =<?php echo $domain?> data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
     clasif("<?php echo($domain)?>")
  </script>
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

 

