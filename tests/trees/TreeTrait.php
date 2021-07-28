<?php
declare(strict_types=1);
namespace ZimCodes\Tests\Trees;
trait TreeTrait{
    private function treeInsert(array $array){
        foreach($array as $val){
            $this->tree->insert($val);
        }
    }
}