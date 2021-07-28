<?php
declare(strict_types=1);
namespace ZimCodes\Self_Learning\Tests\Sorts;
use Exception;
use PHPUnit\Framework\TestCase;
use ZimCodes\Self_Learning\Algorithms\Sort\Quick\Lomuto;
use ZimCodes\Tests\RandomTrait;

class QuickLomutoTest extends TestCase{
    use RandomTrait;
    private static Lomuto $sorter;
    private array $numArr;
    public static function setUpBeforeClass(): void{
        self::$sorter = new Lomuto();
    }
    /**
     * @throws Exception
     */
    protected function setUp(): void{
        $this->numArr = self::getRandomArray();
    }
    public function testSort():void{
        $arr = $this->numArr;
        self::$sorter->sort($arr);
        sort($this->numArr);
        $this->assertSame($this->numArr,$arr);
    }
}