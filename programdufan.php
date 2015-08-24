<html>
    <head>
        <style>
            body
            {
                background-image: url("https://tonniromadian.files.wordpress.com/2013/09/0bb99-p1010056.jpg");
            }
            #style1
            {
                font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
                margin: 100px;
            }
        </style>
        <title>Program Dufan</title>
    </head>
    <body>
        
        <div id=style1>
            <h1>Program Dufan</h1><hr>
            
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                Masukkan tinggi badan Anda: <br>
                <input type="text" name="tinggi">
                <input type="submit" value="Proses">
            </form>
            <br><br>
            <h2>
        <?php
        if(isset($_POST["tinggi"]))
        { 
            $tinggi = $_POST["tinggi"];
        if ($tinggi>=150) {echo"Anda dapat bermain di wahana ini.";}
        elseif ($tinggi<150 && $tinggi>0) {echo"Maaf, Anda tidak dapat bermain di wahana ini.";}
        elseif ($tinggi="") {echo "";}
        else {echo"Data yang Anda masukkan tidak valid.";}
        }
        ?>
            </h2>
    </body>
</html>
