package graph;
import java.util.ArrayList;
import java.util.List;
public abstract class Graph<T> implements IGraph<T> {
    protected final List<INode<T>> visited;
    public Graph(){
        this.visited = new ArrayList<>();
    }
    public Graph(List<INode<T>> newList){
        this.visited = newList;
    }
    @Override
    public void explore(INode<T> start){
        this.Reinitialize();
        this.Exploring(start);
    }
    protected abstract void Exploring(INode<T> node);
    protected void Reinitialize(){
        this.visited.clear();
    }
}