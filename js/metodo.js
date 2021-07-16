
 

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
	let str2 = nom.id.slice(1);
	btn = document.getElementById(nom.id);
	h = document.getElementById("horas" + str2).value;
	m = document.getElementById("minutos" + str2).value;
	s = document.getElementById("segundos" + str2).value;
	if (btn.innerHTML == "Pausar") {
		btn.innerHTML = "Reanudar";
		document.getElementById("hrs_f").value =
			f.getHours() + ":" + f.getMinutes() + ":" + f.getSeconds();
		clearInterval(cronometro[nom.id]);
	} else {
		btn.innerHTML = "Pausar";

		document.getElementById("hrs_i").value =
			f.getHours() + ":" + f.getMinutes() + ":" + f.getSeconds();
		let tiempo = new Date("2021", "07", "15", h, m, s);

		cronometro[nom.id] = setInterval(() => {
			tiempo = new Date(tiempo.getTime() + 1000);

			document.getElementById("segundos" + str2).value = tiempo.getSeconds();
			document.getElementById("segundos2" + str2).value = tiempo.getSeconds();
			document.getElementById("minutos" + str2).value = tiempo.getMinutes();
			document.getElementById("minutos2" + str2).value = tiempo.getMinutes();
			document.getElementById("horas" + str2).value = tiempo.getHours();
			document.getElementById("horas2" + str2).value = tiempo.getHours();
		}, 1000);
		 
	}
};


 
var charts = {};

var ctx = {};
for (chart of $('[name="chart"]')) {
	console.log(chart['id'])
	ctx[chart.id] = $('#'+chart.id)[0].getContext("2d");
	charts[chart.id] = new Chart(ctx[chart.id], {
		type: "bar",
		data: {
			labels: ["Lunes", "Martes", "Miercoles", "Jueves", "Viernes"],
			datasets: [
				{
					label: "Horas Por semana",
					data: [0,0,0,0,0],
					backgroundColor: [
						"rgba(255, 99, 132, 0.2)",
						"rgba(54, 162, 235, 0.2)",
						"rgba(255, 206, 86, 0.2)",
						"rgba(75, 192, 192, 0.2)",
						"rgba(153, 102, 255, 0.2)",
					],
					borderColor: [
						"rgba(255, 99, 132, 1)",
						"rgba(54, 162, 235, 1)",
						"rgba(255, 206, 86, 1)",
						"rgba(75, 192, 192, 1)",
						"rgba(153, 102, 255, 1)",
					],
					borderWidth: 1,
				},
			],
		},
		options: {
			scales: {
				y: {
					beginAtZero: true,
				},
			},
		},
	});
}