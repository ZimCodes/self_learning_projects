<?php
declare(strict_types=1);
namespace ZimCodes\Self_Learning\Algorithms\Sort\Quick;
use ZimCodes\Self_Learning\Algorithms\Sort\SortIn;
use ZimCodes\Self_Learning\Algorithms\SwapperTrait;

abstract class QuickSort extends SortIn{
    use SwapperTrait;
    abstract protected function sorting(array &$array,int $low=0,int $high=0): void;
    abstract protected function partition(array &$array,int $low,int $high):int;
}