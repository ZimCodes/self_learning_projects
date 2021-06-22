using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Decorator
{
    class Cheese:Decorator
    {
        public Cheese(Sandwich sandwich) : base(sandwich)
        {
        }

        public override int Cost()
        {
            return sandwich.Cost() + 1;
        }
        public override string getDesc()
        {
            return string.Format("{0} with Cheese",sandwich.getDesc());
        }
    }
}
