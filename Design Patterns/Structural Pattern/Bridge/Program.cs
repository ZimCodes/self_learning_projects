using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Bridge
{
    class Program
    {
        static void Main(string[] args)
        {
            string input;
            Shape shape;
            while (true)
            {
                Console.WriteLine("What color would you like to paint the triangle? (red/green)");
                input = Console.ReadLine();
                switch (input.ToLower())
                {
                    case "red":
                        shape = new Triangle(new RedAPI());
                        Console.WriteLine(shape.getShape());
                        break;
                    case"green":
                        shape = new Triangle(new GreenAPI());
                        Console.WriteLine(shape.getShape());
                        break;
                    default:
                        Console.WriteLine("Sorry, this color does not exist.");
                        break;
                }
                
                
            }
            
        }
    }
}
