var $table = $("#table");
$("#table td").each(function (e, value) {
	value.onclick = function (e) {
		if (e.target.value != "boton") {
			
			$("#i" + e.target.parentNode.firstChild.innerText).modal(
				"show"
			);
		}
	};
});

detenerse = function (nom) {
	nomb = nom["id"];
	btn = document.getElementById("play" + nomb);
	btn.innerHTML = "Reanudar";
	document.getElementById("hrs_f").value =
		f.getHours() + ":" + f.getMinutes() + ":" + f.getSeconds();
	clearInterval(cronometro[nomb]);
};
btn = function () {
	btn = document.getElementById("play");
	btn.innerHTML = "Play";
	btn.className = "btn btn-primary";
};
var cronometro = {};

iniciar = function (nom) {
	btn = document.getElementById("play" + nom.id);

	if (btn.innerHTML == "Pausar") {
		btn.innerHTML = "Reanudar";
		clearInterval(cronometro[nom.id]);
	} else {
		btn.innerHTML = "Pausar";
		document.getElementById("hrs_i").value =
			f.getHours() + ":" + f.getMinutes() + ":" + f.getSeconds();
		let tiempo = new Date("2021", "07", "15", 0, 0, 0);

		cronometro[nom.id] = setInterval(() => {
			tiempo = new Date(tiempo.getTime() + 1000);

			document.getElementById("segundos" + nom.id).value = tiempo.getSeconds();
			document.getElementById("segundos2" + nom.id).value = tiempo.getSeconds();
			document.getElementById("minutos" + nom.id).value = tiempo.getMinutes();
			document.getElementById("minutos2" + nom.id).value = tiempo.getMinutes();
			document.getElementById("horas" + nom.id).value = tiempo.getHours();
			document.getElementById("horas2" + nom.id).value = tiempo.getHours();
		}, 1000);
		console.log(cronometro[nom.id]);
	}
};
