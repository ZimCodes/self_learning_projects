// DijkstraSearch.cpp : This file contains the 'main' function. Program execution begins and ends there.
//

#include <iostream>
#include "Graph.h"
int main()
{
    Node* a = new Node('a');
    Node* b = new Node('b');
    Node* c = new Node('c');
    Node* d = new Node('d');
    Node* e = new Node('e');

    a->AddRoute(d, 1.0f);
    a->AddRoute(b, 3.0f);

    b->AddRoute(a, 3.0f);
    b->AddRoute(d, 4.0f);
    b->AddRoute(e, 5.0f);
    b->AddRoute(c, 5.0f);

    c->AddRoute(b, 5.0f);
    c->AddRoute(e, 9.0f);

    d->AddRoute(e, 1.0f);
    d->AddRoute(b, 4.0f);
    d->AddRoute(a, 1.0f);

    e->AddRoute(c, 9.0f);
    e->AddRoute(b, 5.0f);
    e->AddRoute(d, 1.0f);

    Graph* graph = new Graph();
    graph->Explore(a);
    std::vector<Node*> path = graph->GetPath(d, c);
    delete graph;
    graph = 0;
    return 0;
}
