using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ChainofResponsibility
{
    class Program
    {
        static void Main(string[] args)
        {
            Chain chainCalc1 = new addNumbers();
            Chain chainCalc2 = new subtractNumbers();
            Chain chainCalc3 = new MultiplyNumbers();
            Chain chainCalc4 = new DivideNumbers();

            chainCalc1.setNextChain(chainCalc2);
            chainCalc2.setNextChain(chainCalc3);
            chainCalc3.setNextChain(chainCalc4);

            Number request = new Number(1, 2, "Divide");
            chainCalc1.calculate(request);
            Console.ReadLine();
        }
    }
}
