<?php
session_start();
$change = array();
$output = array();

if (!isset($_POST["myGuess"])) {
     $_SESSION["count"] = 0;
     $_SESSION["guess"] = "";
     $message = "Guess letters or a full word (lowercase)";
     $random =rand(0,4);
     $words = array("michael", "david", "barr", "silly", "computer");
     $_POST["theWord"] = $words[$random];
     $change = str_split($_POST["theWord"]);
   

    } else if ($_POST["myGuess"] == $_POST["theWord"]) {
    $_SESSION["count"]++; 
    $message = "CONGRATS FULL WORD FOUND You Got it in ".$_SESSION["count"]." trials!";
    unset($_SESSION["count"]);


    } else if (stristr( $_POST["theWord"], $_POST["myGuess"])) {
        $_SESSION["guess"] .= $_POST["myGuess"];


    $Guess =($_POST["myGuess"]);

    foreach($change as $word){
        echo "$word";
        $output[] = ($word == $Guess) ? $word : '*';
    }
    $Whatsleft = implode($output);

    $_SESSION["count"]++; 
    $message = "You found the letters " . $_SESSION["guess"] . " currently have you have made ".$_SESSION["count"]." trials!";

} else { 
    $_SESSION["count"]++;
    $message = "Found no letters ".$_SESSION["count"]." trials!"; 

}
?>
<html>

    <head>
        <title>WordGuess</title>
    </head>
    <body>
    <h1><?php echo $message; ?></h1>
        <form action="" method="POST">
        <p><strong>Key in your guess:</strong>
            <input type="text" name="myGuess"></p>
            <input type="hidden" name="theWord" 
                  value="<?php echo $_POST["theWord"]; ?>" ></p>
    <p><input type="submit" value="Guess!"/></p>
        </form>
    </body>
</html>