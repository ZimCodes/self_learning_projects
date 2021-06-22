using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Decorator
{
    class Bacon:Decorator
    {
        public Bacon(Sandwich sandwich) : base(sandwich)
        {
        }

        public override string getDesc()
        {
            return string.Format("{0} with Bacon", sandwich.getDesc());
        }
        public override int Cost()
        {
            return sandwich.Cost() + 2;
        }
    }
}
