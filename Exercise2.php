<!DOCTYPE html>
<html>
<head>
    <title>Check Number</title>
</head>
<body>
<form action="Exercise2.php" method="POST" >
<h2>Enter number bellow</h2>
<input type="text" name= "newnumber" > </input>
<input type="submit" value="SUBMIT" />
<h3>That number gets a result of</h3>
</form>
</body>
</html>

<?php
$numb = 0;
$result = "Odd";
if ( isset($_POST{'newnumber'})){
    $numb = $_POST[ 'newnumber'];

    if ($numb % 2 <= 0)
    {
        $result = "EVEN";
       
    }
    
    echo "$result";
   

    
}
?>