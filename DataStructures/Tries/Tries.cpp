// Tries.cpp : This file contains the 'main' function. Program execution begins and ends there.
//

#include <iostream>
#include "Tree.h"
int main()
{
    Tree* t = new Tree();
    t->Insert("cat", 3);
    t->Insert("catapillar", 10);
    t->Insert("dog", 3);
    t->Insert("lizard", 6);
    t->Insert("camera", 6);
    std::cout << "Tree Contains catapillar: "<< (t->Contains("cata",4) ? "True" : "False");

    delete t;
}
