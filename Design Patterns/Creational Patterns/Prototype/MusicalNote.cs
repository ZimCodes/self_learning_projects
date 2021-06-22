using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Prototype
{
    class MusicalNote:Graphic
    {
        public override void Draw()
        {
            Console.WriteLine("Drew Musical Note!");
        }
        public override Graphic Clone()
        {
            return this;
        }
    }
}
