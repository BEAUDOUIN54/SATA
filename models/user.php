<?php

//	Ajoute un utilisateur
function addUser(string $email, string $username, string $password): void
{
//	Connexion à la base de données
require '../controllers/database.php';
    
//	Ajout de l'utilisateur
$query = 'INSERT INTO user (email, username, hashedPassword) VALUES (:email, :username, :hashedPassword)';
$sth = $dbh->prepare($query);
$sth->bindValue(':email', trim($email), PDO::PARAM_STR);
$sth->bindValue(':username', trim($username), PDO::PARAM_STR);
$sth->bindValue(':hashedPassword', password_hash(trim($password), PASSWORD_BCRYPT), PDO::PARAM_STR);
$sth->execute();
}


//	Récupère un utilisateur
function getUsername($userId)
{
//	Connexion à la base de données
require '../controllers/database.php';
    
//	Récupération du pseudo de l'utilisateur enregistré
$query = 'SELECT username from user WHERE id = :id';

$sth = $dbh->prepare($query);
$sth->bindValue(':id', $userId, PDO::PARAM_INT);
$sth->execute();
$username = $sth->fetch();
return $username;
}


//	Récupère un utilisateur via son adresse électronique
function getUserByEmail(string $username): ?array
{
//	Connexion à la base de données
require '../controllers/database.php';

    //	Récupération de l'utilisateur
    // pour sélectionner 1 seul email pour 1 utilisateur
    $query = 'SELECT id, hashedPassword FROM user WHERE username = :username';
    $sth = $dbh->prepare($query);
    // 1er paramètre : Identifiant du paramètre, 2ème : La valeur à associer au paramètre, 3ème : Type de données explicite pour le paramètre utilisant les constantes
    $sth->bindValue(':username', trim($username), PDO::PARAM_STR);
    $sth->execute();
    $user = $sth->fetch();

    // ternaire, 1ère partie = condition, 2ème = si vrai ($user), 3ème = si faux (null)
    return ($user !==false) ? $user : null;
}   


//	Ajoute un événement au calendrier
function addEvent(string $date, string $start, string $title, string $comment): void
{
//	Connexion à la base de données
require '../controllers/database.php';
    
//	Ajout de l'événement
$query = 'INSERT INTO events (date, start, title, comment) VALUES (:date, :start, :title, :comment)';
$sth = $dbh->prepare($query);
$sth->bindValue(':date', trim($date), PDO::PARAM_STR);
$sth->bindValue(':start', trim($start), PDO::PARAM_STR);
$sth->bindValue(':title', trim($title), PDO::PARAM_STR);
$sth->bindValue(':comment', trim($comment), PDO::PARAM_STR);
$sth->execute();
}




/*
require '../controllers/database.php';
$date = DateTime::createFromFormat('d/m/Y', $_POST['date']);
$sth = $dbh->prepare('INSERT INTO events (:date, :start, :title, :comment)'); // $db étant une instance de PDO
$sth->bindValue(':date', $date->format('Y-m-d'), PDO::PARAM_STR);
$sth->bindValue(':date', trim($date), PDO::PARAM_STR);
$sth->bindValue(':start', trim($start), PDO::PARAM_STR);
$sth->bindValue(':title', trim($title), PDO::PARAM_STR);
$sth->bindValue(':comment', trim($comment), PDO::PARAM_STR);
$sth->execute();



//	Ajoute un événement au calendrier

function addEvent(string $date, string $start, string $title, string $comment): void
{
//	Connexion à la base de données
require '../controllers/database.php';
$date = DateTime::createFromFormat('d/m/Y', $_POST['date']);
//	Ajout de l'événement
$query = 'INSERT INTO events (date, start, title, comment) VALUES (:date, :start, :title, :comment)';
$sth = $dbh->prepare($query);
$sth->bindValue(':date', $date->format('Y-m-d'), PDO::PARAM_STR);
$sth->bindValue(':start', trim($start), PDO::PARAM_STR);
$sth->bindValue(':title', trim($title), PDO::PARAM_STR);
$sth->bindValue(':comment', trim($comment), PDO::PARAM_STR);
$sth->execute();
}*/