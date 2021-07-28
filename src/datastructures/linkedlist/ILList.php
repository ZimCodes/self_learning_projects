<?php
declare(strict_types=1);
namespace ZimCodes\Self_Learning\DataStructures\LinkedList;
interface ILList{
    function insert(mixed $value):void;
    function contains(mixed $value):bool;
    function search(mixed $value):?INode;
    function delete(mixed $value):void;
    function reverse():void;
}