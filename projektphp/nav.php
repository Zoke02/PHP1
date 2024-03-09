            <!-- <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="content/leistungen.php">Leistungen</a></li>
                    <li><a href="content/oeffnungszeiten.php">Öffnungszeiten</a></li>
                    <li><a href="content/kontakt.php">Kontakt</a></li>
                </ul>
            </nav> -->

<?php

$nav_points = array(
    "home" => "Home",
    "leistungen" => "Leistungen",
    "oeffnungszeiten" => "Öffnungszeiten",
    "kontakt" => "Kontakt",
    // "impressum" => "Impressum"
);

echo "<nav><ul>";

foreach ($nav_points as $key => $value) {
    echo '<li';
    // if ($_GET["seite"] == "$key" ) echo ' class="active"';
    if ($seite == $key) echo ' class="active"';
    echo'><a href="index.php?seite=' . $key . '">' . $value . '</a></li>'; // href="?seite='
};

echo "</ul></nav>";