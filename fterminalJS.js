var nombre_intents = 5;

function intents(nombre_intents) {
	if (nombre_intents == 5) {
		document.getElementById("progressFirst").removeAttribute("hidden");
		document.getElementById("progressSecond").removeAttribute("hidden");
		document.getElementById("progressThird").removeAttribute("hidden");
		document.getElementById("progressFourth").removeAttribute("hidden");
		document.getElementById("progressFifth").removeAttribute("hidden"); 
		document.getElementById("intentsRestants").textContent  = "5";
	} else if (nombre_intents == 4) {
		document.getElementById("progressFirst").removeAttribute("hidden"); 
		document.getElementById("progressSecond").removeAttribute("hidden"); 
		document.getElementById("progressThird").removeAttribute("hidden"); 
		document.getElementById("progressFourth").removeAttribute("hidden");
		document.getElementById("progressFifth").setAttribute("hidden", ""); 
		document.getElementById("intentsRestants").textContent = "4";
	} else if (nombre_intents == 3) {
		document.getElementById("progressFirst").removeAttribute("hidden");
		document.getElementById("progressSecond").removeAttribute("hidden");
		document.getElementById("progressThird").removeAttribute("hidden");
		document.getElementById("progressFourth").setAttribute("hidden", ""); 
		document.getElementById("progressFifth").setAttribute("hidden", ""); 
		document.getElementById("intentsRestants").textContent = "3";
	} else if (nombre_intents == 2) {
		document.getElementById("progressFirst").removeAttribute("hidden");
		document.getElementById("progressSecond").removeAttribute("hidden");
		document.getElementById("progressThird").setAttribute("hidden", ""); 
		document.getElementById("progressFourth").setAttribute("hidden", ""); 
		document.getElementById("progressFifth").setAttribute("hidden", ""); 
		document.getElementById("intentsRestants").textContent = "2";
	} else if (nombre_intents == 1) {
		document.getElementById("progressFirst").removeAttribute("hidden");
		document.getElementById("progressSecond").setAttribute("hidden", ""); 
		document.getElementById("progressThird").setAttribute("hidden", ""); 
		document.getElementById("progressFourth").setAttribute("hidden", ""); 
		document.getElementById("progressFifth").setAttribute("hidden", ""); 
		document.getElementById("intentsRestants").textContent  = "1";
	} else if (nombre_intents == 0) {
		document.getElementById("progressFirst").setAttribute("hidden", ""); 
		document.getElementById("progressSecond").setAttribute("hidden", ""); 
		document.getElementById("progressThird").setAttribute("hidden", ""); 
		document.getElementById("progressFourth").setAttribute("hidden", ""); 
		document.getElementById("progressFifth").setAttribute("hidden", "");
		document.getElementById("intentsRestants").textContent  = "0";
		redirect();
	}
}



var content, contentInicial;

function mostra(obj) {
	if (seguir) {
		contentInicial = document.getElementById("prompt").innerHTML;
		document.getElementById("prompt").innerHTML += "> " + obj.innerHTML; 
		content = document.getElementById("prompt").innerHTML + "<br/>";
		document.getElementById("prompt").innerHTML += '<span class="symbpr">&#9646;</span><br/>';
	}
}


function esborra(obj) {
	if (seguir) {
		content = contentInicial;
		document.getElementById("prompt").innerHTML = content;
	}
}





function prova(obj) {
	if (seguir) {
		//document.getElementById("prompt").innerHTML += "> " + obj.innerHTML + "<br/>";
		document.getElementById("prompt").innerHTML = content;
		var paraula = String(obj.innerHTML);
		//content = document.getElementById("prompt").innerHTML;
		prova2(paraula);
	}
}

var seguir = true;
function prova2(paraula) {
	var contra = String(document.getElementById("password").innerHTML);
	var sp=document.getElementsByTagName("span");
	if (seguir) {
		if (contra != paraula) {
			nombre_intents -= 1;
			intents(nombre_intents);
			document.getElementById("prompt").innerHTML += "> ENTRY DENIED <br>";
			content = document.getElementById("prompt").innerHTML;
			contentInicial = content;
			coincidencia(contra, paraula);
		} else {
			document.getElementById("prompt").innerHTML += "> SYSTEM ENTERED <br>";
			stopCount()
			content = document.getElementById("prompt").innerHTML;
			contentInicial = content;
			seguir = false;
			setTimeout(redirect, 5000);

		}
	}
	final();
}


function redirect() {
	var varSec = document.getElementById("sec").innerHTML;
	var varMin = document.getElementById("min").innerHTML;
	if (nombre_intents==0) {
		window.location.href = "loseVaultBoy.php?w1=" + nombre_intents + "&min=" + varMin + "&sec=" + varSec;
	}else{
		window.location.href = "win.php?w1=" + nombre_intents + "&min=" + varMin + "&sec=" + varSec;
	}
	
}


function final() {
	if (nombre_intents == 0) {
		document.getElementById("prompt").innerHTML += "> MAXIMUM INTENTS<br/>";
		document.getElementById("prompt").innerHTML += "> NUMBER EXCEED!<br/>";
		content = document.getElementById("prompt").innerHTML;
		seguir = false;
	}
}

function coincidencia(contra, par) {
	var num_coincidencias = 0;
	for (i=0; i<6; i++) {
		if (contra.charAt(i) == par.charAt(i)) {
			num_coincidencias += 1;
		}
	}
	document.getElementById("prompt").innerHTML += "> " + num_coincidencias + "/5<br>";
	content = document.getElementById("prompt").innerHTML;
	contentInicial = content;
}

function pr(paraula){
	paraula.innerHTML=".....";
}


function comprovar(element){
	if (seguir) {
		var palabras=document.getElementsByTagName("span");

		element.setAttribute("onclick","");
		element.innerHTML=".....";
		element.style.backgroundColor="black";
		element.style.color="green";
	}
}


var totalSeconds = 0;
f=0;
window.onload = function() {
	var minutesLabel = document.getElementById("min");
	var secondsLabel = document.getElementById("sec");
	

	f=setInterval(setTime, 1000);

	function setTime() {
  		++totalSeconds;
  		secondsLabel.innerHTML = pad(totalSeconds % 60);
  		minutesLabel.innerHTML = pad(parseInt(totalSeconds / 60));
	}

	function pad(val) {
  		var valString = val + "";
  		if (valString.length < 2) {
    		return "0" + valString;
  		} else {
    		return valString;
  		}
	}
	
};
function stopCount() {
	  clearTimeout(f);
	  
}


function sleep(milliseconds) {
  var start = new Date().getTime();
  for (var i = 0; i < 1e7; i++) {
    if ((new Date().getTime() - start) > milliseconds){
      break;
    }
  }
}