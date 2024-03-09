<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>"FOR" in PHP</title>
</head>
<body>
    <h1>"FOR" in PHP</h1>
    <br>
    <?php 

    // FOR
    // echo "<table border='1' >";
    // echo "<tr>";
    // for ($i = 1; $i <= 10; $i++) {
    //     echo "<td>";
    //     echo $i;
    //     echo "</td>";
    // };
    // echo "</tr>";
    // echo "</table>";
    // echo "<br>";

    // Variante 1
    echo "<table border='1' >";
    for ($x = 1; $x <= 10; $x++) {
        echo "<tr>";
        for ($i = 1; $i <= 10; $i++) {
            echo "<td>";
            if (($i * $x) % 7 == 0)  // != 0) echo $i * $x;
                continue;
            else {
                echo $i * $x;
            };
            echo "</td>";
        };
        echo "</tr>";
        
    };
    echo "</table>";
    echo "<br>";

    // Variante 2
    echo "<table border='1' >";
    for ($zeile = 1; $zeile <= 10; $zeile++) {
        if ($zeile == 6) continue;
        echo "<tr>";
        for ($spalte = 1; $spalte <= 10; $spalte++) {
        echo "<td>";
            if (($spalte * $zeile) % 7 == 0)  // != 0) echo $i * $x;
                continue;
            else {
                // if ($zeile == 6) {
                //     continue;
                // } else {
                echo $spalte * $zeile;
                // };
            };
            echo "</td>";
        };
        echo "</tr>";
        
    };
    echo "</table>";
    echo "<br>";

    ?>
    <!-- <table border="1" >
        <tr>
            <td>1</td>
            <td>2</td>
            <td>3</td>
        </tr>
        <tr>
            <td>1</td>
            <td>2</td>
            <td>3</td>
        </tr>
    </table> -->
</body>
</html>