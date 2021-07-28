<?php
declare(strict_types=1);
namespace ZimCodes\Self_Learning\DataStructures\LinkedList;
abstract class Node implements INode{
    public function __construct(protected mixed $value,protected ?INode $child = null){
    }
    public function getChild(): ?INode{
        return $this->child;
    }
    public function setChild(?INode $node): void{
        $this->child = $node;
    }
    public function getValue(): mixed{
        return $this->value;
    }
    public function setValue(mixed $value): void{
        $this->value = $value;
    }
    public function contains(mixed $value): bool{
        if($this->value === $value)return true;
        if($this->child !== null){
            return $this->child->contains($value);
        }
        return false;
    }
    public function search(mixed $value): ?INode{
        if($this->value === $value) return $this;
        if($this->child !== null){
            return $this->child->search($value);
        }
        return null;
    }
    abstract public function delete(mixed $value): void;
}