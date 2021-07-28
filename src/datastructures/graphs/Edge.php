<?php
declare(strict_types=1);
namespace ZimCodes\Self_Learning\DataStructures\Graphs;
final class Edge{
    public function __construct(private INode $to,private float $cost = 0){
    }
    public function getTo():INode{
        return $this->to;
    }
    public function getCost():float{
        return $this->cost;
    }
}