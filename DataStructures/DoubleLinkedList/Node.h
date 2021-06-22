#pragma once
struct Node
{
	Node(int val,Node* parent);
	void CleanUp();
	bool Contains(int val);
	void Remove(int val);
	Node* parent, * child;
	int value;
};

