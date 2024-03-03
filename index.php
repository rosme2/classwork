<?php 

//work 1


 function checkNum($abc){
    if(ctype_alpha($abc)){
        echo "It's Alphabet.<br>";
    }
    else {
        echo "It's Not.";
    }
    }
checkNum('f');
function theNum($abc){
    if(is_numeric($abc)){
        echo "It's Numeric.<br>";
    }
    else{
        echo "It's Not!<br>";
    }
}
theNum(5);



//work 2

function greatestNum($a, $b, $c, $d){
    if($a>$b && $a>$c && $a>$d){
        echo "A is greatest Number.<br>";
    }
    else if($b>$a && $b>$c && $b>$d){
        echo "B is the greatest Number.<br>";
    }
    else if($c>$a && $c>$b && $c>$d){
        echo "C is greatest Number.<br>";
    }
    else {
        echo "D is the greatest Number.<br>";
    }
}
greatestNum(9, 10, 48,11);



//work 3

function number($num){
    if($num>0){
        if($num%2 == 0){
            echo " The number is positive and even.<br>";
        }
        else {
          echo " The number is positive and odd.<br>";
        }
    }

    else if($num==0){
        echo "The number is neutral.<br>";
    }

    else if($num<0){
        echo "The number is negetive.<br>";
    }
    }    
    
number(8)

//work 4

/*function mailpass($userEmail, $password){
    if($userEmail == abc.@gmail.com && $password == 1234){
         echo "Log in successfully.<br>";
    }
    else {
        echo "wrong User.<br>";
    }

}

mailpass(abc.@gmail.com, 1234)*/
    

?>