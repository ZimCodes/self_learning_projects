import {ILinkedList} from "./ILinkedList";
import {INode} from "./INode";

export abstract class LinkedList implements ILinkedList{
    public head?:INode;
    public tail?:INode;
    constructor() {

    }
    abstract insert(val: number):void;
    search(val: number): INode | null {
        if(!this.head ||!this.tail)return null;
        if(this.tail.value === val){
            return this.tail;
        }
        return this.head.search(val);
    }
    abstract remove(val: number):void;
}