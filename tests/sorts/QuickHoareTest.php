<?php
declare(strict_types=1);
namespace ZimCodes\Self_Learning\Tests\Sorts;
use Exception;
use PHPUnit\Framework\TestCase;
use ZimCodes\Self_Learning\Algorithms\Sort\Quick\Hoare;
use ZimCodes\Tests\RandomTrait;

class QuickHoareTest extends TestCase{
    use RandomTrait;
    private static Hoare $sorter;
    private array $numArr;
    public static function setUpBeforeClass(): void{
        self::$sorter = new Hoare();
    }

    /**
     * @throws Exception
     */
    protected function setUp(): void{
        $this->numArr = self::getRandomArray();
    }
    public function testSort(){
        $arr = $this->numArr;
        sort($this->numArr);
        self::$sorter->sort($arr);
        $this->assertSame($this->numArr,$arr);
    }
}