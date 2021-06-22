#include "InsertionSort.h"
InsertionSort::InsertionSort() {

}
void InsertionSort::Sort(int* arr,int count) {
	for (int i = 1; i < count;i++) {
		int compareNum = arr[i];
		int prevNumIndex = i - 1;
		while (prevNumIndex>-1 && arr[prevNumIndex] > compareNum) {
			int next = arr[prevNumIndex + 1];
			int cur = arr[prevNumIndex];
			arr[prevNumIndex + 1] = arr[prevNumIndex];
			prevNumIndex--;
		}
		arr[prevNumIndex + 1] = compareNum;
	}
}