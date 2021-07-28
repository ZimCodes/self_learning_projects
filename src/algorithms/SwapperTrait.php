<?php
declare(strict_types=1);
namespace ZimCodes\Self_Learning\Algorithms;
trait SwapperTrait{
    public static function swap(array &$array, int $i, int $j):void{
        $temp = $array[$i];
        $array[$i] = $array[$j];
        $array[$j] = $temp;
    }
}