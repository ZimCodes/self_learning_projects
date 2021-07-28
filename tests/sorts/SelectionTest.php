<?php
declare(strict_types=1);
namespace ZimCodes\Tests\Sorts;
use Exception;
use PHPUnit\Framework\TestCase;
use ZimCodes\Self_Learning\Algorithms\Sort\Selection\Sort;
use ZimCodes\Tests\RandomTrait;
class SelectionTest extends TestCase{
    use RandomTrait;
    private array $unsortedArray,$sortedArray;
    private static Sort $sorter;
    public static function setUpBeforeClass(): void
    {
        self::$sorter = new Sort();
    }

    /**
     * @throws Exception
     */
    protected function setUp(): void{
        $this->unsortedArray = self::getRandomArray();
        $this->sortedArray = $this->unsortedArray;
        \sort($this->sortedArray);
    }
    public function testSort():void{
        self::$sorter->sort($this->unsortedArray);
        $this->assertEquals($this->sortedArray,$this->unsortedArray);
    }
    protected function tearDown(): void
    {
        $this->unsortedArray = [];
        $this->sortedArray = [];
    }
}