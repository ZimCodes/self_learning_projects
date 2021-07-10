package tree;

public class Tries implements ITree<String> {
    private TriesNode root;
    @Override
    public void insert(String word) {
        if(this.root == null){
            this.root = new TriesNode();
        }
        this.root.insert(word.toLowerCase(),0);
    }

    @Override
    public boolean contains(String word) {
        if(this.root == null) return false;
        return this.root.contains(word.toLowerCase(),0);
    }
}