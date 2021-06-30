export default class HeapTree{
    nodes:number[];
    constructor() {
        this.nodes = [];
    }
    private parent(i:number):number{
        return Math.floor((i-1)/2);
    }
    private left(i:number):number{
        return 2 * i + 1;
    }
    private right(i:number):number{
        return 2 * i + 2;
    }
    private hasLeft(i:number):boolean{
        return this.left(i) < this.nodes.length;
    }
    private hasRight(i:number):boolean{
        return this.right(i) < this.nodes.length;
    }
    private hasBoth(i:number):boolean{
        return this.hasLeft(i) && this.hasRight(i);
    }
    private isLeaf(i:number):boolean{
        return !this.hasBoth(i);
    }
    private isRoot(i:number):boolean{
        return this.parent(i) === -1;
    }
    insert(val:number){
        this.nodes.push(val);
        if(this.nodes.length === 1){
            return;
        }
        this.shiftUp(this.nodes.length-1);
    }
    pop(): number | undefined{
        if(this.nodes.length === 0) return undefined;
        if(this.nodes.length === 1) return this.nodes.shift();
        let nodeToPop = <number>this.nodes[0];
        this.swap(0,this.nodes.length-1);
        this.nodes.pop();
        this.shiftDown(0);
        return nodeToPop;
    }
    private shiftUp(index:number):void{
        if(this.isRoot(index))return;
        let parentIndex = this.parent(index);
        let parentVal = this.nodes[parentIndex];
        if(this.nodes[index] > parentVal){
            this.swap(index,parentIndex);
            this.shiftUp(parentIndex);
        }
    }
    private shiftDown(index:number):void{
        let largestIndex = index;
        let compareIndex = this.left(index);
        if(this.hasLeft(index) && this.nodes[compareIndex] > this.nodes[largestIndex]){
            largestIndex = compareIndex;
        }
        compareIndex = this.right(index);
        if(this.hasRight(index) && this.nodes[compareIndex] > this.nodes[largestIndex]){
            largestIndex = compareIndex;
        }
        if(largestIndex !== index){
            this.swap(largestIndex,index);
            this.shiftDown(largestIndex);
        }
    }
    private swap(first:number,second:number):void{
        let temp = this.nodes[first];
        this.nodes[first] = this.nodes[second];
        this.nodes[second] = temp;
    }

}