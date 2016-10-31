<!DOCTYPE html>
<html>
<head>
    <title>SumAndAVerage</title>
</head>
<form action="Exercise8.php" method="POST">
<h2>Enter numbers bellow to sum Odd between two numbers</h2>
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

    if( $numb1 < $numb2){
        $min = $numb1;
        $max = $numb2;
    }
    else
    {
        $min = $numb2;
        $max = $numb1;
    }
    $avcal = ($max - $min)/2;
    $count = ($max - $min +1)/2;

    do{
        if( $min % 2 > 0)
        {
        $sum = $sum + $min;
        }
        $min++;
        $average = bcdiv($sum, $avcal,3);
    } while ($min <= $max);

    echo "The sum is equal to $sum <br/>";
    echo "The average is equal to $average <br/>";
    echo "The count is equal to $count";


}