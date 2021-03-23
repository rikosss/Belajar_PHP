<?php 
require 'func_perhitungan.php';
?>
  
<!DOCTYPE html>
<html>
<head>
    <title>Fungsi Perhitungan ATK</title>
        <!-- <link rel="stylesheet" href="css.css">      -->
</head>
<body>
        <!-- main konten/gambar -->
        <div class="main" id="menu">
            <div class="container">
          <h3>Hitung Bayar ATK</h3>
            <form action="" method="POST">
                <label>Jumlah Beli</label><br>
                <input type="number" name="jml_atk" required min="0"><br>
                <button name="bttnHtg">Hitung</button>
            </form>
        </div>   
        </div>

<?php 
        if(isset($_POST['bttnHtg'])){
         echo "Total Harga ".$_POST['jml_atk']."adalah :".hitungTotal($_POST['jml_atk']);
            echo "Diskon".hitungDiskon($_POST['jml_atk']);
            echo "Total Bayar".hitungBayar($_POST['jml_atk']);
                }
        


?>

</body>
</html>
