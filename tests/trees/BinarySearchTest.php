<?php
declare(strict_types=1);
namespace ZimCodes\Tests\Trees;
use Exception;
use PHPUnit\Framework\TestCase;
use ZimCodes\Self_Learning\DataStructures\Trees\Binary_Search\Tree;
use ZimCodes\Tests\RandomTrait;

class BinarySearchTest extends TestCase{
    use RandomTrait,TreeTrait;
    const MAX_TREE_SIZE = 10;
    private Tree $tree;
    private int $target;
    private array $numArr;

    /**
     * @throws Exception
     */
    protected function setUp(): void{
        $this->tree = new Tree();
        $this->numArr = self::getRandomArray(self::MAX_TREE_SIZE);
        $this->target = $this->numArr[random_int(0,self::MAX_TREE_SIZE-1)];
        $this->treeInsert($this->numArr);
    }
    public function testExists(){
        $this->assertTrue($this->tree->contains($this->target));
    }
    public function testSearch(){
        $actual = $this->tree->search($this->target);
        $this->assertSame($this->target,$actual->getValue());
    }
    public function testDeleteRoot(){
        $this->tree->delete($this->numArr[0]);
        //$this->tree->preTraversal();
        $actual = $this->tree->contains($this->numArr[0]);
        $this->assertFalse($actual);
    }
    public function testDelete(){
        $this->tree->delete($this->target);
        //$this->tree->preTraversal();
        $this->assertFalse($this->tree->contains($this->target));
    }
    public function testDeleteLeaf(){
        $this->tree->delete($this->numArr[self::MAX_TREE_SIZE-1]);
        //$this->tree->preTraversal();
        $this->assertFalse($this->tree->contains($this->numArr[self::MAX_TREE_SIZE-1]));
    }
}