<!DOCTYPE html>
<html>
<head>
    <title>ReverseString</title>
</head>
<form action="Exercise16.php" method="POST">
<h2>Simple String Reverser</h2>
<input type="text" name="theString"/>

<input type="submit" value="SUBMIT"/>
<h3>
</form>
</body>
</html>

<?php
$myString;
$ReversedString="";

if( isset($_POST{'theString'})){    
    $myString = $_POST[ 'theString' ];

    for($i =strlen($myString) -1; $i >= 0; $i--){


        $ReversedString .= $myString[$i];
    }

echo "Your starting string was $myString <br/>";
echo "That reversed is $ReversedString";
}

?>
