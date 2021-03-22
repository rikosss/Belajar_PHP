<?php 
require_once "fungsi_bangun_datar.php";
 ?>
	<!DOCTYPE html>
  <html>
  <head>
    <title>Segitiga</title>
    <link rel="stylesheet" type="text/css" href="bgndatar.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
    <div class="bg-img">
      <div class="content">
  <header>Luas dan Keliing Segitiga</header>
      <form name="formsegitiga" action="" method="POST">
          <!-- <div class="field">

          <select >
         <option>Segitiga</option>
         <option>Lingkaran</option>
         <option>Jajar Genjang</option>
      </select >
      </div> -->
          <div class="field">
            <input type="number" name="alas" required min="0" placeholder="Masukan nilai alas ">
          </div>
          <div class="field space">
              <input type="number" name="tinggi" required min="0" placeholder="Masukan nilai tinggi">
          </div>
          <div class="field space">
              <input type="submit" name="hitungLuasSegitigaBtn" value="Hitung Luas">
          </div>
          <div class="field space">
              <input type="number" name="sisi1" required min="0"  placeholder="Masukan nilai sisi1 ">
            </div>
            <div class="field space">
              <input type="number" name="sisi2" required min="0" placeholder="Masukan nilai sisi2 ">
          </div>
          <div class="field space">
              <input type="number" name="sisi3" required min="0" placeholder="Masukan nilai sisi3 ">
            </div>
            

            
      <div class="field space">
       <input type="submit" name="hitungKelilingSegitigaBtn" value="Hitung Keliling">         
          </div>
        
         <?php 
              if (isset($_POST['hitungLuasSegitigaBtn'])) {
                echo "Luas segitiga dengan Alas ".$_POST['alas']."dan tinggi".$_POST['tinggi']."adalah :".hitungLuasSegitiga($_POST['alas'],$_POST['tinggi']);
              }
        if (isset($_POST['hitungKelilingSegitigaBtn'])) {
                echo "Keliling segitiga dengan sisi a ".$_POST['sisi1'].",sisi b".$_POST['sisi2']."dan sisi c".$_POST['sisi3']."adalah :".hitungKelilingSegitiga($_POST['sisi1'],$_POST['sisi2'],$_POST['sisi3']);
              }

           ?>

        </form> 
      </div>
    </div>
  </body>
  </html>










  