<html>
<head>
<title>Menu</title>
<style type="text/css">
<!--
.style1 {font-size: 24px}
-->

table, tr, td {border:1px solid green;}
div{
border:1px sloid red;
margin:10px;
padding:10px;
border-radius:15px;
background-color:navy;
width:750px;
}
</style>
</head>

<table width="1334" border="0">
<tr>
<td colspan="3" style="background-color: #93C;">
<h1 align="center">Online Restaurant Service </h1></td>
</tr>
<tr valign="top">
<td width="200" height="592" style="background-color: #C99;width:10px;textalign: top;">
<p class="style1"><a href="/SD2/about.php">ABOUT</a>
    <br></br>
    <a href="/SD2/menu.php">MENU</a>
    <br></br>
    <a href="/SD2/service.php">SERVICE</a>   
	<br></br>
    <a href="/SD2/contact.php">CONTACT</a></p></td>
<td width="968" style="backgroundcolor:#EEEEEE;height:200px;width:400px;textalign: top;">

<body bgcolor="#000000" background="h copy.jpg" text="#000000" link="#FFFFFF">
<?php
		$hostName="localhost";
		$dbUsername="root";
		$dbPassword="sakiba";
		$dbName="or";
		$con=mysql_connect($hostName,$dbUsername,$dbPassword) ;
		mysql_select_db($dbName,$con);
if($con) {echo "Connected";}	

	?>

<div>
<form action="chk.php" method="post">
<table border="0" cellpadding="0" cellspacing="3" style="border-collapse: collapse" width="97%"  bordercolor="#A89065">
           <tbody><tr>
             <td width="100%" style="color: #FFFFFF; font-size: 15px; font-family: georgea, times new roman, arial, verdana">
             <p style="margin-top: 0; margin-bottom: 0; font-size: 30px;" align="justify">
             <i>
             <font color="#FFFFAA"><b>Bangla Cuisine</b></font> </i> </p>
             <p style="margin-top: 0; margin-bottom: 0" align="justify">&nbsp;
             </p>
             <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="100%" id="AutoNumber13">
               <tbody><tr>
                 <td width="7%" valign="top">&nbsp;</td>
                 <td width="70%"><b><font color="#CCFFCC" size="5">Appetizer</font></b></td>
                 <td width="6%">&nbsp;</td>
                 <td width="17%">&nbsp;</td>
				 <td width="6%">&nbsp;</td>
               </tr>
               <tr>
                 <td width="7%" valign="top" align="center" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <p style="margin-top: 0; margin-bottom: 0">
                 <font size="2" color="#FFFFFF" face="Times New Roman"> <input type="checkbox" name="chk[]" value="385.00"> 1</font></p></td>
                 <td width="70%"><b><font color="#FFFFFF">MIXED PAKORA (8PCS ) CHI.,VEG., PRAWN &amp; FISH</font></b></td>
                 <td width="6%" valign="top" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" valign="top" align="right" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF" face="Times New Roman" size="3"> 385.00 </font>  </td>
               </tr>
               <tr>
                 <td width="7%" valign="top" align="center" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <p style="margin-top: 0; margin-bottom: 0">
                 <font size="2" color="#FFFFFF" face="Times New Roman"><input type="checkbox" name="chk[]" value="180.00">2</font></p></td>
                 <td width="70%">
                 <b><font color="#FFFFFF">SPRING ROLLS (6Pcs.)</font></b></td>
                 <td width="6%" valign="top" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" valign="top" align="right" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF" face="Times New Roman" size="3"> 180.00</font> </td>
				 </tr>
               <tr>
                 <td width="7%" valign="top" align="center" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <p style="margin-top: 0; margin-bottom: 0">
                 <font size="2" color="#FFFFFF" face="Times New Roman"><input type="checkbox" name="chk[]" value="165.00">3</font></p></td>
                 <td width="70%"><b><font color="#FFFFFF">SABJEE PAKORA (6Pcs)</font></b></td>
                 <td width="6%" valign="top" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" valign="top" align="right" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF" face="Times New Roman" size="3">165.00</font></td>

				 </tr>
               <tr>
                 <td width="7%" valign="top" align="center" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <p style="margin-top: 0; margin-bottom: 0">
                 <font size="2" color="#FFFFFF" face="Times New Roman"><input type="checkbox" name="chk[]" value="315.00">4</font></p></td>
                 <td width="70%"><b><font color="#FFFFFF">FISH FINGER (8Pcs)</font></b></td>
                 <td width="6%" valign="top" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" valign="top" align="right" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF" face="Times New Roman" size="3">315.00</font></td>

               </tr>
               <tr>
                 <td width="7%" valign="top" align="center" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <p style="margin-top: 0; margin-bottom: 0">
                 <font size="2" color="#FFFFFF" face="Times New Roman"><input type="checkbox" name="chk[]" value="365.00">5</font></p></td>
                 <td width="70%"><b><font color="#FFFFFF">SMOKED HILSA (On Order)</font></b></td>
                 <td width="6%" valign="top" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" valign="top" align="right" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF" face="Times New Roman" size="3">365.00</font></td>

               </tr>
               <tr>
                 <td width="7%" valign="top" align="center" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <p style="margin-top: 0; margin-bottom: 0">
                 <font size="2" color="#FFFFFF" face="Times New Roman"><input type="checkbox" name="chk[]" value="330.00">6</font></p></td>
                 <td width="70%"><b><font color="#FFFFFF">CHICKEN PAKORA (8Pcs)</font></b></td>
                 <td width="6%" valign="top" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" valign="top" align="right" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF" face="Times New Roman" size="3">330.00</font></td>

               </tr>
               <tr>
                 <td width="7%" valign="top" align="center" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <p style="margin-top: 0; margin-bottom: 0">
                 <font size="2" color="#FFFFFF" face="Times New Roman"><input type="checkbox" name="chk[]" value="105.00">7</font></p></td>
                 <td width="70%"><b><font color="#FFFFFF">PLAIN PAPAD (4Pcs)</font></b></td>
                 <td width="6%" valign="top" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" valign="top" align="right" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF" face="Times New Roman" size="3">105.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top" align="center">
                 <p style="margin-top: 0; margin-bottom: 0">
                 <font size="2" color="#FFFFFF" face="Times New Roman"><input type="checkbox" name="chk[]" value="125.00">8</font></p></td>
                 <td width="70%"><b><font color="#FFFFFF">MASALA PAPAD (4Pcs)</font></b></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top" align="right">
                 <font color="#FFFFFF" face="Times New Roman" size="3">125.00</font></td>

               </tr>
               <tr>
                 <td width="7%" valign="top" align="center" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <p style="margin-top: 0; margin-bottom: 0">
                 <font size="2" color="#FFFFFF" face="Times New Roman"><input type="checkbox" name="chk[]" value="295.00">9</font></p></td>
                 <td width="70%"><b><font color="#FFFFFF">PRAWN PAKORA (4Pcs)</font></b></td>
                 <p style="margin-top: 0; margin-bottom: 0"></p></td>
                 <td width="6%" valign="top" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" valign="top" align="right" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF" face="Times New Roman" size="3">295.00</font></td>

               </tr>
               <tr>
                 <td width="7%" valign="top">&nbsp;</td>
                 <td width="70%"><u><b><font color="#CCFFCC" size="4">Rice/ Polao</font></b></u></td>
                 <td width="6%">&nbsp;</td>
                 <td width="17%">&nbsp;</td>
               </tr>
               <tr>
                 <td width="7%" valign="top" align="center" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <p style="margin-top: 0; margin-bottom: 0">
                 <font size="2" color="#FFFFFF" face="Times New Roman"><input type="checkbox" name="chk[]" value="365.00">10</font></p></td>
                 <td width="70%"><b><font color="#FFFFFF">SPECIAL PULLAO</font></b></td>
                 <td width="6%" valign="top" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" valign="top" align="right" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF" face="Times New Roman" size="3">365.00</font></td>

               </tr>
               <tr>
                 <td width="7%" valign="top" align="center" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <p style="margin-top: 0; margin-bottom: 0">
                 <font size="2" color="#FFFFFF" face="Times New Roman"><input type="checkbox" name="chk[]" value="125.00">11</font></p></td>
                 <td width="70%"><b><font color="#FFFFFF">SADA BHAT (KATARY) (One Platter) (2Per.)</font></b></td>
                 <td width="6%" valign="top" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" valign="top" align="right" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF" face="Times New Roman" size="3">125.00</font></td>

               </tr>
               <tr>
                 <td width="7%" valign="top" align="center" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <p style="margin-top: 0; margin-bottom: 0">
                 <font size="2" color="#FFFFFF" face="Times New Roman"><input type="checkbox" name="chk[]" value="240.00">12</font></p></td>
                 <td width="70%"><b><font color="#FFFFFF">PLAIN POLAO (KALLI ZEERA) (One Platter) (2Per.)</font></b></td>
                 <td width="6%" valign="top" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" valign="top" align="right" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF" face="Times New Roman" size="3">240.00</font></td>

               </tr>
               <tr>
                 <td width="7%" valign="top" align="center" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <p style="margin-top: 0; margin-bottom: 0">
                 <font size="2" color="#FFFFFF" face="Times New Roman"><input type="checkbox" name="chk[]" value="395.00">13</font></p></td>
                 <td width="70%"><b><font color="#FFFFFF">BHUNA KHICHURY (One Platter) (2Per.)</font></b></td>
                 <td width="6%" valign="top" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" valign="top" align="right" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF" face="Times New Roman" size="3">395.00</font></td>

               </tr>
               <tr>
                 <td width="7%" valign="top" align="center" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <p style="margin-top: 0; margin-bottom: 0">
                 <font size="2" color="#FFFFFF" face="Times New Roman"><input type="checkbox" name="chk[]" value="370.00">14</font></p></td>
                 <td width="70%"><b><font color="#FFFFFF">MURGH POLAO (One Platter) (2Per.)</font></b></td>
                 <td width="6%" valign="top" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" valign="top" align="right" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF" face="Times New Roman" size="3">370.00</font></td>

               </tr>
               <tr>
                 <td width="7%" valign="top" align="center" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <p style="margin-top: 0; margin-bottom: 0">
                 <font size="2" color="#FFFFFF" face="Times New Roman"><input type="checkbox" name="chk[]" value="425.00">15</font></p></td>
                 <td width="70%"><b><font color="#FFFFFF">KASHMIRI POLAO (On Order) (One Platter) (2Per.)</font></b></td>
                 <td width="6%" valign="top" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" valign="top" align="right" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF" face="Times New Roman" size="3">425.00</font></td>

               </tr>
               <tr>
                 <td width="7%" valign="top" align="center" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <p style="margin-top: 0; margin-bottom: 0">
                 <font size="2" color="#FFFFFF" face="Times New Roman"><input type="checkbox" name="chk[]" value="710.00">16</font></p></td>
                 <td width="70%"><b><font color="#FFFFFF">ILISH PULLAO (One Platter) (2Per.)</font></b></td>
                 <td width="6%" valign="top" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" valign="top" align="right" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF" face="Times New Roman" size="3">710.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top" align="center">
                 <p style="margin-top: 0; margin-bottom: 0">
                 <font size="2" color="#FFFFFF" face="Times New Roman"><input type="checkbox" name="chk[]" value="405.00">17</font></p></td>
                 <td width="70%"><b><font color="#FFFFFF">MUTTON TEHARI (On Order) (One Platter)(2Per.)</font></b></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top" align="right">
                 <font color="#FFFFFF" face="Times New Roman" size="3">405.00</font></td>

               </tr>
               <tr>
                 <td width="7%" valign="top" align="center" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <p style="margin-top: 0; margin-bottom: 0">
                 <font size="2" color="#FFFFFF" face="Times New Roman"><input type="checkbox" name="chk[]" value="425.00">18</font></p></td>
                 <td width="70%"><b><font color="#FFFFFF">MUGH DAL BIRYANI (One Platter) (2Per.)</font></b></td>
                 <td width="6%" valign="top" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" valign="top" align="right" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF" face="Times New Roman" size="3">425.00</font></td>

               </tr>
               <tr>
                 <td width="7%" valign="top" align="center" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <p style="margin-top: 0; margin-bottom: 0">
                 <font size="2" color="#FFFFFF" face="Times New Roman"><input type="checkbox" name="chk[]" value="425.00">19</font></p></td>
                 <td width="70%"><b><font color="#FFFFFF">KACHCHI BIRYANI (On Order) (One Platter) (2Per.)</font></b></td>
                 <td width="6%" valign="top" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" valign="top" align="right" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF" face="Times New Roman" size="3">425.00</font></td>

               </tr>
               <tr>
                 <td width="7%" valign="top" align="center" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <p style="margin-top: 0; margin-bottom: 0">
                 <font size="2" color="#FFFFFF" face="Times New Roman"><input type="checkbox" name="chk[]" value="460.00">20</font></p></td>
                 <td width="70%"><b><font color="#FFFFFF">HAIDRABADI BIRIAANY (On Order) (One Platter) (2Per)</font></b></td>
                 <td width="6%" valign="top" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" valign="top" align="right" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF" face="Times New Roman" size="3">460.00</font></td>

               </tr>
               <tr>
                 <td width="7%" valign="top">&nbsp;</td>
                 <td width="70%"><u><b><font color="#CCFFCC" size="4">Bharta</font></b></u></td>
                 <td width="6%">&nbsp;</td>
                 <td width="17%">&nbsp;</td>
               </tr>
               <tr>
                 <td width="7%" valign="top" align="center" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <p style="margin-top: 0; margin-bottom: 0">
                 <font size="2" color="#FFFFFF" face="Times New Roman"><input type="checkbox" name="chk[]" value="195.00">21</font></p></td>
                 <td width="70%"><b><font color="#FFFFFF">CHINGRI BHARTA (Prawn Bharta) (2Per.)</font></b></td>
                 <td width="6%" valign="top" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" valign="top" align="right" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF" face="Times New Roman" size="3">195.00</font></td>

               </tr>
               <tr>
                 <td width="7%" valign="top" align="center" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <p style="margin-top: 0; margin-bottom: 0">
                 <font size="2" color="#FFFFFF" face="Times New Roman"><input type="checkbox" name="chk[]" value="190.00">22</font></p></td>
                 <td width="70%"><b><font color="#FFFFFF">ILISH BHARTA (Hilsha Bharta) (2Per.)</font></b></td>
                 <td width="6%" valign="top" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" valign="top" align="right" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF" face="Times New Roman" size="3">190.00</font></td>

               </tr>
               <tr>
                 <td width="7%" valign="top" align="center" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <p style="margin-top: 0; margin-bottom: 0">
                 <font size="2" color="#FFFFFF" face="Times New Roman"><input type="checkbox" name="chk[]" value="155.00">23</font></p></td>
                 <td width="70%"><b><font color="#FFFFFF">TAKI BHARTA (2Per.)</font></b></td>
                 <td width="6%" valign="top" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" valign="top" align="right" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF" face="Times New Roman" size="3">155.00</font></td>

               </tr>
               <tr>
                 <td width="7%" valign="top" align="center" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <p style="margin-top: 0; margin-bottom: 0">
                 <font size="2" color="#FFFFFF" face="Times New Roman"><input type="checkbox" name="chk[]" value="95.00">24</font></p></td>
                 <td width="70%"><b><font color="#FFFFFF">BEGUN BHARTA (2Per.)</font></b></td>
                 <td width="6%" valign="top" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" valign="top" align="right" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font face="Times New Roman" size="3" color="#FFFFFF">95.00</font></td>

               </tr>
               <tr>
                 <td width="7%" valign="top" align="center" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <p style="margin-top: 0; margin-bottom: 0">
                 <font size="2" color="#FFFFFF" face="Times New Roman"><input type="checkbox" name="chk[]" value="90.00">25</font></p></td>
                 <td width="70%"><b><font color="#FFFFFF">ALOO BHARTA (Potato Bharta) (2Per.)</font></b></td>
                 <td width="6%" valign="top" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" valign="top" align="right" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font face="Times New Roman" size="3" color="#FFFFFF">90.00</font></td>

               </tr>
               <tr>
                 <td width="7%" valign="top" align="center" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <p style="margin-top: 0; margin-bottom: 0">
                 <font size="2" color="#FFFFFF" face="Times New Roman"><input type="checkbox" name="chk[]" value="100.00">26</font></p></td>
                 <td width="70%"><b><font color="#FFFFFF">SHEEM BHARTA (Seasonal) (Bean Bharta) 
                 (2Per.)</font></b></td>
                 <td width="6%" valign="top" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" valign="top" align="right" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font face="Times New Roman" size="3" color="#FFFFFF">100.00</font></td>

               </tr>
               <tr>
                 <td width="7%" valign="top" align="center" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <p style="margin-top: 0; margin-bottom: 0">
                 <font size="2" color="#FFFFFF" face="Times New Roman"><input type="checkbox" name="chk[]" value="110.00">27</font></p></td>
                 <td width="70%"><b><font color="#FFFFFF">DAL BHARTA (Pulse Bharta) (2Per.)</font></b></td>
                 <td width="6%" valign="top" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" valign="top" align="right" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font face="Times New Roman" size="3" color="#FFFFFF">110.00</font></td>

               </tr>
               <tr>
                 <td width="7%" valign="top" align="center" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <p style="margin-top: 0; margin-bottom: 0">
                 <font size="2" color="#FFFFFF" face="Times New Roman"><input type="checkbox" name="chk[]" value="105.00">28</font></p></td>
                 <td width="70%"><b><font color="#FFFFFF">KALA BHARTA (Banana Bharta) (2Per.)</font></b></td>
                 <p style="margin-top: 0; margin-bottom: 0"></p></td>
                 <td width="6%" valign="top" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" valign="top" align="right" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font face="Times New Roman" size="3" color="#FFFFFF">105.00</font></td>

               </tr>
               <tr>
                 <td width="7%" valign="top">&nbsp;</td>
                 <td width="70%"><u><b><font color="#CCFFCC" size="4">Vegetable</font></b></u></td>
                 <td width="6%">&nbsp;</td>
                 <td width="17%">&nbsp;</td>
               </tr>
               <tr>
                 <td width="7%" valign="top" align="center" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <p style="margin-top: 0; margin-bottom: 0">
                 <font size="2" color="#FFFFFF" face="Times New Roman"><input type="checkbox" name="chk[]" value="190.00">29</font></p></td>
                 <td width="70%"><b>
                 <font color="#FFFFFF">MESHANO SABJEE (Mixed Veg.) (2Per.)</font></b></td>
                 <td width="6%" valign="top" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" valign="top" align="right" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font face="Times New Roman" size="3" color="#FFFFFF">190.00</font></td>

               </tr>
               <tr>
                 <td width="7%" valign="top" align="center" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <p style="margin-top: 0; margin-bottom: 0">
                 <font size="2" color="#FFFFFF" face="Times New Roman"><input type="checkbox" name="chk[]" value="195.00">30</font></p></td>
                 <td width="70%"><b><font color="#FFFFFF">CHINGRI KARALLA (Prawn with Kar.)(2Per.)</font></b></td>
                 <td width="6%" valign="top" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" valign="top" align="right" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font face="Times New Roman" size="3" color="#FFFFFF">195.00</font></td>

               </tr>
               <tr>
                 <td width="7%" valign="top" align="center" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <p style="margin-top: 0; margin-bottom: 0">
                 <font size="2" color="#FFFFFF" face="Times New Roman"><input type="checkbox" name="chk[]" value="95.00">31</font></p></td>
                 <td width="70%"><b>
                 <font color="#FFFFFF">BEGUN BHAZA- 4 Pcs., Begun Fry (2 Per.)</font></b></td>
                 <td width="6%" valign="top" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" valign="top" align="right" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font face="Times New Roman" size="3" color="#FFFFFF">95.00</font></td>

               </tr>
               <tr>
                 <td width="7%" valign="top" align="center" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <p style="margin-top: 0; margin-bottom: 0">
                 <font size="2" color="#FFFFFF" face="Times New Roman"><input type="checkbox" name="chk[]" value="115.00">32</font></p></td>
                 <td width="70%"><b>
                 <font color="#FFFFFF">GHONO DAL (2 Per.)</font></b></td>
                 <td width="6%" valign="top" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" valign="top" align="right" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font face="Times New Roman" size="3" color="#FFFFFF">115.00</font></td>

               </tr>
               <tr>
                 <td width="7%" valign="top" align="center" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <p style="margin-top: 0; margin-bottom: 0">
                 <font size="2" color="#FFFFFF" face="Times New Roman"><input type="checkbox" name="chk[]" value="170.00">33</font></p></td>
                 <td width="70%"><b><font color="#FFFFFF">LAL SHAK (RED AMARANTH) (2Per.)</font></b></td>
                 <td width="6%" valign="top" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" valign="top" align="right" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font face="Times New Roman" size="3" color="#FFFFFF">170.00</font></td>

               </tr>
               <tr>
                 <td width="7%" valign="top" align="center" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <p style="margin-top: 0; margin-bottom: 0">
                 <font size="2" color="#FFFFFF" face="Times New Roman"><input type="checkbox" name="chk[]" value="170.00">34</font></p></td>
                 <td width="70%"><b>
                 <font color="#FFFFFF">PALANG SHAK (SPINACH) (2Per)</font></b></td>
                 <td width="6%" valign="top" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" valign="top" align="right" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font face="Times New Roman" size="3" color="#FFFFFF">170.00</font></td>

               </tr>
               <tr>
                 <td width="7%" valign="top" align="center" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <p style="margin-top: 0; margin-bottom: 0">
                 <font size="2" color="#FFFFFF" face="Times New Roman"><input type="checkbox" name="chk[]" value="170.00">35</font></p></td>
                 <td width="70%"><b>
                 <font color="#FFFFFF">PUI SHAK (GREEN AMARANTH) (2Per)</font></b></td>
                 <td width="6%" valign="top" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" valign="top" align="right" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font face="Times New Roman" size="3" color="#FFFFFF">170.00</font></td>

               </tr>
               <tr>
                 <td width="7%" valign="top" align="center" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <p style="margin-top: 0; margin-bottom: 0">
                 <font size="2" color="#FFFFFF" face="Times New Roman"><input type="checkbox" name="chk[]" value="280.00">36</font></p></td>
                 <td width="70%"><b>
                 <font color="#FFFFFF">BOTTLE GOURD (LAO) WITH PRAWN (2Per)</font></b></td>
                 <p style="margin-top: 0; margin-bottom: 0"></p></td>
                 <td width="6%" valign="top" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" valign="top" align="right" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font face="Times New Roman" size="3" color="#FFFFFF">280.00</font></td>

               </tr>
               <tr>
                 <td width="7%" valign="top">&nbsp;</td>
                 <td width="70%"><u><b><font color="#CCFFCC" size="4">Fish Fry</font></b></u></td>
                 <td width="6%">&nbsp;</td>
                 <td width="17%">&nbsp;</td>
               </tr>
               <tr>
                 <td width="7%" valign="top" align="center" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <p style="margin-top: 0; margin-bottom: 0">
                 <font size="2" color="#FFFFFF" face="Times New Roman"><input type="checkbox" name="chk[]" value="280.00">37</font></p></td>
                 <td width="70%"><b>
                 <font color="#FFFFFF">CHITAL KOFTA (Chital Fish Kofta)</font></b></td>
                 <td width="6%" valign="top" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" valign="top" align="right" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font face="Times New Roman" size="3" color="#FFFFFF">280.00</font></td>

               </tr>
               <tr>
                 <td width="7%" valign="top" align="center" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <p style="margin-top: 0; margin-bottom: 0">
                 <font size="2" color="#FFFFFF" face="Times New Roman"><input type="checkbox" name="chk[]" value="520.00">38</font></p></td>
                 <td width="70%"><b>
                 <font color="#FFFFFF">RUPCHANDA BHAZA (Pomfret Fry )</font></b></td>
                 <td width="6%" valign="top" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" valign="top" align="right" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font face="Times New Roman" size="3" color="#FFFFFF">520.00</font></td>

               </tr>
               <tr>
                 <td width="7%" valign="top" align="center" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <p style="margin-top: 0; margin-bottom: 0">
                 <font size="2" color="#FFFFFF" face="Times New Roman"><input type="checkbox" name="chk[]" value="285.00">39</font></p></td>
                 <td width="70%"><b>
                 <font color="#FFFFFF">RUI FISH BHAZA (Rui Fish Fry)</font></b></td>
                 <td width="6%" valign="top" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" valign="top" align="right" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font face="Times New Roman" size="3" color="#FFFFFF">285.00</font></td>

               </tr>
               <tr>
                 <td width="7%" valign="top" align="center" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <p style="margin-top: 0; margin-bottom: 0">
                 <font size="2" color="#FFFFFF" face="Times New Roman"><input type="checkbox" name="chk[]" value="370.00">40</font></p></td>
                 <td width="70%"><b>
                 <font color="#FFFFFF">ILISH MACH BHAZA</font></b></td>
                 <td width="6%" valign="top" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" valign="top" align="right" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font face="Times New Roman" size="3" color="#FFFFFF">370.00</font></td>

               </tr>
               <tr>
                 <td width="7%" valign="top" align="center" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <p style="margin-top: 0; margin-bottom: 0">
                 <font size="2" color="#FFFFFF" face="Times New Roman"><input type="checkbox" name="chk[]" value="525.00">41</font></p></td>
                 <td width="70%"><b>
                 <font color="#FFFFFF">MEDIUM PRAWN FRIED (6Pcs.)</font></b></td>
                 <td width="6%" valign="top" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" valign="top" align="right" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font face="Times New Roman" size="3" color="#FFFFFF">525.00</font></td>

               </tr>
               <tr>
                 <td width="7%" valign="top" align="center" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <p style="margin-top: 0; margin-bottom: 0">
                 <font size="2" color="#FFFFFF" face="Times New Roman"><input type="checkbox" name="chk[]" value="590.00">42</font></p></td>
                 <td width="70%"><b><font color="#FFFFFF">TTIGER PRAWN FRIED (4Pcs.)</font></b></td>
                  <td width="6%" valign="top" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" valign="top" align="right" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font face="Times New Roman" size="3" color="#FFFFFF">590.00</font></td>

               </tr>
               <tr>
                 <td width="7%" valign="top" align="center" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <p style="margin-top: 0; margin-bottom: 0">
                 <font size="2" color="#FFFFFF" face="Times New Roman"><input type="checkbox" name="chk[]" value="290.00">43</font></p></td>
                 <td width="70%"><b><font color="#FFFFFF">BATASHI FISH CHARCHARI (2Per)</font></b></td>
                 <p style="margin-top: 0; margin-bottom: 0"></p></td>
                 <td width="6%" valign="top" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" valign="top" align="right" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font face="Times New Roman" size="3" color="#FFFFFF">290.00</font></td>

               </tr>
               <tr>
                 <td width="7%" valign="top">&nbsp;</td>
                 <td width="70%"><u><b><font color="#CCFFCC" size="4">Fish Curry</font></b></u></td>
                 <td width="6%">&nbsp;</td>
                 <td width="17%">&nbsp;</td>
               </tr>
               <tr>
                 <td width="7%" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="305.00">44</font></td>
                 <td width="70%"><b><font color="#FFFFFF">RUI MACH DO-PIAZA (Rui Fish Curry)</font></b></td>
                 <td width="6%"><font color="#FFFFFF">TK.</font></td>
                 <td width="17%" align="right">
                 <font face="Times New Roman" size="3" color="#FFFFFF">305.00</font></td>

               </tr>
               <tr>
                 <td width="7%" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="305.00">45</font></td>
                 <td width="70%"><b><font color="#FFFFFF">RUI MACH BHUNA (Rui Fish Bhuna)</font></b></td>
                 <td width="6%"><font color="#FFFFFF">TK.</font></td>
                 <td width="17%" align="right">
                 <font face="Times New Roman" size="3" color="#FFFFFF">305.00</font></td>

               </tr>
               <tr>
                 <td width="7%" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="460.00">46</font></td>
                 <td width="70%"><b><font color="#FFFFFF">KOI MACH DO PIAZA(Seasonal)</font></b></td>
                 <td width="6%"><font color="#FFFFFF">TK.</font></td>
                 <td width="17%" align="right">
                 <font face="Times New Roman" size="3" color="#FFFFFF">460.00</font></td>

               </tr>
               <tr>
                 <td width="7%" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="390.00">47</font></td>
                 <td width="70%"><b><font color="#FFFFFF">PABDA MACH DO PIAZA (Pabda Fish Do Piaza)</font></b></td>
                 <td width="6%"><font color="#FFFFFF">TK.</font></td>
                 <td width="17%" align="right">
                 <font face="Times New Roman" size="3" color="#FFFFFF">390.00</font></td>

               </tr>
               <tr>
                 <td width="7%" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="560.00">48</font></td>
                 <td width="70%"><b><font color="#FFFFFF">RUPCHANDA DO PIAZA (Pomfret Do Piaza)</font></b></td>
                 <td width="6%"><font color="#FFFFFF">TK.</font></td>
                 <td width="17%" align="right">
                 <font face="Times New Roman" size="3" color="#FFFFFF">560.00</font></td>

               </tr>
               <tr>
                 <td width="7%" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="465.00">49</font></td>
                 <td width="70%"><b><font color="#FFFFFF">CHITAL PETY DO PIAZA(Seasonal)</font></b></td>
                 <td width="6%"><font color="#FFFFFF">TK.</font></td>
                 <td width="17%" align="right">
                 <font face="Times New Roman" size="3" color="#FFFFFF">465.00</font></td>

               </tr>
               <tr>
                 <td width="7%" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="365.00">50</font></td>
                 <td width="70%"><b><font color="#FFFFFF">BOAL MACH BHUNA (On Order)</font></b></td>
                 <td width="6%"><font color="#FFFFFF">TK.</font></td>
                 <td width="17%" align="right">
                 <font face="Times New Roman" size="3" color="#FFFFFF">365.00</font></td>

               </tr>
               <tr>
                 <td width="7%" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="395.00">51</font></td>
                 <td width="70%"><b><font color="#FFFFFF">PANGASH MACH BHUNA(River) (On Order)</font></b></td>
                 <td width="6%"><font color="#FFFFFF">TK.</font></td>
                 <td width="17%" align="right">
                 <font face="Times New Roman" size="3" color="#FFFFFF">395.00</font></td>

               </tr>
               <tr>
                 <td width="7%" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="625.00">52</font></td>
                 <td width="70%"><b><font color="#FFFFFF">RITA FISH BHUNA</font></b></td>
                 <td width="6%"><font color="#FFFFFF">TK.</font></td>
                 <td width="17%" align="right">
                 <font face="Times New Roman" size="3" color="#FFFFFF">625.00</font></td>

               </tr>
               <tr>
                 <td width="7%" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="355.00">53</font></td>
                 <td width="70%"><b><font color="#FFFFFF">SHOLE FISH BHUNA</font></b></td>
                 <td width="6%"><font color="#FFFFFF">TK.</font></td>
                 <td width="17%" align="right">
                 <font face="Times New Roman" size="3" color="#FFFFFF">355.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="345.00">54</font></td>
                <td width="70%"><b>
                 <font color="#FFFFFF">RUI KALIA</font></b></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font face="Times New Roman" size="3" color="#FFFFFF">345.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="435.00">55</font></td>
                 <td width="70%"><b>
                 <font color="#FFFFFF">STICKY PANGASH (On Order)</font></b></td>
                 <p style="margin-top: 0; margin-bottom: 0"></p></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font face="Times New Roman" size="3" color="#FFFFFF">435.00</font></td>

               </tr>
               <tr>
                 <td width="7%" valign="top">&nbsp;</td>
                 <td width="70%"><u><b><font color="#CCFFCC" size="4">Chingri-Ilish</font></b></u></td>
                 <td width="6%">&nbsp;</td>
                 <td width="17%">&nbsp;</td>
               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="1310.00">56</font></td>
                 <td width="70%">
                 <b><font color="#FFFFFF">GOLDA CHINGRI (LOBSTER) DO PIAZA 
                 (300gm)</font></b></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font face="Times New Roman" size="3" color="#FFFFFF">1310.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="490.00">57</font></td>
                 <td width="70%">
                 <b><font color="#FFFFFF">CHINGRI DO PIAZA(M) (Prawn Do Piaza) 
                 (4Pcs.)</font></b></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font face="Times New Roman" size="3" color="#FFFFFF">490.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="490.00">58</font></td>
                 <td width="70%">
                 <b><font color="#FFFFFF">CHINGRI BHUNA (Prawn Bhuna) (4Pcs.)</font></b></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font face="Times New Roman" size="3" color="#FFFFFF">490.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="395.00">59</font></td>
                 <td width="70%">
                 <b><font color="#FFFFFF">SHORSHA ILISH (Mustard Hilsha)</font></b></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font face="Times New Roman" size="3" color="#FFFFFF">395.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="385.00">60</font></td>
                 <td width="70%">
                 <b><font color="#FFFFFF">ILISH DO PIAZA (Hilsha Do Piaza)</font></b></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font face="Times New Roman" size="3" color="#FFFFFF">385.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="2775.00">61</font></td>
                 <td width="70%">
                 <b><font color="#FFFFFF">ASTAW ILISH (BAKED HILSA) (On Order) 
                 (10 Per.)</font></b></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font face="Times New Roman" size="3" color="#FFFFFF">2775.00</font></td>

               </tr>
               <tr valign="top">
                 <td width="7%" height="27" valign="top" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="490.00">62</font></td>
                 <td width="70%">
                 <b><font color="#FFFFFF">CHINGRI ACHARI (4Pcs)</font></b></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font face="Times New Roman" size="3" color="#FFFFFF">490.00</font></td>

               </tr>
               <tr>
                 <td width="7%" valign="top">&nbsp;</td>
                 <td width="70%"><u><b><font color="#CCFFCC" size="4">Chittagong Special</font></b></u></td>
                 <td width="6%">&nbsp;</td>
                 <td width="17%">&nbsp;</td>
               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="385.00">63</font></td>
                 <td width="70%">
                 <b><font color="#FFFFFF">BLACK BEEF BHUNA (2 Per.)</font></b></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font face="Times New Roman" size="3" color="#FFFFFF">385</font><font face="Times New Roman" size="3" color="#FFFFFF">.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="385.00">64</font></td>
                 <td width="70%">
                 <b><font color="#FFFFFF">CHITTAGONG MEJBAN GHOST – Beef (2 Per.)</font></b></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right"><font face="Times New Roman" size="3" color="#FFFFFF">385</font><font face="Times New Roman" size="3" color="#FFFFFF">.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="385.00">65</font></td>
                 <td width="70%"><b>
                 <font color="#FFFFFF">CHANA DAL GHOST (2 Per.)</font></b></td>
                 <p style="margin-top: 0; margin-bottom: 0"></p></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right"><font face="Times New Roman" size="3" color="#FFFFFF">385</font><font face="Times New Roman" size="3" color="#FFFFFF">.00</font></td>

               </tr>
               <tr>
                 <td width="7%" valign="top">&nbsp;</td>
                 <td width="70%"><u><b><font color="#CCFFCC" size="4">Local Chicken</font></b></u></td>
                 <td width="6%">&nbsp;</td>
                 <td width="17%">&nbsp;</td>
               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="360.00">66</font></td>
                 <td width="70%"><b>
                 <font color="#FFFFFF">MUROGH BHUNA (Chicken Bhuna) (4 Pcs.)</font></b></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font face="Times New Roman" size="3" color="#FFFFFF">360.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="195.00">67</font></td>
                 <td width="70%"><b>  <font color="#FFFFFF">MUROGH BHUNA (Chicken Bhuna) (2 Pcs.)</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font face="Times New Roman" size="3" color="#FFFFFF">195.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="360.00">68</font></td>
                 <td width="70%"><b>  <font color="#FFFFFF">MUROGH DO-PIAZA (Chicken Do Piaza) (4 
                 Pcs.)</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font face="Times New Roman" size="3" color="#FFFFFF">360.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="195.00">69</font></td>
                 <td width="70%"><b>  <font color="#FFFFFF">MUROGH DO-PIAZA (Chicken Do Piaza) (2 
                 Pcs.)</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font face="Times New Roman" size="3" color="#FFFFFF">195.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="360.00">70</font></td>
                 <td width="70%"><b>  <font color="#FFFFFF">MUROGH ALOO CURRY (Chicken with 
                 Potato) (4 Pcs.)</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font face="Times New Roman" size="3" color="#FFFFFF">360.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="195.00">71</font></td>
                 <td width="70%"><b>  <font color="#FFFFFF">MUROGH ALOO CURRY (Chicken with 
                 Potato) (2 Pcs.)</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font face="Times New Roman" size="3" color="#FFFFFF">195.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="375.00">72</font></td>
                 <td width="70%"><b>  <font color="#FFFFFF">MUROGH DAL (BOOT DAL) (2Per)</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font face="Times New Roman" size="3" color="#FFFFFF">375.00</font></td>

               </tr>
               <tr>
                 <td width="7%" valign="top">&nbsp;</td>
                 <td width="70%"><u><b><font color="#CCFFCC" size="4">Mutton</font></b></u></td>
                 <td width="6%">&nbsp;</td>
                 <td width="17%">&nbsp;</td>
               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="425.00">73</font></td>
                 <td width="70%"><b>  <font color="#FFFFFF">KHASHI BHUNA (Mutton Bhuna) (4 Pcs.)</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font face="Times New Roman" size="3" color="#FFFFFF">425.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="230.00">74</font></td>
                 <td width="70%"><b>  <font color="#FFFFFF">KHASHI BHUNA (Mutton Bhuna) (2 Pcs.)</font></b></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font face="Times New Roman" size="3" color="#FFFFFF">230.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="425.00">75</font></td>
                 <td width="70%"><b>  <font color="#FFFFFF">ALOO KHASHI (Mutton with Potato) (4 Pcs.)</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font face="Times New Roman" size="3" color="#FFFFFF">425.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="230.00">76</font></td>
                 <td width="70%"><font color="#FFFFFF"><b>ALOO KHASHI (Mutton with Potato) (2 
                 Pcs.)</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font face="Times New Roman" size="3" color="#FFFFFF">230.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="425.00">77</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>DAL KHASHI (Mutton with Mug Dal) (4Pcs.)</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font face="Times New Roman" size="3" color="#FFFFFF">425.00</font></td>

               </tr>
               <tr valign="top">
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="230.00">78</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>DAL KHASHI (Mutton with Mug Dal) (2 Pcs.)</b></font></td>
                 <p style="margin-top: 0; margin-bottom: 0"></p></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font face="Times New Roman" size="3" color="#FFFFFF">230.00</font></td>

               </tr>
               <tr>
                 <td width="7%" valign="top">&nbsp;</td>
                 <td width="70%"><u><b><font color="#CCFFCC" size="4">Beef</font></b></u></td>
                 <td width="6%">&nbsp;</td>
                 <td width="17%">&nbsp;</td>
               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="330.00">79</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>GORU BHUNA- Boneless (Beef Bhuna) (8 Pcs.)</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font face="Times New Roman" size="3" color="#FFFFFF">330.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="180.00">80</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>GORU BHUNA (Beef Bhuna) (4 Pcs.)</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font face="Times New Roman" size="3" color="#FFFFFF">180.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="330.00">81</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>GORU MUGH DAL (Mughdal with Beef) (8 Pcs.)</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font face="Times New Roman" size="3" color="#FFFFFF">330.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="180.00">82</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>GORU MUGH DAL (Mughdal with Beef) (4 Pcs.)</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font face="Times New Roman" size="3" color="#FFFFFF">180.00</font></td>
               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="345.00">83</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>BEEF WITH CABAGE (2Per)</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font face="Times New Roman" size="3" color="#FFFFFF">345.00</font></td>

               </tr>
              
             </tbody></table>
             <p style="margin-top: 0; margin-bottom: 0" align="justify">&nbsp;
             </p>
             <p style="margin-top: 0; margin-bottom: 0; font-size: 30px;" align="justify">
             <font color="#FFFFAA"><b><i>Indian</i></b></font><i><font color="#FFFFAA"><b> 
             Cuisine</b></font> </i> </p>
             <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="100%" id="AutoNumber14">
               <tbody><tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">&nbsp;                 </td>
                 <td width="70%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <p style="margin-top: 0; margin-bottom: 0"><b><font color="#CCFFCC" size="4">Appetizer</font></b></p>
                 <p style="margin-top: 0; margin-bottom: 0"></p></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">&nbsp;                 </td>
                 <td width="25%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">&nbsp;                 </td>
               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="385.00">84</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>chk[] (8PCS ) CHI. 
                 ,VEG., PRAWN &amp; FISH</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="25%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font face="Times New Roman" size="3" color="#FFFFFF">385.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="180.00">85</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>SPRING ROLLS (6Pcs.)</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="25%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font face="Times New Roman" size="3" color="#FFFFFF">180.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="165.00">86</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>SABJEE PAKORA (6Pcs)</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="25%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font face="Times New Roman" size="3" color="#FFFFFF">165.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="315.00">87</font></td>
                 <td width="70%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF"><b>FISH FINGER (8Pcs)</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="25%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font face="Times New Roman" size="3" color="#FFFFFF">315.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="365.00">88</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>SMOKED HILSA (On Order)</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="25%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font face="Times New Roman" size="3" color="#FFFFFF">365.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="330.00">89</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>CHICKEN PAKORA (8Pcs)</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="25%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font face="Times New Roman" size="3" color="#FFFFFF">330.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="115.00">89</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>PLAIN PAPAD (4Pcs)</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="25%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font face="Times New Roman" size="3" color="#FFFFFF">115.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="125.00">90</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>MASALA PAPAD (4Pcs)</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="25%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font face="Times New Roman" size="3" color="#FFFFFF">125.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="295.00">91</font></td>
                 <td width="70%">
                 <p style="margin-top: 0; margin-bottom: 0">
                 <font color="#FFFFFF"><b>PRAWN PAKORA (4Pcs)</b></font></p>
                 <p style="margin-top: 0; margin-bottom: 0"></p></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="25%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font face="Times New Roman" size="3" color="#FFFFFF">295.00</font></td>

               </tr>
               <tr>
                 <td width="7%">&nbsp;</td>
                 <td width="70%"><b><font size="4" color="#CCFFCC">Tandoori</font></b></td>
                 <td width="6%">&nbsp;</td>
                 <td width="25%">&nbsp;</td>
               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="510.00">92</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>CICKEN TANDOORI (4Pcs.)</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="25%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font size="3" face="Times New Roman" color="#FFFFFF">510.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="280.00">93</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>CICKEN TANDOORI (HALF) (2Pcs.)</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="25%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font size="3" face="Times New Roman" color="#FFFFFF">280.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="435.00">94</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>CHICKEN RESHMI KABAB (8Pcs.)</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="25%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font size="3" face="Times New Roman" color="#FFFFFF">435.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="395.00">95</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>CHICKEN TIKKAKABAB (8 Pcs.)</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="25%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font size="3" face="Times New Roman" color="#FFFFFF">395.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="395.00">96</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>CHICKEN SHEEKH KABAB (2Pcs.)</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="25%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font size="3" face="Times New Roman" color="#FFFFFF">395.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="510.00">97</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>CHICKEN TANDOORI (Whole) (ON ORDER)</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="25%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font size="3" face="Times New Roman" color="#FFFFFF">510.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="390.00">98</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>BEEF BOTI KABAB (10Pcs. ) (ON ORDER)</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="25%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font size="3" face="Times New Roman" color="#FFFFFF">390.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="1240.00">99</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>JALALI JHINGHA KABAB (8PCS ) (ON 
                 ORDER)</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="25%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font size="3" face="Times New Roman" color="#FFFFFF">1240.00                 </font></td>
               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="330.00">100</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>KALMI KABAB (4 Pcs.) (ON ORDER)</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="25%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font size="3" face="Times New Roman" color="#FFFFFF">330.00</td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="420.00">101</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>FISH HARIWALY KABAB (6PC ) (ON ORDER)</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="25%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font size="3" face="Times New Roman" color="#FFFFFF">420.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="395.00">102</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>FISH TIKKA KABAB (8Pcs.) (ON ORDER)</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="25%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font size="3" face="Times New Roman" color="#FFFFFF">395.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="395.00">103</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>FISH ACHARI TIKKA (8Pcs.) (ON ORDER )</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="25%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font size="3" face="Times New Roman" color="#FFFFFF">395.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="310.00">104</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>BEEF SHEEKH KABAB (2 Sticks) (ON 
                 ORDER)</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="25%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font size="3" face="Times New Roman" color="#FFFFFF">310.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="495.00">105</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>MUTTON BOTI KABAB (8Pcs.) (ON ORDER)</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="25%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font size="3" face="Times New Roman" color="#FFFFFF">495.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="495.00">106</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>TANOORI POMFRET (1Pc) (ON ORDER)</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="25%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font size="3" face="Times New Roman" color="#FFFFFF">495.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="415.00">107</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>AHSAN-E- LAZIZ KABAB</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="25%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font size="3" face="Times New Roman" color="#FFFFFF">415.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="435.00">108</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>VEGETABLE MIXED GRILLKABAB</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="25%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font size="3" face="Times New Roman" color="#FFFFFF">435.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="390.00">109</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>PONIR TIKKA (ON ORDER)</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="25%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font size="3" face="Times New Roman" color="#FFFFFF">390.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="295.00">200</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>VEGETABLE MALAI KOFTA</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="25%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font size="3" face="Times New Roman" color="#FFFFFF">295.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="325.00">201</font></td>
                 <td width="70%">
                 <p style="margin-top: 0; margin-bottom: 0">
                 <font color="#FFFFFF"><b>NAVARATAN KORMA CURRY</b></font></p>
                 <p style="margin-top: 0; margin-bottom: 0"></p></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="25%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font size="3" face="Times New Roman" color="#FFFFFF">325.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">&nbsp;</td>
                 <td width="70%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font size="4" color="#CCFFCC"><b>Vegetarian</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">&nbsp;</td>
                 <td width="25%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">&nbsp;</td>
               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="345.00">202</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>PANEER BUTTER MASALA</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="25%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font size="3" face="Times New Roman" color="#FFFFFF">345.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="315.00">203</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>SHAK PANEER (ON ORDER)</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="25%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font size="3" face="Times New Roman" color="#FFFFFF">315.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="240.00">204</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>KASHMIRI ALOOR DUM (ON ORDER)</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="25%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font size="3" face="Times New Roman" color="#FFFFFF">240.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="240.00">205</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>ALOO GOBI TOMATO (Seasonal) (ON ORDER)</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="25%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font size="3" face="Times New Roman" color="#FFFFFF">240.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="240.00">206</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>JEERA ALOO</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="25%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font size="3" face="Times New Roman" color="#FFFFFF">240.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="280.00">207</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>VEGETABLE DO PIAZA</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="25%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font size="3" face="Times New Roman" color="#FFFFFF">280.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="280.00">208</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>VEGETABLE JHAL FREJEE</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="25%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font size="3" face="Times New Roman" color="#FFFFFF">280.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="240.00">209</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>TARKA DAL</b></font></td>
                 <p style="margin-top: 0; margin-bottom: 0"></p></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="25%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font size="3" face="Times New Roman" color="#FFFFFF">240.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">&nbsp;</td>
                 <td width="70%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font size="4" color="#CCFFCC"><b>Curry</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">&nbsp;</td>
                 <td width="25%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">&nbsp;</td>
               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="435.00">210</font></td>
                 <td width="70%" >
                 <font color="#FFFFFF"><b>MUTTON ROGHAN JOSH (ON ORDER)</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="25%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font color="#FFFFFF" size="3" face="Times New Roman">435.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="435.00">211</font></td>
                 <td width="70%">
                 <b><font color="#FFFFFF">MUTTON KADAI (ON ORDER)</font></b></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="25%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font color="#FFFFFF" size="3" face="Times New Roman">435.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="445.00">212</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>CHICKEN RESHMI BUTTER MASALA (ON ORDER)</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="25%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font color="#FFFFFF" size="3" face="Times New Roman">445.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="445.00">213</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>CHICKEN BUTTER MASALA</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="25%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right"><font color="#FFFFFF" size="3" face="Times New Roman">445.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="445.00">214</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>CHICKEN TIKKA MASALA</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="25%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right"><font color="#FFFFFF" size="3" face="Times New Roman">445.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="445.00">215</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>FISH TIKKA MASALA (ON ORDER)</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="25%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right"><font color="#FFFFFF" size="3" face="Times New Roman">445.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">&nbsp;                 </td>
                 <td width="70%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font size="4" color="#CCFFCC"><b>Nan/ Roti</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">&nbsp;                 </td>
                 <td width="25%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">&nbsp;                 </td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="95.00">216</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>SPECIAL PATLA NAAN</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="25%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font color="#FFFFFF" size="3" face="Times New Roman">95.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="60.00">217</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>PLAIN NAAN</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="25%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font color="#FFFFFF" size="3" face="Times New Roman">60.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="70.00">218</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>BUTTER NAAN</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="25%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font color="#FFFFFF" size="3" face="Times New Roman">70.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="85.00">219</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>GARLIC NAN</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="25%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font color="#FFFFFF" size="3" face="Times New Roman">85.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font color="#FFFFFF"><input type="checkbox" name="chk[]" value="100.00">220</font></td>
                 <td width="70%">
                 <b><font color="#FFFFFF">PANEER NAAN (ON ORDER)</font></b></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="25%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font color="#FFFFFF" size="3" face="Times New Roman">100.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="100.00">221</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>KASHMIRI NAAN (ON ORDER)</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="25%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font color="#FFFFFF" size="3" face="Times New Roman">100.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="45.00">222</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>TANDOORI ROTI</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="25%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font color="#FFFFFF" size="3" face="Times New Roman">45.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="100.00">223</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>KEEMA NAAN (ON ORDER)</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="25%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font color="#FFFFFF" size="3" face="Times New Roman">100.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="75.00">224</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>ALOO KA PARATHA</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="25%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font color="#FFFFFF" size="3" face="Times New Roman">75.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="75.00">225</font></td>
                 <td width="70%">
                 <p style="margin-top: 0; margin-bottom: 0">
                 <font color="#FFFFFF"><b>ONION KULCHA</b></font></p>
                 <p style="margin-top: 0; margin-bottom: 0"></p></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="25%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font color="#FFFFFF" size="3" face="Times New Roman">75.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">&nbsp;                 </td>
                 <td width="70%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font size="4" color="#CCFFCC"><b>Salad</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">&nbsp;                 </td>
                 <td width="25%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">&nbsp;                 </td>
               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="105.00">226</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>SABUJ SALAD (Green Salad)</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="25%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font color="#FFFFFF" size="3" face="Times New Roman">105.00                 </font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="125.00">227</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>MIXED SALAD</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="25%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font color="#FFFFFF" size="3" face="Times New Roman">125.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="155.00">228</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>RAITA SALAD</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="25%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font color="#FFFFFF" size="3" face="Times New Roman">155.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="155.00">229</font></td>
                 <td width="70%">
                 <p style="margin-top: 0; margin-bottom: 0">
                 <font color="#FFFFFF"><b>KASHUNDI SALAD</b></font></p>
                 <p style="margin-top: 0; margin-bottom: 0"></p></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="25%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font color="#FFFFFF" size="3" face="Times New Roman">155.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">&nbsp;                 </td>
                 <td width="70%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font size="4" color="#CCFFCC"><b>Soft Drinks</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="25%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">&nbsp;                 </td>
				</tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="160.00">230</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>SPECIAL LAMONADEE</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="25%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font color="#FFFFFF" size="3" face="Times New Roman">160.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="135.00">231</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>PINEAPPLE JUICE</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="25%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font color="#FFFFFF" size="3" face="Times New Roman">135.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="135.00">232</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>PAPAYA JUICE</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="25%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font color="#FFFFFF" size="3" face="Times New Roman">135.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="165.00">233</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>ORANGE JUICE</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="25%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font color="#FFFFFF" size="3" face="Times New Roman">165.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="165.00">234</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>APPLE JUICE</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="25%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font color="#FFFFFF" size="3" face="Times New Roman">165.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="135.00">235</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>WATER MELON JUICE (SEASONAL)</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="25%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font color="#FFFFFF" size="3" face="Times New Roman">135.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="85.00">236</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>FRESH LIME SODA (SALT / SWEET)</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="25%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font color="#FFFFFF" size="3" face="Times New Roman">85.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="110.00">237</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>LASSI (SWEET /SALT)</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="25%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font color="#FFFFFF" size="3" face="Times New Roman">110.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="165.00">238</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>MILK SHAKE (VANILLA/ STRAWBERRY/ 
                 CHOCOLATE)</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="25%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font color="#FFFFFF" size="3" face="Times New Roman">165.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="40.00">239</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>COKE, SPRITE, PEPSI, 7-UP</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="25%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font color="#FFFFFF" size="3" face="Times New Roman">40.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="75.00">240</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>DIET PEPSI, DIET VIRGIN</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="25%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font color="#FFFFFF" size="3" face="Times New Roman">75.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="40.00">241</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>MINERAL WATER (LARGE)</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="25%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font color="#FFFFFF" size="3" face="Times New Roman">40.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="25.00">242</font></td>
                 <td width="70%">
                 <p style="margin-top: 0; margin-bottom: 0">
                 <font color="#FFFFFF"><b>MINERAL WATER (SMALL)</b></font></p>
                 <p style="margin-top: 0; margin-bottom: 0"></p></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="25%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font color="#FFFFFF" size="3" face="Times New Roman">25.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">&nbsp;                 </td>
                 <td width="70%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font size="4" color="#CCFFCC"><b>Dessert</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">&nbsp;                 </td>
                 <td width="25%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">&nbsp;                 </td>
               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="440.00">243</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>SPECIAL FRUIT PLATTER (4 Per.)</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="25%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font color="#FFFFFF" size="3" face="Times New Roman">440.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="220.00">244</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>TUTTI FRUITY</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="25%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font color="#FFFFFF" size="3" face="Times New Roman">220.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="145.00">245</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>ICE CREAM (VANILLA / STRAWBERRY/ 
                 CHOCOLATE )</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="25%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font color="#FFFFFF" size="3" face="Times New Roman">145.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="145.00">246</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>FRESH FRUIT MANGO (Seasonal)</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="25%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font color="#FFFFFF" size="3" face="Times New Roman">145.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="140.00">247</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>FRESH PAPAYA</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="25%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font color="#FFFFFF" size="3" face="Times New Roman">140.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="115.00">248</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>CARAMEL PUDDING</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="25%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font color="#FFFFFF" size="3" face="Times New Roman">115.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="240.00">249</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>SPECIAL FALUDA </b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="25%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font color="#FFFFFF" size="3" face="Times New Roman">240.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="70.00">250</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>FIRNI</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="25%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font color="#FFFFFF" size="3" face="Times New Roman">70.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="50.00">251</font></td>
                 <td width="70%">
                 <p style="margin-top: 0; margin-bottom: 0">
                 <font color="#FFFFFF"><b>GULAP JAMOON (HOT)</b></font></p>
                 <p style="margin-top: 0; margin-bottom: 0"></p></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="25%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font color="#FFFFFF" size="3" face="Times New Roman">50.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">&nbsp;                 </td>
                 <td width="70%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font size="4" color="#CCFFCC"><b>Tea/ Coffee</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">&nbsp;                 </td>
                 <td width="25%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">&nbsp;                 </td>
               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="40.00">252</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>TEA</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="25%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font color="#FFFFFF" size="3" face="Times New Roman">40.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="60.00">253</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>COFFEE</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="25%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font color="#FFFFFF" size="3" face="Times New Roman">60.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="175.00">254</font></td>
                 <td width="70%">
				 <font color="#FFFFFF"><b>JESMIN TEA (One Pot)</b></font></td>
                 <p style="margin-top: 0; margin-bottom: 0"></p></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="25%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font color="#FFFFFF" size="3" face="Times New Roman">175.00</font></td>

               </tr>
             </tbody></table>
             <p style="margin-top: 0; margin-bottom: 0" align="justify">&nbsp;
             </p>
             <p style="margin-top: 0; margin-bottom: 0; font-size: 30px;" align="justify">
             <i><font color="#FFFFAA"><b>Chinese 
             Cuisine</b></font> </i> </p>
             <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse" width="100%" id="AutoNumber15">
               <tbody><tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">&nbsp;
                 </td>
                 <td width="70%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <b><font color="#CCFFCC" size="4">Appetizer</font></b></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">&nbsp;
                 </td>
                 <td width="17%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">&nbsp;
                 </td>
               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="385.00">255</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>SZE- CHUAN SALAD</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font color="#FFFFFF" size="3" face="Times New Roman">385.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="385.00">256</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>CHICKEN CASHEWNUT SALAD</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font color="#FFFFFF" size="3" face="Times New Roman">385.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="215.00">257</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>FRIED WONTHON</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font color="#FFFFFF" size="3" face="Times New Roman">215.00</font></td>
 
              </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="225.00">258</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>CHICKEN ON TOAST (8Pcs.) (ON ORDER)</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font color="#FFFFFF" size="3" face="Times New Roman">225.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="265.00">259</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>PRAWN ON TOAST (8Pcs.) (ON ORDER)</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font color="#FFFFFF" size="3" face="Times New Roman">265.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="315.00">260</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>CHICKEN BALL (8Pcs.) (ON ORDER)</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font color="#FFFFFF" size="3" face="Times New Roman">315.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="285.00">261</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>PRAWN BALL (8Pcs.) (ON ORDER)</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font color="#FFFFFF" size="3" face="Times New Roman">285.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="130.00">262</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>FRENCH FRY</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font color="#FFFFFF" size="3" face="Times New Roman">130.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="150.00">263</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>VEGETABLE ROLL (2 Pcs.)</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font color="#FFFFFF" size="3" face="Times New Roman">150.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="285.00">264</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>CHICKEN DRUMSTICK (6 Pcs.)</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font color="#FFFFFF" size="3" face="Times New Roman">285.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="295.00">265</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>BBQ CHICKEN WINGS (6Pcs.) (ON ORDER)</b></font></td>
                 <p style="margin-top: 0; margin-bottom: 0"></p></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font color="#FFFFFF" size="3" face="Times New Roman">295.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">&nbsp;
                 </td>
                 <td width="70%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font size="4" color="#CCFFCC"><b>Soup</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">&nbsp;
                 </td>
                 <td width="17%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">&nbsp;
                 </td>
               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="395.00">266</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b> SPECIAL SOUP (3 PER)</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font color="#FFFFFF" size="3" face="Times New Roman">395.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="385.00">267</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>SPECIAL THAI CLEAR SOUP (3 PER)</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font color="#FFFFFF" size="3" face="Times New Roman">385.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="395.00">268</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>THAI SOUP THICK (3 PER)</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font color="#FFFFFF" size="3" face="Times New Roman">395.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="395.00">269</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>SPECIAL CORN SOUP (3 PER)</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font color="#FFFFFF" size="3" face="Times New Roman">395.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="325.00">270</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>CHICKEN CORN SOUP (3 PER)</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font color="#FFFFFF" size="3" face="Times New Roman">325.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="385.00">271</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>SZE-CHUAN SOUP (3 PER)</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font color="#FFFFFF" size="3" face="Times New Roman">385.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="385.00">272</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>CHICKEN HOT &amp; SOUR SOUP (3 PER)</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font color="#FFFFFF" size="3" face="Times New Roman">385.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="325.00">273</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>CHICKEN VEGETABLE SOUP (3 PER)</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font color="#FFFFFF" size="3" face="Times New Roman">325.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="325.00">274</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>CHICKEN NOODLES SOUP (3 PER)</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font color="#FFFFFF" size="3" face="Times New Roman">325.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="325.00">275</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>WONTHON SOUP (3 PER)</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font color="#FFFFFF" size="3" face="Times New Roman">325.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="325.00">276</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>CHICKEN ONION SOUP (3 PER)</b></font><p style="margin-top: 0; margin-bottom: 0"></p></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font color="#FFFFFF" size="3" face="Times New Roman">325.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">&nbsp;
                 </td>
                 <td width="70%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font size="4" color="#CCFFCC"><b>Rice</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">&nbsp;
                 </td>
                 <td width="17%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">&nbsp;
                 </td>
               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="325.00">277</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>SPECIAL FRIED RICE</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font color="#FFFFFF" size="3" face="Times New Roman">325.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="275.00">278</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>THAI FRIED RICE</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font color="#FFFFFF" size="3" face="Times New Roman">275.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="275.00">279</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>SZE-CHUAN MIXED FRIED RICE</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font color="#FFFFFF" size="3" face="Times New Roman">275.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="245.00">280</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>CHICKEN FRIED RICE</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font color="#FFFFFF" size="3" face="Times New Roman">245.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="255.00">281</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>CHICKEN MASALA FRIED RICE</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font color="#FFFFFF" size="3" face="Times New Roman">255.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="295.00">282</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>PRAWN FRIED RICE</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font color="#FFFFFF" size="3" face="Times New Roman">295.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="215.00">283</font></td>
                 <td width="70%">
                 <p style="margin-top: 0; margin-bottom: 0">
                 <font color="#FFFFFF"><b>VEGETABLE FRIED RICE</b></font></p>
                 <p style="margin-top: 0; margin-bottom: 0"></p></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font color="#FFFFFF" size="3" face="Times New Roman">215.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">&nbsp;
                 </td>
                 <td width="70%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font size="4" color="#CCFFCC"><b>Noodles Item</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">&nbsp;
                 </td>
                 <td width="17%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">&nbsp;
                 </td>
               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="315.00">284</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>SPECIAL NOODLES</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font color="#FFFFFF" size="3" face="Times New Roman">315.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="285.00">285</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>THAI NOODLES</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font color="#FFFFFF" size="3" face="Times New Roman">285.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="285.00">286</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>SZE- CHUAN NOODLES</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font color="#FFFFFF" size="3" face="Times New Roman">285.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="245.00">287</font></td>
                 <td width="70%">
                 <p style="margin-top: 0; margin-bottom: 0">
                 <font color="#FFFFFF"><b>VEGETABLE NOODLES</b></font></p>
                 <p style="margin-top: 0; margin-bottom: 0"></p></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font color="#FFFFFF" size="3" face="Times New Roman">245.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">&nbsp;
                 </td>
                 <td width="70%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font size="4" color="#CCFFCC"><b>Chicken</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">&nbsp;
                 </td>
                 <td width="17%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">&nbsp;
                 </td>
               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="325.00">288</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>SZE- CHUAN CHICKEN</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font face="Times New Roman" size="3" color="#FFFFFF">325.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="325.00">289</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>FRIED SPRING CHICKEN</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font face="Times New Roman" size="3" color="#FFFFFF">325.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="325.00">290</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>CHICKEN MASALA</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font face="Times New Roman" size="3" color="#FFFFFF">325.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="325.00">291</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>CHICKEN CHILI ONION</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font face="Times New Roman" size="3" color="#FFFFFF">325.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="325.00">292</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>CHICKEN CHILI (DRY)</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font color="#FFFFFF" size="3" face="Times New Roman">325.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="325.00">293</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>CHICKEN WITH LEMON</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font color="#FFFFFF" size="3" face="Times New Roman">325.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="325.00">294</font></td>
                 <td width="70%">
                 <p style="margin-top: 0; margin-bottom: 0">
                 <font color="#FFFFFF"><b>CHICKEN WITH PINEAPPLE</b></font></p>
                 <p style="margin-top: 0; margin-bottom: 0"></p></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font color="#FFFFFF" size="3" face="Times New Roman">325.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">&nbsp;
                 </td>
                 <td width="70%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font size="4" color="#CCFFCC"><b>Beef</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">&nbsp;
                 </td>
                 <td width="17%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">&nbsp;
                 </td>
			   </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="325.00">295</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>BEEF MASALA</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font color="#FFFFFF" size="3" face="Times New Roman">325.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="335.00">296</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>BEEF BASIL LEAF</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font color="#FFFFFF" size="3" face="Times New Roman">335.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="325.00">297</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>BEEF CHILI ONION</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font color="#FFFFFF" size="3" face="Times New Roman">325.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="325.00">298</font></td>
                 <td width="70%">
                 <p style="margin-top: 0; margin-bottom: 0">
                 <font color="#FFFFFF"><b>BEEF CHILI (DRY)</b></font></p>
                 <p style="margin-top: 0; margin-bottom: 0"></p></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font color="#FFFFFF" size="3" face="Times New Roman">325.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">&nbsp;
                 </td>
                 <td width="70%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font size="4" color="#CCFFCC"><b>Prawn</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">&nbsp;
                 </td>
                 <td width="17%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">&nbsp;
                 </td>
			   </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="440.00">299</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>CRUMB FRIED PRAWN (10 Pcs.)</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font color="#FFFFFF" size="3" face="Times New Roman">440.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="415.00">300</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>SZE-CHUAN PRAWN</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font face="Times New Roman" size="3" color="#FFFFFF">415.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="355.00">301</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>PRAWN WITH GARLIC SAUCE</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font color="#FFFFFF" size="3" face="Times New Roman">355.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="355.00">302</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>CHINA PRAWN (8Pcs.)</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font color="#FFFFFF" size="3" face="Times New Roman">355.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="345.00">303</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>SWEET &amp; SOUR PRAWN</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font color="#FFFFFF" size="3" face="Times New Roman">345.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="345.00">304</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>SWEET &amp; SOUR PRAWN BALL</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font color="#FFFFFF" size="3" face="Times New Roman">345.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="355.00">305</font></td>
                 <td width="70%">
                 <p style="margin-top: 0; margin-bottom: 0">
                 <font color="#FFFFFF"><b>PRAWN MASALA</b></font></p>
                 <p style="margin-top: 0; margin-bottom: 0"></p></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font color="#FFFFFF" size="3" face="Times New Roman">355.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">&nbsp;
                 </td>
                 <td width="70%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font size="4" color="#CCFFCC"><b>Fish</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">&nbsp;
                 </td>
                 <td width="17%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">&nbsp;
                 </td>
               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="365.00">306</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>MANDARIN FISH WITH LEMON SAUCE</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font color="#FFFFFF" size="3" face="Times New Roman">365.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="325.00">307</font></td>
                 <td width="70%">
                 <p style="margin-top: 0; margin-bottom: 0">
                 <font color="#FFFFFF"><b>SWEET &amp; SOUR FISH</b></font></p>
                 <p style="margin-top: 0; margin-bottom: 0"></p></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font color="#FFFFFF" size="3" face="Times New Roman">325.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">&nbsp;
                 </td>
                 <td width="70%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font size="4" color="#CCFFCC"><b>Vegetable</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">&nbsp;
                 </td>
                 <td width="17%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">&nbsp;
                 </td>
               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="230.00">308</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>MIXED VEGETABLE</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font color="#FFFFFF" size="3" face="Times New Roman">230.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="265.00">309</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>CHICKEN VEGETABLE</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font color="#FFFFFF" size="3" face="Times New Roman">265.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="265.00">310</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>BEEF VEGETABLE</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font face="Times New Roman" size="3" color="#FFFFFF">265.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="285.00">311</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>PRAWN VEGETABLE</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font face="Times New Roman" size="3" color="#FFFFFF">285.00</font></td>

               </tr>
               <tr>
                 <td width="7%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" valign="top">
                 <font face="Times New Roman" size="2" color="#FFFFFF"><input type="checkbox" name="chk[]" value="325.00">512</font></td>
                 <td width="70%">
                 <font color="#FFFFFF"><b>THAI VEGETABLE</b></font></td>
                 <td width="6%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px">
                 <font color="#FFFFFF">TK.</font></td>
                 <td width="17%" style="font-family: Georgia, 'Times New Roman', Times, serif; font-size: 10px" align="right">
                 <font face="Times New Roman" size="3" color="#FFFFFF">325.00</font></td>

               </tr>
             </tbody></table>
             </td>
           </tr>
         </tbody>
		 </form>
</table>
<input type="submit" name="Submit" value="Submit">


</div>
</body>
</html>