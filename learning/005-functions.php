<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funtions</title>
</head>
<body>
    <h1>Funktions</h1>

    <?php

    $string = "        This is a String Ö ";
    // String to lowercase
    echo "<pre>";
    echo mb_strtolower($string);
    echo "</pre>";
    echo "<br>";

    // Remove space befor and after text
    echo "<pre>";
    echo trim($string, "Ö ");
    echo "</pre>";
    echo "<br>";

    // Remove HTML Tags from a string
    $text = "Das ö ist <strong>Bold</strong> und <em>Italic</em>.";  
    echo $text;
    echo "<br>";
    echo strip_tags($text);
    echo "<br>";
    echo strip_tags($text, "<strong>");
    echo "<br>";
    echo strip_tags($text, "<strong> <em> <p>"); // No error if tag is not in the strong
    echo "<br>";

    // Length of a string
    echo strlen($text);
    echo "<br>";
    echo strlen(strip_tags($text));
    echo "<br>";
    echo mb_strlen($text, "UTF-8"); // Looks only at UTF-8 charracters. (ASCII)
    echo "<br>";

    // Part of a text remove (from index 0 to .....)
    $text2 = "Ich bin 43 Jahre alt.";  // It starts from 0
    echo substr($text2, 8, 2); // ($string, from where, how many)
    echo "<br>";
    echo $text2[0];
    echo "<br>";
    echo "<br>";
    // Zeileumbrüche in <br/> unwandeln
    $text = "Herzilich Willkommen
    im WIFI
    Salzburg";
    echo $text;
    echo "<br>";
    echo "<br>";
    echo nl2br($text);
    echo "<br>";
    
    ?>
</body>
</html>