<?php

//tanımlamaları yapıyoruz değişken atamaları
//Post yönteminde sorgular gizli bir şekilde gönderilir. Kullanıcı adı ve şifre gibi özel bilgilerde kullanılır.

$eposta=$_POST['eposta'];
$sifre=$_POST['sifre'];

//eğer eposta yada sifre boşsa bildirim ekrenaı geliyor boş bırakmayın diye, eğer dolysa hoşgeldiniz ...@.. diyor.
if($eposta=="" or $sifre=="")
{
echo"<script>alert('Lütfen boş alanları doldurunuz')</script>";
}
/*else
{
echo"<script>alert('Hoşgeldiniz $eposta')</script>";	
}*/

function hosgeldin_alert(){
	echo"<script>alert('Hosgeldiniz')</script>";
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
// echo yazdırıyor. açmadan önce siteyi ekranda bilgilendirmek için yazdım
			hosgeldin_alert();
			echo "www.oys.deu.edu.tr adresine yönlendiriliyorsunuz";
			header("Refresh: 2; url=http://oys.deu.edu.tr/");
			exit();
		}
//hotmail değilse oys2 ye yönlen.
		elseif(strstr($eposta,"@gmail.com")=="@gmail.com"){
			hosgeldin_alert();
			echo "www.oys2.deu.edu.tr adresine yönlendiriliyorsunuz";
			header("Refresh: 2; url=http://www.oys2.deu.edu.tr");
			exit();
		}
		else{
			echo"<script>alert('Bağlantı sağlanamadı mail hatalı')</script>";
			header("Refresh: 2; url=index.php");
	}

}
}



?>