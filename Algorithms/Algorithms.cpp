// Algorithms.cpp : This file contains the 'main' function. Program execution begins and ends there.
//
#pragma region Headers
#include <iostream>
#include "MergeSort.h"
#include "InsertionSort.h"
#include "HeapSort.h"
#include "BinarySearch.h"
#include "LinearSearch.h"
#include "QuickSort.h"
#include "JumpSearch.h"
#include "SelectionSort.h"
#include "BubbleSort.h"
#include "ExponentialSearch.h"
#pragma endregion
void DisplaySearch(int* arr,int ansIndex,const char title[]) {
    std::cout << title << "\n";
    std::cout << arr[ansIndex] << " is located at index " << ansIndex<<"\n";
}
void Display(int* arr,const int size,const char title[]) {
    std::cout << title<<"\n";
    for (int i = 0; i < size; i++) {
        std::cout << arr[i] << ", ";
    }
    std::cout << "\n";
}
int main()
{
    //Sorting Algorithms
    //---Merge Sort---
    MergeSort merge;
    int arr[] = { 12, 11, 13, 5, 6, 7 };
    int size = sizeof(arr) / sizeof(int);
    int* newArr = merge.Sort(arr,size);
    Display(newArr,size,"---Merge Sort---");
    //---Insertion Sort---
    InsertionSort insert;
    int insertArr[] = { 1,5,53,14,88,9,545,321,1,13,2 };
    size = sizeof(insertArr) / sizeof(int);
    insert.Sort(insertArr,size);
    Display(insertArr, size,"---Insertion Sort---");
    //---Heap Sort---
    HeapSort heap;
    int heapArr[] = { 821,279,20,513,828,623,287,834,130,789 };
    size = sizeof(heapArr) / sizeof(int);
    heap.Sort(heapArr,size);
    Display(heapArr, size, "---Heap Sort---");
    //---Quick Sort (Lomuto Partition)---
    QuickSort quick;
    int quickArrOne[] = { 436,739,307,224,102,450,468,56,676,48 };
    size = sizeof(quickArrOne) / sizeof(int);
    quick.LomutoSort(quickArrOne,0,size-1);
    Display(quickArrOne,size,"---Quick Sort (Lomuto)---");
    //---Quick Sort (Hoare Partition)---
    int quickArrTwo[] = { 27,826,708,817,847,853,447,276,494,657 };
    size = sizeof(quickArrTwo) / sizeof(int);
    quick.HoareSort(quickArrTwo,0,size-1);
    Display(quickArrTwo, size, "---Quick Sort (Hoare)---");
    //---Selection Sort---
    SelectionSort select;
    int selectArr[] = { 880,575,199,335,35,990,941,551,962,34 };
    size = sizeof(selectArr) / sizeof(int);
    select.Sort(selectArr,size);
    Display(selectArr,size,"---Selection Sort---");
    //---Bubble Sort---
    BubbleSort bubble;
    int bubbleArr[] = { 275,458,253,483,712,181,520,306,53,829 };
    size = sizeof(bubbleArr) / sizeof(int);
    bubble.Sort(bubbleArr, size);
    Display(bubbleArr, size, "---Bubble Sort---");

    std::cout << "\n";

    //Searching Algorithms
    //Binary Search (sorted arrays algorithm)
    BinarySearch binary;
    int binArr[] = { 4,21,374,431,435,450,613,694,811,871};
    size = sizeof(binArr) / sizeof(int);
    DisplaySearch(binArr, binary.Search(binArr,871,0,size-1),"---Binary Search---");
    //Linear Search
    LinearSearch linear;
    int linearArr[] = { 44,99,149,235,318,417,778,784,893,990};
    size = sizeof(linearArr) / sizeof(int);
    DisplaySearch(linearArr,linear.Search(linearArr,size,778),"---Linear Search---");
    //Jump Search (sorted arrays algorithm)
    JumpSearch jump;
    int jumpArr[] = { 88,91,175,236,347,647,661,784,958,990};
    size = sizeof(jumpArr) / sizeof(int);
    DisplaySearch(jumpArr, jump.Search(jumpArr, size, 88, 4), "---Jump Search---");
    //Exponential Search (sorted arrays algorithm)
    ExponentialSearch expo;
    int expoArr[] = { 71,115,120,396,414,431,463,600,650,913};
    size = sizeof(expoArr) / sizeof(int);
    DisplaySearch(expoArr,expo.Search(expoArr,size,913),"---Exponential Search---");
    
    return 0;
}