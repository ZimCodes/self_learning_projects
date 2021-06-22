using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Decorator
{
    class Decorator:Sandwich
    {
        public Sandwich sandwich;
        public Decorator(Sandwich sandwich)
        {
            this.sandwich = sandwich;
        }

        public override string getDesc()
        {
            return base.getDesc();
        }
    }
}
