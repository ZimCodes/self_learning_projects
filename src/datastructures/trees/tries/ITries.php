<?php
declare(strict_types=1);
namespace ZimCodes\Self_Learning\DataStructures\Trees\Tries;
interface ITries{
    function insert(string $word):void;
    function contains(string $word):bool;
    function getAllWords(?INode $startNode=null,string $word="",array &$words=[]):array;
}