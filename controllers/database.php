<?php

//	Connexion à la base de données
    $dbh = new PDO(
        'mysql:host=localhost;dbname=SATA;charset=utf8',
        'root',
        '',
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]
    );