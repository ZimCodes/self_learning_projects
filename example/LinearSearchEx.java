package example;

import search.LinearSearch;

public class LinearSearchEx implements IExample,Runnable{
    @Override
    public void run() {
        IExample.readTitle("Linear Search");
        int[] arr = {90, 637, 118, 626, 432, 914, 272, 986, 474, 268};
        LinearSearch linear = new LinearSearch();
        IExample.readIndex(linear.search(arr,914));
    }
}