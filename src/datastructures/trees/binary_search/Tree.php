<?php
declare(strict_types=1);
namespace ZimCodes\Self_Learning\DataStructures\Trees\Binary_Search;
use ZimCodes\Self_Learning\DataStructures\Trees\PrintTreeTrait;

class Tree implements ITree{
    use PrintTreeTrait;
    protected ?INode $root;
    public function __construct(){
        $this->root = null;
    }
    public function insert(int|float $value): void{
        if(!$this->root){
            $this->root = new Node($value);
        }else{
            $this->root->insert($value);
        }
    }
    public function contains(int|float $value): bool{
        if(!$this->root) return false;
        return $this->root->contains($value);
    }
    public function search(int|float $value):?INode{
        if(!$this->root) return null;
        return $this->root->search($value);
    }
    public function delete(int|float $value): void{
        if(!$this->root === null) return;
        $nodeToDelete = $this->search($value);
        if($nodeToDelete === null) return;
        if($nodeToDelete->getLeft() === null && $nodeToDelete->getRight() === null){
            if($nodeToDelete->getParent() !== null){
                if($nodeToDelete->getParent()->getLeft() === $nodeToDelete){
                    $nodeToDelete->getParent()->setLeft(null);
                }else{
                    $nodeToDelete->getParent()->setRight(null);
                }
            }
        }elseif($nodeToDelete->getLeft() !== null && $nodeToDelete->getRight() === null){
            if($nodeToDelete->getParent() !== null){
                if($nodeToDelete->getParent()->getLeft() === $nodeToDelete){
                    $nodeToDelete->getParent()->setLeft($nodeToDelete->getLeft());
                }else{
                    $nodeToDelete->getParent()->setRight($nodeToDelete->getRight());
                }
            }
            $nodeToDelete->getLeft()->setParent($nodeToDelete->getParent());
            if($this->root === $nodeToDelete){
                $this->root = $this->root->getLeft();
            }
        }elseif($nodeToDelete->getLeft() === null && $nodeToDelete->getRight() !== null){
            if($nodeToDelete->getParent() !== null){
                if($nodeToDelete->getParent()->getLeft() === $nodeToDelete){
                    $nodeToDelete->getParent()->setLeft($nodeToDelete->getLeft());
                }else{
                    $nodeToDelete->getParent()->setRight($nodeToDelete->getRight());
                }
            }
            $nodeToDelete->getRight()->setParent($nodeToDelete->getParent());
            if($this->root === $nodeToDelete){
                $this->root = $this->root->getRight();
            }
        }else{
            $replaceNode = $nodeToDelete->getRight()->getSuccessorNode();
            if($replaceNode === $nodeToDelete->getRight()){
                $replaceNode->getParent()->setRight($replaceNode->getRight());
            }else{
                $replaceNode->getParent()->setLeft($replaceNode->getRight());
            }

            $replaceNode->setRight($nodeToDelete->getRight());
            $replaceNode->setParent($nodeToDelete->getParent());
            $replaceNode->setLeft($nodeToDelete->getLeft());

            if($nodeToDelete->getRight() !== null){
                $nodeToDelete->getRight()->setParent($replaceNode);
            }
            if($nodeToDelete->getLeft() !== null) {
                $nodeToDelete->getLeft()->setParent($replaceNode);
            }

            if($nodeToDelete->getParent() !== null){
                if($nodeToDelete->getParent()->getLeft() === $nodeToDelete){
                    $nodeToDelete->getParent()->setLeft($replaceNode);
                }else{
                    $nodeToDelete->getParent()->setRight($replaceNode);
                }
            }else{
                $this->root = $replaceNode;
            }
        }
    }

    public function preTraversal()
    {
        if(!$this->root) return;
        $this->root->preTraversal();
    }

    public function postTraversal()
    {
        if(!$this->root) return;
        $this->root->postTraversal();
    }

    public function inorderTraversal()
    {
        if(!$this->root) return;
        $this->root->inorderTraversal();
    }
}