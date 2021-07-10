package linkedlist;

abstract class LinkedList implements ILinkedList {
    protected INode head,tail;
    @Override
    public abstract void insert(int val);
    @Override
    public abstract void delete(int val);
    @Override
    public boolean contains(int val) {
        if(this.head == null) return false;
        return this.head.contains(val);
    }
    @Override
    public INode search(int val) {
        if(this.head == null) return null;
        if(this.head.getValue() == val) return this.head;
        if(this.tail.getValue() == val) return this.tail;
        return this.head.search(val);
    }
}