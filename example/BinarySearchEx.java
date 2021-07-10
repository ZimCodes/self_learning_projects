package example;
import search.BinarySearch;
public class BinarySearchEx implements Runnable,IExample{

    @Override
    public void run() {
        IExample.readTitle("Binary Search");
        BinarySearch binarySearch = new BinarySearch();
        int[] arr = {112,185,236,390,565,698,880,883,889,947};
        IExample.readIndex(binarySearch.search(arr,883));
    }
}