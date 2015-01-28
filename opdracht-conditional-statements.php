<?php
	$dagNummer	=	1;

	if ($dagNummer == 1) {
		$dag 	=	'maandag';
	}

	if ($dagNummer == 2) {
		$dag 	=	'dinsdag';
	}

	if ($dagNummer == 3) {
		$dag 	=	'woensdag';
	}

	if ($dagNummer == 4) {
		$dag 	=	'donderdag';
	}

	if ($dagNummer == 5) {
		$dag 	=	'vrijdag';
	}

	if ($dagNummer == 6) {
		$dag 	=	'zaterdag';
	}

	if ($dagNummer == 7) {
		$dag 	=	'zondag';
	}

	$dagHoofdletters	=	strtoupper($dag);
	$dagHoofdlettersZonderA	=	str_replace('A', 'a', $dagHoofdletters);

	$laatsteAPos    =   strrpos( $dagHoofdletters, 'A' );
    $laatsteA 	        =	substr_replace( $dagHoofdletters, 'a', $laatsteAPos, 1 );
    if ($laatsteAPos == 0) {
    	$laatsteA 	= $dagHoofdletters;	
    }

	
?>

<!Doctype>
<html>
	<head>
	
	</head>
	<body>
		<p>De <?= $dagNummer ?>e dag van de week is <?= $dag ?>.</p>
		<p>De <?= $dagNummer ?>e dag van de week in hoofdletters is <?= $dagHoofdletters ?>.</p>
		<p>De <?= $dagNummer ?>e dag van de week in hoofdletters zonder de 'A' is <?= $dagHoofdlettersZonderA ?>.</p>
		<p>De <?= $dagNummer ?>e dag van de week in hoofdletters zonder de laatste 'A' is <?= $laatsteA ?>.</p>
	</body>
</html>