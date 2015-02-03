<?php
	$artikels	=	array(
						array(
							'titel' 		=> 'Michael Vanthourenhout zorgt voor eerste gouden plak, Sweeck pakt zilver',
							'datum'			=> '10 maart 1986',
							'inhoud'		=> 'De topfavoriet haalt het in Tabor niet altijd, vraag dat maar aan de junioren en vrouwen. Bij de beloften was Laurens Sweeck de man waar iedereen naar uitkeek, maar door de perikelen rond het dopingonderzoek naar de zogenaamde "ozondokter" was het afwachten hoe de jongeman uit Schriek voor de dag zou komen. Onze 21-jarige landgenoot voelde het na afloop van de openingsronde in ieder geval jeuken en trok in de aanval. De Nederlandse outsider Stan Godrie rook het gevaar en reageerde gezwind. Samen met vier bondgenoten knalde hij het gat op Sweeck dicht: Venturini, Nieuwenhuis, Nipl en onze landgenoten Toon Aerts en medefavoriet Michael Vanthourenhout. ',
							'afbeelding'	=> 'vanthourenhout.jpg',
							'ondertitel'	=> 'Klaas VT',
							),
						array(
							'titel' 		=> 'De Croo over "vuile oorlog" tussen CD&V en N-VA: “Totentrekkerij"',
							'datum'			=> '10 maart 1987',
							'inhoud'		=> 'De Antwerpse CD&V riep militanten deze week in een uitgelekte mail op om via de sociale media vragen te stellen bij de aanhoudende militaire aanwezigheid in de stad. Nochtans gaat het om een beslissing van de eigen federale regering. De mail stelt expliciet dat het kabinet van vicepremier Kris Peeters weet heeft van het initiatief en er nadien de pers over zal "tippen". "Achterbaks", vindt N-VA. ',
							'afbeelding'	=> 'de_croo.jpg',
							'ondertitel'	=> 'Alexander De Croo',
							),
						array(
							'titel' 		=> 'Is "Jihadi John", de beul uit de IS-video\'s, dood?',
							'datum'			=> '10 maart 1988',
							'inhoud'		=> 'Eind september 2014 had de FBI al verkondigd te weten wie Jihadi John was. Verdachte nummer 1 was de voormalige rapper Abdel-Majed Abdel Bary door zijn Britse accent. Door zijn gruwelijke daden en verschijningen in onthoofdingsfilmpjes werd er een prijs van 10.000.000 dollar op zijn hoofd gezet, dat is evenveel als bij de IS-baas Abu Bakr al Baghdadi.',
							'afbeelding'	=> 'jihadi.jpg',
							'ondertitel'	=> 'jihad',
							)

		);
	
//var_dump( $_GET );

	// Configuratie-variabelen
	$individueelArtikel		=	false;
	$nietBestaandArtikel	=	false;

	// Controleren of de get-variabele ID geset is om een individueel artikel op te halen
	if ( isset ( $_GET['id'] ) )
	{
		$id = $_GET['id'];

		// Controleren of de opgevraagde key (=id) bestaat in de array $artikels
		if ( array_key_exists( $id , $artikels ) )
		{
			$artikels 			= 	array( $artikels[$id] );
			$individueelArtikel	=	true;
		}
		else
		{
			$nietBestaandArtikel	=	true;
		}		
	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<?php if ( !$individueelArtikel ): ?>
		<title>Oplossing get: deel1</title>
	<?php elseif ( $nietBestaandArtikel ): ?>
		<title>Oplossing get: deel1 - Het artikel met id <?php echo $id ?> bestaat niet</title>
	<?php else: ?>
		<title>Oplossing get: deel1. Artikel: <?php echo $artikels[0]['titel'] ?></title>
	<?php endif ?>
		
	<style>
		body
		{
			font-family:"Segoe UI";
			color:#423f37;
		}

		.container
		{
			width:	1024px;
			margin:	0 auto;
		}

		img
		{
			max-width: 100%;
		}

		.multiple
		{
			float:left;
			width:288px;
			margin:16px;
			padding:16px;
			box-sizing:border-box;
			background-color:#EEEEEE;
		}

		.multiple:nth-child(3n+1)
		{
			margin-left:0px;
		}

		.multiple:nth-child(3n)
		{
			margin-right:0px;
		}

		.single img
		{
			float:right;
			margin-left: 16px;
		}


	</style>
</head>
<body>

	<h1>Oplossing get: deel1</h1>

	<?php if ( !$nietBestaandArtikel ): ?>
		<div class="container">
			<?php foreach ( $artikels as $id => $artikel ): ?>
				<article class="<?php echo ( !$individueelArtikel ) ? 'multiple': 'single' ; ?>">
					<h1><?php echo $artikel['titel'] ?></h1>
					<p><?php echo $artikel['datum'] ?></p>
					<img src="img/<?php echo $artikel['afbeelding'] ?>" alt="<?php echo $artikel['ondertitel'] ?>">
					<p><?php echo ( !$individueelArtikel ) ? str_replace ( "\r\n", "</p><p>", substr( $artikel['inhoud'], 0, 50 ) ) . '...': str_replace ( "\r\n", "</p><p>",$artikel['inhoud'] ) ; ?></p>
					<?php if ( !$individueelArtikel ): ?>
						<a href="opdracht-get.php?id=<?php echo $id ?>">Lees meer</a>
					<?php endif ?>
				</article>
			<?php endforeach ?>
		</div>
	<?php else: ?>
		<p>Het artikel met id <?php echo $id ?> bestaat niet. Probeer een ander artikel.</p>
	<?php endif ?>

</body>
</html>