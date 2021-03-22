<?php 
require_once "fungsi_bangun_datar.php";
 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Luas Dan Keliling Bangun Datar</title>
    <link rel="stylesheet" href="bgndatar.css">
   <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
    <div class="bg-img">
      <div class="content">
        <header>Luas dan Keliing Lingkaran</header>
        <form name="formsegitiga" action="" method="POST">
        	<div class="field">

        	<select >
			   <option>Segitiga</option>
			   <option>Lingkaran</option>
			   <option>Jajar Genjang</option>
			</select >
			</div>
          <div class="field">
          	
          
            <input type="number" name="r" required min="0" placeholder="Masukan nilai r">
           
          </div>
         
            <div class="field space">
			 <input type="submit" name="hitungLuasLingkaranBtn" value="Hitung Luas">  
			</div>
			<div class="field space">
			 <input type="submit" name="hitungKelilingLingkaranBtn" value="Hitung Keliling">        	
          </div>
         
         <?php 
          		if (isset($_POST['hitungLuasLingkaranBtn'])) {
          			echo "Luas Lingkaran dengan jari-jari ".$_POST['r']."adalah :".hitungLuasLingkaran($_POST['r']);
          		}
				if (isset($_POST['hitungKelilingLingkaranBtn'])) {
          			echo "Keliling Lingkaran dengan jari-jari ".$_POST['r']."adalah :".hitungKelilingLingkaran($_POST['r']);
          		}

           ?>

           </form> 

          
        
        
       
          
       
        </div>
      </div>
     </body>
</html>