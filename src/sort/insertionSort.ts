import {Sort} from "./Sort";
export default class InsertionSort extends Sort{
    sort(array: number[]): void | number[] {
        for(let i = 1; i <array.length;i++){
            let compareNum = array[i];
            let j = i-1;
            while(j > -1 && array[j] > compareNum){
                array[j+1] = array[j];
                j--;
            }
            array[j+1] = compareNum;
        }
    }
}