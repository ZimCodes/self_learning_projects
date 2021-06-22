using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Visitor
{
    class Tobacco : IElement
    {
        public float price { get; private set; }
        public Tobacco(float cost)
        {
            price = cost;
        }
        public float accept(IVisitor visitor)
        {
            return visitor.visit(this);
        }
    }
}
