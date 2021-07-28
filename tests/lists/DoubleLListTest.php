<?php
declare(strict_types=1);
namespace ZimCodes\Tests\Lists;
use Exception;
use PHPUnit\Framework\TestCase;
use ZimCodes\Self_Learning\DataStructures\LinkedList\Double\LList;
use ZimCodes\Tests\RandomTrait;

class DoubleLListTest extends TestCase{
    use ListTrait,RandomTrait;
    private LList $list;
    private array $numArr;
    const ARRAY_SIZE = 6;
    protected function setUp(): void{
        $this->list = new LList();
        $this->numArr = self::getRandomArray(self::ARRAY_SIZE);
        self::listInsert($this->numArr);
    }
    public function testDeleteStart(){
        $target = $this->numArr[0];
        $this->list->delete($target);
        $this->assertFalse($this->list->contains($target));
    }
    /**
     * @throws Exception
     */
    public function testDeleteMiddle(){
        $target = $this->numArr[random_int(1,self::ARRAY_SIZE-2)];
        $this->list->delete($target);
        $this->assertFalse($this->list->contains($target));
    }
    public function testDeleteEnd(){
        $target = $this->numArr[self::ARRAY_SIZE-1];
        $this->list->delete($target);
        $this->assertFalse($this->list->contains($target));
    }
}