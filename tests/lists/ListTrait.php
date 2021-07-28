<?php
declare(strict_types=1);
namespace ZimCodes\Tests\Lists;
trait ListTrait{
    private function listInsert(array $nums):void{
        foreach($nums as $num){
            $this->list->insert($num);
        }
    }
}