<?php 

function hitungLuasSegitiga($alas,$tinggi){
	$luasSegitiga=$alas*$tinggi/2;
	return $luasSegitiga;
}


function hitungKelilingSegitiga($sisi1,$sisi2,$sisi3){
	$kelilingSegitiga=$sisi1+$sisi2+$sisi3;
	return $kelilingSegitiga;
}

function hitungLuasLingkaran($r){
	$luasLingkaran=3.14*$r*$r;
	return $luasLingkaran;
}

function hitungKelilingLingkaran($r){
	$kelilingLingkaran=3.14*($r+$r);
	return $kelilingLingkaran;
}

function hitungLuasJajarGenjang($alas,$tinggi){
	$luasJajarGenjang=$alas*$tinggi;
	return $luasJajarGenjang;
}

function hitungKelilingJajarGenjang($sisi1,$sisi2){
	$kelilingJajarGenjang=2*($sisi1+$sisi2);
	return $kelilingJajarGenjang;
}

?>
