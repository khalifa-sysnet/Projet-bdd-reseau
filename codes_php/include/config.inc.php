<?php
// Fichier de configuration 

// Paramètres de connexion à la base de données
define('DB_HOST', 'postgresql-mebarki.alwaysdata.net');
define('DB_PORT' , '5432');
define('DB_NAME', 'mebarki_dbetu');
define('DB_USER', 'mebarki');
define('DB_PASSWORD', 'phpPgAdmin');

$db = new PDO("pgsql:host=".DB_HOST.";port=".DB_PORT.";dbname=".DB_NAME.";user=".DB_USER.";password=".DB_PASSWORD);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


// Démarrage de la session
session_start();
?>
