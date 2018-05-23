<?php

require("baglan.php");

if(!$baglan){ 
	die("Bağlantı Başarısız".mysql_connect_error());

}
else
{
	echo "Bağlantı Başarılı"; 

}
$sorgu="select * from ilaclar";
$a=mysqli_query($baglan,$sorgu);

if(mysqli_num_rows($a)>0) 
{
	while($row=mysqli_fetch_assoc($a)){  

		echo "<br> <br>İlaç Adı:".$row["İlac_ad"]."<br>Barkod No: ".$row["Barkod_no"]."<br>Adet: ".$row["Adet"]."<br>Satış Tarihi: ".$row["Satis_tarihi"]. "Müşteri Tc Kimlik:".$row["musteri_tc_kimlik"]."<br>Satış Fiyatı: ".$row["Satis_fiyati"]."<br>Maliyet Fiyatı: ".$row["Maliyet_fiyati"]. "</br>";  
	}
}
else{
	echo "Kayıt Bulunamadı";
} 

mysqli_close($baglan); 
?>

