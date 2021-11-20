<?php
    $i=10;
    $j=5;
    
    echo "Bilangan 1 = $i <br>";
    echo "Bilangan 2 = $j <br>";
    echo "<br> Berikut merupakan hasil dari setiap operasi <br>";

    penjumlahan($i,$j);
    pengurangan($i,$j);
    perkalian($i,$j);
    pembagian($i,$j);
    modulus($i,$j);
    
    function penjumlahan($x, $y){
        $hasil = $x + $y;
        echo "<br>PENJUMLAHAN<br>";
        echo "Operator : + <br>";
        echo "Hasil : $hasil <br>";
    }

    function pengurangan($x, $y){
        $hasil = $x - $y;
        echo "<br>PENGURANGAN<br>";
        echo "Operator : - <br>";
        echo "Hasil : $hasil <br>";
    }

    function perkalian($x, $y){
        $hasil = $x * $y;
        echo "<br>PERKALIAN<br>";
        echo "Operator : * <br>";
        echo "Hasil : $hasil <br>";
    }

    function pembagian($x, $y){
        $hasil = $x / $y;
        echo "<br>PEMBAGIAN<br>";
        echo "Operator : / <br>";
        echo "Hasil : $hasil <br>";
    }

    function modulus($x, $y){
        $hasil = $x % $y;
        echo "<br>MODULUS<br>";
        echo "Operator : % <br>";
        echo "Hasil : $hasil <br>";
    }
?>