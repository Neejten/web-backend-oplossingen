<?php
	$dierenArray = array('aap','papegaai', 'ibis', 'slang', 'gnoe', 'eland', 'dromedaris', 'salamander', 'regenworm', 'maki');

	$dierenArrayAlt[1] = 'aap';
	$dierenArrayAlt[2] = 'papegaai';
	$dierenArrayAlt[3] = 'ibis';
	$dierenArrayAlt[4] = 'slang';
	$dierenArrayAlt[5] = 'gnoe';
	$dierenArrayAlt[6] = 'eland';
	$dierenArrayAlt[7] = 'dromedaris';
	$dierenArrayAlt[8] = 'salamander';
	$dierenArrayAlt[9] = 'regenworm';
	$dierenArrayAlt[10] = 'maki';

	$getallen = array(1,2,3,4,5);
	$getallenProd = array_product($getallen);

	foreach ($getallen as $key => $value) {
		if ($value%2 == 1)
		 {
		 	$oneven[] = $value;
		 }
	}

	$getallenOmg = array_reverse($getallen);
	foreach ($getallen as $key => $value){
		foreach ($getallenOmg as $id => $number) {
			if ($key == $id){
				$somZelfdeIndex[] = $value+$number;
			}
		}
	}

?>

<!Doctype>
<html>
	<head>
	
	</head>
	<body>
		<h1>Deel 1</h1>
			<pre><?php var_dump($dierenArray)?></pre>
			<pre><?php var_dump($dierenArrayAlt)?></pre>

		<h2>Deel 2</h2>
		<p>De getallenArray bevat de getallen:</p>
		<ul>
			<?php foreach ($getallen as $key => $value): ?>
				<li><?= $value?></li>
			<?php endforeach ?>
		</ul>
		<p>Het product van de getallen in getallenArray is: <?= $getallenProd ?>.</p>
		<p>De oneven getallen in getallenArray zijn:</p>
		<ul>
			<?php foreach ($oneven as $key => $value): ?>
				<li><?= $value?></li>
			<?php endforeach ?>
		</ul>
		<p>De som van de getallen uit getallenArray en getallenArray omgekeerd met dezelfde index is:</p>
		<ul>
			<?php foreach ($somZelfdeIndex as $key => $value): ?>
				<li> <?= $value?> </li>
			<?php endforeach ?>
		</ul>
	</body>
</html>