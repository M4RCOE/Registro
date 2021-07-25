var Calendar = function (t) {
	(this.divId = t.RenderID ? t.RenderID : '[data-render="calendar"]'),
		(this.DaysOfWeek = t.DaysOfWeek
			? t.DaysOfWeek
			: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"]),
		(this.Months = t.Months
			? t.Months
			: [
					"Jan",
					"Feb",
					"Mar",
					"Apr",
					"May",
					"Jun",
					"Jul",
					"Aug",
					"Sep",
					"Oct",
					"Nov",
					"Dec",
			  ]);
	var e = new Date();
	(this.CurrentMonth = e.getMonth()), (this.CurrentYear = e.getFullYear());
	var r = t.Format;
	this.f = "string" == typeof r ? r.charAt(0).toUpperCase() : "M";
};
(Calendar.prototype.nextMonth = function () {
	11 == this.CurrentMonth
		? ((this.CurrentMonth = 0), (this.CurrentYear = this.CurrentYear + 1))
		: (this.CurrentMonth = this.CurrentMonth + 1),
		(this.divId = '[data-active="false"] .render'),
		this.showCurrent();
}),
	(Calendar.prototype.prevMonth = function () {
		0 == this.CurrentMonth
			? ((this.CurrentMonth = 11), (this.CurrentYear = this.CurrentYear - 1))
			: (this.CurrentMonth = this.CurrentMonth - 1),
			(this.divId = '[data-active="false"] .render'),
			this.showCurrent();
	}),
	(Calendar.prototype.previousYear = function () {
		(this.CurrentYear = this.CurrentYear - 1), this.showCurrent();
	}),
	(Calendar.prototype.nextYear = function () {
		(this.CurrentYear = this.CurrentYear + 1), this.showCurrent();
	}),
	(Calendar.prototype.showCurrent = function () {
		this.Calendar(this.CurrentYear, this.CurrentMonth);
	}),
	(Calendar.prototype.checkActive = function () {
		1 ==
		document.querySelector(".months").getAttribute("class").includes("active")
			? document.querySelector(".months").setAttribute("class", "months")
			: document
					.querySelector(".months")
					.setAttribute("class", "months active"),
			"true" == document.querySelector(".month-a").getAttribute("data-active")
				? (document.querySelector(".month-a").setAttribute("data-active", !1),
				  document.querySelector(".month-b").setAttribute("data-active", !0))
				: (document.querySelector(".month-a").setAttribute("data-active", !0),
				  document.querySelector(".month-b").setAttribute("data-active", !1)),
			setTimeout(function () {
				document
					.querySelector(".calendar .header")
					.setAttribute("class", "header active");
			}, 200);
	}),
	(Calendar.prototype.Calendar = function (t, e) {
		"number" == typeof t && (this.CurrentYear = t),
			"number" == typeof t && (this.CurrentMonth = e);
		var r = new Date().getDate(),
			n = new Date().getMonth(),
			a = new Date().getFullYear(),
			o = new Date(t, e, 1).getDay(),
			i = new Date(t, e + 1, 0).getDate(),
			u =
				0 == e ? new Date(t - 1, 11, 0).getDate() : new Date(t, e, 0).getDate(),
			s = "<span>" + this.Months[e] + " &nbsp; " + t + "</span>",
			d = '<div class="table">';
		d += '<div class="row head">';
		for (var c = 0; c < 7; c++)
			d += '<div class="pb-0 cell">' + this.DaysOfWeek[c] + "</div>";
		d += "</div>";
		for (
			var h, l = (dm = "M" == this.f ? 1 : 0 == o ? -5 : 2), v = ((c = 0), 0);
			v < 6;
			v++
		) {
			d += '<div class="row">';
			for (var m = 0; m < 7; m++) {
				if ((h = c + dm - o) < 1)
					d += '<div class="cell disable">' + (u - o + l++) + "</div>";
				else if (h > i) d += '<div class="cell disable" >' + l++ + "</div>";
				else {
					(d +=
						'<div style="width:5%; height:10% " class="p-1 cell' +
						(r == h && this.CurrentMonth == n && this.CurrentYear == a
							? " active"
							: "") +
						'"><span onclick="fecha(this)" style="width:1px; ">' +
						h +
						"</span></div>"),
						(l = 1);
				}
				c % 7 == 6 && h >= i && (v = 10), c++;
			}
			d += "</div>";
		}
		(d += "</div>"),
			(document.querySelector('[data-render="month-year"]').innerHTML = s),
			(document.querySelector(this.divId).innerHTML = d),
			document
				.querySelector(this.divId)
				.setAttribute("data-date", this.Months[e] + " - " + t),
			document.querySelector(this.divId).setAttribute("data-month", e);
	}),
	(window.onload = function () {
		var t = new Calendar({
			RenderID: ".render-a",
			Format: "M",
		});
		t.showCurrent(), t.checkActive();
		var e = document.querySelectorAll(".header [data-action]");
		for (i = 0; i < e.length; i++)
			e[i].onclick = function () {
				if (
					(document
						.querySelector(".calendar .header")
						.setAttribute("class", "header"),
					"true" ==
						document.querySelector(".months").getAttribute("data-loading"))
				)
					return (
						document
							.querySelector(".calendar .header")
							.setAttribute("class", "header active"),
						!1
					);
				var e;
				document.querySelector(".months").setAttribute("data-loading", "true"),
					this.getAttribute("data-action").includes("prev")
						? (t.prevMonth(), (e = "left"))
						: (t.nextMonth(), (e = "right")),
					t.checkActive(),
					document.querySelector(".months").setAttribute("data-flow", e),
					document
						.querySelector('.month[data-active="true"]')
						.addEventListener("webkitTransitionEnd", function () {
							document.querySelector(".months").removeAttribute("data-loading");
						}),
					document
						.querySelector('.month[data-active="true"]')
						.addEventListener("transitionend", function () {
							document.querySelector(".months").removeAttribute("data-loading");
						});
			};
	});
function fecha(obj) {
	d = document.getElementById("sp1").childNodes[0].innerText;
	f = d.split(/\s{3}/);
	let fech = new Date(f[0] + " " + obj.innerText + ", " + f[1]);
	
	document.getElementById("fecha").value =
		f[0] + " " + obj.innerText + ", " + f[1];
	document.getElementById("fecha2").value =
	fech.getFullYear()+"-"+fech.getMonth()+"-"+fech.getDate();
	
	
}
function tarea(n) {
	nn=n.split(' ')
	$("#a1").hide();
	console.log("tarea");
	let t = document.getElementById("title").value;
	let f = document.getElementById("fecha").value;
//	console.log("t:" + t + " f" + f);
	if (t != "" && f != "") {
		
		let sp = document.createElement("span");
		let br = document.createElement("br");
		let hr = document.createElement("hr");
		let div = document.createElement("div");
		let checkbox = document.createElement("input");
		let newLabel = document.createElement("label");
		div.className = "container";
		checkbox.type = "checkbox";
		checkbox.value = "value";
		newLabel.appendChild(checkbox);
		newLabel.innerHTML=f+"-"+t
		let contenedor = document.getElementById("contiene"+nn[0]);
		sp.innerHTML='Activa'
		sp.className ='float-right text-success'
		console.log("span "+sp)
		div.appendChild(newLabel);
		div.appendChild(sp);
		div.addEventListener("click", tareaclick, false);

		contenedor.appendChild(div);
		contenedor.appendChild(hr);
		contenedor.appendChild(br);
		let f2 = document.getElementById("fecha2").value;
		var parametros = { nomb: n, tarea: t, fech:f2 , estado: "Activa" };
		$.ajax({
			url: "http://localhost:82/residencia/php/tarea.php",
			type: "POST",
			data: parametros,
			success: function (r) {
				console.log(r);
				 
			},
		});
	} else {
		$("#a1").show();
	}
}


 

 
