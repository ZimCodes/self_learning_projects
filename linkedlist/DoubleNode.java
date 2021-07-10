package linkedlist;
public class DoubleNode extends Node{
    private INode parent;
    public DoubleNode(int value,INode parent) {
        super(value);
        this.parent = parent;
    }
    public DoubleNode(int value,INode parent,INode child) {
        super(value,child);
        this.parent = parent;
    }
    public INode getParent(){
        return this.parent;
    }
    public void setParent(INode parent){
        this.parent = parent;
    }
    public void delete(int val){
        if(this.child == null) return;
        if(this.child.getValue() == val){
            INode grandChildNode = this.child.getChild();
            if(grandChildNode != null){
                ((DoubleNode)grandChildNode).parent = this;
            }
            this.child = grandChildNode;
            return;
        }
        ((DoubleNode)this.child).delete(val);
    }

}