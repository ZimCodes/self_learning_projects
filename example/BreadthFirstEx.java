package example;

import graph.INode;
import graph.Node;
import graph.breadthfirst.BreadthFirstGraph;

public class BreadthFirstEx implements IExample,Runnable{

    @Override
    public void run() {
        IExample.readTitle("Breadth-First Search");
        Node<Character> a = new Node<>('a');
        Node<Character> b = new Node<>('b');
        Node<Character> c = new Node<>('c');
        Node<Character> d = new Node<>('d');
        Node<Character> e = new Node<>('e');
        Node<Character> f = new Node<>('f');
        Node<Character> g = new Node<>('g');
        Node<Character> h = new Node<>('h');

        //Establish Routes (Edges)
        a.setNeighbor(b);
        a.setNeighbor(c);

        b.setNeighbor(a);
        b.setNeighbor(d);
        b.setNeighbor(e);

        c.setNeighbor(a);
        c.setNeighbor(f);
        c.setNeighbor(g);

        d.setNeighbor(b);

        e.setNeighbor(b);
        e.setNeighbor(h);
        e.setNeighbor(f);

        f.setNeighbor(e);
        f.setNeighbor(c);
        f.setNeighbor(g);

        g.setNeighbor(f);
        g.setNeighbor(c);

        h.setNeighbor(e);
        BreadthFirstGraph<Character> graph = new BreadthFirstGraph<>();
        graph.explore(a);
        for(INode<Character> node:graph.getPath()){
            System.out.print(node.getValue()+", ");
        }
        System.out.println();
    }
}