#include "HeapSort.h"
HeapSort::HeapSort() {

}
void HeapSort::Sort(int* arr,int count) {
	//Build a max heap for each sub tree of the binary tree
	for (int i = (count / 2) - 1; i > -1;i--) {
		this->Heapify(arr,count,i);
	}
	//Heapify the entire binary tree
	for (int i = 1; i < count;i++) {
		int unheapedIndex = count - i;
		this->Swap(arr,unheapedIndex,0);
		this->Heapify(arr,unheapedIndex,0);
	}
}
void HeapSort::Heapify(int* arr, int count,int rootIndex) {
	int largestIndex = rootIndex;
	int left = 2 * rootIndex + 1;
	int right = 2 * rootIndex + 2;

	if (left < count && arr[left] > arr[largestIndex]) {
		largestIndex = left;
	}
	if (right < count && arr[right] > arr[largestIndex]) {
		largestIndex = right;
	}

	//Swap if the largest number is not the root
	if (largestIndex != rootIndex) {
		this->Swap(arr, rootIndex, largestIndex);
		this->Heapify(arr,count,largestIndex);
	}
}
/// <summary>
/// Swap elements in the array (in place)
/// </summary>
/// <param name="arr">The array to swap elements</param>
/// <param name="f">first element</param>
/// <param name="s">second element</param>
void HeapSort::Swap(int*arr,int f,int s) {
	int temp = arr[f];
	arr[f] = arr[s];
	arr[s] = temp;
}