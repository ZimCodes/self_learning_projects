package graph.breadthfirst;

import graph.Edge;
import graph.Graph;
import graph.INode;

import java.util.HashMap;
import java.util.Map;
import java.util.List;
import java.util.Queue;
import java.util.concurrent.LinkedBlockingQueue;

public class BreadthFirstGraph<T> extends Graph<T> {
    private final Map<INode<T>,Boolean> hasVisited;
    private final Queue<INode<T>> queue;
    public BreadthFirstGraph(){
        this.hasVisited = new HashMap<>();
        this.queue = new LinkedBlockingQueue<>();
    }
    public BreadthFirstGraph(Map<INode<T>,Boolean> map,Queue<INode<T>> queue){
        this.hasVisited = map;
        this.queue = queue;
    }
    @Override
    protected void Exploring(INode<T> node) {
        this.queue.add(node);
        while(!this.queue.isEmpty()){
            INode<T> curNode = this.queue.poll();
            if(!this.hasVisited.containsKey(curNode)){
                for(Edge<T> neighbor: curNode.getNeighbors()){
                    this.queue.add(neighbor.to());
                }
                this.hasVisited.put(curNode,Boolean.TRUE);
                this.visited.add(curNode);
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