package example;

import linkedlist.DoubleLinkedList;

public class DoubleLinkEx implements IExample,Runnable{
    @Override
    public void run() {
        IExample.readTitle("Double Linked List");
        DoubleLinkedList doubleLinkedList = new DoubleLinkedList();
        doubleLinkedList.insert(10);
        doubleLinkedList.insert(19);
        doubleLinkedList.insert(3);
        doubleLinkedList.insert(1);
        doubleLinkedList.insert(5);
        doubleLinkedList.insert(2);
        int numToSearch = 2;
        System.out.format("Contains #%d: %b%n", numToSearch,doubleLinkedList.contains(numToSearch));
        doubleLinkedList.delete(2);
        System.out.format("Contains #%d: %b%n", numToSearch,doubleLinkedList.contains(numToSearch));
    }
}