package example;

import search.ExponentialSearch;

public class ExponentialSearchEx implements IExample,Runnable{

    @Override
    public void run() {
        IExample.readTitle("Exponential Search");
        int[] arr = {54, 127, 312, 558, 614, 736, 742, 752, 765, 798};
        ExponentialSearch expo = new ExponentialSearch();
        IExample.readIndex(expo.search(arr,614));
    }
}