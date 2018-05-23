<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Hasta Kayıt</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"></script src="<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
</head>
<body>
<div>
<form class="form-signin" action="hastaekle.php" method="POST">
	<h4 class="form-signin-heading">Hasta Kayıt Girişi</h4>
	
	<input type="number" name="hayvan_id" placeholder="Hayvan id" class="form-control"> 
	<input type="text" name="hayvan_cins" placeholder="Hasta Cinsi" class="form-control">
	<input type="text" name="hasta_adi" placeholder="Hasta Adı" class="form-control"> 
	Doğum Tarihi:
	<input type="date" name="dogum_tarihi"  class="form-control"> 
	<input type="text" name="Sahip_Ad" placeholder="Sahip Adı" class="form-control"> 
	<input type="text" name="Sahip_Soyad" placeholder="Sahip Soyadı" class="form-control"> 
	<input type="number" name="musteri_tc_kimlik" placeholder="Müşteri Tc Kimlik No" class="form-control">



	<button class="btn btn-lg btn-primary btn-block" type="submit">Kaydet</button>

</form>
</div>
</body>
</html>