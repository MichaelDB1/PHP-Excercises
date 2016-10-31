<!DOCTYPE html>
<html>
<head>
    <title>TestPalindromWord</title>
</head>
<form action="Exercise18.php" method="POST">
<h2>Enter text to see if it's a Palindrome</h2>
<input type="text" name="theString"/>

<input type="submit" value="SUBMIT"/>
<h3>
</form>
</body>
</html>

<?php
$myString;
$ReversedString="";
$myStringLength;
$Output="Is a Palindrome";

if( isset($_POST{'theString'})){    
    $myString = $_POST[ 'theString' ];

    $myString = strtolower($myString);


    $front =0;
    $back =strlen($myString) -1;

    while($front < $back)
    {
        $theFront = $myString[$front];
        $theBack = $myString[$back];
        if (ctype_alpha($theFront) && ctype_alpha($theBack)){
            if($theFront != $theBack)
            {
                $Output = "Is not a Palindrome";
                break;
            }
        }
            if(ctype_alpha($theFront) && ctype_alpha($theBack))
            {
                $front += 1;
                $back -= 1;
            }
            else if(ctype_alpha($theFront))
            {
                $back -= 1;
            }
            else if(ctype_alpha($theBack))
            {
                $front += 1;
            }
            else
            {
                $back -= 1;
                $front += 1;
            }

    }

echo "Your starting string was $myString <br/>";
echo "$Output";
}

?>
