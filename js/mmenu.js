Cmenu();
function Cmenu() {
	$.ajax({
		url: "http://localhost:82/residencia/php/consulta.php",
		success: function (r) {
			r2 = JSON.parse(r);

			contenedor = document.getElementById("cmenu");
			contenedor.innerHTML = "";
			for (i = 0; i < r2.length; i++) {
				let a = document.createElement("a");
				a.className = "dropdown-item";
				a.innerHTML = r2[i].nomMenu;
				a.id = r2[i].id;
				a.addEventListener("click", menuclick, false);

				contenedor.appendChild(a);
			}
		},
	});
}

function agrega() {
	console.log("agregando");
	url = document.getElementById("url").value;
	txturl = document.getElementById("textoUrl").value;
	contenedor = document.getElementById("contenedor");
	let li = document.createElement("li");
	let div = document.createElement("div");
	let br = document.createElement("br");
	let span = document.createElement("span");
	span.innerHTML = url;
	span.className = "text-muted";
	span.style = "font-size: 12px";
	div.innerHTML = txturl;

	div.appendChild(br);
	div.appendChild(span);
	li.appendChild(div);

	contenedor.appendChild(li);
}
function menuclick() {
	document.getElementById("menuS").innerHTML = this.innerText;
	document.getElementById("menuS2").innerHTML = this.id;
	$.ajax({
		url: "http://localhost:82/residencia/php/consulta2.php",
		data: { id: this.id },
		type: "POST",
		success: function (r) {
			r2 = JSON.parse(r);
			console.log(r2);
			contenedor = document.getElementById("contenedor");
			contenedor.innerHTML = "";
			for (i = 0; i < r2.length; i++) {
				let li = document.createElement("li");
				let div = document.createElement("div");
				let ol = document.createElement("ol");
				let br = document.createElement("br");
				let span = document.createElement("span");
				span.innerHTML = r2[i].Enlace;
				console.log('enlace: '+r2[i][3])
				span.className = "text-muted";
				span.style = "font-size: 12px";
				div.innerHTML = r2[i].Menu;
				div.addEventListener("click", divmenu, false);
				div.appendChild(br)
				div.appendChild(span)
				li.appendChild(div);

				/* console.log(r2[i].Menu+" "+r2[i].Nivel) */

				if (r2[i].Nivel == 0) {
					contenedor.appendChild(li);
				} else if (r2[i].Nivel == 1) {
					c = contenedor.lastChild;
					ol.appendChild(li);
					ol.id = "1";
					c.appendChild(ol);
				} else if (r2[i].Nivel == 2) {
					c = contenedor.lastChild;
					c2 = c.lastChild;
					ol.appendChild(li);
					ol.id = "2";
					c2.appendChild(ol);
				} else if (r2[i].Nivel == 3) {
					c = contenedor.lastChild;
					c2 = c.lastChild;
					c3 = c2.lastChild;
					ol.appendChild(li);
					ol.id = "3";
					c3.appendChild(ol);
				} else if (r2[i].Nivel == 4) {
					c = contenedor.lastChild;
					c2 = c.lastChild;
					c3 = c2.lastChild;
					c4 = c3.lastChild;
					ol.appendChild(li);
					ol.id = "4";
					c3.appendChild(ol);
				} else if (r2[i].Nivel == 5) {
					c = contenedor.lastChild;
					c2 = c.lastChild;
					c3 = c2.lastChild;
					c4 = c3.lastChild;
					c5 = c4.lastChild;
					ol.appendChild(li);
					ol.id = "5";
					c3.appendChild(ol);
				} else if (r2[i].Nivel == 6) {
					c = contenedor.lastChild;
					c2 = c.lastChild;
					c3 = c2.lastChild;
					c4 = c3.lastChild;
					c5 = c4.lastChild;
					c6 = c5.lastChild;
					ol.appendChild(li);
					ol.id = "6";
					c3.appendChild(ol);
				}
			}
		},
	});
}

function agrega_menu() {
	fn = new Date();
	m = document.getElementById("nmenu").value;
	f = fn.getFullYear() + "-" + fn.getMonth() + "-" + fn.getDate();

	document.getElementById("alerta1").innerHTML =
		'Se agrego el menu "<strong>' + m + '</strong>" correctamente';
	document.getElementById("alerta1").removeAttribute("hidden");

	$.ajax({
		url: "http://localhost:82/residencia/php/agregaM.php",
		type: "POST",
		data: { menu: m, fecha: f },
		success: function (r) {
			console.log(r);
			Cmenu();
			document.getElementById("nmenu").value = "";

			$(document).ready(function () {
				window.setTimeout(function () {
					$("#alerta1")
						.fadeTo(500, 0)
						.slideUp(1000, function () {
							$(this)[0].setAttribute('hidden',true);
							$(this).fadeTo(500,100);
						});
				}, 2000);
			});
		},
	});
}

function niveles() {
	let hijos = [];
	id = document.getElementById("menuS2").innerText;
	h = $("#contenedor").find("li");

	for (ñ = 0; ñ < h.length; ñ++) {
		if (h[ñ].parentNode.id == "contenedor") {
			temp = h[ñ].innerText.split("\n");
			hijos.push([temp[0], 0]);
		} else if (
			h[ñ].parentNode.id == 1 ||
			h[ñ].parentNode.parentNode.parentNode.id == "contenedor"
		) {
			hijos.push([h[ñ].innerText, 1]);
		} else if (
			h[ñ].parentNode.id == 2 ||
			h[ñ].parentNode.parentNode.parentNode.parentNode.id == "contenedor"
		) {
			hijos.push([h[ñ].innerText, 2]);
		} else if (
			h[ñ].parentNode.id == 3 ||
			h[ñ].parentNode.parentNode.parentNode.parentNode.parentNode.id ==
				"contenedor"
		) {
			hijos.push([h[ñ].innerText, 3]);
		} else if (
			h[ñ].parentNode.id == 4 ||
			h[ñ].parentNode.parentNode.parentNode.parentNode.parentNode.parentNode
				.id == "contenedor"
		) {
			hijos.push([h[ñ].innerText, 4]);
		}
	}

	if (id != "") {
		$.ajax({
			url: "http://localhost:82/residencia/php/borra.php",
			type: "POST",
			data: { id: id },
			success: function (r) {
				console.log(r);
				insertaM(hijos, id);
			},
		});
	}
	console.log(hijos);
}

function insertaM(hijos, id) {
	men = document.getElementById("menuS").innerText;
	document.getElementById("alerta1").innerHTML =
		'Se Cargaron los elementos sel menu "<strong>' +
		men +
		'</strong>" correctamente';
	document.getElementById("alerta1").removeAttribute("hidden");
	$.ajax({
		url: "http://localhost:82/residencia/php/inserta1.php",
		type: "POST",
		data: { nombre: hijos, id: id },
		success: function (r) {
			console.log(r);
			$(document).ready(function () {
				window.setTimeout(function () {
					$("#alerta1")
						.fadeTo(500, 0)
						.slideUp(1000, function () {
							$(this)[0].setAttribute('hidden',true);
							$(this).fadeTo(500,100);
						});
				}, 2000);
			});
		},
	});
}

function onKeyUp(event) {
	var keycode = event.keyCode;
	if (keycode == "13") {
		agrega();
	}
}
function onKeyUp2(event) {
	var keycode = event.keyCode;
	if (keycode == "13") {
		agrega_menu();
	}
}


function divmenu(){
	this.innerText
	temp =this.innerText.split("\n");
	
	document.getElementById("MUrl").value =temp[1]
	document.getElementById("MtxtUrl").value =temp[0]
	document.getElementById("MtxtUrl2").value =temp[0]
	document.getElementById("Mid").value =document.getElementById("menuS2").innerText 
	$('#modalUrl').modal('show');

	 
}

function guarda_url(o){
	obj=o.childNodes

	url=document.getElementById("MUrl").value  
	txt=document.getElementById("MtxtUrl").value 
	txt2=document.getElementById("MtxtUrl2").value 
	id=document.getElementById("Mid").value 
	$.ajax({
		url: "http://localhost:82/residencia/php/actualizaDiv.php",
		data: { id:id,txt:txt,url:url,txt2:txt2 },
		type: "POST",
		success: function (r) {
			console.log(r)
		 

			recargam(id)
		},
	});
}

function recargam(id){
	$.ajax({
		url: "http://localhost:82/residencia/php/consulta2.php",
		data: { id:id },
		type: "POST",
		success: function (r) {
			r2 = JSON.parse(r);
			console.log(r2);
			contenedor = document.getElementById("contenedor");
			contenedor.innerHTML = "";
			for (i = 0; i < r2.length; i++) {
				let li = document.createElement("li");
				let div = document.createElement("div");
				let ol = document.createElement("ol");
				let br = document.createElement("br");
				let span = document.createElement("span");
				span.innerHTML = r2[i].Enlace;
				console.log('enlace: '+r2[i][3])
				span.className = "text-muted";
				span.style = "font-size: 12px";
				div.innerHTML = r2[i].Menu;
				div.addEventListener("click", divmenu, false);
				div.appendChild(br)
				div.appendChild(span)
				li.appendChild(div);

				/* console.log(r2[i].Menu+" "+r2[i].Nivel) */

				if (r2[i].Nivel == 0) {
					contenedor.appendChild(li);
				} else if (r2[i].Nivel == 1) {
					c = contenedor.lastChild;
					ol.appendChild(li);
					ol.id = "1";
					c.appendChild(ol);
				} else if (r2[i].Nivel == 2) {
					c = contenedor.lastChild;
					c2 = c.lastChild;
					ol.appendChild(li);
					ol.id = "2";
					c2.appendChild(ol);
				} else if (r2[i].Nivel == 3) {
					c = contenedor.lastChild;
					c2 = c.lastChild;
					c3 = c2.lastChild;
					ol.appendChild(li);
					ol.id = "3";
					c3.appendChild(ol);
				} else if (r2[i].Nivel == 4) {
					c = contenedor.lastChild;
					c2 = c.lastChild;
					c3 = c2.lastChild;
					c4 = c3.lastChild;
					ol.appendChild(li);
					ol.id = "4";
					c3.appendChild(ol);
				} else if (r2[i].Nivel == 5) {
					c = contenedor.lastChild;
					c2 = c.lastChild;
					c3 = c2.lastChild;
					c4 = c3.lastChild;
					c5 = c4.lastChild;
					ol.appendChild(li);
					ol.id = "5";
					c3.appendChild(ol);
				} else if (r2[i].Nivel == 6) {
					c = contenedor.lastChild;
					c2 = c.lastChild;
					c3 = c2.lastChild;
					c4 = c3.lastChild;
					c5 = c4.lastChild;
					c6 = c5.lastChild;
					ol.appendChild(li);
					ol.id = "6";
					c3.appendChild(ol);
				}
			}
		},
	});
}
 