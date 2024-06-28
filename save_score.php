<!doctype html>

<html lang="fr">

<head>

  <meta charset="utf-8">

  <title>Titre de la page</title>

  <link rel="stylesheet" href="style.css">

  <script src="script.js"></script>

</head>

<body>
<h1>Veuillez confirmer les données ci-dessous :</h1>
<button onclick="window.location='index.html'">Revenir au jeu →</button>
</body>

</html>

<?php
include 'connexion.php';

$score = round(10000 / $_POST['tentative'], 0);

echo 'username : '.$_POST["username"].'<br>';
echo $score;

$sql = "INSERT INTO scores(username, score) VALUES (:username, :score)";

$statement = $connexion->prepare($sql);
$statement->bindParam('username', $_POST["username"]);
$statement->bindParam('score', $score);
$statement->execute();

