<!doctype html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>

<?php
//$post_id   = $_POST["post_idvak"];
//$username  = $_POST["username"];
//$berichten = $_POST["berichtenvak"];
//var_dump($post_id);
require_once  "connect.php";
$users = $conn->prepare("
                                select *
                                from   newsfeed
                                where  username = :username
                              ");
$users->execute([":username" => $username]);
//$users = $user->fetch(PDO::FETCH_ASSOC);
echo "<table>";
foreach($users as $user)
{
    echo "<tr>";
    echo "<td>" . $user["post_idvak"]      ."</td>";
    echo "<td>" . $user["username"]     ."</td>";
    echo "<td>" . $user["berichtenvak"]    ."</td>";
    echo "</tr>";
}
echo "</table><br />";
echo "<form action='opdr10.4.php' method='post'>";
echo "<input type='hidden' name='username' value=$username>";
echo "<input type='hidden' name='verwijdervak' value='0'>";
echo "<input type='checkbox' name='verwijdervak' value='1'>";
echo "Verwijder dit bericht. <br />";
echo "<input type='submit'>";
echo "</form>";
?>

</body>
</html>