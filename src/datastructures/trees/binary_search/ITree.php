<?php
declare(strict_types=1);
namespace ZimCodes\Self_Learning\DataStructures\Trees\Binary_Search;
interface ITree{
    function insert(int|float $value):void;
    function contains(int|float $value):bool;
    function search(int|float $value):?INode;
    function delete(int|float $value):void;
}