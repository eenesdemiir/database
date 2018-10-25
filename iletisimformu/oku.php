<?php
include ("baglan.php");

$baglan = mysql_query("SELECT * FROM ilet");
while($oku = mysql_fetch_array($baglan)){
	$id =$oku["id"];
	$konu = $oku["konu"];
	$gonderen_kisi =$oku["mail_gonderen"];
	$gelen_mail =$oku["gelen_mail"];
	$mesaj	=$oku["mesaj"]; 
	$tarih = $oku["tarih"];
	$ip = $oku["ip"];	
	
	echo "<b>Konu : </b><a href='mesaj.php?git=$id'>$konu</a> <br> <b>Gönderilen Tarih :</b> $tarih<br><br>";
}
?>