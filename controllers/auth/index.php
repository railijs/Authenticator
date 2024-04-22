<?php
auth();


require "../core/Database.php";
$config = require ("../config.php");

$query = "SELECT * FROM users";
$params = [];

if (isset($_GET["id"]) && $_GET["id"] != "") {
$id = $_GET["id"];
$query .= " WHERE id = :id";
$params = [":id" => $id];
}

if (isset($_GET["email"]) && $_GET["email"] != "") {
    $id = $_GET["email"];
    $query .= " WHERE email = :email";
    $params = [":email" => $email];
    }


$db = new Database($config);
    
$user = $db -> execute($query, $params) 
             -> fetch();

$title = "Email";             

require "../views/auth/index.view.php";