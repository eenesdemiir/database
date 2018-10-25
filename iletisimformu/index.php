<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//RT" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>bulutüzer</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<style type="text/css">
/* Bu arayuz bulut uzer tarafindan 
   tasarlanip gelistirilmistir kaynak 
   gosterilmeden kullanilamaz
*/

html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, font, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td {
   margin: 0;
   padding: 0;
   border: 0;
   outline: 0;
   font-size: 100%;
   vertical-align: baseline;
   background: transparent;
}

ol, ul {
   list-style: none;
}

blockquote, q {
   quotes: none;
}

blockquote:before, blockquote:after,
q:before, q:after {
   content: '';
   content: none;
}
 
:focus {
   outline: 0;
}
 
ins {
   text-decoration: none;
}
del {
   text-decoration: line-through;
}
 
table {
   border-collapse: collapse;
   border-spacing: 0;
}

body{
	background:#f5f5eb;
}

a,li{
	text-decoration:none;
	list-style:none;
}

input{
	background:#43454c;
	background:-webkit-gradient(linear, 0% 0%, 0% 100%,from(#5b5b5b), to(#4f4f50));
	background:-webkit-linear-gradient(top, (#5b5b5b), (#4f4f50));
	background:linear-gradient(top, (#5b5b5b), (#4f4f50));
	background:-ms-linear-gradient(top, (#42454c), (#212125));
	background:-moz-linear-gradient(top, (#42454c), (#212125));
	background:-o-linear-gradient(top, (#42454c), (#212125));
	border-radius:10px;
	border-right:1px solid #A6A6A6;
	border-bottom:1px solid #A6A6A6;		
	border-left:1px solid #7E7E7E;
	border-top:1px solid #7E7E7E;	
	font-family:'aller_rg-webfont',Arial, sans serif;
	color:#ffffff;
	font-size:13px;
	font-weight:bolder;	
	text-shadow:1px 1px #000000;	
	margin:0 0 10px 0;
}

textarea{
	background:#43454c;
	background:-webkit-gradient(linear, 0% 0%, 0% 100%,from(#5b5b5b), to(#4f4f50));
	background:-webkit-linear-gradient(top, (#5b5b5b), (#4f4f50));
	background:linear-gradient(top, (#5b5b5b), (#4f4f50));
	background:-ms-linear-gradient(top, (#42454c), (#212125));
	background:-moz-linear-gradient(top, (#42454c), (#212125));
	background:-o-linear-gradient(top, (#42454c), (#212125));
	border-radius:10px;
	border-right:1px solid #A6A6A6;
	border-bottom:1px solid #A6A6A6;		
	border-left:1px solid #7E7E7E;
	border-top:1px solid #7E7E7E;	
	font-family:'aller_rg-webfont',Arial, sans serif;
	color:#ffffff;
	font-size:13px;
	font-weight:bolder;	
	text-shadow:1px 1px #000000;	
	margin:0 0 5px 0;
}

.input{
	background:#43454c;
	background:-webkit-gradient(linear, 0% 0%, 0% 100%,from(#43454c), to(#212125));
	background:-webkit-linear-gradient(top, (#43454c), (#212125));
	background:linear-gradient(top, (#42454c), (#212125));
	background:-ms-linear-gradient(top, (#42454c), (#212125));
	background:-moz-linear-gradient(top, (#42454c), (#212125));
	background:-o-linear-gradient(top, (#42454c), (#212125));	
	padding:25px;
	float:left;
	border-radius:15px;
	-webkit-border-radius:15px;
	-moz-border-radius:15px;		
	margin:50px 0px 0px 50px;
	font-family:'aller_rg-webfont',Arial, sans serif;
	color:#ffffff;
	font-size:18px;
	font-weight:bold;
	text-shadow:1px 1px #000000;
}
</style>
</head>
<body>
<div class="input">
<form action="gonder.php" method="POST">
<table>
<tr><td>Konu :</td><td><input type="text" name="konu"/></td></tr>
<tr><td>Ad Soyad : </td><td><input type="text" name="ad_soyad"/></td></tr>
<tr><td>Mail Adresiniz :</td><td><input type="text" name="mail"/></td></tr>
<tr><td>Mesaj :</td><td><textarea rows="10" cols="50" name="mesaj"></textarea></td></tr>
<tr><td></td><td><input type="submit" value="GÖNDER"/></td></tr>
</table>
</form>
</div>
</body>
</html>