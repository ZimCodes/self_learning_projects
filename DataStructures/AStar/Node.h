#pragma once
#include "Edge.h"
#include <vector>
struct Node
{
	Node(char val);
	~Node();
	void AddRoute(Node* node,float cost);
	std::vector<Edge*> neighbors;
	char value;
};

