<?php

require("baglan.php");

if(!$baglan){ 
	die("Bağlantı Başarısız".mysql_connect_error());

}
else
{
	echo "Bağlantı Başarılı";
}
$sorgu="select * from mamalar";
$a=mysqli_query($baglan,$sorgu); 

if(mysqli_num_rows($a)>0) 
{
	while($row=mysqli_fetch_assoc($a)){  
		echo "<br><br>Mama İd:".$row["mama_id"]."<br>Satış Tarihi: ".$row["Satis_tarih"]."<br>Mama Adı: ".$row["Mama_Adi"]."<br>Miktar: ".$row["miktar"]. "Müşteri Tc Kimlik:".$row["musteri_tc_kimlik"]."<br>MAliyet Fiyatı: ".$row["Maliyet_fiyat"]."<br>Satış Fiyatı: ".$row["Satis_fiyat"]. "</br>";  


	}
}
else{
	echo "Kayıt Bulunamadı";
} 

mysqli_close($baglan); 
?>

