<?php
declare(strict_types=1);
namespace ZimCodes\Self_Learning\DataStructures\Graphs;
use JetBrains\PhpStorm\Pure;

abstract class GraphVisited extends Graph{
    protected array $hasVisited;
    #[Pure] public function __construct(){
        parent::__construct();
        $this->hasVisited = [];
    }
    protected function reInit()
    {
        parent::reInit();
        $this->hasVisited = [];
    }
    abstract protected function exploring(INode $node): void;

    abstract public function getPath(): array;

}