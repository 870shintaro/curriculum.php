<?php
$colors = ["red", "blue", "yellow", "green", "pink"];
echo count($colors);
echo "<br>";
sort($colors);
var_dump($colors);
echo "<br>";
if(in_array("blown", $color)) {
    echo "ブラウンがいるよ";
} else {
    echo "ブラウンはないよ";
}
echo "<br>";
$atstr = implode("white", $colors);
var_dump($atstr);
echo "<br>";
$re_colors = explode("white", $atstr);
var_dump($re_colors);
