#pragma once
struct BubbleSort
{
	BubbleSort();
	void Sort(int* arr,int count);
	void SortRecurse(int* arr, int count, int passthrough=0);
private:
	void Swap(int* arr,int f,int s);
};

