<?php

if (empty($_POST["name"])) {
    die("O campo 'Nome' é obrigatório!");
}

if ( ! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    DIE("Um email válido é obrigatório!");
}

if (strlen($_POST["password"]) < 8) {
    die("A password deve conter, pelo menos, 8 caracteres!");
}

if ( ! preg_match("/[a-z]/i", $_POST["password"])) {
    die("A password deve conter, pelo menos, uma letra!");
}

if ( ! preg_match("/[0-9]/", $_POST["password"])) {
    die("A password deve conter, pelo menos, um número!");
}

if ($_POST["password"] !== $_POST["password_confirmation"]) {
    die("As passwords devem ser iguais!");
}

$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

$mysqli = require __DIR__ . "/database.php";

$sql = "INSERT INTO userinfo (name, email, password_hash)
        VALUES  (?, ?, ?)";

$stmt = $mysqli->stmt_init();

if ( ! $stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}

$stmt->bind_param("sss", $_POST["name"], $_POST["email"], $password_hash);

if ($stmt->execute()) {
    
    header("Location: signup-success.html");
    exit;
    
} else {

    if ($mysqli->errno === 1062) {
        die("O email introduzido já está registado...");
    } else {
        die($mysqli->error . " " . $mysqli->errno);
    }
}

?>