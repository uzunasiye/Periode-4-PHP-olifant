<!doctype html>
<?php
session_start();
?>
<html lang="en">
<head>
     <title>Opdracht 6.2</title>
</head>
<body>

<?php
$username= $_POST ["usernamevak"];
$password= $_POST ["passwordvak"];
require_once "connect.php";
$users = $conn->prepare("
                                    select username, 
                                           password 
                                    from   users
                                    ");
$users->execute();
$gevonden = false;
foreach ($users as $user)
{
    if ($username == $user ["username"])
    {
        if (password_verify($password, $user ["password"]))
        {
            $gevonden = true;
        }
    }
}
if ($gevonden)
{
    echo ("Welkom " . $username . ", je bent ingelogd.");
    $_SESSION["Ingelogd"] = true;
    header("location;opdr6.3.php");
}
else
{
    echo ("Verkeerde inlog.");
    session_destroy();
}
echo ("<br />");
?>

</body>
</html>