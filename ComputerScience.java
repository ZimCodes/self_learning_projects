import example.*;
import sortinplace.QuickSortHoare;
import sortinplace.QuickSortLomuto;

import java.util.Arrays;
import java.util.concurrent.ExecutorService;
import java.util.concurrent.Executors;
import java.util.concurrent.ForkJoinPool;
import java.util.stream.IntStream;

public final class ComputerScience {
    public static void main(String[] args){
        /*Thread Pools*/
        ExecutorService pool = Executors.newCachedThreadPool();
        ForkJoinPool forkpool = new ForkJoinPool();
        /*Depth-First Search*/
        DepthFirstEx depthFirstEx = new DepthFirstEx();
        pool.execute(depthFirstEx);
        /*Merge Sort*/
        Integer[] mergeArr = {21,34,89,89,653,389,9,98,4,838,63,35,498,3};
        MergeSortEx mergeSortEx = new MergeSortEx(mergeArr,0,mergeArr.length);
        Integer[] mergeAns = forkpool.invoke(mergeSortEx);
        readOutArray(mergeAns,"Merge Sort");
        /*Binary Search*/
        BinarySearchEx binarySearchEx = new BinarySearchEx();
        pool.execute(binarySearchEx);
        /*Heap Sort*/
        HeapSortEx heapSortEx = new HeapSortEx();
        pool.execute(heapSortEx);
        /*Heap Tree*/
        HeapTreeEx heapTreeEx = new HeapTreeEx();
        pool.execute(heapTreeEx);
        /*Selection Sort*/
        SelectSortEx selectSortEx = new SelectSortEx();
        pool.execute(selectSortEx);
        /*Bubble Sort*/
        BubbleSortEx bubbleSortEx = new BubbleSortEx();
        pool.execute(bubbleSortEx);
        /*Quick Sort (Lomuto)*/
        int[] quickLomutoArr = {1,89,41,634,35,46,48,49,4,94,61,3,210,0,4,801,515,16,11,2313,2};
        QuickSortLomuto quickSortLomuto = new QuickSortLomuto(quickLomutoArr,0,quickLomutoArr.length - 1);
        forkpool.execute(quickSortLomuto);
        readOutArray(IntStream.of(quickLomutoArr).boxed().toArray(Integer[]::new),"Quick Sort (Lomuto)");
        /*Quick Sort (Hoare)*/
        int[] quickHoareArr = {514, 530, 401, 967, 87, 464, 859, 164, 623, 167, 312, 214};
        QuickSortHoare quickSortHoare = new QuickSortHoare(quickHoareArr,0,quickHoareArr.length -1);
        forkpool.execute(quickSortHoare);
        readOutArray(IntStream.of(quickHoareArr).boxed().toArray(Integer[]::new),"Quick Sort (Hoare)");
        /*Breadth-First Search*/
        BreadthFirstEx breadthFirstEx = new BreadthFirstEx();
        pool.execute(breadthFirstEx);
        /*Jump Search*/
        JumpSearchEx jumpSearchEx = new JumpSearchEx();
        pool.execute(jumpSearchEx);
        /*Double LinkedList*/
        DoubleLinkEx doubleLinkEx = new DoubleLinkEx();
        pool.execute(doubleLinkEx);
        /*Exponential Search*/
        ExponentialSearchEx exponentialSearchEx = new ExponentialSearchEx();
        pool.execute(exponentialSearchEx);
        /*Dijkstra Search*/
        DijkstraEx dijkstraEx = new DijkstraEx();
        pool.execute(dijkstraEx);
        /*Tries*/
        TriesEx triesEx = new TriesEx();
        pool.execute(triesEx);
        /*Insertion Sort*/
        InsertSortEx insertSortEx = new InsertSortEx();
        pool.execute(insertSortEx);
        /*Linear Search*/
        LinearSearchEx linearSearchEx = new LinearSearchEx();
        pool.execute(linearSearchEx);
        close(pool,forkpool);
    }
    private static void readOutArray(Integer[] array,String title){
        System.out.println("----"+title+"----");
        for(Integer num:array){
            System.out.print(num+", ");
        }
        System.out.println();
    }
    private static void close(ExecutorService... pools){
        for(ExecutorService pool:pools){
            pool.shutdown();
        }
    }
}
