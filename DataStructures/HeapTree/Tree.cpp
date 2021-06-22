#include "Tree.h"
Tree::Tree() {

}
Tree::~Tree() {

}
int Tree::Count() {
	return this->nodes.size();
}
int Tree::Parent(int i) {
	return (i - 1) / 2;
}
int Tree::Left(int i) {
	return 2 * i + 1;
}
int Tree::Right(int i) {
	return 2 * i + 2;
}
bool Tree::HasLeft(int i) {
	return this->Left(i) < this->Count();
}
bool Tree::HasRight(int i) {
	return this->Right(i) < this->Count();
}
bool Tree::HasBoth(int i) {
	return this->HasLeft(i) && this->HasRight(i);
}
bool Tree::IsLeaf(int i) {
	return !this->HasBoth(i);
}
bool Tree::IsRoot(int i) {
	return this->Parent(i) == -1;
}
bool Tree::IsLeft(int i) {
	if (this->IsRoot(i)) {
		return false;
	}
	return this->Left(this->Parent(i)) == i;
}
void Tree::Insert(int val) {
	this->nodes.push_back(val);
	if (this->Count() == 1) return;
	this->ShiftUp(this->Count() - 1);
}
bool Tree::Contains(int val) {
	for (int i = 0; i < this->Count();i++) {
		if (this->nodes[i] == val) {
			return true;
		}
	}
	return false;
}
int Tree::Pop() {
	if (this->Count() == 0)return  INT32_MIN;
	this->Swap(0,this->Count()-1);
	int numToPop = this->nodes.back();
	this->nodes.pop_back();
	this->ShiftDown(0);
	return numToPop;
}
void Tree::ShiftUp(int i) {
	if (this->IsRoot(i)) return;
	int parentIndex = this->Parent(i);
	int parentVal = this->nodes[parentIndex];
	if (this->nodes[i] > parentVal) {
		this->Swap(i,parentIndex);
		this->ShiftUp(parentIndex);
	}
}
void Tree::ShiftDown(int i) {
	if (this->IsLeaf(i)) return;
	int largestIndex = i;
	int leftIndex = this->Left(i);
	int rightIndex = this->Right(i);
	if (this->HasLeft(i) && this->nodes[leftIndex] > this->nodes[largestIndex]) {
		largestIndex = leftIndex;
	}
	if (this->HasRight(i) && this->nodes[rightIndex] > this->nodes[largestIndex]) {
		largestIndex = rightIndex;
	}

	if (largestIndex != i) {
		this->Swap(largestIndex,i);
		this->ShiftDown(largestIndex);
	}
}
void Tree::Swap(int f,int s) {
	int temp = this->nodes[f];
	this->nodes[f] = this->nodes[s];
	this->nodes[s] = temp;
}
int* Tree::PopValuesInOrder(){
	const int size = this->Count();
	int* arr = new int[size];
	for (int i = 0; i < size;i++) {
		arr[i] = this->Pop();
	}
	return arr;
}
