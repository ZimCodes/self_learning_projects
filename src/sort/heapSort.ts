import{Sort} from "./Sort";
export default class HeapSort extends Sort{
    sort(array: number[]): void | number[] {
        for(let i = (array.length/2) - 1; i > -1; i--){
            this.heapify(array,array.length,i);
        }

        for(let i = 1;i < array.length;i++){
            let unheapedIndex = array.length - i;
            HeapSort.swap(array,unheapedIndex,0);
            this.heapify(array,unheapedIndex,0);
        }
    }
    heapify(array:number[],count:number,index:number){
        let largestIndex = index;
        let compareIndex = 2 * index + 1;
        if(compareIndex < count && array[compareIndex] <array[largestIndex]){
            largestIndex = compareIndex;
        }
        compareIndex = 2 * index + 2;
        if(compareIndex < count && array[compareIndex] < array[largestIndex]){
            largestIndex = compareIndex;
        }

        if(largestIndex !== index){
            HeapSort.swap(array,largestIndex,index);
            this.heapify(array,count,largestIndex);
        }
    }
}