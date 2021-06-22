#include "QuickSort.h"
QuickSort::QuickSort() {

}
void QuickSort::LomutoSort(int*arr,int lowIndex,int highIndex) {
	if (lowIndex >= highIndex) return;
	int pivotIndex = this->LomutoPartition(arr,lowIndex,highIndex);
	this->LomutoSort(arr,lowIndex,pivotIndex-1);
	this->LomutoSort(arr,pivotIndex+1,highIndex);
}
void QuickSort::HoareSort(int*arr,int lowIndex,int highIndex) {
	if (lowIndex >= highIndex)return;
	int pivotIndex = this->HoarePartition(arr,lowIndex,highIndex);
	this->HoareSort(arr,lowIndex,pivotIndex);
	this->HoareSort(arr,pivotIndex+1,highIndex);
}
int QuickSort::LomutoPartition(int*arr,int lowIndex,int highIndex) {
	int pivot = arr[highIndex];
	int j = lowIndex;
	for (int i = lowIndex; i < highIndex;i++) {
		if (arr[i] <= pivot) {
			this->Swap(arr,j,i);
			j++;
		}
	}
	this->Swap(arr,j,highIndex);
	return j;
}
int QuickSort::HoarePartition(int*arr,int lowIndex,int highIndex) {
	int pivot = arr[lowIndex];
	int i = lowIndex - 1;
	int j = highIndex + 1;
	while (i < j) {
		do {
			i++;
		} while (arr[i] < pivot);

		do {
			j--;
		} while (arr[j]>pivot);
		
		if (i < j) {
			this->Swap(arr,i,j);
		}
	}
	return j;
}

void QuickSort::Swap(int* arr,int f,int s) {
	int temp = arr[f];
	arr[f] = arr[s];
	arr[s] = temp;
}