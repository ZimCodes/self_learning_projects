#pragma once
#include "Node.h"
#include <queue>
#include <map>
struct Graph
{
	Graph();
	~Graph();
	std::vector<Node*> Explore(Node* start,Node* goal);
	std::vector<Node*> GetPath(Node* start, Node* goal);
private:
	typedef std::pair<float, Node*> Path;
	float CalculateHeuristic(Node* current,Node* goal);
	void ReInitialize();
	std::priority_queue<Path, std::vector<Path>, std::greater<Path>>* queue;
	std::map<Node*, Node*> cameFrom;
	std::map<Node*, float> costSoFar;//GCost
};

