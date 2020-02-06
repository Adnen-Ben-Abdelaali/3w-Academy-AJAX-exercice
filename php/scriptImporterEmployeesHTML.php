<?php

$pdo = new PDO('mysql:host=127.0.0.1;dbname=classicmodels', 'root', '');

// préparation de la requete 

$query = $pdo->prepare('SELECT lastName, firstName, jobTitle FROM employees');

$query-> execute();

$employees = $query->fetchAll();

$pdo = null;

/*
var_dump($employees[0]);

*/
$employeeLastName = "";
$employeeFirstName = "";
$employeeJObTitle ="";
for($i = 0; $i < count($employees); $i++) {

  $employeeName = "<li> <strong>contact: </strong>" .$employees[$i]["lastName"] ." " .$employees[$i]["firstName"] ."</li>";
  
  $employeeJobTitle = "<li><strong>function: </strong>" .$employees[$i]["jobTitle"] ."</li>";  
  echo "<ul>" .$employeeName  .$employeeJobTitle ."</ul>";
}

