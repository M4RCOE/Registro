 
var cronometro 
    contador_h = 0;
    contador_m = 0;
    contador_s = 1;
detenerse = function (nom) {
	nomb = nom["id"];
	btn = document.getElementById("play" + nomb);
	btn.innerHTML = "Reanudar";
	document.getElementById("hrs_f").value =
		f.getHours() + ":" + f.getMinutes() + ":" + f.getSeconds();
	clearInterval(cronometro);
};
btn = function () {
	btn = document.getElementById("play");
	btn.innerHTML = "Play";
	btn.className = "btn btn-primary";
};

iniciar = function (nom) {
	nomb = nom["id"];
	btn = document.getElementById("play" + nomb);
	btn.innerHTML = "Pausar";
	btn.className = "btn btn-warning";

	document.getElementById("hrs_i").value =
		f.getHours() + ":" + f.getMinutes() + ":" + f.getSeconds();
    s = document.getElementById("segundos" + nomb).value;
	m = document.getElementById("minutos" + nomb).value;
	h = document.getElementById("horas" + nomb).value;
	 
	cronometro = setInterval(() => {
        
		document.getElementById("segundos" + nomb).value = eval(contador_s);
		document.getElementById("segundos2" + nomb).value = eval(contador_s);
        contador_s++;
		if (contador_s == 60) {
			contador_s = 0;
			
			document.getElementById("minutos" + nomb).value = eval(contador_m);
			document.getElementById("minutos2" + nomb).value = eval(contador_m);
            contador_m++;
		}
		if (contador_m == 60) {
			contador_m = 0;
			document.getElementById("horas" + nomb).value = eval(contador_h);
			document.getElementById("horas2" + nomb).value = eval(contador_h);
            contador_h++;
		}
		s.innerHTML = contador_s;
		
	}, 1000);
};
