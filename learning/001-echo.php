<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Echo mit PHP</title>
</head>
<body>
    <!-- Kommentar -->
    <h1>Echo mit PHP</h1>
    <?php 
    // First line with PHP
    // <br> inside the "" to break a line: You can write HTML-Code inside " quouts " and it works.
    echo "Hello World! <br>";
    // One line Kommentar.
    /*
    More lines kommetentar 1.
    More lines kommetentar 2.
    More lines kommetentar 3.
    */
    echo "Hello ";
    echo "World!";
    // Integer
    $number = 1234;
    $number2 = -1234;
    echo $number;
    echo "<br>";
    echo $number2;
    // Float
    $float = 12.34;
    $float2 = 2.413e2;
    echo $float;
    echo $float2;
    //
    ?>
</body>
</html>