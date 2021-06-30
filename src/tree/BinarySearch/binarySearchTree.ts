import Node from "./node";
export default class BinarySearchTree {
    private root?:Node;
    insert(val:number):void{
        if(!this.root){
            this.root = new Node(val,undefined);
        }else{
            this.root.insert(val);
        }
    }
    search(val:number):Node|null{
        if(!this.root)return null;
        return this.root.search(val);
    }
    remove(val:number):void{
        if(!this.root) return;
        let nodeToDelete = this.root.search(val);
        if(!nodeToDelete) return;
        let replaceNode:Node;
        if(nodeToDelete.left){
            replaceNode = <Node>nodeToDelete.left.getMaximum(nodeToDelete.left.value);
        }else if(nodeToDelete.right){
            replaceNode = <Node>nodeToDelete.right.getMinimum(nodeToDelete.right.value);
        }else{
            if(nodeToDelete.parent){
                if(nodeToDelete.parent.left === nodeToDelete){
                    nodeToDelete.parent.left = undefined;
                }else{
                    nodeToDelete.parent.right = undefined;
                }
            }
            nodeToDelete.parent = undefined;
            return;
        }
        if(replaceNode.parent){
            if(replaceNode.parent.left === replaceNode){
                replaceNode.parent.left = undefined;
            }else{
                replaceNode.parent.right = undefined;
            }
        }
        replaceNode.parent = nodeToDelete.parent;
        replaceNode.left = nodeToDelete.left;
        replaceNode.right = nodeToDelete.right;

        if(nodeToDelete.parent){
            if(nodeToDelete.parent.left === nodeToDelete){
                nodeToDelete.parent.left = replaceNode;
            }else{
                nodeToDelete.parent.right = replaceNode;
            }
        }
        if(replaceNode.left){
            replaceNode.left.parent = replaceNode;
        }
        if(replaceNode.right){
            replaceNode.right.parent = replaceNode;
        }
    }
}