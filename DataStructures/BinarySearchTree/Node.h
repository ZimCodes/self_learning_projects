#pragma once
#include <sstream>
struct Node
{
	Node(int val,Node* parent);
	~Node();
	void Insert(int value);
	Node* Search(int value);
	Node* Maximum(int value);
	Node* Minimum(int value);
	bool HasLeft() const;
	bool HasRight() const;
	bool HasBoth() const;
	bool IsLeaf() const;
	bool IsRoot() const;
	bool IsLeft()const;
	void DeleteSelf();
	void PostCleanUp();
	std::stringstream& Description(std::stringstream& ss);
	Node* parent, *left, *right;
	int value;
};

