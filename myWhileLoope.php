<?php
$jm=0;
while($jm<=44){
    if($jm==0){
        $jm++;
        continue;
    }
    if($jm%2 !=0){
        $jm++;
    }
    echo $jm."<br>";
    $jm+=2;
}
echo "<hr>";
echo "<hr>";

$jt=0;
while($jt<=45){
    if($jt==0){
        $jt++;
        continue;
    }
    if($jt%2 ==0){
        $jt++;
    }
    echo $jt."<br>";
    $jt+=2;
}
echo "<hr>";
echo "<hr>";


$a=0;
while($a<=100){
    if($a==0){
        $a++;
    }if($a%2 !=0){
         $a++;
    }echo $a."<br>";
    $a+=2;
}
echo "<hr>";

$b=1;
while($b<=60){
    if($b==0){
        $b+=2;
        continue;
    }
    if($b%2 !=0){
        $b++;
        continue;
    }

    echo $b."<br>";
    $b+=2;
}
echo "<hr>";

$c=0;
while($c<=40){
    if($c==0){
        $c++;
        continue;
    }
    if($c%2 ==0){
        $c++;
        continue;
    }
    echo $c."<br>";
    $c+=2;
}
echo "<hr>";
echo "<hr>";


$jl=1;
while($jl<=100){
    if($jl%10 ==0){
        echo $jl.'<br>';
    }
    $jl++;
}
