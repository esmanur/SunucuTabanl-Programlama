<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>İlaç Kayıt</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"></script src="<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
</head>
<body>
<div>
<form class="form-signin" action="ilacekle.php" method="POST">
	<h4 class="form-signin-heading">İlaç Kayıt Girişi</h4>
	<input type="text" name="İlac_ad" placeholder="İlaç Adı" class="form-control">
	<input type="number" name="Barkod_no" placeholder="Barkod No" class="form-control"> 
	<input type="number" name="Adet" placeholder="İlaç Adedi" class="form-control"> 
	Satış Tarihi:
	<input type="date" name="Satis_tarihi"  class="form-control"> 
	<input type="number" name="musteri_tc_kimlik" placeholder="Müşteri Tc Kimlik No" class="form-control"> 
	<input type="number" name="Satis_fiyati" placeholder="Satış Fiyatı" class="form-control"> 
	<input type="number" name="Maliyet_fiyati" placeholder="Maliyet Fiyatı" class="form-control"> 


 
	<button class="btn btn-lg btn-primary btn-block" type="submit">Kaydet</button>

</form>
</div>
</body>
</html>