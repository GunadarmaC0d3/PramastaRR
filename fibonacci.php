<htmL>
    <head>
        <title>Bilangan Fibonacci </title>
        <style>
            body{
                background-image: url(http://2.bp.blogspot.com/-4vOJMrCoB0Q/U81sXznw8FI/AAAAAAAAAHU/gvVu62CiXg0/s1600/K1008_DEX_view-01.jpg);
                background-size: cover;
                background-position: top;
                }
            div.style1{
                margin:100px;
                font-family: "Lucida Sans",sans-serif;
                line-height: 200%;
            }
            div.box{
                margin:100px;
                background-color: #ffffff;
                border: 1px solid white;
                opacity: 0.9;
                }
        </style>
    </head>
    <body>
        <div class="box">
        <div class="style1">
        <h1>Bilangan Fibonacci</h1><hr>
        <?php
            $i=0;
            $a=0;
            $b=$a+1;
            echo $a."  ,  ".$b;
            while ($i<50)
            {
                $c=$b+$a;
                $a=$b;
                $b=$c;
                echo "  , ".$b;
                $i++;
            }
        ?>
        <hr>
        </div>
        </div>
    </body>
</htmL>
