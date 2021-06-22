#include "JumpSearch.h"
JumpSearch::JumpSearch() {

}
int JumpSearch::Search(int* arr, int count,int target, int steps) {
	
	return this->Jumping(arr, count, target, steps, steps-1);
}
int JumpSearch::Jumping(int* arr, int count, int target, int steps, int maxIndex) {
	int minIndex = maxIndex - steps;
	if (minIndex >= count) return -1;
	if (maxIndex > count) {
		maxIndex = count-1;
	}
	
	if (target <= arr[maxIndex] && target >= arr[minIndex]) {
		for (int i = minIndex; i <= maxIndex;i++) {
			if (arr[i] == target) {
				return i;
			}
		}
	}
	return this->Jumping(arr, count, target, steps, maxIndex + steps);
}