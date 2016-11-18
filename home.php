<?php include 'rumus.php'; 
// require -- fatal eror = tidak dapat dieksekusi
// include -- warning=dimunculkan info masalah problem tapi baris selanjutnya tetap dieksekusi, karna file tidak ditemukan
?>

<?php error_reporting(E_ERROR)
//tdk menampilkan eror pada php
?>

<h1>Luas dan Keliling Persegi</h1>

<?php
	$input = $_POST;
	$luas = luas_persegi($input['panjang'], $input['lebar']);
	$keliling = keliling_persegi ($input['panjang'], $input['lebar']);
?>

<p>
	Luas Persegi <?php echo $luas ?>
	dan Keliling Persegi <?php echo $keliling ?>
</p>
		
<form action="home.php" method="post">
	Panjang<br />
	<input type="text" name="panjang"><br />
	Lebar<br />
	<input type="text" name="lebar"><br />
	<input type="submit" value="Hitung">
</form>