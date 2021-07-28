<?php
declare(strict_types=1);
namespace ZimCodes\Self_Learning\Algorithms\Sort;
abstract class SortOut extends Sort{
    public function sort(array &$array):array{
        return $this->sorting($array);
    }
    abstract public function sorting(array &$array):array;
}