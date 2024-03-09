<?php 

$nav_bar = array(
    "home" => "Home",
    "leistungen" => "Leistungen",
    "opening" => "Öffnungzeiten",
    "kontakt" => "Kontakt",
);
echo "<nav><ul>";

foreach ($nav_bar as $file_name => $page_name) {
    echo "<li ";
    if ($seite == $file_name) echo 'class="active"';
    echo ' ><a href="index.php?seite=' . $file_name . '">' . $page_name . '</a></li>';
    echo "</li>";
};

echo "</ul></nav>";