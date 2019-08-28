<!doctype html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>

<?php
$usernames = array ("Asiye", "Beyza", "Ebru", "Selma");
$username = $_POST["username"];
$password = $_POST["password"];
$gevonden=false;
for($i=0; $i< count($usernames); $i++)
{
    if($username == $usernames [$i] )
    {$gevonden = true;}
}
if($gevonden)
{ echo "Fout, username bestaat al";}
else
{ echo "Succes, account is aangemaakt";}
?>

</body>
</html>