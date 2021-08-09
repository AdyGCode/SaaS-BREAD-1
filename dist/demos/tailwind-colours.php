<?php
/**
 * Filename:    tailwind-colours.php
 * Project:     SAAS-PHP-BREAD
 * Location:    dist\
 * Author:      Adrian Gould <adrian.gould@nmtafe.wa.edu.au>
 * Created:     08/08/21
 * Description:
 *     Add description here
 */

require_once __DIR__."/../templates/header.php";

$colours = [
    "black" => false,
    "white" => false,
    "blueGray" => true,
    "coolGray" => true,
    "gray" => true,
    "trueGray" => true,
    "warmGray" => true,
    "fuchsia" => true,
    "purple" => true,
    "violet" => true,
    "indigo" => true,
    "blue" => true,
    "sky" => true,
    "cyan" => true,
    "teal" => true,
    "emerald" => true,
    "green" => true,
    "lime" => true,
    "yellow" => true,
    "amber" => true,
    "orange" => true,
    "red" => true,
    "rose" => true,
    "pink" => true,
];

$rangeValues = [50, 100, 200, 300, 400, 500, 600, 700, 800, 900];


echo '<main class="container shadow-lg mx-auto bg-gray-50 p-6 mb-8 mt-8 rounded-md">';
echo "<p class='pt-12'> </p>";
foreach ($colours as $colour => $range) {
    echo "<div class='grid grid-cols-12 pt-1'> ";
    echo "<p class='col-span-1 py-4 text-center'>{$colour}</p>";
    if ($range) {
        foreach ($rangeValues as $value) {
            $bg = "bg-{$colour}-{$value}";
            $fg = $value >= 500 ? "text-white" : "text-black";
            echo "<p class='col-span-1 {$bg} {$fg} text-center py-4'>{$value}</p>";
        }
        echo "<p class='col-span-1 py-4 text-center'>{$colour}</p>";
    } else {
        $fg = $colour=="black" ? "text-white" : "text-black";
        echo "<p class='col-span-1 bg-{$colour} {$fg} py-4 text-center'>{$colour} </p>";
    }
    echo "</div>";
}

echo '</main>';

require_once "../templates/footer.php";
























