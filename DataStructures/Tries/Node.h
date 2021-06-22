#pragma once
#include <map>
struct Node
{
	Node();
	~Node();
	std::map<char, Node*> letters;
	void Insert(const char word[],const int count, int i);
	bool Contains(const char word[],const int count,int i);
};

