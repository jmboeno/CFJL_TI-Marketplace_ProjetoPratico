function loadScripts(){
	var script = document.createElement("SCRIPT");
	script.setAttribute("src","js/newsletter.js");
	script.setAttribute("type","text/javascript");
	document.querySelector('body').appendChild(script);
}
loadScripts();