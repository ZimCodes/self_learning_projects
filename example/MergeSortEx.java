package example;
import java.util.concurrent.RecursiveTask;
public class MergeSortEx extends RecursiveTask<Integer[]>{
    private Integer[] curArray;
    public MergeSortEx(Integer[] array, int start, int end){
        int newSize = end - start;
        this.curArray = new Integer[newSize];
        System.arraycopy(array,start,this.curArray,0,newSize);
    }
    private Integer[] merging(Integer[] leftArr,int leftSize,Integer[] rightArr,int rightSize){
        Integer[] combinedArr = new Integer[rightSize+leftSize];
        int lI=0,rI=0,cI=0;
        while(lI < leftSize && rI < rightSize){
            Integer lValue = leftArr[lI],rValue= rightArr[rI];
            if(lValue < rValue){
                combinedArr[cI] = lValue;
                lI++;
                cI++;
            }else if(lValue > rValue){
                combinedArr[cI] = rValue;
                rI++;
                cI++;
            }else{
                combinedArr[cI] = lValue;
                lI++;
                cI++;
                combinedArr[cI] = rValue;
                rI++;
                cI++;
            }
        }
        for(;lI<leftSize;lI++){
            combinedArr[cI] = leftArr[lI];
            cI++;
        }
        for(;rI<rightSize;rI++){
            combinedArr[cI] = rightArr[rI];
            cI++;
        }
        return combinedArr;
    }
    public Integer[] getArray(){
        return this.curArray;
    }
    @Override
    protected Integer[] compute() {
        if(this.curArray.length <= 1){
            return this.curArray;
        }
        int leftSize = this.curArray.length/2;
        MergeSortEx mergeLeft = new MergeSortEx(this.curArray,0,leftSize);
        mergeLeft.fork();
        int rightSize = this.curArray.length - leftSize;
        MergeSortEx mergeRight = new MergeSortEx(this.curArray,leftSize,this.curArray.length);

        return merging(mergeLeft.compute(),leftSize,mergeRight.compute(),rightSize);
    }
}