<?php

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],

    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],

    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];


#<!-- Stampare ogni data con i relativi post. -->


#<!-- uso array_keys per restituire tutte le chiavi dell'array -->


$keys = array_keys($posts);

var_dump($keys); #ottengo le tre date in posizionee 0, 1 e 2;
?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack3</title>
</head>

<body>
    <?php
    for ($i = 0; $i < count($keys); $i++) {

        $key = $keys[$i];

        var_dump($key);

        var_dump($posts[$key]); #qui devo ciclare per poter andare a prendere i singoli post;

        for ($j = 0; $j < count($posts[$key]); $j++) {

            $post = $posts[$key][$j];
            var_dump($post);
        
        }
    }
    ?>
    
</body>

</html>