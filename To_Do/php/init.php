<?php

	session_start();

	if (empty($_POST)) {
		$message 	= 	'Voeg je eerste TO DO toe.';
		$display	=	'display';
	}

	else if ($_POST['newToDo'] != "")  {

		if (!isset($_SESSION['newToDo'])) {
		    $_SESSION['newToDo'] = array();
		} 

		$toDoList = htmlentities($_POST['newToDo'], ENT_QUOTES, 'UTF-8');

		array_push($_SESSION['newToDo'], $toDoList);

	} else {

		if ($_POST['deleteTodo'] != "")  {

			$deleteList = htmlentities($_POST['deleteTodo'], ENT_QUOTES, 'UTF-8');

			$key = array_search($deleteList,$_SESSION['newToDo']);
			
			if($key!==false){
			    unset($_SESSION['newToDo'][$key]);
			}

		} else if ($_POST['deleteTodoBack'] != "")  {

			$deleteList2 = htmlentities($_POST['deleteTodoBack'], ENT_QUOTES, 'UTF-8');

			$key4 = array_search($deleteList2,$_SESSION['toggleTodo']);
			
			if($key4 !==false){
			    unset($_SESSION['toggleTodo'][$key4]);
			}

		} else if ($_POST['toggleTodo'] != "")  {

			if (!isset($_SESSION['toggleTodo'])) {
			    $_SESSION['toggleTodo'] = array();
			}

			$toggleList = htmlentities($_POST['toggleTodo'], ENT_QUOTES, 'UTF-8');

			$key2 = array_search($toggleList,$_SESSION['newToDo']);
			
			if($key2!==false){
			    unset($_SESSION['newToDo'][$key2]);
			}

			array_push($_SESSION['toggleTodo'], $toggleList);

		} else if ($_POST['toggleTodoBack'] != "")  {

			if (!isset($_SESSION['toggleTodoBack'])) {
			    $_SESSION['toggleTodoBack'] = array();
			}

			$toggleListBack = htmlentities($_POST['toggleTodoBack'], ENT_QUOTES, 'UTF-8');

			$key3 = array_search($toggleListBack,$_SESSION['toggleTodo']);
			
			if($key3!==false){
			    unset($_SESSION['toggleTodo'][$key3]);
			}

			array_push($_SESSION['newToDo'], $toggleListBack);

		} else {
			$message	=	'Niks te doen?';
			$display	=	'display';
		}

	}

	foreach ($_SESSION['newToDo'] as $listItem) {
    	$newForm[] = "
    	<li><form action='" . $_PHP_SELF . "' method='POST'>
    		<button title='status wijzigen' name='toggleTodo' value=" . $listItem . 
    		" class='status not-done'></button>" . $listItem . 
    		"<button title='Verwijderen' name='deleteTodo' class='delete' value='" . $listItem . 
    		"'>Verwijder</button>
    	</form></li>";
	}

	foreach ($_SESSION['toggleTodo'] as $toggleItem) {
    	$newForm2[] = "
    	<li><form action='" . $_PHP_SELF . "' method='POST'>
    		<button title='status wijzigen' name='toggleTodoBack' value=" . $toggleItem . 
    		" class='status done'></button>" . $toggleItem . 
    		"<button title='Verwijderen' name='deleteTodoBack' class='delete' value='" . $toggleItem . 
    		"'>Verwijder</button>
    	</form></li>";
	}

	//session_unset();
?>
