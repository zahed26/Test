<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form action="newN.php" method="post">
    <input type="number" name="namta" placeholder="Namta No">
    <input type="submit" value="Submit">
</form>

</body>
</html>

<?php
    if(isset($_POST['namta'] )){
        $num=$_POST['namta'];
        $numb=1;
        while($numb<=10){
            echo $num." * ".$numb." = ".$num*$numb."<br>";
            $numb++;
        }
    }
?>
