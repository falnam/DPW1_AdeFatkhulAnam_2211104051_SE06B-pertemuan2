<?php
function cekPrima($n) {
    if ($n < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}

for ($i = 2; $i <= 100; $i++) {
    if (cekPrima($i)) {
        echo "$i adalah bilangan prima<br>";}
}
?>