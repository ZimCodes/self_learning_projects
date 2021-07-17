from ._interface.linkedlist import *


class DoubleNode(Node):
    def __init__(self, value, parent=None, child=None):
        super().__init__(value, child)
        self.parent = parent

    def delete(self, value) -> None:
        if self.child is None:
            return
        if self.child.value == value:
            grand_node = self.child.child
            # My grand child's parent is now me
            if grand_node is not None:
                grand_node.parent = self
            # My Grand child is now my child
            self.child = grand_node
            return
        self.child.delete(value)


class DoubleLinkedList(LinkedList):
    def insert(self, value) -> None:
        if self.head is None:
            new_node = DoubleNode(value)
            self.head = new_node
            self.tail = new_node
        else:
            new_node = DoubleNode(value, self.tail)
            self.tail.child = new_node
            self.tail = new_node

    def delete(self, value) -> None:
        super().delete(value)
        if value == self.head.value:
            child_node = self.head.child
            if self.tail == self.head:
                self.tail = child_node
            self.head = child_node
        elif value == self.tail.value:
            parent_node = self.tail.parent
            parent_node.child = None
            self.tail = parent_node
        else:
            self.head.delete(value)


class SingleNode(Node):
    def delete(self, value, tail):
        if self.child is None:
            return tail
        if self.child.value == value:
            grand_child = self.child.child
            self.child = grand_child
            if grand_child is None:
                return self
            return tail
        else:
            return self.child.delete(value, tail)


class SingleLinkedList(LinkedList):
    def insert(self, value) -> None:
        if self.head is None:
            self.head = SingleNode(value)
            self.tail = self.head
        else:
            new_node = SingleNode(value)
            self.tail.child = new_node
            self.tail = new_node

    def delete(self, value) -> None:
        super().delete(value)
        if self.head.value == value:
            self.head = self.head.child
        else:
            self.tail = self.head.delete(value, self.tail)

