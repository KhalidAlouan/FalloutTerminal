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
	} else if (nombre_intents == 4) {
		document.getElementById("progressFirst").removeAttribute("hidden"); 
		document.getElementById("progressSecond").removeAttribute("hidden"); 
		document.getElementById("progressThird").removeAttribute("hidden"); 
		document.getElementById("progressFourth").removeAttribute("hidden");
		document.getElementById("progressFifth").setAttribute("hidden", ""); 
	} else if (nombre_intents == 3) {
		document.getElementById("progressFirst").removeAttribute("hidden");
		document.getElementById("progressSecond").removeAttribute("hidden");
		document.getElementById("progressThird").removeAttribute("hidden");
		document.getElementById("progressFourth").setAttribute("hidden", ""); 
		document.getElementById("progressFifth").setAttribute("hidden", ""); 
	} else if (nombre_intents == 2) {
		document.getElementById("progressFirst").removeAttribute("hidden");
		document.getElementById("progressSecond").removeAttribute("hidden");
		document.getElementById("progressThird").setAttribute("hidden", ""); 
		document.getElementById("progressFourth").setAttribute("hidden", ""); 
		document.getElementById("progressFifth").setAttribute("hidden", ""); 
	} else if (nombre_intents == 1) {
		document.getElementById("progressFirst").removeAttribute("hidden");
		document.getElementById("progressSecond").setAttribute("hidden", ""); 
		document.getElementById("progressThird").setAttribute("hidden", ""); 
		document.getElementById("progressFourth").setAttribute("hidden", ""); 
		document.getElementById("progressFifth").setAttribute("hidden", ""); 
	} else if (nombre_intents == 0) {
		document.getElementById("progressFirst").setAttribute("hidden", ""); 
		document.getElementById("progressSecond").setAttribute("hidden", ""); 
		document.getElementById("progressThird").setAttribute("hidden", ""); 
		document.getElementById("progressFourth").setAttribute("hidden", ""); 
		document.getElementById("progressFifth").setAttribute("hidden", ""); 
	}
}

document.getElementById("wfirst").setAttribute("onclick","comprovar()");
document.getElementById("wsecond").setAttribute("onclick","comprovar()");
document.getElementById("wthird").setAttribute("onclick","comprovar()");
document.getElementById("wfourth").setAttribute("onclick","comprovar()");
document.getElementById("wfifth").setAttribute("onclick","comprovar()");
document.getElementById("wsixth").setAttribute("onclick","comprovar()");


function comprovar(){
	var password=document.getElementById("password").value;
	var first=document.getElementById("wfirst").value;
	var second=document.getElementById("wsecond").value;
	var third=document.getElementById("wthird").value;
	var fourth=document.getElementById("wfourth").value;
	var fifth=document.getElementById("wfifth").value;
	var sixth=document.getElementById("wsixth").value;

	if (first!=password) {
		intents(1);
	}
	else if (second!=password) {
		intents(1);
	}
	else if (third!=password) {
		intents(1);
	}
	else if (fourth!=password) {
		intents(1);
	}
	else if (fifth!=password) {
		intents(1);
	}
	else{
		intents(1);
	}
}

