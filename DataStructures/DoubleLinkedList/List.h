#pragma once
#include "Node.h"
#include <sstream>
struct List
{
	List();
	~List();
	void Insert(int val);
	bool Contains(int val);
	void Remove(int val);
	std::string Description();
	void Clear();
	Node* head, * tail;
};

