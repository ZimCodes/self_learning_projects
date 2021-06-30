import {IEdge} from "./IEdge";
export interface INode<T>{
    value:T;
    neighbors:Array<IEdge<T>>;
    addRoute(node:INode<T>,cost?:number):void;
}