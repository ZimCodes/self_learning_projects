import {LinkedList} from "../LinkedList";
import DoubleNode from "./DoubleNode";

export default class DoubleLinkedList extends LinkedList{
    head?:DoubleNode;
    tail?:DoubleNode;
    insert(val: number):void {
        if(!this.head){
            let newNode = new DoubleNode(val);
            this.head = this.tail = newNode;
        }else{
            this.tail = <DoubleNode>this.head.insert(val);
        }
    }
    remove(val: number): void {
        if(!this.head || !this.tail) return;
        if(this.head.value === val){
            let headChild = <DoubleNode>this.head.child;
            if(this.tail === this.head){
                this.tail = headChild;
                this.tail.parent = undefined;
            }
            this.head = headChild;
            this.head.parent = undefined;
        }else{
            let result =  <DoubleNode>this.head.remove(val);
            if(result){
               this.tail = result;
            }
        }
    }
}