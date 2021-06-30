import Node from "./node";
import {IEdge} from "../IEdge";
export default class Edge implements IEdge<string>{
    to:Node;
    constructor(to:Node) {
        this.to = to;
    }
}