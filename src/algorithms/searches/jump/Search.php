<?php
declare(strict_types=1);
namespace ZimCodes\Self_Learning\Algorithms\Searches\Jump;
use ZimCodes\Self_Learning\Algorithms\Searches;
final class Search extends Searches\Search{
    public function search(array &$array, float|int $target,int $steps = 4): int{
         return $this->searching($array,$target,$steps,$steps);
    }

    protected function searching(array &$array, float|int $target,int $steps=4,int $high=0): int{
        $low = $high - $steps;
        $count = count($array);
        if($low >= $count) return -1;
        if($high >= $count){
            $high = $count;
        }
        if($target >= $array[$low] && $target <= $array[$high-1]){
            for($i=$low;$i<$high;$i++){
                if($array[$i] === $target){
                    return $i;
                }
            }
        }
        return $this->searching($array,$target,$steps,$high+$steps);
    }
}