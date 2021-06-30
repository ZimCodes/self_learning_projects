import {Sort} from "./Sort";
export default class SelectionSort extends Sort{
    sort(array: number[]): void | number[] {
        for(let i =0;i<array.length-1;i++){
            let j = i+1;
            let smallestIndex:number = i;
            while(j < array.length){
                if(array[j] < array[smallestIndex]){
                    smallestIndex = j;
                }
                j++;
            }
            SelectionSort.swap(array,i,smallestIndex);
        }
    }
}