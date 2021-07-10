package example;
import sortinplace.HeapSort;
public class HeapSortEx implements Runnable,IExample{

    @Override
    public void run() {
        System.out.println("----Heap Sort----");
        HeapSort heapSort = new HeapSort();
        int[] arr = {98,49,83,668,4,984,7699,83,61,3,4,78};
        heapSort.sort(arr);
        IExample.readOutArray(arr);
    }
}