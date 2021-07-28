<?php
declare(strict_types=1);
namespace ZimCodes\Self_Learning\DataStructures\Graphs\Dijkstra;
use JetBrains\PhpStorm\Pure;
use ZimCodes\Self_Learning\DataStructures\Graphs;

final class Graph extends Graphs\Graph{
    use Graphs\NodePriorityQueueTrait;
    private array $cameFrom;
    private array $costSoFar;
    private array $queue;
    #[Pure] public function __construct()
    {
        parent::__construct();
        $this->cameFrom = [];
        $this->costSoFar = [];
        $this->queue = [];
    }

    protected function exploring(Graphs\INode $node): void
    {
        $this->queue[] = new Graphs\Edge($node);
        $this->costSoFar[$node->getName()] = 0;
        $this->cameFrom[$node->getName()] = null;
        while(!empty($this->queue)){
            $curNode = $this->pop($this->queue);
            foreach($curNode->getNeighbors() as $neighbor) {
                $newCost = $this->costSoFar[$node->getName()] + $neighbor->getCost();
                if ((@!$this->costSoFar[$neighbor->getTo()->getName()] && @$this->costSoFar[$neighbor->getTo()->getName()] !== 0) || $this->costSoFar[$neighbor->getTo()->getName()] > $newCost) {
                    $this->costSoFar[$neighbor->getTo()->getName()] = $newCost;
                    $this->cameFrom[$neighbor->getTo()->getName()] = $curNode;
                    $this->queue[] = $neighbor;
                }
            }
        }
    }

    public function getPath(Graphs\INode $start = null,Graphs\INode $target = null): array
    {
        $this->visited = [];
        $curNode = $target;
        while($curNode && $curNode !== $start){
            $this->visited[] = $curNode;
            $curNode = $this->cameFrom[$curNode->getName()];
        }
        $this->visited[] = $start;
        $this->visited = array_reverse($this->visited);
        return $this->visited;
    }
    public function getPathString(Graphs\INode $start = null,Graphs\INode $target = null):array{
        $this->getPath($start,$target);
        return parent::getPathString();
    }
    protected function reInit()
    {
        parent::reInit();
        $this->costSoFar = [];
        $this->cameFrom = [];
    }
}