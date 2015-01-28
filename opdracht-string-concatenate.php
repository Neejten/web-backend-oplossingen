<?php
	$voornaam	=	'Nathan';
	$familienaam	=	'De Mol';

	$volledigeNaam	=	$voornaam. ' ' .$familienaam;

	$aantalKarakters	=	strlen($volledigeNaam)
?>

<!Doctype>
<html>
	<head>
	
	</head>
	<body>
		<p>Mijn volledige naam is: <?= $volledigeNaam ?></p>
		<p>Het aantal karakters in <?= $volledigeNaam ?> is: <?= $aantalKarakters ?> </p>
	</body>
</html>