import {INode} from "./INode";

export interface ILinkedList{
    insert(val:number):void;
    search(val:number):INode|null;
    remove(val:number):void;
}