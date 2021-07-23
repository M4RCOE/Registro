<body>

    <br>
<div >


    <center>
 

        <div class="container" style="width: 60%;">
            <table class="table table-hover " id="table">

                <thead class="thead bg-dark text-white ">

                    <tr>
                        <th colspan="7" class="text-center"style='border-top-right-radius: 18px; border-top-left-radius: 18px; border:0px;'>
                            <H3>Residentes</H3>
                        </th>
                       

                    </tr>
                </thead>
                <tbody >

                    <?php
          foreach($usuarios as $key => $use){
          $u=$use['nomCom'];
          $domain = substr($u, 0,strpos($u,' '));
          
  
          echo("<tr class='datos' data-toggle='modal' data-id=".$domain."data-target='#im".$domain."'>");
          
          echo("<td hidden>".$domain."</td>");
          echo("<td><img src='https://image.flaticon.com/icons/png/512/560/560216.png 'width='50' height='50'style='position: relative;'></td>");
          echo("<td class='mt-5 pt-4'>");
          
            echo ("<p style='font-size: 18px;width:240px;' class ='m-0' id='pr".$domain."'>".$u."</p>");
            ?>
                    <div style="font-size: 12px"  >
                        <span class="text-muted">Horas mensuales</span>
                        <span class="text-muted mt-5" id='sp<?php echo($domain)?>'></span>
                        <script>
                            horas('<?php echo($u)?>')
                            dia('<?php echo($u)?>')


                        </script>
                        <span class="text-muted ml-1 mr-0"> Actual</span>
                       
                        <input style="background-color:transparent; width: 13px"
                            class="p-0 m-0 text-center border-0 text-muted" id="horas2<?php echo($domain)?>" type="text"
                            value="00 " name="t1" disabled />
                        <span class='p-0 m-0'>:</span>
                        <input style="background-color:transparent;width: 13px"
                            class="p-0 m-0 text-center border-0 text-muted" id="minutos2<?php echo($domain)?>" type="text"
                            value="00 " name="t2" disabled />
                        <span class='p-0 m-0'>:</span>
                        <input style="background-color:transparent;width: 13px"
                            class="p-0 m-0 text-center border-0 text-muted" id="segundos2<?php echo($domain)?>" type="text"
                            value="00 " name="t3" disabled />
                      
                    </div>

                    <?php
          
          echo("</td>");
          
          echo("<td colspan='2'>");
             
            echo("<button style=' border-radius: 24px; padding:10px 20px; border: 2px solid #00690B;' type='button' id='p".($domain)."' class='btn btn-success float-right ' onclick=iniciar(this,0)> Play</button>"); 
   
            
          ?>
            
          
                    <script>
                        
                        corriendo('<?php echo($u)?>')
                         
                         
                        let hrs = localStorage.getItem('horaD<?php echo($domain)?>');
                        let dia = localStorage.getItem('diaD<?php echo($domain)?>');
                        let b = localStorage.getItem('p<?php echo($domain)?>');
                        let obj = localStorage.getItem('o<?php echo($domain)?>');
                        console.log(" fecha:"+dia+" horas"+hrs)
                        if (hrs != null&&dia!= null){
                           hr=hrs.split(':')
                           dias=dia.split('-')
                           console.log(dias)
                           mes=parseInt(dias[1])
                           mes=mes-1
                           
                           console.log('fecha N '+dias[0]+" "+mes+" "+dias[2]+" "+hr[0]+" "+hr[1]+" "+hr[2])
                        f2 = new Date(
                            dias[0],
                            mes,
                            dias[2],
                            hr[0],
                            hr[1],
                            hr[2]);
                        f1 = new Date();
                        console.log('Dias:'+dias)
                        console.log('Tiempo 1:'+f1 )
                        console.log('Tiempo 2:'+f2 )
                        console.log('Diferencia00:'+(f1-f2))
                        let tiempo3=new Date(f1-f2)
                        if(b!=null){
                           if(=='Finalizar'){
                            document.getElementById("p<?php echo($domain)?>").innerHTML = b;
                            document.getElementById("horas2<?php echo($domain)?>").value = (tiempo3.getHours()-18);
                            document.getElementById("minutos2<?php echo($domain)?>").value = tiempo3.getMinutes();
                            document.getElementById("segundos2<?php echo($domain)?>").value = tiempo3.getSeconds();
                        
                           }
                         }

                        }
                       
                     
                          
                          
                          
                         
                            
                        
                          
                        
                        o = document.getElementById("p<?php echo($domain)?>")
                        

                        if (b == 'Finalizar' ) {  
                            console.log('continua')
                            iniciar(o, 1)
                        }else{
                             
                            document.getElementById('p<?php echo($domain)?>').innerHTML='Play'
                        }

                    </script>

                    <form id="form<?php echo($domain)?>" method="post">
                        <input id="nombre<?php echo($domain)?>" type="text" value="<?php echo($u)?>" name="nombre"
                            hidden />
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


        </div>

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
                        <div
                            class="modal-body d-flex justify-content-between aling-items-center flex-column text-center">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home<?php echo($domain)?>" role="tab"
                                        aria-controls="home" aria-selected="true">Grafica</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile<?php echo($domain)?>" role="tab"
                                        aria-controls="profile" aria-selected="false">Tareas</a>
                                </li>

                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home<?php echo($domain)?>" role="tabpanel"
                                    aria-labelledby="home-tab">

                                    <center>
                                        <canvas class="border border-2" name="chart" id="myChart<?php echo $domain?>">
                                        </canvas>
                                    </center>
                                </div>
                                 
                                <script>	$('#a1').hide();  </script>
                                <div class="tab-pane fade" id="profile<?php echo($domain)?>" role="tabpanel" aria-labelledby="profile-tab">
                                

                                                
                                    <div class='d-flex ' style="width:800px;">
                                        <div>
                                            <!--  -->
                                            <div class="d-flex flex-column flex-shrink-0 mt-2 text-white bg-primary"
                                                style="width:400px; height:600px;">
                                                <br>
                                                <h2 class="text-center">Calendario</h2>
                                                <hr>
                                                <center>

                                                
                                                    <input type="text" class='rounded border-0' placeholder="Tarea"
                                                        id='title'
                                                        style="width:320px; height:40px; text-align: center;" >
                                                    <input type="text" class='rounded border-0 mt-3' placeholder="Fecha"
                                                        id='fecha' style="width:320px; height:40px; text-align: center;"
                                                        readonly >
                                                    <input type="text" class='rounded border-0 mt-3' placeholder="Fecha"
                                                        id='fecha2' style="width:320px; height:40px; text-align: center;"
                                                        hidden >

                                                    <button type="button" class="mt-2 mb-1 btn btn-primary"
                                                        onclick="tarea('<?php echo($u)?>')">Agregar</button>
                                                        
                                                        <div  class="calendar pt-0 mt-0" style="width:300px; height:10px;" >
                                                    <div class="header" style="width:300px; height:75px;" >
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
                                                <center><br>
                                                    <h4 class='text-center text-dark'>Tareas importantes</h4><br>
                                                </center>
                                                <nav class="navbar">
                                                   
                                                    <div class="form-check text-dark menu" id="contiene<?php echo($domain)?>" 
                                                    style='overflow-y: auto;height: 500px; width: 400px;'onclick='modalTarea()'>
                                                    </div>
                                            </div>
                                            <script>
                                                        cargaTareas('<?php echo($u)?>');
                                                        function cargaTareas(n){
	nn=n.split(' ')
	let br = document.createElement("br");
let sp = document.createElement("span");
let hr = document.createElement("hr");
let div = document.createElement("div");
let newLabel = document.createElement("label");
let contenedor = document.getElementById("contiene"+nn[0]);
var parametros = { nomb: n};
$.ajax({
url: "http://localhost:82/residencia/php/muestraTareas.php",
type: "POST",
data: parametros,
success: function (r) {
 console.log("r:"+r)

    if(!r.empty()){
        JSON.parse(r)
        console.log(r.residente)
        /* mt2=r.split('|') */
    }

/* console.log(mt2[1]+"-"+mt2[0])
console.log(mt2) */

div.className = "container";
newLabel.innerHTML=mt2[1]+"  "+mt2[0]
sp.innerHTML=mt2[2]
sp.className ='float-right text-success'
 

div.appendChild(newLabel);
div.appendChild(sp);

contenedor.appendChild(div);
contenedor.appendChild(hr);
contenedor.appendChild(br);  
 
  
  


},
});

}

                                                    </script>
                                            <style>
                                                .menu div:hover {
                                                    background-color:#e6f0ff;
                                                    border-radius: 15px;
                                                    border:0px;
                                                    padding: 15px;
                                                }
                                            </style>
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
 

