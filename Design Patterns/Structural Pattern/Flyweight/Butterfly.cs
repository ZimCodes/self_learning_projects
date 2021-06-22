using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Flyweight
{
    class Butterfly : Insect
    {
        public Butterfly(string color) : base(color)
        {
        }

        protected override bool canMetamorphosize()
        {
            return true;
        }
        protected override string Move()
        {
            return "Flying";
        }
        
    }
}
