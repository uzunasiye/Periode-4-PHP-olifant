<!doctype html>
<html lang="en">
<head>
    <title>Opdracht_9.3.php</title>
</head>
<body>

<?php
require_once "connect.php";
$users = $conn->prepare(" 
                                        select  
                                        post_id,
                                        username,
                                        berichten
                                        from   newsfeed
                                        ");
$users-> execute();
echo "<table>";
foreach($users as $user)
{
    echo "<tr>";
    echo "<td>" . $user["post_id"]          ."</td>";
    echo "<td>" . $user["username"]         ."</td>";
    echo "<td>" . $user["berichten"]        ."</td>";
    echo "</tr>";
}
echo "</table>";
?>

</body>
</html>