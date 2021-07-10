package search;
public class ExponentialSearch implements ISearch{
    @Override
    public int search(int[] array, int target) {
        int i = 1;
        while(i < array.length && array[i] < target){
            i <<= 1;//i * 2^1
        }
        if(i > array.length)
            i = array.length;
        return new BinarySearch().search(array,target,i/2,i);
    }
}