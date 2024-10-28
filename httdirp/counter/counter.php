<?php
// Counterdateiname
$datei="counter/counter.txt";
// Anzahl der f�hrenden Nullen
$stellen = 6;
// Festlegen der Bild-Dimensionen
$breite="30";
$hoehe="50";
error_reporting(0);
if(file_exists($datei)){
// Falls die Datei existiert, wird sie ausgelesen und
// der dort enthaltene Wert um Eins erh�ht.
$fp=fopen($datei,"r+");
$zahl=fgets($fp,$stellen);
$zahl++;
rewind($fp);
flock($fp,2);
fputs($fp,$zahl,$stellen);
flock($fp,3);
fclose($fp);
}else{
// Die Datei counter.txt existiert nicht, sie wird
// neu angelegt und mit dem Wert 1 gef�llt.
$fp=fopen($datei,"w");
$zahl="1";
fputs($fp,$zahl,$stellen);
fclose($fp);
}
// Diese Funktion sorgt f�r die Formatierung
// in diesem Fall f�r die f�hrenden Nullen
$zahl=sprintf("%0".$stellen."d",$zahl);
// Hier wird dann der Z�hler aus Bildern zusammengesetzt
for($i=0;$i<$stellen;$i++)
{
$bild_counter=$bild_counter . "<img src=counter/images/" . substr($zahl,$i,1) . ".gif align=absmiddle width=$breite height=$hoehe>";
}
error_reporting(1);
?>
<center>
<? echo "$bild_counter"; ?>
</center>
