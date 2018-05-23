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
$ilacad=$_POST["İlac_ad"];
$barkod=$_POST["Barkod_no"];
$adet=$_POST["Adet"];
$satistarih=$_POST["Satis_tarihi"];
$musteri_tc=$_POST["musteri_tc_kimlik"];
$satisfiyat=$_POST["Satis_fiyati"];
$maliyetfiyat=$_POST["Maliyet_fiyati"];

if($ilacad&$barkod&$adet&$satistarih&$musteri_tc&$satisfiyat&$maliyetfiyat) { //boş değer olmazsa sorguyu yapıyoruz
	$sorgu="insert into ilaclar(İlac_ad,Barkod_no,Adet,Satis_tarihi,musteri_tc_kimlik,Satis_fiyati,Maliyet_fiyati) values ('$ilacad','$barkod','$adet','$satistarih','$musteri_tc','$satisfiyat','$maliyetfiyat')";

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