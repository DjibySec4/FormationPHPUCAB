<?php 


    require_once("db.php");

    // Permet d'authenfier un utilisateur
    function login($email, $password)
    {
        try {
            $req = "SELECT * FROM users u WHERE u.email='$email' 
            and u.password='$password' limit 0,1";
            return getConnexion()->query($req);;
        } catch (PDOException $error) {
            die("Erreur de connexion à la BD " . $error->getMessage());
        }
    }
?>