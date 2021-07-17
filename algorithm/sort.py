from ._interface.sort import *


class HeapSort(Sort):
    @staticmethod
    def sort(array: list[int or float]) -> None or list[int or float]:
        HeapSort.__sorting(array, len(array))

    @staticmethod
    def __sorting(array: list[int or float], size: int) -> None:
        """
        Begin sorting the array of numbers
        :param array:
        :param size:
        :return:
        """
        for i in range(size // 2 - 1, -1, -1):
            HeapSort.__heapify(array, size, i)

        for i in range(size - 1, 0, -1):
            array[0], array[i] = array[i], array[0]
            HeapSort.__heapify(array, i, 0)

    @staticmethod
    def __heapify(array: list[int or float], size: int, index: int) -> None:
        """
        Place the largest node as the root of this sub tree
        :param array: unsorted list of numbers
        :param size: amount of nodes in the sub tree
        :param index: root node index
        :return: None
        """
        largest_index: int = index
        # Left Node Index
        compare_index = 2 * index + 1
        if compare_index < size and array[largest_index] < array[compare_index]:
            largest_index = compare_index
        # Right Node Index
        compare_index = 2 * index + 2
        if compare_index < size and array[largest_index] < array[compare_index]:
            largest_index = compare_index

        if largest_index != index:
            array[largest_index], array[index] = array[index], array[largest_index]
            HeapSort.__heapify(array, size, largest_index)


class SelectionSort(Sort):
    @staticmethod
    def sort(array: list[int or float]) -> list[int or float] or None:
        for i in range(len(array) - 1):
            smallest_index = i
            for j in range(i + 1, len(array)):
                if array[smallest_index] > array[j]:
                    smallest_index = j
            array[smallest_index], array[i] = array[i], array[smallest_index]


class HoareSort(QuickSort):
    @staticmethod
    def sort(array: list[int or float]) -> list[int or float] or None:
        HoareSort._divide(array, 0, len(array) - 1)

    @staticmethod
    def _divide(array: list[int or float], low: int, high: int) -> None:
        if low >= high:
            return
        pivot_index: int = HoareSort._partition(array, low, high)
        HoareSort._divide(array, low, pivot_index)
        HoareSort._divide(array, pivot_index + 1, high)

    @staticmethod
    def _partition(array: list[int or float], low: int, high: int) -> int:
        pivot: int = array[low]
        low_check_index: int = low - 1
        high_check_index: int = high + 1
        while low_check_index < high_check_index:
            while True:
                low_check_index += 1
                if array[low_check_index] >= pivot:
                    break

            while True:
                high_check_index -= 1
                if array[high_check_index] <= pivot:
                    break

            if low_check_index < high_check_index:
                array[low_check_index], array[high_check_index] = array[high_check_index], array[low_check_index]

        return high_check_index


class LomutoSort(QuickSort):
    @staticmethod
    def sort(array: list[int or float]) -> list[int or float] or None:
        LomutoSort._divide(array, 0, len(array) - 1)

    @staticmethod
    def _divide(array: list[int or float], low: int, high: int) -> None:
        if low >= high:
            return
        pivot_index: int = LomutoSort._partition(array, low, high)
        LomutoSort._divide(array, low, pivot_index - 1)
        LomutoSort._divide(array, pivot_index + 1, high)

    @staticmethod
    def _partition(array: list[int or float], low: int, high: int) -> int:
        pivot: int = array[high]
        low_partition: int = low
        for i in range(low, high):
            if array[i] < pivot:
                array[i], array[low_partition] = array[low_partition], array[i]
                low_partition += 1
        array[low_partition], array[high] = pivot, array[low_partition]
        return low_partition


class InsertionSort(Sort):
    @staticmethod
    def sort(array: list[int or float]) -> list[int or float] or None:
        for i in range(1, len(array)):
            compare_num: int = array[i]
            j: int = i - 1
            while j > -1 and array[j] > compare_num:
                array[j + 1] = array[j]
                j -= 1
            array[j + 1] = compare_num


class MergeSort(Sort):
    @staticmethod
    def sort(array: list[int or float]) -> list[int or float] or None:
        return MergeSort.__divide(array)

    @staticmethod
    def __divide(array: list[int or float]) -> list[int or float]:
        if len(array) <= 1:
            return array
        left_size: int = len(array) // 2
        left_array: list[int or float] = MergeSort.__divide(array[0:left_size])
        right_size: int = len(array) - left_size
        right_array: list[int or float] = MergeSort.__divide(array[left_size:len(array)])
        return MergeSort.__merge(left_array, left_size, right_array, right_size)

    @staticmethod
    def __merge(left_array: list[int or float], left_size: int, right_array: list[int or float], right_size: int) -> \
            list[int or float]:
        new_array = []
        left_index: int = 0
        right_index: int = 0
        while left_index < left_size and right_index < right_size:
            left_value = left_array[left_index]
            right_value = right_array[right_index]
            if left_value < right_value:
                new_array.append(left_value)
                left_index += 1
            elif left_value > right_value:
                new_array.append(right_value)
                right_index += 1
            else:
                new_array.append(left_value)
                left_index += 1

                new_array.append(right_value)
                right_index += 1
        for num in left_array[left_index:]:
            new_array.append(num)
        for num in right_array[right_index:]:
            new_array.append(num)
        return new_array


class BubbleSort(Sort):
    @staticmethod
    def sort(array: list[int or float]) -> list[int or float] or None:
        for _ in range(len(array) - 1):
            for j in range(1, len(array)):
                if array[j - 1] > array[j]:
                    array[j - 1], array[j] = array[j], array[j - 1]