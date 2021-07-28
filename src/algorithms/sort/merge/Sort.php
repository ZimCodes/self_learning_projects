<?php
declare(strict_types=1);
namespace ZimCodes\Self_Learning\Algorithms\Sort\Merge;
use ZimCodes\Self_Learning\Algorithms;
class Sort extends Algorithms\Sort\Sort{

    public function sort(array &$array):array{
        return $this->sorting($array);
    }

    protected function sorting(array &$array):array{
        $count = count($array);
        if($count <= 1) return $array;
        $leftSize = intdiv($count, 2);
        $leftArr = array_slice($array,0,$leftSize);
        $leftArr = $this->sorting($leftArr);
        $rightSize = $count - $leftSize;
        $rightArr = array_slice($array,$leftSize,$count);
        $rightArr = $this->sorting($rightArr);
        return $this->merge($leftArr,$leftSize,$rightArr,$rightSize);
    }
    private function merge(array $leftArr,int $leftSize,array $rightArr,int $rightSize):array{
        $arr = [];
        $mergeIndex = 0;
        $leftIndex = 0;
        $rightIndex = 0;
        while($leftIndex < $leftSize && $rightIndex < $rightSize){
            $leftVal = $leftArr[$leftIndex];
            $rightVal = $rightArr[$rightIndex];
            if($leftVal < $rightVal){
                $arr[$mergeIndex] = $leftVal;
                $leftIndex++;
                $mergeIndex++;
            }elseif($leftVal > $rightVal){
                $arr[$mergeIndex] = $rightVal;
                $rightIndex++;
                $mergeIndex++;
            }else{
                $arr[$mergeIndex] = $leftVal;
                $leftIndex++;
                $mergeIndex++;

                $arr[$mergeIndex] = $rightVal;
                $rightIndex++;
                $mergeIndex++;
            }
        }
        for($i = $leftIndex;$i<$leftSize;$i++){
            $arr[$mergeIndex] = $leftArr[$i];
            $mergeIndex++;
        }
        for($i = $rightIndex;$i<$rightSize;$i++){
            $arr[$mergeIndex] = $rightArr[$i];
            $mergeIndex++;
        }
        return $arr;
    }
}