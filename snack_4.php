<!-- Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<?php 

/* $number = rand(0,200);
$numbers = []
for ($i=0; count($numbers) < 15 ; $i++) { 
    
    $number = rand(0,200);
    if(!in_array($number, $numbers)){
        $numbers[] = $number;
    }
}

var_dump($numbers); */ ## FUNZIONA MA NON E' LA SOLUZIONE MENTALMENTE PIU CORRETTA



## SOLUZIONE PIU CORRETTA

while (count($numbers) < 15) {
    $number = rand(0,200);
    if(!in_array($number, $numbers)){
        $numbers[] = $number;
    }
}

var_dump($numbers);

?>