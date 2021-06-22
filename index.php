<!-- Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->


<?php

$firstSeasonMatch = [
    [
        'home' => "De'Longhi Treviso Basket",
        'home_points' => '98',
        'away' => 'Dolomiti Energia Trentino',
        'away_points' => '87'
    ],
    [
        'home' => 'Openjobmetis Varese',
        'home_points' => '79',
        'away' => 'Germani Brescia',
        'away_points' => '82'
    ],
    [
        'home' => 'UNAHOTELS Reggio Emilia',
        'home_points' => '86',
        'away' => 'A|X Armani Exchange Milano',
        'away_points' => '77'
    ],
    [
        'home' => 'Vanoli Basket Cremona',
        'home_points' => '73',
        'away' => 'Allianz Pallacanestro Trieste',
        'away_points' => '80'
    ],
    [
        'home' => 'Carpegna Prosciutto Pesaro',
        'home_points' => '88',
        'away' => 'Banco di Sardegna Sassari',
        'away_points' => '90'
    ],
    [
        'home' => 'Virtus Segafredo Bologna',
        'home_points' => '84',
        'away' => 'Acqua S.Bernardo Cantù',
        'away_points' => '97'
    ],

]

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SNACKS</title>
</head>
<body>
    



</body>
</html>


<?php 
for($i>0 ; $i < count($firstSeasonMatch); $i++){
?>

<p>
    <?php echo $firstSeasonMatch[$i]['home'] ?> - <?php echo $firstSeasonMatch[$i]['away']?> | <?php echo $firstSeasonMatch[$i]['home_points']?> - <?php echo $firstSeasonMatch[$i]['away_points'] ?></p>

<?php } ?>