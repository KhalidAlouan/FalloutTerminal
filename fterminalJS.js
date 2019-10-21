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


	}
}





function prova(obj) {
	if (seguir) {
		document.getElementById("prompt").innerHTML += "> " + obj.innerHTML + "<br/>";
		var paraula = String(obj.innerHTML);
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
			pr(paraula);
			coincidencia(contra, paraula);
			

		} else {
			document.getElementById("prompt").innerHTML += "> SYSTEM ENTERED <br>";
			seguir = false;
			
		}
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
}

function pr(paraula){
	paraula.innerHTML=".....";
}






function comprovar(element){
	var palabras=document.getElementsByTagName("span");

	element.setAttribute("onclick","");
	element.innerHTML=".....";
	element.style.backgroundColor="black";
	element.style.color="green";
}


