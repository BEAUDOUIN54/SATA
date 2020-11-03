<?php

    session_start();

	unset($_SESSION['identification']);

	//	Redirection vers la page d'accueil
	header('Location: home.php');

	exit;
