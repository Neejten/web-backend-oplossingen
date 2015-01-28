<?php
	$dieren = array('aap','papegaai', 'ibis', 'slang', 'gnoe', 'eland', 'dromedaris', 'salamander', 'regenworm', 'maki');
	$dieren2 = array('kever', 'roodborstje', 'everzwijn'); 

	$aantalDieren	=	count($dieren);

		if (array_search('ibis', $dieren))
		{
			$gezochtDier = 'gevonden';
		}
		else {
			$gezochtDier = 'niet gevonden';
		}

	asort($dieren);
		foreach ($dieren as $key => $value) {
    			$dierenAlfI[$key]	= $value;	
			}
	asort($dieren);
		foreach ($dieren as $key => $value) {
    			$dierenAlf[]	= $value;	
			}

	$alleDieren	=	array_merge($dieren, $dieren2);
?>

<!Doctype>
<html>
	<head>
		<title>opdracht array functies</title>
	</head>
	<body>
		<h1>Deel 2</h1>
			<p>De array $dieren alfabetisch geordend met behoud van index:</p>	
			<ul>
				<?php foreach($dierenAlfI as $key => $value): ?>
					<li>[<?= $key ?>] : <?= $value ?></li>
				<?php endforeach ?>
			</ul>
			<p>De array $dieren alfabetisch geordend met nieuwe index:</p>	
			<ul>
				<?php foreach($dierenAlf as $key => $value): ?>
					<li>[<?= $key ?>] : <?= $value ?></li>
				<?php endforeach ?>
			</ul>
			<p>Alle dieren samen:</p>	
			<ul>
				<?php foreach($alleDieren as $key => $value): ?>
					<li>[<?= $key ?>] : <?= $value ?></li>
				<?php endforeach ?>
			</ul>

	</body>
</html>