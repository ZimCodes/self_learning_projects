using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Visitor
{
    class Program
    {
        static void Main(string[] args)
        {
            IElement milk = new Necessity(3.75f);
            TaxVisitor visitor = new TaxVisitor();
            Console.WriteLine(milk.accept(visitor));
            Console.ReadLine();
            
        }
    }
}
