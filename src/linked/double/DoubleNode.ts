import {Node} from "../Node";
export default class DoubleNode extends Node{
    child?:DoubleNode;
    parent?:DoubleNode;
    constructor(val:number,public parentNode?:DoubleNode,childNode?:DoubleNode) {
        super(val,childNode);
        this.parent = parentNode;
    }

    insert(val: number): DoubleNode | null {
        if(!this.child){
            this.child = new DoubleNode(val,this);
            return this.child;
        }
        return this.child.insert(val);
    }
    remove(val: number): DoubleNode | null {
        if(!this.child) return null;
        if(this.child.value === val){
            this.child = <DoubleNode>this.child.child;
            if(this.child){
                this.child.parent = this;
            }else{
                return this;
            }
        }
        return this.child.remove(val);
    }
}