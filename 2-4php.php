<?php
function getVolume($vertical, $horizontal, $height) {
    $volume = $vertical* $horizontal* $height;
    print $volume;
}
getVolume(5 ,10 ,8);
?>