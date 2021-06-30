import {Sort} from "./Sort";
export default class BubbleSort extends Sort{
    sort(array: number[]): void | number[] {
        for(let i=0;i<array.length-1;i++){
            for(let j=1;j<array.length;j++){
                if(array[j-1] > array[j]){
                    Sort.swap(array,j-1,j);
                }
            }
        }
    }
}