<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Functions in PHP</title>
</head>
<body>
    <h1>New Functions in PHP</h1>
    <?php
    // Function from Celcius to Fahrenheit F = C * 1.8 + 32
    $grade = 30;
    function convert_to_fahrenheit($value) {
        $fahrenheit = $value * 1.8 + 32;
        return $fahrenheit;
    };

    echo convert_to_fahrenheit($grade);
    echo "<br>";
    echo convert_to_fahrenheit($grade - 30); // 0
    echo "<br>";
    echo "<br>";

    // Formate neu Date
    $date_mysql = "1500-02-24";
    // Goal: 24.02.2024
    echo "From {$date_mysql} to 24.02.2024";
    echo "<br>";
    echo "<br>";

    // Variant 1 - substr()
    function convert_date ($value) {
        $year = substr($value, 0, 4);
        $month = substr($value, 5, 2);
        $day = substr($value, 8, 2);
        $answer = $day . "." . $month . "." . $year;
        return $answer;
    };
    echo "Variant 1";
    echo "<br>";
    echo convert_date($date_mysql);
    echo "<br>";
    echo "<br>";
    
    // Variant 2 - date() (mine)
    $formated_date = date_create($date_mysql);
    echo "Varian 2 (mine)";
    echo "<br>";
    echo date_format($formated_date, "d.m.Y");
    echo "<br>";
    echo "<br>";

    // Varian 2 - (false - actual date (now))
    function de_datum_mit_date($datum_falsche) {
        $time = strtotime($datum_falsche);
        $d = date("d.m.Y", $time);
        return $d;
    };
    echo "Varian 2 (only works until 1970 and upper)";
    echo "<br>";
    echo de_datum_mit_date($date_mysql);
    echo "<br>";
    echo "<br>";

    // Variant 3 (teacher)
    echo "Varian 3 (teacher)";
    echo "<br>";
    function de_datum_mit_date_2($datum_falsche) {
        $teile = explode("-", $datum_falsche);
        echo "<pre>";
        print_r($teile);
        echo "</pre>";
        return $teile[2] . "." . $teile[1] . "." . $teile[0];
    };
    echo de_datum_mit_date_2($date_mysql);
    echo "<br>";
    echo "<br>";

    // Text nach 10 Zeichnen abschneiden und "..." anhängen (Cut a text short and replace it with "..." after 10 spaces)
    $text = "Lorem ipsum dolor lore asd edfs";
    $text2 = "10SpaceTxt";

    // Function to cut the text. (Mine)
    function text_short($value, $lange = 10){
        // FutureProof in case u need to change the length
        // $lange = 10;
        // If text is longer then 10 spaces CUT the rest and add "...".
        if (strlen($value) > $lange) {
            $short_text = substr($value, 0, $lange) . "...";
            return $short_text . "...";
        }
        // If text is shorter then 10 spaces DONT CUT the text.
        else {
            return $value;
        };
    };
    echo text_short($text, 5);
    echo "<br>";
    echo text_short($text); // Default is 10
    echo "<br>";
    echo text_short($text, 15);
    echo "<br>";
    echo text_short($text, 25);
    echo "<br>";

    ?>
</body>
</html>