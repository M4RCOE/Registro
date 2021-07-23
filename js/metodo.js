var cronometro = {};
iniciar = function (nom, c) {
	btn = document.getElementById(nom.id);
/* 	console.log("inicai " + nom.id); */
	let dif = new Date();
	/* console.log(
		"fecha" + dif.getHours() + ":" + dif.getMinutes() + ":" + dif.getSeconds()
	); */
	let str2 = nom.id.slice(1);
	h = document.getElementById("horas2" + str2).value;
	m = document.getElementById("minutos2" + str2).value;
	s = document.getElementById("segundos2" + str2).value;

	if (btn.innerHTML == "Finalizar" && c != 1) {
		/* console.log("finalizo " + nom.id + " " + c); */
		clearInterval(cronometro[nom.id]);
		actualiza(str2);
		document.getElementById("segundos2" + str2).value = 0;
		document.getElementById("minutos2" + str2).value = 0;
		document.getElementById("horas2" + str2).value = 0;
		btn.innerHTML = "Play";
		localStorage.setItem("p" + str2, "play");
		location.reload();
	} else {
		

		if (c == 0) {
		btn.innerHTML = "Finalizar";
		localStorage.setItem("o" + str2, 0);
		localStorage.setItem("p" + str2, "Finalizar");
			inserta(str2);
			
		}
		var tiempo = new Date("2021", "07", "15", h, m, s);
		
		cronometro[nom.id] = setInterval(() => {
			tiempo = new Date(tiempo.getTime() + 1000);
			document.getElementById("segundos2" + str2).value = tiempo.getSeconds();
			document.getElementById("minutos2" + str2).value = tiempo.getMinutes();
			document.getElementById("horas2" + str2).value = tiempo.getHours();
			
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
		url: "http://localhost:82/residencia/php/inserta.php",
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
		url: "http://localhost:82/residencia/php/actualiza.php",
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
		url: "http://localhost:82/residencia/php/horas.php",
		type: "POST",
		data: parametros,
		success: function (r) {
			n2 = n.split(" ", 1);

			$("#sp" + n2).html(r.split(":")[0] + " hrs " + r.split(":")[1] + " mn");
		},
	});
};

dds = {};
dia = function (n) {
	let para_graficaic = [0, 0, 0, 0, 0];
	var parametros = { nomb: n };
	$.ajax({
		url: "http://localhost:82/residencia/php/semana.php",
		type: "POST",
		data: parametros,
		success: function (r) {
			n2 = n.split(" ", 1);

			/* console.log(para_graficaic);
			console.log(r.split(",")); */
			r2 = r.split(",");
			for (x = 0; x < r2.length; x = x + 2) {
				var d = new Date("0001-01-01T" + r2[x - 1]);
				var minutos = d.getHours() * 60 + d.getMinutes();
				if (r2[x] != "") {
					if (x % 2 == 0) {
						 
						if (new Date(r2[x]).getDay() == 2) {
							para_graficaic[1] = minutos / 60;
						}
						if (new Date(r2[x]).getDay() == 3) {
							para_graficaic[2] = minutos / 60;
						}
						if (new Date(r2[x]).getDay() == 4) {
							para_graficaic[3] = minutos / 60;
						}
						if (new Date(r2[x]).getDay() == 5) {
							para_graficaic[4] = minutos / 60;
						}
						if (new Date(r2[x]).getDay() == 6) {
							para_graficaic[5] = minutos;
						}
					}
				}
			}
			dds["myChart" + n2] = para_graficaic;
			/* console.log(dds["myChart" + n2])
			console.log(para_graficaic) */
		},
	});
};

corriendo = function (n) {
	var parametros = { nomb: n };
	$.ajax({
		url: "http://localhost:82/residencia/php/corriendo.php",
		type: "POST",
		data: parametros,
		success: function (r) {
			n2 = n.split(" ", 1);
			
			 
			 //document.getElementById("c"+n2).value=0
			 
			 if (r!=0){
				//data=JSON.parse(r)
				console.log('Respuesta'+r.split("|")[1])
				console.log('Respuesta'+r.split("|")[0])
			 
				//document.getElementById("c"+n2).value=1
				localStorage.setItem("diaD" + n2, r.split("|")[1]);
				localStorage.setItem("horaD" + n2, r.split("|")[0]);
				localStorage.setItem("o" + n2, 0);
				localStorage.setItem("p" + n2, "Finalizar");
			 }else{
				localStorage.setItem("p" + n2, "Play");
			 }
			
		},
	});
};

 


 
