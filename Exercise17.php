<!DOCTYPE html>
<html>
<head>
    <title>PhoneKeyBad</title>
</head>
<form action="Exercise17.php" method="POST">
<h2>Phone key generator</h2>
<input type="text" name="theString"/>

<input type="submit" value="SUBMIT"/>
<h3>
</form>
</body>
</html>

<?php
$myString;
$myStringLength = 0;

$TheOutput="The phone keys for that text equal: ";

if( isset($_POST{'theString'})){    
    $myString = $_POST[ 'theString' ];

    $myString = strtolower($myString);
    $myStringLength =strlen($myString);

    for($i = 0; $i <= $myStringLength -1; $i++){
        $myChar = $myString[$i];
        if($myChar == 'a' || $myChar == 'b' || $myChar == 'c'){
            $TheOutput .= "2";
        }
        if($myChar == 'd' || $myChar == 'e' || $myChar == 'f'){
            $TheOutput .= "3";
        }
        if($myChar == 'g' || $myChar == 'h' || $myChar == 'i'){
            $TheOutput .= "4";
        }
        if($myChar == 'j' || $myChar == 'k' || $myChar == 'l'){
            $TheOutput .= "5";
        }
        if($myChar == 'm' || $myChar == 'n' || $myChar == 'o'){
            $TheOutput .= "6";
        }
        if($myChar == 'p' || $myChar == 'q' || $myChar == 'r' || $myChar == 's'){
            $TheOutput .= "7";
        }
        if($myChar == 't' || $myChar == 'u' || $myChar == 'v'){
            $TheOutput .= "8";
        }
        if($myChar == 'w' || $myChar == 'x' || $myChar == 'y' || $myChar == 'z'){
            $TheOutput .= "9";
        }
    }

    echo "Your text was $myString <br/>";
    echo "The output of that is $TheOutput";



}

?>
