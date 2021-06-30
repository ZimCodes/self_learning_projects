import {ICanSearch} from "./ICanSearch";

export default class JumpSearch implements ICanSearch{
    search(array:number[],target:number):number;
    search(array:number[],target:number,steps:number):number;
    search(array:number[],target:number,steps?:number):number{
        if(!steps){
            steps = 4;
        }
        return this.jumpSearch(array,target,steps,steps);
    }
    private jumpSearch(array:number[],target:number,steps:number,max:number): number{
        let min = max - steps;
        if(min >= array.length) return -1;
        if(max > array.length){
            max = array.length;
        }
        if(target >= array[min] && target <= array[max-1]){
            for(let i =min;i<max;i++){
                if(array[i] === target){
                    return i;
                }
            }
        }
        return this.jumpSearch(array,target,steps,max+steps);
    }
}