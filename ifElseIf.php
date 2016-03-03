<?php
$mark=93;
// marks range
//  0-32  = F
//  33-39 = D
//  40-49 = C
//  50-59 = B
//  60-69 = A-
//  70-79 = A
//  80-100 = A+
if($mark>0 AND $mark<=32){
    echo 'F';
}elseif($mark>=33 AND $mark<=39){
    echo 'D';
}elseif($mark>=40 AND $mark<=49){
    echo 'C';
}elseif($mark>=50 AND $mark<=59){
    echo 'B';
}elseif($mark>=60 AND $mark<=69){
    echo 'A-';
}elseif($mark>=70 AND $mark<=79){
    echo 'A';
}elseif($mark>=80 AND $mark<=100){
    echo 'A+';
}else{
    echo '----';
}

echo '<hr>';
if($mark>100){
    echo '__________';
}elseif($mark>=80){
    echo 'A+';
}elseif($mark>=70) {
    echo 'A';
}elseif($mark>=60){
    echo 'A-';
}elseif($mark>=50){
    echo 'B';
}elseif($mark>=40){
    echo 'C';
}elseif($mark>=33){
    echo 'D';
}else{
    echo 'F';
}

echo "<hr>";
if($mark<=32){
    echo 'F';
}else if($mark<=39){
    echo 'D';
}else if($mark<=49){
    echo 'C';
}else if($mark<=59){
    echo 'B';
}else if($mark<=69){
    echo 'A-';
}else if($mark<=79){
    echo 'A';
}else if($mark<=100){
    echo 'A+';
}else{
    echo '________';
}



echo "<hr>";
$a=10;
$b=5;
$c=2;
if($a>$b && $a>$c){
    echo'A is big';
}else if($b>$c ) {
    echo 'B is big';
}else{
    echo 'C is big';
}


echo "<hr>";

if($a<$b && $a<$c){
    echo 'A is small';
}elseif($b<$c){
    echo 'B is small';
}else{
    echo 'C is small';
}

echo "<hr>";






$z=3;
$y=55;
$x=6;
$w=9;
$v=12;

if($z>$y && $z>$x && $z>$w && $z>$v){
    echo 'Z is Big';
}else if($y>$x && $y>$w && $y>$v){
    echo 'Y is Big';
}else if($x>$w && $x>$v){
    echo 'X is Big';
}else if($w>$v){
    echo 'W is Big';
}else{
    echo 'V is Big';
}

echo "<hr>";
echo "<hr>";
date_default_timezone_set('Asia/Dhaka');
date('d/m/y');
echo date('h:m A');


































