

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Mama Kayıt</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"></script src="<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
</head>
<body>
<div>
<form class="form-signin" action="mamaekle.php" method="POST">
	<h4 class="form-signin-heading">Mama Kayıt Girişi</h4>

	<input type="number" name="mama_id" placeholder="Mama id" class="form-control">
	Satış Tarihi:

	<input type="date" name="Satis_tarih"  class="form-control"> 

	<input type="text" name="Mama_Adi" placeholder="Mama Adı" class="form-control">





	<input type="number" name="miktar" placeholder="Adet" class="form-control">

	
	<input type="number" name="musteri_tc_kimlik" placeholder="Müşteri Tc Kimlik No" class="form-control">

	
	<input type="number" name="Maliyet_fiyat" placeholder="Maliyet Fiyatı" class="form-control">
	<input type="number" name="Satis_fiyat" placeholder="Satış Fiyatı" class="form-control">

	<button class="btn btn-lg btn-primary btn-block" type="submit">Kaydet</button>

</form>

</div>


</body>
</html>