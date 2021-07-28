<?php
declare(strict_types=1);
namespace ZimCodes\Self_Learning\Algorithms\Sort\Bubble;
use ZimCodes\Self_Learning\Algorithms;
class Sort extends Algorithms\Sort\Sort{
    use Algorithms\SwapperTrait;
    public function sort(array &$array):void{
        $this->sorting($array);
    }

    protected function sorting(array &$array):void{
        $count = count($array);
        for($i=0;$i<$count-1;$i++){
            for($j=1;$j<$count;$j++){
                if($array[$j-1] > $array[$j]){
                    self::swap($array,$j-1,$j);
                }
            }
        }
    }
}