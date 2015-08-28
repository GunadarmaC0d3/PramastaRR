<?php
$a=100;
$b=$a;
while ($a>0)
{
    if($b>0)
    {
        while ($b>0)
        {
            echo"o";
            $b--;
        }
    }
    else
    {
        echo"<br>";
        $a--;
        $b=$a;
    }
}
?>
