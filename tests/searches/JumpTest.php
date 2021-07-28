<?php
declare(strict_types=1);
namespace ZimCodes\Tests\Searches;
use Exception;
use PHPUnit\Framework\TestCase;
use ZimCodes\Self_Learning\Algorithms\Searches\Jump\Search;
use ZimCodes\Tests\RandomTrait;

class JumpTest extends TestCase{
    use RandomTrait;
    private static Search $searcher;
    private array $numArr;

    public static function setUpBeforeClass(): void{
        self::$searcher = new Search();
    }
    /**
     * @throws Exception
     */
    protected function setUp(): void{
        $this->numArr = self::getRandomSortedArray();
    }
    public function testSearchBeginning(){
        $expected = 0;
        $target = $this->numArr[$expected];
        $this->assertSame($expected,self::$searcher->search($this->numArr,$target));
    }
    public function testSearchLast(){
        $expected = count($this->numArr) - 1;
        $target = $this->numArr[$expected];
        $this->assertSame($expected,self::$searcher->search($this->numArr,$target));
    }
    /**
     * @throws Exception
     */
    public function testSearchMiddle(){
        $expected = random_int(1,8);
        $target = $this->numArr[$expected];
        $this->assertSame($expected,self::$searcher->search($this->numArr,$target));
    }
    /**
     * @throws Exception
     */
    public function testNotFound(){
        $expected = -1;
        $target = random_int(-999,999);
        while(in_array($target,$this->numArr)){
            $target = random_int(-999,999);
        }
        $this->assertSame($expected,self::$searcher->search($this->numArr,$target));
    }
}