import {Node} from "../Node";

export class SingleNode extends Node{
    insert(val: number): SingleNode | null {
        if(!this.child){
            this.child = new SingleNode(val);
            return this.child;
        }
        return this.child.insert(val);
    }
    remove(val: number): SingleNode|null {
        if(!this.child) return null;
        if(this.child.value === val){
            let grandChild = <SingleNode>this.child.child;
            this.child = grandChild;
            if(grandChild){
                return grandChild;
            }
            return this;
        }
        return this.child.remove(val);
    }
}