#pragma once
#include "Node.h"
#include <sstream>
struct List
{
	List();
	~List();
	void Insert(int val);
	void Remove(int val);
	bool Contains(int val);
	void Clear();
	std::string Description();
private:
	Node* head,* tail;
};

