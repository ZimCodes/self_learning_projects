using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Decorator
{
    class Burger : Sandwich
    {
        public override int Cost()
        {
            return 3;
        }
        public override string getDesc()
        {
            return "A Burger";
        }
    }
}
