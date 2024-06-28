<?php
    try {
        $connexion = new PDO('mysql:host=localhost;dbname=game_db', 'root');
    } catch (PDOException $e) {
        echo "Echec de la connexion à la base de données";
    }