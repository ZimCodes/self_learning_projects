package example;
import tree.HeapTree;
public class HeapTreeEx implements Runnable,IExample{

    @Override
    public void run() {
        IExample.readTitle("Heap Tree");
        HeapTree heapTree = new HeapTree();
        int[] arr = {8,98,453,16,834,89,4,4,364,84,4,4,6341,36,12,12,13,165,3415,448,94,638,94784,141,631,6};
        for(int num:arr){
            heapTree.insert(num);
        }
        int curNum = heapTree.pop();;
        while(curNum != Integer.MAX_VALUE){
            System.out.print(curNum+", ");
            curNum = heapTree.pop();
        }
        System.out.println();
    }
}