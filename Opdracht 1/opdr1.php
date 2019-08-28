<!doctype html>
<html lang="en">
<head>
     <title>Opdracht 1</title>
</head>
<body>

<h1>Lijst van alle natuurlijke getallen deelbaar door 3 en/of 5</h1>

<?php
$totaal = 0;
for($i = 1000; $i>=1  ;$i--)
{
    if ($i % 3 == 0 || $i % 5 == 0)
    {
        $totaal = $totaal+ $i;
    }
}
echo "Het totaal van 3 en 5 delers onder de 1000 = " .$totaal;
?>

</body>
</html>