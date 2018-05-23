<?php
require("baglan.php");
// include,require_once
if(!$baglan){ //bağlanmazsa
	die("Bağlantı Başarısız".mysql_connect_error());
//die eğer bağlantı yapılmadıysa aşağıdaki komutları kesiyo aşağıdaki komutları çalıştırmıyo kullanıcıya yük bindirmiyo boşa çalışmıyo
}
else
{
	echo "Bağlantı Başarılı";
}

$ad=$_POST["Ad"];
$soyad=$_POST["Soyad"];
$musteri_tc=$_POST["musteri_tc_kimlik"];
$adres=$_POST["Adres"];
$telefon=$_POST["Telefon_no"];
$eposta=$_POST["e_posta"];
$hayvanid=$_POST["hayvan_id"];

if($ad&$soyad&$musteri_tc&$adres&$telefon&$eposta&$hayvanid) {
	$sorgu="insert into musteriler(Ad,Soyad,musteri_tc_kimlik,Adres,Telefon_no,e_posta,hayvan_id) values ('$ad','$soyad','$musteri_tc','$adres','$telefon','$eposta','$hayvanid')";

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