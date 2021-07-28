<?php
declare(strict_types=1);
namespace ZimCodes\Self_Learning\Algorithms\Searches;
abstract class Search implements ISearch {
    public function search(array &$array,int|float $target): int{
        return $this->searching($array,$target);
    }
    abstract protected function searching(array &$array,int|float $target):int;
}