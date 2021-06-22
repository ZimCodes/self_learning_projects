#include "Node.h"
Node::Node(int val,Node* parent) {
	this->value = val;
	this->parent = parent;
	this->child = nullptr;
}
bool Node::Contains(int val) {
	if (this->value == val) return true;
	if(this->child != nullptr){
		return this->child->Contains(val);
	}
	return false;
}
void Node::Remove(int val) {
	if (this->child == nullptr) return;
	if (this->child->value == val) {
		Node* nodeToDelete = this->child;
		this->child = this->child->child;
		delete nodeToDelete;
		nodeToDelete = nullptr;
	}
	else {
		this->child->Remove(val);
	}
}
void Node::CleanUp() {
	if (this->child != nullptr) {
		this->child->CleanUp();
	}
	delete this->child;
	this->child = nullptr;
	this->parent = nullptr;
}