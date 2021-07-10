package tree;
import java.util.HashMap;
import java.util.Map;

class TriesNode {
    private final Map<Character,TriesNode> letters;
    public TriesNode(){
        this.letters = new HashMap<>();
    }
    void insert(String word,int i){
        if(i >= word.length()){
            this.letters.put('*',null);
            return;
        }
        char letter = word.charAt(i);
        if(!this.letters.containsKey(letter)){
            this.letters.put(letter,new TriesNode());
        }
        this.letters.get(letter).insert(word,++i);
    }
    boolean contains(String word,int i){
        if(i >= word.length()) return true;
        char letter = word.charAt(i);
        if(this.letters.containsKey(letter)){
            return this.letters.get(letter).contains(word,++i);
        }
        return false;
    }
}