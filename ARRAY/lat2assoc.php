<?php 
// $mahasiswa = [
	// ["Riko", "08278976", "rikosyamr@gmail.com", "Teknik"], ["Joko", "38278976", "joko@gmail.com", "Teknik"]
// ];

$mahasiswa = [
	[
		"nama" => "Riko",
		"nim"=> "927094",
		"email"=>"rikosyamr@gmail.com",
		"jurusan"=>"teknik",
		"gambar"=>"1.jpg"
	],
	[
		"nama" => "Roni",
		"nim"=> "947094",
		"email"=>"roni@gmail.com",
		"jurusan"=>"tekniksipil",
		"gambar"=>"1.jpg"
	]
];

// echo $mahasiswa[1]["nama"];
// echo $mahasiswa[1]["tugas"][2];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Daftar Mahasiswa</title>
</head>
<body>
<h1>welcome</h1>
<ul>
	 <?php foreach ($mahasiswa as $mhss) : ?>
		
	<li><img src="<?= $mhss["gambar"]?>"></li>	
	<li>Nama : <?= $mhss["nama"]; ?></li>
	<li>NIM : <?= $mhss["nim"]; ?></li>
	<li>email : <?= $mhss["email"]; ?></li>
	<li>jurusan : <?= $mhss["jurusan"]; ?></li>
	<hr/> 
	 <?php endforeach; ?>
</body>
</html>