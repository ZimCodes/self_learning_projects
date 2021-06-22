#include "Node.h"
Node::Node(int val) {
	this->child = nullptr;
	this->value = val;
}
bool Node::Contains(int val) {
	if (val == this->value) return true;
	if (this->child != nullptr) {
		return this->child->Contains(val);
	}
	return false;
}
void Node::Remove(int val,Node*& tail) {
	if (this->child->value == val) {
		Node* childNode = this->child;
		this->child = this->child->child;
		delete childNode;
		childNode = nullptr;

		//Assign new tail if child node is the new last node 
		if (this->child == nullptr) {
			tail = this;
		}
	}
	else {
		this->child->Remove(val,tail);
	}
}
void Node::CleanUp() {
	if (this->child != nullptr) { 
		this->child->CleanUp(); 
	}
	delete this;
}