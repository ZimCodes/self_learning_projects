<?php
declare(strict_types=1);
namespace ZimCodes\Tests\Sorts;
use Exception;
use ZimCodes\Self_Learning\Algorithms\Sort\Heap\Sort;
use ZimCodes\Tests\RandomTrait;
use PHPUnit\Framework\TestCase;
class HeapTest extends TestCase{
    use RandomTrait;
    private static Sort $sorter;
    public static function setUpBeforeClass(): void
    {
        self::$sorter = new Sort();
    }

    /**
     * @throws Exception
     */
    public function testSort(){
        $arr = self::getRandomArray();
        $expected = $arr;
        self::$sorter->sort($arr);
        \sort($expected);
        $this->assertSame($expected,$arr);
    }
}