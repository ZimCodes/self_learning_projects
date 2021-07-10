package example;

import tree.Tries;

public class TriesEx implements IExample,Runnable{
    @Override
    public void run() {
        IExample.readTitle("Tries");
        Tries tries = new Tries();
        tries.insert("frost");
        tries.insert("grey");
        tries.insert("ham");
        tries.insert("hamburger");
        String word = "gr";
        System.out.format("Trie contains %s: %b%n",word,tries.contains(word));
    }
}