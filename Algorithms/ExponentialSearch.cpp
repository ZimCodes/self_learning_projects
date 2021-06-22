#include "ExponentialSearch.h"
ExponentialSearch::ExponentialSearch() {

}
int ExponentialSearch::Search(int*arr,int count,int target) {
	int i = 1;
	while ( i < count && arr[i] < target) {
		i *= 2;
	}

	return this->BinarySearch(arr,target,i/2,this->GetMin(i, count-1));
}
int ExponentialSearch::BinarySearch(int*arr,int target,int lowIndex,int highIndex) {
	if (lowIndex > highIndex) return -1;
	int middleIndex = lowIndex + (highIndex - lowIndex) / 2;
	if (arr[middleIndex] == target) {
		return middleIndex;
	}

	if (arr[middleIndex] > target) {
		return this->BinarySearch(arr,target,lowIndex,middleIndex-1);
	}
	return this->BinarySearch(arr, target, middleIndex + 1, highIndex);
}
int ExponentialSearch::GetMin(int first,int second) {
	return first < second ? first: second;
}