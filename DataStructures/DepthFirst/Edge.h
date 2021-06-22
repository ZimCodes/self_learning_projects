#pragma once
#include "Node.h"
struct Node;
struct Edge
{
	Edge(Node* _to);
	Node* to;
};

