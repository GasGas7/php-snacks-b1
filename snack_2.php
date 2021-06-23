<!-- Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack_2</title>
</head>

<body>

    <form action="#" method="get">
        <div>
            <label for="name">Nome</label>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <label for="mail">Email</label>
            <input type="email" name="mail" id="mail">
        </div>
        <div>
            <label for="age">Age</label>
            <input type="number" name="age" id="age">
        </div>
        <button type="submit">Esegui l'accesso</button>
    </form>

    <p>
        <?php

        #var_dump($_GET["name"], $_GET['mail'], $_GET['age'] );

        #var_dump(strpos($_GET['mail'], '.'));
        $controlEmail = false;

        if(strpos($_GET['mail'], '.') != false && strpos($_GET['mail'], '@') != false){
            $controlEmail = true;
        };

        #var_dump($controlEmail);

        if (strlen($_GET["name"]) > 3 && $controlEmail = true && is_numeric($_GET['age']) == true ) {
            echo "Accesso Riuscito";
        } else {
            echo 'Acceso Negato';
        };

        ?>
    </p>
</body>

</html>