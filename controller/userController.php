<?php 

    require_once("../model/user_db.php");

    if (isset($_POST["login"])) 
    {
        $email = $_POST["email"];
        $password = $_POST["password"];
        
        //Validation coté back
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            header("location:login?error=1");
        }

        $user = login($email, $password)->fetch();
        if ($user["email"]) {
            header("location:admin");
        }
        else 
        {
            header("location:login?error=1");
        }
    }
?>