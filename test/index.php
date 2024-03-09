<?php

if (empty($_GET["seite"])) {
    $seite = "home";
} else {
    $seite = $_GET["seite"];
};

if ($seite == "home") {
    $include_content = "home.php";
    $page_title = "Home";
} elseif ($seite == "leistungen") {
    $include_content = "leistungen.php";
    $page_title = "Leistungen";
} elseif ($seite == "opening") {
    $include_content = "opening.php";
    $page_title = "Öffenungzeiten";
} elseif ($seite == "kontakt") {
    $include_content = "kontakt.php";
    $page_title = "Kontakt";
}



include "head.php";
include "content/" . $include_content;
include "foot.php";
