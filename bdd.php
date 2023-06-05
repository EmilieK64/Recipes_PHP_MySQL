<?php

$dsn = 'mysql:dbname=we_love_food;host=127.0.0.1';
$user = 'root';
$password='root';
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING];
// On se connecte à SQL
// en instanciant un objet, à partir de la classe PDO
$pdo = new PDO($dsn, $user, $password);

try
{
	$db = new PDO('mysql:host=localhost;dbname=we_love_food;charset=utf8', 'root', 'root');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

// Si tout va bien, on peut continuer

// // Ecriture de la requête
// $sqlQuery = 'INSERT INTO recipes(title, recipe, author, is_enabled) VALUES (:title, :recipe, :author, :is_enabled)';

// // Préparation
// $insertRecipe = $db->prepare($sqlQuery);

// // Exécution ! La recette est maintenant en base de données
// $insertRecipe->execute(
//     [
//         'title' => 'Salade niçoise',
//         'recipe' => 'Etape 1 : ...',
//         'author' => 'michel.andre@exemple.com',
//         'is_enabled' => true,
//     ]
// );

// On récupère tout le contenu de la table recipes
$sqlQuery = 'SELECT * FROM recipes';
$recipesStatement = $db->query($sqlQuery);
$recipes = $recipesStatement->fetchAll();


