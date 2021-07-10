package graph;
import java.util.ArrayList;
import java.util.List;
public class Node<T> implements INode<T>{
    private final T value;
    private final List<Edge<T>> neighbors;
    public Node(T value) {
        this.value = value;
        this.neighbors = new ArrayList<>();
    }
    public Node(T value,List<Edge<T>> list){
        this.value = value;
        this.neighbors = list;
    }

    @Override
    public List<Edge<T>> getNeighbors() {
        return neighbors;
    }

    @Override
    public void setNeighbor(INode<T> node){
        Edge<T> neighbor = new Edge<>(node,0);
        this.neighbors.add(neighbor);
    }
    @Override
    public void setNeighbor(INode<T> node,float cost){
        Edge<T> neighbor = new Edge<>(node,cost);
        this.neighbors.add(neighbor);
    }

    public T getValue() {
        return value;
    }
}