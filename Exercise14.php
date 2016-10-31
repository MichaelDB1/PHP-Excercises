<?php

class Fibonacci
{
    protected $totalResult;
    protected $theString;
    protected $listArray = [];
    protected $output;
    public function __construct( $number )
    {
        $myMax = $number;
        $numOne =1;
        $numTwo = 0;
        $Total = 0.0;
        $myList = "The first twenty fibonocci numbers are: <br/>";

        for($i=0; $i < $myMax; $i++){
           
            $Total = $numOne + $numTwo;  
            $numOne =  $numTwo;                     
            $numTwo = $Total;
            $myList .= " $numTwo";
            $this->listArray[$i] = $numTwo;
                      
        }
        $this->totalResult = $Total;
        $this->theString .= $myList;
    }
    public function getFib()
    {
        return $this->totalResult;
    }
    public function getFibs()
    {
        $this->output = array("Starting Array"=>$this->listArray);
        return $this->output;
    }
}

echo $_SERVER['QUERY_STRING' ];
echo (" , ");
$numberIn = $_SERVER[ 'QUERY_STRING' ];
$holder = new Fibonacci( $numberIn );
echo json_encode($holder->getFib());
echo "<br/>";
echo json_encode($holder->getFibs());


?>