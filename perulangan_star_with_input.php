	<!DOCTYPE html>
	<html>
	<head>
		<title></title>
	</head>
	<body>
		<h1>Tampil Star by Input</h1>
		<form action="" method="POST">
			Masukan Jumlah : <input type="text" name="star">	
			<input type="submit" name="proses">
		</form>
	
	</body>
	</html>
	<?php
	if(isset($_POST['proses'])){
		$isi = $_POST['star'];

		for($x=1; $x <= $isi; $x++){
			for($j=1; $j<=$x; $j++){
				echo '*';
			}
			echo '<br>';
		}
	}

	?>