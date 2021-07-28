<?php
declare(strict_types=1);
namespace ZimCodes\Self_Learning\DataStructures\LinkedList;
abstract class LList implements ILList {
    protected ?INode $head;
    protected ?INode $tail;
    public function __construct(){
        $this->head = null;
        $this->tail = null;
    }
    abstract public function insert(mixed $value): void;
    public function contains(mixed $value): bool{
        if($this->head === null) return false;
        if($this->head->getValue() === $value || $this->tail->getValue() === $value)
            return true;
        return $this->head->contains($value);
    }
    public function search(mixed $value): ?INode{
        if($this->head === null) return null;
        if($this->head->getValue() === $value) return $this->head;
        if($this->tail->getValue() === $value) return $this->tail;
        return $this->head->search($value);
    }
    abstract public function delete(mixed $value): void;
    public function reverse(): void{
        $previous = null;
        $current = $this->head;
        while($current !== null){
            $next = $current->getChild();
            $current->setChild($previous);
            $previous = $current;
            $current = $next;
        }
        $this->tail = $this->head;
        $this->head = $previous;
    }
    public function getHead():?INode{
        return $this->head;
    }
    /**
     * @return INode|null
     */
    public function getTail(): ?INode{
        return $this->tail;
    }
}