<?php
declare(strict_types=1);
namespace ZimCodes\Self_Learning\DataStructures\Graphs;
trait NodePriorityQueueTrait{
    private function pop(array &$queue):INode{
        uasort($queue,'self::costCMP');
        return array_pop($queue)->getTo();
    }
    private static function costCMP(Edge $a, Edge $b):int{
        $a = $a->getCost();
        $b = $b->getCost();
        if($a === $b) return 0;
        return $a < $b ? -1 : 1;
    }
}