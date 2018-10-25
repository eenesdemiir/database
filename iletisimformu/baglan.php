<?php
$baglan = mysql_connect("localhost","root","123123123") or die ("SUNUCUYA BAĞLANILAMADI");
$db_baglanti = mysql_select_db("iletisim",$baglan) or die ("VERİTABANINA BAĞLANTI YAPILAMADI");
mysql_query("SET CHARSET utf8");
mysql_query("SET CHARSET SET utf8");
mysql_query("SET CHARSET 'utf8_general_ci'");
?>