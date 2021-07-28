<?php
namespace ZimCodes\Self_Learning\Algorithms\Sort;
abstract class Sort implements ISort{
    
    abstract public function sort(array &$array);
    abstract protected function sorting(array &$array);
}