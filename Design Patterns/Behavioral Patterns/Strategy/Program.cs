using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Strategy
{
    class Program
    {
        static void Main(string[] args)
        {
            Duck duck;
            string input;
            while (true)
            {
                Console.WriteLine("Which type of quack would you like to attach to the duck?(normal/none/abnormal)");
                input = Console.ReadLine();
                switch (input.ToLower())
                {
                    case "abnormal":
                        duck = new Duck(new AbnormalQuack());
                        Console.WriteLine("The Duck says: " + duck.Quack());
                        break;
                    case "none":
                    case "silent":
                        duck = new Duck(new NoQuack());
                        Console.WriteLine("The Duck says: " + duck.Quack());
                        break;
                    case "normal":
                        duck = new Duck(new SimpleQuack());
                        Console.WriteLine("The Duck says: " + duck.Quack());
                        break;
                    default:
                        Console.WriteLine("Sorry, the quack you entered does not exist!");
                        break;
                }
                Console.ReadKey();
                Console.Clear();
            }
            
        }
    }
}
