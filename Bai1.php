<?php
    function isPrime($n) {
        if ($n <= 1) {
            return false;
        }
        for($i = 2; $i <= sqrt($n); $i++){
        if($n % $i == 0){
            return false;
        }
    }
    return true;
}
echo "Các cố nguyên tố từ 1 đến 100 là: <br>";
for($i = 1; $i <= 100; $i++){
    $check = isPrime($i);
    if($check == true){
        echo $i." ";
    }
}