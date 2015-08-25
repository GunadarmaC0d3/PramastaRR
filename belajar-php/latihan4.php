<html>
    <head>
        <title>
            Variabel Lokal dan Global
        </title>
    </head>
    <body>
        
        <h1>Variabel</h1><hr>
        <b>Eksperimen variabel global dan lokal no.1:</b> <br>
        <?php
        $a=10;
        $b=15;
        $c=2;
        Function VariabelGlobal()
        {
            Global $a,$b,$c;//pernyataan bahwa variabel a, b, dan c adalah global dan dapat bekerja di luar fungsi
            $c=$a+$b;
        }
        VariabelGlobal(); //perintah untuk memanggil fungsi
        echo "Nilai variabel a = ".$a."<br>";
        echo "Nilai variabel b = ".$b."<br>";
        echo "Nilai variabel c = a+b = ".$c."<br>";
        ?>
        <br><b>Eksperimen variabel global dan lokal no.2:</b> <br>
        <?php
        $kota="Surabaya"; //Variabel Global
        Function VariabelLokal()
        {
            $kota="Depok";//Variabel Lokal
            echo "Sekarang, saya tinggal di ".$kota.".<br>";
        }
        VariabelLokal();
        echo"Dulu, saya tinggal di ".$kota.".<br>";
        ?>
        <br><b>Eksperimen variabel statik:</b><br> <!--variabel statik adalah variabel yang apabila dipanggil lagi nilainya tidak berubah-->
        <?php
        Function VariabelStatik()
        {
            Static $nilai=0;
            echo"Nilai variabel adalah ".$nilai."<br>";
            $nilai++;
        }
        VariabelStatik();
        VariabelStatik();
        VariabelStatik();
        VariabelStatik();
        VariabelStatik();
        ?>
    </body>
</html>
