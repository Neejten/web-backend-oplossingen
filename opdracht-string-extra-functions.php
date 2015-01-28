<?php
	$fruit			=	'kokosnoot';
	$lengteFruit	=	strlen($fruit);
	$zoekO			=	1+ strpos($fruit, 'o');

	$fruit2			=	'ananas';
	$zoekLaatsteA	=	1+ strrpos($fruit2, 'a');
	$hoofdletters	=	strtoupper($fruit2);

	$lettertje		= 	'e';
	$cijfertje		=	3;
	$langsteWoord	= 	'zandzeepsodemineralenwatersteenstralen';
	$vervang		=	str_replace($lettertje, $cijfertje, $langsteWoord);
?>

<!Doctype>
<html>
	<head>
	
	</head>
	<body>
	<h1>Deel 1</h1>
		<p>De string <?= $fruit ?> telt <?= $lengteFruit ?> karakters.</p>
		<p>In het woord <?= $fruit ?> staat de eerste letter 'o' op de <?= $zoekO ?>e plaats. </p>
	<h1>Deel 2</h1>
		<p>In het woord <?= $fruit2 ?> staat de laatste letter 'a' op de <?= $zoekLaatsteA ?>e plaats. </p>
		<p>De string <?= $fruit2 ?> ziet er in hoofdletters zo uit: <?= $hoofdletters ?> </p>
	<h1>Deel 3</h1>
		<p>Als je in de het woord <?= $langsteWoord ?> alle e's vervangt door drieën, ziet het er zo uit: <?= $vervang ?></p>
	</body>
</html>