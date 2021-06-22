#pragma once
struct ExponentialSearch
{
	ExponentialSearch();
	int Search(int*arr, int count,int target);
private:
	int BinarySearch(int*arr,int target,int lowIndex,int highIndex);
	int GetMin(int first, int second);
};

