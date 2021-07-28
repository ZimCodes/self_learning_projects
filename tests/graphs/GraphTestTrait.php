<?php
declare(strict_types=1);
namespace ZimCodes\Tests\Graphs;
use ZimCodes\Self_Learning\DataStructures\Graphs\Node;
trait GraphTestTrait{
    protected static function initNodes(array &$nodes,string $endChr = 'aa',string $startChr = 'a'):void{
        for($i = $startChr;$i !== $endChr;$i++){
            $nodes[$i] = new Node($i);
        }
    }
    protected static function addRoute(array &$nodes,string $node,array $neighborNodes){
        foreach($neighborNodes as $neighborNode => $cost){
            $nodes[$node]->addNeighbor($nodes[$neighborNode],$cost ? $cost : 0);
        }
    }
}