<?php
declare(strict_types=1);
namespace ZimCodes\Self_Learning\Algorithms\Sort\Insertion;
use ZimCodes\Self_Learning\Algorithms;
class Sort extends Algorithms\Sort\Sort{

    public function sort(array &$array):void{
        $this->sorting($array);
    }

    protected function sorting(array &$array):void{
        $count = count($array);
        for($i=1;$i<$count;$i++){
            $compareNum = $array[$i];
            $j = $i-1;
            while($j > -1 && $array[$j] > $compareNum){
                $array[$j+1] = $array[$j];
                $j--;
            }
            $array[$j+1] = $compareNum;
        }
    }
}