package graph.depthfirst;
import graph.Edge;
import graph.Graph;
import graph.INode;

import java.util.HashMap;
import java.util.List;
import java.util.Map;

public class DepthFirstGraph<T> extends Graph<T>{
    private final Map<INode<T>,Boolean> hasVisited;
    public DepthFirstGraph(){
        super();
        this.hasVisited = new HashMap<>();
    }
    public DepthFirstGraph(List<INode<T>> list,Map<INode<T>,Boolean> map){
        super(list);
        this.hasVisited = map;
    }
    @Override
    protected void Exploring(INode<T> node){
        for(Edge<T> neighbor: node.getNeighbors()){
            if(!this.hasVisited.containsKey(neighbor.to())){
                this.hasVisited.put(neighbor.to(),Boolean.TRUE);
                this.visited.add(neighbor.to());
                this.Exploring(neighbor.to());
            }
        }
    }
    @Override
    protected void Reinitialize() {
        this.hasVisited.clear();
        super.Reinitialize();
    }
    public List<INode<T>> getPath(){
        return this.visited;
    }
}