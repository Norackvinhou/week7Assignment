<?php
    function sum(...$number)
    {
        $sum=0;
        foreach($number as $tmp)
        {
            $sum+=$tmp;
        }
        return $sum;
    }
    //as many argument as we want
echo sum(5,5,10);
echo "\n";
echo sum(5,5,5,10);
?>