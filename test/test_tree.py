import random

from algorithm.tree import *
import pytest


class TestTree:
    def test_tries_exists(self, word_list: list[str]) -> None:
        """
        Test for Checking if word DOES exists in Trie tree
        :return: None
        """
        tree = Tries()
        insert_list(tree, word_list)
        assert tree.exists("forest") is True

    def test_tries_partial_exists(self, word_list: list[str]) -> None:
        """
        Test for Checking if partial words DOES exists in Trie tree
        :return: None
        """
        tree = Tries()
        insert_list(tree, word_list)
        assert tree.exists("tombs") is True

    def test_tries_not_exists(self, word_list: list[str]) -> None:
        """
        Test for Checking if word DOES NOT exist in Trie tree
        :return: None
        """
        tree = Tries()
        insert_list(tree, word_list)
        assert tree.exists("checker") is False

    def test_binary_exists(self, number_list: list[int], num_target: int) -> None:
        """Test if data exists in the binary search tree"""
        tree = BinarySearchTree()
        insert_list(tree, number_list)
        assert tree.exists(num_target) is True

    def test_binary_search(self, number_list: list[int], num_target: int) -> None:
        """Test if binary search tree can locate the node containing the specified data"""
        tree = BinarySearchTree()
        insert_list(tree, number_list)
        node = tree.search(num_target)
        assert node.value == num_target

    def test_binary_delete(self, number_list: list[int], num_target: int) -> None:
        """Tests if binary search tree successfully deletes a node"""
        tree = BinarySearchTree()
        insert_list(tree, number_list)
        tree.delete(num_target)
        assert tree.exists(num_target) is False

    def test_binary_root_delete(self, number_list: list[int]) -> None:
        """Tests if binary tree deletes the root"""
        tree = BinarySearchTree()
        insert_list(tree, number_list)
        num = number_list[0]
        tree.delete(num)
        assert tree.exists(num) is False

    def test_heap_tree(self, number_list: list[int]) -> None:
        tree = HeapTree()
        insert_list(tree, number_list)
        heap_list = []
        for _ in range(tree.count()):
            heap_list.append(tree.pop())
        assert heap_list == sorted(number_list, reverse=True)



@pytest.fixture
def word_list() -> list[str]:
    return ["gamble", "tomato", "forest", "cheddar", "forsworn", "tombstone"]


@pytest.fixture
def number_list() -> list[int or float]:
    return [-481, 13, 808, -558, -7, -375, -496, 926, -825, 385]


@pytest.fixture
def num_target(number_list: list[int]) -> int:
    return number_list[random.randint(0, len(number_list) - 1)]


def insert_list(tree, array: list):
    """Insert the array of data into tree"""
    for x in array:
        tree.insert(x)


def tree_check(tree, data_list) -> bool:
    """Checks if tree contains all content"""
    for data in data_list:
        if not tree.exists(data):
            return False
    return True
