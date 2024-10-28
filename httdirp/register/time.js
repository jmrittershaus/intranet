<SCRIPT LANGUAGE="JavaScript">
function StartClock24() {
  TheTime = new Date;
  document.clock.showTime.value = showFilled(TheTime.getHours()) + ":" + showFilled(TheTime.getMinutes()) + ":" + showFilled(TheTime.getSeconds());
  setTimeout("StartClock24()",1000)
}
function showFilled(Value) {
  return (Value > 9) ? "" + Value : "0" + Value;
}
</script>
<script language="Javascript1.2">
am = "This function is disabled!";
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
</script>