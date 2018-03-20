<?php

//tanımlamaları yapıyoruz değişken atamaları
$eposta=$_POST['eposta'];
$sifre=$_POST['sifre'];

//eğer eposta yada sifre boşsa bildirim ekrenaı geliyor boş bırakmayın diye, eğer dolysa hoşgeldiniz ...@.. diyor.
if($eposta=="" or $sifre=="")
{
echo"<script>alert('Lütfen boş alanları doldurunuz')</script>";
}
else
{
echo"<script>alert('Hoşgeldiniz $eposta')</script>";	
}
###<script>alert('Kullanıcının Göreceği Mesaj')</script>


if($_POST){
//isset değişken tanımlı mı değil mi kontrol eder.Belirtilen değişken tanımlıysa ve NULL değilse true döner.
if(isset($_POST['eposta'])&&isset($_POST['sifre'])){

// trim boşlukları temizlemek için. strip tags ise veriyi zararlı kodlardan temizleme ve html kodlarını temizlemek için kullanıyoruz.
	$eposta=trim(strip_tags($_POST['eposta']));
	$sifre=trim(strip_tags($_POST['sifre']));
//Metin içerisinde belli bir karakter veya karakter grubunu arar,@hotmail aratıyoruz
	$durum=strstr($eposta,"@hotmail.com");
// eğer hotmailse oys ye yönlen
if($durum=="@hotmail.com"){
//header girdiğimiz urlyi otomatik açıyor. refresh ise 2 saniye sonra oys sayfasın aç demek
	header("Refresh: 2; url=http://oys.deu.edu.tr/"); 
}
//hotmail değilse oys2 ye yönlen.
else{ if ($durum!="@hotmail.com"){
	echo "www.oys2.deu.edu.tr adresine yönlendiriliyorsunuz";
	header("Refresh: 2; url=http://www.oys2.deu.edu.tr");
}
}
}
}


?>