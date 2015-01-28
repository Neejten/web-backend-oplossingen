<?php
	$getallen	=	array(8,7,8,3,2,1,2,4);

	$getallenUniek	=	array_unique($getallen);

	$gesorteerd	=	$getallenUniek;
	rsort($gesorteerd);

?>

<!Doctype>
<html>
	<head>
		<title>opdracht array fucties deel 3</title>
	</head>
	<body>
		<h1>Deel 3</h1>
		<p>De getallen in de array $getallen zijn:</p>
		<ul>
			<?php foreach ($getallen as $key => $value): ?>
				<li>[<?= $key ?>] : <?= $value ?> </li>
			<?php endforeach?>
		</ul>

		<p>Zonder duplicaten geeft dit:</p>
		<ul>
			<?php foreach ($getallenUniek as $key => $value): ?>
				<li>[<?= $key ?>] : <?= $value ?> </li>
			<?php endforeach?>
		</ul>

		<p>Als je dan sorteert van groot naar klein:</p>
		<ul>
			<?php foreach ($gesorteerd as $key => $value): ?>
				<li>[<?= $key ?>] : <?= $value ?> </li>
			<?php endforeach?>
		</ul>

	</body>
</html>