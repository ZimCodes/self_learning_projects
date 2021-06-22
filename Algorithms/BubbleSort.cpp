#include "BubbleSort.h"
BubbleSort::BubbleSort() {

}
/// <summary>
/// Loop iteration of sorting algorithm
/// </summary>
/// <param name="arr"></param>
/// <param name="count"></param>
void BubbleSort::Sort(int*arr,int count) {
	for (int i = 0; i < count-1;i++) {
		for (int j = 1; j < count;j++) {
			if (arr[j-1] > arr[j]) {
				this->Swap(arr,j-1,j);
			}
		}
	}
}
/// <summary>
/// Recurse version of sorting algorithm
/// </summary>
/// <param name="arr"></param>
/// <param name="count"></param>
/// <param name="passthrough"></param>
void BubbleSort::SortRecurse(int*arr,int count,int passthrough) {
	if (passthrough>=count)return;
	int smallestIndex = passthrough;
	for (int i = passthrough+1; i < count;i++) {
		if (arr[smallestIndex] > arr[i]) {
			smallestIndex = i;
		}
	}
	this->Swap(arr,smallestIndex,passthrough);
	this->SortRecurse(arr, count, ++passthrough);
}
void BubbleSort::Swap(int* arr,int f,int s) {
	int temp = arr[f];
	arr[f] = arr[s];
	arr[s] = temp;
}