#include "Tree.h"
Tree::Tree() {
	this->root = nullptr;
}
Tree::~Tree() {
	if (this->root != nullptr) {
		delete this->root;
	}
	this->root = 0;
}

void Tree::Insert(const char word[],int count) {
	if (this->root == nullptr) {
		this->root = new Node();
	}
	this->root->Insert(word,count,0);
}
void Tree::Insert(std::string word) {
	if (this->root == nullptr) {
		this->root = new Node();
	}
	this->root->Insert(word.c_str(), word.length(), 0);
}
bool Tree::Contains(const char word[],int count) {
	if (this->root == nullptr) return false;
	return this->root->Contains(word,count,0);
}
bool Tree::Contains(std::string word) {
	if (this->root == nullptr) return false;
	return this->root->Contains(word.c_str(), word.length(), 0);
}