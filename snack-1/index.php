<?php
/*
Creiamo un array contenente le partite di basket di un ipotetica tappa del calendario.
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù| 55-60
*/

// Creiamo un array contenente le partite di basket di un ipotetica tappa del calendario.
$basketPlays=
array(
    array("casa" => "Olimpia Milano", "ospite" => "Cantù", "punti_casa" => 55, "punti_ospite" => 60),
    array("casa" => "Virtus Bologna", "ospite" => "Fortitudo Bologna", "punti_casa" => 72, "punti_ospite" => 68),
    array("casa" => "Reyer Venezia", "ospite" => "Dinamo Sassari", "punti_casa" => 81, "punti_ospite" => 79),
    array("casa" => "Brindisi", "ospite" => "VL Pesaro", "punti_casa" => 68, "punti_ospite" => 64)
);
/* Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù| 55-60 */

foreach ($basketPlays as $play){
    echo "<h1 class='center'>$play[casa] - $play[ospite] | $play[punti_casa] - $play[punti_ospite] </h1>";

};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Squadre Basket</title>
    <style>
        .center{
            text-align:center;
        }
    </style>
</head>
<body>
    
</body>
</html>