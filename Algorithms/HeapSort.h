#pragma once
struct HeapSort
{
	HeapSort();
	void Sort(int* arr,int count);
private:
	void Swap(int* arr,int f,int s);
	void Heapify(int*arr,int count,int rootIndex);
};

