#pragma once
#include <memory>
#include <stack>
struct MergeSort
{
	MergeSort();
	~MergeSort();
	int* Sort(int* arr,int count);
private:
	int* Divide(int* arr,int count);
	int* Merge(int* leftArr,int leftIndex, int* rightArr,int rightIndex);
	int* GetRange(int* arr,int start,int end);
	//Heap Cleanup
	std::stack<int*> collect;
};

