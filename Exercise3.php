<!DOCTYPE html>
<html>
<head>
    <title>Print Word</title>
</head>
<body>
<form action="Exercise3.php" method="POST" >
<h2>Enter a number bellow</h2>
<input type="text" name="newnumber" />
<input type="submit" value="SUBMIT" />
<h3>That number printed out is</h3>
</form>
</body>
</html>

<?php
$numb =0;
$result;
$resultSwitch;
if ( isset($_POST{'newnumber'})){
    $numb = $_POST[ 'newnumber'];

    if ($numb == 1){
        $result = "ONE";
    }
    else if ($numb == 2){
        $result = "TWO";
    }
    else if ($numb == 3){
        $result = "THREE";
    }
    else if ($numb == 4){
        $result = "FOUR";
    }
    else if ($numb == 5){
        $result = "FIVE";
    }     
    else if ($numb == 6){
        $result = "SIX";
    }     
    else if ($numb == 7){
        $result = "SEVEN";
    }     
    else if ($numb == 8){
        $result = "EIGHT";
    }     
    else if ($numb == 9){
        $result = "NINE";
    }
    else{
        $result = "OTHER";
    }

    switch ($numb){
        case 1: 
            $resultSwitch = "ONE";
            break;
        case 2: 
            $resultSwitch = "TWO";
            break;
        case 3: 
            $resultSwitch = "THREE";
            break;
        case 4:
            $resultSwitch = "FOUR";
            break;
        case 5: 
            $resultSwitch = "FIVE";
            break;
        case 6: 
            $resultSwitch = "SIX";
            break;
        case 7: 
            $resultSwitch = "SEVEN";
            break;
        case 8: 
            $resultSwitch = "EIGHT";
            break;
        case 9: 
            $resultSwitch = "NINE";
            break;
        default:
            $resultSwitch = "OTHER";
            break;
    }
echo "$result <br/>";
echo "$resultSwitch";             
}
