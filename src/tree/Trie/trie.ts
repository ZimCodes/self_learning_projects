import Node from "./node";
export default class Trie{
    private root:Node|null;
    constructor() {
        this.root = null;
    }
    insert(word:string):void{
        if(!this.root){
            this.root = new Node();
        }
        this.root.insert(word,0);
    }
    contains(word:string):boolean{
        if(!this.root) return false;
        return this.root.contains(word,0);
    }
}
