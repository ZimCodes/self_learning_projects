#include "LinearSearch.h"
LinearSearch::LinearSearch() {

}
int LinearSearch::Search(int* arr,int count,int target) {
	for (int i = 0; i < count;i++) {
		if (arr[i] == target) {
			return i;
		}
	}
	return -1;
}