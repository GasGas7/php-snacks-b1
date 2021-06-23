<?php 
    $invitati=[

        'Pino',
        'Gino',
        'Paperina',
        'Amante di php'
    ];

    var_dump($_GET["name"]);

    if(in_array($_GET["name"], $invitati)){
        echo "Sei nella lista degli invitati";
    }else {
        echo "Non puoi venire a questa festa";
    }

?>