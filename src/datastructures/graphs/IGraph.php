<?php
declare(strict_types=1);
namespace ZimCodes\Self_Learning\DataStructures\Graphs;
interface IGraph{
    public function explore(INode $node):void;
    public function getPath(): array;
    public function getPathString():array;
}