import abc


class Graph(metaclass=abc.ABCMeta):
    def __init__(self):
        self._visited: list = []

    def explore(self, node) -> None:
        self._reinitialize()
        self._exploring(node)

    @abc.abstractmethod
    def _exploring(self, node) -> None:
        pass

    def _reinitialize(self):
        self._visited = []

    @staticmethod
    def create_node(value):
        return Node(value)


class Edge:
    def __init__(self, node, cost: float = 0):
        self.to = node
        self.cost: float = cost


class Node:
    def __init__(self, value):
        self.__value = value
        self.neighbors = []

    @property
    def value(self):
        return self.__value

    def add_route(self, node, cost: float = 0) -> None:
        neighbor = Edge(node, cost)
        self.neighbors.append(neighbor)
