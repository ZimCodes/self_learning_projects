package sortinplace;

public class QuickSortLomuto extends QuickSort {

    public QuickSortLomuto(int[] array,int low,int high){
        super(array,low,high);
    }
    @Override
    protected void sort(){
        if(this.low >= this.high) return;
        int p = this.partition();
        invokeAll(new QuickSortLomuto(array,this.low,p-1),
                new QuickSortLomuto(array,p+1,this.high));
    }
    @Override
    protected int partition(){
        int pivot = this.array[this.high];
        int i = this.low;
        for(int j = this.low;j<this.high;j++){
            if(this.array[j] <= pivot){
                ISwapper.swap(this.array,j,i);
                i++;
            }
        }
        ISwapper.swap(this.array,this.high,i);
        return i;
    }
}