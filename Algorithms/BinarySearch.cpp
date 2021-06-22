#include "BinarySearch.h"
BinarySearch::BinarySearch() {

}
int BinarySearch::Search(int* arr,int target,int lowIndex,int highIndex) {
	if (lowIndex > highIndex)return -1;
	int middleIndex = lowIndex + (highIndex - lowIndex) / 2;
	int middleNum = arr[middleIndex];
	if (middleNum == target) {
		return middleIndex;
	}
	if (middleNum > target) {
		return this->Search(arr,target,lowIndex,middleIndex-1);
	}
	return this->Search(arr,target,middleIndex+1,highIndex);
}