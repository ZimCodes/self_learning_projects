#include "MergeSort.h"
MergeSort::MergeSort() {

}
MergeSort::~MergeSort() {
	while (!this->collect.empty()) {
		delete[] this->collect.top();
		this->collect.pop();
	}
}
int* MergeSort::Sort(int* arr,int count) {
	return this->Divide(arr, count);
}
int* MergeSort::Divide(int* arr, int count) {
	if (count <= 1) return arr;
	int leftSize = count / 2;
	int* leftArr = this->Divide(GetRange(arr, 0, leftSize), leftSize);
	int rightSize = count - leftSize;
	int* rightArr = this->Divide(GetRange(arr, leftSize, count), rightSize);

	return this->Merge(leftArr,leftSize,rightArr,rightSize);
}
int* MergeSort::Merge(int* leftArr, int leftSize, int* rightArr, int rightSize) {
	int* combined = new int[rightSize + leftSize];
	this->collect.push(combined);
	int leftIndex = 0, rightIndex = 0, combinedIndex = 0;
	while(leftIndex < leftSize && rightIndex < rightSize){
		int leftVal = leftArr[leftIndex];
		int rightVal = rightArr[rightIndex];
		if ( leftVal < rightVal) {
			combined[combinedIndex] = leftVal;
			leftIndex++;
			combinedIndex++;
		}
		else if (leftVal > rightVal) {
			combined[combinedIndex] = rightVal;
			rightIndex++;
			combinedIndex++;
		}
		else {
			combined[combinedIndex] = leftVal;
			leftIndex++;
			combinedIndex++;

			combined[combinedIndex] = rightVal;
			rightIndex++;
			combinedIndex++;
		}
	}
	for (int i = leftIndex; i < leftSize;i++) {
		combined[combinedIndex] = leftArr[i];
		combinedIndex++;
	}
	for (int i = rightIndex; i < rightSize;i++) {
		combined[combinedIndex] = rightArr[i];
		combinedIndex++;
	}
	return combined;
}
int* MergeSort::GetRange(int*arr,int start, int end) {
	int* rangeArr = new int[end - start];
	this->collect.push(rangeArr);
	int index = 0;
	for (int i = start; i < end;i++) {
		rangeArr[index] = arr[i];
		index++;
	}
	return rangeArr;
}