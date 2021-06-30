import {Sort} from "./Sort";

export default class QuickSortHoare extends Sort{
    sort(array: number[]): void | number[] {
        return this.divide(array,0,array.length-1);
    }
    private divide(array:number[],low:number,high:number):number[]|void{
        if(low>=high) return;
        let p:number = QuickSortHoare.partition(array,low,high);
        this.divide(array,low,p);
        this.divide(array,p+1,high);
    }
    private static partition(array:number[],low:number,high:number):number{
        let pivot = array[low];
        let i = low - 1;
        let j = high + 1;
        while(i<j){
            do{
                j--;
            }while(array[j] > pivot);
            do{
                i++;
            }while(array[i] < pivot);

            if(i< j){
                super.swap(array,i,j);
            }
        }
        return j;
    }
}