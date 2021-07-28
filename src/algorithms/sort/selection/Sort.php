<?php
declare(strict_types=1);
namespace ZimCodes\Self_Learning\Algorithms\Sort\Selection;
use ZimCodes\Self_Learning\Algorithms\SwapperTrait;
use ZimCodes\Self_Learning\Algorithms\Sort\SortIn;

final class Sort extends SortIn {
    use SwapperTrait;
    protected function sorting(array &$array): void{
        for($i = 0;$i < count($array)-1;$i++){
            $smallest = $i;
            for($j=$i + 1;$j < count($array);$j++){
                if($array[$j] < $array[$smallest]){
                    $smallest = $j;
                }
            }
            SwapperTrait::swap($array,$i,$smallest);
        }
    }
}