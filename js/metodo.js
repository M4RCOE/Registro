var sitio=document.getElementById("url_sitio").value;
console.log(sitio)
var cronometro = {};
function ini(nom, c) {
	padre = nom.parentNode.parentNode.parentNode;

	document.getElementById("pnameU").value =
		padre.childNodes[2].childNodes[0].innerText;
	document.getElementById("pnameU2").value = nom.id;
	document.getElementById("pnameU2").value = nom.id;

	$("#modalnip")
		.modal("show")
		.on("shown.bs.modal", function () {
			$("#pu1").focus();
		});
}

iniciar = function (nom, c) {
	btn = document.getElementById(nom);

	 
	let str2 = nom.slice(1);
	h = document.getElementById("horas2" + str2).value;
	m = document.getElementById("minutos2" + str2).value;
	s = document.getElementById("segundos2" + str2).value;

	if (btn.innerHTML == "Finalizar" && c != 1) {
		btn.className = "btn btn-success float-right mt-1 ";
		$("#bc" + str2).hide();
		$("#p" + str2).show();
		/* console.log("finalizo " + nom.id + " " + c); */
		clearInterval(cronometro[nom]);
		actualiza(str2);
		document.getElementById("segundos2" + str2).value = 0;
		document.getElementById("minutos2" + str2).value = 0;
		document.getElementById("horas2" + str2).value = 0;
		btn.innerHTML = "Iniciar";
		localStorage.setItem("p" + str2, "Iniciar");
		location.reload();
	} else {
		 
		btn.className = "btn btn-danger float-right mt-1 ";
		$("#bc" + str2).show();
		$("#p" + str2).hide();
		//console.log(str2 + "  c:" + c)
		if (c == 0) {
			btn.innerHTML = "Finalizar";
			localStorage.setItem("o" + str2, 0);
			localStorage.setItem("p" + str2, "Finalizar");
			inserta(str2);
		}
		 
		let tm=moment()
		
		tm.add(h,'h')
		tm.add(m,'m')
		tm.add(s,'s')
		let tm2=moment()
		
			 
		cronometro[nom] = setInterval(() => {
			let horas =  (tm.diff(tm2, 'h'));
			let horas2=horas*60;
			let minutos =(tm.diff(tm2, 'm'));
			minutos=minutos-horas2
			let minutos2=horas*3600+minutos*60;
			let segundo =(tm.diff(tm2, 's'));
			segundo=segundo-minutos2
			tm.add(1,'s')
			document.getElementById("segundos2" + str2).value = segundo;
			document.getElementById("minutos2" + str2).value = minutos;
			document.getElementById("horas2" + str2).value = horas;
			document.getElementById("time" + str2).value =horas +":" +minutos +":" +segundo;
		}, 1000);
	}
};

inserta = function (n) {
	var f = new Date();
	document.getElementById("fech").value =
		f.getFullYear() + "-" + (f.getMonth() + 1) + "-" + f.getDate();
	n2 = document.getElementById("nombre" + n).value;
	document.getElementById("nomb").value = n2;
	document.getElementById("hr_i").value =
		f.getHours() + ":" + f.getMinutes() + ":" + f.getSeconds();
	h = document.getElementById("horas2" + n).value;
	m = document.getElementById("minutos2" + n).value;
	s = document.getElementById("segundos2" + n).value;
	document.getElementById("tiempo").value = h + ":" + m + ":" + s;

	$.ajax({
		url: sitio+"php/inserta.php",
		type: "POST",
		data: $("#formenvia").serialize(),
		success: function (r) {
			console.log(r);
		},
	});
};
actualiza = function (n) {
	var f = new Date();
	n2 = document.getElementById("nombre" + n).value;
	document.getElementById("nomb2").value = n2;
	document.getElementById("hr_f2").value =
		f.getHours() + ":" + f.getMinutes() + ":" + f.getSeconds();
	h = document.getElementById("horas2" + n).value;
	m = document.getElementById("minutos2" + n).value;
	s = document.getElementById("segundos2" + n).value;
	document.getElementById("tiempo2").value = h + ":" + m + ":" + s;
	names = document.getElementById("nomb2").value;
	housrs = document.getElementById("hr_f2").value;
	tiemposs = document.getElementById("tiempo2").value;
	$.ajax({
		url: sitio+"php/actualiza.php",
		type: "POST",
		data: $("#formenvia2").serialize(),
		success: function (r) {
			console.log(r);
		},
	});
};

horas = function (n) {
	var parametros = { nomb: n };
	$.ajax({
		url: sitio+"php/horas.php",
		type: "POST",
		data: parametros,
		success: function (r) {
			n2 = n.split(" ", 1);
			console.log("Horas: " + r);
			if (r == 0) {
				$("#sp" + n2).html("0 hrs 0 mn");
			} else {
				$("#sp" + n2).html(r.split(":")[0] + " hrs " + r.split(":")[1] + " mn");
			}
		},
	});
};

corriendo = function (n) {
	var parametros = { nomb: n };
	$.ajax({
		url: sitio+"php/corriendo.php",
		type: "POST",
		data: parametros,
		success: function (r) {
			n2 = n.split(" ", 1);

			//document.getElementById("c"+n2).value=0

			if (r != 0) {
				//data=JSON.parse(r)
				//console.log('Respuesta' + r.split("|")[1])
				//console.log('Respuesta' + r.split("|")[0])
				hrs = r.split("|")[0];
				dia = r.split("|")[1];
				hr = hrs.split(":");
				dias = dia.split("-");
				mes = parseInt(dias[1]);
				mes = mes - 1;
				let fc=dia+" "+hrs
				document.getElementById("p" + n2).innerHTML = "Finalizar";
				//f2 = new Date(dias[0], mes, dias[2], hr[0], hr[1], hr[2]);
				 
				f1 = moment(fc);
				f2 = moment();

				let horas =  (f2.diff(f1, 'h'));
				let horas2=horas*60;
				let minutos =(f2.diff(f1, 'm'));
				minutos=minutos-horas2
				let minutos2=horas*3600+minutos*60;
				let segundo =(f2.diff(f1, 's'));
				segundo=segundo-minutos2
 
				//console.log("Tiempo " + (tiempo3.getHours() - 18) + ":" + tiempo3.getMinutes() + ":" + tiempo3.getSeconds())
				document.getElementById("horas2" + n2).value = horas;
				document.getElementById("minutos2" + n2).value = minutos;
				document.getElementById("segundos2" + n2).value = segundo;
				o = document.getElementById("p" + n2).id;
				iniciar(o, 1, 0);

				//document.getElementById("c"+n2).value=1
				localStorage.setItem("diaD" + n2, r.split("|")[1]);
				localStorage.setItem("horaD" + n2, r.split("|")[0]);
				localStorage.setItem("o" + n2, 0);
				localStorage.setItem("p" + n2, "Finalizar");
				/* console.log('info ' + n) */
			} else {
				//console.log('nada'+n)
				localStorage.clear();
			}
		},
	});
};

function urlify(text) {
	var urlRegex = /(https?:\/\/[^\s]+)/g;
	return text.replace(urlRegex, function (url) {
		return '<a href="' + url + '" target="_blank">' + url + "</a>";
	}); // or alternatively // return text.replace(urlRegex, '<a href="$1">$1</a>')
}

function aparece(bt) {
	//console.log('aparece')
	btt = bt.id.split("bc");

	$("#bc1" + btt[1]).show();
	$("#p" + btt[1]).show();
}
function desaparece(bt) {
	//console.log('desaparece')
	btt = bt.id.split("bc1");
	$("#bc1" + btt[1]).hide();
	$("#p" + btt[1]).hide();
}
function oculta(bt) {
	//console.log('btn-oculta')
	$("#bc1" + bt).hide();
	$("#bc" + bt).hide();
}

function Nip() {
	n = document.getElementById("pnameU").value;
	n2 = document.getElementById("pnameU2").value;
	b = false;
	$.ajax({
		url: sitio+"php/nip.php",
		type: "POST",
		data: { nom: n },
		success: function (r) {
			p = document.getElementById("pu1").value;
			p2 = document.getElementById("pu2").value;
			p3 = document.getElementById("pu3").value;
			p4 = document.getElementById("pu4").value;
			nip = p + p2 + p3 + p4;
			data = JSON.parse(r);

			if (data[0].clave == nip) {
				$("#modalnip").modal("hide");
				p = document.getElementById("pu1").value = "";
				p2 = document.getElementById("pu2").value = "";
				p3 = document.getElementById("pu3").value = "";
				p4 = document.getElementById("pu4").value = "";
				iniciar(n2, 0);
			} else {
				p = document.getElementById("pu1").value = "";
				p2 = document.getElementById("pu2").value = "";
				p3 = document.getElementById("pu3").value = "";
				p4 = document.getElementById("pu4").value = "";
				$("#pu1").focus();
			}
		},
	});
	return b;
}

dds = {};
dia = function (n) {
	//console.log('dentro de dia '+n)
	let para_graficaic = [0, 0, 0, 0, 0];
	var parametros = { nomb: n };
	$.ajax({
		url: sitio+"php/semana.php",
		type: "POST",
		data: parametros,
		success: function (r) {
			r2 = JSON.parse(r);
			// console.log(r2)
			if (r2.length != 0) {
				for (x = 0; x < r2.length; x++) {
					var d = new Date("0001-01-01T" + r2[x].hrs);
					var minutos = d.getHours() * 60 + d.getMinutes();

					if (r2[x].dia == 0) {
						para_graficaic[0] = minutos / 60;
					}
					if (r2[x].dia == 1) {
						para_graficaic[1] = minutos / 60;
					}
					if (r2[x].dia == 2) {
						para_graficaic[2] = minutos / 60;
					}
					if (r2[x].dia == 3) {
						para_graficaic[3] = minutos / 60;
					}
					if (r2[x].dia == 4) {
						para_graficaic[4] = minutos / 60;
					}
					if (r2[x].dia == 5) {
						para_graficaic[5] = minutos / 60;
					}
				}
			}
			dds["myChart" + n2] = para_graficaic;
		},
	});
};
