
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



var atp=5;


function comprovar(){
	
	var password=document.getElementById("password").value;
	var palabras=document.getElementsByTagName("span");
	
	for (var i = 0; i <=palabras.length; i++) {
		if (palabras[i]!=password){
			intents(atp-1);
			
		}
	}
	
	
}









function wordSelected(){
	
	var password = document.getElementById("password");

	var palabra= document.getElementsByTagName("span");
	document.getElementsByClassName("column3").innerHTML+= palabra+"<br></br>";

}

