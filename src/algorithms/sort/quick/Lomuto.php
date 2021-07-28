<?php
declare(strict_types=1);
namespace ZimCodes\Self_Learning\Algorithms\Sort\Quick;
use ZimCodes\Self_Learning\Algorithms\SwapperTrait;

class Lomuto extends QuickSort{
    public function sort(array &$array): void{
        $this->sorting($array,0,count($array)-1);
    }

    protected function sorting(array &$array, int $low = 0, int $high = 0): void{
        if($low >= $high) return;
        $p = $this->partition($array,$low,$high);
        $this->sorting($array,$low,$p-1);
        $this->sorting($array,$p+1,$high);
    }

    protected function partition(array &$array, int $low, int $high): int{
        $pivot = $array[$high];
        $i = $low;
        for($j=$low;$j<$high;$j++){
            if($array[$j] < $pivot){
                self::swap($array,$i,$j);
                $i++;
            }
        }
        self::swap($array,$high,$i);
        return $i;
    }
}