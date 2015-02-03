<?php
	$getallen	=	array();
	$getal	=	100;
	 for ($i=0; $i <= $getal ; ++$i) { 

	 	$getallen[]	=	$i;

	 }

	 $reeksGetallen	=	implode(',', $getallen);

	 foreach ($getallen as $key => $value) {
	 	if ($value%3 == 0 && $value >= 40 && $value <=80){
	 		$mid_range[] = $value;
	 	}
	 }

	 $deelbaar	=	implode(',', $mid_range);
?>

<!Doctype>
<html>
	<head>
		<title>opdracht for </title>
	</head>
	<body>
		<?= $reeksGetallen ?>
		<?= $deelbaar ?>
	</body>
</html>