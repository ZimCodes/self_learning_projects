<?php
declare(strict_types=1);
namespace ZimCodes\Self_Learning\DataStructures\Graphs;
interface INode {
    function addNeighbor(INode $node,float $cost = 0):void;
    function getNeighbors():array;
    function getName():string;
}