<html>
    <head>
        <title>
            Operasi Aritmatika
        </title>
    </head>
    <body>
        
        <?php
        $a=8;
        $b=4;
        $penjumlahan=$a+$b;
        $pengurangan=$a-$b;
        $perkalian=$a*$b;
        $pembagian=$a/$b;
        ?>
        <b><h1>Operasi Aritmatika</h1><hr></b>
        Nilai variabel: <br>
        A = <?php echo $a; ?> <br>
        B = <?php echo $b; ?> <br>
        <br>
        A ditambah B sama dengan <?php echo($penjumlahan); ?><br>
        A dikurang B sama dengan <?php echo($pengurangan); ?><br>
        A perkalian B sama dengan <?php echo($perkalian); ?><br>
        A dibagi B sama dengan <?php echo($pembagian); ?><br>        
    </body>
</html>
