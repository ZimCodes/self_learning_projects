import {INode} from "./INode";
export abstract class Node implements INode{
    child?:INode;
    value:number;
    constructor(val:number,childNode?:INode) {
        this.value = val;
        this.child = childNode;
    }
    abstract insert(val: number): INode|null;
    search(val: number): INode | null {
        if(this.value === val) return this;
        if(this.child){
            return this.child.search(val);
        }
        return null;
    }
    abstract remove(val: number): INode|null;
}