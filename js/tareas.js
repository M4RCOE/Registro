
let spanAnterior = null;
var calen = {};
var idCalen;

      let Calendar = function (t) {
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
        let e = new Date();
        (this.CurrentMonth = e.getMonth()),
          (this.CurrentYear = e.getFullYear());
        let r = t.Format;
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
            ? ((this.CurrentMonth = 11),
              (this.CurrentYear = this.CurrentYear - 1))
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

          document.querySelectorAll(".months").forEach(e => 
          1 == 
            e.getAttribute("class")
            .includes("active") 
            ? e.setAttribute("class", "months") 
            : e.setAttribute("class","months active"),
          );
          document.querySelectorAll(".month-a").forEach(e => 
          "true" == 
            e.getAttribute("data-active")
            ? (e.setAttribute("data-active", !1), document.querySelectorAll(".month-b").forEach(i => i.setAttribute("data-active",!0)))
            : (e.setAttribute("data-active",!0), document.querySelectorAll(".month-b").forEach(i => i.setAttribute("data-active",!1))),
            setTimeout(function () {
              document.querySelectorAll(".calendar .header").forEach(e => e.setAttribute("class", "header active"));
            }, 200)        
          );
        }),
        (Calendar.prototype.Calendar = function (t, e) {
          "number" == typeof t && (this.CurrentYear = t),
          "number" == typeof t && (this.CurrentMonth = e);
          let r = new Date().getDate(),
              n = new Date().getMonth(),
              a = new Date().getFullYear(),
              o = new Date(t, e, 1).getDay(),
              i = new Date(t, e + 1, 0).getDate(),
              u =
                0 == e
                  ? new Date(t - 1, 11, 0).getDate()
                  : new Date(t, e, 0).getDate(),
              s = "<span>" + this.Months[e] + " &nbsp; " + t + "</span>",
              d = '<div class="table">';
              d += '<div class="row head">';
              for (let c = 0; c < 7; c++)
                d += '<div class="cell">' + this.DaysOfWeek[c] + "</div>";
                d += "</div>";
              for (
              let h,
                  l = (dm = "M" == this.f ? 1 : 0 == o ? -5 : 2),
                  v = ((c = 0), 0);
                  v < 6;
                  v++
              ) {
                d += '<div class="row">';
                for (let m = 0; m < 7; m++) {
                  if ((h = c + dm - o) < 1)
                    d += '<div class="p-1 m-0 cell disable">' + (u - o + l++) + "</div>";
                  else if (h > i)
                    d += '<div class="p-1 m-0 cell disable">' + l++ + "</div>";
                  else {
                    (d +=
                      '<div class="p-1 m-0 cell' +
                    (r == h && this.CurrentMonth == n && this.CurrentYear == a
                      ? " active"
                      : "") +
                      '"><span class="dia" onclick="fecha(this)">' +
                    h +
                      "</span></div>"),
                      (l = 1);
                  }
                  c % 7 == 6 && h >= i && (v = 10), c++;
                }
                d += "</div>";
              }
          (d += "</div>"),
            (document.querySelectorAll('[data-render="month-year"]').forEach(e => e.innerHTML = s)),
            (document.querySelectorAll(this.divId).forEach(e => e.innerHTML = d)),
            document.querySelectorAll(this.divId).forEach(e => e.setAttribute("data-date", this.Months[e] + " - " + t)),
            document.querySelectorAll(this.divId).forEach(e => e.setAttribute("data-month", e));
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

              if(document.querySelectorAll(".calendar .header").forEach(j => j.setAttribute("class", "header")), document.querySelectorAll(".months").forEach(j => "true" == j.getAttribute("data-loading")))
                return (
                  document.querySelectorAll(".calendar .header").forEach(j => j.setAttribute("class", "header active"),!1)   
                );
              let el;
              document.querySelectorAll(".months").forEach(j => j.setAttribute("data-loading", "true"),
              this.getAttribute("data-action").includes("prev")
                ? (t.prevMonth(), (el = "left"))
                : (t.nextMonth(), (el = "right")),
              t.checkActive(),
              document.querySelectorAll(".months").forEach(j => j.setAttribute("data-flow", el)),
              document.querySelectorAll('.month[data-active="true"]').forEach(e => 
                e.addEventListener("webkitTransitionEnd", function () {
                  document.querySelectorAll(".months").forEach(j => j.removeAttribute("data-loading"))
                  
              })),
              document.querySelectorAll('.month[data-active="true"]').forEach(j => j.addEventListener("transitionend", function () {
              document.querySelectorAll(".months").forEach(j => j.removeAttribute("data-loading"))
              }))
                
              )  
            };
        });
		 
function fecha(obj) {
 
	d = document.getElementById("sp1").childNodes[0].innerText;
	f = d.split(/\s{3}/);
	let fech = new Date(f[0] + " " + obj.innerText + ", " + f[1]);
  id=obj.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.parentNode.id
  nn=id.split(' ',1)
	document.getElementById("fecha2"+nn).value =fech.getFullYear()+"-"+fech.getMonth()+"-"+fech.getDate();
	
}

 

function tarea(b) {
  bb=b.parentNode.parentNode.id
	nn=bb.split(' ',1)
	$("#a1").hide();
//	console.log("tarea "+bb);
	let t = document.getElementById("title"+nn).value;
	let f = document.getElementById("fecha2"+nn).value;
	
	
	//console.log("t:" + t + " f" + f+" name"+bb);
	if (t != "" && f != "") {
		
		let sp = document.createElement("span");
		let br = document.createElement("br");
		let hr = document.createElement("hr");
		let div = document.createElement("div");
		let newLabel = document.createElement("label");
		div.className = "container";
    console.log('dentro de tarea'+urlify(t))
		newLabel.innerHTML=f+"-"+urlify(t)
		let contenedor = document.getElementById("contiene"+nn[0]);
		sp.innerHTML='Activa'
		sp.className ='float-right text-success'
		//console.log("span "+sp)
		div.appendChild(newLabel);
		div.appendChild(sp);
		div.addEventListener("click", tareaclick, false);

		contenedor.appendChild(div);
		contenedor.appendChild(hr);
		contenedor.appendChild(br);
		var parametros = { nomb: bb, tarea: t, fech:f , estado: "Activa" };
		$.ajax({
			url: "http://localhost:82/residencia/php/tarea.php",
			type: "POST",
			data: parametros,
			success: function (r) {
				console.log(r);
				 
			},
		});
    document.getElementById("title"+nn).value='';
    document.getElementById("fecha"+nn).value='';
    cargaTareas(bb)
	} else {
		$("#a1").show();
	}
}

$('input').on("keydown", function(e,value) {
 
	var code = e.keyCode || e.which;
	if(code == 13) {
		tarea(this)
	}
	});

 
  cambiosT = function (n) {
    id=n.parentNode.parentNode.parentNode.parentNode.id
    idh=id.slice(10)

    i=n.id     
    $.ajax({
      url: "http://localhost:82/residencia/php/actualizaT.php",
      type: "POST",
      data: $("#CambiaTarea"+idh).serialize(),
      success: function (r) {
        console.log(r);
       
      },
    });
    cargaTareas(i)
     
  };
 
