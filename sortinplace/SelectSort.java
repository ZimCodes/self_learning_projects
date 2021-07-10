package sortinplace;
public class SelectSort implements ISortInPlace{

    @Override
    public void sort(int[] array) {
        for(int i =0;i<array.length-1;i++){
            int smallest = i;
            for(int j = i+1;j<array.length;j++){
                if(array[smallest] > array[j]){
                    smallest = j;
                }
            }
            ISwapper.swap(array,i,smallest);
        }
    }

}