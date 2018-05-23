<?php
require("baglan.php");

if(!$baglan){ 
	die("Bağlantı Başarısız".mysql_connect_error());

}
else
{
	echo "Bağlantı Başarılı";
}

$hayvanid=$_POST["hayvan_id"];
$hayvancins=$_POST["hayvan_cins"];
$adi=$_POST["hasta_adi"];
$dogum=$_POST["dogum_tarihi"];
$sahipad=$_POST["Sahip_Ad"];
$sahipsoyad=$_POST["Sahip_Soyad"];
$musteri_tc=$_POST["musteri_tc_kimlik"];


if($hayvanid&$adi&$dogum&$sahipad&$sahipsoyad&$musteri_tc) {
	$sorgu="insert into hastalar(hayvan_id,hayvan_cins,hasta_adi,dogum_tarihi,Sahip_Ad,Sahip_Soyad,musteri_tc_kimlik) values ('$hayvanid','$hayvancins','$adi','$dogum','$sahipad','$sahipsoyad','$musteri_tc')";

	if(mysqli_query($baglan,$sorgu)===True) { 
		 	echo"Kayıtlar Başarıyla Eklendi";
		 	header("Refresh: 2; url=index1.php");
		 	
	}
	else{
		 	echo"Kayıtlar eklenemedi";
	}

}
else{
	echo"Lütfen tüm alanları doldurunuz";
   }
?>