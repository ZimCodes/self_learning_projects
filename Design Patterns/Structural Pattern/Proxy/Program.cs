using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Proxy
{
    class Program
    {
        static void Main(string[] args)
        {
            string input;
            while (true)
            {
                Console.WriteLine("Type a name of a book to get its page number.");
                input = Console.ReadLine();
                BookParserProxy proxy = new BookParserProxy(input);
                Console.WriteLine("Number of Pages:" + proxy.getNumPages());
                Console.ReadKey();
                Console.Clear();
            }
            
        }
    }
}
