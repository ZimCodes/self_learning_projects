<?php
declare(strict_types=1);
namespace ZimCodes\Self_Learning\DataStructures\LinkedList\Double;
use ZimCodes\Self_Learning\DataStructures\LinkedList;
class LList extends LinkedList\LList{

    public function insert(mixed $value): void{
        if($this->head === null){
            $this->head = new Node($value);
            $this->tail = $this->head;
        }else{
            $this->tail->setChild(new Node($value,$this->tail));
            $this->tail = $this->tail->getChild();
        }
    }

    public function delete(mixed $value): void{
        if($this->head === null) return;
        if($this->head->getValue() === $value){
            $child = $this->head->getChild();
            $child->setParent(null);
            $this->head = $child;
        }elseif($this->tail->getValue() === $value){
            $parent = $this->tail->getParent();
            $parent->setChild(null);
            $this->tail = $parent;
        }else{
            $this->head->delete($value);
        }
    }
}