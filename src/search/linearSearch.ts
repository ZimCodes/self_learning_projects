import {ICanSearch} from "./ICanSearch";

export default class LinearSearch implements ICanSearch{
    search(array: number[], target: number): number {
        for(let i =0;i < array.length;i++){
            if(array[i] === target){
                return i;
            }
        }
        return -1;
    }
}