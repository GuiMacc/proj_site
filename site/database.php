<?php
$servidor = "localhost";
$userBaseDados = "site_proj_user";
$passwordBaseDados = "guijojo14";
$baseDados = "site_proj_tec";

$mysqli = new mysqli($servidor, $userBaseDados, $passwordBaseDados, $baseDados);

if ($mysqli->connect_errno) {
    die("Connection error: " . $mysqli->connect_error);
}

return $mysqli;
?>