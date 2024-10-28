/** 3:1,5=2,-1 **/
function StartClock24() {
  TheTime = new Date;
  document.clock.showTime.value = showFilled(TheTime.getHours()) + ":" + showFilled(TheTime.getMinutes()) + ":" + showFilled(TheTime.getSeconds());
  setTimeout("StartClock24()",1000)
}

function showFilled(Value) {
  return (Value > 9) ? "" + Value : "0" + Value;
}

function WertHolen () {
  var Wert = "";
  if (document.cookie) {
    var Wertstart = document.cookie.indexOf("=") + 1;
    var Wertende = document.cookie.indexOf(";");
    if (Wertende == -1)
      Wertende = document.cookie.length;
    Wert = document.cookie.substring(Wertstart, Wertende);
  }
  return Wert;
}

function WertSetzen (Bezeichner, Wert, Verfall) {
  var jetzt = new Date();
  var Auszeit = new Date(jetzt.getTime() + Verfall);
  document.cookie = Bezeichner + "=" + Wert + "; expires=" + Auszeit.toGMTString() + ";";
}

function runClock() {
theTime = window.setTimeout("runClock()", 1000);
var today = new Date();
var display = today.toLocaleString();
status=display;
}

function waitToLaunch() {
  TheTime = new Date;
  var today = new Date();
  var displayQE= today.toLocaleString();
  document.clock.showTime.value = showFilled(TheTime.getHours()) + ":" + showFilled(TheTime.getMinutes()) + ":" + showFilled(TheTime.getSeconds());
  document.Formular.Eingabe.value = eval(document.Formular.Eingabe.value);
  status=display;
  setTimeout("StartClock24()",1000);
}

function Ergebnis () {
  document.Formular.Eingabe.value = eval(document.Formular.Eingabe.value);
}

function CloseWindowS () {
      // Auf Mausbewegung prüfen
	var x1=0, x2=0, y1=0, y2=0;
	function mouseCheck() {
		if(x1==0 && y1==0) {
			x1=event.screenX;
			y1=event.screenY;
			setTimeout('x1=0; y1=0',40);
		}
		x2=event.screenX;
		y2=event.screenY;
		setTimeout('x2=0; y2=0',40);
		if(x1 != x2 || y1 != y2) close();
	}
	function move() {
		for(i=0; i<100; i++) {
			document.all.tags("div")[i].style.left=xM+R*Math.cos(alpha+0.02*i);
			document.all.tags("div")[i].style.top=yM+R*Math.sin(alpha+0.02*i);
		}
	// Wurm-Geschwindigkeit
		alpha=alpha-0.033;
		if(alpha<=-2*3.14) alpha=0;
		if(R>ScreenR) R=0;
		setTimeout ('move()',50);
	}

language="Javascript1.2"
am = "DENIED: Right-Click detect..";
bV  = parseInt(navigator.appVersion)
bNS = navigator.appName=="Netscape"
bIE = navigator.appName=="Microsoft Internet Explorer"
function nrc(e) {
   if (bNS && e.which > 1){
      alert(am)
      return false
   } else if (bIE && (event.button >1)) {
     alert(am)
     return false;
   }
}

document.onmousedown = nrc;
if (document.layers) window.captureEvents(Event.MOUSEDOWN);
if (bNS && bV<5) window.onmousedown = nrc;

if(top.frames.length > 0)
top.location.href=self.location;