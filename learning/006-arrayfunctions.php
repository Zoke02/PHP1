<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions for Arrays</title>
</head>
<body>
    <h1>Functions for Arrays</h1>
    <?php 
    $names = array("Peter", "Franziska" ,"Mario" ,"Katharina", "Franziska", "Christian");

    //Elements(Values) in a array count
    echo count($names);
    echo "<br>";
    $index = array_rand($names);
    echo $index;
    echo "<br>";
    echo $names[$index];
    echo "<br>";
    // echo $names[array_rand($names)];
    // echo "<br>";

    // Remove Double Values in Array
    echo "<pre>";
    print_r($names);
    echo "</pre>";
    echo "<br>";
    echo count($names);
    echo "<br>";

    $newarray = array_unique(
        $names
    );

    echo "<pre>";
    print_r($newarray);
    echo "</pre>";
    echo "<br>";
    echo count($newarray);
    echo "<br>";
    echo "<br>";

    // Check if a name is in a array
    $searchedName = "MArio";
    $allSmall = ucfirst(strtolower($searchedName));

    if (in_array($allSmall , $names)) {
        echo $allSmall  . " IS in Array";
    } else {
        echo $allSmall  . " is NOT in Array";
    };
    echo "<br>";

    // Sort Alffabeticly (Value)
    echo asort($names);
    echo "<pre>";
    print_r($names);
    echo "</pre>";
    echo "<br>";

    // Value in a array push
    $names[] = "Herbert";
    array_push($names, "Julia", "Franz"); // with array_push u can push more then 1 value at a time.
    echo "<pre>";
    print_r($names);
    echo "</pre>";
    echo "<br>";

    // Sort and new IndexValue
    sort($names);
    echo "<pre>";
    print_r($names);
    echo "</pre>";
    echo "<br>";

    ?>
</body>
</html>