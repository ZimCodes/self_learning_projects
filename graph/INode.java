package graph;
import java.util.List;
public interface INode<T>{
    T getValue();
    List<Edge<T>> getNeighbors();
    void setNeighbor(INode<T> node);
    void setNeighbor(INode<T> node,float cost);
}