<?php
$abc=array("Shamim","Mobarok","Zahed");
foreach($abc as $key=>$value){
    if($value=="Shamim"){
        echo $key;
        echo 'Nurun Nobi '.$value."<br>";
    }else if($value=='Mobarok'){
        echo $key;
        echo 'Mobaro Hossaim Badsha'."<br>";
    }else if($value=='Zahed'){
        echo 'Zahed hossain Titu';
    }else{
        echo 'value Not Found';
    }

    //echo $value."<br>";
}
echo "<hr>";
function hello($a,$b,$c){
    echo $a+$b+$c;
}
hello(3,5,50);

