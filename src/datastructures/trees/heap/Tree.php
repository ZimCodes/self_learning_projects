<?php
declare(strict_types=1);
namespace ZimCodes\Self_Learning\DataStructures\Trees\Heap;
use ZimCodes\Self_Learning\Algorithms\SwapperTrait;

class Tree{
    use SwapperTrait;
    private array $nodes;
    public function __construct(){
        $this->nodes = [];
    }
    private function left(int $i):int{
        return 2 * $i + 1;
    }
    private function right(int $i):int{
        return 2 * $i + 2;
    }
    private function parent(int $i):int{
        return (int)floor($i-1/2);
    }
    private function hasLeft(int $i):bool{
        return $this->left($i) < count($this->nodes);
    }
    private function hasRight(int $i):bool{
        return $this->right($i) < count($this->nodes);
    }
    private function isLeaf(int $i):bool{
        return !$this->hasLeft($i) && !$this->hasRight($i);
    }
    private function hasBoth(int $i):bool{
        return $this->hasLeft($i) && $this->hasRight($i);
    }
    private function isRoot(int $i):bool{
        return $this->parent($i) === -1;
    }
    public function insert(int|float $value):void{
        $this->nodes[] = $value;
        $count = count($this->nodes);
        if($count === 1) return;
        $this->shiftUp($count-1);
    }
    private function shiftUp(int $i):void{
        if($this->isRoot($i)) return;
        $parentIndex = $this->parent($i);
        $parentVal = $this->nodes[$parentIndex];
        if($this->nodes[$i] > $parentVal){
            self::swap($this->nodes,$i,$parentIndex);
            $this->shiftUp($parentIndex);
        }
    }
    public function pop():int|false{
        $count = count($this->nodes);
        if($count === 0) return false;
        if($count === 1) return array_pop($this->nodes);
        self::swap($this->nodes,0,$count-1);
        $nodeToPop = array_pop($this->nodes);
        $this->shiftDown(0);
        return $nodeToPop;
    }
    private function shiftDown(int $i):void{
        $largest = $i;
        $compareIndex = $this->left($i);
        $count = count($this->nodes);
        if($compareIndex < $count && $this->nodes[$compareIndex] > $this->nodes[$largest]){
            $largest = $compareIndex;
        }
        $compareIndex = $this->right($i);
        if($compareIndex < $count && $this->nodes[$compareIndex] > $this->nodes[$largest]){
            $largest = $compareIndex;
        }
        if($largest !== $i){
            self::swap($this->nodes,$i,$largest);
            $this->shiftDown($largest);
        }
    }
}