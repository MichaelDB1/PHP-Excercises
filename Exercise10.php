<!DOCTYPE html>
<html>
<head>
    <title>SumSquareAVerage</title>
</head>
<form action="Exercise10.php" method="POST">
<h2>Enter numbers bellow to sum mutliples of 7 between two numbers</h2>
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
$avcal = 0;
$count = 0;

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


    do{       
        $sum = $sum + ($min * $min);
        $avcal = $avcal + 1;
        $count++;        
        $min++;
        
    } while ($min <= $max);
        $average = bcdiv($sum, $avcal,3);
    echo "The sum squared is equal to $sum <br/>";
    echo "The average is equal to $average <br/>";
    echo "The count is equal to $count";


}