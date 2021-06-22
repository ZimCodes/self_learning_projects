#include "Node.h"
Node::Node() {

}
Node::~Node() {
	std::map<char, Node*>::iterator iter = this->letters.begin();
	while (iter != this->letters.end()) {
		if (iter->second != nullptr) {
			delete iter->second;
		}
		iter->second = nullptr;
		iter++;
	}
	
}
void Node::Insert(const char word[],const int count,int i) {
	if (i >= count) {
		this->letters['*'] = nullptr;
		return;
	}
	const char letter = word[i];
	if (this->letters.count(letter) == 0) {
		this->letters[letter] = new Node();
	}
	this->letters[letter]->Insert(word,count,++i);
}
bool Node::Contains(const char word[],const int count,int i) {
	if (i >= count) return true;
	const char letter = word[i];
	if (this->letters.count(letter) > 0) {
		return this->letters[letter]->Contains(word,count,++i);
	}
	return false;
}