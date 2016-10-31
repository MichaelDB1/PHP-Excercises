<!DOCTYPE html>
<html>
<head>
    <title>SumAndAverage</title>
</head>
<body>
<form action="Exercise6.php" method="POST">
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
$average =0;

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
    $avcal = $min;

    do {
        $sum = $sum + $min;
        $min++;
        $average = $sum /($max-($avcal-1));
    } while ($min <= $max);

    echo "$sum <br/>";
    echo "$average";
}
