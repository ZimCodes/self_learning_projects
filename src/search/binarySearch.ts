import {ICanSearch} from "./ICanSearch";
export default class BinarySearch implements ICanSearch{

    search(array: number[], target: number,low?:number,high?:number): number;
    search(array:number[],target:number,low:number,high:number): number{
        if(!high){
            high = array.length-1;
            low = 0;
        }
        return this.divide(array,target,low,high);
    }
    private divide(array:number[],target:number,low:number,high:number):number{
        if(low>=high) return -1;
        const middle = low + Math.floor((high-low) / 2);
        if(array[middle] === target){
            return middle;
        }
        if(array[middle] > target){
            return this.divide(array,target,low,middle-1);
        }
        return this.divide(array,target,middle+1,high);
    }
}