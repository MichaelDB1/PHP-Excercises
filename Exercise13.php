<!DOCTYPE html>
<html>
<head>
    <title>ComputePi</title>
</head>
<form action="Exercise13.php" method="POST">
<h2>Value of PI calculator</h2>
<input type="text" name="myMax"/>

<input type="submit" value="SUBMIT"/>
<h3>
</form>
</body>
</html>

<?php
$theMax = 0.0;
$sum = 0.0;
$PiDiff = 0.0;

if( isset($_POST{'myMax'})){
    $theMax = $_POST[ 'myMax'];



    for($i =1; $i <= $theMax; $i += 2)
    {
        if($i %4 == 1){
            $sum += 1 / $i;
        }
        else if($i %4 == 3)
        {
            $sum -= 1/ $i;
        }
        else{
            echo "Balls it's broken";
        }
    }
    $sum = $sum * 4;
    $PiDiff = $sum - M_PI;

    

    echo "The value of Pi calculated is $sum <br/>";
    echo "The difference between that and math PI is $PiDiff";
    

}