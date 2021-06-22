#pragma once
#include "Edge.h"
#include <vector>
struct Edge;
struct Node
{
	char id;
	Node(char val);
	~Node();
	std::vector<Edge* >neighbors;
	void AddRoute(Node* node);
};

