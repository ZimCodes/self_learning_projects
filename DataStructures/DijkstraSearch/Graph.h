#pragma once
#include "Node.h"
#include <queue>
#include <map>
struct Graph
{
	Graph();
	~Graph();
	void Explore(Node* start);
	std::vector<Node*> GetPath(Node* start,Node* target);
	void CleanUpNodes();
private:
	void ReInitialize();
	typedef std::pair<float, Node*> Path;
	std::priority_queue<Path, std::vector<Path>, std::greater<Path>> queue;
	std::map<Node*, float> costSoFar;
	std::map<Node*, Node*> cameFrom;
};

