<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="mySelf.php" method="post" style="text-align: center; margin: 50px;padding: 3px;border:1px solid #DCDCDC63;border-color: black;">
        Name        <input type="text" name="Name" placeholder="Type Your Name" id=""><br>
        Age         <input type="number" name="Age" placeholder="Type Your Age" id=""><br>
        City        <input type="text" name="City" placeholder="Type Your City Name" id=""><br>
        Class       <input type="text" name="Class" placeholder="Type Your Class Name" id=""><br>
        School Name <input type="text" name="SchoolName" placeholder="Type Your School Name" ><br>
        <input type="submit" name="action" value="GO">
    </form>

</body>
</html>

<?php
if(isset($_POST['action'])){
    $myName=$_POST['Name']."<br>";
    $old=$_POST['Age']."<br>";
    $liveCity=$_POST['City']."<br>";
    $class=$_POST['Class']."<br>";
    $schoolName=$_POST['SchoolName']."<br>";
    echo "<hr>.<br>";
    $sum= 'My name is '.$myName.'. I am '.$old. 'years old
'.'. I Live in '.$liveCity.'city'.'. I
 am a Student of Class'.$class. '. I read In '.$schoolName.'.';
    echo $sum;

}
/*
My name is <b>Mahinur Akter Monika</b>. I am <b>13</b> years old. I live in <b>Dhaka</b> city.
I am a student of class <b>five</b>. I read in <b>Shahajuddin Sarker Model School</b>.
 */
