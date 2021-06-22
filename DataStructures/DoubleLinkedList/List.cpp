#include "List.h"
List::List() {
	this->head = this->tail = nullptr;
}
List::~List() {
	if (this->head != nullptr) {
		this->head->CleanUp();
	}
}
void List::Insert(int val) {
	if (this->head == nullptr) {
		this->head = new Node(val,nullptr);
		this->tail = this->head;
	}
	else {
		Node* newNode = new Node(val,this->tail);
		this->tail->child = newNode;
		this->tail = newNode;
	}
}
bool List::Contains(int val) {
	if (this->head == nullptr) return false;
	return this->head->Contains(val);
}
void List::Remove(int val) {
	if (this->head == nullptr) return;
	Node* nodeToDelete = nullptr;
	if (this->head->value == val) {
		nodeToDelete = this->head;
		if (this->tail == this->head) {
			this->tail = this->head->child;
		}
		this->head = this->head->child;
		delete nodeToDelete;
	}
	else if (this->tail->value == val) {
		nodeToDelete = this->tail;
		this->tail = this->tail->parent;
		this->tail->child = nullptr;
		delete nodeToDelete;
	}
	else {
		this->head->Remove(val);
	}
}
std::string List::Description() {
	std::stringstream ss;
	Node* curNode = this->head;
	while (curNode != nullptr) {
		ss << curNode->value << ", ";
		curNode = curNode->child;
	}
	return ss.str();
}
void List::Clear() {
	if (this->head != nullptr) {
		this->head->CleanUp();
	}
	this->head = this->tail = nullptr;
}