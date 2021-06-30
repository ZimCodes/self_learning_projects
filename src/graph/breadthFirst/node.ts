import {INode} from "../INode";
import Edge from "./edge";
export default class Node implements INode<string>{
    value: string;
    neighbors: Array<Edge>;
    constructor(val:string) {
        this.value = val;
        this.neighbors = [];
    }

    addRoute(node: INode<string>): void {
        let neighbor = new Edge(node);
        this.neighbors.push(neighbor);
    }
}