import JumpSearch from "./search/jumpSearch";
import QuickSortHoare from "./sort/quickSortHoare";
import QuickSortLomuto from "./sort/quickSortLomuto";
import MergeSort from "./sort/mergeSort";
import Trie from "./tree/Trie/trie";
import SelectionSort from "./sort/selectionSort";
import BubbleSort from "./sort/bubbleSort";
import BinarySearch from "./search/binarySearch";
import ExponentialSearch from "./search/exponentialSearch";
import SingleLinkedList from "./linked/single/SingleLinkedList";
import DoubleLinkedList from "./linked/double/DoubleLinkedList";
import BinarySearchTree from "./tree/BinarySearch/binarySearchTree";
import BreadFirstGraph from "./graph/breadthFirst/breadFirstGraph";
import HeapTree from "./tree/heap/heapTree";
import HeapSort from "./sort/heapSort";
import InsertionSort from "./sort/insertionSort";
import LinearSearch from "./search/linearSearch";
import DepthGraph from "./graph/depthFirst/depthGraph";
import DijkstraGraph from "./graph/dijkstra/dijkstraGraph";

const jumpSearch = new JumpSearch();
const arr = [1,2,5,57,89,346,7609];
console.log(jumpSearch.search(arr,7609));

const hoareSort = new QuickSortHoare();
const hoareArr = [2,18,99,4,13,663,9,4,93,54,96,548,46,4963,51,3];
hoareSort.sort(hoareArr);
console.log(hoareArr);

const mergeSort = new MergeSort();
const mergeArr = [1,596,489,494,16,98,4,6,1,5,934];
console.log(mergeSort.sort(mergeArr));

const tries = new Trie();
tries.insert("cat");
tries.insert("dog");
tries.insert("catastrophe");
console.log(tries.contains("cat"));

const selectSort = new SelectionSort();
const selectArr = [1,94,98,454,9,89,153,1,898,463,46];
selectSort.sort(selectArr);
console.log(selectArr);

const bubbleSort = new BubbleSort();
const bubbleArr = [1,98,4,94,89,7,441,23,1,636,4,8];
bubbleSort.sort(bubbleArr);
console.log(bubbleArr);

const binarySearch = new BinarySearch();
const binaryArr = [1,3,6,8,8,21,34,38,41,65,84,231,463,843,989];
console.log(binarySearch.search(binaryArr,3));

const exponentialSearch = new ExponentialSearch();
console.log(exponentialSearch.search(binaryArr,84));

const singleList = new SingleLinkedList();
singleList.insert(10);
singleList.insert(4);
singleList.insert(165);
singleList.remove(165);
console.log("Single Head: "+singleList.head?.value);
console.log("Single Tail: "+singleList.tail?.value);

const doubleList = new DoubleLinkedList();
doubleList.insert(25);
doubleList.insert(12);
doubleList.insert(78);
doubleList.remove(78);
console.log("Single Head: "+doubleList.head?.value);
console.log("Single Tail: "+doubleList.tail?.value);

const binarySearchTree = new BinarySearchTree();
binarySearchTree.insert(10);
binarySearchTree.insert(532);
binarySearchTree.insert(12);

/*BREADTH-FIRST GRAPH

const breadthGraph = new BreadFirstGraph();
import Node from "./graph/breadthFirst/node";
let a = new Node('a');
let b = new Node('b');
let c = new Node('c');
let d = new Node('d');
let e = new Node('e');
let f = new Node('f');
let g = new Node('g');
let h = new Node('h');

a.addRoute(b);
a.addRoute(c);

b.addRoute(a);
b.addRoute(d);
b.addRoute(e);

c.addRoute(a);
c.addRoute(f);
c.addRoute(g);

d.addRoute(b);

e.addRoute(b);
e.addRoute(h);
e.addRoute(f);

f.addRoute(e);
f.addRoute(c);
f.addRoute(g);

g.addRoute(f);
g.addRoute(c);

h.addRoute(e);
breadthGraph.explore(a);
console.log(breadthGraph.getPath());*/

const quickLomuto = new QuickSortLomuto();
const lomutoArr = [25,16,6,15,16,18,46,98,4163,8,7,54,16,33,213,351];
quickLomuto.sort(lomutoArr);
console.log(lomutoArr);

const heapTree = new HeapTree();
const heapTreeArr = [321,4198,8,41,1,983,44,4,1654,894,4,64,689,6,3,25,21231];
for(const num of heapTreeArr){
    heapTree.insert(num);
}
let msg = "";
let curNum = heapTree.pop();
while(curNum !== undefined){
    msg += curNum + ', ';
    curNum = heapTree.pop();
}
console.log(msg);

const heapSort = new HeapSort();
const heapSortArr = [1,894,9,5,464,39,4984,98,4698,648,468,4,9654,854,6845,964,6984,6];
heapSort.sort(heapSortArr);
console.log(heapSortArr);

const insertSort = new InsertionSort();
const insertArr = [1,489,45,1,44,4,894,56,316,4,4,3,6384,384,4,8643,48,132,43,45,54354,36];
insertSort.sort(insertArr);
console.log(insertArr);

const linearSearch = new LinearSearch();
const linearArr = [87,946,31,384,13,654,5,312,354,635,645,45,43,4,4651,56,8,4556,15,415,415,46,3495,4,435,455];
console.log(linearSearch.search(linearArr,415));

/*Depth-First Graph
import {Node} from "./graph/depthFirst/node";
let a = new Node('a');
let b = new Node('b');
let c = new Node('c');
let d = new Node('d');
let e = new Node('e');
let f = new Node('f');
let g = new Node('g');
let h = new Node('h');

//Establish Routes (Edges)
a.addRoute(b);
a.addRoute(c);

b.addRoute(a);
b.addRoute(d);
b.addRoute(e);

c.addRoute(a);
c.addRoute(f);
c.addRoute(g);

d.addRoute(b);

e.addRoute(b);
e.addRoute(h);
e.addRoute(f);

f.addRoute(e);
f.addRoute(c);
f.addRoute(g);

g.addRoute(f);
g.addRoute(c);

h.addRoute(e);

const depthGraph = new DepthGraph();
depthGraph.explore(a);
console.log(depthGraph.getPath());*/

/*Dijkstra Graph Search*/
import {Node} from "./graph/dijkstra/node";

let a = new Node('a');
let b = new Node('b');
let c = new Node('c');
let d = new Node('d');
let e = new Node('e');

a.addRoute(d, 1.0);
a.addRoute(b, 3.0);

b.addRoute(a, 3.0);
b.addRoute(d, 4.0);
b.addRoute(e, 5.0);
b.addRoute(c, 5.0);

c.addRoute(b, 5.0);
c.addRoute(e, 9.0);

d.addRoute(e, 1.0);
d.addRoute(b, 4.0);
d.addRoute(a, 1.0);

e.addRoute(c, 9.0);
e.addRoute(b, 5.0);
e.addRoute(d, 1.0);
const dijkstraGraph = new DijkstraGraph();
dijkstraGraph.explore(a);
console.log(dijkstraGraph.getPath(d,c));