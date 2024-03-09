<?php

if (empty($_GET["seite"])) {
    $seite = "home";
} else {
    $seite = $_GET["seite"];
};

if ($seite == "home") {
    $include_content = "home.php";
    $seitentitle = "Frieseur erzeugt kurze Haare";
    $meta_description = "Meta Description 1";
} else if ($seite == "leistungen"){
    $include_content = "leistungen.php";
    $seitentitle = "Günstigster Preis";
    $meta_description = "Meta Description 2";
} else if ($seite == "oeffnungszeiten"){
    $include_content = "oeffnungszeiten.php";
    $seitentitle = "Immer für sie da";
    $meta_description = "Meta Description 3";
} else if ($seite == "kontakt") {
    $include_content = "kontakt.php";
    $seitentitle = "Fraggen Sie uns!";
    $meta_description = "Meta Description 4";
} else {
    // Seite gibt es bei uns nicht (mehr) -> error ausgabe
    $include_content = "error404.php";
    $seitentitle = "ERROR 404";
    $meta_description = "Meta Description 5";
};

include "head.php";
include "content/" . $include_content;
include "foot.php";

// U dont need "? >" 