<?php
declare(strict_types=1);
namespace ZimCodes\Tests\Graphs;
use PHPUnit\Framework\TestCase;
use ZimCodes\Self_Learning\DataStructures\Graphs\Breadth_First\Graph;

class BreadthFirstTest extends TestCase{
    use GraphTestTrait;
    private static array $nodes;
    private static Graph $graph;
    public static function setUpBeforeClass(): void{
        self::$nodes = [];
        self::$graph = new Graph();
        self::initNodes(self::$nodes,'i');
        self::addRoute(self::$nodes,'a',[
            'b' => 0,
            'c' => 0,
        ]);
        self::addRoute(self::$nodes,'b',[
            'a' => 0,
            'd' => 0,
            'e' => 0,
        ]);
        self::addRoute(self::$nodes,'c',[
            'a' => 0,
            'f' => 0,
            'g' => 0,
        ]);
        self::addRoute(self::$nodes,'d',[
            'b' => 0,
        ]);
        self::addRoute(self::$nodes,'e',[
            'b' => 0,
            'h' => 0,
            'f' => 0,
        ]);
        self::addRoute(self::$nodes,'f',[
            'e' => 0,
            'c' => 0,
            'g' => 0,
        ]);
        self::addRoute(self::$nodes,'g',[
            'f' => 0,
            'c' => 0,
        ]);
        self::addRoute(self::$nodes,'h',[
            'e' => 0,
        ]);

        self::$graph->explore(self::$nodes['a']);
    }
    public function testPathAmount():void{
        $actual = self::$graph->getPath();
        $this->assertSameSize(self::$nodes,$actual);
    }
    public function testPaths():void{
        $actual = self::$graph->getPathString();
        sort($actual);
        $this->assertSame(array_keys(self::$nodes),$actual);
    }
}