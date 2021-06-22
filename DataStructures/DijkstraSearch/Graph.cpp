#include "Graph.h"
Graph::Graph() {

}
Graph::~Graph() {
	std::map<Node*, float>::iterator iter = this->costSoFar.begin();
	while (iter != this->costSoFar.end()) {
		if (iter->first != nullptr) {
			delete iter->first;
		}
		iter++;
	}
}
void Graph::Explore(Node* start) {
	this->ReInitialize();
	this->queue.push(Path(0,start));
	this->cameFrom[start] = nullptr;
	this->costSoFar[start] = 0;
	while (!this->queue.empty()) {
		Node* curNode = this->queue.top().second;
		this->queue.pop();
		for (Edge* neighbor:curNode->neighbors) {
			float newCost = this->costSoFar[curNode] + neighbor->cost;
			if (this->costSoFar.count(neighbor->to) == 0 || newCost < this->costSoFar[neighbor->to]) {
				this->costSoFar[neighbor->to] = newCost;
				this->cameFrom[neighbor->to] = curNode;
				this->queue.push(Path(newCost,neighbor->to));
			}
		}
	}
}
//Resets graph. *Does not clean up memory
void Graph::ReInitialize() {
	this->cameFrom.clear();
	this->costSoFar.clear();
}
std::vector<Node*> Graph::GetPath(Node* start,Node* target) {
	std::vector<Node*> path;
	Node* curNode = target;
	while (curNode != nullptr && curNode != start) {
		path.push_back(curNode);
		curNode = cameFrom[curNode];
	}
	path.push_back(start);
	std::reverse(path.begin(), path.end());
	return path;
}
// Clean up nodes from memory & resets graph
void Graph::CleanUpNodes() {
	std::map<Node*, float>::iterator iter = this->costSoFar.begin();
	while (iter != this->costSoFar.end()) {
		if (iter->first != nullptr) {
			delete iter->first;
		}
		iter++;
	}
	this->ReInitialize();
}