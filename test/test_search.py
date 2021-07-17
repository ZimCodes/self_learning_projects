import random

import pytest
from algorithm.search import *


class TestSearch:
    def test_binary_search(self, array: list[int or float]):
        """Binary Search algorithm test"""
        assert BinarySearch.search(array, 281) == 6

    def test_binary_search_end(self, array: list[int or float]):
        """Test if number can be found near end of array"""
        assert BinarySearch.search(array, 810) == 9

    def test_binary_search_not_found(self, array: list[int or float]):
        """Test if number does not exist in array"""
        assert BinarySearch.search(array, 541) == -1

    def test_jump_search(self, array: list[int or float]):
        """Regular Jump Search algorithm test"""
        assert JumpSearch.search(array, -79) == 4

    def test_jump_search_end(self, array: list[int or float]):
        """Test if jump search can find number near the end of array"""
        assert JumpSearch.search(array, 810) == 9

    def test_jump_search_not_found(self, array: list[int or float]) -> None:
        """Test if number does not exist in array"""
        assert JumpSearch.search(array, 211) == -1

    def test_exponential_search(self, array: list[int or float], target: tuple[int, int]) -> None:
        """Test if exponential search works"""
        assert ExponentialSearch.search(array, target[0]) == target[1]

    def test_linear_search(self, array: list[int or float], target: tuple[int, int]):
        """Test Linear search"""
        assert LinearSearch.search(array, target[0]) == target[1]


@pytest.fixture
def array():
    """sorted array"""
    return [-743, -726, -687, -672, -79, 147, 281, 555, 796, 810]


@pytest.fixture
def target(array: list[int]) -> tuple[int, int]:
    index = random.randint(0, len(array) - 1)
    return array[index], index
