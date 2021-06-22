#include "SelectionSort.h"
SelectionSort::SelectionSort() {

}
void SelectionSort::Sort(int* arr,int count) {
	for (int i = 0; i < count;i++) {
		int smallestIndex = i;
		for (int j = i+1; j < count;j++) {
			int test = arr[smallestIndex];
			int other = arr[j];
			if (arr[smallestIndex] > arr[j]) {
				smallestIndex = j;
			}
		}
		this->Swap(arr,i,smallestIndex);
	}
}
void SelectionSort::Swap(int* arr,int f,int s) {
	int temp = arr[f];
	arr[f] = arr[s];
	arr[s] = temp;
}