/*cargaUser()
 function cargaUser() {
	 
	$.ajax({
		url: "http://localhost:82/residencia/php/users.php",
		success: function (r) {
			t = document.getElementById("tuser");
	 
		  
			 
			r2 = JSON.parse(r);
			console.log('User '+t)
			for (i = 0; i < r2.length; i++) {
				let div = document.createElement("select");
				div.className = "selectpicker";
				let tr = document.createElement("tr");
				let td = document.createElement("td");
				let td2 = document.createElement("td");
				let td3 = document.createElement("td");
				let td4 = document.createElement("td");
				let btn = document.createElement("button");
				let btn2 = document.createElement("button");
				let img = document.createElement("img");
				let img2 = document.createElement("img");
				 
				img.setAttribute("src","data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjQwMXB0IiB2aWV3Qm94PSIwIC0xIDQwMS41NDExIDQwMSIgd2lkdGg9IjQwMXB0IiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxwYXRoIGQ9Im0zODEuMjg5MDYyIDMyLjI0MjE4OGMxMy42NzE4NzYgMTMuNjY0MDYyIDEzLjY3MTg3NiAzNS44MjQyMTggMCA0OS40ODgyODFsLTE3LjY3OTY4NyAxNy42Nzk2ODctNjEuMjMwNDY5LTYxLjIzMDQ2OCAxNy42Nzk2ODgtMTcuNjc5Njg4YzEzLjY3MTg3NS0xMy42Njc5NjkgMzUuODMyMDMxLTEzLjY2Nzk2OSA0OS41IDB6bTAgMCIgZmlsbD0iIzAwYWNlYSIvPjxwYXRoIGQ9Im0zNjMuNjA5Mzc1IDk5LjQxMDE1Ni0xNjAuMTQ4NDM3IDE2MC4xNjAxNTZoLS4wMTE3MTlsLTYxLjIzMDQ2OS02MS4yMzA0NjggMTYwLjE2MDE1Ni0xNjAuMTYwMTU2em0wIDAiIGZpbGw9IiMwMGVmZDEiLz48cGF0aCBkPSJtMTQyLjIxODc1IDE5OC4zMzk4NDQgNjEuMjMwNDY5IDYxLjIzMDQ2OC0uNTcwMzEzLjU3MDMxMy04NC42ODc1IDIzLjQ2MDkzNyAyMy40NTcwMzItODQuNjkxNDA2em0wIDAiIGZpbGw9IiNmZWRiNDEiLz48ZyBmaWxsPSIjMDgzODYzIj48cGF0aCBkPSJtMzcwLjU4OTg0NCAyNTAuOTYwOTM4Yy01LjUyMzQzOCAwLTEwIDQuNDc2NTYyLTEwIDEwdjg4Ljc4OTA2MmMtLjAxOTUzMiAxNi41NjI1LTEzLjQzNzUgMjkuOTgwNDY5LTMwIDMwaC0yODAuNTg5ODQ0Yy0xNi41NjI1LS4wMTk1MzEtMjkuOTgwNDY5LTEzLjQzNzUtMzAtMzB2LTI2MC41ODk4NDRjLjAxOTUzMS0xNi41NTg1OTQgMTMuNDM3NS0yOS45ODA0NjggMzAtMzBoODguNzg5MDYyYzUuNTIzNDM4IDAgMTAtNC40NzY1NjIgMTAtMTAgMC01LjUyMzQzNy00LjQ3NjU2Mi0xMC0xMC0xMGgtODguNzg5MDYyYy0yNy42MDE1NjIuMDMxMjUtNDkuOTY4NzUgMjIuMzk4NDM4LTUwIDUwdjI2MC41ODk4NDRjLjAzMTI1IDI3LjYwMTU2MiAyMi4zOTg0MzggNDkuOTY4NzUgNTAgNTBoMjgwLjU4OTg0NGMyNy42MDE1NjItLjAzMTI1IDQ5Ljk2ODc1LTIyLjM5ODQzOCA1MC01MHYtODguNzg5MDYyYzAtNS41MjM0MzgtNC40NzY1NjMtMTAtMTAtMTB6bTAgMCIvPjxwYXRoIGQ9Im0zNzYuNjMyODEyIDEzLjQyOTY4OGMtMTcuNTg5ODQzLTE3LjU0Njg3Ni00Ni4wNTg1OTMtMTcuNTQ2ODc2LTYzLjY0NDUzMSAwbC0xNzguNDEwMTU2IDE3OC40MTAxNTZjLTEuMjE4NzUgMS4yMjI2NTYtMi4xMDU0NjkgMi43MzgyODEtMi41NjY0MDYgNC4zOTg0MzdsLTIzLjQ1NzAzMSA4NC42OTE0MDdjLS45NjQ4NDQgMy40NzI2NTYuMDE1NjI0IDcuMTkxNDA2IDIuNTYyNSA5Ljc0MjE4NyAyLjU1MDc4MSAyLjU0Njg3NSA2LjI2OTUzMSAzLjUyNzM0NCA5Ljc0MjE4NyAyLjU2NjQwNmw4NC42OTE0MDYtMjMuNDYwOTM3YzEuNjY0MDYzLS40NjA5MzggMy4xODM1OTQtMS4zNDc2NTYgNC40MDYyNS0yLjU3MDMxM2wuNTY2NDA3LS41NzAzMTIgMTc3LjgzNTkzNy0xNzcuODM1OTM4YzE3LjU3NDIxOS0xNy41NzAzMTIgMTcuNTc0MjE5LTQ2LjA1ODU5MyAwLTYzLjYyODkwNnptLTIyOS42NzU3ODEgMjAzLjc4OTA2MiAzNy42MTMyODEgMzcuNjE3MTg4LTUyLjAzMTI1IDE0LjQxNDA2MnptNTYuNSA0Mi4zNTU0Njl2LS4wMDc4MTNsNi41MTk1MzEgNi41MTk1MzJ6bTAtMTQuMTQwNjI1LTQ3LjA5Mzc1LTQ3LjA5Mzc1IDE0Ni4wMTU2MjUtMTQ2LjAxNTYyNSA0Ny4wODk4NDQgNDcuMDg1OTM3em0xNzAuNzYxNzE5LTE3MC43NzM0MzgtMTAuNjA5Mzc1IDEwLjYwOTM3NS00Ny4wODU5MzctNDcuMDg5ODQzIDEwLjYwOTM3NC0xMC42MDkzNzZjOS43NjU2MjYtOS43NDYwOTMgMjUuNTgyMDMyLTkuNzQ2MDkzIDM1LjM1MTU2MyAwbDExLjczNDM3NSAxMS43NDYwOTRjOS43NjU2MjUgOS43NTc4MTMgOS43NjU2MjUgMjUuNTg1OTM4IDAgMzUuMzQzNzV6bTAgMCIvPjwvZz48L3N2Zz4=")
				img.setAttribute("width","30px")

				img2.setAttribute("src","data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjQ2N3B0IiB2aWV3Qm94PSItNjAgMCA0NjcgNDY3LjAwMDYxIiB3aWR0aD0iNDY3cHQiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0ibTMzNi4zOTg0MzggOTIuODAwNzgxdjU2aC0zMjYuMzk4NDM4di01NmMwLTE2LjU3MDMxMiAxMy40MzM1OTQtMzAgMzAtMzBoMjY2LjM5ODQzOGMxNi41NzAzMTIgMCAzMCAxMy40Mjk2ODggMzAgMzB6bTAgMCIgZmlsbD0iIzAwZWZkMSIvPjxwYXRoIGQ9Im0zMDcuODAwNzgxIDE0OS4xOTkyMTl2MjY0LjgwMDc4MWMwIDI1LjA4OTg0NC0xNy45MTAxNTYgNDMtNDAgNDNoLTE4OS4xOTkyMTljLTIyLjA4OTg0MyAwLTQwLTE3LjkxMDE1Ni00MC00M3YtMjY1LjE5OTIxOWgyNjkuMTk5MjE5em0wIDAiIGZpbGw9IiMwMGFjZWEiLz48ZyBmaWxsPSIjMDgzODYzIj48cGF0aCBkPSJtMjMyLjYwMTU2MiA0MDQuMTk5MjE5YzUuNTIzNDM4IDAgMTAtNC40NzY1NjMgMTAtMTB2LTE5OWMwLTUuNTIzNDM4LTQuNDc2NTYyLTEwLTEwLTEwLTUuNTIzNDM3IDAtMTAgNC40NzY1NjItMTAgMTB2MTk5YzAgNS41MjM0MzcgNC40NzY1NjMgMTAgMTAgMTB6bTAgMCIvPjxwYXRoIGQ9Im0xMTMuODAwNzgxIDQwNC4xOTkyMTljNS41MjM0MzggMCAxMC00LjQ3NjU2MyAxMC0xMHYtMTk5YzAtNS41MjM0MzgtNC40NzY1NjItMTAtMTAtMTAtNS41MjM0MzcgMC0xMCA0LjQ3NjU2Mi0xMCAxMHYxOTljMCA1LjUyMzQzNyA0LjQ3NjU2MyAxMCAxMCAxMHptMCAwIi8+PHBhdGggZD0ibTMwNi4zOTg0MzggNTIuODAwNzgxaC00OC43OTY4NzZ2LTEyLjgwMDc4MWMtLjAyNzM0My0yMi4wODIwMzEtMTcuOTIxODc0LTM5Ljk3NjU2MjUtNDAtNDBoLTg4LjgwMDc4MWMtMjIuMDgyMDMxLjAyMzQzNzUtMzkuOTc2NTYyIDE3LjkxNzk2OS00MCA0MHYxMi44MDA3ODFoLTQ4LjgwMDc4MWMtMjIuMDgyMDMxLjAyMzQzOC0zOS45NzY1NjI1IDE3LjkxNzk2OS00MCA0MHY1NmMwIDUuNTIzNDM4IDQuNDc2NTYyIDEwIDEwIDEwaDE4LjYwMTU2MnYyNTUuMTk5MjE5YzAgMTQuNTYyNSA1LjEzNjcxOSAyNy45ODQzNzUgMTQuNDY4NzUgMzcuODAwNzgxIDkuMjMwNDY5IDkuNzYxNzE5IDIyLjA5Mzc1IDE1LjI2NTYyNSAzNS41MzEyNSAxNS4xOTkyMTloMTg5LjE5OTIxOWMxMy40Mzc1LjA2NjQwNiAyNi4zMDA3ODEtNS40Mzc1IDM1LjUzMTI1LTE1LjE5OTIxOSA5LjMzMjAzMS05LjgxMjUgMTQuNDY4NzUtMjMuMjM4MjgxIDE0LjQ2ODc1LTM3LjgwMDc4MXYtMjU1LjE5OTIxOWgxOC41OTc2NTdjNS41MjM0MzcgMCAxMC00LjQ3NjU2MiAxMC0xMHYtNTZjLS4wMjM0MzgtMjIuMDgyMDMxLTE3LjkxNzk2OS0zOS45NzY1NjItNDAtNDB6bS0xOTcuNTk3NjU3LTEyLjgwMDc4MWMuMDExNzE5LTExLjAzOTA2MiA4Ljk2MDkzOC0xOS45ODgyODEgMjAtMjBoODguODAwNzgxYzExLjAzOTA2My4wMTE3MTkgMTkuOTg0Mzc2IDguOTYwOTM4IDIwIDIwdjEyLjgwMDc4MWgtMTI4LjgwMDc4MXptMTg5IDM3NGMwIDE4LjgxMjUtMTIuOTAyMzQzIDMzLTMwIDMzaC0xODkuMTk5MjE5Yy0xNy4xMDE1NjIgMC0zMC0xNC4xODc1LTMwLTMzdi0yNTUuMTk5MjE5aDI0OS4xOTkyMTl6bTI4LjU5NzY1Ny0yNzUuMTk5MjE5aC0zMDYuMzk4NDM4di00NmMuMDExNzE5LTExLjA0Mjk2OSA4Ljk2MDkzOC0xOS45ODgyODEgMjAtMjBoMjY2LjM5ODQzOGMxMS4wNDI5NjguMDExNzE5IDE5Ljk4ODI4MSA4Ljk1NzAzMSAyMCAyMHptMCAwIi8+PC9nPjwvc3ZnPg==")
				img2.setAttribute("width","30px")
				btn.appendChild(img)
				btn2.appendChild(img2)
				btn.className='bg-transparent border-0'
				btn.addEventListener("click", userclick, false);
				btn2.className='bg-transparent border-0'
				btn2.addEventListener("click", eliminaUser, false);
				td2.appendChild(btn)
				td2.appendChild(btn2)
				
				td.innerHTML = r2[i].nomCom;
				td.id = r2[i].id+'-'+r2[i].nombre;
				td3.innerHTML = r2[i].Correo;
				td4.innerHTML = r2[i].nombre;
				td.className='pl-5 pt-3'
				tr.appendChild(td);
				tr.appendChild(td4);
				tr.appendChild(td3);
				tr.appendChild(td2); 
				t.appendChild(tr);
			}
			

		},
	});
	 
	//
	$(document).ready( function () {
		$('#myTable').DataTable();
	} );
	//
	
} */

function userclick() {
	
	let padre = this.parentNode.parentNode;
	let hijo = padre.childNodes[1];
	let temp = hijo.id;
	array = temp.split("-");
 
	nombre = hijo.innerText;
	alias = array[1];
	id = array[0];
	correo=array[2];
	document.getElementById("Nommue").value = nombre;
	document.getElementById("Alimue").value = alias;
	document.getElementById("idmue").value = id;
	document.getElementById("Corrmue").value = correo;
	document.getElementById("upfile1").setAttribute('src',padre.childNodes[0].childNodes[0].src)
$("#ModalUsersE").modal("show");
	console.log("id " + id + " nom " + nombre + " alias " + alias);
	 

	 
}


function editUser() {
/* 	console.log("editUser");
	let nom = document.getElementById("Nommue").value;
	let ali = document.getElementById("Alimue").value;
	 
	let id = document.getElementById("idmue").value;
	let email = document.getElementById("Corrmue").value;
	m = menu.value;
	console.log("nom: " + nom + " alias: " + ali + " menu: " + menu+" email "+email); */
	

		let nom=$("#Nommue")[0].value 
		let alias=$("#Alimue")[0].value 
		let email=$("#Corrmue")[0].value 
		let id=$("#idmue")[0].value 
		let img=$("#imgU")[0].files[0]
		document.getElementById("alerta2").innerHTML =
		'Actualización del usuario "<strong>' + nom + '</strong>" exitosa';
		console.log("nom: " + nom + " alias: " + alias +" email "+email);
		let formData=new FormData()
		formData.append('nombre',nom)
		formData.append('alias',alias)
		formData.append('email',email)
		formData.append('id',id)
		formData.append('file',img)
	 
	$.ajax({
		url: "http://localhost:82/residencia/php/actualizaUC.php",
		type: "POST",
		contentType:false,
		processData:false,
		data: formData,
		success: function (r) {
			console.log(r);
			cargaUser();
	poneMenu(alias);
		},
	});
	
}

function eliminaUser() {
	
	let padre = this.parentNode.parentNode;
	let hijo = padre.childNodes[1];
	let temp = hijo.id;
 
	array = temp.split("-");
	$("#ModalEliminaU").modal("show");
	conten = document.getElementById("MeUser");
	inp = document.getElementById("EliminaUser");
	sp = document.getElementById("EUc");
	inp.value = array[0] + "-" + hijo.innerText;
	sp.innerHTML = hijo.innerText;
	 
	 
}

function ContinuaElimina() {
	inp = document.getElementById("EliminaUser").value;
	array = inp.split("-");
	document.getElementById("alerta3").innerHTML =
		'Acaba de eliminar al usuario "<strong>' + array[1] + '</strong>" ';

	$.ajax({
		url: "http://localhost:82/residencia/php/EliminaUser.php",
		type: "POST",
		data: { id: array[0] },
		success: function (r) {
			console.log(r);
			document.getElementById("alerta3").removeAttribute("hidden");
			cargaUser();
			$(document).ready(function () {
				window.setTimeout(function () {
					$("#alerta3")
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

function agregarUserM() {
	$("#ModalUsersA").modal("show");
}
function agregarUser() {


		let nom=$("#nombreI")[0].value 
		let alias=$("#aliasI")[0].value 
		let email=$("#correoI")[0].value 
		let cve=$("#claveI")[0].value 
		let img=$("#imgU")[0].files[0]

		let formData=new FormData()
		formData.append('nombre',nom)
		formData.append('alias',alias)
		formData.append('email',email)
		formData.append('cve',cve)
		formData.append('file',img)
		document.getElementById("alerta2").innerHTML =
		'Se Agrego al Usuario "'+nom+'" correctamente';
	 
	$.ajax({
		url: "http://localhost:82/residencia/php/InsertaUC.php",
		type: "POST",
		contentType:false,
		processData:false,
		data:formData,
		success: function (r) {
			console.log(r);
			cargaUser();
			document.getElementById("alerta2").removeAttribute("hidden");
			$(document).ready(function () {
				window.setTimeout(function () {
					$("#alerta2")
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

function poneMenu(user) {
	console.log("asignando " + user);
	$.ajax({
		url: "http://localhost:82/residencia/php/asignaMenu.php",
		data: { user: user },
		type: "POST",
		success: function (r) {
			r2 = JSON.parse(r);
			console.log( r2);
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
				a.appendChild(ic)
				p.innerHTML = r2[i].Menu+"  ";
				p.className='pl-2'
				li.className = "nav-item";
				
				a.appendChild(p);
				li.appendChild(a);
				
				if (r2[i].Nivel == 0) {
					if(r2.length!=1 && r2[i+1].Nivel != 0){
					p.appendChild(ic2)
					}
					
					contenedor.appendChild(li);
				} else if (r2[i].Nivel == 1) {
					c = contenedor.lastChild;
				 
					if (c.tagName == "UL") {
						c.appendChild(li);
					} else {
						 
							ul.appendChild(li);
							c.appendChild(ul);
					 
					
						
					}
				} else if (r2[i].Nivel == 2) {
					c = contenedor.lastChild;

					c2 = c.lastChild;
					ol.appendChild(li);

					c2.appendChild(ol);
				} else if (r2[i].Nivel == 3) {
					c = contenedor.lastChild;
					c2 = c.lastChild;
					c3 = c2.lastChild;
					ol.appendChild(li);

					c3.appendChild(ol);
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

function menuF(obj,user){
	let menu =obj.value
	let padre = obj.parentNode.parentNode;
	let hijo = padre.childNodes[1];
	let temp = hijo.id;
	array = temp.split("-");
 
	nombre = hijo.innerText;
	 
	 
	document.getElementById("alerta2").innerHTML =
	'Se asigno el menu  "<strong>' + menu + '</strong>"al usuario "<strong>' + nombre + '</strong>"  ';
	$.ajax({
		url: "http://localhost:82/residencia/php/menuUser.php",
		type: "POST",
		data: { nombre: nombre, menu: menu },
		success: function (r) {
			console.log(r);
			document.getElementById("alerta2").removeAttribute("hidden");
			$(document).ready(function () {
				window.setTimeout(function () {
					$("#alerta2")
						.fadeTo(500, 0)
						.slideUp(1000, function () {
							$(this)[0].setAttribute("hidden", true);
							$(this).fadeTo(500, 100);
						});
				}, 2000);
			});
			console.log('usuario ->'+user+' menu ->'+menu)
	poneMenu(user)
		},
	});
	

}
