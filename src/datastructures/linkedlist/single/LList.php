<?php
declare(strict_types=1);
namespace ZimCodes\Self_Learning\DataStructures\LinkedList\Single;
use ZimCodes\Self_Learning\DataStructures\LinkedList;

class LList extends LinkedList\LList{
    public function insert(mixed $value): void{
        if($this->head === null){
            $this->head = new Node($value);
            $this->tail = $this->head;
        }else{
            $this->tail->setChild(new Node($value));
            $this->tail = $this->tail->getChild();
        }
    }
    function delete(mixed $value): void{
        if($this->head === null)return;
        if($this->head->getValue() === $value){
            $this->head = $this->head->getChild();
        }else{
            $this->head->delete($value, $this->tail);
        }
    }


}