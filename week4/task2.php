<?php

    interface Data 
    {
        public function numberOfSale(): int;
    }

    class ABA
    {
        public $sale;
        public function __construct($n)
        {
            $this->sale=$n;
        }
        public function numberOfSale(): int
        {
           echo "aba sale ". $this->sale;
           echo "\n";
            return $this->sale;
        }
    }

    class Pipay
    {   
        public $sale;
        public function __construct($n)
        {
            $this->sale=$n;
        }
        public function numberOfSale() : int
        {
           echo "pipay sale ".$this->sale;
           echo "\n";
            return $this->sale;
        }

    }
    
    class Wing
    {
        public $sale;
        public function __construct($n)
        {
            $this->sale=$n;
        }
        public function numberOfSale(): int
        {
           echo "wing sale ".$this->sale;
           echo "\n";
            return $this->sale;
        }

    }

    $aba1= new ABA(5);
    $aba2= new ABA(10);
    $pipay1= new Pipay(6);
    $pipay2= new Pipay(12);
    $wing = new Wing(2);
 //////////////////////////////////////////////ABA//////////////////////////////////////////////////
 echo "Total of all ABA\n";
    $totalAbA=array($aba1,$aba2);
    foreach ($totalAbA as $value)
    {
        $value->numberOfSale();
    }
//////////////////////////////////////////////PipayWing////////////////////////////////////////////////
echo "Total of all Pipay and Wing\n";
    $totalPipayWing=array($pipay1,$pipay2,$wing);
    foreach ($totalPipayWing as $value)
    {
        $value->numberOfSale();
    }
////////////////////////////////////////////////Total/////////////////////////////////////////
    echo "Total of all payment\n";
    $sum=array($aba1,$aba2,$pipay1,$pipay2,$wing);
    //Sort the array obj field
    function cmp($a, $b) {
        return $a->sale < $b->sale;
    }
    
    usort($sum, "cmp");
    foreach ($sum as $value)
    {
        $value->numberOfSale();
    }

?>