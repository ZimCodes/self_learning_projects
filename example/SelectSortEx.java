package example;

import sortinplace.SelectSort;

public class SelectSortEx implements IExample,Runnable{

    @Override
    public void run() {
        IExample.readTitle("Selection Sort");
        SelectSort selectSort = new SelectSort();
        int[] arr = {768,48,849,34,64,4,8,634,4,889,936,4,46,553,6433,68,841};
        selectSort.sort(arr);
        IExample.readOutArray(arr);
    }
}