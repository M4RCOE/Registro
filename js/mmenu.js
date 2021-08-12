var sit=document.getElementById('sitio').value
console.log(sit)

Cmenu();
function Cmenu() {
	$.ajax({
		url: sit+"php/consulta.php",
		success: function (r) {
			r2 = JSON.parse(r);

			contenedor = document.getElementById("cmenu");
			if (contenedor.innerHTML != "") {
				contenedor.innerHTML = "";
			}
			for (i = 0; i < r2.length; i++) {
				let a = document.createElement("a");
				a.className = "dropdown-item";
				a.innerHTML = r2[i].nomMenu;
				a.id = r2[i].idM;
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
	let br2 = document.createElement("br");
	let span2 = document.createElement("span");
	span.innerHTML = url;
	span2.innerHTML = 'fas fa-home';
	span2.setAttribute('hidden',true)
	span.className = "text-muted";
	span.style = "font-size: 12px";
	div.innerHTML = txturl;

	div.appendChild(br);
	div.appendChild(span);
	div.appendChild(br2);
	div.appendChild(span2);
	li.appendChild(div);

	contenedor.appendChild(li);
	document.getElementById("url").value='';
	document.getElementById("textoUrl").value='';
}
function menuclick() {
	document.getElementById("up").removeAttribute("hidden");
	document.getElementById("menuS").innerHTML = '>'+this.innerText+'<';
	document.getElementById("menuS2").innerHTML = this.id;
	$.ajax({
		url: sit+"php/consulta2.php",
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
				let br2 = document.createElement("br");
				let span = document.createElement("span");
				let span2 = document.createElement("span");
				span2.id='sp12-m'
				span2.innerHTML = r2[i].Icono;
				span.innerHTML = r2[i].Enlace;
				console.log("enlace: " + r2[i][3]);
				span.className = "text-muted";
				span2.setAttribute('hidden',true)
				span.style = "font-size: 12px";
				div.innerHTML = r2[i].Menu;
				div.addEventListener("click", divmenu, false);
				div.appendChild(br);
				div.appendChild(span);
				div.appendChild(br2);
				div.appendChild(span2);
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
		url: sit+"php/agregaM.php",
		type: "POST",
		data: { menu: m, fecha: f },
		success: function (r) {
			 
			Cmenu();
			document.getElementById("nmenu").value = "";
			document.getElementById("contenedor").innerHTML ="";
			document.getElementById("menuS").innerHTML = '>'+m+'<';
			document.getElementById("menuS2").innerHTML = r;
			document.getElementById("up").removeAttribute("hidden");
			$(document).ready(function () {
				window.setTimeout(function () {
					$("#alerta1")
						.fadeTo(500, 0)
						.slideUp(1000, function () {
							$(this)[0].setAttribute("hidden", true);
							$(this).fadeTo(500, 100);
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
		temp = h[ñ].innerText.split("\n");
		temp1=h[ñ].childNodes[0].childNodes[2].innerText
		temp2=h[ñ].childNodes[0].childNodes[4].innerText
		
		if (h[ñ].parentNode.id == "contenedor") {
			
			hijos.push([temp[0], 0,temp1,temp2]);

		} else if (h[ñ].parentNode.id == 1 ||h[ñ].parentNode.parentNode.parentNode.id == "contenedor") {
			  
			hijos.push([temp[0], 1,temp1,temp2]);

		} else if (h[ñ].parentNode.id == 2 ||h[ñ].parentNode.parentNode.parentNode.parentNode.id == "contenedor") {

			hijos.push([temp[0], 2,temp1,temp2]);

		} else if (h[ñ].parentNode.id == 3 ||h[ñ].parentNode.parentNode.parentNode.parentNode.parentNode.id =="contenedor") {
			
			hijos.push([temp[0], 3,temp1,temp2]);

		} else if (h[ñ].parentNode.id == 4 ||h[ñ].parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.id == "contenedor") {
			
			hijos.push([temp[0], 4,temp1,temp1]);
		}
	}
console.log(hijos)
	if (id != "") {
		$.ajax({
			url: sit+"php/borra.php",
			type: "POST",
			data: { id: id },
			success: function (r) {
				console.log(r);
				insertaM(hijos, id);
			},
		});
	}
	 
}

function insertaM(hijos, id) {
	console.log('hijos')
	console.log(hijos)
	men = document.getElementById("menuS").innerText;
	document.getElementById("alerta1").innerHTML =
		'Se Cargaron los elementos del menu "<strong>' +
		men +
		'</strong>" correctamente';
	document.getElementById("alerta1").removeAttribute("hidden");
	$.ajax({
		url: sit+"php/inserta1.php",
		type: "POST",
		data: { hijos: hijos, id: id },
		success: function (r) {
			console.log(r);
			$(document).ready(function () {
				window.setTimeout(function () {
					$("#alerta1")
						.fadeTo(500, 0)
						.slideUp(1000, function () {
							$(this)[0].setAttribute("hidden", true);
							$(this).fadeTo(500, 100);
						});
				}, 2000);
			});
			recargam(id)
			poneMenu(r)
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

function divmenu() {
	this.innerText;
	temp = this.innerText.split("\n");
	console.log(temp)
	document.getElementById("MUrl").value = temp[1];
	document.getElementById("MtxtUrl").value = temp[0];
	document.getElementById("MtxtUrl2").value = temp[0];
	 console.log(temp)
	
	
	document.getElementById("Mid").value =
		document.getElementById("menuS2").innerText;
	$("#modalUrl").modal("show");
}

function guarda_url(o) {
	 
	url = document.getElementById("MUrl").value;
	txt = document.getElementById("MtxtUrl").value;
	txt2 = document.getElementById("MtxtUrl2").value;
	id = document.getElementById("Mid").value;
	icon = document.getElementById("icon").value;
 
	$.ajax({
		url: sit+"php/actualizaDiv.php",
		data: { id: id, txt: txt, url: url, txt2: txt2, icon: icon },
		type: "POST",
		success: function (r) {
			poneMenu(o.id)
			recargam(id);  
		},
	});
	 
}

function recargam(id) {
	$.ajax({
		url: sit+"php/consulta2.php",
		data: { id: id },
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
				let br2 = document.createElement("br");
				let span = document.createElement("span");
				let span2 = document.createElement("span");
				span2.id='sp12-m'
				span2.innerHTML = r2[i].Icono;
				span.innerHTML = r2[i].Enlace;
				console.log("enlace: " + r2[i][3]);
				 
				span.className = "text-muted";
				span2.setAttribute('hidden',true)
				span.style = "font-size: 12px";
				div.innerHTML = r2[i].Menu;
				div.addEventListener("click", divmenu, false);
				div.appendChild(br);
				div.appendChild(span);
				div.appendChild(br2);
				div.appendChild(span2);
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

function poneMenu(user) {
	console.log("asignando " + user);
	$.ajax({
		url: sit+"php/asignaMenu.php",
		data: { user: user },
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
				let ic = document.createElement("i");
				let ic2 = document.createElement("i");
				ic2.className='fas fa-angle-down '

				ic.className = r2[i].Icono;
				ul.className = "nav nav-treeview";
				ul.setAttribute("style", "display: none;");
				a.setAttribute("href", r2[i].Enlace);
				a.setAttribute("target", "_blank");
				a.className = "nav-link";
				p.innerHTML = r2[i].Menu +"  ";
				p.className = "pl-2";
				li.className = "nav-item";
				a.appendChild(ic);
				a.appendChild(p);
				li.appendChild(a);

				if (r2[i].Nivel == 0) {
					  
						if(i!=r2.length-1){
							console.log(r2[i].Menu)
							console.log(r2[i+1].Menu)
							console.log(i+1)
							if(r2.length!=1 && r2[i+1].Nivel != 0){
								p.appendChild(ic2)
							}
						}	
					
					contenedor.appendChild(li);
				} else if (r2[i].Nivel == 1) {
					c = contenedor.lastChild;
					console.log(c);
					console.log(r2[i].Menu + " " + c.tagName);
					if (c.tagName == "UL") {
						c.appendChild(li);
					} else {
						console.log("agrega UL");
						if(i!=r2.length-1){
							console.log(r2[i].Menu)
							console.log(r2[i+1].Menu)
							console.log(i+1)
							if(r2.length!=1 && r2[i+1].Nivel != 1){
								p.appendChild(ic2)
							}
						}	
						ul.appendChild(li);
						c.appendChild(ul);
					}
				} else if (r2[i].Nivel == 2) {
					c = contenedor.lastChild;
					c2 = c.lastChild;
					if (c2.tagName == "UL") {
						c2.appendChild(li);
					} else {
						console.log("agrega UL");
						if(i!=r2.length-1){
							console.log(r2[i].Menu)
							console.log(r2[i+1].Menu)
							console.log(i+1)
							if(r2.length!=1 && r2[i+1].Nivel != 2){
								p.appendChild(ic2)
							}
						}	
						ul.appendChild(li);
						c2.appendChild(ul);
					}
				} else if (r2[i].Nivel == 3) {
					c = contenedor.lastChild;
					c2 = c.lastChild;
					c3 = c2.lastChild;
					if (c3.tagName == "UL") {
						c3.appendChild(li);
					} else {
						console.log("agrega UL");

						ul.appendChild(li);
						c3.appendChild(ul);
					}
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
