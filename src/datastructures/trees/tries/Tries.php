<?php
declare(strict_types=1);
namespace ZimCodes\Self_Learning\DataStructures\Trees\Tries;
class Tries implements ITries{
    private ?INode $root;
    public function __construct(){
        $this->root = null;
    }
    function insert(string $word): void{
        if($this->root === null) {
            $this->root = new Node();
        }
        $this->root->insert($word,0);
    }

    function contains(string $word): bool{
        if($this->root === null) return false;
        return $this->root->contains($word,0);
    }

    function getAllWords(?INode $startNode = null, string $word = "", array &$words = []): array{
        $curNode = $startNode ?? $this->root;
        foreach($curNode->getLetters() as $letter => $node){
            if($letter === '*'){
                $words[] = $word;
            }else{
                $this->getAllWords($node,$word.$letter,$words);
            }
        }
        return $words;
    }
}