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
$mamaid=$_POST["mama_id"];
$satistarihi=$_POST["Satis_tarih"];
$mama=$_POST["Mama_Adi"];
$miktar=$_POST["miktar"];
$musteri_tc=$_POST["musteri_tc_kimlik"];
$maliyetfiyati=$_POST["Maliyet_fiyat"];
$satisfiyati=$_POST["Satis_fiyat"];


if($mamaid&$satistarihi&$mama&$miktar&$musteri_tc&$maliyetfiyati&$satisfiyati) { 
	$sorgu="insert into mamalar(mama_id,Satis_tarih,Mama_Adi,miktar,musteri_tc_kimlik,Maliyet_fiyat,Satis_fiyat) values ('$mamaid','$satistarihi','$mama','$miktar','$musteri_tc','$maliyetfiyati','$satisfiyati')";

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