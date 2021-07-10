package example;
interface IExample{
    static void readTitle(String title){
        System.out.println("----"+title+"----");
    }
    static void readOutArray(int[] array){
        for(Integer num:array){
            System.out.print(num+", ");
        }
        System.out.println();
    }
    static void readIndex(int index){
        System.out.format("Index #%d%n",index);
    }
}