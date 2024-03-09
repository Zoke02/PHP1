<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- PHP can be everywher. -->
    <?php echo "<title>Array in PHP</title>"; ?>
    <style>
        .green {
            color: green
        }
        .font {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
    </style>
</head>
<body class=<?php echo "font" ?>>
    <?php 
    echo '<h1 class="<?php green ?>">\'Array\' in PHP</h1>';
    ?>
    <?php
        // Arrays
        $myArray = array("Value 1", 2, 2.2, "Value 4");
        echo $myArray[0];
        echo "<br>";
        echo $myArray[1];
        echo "<br>";
        echo $myArray[2];
        echo "<br>";
        echo $myArray[3];
        echo "<br>";

        // Number Array Defined:
        $names = array("Alin", "Zoke", "Yana", "John");
        // Alin and Yana
        echo $names[0] . " and " . $names[2];
        echo "<br>";

        // Debugg (Dont leave in code)
        echo "<pre>";
        print_r($names);
        echo "</pre>";

        // Push a value in a Array
        $names[] = "Mario";
        echo "Nr: 4 " . $names[3 + 1];
        echo "<br>";

        // Index as Variable
        $index = 3;
        echo "Nr: 3 " . $names[$index];
        echo "<br>";

        // String Array Defined: (Associative array)
        $myArray2 = array(
            "name" => "John",
            "age" => 35,
            "city" => "Salzburg"
        );

        // Debugg (Dont leave in code)
        echo "<pre>";
        print_r($myArray2);
        echo "</pre>";

        echo $myArray2["name"];
        echo "<br>";

        // Practice 
        // Var-1
        echo $myArray2["name"] . " (" . $myArray2["age"] . ") years old from " . $myArray2["city"] . ".";
        echo "<br>";
        // Var-2
        echo "{$myArray2["name"]} ({$myArray2["age"]}) from {$myArray2["city"]}";
        echo "<br>";

        // Push a value in a Array (Name as index)
        $myArray2["credit"] = 100;
        /*
        // Debugg (Dont leave in code)
        echo "<pre>";
        print_r($myArray2);
        echo "</pre>";
        */

        // Multidimensional Array
        $myArray3 = array(
            array(
            "name" => "Alin",
            "age" => 32,
            "city" => "Linz"
            ),
            array(
            "name" => "Yana",
            "age" => 27,
            "city" => "Thalgau"
            ),
            $myArray2
        );

        // Debugg
        echo "<pre>";
        print_r($myArray3);
        echo "</pre>";
        echo "<br>";

        // Check
        echo $myArray3[0]["city"];
        echo "<br>";

        // Practice: Ich bin Alin bin 27 und habe ein Guthaben von 100.
        echo "Ich bin " . $myArray3[0]["name"] . " bin " . $myArray3[1]["age"] . " und habe ein Guthaben von " . $myArray3[2]["credit"] . ".";
        echo "<br>";

     ?>
</body>
</html>