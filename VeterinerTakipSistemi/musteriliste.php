<?php

require("baglan.php");

if(!$baglan){ 
	die("Bağlantı Başarısız".mysql_connect_error());

}
else
{
	echo "Bağlantı Başarılı";
}
$sorgu="select * from musteriler";
$a=mysqli_query($baglan,$sorgu); 

if(mysqli_num_rows($a)>0) 
{
	while($row=mysqli_fetch_assoc($a)){  
		echo "<br><br>Müşteri Adı:".$row["Ad"]."<br>Müşteri Soyadı: ".$row["Soyad"]."<br>Tc Kimlik: ".$row["musteri_tc_kimlik"]."<br>Adres: ".$row["Adres"]. "Telefon Numarası:".$row["Telefon_no"]."<br>E-Posta: ".$row["e_posta"]."<br>Sahip Olduğu Hayvan İd: ".$row["hayvan_id"]. "</br>";  
	}
}
else{
	echo "Kayıt Bulunamadı";
} 

mysqli_close($baglan); 
?>

