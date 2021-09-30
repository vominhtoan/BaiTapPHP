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

	$n = rand(-100,100);

	if(isPrimeNumber($n))
	{
		echo"$n là số nguyên tố <br>";
		$file = "test.txt";
		$fh = fopen($file,'a');
		fwrite($fh, "$n  ");
    	fclose($fh);
    	echo"đã ghi $n vào file test.txt";
	}
	else
		echo"$n không phải là số nguyên tố";
?>