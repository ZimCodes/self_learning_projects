// BinarySearchTree.cpp : This file contains the 'main' function. Program execution begins and ends there.
//

#include <iostream>
#include "Tree.h"
int main()
{
    Tree tree;
    tree.Insert(10);
    tree.Insert(1);
    tree.Insert(5);
    tree.Insert(2);
    tree.Insert(78);
    tree.Insert(8);
    tree.Delete(1);
    std::cout << tree.Description();
}
