import abc


class LinkedList(metaclass=abc.ABCMeta):
    def __init__(self):
        self.head = self.tail = None

    @abc.abstractmethod
    def insert(self, value) -> None:
        """
        Add data into the Linked list
        :param value: data to add to linked list
        :return: None
        """
        pass

    def exists(self, value) -> bool:
        """
        Checks if data exists in linked list
        :param value: data to search for
        :return: Boolean
        """
        if self.head is None:
            return False
        if self.tail.value == value:
            return True
        return self.head.exists(value)

    def delete(self, value) -> None:
        """
        Removes data from the linked list
        :param value: data to delete
        :return: None
        """
        if self.head is None:
            return

    def get_node(self, value):
        """
        Gets the node which harbors the data
        :param value: the data to retrieve
        :return: Node
        """
        if self.head is None:
            return
        return self.head.search(value)


class Node:
    def __init__(self, value, child=None):
        self.value = value
        self.child = child

    def insert(self, value):
        """
        Create a new node in the linked list
        :param value: data to add to list
        :return: None
        """
        pass

    def exists(self, value) -> bool:
        """
        Checks if this node is the data
        :param value: the data to search for
        :return: Boolean
        """
        if self.value == value:
            return True
        if self.child is not None:
            return self.child.exists(value)
        return False

    def search(self, value):
        """
        Search for node that harbors this data
        :param value: The data to search for
        :return: Node
        """
        if self.value == value:
            return self
        if self.child is not None:
            return self.child.search(value)
        return None
