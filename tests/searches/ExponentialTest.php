<?php
declare(strict_types=1);
namespace ZimCodes\Tests\Searches;
use Exception;
use PHPUnit\Framework\TestCase;
use ZimCodes\Self_Learning\Algorithms\Searches\Exponential\Search;
use ZimCodes\Tests\RandomTrait;

class ExponentialTest extends TestCase{
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
        $actual = self::$searcher->search($this->numArr,$target);

        $this->assertEquals($expected,$actual);
    }

    /**
     * @dataProvider indexProvider
     */
    public function testSearchMiddle($index){
        $expected = $index;
        $target = $this->numArr[$expected];
        $actual = self::$searcher->search($this->numArr,$target);

        $this->assertEquals($expected,$actual);
    }
    public function testSearchLast(){
        $expected = count($this->numArr)-1;
        $target = $this->numArr[$expected];
        $actual = self::$searcher->search($this->numArr,$target);

        $this->assertEquals($expected,$actual);
    }
    /**
     * @throws Exception
     */
    public function testNotFound(){
        $expected = -1;
        $target = PHP_INT_MAX;
        $actual = self::$searcher->search($this->numArr,$target);

        $this->assertEquals($expected,$actual);
    }
    public function indexProvider():array{
        return [
            'One'=>[1],'Two'=>[2],'Three'=>[3],'Four'=>[4],'Five'=>[5],'Six'=>[6],'Seven'=>[7],'Eight'=>[8]
        ];
    }
}