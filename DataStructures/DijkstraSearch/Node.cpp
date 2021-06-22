#include "Node.h"
Node::Node(char val) {
	this->value = val;
}
Node::~Node() {
	for (int i = 0; i < this->neighbors.size();i++) {
		if (this->neighbors[i] != nullptr) {
			delete this->neighbors[i];
		}
		this->neighbors[i]->to = nullptr;
		 this->neighbors[i] = nullptr;
	}
}
void Node::AddRoute(Node* node,float cost) {
	Edge* neighbor = new Edge(node,cost);
	this->neighbors.push_back(neighbor);
}