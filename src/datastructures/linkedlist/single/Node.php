<?php
declare(strict_types=1);
namespace ZimCodes\Self_Learning\DataStructures\LinkedList\Single;
use ZimCodes\Self_Learning\DataStructures\LinkedList;
class Node extends LinkedList\Node{

    public function delete(mixed $value,?LinkedList\INode &$tail=null):void{
        if($this->child === null)return;
        if($this->child === $tail && $this->child->getValue() === $value){
            $this->child = null;
            $tail = $this;
        }elseif($this->child->getValue() === $value){
            $grandChild = $this->child->getChild();
            $this->child = $grandChild;
        }else{
            $this->child->delete($value, $tail);
        }
    }
}