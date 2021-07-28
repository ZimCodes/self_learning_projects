<?php
declare(strict_types=1);
namespace ZimCodes\Self_Learning\DataStructures\Graphs\Depth_First;
use ZimCodes\Self_Learning\DataStructures\Graphs;
use ZimCodes\Self_Learning\DataStructures\Graphs\INode;

class Graph extends Graphs\GraphVisited {
    protected function exploring(INode $node): void{
        if(@$this->hasVisited[$node->getName()]) return;
        $this->hasVisited[$node->getName()] = true;
        $this->visited[] = $node;
        foreach($node->getNeighbors() as $neighbor){
            $this->exploring($neighbor->getTo());
        }
    }
    public function getPath(): array{
        return $this->visited;
    }
}