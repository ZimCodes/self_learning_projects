#include "Graph.h"
Graph::Graph() {
	this->queue = new std::priority_queue<Path, std::vector<Path>, std::greater<Path>>();
}
Graph::~Graph() {
	delete this->queue;
	std::map<Node*, float>::iterator iter = this->costSoFar.begin();
	while (iter != this->costSoFar.end()) {
		if (iter->first != nullptr) {
			delete iter->first;
		}
		iter++;
	}
}
std::vector<Node*> Graph::Explore(Node* start,Node* goal) {
	this->ReInitialize();
	this->cameFrom[start] = nullptr;
	this->costSoFar[start] = 0;
	this->queue->push(Path(0, start));
	Node* curNode = nullptr;
	while (curNode != goal && !this->queue->empty()) {
		curNode = this->queue->top().second;
		this->queue->pop();
		for (Edge* neighbor:curNode->neighbors) {
			float newCost = this->costSoFar[curNode] + neighbor->cost;
			if (this->costSoFar.count(neighbor->to) == 0 || newCost < this->costSoFar[neighbor->to]) {
				this->cameFrom[neighbor->to] = curNode;
				this->costSoFar[neighbor->to] = newCost;
				float fCost = this->costSoFar[neighbor->to] + this->CalculateHeuristic(neighbor->to,goal);
				this->queue->push(Path(fCost,neighbor->to));
			}
		}	
	}
	return this->GetPath(start,goal);
}
float Graph::CalculateHeuristic(Node* start,Node* end) {

}
void Graph::ReInitialize() {
	this->cameFrom.clear();
	this->costSoFar.clear();
	delete this->queue;
	this->queue = new std::priority_queue<Path, std::vector<Path>, std::greater<Path>>();
}
std::vector<Node*> Graph::GetPath(Node* start,Node*goal) {
	std::vector<Node*>path;
	Node* curNode = goal;
	while (curNode != nullptr && curNode != start) {
		path.push_back(curNode);
		curNode = this->cameFrom[curNode];
	}
	path.push_back(start);
	std::reverse(path.begin(), path.end());
	return path;
}