<?php
	function berekenSom ($getal1, $getal2) {
		$som 	=	$getal1 + $getal2;
		return $som;
	}

	function berekenProduct ($getal1, $getal2) {
		$product	=	$getal1 * $getal2;
		return $product;
	}

	function isEven($getal) 
		{
		if ($getal%2 > 0)
			{
				return false;
			}
			
			return true;

	}

	function stringBewerking($string) {
		$bewerkt['hoofdletters']	=	strtoupper($string);
		$bewerkt['lengte']	=	strlen($string);

		return $bewerkt;
	}

	$getalleke = 3;
	$evenOfOneven	=	isEven($getalleke);

	$string 	=	'Dit is de string die bewerkt wordt.';
	$stringResultaat	=	stringBewerking($string);


?>

<!Doctype>
<html>
	<head>
		<title>Opdracht functies deel 1</title>
	</head>
	<body>
		<p>De som van 4 en 5 is <?php echo berekenSom(5,4)?>. </p>

		<p>Het product van 7 en 4 is <?php echo berekenProduct(7,4)?></p>

		<?php if ( $evenOfOneven ): ?>

			<p>De pariteit van het getal <?php echo $getalleke ?> is even</p>
		<?php else: ?>

			<p>De pariteit van het getal <?php echo $getalleke ?> is oneven</p>
		<?php endif ?>

		<p>De string '<?= $string ?>' in hoofdletters: <? echo $stringResultaat['hoofdletters'] ?></p>
		<p>De string '<?= $string ?>' is <? echo $stringResultaat['lengte'] ?> karakters lang.</p>
	</body>
</html>