<?php
declare(strict_types=1);
namespace ZimCodes\Self_Learning\Algorithms\Searches\Exponential;
use ZimCodes\Self_Learning\Algorithms\Searches;
use ZimCodes\Self_Learning\Algorithms\Searches\Binary_Search;
class Search extends Searches\Search{
    private static Binary_Search\Search $binarySearch;
    public function __construct(){
        self::$binarySearch = new Binary_Search\Search();
    }
    protected function searching(array &$array, float|int $target): int{
        $i = 1;
        $count = count($array);
        while($i < $count && $array[$i] < $target)
            $i *= 2;
        if($i >= $count){
            $i = $count-1;
        }
        return self::$binarySearch->search($array,$target,intdiv($i,2),$i);
    }
}