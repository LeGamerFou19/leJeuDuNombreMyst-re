<!doctype html>

<html lang="fr">

<head>

    <meta charset="utf-8">

    <title>Le Jeu du Nombre Mystère</title>

    <link rel="stylesheet" href="style.css">

    <script src=""></script>

</head>

<body>

    <h1 align="center"><u>Le Jeu du Nombre Mystère</u></h1>
    <h2>Bienvenue sur <u><i>Le Jeu du Nombre Mystère</i></u> !</h2> <br>
    <h3>Voici votre score :</h3> <br>
    <p>Nombre de tentatives : <?= $_GET['tentative']; ?> </p><br>
    <h3>Pour enregistrer votre score, complétez les données ci-dessous :</h3>

    <form action="save_score.php" method="post">

        <label for="username">Username :</label><br>
        <input type="text" id="username" name="username" required>
        <input type="hidden" name="tentative" value="<?= $_GET['tentative']; ?>"/>
        <input type="submit" value="Valider">

    </form>

</body>

</html>
