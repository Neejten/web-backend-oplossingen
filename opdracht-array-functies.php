<?php
	$dieren = array('aap','papegaai', 'ibis', 'slang', 'gnoe', 'eland', 'dromedaris', 'salamander', 'regenworm', 'maki');

	$aantalDieren	=	count($dieren);

		if (array_search('ibis', $dieren))
		{
			$gezochtDier = 'gevonden';
		}
		else {
			$gezochtDier = 'niet gevonden';
		}
?>

<!Doctype>
<html>
	<head>
		<title>opdracht array functies</title>
	</head>
	<body>
		<h1>Deel 1</h1>
			<p>De array $dieren bevat de volgende dieren:</p>	
			<ul>
				<?php foreach($dieren as $key => $value): ?>
					<li>[<?= $key ?>] : <?= $value ?></li>
				<?php endforeach ?>
			</ul>
			<p>Dit zijn <?= $aantalDieren ?> dieren.</p>
			<p>Het gezochte dier is <?= $gezochtDier ?> in de dieren array.</p>	
	</body>
</html>