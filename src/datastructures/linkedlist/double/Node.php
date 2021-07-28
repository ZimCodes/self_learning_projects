<?php
declare(strict_types=1);
namespace ZimCodes\Self_Learning\DataStructures\LinkedList\Double;
use JetBrains\PhpStorm\Pure;
use ZimCodes\Self_Learning\DataStructures\LinkedList;
use ZimCodes\Self_Learning\DataStructures\LinkedList\INode;

class Node extends LinkedList\Node{
    #[Pure] public function __construct(mixed $value, private ?INode $parent = null, ?INode $child = null){
        parent::__construct($value,$child);
    }
    public function delete(mixed $value): void{
        if($this->child === null) return;
        if($value !== $this->child->getValue()){
            $this->child->delete($value);
        }else{
            $grandChild = $this->child->getChild();
            $this->child = $grandChild;
            $grandChild->setParent($this);
        }
    }
    public function getParent():?INode{
        return $this->parent;
    }
    public function setParent(?INode $parent):void{
        $this->parent = $parent;
    }
}