package sortinplace;

import java.util.Collections;

public class HeapSort implements ISortInPlace{

    @Override
    public void sort(int[] array) {
        for(int i = (array.length/2) - 1;i > -1;i--){
            this.heapify(array, array.length, i);
        }

        for(int i =array.length - 1;i > -1;i--){
            ISwapper.swap(array,0,i);
            this.heapify(array,i,0);
        }
    }
    private void heapify(int[] array,int size,int i){
        int largestIndex = i;
        int compareIndex = 2 * i + 1;
        if(compareIndex < size && array[largestIndex] < array[compareIndex]){
            largestIndex = compareIndex;
        }
        compareIndex = 2 * i + 2;
        if(compareIndex < size && array[largestIndex] < array[compareIndex]){
            largestIndex = compareIndex;
        }
        if(largestIndex != i){
            ISwapper.swap(array,largestIndex,i);
            this.heapify(array,size,largestIndex);
        }
    }
}