package search;
public class BinarySearch implements ISearch{

    @Override
    public int search(int[] array, int target) {
        return this.searching(array,target,0,array.length);
    }
    public int search(int[] array, int target,int low,int high){
        return this.searching(array,target,low,high);
    }
    private int searching(int[] array, int target,int low,int high){
        if(low > high) return -1;
        int middle = low + (high-low)/2;
        if(array[middle] == target){
            return middle;
        }
        if(array[middle] > target){
            return this.searching(array,target,low,middle-1);
        }
        return this.searching(array,target,middle+1,high);
    }
}