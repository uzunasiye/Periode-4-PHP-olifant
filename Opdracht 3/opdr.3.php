<!doctype html>
<html lang="en">
<head>
   <title>Opdracht 3.1</title>
</head>
<body>

<?php
require_once  "connect.php";
$users = $conn->prepare("
                                    select id,
                                           username,
                                           password,
                                           created_at
                                    from   users
                                    ");
$users->execute();
echo "<table>";
foreach($users as $user)
{
    echo "<ul>";
    echo "<ul>". $user["id"]                       . "</ul>";
    echo "<ul>". $user["username"]                 . "</ul>";
    echo "<ul>". $user["password"]                 . "</ul>";
    echo "<ul>". $user["created_at"]               . "</ul>";
    echo "</ul>";
}
echo "</table>";
?>

</body>
</html>