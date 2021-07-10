package tree;
import java.util.ArrayList;
import java.util.Collections;
import java.util.List;
public class HeapTree implements ITree<Integer>{
    private final List<Integer> nodes;
    public HeapTree(){
        nodes = new ArrayList<>();
    }
    private int parent(int i){
        if(i <= 0) return -1;
        return (i-1)/2;
    }
    private int left(int i){
        return 2 * i + 1;
    }
    private int right(int i){
        return 2 * i + 2;
    }
    private boolean hasLeft(int i){
        return this.left(i) < nodes.size();
    }
    private boolean hasRight(int i){
        return this.right(i) < nodes.size();
    }
    private boolean isLeaf(int i){
        return !this.hasLeft(i) && !this.hasRight(i);
    }
    private boolean isRoot(int i){
        return this.parent(i) == -1;
    }
    @Override
    public void insert(Integer value) {
        this.nodes.add(value);
        if(this.nodes.size() == 1) return;
        this.shiftUp(this.nodes.size()-1);
    }
    @Override
    public boolean contains(Integer value){
        return this.nodes.contains(value);
    }
    public int pop(){
        if(this.nodes.size() == 0) return Integer.MAX_VALUE;
        int nodeToPop = this.nodes.get(0);
        if(this.nodes.size() == 1){
            this.nodes.remove(0);
            return nodeToPop;
        }
        Collections.swap(this.nodes,this.nodes.size()-1,0);
        this.nodes.remove(this.nodes.size() - 1);
        this.shiftDown(0);
        return nodeToPop;
    }
    private void shiftUp(int curIndex){
        if(this.isRoot(curIndex))return;
        int parentIndex = this.parent(curIndex);
        int parentVal = this.nodes.get(parentIndex);
        if(this.nodes.get(curIndex) > parentVal){
            Collections.swap(this.nodes,curIndex,parentIndex);
            this.shiftUp(parentIndex);
        }
    }
    private void shiftDown(int curIndex){
        if(this.isLeaf(curIndex)) return;
        int largest = curIndex;
        int compareIndex = this.left(curIndex);
        if(compareIndex < this.nodes.size() && this.nodes.get(largest) < this.nodes.get(compareIndex)){
            largest = compareIndex;
        }
        compareIndex = this.right(curIndex);
        if(compareIndex < this.nodes.size() && this.nodes.get(largest) < this.nodes.get(compareIndex)){
            largest = compareIndex;
        }
        if(largest != curIndex){
            Collections.swap(this.nodes,largest,curIndex);
            this.shiftDown(largest);
        }
    }
}