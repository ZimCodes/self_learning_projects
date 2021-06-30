import {INode} from "./INode";
export interface IEdge<T>{
    to:INode<T>;
    cost?:number;
}