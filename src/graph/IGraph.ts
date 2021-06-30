import {INode} from "./INode";
export interface IGraph<T>{
    explore(start:INode<T>):void;
}