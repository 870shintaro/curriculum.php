<?php
$sum = 0;
    for($i=1; $i<40; $i++){
        $x = mt_rand(1,6);
        $sum += $x;
    echo $i . "回目=" . $x;
    echo "<br>";
    if($sum > 40) {
        echo $i . "回目でゴールしました";
        break;
    }
    }
?>