<?php
declare(strict_types=1);
namespace ZimCodes\Self_Learning\DataStructures\Trees;
trait PrintTreeTrait{
    abstract public function preTraversal();
    abstract public function postTraversal();
    abstract public function inorderTraversal();
}