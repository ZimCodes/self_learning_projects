<?php
declare(strict_types=1);
namespace ZimCodes\Tests\Trees;
use Exception;
use PHPUnit\Framework\TestCase;
use ZimCodes\Self_Learning\DataStructures\Trees\Tries\Tries;
use ZimCodes\Tests\RandomTrait;

class TriesTest extends TestCase{
    use RandomTrait,TreeTrait;
    private Tries $tree;
    private array $wordArr;
    private string $target;
    /**
     * @throws Exception
     */
    protected function setUp(): void{
        $this->tree = new Tries();
        $this->wordArr = self::getRandomWordsArray(10,random_int(3,6));
        $this->treeInsert($this->wordArr);
        $this->target = $this->wordArr[random_int(0,9)];
    }
    public function testExists():void{
        $this->assertTrue($this->tree->contains($this->target));
    }
    /**
     * @throws Exception
     */
    public function testNotExists():void{
        while(in_array($this->target,$this->wordArr)){
            $this->target = self::getRandomWord(random_int(3,6),97,122);
        }
        $this->assertFalse($this->tree->contains($this->target));
    }
    public function testAllWords():void{
        $expected = $this->wordArr;
        sort($expected);
        $actual = $this->tree->getAllWords();
        sort($actual);
        $this->assertSame($expected,$actual);
    }
}