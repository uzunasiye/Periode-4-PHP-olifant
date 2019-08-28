<?php
$severname = "localhost";
$dataname = "olifant";
$userrname = "root";
$passsword = "";

try
{
    $conn = new PDO("mysql:host=$severname;dataname", $userrname, $passsword);
    $conn -> setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connectie gelukt";

}

catch (PDOException $e ){
    echo "Connectie mislukt" . $e ->getMessage();
}

?>