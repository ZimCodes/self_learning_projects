from algorithm.sort import *
import pytest


class TestSort:
    def test_heap_sort(self, array: list[int], actual: list[int]) -> None:
        """
        Test Heap Sort algorithm
        :param array: pytest fixture. unsorted array of numbers
        :return: None
        """
        HeapSort.sort(array)
        assert array == actual

    def test_selection_sort(self, array: list[int], actual: list[int]) -> None:
        """
        Test Selection Sort algorithm
        :param array: pytest fixture. unsorted array of numbers
        :return: None
        """
        SelectionSort.sort(array)
        assert array == actual

    def test_hoare_sort(self, array: list[int], actual: list[int]) -> None:
        """
        Test Hoare Partition Sort
        :param array: pytest fixture. unsorted array of numbers
        :return: None
        """
        HoareSort.sort(array)
        assert array == actual

    def test_lomuto_sort(self, array: list[int], actual: list[int]) -> None:
        """
        Test Hoare Partition Sort
        :param array: pytest fixture. unsorted array of numbers
        :return: None
        """
        LomutoSort.sort(array)
        assert array == actual

    def test_insertion_sort(self, array: list[int], actual: list[int]) -> None:
        """
        Test Insertion Sort
        :param array: pytest fixture. unsorted array of numbers
        :return: None
        """
        InsertionSort.sort(array)
        assert array == actual

    def test_merge_sort(self, array: list[int], actual: list[int]) -> None:
        """Test Merge Sort"""
        assert MergeSort.sort(array) == actual

    def test_bubble_sort(self, array: list, actual: list[int]) -> None:
        """Test Bubble Sort"""
        BubbleSort.sort(array)
        assert array == actual


@pytest.fixture
def array() -> list[int]:
    """List of unsorted numbers"""
    return [301, 872, 115, -491, -511, 406, 900, 161, 246, -404, 323]


@pytest.fixture
def actual() -> list[int]:
    """
    The actual array to be returned
    :return: The actual array answer
    """
    return [-511, -491, -404, 115, 161, 246, 301, 323, 406, 872, 900]
