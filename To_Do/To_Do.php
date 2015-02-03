<?php
	require_once 'php/init.php';
?>

<!Doctype>
<html>
	<head>
		<title>To Do List</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<div class="notodo <?= $display ?>">
			<p><?= $message ?></p>
		</div><!--notodo-->
		
		<h1>Nog te doen:</h1>
			<div class="placeholder">
				<ul>
					<?php foreach ($newForm as $toDO): ?>
						<?= $toDO ?>
					<?php endforeach ?>
				</ul>
			</div><!--placeholder-->

		<h1>Gedaan:</h1>
			<div class="placeholder">
				<ul>
					<?php foreach ($newForm2 as $done): ?>
						<?= $done ?>
					<?php endforeach ?>
				</ul>
			</div><!--placeholder-->

		<form action="<?php $_PHP_SELF; ?>" method="POST">
			<input type="text" name="newToDo"></input>
			<input type="submit" value="VOEG TOE"></input>
		</form>
	</body>
</html>