<?php 
$harga = 9000;

function hitungTotal($jml_atk){
	global $total;
	$total=9000*$jml_atk;
	return $total;
}

function hitungDiskon($jml_atk){
	global $total;
	global $diskon;
	if($jml_atk > 36){
	$diskon= $total*0.05;
	return $diskon;
}else{
	$diskon=0;
	return $diskon;
}
}

function hitungBayar($jml_atk){
	global $total;
	global $diskon;
	$bayar=$total-$diskon;
	return $bayar;
}


 ?>