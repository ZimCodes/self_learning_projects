package example;
import search.JumpSearch;

public class JumpSearchEx implements IExample,Runnable{

    @Override
    public void run() {
        IExample.readTitle("Jump Search");
        JumpSearch jumpSearch = new JumpSearch();
        int[] arr = {25, 47, 99, 363, 535, 608, 632, 699, 722, 844, 857, 963};
        IExample.readIndex(jumpSearch.search(arr,25));
    }
}