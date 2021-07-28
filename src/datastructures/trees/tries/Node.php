<?php
declare(strict_types=1);
namespace ZimCodes\Self_Learning\DataStructures\Trees\Tries;
class Node implements INode{
    private array $letters;
    public function __construct(){
        $this->letters = [];
    }
    function insert(string $value, int $index): void{
        if($index >= strlen($value)){
            $this->letters['*'] = null;
            return;
        }
        $letter = $value[$index];
        if(!array_key_exists($letter,$this->letters)){
            $this->letters[$letter] = new Node();
        }
        $this->letters[$letter]->insert($value,++$index);
    }

    function contains(string $value, int $index): bool{
        if($index >= strlen($value)) return true;
        $letter = $value[$index];
        if(array_key_exists($letter,$this->letters)){
            return $this->letters[$letter]->contains($value,++$index);
        }
        return false;
    }

    function getLetters(): array{
        return $this->letters;
    }
}