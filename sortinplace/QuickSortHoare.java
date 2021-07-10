package sortinplace;

public class QuickSortHoare extends QuickSort {

    public QuickSortHoare(int[] array, int low, int high) {
        super(array, low, high);
    }

    @Override
    public void sort() {
        if(this.low >= this.high) return;
        int p = this.partition();
        invokeAll(new QuickSortHoare(this.array,this.low,p),
                new QuickSortHoare(this.array,p+1,this.high));
    }

    @Override
    protected int partition() {
        int pivot = this.array[this.low];
        int i = this.low - 1;
        int j = this.high + 1;
        while(i < j){
            do{
                j--;
            }while(this.array[j] > pivot);
            do{
                i++;
            }while(this.array[i] < pivot);
            if(i < j){
                ISwapper.swap(this.array,i,j);
            }
        }
        return j;
    }
}