<?php
declare(strict_types=1);
namespace ZimCodes\Tests\Trees;
use Exception;
use PHPUnit\Framework\TestCase;
use ZimCodes\Self_Learning\DataStructures\Trees\Heap\Tree;
use ZimCodes\Tests\RandomTrait;

class HeapTest extends TestCase{
    use TreeTrait,RandomTrait;
    private Tree $tree;
    private array $numArr;
    /**
     * @throws Exception
     */
    protected function setUp(): void{
        $this->tree = new Tree();
        $this->numArr = self::getRandomArray();
    }
    public function testHeap():void{
        self::treeInsert($this->numArr);
        $arr = [];
        $num = $this->tree->pop();
        while($num){
            $arr[] = $num;
            $num =  $this->tree->pop();
        }
        rsort($this->numArr);
        $this->assertSame($this->numArr,$arr);
    }
}