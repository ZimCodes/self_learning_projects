#pragma once
struct JumpSearch
{
	JumpSearch();
	int Search(int* arr,int count,int target,int steps);
private:
	int Jumping(int* arr, int count,int target, int steps, int maxIndex);
};

