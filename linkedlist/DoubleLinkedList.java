package linkedlist;
public class DoubleLinkedList extends LinkedList {
    @Override
    public void insert(int val) {
        INode node;
        if(this.head == null){
            node = new DoubleNode(val, null, null);
            this.head = node;
        }else{
            node = new DoubleNode(val, this.tail, null);
            this.tail.setChild(node);
        }
        this.tail = node;
    }

    @Override
    public void delete(int val) {
        if(this.head == null) return;
        if(this.head.getValue() == val){
            INode childNode = null;
            if(this.head.getChild() != null){
                childNode = this.head.getChild();
                ((DoubleNode)childNode).setParent(null);
            }
            if(this.head.equals(this.tail)){
                this.tail = childNode;
            }
            this.head = childNode;
        }else if(this.tail.getValue() == val){
            INode parentNode = ((DoubleNode)this.tail).getParent();
            parentNode.setChild(null);
            this.tail = parentNode;
        }else{
            ((DoubleNode)this.head).delete(val);
        }
    }
}