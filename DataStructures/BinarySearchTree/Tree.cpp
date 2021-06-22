#include "Tree.h"
Tree::Tree() {
	this->root = nullptr;
}
Tree::~Tree() {
	this->PostOrderClean();
}
void Tree::Insert(int val) {
	if (this->root == nullptr) {
		this->root = new Node(val,nullptr);
	}
	else {
		this->root->Insert(val);
	}
}
Node* Tree::Search(int val) {
	if (this->root == nullptr) return nullptr;
	return this->root->Search(val);
}
void Tree::Delete(int val) {
	if (this->root == nullptr) return;
	Node* nodeToRemove = this->root->Search(val);
	if (nodeToRemove == nullptr) return;
	Node* replaceNode = nullptr;
	if (nodeToRemove->HasLeft()) {
		replaceNode = nodeToRemove->left->Maximum(nodeToRemove->left->value);
	}
	else if (nodeToRemove->HasRight()) {
		replaceNode = nodeToRemove->right->Minimum(nodeToRemove->right->value);
	}
	else {
		//If nodeToRemove is a Leaf do these operations 
		if (!nodeToRemove->IsRoot()) {
			if (nodeToRemove->IsLeft()) {
				nodeToRemove->parent->left = nullptr;
			}
			else {
				nodeToRemove->parent->right = nullptr;
			}
			
		}
		nodeToRemove->DeleteSelf();
		return;
	}
	//Set the parent of replacement node to nothing
	if (replaceNode->IsLeft()) {
		replaceNode->parent->left = nullptr;
	}
	else {
		replaceNode->parent->right = nullptr;
	}
	//Set the replacement node at the position of nodeToRemove
	replaceNode->parent = nodeToRemove->parent;
	replaceNode->left = nodeToRemove->left;
	replaceNode->right = nodeToRemove->right;

	//Set the new parent of replacement node to have replacement node as a child
	if (!nodeToRemove->IsRoot()) {
		if (nodeToRemove->IsLeft()) {
			nodeToRemove->parent->left = replaceNode;
		}
		else {
			nodeToRemove->parent->right = replaceNode;
		}
	}
	//Set the new right child to have the replacement node as a parent
	if (nodeToRemove->HasRight()) {
		nodeToRemove->right->parent = replaceNode;
	}
	//Set the new left child to have the replacement node as a parent
	if (nodeToRemove->HasLeft()) {
		nodeToRemove->left->parent = replaceNode;
	}
	//Delete nodeToRemove
	nodeToRemove->DeleteSelf();
}
void Tree::PostOrderClean() {
	if (this->root == nullptr) return;
	this->root->PostCleanUp();
}
std::string Tree::Description() {
	std::stringstream ss;
	return this->root != nullptr ? this->root->Description(ss).str(): "";
}