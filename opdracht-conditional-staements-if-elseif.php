<?php
	$number	=	32;

	if ($number >= 0 && $number <= 10)
		{
			$message	=	'ligt tussen 0 en 10';
		}
	elseif ($number >= 11 && $number <= 20)
		{
			$message	=	'ligt tussen 10 en 20';
		}
	elseif ($number >= 21 && $number <= 30)
		{
			$message	=	'ligt tussen 20 en 30';
		}
	elseif ($number >= 31 && $number <= 40)
		{
			$message	=	'ligt tussen 30 en 40';
		}
	elseif ($number >= 41 && $number <= 50)
		{
			$message	=	'ligt tussen 40 en 50';
		}
	elseif ($number >= 51 && $number <= 60)
		{
			$message	=	'ligt tussen 50 en 60';
		}
	elseif ($number >= 61 && $number <= 70)
		{
			$message	=	'ligt tussen 60 en 70';
		}
	elseif ($number >= 71 && $number <= 80)
		{
			$message	=	'ligt tussen 70 en 80';
		}
	elseif ($number >= 81 && $number <= 90)
		{
			$message	=	'ligt tussen 80 en 90';
		}
	elseif ($number >= 91 && $number <= 100)
		{
			$message	=	'ligt tussen 90 en 100';
		}
	else {
			$message	=	'is lager dan 0 of hoger dan 100';	
		}

	$sentence	=	'Het getal' . ' ' . $number . ' ' . $message;
	$reverseSentence	=	strrev($sentence);

	$numberDiv10	=	$number/10;
	$flooredNumber	=	floor($numberDiv10);
	$under	=	10*$flooredNumber;
	$upper	=	10+$under;
?>

<!Doctype>
<html>
	<head>
	
	</head>
	<body>
		<p><?= $sentence?>. </p>
		<p>Omgekeerd ziet dat er als volgt uit: <?= $reverseSentence ?>.</p>
		<h1>Of met veel minder code:</h1>
		<p>Het nummer <?= $number ?> ligt tussen <?= $under ?> en <?= $upper ?></p>
	</body>
</html>