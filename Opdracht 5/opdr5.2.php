<!doctype html>
<html lang="en">
<head>
    <title>Opdracht 5.2</title>
</head>
<body>

<?php
require_once "connect.php";
$usernamePOST          = $_POST["usernamevak"];
$passwordPOST          = $_POST["passwordvak"];
$sql = $conn->prepare("
                               insert into users(username, password) values
                             (:username, :password)");
$sql->execute([
    "username"         => $usernamePOST,
    "password"        => $passwordPOST
]);
$users = $conn->prepare("
                                    select id,
                                           username,
                                           password,
                                           created_at
                                    from   users
                                    ");
$users->execute();
?>

</body>
</html>