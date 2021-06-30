import {IGraph} from "../IGraph";
import Node from "./node";
export default class BreadFirstGraph implements IGraph<string>{
    queue:Array<Node>;
    hasVisited:Map<Node,boolean>;
    visited:Array<string>;
    constructor() {
        this.queue  = [];
        this.visited = [];
        this.hasVisited = new Map<Node, boolean>();
    }
    explore(start: Node) {
        this.queue.push(start);
        while(this.queue.length !== 0){
            let curNode:Node = <Node>this.queue.shift();
            if(!this.hasVisited.has(curNode)){
                for(const neighbor of curNode.neighbors){
                    this.queue.push(neighbor.to);
                }
                this.hasVisited.set(curNode,true);
                this.visited.push(curNode.value);
            }
        }
    }
    getPath():Array<string>{
        return this.visited;
    }
}