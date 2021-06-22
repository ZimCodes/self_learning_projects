#pragma once
#include "Node.h"
#include <queue>
#include <map>
struct Graph
{
	Graph();
	~Graph();
	void Explore(Node* start);
	void CleanUpNodes();
	std::vector<Node*> GetNodes() const;
private:
	void ReInitialize();
	std::map<Node*, bool> hasVisited;
	std::queue<Node*> queue;
	std::vector<Node*> nodes;
};

