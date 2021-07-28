<?php
declare(strict_types=1);
namespace ZimCodes\Self_Learning\Algorithms\Sort\Quick;
class Hoare extends QuickSort{

    public function sort(array &$array): void{
        $this->sorting($array,0,count($array) - 1);
    }

    protected function sorting(array &$array, int $low = 0, int $high = 0): void{
        if($low >= $high) return;
        $p = $this->partition($array,$low,$high);
        $this->sorting($array,$low,$p);
        $this->sorting($array,$p+1,$high);
    }

    protected function partition(array &$array,int $low,int $high): int{
       $pivot = $array[$low];
       $i = $low - 1;
       $j = $high + 1;
       while($i < $j){
            do{
                $j--;
            } while($array[$j] > $pivot);
            do{
                $i++;
            } while($array[$i] < $pivot);
            if($i < $j){
                self::swap($array,$i,$j);
            }
       }
       return $j;
    }
}