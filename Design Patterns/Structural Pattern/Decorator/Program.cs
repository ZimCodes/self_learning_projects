using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Decorator
{
    class Program
    {
        static void Main(string[] args)
        {
            string input;
            Sandwich sandwich;
            while (true)
            {
                Console.WriteLine("Welcome to the sandwich cafe! What would you like to order?(sub/burger)");
                input = Console.ReadLine();
                Console.WriteLine("What would you like to put on the sandwich?(bacon/cheese/none)");
                input += " "+ Console.ReadLine();
                switch (input.ToLower())
                {
                    case "sub bacon":
                        sandwich = new Bacon(new Sandwich());
                        Console.WriteLine(string.Format("You ordered {0}", sandwich.getDesc()));
                        Console.WriteLine(string.Format("Your total cost is ${0}", sandwich.Cost()));
                        break;
                    case "sub cheese":
                        sandwich = new Cheese(new Submarine());
                        Console.WriteLine(string.Format("You ordered {0}", sandwich.getDesc()));
                        Console.WriteLine(string.Format("Your total cost is ${0}", sandwich.Cost()));
                        break;
                    case"sub none":
                        sandwich = new Submarine();
                        Console.WriteLine(string.Format("You ordered {0}", sandwich.getDesc()));
                        Console.WriteLine(string.Format("Your total cost is ${0}", sandwich.Cost()));
                        break;
                    case "burger bacon":
                        sandwich = new Bacon(new Burger());
                        Console.WriteLine(string.Format("You ordered {0}", sandwich.getDesc()));
                        Console.WriteLine(string.Format("Your total cost is ${0}", sandwich.Cost()));
                        break;
                    case "burger cheese":
                        sandwich = new Cheese(new Burger());
                        Console.WriteLine(string.Format("You ordered {0}", sandwich.getDesc()));
                        Console.WriteLine(string.Format("Your total cost is ${0}", sandwich.Cost()));
                        break;
                    case "burger none":
                        sandwich = new Burger();
                        Console.WriteLine(string.Format("You ordered {0}", sandwich.getDesc()));
                        Console.WriteLine(string.Format("Your total cost is ${0}",sandwich.Cost()));
                        break;
                    default:
                        Console.WriteLine("Sorry, we do not serve that here.");
                        break;
                }
                Console.WriteLine("\nPress any key to retry.");
                Console.ReadKey();
                Console.Clear();
            }
        }
    }
}
