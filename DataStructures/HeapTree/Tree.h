#pragma once
#include <vector>
struct Tree
{
	Tree();
	~Tree();
	void Insert(int val);
	bool Contains(int val);
	void Delete(int val);
	int Pop();
	int* PopValuesInOrder();
	int Count();
private:
	std::vector<int> nodes;
	int Left(int i);
	int Right(int i);
	int Parent(int i);
	bool HasLeft(int i);
	bool HasRight(int i);
	bool HasBoth(int i);
	bool IsRoot(int i);
	bool IsLeaf(int i);
	bool IsLeft(int i);
	void ShiftDown(int i);
	void ShiftUp(int i);
	void Swap(int f, int s);
	
};

