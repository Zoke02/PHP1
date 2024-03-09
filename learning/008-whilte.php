<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While Statement</title>
</head>
<body>
    <h1>While Statement</h1>
    <?php 
    // Limitiert Ausführungzeit auf 1 Sekunde
    set_time_limit(1);

    // WHILE
    echo "Print 1 to 10";
    echo "<br>";
    $zahl = 1;
    while ($zahl <= 10) {
        echo $zahl++ . " ";
    };
    echo "<br>";
    echo "<br>";

    // DO WHILE
    $zahl2 = 1;
    do {
        echo $zahl2++ . " ";
    } while ($zahl2 <= 10);
    echo $zahl2;
    echo "<br>";
    echo "<br>";

    // FOR EACH + Practice
    $citys = array("Bregenz", "Innsbruck", "Salzburg", "Klagenfurt", "Linz", "Graz", "St. Pölten", "Wien", "Eisenstadt");
    sort($citys);
    foreach ($citys as $index => $city) {
        echo "[" . $index . "] ";
        echo $city;
        echo "<br>";
    };

    // FOR
    for ($i = 1; $i < 20; $i++) {
        if ($i == 3) continue;
        if ($i >= 10) break;
        echo $i;
    };

    ?>
</body>
</html>