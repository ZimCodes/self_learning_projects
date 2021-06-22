using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Decorator
{
    class Submarine : Sandwich
    {
        public override int Cost()
        {
            return 5;
        }
        public override string getDesc()
        {
            return "A Submarine sandwich";
        }
    }
}
