<?php
include ("baglan.php");

$konu 	=(trim($_POST["konu"]));
$ad		=(trim($_POST["ad_soyad"]));
$mail	=(trim($_POST["mail"]));
$mesaj	=(trim($_POST["mesaj"]));
$tarih	=(trim(date("d.m.Y")));
$ip		=(trim($_SERVER['REMOTE_ADDR']));

if($konu=="" or $ad=="" or $mail=="" or $mesaj==""){
	echo "LÜTFEN BOŞ ALAN BIRAKMAYINIZ...";
}else{
	$ekle = mysql_query("INSERT INTO ilet(konu,mail_gonderen,gelen_mail,mesaj,tarih,ip)values('$konu','$ad','$mail','$mesaj','$tarih','$ip')");
	echo "MAİLİN GÖNDERİLMİŞTİR EN YAKIN ZAMANDA SİZE GERİ DÖNÜŞ YAPILACAKTIR...<br><a href='oku.php'>Gelen Mailler</a>";
}
?>