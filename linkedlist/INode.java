package linkedlist;
interface INode{
    boolean contains(int val);
    INode search(int val);
    int getValue();
    INode getChild();
    void setChild(INode child);
}