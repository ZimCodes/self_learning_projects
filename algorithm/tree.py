from ._interface.tree import *


class Tries(Tree):
    def __init__(self):
        self.root = None

    def insert(self, word: str) -> None:
        if self.root is None:
            self.root = TrieNode(word)
            return
        self.root.insert(word, 0)

    def exists(self, word) -> bool:
        if self.root is None:
            return False
        return self.root.exists(word, 0)


class TrieNode(Node):
    def __init__(self, letter: str):
        super().__init__(letter[0])
        self.letters: dict = {}

    def insert(self, word: str, index: int) -> None:
        """
        Add a character from the word as a child node
        :param word: The word to add to the tree
        :param index: Location of the character to add to the tree
        :return: None
        """
        if index >= len(word):
            self.letters['*'] = None
            return
        letter: str = word[index]
        if letter not in self.letters:
            new_letter_node = TrieNode(letter)
            self.letters[letter] = new_letter_node

        index += 1
        self.letters[letter].insert(word, index)

    def exists(self, word: str, index: int) -> bool:
        """
        Check if a character exists in the word
        :param word: The word to look for
        :param index: Location of the character to check
        :return: bool
        """
        if index >= len(word):
            return True
        letter = word[index]
        if letter in self.letters:
            index += 1
            return self.letters[letter].exists(word, index)
        return False


class BinarySearchTree(Tree):
    def __init__(self):
        self.root = None

    def insert(self, value: int or float) -> None:
        if self.root is None:
            self.root = BinaryNode(value)
        else:
            self.root.insert(value)

    def exists(self, value: int or float) -> bool:
        if self.root is None:
            return False
        return self.root.exists(value)

    def search(self, value: int or float):
        """
        Retrieve the node that contains the specified data
        :param value: data to retrieve
        :return: BinaryNode
        """
        if self.root is None:
            return None
        return self.root.search(value)

    def delete(self, value: int or float) -> None:
        """
        Remove a node from the Binary Search Tree
        :param value: data to remove from tree
        :return: None
        """
        if self.root is None:
            return
        node_to_delete = self.root.search(value)
        if node_to_delete is None:
            return
        replace_node = None
        if node_to_delete.left:
            replace_node = node_to_delete.left.maximum(node_to_delete.left.value)
        elif node_to_delete.right:
            replace_node = node_to_delete.right.minimum(node_to_delete.right.value)
        else:
            if node_to_delete.parent:
                if node_to_delete.is_left():
                    node_to_delete.parent.left = None
                else:
                    node_to_delete.parent.right = None
            del node_to_delete
            return
        if replace_node.is_left():
            replace_node.parent.left = None
        else:
            replace_node.parent.right = None

        replace_node.parent = node_to_delete.parent
        replace_node.left = node_to_delete.left
        replace_node.right = node_to_delete.right

        if node_to_delete.parent:
            if node_to_delete.is_left():
                node_to_delete.parent.left = replace_node
            else:
                node_to_delete.parent.right = replace_node
        else:
            self.root = replace_node
        if node_to_delete.right:
            node_to_delete.right.parent = replace_node
        if node_to_delete.left:
            node_to_delete.left.parent = replace_node
        del node_to_delete

    def preorder(self) -> None:
        """Print preorder tree traversal"""
        result: list[int or float] = []
        if self.root:
            self.root.preorder_display(result)
        print(', '.join(result))

    def inorder(self) -> None:
        """Print inorder tree traversal"""
        result: list[int or float] = []
        if self.root:
            self.root.inorder_display(result)
        print(', '.join(result))

    def postorder(self) -> None:
        """Print postorder tree traversal"""
        result: list[int or float] = []
        if self.root:
            self.root.postorder_display(result)
        print(', '.join(result))


class BinaryNode(Node):
    def __init__(self, value: int or float, parent=None):
        super().__init__(value)
        self.left = self.right = None
        self.parent = parent

    def is_leaf(self) -> bool:
        """
        Check if node is a leaf (does not have a right and left child node)
        :return: Boolean
        """
        return self.left is None and self.right is None

    def is_left(self) -> bool:
        """
        Is the Node left or right child of parent
        :return: Boolean
        """
        if not self.parent:
            return False
        return self.parent.left == self

    def insert(self, value: int or float):
        """Inserts the data into the Binary Tree"""
        if value < self.value:
            if self.left:
                self.left.insert(value)
            else:
                self.left = BinaryNode(value, self)
        else:
            if self.right:
                self.right.insert(value)
            else:
                self.right = BinaryNode(value, self)

    def exists(self, value: int or float) -> bool:
        """Checks if node exists"""
        if self.value == value:
            return True
        if value < self.value:
            if self.left:
                return self.left.exists(value)
        else:
            if self.right:
                return self.right.exists(value)
        return False

    def search(self, value):
        """Gets the node with data being looked for"""
        if self.value == value:
            return self
        if value < self.value:
            if self.left:
                return self.left.search(value)
        else:
            if self.right:
                return self.right.search(value)
        return None

    def maximum(self, value):
        """Find the largest node in a sub tree"""
        if self.is_leaf():
            return self
        if self.right:
            return self.right.maximum(self.right.value)
        elif value < self.left.value:
            return self.left.maximum(self.left.value)
        return self

    def minimum(self, value):
        """Find the smallest node in the search tree"""
        if self.is_leaf():
            return self
        if self.left:
            return self.left.minimum(self.left.value)
        else:
            if value > self.right.value:
                return self.right.minimum(self.right.value)
        return None

    def preorder_display(self, result: list[int or float]) -> None:
        """Preorder tree traversal"""
        result.append(self.value)
        if self.left:
            self.left.preorder_display(result)
        if self.right:
            self.right.preorder_display(result)

    def inorder_display(self, result: list[int or float]) -> None:
        """Inorder tree traversal"""
        if self.left:
            self.left.preorder_display(result)
        result.append(self.value)
        if self.right:
            self.right.preorder_display(result)

    def postorder_display(self, result: list[int or float]) -> None:
        """Post order tree traversal"""
        if self.left:
            self.postorder_display(result)
        if self.right:
            self.postorder_display(result)
        result.append(self.value)


class HeapTree(Tree):
    def __init__(self):
        self.__nodes: list[int or float] = []

    @staticmethod
    def __parent(index: int) -> int:
        return (index - 1) // 2

    @staticmethod
    def __left(index: int) -> int:
        return 2 * index + 1

    @staticmethod
    def __right(index: int) -> int:
        return 2 * index + 2

    def __has_left(self, index: int) -> bool:
        return HeapTree.__left(index) < len(self.__nodes)

    def __has_right(self, index: int) -> bool:
        return HeapTree.__right(index) < len(self.__nodes)

    def __is_leaf(self, index: int) -> bool:
        return not self.__has_left(index) and not self.__has_right(index)

    @staticmethod
    def __is_root(index: int):
        return HeapTree.__parent(index) == -1

    @staticmethod
    def __is_left(index: int) -> bool:
        if HeapTree.__is_root(index):
            return False
        return HeapTree.__left(HeapTree.__parent(index)) == index

    def insert(self, value: float or int) -> None:
        self.__nodes.append(value)
        if len(self.__nodes) == 1:
            return
        self.__shift_up(len(self.__nodes) - 1)

    def pop(self) -> int or float:
        if len(self.__nodes) == 0:
            return
        if len(self.__nodes) == 1:
            return self.__nodes.pop(0)
        self.__nodes[0], self.__nodes[len(self.__nodes) - 1] = self.__nodes[len(self.__nodes) - 1], self.__nodes[0]
        node_to_pop = self.__nodes.pop(len(self.__nodes) - 1)
        self.__shift_down(0)
        return node_to_pop

    def exists(self, value) -> bool:
        return value in self.__nodes

    def count(self) -> int:
        return len(self.__nodes)

    def __shift_down(self, index: int) -> None:
        if self.__is_leaf(index):
            return
        largest = index
        compare_index = HeapTree.__left(index)
        if compare_index < len(self.__nodes) and self.__nodes[compare_index] > self.__nodes[largest]:
            largest = compare_index

        compare_index = HeapTree.__right(index)
        if compare_index < len(self.__nodes) and self.__nodes[compare_index] > self.__nodes[largest]:
            largest = compare_index
        if largest != index:
            self.__nodes[largest], self.__nodes[index] = self.__nodes[index], self.__nodes[largest]
            self.__shift_down(largest)


    def __shift_up(self, index: int) -> None:
        if HeapTree.__is_root(index):
            return
        parent_index = HeapTree.__parent(index)
        parent_value = self.__nodes[parent_index]
        if self.__nodes[index] > parent_value:
            self.__nodes[parent_index], self.__nodes[index] = self.__nodes[index], self.__nodes[parent_index]
            self.__shift_up(parent_index)
