<?php
function even_odd($n)  //passbyparameter baracket($n)type karvu
{
    //$n=7;   simple function
    if($n%2==0)
    {
        echo "given number is a even<br>";
    }
    else{
    echo "given number is a odd<br>";
    }
}

even_odd(2);
even_odd(5);
even_odd(8);
?>