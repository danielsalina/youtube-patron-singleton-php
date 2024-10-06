<?php

require 'vendor/autoload.php';

use Database\DatabaseConnection;

// Obtener la única instancia de la conexión a la base de datos
$dbConnection1 = DatabaseConnection::getInstance();
$pdo1 = $dbConnection1->getConnection();

// Obtener nuevamente la instancia, será la misma
$dbConnection2 = DatabaseConnection::getInstance();
$pdo2 = $dbConnection2->getConnection();

// $db1 = DatabaseConnection::getInstance();
// $db2 = clone $db1; // Aquí estarías creando una nueva instancia clonada

// $db1 = DatabaseConnection::getInstance();
// $serialized = serialize($db1);
// $db2 = unserialize($serialized); // Aquí estarías creando una nueva instancia deserializada


// Verificamos que ambas variables contienen la misma instancia
if ($dbConnection1 === $dbConnection2) {
    echo "Las dos conexiones son iguales.\n";
} else {
    echo "Las conexiones son diferentes.\n";
}
