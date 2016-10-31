<!DOCTYPE html>
<html>
<head>
    <title>SumAndAverage</title>
</head>
<form action="Exercise7.php" method="POST">
<h2>Enter numbers bellow</h2>
<input type="text" name="numbOne"/>
<input type="text" name="numbTwo"/>
<input type="submit" value="SUBMIT"/>
<h3>
</form>
</body>
</html>

<?php
$numb1 = 0;
$numb2 = 0;
$sum = 0;
$average = 0;

if( isset($_POST{'numbOne'}, $_POST{'numbTwo'})){
    $numb1 = $_POST[ 'numbOne'];
    $numb2 = $_POST[ 'numbTwo'];

    if ($numb1 < $numb2)
    {
        $min = $numb1;
        $max = $numb2;
    }
    else
    {
        $min = $numb2;
        $max = $numb1;
    }
    $avcal = $max - ($min);
    $count = $max - $min +1;

    do{
        $sum = $sum + $min;
        $min++;
        $average = bcdiv($sum, $avcal,3);
       // $average = number_format($average, 2);
    } while ($min <= $max);

    echo "The sum is equal to $sum <br/>";
    echo "The average is equal to $average  <br/>";
    echo "There were $count numbers added between your two numbers";

}