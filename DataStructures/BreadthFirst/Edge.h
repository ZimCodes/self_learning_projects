#pragma once
#include "Node.h"
struct Node;
struct Edge
{
	Edge(Node* to);
	Node* to;
};

