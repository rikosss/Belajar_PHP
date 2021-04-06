<?php 
//Array
//Sebuah variabel yg dpt memiliki banyak nilai


//membuat array cara lama

// $hari = array("Senin","Selasa","Rabu");

//cara baru

$angka = [9,10,99,15,19,33,56];

?>

<!DOCTYPE html>
<html>
<head>
	<title>Latihan Array</title>
<style>
div {
		width:50px;
		height: 50px;
		background-color: salmon;
		text-align: center;
		line-height: 50;
		margin : 3px;
		float:left;
		font-family: arial;
		color: black;  
	}
</style>
</head>
<body>
	<?php for( $i=0; $i <7; $i++) { ?>
	<div><?php echo "$angka[i]"; ?></div>
<?php } ?>
</body>
</html>