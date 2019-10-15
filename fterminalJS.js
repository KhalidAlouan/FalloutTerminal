function intents(nombre_intents) {
	document.getElementById("progressFirst").setAttribute("hidden", ""); 
	document.getElementById("progressSecond").setAttribute("hidden", ""); 
	document.getElementById("progressThird").setAttribute("hidden", ""); 
	document.getElementById("progressFourth").setAttribute("hidden", ""); 
	document.getElementById("progressFifth").setAttribute("hidden", ""); 
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

