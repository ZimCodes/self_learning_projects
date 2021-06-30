import {IEdge} from "../IEdge";
import {Node} from "./node";

export class Edge implements IEdge<string>{
    to: Node;
    cost:number;
    constructor(to:Node,cost:number) {
        this.to = to;
        this.cost = cost;
    }
}