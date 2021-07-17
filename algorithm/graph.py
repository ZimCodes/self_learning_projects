from ._interface.graph import Graph, Edge
from operator import attrgetter


class DepthFirstGraph(Graph):
    def __init__(self):
        super().__init__()

    def _exploring(self, node) -> None:
        for neighbor in node.neighbors:
            if neighbor.to not in self._visited:
                self._visited.append(neighbor.to)
                self._exploring(neighbor.to)

    def get_path(self) -> list:
        return self._visited


class BreadthFirstGraph(Graph):
    def __init__(self):
        super().__init__()
        self.queue = []

    def _exploring(self, node) -> None:
        self.queue = [node]
        while len(self.queue) != 0:
            cur_node = self.queue.pop(0)
            if cur_node not in self._visited:
                self._visited.append(cur_node)
                for neighbor in cur_node.neighbors:
                    self.queue.append(neighbor.to)

    def get_path(self):
        return self._visited


class DijkstraGraph(Graph):
    def __init__(self):
        super().__init__()
        self.__came_from: dict = {}
        self.__cost_so_far: dict = {}
        self.__queue = []

    def _exploring(self, node) -> None:
        self.__queue.append(Edge(node))
        self.__came_from[node] = None
        self.__cost_so_far[node] = 0
        while len(self.__queue) != 0:
            self.__queue = sorted(self.__queue, key=attrgetter('cost'), reverse=True)
            current_edge = self.__queue.pop(0)
            for neighbor in current_edge.to.neighbors:
                new_cost = self.__cost_so_far[neighbor.to] if neighbor.to in self.__cost_so_far else 0  + neighbor.cost
                if neighbor.to not in self.__cost_so_far or new_cost < self.__cost_so_far[neighbor.to]:
                    self.__cost_so_far[neighbor.to] = new_cost
                    self.__queue.append(neighbor)
                    self.__came_from[neighbor.to] = current_edge.to

    def _reinitialize(self):
        super()._reinitialize()
        self.__came_from = {}
        self.__cost_so_far = {}

    def get_path(self, start, target) -> list:
        self._visited = []
        current_node = target
        while current_node and current_node != start:
            self._visited.append(current_node.value)
            current_node = self.__came_from[current_node]
        self._visited.append(start.value)
        return list(reversed(self._visited))

