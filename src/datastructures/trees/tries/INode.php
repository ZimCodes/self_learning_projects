<?php
declare(strict_types=1);
namespace ZimCodes\Self_Learning\DataStructures\Trees\Tries;
interface INode{
    function insert(string $value,int $index):void;
    function contains(string $value,int $index):bool;
    function getLetters():array;
}