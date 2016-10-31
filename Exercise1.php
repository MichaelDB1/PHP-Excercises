<!DOCTYPE html>
<html>
<head>
    <title>Enter a mark</title>
</head>
<body>
<form action="Exercise1.php" method="POST" >
<h2>Enter mark bellow</h2>
<input type="text" name="newmark" > </input>
<input type="submit" value="SUBMIT" />
<h3>That result of that mark is </h3>
</form>
</body>
</html>

<?php
$mark = 0;
$result = "Fail";
if ( isset($_POST{'newmark'})){
    $mark = $_POST[ 'newmark' ];
    if ($mark >= 50)
    {
        $result = "Pass";
        echo "$result";
    }
    else
    {
        echo "$result";
    }
}

?>


    