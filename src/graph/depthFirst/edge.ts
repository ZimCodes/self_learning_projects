import {IEdge} from "../IEdge";
import {Node} from "./node";
export class Edge implements IEdge<string>{
    to: Node;
    constructor(to:Node) {
        this.to = to;
    }
}