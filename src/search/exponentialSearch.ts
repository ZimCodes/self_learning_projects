import {ICanSearch} from "./ICanSearch";
import BinarySearch from "./binarySearch";
export default class ExponentialSearch implements ICanSearch{
    private binarySearch:BinarySearch;
    constructor() {
        this.binarySearch = new BinarySearch();
    }
    search(array: number[], target: number): number {
        let i = 1;
        while(i < array.length && array[i] < target){
            i *=2;
        }
        return this.binarySearch.search(array,target,Math.floor(i/2),i);
    }
}