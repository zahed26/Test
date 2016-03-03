<?php
for($start=0;$start<10;$start++){
    echo $start."<br>";
}

echo "<hr>";

for($vr=1;$vr<=10;$vr+=2){
    echo $vr."<br>";
}
echo "<hr>";
$ev=0;
for($ev;$ev<=10; $ev+=2){
    if($ev==0){
        continue;
    }
    echo $ev."<br>";

}
echo "<hr>";
$a=5;
$b=1;
for($a;$b<=10;$b++){
    echo $a." * ".$b." = ".$a*$b."<br>";
}

