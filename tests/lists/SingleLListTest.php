<?php
declare(strict_types=1);
namespace ZimCodes\Tests\Lists;
use Exception;
use PHPUnit\Framework\TestCase;
use ZimCodes\Self_Learning\DataStructures\LinkedList\Single\LList;
use ZimCodes\Tests\RandomTrait;

class SingleLListTest extends TestCase{
    use RandomTrait,ListTrait;
    private LList $list;
    private const ARRAY_SIZE = 6;
    private array $numArr;
    /**
     * @throws Exception
     */
    protected function setUp(): void{
        $this->list = new LList();
        $this->numArr = self::getRandomArray(self::ARRAY_SIZE);
        $this->listInsert($this->numArr);
    }
    /**
     * @throws Exception
     */
    public function testExists(){
        $target = $this->numArr[random_int(0,self::ARRAY_SIZE-1)];
        $this->assertTrue($this->list->contains($target));
    }
    /**
     * @throws Exception
     */
    public function testNotExists(){
        $target = random_int(-999,999);
        while(in_array($target,$this->numArr)){
            $target = random_int(-999,999);
        }
        $this->assertFalse($this->list->contains($target));
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
    public function testReverse(){
        $expected = $this->numArr[self::ARRAY_SIZE-1];
        $this->list->reverse();
        $actual = $this->list->getHead()->getValue();
        $this->assertSame($expected,$actual);
    }
}