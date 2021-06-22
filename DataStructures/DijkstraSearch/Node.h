#pragma once
#include "Edge.h"
#include <vector>
struct Edge;
struct Node
{
	char value;
	Node(char val);
	~Node();
	void AddRoute(Node* node,float cost);
	std::vector<Edge*> neighbors;
};

