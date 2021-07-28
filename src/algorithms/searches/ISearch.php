<?php
declare(strict_types=1);
namespace ZimCodes\Self_Learning\Algorithms\Searches;
interface ISearch{
    function search(array &$array,int|float $target):int;
}