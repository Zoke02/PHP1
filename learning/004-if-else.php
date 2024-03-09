<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If / Esle</title>
</head>
<body>
    <h1>If / Else</h1>
    <?php
    // 0-5: Schlaf gut!
    // 6-9: Guten Morgen!
    // 12/18: Malhzeit!
    // 19-23: Gute nacht!


    $hour = date("G");
    echo "Es ist " . $hour . " Uhr.";
    echo "<br>";
    if ($hour <= 5) {
        echo "Schlaf gut!";
    } else if ($hour <= 9) {
        echo "Guten Morgen!";
    } else if ($hour == 12 || $hour == 18) {
        echo "Mahlzeit!";
    } else if ($hour >= 19) {
        echo "Gute nacht!";
    } else if ($hour > 24) {
        echo "Falsche Uhr!";
    } else {
        echo "Hello!";
    };
    echo "<br>";

    if ("zwei" == 2){
        echo "true";
    } else {
        echo "false";
    };
    echo "<br>";
    if ("2" == 2){
        echo "true";
    } else {
        echo "false";
    };
    ?>
</body>
</html>