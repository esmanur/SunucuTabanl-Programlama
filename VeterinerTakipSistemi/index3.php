<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Müşteri Kayıt</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"></script src="<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
</head>
<body>
<div>
<form class="form-signin" action="musteri_ekle.php" method="POST">
	<h4 class="form-signin-heading">Müşteri Kayıt Girişi</h4>
		<input type="text" name="Ad" placeholder="Müşterinin Adı" class="form-control">
	<input type="text" name="Soyad" placeholder="Müşterinin Soyadı" class="form-control">


	<input type="number" name="musteri_tc_kimlik" placeholder="Tc Kimlik No" class="form-control">

	<input type="text" name="Adres" placeholder="Müşterinin Adresi" class="form-control">

	<input type="number" name="Telefon_no" placeholder="Telefon Numarası" class="form-control">

	<input type="email" name="e_posta" placeholder="Müşteri E-Posta" class="form-control">
	<input type="number" name="hayvan_id" placeholder="Müşterinin Sahip Olduğu Hayvan No'su" class="form-control">
	<button class="btn btn-lg btn-primary btn-block" type="submit">Kaydet</button>

</form>

</div>


</body>
</html>