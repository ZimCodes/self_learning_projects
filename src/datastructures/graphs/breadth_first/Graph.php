<?php
declare(strict_types=1);
namespace ZimCodes\Self_Learning\DataStructures\Graphs\Breadth_First;
use JetBrains\PhpStorm\Pure;
use ZimCodes\Self_Learning\DataStructures\Graphs;
use ZimCodes\Self_Learning\DataStructures\Graphs\{INode,Edge};

final class Graph extends Graphs\GraphVisited {
    private array $queue;
    #[Pure] public function __construct(){
        parent::__construct();
        $this->queue = [];
    }
    protected function exploring(INode $node): void{
        $this->queue[] = $node;
        while(!empty($this->queue)){
            $curNode = array_shift($this->queue);
            if(!array_key_exists($curNode->getName(),$this->hasVisited)){
                foreach($curNode->getNeighbors() as $neighbor){
                    $this->queue[] = $neighbor->getTo();
                }
                $this->hasVisited[$curNode->getName()] = true;
                $this->visited[] = $curNode;
            }
        }
    }
    public function getPath(): array{
        return $this->visited;
    }
}