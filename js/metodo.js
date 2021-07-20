var cronometro = {};
iniciar = function (nom,c) {
	btn = document.getElementById(nom.id);
	console.log("inicai " + nom.id);
	let str2 = nom.id.slice(1);
	h = document.getElementById("horas2" + str2).value;
	m = document.getElementById("minutos2" + str2).value;
	s = document.getElementById("segundos2" + str2).value;
	
	if (btn.innerHTML == "Finalizar"&&c!=1) {
		console.log('finalizo '+nom.id+" "+c)
		clearInterval(cronometro[nom.id]);
		actualiza(str2);
		document.getElementById("segundos2" + str2).value = 0;
		document.getElementById("minutos2" + str2).value = 0;
		document.getElementById("horas2" + str2).value = 0;
		btn.innerHTML = "Play";
		localStorage.setItem("p" + str2, "play");
		localStorage.clear();
		 
	} else {
		btn.innerHTML = "Finalizar";
		localStorage.setItem("o" + str2, 0);
		localStorage.setItem("p" + str2, "Finalizar");
		if(c==0){
			inserta(str2);
		}
		var tiempo = new Date("2021", "07", "15", h, m, s);
		cronometro[nom.id] = setInterval(() => {
			tiempo = new Date(tiempo.getTime() + 1000);
			document.getElementById("segundos2" + str2).value = tiempo.getSeconds();
			document.getElementById("minutos2" + str2).value = tiempo.getMinutes();
			document.getElementById("horas2" + str2).value = tiempo.getHours();
			localStorage.setItem("horas2" + str2, tiempo.getHours());
			localStorage.setItem("minutos2" + str2, tiempo.getMinutes());
			localStorage.setItem("segundos2" + str2, tiempo.getSeconds());
			console.log('hola '+nom.id+" "+c+" b"+btn.innerHTML)
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
	document.getElementById("hr_f2").value =f.getHours() + ":" + f.getMinutes() + ":" + f.getSeconds();
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

horas=function(n){
	
	var parametros = {"nomb" : n};
	$.ajax({
	  url: "http://localhost:82/residencia/php/horas.php",
	  type: "POST",
	  data:parametros,
	  success:  function (r) {
		n2=n.split(' ',1)
		$('#sp'+n2).html('['+r+']');
		  }
	});
}

dia=function(n){
	let n3=n.split(' ')
	var parametros = {"nomb" : n};
	$.ajax({
	  url: "http://localhost:82/residencia/php/semana.php",
	  type: "POST",
	  data:parametros,
	  success:  function (r) {
		n2=n.split(' ',1)
		 console.log(r.split(','))
		 console.log("#Chart"+n3[0])
		 $("#Chart"+n3[0]).html(r.split(','))
		 $("#cc"+n3[0]).val(r.split(','))
 
		  }
	});

clasif=function (nm){
	let st=$("#cc"+nm)
	
	console.log('span '+st)
	let numeroDia = new Date().getDay();
	console.log()
}
}
