import {LinkedList} from "../LinkedList";
import {SingleNode} from "./SingleNode";

export default class SingleLinkedList extends LinkedList{
    insert(val: number): void {
        if(!this.head){
            let newNode = new SingleNode(val);
            this.head = newNode;
            this.tail = newNode;
            return;
        }
        this.tail = <SingleNode>this.head.insert(val);
    }
    remove(val: number): void{
        if(!this.head) return;
        if(this.head.value === val){
            let newHead = this.head.child;
            if(this.tail === this.head){
                this.tail = newHead;
            }
            this.head =  newHead;
            return;
        }
        let result = this.head.remove(val);
        if(result){
            this.tail = <SingleNode>result;
        }
    }
}