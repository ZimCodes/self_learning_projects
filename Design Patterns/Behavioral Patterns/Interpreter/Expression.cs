using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Interpreter
{
    abstract class Expression
    {
        public abstract string gallons(double quantity);
        public abstract string quarts(double quantity);
        public abstract string pints(double quantity);
    }
}
