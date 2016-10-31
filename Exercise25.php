<?php

Class isPerfect
{
    protected $pUpperBound = 0;
    protected $pOutput = [];
    protected $pArray = [];

    public function __construct( $theInput ){
        $this->pUpperBound = $theInput;

        $this->findPerfect();
    }

    public function findPerfect(){
        for($i = $this->pUpperBound; $i > 0; $i--){
        $tester = $i;

        $temp = 0.0;
        for($j = 1; $j <= $tester; $j++){
            if($tester % $j == 0){
                echo "j$j ";
                $temp += $j;
            }
        }
        echo "temp here$temp ";

        if($temp = $this->pUpperBound && $temp != 0){            
            $this->pArray[] .= $temp;
            echo "something$temp ";
        }

        }

    }
    public function getPerfect(){
        $this->output = array("Perfect Numbers"=>$this->pArray);
        return $this->output;
    }
}


/*

Class isDeficient
{
    protected $dUpperBound = 0;
    protected $output = [];

    public function __construct( $theInput ){
        $this->dUpperBound = $theInput;



        $this->calcAverage();
    }


    public function calcAverage(){

        foreach($this->grades as $grade){
            static $sum = 0;
            $sum += $grade;
        }
        $this->average = $sum/count($this->grades);
    }


    public function getDeficient(){
        $this->output = array("Average"=>$this->average, "data"=>$this->grades);
        return $this->output;
    }
}


*/



if(isset($_SERVER["QUERY_STRING"])){
	$input = $_SERVER["QUERY_STRING"];
    $numbers = new isPerfect ($input);

    echo json_encode($numbers->getPerfect());
  //  echo "<br/>";
    //echo json_encode($numbers->getDeficient());    
}
    
?>