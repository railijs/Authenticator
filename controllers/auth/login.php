<?php
guest();

require "../core/Validator.php";
require "../core/Database.php";
$config = require ("config.php");

$params = [];

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $db = new Database($config);

    $errors = [];

    if(!Validator::email($_POST["email"])) {
        $errors["email"] = "Nepareizi ievadits email";
    }

    if(empty($errors)) {
        $query = "SELECT * FROM users WHERE email = :email";
        $params = [
            ":email" => $_POST["email"],
            ];
            $user = $db->execute($query, $params)->fetch();
            if(!$user || !password_verify($_POST["password"], $user["password"])) {
                $errors["email"] = "Parole vai E-mail nesakrit";
            }

            if(empty($errors)) {
                $_SESSION["user"] = true;
                $_SESSION["email"] = $_POST["email"];

                header("Location: /");
                die();
            }
    }
}

unset($_SESSION["message"]);

$title = "login";
require "../views/auth/login.view.php";