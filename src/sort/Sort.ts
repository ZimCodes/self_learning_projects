import {ICanSort} from "./ICanSort";

export abstract class Sort implements ICanSort{
    abstract sort(array: number[]): void | number[];
    protected static swap(array:number[], first:number, second:number):void{
        let temp = array[first];
        array[first] = array[second];
        array[second] = temp;
    }
}