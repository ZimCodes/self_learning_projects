<?php
declare(strict_types=1);
namespace ZimCodes\Self_Learning\DataStructures\Graphs;
abstract class Graph implements IGraph {
    protected array $visited;
    public function __construct(){
        $this->visited = [];
    }
    public function explore(INode $node): void{
        $this->reInit();
        $this->exploring($node);
    }
    protected function reInit(){
        $this->visited = [];
    }
    public function getPathString(): array
    {
        $arr = [];
        foreach ($this->visited as $node) {
            $arr[] = $node->getName();
        }
        return $arr;
    }

    abstract protected function exploring(INode $node):void;
    abstract public function getPath(): array;
}