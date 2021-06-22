#include "Graph.h"
Graph::Graph() {

}
Graph::~Graph() {
	for (int i = 0; i < this->nodes.size();i++) {
		if (this->nodes[i] != nullptr) {
			delete this->nodes[i];
		}
		this->nodes[i] = nullptr;
	}
}
void Graph::Explore(Node* start) {
	this->ReInitialize();
	this->queue.push(start);
	while (!this->queue.empty()) {
		Node* curNode = this->queue.front();
		this->queue.pop();
		if (this->hasVisited.count(curNode) == 0) {
			for (Edge* neighbor:curNode->neighbors) {
				this->queue.push(neighbor->to);
			}
			this->nodes.push_back(curNode);
			this->hasVisited[curNode] = true;
		}
	}
}
void Graph::ReInitialize() {
	this->nodes.clear();
	this->hasVisited.clear();
}
std::vector<Node*> Graph::GetNodes() const{
	return this->nodes;
}
/// <summary>
/// Cleans up Nodes from memory during previous search & Resets graph
/// </summary>
void Graph::CleanUpNodes() {
	for (int i = 0; i < this->nodes.size(); i++) {
		if (this->nodes[i] != nullptr) {
			delete this->nodes[i];
		}
		this->nodes[i] = nullptr;
	}
	this->ReInitialize();
}