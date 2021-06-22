#pragma once
#include "Node.h"
#include <string>
struct Tree
{
	Tree();
	~Tree();
	void Insert(const char word[],const int count);
	void Insert(std::string word);
	bool Contains(const char word[],const int count);
	bool Contains(std::string word);
	Node* root;
};

