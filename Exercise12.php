<!DOCTYPE html>
<html>
<head>
    <title>HarmonicSum</title>
</head>
<form action="Exercise12.php" method="POST">
<h2>Harmonic series calculator</h2>
<input type="text" name="myMax"/>

<input type="submit" value="SUBMIT"/>
<h3>
</form>
</body>
</html>

<?php
$theMax = 0;
$left2right = 0.0;
$right2left = 0.0;
$differnce = 0.0;

if( isset($_POST{'myMax'})){
    $theMax = $_POST[ 'myMax'];



    for($i =1; $i <= $theMax; $i++)
    {
        $left2right = $left2right + 1.0 / $i;
    }

    for($j =$theMax; $j >= 1; $j--)
    {
        $right2left = $right2left + 1.0 / $j;
    }

    if($differnce < 0)
    {
        $differnce = $right2left - $left2right;
    }

    echo "The left to right equals $left2right <br/>";
    echo "The right to left equals $right2left <br/>";
    echo "The difference between the two is $differnce";



/*
    if( $numb1 < $numb2){
        $min = $numb1;
        $max = $numb2;
    }
    else
    {
        $min = $numb2;
        $max = $numb1;
    }


    do{       
        $sum *= $min;
        $avcal++;
        $count++;        
        $min++;
        
    } while ($min <= $max);
        $average = bcdiv($sum, $avcal,3);
   
   
   
    echo "The sum squared is equal to $sum <br/>";
    echo "The average is equal to $average <br/>";
    echo "The count is equal to $count";  */


}