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
	$eposta=$_POST['eposta'];
	echo"<script>alert('Hosgeldiniz $eposta')</script>";
}
###<script>alert('Kullanıcının Göreceği Mesaj')</script>


if($_POST){
//isset değişken tanımlı mı değil mi kontrol eder.Belirtilen değişken tanımlıysa ve NULL değilse true döner.
	if(isset($_POST['eposta'])&&isset($_POST['sifre'])){

// trim boşlukları temizlemek için. strip tags ise veriyi zararlı kodlardan temizleme ve html kodlarını temizlemek için kullanıyoruz.
		$eposta=trim(strip_tags($_POST['eposta']));
		$sifre=trim(strip_tags($_POST['sifre']));
		header("Refresh: 2; url=index1.php");

		
		}
		else{
			echo"<script>alert('Bağlantı sağlanamadı mail hatalı')</script>";
			header("Refresh: 2; url=index.php");
	}

}




?>










