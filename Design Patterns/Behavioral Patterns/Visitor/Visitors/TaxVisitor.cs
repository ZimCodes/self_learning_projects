using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Visitor
{
    class TaxVisitor : IVisitor
    {
        public float visit(Liquor liquor)
        {
            Console.Write("Liquor Item: Price with tax ");
            return liquor.price + 10;
        }

        public float visit(Tobacco tobacco)
        {
            Console.Write("Tobacco Item: Price with tax ");
            return tobacco.price + 5;
        }

        public float visit(Necessity necessity)
        {
            Console.Write("Neccessity Item: Price with tax ");
            return necessity.price + 2;
        }
    }
}
