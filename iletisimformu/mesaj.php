<?php
include ("baglan.php");

$id = mysql_escape_string($_GET["git"]);
$cek =mysql_query("SELECT * FROM ilet WHERE id='$id'");
while($oku = mysql_fetch_array($cek)){
	$konu = $oku["konu"];
	$gonderen_kisi =$oku["mail_gonderen"];
	$gelen_mail =$oku["gelen_mail"];
	$mesaj	=$oku["mesaj"]; 
	$tarih = $oku["tarih"];
	$ip = $oku["ip"];	
	
	echo "<b>Gönderen Kişiye Ait Mesaj</b>
	<br><b>Konu : </b>$konu <br> <b>Gönderen Ad Soyad : </b>$gonderen_kisi <br> <b>Gönden Kişiye Ait Mail :</b> $gelen_mail <br><b>Gönderen Kişiye Ait Mesaj : </b>$mesaj <br>
	<b>Gönderilen Tarih : </b>$tarih <br><b> Gönderen İp :</b> $ip";
	
}
?>