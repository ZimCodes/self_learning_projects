package linkedlist;
interface ILinkedList {
    void insert(int val);
    boolean contains(int val);
    INode search(int val);
    void delete(int val);
}