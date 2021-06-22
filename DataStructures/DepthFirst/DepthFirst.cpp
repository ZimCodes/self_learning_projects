// DepthFirst.cpp : This file contains the 'main' function. Program execution begins and ends there.
//

#include <iostream>
#include "Graph.h"
int main()
{
    //Set Locations (Vertices)
    Node* a = new Node('a');
    Node* b = new Node('b');
    Node* c = new Node('c');
    Node* d = new Node('d');
    Node* e = new Node('e');
    Node* f = new Node('f');
    Node* g = new Node('g');
    Node* h = new Node('h');

    //Establish Routes (Edges)
    a->AddRoute(b);
    a->AddRoute(c);

    b->AddRoute(a);
    b->AddRoute(d);
    b->AddRoute(e);

    c->AddRoute(a);
    c->AddRoute(f);
    c->AddRoute(g);

    d->AddRoute(b);

    e->AddRoute(b);
    e->AddRoute(h);
    e->AddRoute(f);

    f->AddRoute(e);
    f->AddRoute(c);
    f->AddRoute(g);

    g->AddRoute(f);
    g->AddRoute(c);

    h->AddRoute(e);

    Graph* graph = new Graph();
    graph->StartExploring(a);
    std::vector<Node*> results = graph->GetPath();

    delete graph;
    graph = 0;
}
