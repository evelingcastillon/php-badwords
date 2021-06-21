<?php

echo "<pre>";
var_dump($_GET);
echo "</pre>";
/* Creare una variabile con un paragrafo di testo a vostra scelta. Stampare a schermo il paragrafo e la sua lunghezza.*/

$paragrafo = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas ullam deserunt tenetur aliquam excepturi aperiam, praesentium tempora et?';
/* Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza,*/
$parola = $_GET['parola'];

/*dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. */

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Paragrafo</h3>
    <p> <?php echo $paragrafo; ?> </p>
    <p>Lunghezza: <?php echo strlen($paragrafo); ?> </p>

    <h3>Paragrafo dopo GET</h3>
    <p> <?php echo str_replace($parola, '***', $paragrafo); ?> </p>
</body>
</html>