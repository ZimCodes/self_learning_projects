<?php
declare(strict_types=1);
namespace ZimCodes\Self_Learning\Algorithms\Searches\Binary_Search;
use ZimCodes\Self_Learning\Algorithms\Searches;
final class Search extends Searches\Search{
    public function search(array &$array,int|float $target,int $low = 0,int $high=1): int{
        return $this->searching($array,$target,$low,$high);
    }

    protected function searching(array &$array,int|float $target,int $low = 0,int $high = 1): int{
        if($low > $high) return -1;
        $middle = $low + intdiv($high - $low,2);
        if($array[$middle] === $target){
            return $middle;
        }
        if($array[$middle] > $target){
            return $this->searching($array,$target,$low,$middle-1);
        }
        return $this->searching($array,$target,$middle+1,$high);
    }
}