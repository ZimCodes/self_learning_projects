package linkedlist;
abstract class Node implements INode{
    protected INode child;
    private final int value;
    public Node(int value){
        this.value = value;
    }
    public Node(int value,INode child){
        this.value = value;
        this.child = child;
    }

    @Override
    public boolean contains(int val) {
        if(this.value == val) return true;
        if(this.child != null){
            return this.child.contains(val);
        }
        return false;
    }

    @Override
    public INode search(int val){
        if(this.value == val) return this;
        if(this.child != null){
            return this.child.search(val);
        }
        return null;
    }

    @Override
    public int getValue() {
        return this.value;
    }

    @Override
    public INode getChild() {
        return this.child;
    }

    @Override
    public void setChild(INode child) {
        this.child = child;
    }
}