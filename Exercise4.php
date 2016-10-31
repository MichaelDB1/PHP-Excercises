<!DOCTYPE html>
<html>
<head>
    <title>SumAndAverage</title>
</head>
<body>
<form action="Exercise4.php" method="POST" >
<h2>Enter two numbers to return the sum of numbers between them</h2>
<input type="text" name= "numbOne"> </input>
<input type="text" name= "numbTwo"> </input>
<input type="submit" value="SUBMIT" />
<h3>
</form>
</body>
</html>


<?php
$numb1 = 0;
$numb2 = 0;
$sum = 0;
$average =0;

if ( isset($_POST{'numbOne'}, $_POST{'numbTwo'})){
    $numb1 = $_POST[ 'numbOne'];
    $numb2 = $_POST[ 'numbTwo'];
    
    if ($numb1 < $numb2)
    {
            for($i = $numb1; $i <= $numb2; $i++)
            {
                $sum = $sum + $i;
            }
            $average = $sum /($numb2-($numb1-1));            
    }
    else
    {
            for($i = $numb2; $i <= $numb1; $i++)
            {
                $sum = $sum + $i;
            }
            $average = $sum /($numb1-($numb2-1));    
    }
   
    echo "$sum <br/>";
    echo "$average";   
}

?>

