using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Interpreter
{
    class Program
    {
        static void Main(string[] args)
        {
            int iteration = 0;
            Context interpreter = new Context();
            while (true)
            {
                
                if (iteration % 3 == 0)
                {
                    Console.ReadKey();
                    Console.Clear();
                    Console.WriteLine("What would you like to convert?(pints/quarts/gallons)");
                }
                try{
                    
                    Context.input = Console.ReadLine();
                    interpreter.InterpretConversion();
                    Console.WriteLine(interpreter.convertResponse);
                    iteration++;
                }
                catch (Exception e)
                {
                    Console.WriteLine("Follow format: (# FromConvert to ToConvert)");
                }
                

            }
            
        }
    }
}
