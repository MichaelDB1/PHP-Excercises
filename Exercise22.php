<?php
session_start();

if (!isset($_POST["myGuess"])) {
     $_SESSION["count"] = 0;
     $message = "Guess the number between 0 and 100";
     $_POST["theNumber"] = rand(0,100);
 
} else if ($_POST["myGuess"] > $_POST["theNumber"]) {
    $message = "Try smaller";
    $_SESSION["count"]++; 

} else if ($_POST["myGuess"] < $_POST["theNumber"]) { 
    $message = "Try Higher";
    $_SESSION["count"]++; 

} else { 
    $_SESSION["count"]++;
    $message = "You got it in ".$_SESSION["count"]." trials!"; 
    unset($_SESSION["count"]);
}
?>
<html>

    <head>
        <title>NumberGuess</title>
    </head>
    <body>
    <h1><?php echo $message; ?></h1>
        <form action="" method="POST">
        <p><strong>Key in your guess:</strong>
            <input type="text" name="myGuess"></p>
            <input type="hidden" name="theNumber" 
                  value="<?php echo $_POST["theNumber"]; ?>" ></p>
    <p><input type="submit" value="Guess!"/></p>
        </form>
    </body>
</html>