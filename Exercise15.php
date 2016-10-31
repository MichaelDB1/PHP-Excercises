<?php

class Tribonacci
{
    protected $totalResult;
    protected $theString;
    public function __construct( $number )
    {
        $myMax = $number;
        $numbOne = 1;
        $numbTwo = 0;
        $numbThree = 0;
        $total = 0.0;
        $myData = "The first twenty trib numbers are: <br/>";

        for($i = 0; $i < $myMax; $i++){

            $total = $numbOne + $numbTwo + $numbThree;
            $numbOne = $numbTwo;
            $numbTwo = $numbThree;           
            $numbThree = $total;
            $myData .= " $total";                        
        }
        $this->totalResult = $total;
        $this->theString .= " $myData";

    }

    public function getTrib()
    {
        return $this->totalResult;
    }
    public function getTribs()
    {
        return $this->theString;
    }
}

echo $_SERVER['QUERY_STRING' ];
echo (", ");
$numberIn = $_SERVER[ 'QUERY_STRING' ];
$holder = new Tribonacci( $numberIn );
echo json_encode($holder->getTrib());
echo "<br/>";
echo $holder->getTribs();

?>