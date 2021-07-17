from ._interface.search import Search


class BinarySearch(Search):
    @staticmethod
    def search(array: list[int], target: int, **kwargs) -> int:
        """
        Search for the target number inside the array
        :param array: The sorted array
        :param target: The target number
        :return: The index of the target number inside the array
        """
        low, high = 0, len(array) - 1
        if 'low' in kwargs:
            low = kwargs['low']
        if 'high' in kwargs:
            high = kwargs['high']

        return BinarySearch.__searching(array, target, low, high)

    @staticmethod
    def __searching(array: list[int], target: int, low: int, high: int) -> int:
        """
        Recursively search the sorted array for the target number by splitting the array
        :param array: The sorted array
        :param target: The number to look for
        :param low: lowest index to look through
        :param high: highest index to look through
        :return: The index of the target number inside the array
        """
        if low > high:
            return -1
        middle: int = low + (high - low) // 2
        if array[middle] == target:
            return middle
        if array[middle] > target:
            return BinarySearch.__searching(array, target, low, middle - 1)
        return BinarySearch.__searching(array, target, middle + 1, high)


class JumpSearch(Search):
    @staticmethod
    def search(array: list[int or float], target: int, *, steps=4) -> int:
        return JumpSearch.__searching(array, target, steps, steps)

    @staticmethod
    def __searching(array: list[int or float], target: int, steps: int, max_limit: int) -> int:
        min_limit: int = max_limit - steps
        if min_limit >= len(array):
            return -1
        if max_limit >= len(array):
            max_limit = len(array)

        if array[min_limit] <= target <= array[max_limit - 1]:
            for i in range(min_limit, max_limit):
                if array[i] == target:
                    return i
        return JumpSearch.__searching(array, target, steps, max_limit + steps)


class ExponentialSearch(Search):
    @staticmethod
    def search(array: list[int or float], target: int, **kwargs) -> int:
        index: int = 1
        while index < len(array) and array[index] < target:
            index *= 2
        if index >= len(array):
            index = len(array) - 1
        return BinarySearch.search(array, target, low=index // 2, high=index)


class LinearSearch(Search):
    @staticmethod
    def search(array: list[int or float], target: int, **kwargs) -> int:
        for i in range(len(array)):
            if array[i] == target:
                return i
        return -1
