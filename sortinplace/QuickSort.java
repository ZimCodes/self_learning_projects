package sortinplace;
import java.util.concurrent.RecursiveAction;

abstract class QuickSort extends RecursiveAction implements ISwapper {
    protected final int low,high;
    protected final int[] array;

    public QuickSort(int[] array,int low,int high){
        this.array = array;
        this.low = low;
        this.high = high;
    }
    protected abstract int partition();
    protected abstract void sort();
    @Override
    protected void compute(){
        this.sort();
    }
}