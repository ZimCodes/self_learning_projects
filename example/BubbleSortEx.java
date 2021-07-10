package example;

import sortinplace.BubbleSort;

public class BubbleSortEx implements IExample,Runnable{

    @Override
    public void run() {
        IExample.readTitle("Bubble Sort");
        BubbleSort bubbleSort = new BubbleSort();
        int[] arr = {630,5,3,0,24,4,200,4,856,640,638,48,4836,306,8,936,64,35,42,34,61,514};
        bubbleSort.sort(arr);
        IExample.readOutArray(arr);
    }
}