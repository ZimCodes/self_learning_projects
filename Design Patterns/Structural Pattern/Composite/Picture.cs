using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Composite
{
    class Picture:Graphic
    {
        List<Graphic> graphics;

        public override void Draw()
        {
            foreach (Graphic g in graphics)
            {
                g.Draw();
            }
        }
        public override void Add(Graphic g)
        {
            graphics.Add(g);
        }
        public override void Remove(Graphic g)
        {
            graphics.Remove(g);
        }
        public override Graphic GetChild(int index)
        {
            return graphics[index];
        }
    }
}
