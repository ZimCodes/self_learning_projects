import{Sort} from "./Sort";
export default class MergeSort implements Sort{
    sort(array: number[]): void | number[] {
        return this.divide(array,array.length);
    }
    divide(array:number[],size:number): number[]{
        if(size <= 1) return array;
        let leftSize = Math.floor(size / 2);
        let leftArr = this.divide(array.slice(0,leftSize),leftSize);
        let rightSize = size - leftSize;
        let rightArr = this.divide(array.slice(leftSize,size),rightSize);
        return this.merge(leftArr,leftSize,rightArr,rightSize);
    }
    merge(leftArr:number[],leftSize:number,rightArr:number[],rightSize:number): number[] {
        let mergeArr = [];
        let leftIndex = 0, rightIndex = 0;
        while (leftIndex < leftSize && rightIndex < rightSize) {
            let leftVal = leftArr[leftIndex];
            let rightVal = rightArr[rightIndex];
            if (leftVal < rightVal) {
                mergeArr.push(leftVal);
                
                leftIndex++;
            } else if (leftVal > rightVal) {
                mergeArr.push(rightVal);
                
                rightIndex++;
            } else {
                mergeArr.push(leftVal);
                leftIndex++;
                mergeArr.push(rightVal);
                rightIndex++;
            }
        }
        if (leftIndex < leftSize) {
            for (let i = leftIndex; i < leftSize; i++) {
                mergeArr.push(leftArr[i]);
            }
        }
        if (rightIndex < rightSize) {
            for (let i = rightIndex; i < rightSize; i++) {
                mergeArr.push(rightArr[i]);
            }
        }
        return mergeArr;
    }
}