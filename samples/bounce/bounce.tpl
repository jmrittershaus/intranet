
<!-- START OF SCRIPT -->
<!-- HOW TO INSTALL BALL DROP:

  1.  Copy code into the HEAD section of document
  2.  Put last coding into the BODY section of document  -->

<!-- STEP ONE: Add code into HEAD section of document  -->

<HEAD>

<SCRIPT LANGUAGE="JavaScript1.2">
<!-- Original:  Dragos Saracu (smardoi@yahoo.com) -->
<!-- Cross Browser by:  Bob Simpson (webmaster@maryjanebrown.net) -->
<!-- Contributor URL:  http://www.maryjanebrown.net/webmaster  -->


<!-- Begin
function BrowserCheck() {
var b = navigator.appName;
if (b == "Netscape") this.b = "NS";
else if (b == "Microsoft Internet Explorer") this.b = "IE";
else this.b = b;
this.v = parseInt(navigator.appVersion);
this.NS = (this.b == "NS" && this.v>=4);
this.NS4 = (this.b == "NS" && this.v == 4);
this.NS5 = (this.b == "NS" && this.v == 5);
this.IE = (this.b == "IE" && this.v>=4);
this.IE4 = (navigator.userAgent.indexOf('MSIE 4')>0);
this.IE5 = (navigator.userAgent.indexOf('MSIE 5')>0);
if (this.IE5 || this.NS5) this.VER5 = true;
if (this.IE4 || this.NS4) this.VER4 = true;
this.OLD = (! this.VER5 && ! this.VER4) ? true : false;
this.min = (this.NS||this.IE);
}
is = new BrowserCheck();
//  End -->
</script>
</HEAD>

<!-- STEP TWO: Add code into BODY section of document  -->

<BODY>

<center>
Click anywhere to start script<br>
<div id="staticBall" style="position:relative;visibility:visible">
<img src="imagch/ball.gif" height=30 width=30 alt="Static ball">
</div>
</center>
<div id="ball" style="visibility:hidden; position:absolute; left:100; top:10; height:34; width:34">
<img src="imagch/ball.gif" height=30 width=30 alt="Bouncing ball">
</div>

<script language="Javascript1.2">
<!-- Begin
iter = 0;
setId = 0;
down = true;
up = false;
bouncingBall = (is.VER5) ? document.getElementById("ball").style
: (is.NS) ? document.layers["ball"]
: document.all["ball"].style;
stillBall = (is.VER5) ? document.getElementById("staticBall").style
: (is.NS) ? document.layers["staticBall"] : document.all["staticBall"].style;
winH = (is.NS) ? window.innerHeight - 55 : document.body.offsetHeight - 55;
document.onmouseup = buttonUp;
if (is.NS4)
document.captureEvents(Event.MOUSEUP);
function buttonUp(e) {
if ( ((is.NS) ? e.which : event.button) != 1) return true;
if (setId != 0) clearInterval(setId);
bouncingBall.visibility="visible";
stillBall.visibility="hidden";
bouncingBall.left = (is.NS) ? e.pageX - 15 : event.offsetX - 15;
bouncingBall.top = (is.NS) ? e.pageY - 15 : event.offsetY - 15;
iter = 0;
setId = setInterval("generateGravity()", 20);
return true;
}
function generateGravity() {
if ((parseInt(bouncingBall.top)+iter < winH) && down) {
bouncingBall.top = parseInt(bouncingBall.top) + iter;
iter++;
return;
}
else {
if ((parseInt(bouncingBall.top)< winH) && down) {
bouncingBall.top = winH + 5;
return;
}
down = false;
up = true;
if (iter < 0 && parseInt(bouncingBall.top) > winH) {
clearInterval(setId);
bouncingBall.visibility = "hidden";
stillBall.visibility="visible";
setId = 0;
}
if (parseInt(bouncingBall.top) > 0 && up && iter >= 0) {
bouncingBall.top = parseInt(bouncingBall.top) - iter;
iter--;
if (iter%3 == 0) iter--;
return;
}
down = true;
up = false;
   }
}
// End -->
</script>
<!-- END OF SCRIPT -->

