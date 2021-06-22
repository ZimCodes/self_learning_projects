using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Iterator
{
    class Program
    {
        static void Main(string[] args)
        {
            Item apple = new Apple();
            Item sword = new Sword();
            IInventory<Item> handInventory = new HandInventory(apple,sword);
            IInventoryIterator<Item> iter = handInventory.GetIterator();
            Console.WriteLine("Current items in hand(Right-hand to Left-hand)");
            while (iter.IsDone())
            {
                Console.WriteLine(iter.Current().ToString());
                iter.Next();
            }
            Console.ReadLine();
        }
    }
}
