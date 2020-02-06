<?php

// création de l'objet PDO

$pdo = new PDO('mysql:host=127.0.0.1;dbname=classicmodels','root', '');

// préparation de la requete

$query = $pdo->prepare('SELECT lastName, FirstName, jobTitle FROM employees');

//exécution de la requete

$query->execute();

$employees=$query->fetchAll();

echo json_encode($employees);
$pdo = null;