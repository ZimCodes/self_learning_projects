import random

from algorithm.linkedlist import DoubleLinkedList, SingleLinkedList
import pytest


class TestList:
    def test_double_list_search(self, numbers: list[int], target: int) -> None:
        """Test if node exists in double linked list"""
        linked_list = DoubleLinkedList()
        setup_list(linked_list, numbers)
        search_number = 3
        node = linked_list.get_node(search_number)
        assert node.value == search_number

    def test_double_list_exists(self, numbers: list[int], target: int) -> None:
        """Test if data exists in double linked list"""
        linked_list = DoubleLinkedList()
        setup_list(linked_list, numbers)

        assert linked_list.exists(target) is True

    def test_double_list_remove(self, numbers: list[int], target: int) -> None:
        """Test removal of node in double linked list"""
        linked_list = DoubleLinkedList()
        setup_list(linked_list, numbers)
        linked_list.delete(target)
        assert linked_list.exists(target) is False

    def test_single_list_tail_remove(self, numbers: list[int], tail_number: int) -> None:
        """Test the removal of the tail"""
        linked_list = SingleLinkedList()
        setup_list(linked_list, numbers)
        linked_list.delete(tail_number)
        assert linked_list.exists(tail_number) is False

    def test_single_list_remove(self, numbers: list[int], target: int) -> None:
        """Test removal of node"""
        linked_list = SingleLinkedList()
        setup_list(linked_list, numbers)
        linked_list.delete(target)
        assert linked_list.exists(target) is False


@pytest.fixture
def numbers() -> list[int]:
    return [10, 19, 3, 1, 5, 2]


@pytest.fixture
def target(numbers) -> int:
    return numbers[random.randint(0, len(numbers) - 1)]


@pytest.fixture
def tail_number(numbers) -> int:
    return numbers[len(numbers) - 1]


def setup_list(llist, array) -> None:
    for x in array:
        llist.insert(x)
