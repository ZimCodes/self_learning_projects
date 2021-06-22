using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Interpreter
{
    class Quarts : Expression
    {
        public override string gallons(double quantity)
        {
            return (quantity * 0.25).ToString();
        }

        public override string pints(double quantity)
        {
            return (quantity * 2).ToString();
        }

        public override string quarts(double quantity)
        {
            return quantity.ToString();
        }
    }
}
