export default class Node{
    value:number;
    parent?:Node;
    left?:Node;
    right?:Node;
    constructor(val:number,parentNode?:Node) {
        this.value = val;
        this.parent = parentNode;
    }
    insert(val:number):void{
        if(val < this.value){
            if(!this.left){
                this.left = new Node(val,this);
            }else{
                this.left.insert(val);
            }
        }else{
            if(!this.right){
                this.right = new Node(val,this);
            }else{
                this.right.insert(val);
            }
        }

    }
    search(val:number):Node|null{
        if(val === this.value) return this;
        if(val < this.value){
            if(this.left){
                return this.left.search(val);
            }
        }else{
            if(this.right){
                return this.right.search(val);
            }
        }
        return null;
    }
    getMaximum(val:number):Node|null{
        if(!this.left && !this.right)return this;
        if(this.right){
            return this.right.getMaximum(this.right.value);
        }else{
            if(this.left && this.left.value > val){
                return this.left.getMaximum(this.left.value);
            }
        }
        return null;
    }
    getMinimum(val:number):Node|null{
        if(!this.left && !this.right)return this;
        if(this.left){
            return this.left.getMinimum(this.left.value);
        }else{
            if(this.right && this.right.value < val){
                return this.right.getMinimum(this.right.value);
            }
        }
        return null;
    }
}