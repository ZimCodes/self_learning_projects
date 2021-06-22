#pragma once
#include "Node.h"
struct Node;
struct Edge
{
	Edge(Node* to,float cost);
	Node* to;
	float cost;
};

