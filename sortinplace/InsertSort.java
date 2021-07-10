package sortinplace;
public class InsertSort implements ISortInPlace{
    @Override
    public void sort(int[] array) {
        for(int i = 1;i<array.length;i++){
            int compareNum = array[i];
            int j = i-1;
            while(j > -1 && array[j] >= compareNum){
                array[j+1] = array[j];
                j--;
            }
            array[j+1] = compareNum;
        }
    }
}