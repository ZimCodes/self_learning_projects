import {IGraph} from "../IGraph";
import {Node} from "./node";

export default class DepthGraph implements IGraph<string>{
    private hasVisited: Map<Node,boolean>;
    private visited:Array<string>;
    constructor() {
        this.visited = [];
        this.hasVisited = new Map<Node, boolean>();
    }
    explore(start: Node): void {
        this.reInit();
        this.exploring(start);
    }
    private exploring(curNode:Node){
        for(let neighbor of curNode.neighbors){
            if(!this.hasVisited.has(neighbor.to)){
                this.hasVisited.set(neighbor.to,true);
                this.visited.push(neighbor.to.value);
                this.exploring(neighbor.to);
            }
        }
    }
    private reInit(){
        this.visited = [];
        this.hasVisited = new Map<Node, boolean>();
    }
    getPath():Array<string>{
        return this.visited;
    }
}