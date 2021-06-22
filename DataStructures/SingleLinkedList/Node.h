#pragma once
struct Node
{
	Node(int val);
	int value;
	void Remove(int val,Node*& tail);
	bool Contains(int val);
	void CleanUp();
	Node* child;
};

