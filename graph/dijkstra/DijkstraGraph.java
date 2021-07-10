package graph.dijkstra;

import graph.Edge;
import graph.Graph;
import graph.INode;

import java.util.*;

public class DijkstraGraph<T> extends Graph<T> {
    private final Map<INode<T>,Float> costSoFar;
    private final Map<INode<T>,INode<T>> cameFrom;
    private final PriorityQueue<Edge<T>> queue;
    public DijkstraGraph(){
        super();
        this.costSoFar = new HashMap<>();
        this.cameFrom = new HashMap<>();
        this.queue = new PriorityQueue<>();
    }
    public DijkstraGraph(List<INode<T>> newList, Map<INode<T>, Float> costSoFar, Map<INode<T>,INode<T>> cameFrom, PriorityQueue<Edge<T>> queue){
        super(newList);
        this.costSoFar = costSoFar;
        this.cameFrom = cameFrom;
        this.queue = queue;
    }
    @Override
    protected void Exploring(INode<T> node) {
        this.queue.add(new Edge<T>(node,0));
        this.costSoFar.put(node,0f);
        this.cameFrom.put(node,null);
        while(!this.queue.isEmpty()){
            INode<T> curNode = this.queue.poll().to();
            for(Edge<T> neighbor:curNode.getNeighbors()){
                float newCost = this.costSoFar.get(node) + neighbor.cost();
                if(!this.costSoFar.containsKey(neighbor.to()) || newCost < this.costSoFar.get(neighbor.to())){
                    this.costSoFar.put(neighbor.to(),newCost);
                    this.cameFrom.put(neighbor.to(),curNode);
                    this.queue.add(neighbor);
                }
            }
        }
    }

    @Override
    protected void Reinitialize() {
        this.cameFrom.clear();
        this.costSoFar.clear();
        super.Reinitialize();
    }
    public List<INode<T>> getPath(INode<T> start,INode<T> target){
        if(!this.visited.isEmpty() && this.visited.get(0) == start){
            this.visited.clear();
        }
        INode<T> curNode = target;
        while(curNode != null && curNode != start){
            this.visited.add(curNode);
            curNode = this.cameFrom.get(curNode);
        }
        this.visited.add(start);
        Collections.reverse(this.visited);
        return this.visited;
    }
}