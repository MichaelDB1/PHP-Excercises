<?php

class Prime
{
	protected $pageInput;
	
	public function __construct($theInput)
	{
		$this->pageInput = (int)$theInput;
	}
	
	public function isPrime()
	{
		$max = sqrt($this->pageInput);
		if ($this->pageInput <= 1)
		{
			return false;
		}
		else
		{
			for ($i = 2; $i<=$max; $i++)
			{
				if ( $this->pageInput % $i == 0)
				{
					return false;
				}
			}
				return true;
		}
	}

}

$Input = $_SERVER['QUERY_STRING'];
header ('Content-type: application/json');

$primeStart = new Prime($Input);
$reply = $primeStart->isPrime();
$result = ["number"=>(int)$Input, "isPrime"=>$reply];
echo json_encode($result);

?>