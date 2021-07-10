package search;

public class JumpSearch implements ISearch {

    @Override
    public int search(int[] array, int target) {
        return this.searching(array,target,4,0);
    }
    public int search(int[] array,int target,int steps){
        return this.searching(array,target,steps,0);
    }
    private int searching(int[] array,int target,int steps,int index){
        if(index>= array.length) return -1;
        int high = index+steps;
        if(high > array.length-1){
            high = array.length-1;
        }
        if(target >= array[index] && target <= array[high]){
            for(int i = index; i<=high;i++){
                if(array[i] == target){
                    return i;
                }
            }
        }
        return this.searching(array,target,steps,index + steps);
    }
}