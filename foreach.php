<?php
$abc=array("Shamim","Mobarok","Zahed");
foreach($abc as $value){
    if($value=="Shamim"){
        echo 'Nurun Nobi '.$value."<br>";
    }else if($value=='Mobarok'){
        echo 'Mobaro Hossaim Badsha'."<br>";
    }else if($value=='Zahed'){
        echo 'Zahed hossain Titu';
    }else{
        echo 'value Not Found';
    }

    //echo $value."<br>";
}
