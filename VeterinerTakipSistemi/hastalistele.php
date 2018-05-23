<?php

require("baglan.php");

if(!$baglan){ 
	die("Bağlantı Başarısız".mysql_connect_error());

}
else
{
	echo "Bağlantı Başarılı";
}
$sorgu="select * from hastalar";
$a=mysqli_query($baglan,$sorgu);

if(mysqli_num_rows($a)>0) 
{
	while($row=mysqli_fetch_assoc($a)){ 
		echo "<br><br> Hayvan İd:".$row["hayvan_id"]."<br>Hasta Cinsi: ".$row["hayvan_cins"]."<br>Hasta Adı: ".$row["hasta_adi"]."<br>Doğum Tarihi: ".$row["dogum_tarihi"]."<br>Sahip Adı: ".$row["Sahip_Ad"]. "Sahip Soyadı:".$row["Sahip_Soyad"]."<br>Müşteri Tc Kimlik No: ".$row["musteri_tc_kimlik"]."</br>";  

	}
}
else{
	echo "Kayıt Bulunamadı";
} 

mysqli_close($baglan);
?>

