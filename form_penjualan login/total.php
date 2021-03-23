<!DOCTYPE html>
<html>
<head>
	<title>hasil hitung</title>
	 <link rel="stylesheet" href="css.css">     
</head>
<body>
	 <!-- main konten/gambar -->
        <div class="main" id="menu">
            <div class="container">
          <h1>Hasil</h1>
            <form action="form_penjualan.php" method="POST">
                <label>Total Bayar</label><br>
                <?php 
$atk = $_POST['jml_atk'];
$harga = 9000;
$total = $atk*$harga;
$diskon = $total*0.05;
$setelahdiskon = $total - $diskon;

echo "Jumlah ATK = $atk<br/>";
echo "Harga ATK = Rp $harga<br/>";
echo "Total Harga = Rp $total<br/>";
if($atk > 36){
	echo "diskon = Rp $diskon<br/>";
	echo "Jumlah Bayar = Rp ". $setelahdiskon;
}
else{
	echo "Jumlah Bayar = Rp $total";
}
 ?>
                <!-- <input type="text" name="jml_buku"><br> -->
                <button>Kembali</button>
            </form>
        </div>   
        </div>

</body>
</html>
