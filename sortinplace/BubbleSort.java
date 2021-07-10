package sortinplace;
public class BubbleSort implements ISortInPlace{

    @Override
    public void sort(int[] array) {
        for(int i =0;i<array.length-1;i++){
            for(int j = 1;j<array.length;j++){
                if(array[j-1] > array[j]){
                    ISwapper.swap(array,j-1,j);
                }
            }
        }
    }
}