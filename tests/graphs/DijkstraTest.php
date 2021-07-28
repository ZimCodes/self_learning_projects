<?php
declare(strict_types=1);
namespace ZimCodes\Tests\Graphs;
use ZimCodes\Self_Learning\DataStructures\Graphs\Dijkstra\Graph;
use PHPUnit\Framework\TestCase;
class DijkstraTest extends TestCase{
    use GraphTestTrait;
    private static Graph $graph;
    private static array $nodes;
    public static function setUpBeforeClass(): void
    {
        self::$nodes = [];
        self::$graph = new Graph();
        self::initNodes(self::$nodes,'f');

        self::addRoute(self::$nodes,'a',[
            'd'=>1,
            'b'=>3]);
        self::addRoute(self::$nodes,'b',[
            'a'=> 3,
            'd'=>4,
            'e'=>5,
            'c'=>5]);
        self::addRoute(self::$nodes,'c',[
            'b'=> 5,
            'e'=>9]);
        self::addRoute(self::$nodes,'d',[
            'e'=> 1,
            'b'=> 4,
            'a'=>1]);
        self::addRoute(self::$nodes,'e',[
            'c'=> 9,
            'b'=> 5,
            'd'=>1]);
        self::$graph->explore(self::$nodes['a']);
    }
    public function testSameTargetNode(){
        $actual = self::$graph->getPathString(self::$nodes['a'],self::$nodes['a']);
        $this->assertSame(['a'],$actual);
    }
    public function testPath(){
        echo "Start";
        $actual = self::$graph->getPathString(self::$nodes['d'],self::$nodes['c']);
        $this->assertSame(['d','a','b','c'],$actual);
    }
}