<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables with PHP</title>
</head>
<body>
    <h1>Variables with PHP</h1>
    <?php
        // Integer
        $number = 1234;
        $number2 = -1234;
        echo $number;
        echo "<br>";
        echo $number2;
        echo "<br>";

        // Float
        $float = 12.34;
        $float2 = 2.413e2;
        echo $float;
        echo "<br>";
        echo $float2;
        echo "<br>";

        // Practice Integer
        $age = 32;
        echo "I am ";
        echo $age;
        echo "<br>";
        // Practice Float
        $price = 11.91;
        echo "Month of birth: ";
        echo $price;

        // String
        // Space = \n
        // Tab = \t
        // DollarSign = \$
        // Backslash = \\
        // Anführungszeichnen = \"

        echo "<br>";
        $name = "Alin";
        // My name is Alin
        echo "My name is $name";
        echo "<br>";
        // Diference betwin " and '
        echo 'My name is $name';
        echo "<br>";
        // CONNECT Varriant with "."
        echo "My name is " . $name;
        echo "<br>";

        // My name is Alin Nedelcu
        $firstName = "Alin";
        $secondName = "Nedelcu";
        // Variant 1
        echo "I have $firstName $secondName's pensil.";
        echo "<br>";
        // Variant 2
        echo "My name is " . $firstName . " " . $secondName . ".";
        echo "<br>";

        
        // Datentypen: Boolean (kurz:bool)
        $wahr = true;
        echo ">" . $wahr . "<";
        echo "<br>";
        
        $falsch = false;
        echo ">" . $falsch . "<";
        echo "<br>";
        
        // null: "nothing" or "undeffeined"
        $nicht = null;
        echo ">" . $nicht . "<";
        echo "<br>";
        
        // Constant
        define ("datenbank", "PHP-1");
        echo datenbank;
        echo "<br>";
        // Neu writeing
        const datenbank2 = "PHP-2";
        echo datenbank2;
        echo "<br>";

        // Arrays
        $myArray = array("Value 1", 2, 2.2, "Value 4");
        echo $myArray[0];
        echo "<br>";
     ?>
</body>
</html>