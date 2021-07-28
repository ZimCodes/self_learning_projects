<?php
declare(strict_types=1);
namespace ZimCodes\Tests\Sorts;
use PHPUnit\Framework\TestCase;
use ZimCodes\Self_Learning\Algorithms\Sort\Merge\Sort;
use ZimCodes\Tests\RandomTrait;

class MergeTest extends TestCase{
    use RandomTrait;
    private static Sort $sorter;
    private array $numArr;

    public static function setUpBeforeClass(): void{
        self::$sorter = new Sort();
    }
    public function setUp(): void{
        $this->numArr = self::getRandomArray();
    }
    public function testSort(){
        $arr = $this->numArr;
        $arr = self::$sorter->sort($arr);
        \sort($this->numArr);
        $this->assertSame($this->numArr,$arr);
    }
}