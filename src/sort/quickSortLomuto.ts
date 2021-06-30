import {Sort} from "./Sort";
export default class QuickSortLomuto extends Sort{
    sort(array: number[]): void | number[] {
        this.divide(array,0,array.length-1);
    }
    divide(array:number[],low:number,high:number):void{
        if(low >= high)return;
        let p = this.partition(array,low,high);
        this.divide(array,0,p-1);
        this.divide(array,p+1,high);
    }
    private partition(array:number[],low:number,high:number): number {
        const pivot = array[high];
        let i = low;
        for(let j=low;j<high;j++){
            if(array[j] <= pivot){
                QuickSortLomuto.swap(array,i,j);
                i++;
            }
        }
        QuickSortLomuto.swap(array,i,high);
        return i;
    }
}