<?php 
$mhs = [
	['Sandhika Galih', '3532625', 'Teknik Informatika', 'sandika@gmail.com'],
	['Riko Syam Ramadhan', '08927412', 'Teknik Informatika', 'rikosyamr@gmail.com']
];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Daftar Mahasiswa</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>

<!-- <ul>
	<li>Sandhika Galih</li>
	<li>08927412</li>
	<li>Teknik Informatika</li>
	<li>Email</li>
</ul> -->

<ul>
	<?php foreach ($mhs as $mhss) :  ?>
		
	
</ul>

<ul>
	<li>Nama : <?= $mhss[0]; ?></li>
	<li>NIP : <?= $mhss[1]; ?></li>
	<li>Jurusan : <?= $mhss[2]; ?></li>
	<li>Email : <?= $mhss[3]; ?></li>
</ul>
<?php endforeach; ?>
</body>
</html>