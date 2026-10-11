<?php 

$angka = 1;

while($angka <= 3) {
    for($i = 1; $i <= 5; $i++) {
        echo $angka . "-" . $i . PHP_EOL;
    }

    if($angka == 3){
        break;
    }
    $angka++;
}


?>