#pragma once
struct QuickSort
{
	QuickSort();
	void LomutoSort(int*arr,int lowIndex,int highIndex);
	
	void HoareSort(int* arr, int lowIndex, int highIndex);
private:
	int HoarePartition(int* arr,int lowIndex,int highIndex);
	int LomutoPartition(int* arr, int lowIndex, int highIndex);
	void Swap(int*arr,int f,int s);
};

