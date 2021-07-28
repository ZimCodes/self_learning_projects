<?php
declare(strict_types=1);
namespace ZimCodes\Self_Learning\DataStructures\Trees\Binary_Search;

use ZimCodes\Self_Learning\DataStructures\Trees\PrintTreeTrait;

final class Node implements INode{
    use PrintTreeTrait;
    private ?Node $left,$right;
    public function __construct(private $value,private ?Node $parent = null){
        $this->left = null;
        $this->right = null;
    }

    public function insert(int|float $value): void{
       if($value < $this->value){
           if($this->left){
               $this->left->insert($value);
           }else{
               $this->left = new Node($value,$this);
           }
       }else{
           if($this->right){
               $this->right->insert($value);
           }else{
               $this->right = new Node($value,$this);
           }
       }
    }

    public function contains(int|float $value): bool{
        if($value === $this->value)return true;
        if($value < $this->value){
            if($this->left){
               return $this->left->contains($value);
            }
        }else{
            if($this->right){
                return $this->right->contains($value);
            }
        }
        return false;
    }
    public function &search(int|float $value): ?INode{
        if($value === $this->value)return $this;
        if($value < $this->value){
            if($this->left){
                return $this->left->search($value);
            }
        }else{
            if($this->right){
                return $this->right->search($value);
            }
        }
        return $this;
    }
    public function getSuccessorNode():?INode{
        if(!$this->left) return $this;
        return $this->left->getSuccessorNode();
    }
    public function getLeft(): ?INode
    {
        return $this->left;
    }
    public function setLeft(?INode $node): void
    {
        $this->left = $node;
    }
    public function getRight(): ?INode
    {
        return $this->right;
    }
    public function setRight(?INode $node): void
    {
        $this->right = $node;
    }
    public function getParent(): ?INode
    {
        return $this->parent;
    }
    public function setParent(?INode $node): void
    {
        $this->parent = $node;
    }
    public function getValue(): int|float
    {
        return $this->value;
    }

    public function preTraversal()
    {
        if($this->left){
            $this->left->preTraversal();
        }
        echo "{$this->value}, ";
        if($this->right){
            $this->right->preTraversal();
        }
    }

    public function postTraversal()
    {
        if($this->left){
            $this->left->preTraversal();
        }
        if($this->right){
            $this->right->preTraversal();
        }
        echo "{$this->value}, ";
    }

    public function inorderTraversal()
    {
        echo "{$this->value}, ";
        if($this->left){
            $this->left->preTraversal();
        }
        if($this->right){
            $this->right->preTraversal();
        }

    }
}