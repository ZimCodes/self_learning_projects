export default class Node{
    private letters:Map<string,Node|null>;
    constructor() {
        this.letters = new Map();
    }
    insert(word:string,index:number):void{
        if(index >= word.length){
            this.letters.set('*',null);
            return;
        }
        const letter:string = word[index];
        if(!this.letters.has(letter)){
            this.letters.set(letter,new Node());
        }
        // @ts-ignore
        this.letters.get(letter).insert(word,++index);
    }
    contains(word:string,index:number):boolean{
        if(index >= word.length) return true;
        const letter = word[index];
        if(this.letters.has(letter)){
            // @ts-ignore
            return this.letters.get(letter).contains(word,++index);
        }
        return false;
    }
}
