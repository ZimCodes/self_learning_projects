using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ChainofResponsibility
{
    abstract class Chain
    {
        public abstract void setNextChain(Chain chain);
        public abstract void calculate(Number number);
    }
}
