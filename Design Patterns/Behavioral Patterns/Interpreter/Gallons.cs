using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Interpreter
{
    class Gallons : Expression
    {
        public override string gallons(double quantity)
        {
            return  quantity.ToString();
        }

        public override string pints(double quantity)
        {
            return (quantity * 8).ToString();
        }

        public override string quarts(double quantity)
        {
            return (quantity * 4).ToString();
        }
    }
}
