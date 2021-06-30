import {INode} from "../INode";
import {Edge} from "./edge";
export class Node implements INode<string>{
    neighbors: Array<Edge>;
    value: string;

    constructor(val:string) {
        this.neighbors = [];
        this.value = val;
    }

    addRoute(node: Node): void {
        let neighbor = new Edge(node);
        this.neighbors.push(neighbor);
    }

}