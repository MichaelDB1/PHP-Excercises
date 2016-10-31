<?php

Class GradesAverage
{
    protected $grades = [];
    protected $average = 0;
    protected $output = [];
    protected $max = 0;
    protected $min = 100;
    protected $stDev = 0.0;

    public function __construct( $theInput ){
        $this->grades = array_map('intval', explode( ",", $theInput));
        $this->calcAverage();
        $this->calcMin();
        $this->calcMax();
        $this->calcStandardDeviation();
    }


    public function calcAverage(){

        foreach($this->grades as $grade){
            static $sum = 0;
            $sum += $grade;
        }
        $this->average = $sum/count($this->grades);
    }

    public function calcMin(){

        foreach($this->grades as $grade){
            if($this->min > $grade){
                $this->min = $grade;
            }
        }
    }

    public function calcMax(){
        foreach($this->grades as $grade){
            if($this->max < $grade){
                $this->max = $grade;
            }
        }
    }

    public function calcStandardDeviation(){
        foreach($this->grades as $grade){
            if($grade < $this->average)
            {
                $this->stDev += (($this->average - $grade)*($this->average - $grade));
            }
            if($grade > $this->average)
            {
                $this->stDev += (($grade - $this->average)*($grade - $this->average));
            }
        }
        static $holder = 0.0;
        $holder = $this->stDev/count($this->grades);
        $holder = sqrt($holder);
        $this->stDev = $holder;
    }


    public function getTheOutput(){
        $this->output = array("Average"=>$this->average, "min"=>$this->min, "max"=>$this->max, "Standard Deviation"=>$this->stDev, "data"=>$this->grades);
        return $this->output;
    }
}

if(isset($_SERVER["QUERY_STRING"])){
	$input = $_SERVER["QUERY_STRING"];

    $myGrades = new GradesAverage ($input);
    echo json_encode($myGrades->getTheOutput());
}
    
?>