<?php

Class ReverseInts
{
    protected $startArray = [];
    protected $arrayHolder = [];
    protected $output = [];

    public function __construct( $theInput ){
        $this->startArray = array_map('intval', explode( ",", $theInput));
        $this->arrayHolder = $this->startArray;
        $this->reverse();
    }


    public function reverse(){
        $theCount = count($this->startArray);
        for($i = 0; $i < $theCount/2; $i++)
        {
            $Temp = $this->startArray[$i];
            $this->startArray[$i] = $this->startArray[$theCount -1 - $i];
            $this->startArray[$theCount -1 -$i] = $Temp;

        }
    }


    public function EndArray(){
        $this->output = array("Starting Array"=>$this->arrayHolder, "Reversed is"=>$this->startArray);
        return $this->output;
    }
}

if(isset($_SERVER["QUERY_STRING"])){
	$input = $_SERVER["QUERY_STRING"];

    $myArray = new ReverseInts ($input);
    echo json_encode($myArray->EndArray());
}
    
?>