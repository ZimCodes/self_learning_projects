<?php
declare(strict_types=1);
namespace ZimCodes\Self_Learning\DataStructures\Trees\Binary_Search;
interface INode{
    function insert(int|float $value):void;
    function contains(int|float $value):bool;
    function search(int|float $value):?INode;
    function getLeft():?INode;
    function setLeft(?INode $node):void;
    function getRight():?INode;
    function setRight(?INode $node):void;
    function getParent():?INode;
    function setParent(?INode $node):void;
    function getValue():int|float;
}