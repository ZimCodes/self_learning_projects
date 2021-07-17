import abc


class Tree(metaclass=abc.ABCMeta):
    @abc.abstractmethod
    def insert(self, value) -> None:
        """
        Inserts the value into the tree
        :param value: The value to add to the tree
        :return: None
        """
        pass

    @abc.abstractmethod
    def exists(self, value) -> bool:
        """
        Check if tree contains value
        :param value: value to look for
        :return: Does value exist in tree?
        """
        pass


class Node(metaclass=abc.ABCMeta):
    def __init__(self, value):
        self.value = value

    @abc.abstractmethod
    def insert(self, value) -> None:
        pass

