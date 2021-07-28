<?php
declare(strict_types=1);
namespace ZimCodes\Self_Learning\DataStructures\LinkedList;
interface INode{
    function contains(mixed $value):bool;
    function search(mixed $value):?INode;
    function delete(mixed $value):void;
    function getValue():mixed;
    function setChild(?INode $node):void;
    function getChild():?INode;
}