#include "List.h"
List::List() {
	this->head = this->tail = nullptr;
}
List::~List() {
	if (this->head != nullptr) {
		this->head->CleanUp();
	}
}
/// <summary>
/// Head->[][][][][][][]+[]<-Tail
/// O(n)
/// </summary>
/// <param name="val"></param>
void List::Insert(int val) {
	Node* nodeToAdd = new Node(val);
	if (this->head == nullptr) {
		this->head = nodeToAdd;
	}
	else {
		this->tail->child = nodeToAdd;
		
	}
	this->tail = nodeToAdd;
	
	
}
//O(n)
void List::Remove(int val) {
	if (this->head == nullptr)return;
	if (this->head->value == val) {
		Node* headChild = head->child;
		if (this->tail == this->head) {
			this->tail = nullptr;
		}
		delete this->head;
		this->head = headChild;
	}
	else {
		this->head->Remove(val, tail);
	}
}
//O(n)
bool List::Contains(int val) {
	if (this->head == nullptr) return false;
	return this->head->Contains(val);
}
void List::Clear() {
	if (this->head != nullptr) {
		this->head->CleanUp();
	}
	this->head = this->tail = nullptr;
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