#pragma once
#include <vector>
#include "Edge.h"
struct Edge;
struct Node
{
	char value;
	Node(char val);
	~Node();
	void AddRoute(Node* node);
	std::vector<Edge*>neighbors;
};

