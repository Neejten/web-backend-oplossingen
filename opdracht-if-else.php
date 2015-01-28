<?php
	$jaartal	=	2016;

	if ($jaartal%4	== 0 && $jaartal%100 !=0 || $jaartal%400 == 0)
		{
			$schrikkeljaar	=	'is een schrikkeljaar';
		}
	else {
			$schrikkeljaar	=	'is geen schrikkeljaar';
		}

	$aantalSeconden	=	221108521;

	$aantalMinuten	=	round($aantalSeconden/60);
	$aantalUren		=	round($aantalMinuten/60);
	$aantalDagen	=	round($aantalUren/24);
	$aantalWeken	=	round($aantalDagen/7);
	$aantalMaanden	=	round($aantalDagen/31);
	$aantalJaren	=	round($aantalMaanden/12);
	
?>

<!Doctype>
<html>
	<head>
	
	</head>
	<body>
	<h1>Deel 1</h1>
		<p>Het jaar "<?= $jaartal ?>"" <?= $schrikkeljaar?>.</p>
	</body>
	<h1>Deel 2</h1>
		<p>In <?= $aantalSeconden ?> seconden gaan: </p>
		<ul>
			<li><?= $aantalMinuten ?> minuten</li>
			<li><?= $aantalUren ?> uren</li>
			<li><?= $aantalDagen ?> dagen</li>
			<li><?= $aantalWeken ?> weken</li>
			<li><?= $aantalMaanden ?> maanden</li>
			<li><?= $aantalJaren ?> jaren</li>
		</ul>
</html>