<?php
function soNguyenTo($n)
{
    if ($n < 2) {
        return false;
    }
    $squareRoot = sqrt($n);
    for ($i = 2; $i <= $squareRoot; $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}

$sum=0;
for ($i = 0; $i < 100; $i++) {
    if (soNguyenTo($i)) {
        $sum+=$i;
//        echo($sum. " ");

    }
}
echo("Tổng các số nguyên tố nhỏ hơn 100 là: $sum");
