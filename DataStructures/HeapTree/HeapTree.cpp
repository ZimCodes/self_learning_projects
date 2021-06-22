// HeapTree.cpp : This file contains the 'main' function. Program execution begins and ends there.
//

#include <iostream>
#include "Tree.h"
int main()
{
    Tree* tree = new Tree();
    tree->Insert(10);
    tree->Insert(7);
    tree->Insert(2);
    tree->Insert(5);
    tree->Insert(1);
    tree->Insert(16);

    int size = tree->Count();
    int* results = tree->PopValuesInOrder();

    for (int i = 0; i < size;i++) {
        std::cout << results[i] << ", ";
    }

    delete tree;
    tree = 0;

    return 0;
}
