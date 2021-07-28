<?php
declare(strict_types=1);
namespace ZimCodes\Self_Learning\Algorithms\Sort\Heap;
use ZimCodes\Self_Learning\Algorithms\Sort\SortIn;
use ZimCodes\Self_Learning\Algorithms\SwapperTrait;
final class Sort extends SortIn{
    use SwapperTrait;
    protected function sorting(array &$array): void
    {
        $count = count($array);
        for($i = intdiv($count,2) - 1; $i > -1;$i--){
            $this->heapify($array,$count,$i);
        }

        for($i = $count - 1;$i > 0;$i--){
            self::swap($array,0,$i);
            $this->heapify($array,$i,0);
        }
    }
    private function heapify(array &$array, int $count,int $i):void{
        $largest = $i;
        $left = 2 * $i + 1;
        $largest = $this->setLargest($array,$count,$largest,$left);
        $right = 2 * $i + 2;
        $largest = $this->setLargest($array,$count,$largest,$right);
        if($largest !== $i){
            self::swap($array,$largest,$i);
            $this->heapify($array,$count,$largest);
        }
    }
    private function setLargest(array $array,int $count, int $largest,int $compareIndex): int{
        if($compareIndex < $count && $array[$compareIndex] > $array[$largest]){
            return $compareIndex;
        }
        return $largest;
    }
}