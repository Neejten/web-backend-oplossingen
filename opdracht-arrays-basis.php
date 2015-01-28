<?php

	$dierenArray	= array( 'dolfijn' , 'aap', 'papegaai', 'ibis', 'slang', 'gnoe', 'everzwijn', 'nachtegaal', 'lama', 'adelaar' );
	/*****************
	 ALTERNATIEVE MANIER
	******************

	 $dierenArrayAlt[1]	= 'dolfijn';
	 $dierenArrayAlt[2]	= 'aap';
	 $dierenArrayAlt[3]	= 'papegaai';
	 $dierenArrayAlt[4]	= 'ibis';
	 $dierenArrayAlt[5]	= 'slang';
	 $dierenArrayAlt[6]	= 'gnoe';
	 $dierenArrayAlt[7]	= 'everzwijn';
	 $dierenArrayAlt[8]	= 'nachtegaal';
	 $dierenArrayAlt[9]	= 'lama';
	 $dierenArrayAlt[10]	= 'adelaar';
	*/

	 $voertuigenArray = array(	'landvoertuigen' => array( 'auto' , 'bus', 'fiets', 'tank', 'trein' ) , 
	 							'watervoertuigen' => array( 'boot', 'hovercraft', 'jetski', 'surfplank', 'zwembandjes') ,
	 							'luchtvoertuigen' => array( 'vliegtuig', 'helicopter', 'luchtballon', 'raket', ufo ) 
	 						);

	 $getallenArray = array( 1, 2, 3, 4, 5 );

	 $productGetallenArray	=	array_product($getallenArray);

	 foreach ($getallenArray as $value)
	 	{
	 		if ($value % 2 == 1)
	 			{
	 				$onevenGetallen[] = $value;
	 			} 
	 	}

	 $getallenArrayOmgekeerd	=	array( 5, 4, 3, 2, 1);

	 foreach ($getallenArray as $key => $value) {
	 	foreach ($getallenArrayOmgekeerd as $id => $val)
	 		{
	 		if($id == $key) {
	 			$som[] = $value + $val;
	 	    }
	 }}
?>

<!Doctype>
<html>
	<head>
		<title>opdracht arrays basis</title>
	</head>
	<body>
		<h1>Deel 1</h1>

			<pre><?= var_dump($dierenArray)?></pre>
			<!-- <pre><?= var_dump($dierenArrayAlt)?></pre> -->
			<pre><?= var_dump($voertuigenArray)?></pre>

		<h1>Deel 2</h1>

		<p>De getallen van getallenArray zijn:</p>
			<?php foreach ($getallenArray as $key => $value): ?>
           	 	<li>[<?= $key ?>]: <?= $value ?></li>
         	<?php endforeach ?>

		<p>Het product van alle getallen uit de getallenArray is: <?= $productGetallenArray ?></p>

		<p>De oneven getallen uit getallenArray zijn:</p>
			<?php foreach ($onevenGetallen as $key => $value): ?>
           	 	<li>[<?= $key ?>]: <?= $value ?></li>
        	<?php endforeach ?>

        <p>De getallenArrayOmgekeerd is:</p>
        	<ul>
        		<?php foreach ($getallenArrayOmgekeerd as $key => $value): ?>
        			<li>[<?=$key?>] : <?= $value ?></li>
        		<?php endforeach ?>
        	</ul>

        <p>De som van de getallen met dezelfde index uit beide arrays is:</p>
        	<ul>
        		<?php foreach ($som as $key => $value): ?>
        			<li>[<?= $key ?>]: <?= $value ?></li>
        		<?php endforeach ?>
        	</ul>
	</body>
</html>