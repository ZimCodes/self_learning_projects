using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Prototype
{
    class Staff:Graphic
    {
        public override void Draw()
        {
            Console.WriteLine("Drawing Staff!");
        }
        public override Graphic Clone()
        {
            return this;
        }
    }
}
