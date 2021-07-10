package example;

import graph.INode;
import graph.Node;
import graph.dijkstra.DijkstraGraph;
import java.util.List;

public class DijkstraEx implements IExample,Runnable{

    @Override
    public void run() {
        IExample.readTitle("Dijkstra Search");
        Node<Character> a = new Node<>('a');
        Node<Character> b = new Node<>('b');
        Node<Character> c = new Node<>('c');
        Node<Character> d = new Node<>('d');
        Node<Character> e = new Node<>('e');

        a.setNeighbor(d, 1.0f);
        a.setNeighbor(b, 3.0f);

        b.setNeighbor(a, 3.0f);
        b.setNeighbor(d, 4.0f);
        b.setNeighbor(e, 5.0f);
        b.setNeighbor(c, 5.0f);

        c.setNeighbor(b, 5.0f);
        c.setNeighbor(e, 9.0f);

        d.setNeighbor(e, 1.0f);
        d.setNeighbor(b, 4.0f);
        d.setNeighbor(a, 1.0f);

        e.setNeighbor(c, 9.0f);
        e.setNeighbor(b, 5.0f);
        e.setNeighbor(d, 1.0f);
        DijkstraGraph<Character> graph = new DijkstraGraph<>();
        graph.explore(a);
        List<INode<Character>> result = graph.getPath(d,c);
        for(INode<Character> node: result){
            System.out.print(node.getValue() + ", ");
        }
        System.out.println();
    }
}