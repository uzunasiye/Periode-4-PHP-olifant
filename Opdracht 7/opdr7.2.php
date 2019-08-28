<?php
session_start();
$username = $_POST["usernamevak"];
$password = $_POST["passwordvak"];
require_once "connect.php";
$users = $conn->prepare("
                                    select username,
                                            password,
                                            rol
                                    from users
                                    ");
$users->execute();
$adminGevonden = false;
$userGevonden = false;
foreach($users as $user)
{
    if ($username == $user["username"])
    {
        if (password_verify($password, $user["password"]))
        {
            if ($user["rol"] == 1)
                $adminGevonden = true;
            if ($user["rol"] == 0)
                $userGevonden = true;
        }
        else
        {
            echo'Helaas, niet ingelogd';
        }
    }
}
if ($adminGevonden)
{
    echo ("Welkom " . $username . ", je bent ingelogd als administrator");
    $_SESSION["ingelogd"] = true;
    require_once "opdr7.3.php";
    session_destroy();
}
if ($userGevonden)
{
    echo ("Welkom " . $username . ", je bent niet ingelogd als admin");
    $_SESSION["ingelogd"] = true;
    session_destroy();
}
echo ("</br>");