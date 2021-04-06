<?php 
$angka =[
[1,2,3],
[4,5,6],
[7,8,9]
];
?>

<?php foreach ($angka as $key) : ?>
	<?php foreach ($key as $b) :?>
		<?= $b; ?>
	<?php endforeach; ?>	
<?php endforeach; ?>