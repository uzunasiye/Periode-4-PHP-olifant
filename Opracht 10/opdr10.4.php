<?php
$post_id         = $_POST["post_idvak"];
$username        = $_POST["usernamevak"];
$verwijderen     = $_POST["verwijdervak"];
if ($verwijderen)
{
    require_once "connect.php";
    $newsfeed = $conn->prepare("
                                delete post_id
                                from newsfeed
                                where username= :username
         ");
    $newsfeed->execute();
    echo "Het bericht is verwijderd. <br />";
}
else
{
    echo "Het bericht is niet verwijderd. <br />";
}
?>