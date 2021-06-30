import {IGraph} from "../IGraph";
import {Node} from "./node";
import {Edge} from "./edge";

export default class DijkstraGraph implements IGraph<string>{
    private queue:Array<Edge>;
    private cameFrom:Map<Node|null,Node|null>;
    private costSoFar:Map<Node,number>;
    constructor() {
        this.queue = [];
        this.cameFrom = new Map<Node | null, Node | null>();
        this.costSoFar = new Map<Node, number>();
    }

    explore(start: Node): void {
        this.reInit();
        this.exploring(start);
    }
    private exploring(start:Node):void{
        this.queue.push(new Edge(start,0));
        this.costSoFar.set(start,0);
        this.cameFrom.set(start,null);
        while(this.queue.length !== 0){
            this.queue.sort((a,b)=> b.cost - a.cost);
            let curEdge = <Edge>this.queue.shift();
            let curNode = curEdge.to;
            for(const neighbor of curNode.neighbors){
                let newCost = <number>this.costSoFar.get(neighbor.to) + neighbor.cost;
                if(!this.costSoFar.has(neighbor.to) || newCost < <number>this.costSoFar.get(neighbor.to)){
                    this.costSoFar.set(neighbor.to,newCost);
                    this.cameFrom.set(neighbor.to,curNode);
                    this.queue.push(neighbor);
                }
            }

        }
    }
    private reInit(){
        this.costSoFar = new Map<Node, number>();
        this.cameFrom = new Map<Node | null, Node | null>();
    }
    getPath(start:Node,target:Node):Array<string>{
        let arr = [];
        let curNode = target;
        while(curNode && curNode !== start){
            arr.push(curNode.value);
            curNode = <Node>this.cameFrom.get(curNode);
        }
        arr.push(start.value);
        arr.reverse();
        return arr;
    }
}