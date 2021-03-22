<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<select name="">
		<?php 
			for ($i=1990; $i <=2021 ; $i++) {
			if ($i=="1998") {
					echo "<option value=$i selected>1998</option>";}
					else{
					echo "<option value=$i>$i</option>";
					}}
				 ?>		
	</select>

		<select name="4">
		<?php 
			for ($i=1990; $i <=2021 ; $i++) { ?>
				<option value="<? echo $i; ?>" <?php if($i==1998){ echo "selected";} ?> > <?=$i;
				?>
				</option>
				
		<?php  } ?>	
		 ?>	
		</select>
</body>
</html>