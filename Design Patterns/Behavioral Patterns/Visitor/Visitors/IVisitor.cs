using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Visitor
{
    interface IVisitor
    {
        float visit(Liquor liquor);
        float visit(Tobacco tobacco);
        float visit(Necessity necessity);
    }
}
