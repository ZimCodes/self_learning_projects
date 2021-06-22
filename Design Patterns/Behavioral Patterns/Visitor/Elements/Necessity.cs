using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Visitor
{
    class Necessity : IElement
    {
        public float price { get; private set; }
        public Necessity(float cost)
        {
            price = cost;
        }
        public float accept(IVisitor visitor)
        {
            //The visitor pattern allows you to add methods of a different type without altering the class
            //Below is an example
            return visitor.visit(this);
        }
    }
}
