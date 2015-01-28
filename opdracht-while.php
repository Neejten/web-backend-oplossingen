<?php

	$getal	=	0;

	while ( $getal <= 100) {
		$getallen[] = $getal;
		++$getal;
	}

	$getallenGescheiden	=	implode(', ', $getallen);

	$getal 	=	0;

	while ( $getal < 100) {
		if ($getal%3 == 0 && $getal > 40 && $getal < 80) {
			$getallen2[] = $getal;
		}
		++$getal;
	}

	$mid_range = implode(',', $getallen2);
?>

<!Doctype>
<html>
	<head>
		<title>opdracht while</title>
	</head>
	<body>
		<p>De getallen van 1-100, gescheiden door komma en spatie zijn:</p>
		<p><?= $getallenGescheiden ?></p>

		<p>De getallen tussen 40 en 80 die deelbaar zijn door 3 zijn:</p>
		<p><?= $mid_range ?></p>
	</body>
</html>