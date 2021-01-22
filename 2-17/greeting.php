<?php
date_default_timezone_set('Asia/Tokyo');
echo "今" . date("H") . "時台です";
echo "<br>";
if (date("H")> 6 and date("H")<= 11) {
    echo "おはようございます";
} else if (date("H")>= 12 and  date("H") <=17 ) {
    echo "こんにちは";
} else {
    echo "こんばんは";
}
?>