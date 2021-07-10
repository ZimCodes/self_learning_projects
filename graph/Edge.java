package graph;
public record Edge<T>(INode<T> to,float cost)implements Comparable<Edge<T>>{

    @Override
    public int compareTo(Edge<T> o) {
        return Float.compare(o.cost, this.cost);
    }
}