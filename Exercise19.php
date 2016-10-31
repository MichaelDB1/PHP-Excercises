<?php

Class GradesAverage
{
    protected $grades = [];
    protected $average = 0;
    protected $output = [];

    public function __construct( $theInput ){
        $this->grades = array_map('intval', explode( ",", $theInput));
        $this->calcAverage();
    }


    public function calcAverage(){

        foreach($this->grades as $grade){
            static $sum = 0;
            $sum += $grade;
        }
        $this->average = $sum/count($this->grades);
    }


    public function getTheOutput(){
        $this->output = array("Average"=>$this->average, "data"=>$this->grades);
        return $this->output;
    }
}

if(isset($_SERVER["QUERY_STRING"])){
	$input = $_SERVER["QUERY_STRING"];

    $myGrades = new GradesAverage ($input);
    echo json_encode($myGrades->getTheOutput());
}
    
?>