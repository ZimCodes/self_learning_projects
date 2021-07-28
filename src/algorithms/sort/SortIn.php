<?php
declare(strict_types=1);
namespace ZimCodes\Self_Learning\Algorithms\Sort;
abstract class SortIn extends Sort{

    public function sort(array &$array):void
    {
        $this->sorting($array);
    }

    abstract protected function sorting(array &$array):void;
}