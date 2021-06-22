#pragma once
#include "Node.h"
struct Tree
{
	Tree();
	~Tree();
	void Insert(int value);
	Node* Search(int value);
	void Delete(int value);
	std::string Description();
private:
	void PostOrderClean();
	Node* root;
};

