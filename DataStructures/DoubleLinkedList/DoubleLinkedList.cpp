// DoubleLinkedList.cpp : This file contains the 'main' function. Program execution begins and ends there.
//

#include <iostream>
#include "List.h"
int main()
{
    List* list = new List();
    list->Insert(5);
    list->Insert(7);
    list->Insert(34);
    list->Insert(1);

    std::cout << list->Description() << "\n";
    const int numToFind = 5;
    std::cout << "Contains #" << numToFind << ": " << (list->Contains(numToFind) ? "True" : "False") << "\n";
    list->Remove(1);
    std::cout << list->Description() << "\n";
    //list->Clear();//Clean up nodes from memory & remove them all from list;
    delete list;
}
