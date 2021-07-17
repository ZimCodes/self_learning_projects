import abc


class Sort(metaclass=abc.ABCMeta):
    @staticmethod
    @abc.abstractmethod
    def sort(array: list[int or float]) -> list[int or float] or None:
        """
        Sort the array of numbers
        :param array: unsorted array of numbers
        :return: sorted array of numbers or nothing
        """
        pass


class QuickSort(Sort):
    @staticmethod
    def sort(array: list[int or float]) -> list[int or float] or None:
        pass

    @staticmethod
    def _divide(array: list[int or float], low: int, high: int) -> None:
        """
        Sort a certain part of the array
        :param array: unsorted array of numbers
        :param low: Lowest index to sort the array of numbers
        :param high: Highest index to sort the array o
        :return: None
        """
        pass

    @staticmethod
    def _partition(array: list[int or float], low: int, high: int) -> int:
        """
        Using a selected part of the array, sort it
        :param array: Unsorted array of numbers
        :param low: lower limit of array to sort
        :param high: highest limit of array to sort
        :return: Pivot index
        """
        pass
