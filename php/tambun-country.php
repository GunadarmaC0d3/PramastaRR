<html>
    <head>
        
        <title> A Trip to Tambun Country</title>
        
        <style>
            
            body{
                background-image: url("http://www.widlab.com/wordpress/wp-content/uploads/2011/03/Endeavour.jpg");
                background-size: cover;
                background-position: center;
            }
            
            #whitebox{
                background-color: #333;
                color: white;
                opacity: 0.9;
                padding: 25px 100px 25px 100px;
                margin: 25px 50px 25px 50px;
                line-height: 1.5;
                font-family: "Segoe UI","Lucida Sans",sans-serif;
                border-radius: 100px;
            }
            
            #xl{
                font-size: x-large;
            }
            
        </style>
        
    </head>
    <body>
        <center>
            
            <?php
            session_start();
            if (empty($_SESSION["counter"])){$_SESSION["counter"]=6;}
            if (empty($hasil)){$hasil="";}
            if (isset($_POST["nama"]) AND ($_POST["usia"]))
            {
                $nama=$_POST["nama"];
                $usia=$_POST["usia"];
                $gender=$_POST["gender"];
                if ($_SESSION["counter"]>1)
                {
                    if ($usia>=17)
                    {
                        if ($gender=="wanita")
                        {
                            $hasil= "Selamat ".$nama.", Anda beruntung! Saya tunggu Anda di Depok Space Center 19 September 2015 pukul 7.00.";
                            $_SESSION["counter"]-=1;
                        }
                        else
                        {
                        $hasil="Maaf ".$nama.", Anda belum beruntung.";        
                        }
                    }
                    else
                    {
                        $hasil="Maaf ".$nama.",  Anda belum beruntung.";
                    }
                    
                }
                else
                {
                    $hasil="Maaf ".$nama.", kesempatan sudah habis.";
                }
            }
            
            ?>
            
            <div id="whitebox">
            
            <img src="david.png" width=150px height=150px><br><br>
            <span id="xl">
            
            Menangkan kesempatan untuk menemani saya ke Tambun Country!
            Saya membutuhkan <?=$_SESSION["counter"]-1?> orang lagi!<br>
            </span>
            - David Cornelius (Dosen Teknik Informatika Universitas Gunadarma) - <br><hr><br>
               
            
            <form action="tambun-country.php" method="post">
                Masukkan nama Anda: <br>
                <input type="text" name="nama"><br><br>
                Masukkan usia Anda: <br>
                <input type="text" name="usia"><br><br>
                Pilih jenis kelamin Anda: <br>
                <input type="radio" name="gender" value="pria" checked> Pria
                <input type="radio" name="gender" value="wanita"> Wanita<br><br>
                <input type="submit" value="Proses">
            </form>
            
            <span id="xl">
            <?=$hasil?>
            </span>
            </div>
            
        </center>
    </body>
</html>
