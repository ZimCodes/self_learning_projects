import {INode} from "../INode";
import {Edge} from "./edge";
export class Node implements INode<string>{
    neighbors: Array<Edge>;
    value: string;
    constructor(val:string) {
        this.value = val;
        this.neighbors = [];
    }
    addRoute(node: Node, cost: number): void {
        let neighbor = new Edge(node,cost);
        this.neighbors.push(neighbor);
    }
}