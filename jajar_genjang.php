<?php 
require_once "fungsi_bangun_datar.php";
 ?>
	<!DOCTYPE html>
  <html>
  <head>
    <title>Jajar Genjang</title>
    <link rel="stylesheet" type="text/css" href="bgndatar.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
    <div class="bg-img">
      <div class="content">
  <header>Luas dan Keliing Jajar Genjang</header>
      <form name="formjajargenjang" action="" method="POST">
          <!-- <div class="field">

          <select >
         <option>Segitiga</option>
         <option>Lingkaran</option>
         <option>Jajar Genjang</option>
      </select >
      </div> -->
          
          <div class="field">
              <input type="number" name="alas" required min="0"  placeholder="Masukan nilai alas ">
            </div>
            <div class="field space">
              <input type="number" name="tinggi" required min="0" placeholder="Masukan nilai tinggi ">
          </div>
         
            

            <div class="field space">
       <input type="submit" name="hitungLuasJajarGenjangBtn" value="Hitung Luas">  
      </div>
       <div class="field space">
              <input type="number" name="sisi1" required min="0"  placeholder="Masukan nilai sisi a ">
            </div>
            <div class="field space">
              <input type="number" name="sisi2" required min="0" placeholder="Masukan nilai sisi b ">
          </div>
      <div class="field space">
       <input type="submit" name="hitungKelilingJajarGenjangBtn" value="Hitung Keliling">         
          </div>
        
         <?php 
              if (isset($_POST['hitungLuasJajarGenjangBtn'])) {
                echo "Luas Jajar Genjang dengan alas ".$_POST['alas']." dan tinggi".$_POST['tinggi']." adalah :".hitungLuasJajarGenjang($_POST['alas'],$_POST['tinggi']);
              }
        if (isset($_POST['hitungKelilingJajarGenjangBtn'])) {
                echo "Keliling Jajar Genjang dengan sisi a ".$_POST['sisi1']."dan".$_POST['sisi2']."adalah :  ".hitungKelilingJajarGenjang($_POST['sisi1'],$_POST['sisi2']);
              }

           ?>

        </form> 
      </div>
    </div>
  </body>
  </html>










  