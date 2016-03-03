<?php
$a=1;
while($a<5) {
    $vl = $a + 5;
    echo $vl . "<br>";
    $a++;
}
echo "<hr>";

$z=1;
while($z<=50){
    if($z==0){
        $z+=2;
        continue;
    }
    if($z%2 !=0){
        $z++;
    }

    echo $z."<br>";
    $z+=2;
}
echo "<hr>";
$a=1;
if($a%2 !=0){
    echo 'even';
}

$d=1;
while($d<=20){
    if($d==0){
        $d+=2;
    }
    if($d%2 !=0){
        $d++;
    }
    echo $d."<br>";
    $d+=2;
}




echo "<hr>";
$e=2;
while($e<=14){
    if($e==0){
        $e+=2;
    }
    if($e%2 !=0){
        $e++;
    }
    echo $e."<br>";
    $e+=2;
}

echo "<hr>";

$g=0;
while($g<=89){
    if($g==0){
        $g+=2;
    }
    if($g%2 !=0){
        $g++;
    }echo $g."<br>";
    $g+=2;
}
echo "<hr>";
$gg=0;
while($gg<=100){
    if($gg==0){
        $gg++;
    }
    if($gg%2==0){
        $gg++;
    }echo $gg."<br>";
    $gg+=2;
}








