<!DOCTYPE html>
<html>
<head>

    <title> 
    </title>
     <link rel="stylesheet" type="text/css" href="stel.css">
        <script type="coba.js"></script>
</head>
<body>
<div class="wrapper">
    <div class="container">
        <h1>Pohon Bintang</h1>
        
        <form class="form" method="post" action="input_form.php">
           
      <?php
      $bintang = $_POST['bintang'] ; 
      for ($i=1; $i<=$bintang;$i++){  
           for($j=1; $j<=$i;$j++){  
                echo "*"; 
              }
           echo '<br/>';  
      }  
 ?>  
        <button>Back</button>
           
        </form>
    </div>
</body>
</html>