<?php
define("GREETING","Whats your name?");
    echo GREETING."<br>";


$t = date("Ha");
    echo $t."<br>";
if ($t < "15") {
    echo "Have a good day!". "<br>";
}else{
    echo "Have a good Night!". "<br>";
}

date_default_timezone_set("asia/dhaka");
echo date("h:i:s a")."<br>";



