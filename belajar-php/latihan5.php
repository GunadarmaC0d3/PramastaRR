<html>
    <head>
        <title>
            Konstanta
        </title>
    </head>
    <body>
        <h1>Konstanta</h1><hr>
        <?php
        define ("phi",3.14);
        $d=20;
        $luas=phi*($d/2)*($d/2);
        $keliling=phi*$d;
        echo "Diketahui diameter lingkaran adalah ".$d." cm. <br>";
        echo "Maka luas lingkaran adalah ".$luas." cm persegi, dan kelilingnya adalah ".$keliling." cm.";
        ?>
    </body>
</html>
