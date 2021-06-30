export interface INode{
    child?:INode;
    value:number;
    insert(val:number):INode|null;
    search(val:number):INode|null;
    remove(val:number):INode|null;
}