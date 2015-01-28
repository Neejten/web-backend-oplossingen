<?php

	$dag	=	'';
	$dagNummer = 20;

	switch ($dagNummer) {
		case 1: $dag = 'maandag';
			break;

		case 2: $dag = 'dinsdag';
			break;

		case 3: $dag = 'woensdag';
			break;

		case 4: $dag = 'donderdag';
			break;

		case 5: $dag = 'vrijdag';
			break;

		case 6: $dag = 'zaterdag';
			break;

		case 7: $dag = 'zondag';
			break;
		
		default:
				$dag = 'waarschijnlijk ook 1 van de dagen waarop God de aarde schiep, maar zijn minder belangrijke werk verichtte';
			break;
	}

?>

<!Doctype>
<html>
	<head>
		<title>opdracht switch</title>
	</head>
	<body>
		<p>Dag nummer <?= $dagNummer ?> van de week is <?= $dag ?>.</p>
	</body>
</html>