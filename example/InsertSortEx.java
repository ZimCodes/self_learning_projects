package example;

import sortinplace.InsertSort;

public class InsertSortEx implements IExample,Runnable{
    @Override
    public void run() {
        IExample.readTitle("Insertion Sort");
        int[] arr = {777, 540, 23, 381, 553, 996, 54, 385, 607, 435};
        InsertSort insert = new InsertSort();
        insert.sort(arr);
        IExample.readOutArray(arr);
    }
}