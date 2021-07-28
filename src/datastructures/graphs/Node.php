<?php
declare(strict_types=1);
namespace ZimCodes\Self_Learning\DataStructures\Graphs;
final class Node implements INode {
    private array $neighbors;
    public function __construct(private string $name){
        $this->neighbors = array();
    }
    public function addNeighbor(INode $node,float $cost = 0): void{
        $this->neighbors[] = new Edge($node,$cost);
    }
    public function getNeighbors(): array{
        return $this->neighbors;
    }
    public function getName():string{
        return $this->name;
    }
}