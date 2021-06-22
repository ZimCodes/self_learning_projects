#include "Node.h"

Node::Node(int val,Node* parent) {
	this->value = val;
	this->parent = parent;
	this->left = this->right = nullptr;
}
Node::~Node() {

}
bool Node::HasLeft()const {
	return this->left != nullptr;
}
bool Node::HasRight() const{
	return this->right != nullptr;
}
bool Node::HasBoth() const{
	return this->HasLeft() && this->HasRight();
}
bool Node::IsLeaf()const {
	return !this->HasBoth();
}
bool Node::IsLeft() const{
	if (this->parent == nullptr) {
		return false;
	}
	return this->parent->left == this;
}
bool Node::IsRoot() const{
	return this->parent == nullptr;
}
void Node::Insert(int val) {
	if (val < this->value) {
		if (this->HasLeft()) {
			this->left->Insert(val);
		}
		else {
			this->left = new Node(val,this);
		}
	}else{
		if (this->HasRight()) {
			this->right->Insert(val);
		}
		else {
			this->right = new Node(val,this);
		}
	}
}
Node* Node::Search(int val) {
	if (this->value == val) return this;
	if (val < this->value && this->HasLeft()) {
		return this->left->Search(val);
	}
	else {
		if (this->HasRight()) {
			return this->right->Search(val);
		}
	}
	return nullptr;
}
Node* Node::Maximum(int val) {
	if (this->HasRight()) {
		return this->right->Maximum(this->right->value);
	}
	else if(this->HasLeft() && this->left->value >= val) {
		return this->left->Maximum(this->left->value);
	}
	return this;
}
Node* Node::Minimum(int val) {
	if (this->HasLeft()) {
		return this->left->Maximum(this->left->value);
	}
	else if (this->HasRight() && this->right->value < val) {
		return this->right->Maximum(this->right->value);
	}
	return this;
}
void Node::DeleteSelf() {
	Node* node = this;
	delete node;
	node = 0;
}
void Node::PostCleanUp() {
	if (this->HasLeft()) {
		this->left->PostCleanUp();
	}
	if (this->HasRight()) {
		this->right->PostCleanUp();
	}
	this->DeleteSelf();
}
std::stringstream& Node::Description(std::stringstream& ss) {
	if (this->HasLeft()) {
		this->left->Description(ss);
	}
	ss << this->value << ", ";
	if (this->HasRight()) {
		this->right->Description(ss);
	}
	return ss;
}