<?php
function isPrimeNumber($n) {
    // so nguyen n < 2 khong phai la so nguyen to
    if ($n < 2) {
        return false;
    }
    // check so nguyen to khi n >= 2
    $squareRoot = sqrt($n);
    for ($i = 2; $i <= $squareRoot; $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}
 
$n = $m = rand(10,1000);
echo ("a) Tất cả các số nguyên tố nhỏ hơn $n là: <br>");
if ($n >= 2) {
    echo "2";
}
for ($i = 3; $i < $n; $i+=2) {
    if (isPrimeNumber($i)) {
        echo (" " . $i);
    }
}

echo ("<br>");

$dem = 0;
$max = 0;

while ($m >= 1 ) 
{
    $dem += 1;
    if(($m%10) > $max)
        $max = $m%10;
    $m = $m/10;
}
echo ("b) $n là số có $dem chữ số <br>");
echo ("c) Chữ số lớn nhất trong $n là $max <br>");
?>