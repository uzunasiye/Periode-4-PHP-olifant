<?php
require_once "connect.php";
$id             = $_POST["idvak"];
$username       = $_POST["usernamevak"];
$password       = $_POST["passwordvak"];
$created_at     = $_POST["created_atvak"];
$rol            = $_POST["rolvak"];
$sql = $conn->prepare
("
        update users set  username        = :username,
                          password        = :password,
                          created_at      = :created_at,
                          rol             = :rol
                          where             username = :username
     ");
$sql->execute
([
    "id"            => $id,
    "username"      => $username,
    "password"      => $password,
    "created_at"    => $created_at,
    "rol"           => $rol
]);
echo "De user is gewijzigd. <br />";
?>