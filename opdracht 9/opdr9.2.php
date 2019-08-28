<!doctype html>
<html lang="en">
<head>
    <title>Opdracht 9.2</title>
</head>
<body>

<h1>Welkom bij ons news feed dinges</h1>

<?php
$post_idPOST  = $_POST ["post_idvak"];
$usernamePOST = $_POST ["usernamevak"];
$berichtenPOST = $_POST ["berichtenvak"];
require_once "connect.php";
$sql = $conn->prepare("                            
                             INSERT INTO newsfeed 
                             VALUES (:post_id, :username, :berichten)
                            ");
$sql->execute([
    "post_id" => $post_idPOST,
    "username" => $usernamePOST,
    "berichten" => $berichtenPOST
]);
require_once "Opdr9.3.php";
?>

</body>
</html>