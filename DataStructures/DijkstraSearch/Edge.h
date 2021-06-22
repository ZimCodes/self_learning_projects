#pragma once
#include "Node.h"
struct Node;
struct Edge
{
	Edge(Node* _to,float cost);
	Node* to;
	float cost;
};

