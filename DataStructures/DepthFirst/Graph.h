#pragma once
#include "Node.h"
#include <unordered_map>
struct Graph
{
	Graph();
	~Graph();
	void StartExploring(Node* start);
	std::vector<Node*> GetPath() const;
private:
	void ReInitialize();
	void Explore(Node* start);
	std::vector<Node*> path;
	std::unordered_map<Node*, bool> hasVisited;
};

