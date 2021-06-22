#include "Graph.h"
Graph::Graph() {

}
Graph::~Graph() {
	for (int i = 0; i < this->path.size();i++) {
		if (this->path[i] != nullptr) {
			delete this->path[i];
		}
		this->path[i] = nullptr;
	}
}
void Graph::StartExploring(Node* start) {
	this->ReInitialize();
	this->Explore(start);
}
void Graph::Explore(Node* start) {
	Node* curNode = start;
	for (int i = 0; i < curNode->neighbors.size();i++) {
		Node* neighbor = curNode->neighbors[i]->to;
		if (!this->hasVisited[neighbor] || this->hasVisited.count(neighbor) == 0) {
			this->hasVisited[neighbor] = true;
			this->path.push_back(neighbor);
			this->Explore(neighbor);
		}
	}
}
void Graph::ReInitialize() {
	this->path.clear();
	this->hasVisited.clear();
}
std::vector<Node*> Graph::GetPath() const{
	return this->path;
}