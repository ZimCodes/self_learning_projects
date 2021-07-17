import pytest
from operator import attrgetter
from algorithm.graph import *


class TestGraph:
    def test_depth_first(self, nodes_a: dict) -> None:
        """
        Test for Depth-First Search algorithm functionality
        :param nodes_a: pytest fixture; a prepared graph
        :return: None
        """
        graph = DepthFirstGraph()
        graph.explore(nodes_a['a'])

        actual_graph: list = sorted_list(graph.get_path())
        expected_graph: list = sorted_list(list(nodes_a.values()))
        assert actual_graph == expected_graph

    def test_breadth_first(self, nodes_a) -> None:
        """
        Breadth-First Graph test
        :param nodes_a: pytest fixture; a prepared graph
        :return: None
        """
        graph = BreadthFirstGraph()
        graph.explore(nodes_a['a'])

        actual_graph: list = sorted_list(graph.get_path())
        expected_graph: list = sorted_list(list(nodes_a.values()))
        assert actual_graph == expected_graph

    def test_dijkstra(self, nodes_b: dict) -> None:
        """Test dijkstra graph"""
        graph = DijkstraGraph()
        graph.explore(nodes_b['a'])

        actual_graph: list = graph.get_path(nodes_b['d'], nodes_b['c'])
        expected_graph: list = ['d', 'a', 'b', 'c']
        assert actual_graph == expected_graph


def sorted_list(nodes_list: list) -> list:
    """
    Sorts nodes in graph based on `node.value` attribute
    :param nodes_list: unsorted array of nodes
    :return: sorted array of nodes
    """
    return sorted(nodes_list, key=attrgetter('value'))


@pytest.fixture
def nodes_a() -> dict:
    nodes: dict = {chr(x): Graph.create_node(chr(x)) for x in range(97, 105)}

    assign_route(nodes, 'a', 'b')
    assign_route(nodes, 'a', 'c')

    assign_route(nodes, 'b', 'a')
    assign_route(nodes, 'b', 'd')
    assign_route(nodes, 'b', 'e')

    assign_route(nodes, 'c', 'a')
    assign_route(nodes, 'c', 'f')
    assign_route(nodes, 'c', 'g')

    assign_route(nodes, 'd', 'b')

    assign_route(nodes, 'e', 'b')
    assign_route(nodes, 'e', 'h')
    assign_route(nodes, 'e', 'f')

    assign_route(nodes, 'f', 'e')
    assign_route(nodes, 'f', 'c')
    assign_route(nodes, 'f', 'g')

    assign_route(nodes, 'g', 'f')
    assign_route(nodes, 'g', 'c')

    assign_route(nodes, 'h', 'e')
    return nodes


@pytest.fixture
def nodes_b() -> dict:
    nodes: dict = {chr(x): Graph.create_node(chr(x)) for x in range(97, 102)}
    assign_route(nodes, 'a', 'd', 1)
    assign_route(nodes, 'a', 'b', 3)

    assign_route(nodes, 'b', 'a', 3)
    assign_route(nodes, 'b', 'd', 4)
    assign_route(nodes, 'b', 'e', 5)
    assign_route(nodes, 'b', 'c', 5)

    assign_route(nodes, 'c', 'b', 5)
    assign_route(nodes, 'c', 'e', 9)

    assign_route(nodes, 'd', 'e', 1)
    assign_route(nodes, 'd', 'b', 4)
    assign_route(nodes, 'd', 'a', 1)

    assign_route(nodes, 'e', 'c', 9)
    assign_route(nodes, 'e', 'b', 5)
    assign_route(nodes, 'e', 'd', 1)
    return nodes


def assign_route(nodes: dict, node: str, neighbor: str, cost: float = 0) -> None:
    """
    Assigns a neighbor (route) to a node
    :param cost: The cost to get to destination
    :param nodes: collection of nodes on the graph
    :param node: The node
    :param neighbor: The new neighbor of the node
    :return: None
    """
    nodes[node].add_route(nodes[neighbor], cost)
